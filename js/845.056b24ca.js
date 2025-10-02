"use strict";
(self["webpackChunkexhub_io"] = self["webpackChunkexhub_io"] || []).push([
  [845],
  {
    650: function (t, e, r) {
      r.r(e),
        r.d(e, {
          default: function () {
            return U;
          },
        });
      var s = r(3396),
        a = r(4870),
        n = r(9711),
        i = r(8311),
        o = r(2016),
        u = r(8984),
        d = r(8554),
        l = r(3801),
        m = r(9408),
        p = r(7338);
      const c = { class: "order__list" };
      var S = {
        __name: "CryptToRUB",
        setup(t) {
          const e = (0, m.u)(),
            r = (t) => e.orderStepsState[t].status;
          return (t, m) => (
            (0, s.wg)(),
            (0, s.iD)("div", c, [
              (0, s.Wm)(
                n.Z,
                {
                  step: (0, a.SU)(e).orderStepsState.transactionPayment,
                  keyStep: "transactionPayment",
                },
                {
                  default: (0, s.w5)(() => [
                    (0, s.Wm)(o.Z, {
                      text: "order.reserved_text",
                      status: "attention",
                    }),
                    (0, s.Wm)(
                      d.Z,
                      { fields: (0, a.SU)(e).transactionDetails },
                      null,
                      8,
                      ["fields"]
                    ),
                    (0, s.Wm)(
                      p.Z,
                      {
                        information: (0, a.SU)(e)
                          .transactionInformationForCrypt,
                      },
                      null,
                      8,
                      ["information"]
                    ),
                    "active" == r("transactionPayment")
                      ? ((0, s.wg)(), (0, s.j4)(l.Z, { key: 0 }))
                      : (0, s.kq)("", !0),
                  ]),
                  _: 1,
                },
                8,
                ["step"]
              ),
              (0, s.Wm)(
                n.Z,
                {
                  step: (0, a.SU)(e).orderStepsState.paymentProcessing,
                  keyStep: "paymentProcessing",
                },
                {
                  default: (0, s.w5)(() => [
                    (0, s.Wm)(
                      i.Z,
                      {
                        status: (0, a.SU)(e).orderDetails.status,
                        "txid-in": (0, a.SU)(e).orderDetails.txidIn,
                        confirmation: (0, a.SU)(e).orderDetails.confirmation,
                        "tx-address-from": (0, a.SU)(e).setupOrder.currFrom
                          .txAddressFrom,
                      },
                      null,
                      8,
                      ["status", "txid-in", "confirmation", "tx-address-from"]
                    ),
                  ]),
                  _: 1,
                },
                8,
                ["step"]
              ),
              (0, s.Wm)(
                n.Z,
                {
                  step: (0, a.SU)(e).orderStepsState.transfer,
                  keyStep: "transfer",
                },
                {
                  default: (0, s.w5)(() => [
                    (0, s.Wm)(
                      u.Z,
                      {
                        details: (0, a.SU)(e).orderDetails,
                        userRequisites: (0, a.SU)(e).setupOrder.currTo,
                      },
                      null,
                      8,
                      ["details", "userRequisites"]
                    ),
                  ]),
                  _: 1,
                },
                8,
                ["step"]
              ),
            ])
          );
        },
      };
      const f = S;
      var U = f;
    },
  },
]);
