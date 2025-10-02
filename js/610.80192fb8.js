"use strict";
(self["webpackChunkexhub_io"] = self["webpackChunkexhub_io"] || []).push([
  [610],
  {
    5317: function (e, t, a) {
      a.d(t, {
        w: function () {
          return c;
        },
      });
      var i = a(2788),
        n = a(8948),
        s = a(8105),
        r = a(4870),
        p = a(1519),
        l = a(5994),
        o = a(8352);
      const c = () => {
        const e = (0, p.F)(),
          t = (0, o.s)(),
          { handleError: a } = (0, l.Z)(),
          c = (0, r.iH)(""),
          u = (0, r.iH)(""),
          x = async () => {
            t.isLoading = !0;
            const a = {
              pageCode: i.Z.currentRoute.value.name,
              locale: e.locale,
            };
            try {
              const { data: e } = await n.Z.apiEx.post(s.Y.page, a);
              (c.value = e.seoH1), (u.value = e.content);
            } catch (r) {
              e.setGlobalError(r);
            } finally {
              t.isLoading = !1;
            }
          };
        return { getPageInfo: x, title: c, text: u };
      };
    },
    803: function (e, t, a) {
      a.d(t, {
        Z: function () {
          return p;
        },
      });
      var i = a(3396),
        n = a(7139),
        s = {
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
              (0, i.wg)(),
              (0, i.iD)(
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
      const r = s;
      var p = r;
    },
    7212: function (e, t, a) {
      a.r(t),
        a.d(t, {
          default: function () {
            return D;
          },
        });
      var i = a(3396),
        n = a(4870),
        s = a(7139),
        r = a.p + "img/thx.c89a0ed5.svg",
        p = a(8352),
        l = a(5317),
        o = a(803),
        c = a(1519);
      const u = { class: "wrap" },
        x = { key: 0, class: "order-preload" },
        _ = { class: "inner__title" },
        d = { class: "partner" },
        g = { class: "partner__info" },
        m = ["innerHTML"],
        v = { class: "partner__list" },
        w = { class: "partner__list-title" },
        z = { class: "partner__box-title" },
        f = { class: "partner__box-list" },
        b = ["href"],
        k = ["src", "alt"],
        S = { class: "partner__add" },
        h = (0, i._)("img", { src: r }, null, -1);
      var y = {
        __name: "Partners",
        setup(e) {
          const t = (0, c.F)(),
            a = (0, p.s)(),
            { title: r, text: y, getPageInfo: Z } = (0, l.w)();
          return (
            (0, i.bv)(async () => {
              await t.waitForLocale(), await a.getPartners(), await Z();
            }),
            (e, t) => {
              const p = (0, i.up)("RouterLink");
              return (
                (0, i.wg)(),
                (0, i.iD)("div", u, [
                  (0, n.SU)(a).isLoading
                    ? ((0, i.wg)(),
                      (0, i.iD)("div", x, [
                        (0, i._)("div", null, [
                          (0, i.Wm)(o.Z, {
                            gap: "0px 0px 20px 0px",
                            size: "15px",
                            "min-size": "756px",
                          }),
                          (0, i.Wm)(o.Z, {
                            gap: "0px 0px 20px 0px",
                            size: "15px",
                          }),
                          (0, i.Wm)(o.Z, {
                            gap: "0px 0px 20px 0px",
                            size: "30px",
                          }),
                          (0, i.Wm)(o.Z, {
                            gap: "0px 0px 20px 0px",
                            size: "120px",
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
                          (0, i._)("h1", _, (0, s.zw)((0, n.SU)(r)), 1),
                          (0, i._)("div", d, [
                            (0, i._)("div", g, [
                              (0, i._)(
                                "div",
                                {
                                  class: "partner__text",
                                  innerHTML: (0, n.SU)(y),
                                },
                                null,
                                8,
                                m
                              ),
                              (0, i._)("div", v, [
                                (0, i._)(
                                  "h3",
                                  w,
                                  (0, s.zw)(e.$t("partners.title")),
                                  1
                                ),
                                ((0, i.wg)(!0),
                                (0, i.iD)(
                                  i.HY,
                                  null,
                                  (0, i.Ko)(
                                    (0, n.SU)(a).computedPartners,
                                    (t) => (
                                      (0, i.wg)(),
                                      (0, i.iD)(
                                        "div",
                                        { key: t, class: "partner__box" },
                                        [
                                          (0, i._)(
                                            "div",
                                            z,
                                            (0, s.zw)(e.$t(t.title)),
                                            1
                                          ),
                                          (0, i._)("div", f, [
                                            ((0, i.wg)(!0),
                                            (0, i.iD)(
                                              i.HY,
                                              null,
                                              (0, i.Ko)(
                                                t.list,
                                                (e) => (
                                                  (0, i.wg)(),
                                                  (0, i.iD)(
                                                    "a",
                                                    {
                                                      class:
                                                        "partner__box-item",
                                                      href: e.url,
                                                      key: e.name,
                                                      target: "_blank",
                                                    },
                                                    [
                                                      (0, i._)(
                                                        "img",
                                                        {
                                                          src: e.icon,
                                                          alt: e.name,
                                                        },
                                                        null,
                                                        8,
                                                        k
                                                      ),
                                                    ],
                                                    8,
                                                    b
                                                  )
                                                )
                                              ),
                                              128
                                            )),
                                          ]),
                                        ]
                                      )
                                    )
                                  ),
                                  128
                                )),
                              ]),
                            ]),
                            (0, i._)("div", S, [
                              h,
                              (0, i.Wm)(
                                "a",
                                { class: "partner__add-action", href: "https://t.me/coinfiber_com" },
                                {
                                  default: (0, i.w5)(() => [
                                    (0, i.Uk)(
                                      (0, s.zw)(e.$t("partners.link")),
                                      1
                                    ),
                                  ]),
                                  _: 1,
                                }
                              ),
                            ]),
                          ]),
                        ],
                        64
                      )),
                ])
              );
            }
          );
        },
      };
      const Z = y;
      var D = Z;
    },
  },
]);
