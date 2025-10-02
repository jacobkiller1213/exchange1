(function () {
  var e = {
      86: function (e, r, t) {
        "use strict";
        t.d(r, {
          n: function () {
            return o;
          },
        });
        const a = "dev";
        let o = "";
        switch (a) {
          case "dev":
            o = "/";
            break;
          case "devTest":
            o = "https://exhub-spa.trotasan.com";
            break;
          default:
            o = "/";
        }
      },
      8105: function (e, r, t) {
        "use strict";
        t.d(r, {
          Y: function () {
            return a;
          },
        });
        const a = {
          load: "/multicall/load",
          loadWithCash: "/multicall/load-spa",
          getSettigs: "/settings",
          orderLoad: "/order/load",
          orderCalculate: "/order/calculate",
          orderCreate: "/order/create",
          orderRetrieve: "/order/retrieve",
          orderConfirm: "/order/confirm",
          orderCancel: "/order/cancel",
          orderSendPaid: "/order/send-paid",
          orderWalletAml: "/order/wallet-aml",
          orderWalletAmlChange: "/order/wallet-aml/change",
          orderOutgoingWallet: "/order/outgoing-wallet",
          orderOutgoingWalletRefund: "/order/outgoing-wallet/refund",
          orderOutgoingWalletChange: "/order/outgoing-wallet/change",
          amlVerification: "/verification-aml/save",
          get3ds: "/order/get3ds",
          cashOrderLoad: "/cash-order/load",
          cashOrderCalculate: "/cash-order/calculate",
          cashOrderCreate: "/cash-order/create",
          cashOrderCheck: "/cash-order/check",
          chatLoad: "/chat/load",
          chatSetRead: "/chat/set-read",
          chatUpload: "/chat/upload",
          chatSend: "/chat/send",
          login: "auth/login",
          logout: "auth/logout",
          singup: "auth/signup",
          singupConfirm: "auth/signup/confirm",
          signupResend: "auth/signup/resend",
          restore: "auth/restore",
          restoreConfirm: "auth/restore/confirm",
          restoreResend: "auth/restore/resend",
          restoreChange: "auth/restore/change",
          cardsLoad: "/cards/load",
          cardSave: "/cards/save",
          cardUse: "/cards/use",
          cardsUpdateAndUse: "/cards/update-and-use",
          cardsMail: "/cards/mail",
          cardsUploadByLink: "/cards/upload-by-link",
          personalOrders: "/personal/orders",
          personalAffiliate: "/personal/affiliate",
          personalAffiliateAccruals: "/personal/affiliate/accruals",
          personalAffiliateWithdrawals: "/personal/affiliate/withdrawals",
          personalAffiliateWithdraw: "/personal/affiliate/withdraw",
          personalProfile: "/personal/profile",
          personalProfileUpdate: "/personal/profile/update",
          personalCards: "/personal/cards",
          personalCardsDelete: "/personal/cards/delete",
          partners: "/api/partners",
          faqs: "/faqs",
          contacts: "/api/contacts",
          saveMetricks: "/save-metricks",
          saveVisitor: "/save-visitor",
          prizedrawCheck: "/prizedraw/check",
          showMail: "/show-mail",
          unsubscribe: "/unsubscribe",
          socials: "/socials",
          page: "/page",
          cashReviews: "/cash-reviews",
          findUser: "/find-users",
          activateUser: "/activate-user",
          ddosTest: "/zhopa",
          challenge: "/challenge",
          receiptCash: "/cash-receipt/retrieveUploadSettings",
          receiptCashUpload: "/cash-receipt/upload",
        };
      },
      584: function (e, r) {
        "use strict";
        r.Z = {
          empty: "error.empty",
          email: "error.email",
          phone: "error.phone",
          password: "error.password",
          oldPassword: "error.password",
          newPassword: "error.password",
          sbpBank: "error.sbpBank",
          code: "error.code",
          cardUserLastName: "error.incorrect_card_client_name",
          cardUserFirstName: "error.incorrect_card_client_name",
          cardUserMiddleName: "error.incorrect_card_client_name",
          cardUserNumber: "error.card_not_valid",
          cardNumberField: "error.card_not_valid",
          card_image_size: "error.card_max_upload_size",
          card_load_new_photo: "error.card_load_new_photo",
          card_format_file_title: "error.card_format_file_title",
          card_format_file_text: "error.card_format_file_text",
          confirm_password: "error.confirm_password",
          invalid_credentials: "error.invalid_credentials",
          empty_login: "error.empty_login",
          long_login: "error.long_login",
          empty_password: "error.empty_password",
          long_password: "error.long_password",
          password_too_short: "error.password_too_short",
          unknown_client: "error.unknown_client",
          user_not_active: "error.user_not_active",
          user_already_exists: "error.user_already_exists",
          service_internal_error: "error.service_internal_error",
          incorrect_signup_token: "error.incorrect_signup_token",
          incorrect_signup_code: "error.incorrect_signup_code",
          already_authenticated: "error.already_authenticated",
          signup_token_not_found: "error.signup_token_not_found",
          signup_max_code_attempts: "error.signup_max_code_attempts",
          signup_invalid_code: "error.signup_invalid_code",
          resend_too_early: "error.resend_too_early",
          user_not_found: "error.user_not_found",
          incorrect_payload: "error.incorrect_payload",
          rate_not_found: "error.rate_not_found",
          rate_disabled: "error.rate_disabled",
          incorrect_wallet: "error.incorrect_wallet",
          empty_wallet_from: "error.empty_wallet_from",
          incorrect_payeer_wallet_from: "error.incorrect_payeer_wallet_from",
          incorrect_card_number: "error.incorrect_card_number",
          empty_tag: "error.empty_tag",
          incorrect_captcha: "error.incorrect_captcha",
          active_orders_limit_excess: "error.active_orders_limit_excess",
          order_creation_error: "error.order_creation_error",
          restore_token_not_found: "error.restore_token_not_found",
          restore_change_pass_token_generated:
            "error.restore_change_pass_token_generated",
          restore_invalid_code: "error.restore_invalid_code",
          restore_max_code_attempts: "error.restore_max_code_attempts",
          order_status_not_allows_confirmation:
            "error.order_status_not_allows_confirmation",
          order_wallet_address_not_empty:
            "error.order_wallet_address_not_empty",
          empty_card_file: "error.empty_card_file",
          empty_card_client_name: "error.empty_card_client_name",
          empty_card_number: "error.empty_card_number",
          incorrect_card_client_name: "error.incorrect_card_client_name",
          card_not_valid: "error.card_not_valid",
          card_max_upload_size: "error.card_max_upload_size",
          card_file_type_not_allowed: "error.card_file_type_not_allowed",
          card_file_not_found: "error.card_file_not_found",
          withdraw_amount_lower_min: "error.withdraw_amount_lower_min",
          withdraw_empty_amount: "error.withdraw_empty_amount",
          withdraw_insufficient_funds: "error.withdraw_insufficient_funds",
          widthdraw_failed: "error.widthdraw_failed",
          profile_old_pass_is_empty: "error.profile_old_pass_is_empty",
          profile_new_pass_is_short: "error.profile_new_pass_is_short",
          profile_old_pass_invalid: "error.profile_old_pass_invalid",
          unsubscription_missing_params: "error.unsubscription_missing_params",
          incorrect_unsubscription_token:
            "error.incorrect_unsubscription_token",
          order_not_found: "error.order_not_found",
          forbidden: "error.service_internal_error",
          solve_challenge: "error.solve_challenge",
          card_form_id_is_empty: "error.card_form_id_is_empty",
          bin_code_error: "error.bin_code_error",
          card_in_black_list_error: "error.card_in_black_list_error",
          blocked: "error.service_internal_error",
          cash_is_not_active: "error.cash_is_not_active",
          message_not_found: "error.message_not_found",
          chat_file_max_upload_size: "error.chat_file_max_upload_size",
          chat_file_type_not_allowed: "error.chat_file_type_not_allowed",
          chat_file_not_found: "error.chat_file_not_found",
          empty_chat_file: "error.chat_file_not_found",
          upload_file_failed: "error.upload_file_failed",
          message_is_empty: "error.message_is_empty",
          prepared_message_not_found: "prepared_message_not_found",
          unauthorized: "error.service_internal_error",
          requests_limit: "error.service_internal_error",
          incorrect_bank: "error.incorrect_bank",
          get_3ds_fail: "error.service_internal_error",
          card_expire_not_valid: "error.card_expire_not_valid",
          card_cvv_not_valid: "error.card_cvv_not_valid",
          change_wallet_invalid_address: "error.change_wallet_invalid_address",
          change_wallet_invalid_wallet: "error.change_wallet_invalid_address",
          change_wallet_need_same_wallet:
            "error.change_wallet_need_same_wallet",
          change_wallet_wallet_must_be_different:
            "error.change_wallet_wallet_must_be_different",
          change_wallet_refund_already_added:
            "error.change_wallet_refund_already_added",
          change_wallet_common_error: "error.change_wallet_fail",
          incorrect_file_size: "error.card_max_upload_size",
          incorrect_file_format: "error.card_file_type_not_allowed",
          upload_processing_error: "error.service_internal_error",
          already_uploaded: "error.already_uploaded",
          receipt_format_file: "error.receipt_format_file",
          document_max_upload_size: "error.card_max_upload_size",
        };
      },
      3493: function (e, r, t) {
        "use strict";
        t.d(r, {
          V: function () {
            return n;
          },
          W: function () {
            return o;
          },
        });
        var a = t(4870);
        const o = {
            OK: 200,
            FORBIDDEN: 403,
            UNAUTHORIZED: 401,
            CONFLICT: 409,
            TOO_MANY_REQUESTS: 429,
            NOT_FOUND: 404,
            INTERNAL_SERVER_ERROR: 500,
          },
          n = (0, a.iH)(
            "zkyMjY0YjYyZWY0YjMxNWYxZmRhMGM2NTk3YjM1YmFkYjIxOGY1MDNlM2QwNWNiNzM3YTViMDA1YWNkNzBiNzFmYTU4NmZjZjVjZjFkYjdiN2RiZWFiNWYzODRkYmRhNmQ5ZjE4MjE5ZDNlOGRlNGQ2OTcxMzM0MWFiYTkxMGVlNzI2ZGNjZDc1NzZkZTU1ZTg1NDRjOGJhMTk0ODNjMGU5NWQzNGRiNWJjNzRiNmI0Mj"
          );
      },
      2972: function (e, r, t) {
        "use strict";
        t.d(r, {
          V: function () {
            return o;
          },
          r: function () {
            return n;
          },
        });
        var a = t(4870);
        const o = {
            email: new RegExp(
              /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
            ),
            phone: new RegExp(/^\+7\d{10}$/),
            phoneNotAllow: new RegExp(/^(?:$|\+7(?:\d{10})?)$/),
            password: new RegExp(/^.{6,}$/),
            cardNameClient: new RegExp(/^[А-Яа-яЁё]+(-[А-Яа-яЁё]+)*$/),
            numberOnly: new RegExp(/[^0-9]/g, ""),
            min_10_symbols: new RegExp(/^.{10,}$/),
          },
          n = (0, a.iH)(
            "MTExMWQ3MDZmYjE5YzdmNDlkMWZmNjcxYjBiNGQ3NTI4ZDljZDQzN2FiZTllZTAxNjJhNWQ3NjVmMDhmODIxNTkzYTQ0NGU1YmIxYThlMzBhZjhhMGJjMjhjZjQxOWJiZTkyNWJhOTllMWNjMGY0NjIzOGMwZGQ2OWUwM2M2NWU5ZWQ3YmNlMzYwOTNkMTRhMzM2OWY2Y2RkZTU5NzU3M2ZiZGEwNzIxODJiYjVlOGY5Y"
          );
      },
      4601: function (e, r, t) {
        "use strict";
        t.d(r, {
          LD: function () {
            return h;
          },
          QS: function () {
            return C;
          },
          f0: function () {
            return f;
          },
        });
        t(560);
        var a = t(4870),
          o = t(5122),
          n = t(9865),
          i = t(2972),
          s = t(8105),
          c = t(3493),
          l = t(5994),
          d = t(8948),
          u = t(584),
          _ = t(2788),
          m = t(3982),
          p = t(1519);
        const f = () => {
            const e = (0, n.t)(),
              r = (0, p.F)(),
              t = (0, a.iH)(!1),
              { handleError: c } = (0, l.Z)(),
              u = (0, a.qj)({
                email: {
                  name: "log_in.email.name",
                  value: "",
                  error: "",
                  type: "text",
                  pattern: i.V.email,
                },
                password: {
                  name: "log_in.password.name",
                  value: "",
                  error: "",
                  type: "password",
                  pattern: i.V.password,
                },
              }),
              m = async () => {
                const { email: a, password: n } = u;
                if (!(0, o.V$)(u)) return;
                t.value = !0;
                const i = {
                  login: a.value,
                  password: n.value,
                  device: "Facade",
                  captchaCode: r.captchaCode,
                };
                try {
                  const t = await d.Z.apiEx.post(s.Y.login, i),
                    o = { email: a.value, authToken: t.data.authToken };
                  e.saveUserInfo(o),
                    (e.user.isAuthenticated = !0),
                    localStorage.setItem("isAuth", !0),
                    _.Z.push({ name: "home" }),
                    (r.captchaCode = "");
                } catch (l) {
                  l.includes("login") ? c(l, a) : c(l, n);
                } finally {
                  t.value = !1;
                }
              },
              f = async () => {
                try {
                  await d.Z.apiEx.post(s.Y.logout, { logout: "true" }),
                    localStorage.removeItem("authToken"),
                    localStorage.removeItem("userToken"),
                    localStorage.removeItem("email"),
                    (e.user.isAuthenticated = !1),
                    localStorage.removeItem("isAuth"),
                    window.location.reload();
                } catch (r) {
                  c(r);
                }
              };
            return {
              isLoading: t,
              form: u,
              userLoggedInEvent: m,
              userLoggedOutEvent: f,
            };
          },
          C = () => {
            const e = (0, n.t)(),
              r = (0, p.F)(),
              t = (0, a.iH)(!1),
              u = (0, m.O)(),
              { handleError: f } = (0, l.Z)(),
              C = (0, a.qj)({
                email: {
                  name: "sign_up.email.name",
                  value: "",
                  error: "",
                  type: "text",
                  pattern: i.V.email,
                },
                password: {
                  name: "sign_up.password.name",
                  value: "",
                  error: "",
                  type: "password",
                  pattern: i.V.password,
                },
                confirm_password: {
                  name: "sign_up.confirm_password.name",
                  value: "",
                  error: "",
                  type: "password",
                  pattern: i.V.password,
                },
              }),
              h = (0, a.qj)({
                code: {
                  name: "sign_up.code.name",
                  value: "",
                  error: "",
                  type: "text",
                  pattern: i.V.password,
                  max: "6",
                },
              }),
              g = async () => {
                const { email: a, password: n } = C,
                  { affiliateInfo: i } = u;
                if (!(0, o.V$)(C)) return;
                t.value = !0;
                const c = {
                  login: a.value,
                  password: n.value,
                  invitingId: i.pid,
                  locale: localStorage.getItem("user-locale"),
                  captchaCode: r.captchaCode,
                };
                try {
                  const t = await d.Z.apiEx.post(s.Y.singup, c),
                    a = { token: t.data.token };
                  e.saveUserInfo(a), (r.captchaCode = "");
                } catch (l) {
                  l.includes("login") ? f(l, a) : f(l, n);
                } finally {
                  t.value = !1;
                }
              },
              v = async () => {
                if (!(0, o.V$)(h)) return;
                t.value = !0;
                const a = { token: e.user.token, code: h.code.value };
                try {
                  await d.Z.apiEx.post(s.Y.singupConfirm, a),
                    _.Z.push({ name: "logIn" }),
                    localStorage.removeItem("userToken"),
                    (r.captchaCode = "");
                } catch (n) {
                  f(n, h.code);
                } finally {
                  t.value = !1;
                }
              },
              w = async () => {
                t.value = !0;
                const a = { token: e.user.token, captchaCode: r.captchaCode };
                try {
                  const e = await d.Z.apiEx.post(s.Y.signupResend, a);
                  if (e.status == c.W.OK) return e;
                } catch (o) {
                  f(o, h.code);
                } finally {
                  t.value = !1;
                }
              };
            return {
              isLoading: t,
              form: C,
              confirm: h,
              userRegisteredEvent: g,
              userConfirmRegisteredEvent: v,
              userConfirmResendEvent: w,
            };
          },
          h = () => {
            const e = (0, a.iH)(!1),
              r = (0, p.F)(),
              t = (0, a.iH)(""),
              n = (0, a.iH)(!1),
              { handleError: m } = (0, l.Z)(),
              f = (0, a.qj)({
                email: {
                  name: "sign_up.email.name",
                  value: "",
                  error: "",
                  type: "text",
                  pattern: i.V.email,
                },
              }),
              C = (0, a.qj)({
                code: {
                  name: "recover_password.code.name",
                  value: "",
                  error: "",
                  type: "text",
                  pattern: i.V.password,
                  max: "6",
                },
              }),
              h = (0, a.qj)({
                password: {
                  name: "recover_password.password.name",
                  value: "",
                  error: "",
                  type: "password",
                  pattern: i.V.password,
                },
              }),
              g = async () => {
                if (!(0, o.V$)(f)) return;
                e.value = !0;
                const a = {
                  login: f.email.value,
                  locale: localStorage.getItem("user-locale"),
                  captchaCode: r.captchaCode,
                };
                try {
                  const e = await d.Z.apiEx.post(s.Y.restore, a);
                  (t.value = e.data.token), (r.captchaCode = "");
                } catch (n) {
                  m(n, f.email);
                } finally {
                  e.value = !1;
                }
              },
              v = async () => {
                if (!(0, o.V$)(C)) return;
                e.value = !0;
                const a = {
                  token: t.value,
                  code: C.code.value.toString(),
                  captchaCode: r.captchaCode,
                };
                try {
                  const e = await d.Z.apiEx.post(s.Y.restoreConfirm, a);
                  (n.value = !0), (t.value = e.data.token);
                } catch (i) {
                  m(i, C.code), (C.code.value = "");
                } finally {
                  e.value = !1;
                }
              },
              w = async () => {
                e.value = !0;
                const a = { token: t.value, captchaCode: r.captchaCode };
                try {
                  const e = await d.Z.apiEx.post(s.Y.restoreResend, a);
                  if (e.status == c.W.OK) return e;
                  r.captchaCode = "";
                } catch (o) {
                  m(o, C.code);
                } finally {
                  e.value = !1;
                }
              },
              b = async () => {
                e.value = !0;
                const a = {
                  token: t.value,
                  password: h.password.value,
                  captchaCode: r.captchaCode,
                };
                try {
                  await d.Z.apiEx.post(s.Y.restoreChange, a),
                    _.Z.push({ name: "logIn" });
                } catch (o) {
                  h.password.error = u.Z[o];
                } finally {
                  e.value = !1;
                }
              };
            return {
              form: f,
              restoreToken: t,
              isLoading: e,
              confirm: C,
              newPassword: h,
              isSetNewPassword: n,
              userChangePasswordEvent: b,
              userRecoveredPasswordEvent: g,
              userConfirmRecoveredEvent: v,
              userConfirmResendEvent: w,
            };
          };
      },
      2245: function (e, r, t) {
        "use strict";
        t.d(r, {
          d: function () {
            return i;
          },
          x: function () {
            return n;
          },
        });
        var a = t(4870),
          o = t(5985);
        const n = () => {
            const e = (0, a.iH)(null),
              r = (0, a.iH)(null),
              t = (r) => {
                if (e.value == r) return (e.value = null);
                e.value = r;
              },
              n = (r) => {
                e.value = null;
              };
            return (
              (0, o.t)(r, () => {
                e.value = null;
              }),
              {
                dropdownIsActive: e,
                container: r,
                openDropdownEvent: t,
                closeDropdownEvent: n,
              }
            );
          },
          i = (0, a.iH)(
            "BmMWEyMDg3MTAyMWYwOTc3ODc5MTY4MDU1ZjUzNTZjMGQyOWIyMzk5OGQ5YmEzNDEyZjU0YzFlYzQxZTEyMWEwYjczM2Y3Y2E1ZmFiZTM2YmJhNmUwNjViNDU2MjlkYTdhYzM3OWE1Nzc0Yzk3ZmYyYzBhYmFjNDU1MmY2OGQxY2YzNGVjMjE5MTcwNjBhZmYyNDk0NDNiYjFhZjI"
          );
      },
      5994: function (e, r, t) {
        "use strict";
        var a = t(584),
          o = t(1519);
        const n = () => {
          const e = (0, o.F)(),
            r = (r, t, o = !1) => {
              const n = a.Z[r];
              n
                ? o
                  ? ((e.inform.status = "error"), (e.inform.text = n))
                  : (t.error = n)
                : e.setGlobalError(r);
            };
          return { handleError: r };
        };
        r.Z = n;
      },
      6219: function (e, r, t) {
        "use strict";
        function a(e) {
          let r = e.replace(/\s/g, "").replace(/[^\d]/g, "");
          return (
            r.length > 18 && (r = r.substring(0, 18)),
            r.replace(/(.{4})/g, "$1 ").trim()
          );
        }
        t.d(r, {
          Z: function () {
            return a;
          },
        });
      },
      5985: function (e, r, t) {
        "use strict";
        t.d(r, {
          t: function () {
            return o;
          },
        });
        var a = t(3396);
        const o = (e = null, r = () => {}) => {
          function t(t) {
            e.value && !e.value.contains(t.target) && r();
          }
          (0, a.bv)(() => {
            document.addEventListener("mousedown", t);
          }),
            (0, a.Ah)(() => {
              document.removeEventListener("mousedown", t);
            });
        };
      },
      5122: function (e, r, t) {
        "use strict";
        t.d(r, {
          TF: function () {
            return n;
          },
          V$: function () {
            return o;
          },
          Wt: function () {
            return s;
          },
          tv: function () {
            return i;
          },
        });
        var a = t(584);
        const o = (e) => {
            let r = 0;
            return (
              Object.entries(e).forEach(([t, o], n) =>
                "sbpBank" !== t || o.code
                  ? "tel" != o.type || o.pattern.test(o.value)
                    ? !o.value && e[t].isRequired
                      ? ((e[t].error = a.Z.empty), void (r += 1))
                      : o.pattern && !o.pattern.test(o.value)
                      ? ((o.error = a.Z[t]), void (r += 1))
                      : t.includes("confirm_password") &&
                        e["password"].value !== e["confirm_password"].value
                      ? ((e["confirm_password"].error = a.Z.confirm_password),
                        void (r += 1))
                      : void 0
                    : ((o.error = a.Z.phone), void (r += 1))
                  : ((e[t].error = a.Z.incorrect_bank), void (r += 1))
              ),
              0 == r
            );
          },
          n = (e, r) => {
            let t = 0;
            return "sbpBank" !== r || e.code
              ? e.value
                ? "tel" != e.type || e.pattern.test(e.value)
                  ? e.pattern && !e.pattern.test(e.value)
                    ? ((e.error = a.Z[r]), void (t += 1))
                    : 0 == t
                  : ((e.error = a.Z.phone), void (t += 1))
                : ((e.error = a.Z.empty), void (t += 1))
              : ((e.error = a.Z.incorrect_bank), void (t += 1));
          },
          i = (e, r, t = null) => {
            const o = (r, t) => {
              (e.file = null),
                (e.status = "error"),
                (e.icon = "warning"),
                (e.title = r),
                (e.text = t);
            };
            if (e.file) {
              const n = e.file.name
                  .substring(e.file.name.lastIndexOf(".") + 1)
                  .toLowerCase(),
                i = ["jpeg", "jpg", "png"],
                s = ["jpeg", "jpg", "png", "pdf"];
              return e.file.size > r
                ? (o(a.Z.card_image_size, a.Z.card_load_new_photo), !1)
                : "receipt" === t || i.includes(n)
                ? !("receipt" === t && !s.includes(n)) ||
                  (o(a.Z.card_format_file_title, a.Z.receipt_format_file), !1)
                : (o(a.Z.card_format_file_title, a.Z.card_format_file_text),
                  !1);
            }
          },
          s = (e, r) => {
            e[r].error = "";
          };
      },
      1336: function (e, r, t) {
        "use strict";
        var a = t(9242),
          o = t(1020),
          n = (t(8858), t(1318), t(3228), t(3396)),
          i = t(4870),
          s = t(7139),
          c = t(9865),
          l = t(389),
          d = t(4601);
        const u = { class: "header__dropdown" };
        var _ = {
          __name: "BaseDropdown",
          props: { links: Object },
          emits: ["close"],
          setup(e, { emit: r }) {
            const t = r,
              { userLoggedOutEvent: a } = (0, d.f0)();
            return (r, o) => {
              const c = (0, n.up)("router-link");
              return (
                (0, n.wg)(),
                (0, n.iD)("div", u, [
                  ((0, n.wg)(!0),
                  (0, n.iD)(
                    n.HY,
                    null,
                    (0, n.Ko)(
                      e.links,
                      (e, d) => (
                        (0, n.wg)(),
                        (0, n.iD)(
                          n.HY,
                          { key: d },
                          [
                            "log_out" !== d
                              ? ((0, n.wg)(),
                                (0, n.j4)(
                                  c,
                                  {
                                    key: 0,
                                    class: "header__dropdown-item",
                                    onClick: o[0] || (o[0] = (e) => t("close")),
                                    to: e.path,
                                  },
                                  {
                                    default: (0, n.w5)(() => [
                                      (0, n.Uk)((0, s.zw)(r.$t(e.value)), 1),
                                    ]),
                                    _: 2,
                                  },
                                  1032,
                                  ["to"]
                                ))
                              : ((0, n.wg)(),
                                (0, n.iD)(
                                  "button",
                                  {
                                    key: 1,
                                    class: "header__dropdown-exit",
                                    onClick:
                                      o[1] ||
                                      (o[1] = (...e) =>
                                        (0, i.SU)(a) && (0, i.SU)(a)(...e)),
                                  },
                                  [
                                    (0, n.Wm)(l.Z, {
                                      name: "exit",
                                      class: "icon",
                                    }),
                                    (0, n.Uk)(
                                      " " + (0, s.zw)(r.$t(e.value)),
                                      1
                                    ),
                                  ]
                                )),
                          ],
                          64
                        )
                      )
                    ),
                    128
                  )),
                ])
              );
            };
          },
        };
        const m = _;
        var p = m,
          f = t(5985);
        const C = "MOBILE",
          h = "TABLET",
          g = "DESKTOP",
          v = (e = {}) => {
            const { mobile: r = null, tablet: t = null } = e;
            let a = r || 768,
              o = t || 922,
              s = (0, i.iH)(c(window.innerWidth));
            function c(e) {
              return e < a ? C : e < o ? h : g;
            }
            const l = () => {
              s.value = c(window.innerWidth);
            };
            return (
              (0, n.bv)(() => {
                window.addEventListener("resize", l);
              }),
              (0, n.Ah)(() => {
                window.removeEventListener("resize", l);
              }),
              { device: s }
            );
          },
          w = { class: "header__nav-name" };
        var b = {
          __name: "NavbarHeader",
          props: { isMenuOpen: Boolean, closeMenu: Function },
          setup(e) {
            const r = v(),
              t = e,
              a = (0, c.t)(),
              o = (0, i.iH)(null),
              d = (0, i.iH)(!1),
              u = (0, n.Fl)(() => ({
                about: {
                  value: "footer.links.about",
                  path: "/about",
                  name: "about",
                },
                for_partner: {
                  value: "footer.links.for_partner",
                  path: "/partners",
                  name: "partners",
                },

                faq: { value: "footer.links.faq", path: "/faq", name: "faq" },
                contacts: {
                  value: "footer.links.contacts",
                  path: "/contacts",
                  name: "contacts",
                },
                rules_service: {
                  value: "footer.links.rules_service",
                  path: "/agreement",
                  name: "agreement",
                },
                support: { name: "header.links.support", isSupport: !0 },
              })),
              _ = (0, n.Fl)(() => ({
                history: {
                  value: "header.dropdown_list.history",
                  path: "/personal",
                },
                partner: {
                  value: "header.dropdown_list.partner",
                  path: "/personal/referal",
                },
                setting: {
                  value: "header.dropdown_list.setting",
                  path: "/personal/settings",
                },
                cards: {
                  value: "header.dropdown_list.cards",
                  path: "/personal/cards",
                },
                log_out: { value: "header.dropdown_list.log_out", path: "/" },
              })),
              m = () => {
                t.closeMenu(), "MOBILE" !== r.device.value && (d.value = !1);
              };
            (0, f.t)(o, () => {
              "MOBILE" !== r.device.value && (d.value = !1);
            }),
              (0, n.bv)(() => {
                "MOBILE" === r.device.value && (d.value = !0);
              });
            const C = () => {};
            return (r, t) => {
              const c = (0, n.up)("RouterLink"),
                f = (0, n.up)("router-link");
              return (
                (0, n.wg)(),
                (0, n.iD)(
                  "div",
                  {
                    class: (0, s.C_)(["header__nav", { active: e.isMenuOpen }]),
                  },
                  [
                    ((0, n.wg)(!0),
                    (0, n.iD)(
                      n.HY,
                      null,
                      (0, n.Ko)(
                        u.value,
                        (t, a) => (
                          (0, n.wg)(),
                          (0, n.iD)(
                            n.HY,
                            { key: a },
                            [
                              t.isSupport
                                ? ((0, n.wg)(),
                                  (0, n.iD)(
                                    "a",
                                    {
                                      key: 0,
                                      class: "header__nav-link --support",
                                      type: "button",
                                      href: "https://t.me/coinfiber_com",
                                      target: "_blank",
                                    },
                                    [
                                      "support" == a
                                        ? ((0, n.wg)(),
                                          (0, n.j4)(l.Z, {
                                            key: 0,
                                            name: "chat",
                                            class: "icon-chat",
                                          }))
                                        : (0, n.kq)("", !0),
                                      (0, n.Uk)(
                                        " " + (0, s.zw)(r.$t(t.name)),
                                        1
                                      ),
                                    ]
                                  ))
                                : ((0, n.wg)(),
                                  (0, n.j4)(
                                    c,
                                    {
                                      key: 1,
                                      class: "header__nav-link",
                                      onClick: e.closeMenu,
                                      to: { name: t.name },
                                    },
                                    {
                                      default: (0, n.w5)(() => [
                                        (0, n.Uk)((0, s.zw)(r.$t(t.value)), 1),
                                      ]),
                                      _: 2,
                                    },
                                    1032,
                                    ["onClick", "to"]
                                  )),
                            ],
                            64
                          )
                        )
                      ),
                      128
                    )),
                  ],
                  2
                )
              );
            };
          },
        };
        const y = b;
        var k = y;
        const x = { class: "header" },
          L = { class: "header__mob-info" },
          H = { class: "wrap" },
          T = { class: "header__box" },
          M = { key: 0, class: "header__logo" },
          F = { class: "header__info" };
        var Z = {
          __name: "Header",
          setup(e) {
            const r = (0, i.iH)(!1),
              t = () => {
                r.value = !r.value;
              },
              a = () => {
                r.value = !1;
              },
              o = () => {};
            return (e, i) => {
              const c = (0, n.up)("router-link");
              return (
                (0, n.wg)(),
                (0, n.iD)(
                  n.HY,
                  null,
                  [
                    (0, n._)(
                      "div",
                      {
                        class: (0, s.C_)(["overlay", { active: r.value }]),
                        onClick: i[0] || (i[0] = (e) => (r.value = !1)),
                      },
                      null,
                      2
                    ),
                    (0, n._)("header", x, [
                      (0, n._)("div", L, (0, s.zw)(e.$t("header.info")), 1),
                      (0, n._)("div", H, [
                        (0, n._)("div", T, [
                          (0, n._)(
                            "div",
                            { class: "header__burger", onClick: t },
                            [
                              r.value
                                ? ((0, n.wg)(),
                                  (0, n.j4)(l.Z, {
                                    key: 1,
                                    name: "close",
                                    width: "20px",
                                    height: "20px",
                                  }))
                                : ((0, n.wg)(),
                                  (0, n.j4)(l.Z, {
                                    key: 0,
                                    name: "burger",
                                    width: "20px",
                                    height: "20px",
                                  })),
                            ]
                          ),
                          ((0, n.wg)(),
                          (0, n.j4)(
                            "a",
                            {
                              key: 1,
                              href: "/",
                              class: "header__logo",
                            },
                            {
                              default: (0, n.w5)(() => [
                                (0, n.Wm)(l.Z, {
                                  name: "logo",
                                  view: "0 0 207 29",
                                  class: "icon-logo",
                                }),
                              ]),
                              _: 1,
                            }
                          )),
                          (0, n._)(
                            "button",
                            {
                              type: "button",
                              class: (0, s.C_)([
                                "header__support",
                                { hide: "order" == e.$route.name },
                              ]),
                              onClick: () => {
                                window.location.href =
                                  "https://t.me/coinfiber_com";
                              },
                            },
                            [
                              (0, n.Wm)(l.Z, {
                                name: "chat",
                                width: "20px",
                                height: "20px",
                                class: "icon-chat",
                              }),
                            ],
                            2
                          ),
                          (0, n._)("div", F, (0, s.zw)(e.$t("header.info")), 1),
                          (0, n.Wm)(
                            k,
                            { "close-menu": a, "is-menu-open": r.value },
                            null,
                            8,
                            ["is-menu-open"]
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
        const V = Z;
        var S = V,
          E = t(7692),
          A = t(2483),
          I = t(8809),
          U = (0, E.o)({
            locale: "ru",
            fallbackLocale: "ru",
            legacy: !1,
            warnHtmlMessage: !1,
            globalInjection: !0,
            messages: { ru: I },
          });
        const R = {
          get defaultLocale() {
            return "ru";
          },
          get supportedLocales() {
            return "en,ru".split(",");
          },
          get currentLocale() {
            return U.global.locale.value;
          },
          set currentLocale(e) {
            U.global.locale.value = e;
          },
          isLocaleSupported(e) {
            return R.supportedLocales.includes(e);
          },
          getUserLocale() {
            const e =
              window.navigator.language ||
              window.navigator.userLanguage ||
              R.defaultLocale;
            return { locale: e, localeNoRegion: e.split("-")[0] };
          },
          getPersistedLocale() {
            const e = localStorage.getItem("user-locale");
            return R.isLocaleSupported(e) ? e : null;
          },
          guessDefaultLocale() {
            const e = R.getPersistedLocale();
            if (e) return e;
            const r = R.getUserLocale();
            return R.isLocaleSupported(r.locale)
              ? r.locale
              : R.isLocaleSupported(r.localeNoRegion)
              ? r.localeNoRegion
              : R.defaultLocale;
          },
          async switchLanguage(e) {
            return (
              await R.loadLocaleMessages(e),
              (R.currentLocale = e),
              document.querySelector("html").setAttribute("lang", e),
              localStorage.setItem("user-locale", e),
              e
            );
          },
          async loadLocaleMessages(e) {
            if (!U.global.availableLocales.includes(e)) {
              const r = await t(471)(`./${e}.json`);
              U.global.setLocaleMessage(e, r.default);
            }
            return (0, n.Y3)();
          },
          async selectedUserLanguage() {
            await R.switchLanguage(R.guessDefaultLocale());
          },
        };
        var N = R,
          j = t(1519),
          P = t(3554);
        const q = { class: "footer__lang-name" },
          O = { key: 0, class: "footer__dropdown" },
          Y = ["onClick"],
          D = { class: "footer__lang-name" };
        var B = {
          __name: "LanguageSwitcher",
          setup(e) {
            (0, P.x)();
            const { t: r } = (0, E.QT)(),
              t = N.supportedLocales,
              a = (0, i.iH)(!1),
              o = (0, i.iH)(null),
              c = (0, A.tv)(),
              d = (0, j.F)();
            let u = (0, i.iH)(N.guessDefaultLocale());
            const _ = async (e) => {
              const t = e;
              await N.switchLanguage(t),
                (document.title = r(c.currentRoute.value.meta.title)),
                (a.value = !1),
                (u.value = e),
                (d.locale = e),
                document.location.reload();
            };
            return (
              (0, f.t)(o, () => {
                a.value = !1;
              }),
              (0, n.YP)(
                () => c.currentRoute.value.name,
                () => {
                  document.title = r(c.currentRoute.value.meta.title);
                }
              ),
              (e, c) => (0, n.wg)()
            );
          },
        };
        const z = B;
        var W = z;
        const $ = { class: "footer__nav" },
          G = { key: 0, class: "footer__nav-link" };
        var Q = {
          __name: "NavbarFooter",
          setup(e) {
            const r = (0, n.Fl)(() => ({
              all_ex: { value: "footer.links.all_ex", path: "/" },
              about: {
                value: "footer.links.about",
                path: "/about",
                name: "about",
              },
              for_partner: {
                value: "footer.links.for_partner",
                path: "/partners",
                name: "partners",
              },

              faq: { value: "footer.links.faq", path: "/faq", name: "faq" },
              contacts: {
                value: "footer.links.contacts",
                path: "/contacts",
                name: "contacts",
              },
              rules_service: {
                value: "footer.links.rules_service",
                path: "/agreement",
                name: "agreement",
              },
            }));
            return (e, t) => {
              const a = (0, n.up)("router-link");
              return (
                (0, n.wg)(),
                (0, n.iD)("nav", $, [
                  (0, n.Wm)(W),
                  ((0, n.wg)(!0),
                  (0, n.iD)(
                    n.HY,
                    null,
                    (0, n.Ko)(
                      r.value,
                      (r, t) => (
                        (0, n.wg)(),
                        (0, n.iD)(
                          n.HY,
                          { key: t },
                          [
                            "all_ex" == t && "home" == e.$route.name
                              ? ((0, n.wg)(),
                                (0, n.iD)(
                                  "div",
                                  G,
                                  (0, s.zw)(e.$t(r.value)),
                                  1
                                ))
                              : ((0, n.wg)(),
                                (0, n.j4)(
                                  a,
                                  {
                                    key: 1,
                                    class: "footer__nav-link",
                                    to: r.path,
                                  },
                                  {
                                    default: (0, n.w5)(() => [
                                      (0, n.Uk)((0, s.zw)(e.$t(r.value)), 1),
                                    ]),
                                    _: 2,
                                  },
                                  1032,
                                  ["to"]
                                )),
                          ],
                          64
                        )
                      )
                    ),
                    128
                  )),
                ])
              );
            };
          },
        };
        const K = Q;
        var J = K;
        const X = { class: "footer__social" },
          ee = {
            href: "",
            target: "_blank",
            class: "footer__social-link",
          },
          re = {
            href: "",
            target: "_blank",
            class: "footer__social-link",
          },
          te = {
            href: "",
            target: "_blank",
            class: "footer__social-link",
          },
          ae = {
            href: "",
            target: "_blank",
            class: "footer__social-link",
          };
        var oe = {
          __name: "SocialsFooter",
        };
        const ne = oe;
        var ie = ne,
          se = t(8352);
        const ce = { class: "footer__copyrate" },
          le = { class: "footer__copyrate-text" },
          de = (0, n._)(
            "a",
            { href: "https://getblock.net/", target: "_blank" },
            "getBlock",
            -1
          ),
          ue = { class: "footer__copyrate-text" },
          _e = (0, n._)(
            "a",
            { href: "https://t.me/coinfiber_com", target: "_blank" },
            "IvanPay",
            -1
          ),
          me = { class: "footer__copyrate-text" },
          pe = { class: "footer__copyrate-wrapper" },
          fe = { class: "footer__copyrate-info" },
          Ce = ["href"],
          he = ["src"];
        var ge = {
          __name: "Coopyrate",
          setup(e) {
            const r = (0, se.s)(),
              t = (0, j.F)();
            (0, n.bv)(async () => {
              await t.waitForLocale();
            });
            const a = (0, n.Fl)(() =>
              r.partners.filter((e) => "1" == e.isBestPartner)
            );
            return (e, r) => (
              (0, n.wg)(),
              (0, n.iD)("div", ce, [
                (0, n._)("div", le, [
                  (0, n.Uk)((0, s.zw)(e.$t("footer.copyrate.aml")) + " - ", 1),
                  de,
                ]),
                (0, n._)("div", ue, [
                  (0, n.Uk)(
                    (0, s.zw)(e.$t("footer.copyrate.ivan_pay")) + " - ",
                    1
                  ),
                  _e,
                ]),
                (0, n._)("div", me, (0, s.zw)(e.$t("footer.copyrate.year")), 1),
                (0, n._)("div", pe, [
                  (0, n._)("div", fe, [
                    ((0, n.wg)(!0),
                    (0, n.iD)(n.HY, null, (0, n.Ko)(a.value), 128)),
                  ]),
                ]),
              ])
            );
          },
        };
        const ve = ge;
        var we = ve;
        const be = { class: "footer" },
          ye = { class: "wrap" },
          ke = { class: "footer__box" },
          xe = { class: "footer__info" },
          Le = { key: 0, class: "footer__logo" },
          He = { class: "footer__line" },
          Te = {
            href: "https://t.me/coinfiber_com",
            target: "_blank",
            class: "footer__channel",
          },
          Me = { class: "footer__channel-text" };
        var Fe = {
          __name: "Footer",
          setup(e) {
            return (e, r) => {
              const t = (0, n.up)("router-link");
              return (
                (0, n.wg)(),
                (0, n.iD)("footer", be, [
                  (0, n._)("div", ye, [
                    (0, n._)("div", ke, [
                      (0, n._)("div", xe, [
                        "home" == e.$route.name
                          ? ((0, n.wg)(),
                            (0, n.iD)("div", Le, [
                              (0, n.Wm)(l.Z, {
                                view: "0 0 207 29",
                                name: "logo_footer",
                                class: "icon",
                              }),
                            ]))
                          : ((0, n.wg)(),
                            (0, n.j4)(
                              t,
                              {
                                key: 1,
                                to: { name: "home" },
                                class: "footer__logo",
                              },
                              {
                                default: (0, n.w5)(() => [
                                  (0, n.Wm)(l.Z, {
                                    view: "0 0 207 29",
                                    name: "logo_footer",
                                    class: "icon",
                                  }),
                                ]),
                                _: 1,
                              }
                            )),
                        (0, n._)("div", He, (0, s.zw)(e.$t("footer.info")), 1),
                        (0, n.Wm)(ie),
                        (0, n._)("a", Te, [
                          (0, n.Wm)(l.Z, {
                            name: "teleg_footer",
                            class: "icon-teleg_ch",
                          }),
                          (0, n._)(
                            "div",
                            Me,
                            (0, s.zw)(e.$t("footer.chanel.text")),
                            1
                          ),
                        ]),
                      ]),
                      (0, n.Wm)(J),
                    ]),
                    (0, n.Wm)(we),
                  ]),
                ])
              );
            };
          },
        };
        const Ze = Fe;
        var Ve = Ze,
          Se = t.p + "img/ok.95ae3a3d.svg",
          Ee = t.p + "img/attention.1cc38272.svg";
        const Ae = { class: "notice" },
          Ie = (0, n._)("div", { class: "over" }, null, -1),
          Ue = { class: "notice__box" },
          Re = { key: 1, class: "notice__box-img", src: Se, alt: "good" },
          Ne = { key: 2, class: "notice__box-img", src: Ee, alt: "bad" },
          je = { class: "notice__title" };
        var Pe = {
          __name: "BaseNotification",
          props: { status: String, text: String, codeError: Number },
          emits: ["onClose"],
          setup(e, { emit: r }) {
            const t = r,
              a = () => {
                window.location.reload();
              };
            return (r, o) => (
              (0, n.wg)(),
              (0, n.iD)("div", Ae, [
                Ie,
                (0, n._)("div", Ue, [
                  "error" !== e.status
                    ? ((0, n.wg)(),
                      (0, n.iD)(
                        "button",
                        {
                          key: 0,
                          type: "button",
                          class: "notice__close",
                          onClick: o[0] || (o[0] = (e) => t("onClose")),
                        },
                        [
                          (0, n.Wm)(l.Z, {
                            name: "close",
                            width: "20px",
                            height: "20px",
                          }),
                        ]
                      ))
                    : (0, n.kq)("", !0),
                  "done" == e.status
                    ? ((0, n.wg)(), (0, n.iD)("img", Re))
                    : (0, n.kq)("", !0),
                  "error" == e.status
                    ? ((0, n.wg)(), (0, n.iD)("img", Ne))
                    : (0, n.kq)("", !0),
                  (0, n._)("h4", je, (0, s.zw)(r.$t(e.text)), 1),
                  429 === e.codeError
                    ? ((0, n.wg)(),
                      (0, n.iD)(
                        "button",
                        {
                          key: 3,
                          type: "button",
                          class: "notice__action",
                          onClick: a,
                        },
                        (0, s.zw)(r.$t("update_page")),
                        1
                      ))
                    : (0, n.kq)("", !0),
                ]),
              ])
            );
          },
        };
        const qe = Pe;
        var Oe = qe;

        var $e = {
          __name: "Draw",
          props: {
            title: String,
            action: String,
            link: String,
            routeLink: String,
          },
          setup(e) {
            return (r, t) => {
              const a = (0, n.up)("router-link");
              return (
                (0, n.wg)(),
                (0, n.iD)("div", Ye, [
                  (0, n._)("div", De, [
                    (0, n._)("div", Be, [
                      (0, n.Wm)(l.Z, {
                        class: "icon",
                        name: "money_bank",
                        width: "52px",
                        height: "48px",
                        view: "0 0 52 48",
                      }),
                      (0, n._)("div", ze, (0, s.zw)(r.$t(e.title)), 1),
                      e.routeLink
                        ? ((0, n.wg)(),
                          (0, n.j4)(
                            a,
                            { key: 0, to: e.link, class: "bot__link" },
                            {
                              default: (0, n.w5)(() => [
                                (0, n.Uk)((0, s.zw)(r.$t(e.action)), 1),
                              ]),
                              _: 1,
                            },
                            8,
                            ["to"]
                          ))
                        : e.link
                        ? ((0, n.wg)(),
                          (0, n.iD)(
                            "a",
                            {
                              key: 1,
                              href: e.link,
                              class: "bot__link",
                              target: "_blank",
                            },
                            (0, s.zw)(r.$t(e.action)),
                            9,
                            We
                          ))
                        : (0, n.kq)("", !0),
                    ]),
                  ]),
                ])
              );
            };
          },
        };
        const Ge = $e;
        var Qe = Ge;
        const Ke = {
            itemscope: "",
            itemtype: "http://schema.org/BreadcrumbList",
            class: "breads",
          },
          Je = { class: "wrap" },
          Xe = { class: "breads__list" },
          er = ["href"],
          rr = { itemprop: "name" },
          tr = { key: 1, itemprop: "name" },
          ar = ["content"];
        var or = {
          __name: "Breadcrumbs",
          setup(e) {
            const { t: r } = (0, E.QT)(),
              t = (0, A.yj)(),
              a = (0, i.iH)([]);
            return (
              (0, n.YP)(
                t,
                () => {
                  "home" !== t.name
                    ? (a.value = [
                        { path: "/", name: "crumbs.main" },
                        { name: t.meta.crumb },
                      ])
                    : (a.value = [{ name: "crumbs.main" }]);
                },
                { immediate: !0 }
              ),
              (e, r) => (
                (0, n.wg)(),
                (0, n.iD)("div", Ke, [
                  (0, n._)("div", Je, [
                    (0, n._)("div", Xe, [
                      ((0, n.wg)(!0),
                      (0, n.iD)(
                        n.HY,
                        null,
                        (0, n.Ko)(
                          a.value,
                          (r, t) => (
                            (0, n.wg)(),
                            (0, n.iD)(
                              "div",
                              {
                                key: t,
                                itemprop: "itemListElement",
                                itemscope: "",
                                itemtype: "http://schema.org/ListItem",
                                class: "breads__box",
                              },
                              [
                                t !== a.value.length - 1
                                  ? ((0, n.wg)(),
                                    (0, n.iD)(
                                      "a",
                                      {
                                        key: 0,
                                        itemprop: "item",
                                        href: r.path,
                                        class: "breads__link",
                                      },
                                      [
                                        (0, n._)(
                                          "span",
                                          rr,
                                          (0, s.zw)(e.$t(r.name)),
                                          1
                                        ),
                                      ],
                                      8,
                                      er
                                    ))
                                  : ((0, n.wg)(),
                                    (0, n.iD)(
                                      "span",
                                      tr,
                                      (0, s.zw)(e.$t(r.name)),
                                      1
                                    )),
                                (0, n._)(
                                  "meta",
                                  { itemprop: "position", content: t + 1 },
                                  null,
                                  8,
                                  ar
                                ),
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
        const nr = or;
        var ir = nr,
          sr = t(9604),
          cr = t(3982);
        const lr = { class: "main" },
          dr = { class: "inner-page" };
        var ur = {
          __name: "App",
          setup(e) {
            const r = (0, A.tv)(),
              t = (0, A.yj)(),
              a = (0, j.F)(),
              o = (0, cr.O)(),
              s = (0, se.s)(),
              { t: c, locale: l } = (0, E.QT)(),
              d = new URLSearchParams(window.location.search),
              u = () => {
                d.get("to") && ["TBRUB", "MIRCRUB"].includes(d.get("to"))
                  ? (window.location.href = `/?from=${d.get(
                      "from"
                    )}&to=CARDRUB`)
                  : d.get("from") &&
                    ["TBRUB", "MIRCRUB"].includes(d.get("from"))
                  ? (window.location.href = `/?to=${d.get("to")}&from=CARDRUB`)
                  : d.get("cur_to") &&
                    ["TBRUB", "MIRCRUB"].includes(d.get("cur_to"))
                  ? (window.location.href = `/?cur_from=${d.get(
                      "cur_from"
                    )}&cur_to=CARDRUB`)
                  : d.get("cur_from") &&
                    ["TBRUB", "MIRCRUB"].includes(d.get("cur_from")) &&
                    (window.location.href = `/?cur_to=${d.get(
                      "cur_to"
                    )}&cur_from=CARDRUB`);
              };
            (0, n.bv)(async () => {
              u(),
                await N.selectedUserLanguage(),
                (document.title = c(r.currentRoute.value.meta.title)),
                (a.locale = l.value),
                await s.getPartners(),
                o.extractUrlParameters(r.currentRoute.value);
            });
            const _ = (0, n.Fl)(
              () => o.affiliateInfo.pid && !o.affiliateInfo.userId
            );
            return (
              (0, n.YP)(
                _,
                (e, r) => {
                  e && o.saveVisitor();
                },
                { immediate: !0 }
              ),
              (e, r) => {
                const o = (0, n.up)("router-view");
                return (
                  (0, n.wg)(),
                  (0, n.iD)(
                    n.HY,
                    null,
                    [
                      (0, i.SU)(a).isReCaptchaActive
                        ? ((0, n.wg)(), (0, n.j4)(sr.Z, { key: 0 }))
                        : (0, n.kq)("", !0),
                      (0, i.SU)(t).meta.isAdminPage
                        ? (0, n.kq)("", !0)
                        : ((0, n.wg)(), (0, n.j4)(S, { key: 1 })),
                      "home" == (0, i.SU)(t).name &&
                      "yes" !== (0, i.SU)(a).settings.maintenance
                        ? ((0, n.wg)(),
                          (0, n.j4)(Qe, {
                            key: 2,
                            title: "mass_payouts_to_russian_accounts",
                            action: "trade.rate_more_notification",
                            link: "https://t.me/coinfiber_com",
                          }))
                        : (0, n.kq)("", !0),
                      (0, n._)("main", lr, [
                        (0, n._)("section", dr, [
                          (0, i.SU)(a).inform?.status &&
                          "home" !== (0, i.SU)(t).name &&
                          "cash" !== (0, i.SU)(t).name
                            ? ((0, n.wg)(),
                              (0, n.j4)(
                                Oe,
                                {
                                  key: 0,
                                  codeError: (0, i.SU)(a).inform.codeError,
                                  text: (0, i.SU)(a).inform.text,
                                  status: (0, i.SU)(a).inform.status,
                                  onOnClose:
                                    r[0] ||
                                    (r[0] = (e) =>
                                      ((0, i.SU)(a).inform.status = "")),
                                },
                                null,
                                8,
                                ["codeError", "text", "status"]
                              ))
                            : ((0, n.wg)(),
                              (0, n.j4)(
                                o,
                                { key: 1 },
                                {
                                  default: (0, n.w5)(
                                    ({ Component: e, route: r }) => [
                                      ((0, n.wg)(), (0, n.j4)((0, n.LL)(e))),
                                    ]
                                  ),
                                  _: 1,
                                }
                              )),
                        ]),
                        !0 === e.$route.meta.showBreadcrumbs
                          ? ((0, n.wg)(), (0, n.j4)(ir, { key: 0 }))
                          : (0, n.kq)("", !0),
                      ]),
                      "home" == (0, i.SU)(t).name &&
                      "yes" !== (0, i.SU)(a).settings.maintenance
                        ? ((0, n.wg)(),
                          (0, n.j4)(Qe, {
                            key: 3,
                            title: "draw.title",
                            action: "draw.action",
                            link: "/money",
                          }))
                        : (0, n.kq)("", !0),
                      (0, i.SU)(t).meta.isAdminPage
                        ? (0, n.kq)("", !0)
                        : ((0, n.wg)(), (0, n.j4)(Ve, { key: 4 })),
                    ],
                    64
                  )
                );
              }
            );
          },
        };
        const _r = ur;
        var mr = _r,
          pr = t(2788);
        const fr = (0, a.ri)(mr),
          Cr = (0, o.WB)();
        fr.use(Cr),
          fr.use(pr.Z),
          fr.use(U),
          pr.Z.isReady().then(() => {
            const e = (0, P.x)();
            e.setupRouteHooks(), fr.mount("#app");
          }),
          (window.onRecaptchaLoadCallback = function () {});
      },
      2788: function (e, r, t) {
        "use strict";
        t.d(r, {
          Z: function () {
            return m;
          },
        });
        var a = t(2483),
          o = t(9865),
          n = t(3982),
          i = t(1519);
        function s(e) {
          const r = "jivo-script";
          let t = document.getElementById(r);
          if (t) {
            if (t.getAttribute("src") === e) return;
            document.head.removeChild(t);
          }
        }
        function c(e = 20) {
          const r = "jivo-script";
          if ("function" === typeof window.jivo_destroy) {
          } else e > 0 && setTimeout(() => c(e - 1), 250);
        }
        function l(e) {
          (0, i.F)();
          switch (e) {
            case "order":
            case "chatAdmin":
            case "UserHideAdmin":
              c();
              break;
            default:
              s(r);
              break;
          }
        }
        const d = { template: "<div></div>" },
          u = [
            {
              path: "/",
              name: "home",
              component: () =>
                Promise.all([t.e(528), t.e(872), t.e(518)]).then(
                  t.bind(t, 3518)
                ),
              meta: { title: "title_pages.main", transition: "fade" },
            },
            {
              path: "/cash",
              name: "cash",
              component: () =>
                Promise.all([t.e(528), t.e(872), t.e(770)]).then(
                  t.bind(t, 8781)
                ),
              meta: { title: "title_pages.cash_exchange", transition: "fade" },
            },
            {
              path: "/like",
              name: "like",
              component: () => t.e(848).then(t.bind(t, 6848)),
              meta: {
                title: "title_pages.like",
                crumb: "crumbs.like",
                showBreadcrumbs: !0,
                transition: "fade",
              },
            },
            {
              path: "/faq",
              name: "faq",
              component: () => t.e(569).then(t.bind(t, 6569)),
              meta: {
                title: "title_pages.faq",
                crumb: "crumbs.faq",
                showBreadcrumbs: !0,
                transition: "fade",
              },
            },

            {
              path: "/money",
              name: "money",
              component: () => t.e(706).then(t.bind(t, 7817)),
              meta: {
                title: "title_pages.money",
                crumb: "crumbs.money",
                showBreadcrumbs: !0,
                transition: "fade",
              },
            },
            {
              path: "/contacts",
              name: "contacts",
              component: () => t.e(250).then(t.bind(t, 7935)),
              meta: {
                title: "title_pages.contacts",
                crumb: "crumbs.contacts",
                showBreadcrumbs: !0,
                transition: "fade",
              },
            },
            {
              path: "/unsubscribe",
              name: "unsubscribe",
              component: () => t.e(459).then(t.bind(t, 9459)),
              meta: {
                title: "title_pages.unsubscribe",
                crumb: "crumbs.unsubscribe",
                showBreadcrumbs: !0,
                transition: "fade",
              },
            },
            {
              path: "/about",
              name: "about",
              component: () => t.e(965).then(t.bind(t, 6965)),
              meta: {
                title: "title_pages.about",
                crumb: "crumbs.about",
                showBreadcrumbs: !0,
                transition: "fade",
              },
            },
            {
              path: "/partners",
              name: "partners",
              component: () => t.e(610).then(t.bind(t, 7212)),
              meta: {
                title: "title_pages.partners",
                crumb: "crumbs.partners",
                showBreadcrumbs: !0,
                transition: "fade",
              },
            },
            {
              path: "/policy",
              name: "policy",
              component: () => t.e(537).then(t.bind(t, 6537)),
              redirect: { name: "agreement" },
              meta: { transition: "fade" },
              children: [
                {
                  path: "/agreement",
                  name: "agreement",
                  component: () => t.e(358).then(t.bind(t, 5358)),
                  meta: {
                    title: "title_pages.agreement",
                    showBreadcrumbs: !0,
                    crumb: "crumbs.agreement",
                  },
                },
                {
                  path: "/aml-agreement",
                  name: "aml-agreement",
                  component: () => t.e(224).then(t.bind(t, 9224)),
                  meta: {
                    title: "title_pages.aml",
                    showBreadcrumbs: !0,
                    crumb: "crumbs.aml",
                  },
                },
              ],
            },
            {
              path: "/order/change-wallet-aml/:pathParam",
              name: "change-wallet-aml",
              component: () => t.e(47).then(t.bind(t, 1782)),
              meta: { title: "title_pages.partners", transition: "fade" },
              beforeEnter: (e, r, t) => {
                e.params.pathParam && e.query.t ? t() : t({ name: "notFound" });
              },
            },
            {
              path: "/order/change-outgoing-wallet/:pathParam",
              name: "change-outgoing-wallet",
              component: () =>
                Promise.all([t.e(528), t.e(709)]).then(t.bind(t, 2709)),
              meta: { title: "title_pages.partners", transition: "fade" },
              beforeEnter: (e, r, t) => {
                e.params.pathParam && e.query.t ? t() : t({ name: "notFound" });
              },
            },
            {
              path: "/order/:id?",
              name: "order",
              component: () => t.e(243).then(t.bind(t, 1243)),
              meta: { title: "title_pages.order", transition: "fade" },
            },
            {
              path: "/add-photo",
              name: "add-photo",
              component: () => t.e(919).then(t.bind(t, 5919)),
              meta: { title: "title_pages.partners", transition: "fade" },
              beforeEnter: (e, r, t) => {
                e.query.f ? t() : t({ name: "notFound" });
              },
            },
            {
              path: "/show-mail/:pathParam",
              name: "show-mail",
              component: () => t.e(39).then(t.bind(t, 8039)),
              meta: { title: "title_pages.partners", transition: "fade" },
              beforeEnter: (e, r, t) => {
                e.params.pathParam && e.query.t ? t() : t({ name: "notFound" });
              },
            },
            {
              path: "/auth",
              name: "logIn",
              component: () => t.e(500).then(t.bind(t, 6500)),
              meta: {
                title: "title_pages.auth",
                transition: "fade",
                authPage: !0,
              },
            },
            {
              path: "/auth/signup",
              name: "signUp",
              component: () => t.e(223).then(t.bind(t, 4220)),
              meta: {
                title: "title_pages.sign_up",
                transition: "fade",
                authPage: !0,
              },
            },
            {
              path: "/recover-password",
              name: "recoverPassword",
              component: () => t.e(275).then(t.bind(t, 3076)),
              meta: {
                title: "title_pages.recover_password",
                transition: "fade",
                authPage: !0,
              },
            },
            {
              path: "/personal",
              name: "userProfile",
              component: () => t.e(792).then(t.bind(t, 792)),
              meta: { transition: "fade", isAuth: !0 },
              children: [
                {
                  path: "/personal",
                  name: "history",
                  component: () =>
                    Promise.all([t.e(862), t.e(850)]).then(t.bind(t, 3850)),
                  meta: {
                    title: "title_pages.personal",
                    crumb: "crumbs.personal",
                  },
                },
                {
                  path: "/personal/referal",
                  name: "referal",
                  component: () =>
                    Promise.all([t.e(862), t.e(29)]).then(t.bind(t, 6029)),
                  meta: {
                    title: "title_pages.referal",
                    crumb: "crumbs.referal",
                  },
                },
                {
                  path: "/personal/settings",
                  name: "settings",
                  component: () => t.e(336).then(t.bind(t, 2336)),
                  meta: {
                    title: "title_pages.settings",
                    crumb: "crumbs.settings",
                  },
                },
                {
                  path: "/personal/cards",
                  name: "cards",
                  component: () => t.e(454).then(t.bind(t, 4845)),
                  meta: { title: "title_pages.cards", crumb: "crumbs.cards" },
                },
              ],
            },
            {
              path: "/admin-chat/:id?",
              name: "chatAdmin",
              component: () => t.e(673).then(t.bind(t, 8673)),
              meta: {
                title: "title_pages.sign_up",
                transition: "fade",
                isAdminPage: !0,
              },
              beforeEnter: (e, r, t) => {
                e.query.r && e.query.t ? t() : t({ name: "notFound" });
              },
            },
            {
              path: "/admin-user-hide/:id?",
              name: "UserHideAdmin",
              component: () => t.e(888).then(t.bind(t, 8888)),
              meta: {
                title: "title_pages.sign_up",
                transition: "fade",
                isAdminPage: !0,
              },
              beforeEnter: (e, r, t) => {
                e.query.t ? t() : t({ name: "notFound" });
              },
            },
            {
              path: "/m/:tag",
              component: d,
              beforeEnter: (e, r, t) => {
                (0, n.O)().extractUrlParameters(e), t("/");
              },
            },
            {
              path: "/:catchAll(.*)*",
              name: "notFound",
              component: () => t.e(322).then(t.bind(t, 3322)),
              meta: { title: "title_pages.404" },
            },
          ],
          _ = (0, a.p7)({
            history: (0, a.PO)("/"),
            routes: u,
            scrollBehavior(e, r, t) {
              return e.hash
                ? { selector: e.hash, behavior: "smooth" }
                : r.path !== e.path
                ? t || { top: 0 }
                : void 0;
            },
          });
        _.beforeEach((e, r, t) => {
          const a = e.matched.some((e) => e.meta.isAuth),
            n = e.matched.some((e) => e.meta.authPage),
            s = (0, o.t)(),
            c = (0, i.F)();
          l(e.name),
            a && !s.user.isAuthenticated
              ? t({ name: "logIn" })
              : n && s.user.isAuthenticated
              ? t({ name: "home" })
              : (c.inform.status && c.resetGlobalError(), t());
        });
        var m = _;
      },
      8948: function (e, r, t) {
        "use strict";
        t.d(r, {
          Z: function () {
            return y;
          },
        });
        var a = t(9882);
        const o = "/",
          n = a.Z.create({ baseURL: o });
        var i = n,
          s = (t(560), t(9865)),
          c = t(3493),
          l = t(1519),
          d = t(2788);
        const u = (e) => {
            const r = (0, s.t)();
            return (
              (r.user.isAuthenticated ||
                e.url.includes("logout") ||
                e.url.includes("personal")) &&
                (e.headers["Authorization"] = `Bearer ${r.user.authToken}`),
              localStorage.getItem("x-ssk") &&
                (e.headers["x-ssk"] = localStorage.getItem("x-ssk")),
              e
            );
          },
          _ = (e) => (
            e.headers["x-ssk"] &&
              localStorage.setItem("x-ssk", e.headers["x-ssk"]),
            e.status == c.W.OK ? e.data : Promise.reject(e)
          ),
          m = (e) => {
            if (!e.response) return Promise.reject("Unknown error");
            const r = (0, l.F)(),
              t = (0, s.t)(),
              a = e.response.data?.error?.code,
              o = e.response.status;
            switch (o) {
              case c.W.NOT_FOUND:
                d.Z.push({ name: "notFound" });
                break;
              case c.W.FORBIDDEN:
                return (
                  (t.user.authToken = ""),
                  localStorage.removeItem("authToken"),
                  localStorage.removeItem("isAuth"),
                  (t.user.isAuthenticated = !1),
                  Promise.reject(a)
                );
              case c.W.UNAUTHORIZED:
                localStorage.removeItem("authToken"),
                  localStorage.removeItem("isAuth"),
                  (t.user.isAuthenticated = !1),
                  (t.user.authToken = ""),
                  d.Z.push({ name: "logIn" });
                break;
              case c.W.CONFLICT:
                r.isReCaptchaActive = !0;
                break;
              case c.W.INTERNAL_SERVER_ERROR:
                return Promise.reject(a);
              case c.W.TOO_MANY_REQUESTS:
                return (
                  (r.inform.codeError = c.W.TOO_MANY_REQUESTS),
                  Promise.reject(a)
                );
              default:
                break;
            }
            return new Promise((e, r) => {});
          };
        function p(e) {
          e.interceptors.request.use(u), e.interceptors.response.use(_, m);
        }
        var f = t(2972),
          C = t(2245),
          h = t(8082),
          g = t.n(h);
        const v = (e, r) => g().HmacSHA256(JSON.stringify(e), r()).toString(),
          w = () => f.r.value + c.V.value + C.d.value,
          b = (e) => ({
            get(r) {
              return e.get(r);
            },
            post(r, t, a = null) {
              const o = v(a ?? t, w);
              return e.post(r, t, { headers: { "cache-id": o } });
            },
          });
        p(i);
        var y = { apiEx: b(i) };
      },
      9865: function (e, r, t) {
        "use strict";
        t.d(r, {
          t: function () {
            return i;
          },
        });
        var a = t(1020),
          o = t(4870),
          n = t(3396);
        const i = (0, a.Q_)("auth", () => {
          const e = (0, o.qj)({
              authToken: localStorage.getItem("authToken") || "",
              token: localStorage.getItem("token") || "",
              email: "",
              isAuthenticated: localStorage.getItem("isAuth") || !1,
            }),
            r = (r) => {
              Object.entries(r).forEach(([r, t]) => {
                (e[r] = t),
                  "token" == r && localStorage.setItem("userToken", e.token),
                  "authToken" == r &&
                    localStorage.setItem("authToken", e.authToken);
              });
            },
            t = (0, n.Fl)(() => e.email);
          return { saveUserInfo: r, user: e, userEmail: t };
        });
      },
      1519: function (e, r, t) {
        "use strict";
        t.d(r, {
          F: function () {
            return _;
          },
        });
        var a = t(584),
          o = t(1020),
          n = t(4870),
          i = t(3396),
          s = t(7692),
          c = t(3721);
        const l = c.ZP.load();
        (async () => {
          const e = await l;
          await e.get();
        })();
        var d = t(8948),
          u = t(8105);
        const _ = (0, o.Q_)("helpers", () => {
          const e = (0, n.qj)({ status: "", text: "", codeError: "" }),
            r = (0, n.qj)({
              maintenance: "",
              contactEmail: "",
              contactTelegram: "",
              cashIsActive: "",
              maxFileUploadSize: "",
            }),
            t = (0, n.iH)(!1),
            o = (0, n.iH)(""),
            c = (0, n.iH)(""),
            _ = (0, n.iH)(""),
            m = (0, n.iH)(null),
            p = (0, n.iH)(!1),
            f = (0, n.qj)({ value: "" });
          let C = (0, n.iH)(null);
          const h = (e) => {
              (C.value = e), g();
            },
            g = () => {
              (0, i.Y3)(() => {
                const e = document.getElementById(C.value);
                e && e.scrollIntoView({ behavior: "smooth" });
              });
            },
            v = () => {
              const e = localStorage.getItem("x-ssk");
              return l.then((r) =>
                r.get().then((r) => {
                  if (e) {
                    let t = e.substring(4, 10),
                      a = e.substring(12, 16),
                      o = t.split("").reverse().join(""),
                      n = a.split("").reverse().join(""),
                      i = "" + r.visitorId,
                      s = i.length,
                      c = parseInt(s / 2),
                      l = i.substring(0, c),
                      d = i.substring(c);
                    return (_.value = t + d + a + "." + l + o + n), _.value;
                  }
                  throw new Error("savedXSSK is null or undefined");
                })
              );
            },
            w = async () => {
              c.value ||
                (await new Promise((e) => {
                  const r = (0, i.YP)(c, (t) => {
                    t && (r(), e());
                  });
                }));
            },
            b = (e) => {
              const r = c.value,
                t = e?.localization?.[r];
              return t?.hasOwnProperty("name") && "" != t?.name
                ? e?.localization?.[c.value]?.name
                : e?.name;
            },
            y = (e) => {
              const r = c.value,
                t = e?.localization?.[r];
              return t?.hasOwnProperty("wallet_name") && "" != t?.wallet_name
                ? e?.localization?.[c.value]?.wallet_name
                : e?.wallet_name;
            },
            k = (r) => {
              (e.status = "error"), (e.text = a.Z[r]);
            },
            x = (r) => {
              (e.status = ""), (e.text = "");
            },
            L = (e) => {
              const { t: r, te: t } = (0, s.QT)();
              return !!t(e);
            },
            H = async (e) => {
              const r = () => {
                setTimeout(() => {
                  m.value = null;
                }, 1e3);
              };
              try {
                if (navigator.clipboard && navigator.clipboard.writeText)
                  await navigator.clipboard.writeText(e), r();
                else {
                  const t = document.createElement("textarea");
                  (t.value = e),
                    document.body.appendChild(t),
                    t.select(),
                    document.execCommand("copy"),
                    document.body.removeChild(t),
                    r();
                }
                m.value = e;
              } catch (t) {}
            },
            T = async () => {
              try {
                const { data: e } = await d.Z.apiEx.get(u.Y.getSettigs);
                return (
                  Object.entries(e.settings).forEach(([e, t]) => {
                    r[e] = t;
                  }),
                  e
                );
              } catch (e) {
                k(e);
              }
            };
          return {
            locale: c,
            inform: e,
            isCopied: m,
            isReCaptchaActive: t,
            visitorId: _,
            savedXSSK: f,
            settings: r,
            captchaCode: o,
            isCashPage: p,
            setGlobalError: k,
            resetGlobalError: x,
            setTranslationResult: b,
            setTranslationResultForLabel: y,
            copyToClipboard: H,
            waitForLocale: w,
            setVisitorIdByFingerPrint: v,
            getSettigs: T,
            setElementId: h,
            displayError: L,
          };
        });
      },
      8352: function (e, r, t) {
        "use strict";
        t.d(r, {
          s: function () {
            return m;
          },
        });
        var a = t(1020),
          o = t(2972),
          n = t(4870),
          i = t(3396);
        const s = () => {
          const e = (0, n.iH)([]),
            r = (0, n.iH)([]),
            t = (0, n.iH)([]),
            a = (0, n.iH)([]),
            s = (0, n.iH)([]),
            c = (0, n.iH)([]),
            l = (0, n.iH)(""),
            d = (0, n.iH)(""),
            u = (0, n.iH)(""),
            _ = (0, n.qj)({ value: "", error: "", win: "" }),
            m = (0, n.qj)({
              email: { value: "", error: "", pattern: o.V.email },
            }),
            p = (0, n.qj)({ token: "", email: "", users: [] }),
            f = (0, n.iH)(!1),
            C = {
              exchanges: "birzha",
              wallets: "koshelek",
              usefulCryptoServices: "polezniikriptoservis",
              aml: "aml",
            },
            h = { monitoring: "monitoring", forum: "forum" },
            g = Object.keys(h).reduce((e, t) => {
              const a = h[t];
              return (
                (e[t] = (0, i.Fl)(() => ({
                  title: `partners.${t}`,
                  action: "partners.action",
                  list: r.value.filter((e) => e.typeCode == a),
                }))),
                e
              );
            }, {}),
            v = Object.keys(C).reduce((e, r) => {
              const a = C[r];
              return (
                (e[r] = (0, i.Fl)(() => ({
                  title: `like.${r}`,
                  action: "like.action",
                  list: t.value.filter((e) => e.type == a),
                }))),
                e
              );
            }, {}),
            w = (0, n.qj)({
              mailContent: "",
              body: "",
              orderUrl: "",
              accessToken: "",
            });
          return {
            partners: r,
            recommendedPartners: t,
            faqs: a,
            contacts: s,
            socials: c,
            drawInfo: _,
            reviews: u,
            unsubscribe: m,
            isUnsubscribe: f,
            computedCategories: v,
            computedPartners: g,
            title: l,
            usersNotActive: p,
            text: d,
            showMailData: w,
            isLoading: e,
          };
        };
        var c = t(8948),
          l = t(1519),
          d = t(8105),
          u = (t(5994), t(5122)),
          _ = t(2788);
        const m = (0, a.Q_)("misc", () => {
          const e = (0, l.F)(),
            {
              partners: r,
              recommendedPartners: t,
              faqs: a,
              contacts: o,
              socials: n,
              drawInfo: i,
              reviews: m,
              unsubscribe: p,
              isUnsubscribe: f,
              computedCategories: C,
              computedPartners: h,
              title: g,
              text: v,
              usersNotActive: w,
              showMailData: b,
              isLoading: y,
            } = s(),
            k = async (r, t, a = {}, o) => {
              y.value = !0;
              try {
                const { data: e } = await c.Z.apiEx[r](t, a);
                o(e);
              } catch (n) {
                switch (n) {
                  default:
                    e.setGlobalError(n);
                    break;
                }
              } finally {
                y.value = !1;
              }
            },
            x = () =>
              k("post", d.Y.partners, { locale: e.locale }, (e) => {
                (r.value = e.partners), (t.value = e.recommendedPartners);
              }),
            L = () =>
              k("post", d.Y.faqs, { locale: e.locale }, (e) => {
                a.value = e.faqs;
              }),
            H = () =>
              k("post", d.Y.contacts, { locale: e.locale }, (e) => {
                o.value = e.contacts;
              }),
            T = () =>
              k("get", d.Y.socials, {}, (e) => {
                n.value = e.socials;
              }),
            M = async () => {
              const r = { orderId: i.value, locale: e.locale };
              await k("post", d.Y.prizedrawCheck, r, (e) => {
                (i.value = ""),
                  0 == e.win
                    ? (i.error = e.info)
                    : ((i.win = e.info), (i.error = ""));
              });
            },
            F = async () => {
              if (!(0, u.V$)(p)) return;
              const e = { token: "", email: p.email.value };
              await k("post", d.Y.unsubscribe, e, (e) => {
                "true" == e.success && (f.value = !0);
              });
            },
            Z = async () => {
              const r = {
                pageCode: _.Z.currentRoute.value.name,
                locale: e.locale,
              };
              await k("post", d.Y.page, r, (e) => {
                (g.value = e.seoH1), (v.value = e.content);
              });
            },
            V = () => {
              k("get", d.Y.cashReviews, {}, (e) => {
                m.value = e.reviews;
              });
            },
            S = () => {
              const e = { token: w.token, email: w.email };
              w.email.length >= 3 &&
                k("post", d.Y.findUser, e, (e) => {
                  w.users = e.users;
                });
            },
            E = (e) => {
              const r = { token: w.token, id: e };
              k("post", d.Y.activateUser, r, (e) => {
                S();
              });
            },
            A = () => {
              const e = { orderUrl: b.orderUrl, accessToken: b.accessToken };
              k("post", d.Y.showMail, e, (e) => {
                b.mailContent = e.mailContent;
                const r = new DOMParser(),
                  t = r.parseFromString(b.mailContent, "text/html"),
                  a = t.body.innerHTML;
                b.body = a;
              });
            };
          return {
            getPartners: x,
            getFaqs: L,
            getContacts: H,
            getSocials: T,
            prizeDrawCheck: M,
            unsubscribeEvent: F,
            getPageInfo: Z,
            getReviews: V,
            findUserAdmin: S,
            activateUserAdmin: E,
            showMailData: b,
            showMailEvent: A,
            recommendedPartners: t,
            partners: r,
            socials: n,
            faqs: a,
            contacts: o,
            drawInfo: i,
            reviews: m,
            unsubscribe: p,
            isUnsubscribe: f,
            computedCategories: C,
            computedPartners: h,
            title: g,
            text: v,
            usersNotActive: w,
            isLoading: y,
          };
        });
      },
      9408: function (e, r, t) {
        "use strict";
        t.d(r, {
          u: function () {
            return y;
          },
        });
        t(560), t(8858), t(1318), t(3228);
        var a = t(86),
          o = t(8105);
        const n = (e, r, t, a) => {
          (r.name = e.order.currency_from_name),
            (r.ownerWallet = e.order.wallet_address_owner),
            (r.icon = e.order.icon_currency_from),
            (r.amount = e.order.f_amount_from_fee || e.order.f_amount_from),
            (r.walletType = e.order.currency_from_wallet_type),
            (r.walletAddress = e.order.client_wallet_address_from),
            (r.isoCode = e.order.currency_from),
            (r.bestCode = e.order.currency_from_best_code),
            (r.code = e.order.currency_from_code),
            (r.type = e.order.currency_from_type),
            (r.txAddressFrom = e.order.tx_address_from),
            (r.formatRealAmount = e.order.f_real_amount_from),
            (r.memo = e.order.tag_from),
            (r.amountFrom = e.order.amount_from),
            (r.formatCourseFrom = e.order.f_course_from),
            (t.name = e.order.currency_to_name),
            (t.icon = e.order.icon_currency_to),
            (t.amount = e.order.f_amount_to),
            (t.walletType = e.order.currency_to_wallet_type),
            (t.walletFormatted = e.order.client_wallet_address_formatted),
            (t.walletLastDigits =
              e.order.client_wallet_address_from_last_digits),
            (t.isoCode = e.order.currency_to),
            (t.bestCode = e.order.currency_to_best_code),
            (t.code = e.order.currency_to_code),
            (t.type = e.order.currency_to_type),
            (t.txAddressTo = e.order.tx_address_to),
            (t.networkName = e.order.currency_to_network_name),
            (t.network = e.order.network),
            (t.formatRealAmount = e.order.f_real_amount_to),
            (t.memo = e.order.tag_to),
            (t.formatCourseTo = e.order.f_course_to),
            (t.bankName = e.order.bank_name),
            (a.orderId = e.order.id),
            (a.rateId = e.order.rate_id),
            (a.phoneNumber = e.order.f_phone_number),
            (a.showAttentionEth = "Y" == e.order.show_attention_eth),
            (a.showAttentionTelegramTrc20 =
              "Y" == e.order.show_attention_telegram_trc20),
            (a.isSBP = "Y" == e.order.is_sbp),
            (a.SBPbank = e.order.bank_name),
            (a.status = e.order.status),
            (a.statusText = e.order.status_text),
            (a.rawStatus = e.order.raw_status),
            (a.needToConfirm = "1" == e.order.need_to_confirm),
            (a.timeToEnd = e.order.time_to_end),
            (a.floatingCourse = "Y" == e.order.forced_floating_course),
            (a.course = e.order.course),
            (a.formatCourseInitial = e.order.f_course_initial),
            (a.formatCourseNow = e.order.f_course_now),
            (a.walletAddress = e.order.wallet_address),
            (a.formatWalletAddress = e.order.f_wallet_address),
            (a.txidIn = e.order.txid_in),
            (a.qrcode = e.order.qrcode),
            (a.qrcodeTag = e.order.qrcode_tag),
            (a.aml = "Y" == e.order.aml_currency_from),
            (a.isAmlType = e.order.aml_type),
            (a.isCryptFrom = "1" == e.order.buy_crypt),
            (a.textIn = e.order.text_in),
            (a.confirmation = e.order.confirmation),
            (a.amountRecalcCause = e.order.amount_recalc_cause),
            (a.buyTime = e.order.buy_time),
            (a.transactions = e.order.transactions),
            (a.closeDate = e.order.close_date),
            (a.closeTime = e.order.close_time),
            (a.referer = e.order.referer),
            (a.additionalCommission = e.order.additional_commission),
            (a.paymentUrl = e.order.payment_url),
            (a.urlPm = e.order.url_pm),
            (a.clientClaimPayButton = "Y" == e.order.client_claim_pay_button),
            (a.failAml = "Y" == e.order.fail_aml),
            (a.tagToIsDefault = "1" == e.order.tag_to_is_default),
            (a.incomingPayError = "Y" == e.order.incoming_pay_error),
            (a.failUrlPm = e.order.fail_url_pm),
            (a.showBankName = "Y" == e.order.show_bank_name),
            (a.cashIsPaid = "Y" == e.order.is_paid),
            (a.isWalletAmlCheckRequired =
              "Y" == e.order.isWalletAmlCheckRequired),
            (a.partners = e.extra?.partners),
            (a.hasAdditionalSbpRequisites =
              "Y" == e.order.hasAdditionalSbpRequisites),
            (a.isNeedCashReceipt = "1" == e.order.isNeedCashReceipt),
            (a.waitingCashReceiptAproval =
              "1" == e.order.waitingCashReceiptAproval);
        };
        var i = t(5994);
        const s = (e, r) => {
          let t = Number(e.walletType),
            a = Number(r.walletType);
          return [14, 140].includes(t) && [1, 15, 25, 30, 31].includes(a)
            ? "RUBToCrypt"
            : [1, 15, 25, 30, 31].includes(t) && [14, 34, 140].includes(a)
            ? "CryptToRUB"
            : 3 === t && [14, 34, 140].includes(a)
            ? "PmToRUB"
            : [14, 140].includes(t) && 3 === a
            ? "RUBToPm"
            : (20 === t && 20 === a) || 23 === t || 23 === a
            ? "CryptToCrypt"
            : 10 === t
            ? "Cash"
            : 34 === t
            ? "KZTToCrypt"
            : "default";
        };
        var c = s,
          l = t(5122),
          d = t(2788),
          u = t(8948),
          _ = t(1519),
          m = t(1020),
          p = t(3396),
          f = t(8352),
          C = t(7502),
          h = t(6882),
          g = t(4870);
        const v = () => {
            const e = (0, g.qj)({
              accessToken: null,
              orderId: null,
              urlId: null,
            });
            return { createdOrder: e };
          },
          w = () => {
            const e = (0, g.iH)(Boolean),
              r = (0, g.iH)(!1);
            let t = (0, g.iH)("");
            const a = (0, g.qj)({
                currFrom: {
                  isoCode: "",
                  bestCode: "",
                  code: "",
                  name: "",
                  icon: "",
                  amount: "",
                  formatRealAmount: "",
                  formatCourseFrom: "",
                  walletType: "",
                  walletAddress: "",
                  TransactionTag: "",
                  type: "",
                  value: "",
                  txAddressFrom: "",
                  ownerWallet: "",
                  memo: "",
                  amountFrom: "",
                },
                currTo: {
                  isoCode: "",
                  bestCode: "",
                  code: "",
                  name: "",
                  icon: "",
                  amount: "",
                  formatRealAmount: "",
                  formatCourseTo: "",
                  walletAddress: "",
                  walletType: "",
                  walletFormatted: "",
                  walletLastDigits: "",
                  TransactionTag: "",
                  type: "",
                  value: "",
                  txAddressTo: "",
                  networkName: "",
                  network: "",
                  memo: "",
                },
              }),
              o = (0, g.qj)({
                orderId: "",
                rateId: "",
                status: "",
                rawStatus: "",
                statusText: "",
                needToConfirm: "",
                timeToEnd: "",
                initialTimer: "",
                initialTimeSet: !1,
                interval: "",
                floatingCourse: "",
                course: "",
                formatCourseInitial: "",
                formatCourseNow: "",
                walletAddress: "",
                formatWalletAddress: "",
                txidIn: "",
                tag: "",
                qrcode: "",
                qrcodeTag: "",
                aml: Boolean,
                isAmlType: "",
                isCryptFrom: Boolean,
                textIn: "",
                confirmation: "",
                amountRecalcCause: "",
                buyTime: "",
                transactions: "",
                closeData: "",
                closeTime: "",
                referer: "",
                partners: [],
                additionalCommission: "",
                paymentUrl: "",
                showBankName: "",
                urlPm: "",
                failUrlPm: "",
                cashIsPaid: "",
                incomingPayError: "",
                failAml: "",
                SBPbank: "",
                showAttentionEth: "",
                showAttentionTelegramTrc20: "",
                isSBP: !1,
                clientClaimPayButton: "",
                isWalletAmlCheckRequired: "",
                hasAdditionalSbpRequisites: !1,
                isNeedCashReceipt: !1,
                waitingCashReceiptAproval: !1,
                phoneNumber: "",
              }),
              n = (0, g.qj)({
                verification: {
                  status: "inactive",
                  title: "order.steps.verification",
                },
                transactionPayment: {
                  status: "inactive",
                  title: "order.steps.trans_payment",
                },
                paymentProcessing: {
                  status: "inactive",
                  title: "order.steps.payment_processing",
                },
                transfer: { status: "inactive", title: "order.steps.transfer" },
              });
            let i = (0, g.qj)({
              userAddress: {
                label: "order.transaction_details.user_address.transfer",
                value: "",
                img: "",
                showCopy: !0,
                isActive: !0,
                commission: o.additionalCommission,
                isoCode: a.currFrom.isoCode,
              },
              transferAddress: {
                label: "order.transaction_details.transfer_address.wallet",
                name: "",
                ownerWallet: "",
                walletAdress: "",
                SBPbank: "",
                icon: "purse",
                showCopy: !0,
                qrcode: "",
                isActive: !0,
              },
              transactionTag: {
                label: "order.transaction_details.tag.text",
                attention: "order.transaction_details.tag.attention_text",
                value: "",
                icon: "purse",
                icon: "",
                showCopy: !0,
                qrcode: "",
                isActive: !1,
              },
              transferSbpInCardOrder: {
                label: "order.transaction_details.transfer_address.wallet",
                name: "",
                ownerWallet: "",
                walletAdress: "",
                SBPbank: "",
                icon: "purse",
                showCopy: !1,
                qrcode: "",
                isActive: !1,
              },
            });
            function s() {
              Object.assign(i.userAddress, {
                label: "order.transaction_details.user_address.transfer",
                value: "",
                img: "",
                showCopy: !0,
                isActive: !0,
                commission: o.additionalCommission,
                isoCode: a.currFrom.isoCode,
              }),
                Object.assign(i.transferAddress, {
                  label: "order.transaction_details.transfer_address.wallet",
                  name: "",
                  ownerWallet: "",
                  walletAdress: "",
                  SBPbank: "",
                  icon: "purse",
                  showCopy: !0,
                  qrcode: "",
                  isActive: !0,
                }),
                Object.assign(i.transactionTag, {
                  label: "order.transaction_details.tag.text",
                  attention: "order.transaction_details.tag.attention_text",
                  value: "",
                  icon: "purse",
                  icon: "",
                  showCopy: !0,
                  qrcode: "",
                  isActive: !1,
                }),
                Object.assign(i.transferSbpInCardOrder, {
                  label: "order.transaction_details.transfer_address.wallet",
                  name: "",
                  ownerWallet: "",
                  walletAdress: "",
                  SBPbank: "",
                  icon: "purse",
                  showCopy: !1,
                  qrcode: "",
                  isActive: !1,
                });
            }
            return {
              setupOrder: a,
              orderDetails: o,
              orderStepsState: n,
              transactionDetails: i,
              resetTransactionDetails: s,
              isLoading: e,
              isLoadingCards: r,
              tplName: t,
            };
          };
        var b = t(8524);
        const y = (0, m.Q_)("order", () => {
          const e = (0, _.F)(),
            { handleError: r } = (0, i.Z)(),
            { createdOrder: t } = v(),
            {
              cardsManagementState: s,
              cardsOrderFields: m,
              cardsKZTFields: g,
              statusUpload: y,
              cardsPopupStates: k,
              setErrorStatus: x,
            } = (0, C.x)(),
            { initChat: L, accessDataChat: H } = (0, h.a)(),
            { usersNotActive: T } = (0, f.s)(),
            {
              isLoading: M,
              isLoadingCards: F,
              setupOrder: Z,
              orderDetails: V,
              orderStepsState: S,
              transactionDetails: E,
              resetTransactionDetails: A,
              tplName: I,
            } = w(),
            {
              statusUpload: U,
              setErrorStatus: R,
              receiptManagementState: N,
              receiptPopupStates: j,
            } = (0, b.u)(),
            P = async (r = !0) => {
              const t = ee();
              M.value = r;
              try {
                const { currFrom: e, currTo: r } = Z,
                  { data: a } = await u.Z.apiEx.post(o.Y.orderRetrieve, t);
                n(a, e, r, V),
                  ae(S, V.status),
                  (I.value = c(e, r)),
                  te(I.value),
                  "KZTToCrypt" === I.value &&
                    (g.number.value = e.walletAddress),
                  V.timeToEnd > 0 && !V.floatingCourse && ne();
              } catch (a) {
                switch (a) {
                  default:
                    e.setGlobalError(a);
                    break;
                }
              } finally {
                M.value = !1;
              }
            },
            q = async (e) => {
              const t = ee();
              M.value = !0;
              try {
                const { currFrom: r, currTo: a } = Z,
                  { data: i } = await u.Z.apiEx.post(o.Y.orderRetrieve + e, t);
                n(i, r, a, V),
                  ae(S, V.status),
                  (I.value = c(r, a)),
                  te(I.value),
                  V.timeToEnd > 0 && !V.floatingCourse && ne();
              } catch (a) {
                r(a);
              } finally {
                setTimeout(() => {
                  M.value = !1;
                }, 100);
              }
            },
            O = async (r) => {
              const t = ee();
              t.agreed = r;
              try {
                V.needToConfirm = !1;
                const { data: e } = await u.Z.apiEx.post(o.Y.orderConfirm, t);
                "0" == e.orderWasConfirmed &&
                  d.Z.replace({
                    path: "/",
                    query: { from: Z.currFrom.code, to: Z.currTo.code },
                  });
              } catch (a) {
                e.setGlobalError(a);
              } finally {
                M.value = !1;
              }
            },
            Y = async () => {
              const r = ee();
              try {
                const { data: e } = await u.Z.apiEx.post(o.Y.orderCancel, r),
                  { currFrom: t, currTo: a } = Z;
                if (e.success) {
                  const e = t.bestCode.toUpperCase(),
                    r = a.bestCode.toUpperCase();
                  d.Z.replace({ name: "home", query: { from: e, to: r } });
                }
              } catch (t) {
                e.setGlobalError(t);
              }
            },
            D = async () => {
              const r = {
                orderId: V.orderId,
                accessToken: t.accessToken,
                formId: s.formId,
              };
              try {
                const { data: e } = await u.Z.apiEx.post(o.Y.cardsLoad, r);
                Object.entries(e).forEach(([e, r]) => {
                  s[e] = r;
                });
              } catch (a) {
                e.setGlobalError(a);
              }
            },
            B = async () => {
              const a = (0, l.V$)(m);
              if (!a) return;
              F.value = !0;
              const n = new FormData(),
                {
                  cardUserMiddleName: { value: i },
                  cardUserLastName: { value: c },
                  cardUserFirstName: { value: d },
                  cardUserNumber: { value: _ },
                } = m,
                { accessToken: p } = t,
                f = {
                  orderId: V.orderId,
                  accessToken: p,
                  middleName: i,
                  lastName: c,
                  firstName: d,
                  cardNumber: _,
                  isSaved: s.isCardSaved ? "1" : "0",
                  formId: s.formId,
                };
              y.file && (f.image = y.file);
              for (const e in f) n.append(e, f[e]);
              const { image: C, ...h } = f;
              try {
                const { data: e } = await u.Z.apiEx.post(o.Y.cardSave, n, h);
                (k.isShowAddCard = !1),
                  (y.status = ""),
                  (y.file = null),
                  await P(!1),
                  await D();
              } catch (g) {
                switch (g) {
                  case "empty_card_file":
                  case "card_max_upload_size":
                  case "card_file_type_not_allowed":
                  case "card_file_not_found":
                    x(g, "order.cards.title_error");
                  case "empty_card_client_name":
                  case "incorrect_card_client_name":
                    r(g, m.cardUserFirstName);
                    break;
                  case "incorrect_card_number":
                  case "empty_card_number":
                  case "card_not_valid":
                    r(g, m.cardUserNumber);
                    break;
                  default:
                    e.setGlobalError(g);
                    break;
                }
              } finally {
                F.value = !1;
              }
            },
            z = async () => {
              const a = (0, l.V$)(g);
              if (!a) return;
              F.value = !0;
              const {
                  code: { value: n },
                  date: { value: i },
                  number: { value: s },
                } = g,
                { accessToken: c } = t,
                d = {
                  orderId: V.orderId,
                  token: c,
                  cardCvv: n,
                  cardExpire: i,
                  cardNumber: s,
                };
              try {
                const { data: e } = await u.Z.apiEx.post(o.Y.get3ds, d);
                e.pay_url &&
                  ((window.location.href = e.pay_url),
                  (V.paymentUrl = e.pay_url),
                  (k.isShowKZTCard = !1));
              } catch (_) {
                switch (_) {
                  case "empty_card_client_name":
                  case "incorrect_card_client_name":
                    r(_, m.cardUserFirstName);
                    break;
                  case "incorrect_card_number":
                  case "empty_card_number":
                  case "card_not_valid":
                    r(_, g.number);
                    break;
                  case "card_expire_not_valid":
                    r(_, g.date);
                    break;
                  case "card_cvv_not_valid":
                    r(_, g.code);
                    break;
                  case "get_3ds_fail":
                    e.setGlobalError(_);
                    break;
                  default:
                    e.setGlobalError(_);
                    break;
                }
              } finally {
                F.value = !1;
              }
            },
            W = async () => {
              F.value = !0;
              try {
                const { data: e } = await u.Z.apiEx.get(o.Y.receiptCash);
                N.maxFileUploadSize = e.maxFileUploadSize;
              } catch (r) {
                e.setGlobalError(r);
              } finally {
                F.value = !1;
              }
            },
            $ = async () => {
              F.value = !0;
              const { accessToken: r } = t,
                a = new FormData(),
                n = { orderId: V.orderId, accessToken: r };
              U.file && (n.file = U.file);
              for (const e in n) a.append(e, n[e]);
              const { file: i, ...s } = n;
              try {
                const { data: e } = await u.Z.apiEx.post(
                  o.Y.receiptCashUpload,
                  a,
                  s
                );
                await P(!1),
                  (j.isShow = !1),
                  (U.status = ""),
                  (U.file = null),
                  (V.isNeedCashReceipt = !1);
              } catch (c) {
                switch (c) {
                  case "incorrect_file_size":
                  case "incorrect_file_format":
                  case "upload_processing_error":
                  case "already_uploaded":
                    R(c, "order.receipt.title_error");
                    break;
                  default:
                    e.setGlobalError(c);
                    break;
                }
              } finally {
                F.value = !1;
              }
            },
            G = async () => {
              const { accessToken: r } = t,
                {
                  cardUserMiddleName: a,
                  cardUserLastName: n,
                  cardUserFirstName: i,
                } = m,
                s = {
                  cardUserMiddleName: a,
                  cardUserLastName: n,
                  cardUserFirstName: i,
                },
                c = (0, l.V$)(s);
              if (!c) return;
              const d = {
                orderId: V.orderId,
                accessToken: r,
                cardId: k.cardId,
                cardRusFio: n.value + " " + i.value + " " + a.value,
              };
              F.value = !0;
              try {
                const { data: e } = await u.Z.apiEx.post(
                  o.Y.cardsUpdateAndUse,
                  d
                );
                (k.isShowEditCardholder = !1), D();
              } catch (_) {
                switch (_) {
                  case "empty_card_file":
                  case "card_max_upload_size":
                  case "card_file_type_not_allowed":
                  case "card_file_not_found":
                    x(_, "order.cards.title_error");
                  default:
                    e.setGlobalError(_);
                    break;
                }
              } finally {
                setTimeout(() => {
                  F.value = !1;
                }, 2e3);
              }
            },
            Q = async (r) => {
              const { accessToken: a } = t,
                n = { orderId: V.orderId, accessToken: a, cardId: r.id };
              if ("1" == r.needUpdate)
                return (k.isShowEditCardholder = !0), void (k.cardId = r.id);
              F.value = !0;
              try {
                const { data: e } = await u.Z.apiEx.post(o.Y.cardUse, n);
                P(!1), D();
              } catch (i) {
                e.setGlobalError(i);
              } finally {
                F.value = !1;
              }
            },
            K = async () => {
              const r = ee();
              try {
                const { data: e } = await u.Z.apiEx.post(o.Y.orderSendPaid, r);
                P(!1);
              } catch (t) {
                e.setGlobalError(t);
              }
            },
            J = async () => {
              if (!0 === s.isSendMailLink) return;
              const r = {
                orderId: V.orderId,
                accessToken: t.accessToken,
                formId: s.formId,
              };
              try {
                const { data: e } = await u.Z.apiEx.post(o.Y.cardsMail, r);
                s.isSendMailLink = !0;
              } catch (a) {
                switch (a) {
                  case "resend_too_early":
                    x(a, "order.cards.title_error");
                    break;
                  default:
                    e.setGlobalError(a);
                    break;
                }
              } finally {
                F.value = !1;
              }
            },
            X = () => {
              const r = d.Z.currentRoute.value.fullPath,
                o = a.n,
                n = new URL(r, o),
                i = n.pathname.split("/");
              if (n.pathname.includes("/order/")) {
                const e = n.pathname.split("/");
                t.urlId = e[2];
                const r = decodeURIComponent(n.searchParams.get("t") || "");
                (t.accessToken = r),
                  n.searchParams.has("s") &&
                    (t.clientSidePaymentCompleted = "Y");
              } else
                n.pathname.includes("/admin-chat/")
                  ? ((H.orderUrl = i[2]),
                    (H.accessToken = n.searchParams.get("t").replaceAll(" ")),
                    (H.rToken = n.searchParams.get("r").replaceAll(" ")),
                    (H.locale = e.locale))
                  : n.pathname.includes("/admin-user-hide/")
                  ? (T.token = n.searchParams.get("t").replaceAll(" "))
                  : d.Z.push({ name: "notFound" });
            },
            ee = () => {
              let r;
              return (
                t.orderId
                  ? (r = { orderId: t.orderId, accessToken: t.accessToken })
                  : (X(),
                    (r = { orderUrl: t.urlId, accessToken: t.accessToken })),
                "Y" === t.clientSidePaymentCompleted &&
                  (r.clientSidePaymentCompleted = t.clientSidePaymentCompleted),
                (r.locale = e.locale),
                r
              );
            },
            re = () => {
              const e = ee();
              "cancel" !== V.rawStatus &&
                "close" !== V.rawStatus &&
                "waiting_aml_refund" !== V.rawStatus &&
                "Cash" !== I.value &&
                L(e);
            },
            te = async (e) => {
              const { currFrom: r } = Z,
                { showBankName: t, isSBP: a, SBPbank: o } = V;
              switch (
                (A(),
                r.memo &&
                  ((E.transactionTag.isActive = !0),
                  (E.transactionTag.value = r.memo),
                  (E.transactionTag.label =
                    "order.transaction_details.tag.text"),
                  (E.transactionTag.attention =
                    "order.transaction_details.tag.attention_text"),
                  (E.transactionTag.icon = "purse")),
                V.qrcode && (E.transferAddress.qrcode = V.qrcode),
                V.qrcodeTag && (E.transactionTag.qrcode = V.qrcodeTag),
                (E.userAddress.value = r.amount + " " + r.isoCode),
                (E.userAddress.isoCode = r.isoCode),
                (E.userAddress.img = r.icon),
                (E.transferAddress.value =
                  V.formatWalletAddress || V.walletAddress),
                e)
              ) {
                case "RUBToCrypt":
                case "RUBToPm":
                  (E.userAddress.label =
                    "order.transaction_details.user_address.amount_to_pay"),
                    (E.transferAddress.label =
                      "order.transaction_details.transfer_address.card"),
                    t && (E.transferAddress.name = r.name),
                    (E.transferAddress.ownerWallet = r.ownerWallet),
                    a
                      ? ((E.transferAddress.SBPbank = o),
                        (E.transferSbpInCardOrder.isActive = !1),
                        (E.transferAddress.label =
                          "order.transaction_details.transfer_address.sbp"))
                      : ((E.transferSbpInCardOrder.ownerWallet = r.ownerWallet),
                        (E.transferSbpInCardOrder.SBPbank = o),
                        (E.transferSbpInCardOrder.isActive = !0),
                        (E.transferSbpInCardOrder.label =
                          "order.transaction_details.transfer_address.sbp"),
                        (E.transferSbpInCardOrder.value = V.phoneNumber));
                  break;
                case "PmToRUB":
                  (E.userAddress.label =
                    "order.transaction_details.user_address.amount_to_pay"),
                    (E.userAddress.showCopy = !1),
                    (E.transferAddress.isActive = !1);
                  break;
                case "KZTToCrypt":
                  (E.userAddress.label =
                    "order.transaction_details.user_address.amount_to_pay"),
                    (E.userAddress.showCopy = !1),
                    (E.transferAddress.isActive = !1);
                  break;
                default:
                  (E.userAddress.label =
                    "order.transaction_details.user_address.transfer"),
                    (E.transferAddress.label =
                      "order.transaction_details.transfer_address.wallet");
                  break;
              }
            },
            ae = (e, r) => {
              switch (
                ((e.verification.status = "inactive"),
                (e.transactionPayment.status = "inactive"),
                (e.paymentProcessing.status = "inactive"),
                (e.transfer.status = "inactive"),
                r)
              ) {
                case "waiting_for_client_card":
                case "waiting_for_wallet":
                  e.verification.status = "active";
                  break;
                case "waiting_for_payment":
                case "waiting_for_queued_wallet":
                  (e.verification.status = "done"),
                    (e.transactionPayment.status = "active");
                  break;
                case "waiting_for_payment_detection":
                  (e.verification.status = "done"),
                    (e.transactionPayment.status = "done"),
                    (e.paymentProcessing.status = "active");
                  break;
                case "waiting_for_payout":
                  (e.verification.status = "done"),
                    (e.transactionPayment.status = "done"),
                    (e.paymentProcessing.status = "done"),
                    (e.transfer.status = "active");
                  break;
                default:
              }
            },
            oe = (e) => {
              const r = Math.floor(e / 60),
                t = e % 60,
                a = r < 10 ? `0${r}` : `${r}`,
                o = t < 10 ? `0${t}` : `${t}`;
              return `${a}:${o}`;
            },
            ne = () => {
              ie(),
                (V.interval = setInterval(() => {
                  if (V.timeToEnd > 0) V.timeToEnd--;
                  else {
                    if (
                      "waiting_for_payment_detection" === V.status ||
                      "waiting_for_payout" === V.status
                    )
                      return;
                    (V.rawStatus = "cancel"), clearInterval(V.interval);
                  }
                }, 1e3));
            },
            ie = () => {
              clearInterval(V.interval);
            },
            se = () => {
              (V.status = ""), (V.rawStatus = "");
            },
            ce = (0, p.Fl)(() =>
              V.timeToEnd > 0 && !V.floatingCourse ? oe(V.timeToEnd) : ""
            ),
            le = (0, p.Fl)(() => {
              const { name: e, icon: r, amount: t, isoCode: a } = Z.currFrom,
                { name: o, icon: n, amount: i, isoCode: s } = Z.currTo;
              return {
                sourceCurrency: { name: e, icon: r, amount: `${t} ${a}` },
                targetCurrency: { name: o, icon: n, amount: `${i} ${s}` },
              };
            }),
            de = (0, p.Fl)(() => `${Z.currTo?.amount} ${Z.currTo?.isoCode}`),
            ue = (0, p.Fl)(() => {
              const {
                  textIn: e,
                  aml: r,
                  status: t,
                  showBankName: a,
                  isSBP: o,
                  SBPbank: n,
                } = V,
                { currFrom: i } = Z;
              return {
                status: t,
                title: "order.confirm.attention.title",
                getRequisites: "order.information.get_requisites",
                attention: "order.confirm.attention.text",
                aml: r ? "order.information.aml_attention" : null,
                network: i.name,
                textIn: e,
                noComments: a ? "order.information.no_comments" : null,
                noLegal: "order.information.no_legal",
                onePayment: "order.information.one_payment",
                isSBP: o ? "order.information.sbp_attention" : null,
                cardOrderSBPText: "order.information.card_order_sbp",
                bankName: n,
              };
            }),
            _e = (0, p.Fl)(() => {
              const { textIn: e, aml: r, status: t, showAttentionEth: a } = V,
                { currFrom: o } = Z;
              return {
                status: t,
                title: "order.confirm.attention.title",
                getRequisites: "order.information.get_requisites",
                attention: "order.confirm.attention.text",
                aml: r ? "order.information.aml_attention" : null,
                ethNetworkAttention: a
                  ? "order.information.for_eth_network"
                  : "order.information.for_bnb",
                dot: "DOT" == o.isoCode ? "order.information.for_dot" : null,
                network: o.name,
                textIn: e,
              };
            }),
            me = (0, p.Fl)(() => {
              const { currFrom: e } = Z;
              return "fiat" === e.type || "PERFECT_USD" === e.code;
            }),
            pe = (0, p.Fl)(() => {
              const { isSBP: e } = V;
              return e;
            }),
            fe = (0, p.Fl)(() => {
              const { currFrom: e, currTo: r } = Z;
              return `${e.formatCourseFrom} ${e.isoCode} : ${r.formatCourseTo}${r.isoCode}`;
            });
          return {
            orderRetrieveTest: q,
            orderRetrieve: P,
            orderConfirm: O,
            orderCancel: Y,
            cardsLoad: D,
            useCard: Q,
            sendLinkToUploadCard: J,
            startTimer: ne,
            stopTimer: ie,
            formatTime: oe,
            saveNewCard: B,
            saveCardToKZT: z,
            parseURL: X,
            updateCardholderName: G,
            clearStatus: se,
            startChat: re,
            confirmPayment: K,
            loadReceiptData: W,
            moderationReceipt: $,
            createdOrder: t,
            cardsManagementState: s,
            orderDetails: V,
            setupOrder: Z,
            orderStepsState: S,
            transactionDetails: E,
            amountOfCurrencyToReceive: de,
            getOrderCurrencyInfo: le,
            currentTimer: ce,
            cashExchangeCourse: fe,
            transactionInformationForRUB: ue,
            transactionInformationForCrypt: _e,
            tplName: I,
            isSBP: pe,
            isLoading: M,
            isLoadingCards: F,
            cardsPopupStates: k,
            cardsOrderFields: m,
            isFiatOrders: me,
          };
        });
      },
      7502: function (e, r, t) {
        "use strict";
        t.d(r, {
          x: function () {
            return _;
          },
        });
        var a = t(4870),
          o = t(3396),
          n = t(5122),
          i = t(1020),
          s = t(2972),
          c = t(584),
          l = t(8948),
          d = t(8105),
          u = t(2788);
        const _ = (0, i.Q_)("cards", () => {
          const e = (0, a.qj)({
              status: "",
              title: "",
              text: "",
              icon: "",
              file: null,
            }),
            r = (0, a.iH)(!1),
            i = (0, a.qj)({
              cards: [],
              rejectedCard: null,
              urlId: null,
              maxFileUploadSize: "",
              formId: "",
              formIdQrCodeUrl: "",
              cardHasUploadedByLink: "",
              isCardSaved: !1,
              chosenCardId: "",
              isSendMailLink: !1,
            }),
            _ = (0, a.qj)({ maxFileUploadSize: "" }),
            m = (0, a.qj)({
              cardUserLastName: {
                label: "order.cards.fields.surname.label",
                info: "order.cards.fields.name.info",
                value: "",
                placeholder: "order.cards.fields.surname.placeholder",
                type: "text",
                pattern: s.V.cardNameClient,
                error: "",
              },
              cardUserFirstName: {
                label: "order.cards.fields.name.label",
                info: "order.cards.fields.name.info",
                value: "",
                placeholder: "order.cards.fields.name.placeholder",
                type: "text",
                pattern: s.V.cardNameClient,
                error: "",
              },
              cardUserMiddleName: {
                label: "order.cards.fields.patronymic.label",
                info: "order.cards.fields.name.info",
                value: "",
                placeholder: "order.cards.fields.patronymic.placeholder",
                type: "text",
                pattern: s.V.cardNameClient,
                error: "",
              },
              cardUserNumber: {
                label: "order.cards.fields.number.label",
                info: "order.cards.fields.number.info",
                value: "",
                placeholder: "order.cards.fields.number.placeholder",
                type: "text",
                error: "",
              },
            }),
            p = (0, a.qj)({
              number: {
                value: "",
                error: "",
                info: "order.cards.fields.number.check",
                label: "order.cards.fields.number.label",
                placeholder: "order.cards.fields.number.placeholder",
                disabled: !0,
              },
              date: {
                value: "",
                error: "",
                label: "order.cards.fields.date.label",
                info: "order.cards.fields.date.info",
                placeholder: "order.cards.fields.date.placeholder",
              },
              code: {
                value: "",
                error: "",
                label: "order.cards.fields.code.label",
                info: "order.cards.fields.code.info",
                placeholder: "order.cards.fields.code.placeholder",
              },
            }),
            f = (0, a.qj)({
              title: "order.cards.instruction.title",
              activeTab: "plastic_with_name",
              links: {
                plastic_with_name: {
                  text: "order.cards.types.plastic_with_name",
                },
                plastic_with_out_name: {
                  text: "order.cards.types.plastic_with_out_name",
                },
                virtual: { text: "order.cards.types.virtual" },
              },
              list: {
                plastic_with_name: {
                  step1: {
                    img: t(5403),
                    text: "order.cards.instruction.plastic_with_name.first_way",
                    textSBP:
                      "order.cards.instruction.plastic_with_name.first_way_sbp",
                  },
                  step2: {
                    img: t(1283),
                    text: "order.cards.instruction.plastic_with_name.second_way",
                    textSBP:
                      "order.cards.instruction.plastic_with_name.second_way_sbp",
                  },
                },
                plastic_with_out_name: {
                  step1: {
                    img: t(9533),
                    text: "order.cards.instruction.plastic_with_out_name.first_way",
                    textSBP:
                      "order.cards.instruction.plastic_with_out_name.first_way_sbp",
                  },
                  step2: {
                    img: t(831),
                    text: "order.cards.instruction.plastic_with_out_name.second_way",
                    textSBP:
                      "order.cards.instruction.plastic_with_out_name.second_way_sbp",
                  },
                },
                virtual: {
                  step1: {
                    img: t(2759),
                    text: "order.cards.instruction.virtual.first_way",
                    textSBP: "order.cards.instruction.virtual.first_way_sbp",
                  },
                },
              },
            }),
            C = (0, a.qj)({
              title: "order.cards.instruction.title",
              activeTab: "plastic_with_name",
              links: {
                plastic_with_name: {
                  text: "order.cards.types.plastic_with_name",
                },
                plastic_with_out_name: {
                  text: "order.cards.types.plastic_with_out_name",
                },
                virtual: { text: "order.cards.types.virtual" },
              },
              list: {
                plastic_with_name: {
                  step1: {
                    img: t(5403),
                    text: "order.cards.instruction.plastic_with_name_kzt.first_way",
                  },
                  step2: {
                    img: t(2373),
                    text: "order.cards.instruction.plastic_with_name_kzt.second_way",
                  },
                },
                plastic_with_out_name: {
                  step1: {
                    img: t(9498),
                    text: "order.cards.instruction.plastic_with_out_name_kzt.first_way",
                  },
                  step2: {
                    img: t(4314),
                    text: "order.cards.instruction.plastic_with_out_name_kzt.second_way",
                  },
                },
                virtual: {
                  step1: {
                    img: t(1453),
                    text: "order.cards.instruction.virtual_kzt.first_way",
                  },
                },
              },
            }),
            h = (0, a.qj)({
              isShowAddCard: !1,
              isShowKZTCard: !1,
              isShowEditCardholder: !1,
              cardId: "",
            }),
            g = (r, t, a, o = "") => {
              (e.status = r), (e.icon = t), (e.title = a), (e.text = o);
            },
            v = (e) => {
              g("success", "success", e);
            },
            w = (e, r) => {
              const t = c.Z[e];
              t && g("error", "warning", r, t);
            },
            b = (r, t) => {
              const { maxFileUploadSize: a } = i;
              (e.text = ""),
                (e.file = r.target.files[0]),
                (0, n.tv)(e, a) && v(t);
            },
            y = (r, t) => {
              const { maxFileUploadSize: a } = _;
              (e.text = ""),
                (e.file = r.target.files[0]),
                (0, n.tv)(e, a) && v(t);
            },
            k = async (t, a) => {
              const { maxFileUploadSize: o } = i;
              if (
                ((e.text = ""), (e.file = t.target.files[0]), !(0, n.tv)(e, o))
              )
                return;
              r.value = !0;
              const s = {
                  image: e.file,
                  formId: u.Z.currentRoute.value.query.f,
                },
                c = new FormData();
              for (const e in s) c.append(e, s[e]);
              const { image: _, ...m } = s;
              try {
                const { data: e } = await l.Z.apiEx.post(
                  d.Y.cardsUploadByLink,
                  c,
                  m
                );
                v(a);
              } catch (p) {
                x(p, "order.cards.title_load_by_link_error");
              } finally {
                r.value = !1;
              }
            },
            x = (r, t) => {
              w(r, t), (e.file = null);
            },
            L = (e) => {
              "cardUserNumber" !== e &&
                (m[e].value = m[e].value.replace(/[^А-Яа-яЁё-]/g, ""));
            },
            H = (e) => {
              const r = p[e].value;
              if ("number" !== e) {
                if ("date" === e) {
                  p[e].value = r.replace(/[^0-9]/g, "");
                  let t = [];
                  return (
                    (t[0] = r.slice(0, 2)),
                    t[0].slice(0, 1) > 1 && (t[0] = "0" + t[0]),
                    t[0] > 12 && (t[0] = "12"),
                    "00" == t[0] && (t[0] = "01"),
                    (t[1] = r.replace(/[^0-9]/g, "").slice(2, 4)),
                    t[1].length ? (t[0] += "/") : (t[0] = t[0].slice(0, 2)),
                    void (p[e].value = t[0] + t[1])
                  );
                }
                "code" !== e ||
                  (p[e].value = r.replace(/[^0-9]/g, "").slice(0, 3));
              }
            },
            T = (0, o.Fl)(() => {
              const { file: r } = e,
                { cardUserFirstName: t, cardUserNumber: a } = m,
                { cardHasUploadedByLink: o } = i;
              return !(r || ("Y" == o && t.value && a.value));
            });
          return (
            (0, o.YP)(
              () => m.cardUserNumber.value,
              (e, r) => {
                let t = e.replace(/\D/g, "");
                if (t.length > 18) return void (m.cardUserNumber.value = r);
                let a = "";
                for (let o = 0; o < t.length; o++)
                  o > 0 && o % 4 === 0 && (a += " "), (a += t[o]);
                m.cardUserNumber.value = a;
              }
            ),
            (0, o.YP)(
              () => p.number.value,
              (e, r) => {
                let t = e.replace(/\D/g, "");
                if (t.length > 18) return void (p.number.value = r);
                let a = "";
                for (let o = 0; o < t.length; o++)
                  o > 0 && o % 4 === 0 && (a += " "), (a += t[o]);
                p.number.value = a;
              }
            ),
            (0, o.YP)(
              () => i.cardHasUploadedByLink,
              (e, r) => {
                "Y" === e && v("order.cards.file_is_loaded");
              }
            ),
            {
              cardsManagementState: i,
              cardsOrderFields: m,
              cardsKZTFields: p,
              cardsOrderTabs: f,
              cardsOrderTabsKZT: C,
              statusUpload: e,
              disabledActionModeration: T,
              cardsPopupStates: h,
              isLoadingByLink: r,
              uploadFileInCardForm: b,
              uploadFileInReceiptForm: y,
              setErrorStatus: w,
              uploadFileByLink: k,
              filterRusFields: L,
              filterKZTFields: H,
            }
          );
        });
      },
      6882: function (e, r, t) {
        "use strict";
        t.d(r, {
          a: function () {
            return u;
          },
        });
        var a = t(4870),
          o = t(8948),
          n = t(1020),
          i = t(5994);
        const s = {
          socket: null,
          isConnected: !1,
          lastSocketActivityTime: 0,
          pingInterval: 7e4,
          isAuthenticated: !1,
          id: 0,
          tryReconnect() {
            this.isConnected || this.connect(this.id);
          },
          connect(e) {
            if (!this.isConnected) {
              setTimeout(() => {
                this.isConnected = !0;
                this.initialize();
                this.schedulePing();
                this.handleMessage({ method: "auth", result: true });
              }, 500);
              this.id = e;
            }
          },
          handleMessage(e) {
            const { chatLoad: r } = u();
            switch (e.method) {
              case "auth":
                this.isAuthenticated = e.result;
                break;
              case "send":
                this.isAuthenticated && (r(), (u().hasNewMessage = !0));
            }
          },
          send(e) {
            this.lastSocketActivityTime = Date.now();
            if (e.method === "auth") {
              setTimeout(() => {
                this.handleMessage({ method: "auth", result: true });
              }, 300);
            }
          },
          initialize() {
            this.isConnected
              ? (this.interval &&
                  (clearInterval(this.interval), (this.interval = null)),
                this.authenticate())
              : this.interval ||
                (this.interval = setInterval(
                  () => this.handleMessage({ update: !0 }),
                  1e4
                ));
          },
          authenticate() {
            if (this.id) {
              const e = { auth_key: this.id, method: "auth" };
              this.send(e);
            }
          },
          schedulePing() {
            const e = Date.now(),
              r = e - this.lastSocketActivityTime,
              t = r >= this.pingInterval ? 0 : this.pingInterval - r;
            setTimeout(() => {
              this.isConnected && (this.send({ ping: e }), this.schedulePing());
            }, t);
          },
        };
        var c = s,
          l = t(8105),
          d = t(1519);
        const u = (0, n.Q_)("chat", () => {
          const { handleError: e } = (0, i.Z)(),
            r = (0, d.F)(),
            t = (0, a.iH)(!1),
            n = (0, a.iH)([]),
            s = (0, a.iH)([]),
            u = (0, a.iH)([]),
            _ = (0, a.iH)({}),
            m = (0, a.iH)(!1),
            p = (0, a.qj)({ error: "" }),
            f = (0, a.iH)(!1),
            C = (0, a.qj)({ value: "", files: [], error: "", nameFile: "" }),
            h = (0, a.qj)({
              orderId: "",
              orderUrl: "",
              accessToken: "",
              rToken: "",
              locale: "",
            }),
            g = (e) => {
              (h.orderUrl = e.orderUrl ? e.orderUrl : ""),
                (h.orderId = e.orderId ? e.orderId : ""),
                (h.rToken = e.rToken ? e.rToken : ""),
                (h.accessToken = e.accessToken),
                (h.locale = e.locale);
            },
            v = (e) => {
              g(e), w();
            },
            w = async () => {
              try {
                const { data: e } = await o.Z.apiEx.post(l.Y.chatLoad, h);
                (s.value = e.fastMessages),
                  (_.value = e.chat),
                  (n.value = e.messages),
                  (u.value = e.preparedMessages),
                  c.connect(_.value.exchangeUniqid);
              } catch (e) {
                switch (e) {
                  default:
                    r.setGlobalError(e);
                    break;
                }
              }
            },
            b = (e) => {
              const r = ["image/jpeg", "image/png", "application/pdf"],
                t = e.target.files[0];
              t
                ? t.size > _.maxUploadSize
                  ? (C.error =
                      "Размер файла превышает допустимое значение 2MB.")
                  : r.includes(t.type)
                  ? ((C.error = ""), y(t))
                  : (C.error =
                      "Недопустимый формат файла. Допустимые форматы: jpg, png, pdf.")
                : (C.error = "Файл не выбран.");
            },
            y = async (r) => {
              const t = new FormData();
              f.value = !0;
              const a = { ...h, file: r };
              for (const e in a) t.append(e, a[e]);
              try {
                const { data: e } = await o.Z.apiEx.post(l.Y.chatUpload, t, h);
                (C.files = e.files), (C.nameFile = a.file.name);
              } catch (n) {
                switch (n) {
                  case "order_not_found":
                    break;
                  case "upload_file_failed":
                  case "chat_file_max_upload_size":
                  case "chat_file_type_not_allowed":
                  case "chat_file_not_found":
                  case "empty_chat_file":
                    e(n, C);
                    break;
                  default:
                    break;
                }
              } finally {
                f.value = !1;
              }
            },
            k = async (t) => {
              const a = {
                  text: C.value || t.msg,
                  preparedMessageId: t ? t.id : "",
                  files: C.files ? C.files : [],
                },
                n = { ...h, message: a };
              try {
                (C.value = ""),
                  (C.nameFile = ""),
                  (C.files = []),
                  await o.Z.apiEx.post(l.Y.chatSend, n),
                  w(h),
                  c.send({ method: "send" });
              } catch (i) {
                switch (i) {
                  case "order_not_found":
                    break;
                  case "message_is_empty":
                  case "prepared_message_not_found":
                    e(i, C);
                    break;
                  default:
                    r.setGlobalError(i);
                    break;
                }
              }
            },
            x = async (e) => {
              h.id = e;
              try {
                await o.Z.apiEx.post(l.Y.chatSetRead, h), w();
              } catch (t) {
                switch (t) {
                  case "order_not_found":
                    break;
                  default:
                    r.setGlobalError(t);
                    break;
                }
              }
            };
          return {
            messages: n,
            fastMessages: s,
            preparedMessages: u,
            chat: _,
            accessDataChat: h,
            сurrentСhatMessage: C,
            isChatOpen: t,
            hasNewMessage: m,
            chatError: p,
            chatLoadingImg: f,
            initChat: v,
            chatSetRead: x,
            chatLoad: w,
            sendMessage: k,
            handleFileUpload: b,
          };
        });
      },
      8524: function (e, r, t) {
        "use strict";
        t.d(r, {
          u: function () {
            return s;
          },
        });
        var a = t(4870),
          o = t(5122),
          n = t(1020),
          i = t(584);
        const s = (0, n.Q_)("receipt", () => {
          const e = (0, a.qj)({
              status: "",
              title: "",
              text: "",
              icon: "",
              file: null,
            }),
            r = (0, a.qj)({ maxFileUploadSize: "" }),
            t = (0, a.qj)({ isShow: !1 }),
            n = (0, a.iH)(!1),
            s = (r, t, a, o = "") => {
              (e.status = r), (e.icon = t), (e.title = a), (e.text = o);
            },
            c = (e) => {
              s("success", "success", e);
            },
            l = (e, r) => {
              const t = i.Z[e];
              t && s("error", "warning", r, t), (n.value = !1);
            },
            d = (t, a) => {
              const { maxFileUploadSize: i } = r;
              (e.text = ""),
                (e.file = t.target.files[0]),
                (0, o.tv)(e, i, "receipt") && (c(a), (n.value = !0));
            },
            u = (r, t) => {
              l(r, t), (e.file = null);
            };
          return {
            receiptPopupStates: t,
            receiptManagementState: r,
            statusUpload: e,
            fileIsLoaded: n,
            uploadFileInReceiptForm: d,
            uploadFileError: u,
            setErrorStatus: l,
          };
        });
      },
      3982: function (e, r, t) {
        "use strict";
        t.d(r, {
          O: function () {
            return u;
          },
        });
        t(560);
        var a = t(1020),
          o = t(4870),
          n = t(8105),
          i = t(8948),
          s = t(2788),
          c = t(1519);
        const l = (e) =>
            "undefined" !== typeof window.localStorage
              ? localStorage.getItem(e)
              : null,
          d = (e, r) => {
            "undefined" !== typeof window.localStorage &&
              localStorage.setItem(e, r);
          },
          u = (0, a.Q_)("partners", () => {
            const e = (0, c.F)(),
              r = (0, o.qj)({
                pid: l("pid") ?? "",
                referer: l("referer") ?? "",
                userId: l("userId") ?? "",
                utmSource: l("utmSource") ?? "",
                metricsTag: l("metricsTag") ?? "",
              }),
              t = (e) => {
                const t = e.query.p,
                  o = e.query.utm_source;
                e.path.startsWith("/m/") && a(e),
                  document.referrer &&
                    ((r.referer = document.referrer ?? ""),
                    d("referer", document.referrer ?? "")),
                  t && ((r.pid = t ?? ""), d("pid", t ?? "")),
                  o && ((r.utmSource = o ?? ""), d("utmSource", o ?? ""));
              },
              a = (e) => {
                (r.metricsTag = e.path.slice(3)),
                  d("metricsTag", r.metricsTag),
                  r.pid || ((r.pid = "123"), d("pid", r.pid)),
                  u();
              },
              u = async () => {
                try {
                  const { data: e } = await i.Z.apiEx.post(n.Y.saveMetricks, {
                    code: r.metricsTag,
                  });
                } catch (t) {
                  e.setGlobalError(t);
                }
                s.Z.push("/");
              },
              _ = async () => {
                const t = { pid: r.pid, referer: r.referer, userId: r.userId };
                try {
                  const { data: e } = await i.Z.apiEx.post(n.Y.saveVisitor, t);
                  (r.userId = e.userid), d("userId", r.userId);
                } catch (a) {
                  e.setGlobalError(a);
                }
              };
            return {
              affiliateInfo: r,
              extractUrlParameters: t,
              saveVisitor: _,
            };
          });
      },
      3554: function (e, r, t) {
        "use strict";
        t.d(r, {
          x: function () {
            return q;
          },
        });
        t(560),
          t(5716),
          t(3442),
          t(1964),
          t(9878),
          t(2915),
          t(7895),
          t(2275),
          t(8858),
          t(1318),
          t(3228);
        var a = t(8948),
          o = t(5994),
          n = t(5122),
          i = t(1519),
          s = t(1020),
          c = t(3396),
          l = t(8105),
          d = t(9408),
          u = t(4870),
          _ = t(2972),
          m = t(2788);
        const p = () => {
            const e = () => {
                const e = (0, u.iH)(!1),
                  r = (0, u.iH)(!1),
                  t = (0, u.iH)(!1),
                  a = (0, u.iH)(!1),
                  o = m.Z.currentRoute.value.query;
                return {
                  isLoading: e,
                  isLoadingPage: r,
                  isLoadingCalculate: t,
                  isLoadingTabs: a,
                  urlKeyCurr: o,
                };
              },
              r = () => {
                const e = (0, u.qj)({
                  currencies: [],
                  currenciesGroups: [],
                  currenciesFrom: [],
                  currenciesTo: [],
                  currenciesSotringFrom: [],
                  currenciesSortingTo: [],
                  currenciesSotringFromCash: [],
                  currenciesSortingToCash: [],
                  currenciesBanks: [],
                  cities: [],
                });
                return { currencyData: e };
              },
              t = () => {
                const e = (0, u.qj)({
                    repeatFrom: "",
                    queryHash: "",
                    token: "",
                    rateTimeout: "",
                    currMinAmountFrom: "",
                    currMaxAmountFrom: "",
                    currMinAmountTo: "",
                    currMaxAmountTo: "",
                    course_from: "",
                    course_to: "",
                    repeated: "",
                    fixSide: "left",
                    sumTo: "",
                    sumFrom: "",
                    amlWarning: "",
                    amlWarningNotify: "",
                    forcedFloatingCourse: "",
                    comission: "",
                    oldMinAmount: "",
                    cashDescriptionTitle: "",
                    cashDescriptionTextFirst: "",
                    cashDescriptionTextSecond: "",
                    type: "",
                    isNeedVerificationForIncomingPay: "",
                    cashReserve: "",
                    currencyToIsSbp: !1,
                    canProvideAdditionalSbpRequisites: !1,
                    url: { from: "", to: "" },
                    title: "",
                    timer: "",
                  }),
                  r = (0, u.qj)({
                    phone: {
                      label: "trade.fields.phone.label",
                      isActive: true,
                      type: "tel",
                      pattern: _.V.phoneNotAllow,
                      icon: "purse",
                      value: "",
                      error: "",
                      isRequired: !0,
                    },
                    walletTo: {
                      label: "",
                      description: "",
                      isActive: !0,
                      icon: "purse",
                      type: "text",
                      value: "",
                      error: "",
                      isRequired: !0,
                    },
                    memo: {
                      label: "trade.fields.memo.label",
                      description: "trade.fields.memo.description",
                      isActive: !1,
                      type: "text",
                      value: "",
                      tagType: "",
                      list: [],
                      error: "",
                      noMemo: !1,
                      isRequired: !0,
                    },
                    name: {
                      label: "trade.fields.name.label",
                      isActive: !1,
                      type: "text",
                      value: "",
                      error: "",
                      isRequired: !0,
                    },
                    email: {
                      label: "E-mail",
                      value: "",
                      isActive: !0,
                      icon: "email",
                      type: "text",
                      error: "",
                      pattern: _.V.email,
                      isRequired: !0,
                    },
                    contact: {
                      label: "trade.fields.contact.label",
                      isActive: !1,
                      type: "text",
                      value: "",
                      error: "",
                      isRequired: !0,
                    },
                    phone_value: {
                      label: "Номер телефона",
                      isActive: true,
                      placeholder: "Минимально 10 символов",
                      type: "text",
                      value: "",
                      isRequired: true,
                    },
                    aml_policy: { value: "", error: "", isRequired: !0 },
                    sbpBank: {
                      isActive: !1,
                      value: { name: "", localization: "" },
                      error: "",
                      id: "",
                      code: "",
                      img: "",
                      isRequired: !0,
                    },
                  }),
                  t = (0, u.qj)({ currFrom: 0, currTo: 0 }),
                  a = (0, u.iH)(!1),
                  o = (0, u.iH)(!1),
                  n = (0, u.iH)("N"),
                  i = (0, u.iH)(""),
                  s = (0, u.iH)([]);
                return {
                  order: e,
                  formOrder: r,
                  reverseRateExists: n,
                  globalOrderError: i,
                  memoTags: s,
                  selectedCurrenciesGroups: t,
                  isCash: a,
                  isCNY: o,
                };
              },
              a = () => {
                const e = (0, u.iH)(!1);
                return { isComission: e };
              },
              o = () => {
                let e = (0, u.iH)(null),
                  r = (0, u.iH)(""),
                  t = (0, u.iH)(!1);
                return { timerId: e, timerCalcId: r, shouldRedirect: t };
              },
              n = () => {
                const e = (0, u.qj)({
                    value: "",
                    error: "",
                    label: "trade.fields.city.label",
                  }),
                  r = (0, u.qj)({
                    currFrom: {
                      currency: "",
                      value: "",
                      error: "",
                      label: "trade.fields.currFrom.label",
                      isRequired: !0,
                    },
                    currTo: {
                      currency: "",
                      value: "",
                      error: "",
                      label: "trade.fields.currTo.label",
                      isRequired: !0,
                    },
                  });
                return { tradeFields: r, citiesField: e };
              };
            return {
              initLoadingState: e,
              initCurrencyState: r,
              initOrderState: t,
              initComissionState: a,
              initTimerState: o,
              initTradeFieldsState: n,
            };
          },
          f = (e, r) => e,
          C = (e, r, t) => y(e, r, t),
          h = (e, r, t, a) => k(e, r, t, a),
          g = (e, r, t, a) => x(e, r, t, a),
          v = (e, r, t, a, o) => L(e, r, t, a, o),
          w = (e, r) => {
            const t = [...new Set(e.flatMap((e) => e.currencies))];
            if (r) {
              const e = t.find(
                (e) => e.best_code === r.toUpperCase() && "Y" !== e.isDisabled
              );
              if (e) return e;
            }
            return t.find((e) => "Y" !== e.isDisabled);
          },
          b = (e) => {
            const r = {};
            return (
              e.forEach((e) => {
                r[e.id] = e;
              }),
              r
            );
          },
          y = (e, r, t) => {
            const a = b(e),
              o = b(r),
              n = new Set(),
              i = new Map();
            t.forEach((e) => {
              e.list.forEach((e) => {
                i.set(e.currency_id, e.disabled);
              });
            }),
              t.forEach((e) => {
                e.list.forEach((e) => {
                  n.add(e.currency_id);
                });
              });
            const s = t
                .map((e) => ({
                  currencies: e.list
                    .map((e) => {
                      const r = a[e.currency_id];
                      return r ? { ...r, isDisabled: e.disabled } : null;
                    })
                    .filter((e) => e && n.has(e.id)),
                  group: o[e.group_id],
                }))
                .filter((e) => e.currencies.length > 0)
                .sort((e, r) => r.group.sort - e.group.sort),
              c = s.flatMap((e) => e.currencies);
            return (
              s.push({
                currencies: c
                  .filter((e) => n.has(e.id))
                  .map((e) => ({ ...e, isDisabled: i.get(e.id) || "N" })),
                group: {
                  sort: "999",
                  id: "0",
                  name: "Все",
                  localization: { ru: { name: "Все" }, en: { name: "All" } },
                },
              }),
              s.sort((e, r) => r.group.sort - e.group.sort),
              s
            );
          },
          k = (e, r, t, a) => {
            const o = b(e),
              n = b(r),
              i = t.filter((e) => e.city == a),
              s = new Set(),
              c = new Map();
            i.forEach((e) => {
              e.list.forEach((e) => {
                c.set(e.currency_id, e.disabled), s.add(e.currency_id);
              });
            });
            const l = i
              .map((e) => ({
                currencies: e.list
                  .map((e) => {
                    const r = o[e.currency_id];
                    return r ? { ...r, isDisabled: e.disabled } : null;
                  })
                  .filter((e) => e && s.has(e.id)),
                group: n[e.group_id],
              }))
              .filter((e) => e.currencies.length > 0);
            l.push({
              currencies: e
                .filter((e) => s.has(e.id))
                .map((e) => ({ ...e, isDisabled: c.get(e.id) || "N" })),
              group: {
                sort: "999",
                id: "0",
                localization: { ru: { name: "Все" }, en: { name: "All" } },
              },
            }),
              l.sort((e, r) => r.group.sort - e.group.sort);
            for (const d of l)
              d.currencies.sort((e, r) => r.sort - e.sort),
                d.currencies.sort((e, r) => e.group_id - r.group_id);
            return l;
          },
          x = (e, r, t, a) => {
            const o = b(r),
              n = b(t),
              i = a.filter((r) => r.currency_from_best_code == e.best_code),
              s = i.map((e) => ({
                ...e,
                sort: t.filter((r) => r.id === e.group_id).find((e) => e.sort)
                  .sort,
              })),
              c = s.sort((e, r) => r.sort - e.sort),
              l = c.flatMap((e) => e.list),
              d = l.map((e) => ({
                ...o[e.currency_id],
                rateId: e.rateId,
                isDisabled: e.disabled,
                balance: e.f_balance,
              })),
              u = i
                .map((e) => ({
                  group: { ...n[e.group_id] },
                  currencies: d.filter((r) =>
                    e.list.some((e) => e.currency_id === r.id)
                  ),
                }))
                .concat([
                  {
                    group: {
                      sort: "999",
                      id: "0",
                      localization: {
                        ru: { name: "Все" },
                        en: { name: "All" },
                      },
                    },
                    currencies: d,
                  },
                ])
                .sort((e, r) => r.group.sort - e.group.sort);
            return u;
          },
          L = (e, r, t, a, o) => {
            const n = a.filter(
                (r) => r.currency_from_best_code == e.best_code && r.city == o
              ),
              i = b(r),
              s = b(t),
              c = n.flatMap((e) =>
                e.list.map((e) => ({
                  ...i[e.currency_id],
                  rateId: e.rateId,
                  isDisabled: e.disabled,
                  balance: e.f_balance,
                }))
              ),
              l = n
                .map((e) => ({
                  group: { ...s[e.group_id] },
                  currencies: c.filter((r) =>
                    e.list.some((e) => e.currency_id === r.id)
                  ),
                }))
                .concat([
                  {
                    group: {
                      sort: "999",
                      id: "0",
                      localization: {
                        ru: { name: "Все" },
                        en: { name: "All" },
                      },
                    },
                    currencies: c,
                  },
                ])
                .sort((e, r) => r.group.sort - e.group.sort);
            return (
              l.forEach((e) => {
                e.currencies.sort((e, r) => r.sort - e.sort),
                  e.currencies.sort((e, r) => e.group_id - r.group_id);
              }),
              l
            );
          },
          H = async (e) => {
            const r = "cash" === e ? l.Y.loadWithCash : l.Y.load,
              t = await a.Z.apiEx.get(r);
            return t.data;
          },
          T = async (e, r) => {
            const t = "cash" === e ? l.Y.cashOrderLoad : l.Y.orderLoad,
              o = await a.Z.apiEx.post(t, r);
            return o.data;
          },
          M = async (e, r) => {
            const t = "cash" === e ? l.Y.cashOrderCreate : l.Y.orderCreate,
              o = await a.Z.apiEx.post(t, r);
            console.log(o);
            if (o.status == 500) {
              alert(o.error.message);

              return false;
            }
            return o.data;
          },
          F = async (e, r) => {
            const t =
                "cash" === e ? l.Y.cashOrderCalculate : l.Y.orderCalculate,
              o = await a.Z.apiEx.post(t, r);
            return o.data;
          },
          Z = () =>
            "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(
              /[xy]/g,
              function (e) {
                var r = (16 * Math.random()) | 0,
                  t = "x" == e ? r : (3 & r) | 8;
                return t.toString(16);
              }
            ),
          V = () => {
            let e = localStorage.getItem("ctoken");
            (e && /^[\w]{8}\-[\w]{4}\-4[\w]{3}\-[\w]{4}\-[\w]{12}$/.test(e)) ||
              ((e = Z()), localStorage.setItem("ctoken", e));
          };
        var S = t(3982),
          E = t(8352),
          A = t(6219);
        const {
            initLoadingState: I,
            initCurrencyState: U,
            initOrderState: R,
            initComissionState: N,
            initTimerState: j,
            initTradeFieldsState: P,
          } = p(),
          q = (0, s.Q_)("trade", () => {
            const e = (0, i.F)(),
              r = (0, S.O)(),
              { handleError: t } = ((0, E.s)(), (0, o.Z)()),
              {
                isLoading: s,
                isLoadingPage: u,
                isLoadingCalculate: p,
                isLoadingTabs: b,
              } = I(),
              {
                isCash: y,
                isCNY: k,
                order: x,
                formOrder: L,
                reverseRateExists: Z,
                globalOrderError: q,
                memoTags: O,
                selectedCurrenciesGroups: Y,
              } = R(),
              { isComission: D } = N(),
              { tradeFields: B, citiesField: z } = P();
            let { timerId: W, timerCalcId: $, shouldRedirect: G } = j();
            const { createdOrder: Q } = (0, d.u)(),
              { currencyData: K } = U(),
              J = async (r) => {
                const o = { code: r };
                try {
                  const { data: r } = await a.Z.apiEx.post(l.Y.challenge, o);
                  "yes" == r.success &&
                    ((e.isReCaptchaActive = !1), window.location.reload(!0));
                } catch (n) {
                  switch (n) {
                    case "challenge_failed":
                      window.grecaptcha.reset();
                      break;
                    case "forbidden":
                      (e.isReCaptchaActive = !1), t(n, q, !0);
                      break;
                    default:
                      break;
                  }
                }
              },
              X = async () => {
                const e = Le("cur_from"),
                  t = Le("cur_to"),
                  o = Le("p");
                if (
                  (o &&
                    ((r.affiliateInfo.pid = o), localStorage.setItem("pid", o)),
                  e && t)
                ) {
                  const r = K.currencies
                      .filter((r) => r.best_code === e)
                      .find((e) => "Y" === e.isCash),
                    o = K.currencies
                      .filter((e) => e.best_code === t)
                      .find((e) => "Y" === e.isCash);
                  if (r && o) {
                    const { data: n } = await a.Z.apiEx.post(
                      l.Y.cashOrderCheck,
                      { currencyFromId: r.id, currencyToId: o.id }
                    );
                    if ("Y" === n.cashRateExists)
                      return void (window.location.href = `/cash?from=${e}&to=${t}`);
                  }
                  const n = { ...m.Z.currentRoute.value.query };
                  delete n["cur_from"], delete n["cur_to"];
                  const i = { ...n, from: e, to: t };
                  return m.Z.replace({ name: "home", query: i });
                }
                return Promise.resolve();
              },
              ee = (r) => {
                Object.entries(r).forEach(([r, t]) => {
                  e.settings[r] = t;
                });
              },
              re = async (r, a = !0) => {
                (u.value = a), (s.value = !0), e.resetGlobalError();
                try {
                  const a = await H(r);
                  ee(a.settings), await e.setVisitorIdByFingerPrint();
                  const o = f(a, r);
                  if (
                    ((K.currencies = o.currencies),
                    (K.currenciesGroups = o.currencyGroups),
                    V(),
                    "cash" === r)
                  ) {
                    if ("N" == e.settings.cashIsActive)
                      return (
                        t("cash_is_not_active", q, !0), void (u.value = !1)
                      );
                    (K.cities = o.cash.cities),
                      (K.currenciesFrom = o.cash.currenciesFrom),
                      (K.currenciesTo = o.cash.currenciesTo),
                      ye(),
                      (K.currenciesSotringFrom = h(
                        K.currencies,
                        K.currenciesGroups,
                        K.currenciesFrom,
                        z.value
                      )),
                      (y.value = !0);
                  } else
                    (K.currenciesBanks = o.currenciesBanks),
                      (K.currenciesFrom = o.currenciesFrom),
                      (K.currenciesTo = o.currenciesTo),
                      (K.currenciesSotringFrom = C(
                        K.currencies,
                        K.currenciesGroups,
                        K.currenciesFrom
                      )),
                      (y.value = !1);
                  return (
                    await X(),
                    te(K.currenciesSotringFrom, Le("from"), "currFrom"),
                    ae(r),
                    te(K.currenciesSortingTo, Le("to"), "currTo"),
                    await ce(B.currTo.currency.rateId, r),
                    (x.repeatFrom = ""),
                    Re(B.currFrom.currency, B.currTo.currency),
                    Ae(),
                    K
                  );
                } catch (o) {
                  t(o, q, !0);
                }
              },
              te = (e, r, t) => {
                const a = w(e, r);
                "currFrom" === t
                  ? (B.currFrom.currency = a)
                  : "currTo" === t && (B.currTo.currency = a);
              },
              ae = (e) => {
                const r = z.value || Le("city");
                switch (e) {
                  case "cash":
                    K.currenciesSortingTo = v(
                      B.currFrom.currency,
                      K.currencies,
                      K.currenciesGroups,
                      K.currenciesTo,
                      r
                    );
                    break;
                  case "online":
                  default:
                    K.currenciesSortingTo = g(
                      B.currFrom.currency,
                      K.currencies,
                      K.currenciesGroups,
                      K.currenciesTo
                    );
                    break;
                }
              },
              oe = async (r, t, a) => {
                switch (t) {
                  case "currFrom":
                    (B.currFrom.currency = r),
                      ae(a),
                      (Y.currTo = 0),
                      (B.currTo.currency = w(K.currenciesSortingTo));
                    break;
                  case "currTo":
                    B.currTo.currency = r;
                    break;
                }
                await e.waitForLocale(),
                  await ce(B.currTo.currency.rateId, a),
                  (x.repeatFrom = ""),
                  Re(B.currFrom.currency, B.currTo.currency),
                  Ae();
              },
              ne = () => {
                (B.currFrom.value = ""),
                  (B.currTo.value = ""),
                  (D.value = !1),
                  delete x.repeated;
              },
              ie = () => {
                const { currFrom: e, currTo: r } = B;
                (e.error = ""),
                  (r.error = ""),
                  Object.values(L).forEach((e) => {
                    e.error = "";
                  });
              },
              se = (r) => {
                console.log(B);
                return {
                  rateId: r,

                  order: {
                    orderToken: localStorage.getItem("order_token") || x.token,
                    queryHash:
                      localStorage.getItem("query_hash") || x.queryHash,
                    repeated: x.repeated,
                    id: e.visitorId,
                    сurr_from: B.currFrom.currency,
                    sumFrom: B.currFrom.value + "",
                    сurr_to: B.currTo.currency,
                    sumTo: B.currTo.value + "",
                    fixSide: x.fixSide,
                  },
                  locale: e.locale,
                  repeatFrom: x.repeatFrom ? x.repeatFrom : void 0,
                };
              },
              ce = async (e, r) => {
                s.value = !0;
                const t = se(e);
                try {
                  const e = await T(r, t);
                  le(e), de(e), ue(e), _e(r), Fe(x.rateTimeout, r);
                } catch (a) {
                  me(a);
                } finally {
                  (s.value = !1), (u.value = !1);
                }
              },
              le = (e) => {
                (x.token = e.order.orderToken),
                  (x.queryHash = e.order.queryHash),
                  (x.isNeedVerificationForIncomingPay =
                    e.rate.isNeedVerificationForIncomingPay),
                  (x.rateTimeout = e.order.rateTimeout),
                  (x.amlWarning = "Y" === e.order.amlWarning),
                  (x.amlWarningNotify = "Y" === e.order.amlWarningNotify),
                  (x.comission = e.order.comission),
                  (x.oldMinAmount = e.order.oldMinAmount),
                  (x.forcedFloatingCourse =
                    "Y" === e.rate.forced_floating_course),
                  (x.currMinAmountFrom = e.rate.f_minamount_from),
                  (x.currMaxAmountFrom = e.rate.f_maxamount_from),
                  (x.currMinAmountTo = e.rate.f_minamount_to),
                  (x.currMaxAmountTo = e.rate.f_maxamount_to),
                  (x.course_from = e.rate.f_course_from),
                  (x.course_to = e.rate.f_course_to),
                  (x.url.from = e.rate.url_currency_from_code),
                  (x.url.to = e.rate.url_currency_to_code),
                  (x.title = e.rate.seo_h1),
                  (x.type = e.rate.type),
                  (x.cashReserve = e.rate.f_balance),
                  (x.currencyToIsSbp = "Y" === e.order.currencyToIsSbp),
                  (x.canProvideAdditionalSbpRequisites =
                    "Y" === e.order.canProvideAdditionalSbpRequisites),
                  (B.currFrom.value =
                    "0." == B.currFrom.value ? "0." : e.order.sumFrom),
                  (B.currTo.value = e.order.sumTo),
                  (Z.value =
                    B.currFrom.currency.id === B.currTo.currency.id
                      ? (Z.value = "N")
                      : e.rate.reverseRateExists),
                  localStorage.setItem("order_token", e.order.orderToken),
                  localStorage.setItem("query_hash", e.order.queryHash);
              },
              de = (e) => {
                const r = localStorage.getItem("email");
                (O.value = e.rate.tag.length > 0 ? e.rate.tag : []),
                  (L.memo.tagType = O.value[0] || ""),
                  (L.memo.isActive = O.value.length > 0),
                  (L.aml_policy.isActive = x.amlWarning),
                  (L.email.value = "" == e.order.email ? r : e.order.email);
              },
              ue = (e) => {
                (x.cashDescriptionTitle = e.rate.cash_mainform_text_title),
                  (x.cashDescriptionTextFirst = e.rate.cash_mainform_text_one),
                  (x.cashDescriptionTextSecond = e.rate.cash_mainform_text_two);
              },
              _e = (e) => {
                const r = m.Z.currentRoute.value.name,
                  t = "cash" === e ? "/cash" : "/",
                  a =
                    "cash" === e
                      ? { from: x.url.from, to: x.url.to, city: z.value }
                      : { from: x.url.from, to: x.url.to };
                ("home" !== r && "cash" !== r) ||
                  m.Z.replace({ path: t, query: a });
              },
              me = (e) => {
                ["rate_not_found", "rate_disabled"].includes(e)
                  ? t(e, B.currTo)
                  : t(e, q, !0);
              },
              pe = () => {
                const r = {
                  rateId: B.currTo.currency.rateId,
                  order: {
                    orderToken: x.token,
                    repeated: x.repeated,
                    fixSide: x.fixSide,
                    sumFrom: B.currFrom.value + "",
                    sumTo: B.currTo.value + "",
                    сurr_from: B.currFrom.currency,
                    сurr_to: B.currTo.currency,
                  },
                  locale: e.locale,
                };
                return r;
              },
              fe = async (e) => {
                p.value = !0;
                const r = pe(e);
                try {
                  const t = await F(e, r);
                  Ce(t);
                } catch (t) {
                  me(t);
                } finally {
                  p.value = !1;
                }
              },
              Ce = (e) => {
                (x.token = e.order.orderToken),
                  (B.currFrom.value = e.order.sumFrom),
                  (B.currTo.value = e.order.sumTo),
                  (B.currFrom.error = e.order.errors[0]?.sumFrom),
                  (B.currTo.error = e.order.errors[0]?.sumTo),
                  B.currFrom.error ? Ne() : (D.value = !1);
              },
              he = () => {
                const { currFrom: e, currTo: r } = B,
                  t = (e) =>
                    Object.entries(e).reduce(
                      (e, [r, t]) => (
                        !1 !== t.isActive && (t.noMemo || (e[r] = t)), e
                      ),
                      {}
                    ),
                  a = t(L);
                (a.currFrom = e), (a.currTo = r);
                const o = (0, n.V$)(a);
                return o;
              },
              ge = (t) => {
                const { currFrom: a, currTo: o } = B,
                  { fixSide: n } = x,
                  {
                    walletTo: i,
                    memo: s,
                    email: c,
                    name: l,
                    contact: d,
                    sbpBank: u,
                    phone_value: __,
                  } = L,
                  { affiliateInfo: m } = r,
                  p = {
                    rateId: B.currTo.currency.rateId,
                    order: {
                      queryHash:
                        localStorage.getItem("query_hash") || x.queryHash,
                      orderToken:
                        localStorage.getItem("order_token") || x.token,
                      fixSide: n,
                      sumTo: o.value,
                      sumFrom: a.value,
                      сurr_to: B.currTo.currency,
                      сurr_from: B.currFrom.currency,
                      email: c.value,
                      wallet: i.value.replace(/\s+/g, ""),
                      tagType: s.noMemo ? "NONE" : s.tagType,
                      tag: s.value,
                      ctoken: localStorage.getItem("ctoken") || "",
                      id: e.visitorId,
                      bank: u.code,
                      clientPhoneNumber: __.value,
                    },
                    locale: e.locale,
                  };
                return (
                  (p.order = Object.assign(p.order, m)),
                  "cash" === t &&
                    ((p.order.city = z.value),
                    (p.order.clientName = l.value),
                    (p.order.clientContact = d.value)),
                  k.value &&
                    ((p.order.clientName = l.value),
                    (p.order.clientContact = d.value)),
                  p
                );
              },
              ve = async (e) => {
                if (!he()) return;
                u.value = !0;
                const r = ge(e);

                try {
                  const t = await M(e, r);
                  console.log(t);
                  if(t !== false){
                    console.log(t);
                    we(t);
                  }
                  else{
                    ce()
                  }
                } catch (t) {
                    console.log(t);
                //   (u.value = !1), be(t);
                }
              },
              we = (e) => {
                je(e.url),
                  (Q.orderId = e.orderId.replaceAll(" ")),
                  (s.value = !0),
                  (window.location.href = e.url);
                // m.Z.push({
                //   name: "order",
                //   params: { id: Q.urlId },
                //   query: { t: Q.accessToken },
                // });
              },
              be = (e) => {
                const { currTo: r } = B,
                  { walletTo: a, memo: o, sbpBank: n } = L;
                switch (e) {
                  case "rate_not_found":
                    t(e, r);
                    break;
                  case "incorrect_wallet":
                  case "incorrect_card_number":
                  case "bin_code_error":
                  case "card_in_black_list_error":
                    t(e, a);
                    break;
                  case "incorrect_bank":
                    t(e, n);
                    break;
                  case "empty_tag":
                    t(e, o);
                    break;
                  case "incorrect_captcha":
                  case "active_orders_limit_excess":
                  case "order_creation_error":
                    t(e, q, !0);
                    break;
                  default:
                    t(e, q, !0);
                }
              },
              ye = () => {
                const e = Le("city"),
                  r = K.cities.some((r) => r.code === e);
                z.value = r ? e : K.cities[0].code;
              },
              ke = () => {
                h(K.currencies, K.currenciesGroups, K.currenciesFrom),
                  oe(B.currFrom.currency, "currFrom", "cash");
              },
              xe = (e) => {
                const r = L.sbpBank;
                (r.value.name = e.name),
                  (r.value.localization = e.localization),
                  (r.code = e.code),
                  (r.img = e.icon_url),
                  (r.id = e.id);
              },
              Le = (e) => m.Z.currentRoute.value.query[e],
              He = (e, r) => {
                (x.repeatFrom = e),
                  m.Z.replace({
                    name: "home",
                    query: { from: r.currFrom.bestCode, to: r.currTo.bestCode },
                  });
              },
              Te = async () => {
                const e = B.currFrom.currency,
                  r = B.currFrom.value,
                  t = B.currFrom.error,
                  a = B.currTo.currency,
                  o = B.currTo.value,
                  n = B.currTo.error;
                (B.currFrom.currency = a),
                  (B.currFrom.value = o),
                  (B.currFrom.error = n),
                  (B.currTo.currency = e),
                  (B.currTo.value = r),
                  (B.currTo.error = t),
                  (Y.currTo = 0),
                  (Y.currFrom = 0),
                  delete x.repeated,
                  m.Z.replace({
                    query: {
                      from: B.currFrom.currency.best_code,
                      to: B.currTo.currency.best_code,
                    },
                  }),
                  (K.currenciesSortingTo = g(
                    B.currFrom.currency,
                    K.currencies,
                    K.currenciesGroups,
                    K.currenciesTo
                  ));
                const i = [
                    ...new Set(
                      K.currenciesSortingTo.flatMap((e) => e.currencies)
                    ),
                  ],
                  s = i.find(
                    (e) =>
                      "N" !== e.disabled &&
                      e.best_code === B.currTo.currency.best_code
                  );
                s && (B.currTo.currency = s),
                  await ce(B.currTo.currency.rateId, "online"),
                  Re(B.currFrom.currency, B.currTo.currency),
                  Ae(),
                  ne(),
                  ie();
              },
              Me = (e) => {
                switch (e) {
                  case "currFrom":
                    return Oe.value;
                  case "currTo":
                    return Ye.value;
                  default:
                    break;
                }
              },
              Fe = (e, r) => {
                Ze();
                let t,
                  a,
                  o = e;
                const n = async () => {
                  (t = parseInt(o / 60, 10)),
                    (a = parseInt(o % 60, 10)),
                    (t = t < 10 ? "0" + t : t),
                    (a = a < 10 ? "0" + a : a),
                    (x.timer = t + ":" + a),
                    --o < 0 &&
                      ((o = e),
                      (x.repeated = "1"),
                      (b.value = !0),
                      await re(r, !1),
                      (b.value = !1));
                };
                (W.value = setInterval(n, 1e3)), n();
              },
              Ze = () => {
                null !== W.value && (clearInterval(W.value), (W.value = null));
              },
              Ve = (e, r) => {
                B[e].value = r.target.value
                  .replace(/[^0-9\.]/g, "")
                  .replace(/\.\./g, ".")
                  .replace(/(\.[^\.]*)\./g, "$1")
                  .replace(/^00/, "0")
                  .replace(/^0([^\.])/, "0$1")
                  .replace(/^\./, "0.");
              },
              Se = (e, r, t) => {
                Ve(e, t);
                const a = /^(0\.{0,}|\.+)?$|[^0-9.]/;
                if (!a.test(t.target.value)) {
                  switch (e) {
                    case "currFrom":
                      (p.value = !0), (x.fixSide = "left");
                      break;
                    case "currTo":
                      (p.value = !0), (x.fixSide = "right");
                      break;
                  }
                  clearTimeout($),
                    ($ = setTimeout(() => {
                      fe(r);
                    }, 1e3));
                }
              },
              Ee = (e, r) => {
                const { currTo: t } = B;
                if (
                  "N" != t.currency.walletIsCard &&
                  "SBPRUB" != t.currency.best_code &&
                  "walletTo" === r
                ) {
                  let r = e.target.value;
                  L.walletTo.value = (0, A.Z)(r);
                }
              };
            function Ae() {
              const { currTo: e } = B;
              if ("N" == e.currency.walletIsCard) return;
              if ("SBPRUB" == e.currency.best_code) return;
              const r = L.walletTo;
              r.value = (0, A.Z)(r.value);
            }
            const Ie = (e, r) => {
                if ("email" === r)
                  return void localStorage.setItem("email", e.target.value);
                const t = `rate${B.currTo.currency.rateId}`,
                  a = localStorage.getItem(t);
                let o = {};
                if (a) {
                  const e = decodeURIComponent(a);
                  o = JSON.parse(e);
                }
                o[r] = e.target.value;
                const n = encodeURIComponent(JSON.stringify(o));
                localStorage.setItem(t, n);
              },
              Ue = (e) => {
                const r = localStorage.getItem(`rate${e}`);
                if (!r) return null;
                const t = decodeURIComponent(r);
                return JSON.parse(t);
              },
              Re = (e, r) => {
                const {
                    walletTo: t,
                    name: a,
                    contact: o,
                    sbpBank: n,
                    phone: i,
                  } = L,
                  { currencyToIsSbp: s, canProvideAdditionalSbpRequisites: c } =
                    x,
                  l = Ue(r.rateId);
                "PERFECT_USD" === r.code
                  ? ((t.type = "text"),
                    (t.pattern = ""),
                    (t.value = l?.walletTo || "U"),
                    (t.description = "trade.fields.walletTo.description"))
                  : s
                  ? ((t.type = "tel"),
                    (t.pattern = _.V.phone),
                    (t.value = l?.walletTo || ""),
                    (t.description = "trade.fields.walletTo.description_phone"),
                    (t.isActive = !0),
                    (n.isActive = !0),
                    (a.isActive = !1),
                    (o.isActive = !1),
                    (i.isActive = !1))
                  : "Y" === r.isCash || "Y" === r.isCNY
                  ? ((k.value = !0),
                    (t.isActive = !1),
                    (t.pattern = ""),
                    (a.isActive = !0),
                    (a.value = l?.name || ""),
                    (o.isActive = !0),
                    (o.value = l?.contact || ""),
                    (0, A.Z)(o.value))
                  : "Y" == r.walletIsCard
                  ? ((t.description = "trade.fields.walletTo.description_card"),
                    (t.value = l?.walletTo || ""),
                    (t.type = "text"),
                    (t.icon = ""),
                    (t.pattern = ""),
                    (n.isActive = !1),
                    (a.isActive = !1),
                    (o.isActive = !1),
                    (i.isActive = c),
                    (i.value = l?.phone || ""))
                  : ((t.isActive = !0),
                    (t.value = l?.walletTo || ""),
                    (t.type = "text"),
                    (t.description = "trade.fields.walletTo.description"),
                    (a.isActive = !1),
                    (o.isActive = !1),
                    (i.isActive = !1),
                    (n.isActive = !1),
                    (t.pattern = ""));
              },
              Ne = () => {
                const { oldMinAmount: e } = x,
                  { currFrom: r } = B;
                r.value < e && "" != r.value ? (D.value = !0) : (D.value = !1);
              },
              je = (e) => {
                let r = new URL(e),
                  t = r.pathname.split("/"),
                  a = new URLSearchParams(r.search);
                (Q.urlId = t[t.length - 1]),
                  (Q.accessToken = decodeURIComponent(a.get("t")));
              },
              Pe = () => {
                m.Z.beforeEach((e) => {
                  "home" !== e.name
                    ? ((G.value = !1), cancelAnimationFrame(W.value))
                    : (G.value = !0);
                });
              },
              qe = (r) => {
                L.walletTo.label = e.setTranslationResultForLabel(r);
              },
              Oe = (0, c.Fl)(
                () =>
                  "От " +
                  x.currMinAmountFrom +
                  " " +
                  B?.currFrom?.currency?.iso_code
              ),
              Ye = (0, c.Fl)(
                () =>
                  "От " +
                  x.currMinAmountTo +
                  " " +
                  B?.currTo?.currency?.iso_code
              ),
              De = (0, c.Fl)(() => x.title),
              Be = (0, c.Fl)(
                () => !("N" !== x.isNeedVerificationForIncomingPay && !y.value)
              ),
              ze = (0, c.Fl)(() => {
                const { forcedFloatingCourse: e } = x;
                return {
                  title: e
                    ? "trade.floating_rate.title"
                    : "trade.fixed_rate.title",
                  text: e
                    ? "trade.floating_rate.text"
                    : "trade.fixed_rate.text",
                };
              }),
              We = (0, c.Fl)(() => {
                const { course_from: e, course_to: r } = x,
                  { currFrom: t, currTo: a } = B;
                return `${e} ${t.currency?.iso_code} = ${r} ${a.currency?.iso_code}`;
              }),
              $e = (0, c.Fl)(
                () => x.oldMinAmount + " " + B.currFrom.currency?.iso_code
              ),
              Ge = (0, c.Fl)(
                () => x.comission + " " + B.currFrom.currency?.iso_code
              ),
              Qe = (0, c.Fl)(() => (y.value ? "cash" : "online"));
            return (
              (0, c.YP)(() => B.currTo.currency, qe),
              (0, c.YP)(
                () => L.memo.noMemo,
                (e) => {
                  (L.memo.noMemo = e), (L.memo.error = "");
                }
              ),
              {
                getTradeAllData: re,
                chooseCurrency: oe,
                resetValues: ne,
                resetErrors: ie,
                reverseCurrencies: Te,
                placeholderCurrency: Me,
                setCurrencyValue: Se,
                orderCreate: ve,
                setupRouteHooks: Pe,
                stopTimer: Ze,
                sendReCaptchaCode: J,
                repeatOrder: He,
                saveParamsInLocalStorage: Ie,
                selectCity: ke,
                selectBankInCreateOrder: xe,
                handleCardFormatter: Ee,
                initializeCardFormatting: Ae,
                orderLoad: ce,
                currencyData: K,
                isLoading: s,
                isLoadingPage: u,
                isLoadingTabs: b,
                tradeFields: B,
                citiesField: z,
                order: x,
                isCash: y,
                reverseRateExists: Z,
                tradeMainTitle: De,
                formOrder: L,
                memoTags: O,
                isVerification: Be,
                textNotification: ze,
                currentExchangeRate: We,
                isComission: D,
                limitBeforeCommission: $e,
                comission: Ge,
                isLoadingCalculate: p,
                selectionDealType: Qe,
                selectedCurrenciesGroups: Y,
                globalOrderError: q,
              }
            );
          });
      },
      389: function (e, r, t) {
        "use strict";
        t.d(r, {
          Z: function () {
            return d;
          },
        });
        var a = t(3396),
          o = t(7139),
          n = t(4870),
          i = {
            menu: '<path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>',
            logo: '<path d="M24.7472 11.304H18.3551C18.2699 10.6477 18.0952 10.0554 17.831 9.52699C17.5668 8.99858 17.2173 8.54687 16.7827 8.17188C16.348 7.79688 15.8324 7.51136 15.2358 7.31534C14.6477 7.11079 13.9957 7.00852 13.2798 7.00852C12.0099 7.00852 10.9148 7.3196 9.99432 7.94176C9.08239 8.56392 8.37926 9.46307 7.88494 10.6392C7.39915 11.8153 7.15625 13.2386 7.15625 14.9091C7.15625 16.6477 7.40341 18.1051 7.89773 19.2812C8.40057 20.4489 9.10369 21.331 10.0071 21.9276C10.919 22.5156 11.9972 22.8097 13.2415 22.8097C13.9403 22.8097 14.5753 22.7202 15.1463 22.5412C15.7259 22.3622 16.233 22.1023 16.6676 21.7614C17.1108 21.4119 17.473 20.9901 17.7543 20.4957C18.044 19.9929 18.2443 19.4261 18.3551 18.7955L24.7472 18.8338C24.6364 19.9929 24.2997 21.1349 23.7372 22.2599C23.1832 23.3849 22.4205 24.4119 21.4489 25.3409C20.4773 26.2614 19.2926 26.9943 17.8949 27.5398C16.5057 28.0852 14.9119 28.358 13.1136 28.358C10.7443 28.358 8.62216 27.8381 6.74716 26.7983C4.88068 25.75 3.40625 24.2244 2.32386 22.2216C1.24148 20.2187 0.700284 17.7812 0.700284 14.9091C0.700284 12.0284 1.25 9.58665 2.34943 7.58381C3.44886 5.58097 4.93608 4.05966 6.81108 3.01989C8.68608 1.98011 10.7869 1.46023 13.1136 1.46023C14.6989 1.46023 16.1648 1.68182 17.5114 2.125C18.858 2.55966 20.0426 3.19886 21.0653 4.04261C22.0881 4.87784 22.919 5.90483 23.5582 7.12358C24.1974 8.34233 24.5938 9.7358 24.7472 11.304Z" fill="#FF7734"/><path d="M37.5344 28.3707C35.4719 28.3707 33.6992 27.9489 32.2163 27.1051C30.7418 26.2528 29.604 25.0682 28.8029 23.5511C28.0103 22.0256 27.614 20.2571 27.614 18.2457C27.614 16.2259 28.0103 14.4574 28.8029 12.9403C29.604 11.4148 30.7418 10.2301 32.2163 9.38636C33.6992 8.53409 35.4719 8.10795 37.5344 8.10795C39.5969 8.10795 41.3654 8.53409 42.8398 9.38636C44.3228 10.2301 45.4606 11.4148 46.2532 12.9403C47.0543 14.4574 47.4549 16.2259 47.4549 18.2457C47.4549 20.2571 47.0543 22.0256 46.2532 23.5511C45.4606 25.0682 44.3228 26.2528 42.8398 27.1051C41.3654 27.9489 39.5969 28.3707 37.5344 28.3707ZM37.5728 23.6534C38.3228 23.6534 38.9577 23.4233 39.4776 22.9631C39.9975 22.5028 40.3938 21.8636 40.6665 21.0455C40.9478 20.2273 41.0884 19.2812 41.0884 18.2074C41.0884 17.1165 40.9478 16.1619 40.6665 15.3438C40.3938 14.5256 39.9975 13.8864 39.4776 13.4261C38.9577 12.9659 38.3228 12.7358 37.5728 12.7358C36.7972 12.7358 36.141 12.9659 35.604 13.4261C35.0756 13.8864 34.6708 14.5256 34.3896 15.3438C34.1168 16.1619 33.9805 17.1165 33.9805 18.2074C33.9805 19.2812 34.1168 20.2273 34.3896 21.0455C34.6708 21.8636 35.0756 22.5028 35.604 22.9631C36.141 23.4233 36.7972 23.6534 37.5728 23.6534ZM50.6573 28V8.36364H56.9087V28H50.6573ZM53.7894 6.07528C52.9116 6.07528 52.1573 5.78551 51.5266 5.20597C50.896 4.6179 50.5806 3.91051 50.5806 3.08381C50.5806 2.26562 50.896 1.56676 51.5266 0.987216C52.1573 0.399147 52.9116 0.105112 53.7894 0.105112C54.6758 0.105112 55.43 0.399147 56.0522 0.987216C56.6829 1.56676 56.9982 2.26562 56.9982 3.08381C56.9982 3.91051 56.6829 4.6179 56.0522 5.20597C55.43 5.78551 54.6758 6.07528 53.7894 6.07528ZM67.1392 16.8011V28H60.8878V8.36364H66.8324V11.9688H67.0497C67.4844 10.767 68.2259 9.82528 69.2741 9.14347C70.3224 8.45312 71.571 8.10795 73.0199 8.10795C74.4006 8.10795 75.598 8.41903 76.6122 9.04119C77.6349 9.65483 78.4276 10.5156 78.9901 11.6236C79.5611 12.723 79.8423 14.0099 79.8338 15.4844V28H73.5824V16.7116C73.5909 15.6207 73.3139 14.7685 72.7514 14.1548C72.1974 13.5412 71.4261 13.2344 70.4375 13.2344C69.7812 13.2344 69.2017 13.3793 68.6989 13.669C68.2045 13.9503 67.821 14.3551 67.5483 14.8835C67.2841 15.4119 67.1477 16.0511 67.1392 16.8011ZM83.7042 28V1.81818H101.576V6.95739H90.0323V12.3267H100.439V17.4787H90.0323V28H83.7042ZM104.763 28V8.36364H111.014V28H104.763ZM107.895 6.07528C107.017 6.07528 106.263 5.78551 105.632 5.20597C105.001 4.6179 104.686 3.91051 104.686 3.08381C104.686 2.26562 105.001 1.56676 105.632 0.987216C106.263 0.399147 107.017 0.105112 107.895 0.105112C108.781 0.105112 109.536 0.399147 110.158 0.987216C110.788 1.56676 111.104 2.26562 111.104 3.08381C111.104 3.91051 110.788 4.6179 110.158 5.20597C109.536 5.78551 108.781 6.07528 107.895 6.07528ZM114.993 28V1.81818H121.245V11.7259H121.373C121.628 11.1293 121.99 10.554 122.459 10C122.936 9.44602 123.542 8.99432 124.275 8.64489C125.016 8.28693 125.902 8.10795 126.934 8.10795C128.297 8.10795 129.571 8.46591 130.756 9.18182C131.949 9.89773 132.912 11.0014 133.645 12.4929C134.378 13.9844 134.745 15.8849 134.745 18.1946C134.745 20.419 134.391 22.2812 133.684 23.7812C132.985 25.2812 132.039 26.4062 130.846 27.1562C129.661 27.9062 128.344 28.2812 126.895 28.2812C125.907 28.2812 125.05 28.1193 124.326 27.7955C123.601 27.4716 122.992 27.0455 122.498 26.517C122.012 25.9886 121.637 25.4219 121.373 24.8168H121.181V28H114.993ZM121.117 18.1818C121.117 19.2386 121.257 20.1591 121.539 20.9432C121.828 21.7273 122.242 22.3366 122.779 22.7713C123.324 23.1974 123.976 23.4105 124.735 23.4105C125.502 23.4105 126.154 23.1974 126.691 22.7713C127.228 22.3366 127.632 21.7273 127.905 20.9432C128.186 20.1591 128.327 19.2386 128.327 18.1818C128.327 17.125 128.186 16.2088 127.905 15.4332C127.632 14.6577 127.228 14.0568 126.691 13.6307C126.162 13.2045 125.51 12.9915 124.735 12.9915C123.968 12.9915 123.316 13.2003 122.779 13.6179C122.242 14.0355 121.828 14.6321 121.539 15.4077C121.257 16.1832 121.117 17.108 121.117 18.1818ZM147.2 28.3707C145.146 28.3707 143.373 27.9659 141.881 27.1562C140.398 26.3381 139.256 25.1747 138.455 23.6662C137.663 22.1491 137.266 20.3466 137.266 18.2585C137.266 16.2301 137.667 14.4574 138.468 12.9403C139.269 11.4148 140.398 10.2301 141.856 9.38636C143.313 8.53409 145.031 8.10795 147.008 8.10795C148.406 8.10795 149.684 8.32528 150.843 8.75994C152.002 9.1946 153.004 9.83807 153.847 10.6903C154.691 11.5426 155.347 12.5952 155.816 13.848C156.285 15.0923 156.519 16.5199 156.519 18.1307V19.6903H139.452V16.0597H150.702C150.694 15.3949 150.536 14.8026 150.229 14.2827C149.923 13.7628 149.501 13.358 148.964 13.0682C148.435 12.7699 147.826 12.6207 147.136 12.6207C146.437 12.6207 145.81 12.7784 145.256 13.0938C144.702 13.4006 144.263 13.8224 143.94 14.3594C143.616 14.8878 143.445 15.4886 143.428 16.1619V19.8565C143.428 20.6577 143.586 21.3608 143.901 21.9659C144.217 22.5625 144.664 23.027 145.244 23.3594C145.823 23.6918 146.513 23.858 147.315 23.858C147.869 23.858 148.371 23.7812 148.823 23.6278C149.275 23.4744 149.663 23.2486 149.987 22.9503C150.31 22.652 150.553 22.2855 150.715 21.8509L156.455 22.017C156.217 23.304 155.692 24.4247 154.883 25.3793C154.082 26.3253 153.029 27.0625 151.725 27.5909C150.421 28.1108 148.913 28.3707 147.2 28.3707ZM159.712 28V8.36364H165.784V11.9432H165.989C166.347 10.6477 166.931 9.68466 167.74 9.05398C168.55 8.41477 169.492 8.09517 170.566 8.09517C170.855 8.09517 171.154 8.11648 171.461 8.15909C171.767 8.19318 172.053 8.24858 172.317 8.32528V13.7585C172.019 13.6562 171.627 13.5753 171.141 13.5156C170.664 13.456 170.238 13.4261 169.863 13.4261C169.121 13.4261 168.452 13.5923 167.855 13.9247C167.267 14.2486 166.803 14.7045 166.462 15.2926C166.13 15.8722 165.963 16.554 165.963 17.3381V28H159.712Z" fill="#2F3F57"/>',
            chat: '<path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M17.3022 9.38333V13.6006C17.3022 14.7052 16.4067 15.6006 15.3022 15.6006H14.4684V18.0011C14.4684 18.3799 14.2544 18.7261 13.9156 18.8955C13.5768 19.0649 13.1714 19.0284 12.8684 18.8011L8.60111 15.6006H2C0.89543 15.6006 0 14.7052 0 13.6006V4.26569C0 3.16112 0.89543 2.26569 2 2.26569H9.34977C9.09782 2.88529 8.95233 3.55952 8.936 4.26569H2V13.6006L8.93445 13.6006C9.15082 13.6006 9.36135 13.6708 9.53445 13.8006L12.4684 16.0011V14.6006C12.4684 14.0483 12.9161 13.6006 13.4684 13.6006L15.3022 13.6006V10.0239C16.0188 9.93556 16.6941 9.71346 17.3022 9.38333Z" fill="#2E4057"/>\n  <circle cx="14.6019" cy="4.39926" r="3.40048" fill="#00AF92"/>',
            user: '<path fill-rule="evenodd" clip-rule="evenodd" d="M8.9997 3C7.46547 3 6.23047 4.23603 6.23047 5.75C6.23047 7.26397 7.46547 8.5 8.9997 8.5C10.5339 8.5 11.7689 7.26397 11.7689 5.75C11.7689 4.23603 10.5339 3 8.9997 3ZM4.23047 5.75C4.23047 3.12183 6.37055 1 8.9997 1C11.6288 1 13.7689 3.12183 13.7689 5.75C13.7689 8.37817 11.6288 10.5 8.9997 10.5C6.37055 10.5 4.23047 8.37817 4.23047 5.75Z" />\n\t<path fill-rule="evenodd" clip-rule="evenodd" d="M3.06993 16H14.9301C14.4827 12.8383 11.9468 10.5 9 10.5C6.05323 10.5 3.51729 12.8383 3.06993 16ZM1 17C1 12.3717 4.51786 8.5 9 8.5C13.4821 8.5 17 12.3717 17 17C17 17.5523 16.5523 18 16 18H2C1.44772 18 1 17.5523 1 17Z" />',
            drop: '<path d="M0 0.5L5 5.5L10 0.5H0Z" />',
            exit: '<path d="M8.875 1H3C1.89543 1 1 1.89543 1 3V13C1 14.1046 1.89543 15 3 15H8.875M7.125 8H15M15 8L12.375 5.375M15 8L12.375 10.625" stroke-linecap="round" stroke-linejoin="round"/>',
            logo_footer: '<path d="M24.7472 11.304H18.3551C18.2699 10.6477 18.0952 10.0554 17.831 9.52699C17.5668 8.99858 17.2173 8.54687 16.7827 8.17188C16.348 7.79688 15.8324 7.51136 15.2358 7.31534C14.6477 7.11079 13.9957 7.00852 13.2798 7.00852C12.0099 7.00852 10.9148 7.3196 9.99432 7.94176C9.08239 8.56392 8.37926 9.46307 7.88494 10.6392C7.39915 11.8153 7.15625 13.2386 7.15625 14.9091C7.15625 16.6477 7.40341 18.1051 7.89773 19.2812C8.40057 20.4489 9.10369 21.331 10.0071 21.9276C10.919 22.5156 11.9972 22.8097 13.2415 22.8097C13.9403 22.8097 14.5753 22.7202 15.1463 22.5412C15.7259 22.3622 16.233 22.1023 16.6676 21.7614C17.1108 21.4119 17.473 20.9901 17.7543 20.4957C18.044 19.9929 18.2443 19.4261 18.3551 18.7955L24.7472 18.8338C24.6364 19.9929 24.2997 21.1349 23.7372 22.2599C23.1832 23.3849 22.4205 24.4119 21.4489 25.3409C20.4773 26.2614 19.2926 26.9943 17.8949 27.5398C16.5057 28.0852 14.9119 28.358 13.1136 28.358C10.7443 28.358 8.62216 27.8381 6.74716 26.7983C4.88068 25.75 3.40625 24.2244 2.32386 22.2216C1.24148 20.2187 0.700284 17.7812 0.700284 14.9091C0.700284 12.0284 1.25 9.58665 2.34943 7.58381C3.44886 5.58097 4.93608 4.05966 6.81108 3.01989C8.68608 1.98011 10.7869 1.46023 13.1136 1.46023C14.6989 1.46023 16.1648 1.68182 17.5114 2.125C18.858 2.55966 20.0426 3.19886 21.0653 4.04261C22.0881 4.87784 22.919 5.90483 23.5582 7.12358C24.1974 8.34233 24.5938 9.7358 24.7472 11.304Z" fill="#FF7734"/><path d="M37.5344 28.3707C35.4719 28.3707 33.6992 27.9489 32.2163 27.1051C30.7418 26.2528 29.604 25.0682 28.8029 23.5511C28.0103 22.0256 27.614 20.2571 27.614 18.2457C27.614 16.2259 28.0103 14.4574 28.8029 12.9403C29.604 11.4148 30.7418 10.2301 32.2163 9.38636C33.6992 8.53409 35.4719 8.10795 37.5344 8.10795C39.5969 8.10795 41.3654 8.53409 42.8398 9.38636C44.3228 10.2301 45.4606 11.4148 46.2532 12.9403C47.0543 14.4574 47.4549 16.2259 47.4549 18.2457C47.4549 20.2571 47.0543 22.0256 46.2532 23.5511C45.4606 25.0682 44.3228 26.2528 42.8398 27.1051C41.3654 27.9489 39.5969 28.3707 37.5344 28.3707ZM37.5728 23.6534C38.3228 23.6534 38.9577 23.4233 39.4776 22.9631C39.9975 22.5028 40.3938 21.8636 40.6665 21.0455C40.9478 20.2273 41.0884 19.2812 41.0884 18.2074C41.0884 17.1165 40.9478 16.1619 40.6665 15.3438C40.3938 14.5256 39.9975 13.8864 39.4776 13.4261C38.9577 12.9659 38.3228 12.7358 37.5728 12.7358C36.7972 12.7358 36.141 12.9659 35.604 13.4261C35.0756 13.8864 34.6708 14.5256 34.3896 15.3438C34.1168 16.1619 33.9805 17.1165 33.9805 18.2074C33.9805 19.2812 34.1168 20.2273 34.3896 21.0455C34.6708 21.8636 35.0756 22.5028 35.604 22.9631C36.141 23.4233 36.7972 23.6534 37.5728 23.6534ZM50.6573 28V8.36364H56.9087V28H50.6573ZM53.7894 6.07528C52.9116 6.07528 52.1573 5.78551 51.5266 5.20597C50.896 4.6179 50.5806 3.91051 50.5806 3.08381C50.5806 2.26562 50.896 1.56676 51.5266 0.987216C52.1573 0.399147 52.9116 0.105112 53.7894 0.105112C54.6758 0.105112 55.43 0.399147 56.0522 0.987216C56.6829 1.56676 56.9982 2.26562 56.9982 3.08381C56.9982 3.91051 56.6829 4.6179 56.0522 5.20597C55.43 5.78551 54.6758 6.07528 53.7894 6.07528ZM67.1392 16.8011V28H60.8878V8.36364H66.8324V11.9688H67.0497C67.4844 10.767 68.2259 9.82528 69.2741 9.14347C70.3224 8.45312 71.571 8.10795 73.0199 8.10795C74.4006 8.10795 75.598 8.41903 76.6122 9.04119C77.6349 9.65483 78.4276 10.5156 78.9901 11.6236C79.5611 12.723 79.8423 14.0099 79.8338 15.4844V28H73.5824V16.7116C73.5909 15.6207 73.3139 14.7685 72.7514 14.1548C72.1974 13.5412 71.4261 13.2344 70.4375 13.2344C69.7812 13.2344 69.2017 13.3793 68.6989 13.669C68.2045 13.9503 67.821 14.3551 67.5483 14.8835C67.2841 15.4119 67.1477 16.0511 67.1392 16.8011ZM83.7042 28V1.81818H101.576V6.95739H90.0323V12.3267H100.439V17.4787H90.0323V28H83.7042ZM104.763 28V8.36364H111.014V28H104.763ZM107.895 6.07528C107.017 6.07528 106.263 5.78551 105.632 5.20597C105.001 4.6179 104.686 3.91051 104.686 3.08381C104.686 2.26562 105.001 1.56676 105.632 0.987216C106.263 0.399147 107.017 0.105112 107.895 0.105112C108.781 0.105112 109.536 0.399147 110.158 0.987216C110.788 1.56676 111.104 2.26562 111.104 3.08381C111.104 3.91051 110.788 4.6179 110.158 5.20597C109.536 5.78551 108.781 6.07528 107.895 6.07528ZM114.993 28V1.81818H121.245V11.7259H121.373C121.628 11.1293 121.99 10.554 122.459 10C122.936 9.44602 123.542 8.99432 124.275 8.64489C125.016 8.28693 125.902 8.10795 126.934 8.10795C128.297 8.10795 129.571 8.46591 130.756 9.18182C131.949 9.89773 132.912 11.0014 133.645 12.4929C134.378 13.9844 134.745 15.8849 134.745 18.1946C134.745 20.419 134.391 22.2812 133.684 23.7812C132.985 25.2812 132.039 26.4062 130.846 27.1562C129.661 27.9062 128.344 28.2812 126.895 28.2812C125.907 28.2812 125.05 28.1193 124.326 27.7955C123.601 27.4716 122.992 27.0455 122.498 26.517C122.012 25.9886 121.637 25.4219 121.373 24.8168H121.181V28H114.993ZM121.117 18.1818C121.117 19.2386 121.257 20.1591 121.539 20.9432C121.828 21.7273 122.242 22.3366 122.779 22.7713C123.324 23.1974 123.976 23.4105 124.735 23.4105C125.502 23.4105 126.154 23.1974 126.691 22.7713C127.228 22.3366 127.632 21.7273 127.905 20.9432C128.186 20.1591 128.327 19.2386 128.327 18.1818C128.327 17.125 128.186 16.2088 127.905 15.4332C127.632 14.6577 127.228 14.0568 126.691 13.6307C126.162 13.2045 125.51 12.9915 124.735 12.9915C123.968 12.9915 123.316 13.2003 122.779 13.6179C122.242 14.0355 121.828 14.6321 121.539 15.4077C121.257 16.1832 121.117 17.108 121.117 18.1818ZM147.2 28.3707C145.146 28.3707 143.373 27.9659 141.881 27.1562C140.398 26.3381 139.256 25.1747 138.455 23.6662C137.663 22.1491 137.266 20.3466 137.266 18.2585C137.266 16.2301 137.667 14.4574 138.468 12.9403C139.269 11.4148 140.398 10.2301 141.856 9.38636C143.313 8.53409 145.031 8.10795 147.008 8.10795C148.406 8.10795 149.684 8.32528 150.843 8.75994C152.002 9.1946 153.004 9.83807 153.847 10.6903C154.691 11.5426 155.347 12.5952 155.816 13.848C156.285 15.0923 156.519 16.5199 156.519 18.1307V19.6903H139.452V16.0597H150.702C150.694 15.3949 150.536 14.8026 150.229 14.2827C149.923 13.7628 149.501 13.358 148.964 13.0682C148.435 12.7699 147.826 12.6207 147.136 12.6207C146.437 12.6207 145.81 12.7784 145.256 13.0938C144.702 13.4006 144.263 13.8224 143.94 14.3594C143.616 14.8878 143.445 15.4886 143.428 16.1619V19.8565C143.428 20.6577 143.586 21.3608 143.901 21.9659C144.217 22.5625 144.664 23.027 145.244 23.3594C145.823 23.6918 146.513 23.858 147.315 23.858C147.869 23.858 148.371 23.7812 148.823 23.6278C149.275 23.4744 149.663 23.2486 149.987 22.9503C150.31 22.652 150.553 22.2855 150.715 21.8509L156.455 22.017C156.217 23.304 155.692 24.4247 154.883 25.3793C154.082 26.3253 153.029 27.0625 151.725 27.5909C150.421 28.1108 148.913 28.3707 147.2 28.3707ZM159.712 28V8.36364H165.784V11.9432H165.989C166.347 10.6477 166.931 9.68466 167.74 9.05398C168.55 8.41477 169.492 8.09517 170.566 8.09517C170.855 8.09517 171.154 8.11648 171.461 8.15909C171.767 8.19318 172.053 8.24858 172.317 8.32528V13.7585C172.019 13.6562 171.627 13.5753 171.141 13.5156C170.664 13.456 170.238 13.4261 169.863 13.4261C169.121 13.4261 168.452 13.5923 167.855 13.9247C167.267 14.2486 166.803 14.7045 166.462 15.2926C166.13 15.8722 165.963 16.554 165.963 17.3381V28H159.712Z" fill="white"/>',
            telegram:
              '<circle cx="14" cy="14" r="14" fill="white"/>\n  <path d="M11.4935 15.9088L11.2619 19.2592C11.5932 19.2592 11.7367 19.1128 11.9088 18.937L13.4623 17.41L16.6812 19.8346C17.2715 20.173 17.6875 19.9948 17.8467 19.276L19.9596 9.09284L19.9602 9.09224C20.1474 8.19464 19.6446 7.84364 19.0694 8.06384L6.64995 12.9544C5.80235 13.2928 5.81518 13.7788 6.50587 13.999L9.68103 15.0148L17.0563 10.2682C17.4034 10.0318 17.719 10.1626 17.4594 10.399L11.4935 15.9088Z" fill="#0088CC"/>',
            vk: '<circle cx="14" cy="14" r="14" fill="white"/>\n\t<path d="M20.8663 18.0274C20.826 17.9564 20.5766 17.3866 19.3765 16.2153C18.1202 14.9888 18.2889 15.188 19.8022 13.0673C20.7238 11.7757 21.0923 10.987 20.9769 10.6498C20.8672 10.3284 20.1894 10.4132 20.1894 10.4132L17.9355 10.427C17.9355 10.427 17.7686 10.4033 17.6439 10.4812C17.5229 10.5581 17.4451 10.7356 17.4451 10.7356C17.4451 10.7356 17.0879 11.7353 16.6116 12.5852C15.6075 14.3785 15.2053 14.4732 15.0412 14.3618C14.6596 14.1025 14.7552 13.3187 14.7552 12.7626C14.7552 11.0245 15.0056 10.2998 14.2668 10.1125C14.0211 10.0504 13.8411 10.009 13.2139 10.0021C12.4094 9.99318 11.7278 10.005 11.3425 10.2032C11.0856 10.3353 10.8878 10.6301 11.0087 10.6468C11.1578 10.6676 11.4953 10.7425 11.6744 10.9988C11.906 11.3291 11.8975 12.0725 11.8975 12.0725C11.8975 12.0725 12.0307 14.1183 11.5872 14.3726C11.2825 14.5471 10.8653 14.1912 9.96988 12.5635C9.5114 11.7304 9.1645 10.8085 9.1645 10.8085C9.1645 10.8085 9.09794 10.637 8.97887 10.5453C8.83448 10.4339 8.63197 10.3984 8.63197 10.3984L6.48868 10.4122C6.48868 10.4122 6.1671 10.4221 6.04896 10.569C5.94396 10.7001 6.04052 10.9702 6.04052 10.9702C6.04052 10.9702 7.71877 15.0983 9.61829 17.1795C11.3612 19.0873 13.3395 18.9621 13.3395 18.9621H14.2358C14.2358 18.9621 14.5068 18.9305 14.6446 18.7738C14.7721 18.6298 14.7674 18.3597 14.7674 18.3597C14.7674 18.3597 14.7496 17.0948 15.3084 16.9084C15.8587 16.725 16.5657 18.131 17.3148 18.6722C17.8811 19.0814 18.3114 18.9917 18.3114 18.9917L20.315 18.9621C20.315 18.9621 21.3632 18.8941 20.8663 18.0274Z" fill="#4680C2"/>',
            youtube:
              '<circle cx="14" cy="14" r="14" fill="white"/>\n  <path d="M21.646 9.57171L21.666 9.69854C21.4727 9.03271 20.9507 8.51895 20.2874 8.33195L20.2734 8.32871C19.026 8.00001 14.0068 8.00001 14.0068 8.00001C14.0068 8.00001 9.00016 7.99354 7.74017 8.32871C7.06418 8.51895 6.54152 9.03271 6.35153 9.68495L6.34819 9.69854C5.8822 12.0609 5.87886 14.8996 6.36886 17.4289L6.34819 17.3008C6.54152 17.9666 7.06352 18.4804 7.72684 18.6674L7.74084 18.6706C8.98683 19 14.0074 19 14.0074 19C14.0074 19 19.0134 19 20.274 18.6706C20.9507 18.4804 21.4733 17.9666 21.6633 17.3144L21.6667 17.3008C21.8787 16.2021 22 14.9378 22 13.6462C22 13.599 22 13.5511 21.9993 13.5032C22 13.4592 22 13.4068 22 13.3544C22 12.0622 21.8787 10.7979 21.646 9.57171ZM12.4055 15.8624V11.1434L16.5827 13.5065L12.4055 15.8624Z" fill="#FF0000"/>',
            twitter:
              '<circle cx="14" cy="14" r="14" fill="white"/>\n  <path d="M22 9.42062C21.405 9.66154 20.771 9.82123 20.11 9.89877C20.79 9.524 21.309 8.93508 21.553 8.22523C20.919 8.57415 20.219 8.82062 19.473 8.95815C18.871 8.36646 18.013 8 17.077 8C15.261 8 13.799 9.36062 13.799 11.0286C13.799 11.2686 13.821 11.4994 13.875 11.7191C11.148 11.5963 8.735 10.3898 7.114 8.552C6.831 9.00523 6.665 9.524 6.665 10.0825C6.665 11.1311 7.25 12.0606 8.122 12.5988C7.595 12.5895 7.078 12.4483 6.64 12.2258C6.64 12.2351 6.64 12.2471 6.64 12.2591C6.64 13.7305 7.777 14.9526 9.268 15.2342C9.001 15.3015 8.71 15.3338 8.408 15.3338C8.198 15.3338 7.986 15.3228 7.787 15.2822C8.212 16.4812 9.418 17.3628 10.852 17.3914C9.736 18.1972 8.319 18.6828 6.785 18.6828C6.516 18.6828 6.258 18.6717 6 18.6412C7.453 19.5062 9.175 20 11.032 20C17.068 20 20.368 15.3846 20.368 11.384C20.368 11.2502 20.363 11.1209 20.356 10.9926C21.007 10.5662 21.554 10.0335 22 9.42062Z" fill="#00ACEE"/>',
            teleg_ch:
              '<circle cx="14" cy="14" r="14" fill="#32AFED"/>\n  <path d="M11.4935 15.9088L11.2619 19.2592C11.5932 19.2592 11.7367 19.1128 11.9088 18.937L13.4623 17.41L16.6812 19.8346C17.2715 20.173 17.6875 19.9948 17.8467 19.276L19.9596 9.09284L19.9602 9.09224C20.1474 8.19464 19.6446 7.84364 19.0694 8.06384L6.64995 12.9544C5.80235 13.2928 5.81518 13.7788 6.50587 13.999L9.68103 15.0148L17.0563 10.2682C17.4034 10.0318 17.719 10.1626 17.4594 10.399L11.4935 15.9088Z" fill="white"/>',
            ru: '<path d="M10 20C15.5228 20 20 15.5228 20 10C20 4.47715 15.5228 0 10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20Z" fill="white"/>\n  <path d="M19.378 13.4782C19.78 12.3949 20 11.2232 20 10C20 8.7768 19.78 7.60508 19.378 6.52176H0.621992C0.220039 7.60508 0 8.7768 0 10C0 11.2232 0.220039 12.3949 0.621992 13.4782L10 14.3478L19.378 13.4782Z" fill="#0052B4"/>\n  <path d="M9.9991 20C14.2987 20 17.9642 17.2862 19.3771 13.4782H0.621094C2.03402 17.2862 5.69945 20 9.9991 20Z" fill="#D80027"/>',
            en: '<path d="M10 20C15.5228 20 20 15.5228 20 10C20 4.47715 15.5228 0 10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20Z" fill="white"/>\n  <path d="M2.0684 3.91177C1.28289 4.93377 0.690586 6.1117 0.345703 7.39134H5.54797L2.0684 3.91177Z" fill="#0052B4"/>\n  <path d="M19.6573 7.39134C19.3124 6.11173 18.72 4.9338 17.9346 3.9118L14.4551 7.39134H19.6573Z" fill="#0052B4"/>\n  <path d="M0.345703 12.6087C0.690625 13.8883 1.28293 15.0663 2.0684 16.0882L5.54785 12.6087H0.345703Z" fill="#0052B4"/>\n  <path d="M16.0889 2.06722C15.0669 1.28171 13.889 0.689404 12.6094 0.344482V5.54671L16.0889 2.06722Z" fill="#0052B4"/>\n  <path d="M3.91406 17.9328C4.93605 18.7183 6.11398 19.3106 7.39359 19.6555V14.4533L3.91406 17.9328Z" fill="#0052B4"/>\n  <path d="M7.39355 0.344482C6.11395 0.689404 4.93602 1.28171 3.91406 2.06718L7.39355 5.54667V0.344482Z" fill="#0052B4"/>\n  <path d="M12.6094 19.6555C13.889 19.3106 15.0669 18.7183 16.0889 17.9328L12.6094 14.4533V19.6555Z" fill="#0052B4"/>\n  <path d="M14.4551 12.6087L17.9346 16.0883C18.72 15.0663 19.3124 13.8883 19.6573 12.6087H14.4551Z" fill="#0052B4"/>\n  <path d="M19.9154 8.69566H11.3044H11.3044V0.0846484C10.8774 0.0290625 10.4421 0 10 0C9.55785 0 9.12262 0.0290625 8.69566 0.0846484V8.69559V8.69563H0.0846484C0.0290625 9.12262 0 9.55793 0 10C0 10.4421 0.0290625 10.8774 0.0846484 11.3043H8.69559H8.69563V19.9154C9.12262 19.9709 9.55785 20 10 20C10.4421 20 10.8774 19.971 11.3043 19.9154V11.3044V11.3044H19.9154C19.9709 10.8774 20 10.4421 20 10C20 9.55793 19.9709 9.12262 19.9154 8.69566Z" fill="#D80027"/>\n  <path d="M12.6094 12.6087L17.0717 17.0711C17.277 16.8659 17.4727 16.6514 17.6595 16.4291L13.8391 12.6087H12.6094V12.6087Z" fill="#D80027"/>\n  <path d="M7.39011 12.6088H7.39003L2.92773 17.0711C3.13289 17.2763 3.34738 17.4721 3.56973 17.6589L7.39011 13.8384V12.6088Z" fill="#D80027"/>\n  <path d="M7.39 7.39136V7.39128L2.92766 2.92889C2.72242 3.13405 2.52664 3.34854 2.33984 3.57089L6.16027 7.39132H7.39V7.39136Z" fill="#D80027"/>\n  <path d="M12.6094 7.39138L17.0718 2.92896C16.8666 2.72373 16.6521 2.52794 16.4298 2.34119L12.6094 6.16162V7.39138Z" fill="#D80027"/>',
            bitcoin:
              '<path fill-rule="evenodd" clip-rule="evenodd" d="M35 52C44.9411 52 53 43.9411 53 34C53 24.0589 44.9411 16 35 16C25.0589 16 17 24.0589 17 34C17 43.9411 25.0589 52 35 52ZM34.2353 25C34.2353 24.4477 33.7876 24 33.2353 24C32.683 24 32.2353 24.4477 32.2353 25V26.1818H31.9412H30C29.4477 26.1818 29 26.6295 29 27.1818C29 27.7341 29.4477 28.1818 30 28.1818H30.9412V33.7273V39.8182H30C29.4477 39.8182 29 40.2659 29 40.8182C29 41.3705 29.4477 41.8182 30 41.8182H31.9412H32.2353V43C32.2353 43.5523 32.683 44 33.2353 44C33.7876 44 34.2353 43.5523 34.2353 43V41.8182H36.1176V43C36.1176 43.5523 36.5654 44 37.1176 44C37.6699 44 38.1176 43.5523 38.1176 43V41.8165C40.2724 41.7542 42 39.988 42 37.8182V37.0914C42 35.5974 41.1717 34.2555 39.8966 33.5693C40.8001 32.8245 41.3529 31.7016 41.3529 30.482V30.1818C41.3529 28.2342 39.961 26.6117 38.1176 26.2548V25C38.1176 24.4477 37.6699 24 37.1176 24C36.5654 24 36.1176 24.4477 36.1176 25V26.1818H34.2353V25ZM32.9412 32.7273V28.1818H33.2353H37.1176H37.3529C38.4575 28.1818 39.3529 29.0772 39.3529 30.1818V30.482C39.3529 31.3403 38.8053 32.1029 37.992 32.3771L36.9536 32.7273H32.9412ZM32.9412 34.7273H36.9798L38.541 35.166C39.4038 35.4084 40 36.1952 40 37.0914V37.8182C40 38.9228 39.1046 39.8182 38 39.8182H37.1176H33.2353H32.9412V34.7273Z" fill="#FF7733"/>\n  <path d="M12.6875 9H11M12.6875 9V14.76M12.6875 9H13.8125H17.1875V9C18.7408 9 20 10.2592 20 11.8125V11.88C20 13.4706 18.7106 14.76 17.12 14.76H12.6875M12.6875 21V14.76M12.6875 14.76H11M11 17.64H14.4773" stroke="#FF7733" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n  <circle cx="15" cy="15" r="13" stroke="#FF7733" stroke-width="2"/>\n  <path d="M32.2006 6.11687L36 2.99999M32.2006 6.11687L35.5 9.49998M32.2006 6.11687C38.0039 5.48487 43 8.5 44 14" stroke="#FF7733" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n  <path d="M17.1953 45.3368L13 48.5M17.1953 45.3368L14.2816 41.6164M17.1953 45.3368C8.5 46 4 39 4 33" stroke="#FF7733" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
            online:
              '<path d="M1 7.00001C1 3.6863 3.68629 1 7 1H47C50.3137 1 53 3.68629 53 7V35.5896C53 38.7805 50.4132 41.3673 47.2222 41.3673C46.6904 41.3673 46.2593 41.7985 46.2593 42.3303V48.3934C46.2593 49.31 45.1289 49.7437 44.5159 49.0623L37.8905 41.6985C37.7009 41.4877 37.4307 41.3673 37.1471 41.3673H6.99999C3.68628 41.3673 1 38.6811 1 35.3673V7.00001Z" fill="#FF7733" stroke="#FF7733" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n  <path fill-rule="evenodd" clip-rule="evenodd" d="M27.2857 11.0613C22.8132 11.0613 19.2069 14.1825 18.647 18.1312C19.9928 18.427 21 19.6265 21 21.0612V26.4898C21 28.1466 19.6569 29.4898 18 29.4898H16C14.3431 29.4898 13 28.1467 13 26.4898V21.0612C13 19.4044 14.3431 18.0612 16 18.0612H16.6382C17.2399 12.9539 21.8269 9.06128 27.2857 9.06128C32.7445 9.06128 37.3315 12.9539 37.9331 18.0612H38C39.6568 18.0612 41 19.4044 41 21.0612V26.4898C41 28.1466 39.6568 29.4898 38 29.4898H36.9416C35.9647 31.0709 34.5974 32.4009 32.9713 33.364C32.7528 35.0471 31.3139 36.347 29.5714 36.347H28.4286C26.535 36.347 25 34.812 25 32.9184C25 31.0249 26.535 29.4898 28.4286 29.4898H29.5714C30.8586 29.4898 31.9801 30.1992 32.5664 31.2482C33.3913 30.6738 34.1162 29.9822 34.7143 29.2011C33.7008 28.7197 33 27.6866 33 26.4898V21.0612C33 19.433 34.2971 18.1078 35.9144 18.0624C35.3226 14.1464 31.7322 11.0613 27.2857 11.0613ZM18 20.0612H16C15.4477 20.0612 15 20.5089 15 21.0612V26.4898C15 27.0421 15.4477 27.4898 16 27.4898H18C18.5523 27.4898 19 27.0421 19 26.4898V21.0612C19 20.5089 18.5523 20.0612 18 20.0612ZM38 20.0612H36C35.4477 20.0612 35 20.5089 35 21.0612V26.4898C35 27.0421 35.4477 27.4898 36 27.4898H38C38.5523 27.4898 39 27.0421 39 26.4898V21.0612C39 20.5089 38.5523 20.0612 38 20.0612ZM28.4286 31.4898H29.5714C30.3604 31.4898 31 32.1294 31 32.9184C31 33.7074 30.3604 34.347 29.5714 34.347H28.4286C27.6396 34.347 27 33.7074 27 32.9184C27 32.1294 27.6396 31.4898 28.4286 31.4898Z" fill="white"/>\n  <circle cx="8.5" cy="8.5" r="2.5" fill="white"/>\n  <circle cx="8" cy="55" r="2" fill="#FF7733"/>\n  <circle cx="16" cy="55" r="2" fill="#FF7733"/>\n  <circle cx="24" cy="55" r="2" fill="#FF7733"/>',
            directions:
              '<rect x="1" y="7" width="42" height="31" rx="4" stroke="#FF7733" stroke-width="2"/>\n  <path d="M1 19L2.83479 22.058C3.55768 23.2628 4.85971 24 6.26476 24H22H32.5L43 19" stroke="#FF7733" stroke-width="2"/>\n  <path d="M10 25V28C10 28.5523 10.4477 29 11 29H15C15.5523 29 16 28.5523 16 28V25" stroke="#FF7733" stroke-width="2"/>\n  <path d="M31 7V6C31 3.23858 28.7614 1 26 1H18C15.2386 1 13 3.23858 13 6V7" stroke="#FF7733" stroke-width="2"/>\n  <circle cx="37" cy="33" r="17" fill="#FF7733"/>\n  <path fill-rule="evenodd" clip-rule="evenodd" d="M29.1234 24.5956C29.1234 24.0434 29.5711 23.5956 30.1234 23.5956H33.9429C34.4952 23.5956 34.9429 24.0434 34.9429 24.5956V28.4151C34.9429 28.9674 34.4952 29.4151 33.9429 29.4151C33.3906 29.4151 32.9429 28.9674 32.9429 28.4151V26.8042C30.9258 28.1276 29.5957 30.4086 29.5957 32.9985C29.5957 36.6908 32.2997 39.7533 35.8354 40.3107C36.3809 40.3967 36.7535 40.9087 36.6675 41.4542C36.5815 41.9998 36.0695 42.3723 35.524 42.2863C31.0312 41.578 27.5957 37.6904 27.5957 32.9985C27.5957 29.992 29.0068 27.3163 31.2007 25.5956H30.1234C29.5711 25.5956 29.1234 25.1479 29.1234 24.5956ZM37.3299 24.5428C37.4159 23.9973 37.9279 23.6248 38.4734 23.7108C42.9661 24.4192 46.4015 28.3067 46.4015 32.9985C46.4015 36.0051 44.9904 38.6807 42.7966 40.4014H43.8737C44.4259 40.4014 44.8737 40.8491 44.8737 41.4014C44.8737 41.9537 44.4259 42.4014 43.8737 42.4014H40.0542C39.5019 42.4014 39.0542 41.9537 39.0542 41.4014V37.5819C39.0542 37.0296 39.5019 36.5819 40.0542 36.5819C40.6064 36.5819 41.0542 37.0296 41.0542 37.5819V39.1929C43.0714 37.8695 44.4015 35.5885 44.4015 32.9985C44.4015 29.3064 41.6975 26.2438 38.162 25.6864C37.6164 25.6004 37.2439 25.0884 37.3299 24.5428Z" fill="white"/>\n  <path d="M13 24L13 8" stroke="#FF7733" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n  <line x1="31" y1="19" x2="31" y2="8" stroke="#FF7733" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
            arr_form:
              '<path d="M3 5L6 8L9 5" stroke="#9F9F9F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
            change_field:
              '<path d="M13.5 13V28M13.5 28L17 24.25M13.5 28L10 24.25" stroke="#FF7733" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n  <path d="M24.5 25V10M24.5 10L28 13.75M24.5 10L21 13.75" stroke="#FF7733" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
            purse:
              '<path opacity="0.5"\n  d="M6 11.8462V28C6 28.5523 6.44772 29 7 29H28.3333C28.8856 29 29.3333 28.5523 29.3333 28V23M6 11.8462H13.3333H25M6 11.8462V9C6 8.44772 6.44772 8 7 8H25V11.8462M25 11.8462H28.3333C28.8856 11.8462 29.3333 12.2939 29.3333 12.8462V18M29.3333 18H30C30.5523 18 31 18.4477 31 19V22C31 22.5523 30.5523 23 30 23H29.3333M29.3333 18H24.3333C23.781 18 23.3333 18.4477 23.3333 19V22C23.3333 22.5523 23.781 23 24.3333 23H29.3333"\n  stroke="#9F9F9F" stroke-width="2" />',
            email:
              '<path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"\n  d="M8.08 9C6.93125 9 6 9.89543 6 11V26C6 27.1046 6.93125 28 8.08 28H29.92C31.0688 28 32 27.1046 32 26V11C32 9.89543 31.0688 9 29.92 9H8.08ZM8.08 12.2672V26H29.92V12.2672L19.6142 20.2891C19.253 20.5703 18.747 20.5703 18.3858 20.2891L8.08 12.2672ZM28.292 11H9.70803L19 18.2328L28.292 11Z"\n  fill="#9F9F9F" />',
            close:
              '<path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M0.292859 18.2882C-0.0976196 18.6788 -0.0976196 19.312 0.292859 19.7026C0.683337 20.0931 1.31643 20.0931 1.70691 19.7026L9.99608 11.4114L18.292 19.7022C18.6827 20.0926 19.316 20.0926 19.7067 19.7022C20.0973 19.3118 20.0973 18.6788 19.7067 18.2884L11.4101 9.99707L19.6979 1.70731C20.0884 1.31674 20.0884 0.683498 19.6979 0.292928C19.3075 -0.0976422 18.6744 -0.0976431 18.2839 0.292928L9.99546 8.5833L1.70776 0.300813C1.31712 -0.0895896 0.683754 -0.0895886 0.293106 0.300813C-0.0975407 0.691214 -0.0975417 1.32418 0.293106 1.71458L8.58142 9.99768L0.292859 18.2882Z" fill="#2E4057"/>',
            warning:
              ' <g clip-path="url(#clip0)">\n            <path fill-rule="evenodd" clip-rule="evenodd"\n              d="M22.4972 8.05786C20.9733 5.31405 17.0273 5.31405 15.5034 8.05786L5.50888 26.0532C4.02814 28.7193 5.95603 31.9954 9.00575 31.9954H28.9948C32.0445 31.9954 33.9724 28.7193 32.4917 26.0532L22.4972 8.05786ZM17.2518 9.02893C18.0138 7.65702 19.9868 7.65702 20.7487 9.02893L30.7432 27.0243C31.4836 28.3573 30.5197 29.9954 28.9948 29.9954H9.00575C7.48089 29.9954 6.51694 28.3573 7.25732 27.0243L17.2518 9.02893ZM19.0113 22.9347C18.4599 22.9347 18.0053 22.5023 17.9777 21.9515L17.6236 14.8784C17.5836 14.0805 18.2198 13.4116 19.0187 13.4116C19.8188 13.4116 20.4554 14.0823 20.4137 14.8813L20.0449 21.9536C20.0162 22.5035 19.562 22.9347 19.0113 22.9347ZM20.5897 26.2108C20.5897 27.0857 19.9341 27.7979 19.0203 27.7979C18.0865 27.7979 17.4111 27.0857 17.4111 26.2108C17.4111 25.3358 18.0865 24.6439 19.0203 24.6439C19.9341 24.6439 20.5897 25.3358 20.5897 26.2108Z"\n              fill="#E25656" />\n            </g>\n            <defs>\n              <clipPath id="clip0">\n                <rect width="38" height="38" fill="white" />\n              </clipPath>\n            </defs>\n            ',
            warning_2:
              '<path fill-rule="evenodd" clip-rule="evenodd" d="M3.00602 23.9956H22.9951C25.2824 23.9956 26.7283 21.5386 25.6177 19.539L15.6232 1.54364C14.4803 -0.514219 11.5208 -0.514221 10.3779 1.54364L0.383372 19.539C-0.727188 21.5386 0.718732 23.9956 3.00602 23.9956ZM13.0116 15.9349C12.4601 15.9349 12.0055 15.5025 11.978 14.9517L11.6238 7.87864C11.5839 7.08071 12.2201 6.41187 13.019 6.41187C13.8191 6.41187 14.4557 7.08256 14.414 7.88155L14.0452 14.9539C14.0165 15.5038 13.5623 15.9349 13.0116 15.9349ZM14.59 19.211C14.59 20.086 13.9344 20.7982 13.0205 20.7982C12.0868 20.7982 11.4113 20.086 11.4113 19.211C11.4113 18.336 12.0868 17.6442 13.0205 17.6442C13.9344 17.6442 14.59 18.336 14.59 19.211Z" fill="#FF7733"/>',
            checked:
              '<path d="M2 7.75L6.65007 13L14 3" stroke="#FF7733" stroke-width="2" stroke-linecap="round"\n            stroke-linejoin="round" />',
            cancel:
              'xmlns="http://www.w3.org/2000/svg">\n            <path clip-rule="evenodd"\n            d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L5 3.58579L8.29289 0.292893C8.68342 -0.0976311 9.31658 -0.0976311 9.70711 0.292893C10.0976 0.683417 10.0976 1.31658 9.70711 1.70711L6.41421 5L9.70711 8.29289C10.0976 8.68342 10.0976 9.31658 9.70711 9.70711C9.31658 10.0976 8.68342 10.0976 8.29289 9.70711L5 6.41421L1.70711 9.70711C1.31658 10.0976 0.683417 10.0976 0.292893 9.70711C-0.0976311 9.31658 -0.0976311 8.68342 0.292893 8.29289L3.58579 5L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" />',
            arr_dwn_grey:
              '<path d="M13 1L7 7L1 0.999999" stroke="#2E4057" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
            copy: '<path d="M4 13V5C4 3.89543 4.89543 3 6 3H14" stroke="#FF7733" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n  <path d="M8 19V9C8 7.89543 8.89543 7 10 7H18C19.1046 7 20 7.89543 20 9V19C20 20.1046 19.1046 21 18 21H10C8.89543 21 8 20.1046 8 19Z" stroke="#FF7733" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
            qr_icon:
              '\t<path fill-rule="evenodd" clip-rule="evenodd" d="M4 3C3.44772 3 3 3.44772 3 4V10C3 10.5523 3.44772 11 4 11H10C10.5523 11 11 10.5523 11 10V4C11 3.44772 10.5523 3 10 3H4ZM5 9V5H9V9H5ZM4 13C3.44772 13 3 13.4477 3 14V20C3 20.5523 3.44772 21 4 21H10C10.5523 21 11 20.5523 11 20V14C11 13.4477 10.5523 13 10 13H4ZM5 19V15H9V19H5ZM13 4C13 3.44772 13.4477 3 14 3H20C20.5523 3 21 3.44772 21 4V10C21 10.5523 20.5523 11 20 11H14C13.4477 11 13 10.5523 13 10V4ZM15 5V9H19V5H15ZM13.4999 13C13.2238 13 12.9999 13.2239 12.9999 13.5V14.5C12.9999 14.7761 13.2238 15 13.4999 15H14.4999C14.7761 15 14.9999 14.7761 14.9999 14.5V13.5C14.9999 13.2239 14.7761 13 14.4999 13H13.4999ZM16.5 16C16.2239 16 16 16.2239 16 16.5V17.5C16 17.7761 16.2239 18 16.5 18H17.5C17.7762 18 18 17.7761 18 17.5V16.5C18 16.2239 17.7762 16 17.5 16H16.5ZM13 19.5C13 19.2239 13.2239 19 13.5 19H14.5C14.7762 19 15 19.2239 15 19.5V20.5C15 20.7761 14.7762 21 14.5 21H13.5C13.2239 21 13 20.7761 13 20.5V19.5ZM19.5 13C19.2238 13 19 13.2239 19 13.5V14.5C19 14.7761 19.2238 15 19.5 15H20.5C20.7761 15 21 14.7761 21 14.5V13.5C21 13.2239 20.7761 13 20.5 13H19.5ZM19 19.5C19 19.2239 19.2239 19 19.5 19H20.5C20.7762 19 21 19.2239 21 19.5V20.5C21 20.7761 20.7762 21 20.5 21H19.5C19.2239 21 19 20.7761 19 20.5V19.5Z"/>',
            clock:
              '<path fill-rule="evenodd" clip-rule="evenodd" d="M6 5C6 4.44772 6.44772 4 7 4H11H27H31C31.5523 4 32 4.44772 32 5C32 5.55228 31.5523 6 31 6H28V11C28 12.5738 27.259 14.0557 26 15L20.6667 19L26 23C27.259 23.9443 28 25.4262 28 27V32H31C31.5523 32 32 32.4477 32 33C32 33.5523 31.5523 34 31 34H27H11H7C6.44772 34 6 33.5523 6 33C6 32.4477 6.44772 32 7 32H10V27C10 25.4262 10.741 23.9443 12 23L17.3333 19L12 15C10.741 14.0557 10 12.5738 10 11V6H7C6.44772 6 6 5.55228 6 5ZM12 6V11C12 11.9443 12.4446 12.8334 13.2 13.4L19 17.75L24.8 13.4C25.5554 12.8334 26 11.9443 26 11V6H12ZM19 20.25L13.2 24.6C12.4446 25.1666 12 26.0557 12 27V32H26V27C26 26.0557 25.5554 25.1666 24.8 24.6L19 20.25ZM15 8C15.5523 8 16 8.44772 16 9V10.5L19.6 13.2C20.0418 13.5314 20.1314 14.1582 19.8 14.6C19.4686 15.0418 18.8418 15.1314 18.4 14.8L14.4 11.8C14.1482 11.6111 14 11.3148 14 11V9C14 8.44772 14.4477 8 15 8ZM22 29C22 29.5523 22.4477 30 23 30C23.5523 30 24 29.5523 24 29V27C24 26.6852 23.8518 26.3889 23.6 26.2L19.6 23.2C19.1582 22.8686 18.5314 22.9582 18.2 23.4C17.8686 23.8418 17.9582 24.4686 18.4 24.8L22 27.5V29Z" fill="#FF7733"/>',
            card_write:
              '<path fill-rule="evenodd" clip-rule="evenodd" d="M3 2C2.44772 2 2 2.44772 2 3V14C2 14.5523 2.44772 15 3 15H20.0021C20.5544 15 21.0021 14.5523 21.0021 14V9V3C21.0021 2.44772 20.5544 2 20.0021 2H3ZM0 3C0 1.34315 1.34315 0 3 0H20.0021C21.659 0 23.0021 1.34314 23.0021 3V9V14C23.0021 15.6569 21.659 17 20.0021 17H3C1.34315 17 0 15.6569 0 14V3ZM3.99956 7C3.99956 6.44772 4.44728 6 4.99956 6H17.0008C17.5531 6 18.0008 6.44772 18.0008 7C18.0008 7.55228 17.5531 8 17.0008 8H4.99956C4.44728 8 3.99956 7.55228 3.99956 7ZM4.99956 10C4.44728 10 3.99956 10.4477 3.99956 11C3.99956 11.5523 4.44728 12 4.99956 12H7.99986C8.55215 12 8.99986 11.5523 8.99986 11C8.99986 10.4477 8.55215 10 7.99986 10H4.99956Z" fill="#FF7733"/>',
            download:
              '<path d="M2 19.3846V22H22V19.3846M12 17.3846V2M12 17.3846L17.3846 12M12 17.3846L6.61538 12" stroke="#FF7733" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
            download_grey:
              '<path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M18 8V20.5858L13.7071 16.2929L12.2929 17.7071L18.2929 23.7071C18.6834 24.0976 19.3166 24.0976 19.7071 23.7071L25.7071 17.7071L24.2929 16.2929L20 20.5858V8H18ZM8 25V29C8 29.5523 8.44772 30 9 30H29C29.5523 30 30 29.5523 30 29V25H28V28H10V25H8Z" fill="#9F9F9F"/>',
            success:
              '<rect x="3" y="2" width="25" height="29" rx="1" stroke="#00AF92" stroke-width="2"/>\n  <path d="M37 27C37 31.9706 32.9706 36 28 36C23.0294 36 19 31.9706 19 27C19 22.0294 23.0294 18 28 18C32.9706 18 37 22.0294 37 27Z" fill="#E6F7F4" stroke="#00AF92" stroke-width="2"/>\n  <path d="M25 27.5L27.625 30L32 25" stroke="#00AF92" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n  <path d="M3 22L11 15L15 19M12.5 22L19 16L22.5 19.5" stroke="#00AF92" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n  <circle cx="20" cy="9" r="2" stroke="#00AF92" stroke-width="2"/>',
            card_add:
              '\t<path fill-rule="evenodd" clip-rule="evenodd" d="M22 0C22.5523 0 23 0.447715 23 1V3H25C25.5523 3 26 3.44771 26 4C26 4.55228 25.5523 5 25 5H23V7C23 7.55228 22.5523 8 22 8C21.4477 8 21 7.55228 21 7V5H19C18.4477 5 18 4.55228 18 4C18 3.44772 18.4477 3 19 3H21V1C21 0.447715 21.4477 0 22 0ZM3 5C2.44772 5 2 5.44772 2 6V17C2 17.5523 2.44772 18 3 18H20C20.5523 18 21 17.5523 21 17V12H23V17C23 18.6569 21.6569 20 20 20H3C1.34315 20 0 18.6569 0 17V6C0 4.34315 1.34315 3 3 3H14V5H3ZM4 10C4 9.44771 4.44772 9 5 9H17C17.5523 9 18 9.44771 18 10C18 10.5523 17.5523 11 17 11H5C4.44772 11 4 10.5523 4 10ZM5 13C4.44772 13 4 13.4477 4 14C4 14.5523 4.44772 15 5 15H8C8.55228 15 9 14.5523 9 14C9 13.4477 8.55228 13 8 13H5Z"/>',
            more: '<path d="M12.4286 8.57143H6V24H21.4286V17.5714M14.3571 15.6429L24 6M24 6V11.1429M24 6H18.8571" stroke="#FF7733" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
            arrpag:
              '<path d="M35 7H1M1 7L7 1M1 7L7 13" stroke-linecap="round" stroke-linejoin="round"/>',
            calendar:
              '<path fill-rule="evenodd" clip-rule="evenodd" d="M6 2C6.55228 2 7 2.44772 7 3V4H13V3C13 2.44772 13.4477 2 14 2C14.5523 2 15 2.44772 15 3V4H16C17.1046 4 18 4.89543 18 6V9V16C18 17.1046 17.1046 18 16 18H4C2.89543 18 2 17.1046 2 16V9V6C2 4.89543 2.89543 4 4 4H5V3C5 2.44772 5.44772 2 6 2ZM14 6H6H4V8H16V6H14ZM16 10H4V16H16V10Z" fill="#2E4057"/>',
            union:
              '<path fill-rule="evenodd" clip-rule="evenodd" d="M23.8988 4.10051C21.9462 2.14788 18.7804 2.14788 16.8277 4.10051L13.6458 7.28249C13.2552 7.67301 13.2552 8.30618 13.6458 8.6967C14.0363 9.08722 14.6695 9.08722 15.06 8.6967L18.242 5.51472C19.4135 4.34315 21.313 4.34315 22.4846 5.51472C23.6562 6.68629 23.6562 8.58579 22.4846 9.75736L16.8277 15.4142C15.6562 16.5858 13.7567 16.5858 12.5851 15.4142C12.1946 15.0237 11.5614 15.0237 11.1709 15.4142C10.7804 15.8047 10.7804 16.4379 11.1709 16.8284C13.1235 18.781 16.2893 18.781 18.242 16.8284L23.8988 11.1716C25.8514 9.21895 25.8514 6.05313 23.8988 4.10051ZM4.09983 23.8995C6.05245 25.8521 9.21827 25.8521 11.1709 23.8995L13.6458 21.4246C14.0363 21.0341 14.0363 20.4009 13.6458 20.0104C13.2552 19.6199 12.6221 19.6199 12.2316 20.0104L9.75668 22.4853C8.58511 23.6569 6.68561 23.6569 5.51404 22.4853C4.34247 21.3137 4.34247 19.4142 5.51404 18.2426L10.4638 13.2929C11.6354 12.1213 13.5349 12.1213 14.7064 13.2929C15.097 13.6834 15.7301 13.6834 16.1206 13.2929C16.5112 12.9024 16.5112 12.2692 16.1206 11.8787C14.168 9.92606 11.0022 9.92606 9.04957 11.8787L4.09983 16.8284C2.1472 18.781 2.1472 21.9469 4.09983 23.8995Z" fill="white"/>',
            procent:
              '<path fill-rule="evenodd" clip-rule="evenodd" d="M5.45 7.9C7.07924 7.9 8.4 6.57924 8.4 4.95C8.4 3.32076 7.07924 2 5.45 2C3.82076 2 2.5 3.32076 2.5 4.95C2.5 6.57924 3.82076 7.9 5.45 7.9ZM5.45 9.9C8.18381 9.9 10.4 7.68381 10.4 4.95C10.4 2.21619 8.18381 0 5.45 0C2.71619 0 0.5 2.21619 0.5 4.95C0.5 7.68381 2.71619 9.9 5.45 9.9ZM18.0992 20C19.7284 20 21.0492 18.6792 21.0492 17.05C21.0492 15.4208 19.7284 14.1 18.0992 14.1C16.4699 14.1 15.1492 15.4208 15.1492 17.05C15.1492 18.6792 16.4699 20 18.0992 20ZM18.0992 22C20.833 22 23.0492 19.7838 23.0492 17.05C23.0492 14.3162 20.833 12.1 18.0992 12.1C15.3654 12.1 13.1492 14.3162 13.1492 17.05C13.1492 19.7838 15.3654 22 18.0992 22ZM1.14482 19.8944C0.715242 20.3239 0.715242 21.0204 1.14482 21.45C1.5744 21.8796 2.27088 21.8796 2.70045 21.45L22.0448 2.10564C22.4744 1.67607 22.4744 0.979586 22.0448 0.550009C21.6152 0.120432 20.9188 0.120433 20.4892 0.550009L1.14482 19.8944Z" fill="white"/>',
            coins:
              '<path fill-rule="evenodd" clip-rule="evenodd" d="M4.84 3.73C3.091 4.516 2.5 5.396 2.5 6h-2c0-1.881 1.646-3.251 3.519-4.094C5.985 1.021 8.63.5 11.5.5c2.87 0 5.515.521 7.481 1.406C20.854 2.75 22.5 4.12 22.5 6V10c0 .534-.132 1.026-.365 1.477 1.808.847 3.365 2.193 3.365 4.023V19.5c0 1.881-1.646 3.251-3.519 4.094C20.015 24.479 17.37 25 14.5 25c-2.87 0-5.515-.521-7.481-1.406C5.146 22.75 3.5 21.38 3.5 19.5v-4h2v.001c0 .604.593 1.483 2.34 2.27C9.491 18.513 11.846 19 14.5 19c2.654 0 5.008-.486 6.66-1.23 1.748-.786 2.34-1.666 2.34-2.27 0-.604-.592-1.484-2.34-2.27a9.965 9.965 0 0 0-.409-.173 8.904 8.904 0 0 1-1.77 1.037c-1.966.885-4.612 1.406-7.481 1.406-2.086 0-4.053-.275-5.728-.766-.19.28-.272.542-.272.765l-2 .002V15.5c0-.534.132-1.026.365-1.477C2.057 13.176.5 11.83.5 10V6h2v.001c0 .604.593 1.483 2.34 2.27C6.491 9.013 8.845 9.5 11.5 9.5c2.653 0 5.008-.486 6.66-1.23C19.909 7.484 20.5 6.604 20.5 6c0-.604-.592-1.484-2.34-2.27-1.652-.744-4.007-1.23-6.66-1.23-2.654 0-5.008.486-6.66 1.23zm14.141 6.364A9.259 9.259 0 0 0 20.5 9.24V10c0 .604-.592 1.484-2.34 2.27-1.652.744-4.007 1.23-6.66 1.23-2.654 0-5.008-.486-6.66-1.23C3.091 11.484 2.5 10.604 2.5 10v-.759c.466.328.983.612 1.519.853C5.985 10.979 8.63 11.5 11.5 11.5c2.87 0 5.515-.521 7.481-1.406zM23.5 18.74a9.26 9.26 0 0 1-1.519.853C20.015 20.479 17.37 21 14.5 21c-2.87 0-5.515-.521-7.481-1.406A9.252 9.252 0 0 1 5.5 18.74v.759c0 .604.592 1.484 2.34 2.27 1.652.744 4.007 1.23 6.66 1.23 2.654 0 5.008-.486 6.66-1.23 1.748-.786 2.34-1.666 2.34-2.27V18.741z" fill="#fff"/>',
            inform:
              '<path fill-rule="evenodd" clip-rule="evenodd" d="M2 10C2 5.58172 5.58172 2 10 2C14.4183 2 18 5.58172 18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10ZM10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20C15.5228 20 20 15.5228 20 10C20 4.47715 15.5228 0 10 0ZM10 8C9.63058 8 9.3299 7.88027 9.09794 7.6408C8.86598 7.40134 8.75 7.10441 8.75 6.75C8.75 6.39559 8.86598 6.09866 9.09794 5.8592C9.3299 5.61973 9.63058 5.5 10 5.5C10.3694 5.5 10.6701 5.61494 10.9021 5.84483C11.134 6.07471 11.25 6.36207 11.25 6.7069C11.25 7.08046 11.134 7.39176 10.9021 7.6408C10.6701 7.88027 10.3694 8 10 8ZM8.99915 8.99999H10.9991V14.5H8.99915V8.99999Z" fill="#FF7733"/>',
            logo_card:
              '<path fill-rule="evenodd" clip-rule="evenodd" d="M3 2C1.34315 2 0 3.34315 0 5V6H38V5C38 3.34315 36.6569 2 35 2H3ZM38 11H0V25C0 26.6569 1.34315 28 3 28H35C36.6569 28 38 26.6569 38 25V11ZM4 16C4 15.4477 4.44772 15 5 15H13C13.5523 15 14 15.4477 14 16C14 16.5523 13.5523 17 13 17H5C4.44772 17 4 16.5523 4 16ZM5 20C4.44772 20 4 20.4477 4 21C4 21.5523 4.44772 22 5 22H19C19.5523 22 20 21.5523 20 21C20 20.4477 19.5523 20 19 20H5Z"/>',
            delete:
              '<path opacity="1" fill-rule="evenodd" clip-rule="evenodd" d="M0.292859 18.2882C-0.0976196 18.6788 -0.0976196 19.312 0.292859 19.7026C0.683337 20.0931 1.31643 20.0931 1.70691 19.7026L9.99608 11.4114L18.292 19.7022C18.6827 20.0926 19.316 20.0926 19.7067 19.7022C20.0973 19.3118 20.0973 18.6788 19.7067 18.2884L11.4101 9.99707L19.6979 1.70731C20.0884 1.31674 20.0884 0.683498 19.6979 0.292928C19.3075 -0.0976422 18.6744 -0.0976431 18.2839 0.292928L9.99546 8.5833L1.70776 0.300813C1.31712 -0.0895896 0.683754 -0.0895886 0.293106 0.300813C-0.0975407 0.691214 -0.0975417 1.32418 0.293106 1.71458L8.58142 9.99768L0.292859 18.2882Z" fill="#2E4057"/>',
            email:
              '<path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"\n  d="M8.08 9C6.93125 9 6 9.89543 6 11V26C6 27.1046 6.93125 28 8.08 28H29.92C31.0688 28 32 27.1046 32 26V11C32 9.89543 31.0688 9 29.92 9H8.08ZM8.08 12.2672V26H29.92V12.2672L19.6142 20.2891C19.253 20.5703 18.747 20.5703 18.3858 20.2891L8.08 12.2672ZM28.292 11H9.70803L19 18.2328L28.292 11Z"\n  fill="#9F9F9F"/>',
            teleg_footer:
              '<path d="M5.49349 7.9088L5.2619 11.2592C5.59324 11.2592 5.73674 11.1128 5.90883 10.937L7.46228 9.41L10.6812 11.8346C11.2715 12.173 11.6875 11.9948 11.8467 11.276L13.9596 1.09284L13.9602 1.09224C14.1474 0.194642 13.6446 -0.156356 13.0694 0.063843L0.649953 4.95442C-0.197651 5.29282 -0.184817 5.77881 0.505866 5.99901L3.68103 7.01481L11.0563 2.26823C11.4034 2.03183 11.719 2.16263 11.4594 2.39903L5.49349 7.9088Z" fill="white"/>',
            teleg2:
              '<path fill-rule="evenodd" clip-rule="evenodd" d="M32.6489 7.23916C32.9255 7.47502 33.0523 7.84235 32.9801 8.19858L28.523 30.1986C28.4597 30.511 28.2512 30.7746 27.9617 30.9081C27.6722 31.0416 27.3364 31.0291 27.0577 30.8744L19.9707 26.9422L16.7874 30.6513C16.515 30.9688 16.0737 31.0831 15.6813 30.9378C15.289 30.7925 15.0286 30.4184 15.0286 30V22.4262C15.0286 22.1363 15.1544 21.8606 15.3735 21.6707L18.6234 18.8531L13.1684 21.8594C12.884 22.0162 12.5411 22.025 12.249 21.8832L5.56326 18.6373C5.20349 18.4626 4.98239 18.0904 5.0011 17.6909C5.01982 17.2914 5.27475 16.9415 5.64927 16.8012L31.6493 7.06354C31.9896 6.93606 32.3724 7.0033 32.6489 7.23916ZM8.53419 17.8564L12.6566 19.8579L25.9459 12.534C26.394 12.2871 26.9562 12.4182 27.2488 12.8378C27.5415 13.2575 27.4702 13.8303 27.0836 14.1654L17.0286 22.8828V27.2993L18.984 25.0209C19.2932 24.6607 19.813 24.5674 20.228 24.7977L26.8339 28.463L30.6618 9.56904L8.53419 17.8564Z" fill="#9F9F9F" fill-opacity="0.5"/>',
            vk_contacts:
              '<circle cx="28" cy="28" r="28" fill="#2E4057" fill-opacity="0.06"/>\n  <path d="M39.7683 33.3791C39.6984 33.2607 39.2661 32.311 37.1859 30.3589C35.0083 28.3147 35.3008 28.6466 37.9237 25.1121C39.5212 22.9595 40.1599 21.645 39.96 21.083C39.7699 20.5473 38.5949 20.6886 38.5949 20.6886L34.6881 20.7116C34.6881 20.7116 34.3989 20.6722 34.1827 20.802C33.9731 20.9302 33.8382 21.226 33.8382 21.226C33.8382 21.226 33.219 22.8922 32.3935 24.3086C30.653 27.2976 29.9558 27.4553 29.6714 27.2696C29.01 26.8375 29.1757 25.5311 29.1757 24.6044C29.1757 21.7074 29.6096 20.4997 28.329 20.1875C27.9033 20.0839 27.5912 20.0149 26.504 20.0034C25.1097 19.9886 23.9282 20.0084 23.2603 20.3386C22.815 20.5588 22.4721 21.0501 22.6818 21.0781C22.9401 21.1126 23.5252 21.2375 23.8356 21.6647C24.237 22.2152 24.2224 23.4541 24.2224 23.4541C24.2224 23.4541 24.4531 26.8638 23.6844 27.2877C23.1563 27.5786 22.4331 26.9854 20.8811 24.2725C20.0864 22.884 19.4851 21.3476 19.4851 21.3476C19.4851 21.3476 19.3698 21.0616 19.1634 20.9088C18.9131 20.7231 18.5621 20.664 18.5621 20.664L14.8471 20.687C14.8471 20.687 14.2896 20.7034 14.0849 20.9483C13.9029 21.1668 14.0702 21.617 14.0702 21.617C14.0702 21.617 16.9792 28.4971 20.2717 31.9659C23.2928 35.1455 26.7218 34.9368 26.7218 34.9368H28.2754C28.2754 34.9368 28.7451 34.8842 28.984 34.623C29.205 34.383 29.1969 33.9328 29.1969 33.9328C29.1969 33.9328 29.166 31.8246 30.1345 31.514C31.0885 31.2084 32.3138 33.5516 33.6123 34.4537C34.5939 35.1356 35.3398 34.9861 35.3398 34.9861L38.8127 34.9368C38.8127 34.9368 40.6296 34.8234 39.7683 33.3791Z" fill="#2E4057"/>',
            tw_contacts:
              '<circle cx="28" cy="28" r="28" fill="#2E4057" fill-opacity="0.06"/>\n  <path d="M41 20.3677C40.0331 20.7692 39.0029 21.0354 37.9287 21.1646C39.0337 20.54 39.8771 19.5585 40.2736 18.3754C39.2434 18.9569 38.1059 19.3677 36.8936 19.5969C35.9154 18.6108 34.5211 18 33.0001 18C30.0491 18 27.6734 20.2677 27.6734 23.0477C27.6734 23.4477 27.7091 23.8323 27.7969 24.1985C23.3655 23.9938 19.4444 21.9831 16.8102 18.92C16.3504 19.6754 16.0806 20.54 16.0806 21.4708C16.0806 23.2185 17.0312 24.7677 18.4483 25.6646C17.5919 25.6492 16.7517 25.4138 16.04 25.0431C16.04 25.0585 16.04 25.0785 16.04 25.0985C16.04 27.5508 17.8876 29.5877 20.3105 30.0569C19.8766 30.1692 19.4037 30.2231 18.913 30.2231C18.5717 30.2231 18.2272 30.2046 17.9039 30.1369C18.5945 32.1354 20.5543 33.6046 22.8845 33.6523C21.071 34.9954 18.7684 35.8046 16.2756 35.8046C15.8385 35.8046 15.4192 35.7862 15 35.7354C17.3611 37.1769 20.1594 38 23.177 38C32.9855 38 38.348 30.3077 38.348 23.64C38.348 23.4169 38.3399 23.2015 38.3285 22.9877C39.3864 22.2769 40.2752 21.3892 41 20.3677Z" fill="#2E4057"/>',
            y_contacts:
              '<circle cx="28" cy="28" r="28" fill="#2E4057" fill-opacity="0.06"/>\n   <path d="M39.469 22.2861L39.499 22.4706C39.209 21.5021 38.426 20.7548 37.431 20.4828L37.41 20.4781C35.5391 20 28.0101 20 28.0101 20C28.0101 20 20.5002 19.9906 18.6103 20.4781C17.5963 20.7548 16.8123 21.5021 16.5273 22.4508L16.5223 22.4706C15.8233 25.9068 15.8183 30.0358 16.5533 33.7148L16.5223 33.5285C16.8123 34.4969 17.5953 35.2442 18.5903 35.5162L18.6113 35.5209C20.4802 36 28.0111 36 28.0111 36C28.0111 36 35.5201 36 37.411 35.5209C38.426 35.2442 39.21 34.4969 39.495 33.5482L39.5 33.5285C39.818 31.9304 40 30.0913 40 28.2127C40 28.144 40 28.0744 39.999 28.0047C40 27.9407 40 27.8645 40 27.7882C40 25.9087 39.818 24.0697 39.469 22.2861ZM25.6082 31.4362V24.5722L31.8741 28.0094L25.6082 31.4362Z" fill="#2E4057"/>',
            tel_contacts:
              '<circle cx="28" cy="28" r="28" fill="#2E4057" fill-opacity="0.06"/>\n   <path d="M25.4172 32.1812L25.0202 37.7652C25.5882 37.7652 25.8342 37.5212 26.1292 37.2282L28.7922 34.6832L34.3102 38.7242C35.3222 39.2882 36.0352 38.9912 36.3082 37.7932L39.9302 20.8212L39.9312 20.8202C40.2522 19.3242 39.3902 18.7392 38.4042 19.1062L17.1142 27.2572C15.6612 27.8212 15.6832 28.6312 16.8672 28.9982L22.3102 30.6912L34.9532 22.7802C35.5482 22.3862 36.0892 22.6042 35.6442 22.9982L25.4172 32.1812Z" fill="#2E4057"/>',
            arrslidr:
              '<path d="M1 6H43M43 6L37.5 1M43 6L37.5 11" stroke="#FF7733" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
            money_bank:
              '<path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M23.3897 0.0831435C23.1992 0.148616 22.8031 0.384742 22.5098 0.608153C21.9788 1.01225 21.8175 1.27236 20.9436 3.13337C20.5642 3.94124 19.8997 4.44539 18.9535 4.64315C18.6091 4.71509 17.3757 4.78123 16.2127 4.79016C14.3145 4.80477 14.0594 4.82931 13.7218 5.02952C12.704 5.63305 12.6255 6.44661 13.4213 8.14131C13.7065 8.74853 14.4353 10.4639 15.0407 11.9532C16.3211 15.1019 16.9639 16.5342 17.2309 16.8316C17.7673 17.4293 19.6336 18.0151 21.9468 18.3119C24.2972 18.6135 26.6887 18.4198 28.7928 17.7573C30.1032 17.3448 31.2894 16.554 31.5233 15.9368C31.5881 15.7657 31.6639 14.948 31.6916 14.1199C31.7315 12.9303 31.8148 12.3182 32.0884 11.2053C32.5019 9.52372 33.1035 7.85299 33.7926 6.47293C34.7157 4.62463 34.691 3.3879 33.7217 2.9248C32.926 2.54467 31.6822 2.79485 30.2249 3.62827C29.125 4.25734 28.5953 4.38862 28.1318 4.14736C27.7337 3.94013 27.5667 3.68482 27.1154 2.5933C26.4491 0.982028 25.4901 0.0939627 24.3231 0.00763236C24.0004 -0.0162368 23.5803 0.0177823 23.3897 0.0831435ZM32.4607 19.5181C30.8626 20.7973 28.3268 21.5291 25.0103 21.6683C21.979 21.7955 19.6255 21.3419 17.5995 20.2403L16.7412 19.7735L15.918 20.0851C12.2762 21.4642 8.28521 24.382 5.5416 27.6717C3.01048 30.7067 1.04613 34.6285 0.374107 37.989C-0.222363 40.9709 -0.0978399 44.6582 0.692284 47.4139C2.24772 52.8386 6.59672 55.5359 15.4273 56.5529C18.713 56.9314 20.2651 56.9976 25.8966 57C31.5671 57.0023 33.598 56.9172 36.5874 56.5522C45.9145 55.4132 50.1864 52.5412 51.548 46.4942C52.1122 43.9891 52.1524 40.5159 51.6451 38.1074C50.1928 31.2125 44.4508 24.2879 37.2521 20.7503C35.6861 19.9807 33.52 19.1377 33.1146 19.1402C33.0139 19.1407 32.7197 19.3108 32.4607 19.5181ZM26.3157 27.4108L26.3471 28.5998L26.925 28.6733C28.4568 28.8682 29.9957 29.4609 29.9957 29.856C29.9957 30.2733 29.2932 32.5451 29.1467 32.6018C29.0673 32.6325 28.6401 32.5073 28.1973 32.3237C26.4385 31.5945 24.5452 31.5326 23.6972 32.1766C23.3563 32.4355 23.1278 33.1418 23.2484 33.5646C23.4404 34.2386 24.0809 34.6799 26.1182 35.5414C28.8792 36.7089 29.8863 37.5646 30.4373 39.2113C30.7076 40.0191 30.7585 41.3347 30.5498 42.1151C30.097 43.8079 28.8192 45.0976 27.0163 45.6812L26.2356 45.934L26.2046 47.2874L26.1736 48.6409L24.853 48.6724C23.8709 48.696 23.5092 48.6673 23.4421 48.5609C23.3925 48.4821 23.3512 47.9092 23.3502 47.2876C23.3484 46.0486 23.3339 46.0253 22.5631 46.0213C21.7951 46.0171 19.4315 45.2037 19.132 44.8405C19.043 44.7325 19.1038 44.3643 19.3648 43.4329C19.8949 41.5406 19.8354 41.5922 20.8801 42.1179C22.553 42.9594 24.8696 43.1508 25.9153 42.5338C27.0083 41.8889 27.0599 40.6301 26.0283 39.774C25.8121 39.5946 24.9586 39.167 24.1319 38.824C21.4139 37.6962 20.3694 36.9333 19.6853 35.5764C19.3229 34.8577 19.3048 34.7655 19.3048 33.639C19.3048 32.4966 19.319 32.4274 19.7213 31.6079C20.3633 30.3001 21.187 29.6138 22.85 29.0014L23.5147 28.7565L23.5441 27.6007C23.5602 26.9649 23.5967 26.3804 23.6251 26.3018C23.6639 26.1941 23.998 26.1666 24.9805 26.1903L26.2844 26.2217L26.3157 27.4108Z" fill="white"/>',
            burger:
              '<path opacity="0.5" d="M1 2H19M13.2727 9H1M1 16H19" stroke="#2E4057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
            done: '<path fill-rule="evenodd" clip-rule="evenodd" d="M18.5429 3.27236L8.64815 15.2724C8.2749 15.725 7.72172 15.991 7.13508 15.9998C6.54845 16.0086 5.98753 15.7593 5.60087 15.3181L0.495605 9.492L3.50401 6.85581L7.05873 10.9124L15.4567 0.727631L18.5429 3.27236Z" fill="#FF7733"/>',
            check:
              '<path fill-rule="evenodd" clip-rule="evenodd" d="M32 7C32 6.62971 31.7954 6.28972 31.4682 6.11636C31.141 5.943 30.7447 5.96465 30.4384 6.17262L26.3964 8.91637L22.3545 6.17262C22.0154 5.94246 21.5703 5.94246 21.2312 6.17262L17.157 8.93826L12.5159 6.14334C12.207 5.95734 11.8219 5.95201 11.508 6.1294C11.1941 6.3068 11 6.63944 11 7V21H6C5.44772 21 5 21.4477 5 22V28.25C5 30.4088 6.44009 32.2312 8.41201 32.809C8.57704 32.9291 8.78024 33 9 33H9.75H21.7928H23.83H26C29.3137 33 32 30.3137 32 27V7ZM23.83 31H26C28.2091 31 30 29.2091 30 27V8.88745L26.9581 10.9524C26.619 11.1825 26.1738 11.1825 25.8348 10.9524L21.7928 8.20864L17.7509 10.9524C17.4282 11.1715 17.0075 11.1829 16.6734 10.9817L13 8.76953V22V29.75C13 30.193 12.9114 30.6152 12.7509 31H21.7928H23.83ZM9.75 31C10.4404 31 11 30.4404 11 29.75V23H7V28.25C7 29.7688 8.23122 31 9.75 31ZM17 15C16.4477 15 16 15.4477 16 16C16 16.5523 16.4477 17 17 17H26C26.5523 17 27 16.5523 27 16C27 15.4477 26.5523 15 26 15H17ZM17 19C16.4477 19 16 19.4477 16 20C16 20.5523 16.4477 21 17 21H26C26.5523 21 27 20.5523 27 20C27 19.4477 26.5523 19 26 19H17ZM17 23C16.4477 23 16 23.4477 16 24C16 24.5523 16.4477 25 17 25H23C23.5523 25 24 24.5523 24 24C24 23.4477 23.5523 23 23 23H17Z" fill="#00AF92"/>',
            repeat_ex:
              '<path fill-rule="evenodd" clip-rule="evenodd" d="M1.27229 1C1.27229 0.447715 1.72 0 2.27229 0H5.45454C6.00683 0 6.45454 0.447715 6.45454 1V4.18226C6.45454 4.73454 6.00683 5.18226 5.45454 5.18226C4.90226 5.18226 4.45454 4.73454 4.45454 4.18226V3.1586C2.96523 4.25139 2 6.01382 2 8.00025C2 10.7547 3.85658 13.078 6.38847 13.7824C6.92055 13.9304 7.23189 14.4817 7.08388 15.0138C6.93586 15.5459 6.38453 15.8572 5.85245 15.7092C2.47784 14.7704 0 11.676 0 8.00025C0 5.60985 1.04822 3.46545 2.70842 2H2.27229C1.72 2 1.27229 1.55228 1.27229 1ZM8.94357 0.990066C9.09353 0.458532 9.646 0.14921 10.1775 0.299176C13.5378 1.24723 16.0019 4.33468 16.0019 8.00025C16.0019 10.3914 14.9531 12.5363 13.2921 14.0018H13.7297C14.282 14.0018 14.7297 14.4495 14.7297 15.0018C14.7297 15.5541 14.282 16.0018 13.7297 16.0018H10.5474C9.99515 16.0018 9.54744 15.5541 9.54744 15.0018V11.8195C9.54744 11.2673 9.99515 10.8195 10.5474 10.8195C11.0997 10.8195 11.5474 11.2673 11.5474 11.8195V12.8419C13.0368 11.749 14.0019 9.98665 14.0019 8.00025C14.0019 5.25349 12.1556 2.93536 9.63446 2.22403C9.10292 2.07407 8.7936 1.5216 8.94357 0.990066Z" fill="#FF7733"/>',
            add: '<path fill-rule="evenodd" clip-rule="evenodd" d="M15.0342 2.37817C13.6711 1.59116 11.9281 2.05821 11.1411 3.42134L4.76607 14.4632C3.49582 16.6633 4.24964 19.4766 6.44979 20.7469C8.64993 22.0171 11.4633 21.2633 12.7335 19.0632L16.4835 12.568C16.732 12.1375 17.2825 11.99 17.7129 12.2386C18.1434 12.4871 18.2909 13.0375 18.0424 13.468L14.2924 19.9632C12.525 23.0242 8.61086 24.073 5.54979 22.3057C2.48872 20.5384 1.43992 16.6242 3.20723 13.5632L9.58223 2.52134C10.8663 0.297281 13.7102 -0.464738 15.9342 0.819324C18.1583 2.10339 18.9203 4.94728 17.6363 7.17134L11.2613 18.2132C10.4604 19.6002 8.68684 20.0755 7.29979 19.2746C5.91274 18.4738 5.4375 16.7002 6.23832 15.3132L11.2383 6.65291C11.4868 6.22245 12.0373 6.07496 12.4677 6.32349C12.8982 6.57202 13.0457 7.12245 12.7972 7.55291L7.79716 16.2132C7.4934 16.7393 7.67367 17.412 8.19979 17.7158C8.72591 18.0196 9.39866 17.8393 9.70242 17.3132L16.0774 6.27134C16.8644 4.90821 16.3974 3.16518 15.0342 2.37817Z" fill="#FFBB99"/>',
            send: '<g clip-path="url(#clip0)">\n          <path d="M19.586 9.35083L1.01498 0.779611C0.719277 0.645328 0.366428 0.725326 0.160719 0.979606C-0.0464189 1.23389 -0.0535615 1.5953 0.143576 1.85673L6.25057 9.99938L0.143576 18.142C-0.0535615 18.4035 -0.0464189 18.7663 0.15929 19.0192C0.297858 19.192 0.504996 19.2849 0.714991 19.2849C0.816417 19.2849 0.917843 19.2634 1.01356 19.2192L19.5845 10.6479C19.8388 10.5308 20.0002 10.2779 20.0002 9.99938C20.0002 9.72082 19.8388 9.46797 19.586 9.35083Z" fill="#FF7733"/>\n          </g>\n          <defs>\n          <clipPath id="clip0">\n          <rect width="20" height="20" fill="white"/>\n          </clipPath>\n        </defs>',
            disabled_icon:
              '<path\n                    d="M30.5901 17.2701C31.0801 17.7601 31.7201 18.0001 32.3701 18.0001C33.0201 18.0001 33.6601 17.7601 34.1501 17.2701L36.9601 14.4601C37.4301 13.9901 37.7001 13.3501 37.7001 12.6801C37.7001 12.0101 37.4401 11.3801 36.9601 10.9001L32.1001 6.04006C30.6901 4.63006 28.7301 3.91006 26.7401 4.08006L21.9701 4.49006C21.2701 4.55006 20.6901 5.00006 20.4501 5.65006C20.2101 6.31006 20.3701 7.03006 20.8601 7.52006L24.2501 10.9101L19.6701 15.4901L17.2301 13.0501C16.2101 12.0301 16.2401 11.7401 16.3501 10.5201C16.3601 10.4301 16.3601 10.3501 16.3701 10.2601C16.3901 10.0501 16.4101 9.82006 16.4201 9.57006C16.4201 9.55006 16.4201 9.53006 16.4201 9.51006C16.4201 7.88006 15.8301 6.26006 14.6301 5.07006C13.0501 3.52006 10.3901 2.71006 7.9901 3.10006C7.6201 3.16006 7.3101 3.42006 7.2001 3.78006C7.0801 4.14006 7.1801 4.53006 7.4401 4.80006L10.9101 8.30006L10.8801 8.52006C10.7301 9.77006 9.7601 10.7401 8.5101 10.8901H8.2301L4.7901 7.45006C4.5201 7.18006 4.1301 7.09006 3.7701 7.21006C3.4101 7.33006 3.1501 7.63006 3.0901 8.00006C2.7101 10.4001 3.5101 13.0701 5.0901 14.6401C6.1701 15.7201 7.7401 16.3301 9.4301 16.3301C9.4701 16.3301 9.5101 16.3301 9.5501 16.3301C10.1901 16.3901 10.6901 16.3901 11.0901 16.3801C12.0001 16.3701 12.2001 16.3701 13.0701 17.2401L15.5101 19.6801L5.0001 30.1701C3.8301 31.3401 3.8301 33.2401 5.0001 34.4101L5.7101 35.1201C6.2901 35.7001 7.0601 36.0001 7.8301 36.0001C8.6001 36.0001 9.3701 35.7101 9.9501 35.1201L20.4601 24.6101L22.0701 26.2201C22.6401 26.7901 23.2501 27.5901 23.2101 29.8601C23.2101 29.9001 23.2301 29.9301 23.2301 29.9701C23.2001 31.7101 23.8401 33.3801 25.0201 34.5601C26.3301 35.8701 28.4101 36.6501 30.4601 36.6501C30.8701 36.6501 31.2701 36.6201 31.6701 36.5601C32.0401 36.5001 32.3501 36.2401 32.4601 35.8801C32.5801 35.5201 32.4801 35.1301 32.2201 34.8601L28.7501 31.3601L28.7801 31.1401C28.9301 29.8901 29.9001 28.9201 31.1501 28.7701H31.4301L34.8701 32.2101C35.1401 32.4801 35.5301 32.5701 35.8901 32.4501C36.2501 32.3301 36.5101 32.0301 36.5701 31.6601C36.9501 29.2601 36.1501 26.5901 34.5701 25.0201C33.4401 23.8901 31.8101 23.3501 30.1401 23.3701C30.0901 23.3701 30.0501 23.3401 30.0001 23.3401C27.5501 23.3801 26.8901 22.7201 26.2401 22.0701L24.6301 20.4601L29.2101 15.8801L30.6001 17.2701H30.5901ZM26.9001 6.08006C28.3101 5.97006 29.6801 6.46006 30.6801 7.46006L35.5401 12.3201C35.6701 12.4501 35.6901 12.6001 35.6901 12.6801C35.6901 12.7601 35.6701 12.9101 35.5401 13.0401L32.7301 15.8501C32.5301 16.0501 32.2001 16.0501 32.0001 15.8501L22.5901 6.45006L26.9001 6.08006ZM8.5401 33.7101C8.1501 34.1001 7.5201 34.1001 7.1301 33.7101L6.4201 33.0001C6.0301 32.6101 6.0301 31.9801 6.4201 31.5901L16.9301 21.0801L19.0501 23.2001L8.5401 33.7101ZM26.1901 24.5801C25.7501 24.8901 25.6301 25.5001 25.9401 25.9501C26.2501 26.4101 26.8701 26.5301 27.3301 26.2201C29.2101 24.9501 31.7701 25.0501 33.1601 26.4401C33.7801 27.0601 34.2501 28.0001 34.4901 29.0001L32.8501 27.3601C32.4001 26.9101 31.7601 26.6901 31.1401 26.7601L30.9201 26.7901C28.7501 27.0501 27.0601 28.7401 26.8001 30.9101L26.7701 31.1301C26.7001 31.7501 26.9201 32.3901 27.3701 32.8401L29.0101 34.4801C28.0101 34.2401 27.0801 33.7801 26.4501 33.1501C25.6401 32.3401 25.2001 31.1701 25.2401 29.9401C25.2401 29.9001 25.2201 29.8701 25.2201 29.8301C25.2501 26.9701 24.3701 25.6901 23.4901 24.8201L14.4901 15.8201C13.0901 14.4201 12.3201 14.3601 11.0701 14.3701C10.6901 14.3701 10.2501 14.3701 9.6801 14.3201C9.6601 14.3201 9.6401 14.3201 9.6301 14.3201C9.6101 14.3201 9.5901 14.3101 9.5701 14.3101C8.3501 14.3801 7.2401 13.9401 6.5101 13.2101C5.8901 12.5901 5.4201 11.6501 5.1801 10.6501L6.8201 12.2901C7.2701 12.7401 7.9101 12.9601 8.5301 12.8901L8.7501 12.8601C10.9201 12.6001 12.6101 10.9101 12.8701 8.74006L12.9001 8.52006C12.9701 7.90006 12.7501 7.26006 12.3001 6.81006L10.6601 5.17006C11.6601 5.41006 12.6001 5.87006 13.2201 6.50006C14.7601 8.04006 14.8301 10.7301 13.3701 12.4901C13.0201 12.9201 13.0801 13.5501 13.5001 13.9001C13.9301 14.2501 14.5601 14.1901 14.9101 13.7701C14.9601 13.7101 14.9901 13.6401 15.0401 13.5801C15.2501 13.8601 15.4901 14.1601 15.8201 14.4801L24.8201 23.4801C25.1701 23.8301 25.5901 24.2301 26.1901 24.5701V24.5801ZM27.7801 14.4701L23.2001 19.0501L21.0801 16.9301L25.6601 12.3501L27.7801 14.4701Z"\n                  ></path>',
            photo:
              '<path fill-rule="evenodd" clip-rule="evenodd" d="M6.42866 0.558764C6.56672 0.22129 6.901 0 7.27273 0H12.7273C13.099 0 13.4333 0.22129 13.5713 0.558764L14.2518 2.22222H17.2727C18.779 2.22222 20 3.41613 20 4.88889V15.3333C20 16.8061 18.779 18 17.2727 18H2.72727C1.22104 18 0 16.8061 0 15.3333V4.88889C0 3.41613 1.22104 2.22222 2.72727 2.22222H5.74815L6.42866 0.558764ZM7.88821 1.77778L7.20771 3.44124C7.06965 3.77871 6.73537 4 6.36364 4H2.72727C2.2252 4 1.81818 4.39797 1.81818 4.88889V15.3333C1.81818 15.8243 2.2252 16.2222 2.72727 16.2222H17.2727C17.7748 16.2222 18.1818 15.8243 18.1818 15.3333V4.88889C18.1818 4.39797 17.7748 4 17.2727 4H13.6364C13.2646 4 12.9304 3.77871 12.7923 3.44124L12.1118 1.77778H7.88821ZM10 12.5556C11.5062 12.5556 12.7273 11.3616 12.7273 9.88889C12.7273 8.41613 11.5062 7.22222 10 7.22222C8.49377 7.22222 7.27273 8.41613 7.27273 9.88889C7.27273 11.3616 8.49377 12.5556 10 12.5556ZM10 14.3333C12.5104 14.3333 14.5455 12.3435 14.5455 9.88889C14.5455 7.43429 12.5104 5.44444 10 5.44444C7.48961 5.44444 5.45455 7.43429 5.45455 9.88889C5.45455 12.3435 7.48961 14.3333 10 14.3333ZM16.3636 8.11111C16.8657 8.11111 17.2727 7.71314 17.2727 7.22222C17.2727 6.7313 16.8657 6.33333 16.3636 6.33333C15.8616 6.33333 15.4545 6.7313 15.4545 7.22222C15.4545 7.71314 15.8616 8.11111 16.3636 8.11111Z" fill="white"/>',
          };
        const s = ["width", "height", "viewBox", "innerHTML"];
        var c = {
          __name: "BaseIcon",
          props: { name: String, view: String, width: String, height: String },
          setup(e) {
            const r = e,
              t = (0, n.iH)(i[r.name]);
            return (
              (0, a.m0)(() => {
                t.value = i[r.name];
              }),
              (r, n) => (
                (0, a.wg)(),
                (0, a.iD)(
                  "svg",
                  {
                    width: e.width,
                    height: e.height,
                    class: (0, o.C_)(r.$attrs.class || "icon"),
                    viewBox: e.view,
                    fill: "none",
                    xmlns: "http://www.w3.org/2000/svg",
                    "data-testid": "base-icon",
                    innerHTML: t.value,
                  },
                  null,
                  10,
                  s
                )
              )
            );
          },
        };
        const l = c;
        var d = l;
      },
      9604: function (e, r, t) {
        "use strict";
        t.d(r, {
          Z: function () {
            return p;
          },
        });
        var a = t(3396),
          o = t(7139),
          n = t(4870),
          i = t(3554),
          s = t(1519);
        const c = { class: "notice" },
          l = { key: 0, class: "over" },
          d = (0, a._)("div", { id: "recaptchaElement" }, null, -1),
          u = [d];
        var _ = {
          __name: "ReCaptcha",
          props: {
            staticLayout: { type: Boolean, default: !1 },
            callbackCaptcha: Function,
          },
          setup(e) {
            const r = (0, n.iH)(!1),
              t = (0, i.x)(),
              d = (0, s.F)(),
              _ = e;
            (0, a.bv)(() => {
              document.getElementById("recaptchaElement") && m(),
                (window.onLoadCallback = () => {
                  (r.value = !0),
                    window.grecaptcha &&
                      document.getElementById("recaptchaElement") &&
                      window.grecaptcha.render("recaptchaElement", {
                        sitekey: "6Lf7SjcaAAAAAEfsIzp12RY7uXYyoTAfJmhlrrQ9",
                        callback: (e) => {
                          (_.callbackCaptcha || p)(e);
                        },
                      });
                });
            }),
              (0, a.Jd)(() => {
                let e = document.getElementById("recaptchaElement");
                if (e) while (e.firstChild) e.removeChild(e.firstChild);
              });
            const m = () => {
                const e = document.createElement("script");
                (e.src =
                  "https://www.google.com/recaptcha/api.js?onload=onLoadCallback&render=explicit"),
                  (e.async = !0),
                  (e.defer = !0),
                  document.head.appendChild(e);
              },
              p = () => {
                window.grecaptcha &&
                  ((d.captchaCode = window.grecaptcha.getResponse()),
                  d.captchaCode && t.sendReCaptchaCode(d.captchaCode));
              };
            return (r, t) => (
              (0, a.wg)(),
              (0, a.iD)("div", c, [
                e.staticLayout
                  ? (0, a.kq)("", !0)
                  : ((0, a.wg)(), (0, a.iD)("div", l)),
                (0, a._)(
                  "div",
                  {
                    class: (0, o.C_)([
                      "notice__box",
                      { positionStatic: e.staticLayout },
                    ]),
                  },
                  u,
                  2
                ),
              ])
            );
          },
        };
        const m = _;
        var p = m;
      },
      471: function (e, r, t) {
        var a = { "./en.json": [1005, 5], "./ru.json": [8809] };
        function o(e) {
          if (!t.o(a, e))
            return Promise.resolve().then(function () {
              var r = new Error("Cannot find module '" + e + "'");
              throw ((r.code = "MODULE_NOT_FOUND"), r);
            });
          var r = a[e],
            o = r[0];
          return Promise.all(r.slice(1).map(t.e)).then(function () {
            return t.t(o, 19);
          });
        }
        (o.keys = function () {
          return Object.keys(a);
        }),
          (o.id = 471),
          (e.exports = o);
      },
      5403: function (e, r, t) {
        "use strict";
        e.exports = t.p + "img/1_1.63a0f84e.png";
      },
      1283: function (e, r, t) {
        "use strict";
        e.exports = t.p + "img/1_2.44c016a0.png";
      },
      9533: function (e, r, t) {
        "use strict";
        e.exports = t.p + "img/2_1.9d4f4201.png";
      },
      831: function (e, r, t) {
        "use strict";
        e.exports = t.p + "img/2_2.aeb24686.png";
      },
      2759: function (e, r, t) {
        "use strict";
        e.exports = t.p + "img/3.d596b42f.png";
      },
      2373: function (e, r, t) {
        "use strict";
        e.exports = t.p + "img/1_2.571224f3.png";
      },
      9498: function (e, r, t) {
        "use strict";
        e.exports = t.p + "img/2_1.9d4f4201.png";
      },
      4314: function (e, r, t) {
        "use strict";
        e.exports = t.p + "img/2_2.f9be3598.png";
      },
      1453: function (e, r, t) {
        "use strict";
        e.exports = t.p + "img/3.7e6d2fb8.png";
      },
      2480: function () {},
      8809: function (e) {
        "use strict";
        e.exports = JSON.parse(
          '{"404":{"title":"Страница \\n не найдена","text":"Вы попали на страницу, которой не существует, либо зашли по неверному адресу","btn_action":"На главную"},"locale":{"en":"En","ru":"Ru"},"copied":"cкопирован","error":{"empty":"Поле не может быть пустым","email":"Не верный E-mail","phone":"Не верный номер телефона","password":"Длина пароля не может быть меньше 6 символов","code":"Длина кода не может быть меньше 6 символов","confirm_password":"Пароли не совпадают","invalid_credentials":"Не верный логин или пароль","empty_login":"Поле логин не может быть пустым","long_login":"Значение логина длиннее допустимого","empty_password":"Поле пароль не может быть пустым","long_password":"Значение пароля длиннее допустимого","password_too_short":"Значение пароля короче допустимого","unknown_client":"Неизвестное устройство","already_authenticated":"Пользователь уже авторизован","user_not_active":"Пользователь не активен","service_internal_error":"Что то пошло не так, попробуйте позже","user_already_exists":"Пользователь с таким логином уже есть в системе","incorrect_signup_token":"Некорректный формат токена подтверждения регистрации","incorrect_signup_code":"Некорректный формат кода подтверждения регистрации","signup_token_not_found":"Токен подтверждения регистрации не найден в системе","signup_max_code_attempts":"Превышено количество попыток подтверждения","signup_invalid_code":"Неправильный код подтверждения","resend_too_early":"Слишком частая попытка получить код, необходимо подождать","user_not_found":"Пользователь не найден","rate_not_found":"Сделка не найдена, попробуйте позже","rate_disabled":"Сделка временно не доступна, попробуйте позже","incorrect_payload":"Указано неверное значение","incorrect_wallet":"Некорректный адрес кошелька для получения средств","empty_wallet_from":"Некорретный адрес кошелька, с которого будет оплата","incorrect_payeer_wallet_from":"Некорректный номер кошелька, с которого будет оплата","incorrect_card_number":"Введен некорректный номер карты. Он должен содержать не менее 16 и не более 18 символов","empty_tag":"Указан некорректный тег","incorrect_captcha":"Неправильный код CAPTCHA","active_orders_limit_excess":"Достигнут лимит на количество открытых ордеров","order_creation_error":"Не удалось создать ордер","restore_token_not_found":"Токен подтверждения восстановления не найден в системе","restore_max_code_attempts":"Превышено количество попыток подтверждения","restore_change_pass_token_generated":"Токен для смены пароля уже был сгенерирован","restore_invalid_code":"Неправильный код подтверждения","order_status_not_allows_confirmation":"Ордер не может быть подтвержден из-за статуса","order_wallet_address_not_empty":"Детали оплаты уже были предоставлены для этого заказа","empty_card_file":"Файл изображения карты не был загружен","empty_card_client_name":"Имя владельца карты отсутствует в запросе","empty_card_number":"Номер карты отсутствует в запросе","incorrect_card_client_name":"Введено некорректное ФИО. Имя, фамилия или отчество должны содержать не менее 2 символов","card_not_valid":"Введен не верный номер карты","card_max_upload_size":"Размер загруженного файла превышает допустимый размер","card_file_type_not_allowed":"Загруженный файл имеет недопустимый тип MIME","card_file_not_found":"Загруженный файл не найден на сервере. Обратитесь в тех.поддержку","card_load_new_photo":"Попробуйте загрзить другое фото или обратитесь в тех.поддержку","card_format_file_title":"Недопустимый формат файла","card_format_file_text":"Допустимые форматы: jpeg, png","receipt_format_file":"Допустимые форматы: jpeg, png, pdf","withdraw_amount_lower_min":"Указаная сумма, меньше минимальной допустимой суммы для вывода","withdraw_empty_amount":"Некорректное значение","withdraw_insufficient_funds":"Недостаточно средств на балансе для указанной суммы","widthdraw_failed":"Не удалось создать вывод","profile_old_pass_is_empty":"Не передан старый пароль","profile_new_pass_is_short":"Длина пароля не может быть меньше 6 символов","profile_old_pass_invalid":"Передан не верный пароль","unsubscription_missing_params":"Укажите верный email для отписки","incorrect_unsubscription_token":"Некорректный формат токена","order_not_found":"Сделка не найдена","change_wallet_invalid_address":"Указан некорректный кошелек","change_wallet_fail":"Не удалось поменять кошелек у сделки","card_form_id_is_empty":"Не найден formId","card_email_is_empty":"Не найден email","bin_code_error":"Номер карты не соответсвует выбранному банку","change_wallet_zero_attempts":"Превышено количество попыток смены кошелька","change_wallet_duplication":"Указанный новый адрес совпадает со старым","cash_is_not_active":"Направления за наличные работают с 9:00 до 22:00 по МСК","message_not_found":"Сообщение не найдено","chat_file_max_upload_size":"Размер файла превышает допустимое значение","chat_file_type_not_allowed":"Недопустимый формат файла","chat_file_not_found":"Файл не найден","upload_file_failed":"Ошибка при загрузки файла","message_is_empty":"Сообщение не может быть пустым","prepared_message_not_found":"Не верный id сообщения","solve_challenge":"Прохождение проверки","incorrect_bank":"Выберите банк для перевода","card_expire_not_valid":"Некорректный срок действия","card_cvv_not_valid":"Некорректный cvv","card_in_black_list_error":"Извините, мы не можем перевести средства на данную карту. Укажите номер другой карты.","change_wallet_need_same_wallet":"Необходимо указать кошелек с которого вы отправляли средства","change_wallet_wallet_must_be_different":"Кошелек должен отличаться от того кошелька с которого средства были отправлены","change_wallet_refund_already_added":"Возврат уже добавлен, пожалуйста ожидайте поступление средств","already_uploaded":"Вы уже загружали этот файл. Пожалуйста, загрузите другой чек"},"update_page":"Обновить страницу","title_pages":{"404":"Страница не найдена","main":"Обменник криптовалют CoinFiber - Выгодные курсы обмена и покупки","auth":"Вход","sign_up":"Регистрация","complete":"Благодарим за обмен!","recover_password":"Востановление пароля","cash_exchange":"Обмен за наличные","user_profile":"Мой аккаунт","like":"Рекомендации","faq":"Вопросы и ответы по сервису CoinFiber","reviews":"Отзывы об обменнике CoinFiber","money":"Участвуй в розыгрыше!","contacts":"Контакты","unsubscribe":"Отписаться от рассылки","about":"Об обменнике CoinFiber","partners":"Партнерская программа","agreement":"Пользовательское соглашение","aml":"AML политика","personal":"История обменов","referal":"Партнерская программа","settings":"Настройки аккаунта","cards":"Мои карты","order":"Сделка","new_message":"У вас новое сообщение!","cash":"Ваша заявка принята!"},"crumbs":{"main":"Главная","like":"Рекомендации","faq":"FAQ","reviews":"Отзывы","money":"Розыгрыш призов","contacts":"Контакты","unsubscribe":"Отписаться от рассылки","about":"О нас","partners":"Партнерам","agreement":"Правила сервиса","aml":"AML политика","personal":"История обменов","referal":"Партнерская программа","settings":"Настройки аккаунта","cards":"Мои карты"},"header":{"info":"Рабочее время: 10:00 - 22:00 GMT+3","links":{"ex_cash":"Обмен за наличные","dex":"DEX","reviews":"Отзывы","support":"Поддержка"},"dropdown_title":"Мой аккаунт","dropdown_list":{"history":"История обменов","partner":"Партнерская программа","setting":"Настройки аккаунта","cards":"Мои карты","log_out":"Выйти"},"log_in":"Войти"},"footer":{"info":"Рабочее время: 10:00 - 22:00 GMT+3","links":{"all_ex":"Все направления","about":"О нас","for_partner":"Партнерам","reviews":"Отзывы","faq":"FAQ","contacts":"Контакты","rules_service":"Правила сервиса","site_map":"Карта сайта","aml_policy":"AML политика","recommendations":"Рекомендации"},"chanel":{"text":"Telegram поддержка"},"copyrate":{"aml":"Все транзакции проходят проверку AML через сервис","ivan_pay":"Рублевый процессинг","year":"© 2018–2025 CoinFiber - сервис обмена криптовалют"}},"log_in":{"title":"Вход","link_to_sign_up":"Регистрация","link_to_forgot_password":"Забыли пароль?","email":{"name":"E-mail"},"password":{"name":"Пароль"},"button_action":"Войти","info":"Рабочее время: 10:00 - 22:00 GMT+3"},"sign_up":{"title":"Регистрация","title_confirm":"Подтвердите регистрацию","link_to_log_in":"Войти","code":{"name":"Код"},"email":{"name":"E-mail"},"password":{"name":"Пароль"},"confirm_password":{"name":"Пароль ещё раз"},"confirm_text":"Для активации своего аккаунта, введити проверочный код из письма, которое мы отправили на вашу электронную почту.","button_action":"Регистрация","button_action_confirm":"Подтвердить регистрацию","button_new_code":"Получить код повторно","info":"Рабочее время: 10:00 - 22:00 GMT+3","code_send":"Код отправлен, проверьте почту"},"recover_password":{"title":"Восстановление пароля","new_password":"Новый пароль","title_confirm":"Подтвердите восстановление пароля","confirm_text":"Для восстановления пароля введите проверочный код из письма, которое мы отправили на вашу электронную почту.","email":{"name":"E-mail"},"code":{"name":"Код"},"password":{"name":"Пароль"},"button_action":"Востановить пароль","button_action_confirm":"Подтвердить восстановление","button_new_code":"Получить код еще раз","button_save_password":"Сохранить пароль"},"update_site":{"title":"Обновление \\n сайта","text":" Сайт находится на реконструкции, в ближайшее время будет работать в обычном режиме."},"trade":{"choice":{"online":"Онлайн","cash":"За наличные"},"select_city":"Выберите город","support":{"text":"Попробуйте создать обмен еще раз или свяжитесь с {link}","link":"тех.поддержкой"},"cash_text":"Главная ценность, которой мы обладаем — это наша репутация и доверие наших клиентов, что подтверждает 99,8% положительных отзывов на сервисе <a href=\'https://www.bestchange.net/exhub-exchanger.html\' target=\'_blank\'>BestChange</a>.","text":"Главная ценность, которой мы обладаем — это наша репутация  и доверие наших клиентов","advantages":{"exchange":"Обменяем за 7 минут","exchange_info":"Среднее время совершения обмена","answer":"Ответим за 2 минуты","answer_info":"Среднее время ответа нашего оператора","directions":"Более 1000 направлений обмена","directions_info":"Самые популярные валюты в одном месте"},"dropdown_title":"Выберите систему:","dropdown_title_bank":"Выберите банк:","dropdown_search":"Поиск","dropdown_item_appear_later":"Появиться позже","dropdown_item_not_found":"Не найдено","form_title":"Введите данные для обмена","verification":"Верификация не требуется","floating_rate":{"title":"Плавающий курс","text":"<b>Плавающий</b> — нефиксированный курс, определяется на момент получения от вас денежных средств."},"fixed_rate":{"title":"После создания обмена текущий курс будет зафиксирован","text":"<b>Фиксированный</b> — текущий курс будет зафиксирован на {time} минут с момента создания сделки."},"rate_more_details":"подробнее","rate_more_notification":"Узнать подробнее","comission":{"title":"Дополнительная комиссия","text":"Обмен до {limit} проходит с дополнительной комиссей с вашей стороны. В данном направлении она составляет {comission}."},"actual_exchange_rate":"курс актуален","fields":{"city":{"label":"Выберите город"},"currFrom":{"label":"Отдаете"},"currTo":{"label":"Получаете"},"walletFrom":{"label":"Кошелек с которого будет оплата","description":"Укажите номер кошелька {wallet}, с которого вы будете оплачивать заявку"},"walletTo":{"description":"Укажите реквизиты куда вам перевести ваши средства","description_card":"Укажите номер карты куда вам перевести ваши средства","description_phone":"Укажите номер телефона куда вам перевести ваши средства"},"memo":{"label":"Тег назначения (МЕМО)","description":"Необходим для перевода монет на аккаунты некоторых криптобирж","checkbox":"У меня нет тега","no_memo":"Нет тега"},"name":{"label":"Имя"},"contact":{"label":"Телефон или Telegram"},"phone":{"label":"Телефон"},"bank":{"attention":"Обязательно выберите нужный банк.","text":"Если вы ошибетесь, то можете потерять доступ к деньгам, так как они уйдут на карту другого вашего банка.","select":"Ничего не выбрано","label":"Выберите банк"},"is_firekassa":{"text":"Все рублевые суммы округляются к ближайшему целому значению кратному 100.","link":"Подробнее о расчетах","hide":"Мы используем математическое округление до разряда сотен.<br>Пример:<br>1. Результатом округления числа <b>23 456</b> будет число <b>23 500</b>.<br>2. Результатом округления числа <b>87 615</b> будет число <b>87 600</b>."},"reserve":"Резерв:"},"confirmation":"Курс будет зафиксирован в момент получения {confirm}-го подтверждения. Для формирования курса мы используем курс биржи Binance + комиссия сервиса","aml_policy_agree":"Согласие с {aml} и {user_agreement} сервиса CoinFiber","aml_policy_link":"политикой AML","terms_of_service_link":"пользовательским соглашением","action":"Перейти к оплате","next_step":"Следующий шаг","aml_warning":{"title":"Внимание","text":"На нашем сервисе каждая транзакция проходит амл проверку. В случае если криптовалюта отправленная Вами будет иметь High Risk или связана с нелегитимными источниками — будет проводиться проверка личности."},"additionally_indicate_the_number":"Для быстрого и надежного перевода рекомендуем указывать номер телефона, который привязан к указанной карте {bank}. Переводы по СБП проходят без задержек и блокировок, поэтому вы получите деньги быстрее и безопаснее.","visa":"Переводим на любые карты РФ кроме: ЮMoney","cash_policy":"Нажимая кнопку «Следующий шаг», Вы подтверждаете свое согласие с {policy} сервиса CoinFiber"},"aml_wallet":{"wallet_accepted":"Кошелек принят. Можете перейти на следующий этап сделки <a href=\\"{orderUrl}\\">по ссылке</a>","wallet_failed_aml":"Ваш адрес кошелька <b>{walletAddress}</b> не прошел AML проверку.<br />Пожалуйста, укажите новые реквизиты кошелька {currencyName}, чтобы завершить сделку.<br /><br /><b>Внимание!</b><br />Вы можете изменить реквизиты кошелька {currencyName} ограниченное количество раз.<br />Количество оставшихся попыток: <b>{attempts}</b>","no_more_attempts":"Ваш адрес кошелька <b>{walletAddress}</b> не прошел AML проверку.<br /><br />Извините, у вас больше не осталось попыток для изменения реквизитов кошелька {currencyName}."},"order":{"incoming_pay_error":"Произошел сбой при выдачи реквизитов для оплаты, попробуйте создать сделку позже","confirm":{"title":"Подтвердите данные сделки","get":"Получите","your_wallet":"На Ваш кошелек","your_phone":"По номеру телефона","your_requisites":"По реквизитам","attention":{"title":"Внимание!","text":"В последнее время участились случаи мошенничества. Если вы указывайте не свой личный кошелёк, а кошелёк сторонних лиц (Инвестиционных экспертов, других обменных сервисов, брокеров и.т. д) убедитесь, что это не мошенники, почитайте отзывы в интернете, иначе вы рискуйте потерять свои средства.","telegram_trc":"Отправку Tether trc 20 на кошелек Telegram wallet не осуществляем."},"tag":"Тег","agree":"Подтвердить данные","cancel":"Отменить сделку","memo":"Memo"},"title":"Заказ {id}","course":{"floating":{"title":"Плавающий курс","text":"Курс будет зафиксирован в момент получения {confirm}-го подтверждения. Обмен будет выполнен автоматически после {confirm}-го подтверждения Вашей транзакции в сети.","use_bnb":"Для формирования курса мы используем курс биржи Binance + комиссия сервиса"},"fixed":{"title":"Курс зафиксирован на {time} минут","text":"Если в течение этого времени не будет получено {confirm}-е  подтверждение сети, то курс будет зафиксирован в момент получения {confirm}-го подтверждения. Обмен будет выполнен автоматически после {confirm}-го подтверждения Вашей транзакции в сети.","fiat_text":"Если в течение этого времени не будут получены денежные средства от вас, то сделка отменится."}},"steps":{"verification":"Верификация карты","trans_payment":"Оплата сделки","payment_processing":"Обработка платежа","transfer":"Перевод"},"reserved_wait":"Ожидание выдачи реквизитов для оплаты","reserved_text":"Для вас зарезервирован уникальный кошелек для оплаты сделки. <br>Вы будете <b>автоматически перенаправлены</b> на следующий шаг сделки как только средства поступят по выданным реквизитам","reserved_by_card":"Для вас зарезервирован уникальный кошелек для оплаты сделки. <br>После перевода средств нажмите кнопку \'<b>Я оплатил</b>\'.<br> Как только средства поступят по выданным реквизитам Вы будете <b>автоматически перенаправлены</b> на следующий шаг сделки.","transaction_details":{"user_address":{"transfer":"Переводите","amount_to_pay":"сумма к оплате"},"transfer_address":{"wallet":"на кошелек","card":"переводите на карту банка","sbp":"переводите на "},"qrcode_for_pay":"QR-код для оплаты","tag":{"text":"Тег назначения (МЕМО).\\n{memo} Невыполнение этого условия или неправильное заполнение поля приведет к потере активов.","attention_text":"Обязательно указывайте тег назначения (МЕМО) при отправке!"}},"information":{"aml_check":"После вашей оплаты мы проверяем ваш {currency} кошелек на AML. Если кошелек не пройдет проверку, то вам будет предложено заменить кошелек. Если вы не предоставите кошелек, соответствующий AML политики сервиса, будет произведен возврат средств за вычетом 8%","get_requisites":"После верификации вашей карты вы получите реквизиты для оплаты сделки.","aml_attention":"Обращаем ваше внимание на то, что сервис CoinFiber не принимает средства с высокорискованных источников. Каждая входящая транзакция проходит проверку через независимый AML сервис. В случае если транзакция имеет более 70% риска, такие платежи будут приостановлены. И после прохождения верификации личности они будут вам возвращены за вычетом комиссии сети! Обмен таких средств невозможен!<br> Если вы хотите заранее узнать потенциальный риск вашей транзакции, то можете воспользоваться одним из сервисов наших партнеров. Первая проверка будет бесплатна. Чтобы проверить свой кошелек на чистоту, вам нужно перейти на сайт <a href=\'https://getblock.net/?referral=FguQdFg8S8da7EtbkShZqWs9JIGXmUUf\' target=\'_blank\'>GetBlock.net</a>","for_eth_network":"Выберите сеть Ethereum (ETH). Отправка в другой сети приведет к потери средств.","for_dai":"Если вы выводите монеты с биржи Binance, Huobi и др., выберите сеть ERC-20","for_bnb":"Если вы выводите монеты с биржи Binance, Huobi и др., выберите сеть {network}","for_dot":"Убедитесь, что ваш кошелек или биржа не используют  смарт-контракты для вывода DOT. Отправка таких транзакций приведет к потере средств. Если вы не уверены в способе вывода средств, то используйте личные кошельки для отправки или в качестве посредника.","no_comments":"<b>При переводе не оставлять комментариев! <br> Оплату принимаем только одним платежом. </b>","no_legal":"Не принимаем оплату с карт Юридических лиц. В случаи перевода с карты юр. лица, возврат производится за вычетом комиссии","one_payment":"Оплату принимаем на карту сторонних банков только одним платежом","sbp_attention":"Во избежание потери денежных средств переводить нужно строго на указанный банк.","card_order_sbp":"Вы можете перевести деньги по номеру телефона на {bank} вместо перевода на карту. В большинстве случаев переводы по номеру телефона проходят быстрее."},"cancel":"Отменить сделку","cards":{"your_order":"Ваш заказ","exchange":"Обмен","title_step1":"Введите данные карты","title_step2":"Загрузите фото","file_is_loaded":"Фото вашей карты загружено","file_is_loaded_from_link":"Фото отправлено в форму прикрепления карты на вашем компьютере. Пожалуйста, подождите несколько секунд","title_error":"Ошибка при модерации карты","title_load_by_link_error":"Ошибка при загрузке карты","save":"Запомнить карту для последующих сделок","send_to_moderation_action":"Отправить на модерацию","send_for_paymet":"Оплатить","types":{"virtual":"Вирутальныая карта","plastic_with_name":"Пластиковая именная","plastic_with_out_name":"Пластиковая не именная"},"instruction":{"title":"Сделать это можно двумя способами:","plastic_with_name":{"first_way":"<strong>Первый способ:</strong> загрузите фото лицевой стороны карты на фоне сделки. На фото должны быть видны цифры номера карты, фамилия и имя.","second_way":"<strong>Второй способ:</strong> загрузите фото лицевой стороны карты на фоне надписи «Покупка криптовалюты на обменном сервисе CoinFiber по сделке 65b8ba27d8050». На фото должны быть видны цифры номера карты, фамилия, имя.","first_way_sbp":"<strong>Первый способ:</strong> загрузите фото лицевой стороны карты на фоне сделки. На фото должны быть видны цифры номера карты, фамилия и имя.","second_way_sbp":"<strong>Второй способ:</strong> загрузите фото лицевой стороны карты на фоне надписи «Покупка криптовалюты на обменном сервисе CoinFiber по сделке 6618adebaaf10». На фото должны быть видны цифры номера карты, фамилия, имя."},"plastic_with_out_name":{"first_way":"<strong>Первый способ:</strong> загрузите фото лицевой стороны карты и документ удостоверяющий личность на фоне сделки. На фото должны быть видны цифры номера карты, фамилия, имя.","second_way":"<strong>Второй способ:</strong> загрузите фото лицевой стороны карты и документ удостоверяющий личность на фоне надписи «Покупка криптовалюты на обменном сервисе CoinFiber по сделке 65b8ba27d8050». На фото должны быть видны цифры номера карты, фамилия, имя.","first_way_sbp":"<strong>Первый способ:</strong> загрузите фото лицевой стороны карты и документ удостоверяющий личность на фоне сделки. На фото должны быть видны цифры номера карты, фамилия, имя.","second_way_sbp":"<strong>Второй способ:</strong> загрузите фото лицевой стороны карты и документ удостоверяющий личность на фоне надписи «Покупка криптовалюты на обменном сервисе CoinFiber по сделке 6618adebaaf10». На фото должны быть видны цифры номера карты, фамилия, имя."},"virtual":{"first_way":"Загрузите фото вашей виртуальной карты в мобильном приложении на фоне документ удостоверяющий личность и надписи «Покупка криптовалюты на обменном сервисе CoinFiber по сделке 65b8ba27d8050». На фото должны быть видны цифры номера карты, фамилия, имя.","first_way_sbp":"Загрузите фото вашей виртуальной карты в мобильном приложении на фоне документ удостоверяющий личность и надписи «Покупка криптовалюты на обменном сервисе CoinFiber по сделке 65b8ba27d8050». На фото должны быть видны цифры номера карты, фамилия, имя."},"plastic_with_name_kzt":{"first_way":"<strong>Первый способ:</strong> загрузите фото лицевой стороны карты на фоне сделки. На фото должны быть видны цифры номера карты, фамилия и имя.","second_way":"<strong>Второй способ:</strong> загрузите селфи с картой и запиской в руке на которой будет надписи «Покупка криптовалюты на обменном сервисе CoinFiber по сделке 65b8ba27d8050». На фото должны быть видны цифры номера карты, фамилия, имя и лицо."},"plastic_with_out_name_kzt":{"first_way":"<strong>Первый способ:</strong> загрузите фото лицевой стороны карты и документ удостоверяющий личность на фоне сделки. На фото должны быть видны цифры номера карты, фамилия, имя.","second_way":"<strong>Второй способ:</strong> загрузите селфи с картой и документом удостоверяющий личность на фоне надписи «Покупка криптовалюты на обменном сервисе CoinFiber по сделке 65b8ba27d8050». На фото должны быть видны цифры номера карты, фамилия, имя и лицо. "},"virtual_kzt":{"first_way":"Загрузите селфи с вашей виртуальной картой в мобильном приложении на фоне документ удостоверяющий личность и надписи «Покупка криптовалюты на обменном сервисе CoinFiber по сделке 65b8ba27d8050». На фото должны быть видны цифры номера карты, фамилия, имя и лицо."}},"fields":{"surname":{"label":"Фамилия","info":"Кириллицей (на русском)","placeholder":"Иванов"},"name":{"label":"Имя","info":"Кириллицей (на русском)","placeholder":"Иван"},"patronymic":{"label":"Отчество","info":"Кириллицей (на русском)","placeholder":"Иванович"},"number":{"label":"Номер карты","info":"Внимательно введите цифры","check":"Номер вашей карты","placeholder":"0000 0000 0000 0000"},"date":{"label":"Срок действия","info":"Срок действия карты","placeholder":"09/27"},"code":{"label":"Код","info":"CVV карты, 3 цифры","placeholder":"123"}},"upload":{"inform":"Вы можете загрузить фотографию вашей карты с компьютера или использовать для этого свой мобильный телефон","upload_computer":"Загрузить фотографию карты","qr":{"title":"Загрузить фото карты с телефона","text":"Для этого отсканируйте данный QR-code или {link} на страницу прикрепления фотографии себе на почту","link":"отправьте ссылку"},"link_sent":"Ссылка отправлена вам на почту"},"update":{"title":"Внимание!","text":"Вам необходимо указать ФИО владельца карты кириллицей (на русском) в связи с изменениями работы робота обработки заявок","action":"Сохранить"},"choose":"Выбрать","in_moderation":"На модерации","under_inspection":"На проверке","selected":"Выбрано","reject":"Карта не прошла проверку","take_photo_instruction":"Сделайте снимок вашей карты на телефоне. Далее фото автоматически будет добавлено в форму прикрепления карты на вашем компьютере","take_photo_button":"Сделать фото","photo_successfully_added_title":"Фото успешно добавлено","photo_successfully_added_text":"Фото отправлено в форму прикрепления карты на вашем компьютере. Пожалуйста, подождите несколько секунд"},"receipt":{"waiting_approve":"Чек загружен. Ожидаем подтверждения","action":"Загрузить чек","title":"Чек оплаты","title_error":"Ошибка при модерации чека","text":"Отпраьте чек, подтверждающий оплату с вашей стороны, в формате jpeg, png или pdf","file":"Прикрепите файл чека","done":"Чек загружен"},"verification":{"stepInformationText1":"Для использования данного направлений обмена требуется верификация карты. Обычно данная процедура занимает не более 5 минут.","stepInformationText2":"Для вашего удобства рекомендуем:<br /> Поставьте галочку сохранить карту при верификации вашей карты<br /> Совершайте последующие обмены без верификации карты и экономьте свое время","enterCardDataButton":"Ввести данные карты"},"step_2":{"text_start":"После того как вы отправите свой платеж, наш робот автоматически увидит вашу транзакцию. Вам не нужно никуда нажимать или писать в поддержку.","wait_bitgo_tr_detected":"<strong>Мы увидели вашу транзакцию</strong><br>Пожалуйста, ожидайте {confirmation}-го подтверждения сети","bitgo_tr_detected":"Мы увидели вашу транзакцию","look_bitgo_tr_confirmed":"Посмотреть здесь","payed_success":"Спасибо за ваш платеж, переходим к следующему шагу","payed_success_status":"Мы получили ваш платеж","wait":"Ожидайте"},"step_3":{"text_start":"После того как мы получим ваш платеж, наша система сразу же переведет вам ваши средства","text_progress":"<strong>Мы получили ваш платеж</strong><br>Пожалуйста ожидайте, в течение нескольких минут вы получите свои средства","text_finish":"Спасибо за обмен, деньги отправлены","result_tr":{"will_translate":"Мы переведем | Мы переводим | Мы перевели","with_memo":"с тегом назначения (МЕМО)","network_name":"Отправка монет осуществляется по сети","to_the_wallet":"на кошелек","by_details":"по реквизитам","by_phone":"по номеру телефона","in_bank":" в банк"},"network_tr":"Отправка монет осуществляется по сети <b>{order.currency_to_network_name}</b>"},"fields_for_transaction":{"with_commission":" с учетом комиссии обменника","with_qr":"QR-код для оплаты"},"transaction_status":"Статус сделки:","user_is_paid":"Я оплатил","go_to_pay":"Оплатить сделку","check_transaction":"Проверяем поступление средств","frozen_title":"Сделка № { id } заморожена","canceled_title":"Сделка № { id } отменена","frozen_details":"Сделка заморожена, так как присланные вами { amount } { isoCode } не прошли проверку безопасности!","automatic_cancellation_crypto":"Сделка автоматически отменилась, так как оплата не поступила в отведённое время. Если вы все-таки оплатили, то, как только ваша транзакция появится в сети, сделка автоматически возобновится.","automatic_cancellation":"Сделка автоматически отменилась, так как оплата не поступила в отведённое время. Если вы оплатили сделку, обратитесь пожалуйста в службу поддержки на нашем сайте, мы её восстановим.","create_new_exchange":"Создать новый обмен","aml_check_fail":"Ваша транзакция не прошла AML проверку. Мы отправили письмо на указанную вами почту при создании сделки. Перейдите по ссылке указанной в письме и укажите кошелек на который мы вернем вам средства.","aml_return_money":"Для возврата средств пришлите на нашу почту <b>{ email }</b> номер сделки и кошелек для возврата средств.","aml_usdt_trc20":"Кошелек должен отличаться от того кошелька с которого средства были отправлены нам. Так как мы не осуществляем отправку средств на кошельки с высоким AML риском.","verification_instructions":"Для подтверждения происхождения средств необходимо предоставить ответы на следующие вопросы:","verification_instructions_2":"Также, необходимо предоставить следующие материалы:","funds_origin_questions":"Для подтверждения происхождения средств мы просим вас в полном объеме ответить на следующие вопросы:","question_platform":"Каков ваш статус занятости?","question_service_for_funds":"Каковы источники вашего дохода?","question_transaction_details":"Через какой источник к вам поступили средства до того, как вы сделали депозит к нам со своего кошелька/платформы? Пожалуйста, предоставьте нам доказательства из истории пополнения и вывода средств с платформы-отправителя на ваш кошелек, откуда вы впоследствии сделали депозит на нашу платформу;","question_contact_person":"Какова была цель получения средств по депозиту на ваш кошелек/платформу? Пожалуйста, предоставьте доказательства вывода средств с платформы-отправителя на ваш кошелек;","question_proof_person":"Если отправителем средств были не вы, а третья сторона, пожалуйста, предоставьте нам доказательства общения/переписки, подтверждающее получение средств/платежа.","document_photo_requirement":"Фото одного из документов (паспорт, ID-карта или водительское удостоверение).","document_with_selfy":"Селфи с этим документом и листом, на котором от руки будет написана сегодняшняя дата и подпись","document_send_by_email":"Для прохождения верификации отправьте данные материалы на нашу почту: <b>{email}</b> ","security_compliance_notice":"Все это необходимо для соблюдения правил безопасности"},"user_profile":{"sidebar":{"history":"История обменов","referal":"Реферальная программа","settings":"Настройки аккаунта","cards":"Мои карты"},"filter":{"timeline":"Период:","actions":"Вид:","accruals":"зачисления","withdrawals":"выплаты","from":"с","to":"по"},"offer":{"title":"Рекламные материалы","text":"Мы предлагаем материалы для размещения на вашем сервисе. Если вы не нашли баннер нужного размера или формата — напишите нам на почту {email}","link":"Файлы для загрузки"},"tabel":{"title":"История","th":{"date":"Дата","id":"ИД сделки","currency_pair":"Валютная пара","get_or_course":"Получите / Курс","status":"Статус","amount":"Сумма","accrual":"Заработок","wallet":"Кошелек","empty":""},"see":"Посмотреть","empty_tabel":"Нет данных в этот период"},"system":{"referals":"рефералы","procent":"ваш процент","action":"Вывести средства","your_amount":"заработано USDT","partners":"Партнерские ссылки","for_teleg":"Для телеграм:","for_sites":"Для сайтов:"},"accrual":{"title":"Вывод средств","label":"На счете","amount":"Сумма","wallet_best":"Кошелек BTC","wallet":"Кошелек USDT TRC-20","action":"Вывести сумму","placeholder":"Минимальная сумма {amount} USDT","info":"Для смены кошелька вам нужно написать письмо с электронного адреса, который вы использовали при регистрации вашего аккаунта, и отправить его на адрес {email}. Обязательно укажите адрес вашего нового кошелька в письме."},"card_status":{"new":"на проверке","reject":"отклонено"},"card_title":"Карты","card_text":"<p>Для использования некоторых направлений обмена требуется верификация вашей банковской карты. Обычно данная процедура занимает не более 5 минут.</p> <p>Вы можете сохранить карту для дальнейших сделок, поставив галочку \'Запомнить карту для последующих сделок\', во время совершения сделки.</p>","card_text_warning":"<p><strong>Уважаемый пользователь, у нас изменились правила верификации карт</strong></p> <p>Добавилось дополнительное поле «ФИО»</p> <p>По картам которые были добавлены до 12.11.2020 требуется прислать дополнительно ФИО. Это можно сделать написав в нашу службу поддержки, с указанием номера карты и ФИО. Если вы не хотите добавлять информацию, то просьба удалить карту.</p>","setting":{"title":"Личные данные","title_change":"Изменение пароля","action":"Изменить пароль","new_password":"Новый пароль","old_password":"Старый пароль"}},"like":{"title":"Наши рекомендации","text":"<p>Современный и удобный сервис CoinFiber позволяет в автоматическом режиме обменивать криптовалюту. Благодаря полной автоматизации все операции осуществляются практически моментально.</p><p>Онлайн-сервис CoinFiber имеет свою команду IT-специалистов, а за процессом обмена криптовалют круглосуточно наблюдают опытные операторы.</p>","exchanges":"Биржи","wallets":"Кошельки","usefulCryptoServices":"Полезные крипто сервисы","aml":"Aml","action":"Перейти на сайт"},"partners":{"monitoring":"Мониторинги:","forum":"Форму:","action":"Стать партнером","title":"Наши партнёры","link":"Стать партнером"},"reviews":{"action":"Читать все отзывы"},"unsubscribe":{"title":"Отписаться от рассылки","action":"Отписаться","success":"Успешно отписались"},"policy":{"agreement":{"title":"Пользовательское соглашение","link":"Правила сервиса"},"aml_agreement":{"title":"AML политика","link":"AML политика"}},"mass_payouts_to_russian_accounts":"Массовые выплаты на реквизиты РФ (СПБ и карты)","draw":{"title":"Разыгрываем 3 приза по 5000 RUB каждую неделю!","action":"Хочу участвовать","title_check":"Проверить билет","action_check":"Проверить","action_repeat":"Проверить еще билет","placeholder":"Номер билета"},"draw_complete_ex":{"title":"Участвуй в розыгрыше 15 000 рублей!","text":"Каждую пятницу обменный сервис CoinFiber проводит розыгрыш денежных призов. По итогам будет выявлено три победителя, которые получат по 5 000 рублей на любую карту банка РФ.","conditionsTitle":"<strong>Условия розыгрыша:</strong>","condition1":"Для участия необходимо сделать обмен на нашем сервисе {exhubLink} и оставить отзыв о нас на {bestchangeLink}. При написании отзыва обязательно указывайте <strong>номер обмена (в специальном поле на Bestchange)</strong>, без него отзыв не учитывается при розыгрыше.","condition2":"1 обмен + 1 отзыв = 1 билет. <strong>Больше билетов — больше шансов на победу!</strong>","condition3":"В недельном розыгрыше участвуют все билеты (обмен+отзыв), которые приобретены с пятницы 00:00 по четверг 24:00","finalText":"Итоги розыгрыша подводят {telegramLink} с помощью сервиса {randomusLink}","CoinFiberLink":"<a href=\'http://CoinFiber\' target=\'_blank\'>CoinFiber</a>","bestchangeLink":"<a href=\'https://www.bestchange.ru/exhub-exchanger.html\' target=\'_blank\'>Bestchange</a>","telegramLink":"<a href=\'https://t.me/coinfiber_com\' target=\'_blank\'>в нашем телеграм-канале</a>","randomusLink":"<a href=\'https://randomus.ru/\' target=\'_blank\'>randomus.ru</a>"},"order_complete":{"title":"Ваш заказ успешно выполнен:","exchange_number":"номер обмена","number_note":"этот номер нужно указывать в отзыве для розыгрыша","transferred":"перевели","recipient_details":"по реквизитам","sending_network":"сеть отправки","check_transaction":"проверьте вашу транзакцию","here":"здесь","transfer_date":"дата перевода","repeat_exchange":"повторить обмен","in":"в","liquidity_provider":"Провайдер ликвидности","base_message":"Сумма отправки отличается от первоначальной суммы ({amount} {currency})","change_reason_floating":"так как по данному направлению не фиксируется курс, а в процессе сделки цена актива на бирже изменилась {exchangeName}","change_reason_confirmation":"так как транзакция не набрала необходимое количество подтверждений сети в выделенные {buyTime} минут для сделки и при этом цена актива на Бирже изменилась {exchangeName}","change_course_message":"В связи с чем курс сделки был изменен с {initialCourse} {currency} на {currentCourse} {currency}","difference_message":", по причине того, что от вас было получено {receivedAmount} {currency} вместо {expectedAmount} {currency}","transaction_link_text":"Посмотреть транзакцию"},"need_review":{"title":"Нам очень важен именно твой отзыв","text":"Уделите пару минут и напишите нам честный отзыв на Exchange Sumo","linkText":"Оставить отзыв","linkHref":"https://exchangesumo.com/exchanger/911/ExHub","action":"Оставить отзыв"},"feedback":{"title":"Мы стараемся для вас","textBeforeLink":"Будем вам благодарны, если","linkText":"пройдете небольшой опрос","linkHref":"https://forms.gle/hzE17HNQ7gXbjwRz6","textAfterLink":"по качеству работы сервиса. Мы стараемся работать лучше для вас!"},"chat":{"title":"Чат по сделке","placeholder":"Введите текст сообщения...","first_message":"Здравствуйте, в этот чат вы можете задать вопрос по вашему заказу. Оператор CoinFiber всегда на связи!","user_name":"Вы","link":"по ссылке"},"cash":{"instruction_link":"Инструкция по обмену","reviews_title":"Отзывы о нас","reviews_more":"Еще больше отзывов о нашем сервисе можете почитать на","exchange":{"cashExchangeCourse":"Курс обмена","fixedRate":"Курс зафиксирован","floatingRate":"Плавающий курс","rateWillBeFixed":"Курс будет зафиксирован в момент получения оплаты."},"order":{"application_number":"Ваша заявка №","contact_online_chat":"Свяжитесь в онлайн чате","consult_specialist":"со специалистом для согласования всех деталей обмена вашего заказа.","issued_wallet":"Выданный кошелек","attention":"Обратите внимание!","try_creating_new_order":"Если что-то пошло не так (не хватило времени или сумма изменилась на 5%), попробуйте создать новую заявку.","exchange_below_minimum":"Для обмена суммы меньше минимальной уточните у менеджера, такие процедуры имеют дополнительную комиссию.","additional_services_available":"У нас имеются дополнительные услуги:","secure_delivery":"Оформление безопасной доставки.","choice_of_banknotes":"Выбор получаемых Вами банкнот.","personal_manager_services":"Услуги личного менеджера в отдельном офисе.","operator_consultation":"По всем вопросам обращайтесь к оператору в чат.","exchange_deadline":"Произвести обмен в кассе возможно строго до 20:30","aml_check":"Вся криптовалюта проходит этап AML проверки. Финальное решение об обмене принимается службой безопасности. В случае их отказа - средства возвращаются в полном объеме.","cash_counter_service":"Воспользуйтесь услугами персонального менеджера с обслуживанием в отдельной кассе.","verify_amount_and_test_transaction":"Необходимо будет сверить сумму наличных с суммой в заявке и провести тестовую транзакцию. После этого направим криптовалюту на Ваш кошелек."}},"change_wallet":{"specifyWallet":"Укажите кошелек для возврата по сделке № {wallet}","needToChangeWallet":"Кошелек для возврата успешно добавлен. Ожидайте возврата средств. Возврат производится 2 раза в день и будет осуществлен в ближайшее к 6:00 или 18:00 часов по МСК.","send":"Отправить","walletFieldError":"Ошибка в поле кошелька","order":"Заказ {id}"},"refund":{"title":"Возврат средств","text":"Вы можете запросить возврат средств за вычетом комиссии 8%","amount":"Сумма к возврату","phone_label":"Номер телефона","phone_discribe":" Укажите номер телефона куда вам перевести ваши средства","card_label":"Номер карты","card__discribe":"Укажите номер карты куда вам перевести ваши средства","action":"Запросить возврат","text_to_request":"Ваш запрос на возврат средств был успешно отправлен. Мы переведём средства в ближайшее время по указанным реквизитам."},"aml_verify":{"title":"Сделка №{order} заморожена","frozen":"Сделка заморожена, так как присланные вами {amout} не прошли проверку безопасности!","to_do":"Для возврата средств вам необходимо прикрепить ниже следующие документы:","document":"Фото одного из документов (паспорт, или водительское удостоверение).","upload_document":"Загрузить фото документа","selfie":"Селфи с этим документом и листом, на котором от руки будет написана фраза - \'Для разблокировки на сайте CoinFiber\' сегодняшняя дата и подпись.","upload_selfie":"Загрузить селфи","security":"Все это необходимо для соблюдения правил безопасности","selfie_is_ready":"Фото селфи загружено","document_is_ready":"Фото документа загружено","document_title_error":"Ошибка при модерации документа","selfie_title_error":"Ошибка при модерации документа","title_error":"Ошибка при модерации","waiting":"Дождитесь окончания проверки"}}'
        );
      },
    },
    r = {};
  function t(a) {
    var o = r[a];
    if (void 0 !== o) return o.exports;
    var n = (r[a] = { exports: {} });
    return e[a].call(n.exports, n, n.exports, t), n.exports;
  }
  (t.m = e),
    (function () {
      var e = [];
      t.O = function (r, a, o, n) {
        if (!a) {
          var i = 1 / 0;
          for (d = 0; d < e.length; d++) {
            (a = e[d][0]), (o = e[d][1]), (n = e[d][2]);
            for (var s = !0, c = 0; c < a.length; c++)
              (!1 & n || i >= n) &&
              Object.keys(t.O).every(function (e) {
                return t.O[e](a[c]);
              })
                ? a.splice(c--, 1)
                : ((s = !1), n < i && (i = n));
            if (s) {
              e.splice(d--, 1);
              var l = o();
              void 0 !== l && (r = l);
            }
          }
          return r;
        }
        n = n || 0;
        for (var d = e.length; d > 0 && e[d - 1][2] > n; d--) e[d] = e[d - 1];
        e[d] = [a, o, n];
      };
    })(),
    (function () {
      t.n = function (e) {
        var r =
          e && e.__esModule
            ? function () {
                return e["default"];
              }
            : function () {
                return e;
              };
        return t.d(r, { a: r }), r;
      };
    })(),
    (function () {
      var e,
        r = Object.getPrototypeOf
          ? function (e) {
              return Object.getPrototypeOf(e);
            }
          : function (e) {
              return e.__proto__;
            };
      t.t = function (a, o) {
        if ((1 & o && (a = this(a)), 8 & o)) return a;
        if ("object" === typeof a && a) {
          if (4 & o && a.__esModule) return a;
          if (16 & o && "function" === typeof a.then) return a;
        }
        var n = Object.create(null);
        t.r(n);
        var i = {};
        e = e || [null, r({}), r([]), r(r)];
        for (
          var s = 2 & o && a;
          "object" == typeof s && !~e.indexOf(s);
          s = r(s)
        )
          Object.getOwnPropertyNames(s).forEach(function (e) {
            i[e] = function () {
              return a[e];
            };
          });
        return (
          (i["default"] = function () {
            return a;
          }),
          t.d(n, i),
          n
        );
      };
    })(),
    (function () {
      t.d = function (e, r) {
        for (var a in r)
          t.o(r, a) &&
            !t.o(e, a) &&
            Object.defineProperty(e, a, { enumerable: !0, get: r[a] });
      };
    })(),
    (function () {
      (t.f = {}),
        (t.e = function (e) {
          return Promise.all(
            Object.keys(t.f).reduce(function (r, a) {
              return t.f[a](e, r), r;
            }, [])
          );
        });
    })(),
    (function () {
      t.u = function (e) {
        return (
          "js/" +
          e +
          "." +
          {
            5: "618d80c9",
            29: "4718bd9f",
            39: "869c2551",
            47: "375c9db1",
            90: "1f5791c6",
            211: "c2f22765",
            223: "97577f77",
            224: "91b6b83c",
            233: "caafb990",
            243: "73e64dda",
            250: "303df4bd",
            275: "b957ac87",
            322: "76e19a43",
            336: "a280a2c1",
            342: "a06fbefa",
            358: "85786536",
            454: "e5a61338",
            459: "47edba22",
            500: "560a0f13",
            518: "f68a6318",
            528: "049002fb",
            537: "d874635f",
            569: "de0994b4",
            610: "80192fb8",
            617: "981d688a",
            622: "82d1eacd",
            673: "beb72ae0",
            706: "70cddb41",
            709: "74b6cb3b",
            770: "c0e008ac",
            784: "0b4520df",
            792: "bd6a0059",
            845: "056b24ca",
            848: "ffc9170b",
            850: "e8d9f25e",
            853: "f8b79214",
            862: "cb16e369",
            872: "8d3659c1",
            882: "9454a51c",
            888: "cdae9571",
            902: "5bcad6f2",
            919: "40c1ef9f",
            965: "f947ea4a",
          }[e] +
          ".js"
        );
      };
    })(),
    (function () {
      t.miniCssF = function (e) {
        return (
          "css/" +
          e +
          "." +
          {
            47: "1eb7faf3",
            211: "253fa153",
            617: "253fa153",
            770: "6d135b7d",
            845: "253fa153",
            853: "253fa153",
            882: "253fa153",
            902: "253fa153",
          }[e] +
          ".css"
        );
      };
    })(),
    (function () {
      t.g = (function () {
        if ("object" === typeof globalThis) return globalThis;
        try {
          return this || new Function("return this")();
        } catch (e) {
          if ("object" === typeof window) return window;
        }
      })();
    })(),
    (function () {
      t.o = function (e, r) {
        return Object.prototype.hasOwnProperty.call(e, r);
      };
    })(),
    (function () {
      var e = {},
        r = "xcode-dev.tech";
      t.l = function (a, o, n, i) {
        if (e[a]) e[a].push(o);
        else {
          var s, c;
          if (void 0 !== n)
            for (
              var l = document.getElementsByTagName("script"), d = 0;
              d < l.length;
              d++
            ) {
              var u = l[d];
              if (
                u.getAttribute("src") == a ||
                u.getAttribute("data-webpack") == r + n
              ) {
                s = u;
                break;
              }
            }
          s ||
            ((c = !0),
            (s = document.createElement("script")),
            (s.charset = "utf-8"),
            (s.timeout = 120),
            t.nc && s.setAttribute("nonce", t.nc),
            s.setAttribute("data-webpack", r + n),
            (s.src = a)),
            (e[a] = [o]);
          var _ = function (r, t) {
              (s.onerror = s.onload = null), clearTimeout(m);
              var o = e[a];
              if (
                (delete e[a],
                s.parentNode && s.parentNode.removeChild(s),
                o &&
                  o.forEach(function (e) {
                    return e(t);
                  }),
                r)
              )
                return r(t);
            },
            m = setTimeout(
              _.bind(null, void 0, { type: "timeout", target: s }),
              12e4
            );
          (s.onerror = _.bind(null, s.onerror)),
            (s.onload = _.bind(null, s.onload)),
            c && document.head.appendChild(s);
        }
      };
    })(),
    (function () {
      t.r = function (e) {
        "undefined" !== typeof Symbol &&
          Symbol.toStringTag &&
          Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }),
          Object.defineProperty(e, "__esModule", { value: !0 });
      };
    })(),
    (function () {
      t.p = "/";
    })(),
    (function () {
      if ("undefined" !== typeof document) {
        var e = function (e, r, t, a, o) {
            var n = document.createElement("link");
            (n.rel = "stylesheet"), (n.type = "text/css");
            var i = function (t) {
              if (((n.onerror = n.onload = null), "load" === t.type)) a();
              else {
                var i = t && ("load" === t.type ? "missing" : t.type),
                  s = (t && t.target && t.target.href) || r,
                  c = new Error(
                    "Loading CSS chunk " + e + " failed.\n(" + s + ")"
                  );
                (c.code = "CSS_CHUNK_LOAD_FAILED"),
                  (c.type = i),
                  (c.request = s),
                  n.parentNode && n.parentNode.removeChild(n),
                  o(c);
              }
            };
            return (
              (n.onerror = n.onload = i),
              (n.href = r),
              t
                ? t.parentNode.insertBefore(n, t.nextSibling)
                : document.head.appendChild(n),
              n
            );
          },
          r = function (e, r) {
            for (
              var t = document.getElementsByTagName("link"), a = 0;
              a < t.length;
              a++
            ) {
              var o = t[a],
                n = o.getAttribute("data-href") || o.getAttribute("href");
              if ("stylesheet" === o.rel && (n === e || n === r)) return o;
            }
            var i = document.getElementsByTagName("style");
            for (a = 0; a < i.length; a++) {
              (o = i[a]), (n = o.getAttribute("data-href"));
              if (n === e || n === r) return o;
            }
          },
          a = function (a) {
            return new Promise(function (o, n) {
              var i = t.miniCssF(a),
                s = t.p + i;
              if (r(i, s)) return o();
              e(a, s, null, o, n);
            });
          },
          o = { 143: 0 };
        t.f.miniCss = function (e, r) {
          var t = {
            47: 1,
            211: 1,
            617: 1,
            770: 1,
            845: 1,
            853: 1,
            882: 1,
            902: 1,
          };
          o[e]
            ? r.push(o[e])
            : 0 !== o[e] &&
              t[e] &&
              r.push(
                (o[e] = a(e).then(
                  function () {
                    o[e] = 0;
                  },
                  function (r) {
                    throw (delete o[e], r);
                  }
                ))
              );
        };
      }
    })(),
    (function () {
      var e = { 143: 0 };
      (t.f.j = function (r, a) {
        var o = t.o(e, r) ? e[r] : void 0;
        if (0 !== o)
          if (o) a.push(o[2]);
          else {
            var n = new Promise(function (t, a) {
              o = e[r] = [t, a];
            });
            a.push((o[2] = n));
            var i = t.p + t.u(r),
              s = new Error(),
              c = function (a) {
                if (t.o(e, r) && ((o = e[r]), 0 !== o && (e[r] = void 0), o)) {
                  var n = a && ("load" === a.type ? "missing" : a.type),
                    i = a && a.target && a.target.src;
                  (s.message =
                    "Loading chunk " + r + " failed.\n(" + n + ": " + i + ")"),
                    (s.name = "ChunkLoadError"),
                    (s.type = n),
                    (s.request = i),
                    o[1](s);
                }
              };
            t.l(i, c, "chunk-" + r, r);
          }
      }),
        (t.O.j = function (r) {
          return 0 === e[r];
        });
      var r = function (r, a) {
          var o,
            n,
            i = a[0],
            s = a[1],
            c = a[2],
            l = 0;
          if (
            i.some(function (r) {
              return 0 !== e[r];
            })
          ) {
            for (o in s) t.o(s, o) && (t.m[o] = s[o]);
            if (c) var d = c(t);
          }
          for (r && r(a); l < i.length; l++)
            (n = i[l]), t.o(e, n) && e[n] && e[n][0](), (e[n] = 0);
          return t.O(d);
        },
        a = (self["webpackChunkexhub_io"] = self["webpackChunkexhub_io"] || []);
      a.forEach(r.bind(null, 0)), (a.push = r.bind(null, a.push.bind(a)));
    })();
  var a = t.O(void 0, [998], function () {
    return t(1336);
  });
  a = t.O(a);
})();
