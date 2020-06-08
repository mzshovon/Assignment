
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
<script>function initFunctionLanding(e, t = "us", c = ".js-calculator-landing", a = "1") {
        !function () {
            const {services: t, types: c, types_group: a} = e, l = document.querySelector("#servicesDropdownWrapLanding"),
                n = l.querySelector(".c-9__ul"), i = l.querySelector("select"),
                o = document.querySelector("#searchTypesInput"), d = c, r = t, s = o.closest(".c-7__row"),
                u = s.querySelector(".c-9__ul"), _ = a.map(e => e.title), p = _.map(e => e.replace(/(\W)/g, "")),
                $ = s.querySelector("select");
            let f;
            r.map(e => {
                n.innerHTML += `<div class="c-9__li" data-calc-value="${e.value}">${e.title}</div>`, i.innerHTML += `<option value="${e.value}" ${1 == e.value ? 'selected="selected"' : ""}>${e.title}</option>`
            });
            for (let e of d) if ("other" === e.title.toLowerCase()) {
                f = e.id;
                break
            }
            _.map((e, t) => {
                u.innerHTML += `<div class="c-9__ul__group ${p[t]}"><span class="c-9__ul__group__label">${e}</span></div>`
            }), d.map(e => {
                const t = e.type_group_title.replace(/(\W)/g, "");
                u.querySelector(`.${t}`).innerHTML += `<div class="c-9__li" data-calc-value="${e.value}">${e.title}</div>`, $.innerHTML += `<option value="${e.value}" ${1 == e.value ? 'selected="selected"' : ""}>${e.title}</option>`
            }), u.innerHTML += `<div class="c-9__ul__group not__found hide"><div class="not__found__for exclude"></div><div class="c-9__li exclude" data-calc-value="${f}">Other</div></div>`;
            const g = u.querySelector(".not__found"), v = u.querySelector(".not__found__for"),
                m = u.querySelectorAll(".c-9__li:not(.exclude)"),
                h = [...s.querySelectorAll(".c-9__ul__group:not(.not__found)")], y = [...m];
            o.addEventListener("keyup", function (e) {
                const t = e.target.value.toLowerCase();
                y.forEach(function (e) {
                    t.length ? e.innerText.toLowerCase().match(t) ? e.classList.remove("hide") : e.classList.add("hide") : e.classList.remove("hide")
                }), !u.querySelectorAll(".c-9__li:not(.hide):not(.exclude)").length && t.length ? (v.innerHTML = `No data found for “${t}”`, g.classList.remove("hide")) : g.classList.add("hide");
                for (let e = 0; e < h.length; e++) h[e].querySelectorAll(".c-9__li:not(.hide)").length ? h[e].classList.remove("hide") : h[e].classList.add("hide")
            }), document.addEventListener("click", function (e) {
                if ("searchTypesInput" !== e.target.id) {
                    o.value = "";
                    const e = [...u.querySelectorAll(".hide:not(.not__found)")];
                    e.length && e.forEach(e => {
                        e.classList.remove("hide")
                    }), g.classList.add("hide")
                }
            })
        }(), function () {
            const e = $(c), t = document.createDocumentFragment(), l = document.createDocumentFragment(),
                n = e.find(".pages__list"), i = e.find("#calculator_pages_" + a);
            let o = !0;
            e.on("click", function (e) {
                !function () {
                    if (o) {
                        for (let e = 2; e <= 200; e++) {
                            let c = document.createElement("li");
                            c.classList.add("c-9__li"), c.setAttribute("data-calc-value", e), c.innerText = e + " pages", t.append(c);
                            let a = document.createElement("option");
                            a.setAttribute("value", e), a.innerText = e + " pages", l.append(a)
                        }
                        n.append(t), i.append(l), o = !1
                    }
                }()
            })
        }(), "ca" == t && (t = "cd");
        var l = ["tablet", "mobile", "android", "blackberry", "fxos", "windows", "meego", "ios", "ipad", "iphone", "ipod"];
        !function (e, c) {
            let a = !1, n = document.documentElement.classList;
            l.forEach(function (e) {
                n.contains(e) && (a = !0)
            }), $(document).on("click", function (t) {
                const c = t.target;
                if (c.closest(e) && c.classList.contains("c-9__li")) {
                    var a = $(c).text(), l = $(c).attr("data-calc-value");
                    $(c).closest(".dropdown").find(".c-9__selected").html(a), $(c).closest(".dropdown").find(".c-9__selected").attr("data-calc-value", l), i()
                }
            });
            let i = function () {
                a || ($(e).find(`#calculator_service_${c}`).val(parseInt($(e).find(`#calculator_service_selected_${c} .c-9__selected`).attr("data-calc-value"))), $(e).find(`#calculator_type_${c}`).val(parseInt($(e).find(`#calculator_type_selected_${c} .c-9__selected`).attr("data-calc-value"))), $(e).find(`#calculator_deadline_${c}`).val(parseInt($(e).find(`#calculator_deadline_selected_${c} .c-9__selected`).attr("data-calc-value"))), $(e).find(`#calculator_pages_${c}`).val(parseInt($(e).find(`#calculator_pages_selected_${c} .c-9__selected`).attr("data-calc-value"))));
                let l = $(e).find(`#calculator_service_${c} option:selected`).val(),
                    n = $(e).find(`#calculator_type_${c} option:selected`).val(),
                    i = $(e).find(`#calculator_deadline_${c} option:selected`).val(),
                    o = $(e).find(`#calculator_pages_${c} option:selected`).val();
                l && n && i && o && function a(l, n, i, o, d) {
                    const r = function () {
                        let e = new Date;
                        return e.setTime(e.getTime() + 60 * o * 60 * 1e3), e.toISOString()
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

                    $(".js-calculator-landing__form form").submit(function (e) {
                        s("calc", `order_service=${n}&order_type=${i}&order_deadline=${r}&order_pages=${d}`, o)
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
                                l || a(!0, n, i, o, d)
                            },
                            data: {service: n, product: i, urgency: o, quantity: d, country: t, p_id: l ? u(r) : _ || u(r)}
                        }).done(function (t) {
                            t.price && $(e).find(".discount").text(`-${t.discount}%`).end().find(`#calculator_total_${c}`).text((parseInt(t.price) / 100).toFixed())
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
                }(!1, l, n, i, o)
            };
            $(e).find("select").change(function () {
                i()
            }), $(e).find(`#calculator_pages_increment_${c}`).click(function () {
                let t = 1, l = 1;
                t = a ? (l = document.getElementById(`calculator_pages_${c}`).selectedIndex + 1) == $(e).find(`select#calculator_pages_${c} option`).length ? 0 : l : (l = document.getElementById(`calculator_pages_${c}`).selectedIndex + 1) == $(e).find(`select#calculator_pages_${c} option`).length ? 1 : l + 1;
                let n = $(`#pages_fields_${c} .dropdown-menu[aria-labelledby="calculator_pages_selected_${c}"] li[data-calc-value="${t}"]`).first();
                $(e).find(`#calculator_pages_selected_${c} .c-9__selected`).html(n.text()), $(e).find(`#calculator_pages_selected_${c} .c-9__selected`).attr("data-calc-value", n.attr("data-calc-value")), $(e).find(`select#calculator_pages_${c} option`).eq(t).prop("selected", !0), i()
            }), $(e).find(`#calculator_pages_decrement_${c}`).click(function () {
                let t = $(e).find(`select#calculator_pages_${c} option`).length, l = 1;
                l = a ? 0 == (t = document.getElementById(`calculator_pages_${c}`).selectedIndex) ? $(e).find(`select#calculator_pages_${c} option`).length - 1 : t - 1 : 1 == (t = document.getElementById(`calculator_pages_${c}`).selectedIndex + 1) ? $(e).find(`select#calculator_pages_${c} option`).length : t - 1;
                let n = $(`#pages_fields_${c} .dropdown-menu[aria-labelledby="calculator_pages_selected_${c}"] li[data-calc-value="${l}"]`).first();
                $(e).find(`#calculator_pages_selected_${c} .c-9__selected`).html(n.text()), $(e).find(`#calculator_pages_selected_${c} .c-9__selected`).attr("data-calc-value", n.attr("data-calc-value")), $(e).find(`select#calculator_pages_${c} option`).eq(l).prop("selected", !0), i()
            }), i()
        }(c, a)
    }

    function getDirectoryLanding() {
        $.ajax({
            url: "https://external-api.essaypro.com/directory/external/",
            method: "GET",
            cache: !0,
            xhrFields: {withCredentials: !0},
            success: function (e) {
                initFunctionLanding(e)
            },
            error: function () {
                initFunctionLanding(innerDirectory)
            }
        })
    }

    getDirectoryLanding();</script>
<script>function init(t = "us") {
        $('input[type="range"]').rangeslider({
            polyfill: !1,
            rangeClass: "rangeslider",
            disabledClass: "rangeslider--disabled",
            horizontalClass: "rangeslider--horizontal",
            fillClass: "rangeslider__fill",
            handleClass: "rangeslider__handle",
            onInit: function () {
                let t = this.$range, i = t.find(".rangeslider__handle"),
                    e = '<div class="rangeslider__handle__value">' + this.value + "</div>";
                i.append(e);
                let n = this.$element.attr("data-labels");
                n = n.split(", "), t.append('<div class="rangeslider__labels"></div>'), $(n).each(function (i, e) {
                    6 != e ? t.find(".rangeslider__labels").append(`\n            <span class="rangeslider__labels__label">\n              ${e}\n              <span class="rangeslider__percent">${5 * e}%</span>\n            </span>\n          `) : t.find(".rangeslider__labels").append(`\n            <span class="rangeslider__labels__label">\n              ${e}\n              <span class="rangeslider__percent">33%</span>\n            </span>\n          `)
                }), $(".rangeslider__labels__label:nth-child(3)").addClass("active")
            },
            onSlide: function (t, i) {
                switch (this.$range.find(".rangeslider__handle__value").text(this.value), $("#pagesLink").attr("href", `https://app.essaypro.com/auth/register?order_pages=${this.value}`), $(".rangeslider__labels__label").removeClass("active"), this.value) {
                    case 2:
                        $(".rangeslider__labels__label:nth-child(1)").addClass("active");
                        break;
                    case 3:
                        $(".rangeslider__labels__label:nth-child(2)").addClass("active");
                        break;
                    case 4:
                        $(".rangeslider__labels__label:nth-child(3)").addClass("active");
                        break;
                    case 5:
                        $(".rangeslider__labels__label:nth-child(4)").addClass("active");
                        break;
                    case 6:
                        $(".rangeslider__labels__label:nth-child(5)").addClass("active")
                }
            },
            onSlideEnd: function (t, i) {
            }
        })
    }

    !function (t) {
        "use strict";
        "function" == typeof define && define.amd ? define(["jquery"], t) : "object" == typeof exports ? module.exports = t(require("jquery")) : t(jQuery)
    }(function (t) {
        "use strict";
        Number.isNaN = Number.isNaN || function (t) {
            return "number" == typeof t && t != t
        };
        var i, e = "rangeslider", n = 0,
            s = ((i = document.createElement("input")).setAttribute("type", "range"), "text" !== i.type), o = {
                polyfill: !0,
                orientation: "horizontal",
                rangeClass: "rangeslider",
                disabledClass: "rangeslider--disabled",
                activeClass: "rangeslider--active",
                horizontalClass: "rangeslider--horizontal",
                verticalClass: "rangeslider--vertical",
                fillClass: "rangeslider__fill",
                handleClass: "rangeslider__handle",
                startEvent: ["mousedown", "touchstart", "pointerdown"],
                moveEvent: ["mousemove", "touchmove", "pointermove"],
                endEvent: ["mouseup", "touchend", "pointerup"]
            }, a = {
                orientation: {
                    horizontal: {dimension: "width", direction: "left", directionStyle: "left", coordinate: "x"},
                    vertical: {dimension: "height", direction: "top", directionStyle: "bottom", coordinate: "y"}
                }
            };

        function l(t) {
            return t && (0 === t.offsetWidth || 0 === t.offsetHeight || !1 === t.open)
        }

        function r(t, i) {
            var e = function (t) {
                for (var i = [], e = t.parentNode; l(e);) i.push(e), e = e.parentNode;
                return i
            }(t), n = e.length, s = [], o = t[i];

            function a(t) {
                void 0 !== t.open && (t.open = !t.open)
            }

            if (n) {
                for (var r = 0; r < n; r++) s[r] = e[r].style.cssText, e[r].style.setProperty ? e[r].style.setProperty("display", "block", "important") : e[r].style.cssText += ";display: block !important", e[r].style.height = "0", e[r].style.overflow = "hidden", e[r].style.visibility = "hidden", a(e[r]);
                o = t[i];
                for (var h = 0; h < n; h++) e[h].style.cssText = s[h], a(e[h])
            }
            return o
        }

        function h(t, i) {
            var e = parseFloat(t);
            return Number.isNaN(e) ? i : e
        }

        function d(t) {
            return t.charAt(0).toUpperCase() + t.substr(1)
        }

        function p(i, l) {
            if (this.$window = t(window), this.$document = t(document), this.$element = t(i), this.options = t.extend({}, o, l), this.polyfill = this.options.polyfill, this.orientation = this.$element[0].getAttribute("data-orientation") || this.options.orientation, this.onInit = this.options.onInit, this.onSlide = this.options.onSlide, this.onSlideEnd = this.options.onSlideEnd, this.DIMENSION = a.orientation[this.orientation].dimension, this.DIRECTION = a.orientation[this.orientation].direction, this.DIRECTION_STYLE = a.orientation[this.orientation].directionStyle, this.COORDINATE = a.orientation[this.orientation].coordinate, this.polyfill && s) return !1;
            this.identifier = "js-" + e + "-" + n++, this.startEvent = this.options.startEvent.join("." + this.identifier + " ") + "." + this.identifier, this.moveEvent = this.options.moveEvent.join("." + this.identifier + " ") + "." + this.identifier, this.endEvent = this.options.endEvent.join("." + this.identifier + " ") + "." + this.identifier, this.toFixed = (this.step + "").replace(".", "").length - 1, this.$fill = t('<div class="' + this.options.fillClass + '" />'), this.$handle = t('<div class="' + this.options.handleClass + '" />'), this.$range = t('<div class="' + this.options.rangeClass + " " + this.options[this.orientation + "Class"] + '" id="' + this.identifier + '" />').insertAfter(this.$element).prepend(this.$fill, this.$handle), this.$element.css({
                position: "absolute",
                width: "1px",
                height: "1px",
                overflow: "hidden",
                opacity: "0"
            }), this.handleDown = t.proxy(this.handleDown, this), this.handleMove = t.proxy(this.handleMove, this), this.handleEnd = t.proxy(this.handleEnd, this), this.init();
            var r, h, d = this;
            this.$window.on("resize." + this.identifier, (r = function () {
                !function (t, i) {
                    var e = Array.prototype.slice.call(arguments, 2);
                    setTimeout(function () {
                        return t.apply(null, e)
                    }, i)
                }(function () {
                    d.update(!1, !1)
                }, 300)
            }, h = (h = 20) || 100, function () {
                if (!r.debouncing) {
                    var t = Array.prototype.slice.apply(arguments);
                    r.lastReturnVal = r.apply(window, t), r.debouncing = !0
                }
                return clearTimeout(r.debounceTimeout), r.debounceTimeout = setTimeout(function () {
                    r.debouncing = !1
                }, h), r.lastReturnVal
            })), this.$document.on(this.startEvent, "#" + this.identifier + ":not(." + this.options.disabledClass + ")", this.handleDown), this.$element.on("change." + this.identifier, function (t, i) {
                if (!i || i.origin !== d.identifier) {
                    var e = t.target.value, n = d.getPositionFromValue(e);
                    d.setPosition(n)
                }
            })
        }

        return p.prototype.init = function () {
            this.update(!0, !1), this.onInit && "function" == typeof this.onInit && this.onInit()
        }, p.prototype.update = function (t, i) {
            (t = t || !1) && (this.min = h(this.$element[0].getAttribute("min"), 0), this.max = h(this.$element[0].getAttribute("max"), 100), this.value = h(this.$element[0].value, Math.round(this.min + (this.max - this.min) / 2)), this.step = h(this.$element[0].getAttribute("step"), 1)), this.handleDimension = r(this.$handle[0], "offset" + d(this.DIMENSION)), this.rangeDimension = r(this.$range[0], "offset" + d(this.DIMENSION)), this.maxHandlePos = this.rangeDimension - this.handleDimension, this.grabPos = this.handleDimension / 2, this.position = this.getPositionFromValue(this.value), this.$element[0].disabled ? this.$range.addClass(this.options.disabledClass) : this.$range.removeClass(this.options.disabledClass), this.setPosition(this.position, i)
        }, p.prototype.handleDown = function (t) {
            if (t.preventDefault(), !(t.button && 0 !== t.button || (this.$document.on(this.moveEvent, this.handleMove), this.$document.on(this.endEvent, this.handleEnd), this.$range.addClass(this.options.activeClass), (" " + t.target.className + " ").replace(/[\n\t]/g, " ").indexOf(this.options.handleClass) > -1))) {
                var i = this.getRelativePosition(t), e = this.$range[0].getBoundingClientRect()[this.DIRECTION],
                    n = this.getPositionFromNode(this.$handle[0]) - e,
                    s = "vertical" === this.orientation ? this.maxHandlePos - (i - this.grabPos) : i - this.grabPos;
                this.setPosition(s), i >= n && i < n + this.handleDimension && (this.grabPos = i - n)
            }
        }, p.prototype.handleMove = function (t) {
            t.preventDefault();
            var i = this.getRelativePosition(t),
                e = "vertical" === this.orientation ? this.maxHandlePos - (i - this.grabPos) : i - this.grabPos;
            this.setPosition(e)
        }, p.prototype.handleEnd = function (t) {
            t.preventDefault(), this.$document.off(this.moveEvent, this.handleMove), this.$document.off(this.endEvent, this.handleEnd), this.$range.removeClass(this.options.activeClass), this.$element.trigger("change", {origin: this.identifier}), this.onSlideEnd && "function" == typeof this.onSlideEnd && this.onSlideEnd(this.position, this.value)
        }, p.prototype.cap = function (t, i, e) {
            return t < i ? i : t > e ? e : t
        }, p.prototype.setPosition = function (t, i) {
            var e, n;
            void 0 === i && (i = !0), e = this.getValueFromPosition(this.cap(t, 0, this.maxHandlePos)), n = this.getPositionFromValue(e), this.$fill[0].style[this.DIMENSION] = n + this.grabPos + "px", this.$handle[0].style[this.DIRECTION_STYLE] = n + "px", this.setValue(e), this.position = n, this.value = e, i && this.onSlide && "function" == typeof this.onSlide && this.onSlide(n, e)
        }, p.prototype.getPositionFromNode = function (t) {
            for (var i = 0; null !== t;) i += t.offsetLeft, t = t.offsetParent;
            return i
        }, p.prototype.getRelativePosition = function (t) {
            var i = d(this.COORDINATE), e = this.$range[0].getBoundingClientRect()[this.DIRECTION], n = 0;
            return void 0 !== t.originalEvent["client" + i] ? n = t.originalEvent["client" + i] : t.originalEvent.touches && t.originalEvent.touches[0] && void 0 !== t.originalEvent.touches[0]["client" + i] ? n = t.originalEvent.touches[0]["client" + i] : t.currentPoint && void 0 !== t.currentPoint[this.COORDINATE] && (n = t.currentPoint[this.COORDINATE]), n - e
        }, p.prototype.getPositionFromValue = function (t) {
            var i;
            return i = (t - this.min) / (this.max - this.min), Number.isNaN(i) ? 0 : i * this.maxHandlePos
        }, p.prototype.getValueFromPosition = function (t) {
            var i, e;
            return i = t / (this.maxHandlePos || 1), e = this.step * Math.round(i * (this.max - this.min) / this.step) + this.min, Number(e.toFixed(this.toFixed))
        }, p.prototype.setValue = function (t) {
            t === this.value && "" !== this.$element[0].value || this.$element.val(t).trigger("input", {origin: this.identifier})
        }, p.prototype.destroy = function () {
            this.$document.off("." + this.identifier), this.$window.off("." + this.identifier), this.$element.off("." + this.identifier).removeAttr("style").removeData("plugin_" + e), this.$range && this.$range.length && this.$range[0].parentNode.removeChild(this.$range[0])
        }, t.fn[e] = function (i) {
            var n = Array.prototype.slice.call(arguments, 1);
            return this.each(function () {
                var s = t(this), o = s.data("plugin_" + e);
                o || s.data("plugin_" + e, o = new p(this, i)), "string" == typeof i && o[i].apply(o, n)
            })
        }, "rangeslider.js is available in jQuery context e.g $(selector).rangeslider(options);"
    }), init();</script>
<script>$(document).ready(function () {
        $(".sb-6").find(".show-more").on("click", function (l) {
            $(this).toggleClass("active").closest("li").toggleClass("full", 1500)
        })
    });</script>
<script>$(document).ready(function () {
        $(".s-10").find(".show-more").on("click", function (o) {
            $(this).closest(".s-10").toggleClass("full", 1500)
        })
    });</script>
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
<style>.c-4__p {
        height: 317px;
        overflow: hidden
    }

    .c-4__p .c-4__ul {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start;
        margin-bottom: 0;
        overflow-x: auto
    }

    .c-4__p .c-4__li {
        padding: 0 10px 5px;
        outline: 0
    }

    @media (max-width: 1164px) {
        .c-4__p .c-4__li:first-child {
            padding-left: 20px
        }

        .c-4__p .c-4__li:last-child {
            padding-right: 20px
        }
    }

    .c-4__p .c-4__b {
        min-height: 294px;
        -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, .1);
        box-shadow: 0 2px 5px rgba(0, 0, 0, .1)
    }

    .c-4__p .c-4__av .avatar {
        background-color: #eceff4;
        border-color: #eceff4
    }

    .c-4__p .c-4__t {
        width: 100px;
        height: 15px;
        background-color: #eceff4
    }

    .c-4__p .c-4__d {
        width: 160px;
        height: 45px;
        background-color: #eceff4
    }

    .c-4__p .c-4__r {
        width: 73px;
        height: 12px;
        background-color: #eceff4
    }

    .c-4__p .c-4__s-v {
        width: 20px;
        height: 20px;
        background-color: #eceff4
    }

    .c-4__p .c-4__s-l {
        width: 40px;
        height: 12px;
        background-color: #eceff4
    }

    .c-4__ul {
        display: none;
        -webkit-overflow-scrolling: touch;
        overflow-x: auto;
        list-style: none outside none;
        margin: 0;
        padding: 0
    }

    .c-4.loaded .c-4__ul {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start;
        min-height: 317px
    }

    @media (min-width: 768px) {
        .s-6__3-li .c-4__ul {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center
        }
    }

    .s-6__3-li .c-4__ul .c-4__li:nth-child(n+4) {
        display: none
    }

    .c-4__li {
        padding: 0 10px 5px;
        outline: 0
    }

    @media (max-width: 1164px) {
        .c-4__li:first-child {
            padding-left: 20px
        }

        .c-4__li:last-child {
            padding-right: 20px
        }
    }

    .c-4__b {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        width: 100%;
        max-width: 200px;
        min-width: 200px;
        min-height: 290px;
        margin: 0 auto;
        padding: 20px 20px 0;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, .1);
        box-shadow: 0 2px 5px rgba(0, 0, 0, .1)
    }

    .c-4__b-t {
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
        align-items: center;
        -webkit-box-flex: 1;
        -webkit-flex: 1 1 0%;
        -ms-flex: 1 1 0%;
        flex: 1 1 0%;
        max-width: 158px
    }

    .c-4__b-b {
        width: 100%;
        border-top: 1px solid #e5e5e5
    }

    .c-4__av {
        margin-bottom: 15px
    }

    .c-4__t {
        max-width: 100%;
        height: 18px;
        margin-bottom: 12px;
        color: #3d4d65;
        font-size: 13px;
        font-weight: 400;
        line-height: 15px
    }

    @media (max-width: 767px) {
        .c-4__t {
            height: 18px;
            font-size: 14px;
            line-height: 18px;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: nowrap
        }
    }

    .c-4__d {
        min-height: 45px;
        max-height: 45px;
        overflow: hidden;
        color: #54657e;
        font-size: 13px;
        font-weight: 300;
        line-height: 15px;
        text-align: center
    }

    .c-4__r {
        margin: 20px 0 24px
    }

    .c-4__s-ul {
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
        width: 100%
    }

    .c-4__s-li {
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
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        width: 50%;
        height: 70px
    }

    .c-4__s-v {
        margin-bottom: 2px;
        color: #54657e
    }

    .c-4__s-l {
        color: #8493a8;
        font-size: 10px;
        text-transform: uppercase
    }

    .c-4 .slick-next, .c-4 .slick-prev {
        top: -webkit-calc(50% - 27px);
        top: calc(50% - 27px)
    }

    @media (max-width: 767px) {
        .c-4 .slick-dots {
            bottom: 17px
        }
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .c-4 .slick-dots {
            bottom: 0
        }
    }</style>
