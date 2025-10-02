"use strict";
(self["webpackChunkexhub_io"] = self["webpackChunkexhub_io"] || []).push([
  [250],
  {
    5317: function (a, t, n) {
      n.d(t, {
        w: function () {
          return p;
        },
      });
      var i = n(2788),
        s = n(8948),
        e = n(8105),
        c = n(4870),
        o = n(1519),
        l = n(5994),
        r = n(8352);
      const p = () => {
        const a = (0, o.F)(),
          t = (0, r.s)(),
          { handleError: n } = (0, l.Z)(),
          p = (0, c.iH)(""),
          _ = (0, c.iH)(""),
          u = async () => {
            t.isLoading = !0;
            const n = {
              pageCode: i.Z.currentRoute.value.name,
              locale: a.locale,
            };
            try {
              const { data: a } = await s.Z.apiEx.post(e.Y.page, n);
              (p.value = a.seoH1), (_.value = a.content);
            } catch (c) {
              a.setGlobalError(c);
            } finally {
              t.isLoading = !1;
            }
          };
        return { getPageInfo: u, title: p, text: _ };
      };
    },
    803: function (a, t, n) {
      n.d(t, {
        Z: function () {
          return o;
        },
      });
      var i = n(3396),
        s = n(7139),
        e = {
          __name: "BaseSkeleton",
          props: {
            size: String,
            gap: String,
            maxSize: String,
            minSize: String,
            posAbsolut: { type: Boolean, default: !1 },
            borderRadius: { type: String, default: "10px" },
          },
          setup(a) {
            return (t, n) => (
              (0, i.wg)(),
              (0, i.iD)(
                "div",
                {
                  class: (0, s.C_)([
                    "skeleton__block",
                    { absolute: a.posAbsolut },
                  ]),
                  style: (0, s.j5)({
                    "--size": a.size,
                    "--gap": a.gap,
                    "--max_size": a.maxSize,
                    "--min_size": a.minSize,
                    "--radius": a.borderRadius,
                  }),
                },
                null,
                6
              )
            );
          },
        };
      const c = e;
      var o = c;
    },
    7935: function (a, t, n) {
      n.r(t),
        n.d(t, {
          default: function () {
            return D;
          },
        });
      var i = n(3396),
        s = n(4870),
        e = n(7139),
        c = n.p + "img/contact_img.ae3048c8.svg",
        o = n(803),
        l = n(389),
        r = n(8352),
        p = n(5317),
        _ = n(1519);
      const u = { class: "contacts" },
        g = { class: "wrap" },
        x = { key: 0, class: "order-preload" },
        d = { class: "contacts__title" },
        m = { class: "contacts__wrap" },
        f = { class: "contacts__info" },
        w = ["innerHTML"],
        v = { class: "contacts__info-header" },
        k = { class: "contacts__info-label" },
        z = ["href"],
        S = ["innerHTML"],
        b = { class: "contacts__social" },
        h = ["href"],
        y = (0, i._)(
          "img",
          { class: "contacts__img", src: c, alt: "image" },
          null,
          -1
        );
      var Z = {
        __name: "Contacts",
        setup(a) {
          const t = (0, _.F)(),
            n = (0, r.s)(),
            { title: c, text: Z, getPageInfo: H } = (0, p.w)();
          return (
            (0, i.bv)(async () => {
              await t.waitForLocale(),
                await H(),
                await n.getContacts(),
                await n.getSocials();
            }),
            (a, t) => (
              (0, i.wg)(),
              (0, i.iD)("div", u, [
                (0, i._)("div", g, [
                  (0, s.SU)(n).isLoading
                    ? ((0, i.wg)(),
                      (0, i.iD)("div", x, [
                        (0, i._)("div", null, [
                          (0, i.Wm)(o.Z, {
                            gap: "0px 0px 20px 0px",
                            size: "30px",
                            "min-size": "756px",
                          }),
                          (0, i.Wm)(o.Z, {
                            gap: "0px 0px 20px 0px",
                            size: "15px",
                          }),
                          (0, i.Wm)(o.Z, {
                            gap: "0px 0px 20px 0px",
                            size: "15px",
                          }),
                          (0, i.Wm)(o.Z, {
                            gap: "0px 0px 20px 0px",
                            size: "120px",
                          }),
                        ]),
                        (0, i.Wm)(o.Z, {
                          gap: "20px 0px 0px 0px",
                          size: "120px",
                          "min-size": "384px",
                        }),
                      ]))
                    : ((0, i.wg)(),
                      (0, i.iD)(
                        i.HY,
                        { key: 1 },
                        [
                          (0, i._)("h1", d, (0, e.zw)((0, s.SU)(c)), 1),
                          (0, i._)("div", m, [
                            (0, i._)("div", f, [
                              (0, i._)(
                                "div",
                                {
                                  class: "contacts__info-text",
                                  innerHTML: (0, s.SU)(Z),
                                },
                                null,
                                8,
                                w
                              ),

                              (0, i._)("div", b, [
                                (0, i._)("a", {
                                  href: "https://t.me/coinfiber_com",
                                  target: "_blank",
                                  class: "footer__channel"
                                }, [
                                  (0, i._)("svg", {
                                    class: "icon-teleg_ch",
                                    fill: "none",
                                    xmlns: "http://www.w3.org/2000/svg",
                                    "data-testid": "base-icon"
                                  }, [
                                    (0, i._)("path", {
                                      d: "M5.49349 7.9088L5.2619 11.2592C5.59324 11.2592 5.73674 11.1128 5.90883 10.937L7.46228 9.41L10.6812 11.8346C11.2715 12.173 11.6875 11.9948 11.8467 11.276L13.9596 1.09284L13.9602 1.09224C14.1474 0.194642 13.6446 -0.156356 13.0694 0.063843L0.649953 4.95442C-0.197651 5.29282 -0.184817 5.77881 0.505866 5.99901L3.68103 7.01481L11.0563 2.26823C11.4034 2.03183 11.719 2.16263 11.4594 2.39903L5.49349 7.9088Z",
                                      fill: "white"
                                    })
                                  ]),
                                  (0, i._)("div", {
                                    class: "footer__channel-text"
                                  }, "Telegram поддержка")
                                ]),

                              ]),
                            ]),
                            y,
                          ]),
                        ],
                        64
                      )),
                ]),
              ])
            )
          );
        },
      };
      const H = Z;
      var D = H;
    },
  },
]);
