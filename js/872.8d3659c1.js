"use strict";
(self["webpackChunkexhub_io"] = self["webpackChunkexhub_io"] || []).push([
  [872],
  {
    89: function (e, i) {
      i.Z = (e, i) => {
        const a = e.__vccOpts || e;
        for (const [t, l] of i) a[t] = l;
        return a;
      };
    },
    5830: function (e, i, a) {
      a.d(i, {
        Z: function () {
          return ui;
        },
      });
      var t = a(3396),
        l = a(4870),
        r = a(7139),
        s = a(9242),
        n = a.p + "img/error.ee0fee26.svg",
        o = a(3554),
        c = a(1519),
        d = a(5122),
        _ = a(2836),
        g = a(389),
        u = a(803),
        p = a(2245);
      const w = { class: "hidden" },
        m = { class: "hidden__header" },
        k = { class: "hidden__header-title" },
        h = { key: 0, class: "hidden__choose" },
        y = ["value", "name"],
        v = { class: "hidden__choose-link" },
        x = { class: "hidden__search" },
        f = ["placeholder", "value"],
        U = ["onClick"],
        S = ["src", "alt"],
        b = { class: "hidden__item-wrapper" },
        D = { class: "hidden__item-name" },
        z = { key: 0, class: "hidden__item-reserve" },
        F = { key: 1, class: "hidden__item-reserve" },
        C = { key: 0, class: "hidden__empty" },
        $ = ["onClick"],
        q = ["src", "alt"],
        T = { class: "hidden__item-wrapper" },
        L = { class: "hidden__item-name" },
        Y = { key: 0, class: "hidden__item-reserve" },
        Z = { key: 1, class: "hidden__item-reserve" };
      var H = {
        __name: "DropdownCurrencies",
        props: { keyField: String },
        emits: ["closeDropdown"],
        setup(e, { emit: i }) {
          const a = (0, o.x)(),
            n = (0, c.F)(),
            { keyField: d } = e,
            _ = i,
            u = (0, l.iH)([]),
            p = (0, l.iH)([]),
            H = (0, l.iH)(""),
            W = (0, l.iH)(!1),
            j = (0, l.iH)(null),
            P = (e, i) => {
              const a = i?.trim().toLowerCase();
              if (!a) return [];
              const t = e.flatMap((e) => e.currencies),
                l = new Map();
              return (
                t.forEach((e) => {
                  const i = e.localization?.ru?.name?.toLowerCase(),
                    t = e.localization?.en?.name?.toLowerCase(),
                    r = e.name?.toLowerCase(),
                    s = e.iso_code?.toLowerCase();
                  (i?.includes(a) ||
                    t?.includes(a) ||
                    r?.includes(a) ||
                    s?.includes(a)) &&
                    l.set(e.id, e);
                }),
                Array.from(l.values())
              );
            },
            R = (e) => {
              H.value = e.target.value;
              const i = ["currFrom", "currTo"];
              i.includes(d) &&
                ((W.value = "" !== H.value.trim()),
                W.value && (p.value = P(u.value, H.value)));
            },
            E = (0, t.Fl)({
              get() {
                return a.selectedCurrenciesGroups[d];
              },
              set(e) {
                a.selectedCurrenciesGroups[d] = e;
              },
            }),
            O = (e) => {
              null !== j.value && (j.value.scrollTop = 0),
                "currFrom" === e &&
                  (u.value = a.currencyData.currenciesSotringFrom),
                "currTo" === e &&
                  (u.value = a.currencyData.currenciesSortingTo);
            },
            I = (e) => {
              "Y" !== e.isDisabled &&
                (a.chooseCurrency(e, d, a.selectionDealType),
                a.resetValues(),
                a.resetErrors(),
                _("closeDropdown"));
            };
          return (
            (0, t.YP)(
              () => d,
              (e) => e && O(e),
              { immediate: !0 }
            ),
            (0, t.YP)(E, () => {
              (0, t.Y3)(() => {
                const e = j.value;
                e && (e.scrollTop = 0);
              });
            }),
            (i, o) => (
              (0, t.wg)(),
              (0, t.iD)("div", w, [
                (0, t._)("div", m, [
                  (0, t._)("h3", k, (0, r.zw)(i.$t("trade.dropdown_title")), 1),
                  (0, t._)(
                    "button",
                    {
                      class: "hidden__header-close",
                      type: "button",
                      onClick: o[0] || (o[0] = (e) => _("closeDropdown")),
                    },
                    [
                      (0, t.Wm)(g.Z, {
                        class: "icon-close",
                        height: "20px",
                        width: "20px",
                        name: "close",
                      }),
                    ]
                  ),
                ]),
                W.value
                  ? (0, t.kq)("", !0)
                  : ((0, t.wg)(),
                    (0, t.iD)("div", h, [
                      ((0, t.wg)(!0),
                      (0, t.iD)(
                        t.HY,
                        null,
                        (0, t.Ko)(
                          u.value,
                          (i) => (
                            (0, t.wg)(),
                            (0, t.iD)("label", null, [
                              (0, t.wy)(
                                (0, t._)(
                                  "input",
                                  {
                                    class: "radio",
                                    type: "radio",
                                    "onUpdate:modelValue":
                                      o[1] || (o[1] = (e) => (E.value = e)),
                                    value: i.group.id,
                                    name: `group-${e.keyField}`,
                                  },
                                  null,
                                  8,
                                  y
                                ),
                                [[s.G2, E.value, void 0, { trim: !0 }]]
                              ),
                              (0, t._)("div", v, [
                                (0, t._)(
                                  "span",
                                  null,
                                  (0, r.zw)(
                                    (0, l.SU)(n).setTranslationResult(i.group)
                                  ),
                                  1
                                ),
                              ]),
                            ])
                          )
                        ),
                        256
                      )),
                    ])),
                (0, t._)("div", x, [
                  (0, t._)(
                    "input",
                    {
                      type: "search",
                      class: "hidden__search-field",
                      placeholder: i.$t("trade.dropdown_search"),
                      value: H.value,
                      onInput: R,
                    },
                    null,
                    40,
                    f
                  ),
                ]),
                (0, t._)(
                  "div",
                  {
                    class: "hidden__list",
                    ref_key: "containerCurrencies",
                    ref: j,
                  },
                  [
                    W.value
                      ? ((0, t.wg)(),
                        (0, t.iD)(
                          t.HY,
                          { key: 0 },
                          [
                            ((0, t.wg)(!0),
                            (0, t.iD)(
                              t.HY,
                              null,
                              (0, t.Ko)(
                                p.value,
                                (s) => (
                                  (0, t.wg)(),
                                  (0, t.iD)(
                                    "div",
                                    {
                                      class: "hidden__item " + s.code,
                                      onClick: (e) => I(s),
                                    },
                                    [
                                      (0, t._)(
                                        "div",
                                        {
                                          class: (0, r.C_)([
                                            "hidden__item-row " + s.code,
                                            {
                                              active:
                                                (0, l.SU)(a).tradeFields[
                                                  e.keyField
                                                ].currency.id == s.id,
                                              disabled: "Y" == s.isDisabled,
                                            },
                                          ]),
                                        },
                                        [
                                          (0, t._)(
                                            "img",
                                            {
                                              class: "hidden__item-img",
                                              src: s.icon_url,
                                              alt: s.name,
                                            },
                                            null,
                                            8,
                                            S
                                          ),
                                          (0, t._)("div", b, [
                                            (0, t._)(
                                              "span",
                                              D,
                                              (0, r.zw)(
                                                (0, l.SU)(
                                                  n
                                                ).setTranslationResult(s)
                                              ),
                                              1
                                            ),
                                            "currTo" == e.keyField &&
                                            "Y" !== s.isDisabled
                                              ? ((0, t.wg)(),
                                                (0, t.iD)(
                                                  "span",
                                                  z,
                                                  (0, r.zw)(
                                                    i.$t("trade.fields.reserve")
                                                  ) +
                                                    " " +
                                                    (0, r.zw)(s.balance) +
                                                    " " +
                                                    (0, r.zw)(s.iso_code),
                                                  1
                                                ))
                                              : (0, t.kq)("", !0),
                                            "Y" === s.isDisabled
                                              ? ((0, t.wg)(),
                                                (0, t.iD)("span", F, [
                                                  (0, t.Wm)(g.Z, {
                                                    class: "icon-wait",
                                                    name: "disabled_icon",
                                                    width: "20",
                                                    height: "20",
                                                    view: "0 0 40 40",
                                                  }),
                                                  (0, t.Uk)(
                                                    " " +
                                                      (0, r.zw)(
                                                        i.$t(
                                                          "trade.dropdown_item_appear_later"
                                                        )
                                                      ),
                                                    1
                                                  ),
                                                ]))
                                              : (0, t.kq)("", !0),
                                            (0, l.SU)(a).tradeFields[e.keyField]
                                              .currency.id == s.id
                                              ? ((0, t.wg)(),
                                                (0, t.j4)(g.Z, {
                                                  key: 2,
                                                  class: "icon-checked",
                                                  name: "checked",
                                                  width: "16px",
                                                  height: "16px",
                                                }))
                                              : (0, t.kq)("", !0),
                                          ]),
                                        ],
                                        2
                                      ),
                                    ],
                                    8,
                                    U
                                  )
                                )
                              ),
                              256
                            )),
                            0 == p.value.length
                              ? ((0, t.wg)(),
                                (0, t.iD)(
                                  "div",
                                  C,
                                  (0, r.zw)(
                                    i.$t("trade.dropdown_item_not_found")
                                  ),
                                  1
                                ))
                              : (0, t.kq)("", !0),
                          ],
                          64
                        ))
                      : ((0, t.wg)(!0),
                        (0, t.iD)(
                          t.HY,
                          { key: 1 },
                          (0, t.Ko)(
                            u.value,
                            (s) => (
                              (0, t.wg)(),
                              (0, t.iD)(
                                t.HY,
                                null,
                                [
                                  s.group.id == E.value
                                    ? ((0, t.wg)(!0),
                                      (0, t.iD)(
                                        t.HY,
                                        { key: 0 },
                                        (0, t.Ko)(
                                          s.currencies,
                                          (s) => (
                                            (0, t.wg)(),
                                            (0, t.iD)(
                                              "div",
                                              {
                                                class: "hidden__item " + s.code,
                                                onClick: (e) => I(s),
                                              },
                                              [
                                                (0, t._)(
                                                  "div",
                                                  {
                                                    class: (0, r.C_)([
                                                      "hidden__item-row " + s.code,
                                                      {
                                                        active:
                                                          (0, l.SU)(a)
                                                            .tradeFields[
                                                            e.keyField
                                                          ].currency.id == s.id,
                                                        disabled:
                                                          "Y" == s.isDisabled,
                                                      },
                                                    ]),
                                                  },
                                                  [
                                                    (0, t._)(
                                                      "img",
                                                      {
                                                        class:
                                                          "hidden__item-img",
                                                        src: s.icon_url,
                                                        alt: s.name,
                                                      },
                                                      null,
                                                      8,
                                                      q
                                                    ),
                                                    (0, t._)("div", T, [
                                                      (0, t._)(
                                                        "span",
                                                        L,
                                                        (0, r.zw)(
                                                          (0, l.SU)(
                                                            n
                                                          ).setTranslationResult(
                                                            s
                                                          )
                                                        ),
                                                        1
                                                      ),
                                                      "currTo" == e.keyField &&
                                                      "Y" !== s.isDisabled
                                                        ? ((0, t.wg)(),
                                                          (0, t.iD)(
                                                            "span",
                                                            Y,
                                                            (0, r.zw)(
                                                              i.$t(
                                                                "trade.fields.reserve"
                                                              )
                                                            ) +
                                                              " " +
                                                              (0, r.zw)(
                                                                s.balance
                                                              ) +
                                                              " " +
                                                              (0, r.zw)(
                                                                s.iso_code
                                                              ),
                                                            1
                                                          ))
                                                        : (0, t.kq)("", !0),
                                                      "Y" === s.isDisabled
                                                        ? ((0, t.wg)(),
                                                          (0, t.iD)("span", Z, [
                                                            (0, t.Wm)(g.Z, {
                                                              class:
                                                                "icon-wait",
                                                              name: "disabled_icon",
                                                              width: "20",
                                                              height: "20",
                                                              view: "0 0 40 40",
                                                            }),
                                                            (0, t.Uk)(
                                                              " " +
                                                                (0, r.zw)(
                                                                  i.$t(
                                                                    "trade.dropdown_item_appear_later"
                                                                  )
                                                                ),
                                                              1
                                                            ),
                                                          ]))
                                                        : (0, t.kq)("", !0),
                                                      (0, l.SU)(a).tradeFields[
                                                        e.keyField
                                                      ].currency.id == s.id
                                                        ? ((0, t.wg)(),
                                                          (0, t.j4)(g.Z, {
                                                            key: 2,
                                                            class:
                                                              "icon-checked",
                                                            name: "checked",
                                                            width: "16px",
                                                            height: "16px",
                                                          }))
                                                        : (0, t.kq)("", !0),
                                                    ]),
                                                  ],
                                                  2
                                                ),
                                              ],
                                              8,
                                              $
                                            )
                                          )
                                        ),
                                        256
                                      ))
                                    : (0, t.kq)("", !0),
                                ],
                                64
                              )
                            )
                          ),
                          256
                        )),
                  ],
                  512
                ),
              ])
            )
          );
        },
      };
      const W = H;
      var j = W;
      const P = { key: 1, class: "exchange__fields-header-wrap" },
        R = { class: "exchange__fields-label" },
        E = { key: 0, class: "exchange__fields-info" },
        O = { key: 1, class: "exchange__fields-info" },
        I = ["placeholder"],
        M = { key: 2, class: "exchange__field-loader", src: _ },
        V = { key: 3, class: "error-field" },
        A = { key: 0 },
        B = { key: 1 },
        K = ["src", "alt"];
      var N = {
        __name: "CurrencyField",
        props: { field: Object, keyField: String },
        emits: ["showMoreFields"],
        setup(e, { emit: i }) {
          const a = e,
            n = i,
            {
              dropdownIsActive: _,
              container: w,
              openDropdownEvent: m,
              closeDropdownEvent: k,
            } = (0, p.x)(),
            h = (0, o.x)(),
            y = (0, c.F)(),
            v = () => {
              k(), h.reverseCurrencies();
            };
          return (
            (0, t.YP)(
              () => a.field.error,
              (e) => {
                e &&
                  w.value.scrollIntoView({
                    block: "start",
                    behavior: "smooth",
                  });
              }
            ),
            (i, a) => (
              (0, t.wg)(),
              (0, t.iD)(
                "div",
                {
                  class: (0, r.C_)([
                    "exchange__fields-item",
                    { error: e.field.error && !(0, l.SU)(h).isLoadingPage },
                  ]),
                  ref_key: "container",
                  ref: w,
                },
                [
                  (0, t._)(
                    "div",
                    {
                      class: (0, r.C_)([
                        "exchange__fields-header",
                        { "with-toggle": "currTo" == e.keyField },
                      ]),
                    },
                    [
                      (0, l.SU)(h).isLoadingPage
                        ? ((0, t.wg)(),
                          (0, t.j4)(u.Z, {
                            key: 0,
                            size: "7px",
                            gap: "0px",
                            borderRadius: "2px",
                            "max-size": "200px",
                            "min-size": "200px",
                          }))
                        : ((0, t.wg)(),
                          (0, t.iD)("div", P, [
                            (0, t._)(
                              "label",
                              R,
                              (0, r.zw)(i.$t(e.field.label)) +
                                " " +
                                (0, r.zw)(
                                  (0, l.SU)(y).setTranslationResult(
                                    e.field.currency
                                  )
                                ),
                              1
                            ),
                            "currTo" === e.keyField
                              ? ((0, t.wg)(),
                                (0, t.iD)(
                                  t.HY,
                                  { key: 0 },
                                  [
                                    "online" === (0, l.SU)(h).selectionDealType
                                      ? ((0, t.wg)(),
                                        (0, t.iD)(
                                          "div",
                                          E,
                                          (0, r.zw)(
                                            i.$t("trade.fields.reserve")
                                          ) +
                                            " " +
                                            (0, r.zw)(
                                              e.field.currency?.balance
                                            ) +
                                            " " +
                                            (0, r.zw)(
                                              e.field.currency?.iso_code
                                            ),
                                          1
                                        ))
                                      : ((0, t.wg)(),
                                        (0, t.iD)(
                                          "div",
                                          O,
                                          (0, r.zw)(
                                            i.$t("trade.fields.reserve")
                                          ) +
                                            " " +
                                            (0, r.zw)(
                                              (0, l.SU)(h).order.cashReserve
                                            ) +
                                            " " +
                                            (0, r.zw)(
                                              e.field.currency?.iso_code
                                            ),
                                          1
                                        )),
                                  ],
                                  64
                                ))
                              : (0, t.kq)("", !0),
                          ])),
                      "currTo" != e.keyField ||
                      "Y" != (0, l.SU)(h).reverseRateExists ||
                      (0, l.SU)(h).isCash
                        ? (0, t.kq)("", !0)
                        : ((0, t.wg)(),
                          (0, t.iD)(
                            "button",
                            {
                              key: 2,
                              type: "button",
                              class: "exchange__toggle",
                              onClick: v,
                            },
                            [
                              (0, t.Wm)(g.Z, {
                                name: "change_field",
                                width: "38px",
                                height: "38px",
                                class: "icon_toggle",
                              }),
                            ]
                          )),
                    ],
                    2
                  ),
                  (0, t._)(
                    "div",
                    {
                      class: (0, r.C_)([
                        "exchange__fields-wrap",
                        { active: null != (0, l.SU)(_) },
                      ]),
                    },
                    [
                      (0, l.SU)(h).isLoadingPage
                        ? ((0, t.wg)(),
                          (0, t.j4)(u.Z, {
                            key: 0,
                            size: "29px",
                            gap: "0px",
                            borderRadius: "2px",
                          }))
                        : (0, t.wy)(
                            ((0, t.wg)(),
                            (0, t.iD)(
                              "input",
                              {
                                key: 1,
                                type: "text",
                                class: "exchange__field",
                                placeholder: (0, l.SU)(h).placeholderCurrency(
                                  e.keyField
                                ),
                                "onUpdate:modelValue":
                                  a[0] || (a[0] = (i) => (e.field.value = i)),
                                onInput:
                                  a[1] ||
                                  (a[1] = (i) =>
                                    (0, l.SU)(h).setCurrencyValue(
                                      e.keyField,
                                      (0, l.SU)(h).selectionDealType,
                                      i
                                    )),
                                onFocus:
                                  a[2] ||
                                  (a[2] = (i) => (
                                    (0, l.SU)(d.Wt)(
                                      (0, l.SU)(h).tradeFields,
                                      e.keyField
                                    ),
                                    n("showMoreFields")
                                  )),
                              },
                              null,
                              40,
                              I
                            )),
                            [[s.nr, e.field.value, void 0, { trim: !0 }]]
                          ),
                      (0, l.SU)(h).isLoadingCalculate
                        ? ((0, t.wg)(), (0, t.iD)("img", M))
                        : (0, t.kq)("", !0),
                      e.field.error && !(0, l.SU)(h).isLoadingPage
                        ? ((0, t.wg)(),
                          (0, t.iD)("div", V, [
                            (0, l.SU)(y).displayError(e.field.error)
                              ? ((0, t.wg)(),
                                (0, t.iD)(
                                  "span",
                                  A,
                                  (0, r.zw)(i.$t(e.field.error)),
                                  1
                                ))
                              : ((0, t.wg)(),
                                (0, t.iD)(
                                  "span",
                                  B,
                                  (0, r.zw)(e.field.error),
                                  1
                                )),
                          ]))
                        : (0, t.kq)("", !0),
                      (0, t._)(
                        "button",
                        {
                          type: "button",
                          class: "exchange__valet",
                          onClick:
                            a[3] || (a[3] = (i) => (0, l.SU)(m)(e.keyField)),
                        },
                        [
                          (0, t._)(
                            "img",
                            {
                              class: "exchange__valet-img",
                              src: e.field.currency?.icon_url,
                              alt: e.field?.name,
                            },
                            null,
                            8,
                            K
                          ),
                          (0, t.Wm)(g.Z, {
                            name: "arr_form",
                            width: "12px",
                            height: "12px",
                            class: "icon-arrow",
                          }),
                        ]
                      ),
                    ],
                    2
                  ),
                  (0, l.SU)(_) && !(0, l.SU)(h).isLoadingPage
                    ? ((0, t.wg)(),
                      (0, t.j4)(
                        j,
                        {
                          key: 0,
                          "key-field": e.keyField,
                          onCloseDropdown: (0, l.SU)(k),
                        },
                        null,
                        8,
                        ["key-field", "onCloseDropdown"]
                      ))
                    : (0, t.kq)("", !0),
                ],
                2
              )
            )
          );
        },
      };
      const G = N;
      var Q = G,
        J = a(7955),
        X = a(7692);
      const ee = { key: 1, class: "exchange__fields-header" },
        ie = { class: "exchange__fields-label" },
        ae = { key: 0, class: "exchange__fields-info" },
        te = ["type", "disabled"],
        le = { key: 0, class: "error-field" },
        re = { key: 0 },
        se = { key: 1 },
        ne = { key: 1, class: "exchange__valet isMemo" };
      var oe = {
        __name: "OrderField",
        props: { field: Object, keyField: String },
        setup(e) {
          const {
              phoneNumberDefinitionEvent: i,
              preventDeletionEvent: a,
              preventInvalidInputEvent: n,
            } = (0, J.R)(),
            _ = e,
            {
              dropdownIsActive: w,
              container: m,
              openDropdownEvent: k,
              closeDropdownEvent: h,
            } = (0, p.x)(),
            y = (0, o.x)(),
            v = (0, c.F)(),
            { t: x } = (0, X.QT)(),
            f = (0, t.Fl)(() =>
              ["walletFrom", "memo", "name", "contact", "phone"].includes(
                _.keyField
              )
                ? x(_.field.label)
                : _.field.label
            );
          return (
            (0, t.YP)(
              () => _.field.error,
              (e) => {
                e && m.value && m.value.scrollIntoView({ behavior: "smooth" });
              }
            ),
            (o, c) => (
              (0, t.wg)(),
              (0, t.iD)(
                "div",
                {
                  class: (0, r.C_)([
                    "exchange__fields-item",
                    { error: e.field.error },
                  ]),
                },
                [
                  (0, l.SU)(y).isLoadingPage
                    ? ((0, t.wg)(),
                      (0, t.j4)(u.Z, {
                        key: 0,
                        size: "7px",
                        gap: "0px 0px 10px 0px",
                        borderRadius: "2px",
                        "max-size": "200px",
                        "min-size": "200px",
                      }))
                    : ((0, t.wg)(),
                      (0, t.iD)("div", ee, [
                        (0, t._)("label", ie, (0, r.zw)(f.value), 1),
                        e.field.description
                          ? ((0, t.wg)(),
                            (0, t.iD)("div", ae, [
                              (0, t._)(
                                "span",
                                null,
                                (0, r.zw)(
                                  o.$t(e.field.description, { wallet: "QIWI" })
                                ),
                                1
                              ),
                            ]))
                          : (0, t.kq)("", !0),
                      ])),
                  (0, l.SU)(y).isLoadingPage
                    ? ((0, t.wg)(),
                      (0, t.j4)(u.Z, {
                        key: 2,
                        size: "29px",
                        borderRadius: "2px",
                        gap: "0px 0px 10px 0px",
                      }))
                    : ((0, t.wg)(),
                      (0, t.iD)(
                        "div",
                        {
                          key: 3,
                          class: "exchange__fields-wrap",
                          ref_key: "container",
                          ref: m,
                        },
                        [
                          (0, t.wy)(
                            (0, t._)(
                              "input",
                              {
                                class: "exchange__field",
                                "onUpdate:modelValue":
                                  c[0] || (c[0] = (i) => (e.field.value = i)),
                                type: e.field.type,
                                onInput:
                                  c[1] ||
                                  (c[1] = (a) => (
                                    (0, l.SU)(i)(a),
                                    (0, l.SU)(y).saveParamsInLocalStorage(
                                      a,
                                      e.keyField
                                    ),
                                    (0, l.SU)(y).handleCardFormatter(
                                      a,
                                      e.keyField
                                    )
                                  )),
                                onKeydown:
                                  c[2] ||
                                  (c[2] = (e) => (
                                    (0, l.SU)(a)(e), (0, l.SU)(n)(e)
                                  )),
                                onFocus:
                                  c[3] ||
                                  (c[3] = (i) =>
                                    (0, l.SU)(d.Wt)(
                                      (0, l.SU)(y).formOrder,
                                      e.keyField
                                    )),
                                disabled: e.field.noMemo,
                              },
                              null,
                              40,
                              te
                            ),
                            [[s.YZ, e.field.value, void 0, { trim: !0 }]]
                          ),
                          (0, t.Wm)(g.Z, { name: e.field.icon }, null, 8, [
                            "name",
                          ]),
                          e.field.error
                            ? ((0, t.wg)(),
                              (0, t.iD)("div", le, [
                                (0, l.SU)(v).displayError(e.field.error)
                                  ? ((0, t.wg)(),
                                    (0, t.iD)(
                                      "span",
                                      re,
                                      (0, r.zw)(o.$t(e.field.error)),
                                      1
                                    ))
                                  : ((0, t.wg)(),
                                    (0, t.iD)(
                                      "span",
                                      se,
                                      (0, r.zw)(e.field.error),
                                      1
                                    )),
                              ]))
                            : (0, t.kq)("", !0),
                          (0, l.SU)(y).memoTags.length && "memo" == e.keyField
                            ? ((0, t.wg)(),
                              (0, t.iD)("div", ne, [
                                (0, t._)(
                                  "span",
                                  null,
                                  (0, r.zw)(
                                    (0, l.SU)(y).formOrder.memo.tagType
                                  ),
                                  1
                                ),
                              ]))
                            : (0, t.kq)("", !0),
                        ],
                        512
                      )),
                ],
                2
              )
            )
          );
        },
      };
      const ce = oe;
      var de = ce,
        _e = a(4442),
        ge = a(5985);
      const ue = ["innerHTML"];
      var pe = {
        __name: "CourseNotification",
        props: { text: String, buyTime: String },
        emits: ["close"],
        setup(e, { emit: i }) {
          const a = (0, l.iH)(null);
          (0, ge.t)(a, () => {
            r("close");
          });
          const r = i;
          return (i, l) => (
            (0, t.wg)(),
            (0, t.iD)(
              "div",
              { class: "exchange__info-hide", ref_key: "container", ref: a },
              [
                (0, t._)(
                  "button",
                  {
                    class: "hide-close",
                    type: "button",
                    onClick: l[0] || (l[0] = (e) => r("close")),
                  },
                  [
                    (0, t.Wm)(g.Z, {
                      class: "icon-close",
                      name: "close",
                      viewBox: "0 0 20 20",
                      width: "12px",
                      height: "12px",
                    }),
                  ]
                ),
                (0, t._)(
                  "div",
                  {
                    class: "hide-text",
                    innerHTML: i.$t(e.text, { time: e.buyTime }),
                  },
                  null,
                  8,
                  ue
                ),
                (0, t.WI)(i.$slots, "link"),
              ],
              512
            )
          );
        },
      };
      const we = pe;
      var me = we;
      const ke = { class: "exchange__fields-attention" },
        he = { class: "attention__wrap" },
        ye = { class: "attention__title" },
        ve = { class: "attention__text" };
      var xe = {
        __name: "BaseAttention",
        props: {
          title: String,
          text: String,
          limit: String,
          comission: String,
        },
        setup(e) {
          return (i, a) => (
            (0, t.wg)(),
            (0, t.iD)("div", ke, [
              (0, t.Wm)(g.Z, {
                name: "warning",
                view: "0 0 33 33",
                width: "33px",
                height: "33px",
                class: "icon-attention",
              }),
              (0, t._)("div", he, [
                (0, t._)("div", ye, (0, r.zw)(i.$t(e.title)), 1),
                (0, t._)(
                  "div",
                  ve,
                  (0, r.zw)(
                    i.$t(e.text, { limit: e.limit, comission: e.comission })
                  ),
                  1
                ),
              ]),
            ])
          );
        },
      };
      const fe = xe;
      var Ue = fe;
      const Se = { class: "exchange__fields-notification" },
        be = { key: 0 },
        De = { key: 1 };
      var ze = {
        __name: "Warning",
        props: { title: String, text: String },
        setup(e) {
          return (i, a) => (
            (0, t.wg)(),
            (0, t.iD)("div", Se, [
              e.title
                ? ((0, t.wg)(), (0, t.iD)("strong", be, (0, r.zw)(e.title), 1))
                : (0, t.kq)("", !0),
              e.text
                ? ((0, t.wg)(), (0, t.iD)("p", De, (0, r.zw)(e.text), 1))
                : (0, t.kq)("", !0),
            ])
          );
        },
      };
      const Fe = ze;
      var Ce = Fe;
      const $e = { class: "present__form exchange", novalidate: "" },
        qe = { class: "exchange__main" },
        Te = { class: "exchange__choice" },
        Le = { key: 0, class: "exchange__error" },
        Ye = (0, t._)("img", { src: n, alt: "error" }, null, -1),
        Ze = { class: "exchange__error-title" },
        He = { key: 0, class: "exchange__error-text" },
        We = { class: "exchange__header" },
        je = { class: "exchange__title" },
        Pe = { key: 0, class: "exchange__header-info" },
        Re = { class: "exchange__info bright" },
        Ee = { class: "exchange__info-wrap" },
        Oe = { class: "exchange__info-option" },
        Ie = { class: "exchange__info-option" },
        Me = { class: "exchange__info-wrap" },
        Ve = { class: "exchange__info-text" },
        Ae = { class: "exchange__info-text" },
        Be = { class: "exchange__fields" },
        Ke = { key: 1, class: "exchange__fields-item" },
        Ne = { class: "exchange__fields-header" },
        Ge = { class: "exchange__fields-label" },
        Qe = { class: "exchange__fields-wrap" },
        Je = { disabled: "disabled", selected: "selected" },
        Xe = ["value"],
        ei = { class: "exchange__fields-hide" },
        ii = { key: 1, class: "exchange__agree --center" },
        ai = { class: "custom-checkbox" },
        ti = { class: "custom-text" },
        li = { key: 4, class: "exchange__fields-agree" },
        ri = { class: "custom-checkbox" },
        si = { class: "custom-text" },
        ni = { key: 5, class: "exchange__fields-agree" },
        oi = { key: 1, class: "exchange__agree" },
        ci = { class: "custom-text" },
        di = { key: 0, class: "exchange__footer-error" };
      var _i = {
        __name: "TradeForm",
        setup(e) {
          const i = (0, o.x)(),
            a = (0, c.F)(),
            n = (0, l.iH)(!1),
            _ = (0, l.iH)(!1),
            { t: p } = (0, X.QT)(),
            w = () => {
              a.setElementId("target-element");
            },
            m = () => {
              window.location.reload();
            },
            k = (0, t.Fl)(() =>
              p("trade.additionally_indicate_the_number", {
                bank: i.tradeFields.currTo.currency.name,
              })
            ),
            h = (0, t.Fl)(() =>
              i.currencyData.cities.map((e) => ({
                ...e,
                name: a.setTranslationResult(e, a.locale.value),
              }))
            ),
            y = () => {
            };
          return (
            (0, t.bv)(() => {
              i.resetValues();
            }),
            (e, o) => {
              const c = (0, t.up)("router-link"),
                p = (0, t.up)("i18n-t"),
                v = (0, t.up)("RouterLink");
              return (
                (0, t.wg)(),
                (0, t.iD)("form", $e, [
                  (0, t._)("div", qe, [
                    (0, t._)("div", Te, [
                      (0, l.SU)(i).isLoadingPage || (0, l.SU)(i).isLoadingTabs
                        ? ((0, t.wg)(),
                          (0, t.j4)(u.Z, {
                            key: 0,
                            size: "12px",
                            "border-radius": "2px",
                            gap: "0px",
                            maxSize: "250px",
                            "min-size": "200px",
                          }))
                        : ((0, t.wg)(),
                          (0, t.iD)(
                            t.HY,
                            { key: 1 },
                            [
                              (0, t.Wm)(
                                c,
                                {
                                  class: "exchange__choice-action",
                                  to: { name: "home" },
                                },
                                {
                                  default: (0, t.w5)(() => [
                                    (0, t.Uk)(
                                      (0, r.zw)(e.$t("trade.choice.online")),
                                      1
                                    ),
                                  ]),
                                  _: 1,
                                }
                              ),
                            
                            ],
                            64
                          )),
                    ]),
                    (0, l.SU)(a).inform.status
                      ? ((0, t.wg)(),
                        (0, t.iD)("div", Le, [
                          Ye,
                          (0, t._)(
                            "div",
                            Ze,
                            (0, r.zw)(e.$t((0, l.SU)(a).inform.text)),
                            1
                          ),
                          429 !== (0, l.SU)(a).inform.codeError
                            ? ((0, t.wg)(),
                              (0, t.iD)("div", He, [
                                (0, t.Wm)(
                                  p,
                                  {
                                    keypath: "trade.support.text",
                                    scope: "global",
                                  },
                                  {
                                    link: (0, t.w5)(() => [
                                      (0, t._)(
                                        "button",
                                        {
                                          class: "exchange__error-link",
                                          type: "button",
                                          onClick: y,
                                        },
                                        (0, r.zw)(e.$t("trade.support.link")),
                                        1
                                      ),
                                    ]),
                                    _: 1,
                                  }
                                ),
                              ]))
                            : ((0, t.wg)(),
                              (0, t.iD)(
                                "button",
                                {
                                  key: 1,
                                  type: "button",
                                  class: "exchange__error-action",
                                  onClick: m,
                                },
                                (0, r.zw)(e.$t("update_page")),
                                1
                              )),
                        ]))
                      : ((0, t.wg)(),
                        (0, t.iD)(
                          t.HY,
                          { key: 1 },
                          [
                            (0, t._)("div", We, [
                              (0, t._)(
                                "div",
                                je,
                                (0, r.zw)(e.$t("trade.form_title")),
                                1
                              ),
                              (0, l.SU)(i).isLoadingPage
                                ? ((0, t.wg)(),
                                  (0, t.j4)(u.Z, {
                                    key: 0,
                                    size: "8px",
                                    "border-radius": "2px",
                                    maxSize: "250px",
                                    gap: "0px",
                                  }))
                                : ((0, t.wg)(),
                                  (0, t.iD)(
                                    t.HY,
                                    { key: 1 },
                                    [
                                      (0, l.SU)(i).isVerification
                                        ? ((0, t.wg)(),
                                          (0, t.iD)(
                                            "div",
                                            Pe,
                                            (0, r.zw)(
                                              e.$t("trade.verification")
                                            ),
                                            1
                                          ))
                                        : (0, t.kq)("", !0),
                                    ],
                                    64
                                  )),
                            ]),
                            (0, t._)("div", Re, [
                              (0, l.SU)(i).isLoadingPage
                                ? ((0, t.wg)(),
                                  (0, t.j4)(u.Z, {
                                    key: 0,
                                    size: "35px",
                                    gap: "0px",
                                  }))
                                : ((0, t.wg)(),
                                  (0, t.iD)(
                                    t.HY,
                                    { key: 1 },
                                    [
                                      (0, t._)("div", Ee, [
                                        (0, t._)(
                                          "div",
                                          Oe,
                                          (0, r.zw)(
                                            (0, l.SU)(i).currentExchangeRate
                                          ),
                                          1
                                        ),
                                        (0, t._)(
                                          "div",
                                          Ie,
                                          (0, r.zw)((0, l.SU)(i)?.order?.timer),
                                          1
                                        ),
                                      ]),
                                      (0, t._)("div", Me, [
                                        (0, t._)("div", Ve, [
                                          (0, t.Uk)(
                                            (0, r.zw)(
                                              e.$t(
                                                (0, l.SU)(i).textNotification
                                                  .title
                                              )
                                            ) + " ",
                                            1
                                          ),
                                          (0, t._)(
                                            "button",
                                            {
                                              class: "exchange__info-text-more",
                                              type: "button",
                                              onClick:
                                                o[0] ||
                                                (o[0] = (e) =>
                                                  (n.value = !n.value)),
                                            },
                                            (0, r.zw)(
                                              e.$t("trade.rate_more_details")
                                            ),
                                            1
                                          ),
                                          n.value
                                            ? ((0, t.wg)(),
                                              (0, t.j4)(
                                                me,
                                                {
                                                  key: 0,
                                                  buyTime: (0, l.SU)(i)
                                                    .tradeFields.currFrom
                                                    .currency.buy_time,
                                                  text: (0, l.SU)(i)
                                                    .textNotification.text,
                                                  onClose:
                                                    o[1] ||
                                                    (o[1] = (e) =>
                                                      (n.value = !1)),
                                                },
                                                {
                                                  link: (0, t.w5)(() => [
                                                    (0, l.SU)(i).order
                                                      .forcedFloatingCourse
                                                      ? ((0, t.wg)(),
                                                        (0, t.j4)(
                                                          v,
                                                          {
                                                            key: 0,
                                                            to: {
                                                              name: "agreement",
                                                              hash: "#agreement-6-7",
                                                            },
                                                          },
                                                          {
                                                            default: (0, t.w5)(
                                                              () => [
                                                                (0, t.Uk)(
                                                                  (0, r.zw)(
                                                                    e.$t(
                                                                      "trade.rate_more_notification"
                                                                    )
                                                                  ),
                                                                  1
                                                                ),
                                                              ]
                                                            ),
                                                            _: 1,
                                                          }
                                                        ))
                                                      : ((0, t.wg)(),
                                                        (0, t.j4)(
                                                          v,
                                                          {
                                                            key: 1,
                                                            to: {
                                                              name: "agreement",
                                                              hash: "#agreement-6-5",
                                                            },
                                                          },
                                                          {
                                                            default: (0, t.w5)(
                                                              () => [
                                                                (0, t.Uk)(
                                                                  (0, r.zw)(
                                                                    e.$t(
                                                                      "trade.rate_more_notification"
                                                                    )
                                                                  ),
                                                                  1
                                                                ),
                                                              ]
                                                            ),
                                                            _: 1,
                                                          }
                                                        )),
                                                  ]),
                                                  _: 1,
                                                },
                                                8,
                                                ["buyTime", "text"]
                                              ))
                                            : (0, t.kq)("", !0),
                                        ]),
                                        (0, t._)(
                                          "div",
                                          Ae,
                                          (0, r.zw)(
                                            e.$t("trade.actual_exchange_rate")
                                          ),
                                          1
                                        ),
                                      ]),
                                      (0, l.SU)(i).isCash
                                        ? ((0, t.wg)(),
                                          (0, t.iD)(
                                            "button",
                                            {
                                              key: 0,
                                              type: "button",
                                              onClick: w,
                                              class: "exchange__info-link",
                                            },
                                            (0, r.zw)(
                                              e.$t("cash.instruction_link")
                                            ),
                                            1
                                          ))
                                        : (0, t.kq)("", !0),
                                    ],
                                    64
                                  )),
                            ]),
                            (0, t._)("div", Be, [
                              (0, l.SU)(i).isLoadingPage
                                ? ((0, t.wg)(),
                                  (0, t.j4)(u.Z, {
                                    key: 0,
                                    size: "29px",
                                    gap: "0px",
                                    borderRadius: "2px",
                                  }))
                                : (0, l.SU)(i).isCash &&
                                  !(0, l.SU)(i).isLoadingPage
                                ? ((0, t.wg)(),
                                  (0, t.iD)("div", Ke, [
                                    (0, t._)("div", Ne, [
                                      (0, t._)(
                                        "label",
                                        Ge,
                                        (0, r.zw)(e.$t("trade.select_city")),
                                        1
                                      ),
                                    ]),
                                    (0, t._)("div", Qe, [
                                      (0, t.wy)(
                                        (0, t._)(
                                          "select",
                                          {
                                            onChange:
                                              o[2] ||
                                              (o[2] = (...e) =>
                                                (0, l.SU)(i).selectCity &&
                                                (0, l.SU)(i).selectCity(...e)),
                                            class: "cash__select",
                                            "onUpdate:modelValue":
                                              o[3] ||
                                              (o[3] = (e) =>
                                                ((0, l.SU)(
                                                  i
                                                ).citiesField.value = e)),
                                          },
                                          [
                                            (0, t._)(
                                              "option",
                                              Je,
                                              (0, r.zw)(
                                                e.$t("trade.select_city")
                                              ),
                                              1
                                            ),
                                            ((0, t.wg)(!0),
                                            (0, t.iD)(
                                              t.HY,
                                              null,
                                              (0, t.Ko)(
                                                h.value,
                                                (e) => (
                                                  (0, t.wg)(),
                                                  (0, t.iD)(
                                                    "option",
                                                    {
                                                      key: e.code,
                                                      value: e.code,
                                                    },
                                                    (0, r.zw)(e.name),
                                                    9,
                                                    Xe
                                                  )
                                                )
                                              ),
                                              128
                                            )),
                                          ],
                                          544
                                        ),
                                        [[s.bM, (0, l.SU)(i).citiesField.value]]
                                      ),
                                      (0, t.Wm)(g.Z, {
                                        name: "arr_form",
                                        width: "12px",
                                        height: "12px",
                                        class: "icon-arrow-select",
                                      }),
                                    ]),
                                  ]))
                                : (0, t.kq)("", !0),
                              ((0, t.wg)(!0),
                              (0, t.iD)(
                                t.HY,
                                null,
                                (0, t.Ko)(
                                  (0, l.SU)(i).tradeFields,
                                  (e, a, r) => (
                                    (0, t.wg)(),
                                    (0, t.iD)(
                                      t.HY,
                                      { key: a },
                                      [
                                        (0, t.Wm)(
                                          Q,
                                          {
                                            field: e,
                                            keyField: a,
                                            onShowMoreFields:
                                              o[4] ||
                                              (o[4] = (e) => (_.value = !0)),
                                          },
                                          null,
                                          8,
                                          ["field", "keyField"]
                                        ),
                                        "currFrom" === a &&
                                        (0, l.SU)(i).isComission
                                          ? ((0, t.wg)(),
                                            (0, t.j4)(
                                              Ue,
                                              {
                                                key: 0,
                                                title: "trade.comission.title",
                                                text: "trade.comission.text",
                                                limit: (0, l.SU)(i)
                                                  .limitBeforeCommission,
                                                comission: (0, l.SU)(i)
                                                  .comission,
                                              },
                                              null,
                                              8,
                                              ["limit", "comission"]
                                            ))
                                          : (0, t.kq)("", !0),
                                      ],
                                      64
                                    )
                                  )
                                ),
                                128
                              )),
                              (0, l.SU)(i).isLoadingPage ||
                              "SBPRUB" !==
                                (0, l.SU)(i).tradeFields.currTo.currency
                                  .best_code
                                ? (0, t.kq)("", !0)
                                : ((0, t.wg)(),
                                  (0, t.j4)(
                                    _e.Z,
                                    {
                                      key: 2,
                                      banks: (0, l.SU)(i).currencyData
                                        .currenciesBanks,
                                    },
                                    null,
                                    8,
                                    ["banks"]
                                  )),
                              (0, t.wy)(
                                (0, t._)(
                                  "div",
                                  ei,
                                  [
                                    (0, l.SU)(i).order.amlWarningNotify &&
                                    !(0, l.SU)(i).isLoadingPage
                                      ? ((0, t.wg)(),
                                        (0, t.j4)(
                                          Ce,
                                          {
                                            key: 0,
                                            title: e.$t(
                                              "trade.aml_warning.title"
                                            ),
                                            text: e.$t(
                                              "trade.aml_warning.text"
                                            ),
                                          },
                                          null,
                                          8,
                                          ["title", "text"]
                                        ))
                                      : (0, t.kq)("", !0),
                                    "CARDRUB" !=
                                      (0, l.SU)(i).tradeFields.currTo.currency
                                        .best_code || (0, l.SU)(i).isLoadingPage
                                      ? (0, t.kq)("", !0)
                                      : ((0, t.wg)(),
                                        (0, t.j4)(
                                          Ce,
                                          { key: 1, text: e.$t("trade.visa") },
                                          null,
                                          8,
                                          ["text"]
                                        )),
                                    (0, l.SU)(i).order
                                      .canProvideAdditionalSbpRequisites &&
                                    !(0, l.SU)(i).isLoadingPage
                                      ? ((0, t.wg)(),
                                        (0, t.j4)(
                                          Ce,
                                          { key: 2, text: k.value },
                                          null,
                                          8,
                                          ["text"]
                                        ))
                                      : (0, t.kq)("", !0),
                                    ((0, t.wg)(!0),
                                    (0, t.iD)(
                                      t.HY,
                                      null,
                                      (0, t.Ko)(
                                        (0, l.SU)(i).formOrder,
                                        (a, n) => (
                                          (0, t.wg)(),
                                          (0, t.iD)(
                                            t.HY,
                                            { key: n },
                                            [
                                              a.isActive &&
                                              "aml_policy" !== n &&
                                              "noMemo" !== n &&
                                              "sbpBank" !== n
                                                ? ((0, t.wg)(),
                                                  (0, t.j4)(
                                                    de,
                                                    {
                                                      key: 0,
                                                      field: a,
                                                      keyField: n,
                                                    },
                                                    null,
                                                    8,
                                                    ["field", "keyField"]
                                                  ))
                                                : (0, t.kq)("", !0),
                                              "memo" === n && a.isActive
                                                ? ((0, t.wg)(),
                                                  (0, t.iD)("label", ii, [
                                                    (0, t.wy)(
                                                      (0, t._)(
                                                        "input",
                                                        {
                                                          type: "checkbox",
                                                          class: "checkbox",
                                                          "onUpdate:modelValue":
                                                            o[5] ||
                                                            (o[5] = (e) =>
                                                              ((0, l.SU)(
                                                                i
                                                              ).formOrder.memo.noMemo =
                                                                e)),
                                                        },
                                                        null,
                                                        512
                                                      ),
                                                      [
                                                        [
                                                          s.e8,
                                                          (0, l.SU)(i).formOrder
                                                            .memo.noMemo,
                                                        ],
                                                      ]
                                                    ),
                                                    (0, t._)("div", ai, [
                                                      (0, t.Wm)(g.Z, {
                                                        class: "icon-checked",
                                                        name: "checked",
                                                      }),
                                                    ]),
                                                    (0, t._)(
                                                      "div",
                                                      ti,
                                                      (0, r.zw)(
                                                        e.$t(
                                                          "trade.fields.memo.no_memo"
                                                        )
                                                      ),
                                                      1
                                                    ),
                                                  ]))
                                                : (0, t.kq)("", !0),
                                            ],
                                            64
                                          )
                                        )
                                      ),
                                      128
                                    )),
                                    (0, l.SU)(i).isLoadingPage ||
                                    "crypt2crypt" !== (0, l.SU)(i).order.type
                                      ? (0, t.kq)("", !0)
                                      : ((0, t.wg)(),
                                        (0, t.j4)(
                                          Ce,
                                          {
                                            key: 3,
                                            text: e.$t("trade.confirmation", {
                                              confirm: (0, l.SU)(i).tradeFields
                                                .currFrom.currency
                                                .confirmations,
                                            }),
                                          },
                                          null,
                                          8,
                                          ["text"]
                                        )),
                                    (0, l.SU)(i).order.amlWarning
                                      ? ((0, t.wg)(),
                                        (0, t.iD)("div", li, [
                                          (0, l.SU)(i).isLoadingPage
                                            ? ((0, t.wg)(),
                                              (0, t.j4)(u.Z, {
                                                key: 0,
                                                size: "29px",
                                                borderRadius: "2px",
                                                gap: "0px 0px 10px 0px",
                                              }))
                                            : ((0, t.wg)(),
                                              (0, t.iD)(
                                                "label",
                                                {
                                                  key: 1,
                                                  class: (0, r.C_)([
                                                    "exchange__agree",
                                                    {
                                                      error: (0, l.SU)(i)
                                                        .formOrder.aml_policy
                                                        .error,
                                                    },
                                                  ]),
                                                },
                                                [
                                                  (0, t.wy)(
                                                    (0, t._)(
                                                      "input",
                                                      {
                                                        type: "checkbox",
                                                        class: "checkbox",
                                                        onChange:
                                                          o[6] ||
                                                          (o[6] = (e) =>
                                                            (0, l.SU)(d.Wt)(
                                                              (0, l.SU)(i)
                                                                .formOrder,
                                                              "aml_policy"
                                                            )),
                                                        "onUpdate:modelValue":
                                                          o[7] ||
                                                          (o[7] = (e) =>
                                                            ((0, l.SU)(
                                                              i
                                                            ).formOrder.aml_policy.value =
                                                              e)),
                                                      },
                                                      null,
                                                      544
                                                    ),
                                                    [
                                                      [
                                                        s.e8,
                                                        (0, l.SU)(i).formOrder
                                                          .aml_policy.value,
                                                      ],
                                                    ]
                                                  ),
                                                  (0, t._)("div", ri, [
                                                    (0, t.Wm)(g.Z, {
                                                      class: "icon-checked",
                                                      name: "checked",
                                                    }),
                                                  ]),
                                                  (0, t._)("div", si, [
                                                    (0, t.Wm)(
                                                      p,
                                                      {
                                                        keypath:
                                                          "trade.aml_policy_agree",
                                                        scope: "global",
                                                      },
                                                      {
                                                        aml: (0, t.w5)(() => [
                                                          (0, t.Wm)(
                                                            c,
                                                            {
                                                              target: "_blank",
                                                              to: "/aml-agreement",
                                                            },
                                                            {
                                                              default: (0,
                                                              t.w5)(() => [
                                                                (0, t.Uk)(
                                                                  (0, r.zw)(
                                                                    e.$t(
                                                                      "trade.aml_policy_link"
                                                                    )
                                                                  ),
                                                                  1
                                                                ),
                                                              ]),
                                                              _: 1,
                                                            }
                                                          ),
                                                        ]),
                                                        user_agreement: (0,
                                                        t.w5)(() => [
                                                          (0, t.Wm)(
                                                            c,
                                                            {
                                                              target: "_blank",
                                                              to: "/agreement",
                                                            },
                                                            {
                                                              default: (0,
                                                              t.w5)(() => [
                                                                (0, t.Uk)(
                                                                  (0, r.zw)(
                                                                    e.$t(
                                                                      "trade.terms_of_service_link"
                                                                    )
                                                                  ),
                                                                  1
                                                                ),
                                                              ]),
                                                              _: 1,
                                                            }
                                                          ),
                                                        ]),
                                                        _: 1,
                                                      }
                                                    ),
                                                  ]),
                                                ],
                                                2
                                              )),
                                        ]))
                                      : (0, t.kq)("", !0),
                                    (0, l.SU)(i).isCash
                                      ? ((0, t.wg)(),
                                        (0, t.iD)("div", ni, [
                                          (0, l.SU)(i).isLoadingPage
                                            ? ((0, t.wg)(),
                                              (0, t.j4)(u.Z, {
                                                key: 0,
                                                size: "29px",
                                                borderRadius: "2px",
                                                gap: "0px 0px 10px 0px",
                                              }))
                                            : ((0, t.wg)(),
                                              (0, t.iD)("label", oi, [
                                                (0, t._)("div", ci, [
                                                  (0, t.Wm)(
                                                    p,
                                                    {
                                                      keypath:
                                                        "trade.cash_policy",
                                                      scope: "global",
                                                    },
                                                    {
                                                      policy: (0, t.w5)(() => [
                                                        (0, t.Wm)(
                                                          c,
                                                          {
                                                            target: "_blank",
                                                            to: "/agreement",
                                                          },
                                                          {
                                                            default: (0, t.w5)(
                                                              () => [
                                                                (0, t.Uk)(
                                                                  (0, r.zw)(
                                                                    e.$t(
                                                                      "trade.terms_of_service_link"
                                                                    )
                                                                  ),
                                                                  1
                                                                ),
                                                              ]
                                                            ),
                                                            _: 1,
                                                          }
                                                        ),
                                                      ]),
                                                      _: 1,
                                                    }
                                                  ),
                                                ]),
                                              ])),
                                        ]))
                                      : (0, t.kq)("", !0),
                                  ],
                                  512
                                ),
                                [[s.F8, _.value]]
                              ),
                            ]),
                            (0, t._)(
                              "div",
                              {
                                class: (0, r.C_)([
                                  "exchange__footer",
                                  { active: _.value },
                                ]),
                              },
                              [
                                (0, l.SU)(i).globalOrderError
                                  ? ((0, t.wg)(),
                                    (0, t.iD)(
                                      "div",
                                      di,
                                      (0, r.zw)(
                                        e.$t((0, l.SU)(i).globalOrderError)
                                      ),
                                      1
                                    ))
                                  : (0, t.kq)("", !0),
                                (0, l.SU)(i).isLoadingPage ||
                                (0, l.SU)(i).isLoading
                                  ? ((0, t.wg)(),
                                    (0, t.j4)(u.Z, {
                                      key: 1,
                                      "border-radius": "30px",
                                      size: "30px",
                                      gap: "0px",
                                    }))
                                  : ((0, t.wg)(),
                                    (0, t.iD)(
                                      "button",
                                      {
                                        key: 2,
                                        class: "exchange__action",
                                        onClick:
                                          o[8] ||
                                          (o[8] = (0, s.iM)(
                                            (e) =>
                                              (0, l.SU)(i).orderCreate(
                                                (0, l.SU)(i).selectionDealType
                                              ),
                                            ["prevent"]
                                          )),
                                        type: "submit",
                                      },
                                      [
                                        (0, l.SU)(i).isCash
                                          ? ((0, t.wg)(),
                                            (0, t.iD)(
                                              t.HY,
                                              { key: 0 },
                                              [
                                                (0, t.Uk)(
                                                  (0, r.zw)(
                                                    e.$t("trade.next_step")
                                                  ),
                                                  1
                                                ),
                                              ],
                                              64
                                            ))
                                          : ((0, t.wg)(),
                                            (0, t.iD)(
                                              t.HY,
                                              { key: 1 },
                                              [
                                                (0, t.Uk)(
                                                  (0, r.zw)(
                                                    e.$t("trade.action")
                                                  ),
                                                  1
                                                ),
                                              ],
                                              64
                                            )),
                                      ]
                                    )),
                              ],
                              2
                            ),
                          ],
                          64
                        )),
                  ]),
                ])
              );
            }
          );
        },
      };
      const gi = _i;
      var ui = gi;
    },
    5681: function (e, i, a) {
      a.d(i, {
        Z: function () {
          return u;
        },
      });
      var t = a(3396),
        l = a(7139);
      const r = { class: "renewal" },
        s = { class: "wrap" },
        n = { class: "renewal__title" },
        o = { class: "renewal__text" };
      function c(e, i) {
        return (
          (0, t.wg)(),
          (0, t.iD)("div", r, [
            (0, t._)("div", s, [
              (0, t._)("h1", n, (0, l.zw)(e.$t("update_site.title")), 1),
              (0, t._)("div", o, (0, l.zw)(e.$t("update_site.text")), 1),
            ]),
          ])
        );
      }
      var d = a(89);
      const _ = {},
        g = (0, d.Z)(_, [["render", c]]);
      var u = g;
    },
    2836: function (e, i, a) {
      e.exports = a.p + "img/preload.c5eba1d8.svg";
    },
  },
]);
