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
<script>function initFunction(e, t = "us", c = ".js-calculator", a = "1") {
    !function () {
        const {services: t, types: c, types_group: a} = e, l = document.querySelector("#servicesDropdownWrap"),
            n = l.querySelector(".c-3__ul"), o = l.querySelector("select"),
            i = document.querySelector("#searchTypesInput"), r = c, d = t, s = i.closest(".c-1__row"),
            _ = s.querySelector(".c-3__ul"), u = a.map(e => e.title), p = u.map(e => e.replace(/(\W)/g, "")),
            $ = s.querySelector("select");
        let f;
        d.map(e => {
            n.innerHTML += `<div class="c-3__li" data-calc-value="${e.value}">${e.title}</div>`, o.innerHTML += `<option value="${e.value}" ${1 == e.value ? 'selected="selected"' : ""}>${e.title}</option>`
        });
        for (let e of r) if ("other" === e.title.toLowerCase()) {
            f = e.id;
            break
        }
        u.map((e, t) => {
            _.innerHTML += `<div class="c-3__ul__group ${p[t]}"><span class="c-3__ul__group__label">${e}</span></div>`
        }), r.map(e => {
            const t = e.type_group_title.replace(/(\W)/g, "");
            _.querySelector(`.${t}`).innerHTML += `<div class="c-3__li" data-calc-value="${e.value}">${e.title}</div>`, $.innerHTML += `<option value="${e.value}" ${1 == e.value ? 'selected="selected"' : ""}>${e.title}</option>`
        }), _.innerHTML += `<div class="c-3__ul__group not__found hide"><div class="not__found__for exclude"></div><div class="c-3__li exclude" data-calc-value="${f}">Other</div></div>`;
        const v = _.querySelector(".not__found"), g = _.querySelector(".not__found__for"),
            m = _.querySelectorAll(".c-3__li:not(.exclude)"),
            h = [...s.querySelectorAll(".c-3__ul__group:not(.not__found)")], y = [...m];
        i.addEventListener("keyup", function (e) {
            const t = e.target.value.toLowerCase();
            y.forEach(function (e) {
                t.length ? e.innerText.toLowerCase().match(t) ? e.classList.remove("hide") : e.classList.add("hide") : e.classList.remove("hide")
            }), !_.querySelectorAll(".c-3__li:not(.hide):not(.exclude)").length && t.length ? (g.innerHTML = `No data found for “${t}”`, v.classList.remove("hide")) : v.classList.add("hide");
            for (let e = 0; e < h.length; e++) h[e].querySelectorAll(".c-3__li:not(.hide)").length ? h[e].classList.remove("hide") : h[e].classList.add("hide")
        }), document.addEventListener("click", function (e) {
            if ("searchTypesInput" !== e.target.id) {
                i.value = "";
                const e = [..._.querySelectorAll(".hide:not(.not__found)")];
                e.length && e.forEach(e => {
                    e.classList.remove("hide")
                }), v.classList.add("hide")
            }
        })
    }(), "ca" == t && (t = "cd");
    var l = ["tablet", "mobile", "android", "blackberry", "fxos", "windows", "meego", "ios", "ipad", "iphone", "ipod"];
    !function () {
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
    }(), function (e, c) {
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
            l && n && o && i && function a(l, n, o, i, r) {
                const d = function () {
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

                function _(e) {
                    if (e.active_ids) {
                        var t = e.active_ids[Math.round(Math.random() * (e.active_ids.length - 1))];
                        return s("p_id", t, 87600), t
                    }
                }

                var u = function (e) {
                    var t = ("; " + document.cookie).split("; " + e + "=");
                    if (2 == t.length) return t.pop().split(";").shift()
                }("p_id");

                function p(d) {
                    $.ajax({
                        url: "https://external-api.essaypro.com/pricing/calculate/",
                        method: "GET",
                        cache: !0,
                        xhrFields: {withCredentials: !0},
                        error: function (e) {
                            l || a(!0, n, o, i, r)
                        },
                        data: {service: n, product: o, urgency: i, quantity: r, country: t, p_id: l ? _(d) : u || _(d)}
                    }).done(function (t) {
                        t.price && $(e).find(`#calculator_total_${c}`).text((parseInt(t.price) / 100).toFixed())
                    })
                }

                l = !!l || !1, $(".js-calculator__form form").submit(function (e) {
                    s("calc", `order_service=${n}&order_type=${o}&order_deadline=${d}&order_pages=${r}&order_language=${t}&order_level=4`, i)
                }), u && !l ? p(void 0) : $.ajax({
                    url: "https://external-api.essaypro.com/pricing/calculate/get-active-ids/",
                    method: "GET",
                    cache: !0,
                    xhrFields: {withCredentials: !0}
                }).done(function (e) {
                    p(e)
                })
            }(!1, l, n, o, i)
        };
        $(e).find(".js-calculator select").change(function () {
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

function getDirectory() {
    $.ajax({
        url: "https://external-api.essaypro.com/directory/external/",
        method: "GET",
        cache: !0,
        xhrFields: {withCredentials: !0},
        success: function (e) {
            initFunction(e)
        },
        error: function () {
            initFunction(innerDirectory)
        }
    })
}

getDirectory();</script>
<script>!function (e) {
    "function" == typeof define && define.amd ? define(["jquery"], e) : "object" == typeof exports ? e(require("jquery")) : e(window.jQuery || window.Zepto)
}(function (e) {
    var t, n, i, o, r, a, s = "Close", l = "BeforeClose", c = "MarkupParse", d = "Open", u = "Change", p = "mfp",
        f = "." + p, m = "mfp-ready", g = "mfp-removing", h = "mfp-prevent-close", v = function () {
        }, y = !!window.jQuery, C = e(window), w = function (e, n) {
            t.ev.on(p + e + f, n)
        }, b = function (t, n, i, o) {
            var r = document.createElement("div");
            return r.className = "mfp-" + t, i && (r.innerHTML = i), o ? n && n.appendChild(r) : (r = e(r), n && r.appendTo(n)), r
        }, I = function (n, i) {
            t.ev.triggerHandler(p + n, i), t.st.callbacks && (n = n.charAt(0).toLowerCase() + n.slice(1), t.st.callbacks[n] && t.st.callbacks[n].apply(t, e.isArray(i) ? i : [i]))
        }, x = function (n) {
            return n === a && t.currTemplate.closeBtn || (t.currTemplate.closeBtn = e(t.st.closeMarkup.replace("%title%", t.st.tClose)), a = n), t.currTemplate.closeBtn
        }, k = function () {
            e.magnificPopup.instance || ((t = new v).init(), e.magnificPopup.instance = t)
        };
    v.prototype = {
        constructor: v, init: function () {
            var n = navigator.appVersion;
            t.isLowIE = t.isIE8 = document.all && !document.addEventListener, t.isAndroid = /android/gi.test(n), t.isIOS = /iphone|ipad|ipod/gi.test(n), t.supportsTransition = function () {
                var e = document.createElement("p").style, t = ["ms", "O", "Moz", "Webkit"];
                if (void 0 !== e.transition) return !0;
                for (; t.length;) if (t.pop() + "Transition" in e) return !0;
                return !1
            }(), t.probablyMobile = t.isAndroid || t.isIOS || /(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent), i = e(document), t.popupsCache = {}
        }, open: function (n) {
            var o;
            if (!1 === n.isObj) {
                t.items = n.items.toArray(), t.index = 0;
                var a, s = n.items;
                for (o = 0; o < s.length; o++) if ((a = s[o]).parsed && (a = a.el[0]), a === n.el[0]) {
                    t.index = o;
                    break
                }
            } else t.items = e.isArray(n.items) ? n.items : [n.items], t.index = n.index || 0;
            if (!t.isOpen) {
                t.types = [], r = "", n.mainEl && n.mainEl.length ? t.ev = n.mainEl.eq(0) : t.ev = i, n.key ? (t.popupsCache[n.key] || (t.popupsCache[n.key] = {}), t.currTemplate = t.popupsCache[n.key]) : t.currTemplate = {}, t.st = e.extend(!0, {}, e.magnificPopup.defaults, n), t.fixedContentPos = "auto" === t.st.fixedContentPos ? !t.probablyMobile : t.st.fixedContentPos, t.st.modal && (t.st.closeOnContentClick = !1, t.st.closeOnBgClick = !1, t.st.showCloseBtn = !1, t.st.enableEscapeKey = !1), t.bgOverlay || (t.bgOverlay = b("bg").on("click" + f, function () {
                    t.close()
                }), t.wrap = b("wrap").attr("tabindex", -1).on("click" + f, function (e) {
                    t._checkIfClose(e.target) && t.close()
                }), t.container = b("container", t.wrap)), t.contentContainer = b("content"), t.st.preloader && (t.preloader = b("preloader", t.container, t.st.tLoading));
                var l = e.magnificPopup.modules;
                for (o = 0; o < l.length; o++) {
                    var u = l[o];
                    u = u.charAt(0).toUpperCase() + u.slice(1), t["init" + u].call(t)
                }
                I("BeforeOpen"), t.st.showCloseBtn && (t.st.closeBtnInside ? (w(c, function (e, t, n, i) {
                    n.close_replaceWith = x(i.type)
                }), r += " mfp-close-btn-in") : t.wrap.append(x())), t.st.alignTop && (r += " mfp-align-top"), t.fixedContentPos ? t.wrap.css({
                    overflow: t.st.overflowY,
                    overflowX: "hidden",
                    overflowY: t.st.overflowY
                }) : t.wrap.css({
                    top: C.scrollTop(),
                    position: "absolute"
                }), (!1 === t.st.fixedBgPos || "auto" === t.st.fixedBgPos && !t.fixedContentPos) && t.bgOverlay.css({
                    height: i.height(),
                    position: "absolute"
                }), t.st.enableEscapeKey && i.on("keyup" + f, function (e) {
                    27 === e.keyCode && t.close()
                }), C.on("resize" + f, function () {
                    t.updateSize()
                }), t.st.closeOnContentClick || (r += " mfp-auto-cursor"), r && t.wrap.addClass(r);
                var p = t.wH = C.height(), g = {};
                if (t.fixedContentPos && t._hasScrollBar(p)) {
                    var h = t._getScrollbarSize();
                    h && (g.marginRight = h)
                }
                t.fixedContentPos && (t.isIE7 ? e("body, html").css("overflow", "hidden") : g.overflow = "hidden");
                var v = t.st.mainClass;
                return t.isIE7 && (v += " mfp-ie7"), v && t._addClassToMFP(v), t.updateItemHTML(), I("BuildControls"), e("html").css(g), t.bgOverlay.add(t.wrap).prependTo(t.st.prependTo || e(document.body)), t._lastFocusedEl = document.activeElement, setTimeout(function () {
                    t.content ? (t._addClassToMFP(m), t._setFocus()) : t.bgOverlay.addClass(m), i.on("focusin" + f, t._onFocusIn)
                }, 16), t.isOpen = !0, t.updateSize(p), I(d), n
            }
            t.updateItemHTML()
        }, close: function () {
            t.isOpen && (I(l), t.isOpen = !1, t.st.removalDelay && !t.isLowIE && t.supportsTransition ? (t._addClassToMFP(g), setTimeout(function () {
                t._close()
            }, t.st.removalDelay)) : t._close())
        }, _close: function () {
            I(s);
            var n = g + " " + m + " ";
            if (t.bgOverlay.detach(), t.wrap.detach(), t.container.empty(), t.st.mainClass && (n += t.st.mainClass + " "), t._removeClassFromMFP(n), t.fixedContentPos) {
                var o = {marginRight: ""};
                t.isIE7 ? e("body, html").css("overflow", "") : o.overflow = "", e("html").css(o)
            }
            i.off("keyup.mfp focusin" + f), t.ev.off(f), t.wrap.attr("class", "mfp-wrap").removeAttr("style"), t.bgOverlay.attr("class", "mfp-bg"), t.container.attr("class", "mfp-container"), t.st.showCloseBtn && (!t.st.closeBtnInside || !0 === t.currTemplate[t.currItem.type]) && t.currTemplate.closeBtn && t.currTemplate.closeBtn.detach(), t.st.autoFocusLast && t._lastFocusedEl && e(t._lastFocusedEl).focus(), t.currItem = null, t.content = null, t.currTemplate = null, t.prevHeight = 0, I("AfterClose")
        }, updateSize: function (e) {
            if (t.isIOS) {
                var n = document.documentElement.clientWidth / window.innerWidth, i = window.innerHeight * n;
                t.wrap.css("height", i), t.wH = i
            } else t.wH = e || C.height();
            t.fixedContentPos || t.wrap.css("height", t.wH), I("Resize")
        }, updateItemHTML: function () {
            var n = t.items[t.index];
            t.contentContainer.detach(), t.content && t.content.detach(), n.parsed || (n = t.parseEl(t.index));
            var i = n.type;
            if (I("BeforeChange", [t.currItem ? t.currItem.type : "", i]), t.currItem = n, !t.currTemplate[i]) {
                var r = !!t.st[i] && t.st[i].markup;
                I("FirstMarkupParse", r), t.currTemplate[i] = !r || e(r)
            }
            o && o !== n.type && t.container.removeClass("mfp-" + o + "-holder");
            var a = t["get" + i.charAt(0).toUpperCase() + i.slice(1)](n, t.currTemplate[i]);
            t.appendContent(a, i), n.preloaded = !0, I(u, n), o = n.type, t.container.prepend(t.contentContainer), I("AfterChange")
        }, appendContent: function (e, n) {
            t.content = e, e ? t.st.showCloseBtn && t.st.closeBtnInside && !0 === t.currTemplate[n] ? t.content.find(".mfp-close").length || t.content.append(x()) : t.content = e : t.content = "", I("BeforeAppend"), t.container.addClass("mfp-" + n + "-holder"), t.contentContainer.append(t.content)
        }, parseEl: function (n) {
            var i, o = t.items[n];
            if (o.tagName ? o = {el: e(o)} : (i = o.type, o = {data: o, src: o.src}), o.el) {
                for (var r = t.types, a = 0; a < r.length; a++) if (o.el.hasClass("mfp-" + r[a])) {
                    i = r[a];
                    break
                }
                o.src = o.el.attr("data-mfp-src"), o.src || (o.src = o.el.attr("href"))
            }
            return o.type = i || t.st.type || "inline", o.index = n, o.parsed = !0, t.items[n] = o, I("ElementParse", o), t.items[n]
        }, addGroup: function (e, n) {
            var i = function (i) {
                i.mfpEl = this, t._openClick(i, e, n)
            };
            n || (n = {});
            var o = "click.magnificPopup";
            n.mainEl = e, n.items ? (n.isObj = !0, e.off(o).on(o, i)) : (n.isObj = !1, n.delegate ? e.off(o).on(o, n.delegate, i) : (n.items = e, e.off(o).on(o, i)))
        }, _openClick: function (n, i, o) {
            if ((void 0 !== o.midClick ? o.midClick : e.magnificPopup.defaults.midClick) || !(2 === n.which || n.ctrlKey || n.metaKey || n.altKey || n.shiftKey)) {
                var r = void 0 !== o.disableOn ? o.disableOn : e.magnificPopup.defaults.disableOn;
                if (r) if (e.isFunction(r)) {
                    if (!r.call(t)) return !0
                } else if (C.width() < r) return !0;
                n.type && (n.preventDefault(), t.isOpen && n.stopPropagation()), o.el = e(n.mfpEl), o.delegate && (o.items = i.find(o.delegate)), t.open(o)
            }
        }, updateStatus: function (e, i) {
            if (t.preloader) {
                n !== e && t.container.removeClass("mfp-s-" + n), !i && "loading" === e && (i = t.st.tLoading);
                var o = {status: e, text: i};
                I("UpdateStatus", o), e = o.status, i = o.text, t.preloader.html(i), t.preloader.find("a").on("click", function (e) {
                    e.stopImmediatePropagation()
                }), t.container.addClass("mfp-s-" + e), n = e
            }
        }, _checkIfClose: function (n) {
            if (!e(n).hasClass(h)) {
                var i = t.st.closeOnContentClick, o = t.st.closeOnBgClick;
                if (i && o) return !0;
                if (!t.content || e(n).hasClass("mfp-close") || t.preloader && n === t.preloader[0]) return !0;
                if (n === t.content[0] || e.contains(t.content[0], n)) {
                    if (i) return !0
                } else if (o && e.contains(document, n)) return !0;
                return !1
            }
        }, _addClassToMFP: function (e) {
            t.bgOverlay.addClass(e), t.wrap.addClass(e)
        }, _removeClassFromMFP: function (e) {
            this.bgOverlay.removeClass(e), t.wrap.removeClass(e)
        }, _hasScrollBar: function (e) {
            return (t.isIE7 ? i.height() : document.body.scrollHeight) > (e || C.height())
        }, _setFocus: function () {
            (t.st.focus ? t.content.find(t.st.focus).eq(0) : t.wrap).focus()
        }, _onFocusIn: function (n) {
            if (n.target !== t.wrap[0] && !e.contains(t.wrap[0], n.target)) return t._setFocus(), !1
        }, _parseMarkup: function (t, n, i) {
            var o;
            i.data && (n = e.extend(i.data, n)), I(c, [t, n, i]), e.each(n, function (n, i) {
                if (void 0 === i || !1 === i) return !0;
                if ((o = n.split("_")).length > 1) {
                    var r = t.find(f + "-" + o[0]);
                    if (r.length > 0) {
                        var a = o[1];
                        "replaceWith" === a ? r[0] !== i[0] && r.replaceWith(i) : "img" === a ? r.is("img") ? r.attr("src", i) : r.replaceWith(e("<img>").attr("src", i).attr("class", r.attr("class"))) : r.attr(o[1], i)
                    }
                } else t.find(f + "-" + n).html(i)
            })
        }, _getScrollbarSize: function () {
            if (void 0 === t.scrollbarSize) {
                var e = document.createElement("div");
                e.style.cssText = "width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;", document.body.appendChild(e), t.scrollbarSize = e.offsetWidth - e.clientWidth, document.body.removeChild(e)
            }
            return t.scrollbarSize
        }
    }, e.magnificPopup = {
        instance: null,
        proto: v.prototype,
        modules: [],
        open: function (t, n) {
            return k(), (t = t ? e.extend(!0, {}, t) : {}).isObj = !0, t.index = n || 0, this.instance.open(t)
        },
        close: function () {
            return e.magnificPopup.instance && e.magnificPopup.instance.close()
        },
        registerModule: function (t, n) {
            n.options && (e.magnificPopup.defaults[t] = n.options), e.extend(this.proto, n.proto), this.modules.push(t)
        },
        defaults: {
            disableOn: 0,
            key: null,
            midClick: !1,
            mainClass: "",
            preloader: !0,
            focus: "",
            closeOnContentClick: !1,
            closeOnBgClick: !0,
            closeBtnInside: !0,
            showCloseBtn: !0,
            enableEscapeKey: !0,
            modal: !1,
            alignTop: !1,
            removalDelay: 0,
            prependTo: null,
            fixedContentPos: "auto",
            fixedBgPos: "auto",
            overflowY: "auto",
            closeMarkup: '<button title="%title%" type="button" class="mfp-close">&#215;</button>',
            tClose: "Close (Esc)",
            tLoading: "Loading...",
            autoFocusLast: !0
        }
    }, e.fn.magnificPopup = function (n) {
        k();
        var i = e(this);
        if ("string" == typeof n) if ("open" === n) {
            var o, r = y ? i.data("magnificPopup") : i[0].magnificPopup, a = parseInt(arguments[1], 10) || 0;
            r.items ? o = r.items[a] : (o = i, r.delegate && (o = o.find(r.delegate)), o = o.eq(a)), t._openClick({mfpEl: o}, i, r)
        } else t.isOpen && t[n].apply(t, Array.prototype.slice.call(arguments, 1)); else n = e.extend(!0, {}, n), y ? i.data("magnificPopup", n) : i[0].magnificPopup = n, t.addGroup(i, n);
        return i
    };
    var T, _, P, S = "inline", E = function () {
        P && (_.after(P.addClass(T)).detach(), P = null)
    };
    e.magnificPopup.registerModule(S, {
        options: {hiddenClass: "hide", markup: "", tNotFound: "Content not found"},
        proto: {
            initInline: function () {
                t.types.push(S), w(s + "." + S, function () {
                    E()
                })
            }, getInline: function (n, i) {
                if (E(), n.src) {
                    var o = t.st.inline, r = e(n.src);
                    if (r.length) {
                        var a = r[0].parentNode;
                        a && a.tagName && (_ || (T = o.hiddenClass, _ = b(T), T = "mfp-" + T), P = r.after(_).detach().removeClass(T)), t.updateStatus("ready")
                    } else t.updateStatus("error", o.tNotFound), r = e("<div>");
                    return n.inlineElement = r, r
                }
                return t.updateStatus("ready"), t._parseMarkup(i, {}, n), i
            }
        }
    });
    var z, O = "ajax", M = function () {
        z && e(document.body).removeClass(z)
    }, B = function () {
        M(), t.req && t.req.abort()
    };
    e.magnificPopup.registerModule(O, {
        options: {
            settings: null,
            cursor: "mfp-ajax-cur",
            tError: '<a href="%url%">The content</a> could not be loaded.'
        }, proto: {
            initAjax: function () {
                t.types.push(O), z = t.st.ajax.cursor, w(s + "." + O, B), w("BeforeChange." + O, B)
            }, getAjax: function (n) {
                z && e(document.body).addClass(z), t.updateStatus("loading");
                var i = e.extend({
                    url: n.src, success: function (i, o, r) {
                        var a = {data: i, xhr: r};
                        I("ParseAjax", a), t.appendContent(e(a.data), O), n.finished = !0, M(), t._setFocus(), setTimeout(function () {
                            t.wrap.addClass(m)
                        }, 16), t.updateStatus("ready"), I("AjaxContentAdded")
                    }, error: function () {
                        M(), n.finished = n.loadError = !0, t.updateStatus("error", t.st.ajax.tError.replace("%url%", n.src))
                    }
                }, t.st.ajax.settings);
                return t.req = e.ajax(i), ""
            }
        }
    });
    var L, H = function (n) {
        if (n.data && void 0 !== n.data.title) return n.data.title;
        var i = t.st.image.titleSrc;
        if (i) {
            if (e.isFunction(i)) return i.call(t, n);
            if (n.el) return n.el.attr(i) || ""
        }
        return ""
    };
    e.magnificPopup.registerModule("image", {
        options: {
            markup: '<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>',
            cursor: "mfp-zoom-out-cur",
            titleSrc: "title",
            verticalFit: !0,
            tError: '<a href="%url%">The image</a> could not be loaded.'
        }, proto: {
            initImage: function () {
                var n = t.st.image, i = ".image";
                t.types.push("image"), w(d + i, function () {
                    "image" === t.currItem.type && n.cursor && e(document.body).addClass(n.cursor)
                }), w(s + i, function () {
                    n.cursor && e(document.body).removeClass(n.cursor), C.off("resize" + f)
                }), w("Resize" + i, t.resizeImage), t.isLowIE && w("AfterChange", t.resizeImage)
            }, resizeImage: function () {
                var e = t.currItem;
                if (e && e.img && t.st.image.verticalFit) {
                    var n = 0;
                    t.isLowIE && (n = parseInt(e.img.css("padding-top"), 10) + parseInt(e.img.css("padding-bottom"), 10)), e.img.css("max-height", t.wH - n)
                }
            }, _onImageHasSize: function (e) {
                e.img && (e.hasSize = !0, L && clearInterval(L), e.isCheckingImgSize = !1, I("ImageHasSize", e), e.imgHidden && (t.content && t.content.removeClass("mfp-loading"), e.imgHidden = !1))
            }, findImageSize: function (e) {
                var n = 0, i = e.img[0], o = function (r) {
                    L && clearInterval(L), L = setInterval(function () {
                        i.naturalWidth > 0 ? t._onImageHasSize(e) : (n > 200 && clearInterval(L), 3 === ++n ? o(10) : 40 === n ? o(50) : 100 === n && o(500))
                    }, r)
                };
                o(1)
            }, getImage: function (n, i) {
                var o = 0, r = function () {
                    n && (n.img[0].complete ? (n.img.off(".mfploader"), n === t.currItem && (t._onImageHasSize(n), t.updateStatus("ready")), n.hasSize = !0, n.loaded = !0, I("ImageLoadComplete")) : ++o < 200 ? setTimeout(r, 100) : a())
                }, a = function () {
                    n && (n.img.off(".mfploader"), n === t.currItem && (t._onImageHasSize(n), t.updateStatus("error", s.tError.replace("%url%", n.src))), n.hasSize = !0, n.loaded = !0, n.loadError = !0)
                }, s = t.st.image, l = i.find(".mfp-img");
                if (l.length) {
                    var c = document.createElement("img");
                    c.className = "mfp-img", n.el && n.el.find("img").length && (c.alt = n.el.find("img").attr("alt")), n.img = e(c).on("load.mfploader", r).on("error.mfploader", a), c.src = n.src, l.is("img") && (n.img = n.img.clone()), (c = n.img[0]).naturalWidth > 0 ? n.hasSize = !0 : c.width || (n.hasSize = !1)
                }
                return t._parseMarkup(i, {
                    title: H(n),
                    img_replaceWith: n.img
                }, n), t.resizeImage(), n.hasSize ? (L && clearInterval(L), n.loadError ? (i.addClass("mfp-loading"), t.updateStatus("error", s.tError.replace("%url%", n.src))) : (i.removeClass("mfp-loading"), t.updateStatus("ready")), i) : (t.updateStatus("loading"), n.loading = !0, n.hasSize || (n.imgHidden = !0, i.addClass("mfp-loading"), t.findImageSize(n)), i)
            }
        }
    });
    var A;
    e.magnificPopup.registerModule("zoom", {
        options: {
            enabled: !1, easing: "ease-in-out", duration: 300, opener: function (e) {
                return e.is("img") ? e : e.find("img")
            }
        }, proto: {
            initZoom: function () {
                var e, n = t.st.zoom, i = ".zoom";
                if (n.enabled && t.supportsTransition) {
                    var o, r, a = n.duration, c = function (e) {
                        var t = e.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),
                            i = "all " + n.duration / 1e3 + "s " + n.easing, o = {
                                position: "fixed",
                                zIndex: 9999,
                                left: 0,
                                top: 0,
                                "-webkit-backface-visibility": "hidden"
                            }, r = "transition";
                        return o["-webkit-" + r] = o["-moz-" + r] = o["-o-" + r] = o[r] = i, t.css(o), t
                    }, d = function () {
                        t.content.css("visibility", "visible")
                    };
                    w("BuildControls" + i, function () {
                        if (t._allowZoom()) {
                            if (clearTimeout(o), t.content.css("visibility", "hidden"), !(e = t._getItemToZoom())) return void d();
                            (r = c(e)).css(t._getOffset()), t.wrap.append(r), o = setTimeout(function () {
                                r.css(t._getOffset(!0)), o = setTimeout(function () {
                                    d(), setTimeout(function () {
                                        r.remove(), e = r = null, I("ZoomAnimationEnded")
                                    }, 16)
                                }, a)
                            }, 16)
                        }
                    }), w(l + i, function () {
                        if (t._allowZoom()) {
                            if (clearTimeout(o), t.st.removalDelay = a, !e) {
                                if (!(e = t._getItemToZoom())) return;
                                r = c(e)
                            }
                            r.css(t._getOffset(!0)), t.wrap.append(r), t.content.css("visibility", "hidden"), setTimeout(function () {
                                r.css(t._getOffset())
                            }, 16)
                        }
                    }), w(s + i, function () {
                        t._allowZoom() && (d(), r && r.remove(), e = null)
                    })
                }
            }, _allowZoom: function () {
                return "image" === t.currItem.type
            }, _getItemToZoom: function () {
                return !!t.currItem.hasSize && t.currItem.img
            }, _getOffset: function (n) {
                var i, o = (i = n ? t.currItem.img : t.st.zoom.opener(t.currItem.el || t.currItem)).offset(),
                    r = parseInt(i.css("padding-top"), 10), a = parseInt(i.css("padding-bottom"), 10);
                o.top -= e(window).scrollTop() - r;
                var s = {width: i.width(), height: (y ? i.innerHeight() : i[0].offsetHeight) - a - r};
                return void 0 === A && (A = void 0 !== document.createElement("p").style.MozTransform), A ? s["-moz-transform"] = s.transform = "translate(" + o.left + "px," + o.top + "px)" : (s.left = o.left, s.top = o.top), s
            }
        }
    });
    var F = "iframe", j = function (e) {
        if (t.currTemplate[F]) {
            var n = t.currTemplate[F].find("iframe");
            n.length && (e || (n[0].src = "//about:blank"), t.isIE8 && n.css("display", e ? "block" : "none"))
        }
    };
    e.magnificPopup.registerModule(F, {
        options: {
            markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',
            srcAction: "iframe_src",
            patterns: {
                youtube: {index: "youtube.com", id: "v=", src: "//www.youtube.com/embed/%id%?autoplay=1"},
                vimeo: {index: "vimeo.com/", id: "/", src: "//player.vimeo.com/video/%id%?autoplay=1"},
                gmaps: {index: "//maps.google.", src: "%id%&output=embed"}
            }
        }, proto: {
            initIframe: function () {
                t.types.push(F), w("BeforeChange", function (e, t, n) {
                    t !== n && (t === F ? j() : n === F && j(!0))
                }), w(s + "." + F, function () {
                    j()
                })
            }, getIframe: function (n, i) {
                var o = n.src, r = t.st.iframe;
                e.each(r.patterns, function () {
                    if (o.indexOf(this.index) > -1) return this.id && (o = "string" == typeof this.id ? o.substr(o.lastIndexOf(this.id) + this.id.length, o.length) : this.id.call(this, o)), o = this.src.replace("%id%", o), !1
                });
                var a = {};
                return r.srcAction && (a[r.srcAction] = o), t._parseMarkup(i, a, n), t.updateStatus("ready"), i
            }
        }
    });
    var N = function (e) {
        var n = t.items.length;
        return e > n - 1 ? e - n : e < 0 ? n + e : e
    }, W = function (e, t, n) {
        return e.replace(/%curr%/gi, t + 1).replace(/%total%/gi, n)
    };
    e.magnificPopup.registerModule("gallery", {
        options: {
            enabled: !1,
            arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
            preload: [0, 2],
            navigateByImgClick: !0,
            arrows: !0,
            tPrev: "Previous (Left arrow key)",
            tNext: "Next (Right arrow key)",
            tCounter: "%curr% of %total%"
        }, proto: {
            initGallery: function () {
                var n = t.st.gallery, o = ".mfp-gallery";
                if (t.direction = !0, !n || !n.enabled) return !1;
                r += " mfp-gallery", w(d + o, function () {
                    n.navigateByImgClick && t.wrap.on("click" + o, ".mfp-img", function () {
                        if (t.items.length > 1) return t.next(), !1
                    }), i.on("keydown" + o, function (e) {
                        37 === e.keyCode ? t.prev() : 39 === e.keyCode && t.next()
                    })
                }), w("UpdateStatus" + o, function (e, n) {
                    n.text && (n.text = W(n.text, t.currItem.index, t.items.length))
                }), w(c + o, function (e, i, o, r) {
                    var a = t.items.length;
                    o.counter = a > 1 ? W(n.tCounter, r.index, a) : ""
                }), w("BuildControls" + o, function () {
                    if (t.items.length > 1 && n.arrows && !t.arrowLeft) {
                        var i = n.arrowMarkup,
                            o = t.arrowLeft = e(i.replace(/%title%/gi, n.tPrev).replace(/%dir%/gi, "left")).addClass(h),
                            r = t.arrowRight = e(i.replace(/%title%/gi, n.tNext).replace(/%dir%/gi, "right")).addClass(h);
                        o.click(function () {
                            t.prev()
                        }), r.click(function () {
                            t.next()
                        }), t.container.append(o.add(r))
                    }
                }), w(u + o, function () {
                    t._preloadTimeout && clearTimeout(t._preloadTimeout), t._preloadTimeout = setTimeout(function () {
                        t.preloadNearbyImages(), t._preloadTimeout = null
                    }, 16)
                }), w(s + o, function () {
                    i.off(o), t.wrap.off("click" + o), t.arrowRight = t.arrowLeft = null
                })
            }, next: function () {
                t.direction = !0, t.index = N(t.index + 1), t.updateItemHTML()
            }, prev: function () {
                t.direction = !1, t.index = N(t.index - 1), t.updateItemHTML()
            }, goTo: function (e) {
                t.direction = e >= t.index, t.index = e, t.updateItemHTML()
            }, preloadNearbyImages: function () {
                var e, n = t.st.gallery.preload, i = Math.min(n[0], t.items.length), o = Math.min(n[1], t.items.length);
                for (e = 1; e <= (t.direction ? o : i); e++) t._preloadItem(t.index + e);
                for (e = 1; e <= (t.direction ? i : o); e++) t._preloadItem(t.index - e)
            }, _preloadItem: function (n) {
                if (n = N(n), !t.items[n].preloaded) {
                    var i = t.items[n];
                    i.parsed || (i = t.parseEl(n)), I("LazyLoad", i), "image" === i.type && (i.img = e('<img class="mfp-img" />').on("load.mfploader", function () {
                        i.hasSize = !0
                    }).on("error.mfploader", function () {
                        i.hasSize = !0, i.loadError = !0, I("LazyLoadError", i)
                    }).attr("src", i.src)), i.preloaded = !0
                }
            }
        }
    });
    var Z = "retina";
    e.magnificPopup.registerModule(Z, {
        options: {
            replaceSrc: function (e) {
                return e.src.replace(/\.\w+$/, function (e) {
                    return "@2x" + e
                })
            }, ratio: 1
        }, proto: {
            initRetina: function () {
                if (window.devicePixelRatio > 1) {
                    var e = t.st.retina, n = e.ratio;
                    (n = isNaN(n) ? n() : n) > 1 && (w("ImageHasSize." + Z, function (e, t) {
                        t.img.css({"max-width": t.img[0].naturalWidth / n, width: "100%"})
                    }), w("ElementParse." + Z, function (t, i) {
                        i.src = e.replaceSrc(i, n)
                    }))
                }
            }
        }
    }), k()
});</script>
<script>function init(i) {
    $(document).ready(function () {
        try {
            $(".with-popup").magnificPopup({
                type: "image",
                closeOnContentClick: !0,
                closeBtnInside: !1,
                fixedContentPos: !0,
                mainClass: "mfp-no-margins mfp-with-zoom",
                image: {verticalFit: !0},
                zoom: {enabled: !0, duration: 300}
            })
        } catch (i) {
        }
    })
}

init("us");</script>
<script>$(document).ready(function () {
    $(".s-10").find(".show-more").on("click", function (o) {
        $(this).closest(".s-10").toggleClass("full", 1500)
    })
});</script>
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