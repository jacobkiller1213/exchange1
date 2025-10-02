const fs = require('fs');
const path = require('path');

// Путь к файлу currencies.json
const filePath = 'C:\\openserver\\domains\\exchange\\api\\currencies.json';

try {
    // Чтение и парсинг JSON-файла
    const jsonData = JSON.parse(fs.readFileSync(filePath, 'utf8'));
    
    // Проверяем, есть ли в файле массив currencies
    if (jsonData.data && jsonData.data.currencies && Array.isArray(jsonData.data.currencies)) {
        // Извлекаем все коды валют
        const currencyCodes = jsonData.data.currencies.map(currency => {
            return {
                id: currency.id,
                code: currency.code,
                best_code: currency.best_code,
                name: currency.name,
                min_amount: 0,
                max_amount: 0
            };
        });
        
        // Выводим результаты в консоль
        console.log('Найдено валют:', currencyCodes.length);
        console.log('Коды валют:');
        currencyCodes.forEach(currency => {
            console.log(`ID: ${currency.id}, Код: ${currency.code}, Лучший код: ${currency.best_code}, Название: ${currency.name}`);
        });
        
        // Сохраняем результаты в отдельный файл
        fs.writeFileSync(
            path.join(__dirname, 'currency_codes.json'),
            JSON.stringify(currencyCodes, null, 2),
            'utf8'
        );
        
        console.log('\nРезультаты сохранены в файл currency_codes.json');
    } else if (jsonData.currencies && Array.isArray(jsonData.currencies)) {
        // Альтернативная структура JSON
        const currencyCodes = jsonData.currencies.map(currency => {
            return {
                id: currency.id,
                code: currency.code,
                best_code: currency.best_code,
                name: currency.name
            };
        });
        
        // Выводим результаты в консоль
        console.log('Найдено валют:', currencyCodes.length);
        console.log('Коды валют:');
        currencyCodes.forEach(currency => {
            console.log(`ID: ${currency.id}, Код: ${currency.code}, Лучший код: ${currency.best_code}, Название: ${currency.name}`);
        });
        
        // Сохраняем результаты в отдельный файл
        fs.writeFileSync(
            path.join(__dirname, 'currency_codes.json'),
            JSON.stringify(currencyCodes, null, 2),
            'utf8'
        );
        
        console.log('\nРезультаты сохранены в файл currency_codes.json');
    } else {
        console.error('Структура JSON-файла не соответствует ожидаемой. Не найден массив currencies.');
    }
} catch (error) {
    console.error('Произошла ошибка при обработке файла:', error.message);
}