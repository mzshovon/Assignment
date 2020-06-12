<script>function _extends() {
        return (_extends = Object.assign || function (t) {
            for (var e = 1; e < arguments.length; e++) {
                var n = arguments[e];
                for (var o in n) Object.prototype.hasOwnProperty.call(n, o) && (t[o] = n[o])
            }
            return t
        }).apply(this, arguments)
    }

    function _typeof(t) {
        return (_typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
            return typeof t
        } : function (t) {
            return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
        })(t)
    }

    !function (t, e) {
        "object" === ("undefined" == typeof exports ? "undefined" : _typeof(exports)) && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : t.LazyLoad = e()
    }(this, function () {
        "use strict";
        var t = "undefined" != typeof window,
            e = t && !("onscroll" in window) || "undefined" != typeof navigator && /(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent),
            n = t && "IntersectionObserver" in window, o = t && "classList" in document.createElement("p"), r = {
                elements_selector: "img",
                container: e || t ? document : null,
                threshold: 300,
                thresholds: null,
                data_src: "src",
                data_srcset: "srcset",
                data_sizes: "sizes",
                data_bg: "bg",
                class_loading: "loading",
                class_loaded: "loaded",
                class_error: "error",
                load_delay: 0,
                auto_unobserve: !0,
                callback_enter: null,
                callback_exit: null,
                callback_reveal: null,
                callback_loaded: null,
                callback_error: null,
                callback_finish: null,
                use_native: !1
            }, a = function (t, e) {
                var n, o = new t(e);
                try {
                    n = new CustomEvent("LazyLoad::Initialized", {detail: {instance: o}})
                } catch (t) {
                    (n = document.createEvent("CustomEvent")).initCustomEvent("LazyLoad::Initialized", !1, !1, {instance: o})
                }
                window.dispatchEvent(n)
            }, i = function (t, e) {
                return t.getAttribute("data-" + e)
            }, s = function (t, e, n) {
                var o = "data-" + e;
                null !== n ? t.setAttribute(o, n) : t.removeAttribute(o)
            }, c = function (t) {
                return "true" === i(t, "was-processed")
            }, l = function (t, e) {
                return s(t, "ll-timeout", e)
            }, u = function (t) {
                return i(t, "ll-timeout")
            }, d = function (t, e) {
                t && t(e)
            }, f = function (t, e) {
                t._loadingCount += e, 0 === t._elements.length && 0 === t._loadingCount && d(t._settings.callback_finish)
            }, _ = function (t) {
                for (var e, n = [], o = 0; e = t.children[o]; o += 1) "SOURCE" === e.tagName && n.push(e);
                return n
            }, v = function (t, e, n) {
                n && t.setAttribute(e, n)
            }, g = function (t, e) {
                v(t, "sizes", i(t, e.data_sizes)), v(t, "srcset", i(t, e.data_srcset)), v(t, "src", i(t, e.data_src))
            }, m = {
                IMG: function (t, e) {
                    var n = t.parentNode;
                    n && "PICTURE" === n.tagName && _(n).forEach(function (t) {
                        g(t, e)
                    }), g(t, e)
                }, IFRAME: function (t, e) {
                    v(t, "src", i(t, e.data_src))
                }, VIDEO: function (t, e) {
                    _(t).forEach(function (t) {
                        v(t, "src", i(t, e.data_src))
                    }), v(t, "src", i(t, e.data_src)), t.load()
                }
            }, b = function (t, e) {
                o ? t.classList.add(e) : t.className += (t.className ? " " : "") + e
            }, h = function (t, e, n) {
                t.addEventListener(e, n)
            }, p = function (t, e, n) {
                t.removeEventListener(e, n)
            }, y = function (t, e, n) {
                p(t, "load", e), p(t, "loadeddata", e), p(t, "error", n)
            }, E = function (t, e, n) {
                var r = n._settings, a = e ? r.class_loaded : r.class_error, i = e ? r.callback_loaded : r.callback_error,
                    s = t.target;
                !function (t, e) {
                    o ? t.classList.remove(e) : t.className = t.className.replace(new RegExp("(^|\\s+)" + e + "(\\s+|$)"), " ").replace(/^\s+/, "").replace(/\s+$/, "")
                }(s, r.class_loading), b(s, a), d(i, s), f(n, -1)
            }, w = ["IMG", "IFRAME", "VIDEO"], I = function (t, e) {
                var n = e._observer;
                A(t, e), n && e._settings.auto_unobserve && n.unobserve(t)
            }, k = function (t) {
                var e = u(t);
                e && (clearTimeout(e), l(t, null))
            }, A = function (t, e, n) {
                var o = e._settings;
                !n && c(t) || (w.indexOf(t.tagName) > -1 && (function (t, e) {
                    var n = function n(r) {
                        E(r, !0, e), y(t, n, o)
                    }, o = function o(r) {
                        E(r, !1, e), y(t, n, o)
                    };
                    !function (t, e, n) {
                        h(t, "load", e), h(t, "loadeddata", e), h(t, "error", n)
                    }(t, n, o)
                }(t, e), b(t, o.class_loading)), function (t, e) {
                    var n, o, r = e._settings, a = t.tagName, s = m[a];
                    if (s) return s(t, r), f(e, 1), void (e._elements = (n = e._elements, o = t, n.filter(function (t) {
                        return t !== o
                    })));
                    !function (t, e) {
                        var n = i(t, e.data_src), o = i(t, e.data_bg);
                        n && (t.style.backgroundImage = 'url("'.concat(n, '")')), o && (t.style.backgroundImage = o)
                    }(t, r)
                }(t, e), function (t) {
                    s(t, "was-processed", "true")
                }(t), d(o.callback_reveal, t), d(o.callback_set, t))
            }, L = function (t) {
                return !!n && (t._observer = new IntersectionObserver(function (e) {
                    e.forEach(function (e) {
                        return function (t) {
                            return t.isIntersecting || t.intersectionRatio > 0
                        }(e) ? function (t, e) {
                            var n = e._settings;
                            d(n.callback_enter, t), n.load_delay ? function (t, e) {
                                var n = e._settings.load_delay, o = u(t);
                                o || (o = setTimeout(function () {
                                    I(t, e), k(t)
                                }, n), l(t, o))
                            }(t, e) : I(t, e)
                        }(e.target, t) : function (t, e) {
                            var n = e._settings;
                            d(n.callback_exit, t), n.load_delay && k(t)
                        }(e.target, t)
                    })
                }, {
                    root: (e = t._settings).container === document ? null : e.container,
                    rootMargin: e.thresholds || e.threshold + "px"
                }), !0);
                var e
            }, x = ["IMG", "IFRAME"], z = function (t, e) {
                return function (t) {
                    return t.filter(function (t) {
                        return !c(t)
                    })
                }((n = t || function (t) {
                    return t.container.querySelectorAll(t.elements_selector)
                }(e), Array.prototype.slice.call(n)));
                var n
            }, O = function (t, e) {
                this._settings = function (t) {
                    return _extends({}, r, t)
                }(t), this._loadingCount = 0, L(this), this.update(e)
            };
        return O.prototype = {
            update: function (t) {
                var n, o = this, r = this._settings;
                this._elements = z(t, r), !e && this._observer ? (r.use_native && "loading" in HTMLImageElement.prototype && ((n = this)._elements.forEach(function (t) {
                    -1 !== x.indexOf(t.tagName) && (t.setAttribute("loading", "lazy"), A(t, n))
                }), this._elements = z(t, r)), this._elements.forEach(function (t) {
                    o._observer.observe(t)
                })) : this.loadAll()
            }, destroy: function () {
                var t = this;
                this._observer && (this._elements.forEach(function (e) {
                    t._observer.unobserve(e)
                }), this._observer = null), this._elements = null, this._settings = null
            }, load: function (t, e) {
                A(t, this, e)
            }, loadAll: function () {
                var t = this;
                this._elements.forEach(function (e) {
                    I(e, t)
                })
            }
        }, t && function (t, e) {
            if (e) if (e.length) for (var n, o = 0; n = e[o]; o += 1) a(t, n); else a(t, e)
        }(O, window.lazyLoadOptions), O
    });</script>
