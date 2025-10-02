"use strict";
(self["webpackChunkexhub_io"] = self["webpackChunkexhub_io"] || []).push([
  [243],
  {
    803: function (e, r, t) {
      t.d(r, {
        Z: function () {
          return n;
        },
      });
      var i = t(3396),
        s = t(7139),
        a = {
          __name: "BaseSkeleton",
          props: {
            size: String,
            gap: String,
            maxSize: String,
            minSize: String,
            posAbsolut: { type: Boolean, default: !1 },
            borderRadius: { type: String, default: "10px" },
          },
          setup(e) {
            return (r, t) => (
              (0, i.wg)(),
              (0, i.iD)(
                "div",
                {
                  class: (0, s.C_)([
                    "skeleton__block",
                    { absolute: e.posAbsolut },
                  ]),
                  style: (0, s.j5)({
                    "--size": e.size,
                    "--gap": e.gap,
                    "--max_size": e.maxSize,
                    "--min_size": e.minSize,
                    "--radius": e.borderRadius,
                  }),
                },
                null,
                6
              )
            );
          },
        };
      const l = a;
      var n = l;
    },
    1243: function (e, r, t) {
      t.r(r),
        t.d(r, {
          default: function () {
            return xr;
          },
        });
      var i = t(3396),
        s = t(4870),
        a = t(7139),
        l = t(9408),
        n = t(389);
      const o = { class: "confirm__modal" },
        c = (0, i._)("div", { class: "over" }, null, -1),
        d = { class: "confirm__modal-box" },
        _ = { class: "confirm__modal-title" },
        u = { class: "confirm__modal-wrap" },
        m = { class: "confirm__modal-field" },
        p = { class: "confirm__modal-label disabled" },
        g = { class: "confirm__field" },
        w = ["src"],
        f = { class: "confirm__modal-field" },
        v = { class: "confirm__modal-label disabled" },
        h = { class: "confirm__field" },
        y = { key: 0, class: "confirm__modal-over" },
        S = { class: "confirm__modal-field tag-field" },
        k = { class: "confirm__modal-label disabled" },
        z = { class: "confirm__field" },
        U = { class: "confirm__modal-field" },
        x = { class: "confirm__field" },
        b = { class: "confirm__modal-attention" },
        D = { key: 0 },
        C = { class: "confirm__modal-footer" };
      var T = {
        __name: "ConfirmTransactionDetails",
        props: {
          orderId: String,
          typeField: String,
          bestCode: String,
          details: Object,
        },
        setup(e) {
          const r = (0, l.u)(),
            t = e,
            T = (0, i.Fl)(() =>
              "fiat" === t.typeField && "sbprub" === t.bestCode
                ? "order.confirm.your_phone"
                : "fiat" === t.typeField
                ? "order.confirm.your_requisites"
                : "order.confirm.your_wallet"
            );
          return (t, l) => (
            (0, i.wg)(),
            (0, i.iD)("form", o, [
              c,
              (0, i._)("div", d, [
                (0, i._)(
                  "h4",
                  _,
                  (0, a.zw)(t.$t("order.confirm.title")) +
                    " " +
                    (0, a.zw)(e.orderId),
                  1
                ),
                (0, i._)("div", u, [
                  (0, i._)("div", m, [
                    (0, i._)(
                      "label",
                      p,
                      (0, a.zw)(t.$t("order.confirm.get")),
                      1
                    ),
                    (0, i._)("div", g, [
                      (0, i._)(
                        "span",
                        null,
                        (0, a.zw)((0, s.SU)(r).amountOfCurrencyToReceive),
                        1
                      ),
                      (0, i._)(
                        "img",
                        { src: (0, s.SU)(r).setupOrder.currTo?.icon },
                        null,
                        8,
                        w
                      ),
                    ]),
                  ]),
                  (0, i._)("div", f, [
                    (0, i._)("label", v, (0, a.zw)(t.$t(T.value)), 1),
                    (0, i._)("div", h, [
                      (0, i._)(
                        "span",
                        null,
                        (0, a.zw)(
                          (0, s.SU)(r).setupOrder.currTo?.walletFormatted
                        ),
                        1
                      ),
                      (0, i.Wm)(n.Z, { name: "purse" }),
                    ]),
                  ]),
                ]),
                (0, s.SU)(r).setupOrder.currTo?.tag
                  ? ((0, i.wg)(),
                    (0, i.iD)("div", y, [
                      (0, i._)("div", S, [
                        (0, i._)(
                          "label",
                          k,
                          (0, a.zw)(t.$t("order.confirm.tag")),
                          1
                        ),
                        (0, i._)(
                          "div",
                          z,
                          (0, a.zw)((0, s.SU)(r).setupOrder.currTo?.tag),
                          1
                        ),
                      ]),
                      (0, i._)("div", U, [
                        (0, i._)(
                          "div",
                          x,
                          (0, a.zw)(t.$t("order.confirm.memo")),
                          1
                        ),
                      ]),
                    ]))
                  : (0, i.kq)("", !0),
                (0, i._)("div", b, [
                  (0, i._)(
                    "strong",
                    null,
                    (0, a.zw)(t.$t("order.confirm.attention.title")),
                    1
                  ),
                  (0, i._)(
                    "p",
                    null,
                    (0, a.zw)(t.$t("order.confirm.attention.text")),
                    1
                  ),
                  e.details.showAttentionTelegramTrc20
                    ? ((0, i.wg)(),
                      (0, i.iD)(
                        "p",
                        D,
                        (0, a.zw)(t.$t("order.confirm.attention.telegram_trc")),
                        1
                      ))
                    : (0, i.kq)("", !0),
                ]),
                (0, i._)("div", C, [
                  (0, i._)(
                    "button",
                    {
                      class: "confirm__modal-action",
                      type: "button",
                      onClick:
                        l[0] || (l[0] = (e) => (0, s.SU)(r).orderConfirm("1")),
                    },
                    (0, a.zw)(t.$t("order.confirm.agree")),
                    1
                  ),
                  (0, i._)(
                    "button",
                    {
                      type: "button",
                      class: "confirm__modal-cancel",
                      onClick:
                        l[1] || (l[1] = (e) => (0, s.SU)(r).orderConfirm("0")),
                    },
                    [
                      (0, i.Wm)(n.Z, {
                        class: "icon-cancel",
                        width: "10px",
                        height: "10px",
                        name: "cancel",
                      }),
                      (0, i.Uk)(
                        " " + (0, a.zw)(t.$t("order.confirm.cancel")),
                        1
                      ),
                    ]
                  ),
                ]),
              ]),
            ])
          );
        },
      };
      const $ = T;
      var F = $;
      const H = { class: "inform__ex" },
        O = { class: "inform__ex-item" },
        L = { class: "inform__ex-name" },
        M = ["src"],
        Y = { class: "inform__ex-price" };
      var R = {
        __name: "OrderCurrenciesInfo",
        props: { currenciesInfo: Object },
        setup(e) {
          return (r, t) => (
            (0, i.wg)(),
            (0, i.iD)("div", H, [
              ((0, i.wg)(!0),
              (0, i.iD)(
                i.HY,
                null,
                (0, i.Ko)(
                  e.currenciesInfo,
                  (e, r) => (
                    (0, i.wg)(),
                    (0, i.iD)(
                      i.HY,
                      { key: r },
                      [
                        (0, i._)("div", O, [
                          (0, i._)("span", L, (0, a.zw)(e.name), 1),
                          (0, i._)(
                            "img",
                            {
                              class: "inform__ex-logo",
                              src: e.icon,
                              alt: "valet",
                            },
                            null,
                            8,
                            M
                          ),
                          (0, i._)("span", Y, (0, a.zw)(e.amount), 1),
                        ]),
                        "sourceCurrency" == r
                          ? ((0, i.wg)(),
                            (0, i.j4)(n.Z, {
                              key: 0,
                              class: "icon",
                              name: "arr_dwn_grey",
                              width: "10px",
                              height: "10px",
                              view: "0 0 14 8",
                            }))
                          : (0, i.kq)("", !0),
                      ],
                      64
                    )
                  )
                ),
                128
              )),
            ])
          );
        },
      };
      const I = R;
      var q = I;
      const W = { class: "order__info" },
        j = { class: "order__info-time" },
        Z = { class: "order__info-text" },
        A = (0, i._)("br", null, null, -1),
        P = { key: 2, class: "order__info-text" },
        E = (0, i._)("br", null, null, -1),
        B = (0, i._)("br", null, null, -1);
      var N = {
        __name: "CurrencyExchangeTimer",
        props: {
          initialTimer: String,
          currentTimer: String,
          course: String,
          confirmation: String,
          status: String,
          isFiatOrder: { type: Boolean, default: !1 },
        },
        setup(e) {
          return (r, t) => (
            (0, i.wg)(),
            (0, i.iD)("div", W, [
              "waiting_for_payout" === e.status
                ? ((0, i.wg)(), (0, i.iD)(i.HY, { key: 0 }, [], 64))
                : e.currentTimer
                ? ((0, i.wg)(),
                  (0, i.iD)(
                    i.HY,
                    { key: 1 },
                    [
                      (0, i._)("div", j, (0, a.zw)(e.currentTimer), 1),
                      (0, i._)("div", Z, [
                        (0, i._)(
                          "strong",
                          null,
                          (0, a.zw)(
                            r.$t("order.course.fixed.title", {
                              time: e.initialTimer,
                              course: e.course,
                            })
                          ),
                          1
                        ),
                        A,
                        e.isFiatOrder
                          ? ((0, i.wg)(),
                            (0, i.iD)(
                              i.HY,
                              { key: 0 },
                              [
                                (0, i.Uk)(
                                  (0, a.zw)(
                                    r.$t("order.course.fixed.fiat_text")
                                  ),
                                  1
                                ),
                              ],
                              64
                            ))
                          : ((0, i.wg)(),
                            (0, i.iD)(
                              i.HY,
                              { key: 1 },
                              [
                                (0, i.Uk)(
                                  (0, a.zw)(
                                    r.$t("order.course.fixed.text", {
                                      confirm: e.confirmation,
                                    })
                                  ),
                                  1
                                ),
                              ],
                              64
                            )),
                      ]),
                    ],
                    64
                  ))
                : ((0, i.wg)(),
                  (0, i.iD)("div", P, [
                    (0, i._)(
                      "strong",
                      null,
                      (0, a.zw)(r.$t("order.course.floating.title")),
                      1
                    ),
                    E,
                    (0, i.Uk)(
                      " " +
                        (0, a.zw)(
                          r.$t("order.course.floating.text", {
                            confirm: e.confirmation,
                          })
                        ) +
                        " ",
                      1
                    ),
                    B,
                    (0, i.Uk)(
                      " " + (0, a.zw)(r.$t("order.course.floating.use_bnb")),
                      1
                    ),
                  ])),
            ])
          );
        },
      };
      const K = N;
      var J = K,
        Q = t(803),
        V = t(9242),
        G = t(2836),
        X = t(6882),
        ee = t(7692),
        re = t(8524);
      const te = { class: "chat__header" },
        ie = { class: "chat__header-title" },
        se = { key: 0, class: "chat__main" },
        ae = { class: "chat__main-error" },
        le = { class: "my-message" },
        ne = { class: "my-message__field" },
        oe = { class: "my-message__text" },
        ce = { class: "my-message__name" },
        de = { class: "answers" },
        _e = ["onClick"],
        ue = { key: 0, class: "my-message" },
        me = { class: "my-message__field" },
        pe = ["innerHTML"],
        ge = ["href"],
        we = ["src", "alt"],
        fe = { class: "my-message__name" },
        ve = { key: 1, class: "user-message" },
        he = { class: "user-message__field" },
        ye = ["innerHTML"],
        Se = ["href"],
        ke = ["src", "alt"],
        ze = { class: "user-message__name" },
        Ue = { class: "chat__footer" },
        xe = { class: "chat__footer-box" },
        be = { for: "add-file", class: "chat__footer-add" },
        De = { class: "chat__footer-write js-chat-wrap" },
        Ce = ["placeholder"],
        Te = ["disabled"],
        $e = { class: "chat__footer-load" },
        Fe = { key: 0, src: G },
        He = {
          key: 0,
          class: "chat__footer-error",
          style: { color: "var(--alarm)" },
        };
      var Oe = {
        __name: "Chat",
        setup(e) {
          const { t: r } = (0, ee.QT)(),
            t = (0, s.iH)(null),
            l = (0, X.a)(),
            o = (0, re.u)(),
            c = (0, i.Fl)(() => l.messages),
            d = (0, i.Fl)(() => l.preparedMessages),
            _ = () => {
              const e = t.value;
              if (e) return e.scrollTop + e.clientHeight + 5 >= e.scrollHeight;
            },
            u = () => {
              _() &&
                ((document.title = r("title_pages.order")),
                (l.hasNewMessage = !1));
            },
            m = () => {
              const e = window.innerWidth >= 1024;
              (document.title = r("title_pages.order")),
                e &&
                  _() &&
                  l.chat.unreadMessagesNum > 0 &&
                  c.value.forEach((e) => {
                    "N" == e.isRead && l.chatSetRead(e.id);
                  });
            },
            p = (e) => {
              if ("Enter" === e.key)
                if (e.shiftKey) {
                  const r = e.target.selectionStart;
                  (l.сurrentСhatMessage.value =
                    l.сurrentСhatMessage.value.slice(0, r) +
                    "\n" +
                    l.сurrentСhatMessage.value.slice(r)),
                    (0, i.Y3)(() => {
                      (e.target.selectionStart = r + 0.5),
                        (e.target.selectionEnd = r + 0.5);
                    });
                } else e.preventDefault(), l.sendMessage();
            },
            g = () => {
              o.receiptPopupStates.isShow = !0;
            };
          return (
            window.addEventListener("scroll", m),
            (0, i.bv)(() => {
              window.addEventListener("focus", u);
            }),
            (0, i.Jd)(() => {
              window.removeEventListener("focus", u);
            }),
            (0, i.YP)(c, (e) => {
              (0, i.Y3)(() => {
                t.value &&
                  Object.keys(e).length > 0 &&
                  (t.value.scrollTop = t.value.scrollHeight);
              });
            }),
            (0, i.YP)(
              () => l.hasNewMessage,
              (e) => {
                document.title = r(
                  1 == e ? "title_pages.new_message" : "title_pages.order"
                );
              }
            ),
            (0, i.YP)(
              () => l.isChatOpen,
              (e) => {
                e &&
                  c.value.forEach((e) => {
                    "N" == e.isRead && l.chatSetRead(e.id);
                  });
              }
            ),
            (e, r) => (
              (0, i.wg)(),
              (0, i.iD)(
                "div",
                {
                  class: (0, a.C_)(["chat", { show: (0, s.SU)(l).isChatOpen }]),
                },
                [
                  (0, i._)("div", te, [
                    (0, i.Wm)(n.Z, {
                      class: "icon",
                      name: "chat",
                      width: "30",
                      height: "30",
                      view: "0 0 20 20",
                    }),
                    (0, i._)("div", ie, (0, a.zw)(e.$t("chat.title")), 1),
                    (0, i._)(
                      "button",
                      {
                        class: "chat__header-close",
                        onClick:
                          r[0] ||
                          (r[0] = (e) => ((0, s.SU)(l).isChatOpen = !1)),
                      },
                      [(0, i.Wm)(n.Z, { class: "icon", name: "close" })]
                    ),
                  ]),
                  (0, s.SU)(l).chatError.error
                    ? ((0, i.wg)(),
                      (0, i.iD)("div", se, [
                        (0, i._)(
                          "div",
                          ae,
                          (0, a.zw)(e.$t((0, s.SU)(l).chatError.error)),
                          1
                        ),
                      ]))
                    : ((0, i.wg)(),
                      (0, i.iD)(
                        i.HY,
                        { key: 1 },
                        [
                          (0, i._)(
                            "div",
                            {
                              class: "chat__main",
                              ref_key: "chatContainer",
                              ref: t,
                              onScroll: m,
                            },
                            [
                              (0, i._)("div", le, [
                                (0, i._)("div", ne, [
                                  (0, i._)(
                                    "div",
                                    oe,
                                    (0, a.zw)(e.$t("chat.first_message")),
                                    1
                                  ),
                                ]),
                                (0, i._)("div", ce, [
                                  (0, i._)(
                                    "span",
                                    null,
                                    "CoinFiber, " +
                                      (0, a.zw)(
                                        (0, s.SU)(l).chat.exchangeCreatedAt
                                      ),
                                    1
                                  ),
                                ]),
                              ]),
                              (0, i._)("div", de, [
                                ((0, i.wg)(!0),
                                (0, i.iD)(
                                  i.HY,
                                  null,
                                  (0, i.Ko)(
                                    d.value,
                                    (e) => (
                                      (0, i.wg)(),
                                      (0, i.iD)(
                                        "button",
                                        {
                                          class: "answers__link",
                                          onClick: (r) =>
                                            (0, s.SU)(l).sendMessage(e),
                                          type: "button",
                                        },
                                        (0, a.zw)(e.question),
                                        9,
                                        _e
                                      )
                                    )
                                  ),
                                  256
                                )),
                              ]),
                              ((0, i.wg)(!0),
                              (0, i.iD)(
                                i.HY,
                                null,
                                (0, i.Ko)(
                                  c.value,
                                  (r) => (
                                    (0, i.wg)(),
                                    (0, i.iD)(
                                      i.HY,
                                      null,
                                      [
                                        "admin" === r.user
                                          ? ((0, i.wg)(),
                                            (0, i.iD)("div", ue, [
                                              (0, i._)("div", me, [
                                                (0, i._)(
                                                  "div",
                                                  {
                                                    class: "my-message__text",
                                                    innerHTML: r.text,
                                                  },
                                                  null,
                                                  8,
                                                  pe
                                                ),
                                                "send_payment_receipt" ===
                                                r.type
                                                  ? ((0, i.wg)(),
                                                    (0, i.iD)(
                                                      "button",
                                                      {
                                                        key: 0,
                                                        class:
                                                          "my-message__open",
                                                        type: "button",
                                                        onClick: g,
                                                      },
                                                      (0, a.zw)(
                                                        e.$t("chat.link")
                                                      ),
                                                      1
                                                    ))
                                                  : (0, i.kq)("", !0),
                                                ((0, i.wg)(!0),
                                                (0, i.iD)(
                                                  i.HY,
                                                  null,
                                                  (0, i.Ko)(
                                                    r.files,
                                                    (e) => (
                                                      (0, i.wg)(),
                                                      (0, i.iD)(
                                                        "a",
                                                        {
                                                          target: "_blank",
                                                          href: e.url,
                                                        },
                                                        [
                                                          (0, i._)(
                                                            "img",
                                                            {
                                                              src: e.thumbUrl,
                                                              alt: e.originalName,
                                                            },
                                                            null,
                                                            8,
                                                            we
                                                          ),
                                                        ],
                                                        8,
                                                        ge
                                                      )
                                                    )
                                                  ),
                                                  256
                                                )),
                                              ]),
                                              (0, i._)("div", fe, [
                                                (0, i._)(
                                                  "span",
                                                  null,
                                                  " CoinFiber, " +
                                                    (0, a.zw)(r.createdAt),
                                                  1
                                                ),
                                              ]),
                                            ]))
                                          : ((0, i.wg)(),
                                            (0, i.iD)("div", ve, [
                                              (0, i._)("div", he, [
                                                (0, i._)(
                                                  "div",
                                                  {
                                                    class: "my-message__text",
                                                    innerHTML: r.text,
                                                  },
                                                  null,
                                                  8,
                                                  ye
                                                ),
                                                ((0, i.wg)(!0),
                                                (0, i.iD)(
                                                  i.HY,
                                                  null,
                                                  (0, i.Ko)(
                                                    r.files,
                                                    (e) => (
                                                      (0, i.wg)(),
                                                      (0, i.iD)(
                                                        "a",
                                                        { href: e.url },
                                                        [
                                                          (0, i._)(
                                                            "img",
                                                            {
                                                              src: e.thumbUrl,
                                                              alt: e.originalName,
                                                            },
                                                            null,
                                                            8,
                                                            ke
                                                          ),
                                                        ],
                                                        8,
                                                        Se
                                                      )
                                                    )
                                                  ),
                                                  256
                                                )),
                                              ]),
                                              (0, i._)("div", ze, [
                                                (0, i._)(
                                                  "span",
                                                  null,
                                                  (0, a.zw)(
                                                    e.$t("chat.user_name")
                                                  ) +
                                                    ", " +
                                                    (0, a.zw)(r.createdAt),
                                                  1
                                                ),
                                              ]),
                                            ])),
                                      ],
                                      64
                                    )
                                  )
                                ),
                                256
                              )),
                            ],
                            544
                          ),
                          (0, i._)("div", Ue, [
                            (0, i._)("div", xe, [
                              (0, i._)(
                                "input",
                                {
                                  id: "add-file",
                                  class: "file",
                                  type: "file",
                                  onChange:
                                    r[1] ||
                                    (r[1] = (...e) =>
                                      (0, s.SU)(l).handleFileUpload &&
                                      (0, s.SU)(l).handleFileUpload(...e)),
                                },
                                null,
                                32
                              ),
                              (0, i._)("label", be, [
                                (0, i.Wm)(n.Z, {
                                  class: "icon",
                                  name: "add",
                                  width: "12",
                                  height: "30",
                                }),
                              ]),
                              (0, i._)("div", De, [
                                (0, i.wy)(
                                  (0, i._)(
                                    "textarea",
                                    {
                                      class: "chat__footer-field js-chat-field",
                                      name: "message_field",
                                      placeholder: e.$t("chat.placeholder"),
                                      "onUpdate:modelValue":
                                        r[2] ||
                                        (r[2] = (e) =>
                                          ((0, s.SU)(
                                            l
                                          ).сurrentСhatMessage.value = e)),
                                      onKeydown: p,
                                    },
                                    null,
                                    40,
                                    Ce
                                  ),
                                  [
                                    [
                                      V.nr,
                                      (0, s.SU)(l).сurrentСhatMessage.value,
                                      void 0,
                                      { trim: !0 },
                                    ],
                                  ]
                                ),
                              ]),
                              (0, i._)(
                                "button",
                                {
                                  class: "chat__footer-action",
                                  onClick:
                                    r[3] ||
                                    (r[3] = (...e) =>
                                      (0, s.SU)(l).sendMessage &&
                                      (0, s.SU)(l).sendMessage(...e)),
                                  disabled: (0, s.SU)(l).chatLoadingImg,
                                },
                                [
                                  (0, i.Wm)(n.Z, {
                                    class: "icon",
                                    name: "send",
                                    width: "20",
                                    height: "20",
                                  }),
                                ],
                                8,
                                Te
                              ),
                            ]),
                            (0, i._)("div", $e, [
                              (0, s.SU)(l).chatLoadingImg
                                ? ((0, i.wg)(), (0, i.iD)("img", Fe))
                                : ((0, i.wg)(),
                                  (0, i.iD)(
                                    i.HY,
                                    { key: 1 },
                                    [
                                      (0, i.Uk)(
                                        (0, a.zw)(
                                          (0, s.SU)(l).сurrentСhatMessage
                                            .nameFile
                                        ),
                                        1
                                      ),
                                    ],
                                    64
                                  )),
                            ]),
                            (0, s.SU)(l).сurrentСhatMessage.error
                              ? ((0, i.wg)(),
                                (0, i.iD)(
                                  "div",
                                  He,
                                  (0, a.zw)(
                                    e.$t((0, s.SU)(l).сurrentСhatMessage.error)
                                  ),
                                  1
                                ))
                              : (0, i.kq)("", !0),
                          ]),
                        ],
                        64
                      )),
                ],
                2
              )
            )
          );
        },
      };
      const Le = Oe;
      var Me = Le,
        Ye = t(1519);
      const Re = { key: 0, class: "step__info" };
      var Ie = {
        __name: "StatusInformation",
        props: { status: String, template: String, text: String },
        setup(e) {
          const { status: r, template: t, text: s } = e,
            l = (0, i.Fl)(
              () => "outgoing_address_is_aml" === r && "RUBToCrypt" === t
            );
          return (r, t) =>
            l.value
              ? (0, i.kq)("", !0)
              : ((0, i.wg)(),
                (0, i.iD)("div", Re, [
                  (0, i._)("p", null, [
                    (0, i._)(
                      "strong",
                      null,
                      (0, a.zw)(r.$t("order.transaction_status")),
                      1
                    ),
                    (0, i.Uk)(" " + (0, a.zw)(e.text), 1),
                  ]),
                ]));
        },
      };
      const qe = Ie;
      var We = qe;
      const je = { class: "inner__title" },
        Ze = { class: "complete" },
        Ae = { class: "complete__info" },
        Pe = { class: "complete__info-title" },
        Ee = { key: 0 },
        Be = { key: 1 },
        Ne = { class: "complete__review" };
      var Ke = {
        __name: "OrderCancel",
        props: { isCryptFrom: Boolean, orderId: String },
        setup(e) {
          return (r, t) => {
            const s = (0, i.up)("RouterLink");
            return (
              (0, i.wg)(),
              (0, i.iD)(
                i.HY,
                null,
                [
                  (0, i._)(
                    "h1",
                    je,
                    (0, a.zw)(r.$t("order.canceled_title", { id: e.orderId })),
                    1
                  ),
                  (0, i._)("div", Ze, [
                    (0, i._)("div", Ae, [
                      (0, i._)("div", Pe, [
                        e.isCryptFrom
                          ? ((0, i.wg)(),
                            (0, i.iD)(
                              "p",
                              Ee,
                              (0, a.zw)(
                                r.$t("order.automatic_cancellation_crypto")
                              ),
                              1
                            ))
                          : ((0, i.wg)(),
                            (0, i.iD)(
                              "p",
                              Be,
                              (0, a.zw)(r.$t("order.automatic_cancellation")),
                              1
                            )),
                      ]),
                      (0, i._)("div", Ne, [
                        (0, i.Wm)(
                          s,
                          {
                            class: "complete__review-link",
                            to: { name: "home" },
                          },
                          {
                            default: (0, i.w5)(() => [
                              (0, i.Uk)(
                                (0, a.zw)(r.$t("order.create_new_exchange")),
                                1
                              ),
                            ]),
                            _: 1,
                          }
                        ),
                      ]),
                    ]),
                  ]),
                ],
                64
              )
            );
          };
        },
      };
      const Je = Ke;
      var Qe = Je;
      const Ve = { class: "inner__title" },
        Ge = { class: "complete --is-grid" },
        Xe = { class: "complete__info" },
        er = { class: "complete__info-title" },
        rr = { class: "complete__list" },
        tr = { key: 0 },
        ir = ["innerHTML"],
        sr = (0, i._)("br", null, null, -1),
        ar = ["innerHTML"],
        lr = { key: 0 };
      var nr = {
        __name: "OrderFreeze",
        props: {
          isAmlType: String,
          orderId: String,
          currencyFrom: Object,
          email: String,
        },
        setup(e) {
          return (r, t) => (
            (0, i.wg)(),
            (0, i.iD)(
              i.HY,
              null,
              [
                (0, i._)(
                  "h1",
                  Ve,
                  (0, a.zw)(r.$t("order.frozen_title", { id: e.orderId })),
                  1
                ),
                (0, i._)("div", Ge, [
                  (0, i._)("div", Xe, [
                    (0, i._)("div", er, [
                      (0, i._)(
                        "p",
                        null,
                        (0, a.zw)(
                          r.$t("order.frozen_details", {
                            amount: e.currencyFrom.amount,
                            isoCode: e.currencyFrom.isoCode,
                          })
                        ),
                        1
                      ),
                    ]),
                    (0, i._)("div", rr, [
                      "0" == e.isAmlType
                        ? ((0, i.wg)(),
                          (0, i.iD)(
                            i.HY,
                            { key: 0 },
                            [
                              (0, i.Uk)(
                                (0, a.zw)(r.$t("order.aml_check_fail")) + " ",
                                1
                              ),
                              "usdttrc20" === e.currencyFrom.bestCode
                                ? ((0, i.wg)(),
                                  (0, i.iD)(
                                    "p",
                                    tr,
                                    (0, a.zw)(r.$t("order.aml_usdt_trc20")),
                                    1
                                  ))
                                : (0, i.kq)("", !0),
                            ],
                            64
                          ))
                        : "1" === e.isAmlType
                        ? ((0, i.wg)(),
                          (0, i.iD)(
                            i.HY,
                            { key: 1 },
                            [
                              (0, i._)(
                                "p",
                                null,
                                (0, a.zw)(
                                  r.$t("order.verification_instructions")
                                ),
                                1
                              ),
                              (0, i._)("ul", null, [
                                (0, i._)(
                                  "li",
                                  null,
                                  (0, a.zw)(r.$t("order.question_platform")),
                                  1
                                ),
                                (0, i._)(
                                  "li",
                                  null,
                                  (0, a.zw)(
                                    r.$t("order.question_service_for_funds")
                                  ),
                                  1
                                ),
                                (0, i._)(
                                  "li",
                                  null,
                                  (0, a.zw)(
                                    r.$t("order.question_transaction_details")
                                  ),
                                  1
                                ),
                                (0, i._)(
                                  "li",
                                  null,
                                  (0, a.zw)(
                                    r.$t("order.question_contact_person")
                                  ),
                                  1
                                ),
                                (0, i._)(
                                  "li",
                                  null,
                                  (0, a.zw)(
                                    r.$t("order.question_proof_person")
                                  ),
                                  1
                                ),
                              ]),
                              (0, i._)(
                                "p",
                                null,
                                (0, a.zw)(
                                  r.$t("order.verification_instructions_2")
                                ),
                                1
                              ),
                              (0, i._)("ol", null, [
                                (0, i._)(
                                  "li",
                                  null,
                                  (0, a.zw)(
                                    r.$t("order.document_photo_requirement")
                                  ),
                                  1
                                ),
                                (0, i._)(
                                  "li",
                                  null,
                                  (0, a.zw)(r.$t("order.document_with_selfy")),
                                  1
                                ),
                              ]),
                              (0, i._)(
                                "p",
                                {
                                  innerHTML: r.$t(
                                    "order.document_send_by_email",
                                    { email: e.email }
                                  ),
                                },
                                null,
                                8,
                                ir
                              ),
                              sr,
                              (0, i._)(
                                "b",
                                null,
                                (0, a.zw)(
                                  r.$t("order.security_compliance_notice")
                                ),
                                1
                              ),
                            ],
                            64
                          ))
                        : "2" === e.isAmlType
                        ? ((0, i.wg)(),
                          (0, i.iD)(
                            i.HY,
                            { key: 2 },
                            [
                              (0, i._)(
                                "p",
                                {
                                  innerHTML: r.$t("order.aml_return_money", {
                                    email: e.email,
                                  }),
                                },
                                null,
                                8,
                                ar
                              ),
                              "usdttrc20" === e.currencyFrom.bestCode
                                ? ((0, i.wg)(),
                                  (0, i.iD)(
                                    "p",
                                    lr,
                                    (0, a.zw)(r.$t("order.aml_usdt_trc20")),
                                    1
                                  ))
                                : (0, i.kq)("", !0),
                            ],
                            64
                          ))
                        : (0, i.kq)("", !0),
                    ]),
                  ]),
                  (0, i.Wm)(Me),
                ]),
              ],
              64
            )
          );
        },
      };
      const or = nr;
      var cr = or,
        dr = t(2483);
      const _r = { class: "wrap" },
        ur = { key: 0, class: "order-preload" },
        mr = { key: "order-complete" },
        pr = { key: "order-cash" },
        gr = { key: "order-freeze" },
        wr = { key: "order-cancel" },
        fr = { key: "default" },
        vr = { class: "inner-page__title" },
        hr = { class: "inner-page__content" },
        yr = { class: "order" },
        Sr = { class: "chat-wrap" },
        kr = ["data-count"];
      var zr = {
        __name: "Order",
        setup(e) {
          const r = (0, X.a)();
          let n = (0, s.iH)(null);
          const o = (0, i.RC)(() =>
              Promise.all([t.e(90), t.e(845)]).then(t.bind(t, 650))
            ),
            c = (0, i.RC)(() =>
              Promise.all([t.e(90), t.e(853)]).then(t.bind(t, 8113))
            ),
            d = (0, i.RC)(() =>
              Promise.all([t.e(90), t.e(784), t.e(617)]).then(t.bind(t, 8042))
            ),
            _ = (0, i.RC)(() =>
              Promise.all([t.e(90), t.e(784), t.e(211)]).then(t.bind(t, 8428))
            ),
            u = (0, i.RC)(() =>
              Promise.all([t.e(90), t.e(784), t.e(902)]).then(t.bind(t, 190))
            ),
            m = (0, i.RC)(() =>
              Promise.all([t.e(90), t.e(784), t.e(882)]).then(t.bind(t, 2912))
            ),
            p = (0, i.RC)(() => t.e(233).then(t.bind(t, 8233))),
            g = (0, i.RC)(() => t.e(622).then(t.bind(t, 6622))),
            w = {
              CryptToRUB: o,
              CryptToCrypt: c,
              RUBToCrypt: d,
              RUBToPm: _,
              PmToRUB: u,
              KZTToCrypt: m,
              OrderComplete: g,
              Cash: p,
            },
            f = (0, Ye.F)();
          f.isCashPage = !1;
          const v = (0, i.Fl)(
              () =>
                "defective" === k.orderDetails.rawStatus ||
                "waiting_aml_refund" === k.orderDetails.rawStatus
            ),
            h = (0, i.Fl)(() => "cancel" === k.orderDetails.rawStatus),
            y = (0, i.Fl)(
              () => "outgoing_address_is_aml" === k.orderDetails.status
            );
          let S;
          const k = (0, l.u)();
          return (
            (0, i.bv)(async () => {
              await f.waitForLocale(),
                await k.orderRetrieve(),
                f.getSettigs(),
                (n.value = k.tplName),
                k.startChat(),
                (S = setInterval(() => {
                  k.orderRetrieve(!1);
                }, 1e4));
            }),
            (0, i.Ah)(() => {
              k.stopTimer(), clearInterval(S);
            }),
            (0, i.YP)(
              () => k.orderDetails.rawStatus,
              (e) => {
                ("cancel" !== e &&
                  "close" !== e &&
                  "defective" !== e &&
                  "waiting_aml_refund" !== e) ||
                  (window.scrollBy(0, -window.innerHeight), clearInterval(S));
              }
            ),
            (0, dr.iS)((e, r, t) => {
              k.clearStatus(), t();
            }),
            (e, t) => (
              (0, i.wg)(),
              (0, i.iD)("div", _r, [
                (0, s.SU)(k).isLoading
                  ? ((0, i.wg)(),
                    (0, i.iD)("div", ur, [
                      (0, i._)("div", null, [
                        (0, i.Wm)(Q.Z, {
                          gap: "0px 0px 20px 0px",
                          size: "15px",
                          "min-size": "756px",
                        }),
                        (0, i.Wm)(Q.Z, {
                          gap: "0px 0px 20px 0px",
                          size: "15px",
                        }),
                        (0, i.Wm)(Q.Z, {
                          gap: "0px 0px 20px 0px",
                          size: "30px",
                        }),
                        (0, i.Wm)(Q.Z, {
                          gap: "0px 0px 20px 0px",
                          size: "120px",
                        }),
                        (0, i.Wm)(Q.Z, {
                          gap: "0px 0px 20px 0px",
                          size: "120px",
                        }),
                      ]),
                      (0, i.Wm)(Q.Z, {
                        gap: "20px 0px 40px 0px",
                        size: "120px",
                        "min-size": "384px",
                      }),
                    ]))
                  : "close" === (0, s.SU)(k).orderDetails.status
                  ? ((0, i.wg)(),
                    (0, i.iD)("div", mr, [
                      ((0, i.wg)(), (0, i.j4)((0, i.LL)((0, s.SU)(g)))),
                    ]))
                  : "Cash" === (0, s.SU)(n)
                  ? ((0, i.wg)(),
                    (0, i.iD)("div", pr, [
                      ((0, i.wg)(), (0, i.j4)((0, i.LL)((0, s.SU)(p)))),
                    ]))
                  : v.value && (0, s.SU)(k).orderDetails.failAml
                  ? ((0, i.wg)(),
                    (0, i.iD)("div", gr, [
                      ((0, i.wg)(),
                      (0, i.j4)(
                        (0, i.LL)(cr),
                        (0, a.vs)(
                          (0, i.F4)({
                            currencyFrom: (0, s.SU)(k).setupOrder.currFrom,
                            orderId: (0, s.SU)(k).orderDetails.orderId,
                            isAmlType: (0, s.SU)(k).orderDetails.isAmlType,
                            email: (0, s.SU)(f).settings.contactEmail,
                          })
                        ),
                        null,
                        16
                      )),
                    ]))
                  : h.value
                  ? ((0, i.wg)(),
                    (0, i.iD)("div", wr, [
                      ((0, i.wg)(),
                      (0, i.j4)(
                        (0, i.LL)(Qe),
                        (0, a.vs)(
                          (0, i.F4)({
                            isCryptFrom: (0, s.SU)(k).orderDetails.isCryptFrom,
                            orderId: (0, s.SU)(k).orderDetails.orderId,
                          })
                        ),
                        null,
                        16
                      )),
                    ]))
                  : ((0, i.wg)(),
                    (0, i.iD)("div", fr, [
                      (0, i._)(
                        "h1",
                        vr,
                        (0, a.zw)(
                          e.$t("order.title", {
                            id: (0, s.SU)(k).orderDetails.orderId,
                          })
                        ),
                        1
                      ),
                      (0, i._)("div", hr, [
                        (0, i._)("div", yr, [
                          (0, s.SU)(k).orderDetails.needToConfirm
                            ? ((0, i.wg)(),
                              (0, i.j4)(
                                F,
                                {
                                  key: 0,
                                  "order-id": (0, s.SU)(k).orderDetails.orderId,
                                  typeField: (0, s.SU)(k).setupOrder.currTo
                                    .type,
                                  "best-code": (0, s.SU)(k).setupOrder.currTo
                                    .bestCode,
                                  details: (0, s.SU)(k).orderDetails,
                                },
                                null,
                                8,
                                [
                                  "order-id",
                                  "typeField",
                                  "best-code",
                                  "details",
                                ]
                              ))
                            : (0, i.kq)("", !0),
                          (0, i.Wm)(
                            q,
                            {
                              "currencies-info": (0, s.SU)(k)
                                .getOrderCurrencyInfo,
                            },
                            null,
                            8,
                            ["currencies-info"]
                          ),
                          (0, i.Wm)(
                            We,
                            {
                              text: (0, s.SU)(k).orderDetails.statusText,
                              status: (0, s.SU)(k).orderDetails.rawStatus,
                              template: (0, s.SU)(n),
                            },
                            null,
                            8,
                            ["text", "status", "template"]
                          ),
                          y.value
                            ? (0, i.kq)("", !0)
                            : ((0, i.wg)(),
                              (0, i.j4)(
                                J,
                                {
                                  key: 1,
                                  initialTimer: (0, s.SU)(k).orderDetails
                                    .buyTime,
                                  currentTimer: (0, s.SU)(k).currentTimer,
                                  course: (0, s.SU)(k).orderDetails.course,
                                  status: (0, s.SU)(k).orderDetails.status,
                                  confirmation: (0, s.SU)(k).orderDetails
                                    .confirmation,
                                  isFiatOrder: (0, s.SU)(k).isFiatOrders,
                                },
                                null,
                                8,
                                [
                                  "initialTimer",
                                  "currentTimer",
                                  "course",
                                  "status",
                                  "confirmation",
                                  "isFiatOrder",
                                ]
                              )),
                          y.value
                            ? (0, i.kq)("", !0)
                            : ((0, i.wg)(),
                              (0, i.j4)((0, i.LL)(w[(0, s.SU)(n)]), {
                                key: 2,
                              })),
                        ]),
                        (0, i._)("div", Sr, [(0, i.Wm)(Me)]),
                      ]),
                    ])),
                "cancel" !== (0, s.SU)(k).orderDetails.status &&
                "close" !== (0, s.SU)(k).orderDetails.status &&
                "waiting_aml_refund" !== (0, s.SU)(k).orderDetails.status
                  ? ((0, i.wg)(),
                    (0, i.iD)(
                      "button",
                      {
                        key: 6,
                        class: "chat-open",
                        type: "button",
                        "data-count": (0, s.SU)(r).chat.unreadMessagesNum,
                        onClick:
                          t[0] ||
                          (t[0] = (e) => ((0, s.SU)(r).isChatOpen = !0)),
                      },
                      [
                        (0, i._)(
                          "span",
                          null,
                          (0, a.zw)(e.$t("chat.title")),
                          1
                        ),
                      ],
                      8,
                      kr
                    ))
                  : (0, i.kq)("", !0),
              ])
            )
          );
        },
      };
      const Ur = zr;
      var xr = Ur;
    },
    2836: function (e, r, t) {
      e.exports = t.p + "img/preload.c5eba1d8.svg";
    },
  },
]);
