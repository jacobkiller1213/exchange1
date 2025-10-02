"use strict";
(self["webpackChunkexhub_io"] = self["webpackChunkexhub_io"] || []).push([
  [528],
  {
    7955: function (e, t, a) {
      function l() {
        const e = (e) => {
            const a = e.target.getAttribute("type");
            "tel" === a && t(e);
          },
          t = (e) => {
            let t = e.target.value;
            const a = t.replace(/[^\d]/g, "");
            let l = "";
            (l = a.startsWith("8")
              ? "+7" + a.substring(1)
              : a.startsWith("7")
              ? "+" + a
              : "+7" + a),
              l.length > 12 && (l = l.slice(0, 12)),
              (e.target.value = l);
          },
          a = (e) => {
            const t = e.target.getAttribute("type");
            if ("tel" === t) {
              const t = [
                "Backspace",
                "Delete",
                "ArrowLeft",
                "ArrowRight",
                "Tab",
              ];
              t.includes(e.key) || /\d/.test(e.key) || e.preventDefault();
            }
          },
          l = (e) => {
            const t = e.target.getAttribute("type");
            if ("tel" === t) {
              e.target.value.length <= 2 &&
                ("Backspace" === e.key || "Delete" === e.key) &&
                e.preventDefault();
              const t = [
                "Backspace",
                "Delete",
                "ArrowLeft",
                "ArrowRight",
                "Tab",
              ];
              !t.includes(e.key) &&
                /\d/.test(e.key) &&
                e.target.value.length >= 12 &&
                e.preventDefault();
            }
          };
        return {
          phoneNumberDefinitionEvent: e,
          preventDeletionEvent: l,
          preventInvalidInputEvent: a,
        };
      }
      a.d(t, {
        R: function () {
          return l;
        },
      });
    },
    1122: function (e, t, a) {
      a.d(t, {
        $: function () {
          return _;
        },
      });
      a(8858), a(1318), a(3228);
      var l = a(2788),
        n = a(4870),
        r = a(8948);
      const o = async (e, t) => {
        const a = await r.Z.apiEx.post(e, t);
        return a.data;
      };
      var s = a(8105),
        i = a(5994),
        d = a(1020),
        c = a(86),
        u = a(5122),
        p = a(2972),
        f = a(6219),
        g = a(1519),
        m = a(584);
      const _ = (0, d.Q_)("aml", () => {
        const { handleError: e } = (0, i.Z)(),
          t = (0, g.F)(),
          a = (0, n.qj)({
            orderUrl: "",
            orderPageUrl: "",
            token: "",
            wallet: "",
            orderId: "",
            needToChangeWallet: "",
            clientWalletAddress: "",
            currencyName: "",
            countOfAttemptsToChange: "",
            newOutgoingAddress: "",
            changeOutgoingAddressStatus: "",
            refundRequested: "",
            orderInfo: null,
            verificationAML: "",
            maxFileUploadSize: "",
          }),
          d = (0, n.qj)({ value: "", error: "" }),
          _ = (0, n.qj)({
            value: "",
            type: "tel",
            error: "",
            pattern: p.V.phone,
          }),
          v = (0, n.qj)({ value: "", error: "" }),
          k = (0, n.qj)({
            value: { name: "", localization: "" },
            error: "",
            id: "",
            code: "",
            img: "",
          }),
          h = (0, n.qj)({
            status: "",
            title: "",
            text: "",
            icon: "",
            file: null,
          }),
          w = (0, n.qj)({
            status: "",
            title: "",
            text: "",
            icon: "",
            file: null,
          }),
          b = (0, n.iH)(!1),
          y = (e, t, a, l, n = "") => {
            (e.status = t), (e.icon = a), (e.title = l), (e.text = n);
          },
          A = (e, t, l) => {
            const { maxFileUploadSize: n } = a,
              r = { document: h, selfie: w },
              o = r[l];
            o &&
              ((o.file = e.target.files[0]),
              (0, u.tv)(o, n) && y(o, "success", "success", t));
          },
          x = (e, t) => {
            const a = m.Z[e];
            a && e.includes("document")
              ? y(h, "error", "warning", t, a)
              : a && e.includes("selfie") && y(w, "error", "warning", t, a);
          },
          U = (e) => {
            (k.value.name = e.name),
              (k.value.localization = e.localization),
              (k.code = e.code),
              (k.img = e.icon_url),
              (k.id = e.id);
          },
          C = (e, t) => {
            let a = e.target.value;
            v.value = (0, f.Z)(a);
          },
          S = (e) => {
            const t = l.Z.currentRoute.value.fullPath,
              n = c.n,
              r = new URL(t, n),
              o = r.pathname.split("/");
            if (!r.pathname.includes(e)) throw new Error("Invalid URL format");
            (a.orderUrl = o[3]),
              (a.token = decodeURIComponent(
                r.searchParams.get("t").replaceAll(" ")
              ));
          },
          z = () => ({
            orderUrl: a.orderUrl,
            token: a.token,
            locale: t.locale,
          }),
          D = async (t = !0) => {
            const l = z();
            b.value = t;
            try {
              const e = await o(s.Y.orderWalletAml, l);
              (a.needToChangeWallet = e.needToChangeWallet),
                (a.orderId = e.orderId),
                (a.verificationAML = e.verificationAML),
                (a.maxFileUploadSize = e.maxFileUploadSize);
            } catch (n) {
              e(n, d);
            } finally {
              b.value = !1;
            }
          },
          F = async () => {
            const t = z();
            b.value = !0;
            try {
              const e = await o(s.Y.orderOutgoingWallet, t);
              (a.orderId = e.orderId),
                (a.clientWalletAddress = e.clientWalletAddress),
                (a.orderPageUrl = e.orderPageUrl),
                (a.currencyName = e.currencyName),
                (a.countOfAttemptsToChange = Number(e.countOfAttemptsToChange)),
                (a.changeOutgoingAddressStatus =
                  "1" == e.changeOutgoingAddressStatus),
                (a.refundRequested = "1" == e.refundRequested),
                (a.orderInfo = e.orderInfo);
            } catch (l) {
              e(l, d);
            } finally {
              b.value = !1;
            }
          },
          W = async () => {
            const t = (0, u.TF)(d, "walletField");
            if (!t) return;
            const l = { orderUrl: a.orderUrl, token: a.token, wallet: d.value };
            try {
              await o(s.Y.orderWalletAmlChange, l);
              D();
            } catch (n) {
              e(n, d);
            }
          },
          B = async (e = null) => {
            if (e) return x(e, "aml_verify.document_title_error"), e;
            const l = new FormData(),
              n = {
                accessToken: a.token,
                orderId: a.orderId,
                locale: t.locale,
              };
            h.file && (n.document = h.file), w.file && (n.selfie = w.file);
            for (const t in n) l.append(t, n[t]);
            const { document: o, selfie: i, ...d } = n;
            b.value = !0;
            try {
              const { data: e } = await r.Z.apiEx.post(
                s.Y.amlVerification,
                l,
                d
              );
              (a.verificationAML.status = e.verificationAML.status),
                (h.status = ""),
                (h.file = null),
                (w.status = ""),
                (w.file = null);
            } catch (c) {
              switch (c) {
                case "document_max_upload_size":
                case "document_file_type_not_allowed":
                case "document_file_not_found":
                  x(c, "aml_verify.document_title_error"), (h.file = null);
                  break;
                case "selfie_max_upload_size":
                case "selfie_file_type_not_allowed":
                case "selfie_file_not_found":
                  x(c, "aml_verify.selfie_title_error"), (w.file = null);
                  break;
                default:
                  t.setGlobalError(c);
                  break;
              }
            } finally {
              b.value = !1;
            }
          },
          O = async () => {
            const t = (0, u.TF)(d, "walletField");
            if (!t) return;
            const l = {
              orderUrl: a.orderUrl,
              token: a.token,
              newOutgoingAddress: d.value,
            };
            try {
              await o(s.Y.orderOutgoingWalletChange, l);
              F();
            } catch (n) {
              e(n, d);
            }
          },
          I = async () => {
            const { orderInfo: l } = a;
            let n;
            if ("1" === l.isSbp) {
              const e = (0, u.TF)(k, "sbpBank"),
                t = (0, u.TF)(_, "phoneField");
              n = e && t;
            } else {
              const e = (0, u.TF)(v, "cardNumberField");
              n = e;
            }
            if (!n) return;
            const r = {
              wallet: _.value || v.value,
              bank: k.code,
              orderUrl: a.orderUrl,
              token: a.token,
            };
            b.value = !0;
            try {
              const e = await o(s.Y.orderOutgoingWalletRefund, r);
              "true" === e.success && F();
            } catch (i) {
              switch (i) {
                case "change_wallet_invalid_address":
                  e(i, v), e(i, _);
                  break;
                default:
                  t.setGlobalError(i);
                  break;
              }
            } finally {
              b.value = !1;
            }
          };
        return {
          getOrderWalletAml: D,
          getOrderOutgoingWallet: F,
          setOrderWalletAml: W,
          setOrderOutgoingWallet: O,
          parseURL: S,
          handleCardFormatter: C,
          selectBankInWalletAml: U,
          refundMoneyAction: I,
          uploadFileInVeirificationAmlForm: A,
          verificationWalletAml: B,
          isLoading: b,
          walletAmlInfo: a,
          walletField: d,
          phoneField: _,
          cardNumberField: v,
          sbpBank: k,
          statusUploadDocument: h,
          statusUploadSelfie: w,
        };
      });
    },
    4442: function (e, t, a) {
      a.d(t, {
        Z: function () {
          return F;
        },
      });
      var l = a(3396),
        n = a(7139),
        r = a(4870),
        o = a(3554),
        s = a(389),
        i = a(1519),
        d = a(1122);
      const c = { class: "hidden" },
        u = { class: "hidden__header" },
        p = { class: "hidden__header-title" },
        f = { class: "hidden__list" },
        g = ["onClick"],
        m = ["src", "alt"],
        _ = { class: "hidden__item-name" };
      var v = {
        __name: "DropdownBanks",
        props: { dropdownList: Array, usingComponent: String },
        emits: ["closeDropdownBanks"],
        setup(e, { emit: t }) {
          const a = t,
            { dropdownList: v, usingComponent: k } = e,
            h = (0, o.x)(),
            w = (0, i.F)(),
            b = (0, d.$)(),
            y = (e) => {
              switch (k) {
                case "trade":
                  h.selectBankInCreateOrder(e);
                  break;
                case "amlWallet":
                  b.selectBankInWalletAml(e);
                  break;
              }
              a("closeDropdownBanks");
            };
          return (t, o) => (
            (0, l.wg)(),
            (0, l.iD)("div", c, [
              (0, l._)("div", u, [
                (0, l._)(
                  "h3",
                  p,
                  (0, n.zw)(t.$t("trade.dropdown_title_bank")),
                  1
                ),
                (0, l._)(
                  "button",
                  {
                    class: "hidden__header-close",
                    type: "button",
                    onClick: o[0] || (o[0] = (e) => a("closeDropdownBanks")),
                  },
                  [
                    (0, l.Wm)(s.Z, {
                      class: "icon-close",
                      height: "20px",
                      width: "20px",
                      name: "close",
                    }),
                  ]
                ),
              ]),
              (0, l._)("div", f, [
                ((0, l.wg)(!0),
                (0, l.iD)(
                  l.HY,
                  null,
                  (0, l.Ko)(
                    e.dropdownList,
                    (e) => (
                      (0, l.wg)(),
                      (0, l.iD)(
                        "div",
                        {
                          key: e.id,
                          class: "hidden__item " + e.code,
                          onClick: (t) => y(e),
                        },
                        [
                          (0, l._)(
                            "div",
                            {
                              class: (0, n.C_)([
                                "hidden__item-row " + e.code,
                                {
                                  active:
                                    (0, r.SU)(h).formOrder.sbpBank.id == e.id,
                                },
                              ]),
                            },
                            [
                              (0, l._)(
                                "img",
                                {
                                  class: "hidden__item-img",
                                  src: e.icon_url,
                                  alt: e.code,
                                },
                                null,
                                8,
                                m
                              ),
                              (0, l._)(
                                "span",
                                _,
                                (0, n.zw)((0, r.SU)(w).setTranslationResult(e)),
                                1
                              ),
                              (0, r.SU)(h).formOrder.sbpBank.id == e.id
                                ? ((0, l.wg)(),
                                  (0, l.j4)(s.Z, {
                                    key: 0,
                                    class: "icon-checked",
                                    name: "checked",
                                    width: "16px",
                                    height: "16px",
                                  }))
                                : (0, l.kq)("", !0),
                            ],
                            2
                          ),
                        ],
                        8,
                        g
                      )
                    )
                  ),
                  128
                )),
              ]),
            ])
          );
        },
      };
      const k = v;
      var h = k,
        w = a(2245);
      const b = { class: "exchange__fields-header" },
        y = { class: "exchange__fields-label" },
        A = { class: "exchange__field-custom" },
        x = ["src", "alt"],
        U = { key: 1 },
        C = { key: 0, class: "error-field field__error" },
        S = { class: "exchange__fields-about-spb" };
      var z = {
        __name: "SBPField",
        props: {
          banks: Array,
          usingComponent: { type: String, default: "trade" },
        },
        setup(e) {
          const t = e,
            {
              dropdownIsActive: a,
              container: c,
              openDropdownEvent: u,
              closeDropdownEvent: p,
            } = (0, w.x)(),
            f = (0, r.iH)("SBP"),
            g = (0, o.x)(),
            m = (0, i.F)(),
            _ = (0, d.$)(),
            v = (0, l.Fl)(() => {
              switch (t.usingComponent) {
                case "amlWallet":
                  return _.sbpBank;
                default:
                  return g.formOrder.sbpBank;
              }
            }),
            k = (0, l.Fl)(() => {
              let e;
              switch (t.usingComponent) {
                case "amlWallet":
                  e = _.sbpBank;
                  break;
                default:
                  e = g.formOrder.sbpBank;
                  break;
              }
              return e.value.name ? "" : "trade.fields.bank.select";
            });
          return (t, o) => (
            (0, l.wg)(),
            (0, l.iD)(
              "div",
              {
                class: (0, n.C_)([
                  "exchange__fields-item",
                  { error: v.value.error },
                ]),
                ref_key: "container",
                ref: c,
              },
              [
                (0, l._)("div", b, [
                  (0, l._)(
                    "label",
                    y,
                    (0, n.zw)(t.$t("trade.fields.bank.label")),
                    1
                  ),
                ]),
                (0, l._)(
                  "div",
                  {
                    class: "exchange__fields-wrap select-wrap",
                    onClick:
                      o[0] ||
                      (o[0] = (e) => (
                        (0, r.SU)(u)(f.value), (v.value.error = "")
                      )),
                  },
                  [
                    (0, l._)("div", A, [
                      (0, l._)(
                        "div",
                        {
                          class: (0, n.C_)([
                            "exchange__field-custom-result",
                            { "--placeholder": !v.value.value.name },
                          ]),
                        },
                        [
                          v.value.img
                            ? ((0, l.wg)(),
                              (0, l.iD)(
                                "img",
                                {
                                  key: 0,
                                  class: "exchange__field-custom-img",
                                  src: v.value.img,
                                  alt: v.value.code,
                                },
                                null,
                                8,
                                x
                              ))
                            : (0, l.kq)("", !0),
                          v.value.img
                            ? (0, l.kq)("", !0)
                            : ((0, l.wg)(),
                              (0, l.iD)(
                                "span",
                                U,
                                (0, n.zw)(t.$t(k.value)),
                                1
                              )),
                          (0, l.Uk)(
                            " " +
                              (0, n.zw)(
                                (0, r.SU)(m).setTranslationResult(v.value.value)
                              ),
                            1
                          ),
                        ],
                        2
                      ),
                    ]),
                    (0, l.Wm)(s.Z, {
                      name: "arr_form",
                      width: "12px",
                      height: "12px",
                      class: "icon-select",
                    }),
                    v.value.error
                      ? ((0, l.wg)(),
                        (0, l.iD)("div", C, (0, n.zw)(t.$t(v.value.error)), 1))
                      : (0, l.kq)("", !0),
                  ]
                ),
                (0, r.SU)(a)
                  ? ((0, l.wg)(),
                    (0, l.j4)(
                      h,
                      {
                        key: 0,
                        onCloseDropdownBanks: (0, r.SU)(p),
                        "dropdown-list": e.banks,
                        usingComponent: e.usingComponent,
                      },
                      null,
                      8,
                      [
                        "onCloseDropdownBanks",
                        "dropdown-list",
                        "usingComponent",
                      ]
                    ))
                  : (0, l.kq)("", !0),
                (0, l._)("div", S, [
                  (0, l._)(
                    "span",
                    null,
                    (0, n.zw)(t.$t("trade.fields.bank.attention")),
                    1
                  ),
                  (0, l.Uk)(" " + (0, n.zw)(t.$t("trade.fields.bank.text")), 1),
                ]),
              ],
              2
            )
          );
        },
      };
      const D = z;
      var F = D;
    },
    803: function (e, t, a) {
      a.d(t, {
        Z: function () {
          return s;
        },
      });
      var l = a(3396),
        n = a(7139),
        r = {
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
            return (t, a) => (
              (0, l.wg)(),
              (0, l.iD)(
                "div",
                {
                  class: (0, n.C_)([
                    "skeleton__block",
                    { absolute: e.posAbsolut },
                  ]),
                  style: (0, n.j5)({
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
      const o = r;
      var s = o;
    },
  },
]);