<script src="assets/shortcodes/p/p-2/writers.js"></script>
<script>var backend_url = "https://app.essaypro.com/", external_api_url = "https://external-api.essaypro.com/",
        avatar_url = "https://assets.essaypro.com/", writers_limit = parseFloat("20");
    !function () {
        let s = [], i = $("#writers-list"), t = $("#more_writers"), a = $("#writers-menu"),
            n = $("#order-by-attribute-buttons"), r = "All writers", e = "rating", c = 10;

        function l() {
            let l = i.find("li").length;
            s = sorted_writers.sorted_by[e].writers, (s = "All writers" !== r ? s.filter(function (s) {
                return s.subject.find(function (s) {
                    return s.name === r
                })
            }).slice(l, l + writers_limit) : s.slice(l, l + writers_limit)).forEach(function (s) {
                !function (s) {
                    c += 1;
                    var t = `\n     <li class="c-24__li" data-writer-id="${s.id}">\n      <div class="c-24__i">\n        <div class="c-24__wr">\n           \n          <a href="https://essaypro.com/writer/${s.id}.html"  >\n            <span class="c-24__wr-av  avatar--medium"><img src="${avatar_url}/${s.avatarSrc}"   alt="${s.nickname}" class="avatar--medium__image">\n            </span>\n            <span class="c-24__wr-n"  >\n              ${s.nickname}\n              <span class="c-24__wr-s  ${status}"></span>\n            </span>\n          </a>\n          <div class="c-24__wr-d"  >${s.shortDescription}</div>\n        </div>\n        <div class="c-24__st">\n          <div class="c-24__st-li"    >\n            <div class="c-24__st-v"  >${s.stats.finishedOrdersCount}</div>\n            <div class="c-24__st-l">Orders</div>\n          </div>\n          <div class="c-24__st-li">\n            <div class="c-24__st-v">${s.stats.completionsRate}%</div>\n            <div class="c-24__st-l">Success</div>\n          </div>\n          <div class="c-24__st-li  for__stars"    >\n             \n            <div class="c-24__st-v">\n              <span  >${s.stats.ratingMark}</span>\n              <div class="rating-stars"  >\n                <div class="rating-stars__bar"></div>\n                <div class="rating-stars__bar  is--active" style="width: ${20 * s.stats.ratingMark}%"></div>\n              </div>\n            </div>\n            <div class="c-24__st-l">Rating</div>\n          </div>\n        </div>\n      </div>\n      <div class="c-24__ac">\n        <a href="${backend_url}/auth/register?invite_writer=${s.id}" class="button-outline__primary" data-ga-category="writer" data-ga-action="click" data-ga-label="HIRE">\n          <span class="button-text">Hire</span>\n        </a>\n      </div>\n    </div>`;
                    t += (c <= 10 ? `<div class="c-24__ps ps-${c}"></div>` : "") + "\n        </li>\n        \n  ", i.append(t)
                }(s)
            }), s = sorted_writers.sorted_by[e].writers, "All writers" !== r ? s.filter(function (s) {
                return s.subject.find(function (s) {
                    return s.name === r
                })
            }).length <= l + writers_limit && t.hide() : s.length <= l + writers_limit && t.hide(), a.removeClass("disabled"), n.removeClass("disabled"), t.find("button").removeClass("spinner")
        }

        a.find("li").click(function () {
            const s = $(this);
            a.find("li").removeClass("is--active"), s.addClass("is--active"), r = s.data().subject || "All writers", i.empty(), c = 0, t.show(), l()
        }), n.find("button").click(function () {
            const s = $(this);
            n.find("button").removeClass("active"), s.addClass("active"), i.empty(), c = 0, e = s.data().orderBy || "rating", t.show(), l()
        }), t.find("button").click(function () {
            t.find("button").addClass("spinner"), l()
        })
    }();</script>