<style>.features-icon__deadline {
        background-image: url(assets/icon/features_icon__deadline__48x46276b.svg?v1727f34dc80)
    }

    @media (max-width: 767px) {
        .features-icon__deadline {
            width: 36px;
            height: 35px;
            -webkit-background-size: 36px 35px;
            background-size: 36px 35px
        }
    }

    @media (min-width: 768px) {
        .features-icon__deadline {
            width: 48px;
            height: 46px;
            -webkit-background-size: 48px 46px;
            background-size: 48px 46px
        }
    }

    .features-icon__notifications {
        background-image: url(assets/icon/features_icon__notifications__37x48ab3e.svg?v1727f34dc84)
    }

    @media (max-width: 767px) {
        .features-icon__notifications {
            width: 28px;
            height: 36px;
            -webkit-background-size: 28px 36px;
            background-size: 28px 36px
        }
    }

    @media (min-width: 768px) {
        .features-icon__notifications {
            width: 37px;
            height: 48px;
            -webkit-background-size: 37px 48px;
            background-size: 37px 48px
        }
    }

    .features-icon__chat {
        background-image: url(assets/icon/features_icon__chat__48x42276b.svg?v1727f34dc80)
    }

    @media (max-width: 767px) {
        .features-icon__chat {
            width: 36px;
            height: 32px;
            -webkit-background-size: 36px 32px;
            background-size: 36px 32px
        }
    }

    @media (min-width: 768px) {
        .features-icon__chat {
            width: 48px;
            height: 42px;
            -webkit-background-size: 48px 42px;
            background-size: 48px 42px
        }
    }

    .features-icon__profiles {
        background-image: url(assets/icon/features_icon__profiles__50x45ab3e.svg?v1727f34dc84)
    }

    @media (max-width: 767px) {
        .features-icon__profiles {
            width: 38px;
            height: 34px;
            -webkit-background-size: 38px 34px;
            background-size: 38px 34px
        }
    }

    @media (min-width: 768px) {
        .features-icon__profiles {
            width: 50px;
            height: 45px;
            -webkit-background-size: 50px 45px;
            background-size: 50px 45px
        }
    }

    .features-icon__plagiarism {
        background-image: url(assets/icon/features_icon__plagiarism__56x52ab3e.svg?v1727f34dc84)
    }

    @media (max-width: 767px) {
        .features-icon__plagiarism {
            width: 42px;
            height: 39px;
            -webkit-background-size: 42px 39px;
            background-size: 42px 39px
        }
    }

    @media (min-width: 768px) {
        .features-icon__plagiarism {
            width: 56px;
            height: 52px;
            -webkit-background-size: 56px 52px;
            background-size: 56px 52px
        }
    }

    .features-icon__prices {
        background-image: url(assets/icon/features_icon__prices__53x55ab3e.svg?v1727f34dc84)
    }

    @media (max-width: 767px) {
        .features-icon__prices {
            width: 40px;
            height: 41px;
            -webkit-background-size: 40px 41px;
            background-size: 40px 41px
        }
    }

    @media (min-width: 768px) {
        .features-icon__prices {
            width: 53px;
            height: 55px;
            -webkit-background-size: 53px 55px;
            background-size: 53px 55px
        }
    }

    .features-icon__ew-1 {
        background-image: url(assets/icon/ew_18c43.svg?v1727f34dc74)
    }

    @media (max-width: 767px) {
        .features-icon__ew-1 {
            width: 48px;
            height: 48px;
            -webkit-background-size: 48px 48px;
            background-size: 48px 48px
        }
    }

    @media (min-width: 768px) {
        .features-icon__ew-1 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .features-icon__ew-2 {
        background-image: url(assets/icon/ew_28c43.svg?v1727f34dc74)
    }

    @media (max-width: 767px) {
        .features-icon__ew-2 {
            width: 48px;
            height: 48px;
            -webkit-background-size: 48px 48px;
            background-size: 48px 48px
        }
    }

    @media (min-width: 768px) {
        .features-icon__ew-2 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .features-icon__ew-3 {
        background-image: url(assets/icon/ew_38c43.svg?v1727f34dc74)
    }

    @media (max-width: 767px) {
        .features-icon__ew-3 {
            width: 48px;
            height: 48px;
            -webkit-background-size: 48px 48px;
            background-size: 48px 48px
        }
    }

    @media (min-width: 768px) {
        .features-icon__ew-3 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .features-icon__ew-4 {
        background-image: url(assets/icon/ew_48c43.svg?v1727f34dc74)
    }

    @media (max-width: 767px) {
        .features-icon__ew-4 {
            width: 48px;
            height: 48px;
            -webkit-background-size: 48px 48px;
            background-size: 48px 48px
        }
    }

    @media (min-width: 768px) {
        .features-icon__ew-4 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .features-icon__ews-1 {
        background-image: url(assets/icon/ews_19e42.svg?v1727f34dc78)
    }

    @media (max-width: 1023px) {
        .features-icon__ews-1 {
            width: 18px;
            height: 22px;
            -webkit-background-size: 18px 22px;
            background-size: 18px 22px
        }
    }

    @media (min-width: 1024px) {
        .features-icon__ews-1 {
            width: 39px;
            height: 48px;
            -webkit-background-size: 39px 48px;
            background-size: 39px 48px
        }
    }

    .features-icon__ews-2 {
        background-image: url(assets/icon/ews_29e42.svg?v1727f34dc78)
    }

    @media (max-width: 1023px) {
        .features-icon__ews-2 {
            width: 16px;
            height: 22px;
            -webkit-background-size: 16px 22px;
            background-size: 16px 22px
        }
    }

    @media (min-width: 1024px) {
        .features-icon__ews-2 {
            width: 35px;
            height: 48px;
            -webkit-background-size: 35px 48px;
            background-size: 35px 48px
        }
    }

    .features-icon__ews-3 {
        background-image: url(assets/icon/ews_39e42.svg?v1727f34dc78)
    }

    @media (max-width: 1023px) {
        .features-icon__ews-3 {
            width: 22px;
            height: 22px;
            -webkit-background-size: 22px 22px;
            background-size: 22px 22px
        }
    }

    @media (min-width: 1024px) {
        .features-icon__ews-3 {
            width: 48px;
            height: 48px;
            -webkit-background-size: 48px 48px;
            background-size: 48px 48px
        }
    }

    .features-icon__ews-4 {
        background-image: url(assets/icon/ews_49e42.svg?v1727f34dc78)
    }

    @media (max-width: 1023px) {
        .features-icon__ews-4 {
            width: 22px;
            height: 22px;
            -webkit-background-size: 22px 22px;
            background-size: 22px 22px
        }
    }

    @media (min-width: 1024px) {
        .features-icon__ews-4 {
            width: 48px;
            height: 48px;
            -webkit-background-size: 48px 48px;
            background-size: 48px 48px
        }
    }

    .features-icon__ews-5 {
        background-image: url(assets/icon/ews_59e42.svg?v1727f34dc78)
    }

    @media (max-width: 1023px) {
        .features-icon__ews-5 {
            width: 22px;
            height: 22px;
            -webkit-background-size: 22px 22px;
            background-size: 22px 22px
        }
    }

    @media (min-width: 1024px) {
        .features-icon__ews-5 {
            width: 48px;
            height: 48px;
            -webkit-background-size: 48px 48px;
            background-size: 48px 48px
        }
    }

    .features-icon__ews-i-1 {
        background-image: url(assets/icon/ews_i_1__42x57fcbe.svg?v1727f34dc7c)
    }

    @media (max-width: 1023px) {
        .features-icon__ews-i-1 {
            width: 29px;
            height: 41px;
            -webkit-background-size: 29px 41px;
            background-size: 29px 41px
        }
    }

    @media (min-width: 1024px) {
        .features-icon__ews-i-1 {
            width: 42px;
            height: 57px;
            -webkit-background-size: 42px 57px;
            background-size: 42px 57px
        }
    }

    .features-icon__ews-i-2 {
        background-image: url(assets/icon/ews_i_2__50x51fcbe.svg?v1727f34dc7c)
    }

    @media (max-width: 1023px) {
        .features-icon__ews-i-2 {
            width: 42px;
            height: 43px;
            -webkit-background-size: 42px 43px;
            background-size: 42px 43px
        }
    }

    @media (min-width: 1024px) {
        .features-icon__ews-i-2 {
            width: 50px;
            height: 51px;
            -webkit-background-size: 50px 51px;
            background-size: 50px 51px
        }
    }

    .features-icon__ews-i-3 {
        background-image: url(assets/icon/ews_i_3_46x46fcbe.svg?v1727f34dc7c)
    }

    @media (max-width: 1023px) {
        .features-icon__ews-i-3 {
            width: 40px;
            height: 40px;
            -webkit-background-size: 40px 40px;
            background-size: 40px 40px
        }
    }

    @media (min-width: 1024px) {
        .features-icon__ews-i-3 {
            width: 46px;
            height: 46px;
            -webkit-background-size: 46px 46px;
            background-size: 46px 46px
        }
    }

    .features-icon__ews-i-4 {
        background-image: url(assets/icon/ews_i_4__60x51fcbe.svg?v1727f34dc7c)
    }

    @media (max-width: 1023px) {
        .features-icon__ews-i-4 {
            width: 45px;
            height: 38px;
            -webkit-background-size: 45px 38px;
            background-size: 45px 38px
        }
    }

    @media (min-width: 1024px) {
        .features-icon__ews-i-4 {
            width: 60px;
            height: 51px;
            -webkit-background-size: 60px 51px;
            background-size: 60px 51px
        }
    }

    .features-icon__ews-i-5 {
        background-image: url(assets/icon/ews_i_5__52x51fcbe.svg?v1727f34dc7c)
    }

    @media (max-width: 1023px) {
        .features-icon__ews-i-5 {
            width: 40px;
            height: 39px;
            -webkit-background-size: 40px 39px;
            background-size: 40px 39px
        }
    }

    @media (min-width: 1024px) {
        .features-icon__ews-i-5 {
            width: 52px;
            height: 51px;
            -webkit-background-size: 52px 51px;
            background-size: 52px 51px
        }
    }

    .features-icon__ews-i-6 {
        background-image: url(assets/icon/ews_i_6__51x42276b.svg?v1727f34dc80)
    }

    @media (max-width: 1023px) {
        .features-icon__ews-i-6 {
            width: 45px;
            height: 43px;
            -webkit-background-size: 45px 43px;
            background-size: 45px 43px
        }
    }

    @media (min-width: 1024px) {
        .features-icon__ews-i-6 {
            width: 51px;
            height: 42px;
            -webkit-background-size: 51px 42px;
            background-size: 51px 42px
        }
    }

    .features-icon__ews-i-7 {
        background-image: url(assets/icon/ews_i_7__50x50276b.svg?v1727f34dc80)
    }

    @media (max-width: 1023px) {
        .features-icon__ews-i-7 {
            width: 32px;
            height: 32px;
            -webkit-background-size: 32px 32px;
            background-size: 32px 32px
        }
    }

    @media (min-width: 1024px) {
        .features-icon__ews-i-7 {
            width: 50px;
            height: 50px;
            -webkit-background-size: 50px 50px;
            background-size: 50px 50px
        }
    }

    .features-icon__time {
        background-image: url(assets/icon/time_orange_iconadd2.svg?v1727f34dcc0)
    }

    @media (max-width: 767px) {
        .features-icon__time {
            width: 28px;
            height: 36px;
            -webkit-background-size: 28px 36px;
            background-size: 28px 36px
        }
    }

    @media (min-width: 768px) {
        .features-icon__time {
            width: 37px;
            height: 48px;
            -webkit-background-size: 37px 48px;
            background-size: 37px 48px
        }
    }

    .i-n--info {
        width: 32px;
        height: 32px;
        -webkit-background-size: 32px 32px;
        background-size: 32px 32px;
        background-image: url(assets/icon/i__info4cff.svg?v1727f34dc88)
    }

    .i-n--orders {
        width: 32px;
        height: 32px;
        -webkit-background-size: 32px 32px;
        background-size: 32px 32px;
        background-image: url(assets/icon/i__orders4cff.svg?v1727f34dc88)
    }

    .i-n--rating {
        width: 32px;
        height: 32px;
        -webkit-background-size: 32px 32px;
        background-size: 32px 32px;
        background-image: url(assets/icon/i__rating4cff.svg?v1727f34dc88)
    }

    .i-n--reviews {
        width: 32px;
        height: 32px;
        -webkit-background-size: 32px 32px;
        background-size: 32px 32px;
        background-image: url(assets/icon/i__reviews6a55.svg?v1727f34dc8c)
    }

    .i-n--cew-1 {
        background-image: url(assets/icon/cew_12e3d.svg?v1727f34dc6c)
    }

    @media (max-width: 767px) {
        .i-n--cew-1 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--cew-1 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--cew-2 {
        background-image: url(assets/icon/cew_2b46d.svg?v1727f34dc70)
    }

    @media (max-width: 767px) {
        .i-n--cew-2 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--cew-2 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--cew-3 {
        background-image: url(assets/icon/cew_3b46d.svg?v1727f34dc70)
    }

    @media (max-width: 767px) {
        .i-n--cew-3 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--cew-3 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--wme-1 {
        background-image: url(assets/icon/wme_1add2.svg?v1727f34dcc0)
    }

    @media (max-width: 767px) {
        .i-n--wme-1 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--wme-1 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--wme-2 {
        background-image: url(assets/icon/wme_2b06f.svg?v1727f34dcc8)
    }

    @media (max-width: 767px) {
        .i-n--wme-2 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--wme-2 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--wme-3 {
        background-image: url(assets/icon/wme_3b06f.svg?v1727f34dcc8)
    }

    @media (max-width: 767px) {
        .i-n--wme-3 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--wme-3 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--wme-4 {
        background-image: url(assets/icon/wme_4b06f.svg?v1727f34dcc8)
    }

    @media (max-width: 767px) {
        .i-n--wme-4 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--wme-4 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--wme-5 {
        background-image: url(assets/icon/wme_5b06f.svg?v1727f34dcc8)
    }

    @media (max-width: 767px) {
        .i-n--wme-5 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--wme-5 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--wme-6 {
        background-image: url(assets/icon/wme_6ace1.svg?v1727f34dccc)
    }

    @media (max-width: 767px) {
        .i-n--wme-6 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--wme-6 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--wme-11 {
        background-image: url(assets/icon/wme_1111f1.svg?v1727f34dcc4)
    }

    @media (max-width: 767px) {
        .i-n--wme-11 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--wme-11 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--wme-12 {
        background-image: url(assets/icon/wme_1211f1.svg?v1727f34dcc4)
    }

    @media (max-width: 767px) {
        .i-n--wme-12 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--wme-12 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--wme-13 {
        background-image: url(assets/icon/wme_1311f1.svg?v1727f34dcc4)
    }

    @media (max-width: 767px) {
        .i-n--wme-13 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--wme-13 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--wme-14 {
        background-image: url(assets/icon/wme_1411f1.svg?v1727f34dcc4)
    }

    @media (max-width: 767px) {
        .i-n--wme-14 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--wme-14 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--wme-15 {
        background-image: url(assets/icon/wme_1511f1.svg?v1727f34dcc4)
    }

    @media (max-width: 767px) {
        .i-n--wme-15 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--wme-15 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--wme-16 {
        background-image: url(assets/icon/wme_16b06f.svg?v1727f34dcc8)
    }

    @media (max-width: 767px) {
        .i-n--wme-16 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--wme-16 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--ae-1 {
        background-image: url(assets/icon/ae_152c0.svg?v1727f34dc68)
    }

    @media (max-width: 767px) {
        .i-n--ae-1 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--ae-1 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--ae-2 {
        background-image: url(assets/icon/ae_252c0.svg?v1727f34dc68)
    }

    @media (max-width: 767px) {
        .i-n--ae-2 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--ae-2 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--ae-3 {
        background-image: url(assets/icon/ae_32e3d.svg?v1727f34dc6c)
    }

    @media (max-width: 767px) {
        .i-n--ae-3 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--ae-3 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--ae-4 {
        background-image: url(assets/icon/ae_42e3d.svg?v1727f34dc6c)
    }

    @media (max-width: 767px) {
        .i-n--ae-4 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--ae-4 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--dh-1 {
        background-image: url(assets/icon/dh_1b46d.svg?v1727f34dc70)
    }

    @media (max-width: 767px) {
        .i-n--dh-1 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 20px 26px;
            background-size: 20px 26px
        }
    }

    @media (min-width: 768px) {
        .i-n--dh-1 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 36px 48px;
            background-size: 36px 48px
        }
    }

    .i-n--dh-2 {
        background-image: url(assets/icon/dh_2b46d.svg?v1727f34dc70)
    }

    @media (max-width: 767px) {
        .i-n--dh-2 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--dh-2 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--dh-3 {
        background-image: url(assets/icon/dh_3b46d.svg?v1727f34dc70)
    }

    @media (max-width: 767px) {
        .i-n--dh-3 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--dh-3 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--dh-4 {
        background-image: url(assets/icon/dh_48c43.svg?v1727f34dc74)
    }

    @media (max-width: 767px) {
        .i-n--dh-4 {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--dh-4 {
            width: 64px;
            height: 64px;
            -webkit-background-size: 64px 64px;
            background-size: 64px 64px
        }
    }

    .i-n--sb-4-1 {
        background-image: url(assets/icon/sb_4_1638d.svg?v1727f34dcb8)
    }

    .i-n--sb-4-2 {
        background-image: url(assets/icon/sb_4_2638d.svg?v1727f34dcb8)
    }

    .i-n--sb-4-3 {
        background-image: url(assets/icon/sb_4_3638d.svg?v1727f34dcb8)
    }

    .i-n--sb-4-4 {
        background-image: url(assets/icon/sb_4_4638d.svg?v1727f34dcb8)
    }

    .i-n--sb-4-5 {
        background-image: url(assets/icon/sb_4_5638d.svg?v1727f34dcb8)
    }

    .i-n--sb-4-6 {
        background-image: url(assets/icon/sb_4_68f3a.svg?v1727f34dcbc)
    }

    .i-n--sb-5-1 {
        background-image: url(assets/icon/sb_5_18f3a.svg?v1727f34dcbc)
    }

    .i-n--sb-5-2 {
        background-image: url(assets/icon/sb_5_28f3a.svg?v1727f34dcbc)
    }

    .i-n--sb-5-3 {
        background-image: url(assets/icon/sb_5_38f3a.svg?v1727f34dcbc)
    }

    .i-n--sb-5-4 {
        background-image: url(assets/icon/sb_5_48f3a.svg?v1727f34dcbc)
    }

    .i-n--sb-5-5 {
        background-image: url(assets/icon/sb_5_5add2.svg?v1727f34dcc0)
    }

    .i-n--sb-5-6 {
        background-image: url(assets/icon/sb_5_6add2.svg?v1727f34dcc0)
    }

    .i-n--arrow-right {
        background-image: url(assets/icon/ae__arrow_right2e3d.svg?v1727f34dc6c)
    }

    @media (max-width: 767px) {
        .i-n--arrow-right {
            width: 36px;
            height: 36px;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px
        }
    }

    @media (min-width: 768px) {
        .i-n--arrow-right {
            width: 16px;
            height: 29px;
            -webkit-background-size: 16px 29px;
            background-size: 16px 29px
        }
    }</style>
<style>.sb-3 {
        background-color: #f7f9fc
    }

    @media (max-width: 767px) {
        .sb-3 {
            padding: 32px 0
        }
    }

    @media (min-width: 768px) {
        .sb-3 {
            padding: 60px 0
        }
    }

    .sb-3__ul {
        list-style: none outside none;
        margin: 0;
        padding: 0
    }

    @media (min-width: 768px) {
        .sb-3__ul {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }
    }

    .sb-3__li {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start;
        min-height: 52px
    }

    @media (min-width: 768px) {
        .sb-3__li {
            width: -webkit-calc(50% - 32px);
            width: calc(50% - 32px);
            margin-bottom: 40px
        }

        .sb-3__li:nth-child(1), .sb-3__li:nth-child(5) {
            -webkit-box-ordinal-group: -3;
            -webkit-order: -4;
            -ms-flex-order: -4;
            order: -4
        }

        .sb-3__li:nth-child(2), .sb-3__li:nth-child(6) {
            -webkit-box-ordinal-group: -2;
            -webkit-order: -3;
            -ms-flex-order: -3;
            order: -3
        }

        .sb-3__li:nth-child(3), .sb-3__li:nth-child(7) {
            -webkit-box-ordinal-group: -1;
            -webkit-order: -2;
            -ms-flex-order: -2;
            order: -2
        }

        .sb-3__li:nth-child(4), .sb-3__li:nth-child(8) {
            -webkit-box-ordinal-group: 0;
            -webkit-order: -1;
            -ms-flex-order: -1;
            order: -1;
            margin-bottom: 0
        }
    }

    @media (min-width: 1024px) {
        .sb-3__li {
            width: -webkit-calc(50% - 80px);
            width: calc(50% - 80px)
        }
    }

    @media (max-width: 767px) {
        .sb-3__li:not(:last-child) {
            margin-bottom: 20px
        }
    }

    .sb-3__n {
        min-width: 32px;
        height: 32px;
        margin-right: 24px;
        background-color: #0282d5;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        color: #fff;
        font-size: 20px;
        font-weight: 300;
        line-height: 32px;
        text-align: center
    }

    .sb-3 .h--md {
        text-align: center
    }

    @media (max-width: 767px) {
        .sb-3 .h--md {
            margin-bottom: 32px;
            color: #0282d5
        }
    }

    @media (min-width: 768px) {
        .sb-3 .h--md {
            margin-bottom: 40px
        }
    }</style>
<style>@media (max-width: 767px) {
        .sb-5.sb-5-1 .sb-5__r {
            display: none
        }
    }

    @media (min-width: 1024px) {
        .sb-5.sb-5-1 .p--md {
            max-width: 570px
        }
    }

    @media (min-width: 1024px) {
        .sb-5.sb-5-1 .p--md.pl-d-10 {
            padding-left: 10px
        }
    }

    .sb-5 .p--md__40px {
        margin-bottom: 40px
    }

    @media (min-width: 768px) {
        .sb-5__b {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }
    }

    @media (min-width: 768px) {
        .sb-5__l {
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 0%;
            -ms-flex: 1 1 0%;
            flex: 1 1 0%
        }
    }

    .sb-5__r {
        text-align: center
    }

    .sb-5__r > img {
        max-width: 210px
    }

    @media (max-width: 767px) {
        .sb-5__r {
            margin-top: 40px
        }
    }

    @media (min-width: 768px) {
        .sb-5__r {
            width: 40%;
            margin-left: 32px;
            padding-top: 24px
        }
    }

    .sb-5 .h--md {
        color: #0282d5
    }

    @media (max-width: 767px) {
        .sb-5 .h--md {
            margin-bottom: 32px
        }
    }

    @media (min-width: 768px) {
        .sb-5 .h--md {
            margin-bottom: 40px
        }
    }

    .ul-1 {
        list-style: none outside none;
        margin: 0;
        padding: 0
    }

    .ul-1 > li:not(.nulify) {
        background-image: url(assets/icon/li_19072.svg?v1727f34dc9c)
    }

    @media (min-width: 768px) {
        .ul-1 > li:not(.nulify) {
            padding-left: 40px
        }
    }

    .ul-1 > li {
        background-repeat: no-repeat;
        -webkit-background-size: 24px 18px;
        background-size: 24px 18px;
        font-weight: 300
    }

    @media (max-width: 767px) {
        .ul-1 > li {
            padding-left: 34px;
            background-position: 0 3px;
            font-size: 16px;
            line-height: 22px
        }
    }

    @media (min-width: 768px) {
        .ul-1 > li {
            background-position: 0 6px;
            font-size: 18px;
            line-height: 30px
        }
    }

    @media (max-width: 767px) {
        .ul-1 > li:not(:last-child) {
            margin-bottom: 10px
        }
    }

    @media (min-width: 768px) {
        .ul-1 > li:not(:last-child) {
            margin-bottom: 16px
        }
    }

    @media (max-width: 767px) {
        ._mb__m-32__td-40 {
            margin-bottom: 32px !important
        }
    }

    @media (min-width: 768px) {
        ._mb__m-32__td-40 {
            margin-bottom: 40px !important
        }
    }</style>
<style>._mb-24 {
        margin-bottom: 24px !important
    }

    @media (min-width: 768px) {
        .sb-4 .h--md {
            margin-bottom: 40px
        }
    }

    @media (max-width: 767px) {
        .sb-4 .h--md {
            margin-bottom: 20px !important
        }
    }

    .sb-4.sb-4-1 {
        background-color: #f2f5fa
    }

    .sb-4.sb-4-1 .sb-4__li .p--sm {
        max-width: 420px
    }

    .sb-4__ul {
        list-style: none outside none;
        margin: 0;
        padding: 0
    }

    @media (min-width: 1024px) {
        .sb-4__ul {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }
    }

    .sb-4__li {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start
    }

    @media (min-width: 768px) {
        .sb-4__li {
            margin-bottom: 40px
        }
    }

    @media (min-width: 1024px) {
        .sb-4__li {
            width: -webkit-calc(50% - 16px);
            width: calc(50% - 16px)
        }

        .sb-4__li:nth-child(1), .sb-4__li:nth-child(4) {
            -webkit-box-ordinal-group: -2;
            -webkit-order: -3;
            -ms-flex-order: -3;
            order: -3
        }

        .sb-4__li:nth-child(2), .sb-4__li:nth-child(5) {
            -webkit-box-ordinal-group: -1;
            -webkit-order: -2;
            -ms-flex-order: -2;
            order: -2
        }

        .sb-4__li:nth-child(3), .sb-4__li:nth-child(6) {
            -webkit-box-ordinal-group: 0;
            -webkit-order: -1;
            -ms-flex-order: -1;
            order: -1;
            margin-bottom: 0
        }
    }

    @media (max-width: 767px) {
        .sb-4__li:not(:last-child) {
            margin-bottom: 32px
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .sb-4__li:not(:last-child) {
            margin-bottom: 40px
        }
    }

    @media (max-width: 767px) {
        .sb-4__i {
            min-width: 40px;
            margin-right: 16px
        }
    }

    @media (min-width: 768px) {
        .sb-4__i {
            min-width: 50px;
            margin-right: 32px
        }
    }

    .sb-4__ac {
        text-align: center
    }

    @media (max-width: 1023px) {
        .sb-4__ac {
            margin-top: 20px
        }
    }

    @media (min-width: 1024px) {
        .sb-4__ac {
            margin-top: 40px
        }
    }

    @media (max-width: 767px) {
        .sb-4__ac .button-outline__primary {
            padding: 0 20px
        }
    }

    .sb-4 .h--sm {
        margin-bottom: 10px;
        font-weight: 400
    }

    @media (max-width: 767px) {
        .sb-4 .icon {
            width: 40px;
            height: 40px;
            -webkit-background-size: 40px 40px;
            background-size: 40px 40px
        }
    }

    @media (min-width: 768px) {
        .sb-4 .icon {
            width: 50px;
            height: 50px;
            -webkit-background-size: 50px 50px;
            background-size: 50px 50px
        }
    }</style>
<style>._mb-24 {
        margin-bottom: 24px !important
    }

    @media (max-width: 767px) {
        ._mb__m-20 {
            margin-bottom: 20px !important
        }
    }

    @media (min-width: 768px) {
        ._mb__td-40 {
            margin-bottom: 40px
        }
    }

    @media (max-width: 767px) {
        ._mb__m-20__td-32 {
            margin-bottom: 20px !important
        }
    }

    @media (min-width: 768px) {
        ._mb__m-20__td-32 {
            margin-bottom: 32px !important
        }
    }

    @media (max-width: 767px) {
        ._mb__m-20__td-40 {
            margin-bottom: 20px !important
        }
    }

    @media (min-width: 768px) {
        ._mb__m-20__td-40 {
            margin-bottom: 40px !important
        }
    }

    @media (max-width: 767px) {
        ._mb__m-32__td-40 {
            margin-bottom: 32px !important
        }
    }

    @media (min-width: 768px) {
        ._mb__m-32__td-40 {
            margin-bottom: 40px !important
        }
    }

    .sb-6__ul {
        list-style: none outside none;
        margin: 0;
        padding: 0
    }

    .sb-6__ul--row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .sb-6__ul li.full .sb-6__content__inner {
        max-height: inherit !important
    }

    .sb-6__ul li.full .sb-6__content__inner:after {
        display: none
    }

    .sb-6__ul li.full .show-more {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
        background: #fff url(assets/icon/icon__show-more--active4216.png?v1727f34dc98) no-repeat 50%;
        -webkit-background-size: 50% 50%;
        background-size: 50%
    }

    .sb-6__w .h--md {
        text-align: center
    }

    .sb-6__w .p--md {
        margin-bottom: 24px;
        text-align: center
    }

    .sb-6__w .list {
        margin-bottom: 24px;
        color: #424b59;
        font-weight: 300
    }

    @media (min-width: 768px) {
        .sb-6__w .list {
            font-size: 18px;
            line-height: 32px
        }
    }

    @media (max-width: 767px) {
        .sb-6__w .list {
            font-size: 16px;
            line-height: 24px
        }
    }

    .sb-6__li {
        position: relative;
        background-color: #fff;
        -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, .1);
        box-shadow: 0 1px 5px rgba(0, 0, 0, .1);
        -webkit-border-radius: 5px;
        border-radius: 5px
    }

    @media (max-width: 767px) {
        .sb-6__li {
            padding: 24px 78px 24px 32px
        }
    }

    @media (min-width: 768px) {
        .sb-6__li {
            padding: 20px 78px 20px 32px
        }
    }

    @media (max-width: 767px) {
        .sb-6__li:not(:last-child) {
            margin-bottom: 24px
        }
    }

    @media (min-width: 768px) {
        .sb-6__li:not(:last-child) {
            margin-bottom: 20px
        }
    }

    .sb-6__li--row {
        width: -webkit-calc(50% - 20px);
        width: calc(50% - 20px);
        position: relative;
        overflow: hidden;
        min-height: 230px;
        background-color: #fff;
        -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, .1);
        box-shadow: 0 1px 5px rgba(0, 0, 0, .1);
        -webkit-border-radius: 4px;
        border-radius: 4px
    }

    @media (max-width: 767px) {
        .sb-6__li--row {
            padding: 24px 40px 24px 32px;
            width: 100%
        }
    }

    @media (min-width: 768px) {
        .sb-6__li--row {
            padding: 20px 40px 20px 32px
        }
    }

    @media (max-width: 767px) {
        .sb-6__li--row:nth-child(odd) {
            margin-bottom: 24px
        }
    }

    @media (min-width: 768px) {
        .sb-6__li--row:nth-child(odd) {
            margin-right: 40px
        }
    }

    @media (max-width: 767px) {
        .sb-6__li--row:nth-child(1), .sb-6__li--row:nth-child(2) {
            margin-bottom: 24px
        }
    }

    @media (min-width: 768px) {
        .sb-6__li--row:nth-child(1), .sb-6__li--row:nth-child(2) {
            margin-bottom: 40px
        }
    }

    .sb-6__a {
        color: #424b59
    }

    .sb-6__a:hover {
        color: #202937
    }

    .sb-6__ac {
        text-align: center
    }

    @media (max-width: 767px) {
        .sb-6__ac {
            margin-top: 24px
        }
    }

    @media (min-width: 768px) {
        .sb-6__ac {
            margin-top: 40px
        }
    }

    .sb-6 .h--md {
        color: #0282d5
    }

    .sb-6 .h--sm {
        font-weight: 400
    }

    @media (max-width: 767px) {
        .sb-6 .h--sm {
            margin-bottom: 16px
        }
    }

    @media (min-width: 768px) {
        .sb-6 .h--sm {
            margin-bottom: 10px
        }
    }

    .sb-6__content__inner {
        max-height: 152px;
        margin-bottom: 15px;
        display: inline-block;
        position: relative;
        -webkit-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
        overflow: hidden
    }

    .sb-6__content__inner:after {
        left: 0;
        bottom: 0;
        width: 100%;
        height: 50px;
        position: absolute;
        content: '';
        -webkit-box-shadow: inset 0 -18px 10px 0 #fff;
        box-shadow: inset 0 -18px 10px 0 #fff;
        z-index: 99
    }

    .sb-6 .show-more {
        top: 25px;
        right: 20px;
        width: 20px;
        height: 20px;
        position: absolute;
        color: #0282d5;
        -webkit-transition: -webkit-transform .2s ease-in-out;
        transition: -webkit-transform .2s ease-in-out;
        -o-transition: transform .2s ease-in-out;
        transition: transform .2s ease-in-out;
        transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out;
        background: #fff url(assets/icon/icon__show-more4216.png?v1727f34dc98) no-repeat 50%;
        -webkit-background-size: 50% 50%;
        background-size: 50%;
        cursor: pointer;
        z-index: 99
    }

    .sb-6 .show-more:hover {
        border-color: #fff
    }</style>
<style>.s-15 .h--md {
        text-align: center;
        margin-bottom: 30px
    }

    .s-15 .h--sm {
        font-size: 20px;
        line-height: 30px;
        font-weight: 400 !important
    }

    .s-15__list {
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

    .s-15__col {
        padding: 0 1em;
        -webkit-box-flex: 1;
        -webkit-flex: 1 1 50%;
        -ms-flex: 1 1 50%;
        flex: 1 1 50%;
        margin-bottom: 10px
    }

    .s-15__spoiler details + details {
        border-top: 1px solid #e0e0e0
    }

    .s-15__spoiler summary {
        padding: 1em;
        border: 1px solid #e0e0e0;
        margin-bottom: 5px;
        cursor: pointer;
        -webkit-border-radius: 6px;
        border-radius: 6px;
        border-radius: 6px;
        background-color: #f2f4f7
    }

    .s-15__spoiler details dd {
        overflow: hidden;
        padding: 1em
    }

    .s-15__spoiler details dt:before {
        content: "";
        display: inline-block;
        width: 20px;
        height: 15px;
        margin-right: 5px;
        text-align: center;
        -webkit-transition: -webkit-transform .2s ease-in-out;
        transition: -webkit-transform .2s ease-in-out;
        -o-transition: transform .2s ease-in-out;
        transition: transform .2s ease-in-out;
        transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out;
        background: #f2f4f7 url(assets/icon/icon__show-more4216.png?v1727f34dc98) no-repeat 50%;
        -webkit-background-size: 60% 60%;
        background-size: 60%
    }

    .s-15__spoiler details[open] dd {
        -webkit-animation: spoiler .3s;
        animation: spoiler .3s
    }

    .s-15__spoiler details[open] dt:before {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
        background: #f2f4f7 url(assets/icon/icon__show-more--active4216.png?v1727f34dc98) no-repeat 50%;
        -webkit-background-size: 60% 60%;
        background-size: 60%
    }

    .s-15__spoiler details[open] summary {
        -webkit-border-bottom-left-radius: 0;
        border-bottom-left-radius: 0;
        -webkit-border-bottom-right-radius: 0;
        border-bottom-right-radius: 0
    }

    @-webkit-keyframes spoiler {
        0% {
            max-height: 0
        }
        100% {
            max-height: 10em
        }
    }

    @keyframes spoiler {
        0% {
            max-height: 0
        }
        100% {
            max-height: 10em
        }
    }

    .s-15 details summary::-webkit-details-marker {
        display: none
    }

    .s-15__answer {
        margin-top: -5px;
        margin-left: 0;
        margin-bottom: 5px;
        padding: 1em;
        border: 1px solid #e0e0e0;
        border-top: none;
        -webkit-border-bottom-left-radius: 6px;
        border-bottom-left-radius: 6px;
        -webkit-border-bottom-right-radius: 6px;
        border-bottom-right-radius: 6px
    }</style>
<style>.s-10 {
        position: relative;
        -webkit-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out
    }

    .s-10.shadow:after {
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100px;
        position: absolute;
        content: '';
        -webkit-box-shadow: inset 0 -73px 10px 0 #fff;
        box-shadow: inset 0 -73px 10px 0 #fff;
        z-index: 10
    }

    .s-10__title {
        color: #424b59;
        font-weight: 300;
        text-align: center
    }

    @media (max-width: 767px) {
        .s-10__title {
            margin-bottom: 20px;
            font-size: 22px;
            line-height: 30px
        }
    }

    @media (min-width: 768px) {
        .s-10__title {
            margin-bottom: 32px;
            font-size: 32px;
            line-height: 42px
        }
    }

    .s-10.full {
        max-height: inherit !important
    }

    .s-10.full:after {
        display: none
    }

    .s-10.full .s-10__content {
        max-height: inherit !important
    }

    .s-10.full .show-more {
        -webkit-transform: translateX(-50%) rotate(180deg);
        -ms-transform: translateX(-50%) rotate(180deg);
        transform: translateX(-50%) rotate(180deg)
    }

    .s-10 .h--md {
        text-align: center
    }

    .s-10 .h--sm {
        font-weight: 400 !important
    }

    @media (max-width: 767px) {
        .s-10 .h--sm {
            margin-bottom: 8px
        }
    }

    @media (min-width: 768px) {
        .s-10 .h--sm {
            margin-bottom: 20px
        }
    }

    @media (min-width: 768px) {
        .s-10 .p--sm {
            line-height: 28px
        }
    }

    .s-10__content {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: start;
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start;
        -webkit-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out
    }

    .s-10__content-head {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }

    .s-10__svg {
        margin-bottom: 20px;
        margin-right: 19px
    }

    @media (max-width: 1023px) {
        .s-10__content-block {
            margin-bottom: 32px
        }
    }

    @media (min-width: 1024px) {
        .s-10__content-block {
            margin-bottom: 42px
        }
    }

    .s-10__content-block ol {
        margin: 0 0 15px 0;
        list-style-type: none;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .s-10__content-block .list__item {
        color: #424b59;
        font-weight: 700;
        width: 50%;
        padding-right: 30px
    }

    .s-10__content-block .list__item:not(:last-child) {
        margin-bottom: 15px
    }

    .s-10__content-block .list__item:before {
        content: "\2022";
        color: transparent;
        font-weight: 700;
        font-size: 20px;
        line-height: 28px;
        display: inline-block;
        position: absolute;
        margin-left: -1em;
        margin-top: 15px
    }

    .s-10__content-block .list__item._green:before {
        color: #81bb5b
    }

    .s-10__content-block .list__item._violet:before {
        color: #7249c4
    }

    .s-10__content-block .list__item._red:before {
        color: #e57361
    }

    .s-10__content-block .list__item._blue:before {
        color: #0282d5
    }

    .s-10__content-block .list__item._darkgreen:before {
        color: #3caac1
    }

    .s-10__content-block .list__item._orange:before {
        color: #e89b00
    }

    .s-10__content-block .list__item .p--sm {
        margin-top: 15px
    }

    .s-10__content-block .list__title {
        margin-bottom: 0;
        color: #424b59;
        font-size: 18px;
        line-height: 1;
        font-weight: 400
    }

    .s-10 .show-more {
        left: 50%;
        bottom: -22px;
        width: 44px;
        height: 44px;
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
        justify-content: center;
        position: absolute;
        color: #fff;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        -webkit-transition: background .3s ease;
        -o-transition: background .3s ease;
        transition: background .3s ease;
        background: #0282d5 url(assets/nav/arrow_down13b0.svg?v1727f34de58) no-repeat 51.5% 55%;
        -webkit-background-size: 37% 37%;
        background-size: 37%;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
        cursor: pointer;
        z-index: 99
    }

    .s-10 .show-more:hover {
        background-color: #0291f0
    }</style>
<style>.rating-stars {
        position: relative;
        width: 73px;
        height: 12px
    }

    .rating-stars.large {
        width: 228px;
        height: 30px
    }

    .rating-stars.large .rating-stars__bar {
        height: 30px;
        background-image: url(assets/rating/rating_stars__empty__228x30d09c.svg?v1727f34e22c);
        -webkit-background-size: 228px 30px;
        background-size: 228px 30px
    }

    .rating-stars.large .rating-stars__bar.is--active {
        background-image: url(assets/rating/rating_stars__full__228x30d09c.svg?v1727f34e22c)
    }

    .rating-stars__bar {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 12px;
        background-image: url(assets/rating/rating_stars__empty__73x12d09c.svg?v1727f34e22c);
        background-position: 0 0;
        background-repeat: no-repeat;
        -webkit-background-size: 73px 12px;
        background-size: 73px 12px
    }

    .rating-stars__bar.is--active {
        z-index: 2;
        background-image: url(assets/rating/rating_stars__full__73x12d09c.svg?v1727f34e22c)
    }

    .s-8.for__pages {
        padding-top: 0
    }

    @media (max-width: 767px) {
        .s-8__c {
            margin-left: -16px;
            margin-right: -16px
        }
    }

    .s-8__w {
        width: 100%;
        max-width: 785px;
        margin: 0 auto
    }

    .s-8__h.loaded .s-8__h-p {
        display: none
    }

    .s-8__h-p .s-8__s-d, .s-8__h-p .s-8__s-r {
        height: 21px;
        background-color: #eceff4
    }

    .s-8__h-p .s-8__s-d {
        width: 230px
    }

    .s-8__h-p .s-8__s-r {
        width: 106px
    }

    @media (max-width: 767px) {
        .s-8__h {
            margin-bottom: 20px
        }
    }

    @media (min-width: 768px) {
        .s-8__h {
            margin-bottom: 32px
        }
    }

    .s-8__s {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }

    @media (max-width: 767px) {
        .s-8__s {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }
    }

    @media (min-width: 768px) {
        .s-8__s {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center
        }
    }

    .s-8__s-d {
        font-size: 18px;
        font-weight: 300
    }

    @media (min-width: 768px) {
        .s-8__s-d {
            margin-right: 5px
        }
    }

    .s-8__s-v {
        font-weight: 400
    }

    .s-8__s-r {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }

    .s-8__s-r-v {
        display: inline-block;
        margin-right: 8px;
        font-size: 18px;
        font-weight: 300
    }

    .s-8__b-g {
        text-align: center
    }

    @media (max-width: 767px) {
        .s-8__b-g {
            margin-top: 15px
        }
    }

    @media (min-width: 768px) {
        .s-8__b-g {
            margin-top: 48px
        }
    }

    .s-8 .h--md {
        text-align: center
    }

    @media (max-width: 767px) {
        .s-8 .h--md {
            margin-bottom: 16px
        }
    }

    @media (min-width: 768px) {
        .s-8 .h--md {
            margin-bottom: 24px
        }
    }</style>
<style>.rating-stars {
        position: relative;
        width: 73px;
        height: 12px
    }

    .rating-stars.large {
        width: 228px;
        height: 30px
    }

    .rating-stars.large .rating-stars__bar {
        height: 30px;
        background-image: url(assets/rating/rating_stars__empty__228x30d09c.svg?v1727f34e22c);
        -webkit-background-size: 228px 30px;
        background-size: 228px 30px
    }

    .rating-stars.large .rating-stars__bar.is--active {
        background-image: url(assets/rating/rating_stars__full__228x30d09c.svg?v1727f34e22c)
    }

    .rating-stars__bar {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 12px;
        background-image: url(assets/rating/rating_stars__empty__73x12d09c.svg?v1727f34e22c);
        background-position: 0 0;
        background-repeat: no-repeat;
        -webkit-background-size: 73px 12px;
        background-size: 73px 12px
    }

    .rating-stars__bar.is--active {
        z-index: 2;
        background-image: url(assets/rating/rating_stars__full__73x12d09c.svg?v1727f34e22c)
    }

    .c-5 a {
        color: #54657e
    }

    .c-5 a:hover {
        text-decoration: underline
    }

    @media (max-width: 767px) {
        .c-5__p {
            height: 294px
        }
    }

    @media (max-width: 767px) {
        .c-5__p .c-5__li:nth-child(n+2) {
            display: none
        }
    }

    .c-5__p .c-5__av .avatar--placeholder {
        background: #eceff4;
        -webkit-border-radius: 50%;
        border-radius: 50%
    }

    .c-5__p .c-5__cs-n {
        width: 112px;
        height: 18px;
        background-color: #eceff4
    }

    .c-5__p .c-5__dt {
        width: 80px;
        background-color: #eceff4
    }

    @media (max-width: 767px) {
        .c-5__p .c-5__dt {
            height: 20px
        }
    }

    @media (min-width: 768px) {
        .c-5__p .c-5__dt {
            height: 18px
        }
    }

    .c-5__p .c-5__ct > span {
        display: block;
        width: 160px;
        height: 18px;
        background-color: #eceff4
    }

    .c-5__p .c-5__wr:before {
        display: none
    }

    .c-5__p .c-5__wr-l {
        display: block;
        width: 112px;
        height: 18px;
        background-color: #eceff4
    }

    .c-5__p .c-5__r {
        width: 90px;
        height: 18px;
        background-color: #eceff4
    }

    .c-5__p .c-5__c .p--sm {
        background-color: #eceff4;
        word-break: break-word;
        word-wrap: break-word
    }

    @media (max-width: 767px) {
        .c-5__p .c-5__c .p--sm {
            height: 50px
        }
    }

    @media (min-width: 768px) {
        .c-5__p .c-5__c .p--sm {
            height: 25px
        }
    }

    .c-5__ul {
        list-style: none outside none;
        margin: 0;
        padding: 0
    }

    @media (max-width: 767px) {
        .c-5__ul {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-overflow-scrolling: touch;
            overflow-x: auto
        }
    }

    @media (max-width: 767px) {
        .c-5.loaded .c-5__ul {
            min-height: 294px
        }
    }

    @media (max-width: 767px) {
        .c-5__li {
            width: 310px;
            min-width: 310px;
            padding: 0 10px;
            outline: 0
        }

        .c-5__li:first-child {
            padding-left: 20px
        }

        .c-5__li:last-child {
            padding-right: 20px
        }
    }

    @media (min-width: 768px) {
        .c-5__li {
            background-color: #fff;
            border: 1px solid #dfe5ed;
            -webkit-border-radius: 3px;
            border-radius: 3px
        }
    }

    @media (min-width: 768px) {
        .c-5__li:not(:last-child) {
            margin-bottom: 20px
        }
    }

    @media (min-width: 768px) {
        .c-5__li {
            padding: 20px
        }
    }

    @media (max-width: 767px) {
        .c-5__w {
            min-height: 270px;
            padding: 16px;
            background-color: #fff;
            border: 1px solid #dfe5ed;
            -webkit-border-radius: 3px;
            border-radius: 3px
        }
    }

    @media (min-width: 768px) {
        .c-5__w {
            position: relative;
            padding-left: 56px
        }
    }

    @media (min-width: 768px) {
        .c-5__h {
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
            align-items: center
        }
    }

    .c-5__i {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex
    }

    @media (max-width: 767px) {
        .c-5__i {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-bottom: 10px
        }
    }

    @media (min-width: 768px) {
        .c-5__i {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start
        }
    }

    @media (max-width: 767px) {
        .c-5__i-t {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            margin-bottom: 16px
        }
    }

    @media (min-width: 768px) {
        .c-5__i-t {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }
    }

    @media (min-width: 768px) {
        .c-5__i-b {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 6px
        }
    }

    .c-5__r {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }

    .c-5__r-v {
        margin-right: 5px;
        color: #323d4d;
        font-size: 16px;
        font-weight: 500;
        line-height: 18px
    }

    @media (max-width: 767px) {
        .c-5__c {
            margin-top: 10px
        }
    }

    @media (min-width: 768px) {
        .c-5__c {
            margin-top: 16px;
            padding-left: 16px;
            border-left: 2px solid #e4e7ed
        }
    }

    @media (max-width: 767px) {
        .c-5__av {
            margin-right: 10px
        }
    }

    @media (min-width: 768px) {
        .c-5__av {
            position: absolute;
            top: 0;
            left: 0
        }
    }

    @media (max-width: 767px) {
        .c-5__cs {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }
    }

    @media (min-width: 768px) {
        .c-5__cs {
            margin-right: 8px
        }
    }

    .c-5__cs-n {
        color: #424b59;
        font-size: 16px;
        line-height: 18px
    }

    .c-5__dt {
        font-size: 14px;
        font-weight: 300;
        line-height: 18px
    }

    .c-5__ct {
        font-size: 14px;
        font-weight: 300;
        line-height: 18px
    }

    .c-5__wr {
        font-size: 14px;
        line-height: 18px
    }

    @media (min-width: 768px) {
        .c-5__wr {
            margin-left: 8px
        }
    }

    @media (min-width: 768px) {
        .c-5__wr:before {
            display: inline-block;
            content: '|';
            margin-right: 6px
        }
    }

    .c-5__wr-l {
        font-weight: 300
    }

    .c-5 .p--sm {
        font-size: 16px;
        line-height: 25px
    }

    @media (max-width: 767px) {
        .c-5 .slick-dots {
            bottom: 17px
        }
    }

    .hide {
        display: none
    }</style>
<style>.mfp-bg {
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1042;
        overflow: hidden;
        position: fixed;
        background: #0b0b0b;
        opacity: .8
    }

    .mfp-wrap {
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1043;
        position: fixed;
        outline: 0 !important;
        -webkit-backface-visibility: hidden
    }

    .mfp-container {
        text-align: center;
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        padding: 0 8px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    .mfp-container:before {
        content: '';
        display: inline-block;
        height: 100%;
        vertical-align: middle
    }

    .mfp-align-top .mfp-container:before {
        display: none
    }

    .mfp-content {
        position: relative;
        display: inline-block;
        vertical-align: middle;
        margin: 0 auto;
        text-align: left;
        z-index: 1045
    }

    .mfp-ajax-holder .mfp-content, .mfp-inline-holder .mfp-content {
        width: 100%;
        cursor: auto
    }

    .mfp-ajax-cur {
        cursor: progress
    }

    .mfp-zoom-out-cur, .mfp-zoom-out-cur .mfp-image-holder .mfp-close {
        cursor: -webkit-zoom-out;
        cursor: zoom-out
    }

    .mfp-zoom {
        cursor: pointer;
        cursor: -webkit-zoom-in;
        cursor: zoom-in
    }

    .mfp-auto-cursor .mfp-content {
        cursor: auto
    }

    .mfp-arrow, .mfp-close, .mfp-counter, .mfp-preloader {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .mfp-loading.mfp-figure {
        display: none
    }

    .mfp-hide {
        display: none !important
    }

    .mfp-preloader {
        color: #ccc;
        position: absolute;
        top: 50%;
        width: auto;
        text-align: center;
        margin-top: -.8em;
        left: 8px;
        right: 8px;
        z-index: 1044
    }

    .mfp-preloader a {
        color: #ccc
    }

    .mfp-preloader a:hover {
        color: #fff
    }

    .mfp-s-ready .mfp-preloader {
        display: none
    }

    .mfp-s-error .mfp-content {
        display: none
    }

    button.mfp-arrow, button.mfp-close {
        overflow: visible;
        cursor: pointer;
        background: 0 0;
        border: 0;
        -webkit-appearance: none;
        display: block;
        outline: 0;
        padding: 0;
        z-index: 1046;
        -webkit-box-shadow: none;
        box-shadow: none;
        -ms-touch-action: manipulation;
        touch-action: manipulation
    }

    button::-moz-focus-inner {
        padding: 0;
        border: 0
    }

    .mfp-close {
        width: 44px;
        height: 44px;
        line-height: 44px;
        position: absolute;
        right: 0;
        top: 0;
        text-decoration: none;
        text-align: center;
        opacity: .65;
        padding: 0 0 18px 10px;
        color: #fff;
        font-style: normal;
        font-size: 28px;
        font-family: Arial, Baskerville, monospace
    }

    .mfp-close:focus, .mfp-close:hover {
        opacity: 1
    }

    .mfp-close:active {
        top: 1px
    }

    .mfp-close-btn-in .mfp-close {
        color: #333
    }

    .mfp-iframe-holder .mfp-close, .mfp-image-holder .mfp-close {
        color: #fff;
        right: -6px;
        text-align: right;
        padding-right: 6px;
        width: 100%
    }

    .mfp-counter {
        position: absolute;
        top: 0;
        right: 0;
        color: #ccc;
        font-size: 12px;
        line-height: 18px;
        white-space: nowrap
    }

    .mfp-arrow {
        position: absolute;
        opacity: .65;
        margin: 0;
        top: 50%;
        margin-top: -55px;
        padding: 0;
        width: 90px;
        height: 110px;
        -webkit-tap-highlight-color: transparent
    }

    .mfp-arrow:active {
        margin-top: -54px
    }

    .mfp-arrow:focus, .mfp-arrow:hover {
        opacity: 1
    }

    .mfp-arrow:after, .mfp-arrow:before {
        content: '';
        display: block;
        width: 0;
        height: 0;
        position: absolute;
        left: 0;
        top: 0;
        margin-top: 35px;
        margin-left: 35px;
        border: medium inset transparent
    }

    .mfp-arrow:after {
        border-top-width: 13px;
        border-bottom-width: 13px;
        top: 8px
    }

    .mfp-arrow:before {
        border-top-width: 21px;
        border-bottom-width: 21px;
        opacity: .7
    }

    .mfp-arrow-left {
        left: 0
    }

    .mfp-arrow-left:after {
        border-right: 17px solid #fff;
        margin-left: 31px
    }

    .mfp-arrow-left:before {
        margin-left: 25px;
        border-right: 27px solid #3f3f3f
    }

    .mfp-arrow-right {
        right: 0
    }

    .mfp-arrow-right:after {
        border-left: 17px solid #fff;
        margin-left: 39px
    }

    .mfp-arrow-right:before {
        border-left: 27px solid #3f3f3f
    }

    .mfp-iframe-holder {
        padding-top: 40px;
        padding-bottom: 40px
    }

    .mfp-iframe-holder .mfp-content {
        line-height: 0;
        width: 100%;
        max-width: 900px
    }

    .mfp-iframe-holder .mfp-close {
        top: -40px
    }

    .mfp-iframe-scaler {
        width: 100%;
        height: 0;
        overflow: hidden;
        padding-top: 56.25%
    }

    .mfp-iframe-scaler iframe {
        position: absolute;
        display: block;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .6);
        box-shadow: 0 0 8px rgba(0, 0, 0, .6);
        background: #000
    }

    img.mfp-img {
        width: auto;
        max-width: 100%;
        height: auto;
        display: block;
        line-height: 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 40px 0 40px;
        margin: 0 auto
    }

    .mfp-figure {
        line-height: 0
    }

    .mfp-figure:after {
        content: '';
        position: absolute;
        left: 0;
        top: 40px;
        bottom: 40px;
        display: block;
        right: 0;
        width: auto;
        height: auto;
        z-index: -1;
        -webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .6);
        box-shadow: 0 0 8px rgba(0, 0, 0, .6);
        background: #444
    }

    .mfp-figure small {
        color: #bdbdbd;
        display: block;
        font-size: 12px;
        line-height: 14px
    }

    .mfp-figure figure {
        margin: 0
    }

    .mfp-bottom-bar {
        margin-top: -36px;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        cursor: auto
    }

    .mfp-title {
        text-align: left;
        line-height: 18px;
        color: #f3f3f3;
        word-wrap: break-word;
        padding-right: 36px
    }

    .mfp-image-holder .mfp-content {
        max-width: 100%
    }

    .mfp-gallery .mfp-image-holder .mfp-figure {
        cursor: pointer
    }

    @media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {
        .mfp-img-mobile .mfp-image-holder {
            padding-left: 0;
            padding-right: 0
        }

        .mfp-img-mobile img.mfp-img {
            padding: 0
        }

        .mfp-img-mobile .mfp-figure:after {
            top: 0;
            bottom: 0
        }

        .mfp-img-mobile .mfp-figure small {
            display: inline;
            margin-left: 5px
        }

        .mfp-img-mobile .mfp-bottom-bar {
            background: #000;
            background: rgba(0, 0, 0, .6);
            bottom: 0;
            margin: 0;
            top: auto;
            padding: 3px 5px;
            position: fixed;
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        .mfp-img-mobile .mfp-bottom-bar:empty {
            padding: 0
        }

        .mfp-img-mobile .mfp-counter {
            right: 5px;
            top: 3px
        }

        .mfp-img-mobile .mfp-close {
            top: 0;
            right: 0;
            width: 35px;
            height: 35px;
            line-height: 35px;
            background: #000;
            background: rgba(0, 0, 0, .6);
            position: fixed;
            text-align: center;
            padding: 0
        }
    }

    @media all and (max-width: 900px) {
        .mfp-arrow {
            -webkit-transform: scale(.75);
            -ms-transform: scale(.75);
            transform: scale(.75)
        }

        .mfp-arrow-left {
            -webkit-transform-origin: 0;
            -ms-transform-origin: 0;
            transform-origin: 0
        }

        .mfp-arrow-right {
            -webkit-transform-origin: 100%;
            -ms-transform-origin: 100%;
            transform-origin: 100%
        }

        .mfp-container {
            padding-left: 6px;
            padding-right: 6px
        }
    }</style>
<style>.s-11 {
        position: relative;
        background-color: #242a35
    }

    @media (max-width: 767px) {
        .s-11__c {
            display: none
        }
    }

    .s-11 .l-0 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        margin: 0 auto;
        padding: 0;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        max-width: 1185px
    }

    @media (max-width: 1280px) {
        .s-11 .l-0 {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            max-width: 1185px
        }
    }

    .s-11 .l-0 .text-block {
        margin: 10px auto 0 auto;
        padding: 0;
        color: #fff;
        font-family: Roboto, sans-serif;
        font-weight: 300
    }

    @media (max-width: 1280px) {
        .s-11 .l-0 .text-block {
            margin-bottom: 20px
        }
    }

    .s-11 .l-0 .text-block h2 {
        font-weight: 300
    }

    .s-11 .l-0 .text-block .how_used {
        max-width: 385px;
        width: 100%
    }

    .s-11 .l-0 .order-block {
        max-width: 700px
    }

    .s-11 .h--md, .s-11 .p--md {
        color: #fff;
        text-align: center
    }

    @media (max-width: 767px) {
        .s-11 .p--md {
            margin-bottom: 32px
        }
    }

    @media (min-width: 768px) {
        .s-11 .p--md {
            margin-bottom: 48px
        }
    }

    @media (min-width: 768px) {
        .s-11 .button-group {
            display: none
        }
    }

    @media (max-width: 767px) {
        .s-11__c {
            display: none
        }
    }

    .s-11 .l-0 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        margin: 0 auto;
        padding: 0;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        max-width: 1185px
    }

    @media (max-width: 1280px) {
        .s-11 .l-0 {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            max-width: 1185px
        }
    }

    .s-11 .h--md, .s-11 .p--md {
        color: #fff;
        text-align: center
    }

    @media (max-width: 767px) {
        .s-11 .p--md {
            margin-bottom: 32px
        }
    }

    @media (min-width: 768px) {
        .s-11 .p--md {
            margin-bottom: 48px
        }
    }

    @media (min-width: 768px) {
        .s-11 .button-group {
            display: none
        }
    }</style>
<style>.sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        margin: -1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0
    }

    .sr-only-focusable:active, .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        clip: auto
    }

    [role=button] {
        cursor: pointer
    }

    .caret {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: 2px;
        vertical-align: middle;
        border-top: 4px dashed;
        border-right: 4px solid transparent;
        border-left: 4px solid transparent
    }

    .dropdown, .dropup {
        position: relative
    }

    .dropdown-toggle:focus {
        outline: 0
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 90;
        display: none;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        list-style: none;
        font-size: 14px;
        text-align: left;
        background-color: #fff;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .15);
        -webkit-border-radius: 4px;
        border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        -webkit-background-clip: padding-box;
        background-clip: padding-box
    }

    .dropdown-menu.pull-right {
        right: 0;
        left: auto
    }

    .dropdown-menu .divider {
        height: 1px;
        margin: 9px 0;
        overflow: hidden;
        background-color: #e5e5e5
    }

    .dropdown-menu > li > a {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: 400;
        line-height: 1.42857143;
        color: #333;
        white-space: nowrap
    }

    .dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover {
        text-decoration: none;
        color: #262626;
        background-color: #f5f5f5
    }

    .dropdown-menu > .active > a, .dropdown-menu > .active > a:focus, .dropdown-menu > .active > a:hover {
        color: #fff;
        text-decoration: none;
        outline: 0;
        background-color: #337ab7
    }

    .dropdown-menu > .disabled > a, .dropdown-menu > .disabled > a:focus, .dropdown-menu > .disabled > a:hover {
        color: #777
    }

    .dropdown-menu > .disabled > a:focus, .dropdown-menu > .disabled > a:hover {
        text-decoration: none;
        background-color: transparent;
        background-image: none;
        cursor: not-allowed
    }

    .open > .dropdown-menu {
        display: block
    }

    .open > a {
        outline: 0
    }

    .dropdown-menu-right {
        left: auto;
        right: 0
    }

    .dropdown-menu-left {
        left: 0;
        right: auto
    }

    .dropdown-header {
        display: block;
        padding: 3px 20px;
        font-size: 12px;
        line-height: 1.42857143;
        color: #777;
        white-space: nowrap
    }

    .dropdown-backdrop {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        z-index: 990
    }

    .pull-right > .dropdown-menu {
        right: 0;
        left: auto
    }

    .dropup .caret, .navbar-fixed-bottom .dropdown .caret {
        border-top: 0;
        border-bottom: 4px dashed;
        content: ""
    }

    .dropup .dropdown-menu, .navbar-fixed-bottom .dropdown .dropdown-menu {
        top: auto;
        bottom: 100%;
        margin-bottom: 2px
    }

    @media (min-width: 768px) {
        .navbar-right .dropdown-menu {
            left: auto;
            right: 0
        }

        .navbar-right .dropdown-menu-left {
            left: 0;
            right: auto
        }
    }

    .clearfix:after, .clearfix:before {
        content: " ";
        display: table
    }

    .clearfix:after {
        clear: both
    }

    .center-block {
        display: block;
        margin-left: auto;
        margin-right: auto
    }

    .pull-right {
        float: right !important
    }

    .pull-left {
        float: left !important
    }

    .hide {
        display: none !important
    }

    .show {
        display: block !important
    }

    .invisible {
        visibility: hidden
    }

    .text-hide {
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0
    }

    .hidden {
        display: none !important
    }

    .affix {
        position: fixed
    }

    .c-3__button-decrement, .c-3__button-increment, .dropdown, .select {
        display: none;
        opacity: 0
    }

    .c-3__button-decrement:hover, .c-3__button-increment:hover {
        background-color: #424b59
    }

    .desktop .c-1 .dropdown, .desktop .c-2 .dropdown, .desktop .c-7 .dropdown, .desktop .c-8 .dropdown {
        display: block;
        opacity: 1
    }

    .desktop .c-1 .select, .desktop .c-2 .select, .desktop .c-7 .select, .desktop .c-8 .select {
        display: none
    }

    .desktop .c-1 .c-3__button-decrement, .desktop .c-1 .c-3__button-increment, .desktop .c-2 .c-3__button-decrement, .desktop .c-2 .c-3__button-increment, .desktop .c-7 .c-3__button-decrement, .desktop .c-7 .c-3__button-increment, .desktop .c-8 .c-3__button-decrement, .desktop .c-8 .c-3__button-increment {
        display: block;
        opacity: 1
    }

    .android.mobile .c-1 .select, .android.mobile .c-2 .select, .android.mobile .c-7 .select, .android.mobile .c-8 .select, .android.tablet .c-1 .select, .android.tablet .c-2 .select, .android.tablet .c-7 .select, .android.tablet .c-8 .select, .blackberry.mobile .c-1 .select, .blackberry.mobile .c-2 .select, .blackberry.mobile .c-7 .select, .blackberry.mobile .c-8 .select, .blackberry.tablet .c-1 .select, .blackberry.tablet .c-2 .select, .blackberry.tablet .c-7 .select, .blackberry.tablet .c-8 .select, .fxos.mobile .c-1 .select, .fxos.mobile .c-2 .select, .fxos.mobile .c-7 .select, .fxos.mobile .c-8 .select, .fxos.tablet .c-1 .select, .fxos.tablet .c-2 .select, .fxos.tablet .c-7 .select, .fxos.tablet .c-8 .select, .ios.ipad.tablet .c-1 .select, .ios.ipad.tablet .c-2 .select, .ios.ipad.tablet .c-7 .select, .ios.ipad.tablet .c-8 .select, .ios.iphone.mobile .c-1 .select, .ios.iphone.mobile .c-2 .select, .ios.iphone.mobile .c-7 .select, .ios.iphone.mobile .c-8 .select, .ios.ipod.mobile .c-1 .select, .ios.ipod.mobile .c-2 .select, .ios.ipod.mobile .c-7 .select, .ios.ipod.mobile .c-8 .select, .meego .c-1 .select, .meego .c-2 .select, .meego .c-7 .select, .meego .c-8 .select, .windows.mobile .c-1 .select, .windows.mobile .c-2 .select, .windows.mobile .c-7 .select, .windows.mobile .c-8 .select, .windows.tablet .c-1 .select, .windows.tablet .c-2 .select, .windows.tablet .c-7 .select, .windows.tablet .c-8 .select {
        display: block;
        opacity: 1
    }

    .android.mobile .c-1 .dropdown, .android.mobile .c-2 .dropdown, .android.mobile .c-7 .dropdown, .android.mobile .c-8 .dropdown, .android.tablet .c-1 .dropdown, .android.tablet .c-2 .dropdown, .android.tablet .c-7 .dropdown, .android.tablet .c-8 .dropdown, .blackberry.mobile .c-1 .dropdown, .blackberry.mobile .c-2 .dropdown, .blackberry.mobile .c-7 .dropdown, .blackberry.mobile .c-8 .dropdown, .blackberry.tablet .c-1 .dropdown, .blackberry.tablet .c-2 .dropdown, .blackberry.tablet .c-7 .dropdown, .blackberry.tablet .c-8 .dropdown, .fxos.mobile .c-1 .dropdown, .fxos.mobile .c-2 .dropdown, .fxos.mobile .c-7 .dropdown, .fxos.mobile .c-8 .dropdown, .fxos.tablet .c-1 .dropdown, .fxos.tablet .c-2 .dropdown, .fxos.tablet .c-7 .dropdown, .fxos.tablet .c-8 .dropdown, .ios.ipad.tablet .c-1 .dropdown, .ios.ipad.tablet .c-2 .dropdown, .ios.ipad.tablet .c-7 .dropdown, .ios.ipad.tablet .c-8 .dropdown, .ios.iphone.mobile .c-1 .dropdown, .ios.iphone.mobile .c-2 .dropdown, .ios.iphone.mobile .c-7 .dropdown, .ios.iphone.mobile .c-8 .dropdown, .ios.ipod.mobile .c-1 .dropdown, .ios.ipod.mobile .c-2 .dropdown, .ios.ipod.mobile .c-7 .dropdown, .ios.ipod.mobile .c-8 .dropdown, .meego .c-1 .dropdown, .meego .c-2 .dropdown, .meego .c-7 .dropdown, .meego .c-8 .dropdown, .windows.mobile .c-1 .dropdown, .windows.mobile .c-2 .dropdown, .windows.mobile .c-7 .dropdown, .windows.mobile .c-8 .dropdown, .windows.tablet .c-1 .dropdown, .windows.tablet .c-2 .dropdown, .windows.tablet .c-7 .dropdown, .windows.tablet .c-8 .dropdown {
        display: none
    }

    .android.mobile .c-1 .c-3__button-decrement, .android.mobile .c-1 .c-3__button-increment, .android.mobile .c-2 .c-3__button-decrement, .android.mobile .c-2 .c-3__button-increment, .android.mobile .c-7 .c-3__button-decrement, .android.mobile .c-7 .c-3__button-increment, .android.mobile .c-8 .c-3__button-decrement, .android.mobile .c-8 .c-3__button-increment, .android.tablet .c-1 .c-3__button-decrement, .android.tablet .c-1 .c-3__button-increment, .android.tablet .c-2 .c-3__button-decrement, .android.tablet .c-2 .c-3__button-increment, .android.tablet .c-7 .c-3__button-decrement, .android.tablet .c-7 .c-3__button-increment, .android.tablet .c-8 .c-3__button-decrement, .android.tablet .c-8 .c-3__button-increment, .blackberry.mobile .c-1 .c-3__button-decrement, .blackberry.mobile .c-1 .c-3__button-increment, .blackberry.mobile .c-2 .c-3__button-decrement, .blackberry.mobile .c-2 .c-3__button-increment, .blackberry.mobile .c-7 .c-3__button-decrement, .blackberry.mobile .c-7 .c-3__button-increment, .blackberry.mobile .c-8 .c-3__button-decrement, .blackberry.mobile .c-8 .c-3__button-increment, .blackberry.tablet .c-1 .c-3__button-decrement, .blackberry.tablet .c-1 .c-3__button-increment, .blackberry.tablet .c-2 .c-3__button-decrement, .blackberry.tablet .c-2 .c-3__button-increment, .blackberry.tablet .c-7 .c-3__button-decrement, .blackberry.tablet .c-7 .c-3__button-increment, .blackberry.tablet .c-8 .c-3__button-decrement, .blackberry.tablet .c-8 .c-3__button-increment, .fxos.mobile .c-1 .c-3__button-decrement, .fxos.mobile .c-1 .c-3__button-increment, .fxos.mobile .c-2 .c-3__button-decrement, .fxos.mobile .c-2 .c-3__button-increment, .fxos.mobile .c-7 .c-3__button-decrement, .fxos.mobile .c-7 .c-3__button-increment, .fxos.mobile .c-8 .c-3__button-decrement, .fxos.mobile .c-8 .c-3__button-increment, .fxos.tablet .c-1 .c-3__button-decrement, .fxos.tablet .c-1 .c-3__button-increment, .fxos.tablet .c-2 .c-3__button-decrement, .fxos.tablet .c-2 .c-3__button-increment, .fxos.tablet .c-7 .c-3__button-decrement, .fxos.tablet .c-7 .c-3__button-increment, .fxos.tablet .c-8 .c-3__button-decrement, .fxos.tablet .c-8 .c-3__button-increment, .ios.ipad.tablet .c-1 .c-3__button-decrement, .ios.ipad.tablet .c-1 .c-3__button-increment, .ios.ipad.tablet .c-2 .c-3__button-decrement, .ios.ipad.tablet .c-2 .c-3__button-increment, .ios.ipad.tablet .c-7 .c-3__button-decrement, .ios.ipad.tablet .c-7 .c-3__button-increment, .ios.ipad.tablet .c-8 .c-3__button-decrement, .ios.ipad.tablet .c-8 .c-3__button-increment, .ios.iphone.mobile .c-1 .c-3__button-decrement, .ios.iphone.mobile .c-1 .c-3__button-increment, .ios.iphone.mobile .c-2 .c-3__button-decrement, .ios.iphone.mobile .c-2 .c-3__button-increment, .ios.iphone.mobile .c-7 .c-3__button-decrement, .ios.iphone.mobile .c-7 .c-3__button-increment, .ios.iphone.mobile .c-8 .c-3__button-decrement, .ios.iphone.mobile .c-8 .c-3__button-increment, .ios.ipod.mobile .c-1 .c-3__button-decrement, .ios.ipod.mobile .c-1 .c-3__button-increment, .ios.ipod.mobile .c-2 .c-3__button-decrement, .ios.ipod.mobile .c-2 .c-3__button-increment, .ios.ipod.mobile .c-7 .c-3__button-decrement, .ios.ipod.mobile .c-7 .c-3__button-increment, .ios.ipod.mobile .c-8 .c-3__button-decrement, .ios.ipod.mobile .c-8 .c-3__button-increment, .meego .c-1 .c-3__button-decrement, .meego .c-1 .c-3__button-increment, .meego .c-2 .c-3__button-decrement, .meego .c-2 .c-3__button-increment, .meego .c-7 .c-3__button-decrement, .meego .c-7 .c-3__button-increment, .meego .c-8 .c-3__button-decrement, .meego .c-8 .c-3__button-increment, .windows.mobile .c-1 .c-3__button-decrement, .windows.mobile .c-1 .c-3__button-increment, .windows.mobile .c-2 .c-3__button-decrement, .windows.mobile .c-2 .c-3__button-increment, .windows.mobile .c-7 .c-3__button-decrement, .windows.mobile .c-7 .c-3__button-increment, .windows.mobile .c-8 .c-3__button-decrement, .windows.mobile .c-8 .c-3__button-increment, .windows.tablet .c-1 .c-3__button-decrement, .windows.tablet .c-1 .c-3__button-increment, .windows.tablet .c-2 .c-3__button-decrement, .windows.tablet .c-2 .c-3__button-increment, .windows.tablet .c-7 .c-3__button-decrement, .windows.tablet .c-7 .c-3__button-increment, .windows.tablet .c-8 .c-3__button-decrement, .windows.tablet .c-8 .c-3__button-increment {
        display: block;
        opacity: 1
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .android.mobile .c-2 .c-3__button-decrement, .android.tablet .c-2 .c-3__button-decrement, .blackberry.mobile .c-2 .c-3__button-decrement, .blackberry.tablet .c-2 .c-3__button-decrement, .fxos.mobile .c-2 .c-3__button-decrement, .fxos.tablet .c-2 .c-3__button-decrement, .ios.ipad.tablet .c-2 .c-3__button-decrement, .ios.iphone.mobile .c-2 .c-3__button-decrement, .ios.ipod.mobile .c-2 .c-3__button-decrement, .meego .c-2 .c-3__button-decrement, .windows.mobile .c-2 .c-3__button-decrement, .windows.tablet .c-2 .c-3__button-decrement {
            -webkit-border-radius: 22px 0 0 22px;
            border-radius: 22px 0 0 22px
        }
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .android.mobile .c-2 .c-3__button-increment, .android.tablet .c-2 .c-3__button-increment, .blackberry.mobile .c-2 .c-3__button-increment, .blackberry.tablet .c-2 .c-3__button-increment, .fxos.mobile .c-2 .c-3__button-increment, .fxos.tablet .c-2 .c-3__button-increment, .ios.ipad.tablet .c-2 .c-3__button-increment, .ios.iphone.mobile .c-2 .c-3__button-increment, .ios.ipod.mobile .c-2 .c-3__button-increment, .meego .c-2 .c-3__button-increment, .windows.mobile .c-2 .c-3__button-increment, .windows.tablet .c-2 .c-3__button-increment {
            -webkit-border-radius: 0 22px 22px 0;
            border-radius: 0 22px 22px 0
        }
    }

    .c-1 .select, .c-2 .select {
        position: relative
    }

    .c-3__menu.dropdown-menu {
        width: 100%;
        min-width: 0;
        margin: 0;
        padding: 0;
        background-color: #333945;
        border: 0;
        border-top-color: transparent;
        -webkit-border-radius: 0 0 5px 5px;
        border-radius: 0 0 5px 5px;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .c-3__search {
        left: 0;
        top: -44px;
        height: 44px;
        width: 180px;
        padding: 0 16px;
        max-width: 100%;
        display: inline-block;
        position: absolute;
        outline: 0;
        cursor: pointer;
        border: 0;
        color: #fff;
        -webkit-border-top-left-radius: 5px;
        border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        border-top-right-radius: 5px;
        font: 14px/19px Roboto, sans-serif;
        background-color: #333945;
        -webkit-transition: .2s ease-in-out;
        -o-transition: .2s ease-in-out;
        transition: .2s ease-in-out
    }

    .c-3__search:focus::-webkit-input-placeholder {
        opacity: 0
    }

    .c-3__search:focus::-moz-placeholder {
        opacity: 0
    }

    .c-3__search:focus::-ms-input-placeholder {
        opacity: 0
    }

    .c-3__search:focus::placeholder {
        opacity: 0
    }

    .c-3__search::-webkit-input-placeholder {
        opacity: 1;
        color: #9aa1ab;
        -webkit-transition: .2s ease-in-out;
        -o-transition: .2s ease-in-out;
        transition: .2s ease-in-out
    }

    .c-3__search::-moz-placeholder {
        opacity: 1;
        color: #9aa1ab;
        -webkit-transition: .2s ease-in-out;
        -o-transition: .2s ease-in-out;
        transition: .2s ease-in-out
    }

    .c-3__search::-ms-input-placeholder {
        opacity: 1;
        color: #9aa1ab;
        -webkit-transition: .2s ease-in-out;
        -o-transition: .2s ease-in-out;
        transition: .2s ease-in-out
    }

    .c-3__search::placeholder {
        opacity: 1;
        color: #9aa1ab;
        -webkit-transition: .2s ease-in-out;
        -o-transition: .2s ease-in-out;
        transition: .2s ease-in-out
    }

    .c-3.open .c-3__search {
        border-bottom: 1px solid #444b58
    }

    .c-3__ul {
        max-height: 194px;
        overflow-x: hidden;
        overflow-y: auto;
        list-style: none outside none;
        margin: 0;
        padding: 0;
        background-color: #333945;
        -webkit-border-radius: 0 0 5px 5px;
        border-radius: 0 0 5px 5px
    }

    .c-3__ul__group__label {
        width: 100%;
        display: inline-block;
        padding: 20px 5px 8px 5px;
        color: #8793a6;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .c-3__ul__group:last-child .c-3__li {
        -webkit-border-radius: 0 0 5px 5px;
        border-radius: 0 0 5px 5px
    }

    .c-3 .not__found__for, .c-3__li {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        position: relative;
        height: 44px;
        padding: 0 16px;
        cursor: pointer;
        color: #fff;
        font-size: 14px;
        font-weight: 400;
        line-height: 19px;
        text-align: left;
        white-space: nowrap
    }

    .c-3 .not__found__for:not(.not__found__for):focus, .c-3 .not__found__for:not(.not__found__for):hover, .c-3__li:not(.not__found__for):focus, .c-3__li:not(.not__found__for):hover {
        background-color: #424b59
    }

    .c-3 .not__found__for.not__found__for, .c-3__li.not__found__for {
        color: #afb9c8;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: default !important
    }

    .c-3__dropdown-half .c-3__item {
        padding: 0 16px
    }

    .c-3__dropdown, .c-3__select {
        position: relative;
        width: 100%;
        height: 44px;
        padding: 0 36px 0 16px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: #333945;
        border: 1px solid #333945;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        font-size: 14px;
        font-weight: 300;
        line-height: 19px;
        outline: 0;
        text-align: left
    }

    .c-3__dropdown:focus, .c-3__dropdown:hover, .c-3__select:focus, .c-3__select:hover {
        -moz-outline-style: none;
        z-index: 20
    }

    .c-3__dropdown:hover, .c-3__select:hover {
        border-color: #333945
    }

    .c-3__dropdown-half:hover, .c-3__dropdown:hover {
        background-color: #424b59
    }

    .c-3__dropdown .c-3__selected, .c-3__dropdown-half .c-3__selected {
        max-width: 100%;
        display: inline-block;
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .c-3__dropdown .c-3__placeholder, .c-3__dropdown-half .c-3__placeholder {
        display: none
    }

    .open .c-3__dropdown, .open .c-3__dropdown-half {
        border-bottom: 1px solid #444b58;
        -webkit-border-radius: 5px 5px 0 0;
        border-radius: 5px 5px 0 0
    }

    .open .c-3__dropdown .c-3__selected, .open .c-3__dropdown-half .c-3__selected {
        display: none
    }

    .open .c-3__dropdown .c-3__placeholder, .open .c-3__dropdown-half .c-3__placeholder {
        display: inline;
        color: #9aa1ab;
        font-size: 14px;
        font-weight: 400;
        line-height: 19px;
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .open .c-3__select-arrow {
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg)
    }

    .c-3__dropdown-half {
        position: relative;
        width: 100%;
        height: 44px;
        padding: 0 36px 0 16px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: #333945;
        border: 1px solid #333945;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        font-size: 14px;
        font-weight: 300;
        line-height: 19px;
        outline: 0;
        text-align: left;
        -webkit-border-radius: 0;
        border-radius: 0;
        padding: 0 20px 0 16px
    }

    .c-3__dropdown-half:focus, .c-3__dropdown-half:hover {
        -moz-outline-style: none;
        z-index: 20
    }

    .c-3__dropdown-half:hover {
        border-color: #333945
    }

    .c-3__select-half {
        position: relative;
        width: 100%;
        height: 44px;
        padding: 0 36px 0 16px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: #333945;
        border: 1px solid #333945;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        font-size: 14px;
        font-weight: 300;
        line-height: 19px;
        outline: 0;
        text-align: left;
        -webkit-border-radius: 0;
        border-radius: 0;
        padding: 0 20px 0 16px
    }

    .c-3__select-half:focus, .c-3__select-half:hover {
        -moz-outline-style: none;
        z-index: 20
    }

    .c-3__select-half:hover {
        border-color: #333945
    }

    .open .c-3__dropdown-half {
        -webkit-border-radius: 0;
        border-radius: 0
    }

    .c-3__select-arrow {
        display: block;
        width: 7px;
        height: 7px;
        position: absolute;
        top: 50%;
        right: 15px;
        z-index: 20;
        margin-top: -3px;
        background: url(assets/calculator/select_arrowc456.svg?v1727f34dc50) no-repeat 50% 50%;
        -webkit-background-size: 7px 6px;
        background-size: 7px 6px;
        -webkit-transition: .2s ease-in-out;
        -o-transition: .2s ease-in-out;
        transition: .2s ease-in-out
    }

    .c-3__button-decrement, .c-3__button-increment, .c-3__button-select {
        display: block;
        position: relative;
        width: 50px;
        height: 44px;
        padding: 0;
        background-color: #333945;
        border: 1px solid #333945
    }

    .c-3__button-decrement:focus, .c-3__button-decrement:hover, .c-3__button-increment:focus, .c-3__button-increment:hover, .c-3__button-select:focus, .c-3__button-select:hover {
        z-index: 20
    }

    .c-3__button-decrement:hover, .c-3__button-increment:hover, .c-3__button-select:hover {
        border-color: #333945
    }

    .c-3__button-decrement, .c-3__button-increment {
        cursor: pointer;
        background-position: 50% 50%;
        background-repeat: no-repeat
    }

    .c-3__button-decrement {
        background-image: url(assets/calculator/decrement3d45.svg?v1727f34dc48);
        background-image: url(assets/calculator/decrement3d45.svg?v1727f34dc48);
        -webkit-background-size: 12px 2px;
        background-size: 12px 2px;
        -webkit-border-radius: 5px 0 0 5px;
        border-radius: 5px 0 0 5px;
        margin-right: -1px
    }

    .c-3__button-increment {
        background-image: url(assets/calculator/increment4f82.svg?v1727f34dc4c);
        background-image: url(assets/calculator/increment4f82.svg?v1727f34dc4c);
        -webkit-background-size: 12px 12px;
        background-size: 12px 12px;
        -webkit-border-radius: 0 5px 5px 0;
        border-radius: 0 5px 5px 0;
        margin-left: -1px
    }

    .c-7 .select, .c-8 .select {
        position: relative
    }

    .c-9__menu.dropdown-menu {
        width: 100%;
        min-width: 0;
        margin: 0;
        padding: 0;
        background-color: #fff;
        border: 1px solid #d3d8de;
        border-top-color: transparent;
        -webkit-border-radius: 0 0 5px 5px;
        border-radius: 0 0 5px 5px;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    @media (max-width: 767px) {
        .c-9__menu.dropdown-menu {
            border-color: #fff
        }
    }

    .c-9__ul {
        margin: -1px 0 0 0;
        padding: 0;
        max-height: 194px;
        overflow-x: hidden;
        overflow-y: auto;
        list-style: none outside none;
        background-color: #fff;
        -webkit-border-radius: 0 0 5px 5px;
        border-radius: 0 0 5px 5px
    }

    .c-9__ul__group__label {
        width: 100%;
        display: inline-block;
        padding: 20px 5px 8px 5px;
        color: #8793a6;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .c-9__ul__group:last-child .c-9__li {
        -webkit-border-radius: 0 0 5px 5px;
        border-radius: 0 0 5px 5px
    }

    .c-9__search {
        left: 0;
        top: -44px;
        height: 43px;
        width: 180px;
        padding: 0 16px;
        max-width: 100%;
        display: inline-block;
        position: absolute;
        outline: 0;
        cursor: pointer;
        border: 0;
        color: #424b59;
        -webkit-border-top-left-radius: 5px;
        border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        border-top-right-radius: 5px;
        font: 14px/19px Roboto, sans-serif;
        background-color: #fff;
        -webkit-transition: .2s ease-in-out;
        -o-transition: .2s ease-in-out;
        transition: .2s ease-in-out
    }

    .c-9__search:focus::-webkit-input-placeholder {
        opacity: 0
    }

    .c-9__search:focus::-moz-placeholder {
        opacity: 0
    }

    .c-9__search:focus::-ms-input-placeholder {
        opacity: 0
    }

    .c-9__search:focus::placeholder {
        opacity: 0
    }

    .c-9__search::-webkit-input-placeholder {
        opacity: 1;
        color: #9aa1ab;
        -webkit-transition: .2s ease-in-out;
        -o-transition: .2s ease-in-out;
        transition: .2s ease-in-out
    }

    .c-9__search::-moz-placeholder {
        opacity: 1;
        color: #9aa1ab;
        -webkit-transition: .2s ease-in-out;
        -o-transition: .2s ease-in-out;
        transition: .2s ease-in-out
    }

    .c-9__search::-ms-input-placeholder {
        opacity: 1;
        color: #9aa1ab;
        -webkit-transition: .2s ease-in-out;
        -o-transition: .2s ease-in-out;
        transition: .2s ease-in-out
    }

    .c-9__search::placeholder {
        opacity: 1;
        color: #9aa1ab;
        -webkit-transition: .2s ease-in-out;
        -o-transition: .2s ease-in-out;
        transition: .2s ease-in-out
    }

    .c-9.open .c-9__search {
        border-bottom: 1px solid #d3d8de
    }

    .c-9 .not__found__for, .c-9__li {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        position: relative;
        height: 43px;
        padding: 0 16px;
        cursor: pointer;
        color: #424b59;
        font-size: 14px;
        font-weight: 400;
        line-height: 19px;
        text-align: left;
        white-space: nowrap
    }

    .c-9 .not__found__for:focus, .c-9 .not__found__for:hover, .c-9__li:focus, .c-9__li:hover {
        background-color: #fff
    }

    .c-9 .not__found__for {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: default !important
    }

    .c-9__dropdown-half .c-9__item {
        padding: 0 16px
    }

    .c-9__dropdown, .c-9__select {
        position: relative;
        width: 100%;
        height: 44px;
        padding: 0 36px 0 16px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: #fff;
        border: 1px solid #d3d8de;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        color: #424b59;
        cursor: pointer;
        font-size: 14px;
        font-weight: 300;
        line-height: 19px;
        outline: 0;
        text-align: left
    }

    @media (max-width: 767px) {
        .c-9__dropdown, .c-9__select {
            border-color: #fff
        }
    }

    .c-9__dropdown:focus, .c-9__dropdown:hover, .c-9__select:focus, .c-9__select:hover {
        -moz-outline-style: none;
        z-index: 20
    }

    @media (min-width: 768px) {
        .c-9__dropdown:hover, .c-9__select:hover {
            border-color: #d3d8de
        }
    }

    @media (min-width: 768px) {
        .c-8 .c-9__dropdown, .c-8 .c-9__select {
            position: relative;
            width: 100%;
            height: 44px;
            padding: 0 36px 0 16px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: #fff;
            border: 1px solid #fff;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            color: #424b59;
            cursor: pointer;
            font-size: 14px;
            font-weight: 300;
            line-height: 19px;
            outline: 0;
            text-align: left
        }
    }

    @media (min-width: 768px) and (max-width: 767px) {
        .c-8 .c-9__dropdown, .c-8 .c-9__select {
            border-color: #fff
        }
    }

    @media (min-width: 768px) {
        .c-8 .c-9__dropdown:focus, .c-8 .c-9__dropdown:hover, .c-8 .c-9__select:focus, .c-8 .c-9__select:hover {
            -moz-outline-style: none;
            z-index: 20
        }
    }

    @media (min-width: 768px) and (min-width: 768px) {
        .c-8 .c-9__dropdown:hover, .c-8 .c-9__select:hover {
            border-color: #d3d8de
        }
    }

    .c-9__dropdown .c-9__selected, .c-9__dropdown-half .c-9__selected {
        display: inline;
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .c-9__dropdown .c-9__placeholder, .c-9__dropdown-half .c-9__placeholder {
        display: none
    }

    .open .c-9__dropdown, .open .c-9__dropdown-half {
        border-bottom: 1px solid #d3d8de;
        -webkit-border-radius: 5px 5px 0 0;
        border-radius: 5px 5px 0 0
    }

    @media (max-width: 767px) {
        .open .c-9__dropdown, .open .c-9__dropdown-half {
            border-color: #fff
        }
    }

    .open .c-9__dropdown .c-9__selected, .open .c-9__dropdown-half .c-9__selected {
        display: none
    }

    .open .c-9__dropdown .c-9__placeholder, .open .c-9__dropdown-half .c-9__placeholder {
        display: inline;
        color: #9aa1ab;
        font-size: 14px;
        font-weight: 400;
        line-height: 19px;
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .open .c-9__select-arrow {
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg)
    }

    .c-9__dropdown-half {
        position: relative;
        width: 100%;
        height: 44px;
        padding: 0 36px 0 16px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: #fff;
        border: 1px solid #d3d8de;
        -webkit-border-radius: 0;
        border-radius: 0;
        color: #424b59;
        cursor: pointer;
        font-size: 14px;
        font-weight: 300;
        line-height: 19px;
        outline: 0;
        text-align: left;
        padding: 0 20px 0 16px
    }

    @media (max-width: 767px) {
        .c-9__dropdown-half {
            border-color: #fff
        }
    }

    .c-9__dropdown-half:focus, .c-9__dropdown-half:hover {
        -moz-outline-style: none;
        z-index: 20
    }

    @media (min-width: 768px) {
        .c-9__dropdown-half:hover {
            border-color: #d3d8de
        }
    }

    @media (max-width: 767px) {
        .c-9__dropdown-half, .c-9__dropdown-half:focus, .c-9__dropdown-half:hover {
            z-index: 30;
            border-left: 1px solid #d3d8de;
            border-right: 1px solid #d3d8de
        }
    }

    @media (min-width: 768px) {
        .c-8 .c-9__dropdown-half, .c-8 .c-9__dropdown-half:focus, .c-8 .c-9__dropdown-half:hover {
            position: relative;
            width: 100%;
            height: 44px;
            padding: 0 36px 0 16px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: #fff;
            border: 1px solid #fff;
            -webkit-border-radius: 0;
            border-radius: 0;
            color: #424b59;
            cursor: pointer;
            font-size: 14px;
            font-weight: 300;
            line-height: 19px;
            outline: 0;
            text-align: left;
            z-index: 30;
            border-left: 1px solid #d3d8de;
            border-right: 1px solid #d3d8de
        }
    }

    @media (min-width: 768px) and (max-width: 767px) {
        .c-8 .c-9__dropdown-half, .c-8 .c-9__dropdown-half:focus, .c-8 .c-9__dropdown-half:hover {
            border-color: #fff
        }
    }

    @media (min-width: 768px) {
        .c-8 .c-9__dropdown-half:focus, .c-8 .c-9__dropdown-half:focus:focus, .c-8 .c-9__dropdown-half:focus:hover, .c-8 .c-9__dropdown-half:hover, .c-8 .c-9__dropdown-half:hover:focus, .c-8 .c-9__dropdown-half:hover:hover {
            -moz-outline-style: none;
            z-index: 20
        }
    }

    @media (min-width: 768px) and (min-width: 768px) {
        .c-8 .c-9__dropdown-half:focus:hover, .c-8 .c-9__dropdown-half:hover, .c-8 .c-9__dropdown-half:hover:hover {
            border-color: #d3d8de
        }
    }

    .c-9__select-half {
        position: relative;
        width: 100%;
        height: 44px;
        padding: 0 36px 0 16px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: #fff;
        border: 1px solid #d3d8de;
        -webkit-border-radius: 0;
        border-radius: 0;
        color: #424b59;
        cursor: pointer;
        font-size: 14px;
        font-weight: 300;
        line-height: 19px;
        outline: 0;
        text-align: left;
        padding: 0 20px 0 16px
    }

    @media (max-width: 767px) {
        .c-9__select-half {
            border-color: #fff
        }
    }

    .c-9__select-half:focus, .c-9__select-half:hover {
        -moz-outline-style: none;
        z-index: 20
    }

    @media (min-width: 768px) {
        .c-9__select-half:hover {
            border-color: #d3d8de
        }
    }

    @media (min-width: 768px) {
        .c-8 .c-9__select-half {
            position: relative;
            width: 100%;
            height: 44px;
            padding: 0 36px 0 16px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: #fff;
            border: 1px solid #fff;
            -webkit-border-radius: 0;
            border-radius: 0;
            color: #424b59;
            cursor: pointer;
            font-size: 14px;
            font-weight: 300;
            line-height: 19px;
            outline: 0;
            text-align: left
        }
    }

    @media (min-width: 768px) and (max-width: 767px) {
        .c-8 .c-9__select-half {
            border-color: #fff
        }
    }

    @media (min-width: 768px) {
        .c-8 .c-9__select-half:focus, .c-8 .c-9__select-half:hover {
            -moz-outline-style: none;
            z-index: 20
        }
    }

    @media (min-width: 768px) and (min-width: 768px) {
        .c-8 .c-9__select-half:hover {
            border-color: #d3d8de
        }
    }

    .open .c-9__dropdown-half {
        -webkit-border-radius: 0;
        border-radius: 0
    }

    .c-9__select-arrow {
        display: block;
        width: 7px;
        height: 7px;
        position: absolute;
        top: 50%;
        right: 15px;
        z-index: 20;
        margin-top: -3px;
        background: url(assets/calculator/select_arrowc456.svg?v1727f34dc50) no-repeat 50% 50%;
        -webkit-background-size: 7px 6px;
        background-size: 7px 6px;
        -webkit-transition: .2s ease-in-out;
        -o-transition: .2s ease-in-out;
        transition: .2s ease-in-out
    }

    .c-9__button-decrement, .c-9__button-increment, .c-9__button-select {
        display: block;
        position: relative;
        width: 50px;
        height: 44px;
        padding: 0;
        background-color: #fff;
        border: 1px solid #d3d8de
    }

    @media (max-width: 767px) {
        .c-9__button-decrement, .c-9__button-increment, .c-9__button-select {
            border-color: #fff
        }
    }

    .c-9__button-decrement:focus, .c-9__button-decrement:hover, .c-9__button-increment:focus, .c-9__button-increment:hover, .c-9__button-select:focus, .c-9__button-select:hover {
        z-index: 20
    }

    @media (min-width: 768px) {
        .c-9__button-decrement:hover, .c-9__button-increment:hover, .c-9__button-select:hover {
            border-color: #d3d8de
        }
    }

    .c-9__button-decrement, .c-9__button-increment {
        cursor: pointer;
        background-position: 50% 50%;
        background-repeat: no-repeat
    }

    .c-8 .c-9__button-decrement, .c-8 .c-9__button-increment {
        border-color: #fff
    }

    .c-9__button-decrement {
        background-image: url(assets/calculator/decrement_dark3d45.svg?v1727f34dc48);
        background-image: url(assets/calculator/decrement_dark3d45.svg?v1727f34dc48);
        -webkit-background-size: 12px 2px;
        background-size: 12px 2px;
        -webkit-border-radius: 5px 0 0 5px;
        border-radius: 5px 0 0 5px;
        margin-right: -1px
    }

    .c-9__button-increment {
        background-image: url(assets/calculator/increment_dark4f82.svg?v1727f34dc4c);
        background-image: url(assets/calculator/increment_dark4f82.svg?v1727f34dc4c);
        -webkit-background-size: 12px 12px;
        background-size: 12px 12px;
        -webkit-border-radius: 0 5px 5px 0;
        border-radius: 0 5px 5px 0;
        margin-left: -1px
    }

    .c-9__button-decrement:hover, .c-9__button-increment:hover, .c-9__dropdown-half:hover, .c-9__dropdown:hover, .c-9__select:hover {
        border-color: #bec4cc !important
    }

    .c-9__li:hover {
        background-color: #f4f9ff !important
    }

    @media (max-width: 767px) {
        .c-7 {
            width: 256px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: reverse;
            -webkit-flex-direction: column-reverse;
            -ms-flex-direction: column-reverse;
            flex-direction: column-reverse
        }
    }

    @media (min-width: 768px) {
        .c-7 {
            width: 306px;
            padding: 24px 32px 32px;
            background-color: #fff;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .1)
        }
    }

    @media (max-width: 767px) {
        .c-7__header {
            display: none
        }
    }

    @media (min-width: 768px) {
        .c-7__header {
            margin-bottom: 16px
        }
    }

    @media (max-width: 767px) {
        .c-7__main {
            margin-bottom: 16px
        }
    }

    @media (min-width: 768px) {
        .c-7__main {
            height: 228px;
            max-height: 228px;
            margin-bottom: 20px
        }
    }

    @media (max-width: 767px) {
        .c-7__row:not(:last-child) {
            margin-bottom: 10px
        }
    }

    @media (min-width: 768px) {
        .c-7__row:not(:last-child) {
            margin-bottom: 16px
        }
    }

    .c-7__group {
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
        align-items: center
    }

    .c-7__element {
        position: relative
    }

    .c-7__element:nth-child(2) {
        -webkit-box-flex: 1;
        -webkit-flex: 1 1 0%;
        -ms-flex: 1 1 0%;
        flex: 1 1 0%
    }

    .c-7__footer {
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

    .c-7__footer .button-filled__primary {
        width: 100%
    }

    .c-7__price {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        width: 100%;
        margin-bottom: 16px
    }

    @media (max-width: 767px) {
        .c-7__price {
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            color: #fff
        }
    }

    @media (min-width: 768px) {
        .c-7__price {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            color: #424b59
        }
    }

    .c-7__price .discount {
        margin-left: 7px;
        padding: 1px 4px;
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
        justify-content: center;
        color: #fff;
        font-size: 16px;
        line-height: 19px;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        background-color: #57a818
    }

    .c-7__price-label {
        margin-right: 4px;
        font-size: 14px;
        line-height: 16px
    }

    .c-7__price-value {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        font-size: 18px;
        font-weight: 500;
        line-height: 21px
    }

    .c-7 .h--sm {
        margin: 0;
        color: #424b59;
        font-weight: 400
    }

    .c-7__nameplate {
        margin-top: 16px;
        padding: 9px 4px 9px 7px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        position: relative;
        -webkit-box-align: start;
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-border-radius: 4px;
        border-radius: 4px
    }

    @media (max-width: 767px) {
        .c-7__nameplate {
            padding-right: 0;
            margin: 0 0 10px
        }
    }

    @media (min-width: 768px) {
        .c-7__nameplate {
            border: 1px dashed #d3d8de
        }
    }

    .c-7__nameplate .icon__wrap {
        margin-right: 6px;
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    @media (max-width: 767px) {
        .c-7__nameplate .icon__wrap {
            margin-right: 4px
        }
    }

    .c-7__nameplate .icon__wrap span {
        margin-top: -4px;
        display: inline-block;
        color: #e89b00
    }

    .c-7__nameplate__icon {
        margin-right: 6px
    }

    @media (max-width: 767px) {
        .c-7__nameplate__icon {
            margin-right: 4px
        }
    }

    .c-7__nameplate__inner {
        color: #4a5360;
        line-height: 16px;
        font-family: Roboto, sans-serif
    }

    @media (max-width: 767px) {
        .c-7__nameplate__inner {
            color: #fff;
            text-align: left
        }
    }

    .c-7__nameplate__title {
        font-size: 14px;
        font-weight: 700;
        text-align: left
    }

    @media (max-width: 767px) {
        .c-7__nameplate__title {
            display: inline-block;
            float: left;
            font-weight: 400
        }
    }

    .c-7__nameplate__text {
        font-size: 9.5px;
        font-weight: 500;
        line-height: 11px
    }

    @media (max-width: 767px) {
        .c-7__nameplate__text {
            font-size: 14px;
            line-height: 16px
        }
    }

    .c-2 {
        max-width: 694px;
        margin: 0 auto
    }

    .c-2__form {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        width: 100%
    }

    .c-2__main {
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
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        width: 456px
    }

    .c-2__row {
        width: -webkit-calc(50% - 10px);
        width: calc(50% - 10px)
    }

    .c-2__row:nth-child(2n+1) {
        margin-right: 10px
    }

    .c-2__row:nth-child(2n) {
        margin-left: 10px
    }

    .c-2__row:nth-child(n+3) {
        margin-top: 20px
    }

    .c-2__group {
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
        align-items: center
    }

    .c-2__element {
        position: relative
    }

    .c-2__element:nth-child(2) {
        -webkit-box-flex: 1;
        -webkit-flex: 1 1 0%;
        -ms-flex: 1 1 0%;
        flex: 1 1 0%;
        padding: 0 2px
    }

    .c-2__result {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        width: 218px;
        margin-left: 20px
    }

    .c-2__result .button-filled__primary {
        width: 100%
    }

    .c-2__price {
        width: 100%;
        height: 44px;
        margin-bottom: 20px;
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
        justify-content: space-between;
        color: #fff
    }

    .c-2__price__inner {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }

    .c-2__price--min {
        color: #fff;
        font-size: 22px;
        line-height: 26px
    }

    .c-2__price--per-page {
        margin-right: 7px;
        color: #fff;
        font-size: 22px;
        line-height: 26px
    }

    .c-2__price .discount {
        padding: 2px 4px;
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
        justify-content: center;
        color: #fff;
        font-size: 16px;
        line-height: 19px;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        background-color: #57a818
    }

    .c-2__price__label {
        font-size: 12px;
        line-height: 12px
    }

    .c-2__price-value {
        font-size: 18px;
        font-weight: 500;
        line-height: 21px
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .c-2 .c-3__select {
            -webkit-border-radius: 22px;
            border-radius: 22px
        }
    }</style>
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