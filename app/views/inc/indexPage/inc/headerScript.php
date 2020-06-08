   <script class="script--head">!function (e, t) {
        "use strict";
        "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function (e) {
            if (!e.document) throw new Error("jQuery requires a window with a document");
            return t(e)
        } : t(e)
    }("undefined" != typeof window ? window : this, function (e, t) {
        "use strict";
        var n = [], r = e.document, o = Object.getPrototypeOf, i = n.slice, a = n.concat, s = n.push, u = n.indexOf,
            l = {}, c = l.toString, f = l.hasOwnProperty, d = f.toString, p = d.call(Object), h = {}, g = function (e) {
                return "function" == typeof e && "number" != typeof e.nodeType
            }, v = function (e) {
                return null != e && e === e.window
            }, m = {type: !0, src: !0, nonce: !0, noModule: !0};

        function y(e, t, n) {
            var o, i, a = (n = n || r).createElement("script");
            if (a.text = e, t) for (o in m) (i = t[o] || t.getAttribute && t.getAttribute(o)) && a.setAttribute(o, i);
            n.head.appendChild(a).parentNode.removeChild(a)
        }

        function b(e) {
            return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? l[c.call(e)] || "object" : typeof e
        }

        var x = "3.4.0", w = function (e, t) {
            return new w.fn.init(e, t)
        }, T = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;

        function C(e) {
            var t = !!e && "length" in e && e.length, n = b(e);
            return !g(e) && !v(e) && ("array" === n || 0 === t || "number" == typeof t && 0 < t && t - 1 in e)
        }

        w.fn = w.prototype = {
            jquery: x, constructor: w, length: 0, toArray: function () {
                return i.call(this)
            }, get: function (e) {
                return null == e ? i.call(this) : e < 0 ? this[e + this.length] : this[e]
            }, pushStack: function (e) {
                var t = w.merge(this.constructor(), e);
                return t.prevObject = this, t
            }, each: function (e) {
                return w.each(this, e)
            }, map: function (e) {
                return this.pushStack(w.map(this, function (t, n) {
                    return e.call(t, n, t)
                }))
            }, slice: function () {
                return this.pushStack(i.apply(this, arguments))
            }, first: function () {
                return this.eq(0)
            }, last: function () {
                return this.eq(-1)
            }, eq: function (e) {
                var t = this.length, n = +e + (e < 0 ? t : 0);
                return this.pushStack(0 <= n && n < t ? [this[n]] : [])
            }, end: function () {
                return this.prevObject || this.constructor()
            }, push: s, sort: n.sort, splice: n.splice
        }, w.extend = w.fn.extend = function () {
            var e, t, n, r, o, i, a = arguments[0] || {}, s = 1, u = arguments.length, l = !1;
            for ("boolean" == typeof a && (l = a, a = arguments[s] || {}, s++), "object" == typeof a || g(a) || (a = {}), s === u && (a = this, s--); s < u; s++) if (null != (e = arguments[s])) for (t in e) r = e[t], "__proto__" !== t && a !== r && (l && r && (w.isPlainObject(r) || (o = Array.isArray(r))) ? (n = a[t], i = o && !Array.isArray(n) ? [] : o || w.isPlainObject(n) ? n : {}, o = !1, a[t] = w.extend(l, i, r)) : void 0 !== r && (a[t] = r));
            return a
        }, w.extend({
            expando: "jQuery" + (x + Math.random()).replace(/\D/g, ""), isReady: !0, error: function (e) {
                throw new Error(e)
            }, noop: function () {
            }, isPlainObject: function (e) {
                var t, n;
                return !(!e || "[object Object]" !== c.call(e) || (t = o(e)) && ("function" != typeof (n = f.call(t, "constructor") && t.constructor) || d.call(n) !== p))
            }, isEmptyObject: function (e) {
                var t;
                for (t in e) return !1;
                return !0
            }, globalEval: function (e, t) {
                y(e, {nonce: t && t.nonce})
            }, each: function (e, t) {
                var n, r = 0;
                if (C(e)) for (n = e.length; r < n && !1 !== t.call(e[r], r, e[r]); r++) ; else for (r in e) if (!1 === t.call(e[r], r, e[r])) break;
                return e
            }, trim: function (e) {
                return null == e ? "" : (e + "").replace(T, "")
            }, makeArray: function (e, t) {
                var n = t || [];
                return null != e && (C(Object(e)) ? w.merge(n, "string" == typeof e ? [e] : e) : s.call(n, e)), n
            }, inArray: function (e, t, n) {
                return null == t ? -1 : u.call(t, e, n)
            }, merge: function (e, t) {
                for (var n = +t.length, r = 0, o = e.length; r < n; r++) e[o++] = t[r];
                return e.length = o, e
            }, grep: function (e, t, n) {
                for (var r = [], o = 0, i = e.length, a = !n; o < i; o++) !t(e[o], o) !== a && r.push(e[o]);
                return r
            }, map: function (e, t, n) {
                var r, o, i = 0, s = [];
                if (C(e)) for (r = e.length; i < r; i++) null != (o = t(e[i], i, n)) && s.push(o); else for (i in e) null != (o = t(e[i], i, n)) && s.push(o);
                return a.apply([], s)
            }, guid: 1, support: h
        }), "function" == typeof Symbol && (w.fn[Symbol.iterator] = n[Symbol.iterator]), w.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function (e, t) {
            l["[object " + t + "]"] = t.toLowerCase()
        });
        var k = function (e) {
            var t, n, r, o, i, a, s, u, l, c, f, d, p, h, g, v, m, y, b, x = "sizzle" + 1 * new Date, w = e.document,
                T = 0, C = 0, k = ue(), E = ue(), S = ue(), N = ue(), A = function (e, t) {
                    return e === t && (f = !0), 0
                }, D = {}.hasOwnProperty, j = [], L = j.pop, q = j.push, H = j.push, P = j.slice, O = function (e, t) {
                    for (var n = 0, r = e.length; n < r; n++) if (e[n] === t) return n;
                    return -1
                },
                R = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
                M = "[\\x20\\t\\r\\n\\f]", I = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",
                W = "\\[" + M + "*(" + I + ")(?:" + M + "*([*^$|!~]?=)" + M + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + I + "))|)" + M + "*\\]",
                $ = ":(" + I + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + W + ")*)|.*)\\)|)",
                F = new RegExp(M + "+", "g"), B = new RegExp("^" + M + "+|((?:^|[^\\\\])(?:\\\\.)*)" + M + "+$", "g"),
                _ = new RegExp("^" + M + "*," + M + "*"), z = new RegExp("^" + M + "*([>+~]|" + M + ")" + M + "*"),
                U = new RegExp(M + "|>"), X = new RegExp($), V = new RegExp("^" + I + "$"), G = {
                    ID: new RegExp("^#(" + I + ")"),
                    CLASS: new RegExp("^\\.(" + I + ")"),
                    TAG: new RegExp("^(" + I + "|[*])"),
                    ATTR: new RegExp("^" + W),
                    PSEUDO: new RegExp("^" + $),
                    CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + M + "*(even|odd|(([+-]|)(\\d*)n|)" + M + "*(?:([+-]|)" + M + "*(\\d+)|))" + M + "*\\)|)", "i"),
                    bool: new RegExp("^(?:" + R + ")$", "i"),
                    needsContext: new RegExp("^" + M + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + M + "*((?:-\\d)?\\d*)" + M + "*\\)|)(?=[^-]|$)", "i")
                }, Y = /HTML$/i, Q = /^(?:input|select|textarea|button)$/i, J = /^h\d$/i, K = /^[^{]+\{\s*\[native \w/,
                Z = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/, ee = /[+~]/,
                te = new RegExp("\\\\([\\da-f]{1,6}" + M + "?|(" + M + ")|.)", "ig"), ne = function (e, t, n) {
                    var r = "0x" + t - 65536;
                    return r != r || n ? t : r < 0 ? String.fromCharCode(r + 65536) : String.fromCharCode(r >> 10 | 55296, 1023 & r | 56320)
                }, re = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g, oe = function (e, t) {
                    return t ? "\0" === e ? "�" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e
                }, ie = function () {
                    d()
                }, ae = xe(function (e) {
                    return !0 === e.disabled && "fieldset" === e.nodeName.toLowerCase()
                }, {dir: "parentNode", next: "legend"});
            try {
                H.apply(j = P.call(w.childNodes), w.childNodes), j[w.childNodes.length].nodeType
            } catch (t) {
                H = {
                    apply: j.length ? function (e, t) {
                        q.apply(e, P.call(t))
                    } : function (e, t) {
                        for (var n = e.length, r = 0; e[n++] = t[r++];) ;
                        e.length = n - 1
                    }
                }
            }

            function se(e, t, r, o) {
                var i, s, l, c, f, h, m, y = t && t.ownerDocument, T = t ? t.nodeType : 9;
                if (r = r || [], "string" != typeof e || !e || 1 !== T && 9 !== T && 11 !== T) return r;
                if (!o && ((t ? t.ownerDocument || t : w) !== p && d(t), t = t || p, g)) {
                    if (11 !== T && (f = Z.exec(e))) if (i = f[1]) {
                        if (9 === T) {
                            if (!(l = t.getElementById(i))) return r;
                            if (l.id === i) return r.push(l), r
                        } else if (y && (l = y.getElementById(i)) && b(t, l) && l.id === i) return r.push(l), r
                    } else {
                        if (f[2]) return H.apply(r, t.getElementsByTagName(e)), r;
                        if ((i = f[3]) && n.getElementsByClassName && t.getElementsByClassName) return H.apply(r, t.getElementsByClassName(i)), r
                    }
                    if (n.qsa && !N[e + " "] && (!v || !v.test(e)) && (1 !== T || "object" !== t.nodeName.toLowerCase())) {
                        if (m = e, y = t, 1 === T && U.test(e)) {
                            for ((c = t.getAttribute("id")) ? c = c.replace(re, oe) : t.setAttribute("id", c = x), s = (h = a(e)).length; s--;) h[s] = "#" + c + " " + be(h[s]);
                            m = h.join(","), y = ee.test(e) && me(t.parentNode) || t
                        }
                        try {
                            return H.apply(r, y.querySelectorAll(m)), r
                        } catch (t) {
                            N(e, !0)
                        } finally {
                            c === x && t.removeAttribute("id")
                        }
                    }
                }
                return u(e.replace(B, "$1"), t, r, o)
            }

            function ue() {
                var e = [];
                return function t(n, o) {
                    return e.push(n + " ") > r.cacheLength && delete t[e.shift()], t[n + " "] = o
                }
            }

            function le(e) {
                return e[x] = !0, e
            }

            function ce(e) {
                var t = p.createElement("fieldset");
                try {
                    return !!e(t)
                } catch (e) {
                    return !1
                } finally {
                    t.parentNode && t.parentNode.removeChild(t), t = null
                }
            }

            function fe(e, t) {
                for (var n = e.split("|"), o = n.length; o--;) r.attrHandle[n[o]] = t
            }

            function de(e, t) {
                var n = t && e, r = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
                if (r) return r;
                if (n) for (; n = n.nextSibling;) if (n === t) return -1;
                return e ? 1 : -1
            }

            function pe(e) {
                return function (t) {
                    return "input" === t.nodeName.toLowerCase() && t.type === e
                }
            }

            function he(e) {
                return function (t) {
                    var n = t.nodeName.toLowerCase();
                    return ("input" === n || "button" === n) && t.type === e
                }
            }

            function ge(e) {
                return function (t) {
                    return "form" in t ? t.parentNode && !1 === t.disabled ? "label" in t ? "label" in t.parentNode ? t.parentNode.disabled === e : t.disabled === e : t.isDisabled === e || t.isDisabled !== !e && ae(t) === e : t.disabled === e : "label" in t && t.disabled === e
                }
            }

            function ve(e) {
                return le(function (t) {
                    return t = +t, le(function (n, r) {
                        for (var o, i = e([], n.length, t), a = i.length; a--;) n[o = i[a]] && (n[o] = !(r[o] = n[o]))
                    })
                })
            }

            function me(e) {
                return e && void 0 !== e.getElementsByTagName && e
            }

            for (t in n = se.support = {}, i = se.isXML = function (e) {
                var t = e.namespaceURI, n = (e.ownerDocument || e).documentElement;
                return !Y.test(t || n && n.nodeName || "HTML")
            }, d = se.setDocument = function (e) {
                var t, o, a = e ? e.ownerDocument || e : w;
                return a !== p && 9 === a.nodeType && a.documentElement && (h = (p = a).documentElement, g = !i(p), w !== p && (o = p.defaultView) && o.top !== o && (o.addEventListener ? o.addEventListener("unload", ie, !1) : o.attachEvent && o.attachEvent("onunload", ie)), n.attributes = ce(function (e) {
                    return e.className = "i", !e.getAttribute("className")
                }), n.getElementsByTagName = ce(function (e) {
                    return e.appendChild(p.createComment("")), !e.getElementsByTagName("*").length
                }), n.getElementsByClassName = K.test(p.getElementsByClassName), n.getById = ce(function (e) {
                    return h.appendChild(e).id = x, !p.getElementsByName || !p.getElementsByName(x).length
                }), n.getById ? (r.filter.ID = function (e) {
                    var t = e.replace(te, ne);
                    return function (e) {
                        return e.getAttribute("id") === t
                    }
                }, r.find.ID = function (e, t) {
                    if (void 0 !== t.getElementById && g) {
                        var n = t.getElementById(e);
                        return n ? [n] : []
                    }
                }) : (r.filter.ID = function (e) {
                    var t = e.replace(te, ne);
                    return function (e) {
                        var n = void 0 !== e.getAttributeNode && e.getAttributeNode("id");
                        return n && n.value === t
                    }
                }, r.find.ID = function (e, t) {
                    if (void 0 !== t.getElementById && g) {
                        var n, r, o, i = t.getElementById(e);
                        if (i) {
                            if ((n = i.getAttributeNode("id")) && n.value === e) return [i];
                            for (o = t.getElementsByName(e), r = 0; i = o[r++];) if ((n = i.getAttributeNode("id")) && n.value === e) return [i]
                        }
                        return []
                    }
                }), r.find.TAG = n.getElementsByTagName ? function (e, t) {
                    return void 0 !== t.getElementsByTagName ? t.getElementsByTagName(e) : n.qsa ? t.querySelectorAll(e) : void 0
                } : function (e, t) {
                    var n, r = [], o = 0, i = t.getElementsByTagName(e);
                    if ("*" === e) {
                        for (; n = i[o++];) 1 === n.nodeType && r.push(n);
                        return r
                    }
                    return i
                }, r.find.CLASS = n.getElementsByClassName && function (e, t) {
                    if (void 0 !== t.getElementsByClassName && g) return t.getElementsByClassName(e)
                }, m = [], v = [], (n.qsa = K.test(p.querySelectorAll)) && (ce(function (e) {
                    h.appendChild(e).innerHTML = "<a id='" + x + "'></a><select id='" + x + "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && v.push("[*^$]=" + M + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || v.push("\\[" + M + "*(?:value|" + R + ")"), e.querySelectorAll("[id~=" + x + "-]").length || v.push("~="), e.querySelectorAll(":checked").length || v.push(":checked"), e.querySelectorAll("a#" + x + "+*").length || v.push(".#.+[+~]")
                }), ce(function (e) {
                    e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                    var t = p.createElement("input");
                    t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && v.push("name" + M + "*[*^$|!~]?="), 2 !== e.querySelectorAll(":enabled").length && v.push(":enabled", ":disabled"), h.appendChild(e).disabled = !0, 2 !== e.querySelectorAll(":disabled").length && v.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), v.push(",.*:")
                })), (n.matchesSelector = K.test(y = h.matches || h.webkitMatchesSelector || h.mozMatchesSelector || h.oMatchesSelector || h.msMatchesSelector)) && ce(function (e) {
                    n.disconnectedMatch = y.call(e, "*"), y.call(e, "[s!='']:x"), m.push("!=", $)
                }), v = v.length && new RegExp(v.join("|")), m = m.length && new RegExp(m.join("|")), t = K.test(h.compareDocumentPosition), b = t || K.test(h.contains) ? function (e, t) {
                    var n = 9 === e.nodeType ? e.documentElement : e, r = t && t.parentNode;
                    return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r)))
                } : function (e, t) {
                    if (t) for (; t = t.parentNode;) if (t === e) return !0;
                    return !1
                }, A = t ? function (e, t) {
                    if (e === t) return f = !0, 0;
                    var r = !e.compareDocumentPosition - !t.compareDocumentPosition;
                    return r || (1 & (r = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1) || !n.sortDetached && t.compareDocumentPosition(e) === r ? e === p || e.ownerDocument === w && b(w, e) ? -1 : t === p || t.ownerDocument === w && b(w, t) ? 1 : c ? O(c, e) - O(c, t) : 0 : 4 & r ? -1 : 1)
                } : function (e, t) {
                    if (e === t) return f = !0, 0;
                    var n, r = 0, o = e.parentNode, i = t.parentNode, a = [e], s = [t];
                    if (!o || !i) return e === p ? -1 : t === p ? 1 : o ? -1 : i ? 1 : c ? O(c, e) - O(c, t) : 0;
                    if (o === i) return de(e, t);
                    for (n = e; n = n.parentNode;) a.unshift(n);
                    for (n = t; n = n.parentNode;) s.unshift(n);
                    for (; a[r] === s[r];) r++;
                    return r ? de(a[r], s[r]) : a[r] === w ? -1 : s[r] === w ? 1 : 0
                }), p
            }, se.matches = function (e, t) {
                return se(e, null, null, t)
            }, se.matchesSelector = function (e, t) {
                if ((e.ownerDocument || e) !== p && d(e), n.matchesSelector && g && !N[t + " "] && (!m || !m.test(t)) && (!v || !v.test(t))) try {
                    var r = y.call(e, t);
                    if (r || n.disconnectedMatch || e.document && 11 !== e.document.nodeType) return r
                } catch (e) {
                    N(t, !0)
                }
                return 0 < se(t, p, null, [e]).length
            }, se.contains = function (e, t) {
                return (e.ownerDocument || e) !== p && d(e), b(e, t)
            }, se.attr = function (e, t) {
                (e.ownerDocument || e) !== p && d(e);
                var o = r.attrHandle[t.toLowerCase()],
                    i = o && D.call(r.attrHandle, t.toLowerCase()) ? o(e, t, !g) : void 0;
                return void 0 !== i ? i : n.attributes || !g ? e.getAttribute(t) : (i = e.getAttributeNode(t)) && i.specified ? i.value : null
            }, se.escape = function (e) {
                return (e + "").replace(re, oe)
            }, se.error = function (e) {
                throw new Error("Syntax error, unrecognized expression: " + e)
            }, se.uniqueSort = function (e) {
                var t, r = [], o = 0, i = 0;
                if (f = !n.detectDuplicates, c = !n.sortStable && e.slice(0), e.sort(A), f) {
                    for (; t = e[i++];) t === e[i] && (o = r.push(i));
                    for (; o--;) e.splice(r[o], 1)
                }
                return c = null, e
            }, o = se.getText = function (e) {
                var t, n = "", r = 0, i = e.nodeType;
                if (i) {
                    if (1 === i || 9 === i || 11 === i) {
                        if ("string" == typeof e.textContent) return e.textContent;
                        for (e = e.firstChild; e; e = e.nextSibling) n += o(e)
                    } else if (3 === i || 4 === i) return e.nodeValue
                } else for (; t = e[r++];) n += o(t);
                return n
            }, (r = se.selectors = {
                cacheLength: 50,
                createPseudo: le,
                match: G,
                attrHandle: {},
                find: {},
                relative: {
                    ">": {dir: "parentNode", first: !0},
                    " ": {dir: "parentNode"},
                    "+": {dir: "previousSibling", first: !0},
                    "~": {dir: "previousSibling"}
                },
                preFilter: {
                    ATTR: function (e) {
                        return e[1] = e[1].replace(te, ne), e[3] = (e[3] || e[4] || e[5] || "").replace(te, ne), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4)
                    }, CHILD: function (e) {
                        return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || se.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && se.error(e[0]), e
                    }, PSEUDO: function (e) {
                        var t, n = !e[6] && e[2];
                        return G.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && X.test(n) && (t = a(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3))
                    }
                },
                filter: {
                    TAG: function (e) {
                        var t = e.replace(te, ne).toLowerCase();
                        return "*" === e ? function () {
                            return !0
                        } : function (e) {
                            return e.nodeName && e.nodeName.toLowerCase() === t
                        }
                    }, CLASS: function (e) {
                        var t = k[e + " "];
                        return t || (t = new RegExp("(^|" + M + ")" + e + "(" + M + "|$)")) && k(e, function (e) {
                            return t.test("string" == typeof e.className && e.className || void 0 !== e.getAttribute && e.getAttribute("class") || "")
                        })
                    }, ATTR: function (e, t, n) {
                        return function (r) {
                            var o = se.attr(r, e);
                            return null == o ? "!=" === t : !t || (o += "", "=" === t ? o === n : "!=" === t ? o !== n : "^=" === t ? n && 0 === o.indexOf(n) : "*=" === t ? n && -1 < o.indexOf(n) : "$=" === t ? n && o.slice(-n.length) === n : "~=" === t ? -1 < (" " + o.replace(F, " ") + " ").indexOf(n) : "|=" === t && (o === n || o.slice(0, n.length + 1) === n + "-"))
                        }
                    }, CHILD: function (e, t, n, r, o) {
                        var i = "nth" !== e.slice(0, 3), a = "last" !== e.slice(-4), s = "of-type" === t;
                        return 1 === r && 0 === o ? function (e) {
                            return !!e.parentNode
                        } : function (t, n, u) {
                            var l, c, f, d, p, h, g = i !== a ? "nextSibling" : "previousSibling", v = t.parentNode,
                                m = s && t.nodeName.toLowerCase(), y = !u && !s, b = !1;
                            if (v) {
                                if (i) {
                                    for (; g;) {
                                        for (d = t; d = d[g];) if (s ? d.nodeName.toLowerCase() === m : 1 === d.nodeType) return !1;
                                        h = g = "only" === e && !h && "nextSibling"
                                    }
                                    return !0
                                }
                                if (h = [a ? v.firstChild : v.lastChild], a && y) {
                                    for (b = (p = (l = (c = (f = (d = v)[x] || (d[x] = {}))[d.uniqueID] || (f[d.uniqueID] = {}))[e] || [])[0] === T && l[1]) && l[2], d = p && v.childNodes[p]; d = ++p && d && d[g] || (b = p = 0) || h.pop();) if (1 === d.nodeType && ++b && d === t) {
                                        c[e] = [T, p, b];
                                        break
                                    }
                                } else if (y && (b = p = (l = (c = (f = (d = t)[x] || (d[x] = {}))[d.uniqueID] || (f[d.uniqueID] = {}))[e] || [])[0] === T && l[1]), !1 === b) for (; (d = ++p && d && d[g] || (b = p = 0) || h.pop()) && ((s ? d.nodeName.toLowerCase() !== m : 1 !== d.nodeType) || !++b || (y && ((c = (f = d[x] || (d[x] = {}))[d.uniqueID] || (f[d.uniqueID] = {}))[e] = [T, b]), d !== t));) ;
                                return (b -= o) === r || b % r == 0 && 0 <= b / r
                            }
                        }
                    }, PSEUDO: function (e, t) {
                        var n,
                            o = r.pseudos[e] || r.setFilters[e.toLowerCase()] || se.error("unsupported pseudo: " + e);
                        return o[x] ? o(t) : 1 < o.length ? (n = [e, e, "", t], r.setFilters.hasOwnProperty(e.toLowerCase()) ? le(function (e, n) {
                            for (var r, i = o(e, t), a = i.length; a--;) e[r = O(e, i[a])] = !(n[r] = i[a])
                        }) : function (e) {
                            return o(e, 0, n)
                        }) : o
                    }
                },
                pseudos: {
                    not: le(function (e) {
                        var t = [], n = [], r = s(e.replace(B, "$1"));
                        return r[x] ? le(function (e, t, n, o) {
                            for (var i, a = r(e, null, o, []), s = e.length; s--;) (i = a[s]) && (e[s] = !(t[s] = i))
                        }) : function (e, o, i) {
                            return t[0] = e, r(t, null, i, n), t[0] = null, !n.pop()
                        }
                    }), has: le(function (e) {
                        return function (t) {
                            return 0 < se(e, t).length
                        }
                    }), contains: le(function (e) {
                        return e = e.replace(te, ne), function (t) {
                            return -1 < (t.textContent || o(t)).indexOf(e)
                        }
                    }), lang: le(function (e) {
                        return V.test(e || "") || se.error("unsupported lang: " + e), e = e.replace(te, ne).toLowerCase(), function (t) {
                            var n;
                            do {
                                if (n = g ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return (n = n.toLowerCase()) === e || 0 === n.indexOf(e + "-")
                            } while ((t = t.parentNode) && 1 === t.nodeType);
                            return !1
                        }
                    }), target: function (t) {
                        var n = e.location && e.location.hash;
                        return n && n.slice(1) === t.id
                    }, root: function (e) {
                        return e === h
                    }, focus: function (e) {
                        return e === p.activeElement && (!p.hasFocus || p.hasFocus()) && !!(e.type || e.href || ~e.tabIndex)
                    }, enabled: ge(!1), disabled: ge(!0), checked: function (e) {
                        var t = e.nodeName.toLowerCase();
                        return "input" === t && !!e.checked || "option" === t && !!e.selected
                    }, selected: function (e) {
                        return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected
                    }, empty: function (e) {
                        for (e = e.firstChild; e; e = e.nextSibling) if (e.nodeType < 6) return !1;
                        return !0
                    }, parent: function (e) {
                        return !r.pseudos.empty(e)
                    }, header: function (e) {
                        return J.test(e.nodeName)
                    }, input: function (e) {
                        return Q.test(e.nodeName)
                    }, button: function (e) {
                        var t = e.nodeName.toLowerCase();
                        return "input" === t && "button" === e.type || "button" === t
                    }, text: function (e) {
                        var t;
                        return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase())
                    }, first: ve(function () {
                        return [0]
                    }), last: ve(function (e, t) {
                        return [t - 1]
                    }), eq: ve(function (e, t, n) {
                        return [n < 0 ? n + t : n]
                    }), even: ve(function (e, t) {
                        for (var n = 0; n < t; n += 2) e.push(n);
                        return e
                    }), odd: ve(function (e, t) {
                        for (var n = 1; n < t; n += 2) e.push(n);
                        return e
                    }), lt: ve(function (e, t, n) {
                        for (var r = n < 0 ? n + t : t < n ? t : n; 0 <= --r;) e.push(r);
                        return e
                    }), gt: ve(function (e, t, n) {
                        for (var r = n < 0 ? n + t : n; ++r < t;) e.push(r);
                        return e
                    })
                }
            }).pseudos.nth = r.pseudos.eq, {
                radio: !0,
                checkbox: !0,
                file: !0,
                password: !0,
                image: !0
            }) r.pseudos[t] = pe(t);
            for (t in {submit: !0, reset: !0}) r.pseudos[t] = he(t);

            function ye() {
            }

            function be(e) {
                for (var t = 0, n = e.length, r = ""; t < n; t++) r += e[t].value;
                return r
            }

            function xe(e, t, n) {
                var r = t.dir, o = t.next, i = o || r, a = n && "parentNode" === i, s = C++;
                return t.first ? function (t, n, o) {
                    for (; t = t[r];) if (1 === t.nodeType || a) return e(t, n, o);
                    return !1
                } : function (t, n, u) {
                    var l, c, f, d = [T, s];
                    if (u) {
                        for (; t = t[r];) if ((1 === t.nodeType || a) && e(t, n, u)) return !0
                    } else for (; t = t[r];) if (1 === t.nodeType || a) if (c = (f = t[x] || (t[x] = {}))[t.uniqueID] || (f[t.uniqueID] = {}), o && o === t.nodeName.toLowerCase()) t = t[r] || t; else {
                        if ((l = c[i]) && l[0] === T && l[1] === s) return d[2] = l[2];
                        if ((c[i] = d)[2] = e(t, n, u)) return !0
                    }
                    return !1
                }
            }

            function we(e) {
                return 1 < e.length ? function (t, n, r) {
                    for (var o = e.length; o--;) if (!e[o](t, n, r)) return !1;
                    return !0
                } : e[0]
            }

            function Te(e, t, n, r, o) {
                for (var i, a = [], s = 0, u = e.length, l = null != t; s < u; s++) (i = e[s]) && (n && !n(i, r, o) || (a.push(i), l && t.push(s)));
                return a
            }

            function Ce(e, t, n, r, o, i) {
                return r && !r[x] && (r = Ce(r)), o && !o[x] && (o = Ce(o, i)), le(function (i, a, s, u) {
                    var l, c, f, d = [], p = [], h = a.length, g = i || function (e, t, n) {
                            for (var r = 0, o = t.length; r < o; r++) se(e, t[r], n);
                            return n
                        }(t || "*", s.nodeType ? [s] : s, []), v = !e || !i && t ? g : Te(g, d, e, s, u),
                        m = n ? o || (i ? e : h || r) ? [] : a : v;
                    if (n && n(v, m, s, u), r) for (l = Te(m, p), r(l, [], s, u), c = l.length; c--;) (f = l[c]) && (m[p[c]] = !(v[p[c]] = f));
                    if (i) {
                        if (o || e) {
                            if (o) {
                                for (l = [], c = m.length; c--;) (f = m[c]) && l.push(v[c] = f);
                                o(null, m = [], l, u)
                            }
                            for (c = m.length; c--;) (f = m[c]) && -1 < (l = o ? O(i, f) : d[c]) && (i[l] = !(a[l] = f))
                        }
                    } else m = Te(m === a ? m.splice(h, m.length) : m), o ? o(null, a, m, u) : H.apply(a, m)
                })
            }

            function ke(e) {
                for (var t, n, o, i = e.length, a = r.relative[e[0].type], s = a || r.relative[" "], u = a ? 1 : 0, c = xe(function (e) {
                    return e === t
                }, s, !0), f = xe(function (e) {
                    return -1 < O(t, e)
                }, s, !0), d = [function (e, n, r) {
                    var o = !a && (r || n !== l) || ((t = n).nodeType ? c(e, n, r) : f(e, n, r));
                    return t = null, o
                }]; u < i; u++) if (n = r.relative[e[u].type]) d = [xe(we(d), n)]; else {
                    if ((n = r.filter[e[u].type].apply(null, e[u].matches))[x]) {
                        for (o = ++u; o < i && !r.relative[e[o].type]; o++) ;
                        return Ce(1 < u && we(d), 1 < u && be(e.slice(0, u - 1).concat({value: " " === e[u - 2].type ? "*" : ""})).replace(B, "$1"), n, u < o && ke(e.slice(u, o)), o < i && ke(e = e.slice(o)), o < i && be(e))
                    }
                    d.push(n)
                }
                return we(d)
            }

            return ye.prototype = r.filters = r.pseudos, r.setFilters = new ye, a = se.tokenize = function (e, t) {
                var n, o, i, a, s, u, l, c = E[e + " "];
                if (c) return t ? 0 : c.slice(0);
                for (s = e, u = [], l = r.preFilter; s;) {
                    for (a in n && !(o = _.exec(s)) || (o && (s = s.slice(o[0].length) || s), u.push(i = [])), n = !1, (o = z.exec(s)) && (n = o.shift(), i.push({
                        value: n,
                        type: o[0].replace(B, " ")
                    }), s = s.slice(n.length)), r.filter) !(o = G[a].exec(s)) || l[a] && !(o = l[a](o)) || (n = o.shift(), i.push({
                        value: n,
                        type: a,
                        matches: o
                    }), s = s.slice(n.length));
                    if (!n) break
                }
                return t ? s.length : s ? se.error(e) : E(e, u).slice(0)
            }, s = se.compile = function (e, t) {
                var n, o, i, s, u, c, f = [], h = [], v = S[e + " "];
                if (!v) {
                    for (t || (t = a(e)), n = t.length; n--;) (v = ke(t[n]))[x] ? f.push(v) : h.push(v);
                    (v = S(e, (o = h, s = 0 < (i = f).length, u = 0 < o.length, c = function (e, t, n, a, c) {
                        var f, h, v, m = 0, y = "0", b = e && [], x = [], w = l, C = e || u && r.find.TAG("*", c),
                            k = T += null == w ? 1 : Math.random() || .1, E = C.length;
                        for (c && (l = t === p || t || c); y !== E && null != (f = C[y]); y++) {
                            if (u && f) {
                                for (h = 0, t || f.ownerDocument === p || (d(f), n = !g); v = o[h++];) if (v(f, t || p, n)) {
                                    a.push(f);
                                    break
                                }
                                c && (T = k)
                            }
                            s && ((f = !v && f) && m--, e && b.push(f))
                        }
                        if (m += y, s && y !== m) {
                            for (h = 0; v = i[h++];) v(b, x, t, n);
                            if (e) {
                                if (0 < m) for (; y--;) b[y] || x[y] || (x[y] = L.call(a));
                                x = Te(x)
                            }
                            H.apply(a, x), c && !e && 0 < x.length && 1 < m + i.length && se.uniqueSort(a)
                        }
                        return c && (T = k, l = w), b
                    }, s ? le(c) : c))).selector = e
                }
                return v
            }, u = se.select = function (e, t, n, o) {
                var i, u, l, c, f, d = "function" == typeof e && e, p = !o && a(e = d.selector || e);
                if (n = n || [], 1 === p.length) {
                    if (2 < (u = p[0] = p[0].slice(0)).length && "ID" === (l = u[0]).type && 9 === t.nodeType && g && r.relative[u[1].type]) {
                        if (!(t = (r.find.ID(l.matches[0].replace(te, ne), t) || [])[0])) return n;
                        d && (t = t.parentNode), e = e.slice(u.shift().value.length)
                    }
                    for (i = G.needsContext.test(e) ? 0 : u.length; i-- && (l = u[i], !r.relative[c = l.type]);) if ((f = r.find[c]) && (o = f(l.matches[0].replace(te, ne), ee.test(u[0].type) && me(t.parentNode) || t))) {
                        if (u.splice(i, 1), !(e = o.length && be(u))) return H.apply(n, o), n;
                        break
                    }
                }
                return (d || s(e, p))(o, t, !g, n, !t || ee.test(e) && me(t.parentNode) || t), n
            }, n.sortStable = x.split("").sort(A).join("") === x, n.detectDuplicates = !!f, d(), n.sortDetached = ce(function (e) {
                return 1 & e.compareDocumentPosition(p.createElement("fieldset"))
            }), ce(function (e) {
                return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href")
            }) || fe("type|href|height|width", function (e, t, n) {
                if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
            }), n.attributes && ce(function (e) {
                return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value")
            }) || fe("value", function (e, t, n) {
                if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue
            }), ce(function (e) {
                return null == e.getAttribute("disabled")
            }) || fe(R, function (e, t, n) {
                var r;
                if (!n) return !0 === e[t] ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
            }), se
        }(e);
        w.find = k, w.expr = k.selectors, w.expr[":"] = w.expr.pseudos, w.uniqueSort = w.unique = k.uniqueSort, w.text = k.getText, w.isXMLDoc = k.isXML, w.contains = k.contains, w.escapeSelector = k.escape;
        var E = function (e, t, n) {
            for (var r = [], o = void 0 !== n; (e = e[t]) && 9 !== e.nodeType;) if (1 === e.nodeType) {
                if (o && w(e).is(n)) break;
                r.push(e)
            }
            return r
        }, S = function (e, t) {
            for (var n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e);
            return n
        }, N = w.expr.match.needsContext;

        function A(e, t) {
            return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
        }

        var D = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;

        function j(e, t, n) {
            return g(t) ? w.grep(e, function (e, r) {
                return !!t.call(e, r, e) !== n
            }) : t.nodeType ? w.grep(e, function (e) {
                return e === t !== n
            }) : "string" != typeof t ? w.grep(e, function (e) {
                return -1 < u.call(t, e) !== n
            }) : w.filter(t, e, n)
        }

        w.filter = function (e, t, n) {
            var r = t[0];
            return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === r.nodeType ? w.find.matchesSelector(r, e) ? [r] : [] : w.find.matches(e, w.grep(t, function (e) {
                return 1 === e.nodeType
            }))
        }, w.fn.extend({
            find: function (e) {
                var t, n, r = this.length, o = this;
                if ("string" != typeof e) return this.pushStack(w(e).filter(function () {
                    for (t = 0; t < r; t++) if (w.contains(o[t], this)) return !0
                }));
                for (n = this.pushStack([]), t = 0; t < r; t++) w.find(e, o[t], n);
                return 1 < r ? w.uniqueSort(n) : n
            }, filter: function (e) {
                return this.pushStack(j(this, e || [], !1))
            }, not: function (e) {
                return this.pushStack(j(this, e || [], !0))
            }, is: function (e) {
                return !!j(this, "string" == typeof e && N.test(e) ? w(e) : e || [], !1).length
            }
        });
        var L, q = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
        (w.fn.init = function (e, t, n) {
            var o, i;
            if (!e) return this;
            if (n = n || L, "string" == typeof e) {
                if (!(o = "<" === e[0] && ">" === e[e.length - 1] && 3 <= e.length ? [null, e, null] : q.exec(e)) || !o[1] && t) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);
                if (o[1]) {
                    if (t = t instanceof w ? t[0] : t, w.merge(this, w.parseHTML(o[1], t && t.nodeType ? t.ownerDocument || t : r, !0)), D.test(o[1]) && w.isPlainObject(t)) for (o in t) g(this[o]) ? this[o](t[o]) : this.attr(o, t[o]);
                    return this
                }
                return (i = r.getElementById(o[2])) && (this[0] = i, this.length = 1), this
            }
            return e.nodeType ? (this[0] = e, this.length = 1, this) : g(e) ? void 0 !== n.ready ? n.ready(e) : e(w) : w.makeArray(e, this)
        }).prototype = w.fn, L = w(r);
        var H = /^(?:parents|prev(?:Until|All))/, P = {children: !0, contents: !0, next: !0, prev: !0};

        function O(e, t) {
            for (; (e = e[t]) && 1 !== e.nodeType;) ;
            return e
        }

        w.fn.extend({
            has: function (e) {
                var t = w(e, this), n = t.length;
                return this.filter(function () {
                    for (var e = 0; e < n; e++) if (w.contains(this, t[e])) return !0
                })
            }, closest: function (e, t) {
                var n, r = 0, o = this.length, i = [], a = "string" != typeof e && w(e);
                if (!N.test(e)) for (; r < o; r++) for (n = this[r]; n && n !== t; n = n.parentNode) if (n.nodeType < 11 && (a ? -1 < a.index(n) : 1 === n.nodeType && w.find.matchesSelector(n, e))) {
                    i.push(n);
                    break
                }
                return this.pushStack(1 < i.length ? w.uniqueSort(i) : i)
            }, index: function (e) {
                return e ? "string" == typeof e ? u.call(w(e), this[0]) : u.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
            }, add: function (e, t) {
                return this.pushStack(w.uniqueSort(w.merge(this.get(), w(e, t))))
            }, addBack: function (e) {
                return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
            }
        }), w.each({
            parent: function (e) {
                var t = e.parentNode;
                return t && 11 !== t.nodeType ? t : null
            }, parents: function (e) {
                return E(e, "parentNode")
            }, parentsUntil: function (e, t, n) {
                return E(e, "parentNode", n)
            }, next: function (e) {
                return O(e, "nextSibling")
            }, prev: function (e) {
                return O(e, "previousSibling")
            }, nextAll: function (e) {
                return E(e, "nextSibling")
            }, prevAll: function (e) {
                return E(e, "previousSibling")
            }, nextUntil: function (e, t, n) {
                return E(e, "nextSibling", n)
            }, prevUntil: function (e, t, n) {
                return E(e, "previousSibling", n)
            }, siblings: function (e) {
                return S((e.parentNode || {}).firstChild, e)
            }, children: function (e) {
                return S(e.firstChild)
            }, contents: function (e) {
                return void 0 !== e.contentDocument ? e.contentDocument : (A(e, "template") && (e = e.content || e), w.merge([], e.childNodes))
            }
        }, function (e, t) {
            w.fn[e] = function (n, r) {
                var o = w.map(this, t, n);
                return "Until" !== e.slice(-5) && (r = n), r && "string" == typeof r && (o = w.filter(r, o)), 1 < this.length && (P[e] || w.uniqueSort(o), H.test(e) && o.reverse()), this.pushStack(o)
            }
        });
        var R = /[^\x20\t\r\n\f]+/g;

        function M(e) {
            return e
        }

        function I(e) {
            throw e
        }

        function W(e, t, n, r) {
            var o;
            try {
                e && g(o = e.promise) ? o.call(e).done(t).fail(n) : e && g(o = e.then) ? o.call(e, t, n) : t.apply(void 0, [e].slice(r))
            } catch (e) {
                n.apply(void 0, [e])
            }
        }

        w.Callbacks = function (e) {
            var t, n;
            e = "string" == typeof e ? (t = e, n = {}, w.each(t.match(R) || [], function (e, t) {
                n[t] = !0
            }), n) : w.extend({}, e);
            var r, o, i, a, s = [], u = [], l = -1, c = function () {
                for (a = a || e.once, i = r = !0; u.length; l = -1) for (o = u.shift(); ++l < s.length;) !1 === s[l].apply(o[0], o[1]) && e.stopOnFalse && (l = s.length, o = !1);
                e.memory || (o = !1), r = !1, a && (s = o ? [] : "")
            }, f = {
                add: function () {
                    return s && (o && !r && (l = s.length - 1, u.push(o)), function t(n) {
                        w.each(n, function (n, r) {
                            g(r) ? e.unique && f.has(r) || s.push(r) : r && r.length && "string" !== b(r) && t(r)
                        })
                    }(arguments), o && !r && c()), this
                }, remove: function () {
                    return w.each(arguments, function (e, t) {
                        for (var n; -1 < (n = w.inArray(t, s, n));) s.splice(n, 1), n <= l && l--
                    }), this
                }, has: function (e) {
                    return e ? -1 < w.inArray(e, s) : 0 < s.length
                }, empty: function () {
                    return s && (s = []), this
                }, disable: function () {
                    return a = u = [], s = o = "", this
                }, disabled: function () {
                    return !s
                }, lock: function () {
                    return a = u = [], o || r || (s = o = ""), this
                }, locked: function () {
                    return !!a
                }, fireWith: function (e, t) {
                    return a || (t = [e, (t = t || []).slice ? t.slice() : t], u.push(t), r || c()), this
                }, fire: function () {
                    return f.fireWith(this, arguments), this
                }, fired: function () {
                    return !!i
                }
            };
            return f
        }, w.extend({
            Deferred: function (t) {
                var n = [["notify", "progress", w.Callbacks("memory"), w.Callbacks("memory"), 2], ["resolve", "done", w.Callbacks("once memory"), w.Callbacks("once memory"), 0, "resolved"], ["reject", "fail", w.Callbacks("once memory"), w.Callbacks("once memory"), 1, "rejected"]],
                    r = "pending", o = {
                        state: function () {
                            return r
                        }, always: function () {
                            return i.done(arguments).fail(arguments), this
                        }, catch: function (e) {
                            return o.then(null, e)
                        }, pipe: function () {
                            var e = arguments;
                            return w.Deferred(function (t) {
                                w.each(n, function (n, r) {
                                    var o = g(e[r[4]]) && e[r[4]];
                                    i[r[1]](function () {
                                        var e = o && o.apply(this, arguments);
                                        e && g(e.promise) ? e.promise().progress(t.notify).done(t.resolve).fail(t.reject) : t[r[0] + "With"](this, o ? [e] : arguments)
                                    })
                                }), e = null
                            }).promise()
                        }, then: function (t, r, o) {
                            var i = 0;

                            function a(t, n, r, o) {
                                return function () {
                                    var s = this, u = arguments, l = function () {
                                        var e, l;
                                        if (!(t < i)) {
                                            if ((e = r.apply(s, u)) === n.promise()) throw new TypeError("Thenable self-resolution");
                                            l = e && ("object" == typeof e || "function" == typeof e) && e.then, g(l) ? o ? l.call(e, a(i, n, M, o), a(i, n, I, o)) : (i++, l.call(e, a(i, n, M, o), a(i, n, I, o), a(i, n, M, n.notifyWith))) : (r !== M && (s = void 0, u = [e]), (o || n.resolveWith)(s, u))
                                        }
                                    }, c = o ? l : function () {
                                        try {
                                            l()
                                        } catch (e) {
                                            w.Deferred.exceptionHook && w.Deferred.exceptionHook(e, c.stackTrace), i <= t + 1 && (r !== I && (s = void 0, u = [e]), n.rejectWith(s, u))
                                        }
                                    };
                                    t ? c() : (w.Deferred.getStackHook && (c.stackTrace = w.Deferred.getStackHook()), e.setTimeout(c))
                                }
                            }

                            return w.Deferred(function (e) {
                                n[0][3].add(a(0, e, g(o) ? o : M, e.notifyWith)), n[1][3].add(a(0, e, g(t) ? t : M)), n[2][3].add(a(0, e, g(r) ? r : I))
                            }).promise()
                        }, promise: function (e) {
                            return null != e ? w.extend(e, o) : o
                        }
                    }, i = {};
                return w.each(n, function (e, t) {
                    var a = t[2], s = t[5];
                    o[t[1]] = a.add, s && a.add(function () {
                        r = s
                    }, n[3 - e][2].disable, n[3 - e][3].disable, n[0][2].lock, n[0][3].lock), a.add(t[3].fire), i[t[0]] = function () {
                        return i[t[0] + "With"](this === i ? void 0 : this, arguments), this
                    }, i[t[0] + "With"] = a.fireWith
                }), o.promise(i), t && t.call(i, i), i
            }, when: function (e) {
                var t = arguments.length, n = t, r = Array(n), o = i.call(arguments), a = w.Deferred(),
                    s = function (e) {
                        return function (n) {
                            r[e] = this, o[e] = 1 < arguments.length ? i.call(arguments) : n, --t || a.resolveWith(r, o)
                        }
                    };
                if (t <= 1 && (W(e, a.done(s(n)).resolve, a.reject, !t), "pending" === a.state() || g(o[n] && o[n].then))) return a.then();
                for (; n--;) W(o[n], s(n), a.reject);
                return a.promise()
            }
        });
        var $ = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
        w.Deferred.exceptionHook = function (t, n) {
            e.console && e.console.warn && t && $.test(t.name) && e.console.warn("jQuery.Deferred exception: " + t.message, t.stack, n)
        }, w.readyException = function (t) {
            e.setTimeout(function () {
                throw t
            })
        };
        var F = w.Deferred();

        function B() {
            r.removeEventListener("DOMContentLoaded", B), e.removeEventListener("load", B), w.ready()
        }

        w.fn.ready = function (e) {
            return F.then(e).catch(function (e) {
                w.readyException(e)
            }), this
        }, w.extend({
            isReady: !1, readyWait: 1, ready: function (e) {
                (!0 === e ? --w.readyWait : w.isReady) || (w.isReady = !0) !== e && 0 < --w.readyWait || F.resolveWith(r, [w])
            }
        }), w.ready.then = F.then, "complete" === r.readyState || "loading" !== r.readyState && !r.documentElement.doScroll ? e.setTimeout(w.ready) : (r.addEventListener("DOMContentLoaded", B), e.addEventListener("load", B));
        var _ = function (e, t, n, r, o, i, a) {
            var s = 0, u = e.length, l = null == n;
            if ("object" === b(n)) for (s in o = !0, n) _(e, t, s, n[s], !0, i, a); else if (void 0 !== r && (o = !0, g(r) || (a = !0), l && (a ? (t.call(e, r), t = null) : (l = t, t = function (e, t, n) {
                return l.call(w(e), n)
            })), t)) for (; s < u; s++) t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n)));
            return o ? e : l ? t.call(e) : u ? t(e[0], n) : i
        }, z = /^-ms-/, U = /-([a-z])/g;

        function X(e, t) {
            return t.toUpperCase()
        }

        function V(e) {
            return e.replace(z, "ms-").replace(U, X)
        }

        var G = function (e) {
            return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType
        };

        function Y() {
            this.expando = w.expando + Y.uid++
        }

        Y.uid = 1, Y.prototype = {
            cache: function (e) {
                var t = e[this.expando];
                return t || (t = {}, G(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, {
                    value: t,
                    configurable: !0
                }))), t
            }, set: function (e, t, n) {
                var r, o = this.cache(e);
                if ("string" == typeof t) o[V(t)] = n; else for (r in t) o[V(r)] = t[r];
                return o
            }, get: function (e, t) {
                return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][V(t)]
            }, access: function (e, t, n) {
                return void 0 === t || t && "string" == typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n), void 0 !== n ? n : t)
            }, remove: function (e, t) {
                var n, r = e[this.expando];
                if (void 0 !== r) {
                    if (void 0 !== t) {
                        n = (t = Array.isArray(t) ? t.map(V) : (t = V(t)) in r ? [t] : t.match(R) || []).length;
                        for (; n--;) delete r[t[n]]
                    }
                    (void 0 === t || w.isEmptyObject(r)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando])
                }
            }, hasData: function (e) {
                var t = e[this.expando];
                return void 0 !== t && !w.isEmptyObject(t)
            }
        };
        var Q = new Y, J = new Y, K = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/, Z = /[A-Z]/g;

        function ee(e, t, n) {
            var r, o;
            if (void 0 === n && 1 === e.nodeType) if (r = "data-" + t.replace(Z, "-$&").toLowerCase(), "string" == typeof (n = e.getAttribute(r))) {
                try {
                    n = "true" === (o = n) || "false" !== o && ("null" === o ? null : o === +o + "" ? +o : K.test(o) ? JSON.parse(o) : o)
                } catch (e) {
                }
                J.set(e, t, n)
            } else n = void 0;
            return n
        }

        w.extend({
            hasData: function (e) {
                return J.hasData(e) || Q.hasData(e)
            }, data: function (e, t, n) {
                return J.access(e, t, n)
            }, removeData: function (e, t) {
                J.remove(e, t)
            }, _data: function (e, t, n) {
                return Q.access(e, t, n)
            }, _removeData: function (e, t) {
                Q.remove(e, t)
            }
        }), w.fn.extend({
            data: function (e, t) {
                var n, r, o, i = this[0], a = i && i.attributes;
                if (void 0 === e) {
                    if (this.length && (o = J.get(i), 1 === i.nodeType && !Q.get(i, "hasDataAttrs"))) {
                        for (n = a.length; n--;) a[n] && 0 === (r = a[n].name).indexOf("data-") && (r = V(r.slice(5)), ee(i, r, o[r]));
                        Q.set(i, "hasDataAttrs", !0)
                    }
                    return o
                }
                return "object" == typeof e ? this.each(function () {
                    J.set(this, e)
                }) : _(this, function (t) {
                    var n;
                    if (i && void 0 === t) return void 0 !== (n = J.get(i, e)) ? n : void 0 !== (n = ee(i, e)) ? n : void 0;
                    this.each(function () {
                        J.set(this, e, t)
                    })
                }, null, t, 1 < arguments.length, null, !0)
            }, removeData: function (e) {
                return this.each(function () {
                    J.remove(this, e)
                })
            }
        }), w.extend({
            queue: function (e, t, n) {
                var r;
                if (e) return t = (t || "fx") + "queue", r = Q.get(e, t), n && (!r || Array.isArray(n) ? r = Q.access(e, t, w.makeArray(n)) : r.push(n)), r || []
            }, dequeue: function (e, t) {
                t = t || "fx";
                var n = w.queue(e, t), r = n.length, o = n.shift(), i = w._queueHooks(e, t);
                "inprogress" === o && (o = n.shift(), r--), o && ("fx" === t && n.unshift("inprogress"), delete i.stop, o.call(e, function () {
                    w.dequeue(e, t)
                }, i)), !r && i && i.empty.fire()
            }, _queueHooks: function (e, t) {
                var n = t + "queueHooks";
                return Q.get(e, n) || Q.access(e, n, {
                    empty: w.Callbacks("once memory").add(function () {
                        Q.remove(e, [t + "queue", n])
                    })
                })
            }
        }), w.fn.extend({
            queue: function (e, t) {
                var n = 2;
                return "string" != typeof e && (t = e, e = "fx", n--), arguments.length < n ? w.queue(this[0], e) : void 0 === t ? this : this.each(function () {
                    var n = w.queue(this, e, t);
                    w._queueHooks(this, e), "fx" === e && "inprogress" !== n[0] && w.dequeue(this, e)
                })
            }, dequeue: function (e) {
                return this.each(function () {
                    w.dequeue(this, e)
                })
            }, clearQueue: function (e) {
                return this.queue(e || "fx", [])
            }, promise: function (e, t) {
                var n, r = 1, o = w.Deferred(), i = this, a = this.length, s = function () {
                    --r || o.resolveWith(i, [i])
                };
                for ("string" != typeof e && (t = e, e = void 0), e = e || "fx"; a--;) (n = Q.get(i[a], e + "queueHooks")) && n.empty && (r++, n.empty.add(s));
                return s(), o.promise(t)
            }
        });
        var te = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
            ne = new RegExp("^(?:([+-])=|)(" + te + ")([a-z%]*)$", "i"), re = ["Top", "Right", "Bottom", "Left"],
            oe = r.documentElement, ie = function (e) {
                return w.contains(e.ownerDocument, e)
            }, ae = {composed: !0};
        oe.attachShadow && (ie = function (e) {
            return w.contains(e.ownerDocument, e) || e.getRootNode(ae) === e.ownerDocument
        });
        var se = function (e, t) {
            return "none" === (e = t || e).style.display || "" === e.style.display && ie(e) && "none" === w.css(e, "display")
        }, ue = function (e, t, n, r) {
            var o, i, a = {};
            for (i in t) a[i] = e.style[i], e.style[i] = t[i];
            for (i in o = n.apply(e, r || []), t) e.style[i] = a[i];
            return o
        };

        function le(e, t, n, r) {
            var o, i, a = 20, s = r ? function () {
                    return r.cur()
                } : function () {
                    return w.css(e, t, "")
                }, u = s(), l = n && n[3] || (w.cssNumber[t] ? "" : "px"),
                c = e.nodeType && (w.cssNumber[t] || "px" !== l && +u) && ne.exec(w.css(e, t));
            if (c && c[3] !== l) {
                for (u /= 2, l = l || c[3], c = +u || 1; a--;) w.style(e, t, c + l), (1 - i) * (1 - (i = s() / u || .5)) <= 0 && (a = 0), c /= i;
                c *= 2, w.style(e, t, c + l), n = n || []
            }
            return n && (c = +c || +u || 0, o = n[1] ? c + (n[1] + 1) * n[2] : +n[2], r && (r.unit = l, r.start = c, r.end = o)), o
        }

        var ce = {};

        function fe(e, t) {
            for (var n, r, o, i, a, s, u, l = [], c = 0, f = e.length; c < f; c++) (r = e[c]).style && (n = r.style.display, t ? ("none" === n && (l[c] = Q.get(r, "display") || null, l[c] || (r.style.display = "")), "" === r.style.display && se(r) && (l[c] = (u = a = i = void 0, a = (o = r).ownerDocument, s = o.nodeName, (u = ce[s]) || (i = a.body.appendChild(a.createElement(s)), u = w.css(i, "display"), i.parentNode.removeChild(i), "none" === u && (u = "block"), ce[s] = u)))) : "none" !== n && (l[c] = "none", Q.set(r, "display", n)));
            for (c = 0; c < f; c++) null != l[c] && (e[c].style.display = l[c]);
            return e
        }

        w.fn.extend({
            show: function () {
                return fe(this, !0)
            }, hide: function () {
                return fe(this)
            }, toggle: function (e) {
                return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function () {
                    se(this) ? w(this).show() : w(this).hide()
                })
            }
        });
        var de = /^(?:checkbox|radio)$/i, pe = /<([a-z][^\/\0>\x20\t\r\n\f]*)/i,
            he = /^$|^module$|\/(?:java|ecma)script/i, ge = {
                option: [1, "<select multiple='multiple'>", "</select>"],
                thead: [1, "<table>", "</table>"],
                col: [2, "<table><colgroup>", "</colgroup></table>"],
                tr: [2, "<table><tbody>", "</tbody></table>"],
                td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
                _default: [0, "", ""]
            };

        function ve(e, t) {
            var n;
            return n = void 0 !== e.getElementsByTagName ? e.getElementsByTagName(t || "*") : void 0 !== e.querySelectorAll ? e.querySelectorAll(t || "*") : [], void 0 === t || t && A(e, t) ? w.merge([e], n) : n
        }

        function me(e, t) {
            for (var n = 0, r = e.length; n < r; n++) Q.set(e[n], "globalEval", !t || Q.get(t[n], "globalEval"))
        }

        ge.optgroup = ge.option, ge.tbody = ge.tfoot = ge.colgroup = ge.caption = ge.thead, ge.th = ge.td;
        var ye, be, xe = /<|&#?\w+;/;

        function we(e, t, n, r, o) {
            for (var i, a, s, u, l, c, f = t.createDocumentFragment(), d = [], p = 0, h = e.length; p < h; p++) if ((i = e[p]) || 0 === i) if ("object" === b(i)) w.merge(d, i.nodeType ? [i] : i); else if (xe.test(i)) {
                for (a = a || f.appendChild(t.createElement("div")), s = (pe.exec(i) || ["", ""])[1].toLowerCase(), u = ge[s] || ge._default, a.innerHTML = u[1] + w.htmlPrefilter(i) + u[2], c = u[0]; c--;) a = a.lastChild;
                w.merge(d, a.childNodes), (a = f.firstChild).textContent = ""
            } else d.push(t.createTextNode(i));
            for (f.textContent = "", p = 0; i = d[p++];) if (r && -1 < w.inArray(i, r)) o && o.push(i); else if (l = ie(i), a = ve(f.appendChild(i), "script"), l && me(a), n) for (c = 0; i = a[c++];) he.test(i.type || "") && n.push(i);
            return f
        }

        ye = r.createDocumentFragment().appendChild(r.createElement("div")), (be = r.createElement("input")).setAttribute("type", "radio"), be.setAttribute("checked", "checked"), be.setAttribute("name", "t"), ye.appendChild(be), h.checkClone = ye.cloneNode(!0).cloneNode(!0).lastChild.checked, ye.innerHTML = "<textarea>x</textarea>", h.noCloneChecked = !!ye.cloneNode(!0).lastChild.defaultValue;
        var Te = /^key/, Ce = /^(?:mouse|pointer|contextmenu|drag|drop)|click/, ke = /^([^.]*)(?:\.(.+)|)/;

        function Ee() {
            return !0
        }

        function Se() {
            return !1
        }

        function Ne(e, t) {
            return e === function () {
                try {
                    return r.activeElement
                } catch (e) {
                }
            }() == ("focus" === t)
        }

        function Ae(e, t, n, r, o, i) {
            var a, s;
            if ("object" == typeof t) {
                for (s in "string" != typeof n && (r = r || n, n = void 0), t) Ae(e, s, n, r, t[s], i);
                return e
            }
            if (null == r && null == o ? (o = n, r = n = void 0) : null == o && ("string" == typeof n ? (o = r, r = void 0) : (o = r, r = n, n = void 0)), !1 === o) o = Se; else if (!o) return e;
            return 1 === i && (a = o, (o = function (e) {
                return w().off(e), a.apply(this, arguments)
            }).guid = a.guid || (a.guid = w.guid++)), e.each(function () {
                w.event.add(this, t, o, r, n)
            })
        }

        function De(e, t, n) {
            n ? (Q.set(e, t, !1), w.event.add(e, t, {
                namespace: !1, handler: function (e) {
                    var r, o, a = Q.get(this, t);
                    if (1 & e.isTrigger && this[t]) {
                        if (a) (w.event.special[t] || {}).delegateType && e.stopPropagation(); else if (a = i.call(arguments), Q.set(this, t, a), r = n(this, t), this[t](), a !== (o = Q.get(this, t)) || r ? Q.set(this, t, !1) : o = void 0, a !== o) return e.stopImmediatePropagation(), e.preventDefault(), o
                    } else a && (Q.set(this, t, w.event.trigger(w.extend(a.shift(), w.Event.prototype), a, this)), e.stopImmediatePropagation())
                }
            })) : w.event.add(e, t, Ee)
        }

        w.event = {
            global: {}, add: function (e, t, n, r, o) {
                var i, a, s, u, l, c, f, d, p, h, g, v = Q.get(e);
                if (v) for (n.handler && (n = (i = n).handler, o = i.selector), o && w.find.matchesSelector(oe, o), n.guid || (n.guid = w.guid++), (u = v.events) || (u = v.events = {}), (a = v.handle) || (a = v.handle = function (t) {
                    return void 0 !== w && w.event.triggered !== t.type ? w.event.dispatch.apply(e, arguments) : void 0
                }), l = (t = (t || "").match(R) || [""]).length; l--;) p = g = (s = ke.exec(t[l]) || [])[1], h = (s[2] || "").split(".").sort(), p && (f = w.event.special[p] || {}, p = (o ? f.delegateType : f.bindType) || p, f = w.event.special[p] || {}, c = w.extend({
                    type: p,
                    origType: g,
                    data: r,
                    handler: n,
                    guid: n.guid,
                    selector: o,
                    needsContext: o && w.expr.match.needsContext.test(o),
                    namespace: h.join(".")
                }, i), (d = u[p]) || ((d = u[p] = []).delegateCount = 0, f.setup && !1 !== f.setup.call(e, r, h, a) || e.addEventListener && e.addEventListener(p, a)), f.add && (f.add.call(e, c), c.handler.guid || (c.handler.guid = n.guid)), o ? d.splice(d.delegateCount++, 0, c) : d.push(c), w.event.global[p] = !0)
            }, remove: function (e, t, n, r, o) {
                var i, a, s, u, l, c, f, d, p, h, g, v = Q.hasData(e) && Q.get(e);
                if (v && (u = v.events)) {
                    for (l = (t = (t || "").match(R) || [""]).length; l--;) if (p = g = (s = ke.exec(t[l]) || [])[1], h = (s[2] || "").split(".").sort(), p) {
                        for (f = w.event.special[p] || {}, d = u[p = (r ? f.delegateType : f.bindType) || p] || [], s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), a = i = d.length; i--;) c = d[i], !o && g !== c.origType || n && n.guid !== c.guid || s && !s.test(c.namespace) || r && r !== c.selector && ("**" !== r || !c.selector) || (d.splice(i, 1), c.selector && d.delegateCount--, f.remove && f.remove.call(e, c));
                        a && !d.length && (f.teardown && !1 !== f.teardown.call(e, h, v.handle) || w.removeEvent(e, p, v.handle), delete u[p])
                    } else for (p in u) w.event.remove(e, p + t[l], n, r, !0);
                    w.isEmptyObject(u) && Q.remove(e, "handle events")
                }
            }, dispatch: function (e) {
                var t, n, r, o, i, a, s = w.event.fix(e), u = new Array(arguments.length),
                    l = (Q.get(this, "events") || {})[s.type] || [], c = w.event.special[s.type] || {};
                for (u[0] = s, t = 1; t < arguments.length; t++) u[t] = arguments[t];
                if (s.delegateTarget = this, !c.preDispatch || !1 !== c.preDispatch.call(this, s)) {
                    for (a = w.event.handlers.call(this, s, l), t = 0; (o = a[t++]) && !s.isPropagationStopped();) for (s.currentTarget = o.elem, n = 0; (i = o.handlers[n++]) && !s.isImmediatePropagationStopped();) s.rnamespace && !1 !== i.namespace && !s.rnamespace.test(i.namespace) || (s.handleObj = i, s.data = i.data, void 0 !== (r = ((w.event.special[i.origType] || {}).handle || i.handler).apply(o.elem, u)) && !1 === (s.result = r) && (s.preventDefault(), s.stopPropagation()));
                    return c.postDispatch && c.postDispatch.call(this, s), s.result
                }
            }, handlers: function (e, t) {
                var n, r, o, i, a, s = [], u = t.delegateCount, l = e.target;
                if (u && l.nodeType && !("click" === e.type && 1 <= e.button)) for (; l !== this; l = l.parentNode || this) if (1 === l.nodeType && ("click" !== e.type || !0 !== l.disabled)) {
                    for (i = [], a = {}, n = 0; n < u; n++) void 0 === a[o = (r = t[n]).selector + " "] && (a[o] = r.needsContext ? -1 < w(o, this).index(l) : w.find(o, this, null, [l]).length), a[o] && i.push(r);
                    i.length && s.push({elem: l, handlers: i})
                }
                return l = this, u < t.length && s.push({elem: l, handlers: t.slice(u)}), s
            }, addProp: function (e, t) {
                Object.defineProperty(w.Event.prototype, e, {
                    enumerable: !0, configurable: !0, get: g(t) ? function () {
                        if (this.originalEvent) return t(this.originalEvent)
                    } : function () {
                        if (this.originalEvent) return this.originalEvent[e]
                    }, set: function (t) {
                        Object.defineProperty(this, e, {enumerable: !0, configurable: !0, writable: !0, value: t})
                    }
                })
            }, fix: function (e) {
                return e[w.expando] ? e : new w.Event(e)
            }, special: {
                load: {noBubble: !0}, click: {
                    setup: function (e) {
                        var t = this || e;
                        return de.test(t.type) && t.click && A(t, "input") && void 0 === Q.get(t, "click") && De(t, "click", Ee), !1
                    }, trigger: function (e) {
                        var t = this || e;
                        return de.test(t.type) && t.click && A(t, "input") && void 0 === Q.get(t, "click") && De(t, "click"), !0
                    }, _default: function (e) {
                        var t = e.target;
                        return de.test(t.type) && t.click && A(t, "input") && Q.get(t, "click") || A(t, "a")
                    }
                }, beforeunload: {
                    postDispatch: function (e) {
                        void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
                    }
                }
            }
        }, w.removeEvent = function (e, t, n) {
            e.removeEventListener && e.removeEventListener(t, n)
        }, w.Event = function (e, t) {
            if (!(this instanceof w.Event)) return new w.Event(e, t);
            e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? Ee : Se, this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this.relatedTarget = e.relatedTarget) : this.type = e, t && w.extend(this, t), this.timeStamp = e && e.timeStamp || Date.now(), this[w.expando] = !0
        }, w.Event.prototype = {
            constructor: w.Event,
            isDefaultPrevented: Se,
            isPropagationStopped: Se,
            isImmediatePropagationStopped: Se,
            isSimulated: !1,
            preventDefault: function () {
                var e = this.originalEvent;
                this.isDefaultPrevented = Ee, e && !this.isSimulated && e.preventDefault()
            },
            stopPropagation: function () {
                var e = this.originalEvent;
                this.isPropagationStopped = Ee, e && !this.isSimulated && e.stopPropagation()
            },
            stopImmediatePropagation: function () {
                var e = this.originalEvent;
                this.isImmediatePropagationStopped = Ee, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation()
            }
        }, w.each({
            altKey: !0,
            bubbles: !0,
            cancelable: !0,
            changedTouches: !0,
            ctrlKey: !0,
            detail: !0,
            eventPhase: !0,
            metaKey: !0,
            pageX: !0,
            pageY: !0,
            shiftKey: !0,
            view: !0,
            char: !0,
            code: !0,
            charCode: !0,
            key: !0,
            keyCode: !0,
            button: !0,
            buttons: !0,
            clientX: !0,
            clientY: !0,
            offsetX: !0,
            offsetY: !0,
            pointerId: !0,
            pointerType: !0,
            screenX: !0,
            screenY: !0,
            targetTouches: !0,
            toElement: !0,
            touches: !0,
            which: function (e) {
                var t = e.button;
                return null == e.which && Te.test(e.type) ? null != e.charCode ? e.charCode : e.keyCode : !e.which && void 0 !== t && Ce.test(e.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : e.which
            }
        }, w.event.addProp), w.each({focus: "focusin", blur: "focusout"}, function (e, t) {
            w.event.special[e] = {
                setup: function () {
                    return De(this, e, Ne), !1
                }, trigger: function () {
                    return De(this, e), !0
                }, delegateType: t
            }
        }), w.each({
            mouseenter: "mouseover",
            mouseleave: "mouseout",
            pointerenter: "pointerover",
            pointerleave: "pointerout"
        }, function (e, t) {
            w.event.special[e] = {
                delegateType: t, bindType: t, handle: function (e) {
                    var n, r = e.relatedTarget, o = e.handleObj;
                    return r && (r === this || w.contains(this, r)) || (e.type = o.origType, n = o.handler.apply(this, arguments), e.type = t), n
                }
            }
        }), w.fn.extend({
            on: function (e, t, n, r) {
                return Ae(this, e, t, n, r)
            }, one: function (e, t, n, r) {
                return Ae(this, e, t, n, r, 1)
            }, off: function (e, t, n) {
                var r, o;
                if (e && e.preventDefault && e.handleObj) return r = e.handleObj, w(e.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler), this;
                if ("object" == typeof e) {
                    for (o in e) this.off(o, t, e[o]);
                    return this
                }
                return !1 !== t && "function" != typeof t || (n = t, t = void 0), !1 === n && (n = Se), this.each(function () {
                    w.event.remove(this, e, n, t)
                })
            }
        });
        var je = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
            Le = /<script|<style|<link/i, qe = /checked\s*(?:[^=]|=\s*.checked.)/i,
            He = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

        function Pe(e, t) {
            return A(e, "table") && A(11 !== t.nodeType ? t : t.firstChild, "tr") && w(e).children("tbody")[0] || e
        }

        function Oe(e) {
            return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e
        }

        function Re(e) {
            return "true/" === (e.type || "").slice(0, 5) ? e.type = e.type.slice(5) : e.removeAttribute("type"), e
        }

        function Me(e, t) {
            var n, r, o, i, a, s, u, l;
            if (1 === t.nodeType) {
                if (Q.hasData(e) && (i = Q.access(e), a = Q.set(t, i), l = i.events)) for (o in delete a.handle, a.events = {}, l) for (n = 0, r = l[o].length; n < r; n++) w.event.add(t, o, l[o][n]);
                J.hasData(e) && (s = J.access(e), u = w.extend({}, s), J.set(t, u))
            }
        }

        function Ie(e, t, n, r) {
            t = a.apply([], t);
            var o, i, s, u, l, c, f = 0, d = e.length, p = d - 1, v = t[0], m = g(v);
            if (m || 1 < d && "string" == typeof v && !h.checkClone && qe.test(v)) return e.each(function (o) {
                var i = e.eq(o);
                m && (t[0] = v.call(this, o, i.html())), Ie(i, t, n, r)
            });
            if (d && (i = (o = we(t, e[0].ownerDocument, !1, e, r)).firstChild, 1 === o.childNodes.length && (o = i), i || r)) {
                for (u = (s = w.map(ve(o, "script"), Oe)).length; f < d; f++) l = o, f !== p && (l = w.clone(l, !0, !0), u && w.merge(s, ve(l, "script"))), n.call(e[f], l, f);
                if (u) for (c = s[s.length - 1].ownerDocument, w.map(s, Re), f = 0; f < u; f++) l = s[f], he.test(l.type || "") && !Q.access(l, "globalEval") && w.contains(c, l) && (l.src && "module" !== (l.type || "").toLowerCase() ? w._evalUrl && !l.noModule && w._evalUrl(l.src, {nonce: l.nonce || l.getAttribute("nonce")}) : y(l.textContent.replace(He, ""), l, c))
            }
            return e
        }

        function We(e, t, n) {
            for (var r, o = t ? w.filter(t, e) : e, i = 0; null != (r = o[i]); i++) n || 1 !== r.nodeType || w.cleanData(ve(r)), r.parentNode && (n && ie(r) && me(ve(r, "script")), r.parentNode.removeChild(r));
            return e
        }

        w.extend({
            htmlPrefilter: function (e) {
                return e.replace(je, "<$1></$2>")
            }, clone: function (e, t, n) {
                var r, o, i, a, s, u, l, c = e.cloneNode(!0), f = ie(e);
                if (!(h.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || w.isXMLDoc(e))) for (a = ve(c), r = 0, o = (i = ve(e)).length; r < o; r++) s = i[r], "input" === (l = (u = a[r]).nodeName.toLowerCase()) && de.test(s.type) ? u.checked = s.checked : "input" !== l && "textarea" !== l || (u.defaultValue = s.defaultValue);
                if (t) if (n) for (i = i || ve(e), a = a || ve(c), r = 0, o = i.length; r < o; r++) Me(i[r], a[r]); else Me(e, c);
                return 0 < (a = ve(c, "script")).length && me(a, !f && ve(e, "script")), c
            }, cleanData: function (e) {
                for (var t, n, r, o = w.event.special, i = 0; void 0 !== (n = e[i]); i++) if (G(n)) {
                    if (t = n[Q.expando]) {
                        if (t.events) for (r in t.events) o[r] ? w.event.remove(n, r) : w.removeEvent(n, r, t.handle);
                        n[Q.expando] = void 0
                    }
                    n[J.expando] && (n[J.expando] = void 0)
                }
            }
        }), w.fn.extend({
            detach: function (e) {
                return We(this, e, !0)
            }, remove: function (e) {
                return We(this, e)
            }, text: function (e) {
                return _(this, function (e) {
                    return void 0 === e ? w.text(this) : this.empty().each(function () {
                        1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e)
                    })
                }, null, e, arguments.length)
            }, append: function () {
                return Ie(this, arguments, function (e) {
                    1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || Pe(this, e).appendChild(e)
                })
            }, prepend: function () {
                return Ie(this, arguments, function (e) {
                    if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                        var t = Pe(this, e);
                        t.insertBefore(e, t.firstChild)
                    }
                })
            }, before: function () {
                return Ie(this, arguments, function (e) {
                    this.parentNode && this.parentNode.insertBefore(e, this)
                })
            }, after: function () {
                return Ie(this, arguments, function (e) {
                    this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
                })
            }, empty: function () {
                for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (w.cleanData(ve(e, !1)), e.textContent = "");
                return this
            }, clone: function (e, t) {
                return e = null != e && e, t = null == t ? e : t, this.map(function () {
                    return w.clone(this, e, t)
                })
            }, html: function (e) {
                return _(this, function (e) {
                    var t = this[0] || {}, n = 0, r = this.length;
                    if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
                    if ("string" == typeof e && !Le.test(e) && !ge[(pe.exec(e) || ["", ""])[1].toLowerCase()]) {
                        e = w.htmlPrefilter(e);
                        try {
                            for (; n < r; n++) 1 === (t = this[n] || {}).nodeType && (w.cleanData(ve(t, !1)), t.innerHTML = e);
                            t = 0
                        } catch (e) {
                        }
                    }
                    t && this.empty().append(e)
                }, null, e, arguments.length)
            }, replaceWith: function () {
                var e = [];
                return Ie(this, arguments, function (t) {
                    var n = this.parentNode;
                    w.inArray(this, e) < 0 && (w.cleanData(ve(this)), n && n.replaceChild(t, this))
                }, e)
            }
        }), w.each({
            appendTo: "append",
            prependTo: "prepend",
            insertBefore: "before",
            insertAfter: "after",
            replaceAll: "replaceWith"
        }, function (e, t) {
            w.fn[e] = function (e) {
                for (var n, r = [], o = w(e), i = o.length - 1, a = 0; a <= i; a++) n = a === i ? this : this.clone(!0), w(o[a])[t](n), s.apply(r, n.get());
                return this.pushStack(r)
            }
        });
        var $e = new RegExp("^(" + te + ")(?!px)[a-z%]+$", "i"), Fe = function (t) {
            var n = t.ownerDocument.defaultView;
            return n && n.opener || (n = e), n.getComputedStyle(t)
        }, Be = new RegExp(re.join("|"), "i");

        function _e(e, t, n) {
            var r, o, i, a, s = e.style;
            return (n = n || Fe(e)) && ("" !== (a = n.getPropertyValue(t) || n[t]) || ie(e) || (a = w.style(e, t)), !h.pixelBoxStyles() && $e.test(a) && Be.test(t) && (r = s.width, o = s.minWidth, i = s.maxWidth, s.minWidth = s.maxWidth = s.width = a, a = n.width, s.width = r, s.minWidth = o, s.maxWidth = i)), void 0 !== a ? a + "" : a
        }

        function ze(e, t) {
            return {
                get: function () {
                    if (!e()) return (this.get = t).apply(this, arguments);
                    delete this.get
                }
            }
        }

        !function () {
            function t() {
                if (c) {
                    l.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", c.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", oe.appendChild(l).appendChild(c);
                    var t = e.getComputedStyle(c);
                    o = "1%" !== t.top, u = 12 === n(t.marginLeft), c.style.right = "60%", s = 36 === n(t.right), i = 36 === n(t.width), c.style.position = "absolute", a = 12 === n(c.offsetWidth / 3), oe.removeChild(l), c = null
                }
            }

            function n(e) {
                return Math.round(parseFloat(e))
            }

            var o, i, a, s, u, l = r.createElement("div"), c = r.createElement("div");
            c.style && (c.style.backgroundClip = "content-box", c.cloneNode(!0).style.backgroundClip = "", h.clearCloneStyle = "content-box" === c.style.backgroundClip, w.extend(h, {
                boxSizingReliable: function () {
                    return t(), i
                }, pixelBoxStyles: function () {
                    return t(), s
                }, pixelPosition: function () {
                    return t(), o
                }, reliableMarginLeft: function () {
                    return t(), u
                }, scrollboxSize: function () {
                    return t(), a
                }
            }))
        }();
        var Ue = ["Webkit", "Moz", "ms"], Xe = r.createElement("div").style, Ve = {};

        function Ge(e) {
            return w.cssProps[e] || Ve[e] || (e in Xe ? e : Ve[e] = function (e) {
                for (var t = e[0].toUpperCase() + e.slice(1), n = Ue.length; n--;) if ((e = Ue[n] + t) in Xe) return e
            }(e) || e)
        }

        var Ye = /^(none|table(?!-c[ea]).+)/, Qe = /^--/,
            Je = {position: "absolute", visibility: "hidden", display: "block"},
            Ke = {letterSpacing: "0", fontWeight: "400"};

        function Ze(e, t, n) {
            var r = ne.exec(t);
            return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t
        }

        function et(e, t, n, r, o, i) {
            var a = "width" === t ? 1 : 0, s = 0, u = 0;
            if (n === (r ? "border" : "content")) return 0;
            for (; a < 4; a += 2) "margin" === n && (u += w.css(e, n + re[a], !0, o)), r ? ("content" === n && (u -= w.css(e, "padding" + re[a], !0, o)), "margin" !== n && (u -= w.css(e, "border" + re[a] + "Width", !0, o))) : (u += w.css(e, "padding" + re[a], !0, o), "padding" !== n ? u += w.css(e, "border" + re[a] + "Width", !0, o) : s += w.css(e, "border" + re[a] + "Width", !0, o));
            return !r && 0 <= i && (u += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - i - u - s - .5)) || 0), u
        }

        function tt(e, t, n) {
            var r = Fe(e), o = (!h.boxSizingReliable() || n) && "border-box" === w.css(e, "boxSizing", !1, r), i = o,
                a = _e(e, t, r), s = "offset" + t[0].toUpperCase() + t.slice(1);
            if ($e.test(a)) {
                if (!n) return a;
                a = "auto"
            }
            return (!h.boxSizingReliable() && o || "auto" === a || !parseFloat(a) && "inline" === w.css(e, "display", !1, r)) && e.getClientRects().length && (o = "border-box" === w.css(e, "boxSizing", !1, r), (i = s in e) && (a = e[s])), (a = parseFloat(a) || 0) + et(e, t, n || (o ? "border" : "content"), i, r, a) + "px"
        }

        function nt(e, t, n, r, o) {
            return new nt.prototype.init(e, t, n, r, o)
        }

        w.extend({
            cssHooks: {
                opacity: {
                    get: function (e, t) {
                        if (t) {
                            var n = _e(e, "opacity");
                            return "" === n ? "1" : n
                        }
                    }
                }
            },
            cssNumber: {
                animationIterationCount: !0,
                columnCount: !0,
                fillOpacity: !0,
                flexGrow: !0,
                flexShrink: !0,
                fontWeight: !0,
                gridArea: !0,
                gridColumn: !0,
                gridColumnEnd: !0,
                gridColumnStart: !0,
                gridRow: !0,
                gridRowEnd: !0,
                gridRowStart: !0,
                lineHeight: !0,
                opacity: !0,
                order: !0,
                orphans: !0,
                widows: !0,
                zIndex: !0,
                zoom: !0
            },
            cssProps: {},
            style: function (e, t, n, r) {
                if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
                    var o, i, a, s = V(t), u = Qe.test(t), l = e.style;
                    if (u || (t = Ge(s)), a = w.cssHooks[t] || w.cssHooks[s], void 0 === n) return a && "get" in a && void 0 !== (o = a.get(e, !1, r)) ? o : l[t];
                    "string" == (i = typeof n) && (o = ne.exec(n)) && o[1] && (n = le(e, t, o), i = "number"), null != n && n == n && ("number" !== i || u || (n += o && o[3] || (w.cssNumber[s] ? "" : "px")), h.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (l[t] = "inherit"), a && "set" in a && void 0 === (n = a.set(e, n, r)) || (u ? l.setProperty(t, n) : l[t] = n))
                }
            },
            css: function (e, t, n, r) {
                var o, i, a, s = V(t);
                return Qe.test(t) || (t = Ge(s)), (a = w.cssHooks[t] || w.cssHooks[s]) && "get" in a && (o = a.get(e, !0, n)), void 0 === o && (o = _e(e, t, r)), "normal" === o && t in Ke && (o = Ke[t]), "" === n || n ? (i = parseFloat(o), !0 === n || isFinite(i) ? i || 0 : o) : o
            }
        }), w.each(["height", "width"], function (e, t) {
            w.cssHooks[t] = {
                get: function (e, n, r) {
                    if (n) return !Ye.test(w.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? tt(e, t, r) : ue(e, Je, function () {
                        return tt(e, t, r)
                    })
                }, set: function (e, n, r) {
                    var o, i = Fe(e), a = !h.scrollboxSize() && "absolute" === i.position,
                        s = (a || r) && "border-box" === w.css(e, "boxSizing", !1, i), u = r ? et(e, t, r, s, i) : 0;
                    return s && a && (u -= Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - parseFloat(i[t]) - et(e, t, "border", !1, i) - .5)), u && (o = ne.exec(n)) && "px" !== (o[3] || "px") && (e.style[t] = n, n = w.css(e, t)), Ze(0, n, u)
                }
            }
        }), w.cssHooks.marginLeft = ze(h.reliableMarginLeft, function (e, t) {
            if (t) return (parseFloat(_e(e, "marginLeft")) || e.getBoundingClientRect().left - ue(e, {marginLeft: 0}, function () {
                return e.getBoundingClientRect().left
            })) + "px"
        }), w.each({margin: "", padding: "", border: "Width"}, function (e, t) {
            w.cssHooks[e + t] = {
                expand: function (n) {
                    for (var r = 0, o = {}, i = "string" == typeof n ? n.split(" ") : [n]; r < 4; r++) o[e + re[r] + t] = i[r] || i[r - 2] || i[0];
                    return o
                }
            }, "margin" !== e && (w.cssHooks[e + t].set = Ze)
        }), w.fn.extend({
            css: function (e, t) {
                return _(this, function (e, t, n) {
                    var r, o, i = {}, a = 0;
                    if (Array.isArray(t)) {
                        for (r = Fe(e), o = t.length; a < o; a++) i[t[a]] = w.css(e, t[a], !1, r);
                        return i
                    }
                    return void 0 !== n ? w.style(e, t, n) : w.css(e, t)
                }, e, t, 1 < arguments.length)
            }
        }), ((w.Tween = nt).prototype = {
            constructor: nt, init: function (e, t, n, r, o, i) {
                this.elem = e, this.prop = n, this.easing = o || w.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = r, this.unit = i || (w.cssNumber[n] ? "" : "px")
            }, cur: function () {
                var e = nt.propHooks[this.prop];
                return e && e.get ? e.get(this) : nt.propHooks._default.get(this)
            }, run: function (e) {
                var t, n = nt.propHooks[this.prop];
                return this.options.duration ? this.pos = t = w.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : nt.propHooks._default.set(this), this
            }
        }).init.prototype = nt.prototype, (nt.propHooks = {
            _default: {
                get: function (e) {
                    var t;
                    return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = w.css(e.elem, e.prop, "")) && "auto" !== t ? t : 0
                }, set: function (e) {
                    w.fx.step[e.prop] ? w.fx.step[e.prop](e) : 1 !== e.elem.nodeType || !w.cssHooks[e.prop] && null == e.elem.style[Ge(e.prop)] ? e.elem[e.prop] = e.now : w.style(e.elem, e.prop, e.now + e.unit)
                }
            }
        }).scrollTop = nt.propHooks.scrollLeft = {
            set: function (e) {
                e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
            }
        }, w.easing = {
            linear: function (e) {
                return e
            }, swing: function (e) {
                return .5 - Math.cos(e * Math.PI) / 2
            }, _default: "swing"
        }, w.fx = nt.prototype.init, w.fx.step = {};
        var rt, ot, it, at, st = /^(?:toggle|show|hide)$/, ut = /queueHooks$/;

        function lt() {
            ot && (!1 === r.hidden && e.requestAnimationFrame ? e.requestAnimationFrame(lt) : e.setTimeout(lt, w.fx.interval), w.fx.tick())
        }

        function ct() {
            return e.setTimeout(function () {
                rt = void 0
            }), rt = Date.now()
        }

        function ft(e, t) {
            var n, r = 0, o = {height: e};
            for (t = t ? 1 : 0; r < 4; r += 2 - t) o["margin" + (n = re[r])] = o["padding" + n] = e;
            return t && (o.opacity = o.width = e), o
        }

        function dt(e, t, n) {
            for (var r, o = (pt.tweeners[t] || []).concat(pt.tweeners["*"]), i = 0, a = o.length; i < a; i++) if (r = o[i].call(n, t, e)) return r
        }

        function pt(e, t, n) {
            var r, o, i = 0, a = pt.prefilters.length, s = w.Deferred().always(function () {
                delete u.elem
            }), u = function () {
                if (o) return !1;
                for (var t = rt || ct(), n = Math.max(0, l.startTime + l.duration - t), r = 1 - (n / l.duration || 0), i = 0, a = l.tweens.length; i < a; i++) l.tweens[i].run(r);
                return s.notifyWith(e, [l, r, n]), r < 1 && a ? n : (a || s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l]), !1)
            }, l = s.promise({
                elem: e,
                props: w.extend({}, t),
                opts: w.extend(!0, {specialEasing: {}, easing: w.easing._default}, n),
                originalProperties: t,
                originalOptions: n,
                startTime: rt || ct(),
                duration: n.duration,
                tweens: [],
                createTween: function (t, n) {
                    var r = w.Tween(e, l.opts, t, n, l.opts.specialEasing[t] || l.opts.easing);
                    return l.tweens.push(r), r
                },
                stop: function (t) {
                    var n = 0, r = t ? l.tweens.length : 0;
                    if (o) return this;
                    for (o = !0; n < r; n++) l.tweens[n].run(1);
                    return t ? (s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l, t])) : s.rejectWith(e, [l, t]), this
                }
            }), c = l.props;
            for (function (e, t) {
                var n, r, o, i, a;
                for (n in e) if (o = t[r = V(n)], i = e[n], Array.isArray(i) && (o = i[1], i = e[n] = i[0]), n !== r && (e[r] = i, delete e[n]), (a = w.cssHooks[r]) && "expand" in a) for (n in i = a.expand(i), delete e[r], i) n in e || (e[n] = i[n], t[n] = o); else t[r] = o
            }(c, l.opts.specialEasing); i < a; i++) if (r = pt.prefilters[i].call(l, e, c, l.opts)) return g(r.stop) && (w._queueHooks(l.elem, l.opts.queue).stop = r.stop.bind(r)), r;
            return w.map(c, dt, l), g(l.opts.start) && l.opts.start.call(e, l), l.progress(l.opts.progress).done(l.opts.done, l.opts.complete).fail(l.opts.fail).always(l.opts.always), w.fx.timer(w.extend(u, {
                elem: e,
                anim: l,
                queue: l.opts.queue
            })), l
        }

        w.Animation = w.extend(pt, {
            tweeners: {
                "*": [function (e, t) {
                    var n = this.createTween(e, t);
                    return le(n.elem, e, ne.exec(t), n), n
                }]
            }, tweener: function (e, t) {
                g(e) ? (t = e, e = ["*"]) : e = e.match(R);
                for (var n, r = 0, o = e.length; r < o; r++) n = e[r], pt.tweeners[n] = pt.tweeners[n] || [], pt.tweeners[n].unshift(t)
            }, prefilters: [function (e, t, n) {
                var r, o, i, a, s, u, l, c, f = "width" in t || "height" in t, d = this, p = {}, h = e.style,
                    g = e.nodeType && se(e), v = Q.get(e, "fxshow");
                for (r in n.queue || (null == (a = w._queueHooks(e, "fx")).unqueued && (a.unqueued = 0, s = a.empty.fire, a.empty.fire = function () {
                    a.unqueued || s()
                }), a.unqueued++, d.always(function () {
                    d.always(function () {
                        a.unqueued--, w.queue(e, "fx").length || a.empty.fire()
                    })
                })), t) if (o = t[r], st.test(o)) {
                    if (delete t[r], i = i || "toggle" === o, o === (g ? "hide" : "show")) {
                        if ("show" !== o || !v || void 0 === v[r]) continue;
                        g = !0
                    }
                    p[r] = v && v[r] || w.style(e, r)
                }
                if ((u = !w.isEmptyObject(t)) || !w.isEmptyObject(p)) for (r in f && 1 === e.nodeType && (n.overflow = [h.overflow, h.overflowX, h.overflowY], null == (l = v && v.display) && (l = Q.get(e, "display")), "none" === (c = w.css(e, "display")) && (l ? c = l : (fe([e], !0), l = e.style.display || l, c = w.css(e, "display"), fe([e]))), ("inline" === c || "inline-block" === c && null != l) && "none" === w.css(e, "float") && (u || (d.done(function () {
                    h.display = l
                }), null == l && (c = h.display, l = "none" === c ? "" : c)), h.display = "inline-block")), n.overflow && (h.overflow = "hidden", d.always(function () {
                    h.overflow = n.overflow[0], h.overflowX = n.overflow[1], h.overflowY = n.overflow[2]
                })), u = !1, p) u || (v ? "hidden" in v && (g = v.hidden) : v = Q.access(e, "fxshow", {display: l}), i && (v.hidden = !g), g && fe([e], !0), d.done(function () {
                    for (r in g || fe([e]), Q.remove(e, "fxshow"), p) w.style(e, r, p[r])
                })), u = dt(g ? v[r] : 0, r, d), r in v || (v[r] = u.start, g && (u.end = u.start, u.start = 0))
            }], prefilter: function (e, t) {
                t ? pt.prefilters.unshift(e) : pt.prefilters.push(e)
            }
        }), w.speed = function (e, t, n) {
            var r = e && "object" == typeof e ? w.extend({}, e) : {
                complete: n || !n && t || g(e) && e,
                duration: e,
                easing: n && t || t && !g(t) && t
            };
            return w.fx.off ? r.duration = 0 : "number" != typeof r.duration && (r.duration in w.fx.speeds ? r.duration = w.fx.speeds[r.duration] : r.duration = w.fx.speeds._default), null != r.queue && !0 !== r.queue || (r.queue = "fx"), r.old = r.complete, r.complete = function () {
                g(r.old) && r.old.call(this), r.queue && w.dequeue(this, r.queue)
            }, r
        }, w.fn.extend({
            fadeTo: function (e, t, n, r) {
                return this.filter(se).css("opacity", 0).show().end().animate({opacity: t}, e, n, r)
            }, animate: function (e, t, n, r) {
                var o = w.isEmptyObject(e), i = w.speed(t, n, r), a = function () {
                    var t = pt(this, w.extend({}, e), i);
                    (o || Q.get(this, "finish")) && t.stop(!0)
                };
                return a.finish = a, o || !1 === i.queue ? this.each(a) : this.queue(i.queue, a)
            }, stop: function (e, t, n) {
                var r = function (e) {
                    var t = e.stop;
                    delete e.stop, t(n)
                };
                return "string" != typeof e && (n = t, t = e, e = void 0), t && !1 !== e && this.queue(e || "fx", []), this.each(function () {
                    var t = !0, o = null != e && e + "queueHooks", i = w.timers, a = Q.get(this);
                    if (o) a[o] && a[o].stop && r(a[o]); else for (o in a) a[o] && a[o].stop && ut.test(o) && r(a[o]);
                    for (o = i.length; o--;) i[o].elem !== this || null != e && i[o].queue !== e || (i[o].anim.stop(n), t = !1, i.splice(o, 1));
                    !t && n || w.dequeue(this, e)
                })
            }, finish: function (e) {
                return !1 !== e && (e = e || "fx"), this.each(function () {
                    var t, n = Q.get(this), r = n[e + "queue"], o = n[e + "queueHooks"], i = w.timers,
                        a = r ? r.length : 0;
                    for (n.finish = !0, w.queue(this, e, []), o && o.stop && o.stop.call(this, !0), t = i.length; t--;) i[t].elem === this && i[t].queue === e && (i[t].anim.stop(!0), i.splice(t, 1));
                    for (t = 0; t < a; t++) r[t] && r[t].finish && r[t].finish.call(this);
                    delete n.finish
                })
            }
        }), w.each(["toggle", "show", "hide"], function (e, t) {
            var n = w.fn[t];
            w.fn[t] = function (e, r, o) {
                return null == e || "boolean" == typeof e ? n.apply(this, arguments) : this.animate(ft(t, !0), e, r, o)
            }
        }), w.each({
            slideDown: ft("show"),
            slideUp: ft("hide"),
            slideToggle: ft("toggle"),
            fadeIn: {opacity: "show"},
            fadeOut: {opacity: "hide"},
            fadeToggle: {opacity: "toggle"}
        }, function (e, t) {
            w.fn[e] = function (e, n, r) {
                return this.animate(t, e, n, r)
            }
        }), w.timers = [], w.fx.tick = function () {
            var e, t = 0, n = w.timers;
            for (rt = Date.now(); t < n.length; t++) (e = n[t])() || n[t] !== e || n.splice(t--, 1);
            n.length || w.fx.stop(), rt = void 0
        }, w.fx.timer = function (e) {
            w.timers.push(e), w.fx.start()
        }, w.fx.interval = 13, w.fx.start = function () {
            ot || (ot = !0, lt())
        }, w.fx.stop = function () {
            ot = null
        }, w.fx.speeds = {slow: 600, fast: 200, _default: 400}, w.fn.delay = function (t, n) {
            return t = w.fx && w.fx.speeds[t] || t, n = n || "fx", this.queue(n, function (n, r) {
                var o = e.setTimeout(n, t);
                r.stop = function () {
                    e.clearTimeout(o)
                }
            })
        }, it = r.createElement("input"), at = r.createElement("select").appendChild(r.createElement("option")), it.type = "checkbox", h.checkOn = "" !== it.value, h.optSelected = at.selected, (it = r.createElement("input")).value = "t", it.type = "radio", h.radioValue = "t" === it.value;
        var ht, gt = w.expr.attrHandle;
        w.fn.extend({
            attr: function (e, t) {
                return _(this, w.attr, e, t, 1 < arguments.length)
            }, removeAttr: function (e) {
                return this.each(function () {
                    w.removeAttr(this, e)
                })
            }
        }), w.extend({
            attr: function (e, t, n) {
                var r, o, i = e.nodeType;
                if (3 !== i && 8 !== i && 2 !== i) return void 0 === e.getAttribute ? w.prop(e, t, n) : (1 === i && w.isXMLDoc(e) || (o = w.attrHooks[t.toLowerCase()] || (w.expr.match.bool.test(t) ? ht : void 0)), void 0 !== n ? null === n ? void w.removeAttr(e, t) : o && "set" in o && void 0 !== (r = o.set(e, n, t)) ? r : (e.setAttribute(t, n + ""), n) : o && "get" in o && null !== (r = o.get(e, t)) ? r : null == (r = w.find.attr(e, t)) ? void 0 : r)
            }, attrHooks: {
                type: {
                    set: function (e, t) {
                        if (!h.radioValue && "radio" === t && A(e, "input")) {
                            var n = e.value;
                            return e.setAttribute("type", t), n && (e.value = n), t
                        }
                    }
                }
            }, removeAttr: function (e, t) {
                var n, r = 0, o = t && t.match(R);
                if (o && 1 === e.nodeType) for (; n = o[r++];) e.removeAttribute(n)
            }
        }), ht = {
            set: function (e, t, n) {
                return !1 === t ? w.removeAttr(e, n) : e.setAttribute(n, n), n
            }
        }, w.each(w.expr.match.bool.source.match(/\w+/g), function (e, t) {
            var n = gt[t] || w.find.attr;
            gt[t] = function (e, t, r) {
                var o, i, a = t.toLowerCase();
                return r || (i = gt[a], gt[a] = o, o = null != n(e, t, r) ? a : null, gt[a] = i), o
            }
        });
        var vt = /^(?:input|select|textarea|button)$/i, mt = /^(?:a|area)$/i;

        function yt(e) {
            return (e.match(R) || []).join(" ")
        }

        function bt(e) {
            return e.getAttribute && e.getAttribute("class") || ""
        }

        function xt(e) {
            return Array.isArray(e) ? e : "string" == typeof e && e.match(R) || []
        }

        w.fn.extend({
            prop: function (e, t) {
                return _(this, w.prop, e, t, 1 < arguments.length)
            }, removeProp: function (e) {
                return this.each(function () {
                    delete this[w.propFix[e] || e]
                })
            }
        }), w.extend({
            prop: function (e, t, n) {
                var r, o, i = e.nodeType;
                if (3 !== i && 8 !== i && 2 !== i) return 1 === i && w.isXMLDoc(e) || (t = w.propFix[t] || t, o = w.propHooks[t]), void 0 !== n ? o && "set" in o && void 0 !== (r = o.set(e, n, t)) ? r : e[t] = n : o && "get" in o && null !== (r = o.get(e, t)) ? r : e[t]
            }, propHooks: {
                tabIndex: {
                    get: function (e) {
                        var t = w.find.attr(e, "tabindex");
                        return t ? parseInt(t, 10) : vt.test(e.nodeName) || mt.test(e.nodeName) && e.href ? 0 : -1
                    }
                }
            }, propFix: {for: "htmlFor", class: "className"}
        }), h.optSelected || (w.propHooks.selected = {
            get: function (e) {
                var t = e.parentNode;
                return t && t.parentNode && t.parentNode.selectedIndex, null
            }, set: function (e) {
                var t = e.parentNode;
                t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex)
            }
        }), w.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () {
            w.propFix[this.toLowerCase()] = this
        }), w.fn.extend({
            addClass: function (e) {
                var t, n, r, o, i, a, s, u = 0;
                if (g(e)) return this.each(function (t) {
                    w(this).addClass(e.call(this, t, bt(this)))
                });
                if ((t = xt(e)).length) for (; n = this[u++];) if (o = bt(n), r = 1 === n.nodeType && " " + yt(o) + " ") {
                    for (a = 0; i = t[a++];) r.indexOf(" " + i + " ") < 0 && (r += i + " ");
                    o !== (s = yt(r)) && n.setAttribute("class", s)
                }
                return this
            }, removeClass: function (e) {
                var t, n, r, o, i, a, s, u = 0;
                if (g(e)) return this.each(function (t) {
                    w(this).removeClass(e.call(this, t, bt(this)))
                });
                if (!arguments.length) return this.attr("class", "");
                if ((t = xt(e)).length) for (; n = this[u++];) if (o = bt(n), r = 1 === n.nodeType && " " + yt(o) + " ") {
                    for (a = 0; i = t[a++];) for (; -1 < r.indexOf(" " + i + " ");) r = r.replace(" " + i + " ", " ");
                    o !== (s = yt(r)) && n.setAttribute("class", s)
                }
                return this
            }, toggleClass: function (e, t) {
                var n = typeof e, r = "string" === n || Array.isArray(e);
                return "boolean" == typeof t && r ? t ? this.addClass(e) : this.removeClass(e) : g(e) ? this.each(function (n) {
                    w(this).toggleClass(e.call(this, n, bt(this), t), t)
                }) : this.each(function () {
                    var t, o, i, a;
                    if (r) for (o = 0, i = w(this), a = xt(e); t = a[o++];) i.hasClass(t) ? i.removeClass(t) : i.addClass(t); else void 0 !== e && "boolean" !== n || ((t = bt(this)) && Q.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || !1 === e ? "" : Q.get(this, "__className__") || ""))
                })
            }, hasClass: function (e) {
                var t, n, r = 0;
                for (t = " " + e + " "; n = this[r++];) if (1 === n.nodeType && -1 < (" " + yt(bt(n)) + " ").indexOf(t)) return !0;
                return !1
            }
        });
        var wt = /\r/g;
        w.fn.extend({
            val: function (e) {
                var t, n, r, o = this[0];
                return arguments.length ? (r = g(e), this.each(function (n) {
                    var o;
                    1 === this.nodeType && (null == (o = r ? e.call(this, n, w(this).val()) : e) ? o = "" : "number" == typeof o ? o += "" : Array.isArray(o) && (o = w.map(o, function (e) {
                        return null == e ? "" : e + ""
                    })), (t = w.valHooks[this.type] || w.valHooks[this.nodeName.toLowerCase()]) && "set" in t && void 0 !== t.set(this, o, "value") || (this.value = o))
                })) : o ? (t = w.valHooks[o.type] || w.valHooks[o.nodeName.toLowerCase()]) && "get" in t && void 0 !== (n = t.get(o, "value")) ? n : "string" == typeof (n = o.value) ? n.replace(wt, "") : null == n ? "" : n : void 0
            }
        }), w.extend({
            valHooks: {
                option: {
                    get: function (e) {
                        var t = w.find.attr(e, "value");
                        return null != t ? t : yt(w.text(e))
                    }
                }, select: {
                    get: function (e) {
                        var t, n, r, o = e.options, i = e.selectedIndex, a = "select-one" === e.type, s = a ? null : [],
                            u = a ? i + 1 : o.length;
                        for (r = i < 0 ? u : a ? i : 0; r < u; r++) if (((n = o[r]).selected || r === i) && !n.disabled && (!n.parentNode.disabled || !A(n.parentNode, "optgroup"))) {
                            if (t = w(n).val(), a) return t;
                            s.push(t)
                        }
                        return s
                    }, set: function (e, t) {
                        for (var n, r, o = e.options, i = w.makeArray(t), a = o.length; a--;) ((r = o[a]).selected = -1 < w.inArray(w.valHooks.option.get(r), i)) && (n = !0);
                        return n || (e.selectedIndex = -1), i
                    }
                }
            }
        }), w.each(["radio", "checkbox"], function () {
            w.valHooks[this] = {
                set: function (e, t) {
                    if (Array.isArray(t)) return e.checked = -1 < w.inArray(w(e).val(), t)
                }
            }, h.checkOn || (w.valHooks[this].get = function (e) {
                return null === e.getAttribute("value") ? "on" : e.value
            })
        }), h.focusin = "onfocusin" in e;
        var Tt = /^(?:focusinfocus|focusoutblur)$/, Ct = function (e) {
            e.stopPropagation()
        };
        w.extend(w.event, {
            trigger: function (t, n, o, i) {
                var a, s, u, l, c, d, p, h, m = [o || r], y = f.call(t, "type") ? t.type : t,
                    b = f.call(t, "namespace") ? t.namespace.split(".") : [];
                if (s = h = u = o = o || r, 3 !== o.nodeType && 8 !== o.nodeType && !Tt.test(y + w.event.triggered) && (-1 < y.indexOf(".") && (y = (b = y.split(".")).shift(), b.sort()), c = y.indexOf(":") < 0 && "on" + y, (t = t[w.expando] ? t : new w.Event(y, "object" == typeof t && t)).isTrigger = i ? 2 : 3, t.namespace = b.join("."), t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + b.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = o), n = null == n ? [t] : w.makeArray(n, [t]), p = w.event.special[y] || {}, i || !p.trigger || !1 !== p.trigger.apply(o, n))) {
                    if (!i && !p.noBubble && !v(o)) {
                        for (l = p.delegateType || y, Tt.test(l + y) || (s = s.parentNode); s; s = s.parentNode) m.push(s), u = s;
                        u === (o.ownerDocument || r) && m.push(u.defaultView || u.parentWindow || e)
                    }
                    for (a = 0; (s = m[a++]) && !t.isPropagationStopped();) h = s, t.type = 1 < a ? l : p.bindType || y, (d = (Q.get(s, "events") || {})[t.type] && Q.get(s, "handle")) && d.apply(s, n), (d = c && s[c]) && d.apply && G(s) && (t.result = d.apply(s, n), !1 === t.result && t.preventDefault());
                    return t.type = y, i || t.isDefaultPrevented() || p._default && !1 !== p._default.apply(m.pop(), n) || !G(o) || c && g(o[y]) && !v(o) && ((u = o[c]) && (o[c] = null), w.event.triggered = y, t.isPropagationStopped() && h.addEventListener(y, Ct), o[y](), t.isPropagationStopped() && h.removeEventListener(y, Ct), w.event.triggered = void 0, u && (o[c] = u)), t.result
                }
            }, simulate: function (e, t, n) {
                var r = w.extend(new w.Event, n, {type: e, isSimulated: !0});
                w.event.trigger(r, null, t)
            }
        }), w.fn.extend({
            trigger: function (e, t) {
                return this.each(function () {
                    w.event.trigger(e, t, this)
                })
            }, triggerHandler: function (e, t) {
                var n = this[0];
                if (n) return w.event.trigger(e, t, n, !0)
            }
        }), h.focusin || w.each({focus: "focusin", blur: "focusout"}, function (e, t) {
            var n = function (e) {
                w.event.simulate(t, e.target, w.event.fix(e))
            };
            w.event.special[t] = {
                setup: function () {
                    var r = this.ownerDocument || this, o = Q.access(r, t);
                    o || r.addEventListener(e, n, !0), Q.access(r, t, (o || 0) + 1)
                }, teardown: function () {
                    var r = this.ownerDocument || this, o = Q.access(r, t) - 1;
                    o ? Q.access(r, t, o) : (r.removeEventListener(e, n, !0), Q.remove(r, t))
                }
            }
        });
        var kt = e.location, Et = Date.now(), St = /\?/;
        w.parseXML = function (t) {
            var n;
            if (!t || "string" != typeof t) return null;
            try {
                n = (new e.DOMParser).parseFromString(t, "text/xml")
            } catch (t) {
                n = void 0
            }
            return n && !n.getElementsByTagName("parsererror").length || w.error("Invalid XML: " + t), n
        };
        var Nt = /\[\]$/, At = /\r?\n/g, Dt = /^(?:submit|button|image|reset|file)$/i,
            jt = /^(?:input|select|textarea|keygen)/i;

        function Lt(e, t, n, r) {
            var o;
            if (Array.isArray(t)) w.each(t, function (t, o) {
                n || Nt.test(e) ? r(e, o) : Lt(e + "[" + ("object" == typeof o && null != o ? t : "") + "]", o, n, r)
            }); else if (n || "object" !== b(t)) r(e, t); else for (o in t) Lt(e + "[" + o + "]", t[o], n, r)
        }

        w.param = function (e, t) {
            var n, r = [], o = function (e, t) {
                var n = g(t) ? t() : t;
                r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n)
            };
            if (null == e) return "";
            if (Array.isArray(e) || e.jquery && !w.isPlainObject(e)) w.each(e, function () {
                o(this.name, this.value)
            }); else for (n in e) Lt(n, e[n], t, o);
            return r.join("&")
        }, w.fn.extend({
            serialize: function () {
                return w.param(this.serializeArray())
            }, serializeArray: function () {
                return this.map(function () {
                    var e = w.prop(this, "elements");
                    return e ? w.makeArray(e) : this
                }).filter(function () {
                    var e = this.type;
                    return this.name && !w(this).is(":disabled") && jt.test(this.nodeName) && !Dt.test(e) && (this.checked || !de.test(e))
                }).map(function (e, t) {
                    var n = w(this).val();
                    return null == n ? null : Array.isArray(n) ? w.map(n, function (e) {
                        return {name: t.name, value: e.replace(At, "\r\n")}
                    }) : {name: t.name, value: n.replace(At, "\r\n")}
                }).get()
            }
        });
        var qt = /%20/g, Ht = /#.*$/, Pt = /([?&])_=[^&]*/, Ot = /^(.*?):[ \t]*([^\r\n]*)$/gm, Rt = /^(?:GET|HEAD)$/,
            Mt = /^\/\//, It = {}, Wt = {}, $t = "*/".concat("*"), Ft = r.createElement("a");

        function Bt(e) {
            return function (t, n) {
                "string" != typeof t && (n = t, t = "*");
                var r, o = 0, i = t.toLowerCase().match(R) || [];
                if (g(n)) for (; r = i[o++];) "+" === r[0] ? (r = r.slice(1) || "*", (e[r] = e[r] || []).unshift(n)) : (e[r] = e[r] || []).push(n)
            }
        }

        function _t(e, t, n, r) {
            var o = {}, i = e === Wt;

            function a(s) {
                var u;
                return o[s] = !0, w.each(e[s] || [], function (e, s) {
                    var l = s(t, n, r);
                    return "string" != typeof l || i || o[l] ? i ? !(u = l) : void 0 : (t.dataTypes.unshift(l), a(l), !1)
                }), u
            }

            return a(t.dataTypes[0]) || !o["*"] && a("*")
        }

        function zt(e, t) {
            var n, r, o = w.ajaxSettings.flatOptions || {};
            for (n in t) void 0 !== t[n] && ((o[n] ? e : r || (r = {}))[n] = t[n]);
            return r && w.extend(!0, e, r), e
        }

        Ft.href = kt.href, w.extend({
            active: 0,
            lastModified: {},
            etag: {},
            ajaxSettings: {
                url: kt.href,
                type: "GET",
                isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(kt.protocol),
                global: !0,
                processData: !0,
                async: !0,
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                accepts: {
                    "*": $t,
                    text: "text/plain",
                    html: "text/html",
                    xml: "application/xml, text/xml",
                    json: "application/json, text/javascript"
                },
                contents: {xml: /\bxml\b/, html: /\bhtml/, json: /\bjson\b/},
                responseFields: {xml: "responseXML", text: "responseText", json: "responseJSON"},
                converters: {"* text": String, "text html": !0, "text json": JSON.parse, "text xml": w.parseXML},
                flatOptions: {url: !0, context: !0}
            },
            ajaxSetup: function (e, t) {
                return t ? zt(zt(e, w.ajaxSettings), t) : zt(w.ajaxSettings, e)
            },
            ajaxPrefilter: Bt(It),
            ajaxTransport: Bt(Wt),
            ajax: function (t, n) {
                "object" == typeof t && (n = t, t = void 0), n = n || {};
                var o, i, a, s, u, l, c, f, d, p, h = w.ajaxSetup({}, n), g = h.context || h,
                    v = h.context && (g.nodeType || g.jquery) ? w(g) : w.event, m = w.Deferred(),
                    y = w.Callbacks("once memory"), b = h.statusCode || {}, x = {}, T = {}, C = "canceled", k = {
                        readyState: 0, getResponseHeader: function (e) {
                            var t;
                            if (c) {
                                if (!s) for (s = {}; t = Ot.exec(a);) s[t[1].toLowerCase() + " "] = (s[t[1].toLowerCase() + " "] || []).concat(t[2]);
                                t = s[e.toLowerCase() + " "]
                            }
                            return null == t ? null : t.join(", ")
                        }, getAllResponseHeaders: function () {
                            return c ? a : null
                        }, setRequestHeader: function (e, t) {
                            return null == c && (e = T[e.toLowerCase()] = T[e.toLowerCase()] || e, x[e] = t), this
                        }, overrideMimeType: function (e) {
                            return null == c && (h.mimeType = e), this
                        }, statusCode: function (e) {
                            var t;
                            if (e) if (c) k.always(e[k.status]); else for (t in e) b[t] = [b[t], e[t]];
                            return this
                        }, abort: function (e) {
                            var t = e || C;
                            return o && o.abort(t), E(0, t), this
                        }
                    };
                if (m.promise(k), h.url = ((t || h.url || kt.href) + "").replace(Mt, kt.protocol + "//"), h.type = n.method || n.type || h.method || h.type, h.dataTypes = (h.dataType || "*").toLowerCase().match(R) || [""], null == h.crossDomain) {
                    l = r.createElement("a");
                    try {
                        l.href = h.url, l.href = l.href, h.crossDomain = Ft.protocol + "//" + Ft.host != l.protocol + "//" + l.host
                    } catch (t) {
                        h.crossDomain = !0
                    }
                }
                if (h.data && h.processData && "string" != typeof h.data && (h.data = w.param(h.data, h.traditional)), _t(It, h, n, k), c) return k;
                for (d in (f = w.event && h.global) && 0 == w.active++ && w.event.trigger("ajaxStart"), h.type = h.type.toUpperCase(), h.hasContent = !Rt.test(h.type), i = h.url.replace(Ht, ""), h.hasContent ? h.data && h.processData && 0 === (h.contentType || "").indexOf("application/x-www-form-urlencoded") && (h.data = h.data.replace(qt, "+")) : (p = h.url.slice(i.length), h.data && (h.processData || "string" == typeof h.data) && (i += (St.test(i) ? "&" : "?") + h.data, delete h.data), !1 === h.cache && (i = i.replace(Pt, "$1"), p = (St.test(i) ? "&" : "?") + "_=" + Et++ + p), h.url = i + p), h.ifModified && (w.lastModified[i] && k.setRequestHeader("If-Modified-Since", w.lastModified[i]), w.etag[i] && k.setRequestHeader("If-None-Match", w.etag[i])), (h.data && h.hasContent && !1 !== h.contentType || n.contentType) && k.setRequestHeader("Content-Type", h.contentType), k.setRequestHeader("Accept", h.dataTypes[0] && h.accepts[h.dataTypes[0]] ? h.accepts[h.dataTypes[0]] + ("*" !== h.dataTypes[0] ? ", " + $t + "; q=0.01" : "") : h.accepts["*"]), h.headers) k.setRequestHeader(d, h.headers[d]);
                if (h.beforeSend && (!1 === h.beforeSend.call(g, k, h) || c)) return k.abort();
                if (C = "abort", y.add(h.complete), k.done(h.success), k.fail(h.error), o = _t(Wt, h, n, k)) {
                    if (k.readyState = 1, f && v.trigger("ajaxSend", [k, h]), c) return k;
                    h.async && 0 < h.timeout && (u = e.setTimeout(function () {
                        k.abort("timeout")
                    }, h.timeout));
                    try {
                        c = !1, o.send(x, E)
                    } catch (t) {
                        if (c) throw t;
                        E(-1, t)
                    }
                } else E(-1, "No Transport");

                function E(t, n, r, s) {
                    var l, d, p, x, T, C = n;
                    c || (c = !0, u && e.clearTimeout(u), o = void 0, a = s || "", k.readyState = 0 < t ? 4 : 0, l = 200 <= t && t < 300 || 304 === t, r && (x = function (e, t, n) {
                        for (var r, o, i, a, s = e.contents, u = e.dataTypes; "*" === u[0];) u.shift(), void 0 === r && (r = e.mimeType || t.getResponseHeader("Content-Type"));
                        if (r) for (o in s) if (s[o] && s[o].test(r)) {
                            u.unshift(o);
                            break
                        }
                        if (u[0] in n) i = u[0]; else {
                            for (o in n) {
                                if (!u[0] || e.converters[o + " " + u[0]]) {
                                    i = o;
                                    break
                                }
                                a || (a = o)
                            }
                            i = i || a
                        }
                        if (i) return i !== u[0] && u.unshift(i), n[i]
                    }(h, k, r)), x = function (e, t, n, r) {
                        var o, i, a, s, u, l = {}, c = e.dataTypes.slice();
                        if (c[1]) for (a in e.converters) l[a.toLowerCase()] = e.converters[a];
                        for (i = c.shift(); i;) if (e.responseFields[i] && (n[e.responseFields[i]] = t), !u && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)), u = i, i = c.shift()) if ("*" === i) i = u; else if ("*" !== u && u !== i) {
                            if (!(a = l[u + " " + i] || l["* " + i])) for (o in l) if ((s = o.split(" "))[1] === i && (a = l[u + " " + s[0]] || l["* " + s[0]])) {
                                !0 === a ? a = l[o] : !0 !== l[o] && (i = s[0], c.unshift(s[1]));
                                break
                            }
                            if (!0 !== a) if (a && e.throws) t = a(t); else try {
                                t = a(t)
                            } catch (e) {
                                return {state: "parsererror", error: a ? e : "No conversion from " + u + " to " + i}
                            }
                        }
                        return {state: "success", data: t}
                    }(h, x, k, l), l ? (h.ifModified && ((T = k.getResponseHeader("Last-Modified")) && (w.lastModified[i] = T), (T = k.getResponseHeader("etag")) && (w.etag[i] = T)), 204 === t || "HEAD" === h.type ? C = "nocontent" : 304 === t ? C = "notmodified" : (C = x.state, d = x.data, l = !(p = x.error))) : (p = C, !t && C || (C = "error", t < 0 && (t = 0))), k.status = t, k.statusText = (n || C) + "", l ? m.resolveWith(g, [d, C, k]) : m.rejectWith(g, [k, C, p]), k.statusCode(b), b = void 0, f && v.trigger(l ? "ajaxSuccess" : "ajaxError", [k, h, l ? d : p]), y.fireWith(g, [k, C]), f && (v.trigger("ajaxComplete", [k, h]), --w.active || w.event.trigger("ajaxStop")))
                }

                return k
            },
            getJSON: function (e, t, n) {
                return w.get(e, t, n, "json")
            },
            getScript: function (e, t) {
                return w.get(e, void 0, t, "script")
            }
        }), w.each(["get", "post"], function (e, t) {
            w[t] = function (e, n, r, o) {
                return g(n) && (o = o || r, r = n, n = void 0), w.ajax(w.extend({
                    url: e,
                    type: t,
                    dataType: o,
                    data: n,
                    success: r
                }, w.isPlainObject(e) && e))
            }
        }), w._evalUrl = function (e, t) {
            return w.ajax({
                url: e,
                type: "GET",
                dataType: "script",
                cache: !0,
                async: !1,
                global: !1,
                converters: {
                    "text script": function () {
                    }
                },
                dataFilter: function (e) {
                    w.globalEval(e, t)
                }
            })
        }, w.fn.extend({
            wrapAll: function (e) {
                var t;
                return this[0] && (g(e) && (e = e.call(this[0])), t = w(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map(function () {
                    for (var e = this; e.firstElementChild;) e = e.firstElementChild;
                    return e
                }).append(this)), this
            }, wrapInner: function (e) {
                return g(e) ? this.each(function (t) {
                    w(this).wrapInner(e.call(this, t))
                }) : this.each(function () {
                    var t = w(this), n = t.contents();
                    n.length ? n.wrapAll(e) : t.append(e)
                })
            }, wrap: function (e) {
                var t = g(e);
                return this.each(function (n) {
                    w(this).wrapAll(t ? e.call(this, n) : e)
                })
            }, unwrap: function (e) {
                return this.parent(e).not("body").each(function () {
                    w(this).replaceWith(this.childNodes)
                }), this
            }
        }), w.expr.pseudos.hidden = function (e) {
            return !w.expr.pseudos.visible(e)
        }, w.expr.pseudos.visible = function (e) {
            return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length)
        }, w.ajaxSettings.xhr = function () {
            try {
                return new e.XMLHttpRequest
            } catch (e) {
            }
        };
        var Ut = {0: 200, 1223: 204}, Xt = w.ajaxSettings.xhr();
        h.cors = !!Xt && "withCredentials" in Xt, h.ajax = Xt = !!Xt, w.ajaxTransport(function (t) {
            var n, r;
            if (h.cors || Xt && !t.crossDomain) return {
                send: function (o, i) {
                    var a, s = t.xhr();
                    if (s.open(t.type, t.url, t.async, t.username, t.password), t.xhrFields) for (a in t.xhrFields) s[a] = t.xhrFields[a];
                    for (a in t.mimeType && s.overrideMimeType && s.overrideMimeType(t.mimeType), t.crossDomain || o["X-Requested-With"] || (o["X-Requested-With"] = "XMLHttpRequest"), o) s.setRequestHeader(a, o[a]);
                    n = function (e) {
                        return function () {
                            n && (n = r = s.onload = s.onerror = s.onabort = s.ontimeout = s.onreadystatechange = null, "abort" === e ? s.abort() : "error" === e ? "number" != typeof s.status ? i(0, "error") : i(s.status, s.statusText) : i(Ut[s.status] || s.status, s.statusText, "text" !== (s.responseType || "text") || "string" != typeof s.responseText ? {binary: s.response} : {text: s.responseText}, s.getAllResponseHeaders()))
                        }
                    }, s.onload = n(), r = s.onerror = s.ontimeout = n("error"), void 0 !== s.onabort ? s.onabort = r : s.onreadystatechange = function () {
                        4 === s.readyState && e.setTimeout(function () {
                            n && r()
                        })
                    }, n = n("abort");
                    try {
                        s.send(t.hasContent && t.data || null)
                    } catch (o) {
                        if (n) throw o
                    }
                }, abort: function () {
                    n && n()
                }
            }
        }), w.ajaxPrefilter(function (e) {
            e.crossDomain && (e.contents.script = !1)
        }), w.ajaxSetup({
            accepts: {script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},
            contents: {script: /\b(?:java|ecma)script\b/},
            converters: {
                "text script": function (e) {
                    return w.globalEval(e), e
                }
            }
        }), w.ajaxPrefilter("script", function (e) {
            void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET")
        }), w.ajaxTransport("script", function (e) {
            var t, n;
            if (e.crossDomain || e.scriptAttrs) return {
                send: function (o, i) {
                    t = w("<script>").attr(e.scriptAttrs || {}).prop({
                        charset: e.scriptCharset,
                        src: e.url
                    }).on("load error", n = function (e) {
                        t.remove(), n = null, e && i("error" === e.type ? 404 : 200, e.type)
                    }), r.head.appendChild(t[0])
                }, abort: function () {
                    n && n()
                }
            }
        });
        var Vt, Gt = [], Yt = /(=)\?(?=&|$)|\?\?/;
        w.ajaxSetup({
            jsonp: "callback", jsonpCallback: function () {
                var e = Gt.pop() || w.expando + "_" + Et++;
                return this[e] = !0, e
            }
        }), w.ajaxPrefilter("json jsonp", function (t, n, r) {
            var o, i, a,
                s = !1 !== t.jsonp && (Yt.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && Yt.test(t.data) && "data");
            if (s || "jsonp" === t.dataTypes[0]) return o = t.jsonpCallback = g(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, s ? t[s] = t[s].replace(Yt, "$1" + o) : !1 !== t.jsonp && (t.url += (St.test(t.url) ? "&" : "?") + t.jsonp + "=" + o), t.converters["script json"] = function () {
                return a || w.error(o + " was not called"), a[0]
            }, t.dataTypes[0] = "json", i = e[o], e[o] = function () {
                a = arguments
            }, r.always(function () {
                void 0 === i ? w(e).removeProp(o) : e[o] = i, t[o] && (t.jsonpCallback = n.jsonpCallback, Gt.push(o)), a && g(i) && i(a[0]), a = i = void 0
            }), "script"
        }), h.createHTMLDocument = ((Vt = r.implementation.createHTMLDocument("").body).innerHTML = "<form></form><form></form>", 2 === Vt.childNodes.length), w.parseHTML = function (e, t, n) {
            return "string" != typeof e ? [] : ("boolean" == typeof t && (n = t, t = !1), t || (h.createHTMLDocument ? ((o = (t = r.implementation.createHTMLDocument("")).createElement("base")).href = r.location.href, t.head.appendChild(o)) : t = r), a = !n && [], (i = D.exec(e)) ? [t.createElement(i[1])] : (i = we([e], t, a), a && a.length && w(a).remove(), w.merge([], i.childNodes)));
            var o, i, a
        }, w.fn.load = function (e, t, n) {
            var r, o, i, a = this, s = e.indexOf(" ");
            return -1 < s && (r = yt(e.slice(s)), e = e.slice(0, s)), g(t) ? (n = t, t = void 0) : t && "object" == typeof t && (o = "POST"), 0 < a.length && w.ajax({
                url: e,
                type: o || "GET",
                dataType: "html",
                data: t
            }).done(function (e) {
                i = arguments, a.html(r ? w("<div>").append(w.parseHTML(e)).find(r) : e)
            }).always(n && function (e, t) {
                a.each(function () {
                    n.apply(this, i || [e.responseText, t, e])
                })
            }), this
        }, w.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (e, t) {
            w.fn[t] = function (e) {
                return this.on(t, e)
            }
        }), w.expr.pseudos.animated = function (e) {
            return w.grep(w.timers, function (t) {
                return e === t.elem
            }).length
        }, w.offset = {
            setOffset: function (e, t, n) {
                var r, o, i, a, s, u, l = w.css(e, "position"), c = w(e), f = {};
                "static" === l && (e.style.position = "relative"), s = c.offset(), i = w.css(e, "top"), u = w.css(e, "left"), ("absolute" === l || "fixed" === l) && -1 < (i + u).indexOf("auto") ? (a = (r = c.position()).top, o = r.left) : (a = parseFloat(i) || 0, o = parseFloat(u) || 0), g(t) && (t = t.call(e, n, w.extend({}, s))), null != t.top && (f.top = t.top - s.top + a), null != t.left && (f.left = t.left - s.left + o), "using" in t ? t.using.call(e, f) : c.css(f)
            }
        }, w.fn.extend({
            offset: function (e) {
                if (arguments.length) return void 0 === e ? this : this.each(function (t) {
                    w.offset.setOffset(this, e, t)
                });
                var t, n, r = this[0];
                return r ? r.getClientRects().length ? (t = r.getBoundingClientRect(), n = r.ownerDocument.defaultView, {
                    top: t.top + n.pageYOffset,
                    left: t.left + n.pageXOffset
                }) : {top: 0, left: 0} : void 0
            }, position: function () {
                if (this[0]) {
                    var e, t, n, r = this[0], o = {top: 0, left: 0};
                    if ("fixed" === w.css(r, "position")) t = r.getBoundingClientRect(); else {
                        for (t = this.offset(), n = r.ownerDocument, e = r.offsetParent || n.documentElement; e && (e === n.body || e === n.documentElement) && "static" === w.css(e, "position");) e = e.parentNode;
                        e && e !== r && 1 === e.nodeType && ((o = w(e).offset()).top += w.css(e, "borderTopWidth", !0), o.left += w.css(e, "borderLeftWidth", !0))
                    }
                    return {
                        top: t.top - o.top - w.css(r, "marginTop", !0),
                        left: t.left - o.left - w.css(r, "marginLeft", !0)
                    }
                }
            }, offsetParent: function () {
                return this.map(function () {
                    for (var e = this.offsetParent; e && "static" === w.css(e, "position");) e = e.offsetParent;
                    return e || oe
                })
            }
        }), w.each({scrollLeft: "pageXOffset", scrollTop: "pageYOffset"}, function (e, t) {
            var n = "pageYOffset" === t;
            w.fn[e] = function (r) {
                return _(this, function (e, r, o) {
                    var i;
                    if (v(e) ? i = e : 9 === e.nodeType && (i = e.defaultView), void 0 === o) return i ? i[t] : e[r];
                    i ? i.scrollTo(n ? i.pageXOffset : o, n ? o : i.pageYOffset) : e[r] = o
                }, e, r, arguments.length)
            }
        }), w.each(["top", "left"], function (e, t) {
            w.cssHooks[t] = ze(h.pixelPosition, function (e, n) {
                if (n) return n = _e(e, t), $e.test(n) ? w(e).position()[t] + "px" : n
            })
        }), w.each({Height: "height", Width: "width"}, function (e, t) {
            w.each({padding: "inner" + e, content: t, "": "outer" + e}, function (n, r) {
                w.fn[r] = function (o, i) {
                    var a = arguments.length && (n || "boolean" != typeof o),
                        s = n || (!0 === o || !0 === i ? "margin" : "border");
                    return _(this, function (t, n, o) {
                        var i;
                        return v(t) ? 0 === r.indexOf("outer") ? t["inner" + e] : t.document.documentElement["client" + e] : 9 === t.nodeType ? (i = t.documentElement, Math.max(t.body["scroll" + e], i["scroll" + e], t.body["offset" + e], i["offset" + e], i["client" + e])) : void 0 === o ? w.css(t, n, s) : w.style(t, n, o, s)
                    }, t, a ? o : void 0, a)
                }
            })
        }), w.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function (e, t) {
            w.fn[t] = function (e, n) {
                return 0 < arguments.length ? this.on(t, null, e, n) : this.trigger(t)
            }
        }), w.fn.extend({
            hover: function (e, t) {
                return this.mouseenter(e).mouseleave(t || e)
            }
        }), w.fn.extend({
            bind: function (e, t, n) {
                return this.on(e, null, t, n)
            }, unbind: function (e, t) {
                return this.off(e, null, t)
            }, delegate: function (e, t, n, r) {
                return this.on(t, e, n, r)
            }, undelegate: function (e, t, n) {
                return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n)
            }
        }), w.proxy = function (e, t) {
            var n, r, o;
            if ("string" == typeof t && (n = e[t], t = e, e = n), g(e)) return r = i.call(arguments, 2), (o = function () {
                return e.apply(t || this, r.concat(i.call(arguments)))
            }).guid = e.guid = e.guid || w.guid++, o
        }, w.holdReady = function (e) {
            e ? w.readyWait++ : w.ready(!0)
        }, w.isArray = Array.isArray, w.parseJSON = JSON.parse, w.nodeName = A, w.isFunction = g, w.isWindow = v, w.camelCase = V, w.type = b, w.now = Date.now, w.isNumeric = function (e) {
            var t = w.type(e);
            return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e))
        }, "function" == typeof define && define.amd && define("jquery", [], function () {
            return w
        });
        var Qt = e.jQuery, Jt = e.$;
        return w.noConflict = function (t) {
            return e.$ === w && (e.$ = Jt), t && e.jQuery === w && (e.jQuery = Qt), w
        }, t || (e.jQuery = e.$ = w), w
    }), function () {
        var e, t, n, r, o, i, a, s, u, l;
        t = window.device, e = {}, window.device = e, r = window.document.documentElement, l = window.navigator.userAgent.toLowerCase(), e.ios = function () {
            return e.iphone() || e.ipod() || e.ipad()
        }, e.iphone = function () {
            return !e.windows() && o("iphone")
        }, e.ipod = function () {
            return o("ipod")
        }, e.ipad = function () {
            return o("ipad")
        }, e.android = function () {
            return !e.windows() && o("android")
        }, e.androidPhone = function () {
            return e.android() && o("mobile")
        }, e.androidTablet = function () {
            return e.android() && !o("mobile")
        }, e.blackberry = function () {
            return o("blackberry") || o("bb10") || o("rim")
        }, e.blackberryPhone = function () {
            return e.blackberry() && !o("tablet")
        }, e.blackberryTablet = function () {
            return e.blackberry() && o("tablet")
        }, e.windows = function () {
            return o("windows")
        }, e.windowsPhone = function () {
            return e.windows() && o("phone")
        }, e.windowsTablet = function () {
            return e.windows() && o("touch") && !e.windowsPhone()
        }, e.fxos = function () {
            return (o("(mobile;") || o("(tablet;")) && o("; rv:")
        }, e.fxosPhone = function () {
            return e.fxos() && o("mobile")
        }, e.fxosTablet = function () {
            return e.fxos() && o("tablet")
        }, e.meego = function () {
            return o("meego")
        }, e.cordova = function () {
            return window.cordova && "file:" === location.protocol
        }, e.nodeWebkit = function () {
            return "object" == typeof window.process
        }, e.mobile = function () {
            return e.androidPhone() || e.iphone() || e.ipod() || e.windowsPhone() || e.blackberryPhone() || e.fxosPhone() || e.meego()
        }, e.tablet = function () {
            return e.ipad() || e.androidTablet() || e.blackberryTablet() || e.windowsTablet() || e.fxosTablet()
        }, e.desktop = function () {
            return !e.tablet() && !e.mobile()
        }, e.television = function () {
            var e,
                t = ["googletv", "viera", "smarttv", "internet.tv", "netcast", "nettv", "appletv", "boxee", "kylo", "roku", "dlnadoc", "roku", "pov_tv", "hbbtv", "ce-html"];
            for (e = 0; e < t.length;) {
                if (o(t[e])) return !0;
                e++
            }
            return !1
        }, e.portrait = function () {
            return window.innerHeight / window.innerWidth > 1
        }, e.landscape = function () {
            return window.innerHeight / window.innerWidth < 1
        }, e.noConflict = function () {
            return window.device = t, this
        }, o = function (e) {
            return -1 !== l.indexOf(e)
        }, a = function (e) {
            var t;
            return t = new RegExp(e, "i"), r.className.match(t)
        }, n = function (e) {
            var t = null;
            a(e) || (t = r.className.replace(/^\s+|\s+$/g, ""), r.className = t + " " + e)
        }, u = function (e) {
            a(e) && (r.className = r.className.replace(" " + e, ""))
        }, e.ios() ? e.ipad() ? n("ios ipad tablet") : e.iphone() ? n("ios iphone mobile") : e.ipod() && n("ios ipod mobile") : e.android() ? e.androidTablet() ? n("android tablet") : n("android mobile") : e.blackberry() ? e.blackberryTablet() ? n("blackberry tablet") : n("blackberry mobile") : e.windows() ? e.windowsTablet() ? n("windows tablet") : e.windowsPhone() ? n("windows mobile") : n("desktop") : e.fxos() ? e.fxosTablet() ? n("fxos tablet") : n("fxos mobile") : e.meego() ? n("meego mobile") : e.nodeWebkit() ? n("node-webkit") : e.television() ? n("television") : e.desktop() && n("desktop"), e.cordova() && n("cordova"), i = function () {
            e.landscape() ? (u("portrait"), n("landscape")) : (u("landscape"), n("portrait"))
        }, s = Object.prototype.hasOwnProperty.call(window, "onorientationchange") ? "orientationchange" : "resize", window.addEventListener ? window.addEventListener(s, i, !1) : window.attachEvent ? window.attachEvent(s, i) : window[s] = i, i(), "function" == typeof define && "object" == typeof define.amd && define.amd ? define(function () {
            return e
        }) : "undefined" != typeof module && module.exports ? module.exports = e : window.device = e
    }.call(this);</script>
    <script src="../aff.essaypro.money/affiliate.js" class="script--head" id="amazonScript" async=""></script>
    <script class="script--head">var innerDirectory = {
        services: [{value: 1, title: "Writing"}, {value: 2, title: "Rewriting"}, {
            value: 3,
            title: "Editing"
        }, {value: 4, title: "Proofreading"}],
        types: [{value: 1, title: "Essay (any type)", type_group_title: "Type Of Paperwork"}, {
            value: 2,
            title: "Admission Essay",
            type_group_title: "Type Of Paperwork"
        }, {value: 3, title: "Annotated Bibliography", type_group_title: "Type Of Paperwork"}, {
            value: 5,
            title: "Article Review",
            type_group_title: "Type Of Paperwork"
        }, {value: 6, title: "Book / Movie Review", type_group_title: "Type Of Paperwork"}, {
            value: 7,
            title: "Business Plan",
            type_group_title: "Type Of Paperwork"
        }, {value: 8, title: "Case Study", type_group_title: "Type Of Paperwork"}, {
            value: 10,
            title: "Creative Writing",
            type_group_title: "Type Of Paperwork"
        }, {value: 11, title: "Critical Thinking / Review", type_group_title: "Type Of Paperwork"}, {
            value: 19,
            title: "Literature Review",
            type_group_title: "Type Of Paperwork"
        }, {value: 12, title: "Presentation or Speech", type_group_title: "Type Of Paperwork"}, {
            value: 20,
            title: "Reflective Writing",
            type_group_title: "Type Of Paperwork"
        }, {value: 21, title: "Report", type_group_title: "Type Of Paperwork"}, {
            value: 13,
            title: "Research Paper",
            type_group_title: "Type Of Paperwork"
        }, {value: 14, title: "Research Proposal", type_group_title: "Type Of Paperwork"}, {
            value: 15,
            title: "Term Paper",
            type_group_title: "Type Of Paperwork"
        }, {value: 16, title: "Thesis / Dissertation", type_group_title: "Type Of Paperwork"}, {
            value: 17,
            title: "Other",
            type_group_title: "Type Of Paperwork"
        }, {
            value: 22,
            title: "Homework Assignment (Any Type)",
            type_group_title: "Coursework/Homework Help"
        }, {value: 23, title: "Biology Assignment", type_group_title: "Coursework/Homework Help"}, {
            value: 24,
            title: "Chemistry Assignment",
            type_group_title: "Coursework/Homework Help"
        }, {value: 25, title: "Engineering Assignment", type_group_title: "Coursework/Homework Help"}, {
            value: 26,
            title: "Geography Assignment",
            type_group_title: "Coursework/Homework Help"
        }, {value: 27, title: "Math Assignment", type_group_title: "Coursework/Homework Help"}, {
            value: 28,
            title: "Physics Assignment",
            type_group_title: "Coursework/Homework Help"
        }, {value: 29, title: "Statistic Assignment", type_group_title: "Coursework/Homework Help"}, {
            value: 9,
            title: "Other Assignment",
            type_group_title: "Coursework/Homework Help"
        }, {value: 18, title: "Multiple choice questions", type_group_title: "Questions & Problems"}, {
            value: 31,
            title: "Short Answer Questions",
            type_group_title: "Questions & Problems"
        }, {value: 30, title: "Word Problems", type_group_title: "Questions & Problems"}],
        types_group: [{value: 1, title: "Type Of Paperwork"}, {value: 2, title: "Coursework/Homework Help"}, {
            value: 3,
            title: "Questions & Problems"
        }]
    };</script>
    <style class="style--head">.async-hide {
        opacity: 0 !important
    }</style>
    <script class="script--head">!function (e, n, t, a, c, s, d, i, m) {
        n.className += " " + t, s.start = 1 * new Date, s.end = d = function () {
            n.className = n.className.replace(RegExp(" ?" + t), "")
        }, (e[a] = e[a] || []).hide = s, setTimeout(function () {
            d(), s.end = null
        }, 4e3), s.timeout = 4e3
    }(window, document.documentElement, "async-hide", "dataLayer", 0, {"GTM-N8WHG9B": !0});</script>
    <script type="application/ld+json" id="priority" class="script--head">{
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "EssayPro.com",
        "url": "https://essaypro.com",
        "@id": "https://essaypro.com",
        "logo": "https://essaypro.com/assets/header/logo_small__110x30__@1x.png?v=qqqq",
        "description": "Professional writing service that provides first-class academic help on any subject or difficulty. Sign up now and get an instant help.",
        "sameAs": [
            "https://www.facebook.com/essayprocom",
            "https://twitter.com/essayprocom",
            "https://www.youtube.com/channel/UCozQuQBYUISvnsyQ3sydO3w",
            "https://plus.google.com/u/0/+Essayprocom"
        ],
        "aggregateRating": {
            "@type": "AggregateRating",
            "bestRating": "5",
            "worstRating": "0",
            "ratingValue": "4.9",
            "reviewCount": "113263"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "54.9711856",
            "longitude": "-1.5983326"
        },
        "image": [
            "https://essaypro.com/shared/images/icons/favicon-32x32.png?v=qqqq",
            "shared/images/icons/favicon-194x1947ed5.png?v=qqqq",
            "shared/images/icons/favicon-96x967ed5.png?v=qqqq",
            "shared/images/icons/android-chrome-192x1927ed5.png?v=qqqq",
            "shared/images/icons/favicon-16x167ed5.png?v=qqqq"
        ],
        "telephone": "+1-938-777-7752",
        "priceRange": "11-2403USD",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "8 The Green Suite #4982",
            "addressLocality": "Dover",
            "postalCode": "19901",
            "addressCountry": "US"
        }

    }



    </script>