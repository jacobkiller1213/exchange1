const filterCryptoOnly = (data) => {
    // Создаем копию данных
    let filteredData = JSON.parse(JSON.stringify(data));
    
    // Список фиатных паттернов (для определения фиатных валют)
    const fiatPatterns = [
        'RUB',
        'SBER',
        'Bank',
        'Card',
        'Банк',
        'MIR',
        'TCSB',
        'ROSB',
        'POSTB',
        'RSHB',
        'OPNB',
        'PSB',
        'RUSS',
        'GPB',
        'AVB',
        'RFB',
        'RNK',
        'СБП',
        'Visa',
        'Master'
    ];
    
    // Список известных криптовалют
    const cryptoPatterns = [
        'BTC',
        'ETH',
        'USDT',
        'USDC',
        'TON',
        'DOT',
        'SOL',
        'DAI',
        'ARB',
        'LTC',
        'BCH',
        'DASH',
        'ZEC',
        'XRP',
        'DOGE',
        'XMR',
        'ETC',
        'XLM',
        'TRX'
    ];

    const isCrypto = (currency) => {
        // Проверяем, является ли валюта криптовалютой
        const name = (currency.name || '').toUpperCase();
        const code = (currency.code || '').toUpperCase();
        const bestCode = (currency.best_code || '').toUpperCase();
        
        // Проверяем на фиатные паттерны
        if (fiatPatterns.some(pattern => 
            name.includes(pattern.toUpperCase()) || 
            code.includes(pattern.toUpperCase()) || 
            bestCode.includes(pattern.toUpperCase())
        )) {
            return false;
        }
        
        // Проверяем на крипто паттерны
        return cryptoPatterns.some(pattern => 
            name.includes(pattern) || 
            code.includes(pattern) || 
            bestCode.includes(pattern)
        );
    };
    
    // Фильтруем currencies
    if (filteredData.currencies) {
        filteredData.currencies = filteredData.currencies.filter(isCrypto);
    }
    
    // Фильтруем currenciesFrom
    if (filteredData.currenciesFrom) {
        filteredData.currenciesFrom = filteredData.currenciesFrom.map(group => ({
            ...group,
            list: group.list ? group.list.filter(item => {
                const currency = filteredData.currencies.find(c => c.id === item.currency_id);
                return currency && isCrypto(currency);
            }) : []
        })).filter(group => group.list.length > 0);
    }
    
    // Фильтруем currenciesTo
    if (filteredData.currenciesTo) {
        filteredData.currenciesTo = filteredData.currenciesTo.map(group => ({
            ...group,
            list: group.list ? group.list.filter(item => {
                const currency = filteredData.currencies.find(c => c.id === item.currency_id);
                return currency && isCrypto(currency);
            }) : []
        })).filter(group => group.list.length > 0);
    }
    
    return filteredData;
}

// Пример использования:
const fs = require('fs');

// Чтение JSON файла
const jsonString = fs.readFileSync('input.json', 'utf8');
const data = JSON.parse(jsonString);

// Фильтрация данных
const filteredData = filterCryptoOnly(data);

// Сохранение результата
console.log("Сохранено в output.json");
fs.writeFileSync('output.json', JSON.stringify(filteredData, null, 2));