<script>function initFunctionSecondary(e, t = "us", c = ".js-calculator-secondary", a = "999999") {
        !function () {
            const {services: t, types: c, types_group: a} = e, l = document.querySelector("#servicesDropdownWrapSecondary"),
                n = l.querySelector(".c-3__ul"), o = l.querySelector("select"),
                i = document.querySelector("#searchTypesInputSecondary"), d = c, r = t, s = i.closest(".c-2__row"),
                u = s.querySelector(".c-3__ul"), _ = a.map(e => e.title), p = _.map(e => e.replace(/(\W)/g, "")),
                $ = s.querySelector("select");
            let f;
            r.map(e => {
                n.innerHTML += `<div class="c-3__li" data-calc-value="${e.value}">${e.title}</div>`, o.innerHTML += `<option value="${e.value}" ${1 == e.value ? 'selected="selected"' : ""}>${e.title}</option>`
            });
            for (let e of d) if ("other" === e.title.toLowerCase()) {
                f = e.value;
                break
            }
            _.map((e, t) => {
                u.innerHTML += `<div class="c-3__ul__group ${p[t]}"><span class="c-3__ul__group__label">${e}</span></div>`
            }), d.map(e => {
                const t = e.type_group_title.replace(/(\W)/g, "");
                u.querySelector(`.${t}`).innerHTML += `<div class="c-3__li" data-calc-value="${e.value}">${e.title}</div>`, $.innerHTML += `<option value="${e.value}" ${1 == e.value ? 'selected="selected"' : ""}>${e.title}</option>`
            }), u.innerHTML += `<div class="c-3__ul__group not__found hide"><div class="not__found__for exclude"></div><div class="c-3__li exclude" data-calc-value="${f}">Other</div></div>`;
            const v = u.querySelector(".not__found"), g = u.querySelector(".not__found__for"),
                m = u.querySelectorAll(".c-3__li:not(.exclude)"),
                h = [...s.querySelectorAll(".c-3__ul__group:not(.not__found)")], y = [...m];
            i.addEventListener("keyup", function (e) {
                const t = e.target.value.toLowerCase();
                y.forEach(function (e) {
                    t.length ? e.innerText.toLowerCase().match(t) ? e.classList.remove("hide") : e.classList.add("hide") : e.classList.remove("hide")
                }), !u.querySelectorAll(".c-3__li:not(.hide):not(.exclude)").length && t.length ? (g.innerHTML = `No data found for “${t}”`, v.classList.remove("hide")) : v.classList.add("hide");
                for (let e = 0; e < h.length; e++) h[e].querySelectorAll(".c-3__li:not(.hide)").length ? h[e].classList.remove("hide") : h[e].classList.add("hide")
            }), document.addEventListener("click", function (e) {
                if ("searchTypesInputSecondary" !== e.target.id) {
                    i.value = "";
                    const e = [...u.querySelectorAll(".hide:not(.not__found)")];
                    e.length && e.forEach(e => {
                        e.classList.remove("hide")
                    }), v.classList.add("hide")
                }
            })
        }(), function () {
            const e = $(c), t = document.createDocumentFragment(), l = document.createDocumentFragment(),
                n = e.find(".pages__list"), o = e.find("#calculator_pages_" + a);
            let i = !0;
            e.on("click", function (e) {
                !function () {
                    if (i) {
                        for (let e = 2; e <= 200; e++) {
                            let c = document.createElement("li");
                            c.classList.add("c-3__li"), c.setAttribute("data-calc-value", e), c.innerText = e + " pages", t.append(c);
                            let a = document.createElement("option");
                            a.setAttribute("value", e), a.innerText = e + " pages", l.append(a)
                        }
                        n.append(t), o.append(l), i = !1
                    }
                }()
            })
        }(), "ca" == t && (t = "cd");
        var l = ["tablet", "mobile", "android", "blackberry", "fxos", "windows", "meego", "ios", "ipad", "iphone", "ipod"];
        !function (e, c) {
            var a = !1, n = document.documentElement.classList;
            l.forEach(function (e) {
                n.contains(e) && (a = !0)
            }), $(document).on("click", function (t) {
                const c = t.target;
                if (c.closest(e) && c.classList.contains("c-3__li")) {
                    var a = $(c).text(), l = $(c).attr("data-calc-value");
                    $(c).closest(".dropdown").find(".c-3__selected").html(a), $(c).closest(".dropdown").find(".c-3__selected").attr("data-calc-value", l), o()
                }
            });
            let o = function () {
                a || ($(e).find(`#calculator_service_${c}`).val(parseInt($(e).find(`#calculator_service_selected_${c} .c-3__selected`).attr("data-calc-value"))), $(e).find(`#calculator_type_${c}`).val(parseInt($(e).find(`#calculator_type_selected_${c} .c-3__selected`).attr("data-calc-value"))), $(e).find(`#calculator_deadline_${c}`).val(parseInt($(e).find(`#calculator_deadline_selected_${c} .c-3__selected`).attr("data-calc-value"))), $(e).find(`#calculator_pages_${c}`).val(parseInt($(e).find(`#calculator_pages_selected_${c} .c-3__selected`).attr("data-calc-value"))));
                let l = $(e).find(`#calculator_service_${c} option:selected`).val(),
                    n = $(e).find(`#calculator_type_${c} option:selected`).val(),
                    o = $(e).find(`#calculator_deadline_${c} option:selected`).val(),
                    i = $(e).find(`#calculator_pages_${c} option:selected`).val();
                l && n && o && i && function a(l, n, o, i, d) {
                    const r = function () {
                        let e = new Date;
                        return e.setTime(e.getTime() + 60 * i * 60 * 1e3), e.toISOString()
                    }();

                    function s(e, t, c) {
                        var a = "";
                        if (c) {
                            var l = new Date;
                            l.setTime(l.getTime() + 60 * c * 60 * 1e3), a = "; expires=" + l.toUTCString()
                        }
                        document.cookie = e + "=" + (t || "") + a + ";domain=" + document.domain.split(".")[document.domain.split(".").length - 2] + ".com; path=/"
                    }

                    function u(e) {
                        if (e.active_ids) {
                            var t = e.active_ids[Math.round(Math.random() * (e.active_ids.length - 1))];
                            return s("p_id", t, 87600), t
                        }
                    }

                    $(".js-calculator-secondary__form form").submit(function (e) {
                        s("calc", `order_service=${n}&order_type=${o}&order_deadline=${r}&order_pages=${d}`, i)
                    });
                    var _ = function (e) {
                        var t = ("; " + document.cookie).split("; " + e + "=");
                        if (2 == t.length) return t.pop().split(";").shift()
                    }("p_id");

                    function p(r) {
                        $.ajax({
                            url: "https://external-api.essaypro.com/pricing/calculate/",
                            method: "GET",
                            cache: !0,
                            xhrFields: {withCredentials: !0},
                            error: function (e) {
                                l || a(!0, n, o, i, d)
                            },
                            data: {service: n, product: o, urgency: i, quantity: d, country: t, p_id: l ? u(r) : _ || u(r)}
                        }).done(function (t) {
                            if (t.price) {
                                const a = (parseInt(t.price) / 100 / d).toFixed();
                                $(e).find(".value span").text(`${a}`).end().find(".discount").text(`-${t.discount}%`).end().find(`#calculator_total_${c}`).text((parseInt(t.price) / 100).toFixed())
                            }
                        })
                    }

                    l = !!l || !1, _ && !l ? p(void 0) : $.ajax({
                        url: "https://external-api.essaypro.com/pricing/calculate/get-active-ids/",
                        method: "GET",
                        cache: !0,
                        xhrFields: {withCredentials: !0}
                    }).done(function (e) {
                        p(e)
                    })
                }(!1, l, n, o, i)
            };
            $(e).find("select").change(function () {
                o()
            }), $(e).find(`#calculator_pages_increment_${c}`).click(function () {
                var t = 1, l = 1;
                t = a ? (l = document.getElementById(`calculator_pages_${c}`).selectedIndex + 1) == $(e).find(`select#calculator_pages_${c} option`).length ? 0 : l : (l = document.getElementById(`calculator_pages_${c}`).selectedIndex + 1) == $(e).find(`select#calculator_pages_${c} option`).length ? 1 : l + 1;
                var n = $(`#pages_fields_${c} .dropdown-menu[aria-labelledby="calculator_pages_selected_${c}"] li[data-calc-value="${t}"]`).first();
                $(e).find(`#calculator_pages_selected_${c} .c-3__selected`).html(n.text()), $(e).find(`#calculator_pages_selected_${c} .c-3__selected`).attr("data-calc-value", n.attr("data-calc-value")), $(e).find(`select#calculator_pages_${c} option`).eq(t).prop("selected", !0), o()
            }), $(e).find(`#calculator_pages_decrement_${c}`).click(function () {
                var t = $(e).find(`select#calculator_pages_${c} option`).length, l = 1;
                l = a ? 0 == (t = document.getElementById(`calculator_pages_${c}`).selectedIndex) ? $(e).find(`select#calculator_pages_${c} option`).length - 1 : t - 1 : 1 == (t = document.getElementById(`calculator_pages_${c}`).selectedIndex + 1) ? $(e).find(`select#calculator_pages_${c} option`).length : t - 1;
                var n = $(`#pages_fields_${c} .dropdown-menu[aria-labelledby="calculator_pages_selected_${c}"] li[data-calc-value="${l}"]`).first();
                $(e).find(`#calculator_pages_selected_${c} .c-3__selected`).html(n.text()), $(e).find(`#calculator_pages_selected_${c} .c-3__selected`).attr("data-calc-value", n.attr("data-calc-value")), $(e).find(`select#calculator_pages_${c} option`).eq(l).prop("selected", !0), o()
            }), o()
        }(c, a)
    }

    function getDirectorySecondary() {
        $.ajax({
            url: "https://external-api.essaypro.com/directory/external/",
            method: "GET",
            cache: !0,
            xhrFields: {withCredentials: !0},
            success: function (e) {
                initFunctionSecondary(e)
            },
            error: function () {
                initFunctionSecondary(innerDirectory)
            }
        })
    }

    getDirectorySecondary();</script>
