"use strict";
(self["webpackChunkexhub_io"] = self["webpackChunkexhub_io"] || []).push([
  [342],
  {
    5317: function (e, i, a) {
      a.d(i, {
        w: function () {
          return u;
        },
      });
      var s = a(2788),
        t = a(8948),
        r = a(8105),
        n = a(4870),
        o = a(1519),
        l = a(5994),
        c = a(8352);
      const u = () => {
        const e = (0, o.F)(),
          i = (0, c.s)(),
          { handleError: a } = (0, l.Z)(),
          u = (0, n.iH)(""),
          _ = (0, n.iH)(""),
          g = async () => {
            i.isLoading = !0;
            const a = {
              pageCode: s.Z.currentRoute.value.name,
              locale: e.locale,
            };
            try {
              const { data: e } = await t.Z.apiEx.post(r.Y.page, a);
              (u.value = e.seoH1), (_.value = e.content);
            } catch (n) {
              e.setGlobalError(n);
            } finally {
              i.isLoading = !1;
            }
          };
        return { getPageInfo: g, title: u, text: _ };
      };
    },
    803: function (e, i, a) {
      a.d(i, {
        Z: function () {
          return o;
        },
      });
      var s = a(3396),
        t = a(7139),
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
            return (i, a) => (
              (0, s.wg)(),
              (0, s.iD)(
                "div",
                {
                  class: (0, t.C_)([
                    "skeleton__block",
                    { absolute: e.posAbsolut },
                  ]),
                  style: (0, t.j5)({
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
      const n = r;
      var o = n;
    },
    8342: function (e, i, a) {
      a.r(i),
        a.d(i, {
          default: function () {
            return x;
          },
        });
      var s = a(3396),
        t = a(4870),
        r = a(7139),
        n = a(389),
        o = a(803),
        l = a(8352),
        c = a(5317),
        u = a(1519);
      const _ = { class: "wrap" },
        g = { key: 1, class: "inner__title" },
        w = { class: "reviews" },
        p = { class: "reviews__list" },
        d = ["href"],
        v = ["href"],
        f = ["src"],
        m = { class: "reviews__footer" },
        k = ["href"];
      var h = {
        __name: "Reviews",
        setup(e) {
          const i = (0, u.F)(),
            a = (0, l.s)(),
            { title: h, getPageInfo: z } = (0, c.w)();
          return (
            (0, s.bv)(async () => {
              await i.waitForLocale(), await a.getPartners(), await z();
            }),
            (e, i) => (
              (0, s.wg)(),
              (0, s.iD)("div", _, [
                (0, t.SU)(a).isLoading
                  ? ((0, s.wg)(),
                    (0, s.j4)(o.Z, {
                      key: 0,
                      size: "30px",
                      "max-size": "220px",
                    }))
                  : ((0, s.wg)(),
                    (0, s.iD)("h1", g, (0, r.zw)((0, t.SU)(h)), 1)),
                (0, s._)("div", w, [
                  (0, s._)("div", p, [
                    (0, t.SU)(a).isLoading
                      ? ((0, s.wg)(),
                        (0, s.iD)(
                          s.HY,
                          { key: 0 },
                          [
                            (0, s.Wm)(o.Z, { size: "80px" }),
                            (0, s.Wm)(o.Z, { size: "80px" }),
                            (0, s.Wm)(o.Z, { size: "80px" }),
                          ],
                          64
                        ))
                      : ((0, s.wg)(!0),
                        (0, s.iD)(
                          s.HY,
                          { key: 1 },
                          (0, s.Ko)(
                            (0, t.SU)(a).partners,
                            (i) => (
                              (0, s.wg)(),
                              (0, s.iD)(
                                "div",
                                { key: i.name, class: "reviews__item" },
                                [
                                  (0, s._)(
                                    "a",
                                    {
                                      target: "_blank",
                                      href: i.url,
                                      class: "reviews__title",
                                    },
                                    (0, r.zw)(i.name),
                                    9,
                                    d
                                  ),
                                  (0, s._)(
                                    "a",
                                    {
                                      target: "_blank",
                                      href: i.url,
                                      class: "reviews__logo",
                                    },
                                    [
                                      (0, s._)(
                                        "img",
                                        { src: i.icon },
                                        null,
                                        8,
                                        f
                                      ),
                                    ],
                                    8,
                                    v
                                  ),
                                  (0, s._)("div", m, [
                                    (0, s._)(
                                      "a",
                                      {
                                        target: "_blank",
                                        href: i.linkToReviews,
                                        class: "reviews__footer-link",
                                      },
                                      [
                                        (0, s.Uk)(
                                          (0, r.zw)(e.$t("reviews.action")) +
                                            " ",
                                          1
                                        ),
                                        (0, s.Wm)(n.Z, {
                                          class: "icon",
                                          name: "arrslidr",
                                          width: "44px",
                                          height: "12px",
                                        }),
                                      ],
                                      8,
                                      k
                                    ),
                                  ]),
                                ]
                              )
                            )
                          ),
                          128
                        )),
                  ]),
                ]),
              ])
            )
          );
        },
      };
      const z = h;
      var x = z;
    },
  },
]);