<script>window.intercomSettings = {app_id: "xikmc934"};</script>
<script>!function () {
        var t = window, e = t.Intercom;
        if ("function" == typeof e) e("reattach_activator"), e("update", intercomSettings); else {
            var n = document, a = function () {
                a.c(arguments)
            };

            function c() {
                var t = n.createElement("script");
                t.type = "text/javascript", t.async = !0, t.src = "https://widget.intercom.io/widget/xikmc934";
                var e = n.getElementsByTagName("script")[0];
                e.parentNode.insertBefore(t, e)
            }

            a.q = [], a.c = function (t) {
                a.q.push(t)
            }, t.Intercom = a, t.attachEvent ? t.attachEvent("onload", c) : t.addEventListener("load", c, !1)
        }
    }();</script>
<script>if ("undefined" == typeof jQuery) throw new Error("Bootstrap's JavaScript requires jQuery");

    function downloadJSAtOnload() {
        setTimeout(function () {
            var t = document.createElement("script");
            t.innerHTML = "(function (w, d, s, l, i) {\n        w[l] = w[l] || [];\n        w[l].push({\n            'gtm.start': new Date().getTime(), event: 'gtm.js'\n        });\n        var f = d.getElementsByTagName(s)[0],\n                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';\n        j.async = true;\n        j.src =\n                '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;\n        f.parentNode.insertBefore(j, f);\n    })(window, document, 'script', 'dataLayer', 'GTM-KZ3B2L');", document.body.appendChild(t);
            var e = document.createElement("script");
            e.innerHTML = "$('.h-l').click(function(){window.open($(this).data('link'),\"_self\");return false;});", document.body.appendChild(e)
        }, 300)
    }

    !function (t) {
        "use strict";
        var e = jQuery.fn.jquery.split(" ")[0].split(".");
        if (e[0] < 2 && e[1] < 9 || 1 == e[0] && 9 == e[1] && e[2] < 1 || e[0] > 3) throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4")
    }(), function (t) {
        "use strict";

        function e(e) {
            var n = e.attr("data-target");
            n || (n = (n = e.attr("href")) && /#[A-Za-z]/.test(n) && n.replace(/.*(?=#[^\s]*$)/, ""));
            var a = n && t(n);
            return a && a.length ? a : e.parent()
        }

        function n(n) {
            n && 3 === n.which || (t(a).remove(), t(o).each(function () {
                var a = t(this), o = e(a), i = {relatedTarget: this};
                o.hasClass("open") && (n && "click" == n.type && /input|textarea/i.test(n.target.tagName) && t.contains(o[0], n.target) || (o.trigger(n = t.Event("hide.bs.dropdown", i)), n.isDefaultPrevented() || (a.attr("aria-expanded", "false"), o.removeClass("open").trigger(t.Event("hidden.bs.dropdown", i)))))
            }))
        }

        var a = ".dropdown-backdrop", o = '[data-toggle="dropdown"]', i = function (e) {
            t(e).on("click.bs.dropdown", this.toggle)
        };
        i.VERSION = "3.3.7", i.prototype.toggle = function (a) {
            var o = t(this);
            if (!o.is(".disabled, :disabled")) {
                var i = e(o), s = i.hasClass("open");
                if (n(), !s) {
                    "ontouchstart" in document.documentElement && !i.closest(".navbar-nav").length && t(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(t(this)).on("click", n);
                    var r = {relatedTarget: this};
                    if (i.trigger(a = t.Event("show.bs.dropdown", r)), a.isDefaultPrevented()) return;
                    o.trigger("focus").attr("aria-expanded", "true"), i.toggleClass("open").trigger(t.Event("shown.bs.dropdown", r))
                }
                return !1
            }
        }, i.prototype.keydown = function (n) {
            if (/(38|40|27|32)/.test(n.which) && !/input|textarea/i.test(n.target.tagName)) {
                var a = t(this);
                if (n.preventDefault(), n.stopPropagation(), !a.is(".disabled, :disabled")) {
                    var i = e(a), s = i.hasClass("open");
                    if (!s && 27 != n.which || s && 27 == n.which) return 27 == n.which && i.find(o).trigger("focus"), a.trigger("click");
                    var r = i.find(".dropdown-menu li:not(.disabled):visible a");
                    if (r.length) {
                        var l = r.index(n.target);
                        38 == n.which && l > 0 && l--, 40 == n.which && l < r.length - 1 && l++, ~l || (l = 0), r.eq(l).trigger("focus")
                    }
                }
            }
        };
        var s = t.fn.dropdown;
        t.fn.dropdown = function (e) {
            return this.each(function () {
                var n = t(this), a = n.data("bs.dropdown");
                a || n.data("bs.dropdown", a = new i(this)), "string" == typeof e && a[e].call(n)
            })
        }, t.fn.dropdown.Constructor = i, t.fn.dropdown.noConflict = function () {
            return t.fn.dropdown = s, this
        }, t(document).on("click.bs.dropdown.data-api", n).on("click.bs.dropdown.data-api", ".dropdown form", function (t) {
            t.stopPropagation()
        }).on("click.bs.dropdown.data-api", o, i.prototype.toggle).on("keydown.bs.dropdown.data-api", o, i.prototype.keydown).on("keydown.bs.dropdown.data-api", ".dropdown-menu", i.prototype.keydown)
    }(jQuery), function (t) {
        "use strict";

        function e(e) {
            var n, a = e.attr("data-target") || (n = e.attr("href")) && n.replace(/.*(?=#[^\s]+$)/, "");
            return t(a)
        }

        function n(e) {
            return this.each(function () {
                var n = t(this), o = n.data("bs.collapse"),
                    i = t.extend({}, a.DEFAULTS, n.data(), "object" == typeof e && e);
                !o && i.toggle && /show|hide/.test(e) && (i.toggle = !1), o || n.data("bs.collapse", o = new a(this, i)), "string" == typeof e && o[e]()
            })
        }

        var a = function (e, n) {
            this.$element = t(e), this.options = t.extend({}, a.DEFAULTS, n), this.$trigger = t('[data-toggle="collapse"][href="#' + e.id + '"],[data-toggle="collapse"][data-target="#' + e.id + '"]'), this.transitioning = null, this.options.parent ? this.$parent = this.getParent() : this.addAriaAndCollapsedClass(this.$element, this.$trigger), this.options.toggle && this.toggle()
        };
        a.VERSION = "3.3.7", a.TRANSITION_DURATION = 350, a.DEFAULTS = {toggle: !0}, a.prototype.dimension = function () {
            return this.$element.hasClass("width") ? "width" : "height"
        }, a.prototype.show = function () {
            if (!this.transitioning && !this.$element.hasClass("in")) {
                var e, o = this.$parent && this.$parent.children(".panel").children(".in, .collapsing");
                if (!(o && o.length && (e = o.data("bs.collapse"), e && e.transitioning))) {
                    var i = t.Event("show.bs.collapse");
                    if (this.$element.trigger(i), !i.isDefaultPrevented()) {
                        o && o.length && (n.call(o, "hide"), e || o.data("bs.collapse", null));
                        var s = this.dimension();
                        this.$element.removeClass("collapse").addClass("collapsing")[s](0).attr("aria-expanded", !0), this.$trigger.removeClass("collapsed").attr("aria-expanded", !0), this.transitioning = 1;
                        var r = function () {
                            this.$element.removeClass("collapsing").addClass("collapse in")[s](""), this.transitioning = 0, this.$element.trigger("shown.bs.collapse")
                        };
                        if (!t.support.transition) return r.call(this);
                        var l = t.camelCase(["scroll", s].join("-"));
                        this.$element.one("bsTransitionEnd", t.proxy(r, this)).emulateTransitionEnd(a.TRANSITION_DURATION)[s](this.$element[0][l])
                    }
                }
            }
        }, a.prototype.hide = function () {
            if (!this.transitioning && this.$element.hasClass("in")) {
                var e = t.Event("hide.bs.collapse");
                if (this.$element.trigger(e), !e.isDefaultPrevented()) {
                    var n = this.dimension();
                    this.$element[n](this.$element[n]())[0].offsetHeight, this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded", !1), this.$trigger.addClass("collapsed").attr("aria-expanded", !1), this.transitioning = 1;
                    var o = function () {
                        this.transitioning = 0, this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")
                    };
                    return t.support.transition ? void this.$element[n](0).one("bsTransitionEnd", t.proxy(o, this)).emulateTransitionEnd(a.TRANSITION_DURATION) : o.call(this)
                }
            }
        }, a.prototype.toggle = function () {
            this[this.$element.hasClass("in") ? "hide" : "show"]()
        }, a.prototype.getParent = function () {
            return t(this.options.parent).find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]').each(t.proxy(function (n, a) {
                var o = t(a);
                this.addAriaAndCollapsedClass(e(o), o)
            }, this)).end()
        }, a.prototype.addAriaAndCollapsedClass = function (t, e) {
            var n = t.hasClass("in");
            t.attr("aria-expanded", n), e.toggleClass("collapsed", !n).attr("aria-expanded", n)
        };
        var o = t.fn.collapse;
        t.fn.collapse = n, t.fn.collapse.Constructor = a, t.fn.collapse.noConflict = function () {
            return t.fn.collapse = o, this
        }, t(document).on("click.bs.collapse.data-api", '[data-toggle="collapse"]', function (a) {
            var o = t(this);
            o.attr("data-target") || a.preventDefault();
            var i = e(o), s = i.data("bs.collapse") ? "toggle" : o.data();
            n.call(i, s)
        })
    }(jQuery), $(document).ready(function () {
        new LazyLoad({elements_selector: ".lazy"});
        var t = $("#servicesDropdownLink"), e = $("#aboutUsDropdownLink"), n = $("#langDropdownLink");

        function a() {
            $("body").removeClass("m-nav--active"), $(".m-nav__button").removeClass("active"), $(".m-nav__main").removeClass("active"), $(".m-nav__user").removeClass("active")
        }

        $(".m-nav__parent").on("click touch", function (t) {
            let e = $(this).attr("href").slice(1);
            $("#" + e).addClass("active"), t.preventDefault()
        }), $(".m-nav__back").on("click touch", function (t) {
            $(this).attr("href").slice(1);
            $(this).parent().removeClass("active"), t.preventDefault()
        }), setInterval(function () {
            $(".m-nav__main").hasClass("active") || $(".m-nav__sub-ul").removeClass("active")
        }, 300), t.on("click", function (t) {
            t.preventDefault(), $(this).children().toggleClass("is--show"), $(this).next().toggleClass("is--show")
        }), $(document).on("click", function (e) {
            $(e.target).closest(t).length || (t.children().removeClass("is--show"), t.next().removeClass("is--show"))
        }), $(document).on("click", function (t) {
            $(t.target).closest(e).length || (e.children().removeClass("is--show"), e.next().removeClass("is--show"))
        }), e.on("click", function (t) {
            t.preventDefault(), $(this).children().toggleClass("is--show"), $(this).next().toggleClass("is--show")
        }), $(document).on("click", function (t) {
            $(t.target).closest(n).length || n.next().removeClass("is--show")
        }), n.on("click", function (t) {
            t.preventDefault(), $(this).next().toggleClass("is--show")
        }), $("#mNavMain").on("click tap", function () {
            $(this).hasClass("active") ? (a(), $(this).removeClass("active")) : (a(), $("body").addClass("m-nav--active"), $(".m-nav__main").addClass("active"), $(this).addClass("active"))
        }), $("#mNavUser").on("click tap", function () {
            $(this).hasClass("active") ? (a(), $(this).removeClass("active")) : (a(), $("body").addClass("m-nav--active"), $(".m-nav__user").addClass("active"), $(this).addClass("active"))
        }), $(".m-nav__a, .m-nav__overlay").on("click tap", function () {
            a()
        }), $("#mask_info, #line_1, .s-41__ul-1 > li:nth-child(1)").hover(function () {
            $("#info, .sub-line-1").css({opacity: 1})
        }, function () {
            $("#info, .sub-line-1").css({opacity: .3})
        }), $("#mask_orders, #line_2, .s-41__ul-1 > li:nth-child(2)").hover(function () {
            $("#orders, .sub-line-2").css({opacity: 1})
        }, function () {
            $("#orders, .sub-line-2").css({opacity: .3})
        }), $("#mask_rating, #line_3, .s-41__ul-2 > li:nth-child(1)").hover(function () {
            $("#rating, .sub-line-3").css({opacity: 1})
        }, function () {
            $("#rating, .sub-line-3").css({opacity: .3})
        }), $("#mask_reviews, #line_4, .s-41__ul-2 > li:nth-child(2)").hover(function () {
            $("#reviews, .sub-line-4").css({opacity: 1})
        }, function () {
            $("#reviews, .sub-line-4").css({opacity: .3})
        }), $(".template__wrap-description").on("click", function () {
            $(this).toggleClass("full")
        }), function () {
            const t = window.location.href;
            if (/promocode=/i.test(t)) {
                document.cookie;
                const e = t.match(/promocode=[^&]*/gi)[0].slice(10), n = new Date;
                n.setDate(n.getDate() + 7);
                const a = n.toUTCString(), o = document.domain.split(".")[document.domain.split(".").length - 2] + ".com";
                document.cookie = `promo_code=${e}; expires=${a}; domain=${o}; path=/`
            }
        }()
    }), $(document).on("DOMContentLoaded", function () {
        !function () {
            if (!localStorage.getItem("privacy_policy_accepted")) {
                const t = $("footer"),
                    e = $('<div><div class="footer__banner__inner"><p class="footer__banner__content">This site uses cookies to ensure we give you the best experience on our website. Please press the Accept button to agree to our use of cookies to collect data.</p><button id="privacyPolicyAccept" class="footer__banner__confirm">Accept</button></div></div>');
                e.attr("id", "privacyPolicy").addClass("footer__banner"), t.append(e);
                const n = e.find("#privacyPolicyAccept");
                setTimeout(function () {
                    t.addClass("privacyPolicyModal")
                }, 100), n.click(function (e) {
                    localStorage.setItem("privacy_policy_accepted", !0), t.removeClass("privacyPolicyModal")
                })
            }
        }();
        const t = navigator.onLine;
        !function () {
            if (!t) {
                let t;
                const e = document.createElement("div");
                e.classList.add("reload__wrap"), e.innerHTML = '<p class="reload__content">Your computer seems to be offline. We\'ll keep trying to reconnect.</p>', document.body.appendChild(e);
                let n = setInterval(function () {
                    (t = navigator.onLine) && (document.location.reload(!0), clearInterval(n))
                }, 1e3);
                $("body").click(function (e) {
                    $(e.target).hasClass("reload__btn") && t && document.location.reload(!0)
                })
            }
        }()
    }), window.addEventListener ? window.addEventListener("load", downloadJSAtOnload, !1) : window.attachEvent ? window.attachEvent("onload", downloadJSAtOnload) : window.onload = downloadJSAtOnload;
    var google_tag_params = {
        edu_pid: "REPLACE_WITH_VALUE",
        edu_plocid: "REPLACE_WITH_VALUE",
        edu_pagetype: "REPLACE_WITH_VALUE",
        edu_totalvalue: "REPLACE_WITH_VALUE"
    }, google_conversion_id = 878019161, google_custom_params = window.google_tag_params, google_remarketing_only = !0;

    function gtag() {
        dataLayer.push(arguments)
    }

    window.dataLayer = window.dataLayer || [], gtag("js", new Date), gtag("config", "AW-717540868"), gtag("config", "UA-49654592-1", {optimize_id: "GTM-N8WHG9B"});</script>
<script src="https://www.googletagmanager.com/gtag/js?id=AW-717540868" async=""></script>
<script src="../www.googleadservices.com/pagead/f.txt" async=""></script>
<style>.footer {
        position: relative;
        background-color: #242a35;
        border-top: 1px solid #3a3f4a;
        color: #a1a9b3;
        font-size: 14px;
        font-weight: 300;
        line-height: 16px
    }

    @media (max-width: 767px) {
        .footer {
            padding: 24px 16px 20px
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .footer {
            padding: 48px 0 32px
        }
    }

    @media (min-width: 1024px) {
        .footer {
            padding: 32px 0
        }
    }

    @media (max-width: 767px) {
        .footer.privacyPolicyModal .footer__w {
            margin-bottom: 133px
        }
    }

    @media (min-width: 768px) {
        .footer.privacyPolicyModal .footer__w {
            margin-bottom: 51px
        }
    }

    .footer.privacyPolicyModal .footer__banner {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0)
    }

    .footer__banner {
        left: 0;
        bottom: 0;
        width: 100%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        position: fixed;
        min-height: 60px;
        padding: 0 16px;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-transform: translateY(100%);
        -ms-transform: translateY(100%);
        transform: translateY(100%);
        background-color: #1b1e26;
        -webkit-transition: -webkit-transform .3s ease-in-out;
        transition: -webkit-transform .3s ease-in-out;
        -o-transition: transform .3s ease-in-out;
        transition: transform .3s ease-in-out;
        transition: transform .3s ease-in-out, -webkit-transform .3s ease-in-out;
        z-index: 9999
    }

    .footer__banner__inner {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        max-width: 1366px;
        margin: 0 auto;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    @media (max-width: 767px) {
        .footer__banner__inner {
            display: block;
            padding-top: 16px;
            padding-bottom: 16px;
            text-align: center
        }
    }

    .footer__banner__content {
        -webkit-box-flex: 1;
        -webkit-flex: 1;
        -ms-flex: 1;
        flex: 1;
        margin-right: 16px;
        text-align: center
    }

    @media (max-width: 767px) {
        .footer__banner__content {
            margin-bottom: 16px
        }
    }

    .footer__banner__confirm {
        display: inline-block;
        padding: 0 20px;
        border: 0;
        color: #fff;
        font-size: 16px;
        line-height: 34px;
        -webkit-border-radius: 17px;
        border-radius: 17px;
        text-align: center;
        background-color: #e89b00;
        -webkit-transition: background .3s ease, border .3s ease, color .3s ease;
        -o-transition: background .3s ease, border .3s ease, color .3s ease;
        transition: background .3s ease, border .3s ease, color .3s ease;
        cursor: pointer
    }

    .footer__banner__confirm:hover {
        background-color: #fa0
    }

    @media (max-width: 767px) {
        .footer__w {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }
    }

    .footer__g {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        margin-top: 32px
    }

    @media (min-width: 1024px) {
        .footer__g {
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            height: 44px
        }
    }

    @media (max-width: 767px) {
        .footer__g {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }
    }

    @media (max-width: 1160px) {
        .footer__g {
            height: auto
        }
    }

    .footer__logo {
        margin-right: 10px
    }

    @media (max-width: 767px) {
        .footer__logo {
            margin-bottom: 20px
        }
    }

    .footer__n {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }

    @media (max-width: 767px) {
        .footer__n {
            margin-bottom: 0;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center
        }
    }

    .footer__n-a {
        color: #a1a9b3;
        line-height: 18px;
        white-space: nowrap
    }

    .footer__n-a:hover {
        color: #d3d8de
    }

    .footer__n-a:not(:last-child) {
        margin-right: 16px;
        padding-right: 16px;
        border-right: 1px solid #5c6573
    }

    @media (max-width: 767px) {
        .footer__n-a:not(:last-child) {
            margin-right: 10px;
            padding-right: 10px
        }
    }

    @media (max-width: 767px) {
        .footer__n-a {
            margin-bottom: 16px
        }
    }

    .footer__inner {
        margin-top: 32px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    @media (max-width: 767px) {
        .footer__inner {
            margin-top: 22px
        }
    }

    @media (max-width: 540px) {
        .footer__inner {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }
    }

    .footer__services {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-flow: row wrap;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap
    }

    @media (max-width: 767px) {
        .footer__services {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            -webkit-flex-flow: wrap;
            -ms-flex-flow: wrap;
            flex-flow: wrap
        }
    }

    .footer__service-item {
        width: 20%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-bottom: 20px
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .footer__service-item {
            width: 33%
        }
    }

    @media (max-width: 767px) {
        .footer__service-item {
            width: 50%
        }
    }

    .footer__service-link {
        color: #a1a9b3;
        line-height: 20px
    }

    .footer__p-l {
        margin-top: 32px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    @media (max-width: 767px) {
        .footer__p-l {
            margin-top: 22px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }
    }

    .footer__payments {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .footer__p {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .footer__bottom {
        margin-top: 22px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    @media (min-width: 1024px) {
        .footer__bottom {
            margin-top: 32px;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between
        }
    }

    @media (max-width: 1160px) {
        .footer__bottom {
            -webkit-justify-content: space-around;
            -ms-flex-pack: distribute;
            justify-content: space-around
        }
    }

    @media (max-width: 767px) {
        .footer__bottom {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }
    }

    .footer__app {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start
    }

    .footer__app__btn {
        height: 50px;
        padding-left: 15px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        color: #fff;
        font-weight: 700;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        background-color: #000;
        text-decoration: none;
        cursor: pointer
    }

    .footer__app__btn span:first-child {
        width: 100%;
        display: inline-block;
        font-size: 10px;
        line-height: 1
    }

    .footer__app__btn.app-store {
        width: 138px
    }

    .footer__app__btn.google-play {
        width: 155px
    }

    .footer__app__btn.google-play span:first-child {
        text-transform: uppercase
    }

    @media (min-width: 541px) and (max-width: 767px) {
        .footer__app__btn:first-child {
            margin-right: 12px
        }
    }

    .footer__app__logo {
        margin-right: 8px
    }

    .footer__l {
        position: relative
    }

    @media (min-width: 1024px) {
        .footer__l {
            display: block
        }
    }

    @media (max-width: 767px) {
        .footer__l {
            -webkit-box-ordinal-group: 0;
            -webkit-order: -1;
            -ms-flex-order: -1;
            order: -1;
            margin-bottom: 20px;
            margin-top: 6px
        }
    }

    .footer__s {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }

    @media (max-width: 540px) {
        .footer__s {
            margin-top: 22px
        }
    }

    .footer__statement {
        text-align: center
    }

    @media (max-width: 767px) {
        .footer__statement {
            -webkit-box-ordinal-group: 0;
            -webkit-order: -1;
            -ms-flex-order: -1;
            order: -1;
            margin-bottom: 22px !important
        }
    }

    .footer__c {
        display: inline-block;
        text-align: center
    }

    .a-1 {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        position: relative;
        width: 40px;
        height: 40px;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        color: #fff;
        font-weight: 500;
        white-space: nowrap
    }

    @media (max-width: 767px) {
        .a-1:not(:last-child) {
            margin-right: 10px
        }
    }

    @media (min-width: 768px) {
        .a-1:not(:last-child) {
            margin-right: 20px
        }
    }

    .a-1.fb {
        background: #323845 url(assets/social/facebook__8x18b2ae.svg?v1727f34e2f0) no-repeat 50%;
        -webkit-background-size: 18% 18%;
        background-size: 18%
    }

    .a-1.fb:hover {
        background-color: #406ac0
    }

    .a-1.tw {
        background: #323845 url(assets/social/twitter__15x12030b.svg?v1727f34e2f8) no-repeat 50%;
        -webkit-background-size: 37% 37%;
        background-size: 37%
    }

    .a-1.tw:hover {
        background-color: #2ba7ed
    }

    .a-1.yt {
        background: #323845 url(assets/social/icon__youtube__20x14__2x5ba9.png?v1727f34e2f4) no-repeat 50%;
        -webkit-background-size: 47% 47%;
        background-size: 47%
    }

    .a-1.yt:hover {
        background-color: #ef5d4b
    }

    .a-1.in {
        background: #323845 url(assets/social/instagram__18x18__2x030b.svg?v1727f34e2f8) no-repeat 50%;
        -webkit-background-size: 40% 40%;
        background-size: 40%
    }

    .a-1.in:hover {
        background-color: #cd38ed
    }

    .a-1.gp {
        background: #323845 url(assets/social/google_note__hover__39x225ba9.svg?v1727f34e2f4) no-repeat 50%;
        -webkit-background-size: 22% 22%;
        background-size: 22%
    }

    .a-1.gp:hover {
        background-color: #ef5d4b
    }

    .pm {
        display: block
    }

    .pm:not(:last-child) {
        margin-right: 20px
    }

    .pm.visa {
        width: 40px;
        height: 13px
    }

    .pm.ae {
        width: 57px;
        height: 19px
    }

    .pm.mc {
        width: 45px;
        height: 27px
    }

    .pm.paypal {
        width: 60px;
        height: 17px
    }

    .lang-button {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        position: relative;
        min-width: 150px;
        height: 44px;
        padding: 0 16px;
        background-color: #313845;
        -webkit-border-radius: 22px;
        border-radius: 22px;
        cursor: pointer
    }

    .lang-button span {
        text-transform: capitalize
    }

    .lang-button:after {
        display: block;
        content: '';
        width: 12px;
        height: 7px;
        margin-left: 5px;
        background: url(assets/nav/arrow_down13b0.svg?v1727f34de58) no-repeat 50% 50%;
        -webkit-background-size: 12px 7px;
        background-size: 12px 7px
    }

    .lang-button__t {
        color: #fff;
        font-size: 14px;
        font-weight: 300;
        white-space: nowrap
    }

    .lang-button__t > i {
        margin-right: 10px
    }

    .lang-button:hover {
        background-color: #424b59
    }

    .lang-ul {
        display: none;
        position: absolute;
        bottom: 45px;
        left: 0;
        z-index: 99;
        list-style: none outside none;
        margin: 0;
        padding: 0;
        -webkit-border-radius: 3px;
        border-radius: 3px
    }

    .lang-ul span {
        text-transform: capitalize
    }

    .lang-ul.is--show {
        display: block
    }

    .lang-li:first-child .lang-a {
        -webkit-border-radius: 3px 3px 0 0;
        border-radius: 3px 3px 0 0
    }

    .lang-li:last-child .lang-a {
        -webkit-border-radius: 0 0 3px 3px;
        border-radius: 0 0 3px 3px
    }

    .lang-li:not(:last-child) {
        border-bottom: 1px solid #d9d9d9
    }

    .lang-a {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        min-width: 170px;
        height: 44px;
        padding: 0 16px;
        background-color: #fcfcfc;
        color: #424b59
    }

    .lang-a:hover {
        color: #6d768d
    }

    .lang-a > i {
        margin-right: 10px
    }

    .button-flag {
        display: inline-block;
        vertical-align: middle;
        width: 20px;
        height: 20px;
        background-position: 50% 50%;
        background-repeat: no-repeat;
        -webkit-background-size: 20px 10px;
        background-size: 20px 10px
    }

    .button-flag-gb {
        background-image: url(assets/lang/ukc2a6.svg?v1727f34dcfc)
    }

    .button-flag-au {
        background-image: url(assets/lang/aub9a7.svg?v1727f34dcf8)
    }

    .button-flag-us {
        background-image: url(assets/lang/usc141.svg?v1727f34dd00)
    }

    .button-flag-us.button-flag {
        width: 16px;
        height: 16px;
        -webkit-background-size: 16px 16px;
        background-size: 16px 16px
    }

    .button-flag-ie {
        background-image: url(assets/lang/iec2a6.svg?v1727f34dcfc)
    }

    .button-flag-nz {
        background-image: url(assets/lang/nzc2a6.svg?v1727f34dcfc)
    }

    .button-flag-ca {
        background-image: url(assets/lang/cac2a6.svg?v1727f34dcfc)
    }

    .button-flag-ae {
        background-image: url(assets/lang/uaec2a6.svg?v1727f34dcfc)
    }</style>
