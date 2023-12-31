/*!
 * superWheel v1.0
 * https://22codes.com/
 *
 * Released under Codecanyon Standard license
 * https://codecanyon.net/licenses/standard
 *
 */
! function(e) {
	"use strict";
	"function" == typeof define && define.amd ? define(["jquery"], e) : "undefined" != typeof exports ? module.exports = e(require("jquery")) : e(jQuery)
}(function(C) {
	"use strict";
	var n, c = window.SuperWheel || {};
	n = 0, (c = function(e, t) {
		var r, o = this;
		o.defaults = {
			slices: [{
				name: "Win",
				message: "You win",
				value: "win"
			}, {
				name: "Lose",
				message: "You lose",
				value: "lose"
			}],
			slice: {
				background: "#333",
				selected: {
					background: "#ddd",
					color: "#333"
				}
			},
			text: {
				type: "text",
				color: "#fefefe",
				size: 16,
				offset: 10,
				letterSpacing: 0,
				orientation: "v",
				arc: !1
			},
			line: {
				width: 6,
				color: "#d6d6d6"
			},
			outer: {
				width: 12,
				color: "#d6d6d6"
			},
			inner: {
				width: 12,
				color: "#d6d6d6"
			},
			center: {
				width: 30,
				background: "#FFFFFF00",
				rotate: !0,
				class: "",
				image: {
					url: "",
					width: 45
				},
				html: {
					template: "",
					width: 45
				}
			},
			marker: {
				animate: !0,
				background: "#e74c3c"
			},
			width: 500,
			easing: "superWheel",
			duration: 8e3,
			selector: "value",
			type: "rotate",
			rotates: 8,
			frame: 6
		}, r = C(e).data("superWheel") || {}, o.o = C.extend({}, o.defaults, t, r), "object" != typeof o.o.text ? o.o.text = o.defaults.text : o.o.text = C.extend({}, o.defaults.text, o.o.text), "object" != typeof o.o.slice ? o.o.slice = o.defaults.slice : o.o.slice = C.extend({}, o.defaults.slice, o.o.slice), "object" != typeof o.o.slice.selected ? o.o.slice.selected = o.defaults.slice.selected : o.o.slice.selected = C.extend({}, o.defaults.slice.selected, o.o.slice.selected), "object" != typeof o.o.line ? o.o.line = o.defaults.line : o.o.line = C.extend({}, o.defaults.line, o.o.line), "object" != typeof o.o.outer ? o.o.outer = o.defaults.outer : o.o.outer = C.extend({}, o.defaults.outer, o.o.outer), "object" != typeof o.o.inner ? o.o.inner = o.defaults.inner : o.o.inner = C.extend({}, o.defaults.inner, o.o.inner), "object" != typeof o.o.center ? o.o.center = o.defaults.center : o.o.center = C.extend({}, o.defaults.center, o.o.center), "object" != typeof o.o.center.image && (o.o.center.image = o.defaults.center.image), "object" != typeof o.o.center.html && (o.o.center.html = o.defaults.center.html), void 0 !== o.o.center.html.template && !o.o.center.html.template || void 0 === o.o.center.html.tmpl || (o.o.center.html.template = o.o.center.html.tmpl), void 0 !== o.o.center.image.url && !o.o.center.image.url || void 0 === o.o.center.image.src || (o.o.center.image.url = o.defaults.center.image.src), "object" != typeof o.o.marker ? o.o.marker = o.defaults.marker : o.o.marker = C.extend({}, o.defaults.marker, o.o.marker), C.each(o.o.slices, function(e, t) {
			var r = t;
			void 0 === r.color && (r.color = o.o.text.color), void 0 === r.background && (o.o.slice.background ? r.background = o.o.slice.background : r.background = o.randomColor(360 / o.o.slices.length * e)), o.o.slices[e] = r
		}), void 0 !== o.o.center.image.url && !o.o.center.image.url || void 0 === o.o.center.image.src || (o.o.center.image.url = o.defaults.center.image.src), void 0 !== o.o.center.image.width && (o.o.center.image.width = Math.abs(o.o.center.image.width)), o.o.width = Math.abs(o.o.width), o.o.center.width = Math.abs(o.o.center.width), o.o.outer.width = Math.abs(o.o.outer.width / 2), o.o.inner.width = Math.abs(o.o.inner.width / 2), o.o.line.width = Math.abs(o.o.line.width / 2), o.initials = {
			spinner: !1,
			now: 0,
			spinning: !1,
			slice: {
				id: null,
				results: null
			},
			currentSliceData: {
				id: null,
				results: null
			},
			winner: !1,
			spinCount: 0,
			counter: 0,
			currentSlice: 0,
			currentStep: 0,
			lastStep: 0,
			slicePercent: 0,
			circlePercent: 0,
			rotates: parseInt(o.o.rotates, 10),
			$element: C(e),
			slices: o.o.slices,
			width: 400,
			cache: C(e).data("superWheelData") ? C(e).data("superWheelData").cache : []
		}, C.extend(o, o.initials), o.half = 100, C.extend(C.easing, {
			superWheel: function(e, t, r, o, n) {
				return -o * ((t = t / n - 1) * t * t * t - 1) + r
			}
		}), C.extend(C.easing, {
			easeOutQuad: function(e, t, r, o, n) {
				return -o * (t /= n) * (t - 2) + r
			}
		}), o.instanceUid = C(e).data("superWheelData") ? C(e).data("superWheelData").instanceUid : n++, C(e).data("superWheelData", o), o.init()
	}).prototype.init = function() {
		var f = this;
		f.$element.addClass("superWheel _" + f.instanceUid).html(""), f.$element.html("");
		var m = 360 / f.totalSlices(),
			g = 0,
			w = 0,
			e = C("<div/>").addClass("sWheel-wrapper").appendTo(f.$element),
			t = C("<div/>").addClass("sWheel-inner").appendTo(e),
			r = C("<div/>").addClass("sWheel").prependTo(t),
			o = C("<div/>").addClass("sWheel-bg-layer").appendTo(r),
			n = C(f.SVG("svg", {
				version: "1.1",
				xmlns: "http://www.w3.org/2000/svg",
				"xmlns:xlink": "http://www.w3.org/1999/xlink",
				x: "0px",
				y: "0px",
				viewBox: "0 0 200 200",
				"xml:space": "preserve",
				style: "enable-background:new 0 0 200 200;"
			})),
			a = C('<defs><clipPath id="cut-off-line"></circle></clipPath></defs>'),
			i = f.annularSector({
				centerX: f.half,
				centerY: f.half,
				startDegrees: 0,
				endDegrees: 359.99,
				innerRadius: parseInt(f.o.center.width, 10),
				outerRadius: f.half - (1 < parseInt(f.o.outer.width, 10) ? 1 : 0)
			});
		if (a.find("clipPath").append(f.SVG("path", {
				"stroke-width": 0,
				fill: "#ccc",
				d: i
			})).closest("defs").appendTo(n), "v" !== f.o.text.orientation && "vertical" !== f.o.text.orientation && ("icon" !== f.o.text.type && "image" !== f.o.text.type || "h" !== f.o.text.orientation && "horizontal" !== f.o.text.orientation)) var v = C('<g class="sWheel-txt"/>'),
			x = C("<defs/>");
		else {
			var s = C("<div/>"),
				y = C("<div/>");
			s.addClass("sWheel-txt-wrap"), s.appendTo(r), y.addClass("sWheel-txt"), y.css({
				"-webkit-transform": "rotate(" + (-360 / f.totalSlices() / 2 + f.getDegree()) + "deg)",
				"-moz-transform": "rotate(" + (-360 / f.totalSlices() / 2 + f.getDegree()) + "deg)",
				"-ms-transform": "rotate(" + (-360 / f.totalSlices() / 2 + f.getDegree()) + "deg)",
				"-o-transform": "rotate(" + (-360 / f.totalSlices() / 2 + f.getDegree()) + "deg)",
				transform: "rotate(" + (-360 / f.totalSlices() / 2 + f.getDegree()) + "deg)"
			}), y.appendTo(s)
		}
		var c = C("<div/>");
		if (c.addClass("sWheel-center"), c.addClass(f.o.center.class), c.appendTo(!0 === f.o.center.rotate || 1 === f.o.center.rotate || "true" === f.o.center.rotate ? r : t), "string" == typeof f.o.center.image.url && "" !== C.trim(f.o.center.image.url)) {
			var l = C("<img />");
			parseInt(f.o.center.image.width, 10) || (f.o.center.image.width = parseInt(f.o.center.width, 10)), l.css("width", parseInt(f.o.center.image.width, 10) + "%"), l.attr("src", f.o.center.image.url), l.appendTo(c), c.append('<div class="sw-center-empty" style="width:' + parseInt(f.o.center.image.width, 10) + "%; height:" + parseInt(f.o.center.image.width, 10) + '%" />')
		}
		if ("string" == typeof f.o.center.html.template && "" !== C.trim(f.o.center.html.template)) {
			var d = C('<div class="sw-center-html">' + f.o.center.html.template + "</div>");
			parseInt(f.o.center.html.width, 10) || (f.o.center.html.width = parseInt(f.o.center.width, 10)), d.css({
				width: parseInt(f.o.center.html.width, 10) + "%",
				height: parseInt(f.o.center.html.width, 10) + "%"
			}), d.appendTo(c)
		}
		"color" !== C.trim(f.o.type) && C("<div/>").addClass("sWheel-marker").appendTo(e).append('<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 80 115" style="enable-background:new 0 0 80 115;" xml:space="preserve"><g><path fill="' + f.o.marker.background + '" d="M40,0C17.9,0,0,17.7,0,39.4S40,115,40,115s40-53.9,40-75.6S62.1,0,40,0z M40,52.5c-7,0-12.6-5.6-12.6-12.4 S33,27.7,40,27.7s12.6,5.6,12.6,12.4C52.6,46.9,47,52.5,40,52.5z"/><path fill="rgba(0, 0, 0, 0.3)" d="M40,19.2c-11.7,0-21.2,9.3-21.2,20.8S28.3,60.8,40,60.8S61.2,51.5,61.2,40S51.7,19.2,40,19.2z M40,52.5 c-7,0-12.6-5.6-12.6-12.4S33,27.7,40,27.7s12.6,5.6,12.6,12.4C52.6,46.9,47,52.5,40,52.5z"/></g></svg>');
		var S = C("<g/>"),
			b = C("<g/>"),
			k = 360 / f.totalSlices(),
			I = f.half,
			W = f.half,
			M = f.half;
		C.each(f.slices, function(e, t) {
			var r = 360 / f.totalSlices() * e;
			w += m;
			var o = f.annularSector({
				centerX: f.half,
				centerY: f.half,
				startDegrees: g,
				endDegrees: w,
				innerRadius: parseInt(f.o.center.width, 10),
				outerRadius: f.half - (1 < parseInt(f.o.outer.width, 10) ? 1 : 0)
			});
			S.append(f.SVG("path", {
				"stroke-width": 0,
				fill: t.background,
				"data-fill": t.background,
				d: o
			}));
			var n = f.findPoint(W, M, 0 + I, k * e),
				a = f.findPoint(W, M, 0, k * e);
			if (b.append(f.SVG("line", {
					x1: n.x,
					y1: n.y,
					x2: a.x,
					y2: a.y,
					stroke: f.o.line.color,
					"stroke-width": f.o.line.width,
					fill: "none",
					"clip-path": "url(#cut-off-line)"
				})), "v" !== f.o.text.orientation && "vertical" !== f.o.text.orientation && ("icon" !== f.o.text.type && "image" !== f.o.text.type || "h" !== f.o.text.orientation && "horizontal" !== f.o.text.orientation)) {
				var i = C('<text stroke-width="0" data-color="' + t.color + '" fill="' + t.color + '" dy="' + f.toNumber(f.o.text.offset) + '%"><textPath xlink:href="#sw-text-' + e + '" startOffset="50%" style="text-anchor: middle;">' + t.text + "</textPath></text>");
				i.addClass("sWheel-title"), v.css("font-size", parseInt(f.o.text.size / 2, 10)), 0 < parseInt(f.o.text.letterSpacing, 10) && v.css("letter-spacing", parseInt(f.o.text.letterSpacing / 2, 10)), v.append(i);
				var s = /(^.+?)L/.exec(o)[1];
				if (!0 !== f.o.text.arc && "true" !== f.o.text.arc && 1 !== f.o.text.arc) {
					var c = /(^.+?)A/.exec(s),
						l = s.replace(c[0], ""),
						d = /(^.+?),/.exec(l),
						h = l.replace(d[1], 0);
					s = s.replace(l, h)
				}
				x.append(f.SVG("path", {
					"stroke-width": 0,
					fill: "none",
					id: "sw-text-" + e,
					d: s
				}))
			} else {
				var p = C("<div/>");
				0 < f.toNumber(f.o.text.letterSpacing) && y.css("letter-spacing", f.toNumber(f.o.text.letterSpacing)), p.css({
					paddingRight: parseInt(f.o.text.offset, 10) + "%",
					"-webkit-transform": "rotate(" + r + "deg) translate(0px, -50%)",
					"-moz-transform": "rotate(" + r + "deg) translate(0px, -50%)",
					"-ms-transform": "rotate(" + r + "deg) translate(0px, -50%)",
					"-o-transform": "rotate(" + r + "deg) translate(0px, -50%)",
					transform: "rotate(" + r + "deg) translate(0px, -50%)",
					color: t.color
				}), "icon" === f.o.text.type ? (p.html('<i class="' + t.text + '" aria-hidden="true"></i>'), "h" !== f.o.text.orientation && "horizontal" !== f.o.text.orientation || p.find(">i").css({
					"-webkit-transform": "rotate(90deg)",
					"-moz-transform": "rotate(90deg)",
					"-ms-transform": "rotate(90deg)",
					"-o-transform": "rotate(90deg)",
					transform: "rotate(90deg)"
				})) : "image" === f.o.text.type ? (p.html('<img src="' + t.text + '"/>'), "h" !== f.o.text.orientation && "horizontal" !== f.o.text.orientation || p.find(">img").css({
					"-webkit-transform": "rotate(90deg)",
					"-moz-transform": "rotate(90deg)",
					"-ms-transform": "rotate(90deg)",
					"-o-transform": "rotate(90deg)",
					transform: "rotate(90deg)"
				})) : p.html(t.text), p.attr("data-color", t.color), p.addClass("sWheel-title").appendTo(y)
			}
			var u = C("<div/>");
			u.html(t), u.appendTo(p), g += m
		}), S.addClass("sw-slicesGroup").appendTo(n), b.appendTo(n), "v" !== f.o.text.orientation && "vertical" !== f.o.text.orientation && "text" === f.o.text.type && (x.appendTo(n), v.appendTo(n));
		var h = f.SVG("circle", {
			class: "outerLine",
			cx: f.half,
			cy: f.half,
			r: f.half - parseInt(f.o.outer.width, 10) / 2,
			stroke: f.o.outer.color,
			"stroke-width": parseInt(f.o.outer.width, 10),
			"fill-opacity": 0,
			fill: "none"
		});
		C(h).appendTo(n);
		var p = f.SVG("circle", {
			class: "innerLine",
			cx: f.half,
			cy: f.half,
			r: parseInt(f.o.center.width, 10) + (parseInt(f.o.inner.width, 10) ? parseInt(f.o.inner.width, 10) / 2 - 1 : 0),
			stroke: f.o.inner.color,
			"stroke-width": parseInt(f.o.inner.width, 10),
			"fill-opacity": f.o.center.background ? 1 : 0,
			fill: f.o.center.background ? f.o.center.background : "none"
		});
		C(p).appendTo(n), n.appendTo(o), o.html(o.html()), f.$element.css("font-size", parseInt(f.o.text.size, 10)), f.$element.width(parseInt(f.o.width, 10)), f.$element.height(f.$element.width()), f.$element.find(".sWheel-wrapper").width(f.$element.width()), f.$element.find(".sWheel-wrapper").height(f.$element.width()), f.FontScale(), C(window).on("resize." + f.instanceUid, function() {
			f.$element.height(f.$element.width()), f.$element.find(".sWheel-wrapper").width(f.$element.width()), f.$element.find(".sWheel-wrapper").height(f.$element.width()), f.FontScale()
		})
	}, c.prototype.SVG = function(e, t) {
		var r = document.createElementNS("http://www.w3.org/2000/svg", e);
		for (var o in t) r.setAttribute(o, t[o]);
		return r
	}, c.prototype.annularSector = function(e) {
		var t = this.oWithDefaults(e),
			r = [
				[t.cx + t.r2 * Math.cos(t.startRadians), t.cy + t.r2 * Math.sin(t.startRadians)],
				[t.cx + t.r2 * Math.cos(t.closeRadians), t.cy + t.r2 * Math.sin(t.closeRadians)],
				[t.cx + t.r1 * Math.cos(t.closeRadians), t.cy + t.r1 * Math.sin(t.closeRadians)],
				[t.cx + t.r1 * Math.cos(t.startRadians), t.cy + t.r1 * Math.sin(t.startRadians)]
			],
			o = (t.closeRadians - t.startRadians) % (2 * Math.PI) > Math.PI ? 1 : 0,
			n = [];
		return n.push("M" + r[0].join()), n.push("A" + [t.r2, t.r2, 0, o, 1, r[1]].join()), n.push("L" + r[2].join()), n.push("A" + [t.r1, t.r1, 0, o, 0, r[3]].join()), n.push("z"), n.join(" ")
	}, c.prototype.oWithDefaults = function(e) {
		var t = {
				cx: e.centerX || 0,
				cy: e.centerY || 0,
				startRadians: (e.startDegrees || 0) * Math.PI / 180,
				closeRadians: (e.endDegrees || 0) * Math.PI / 180
			},
			r = void 0 !== e.thickness ? e.thickness : 100;
		return void 0 !== e.innerRadius ? t.r1 = e.innerRadius : void 0 !== e.outerRadius ? t.r1 = e.outerRadius - r : t.r1 = 200 - r, void 0 !== e.outerRadius ? t.r2 = e.outerRadius : t.r2 = t.r1 + r, t.r1 < 0 && (t.r1 = 0), t.r2 < 0 && (t.r2 = 0), t
	}, c.prototype.findPoint = function(e, t, r, o) {
		var n = o * Math.PI / 180;
		return {
			x: Math.cos(n) * r + e,
			y: Math.sin(n) * r + t
		}
	}, c.prototype.start = function(e, t) {
		var l = this;
		if (!l.spinning && (void 0 === t && (t = e, e = l.o.selector), l.o.selector = e, void 0 !== t && (l.winner = l.findWinner(t, !1), !1 !== l.winner && (l.slice.id = l.winner, l.spinning = !0, void 0 !== l.slices[l.slice.id])))) {
			l.slice.results = l.slices[l.slice.id], l.slice.length = l.slice.id, void 0 !== l.cache.onStart && C.each(l.cache.onStart, function(e, t) {
				"function" == typeof t && t.call(l.$wheel, l.slice.results, l.spinCount, l.now)
			});
			var r = l.calcSliceSize(l.slice.id),
				o = l.randomInt(r.start, r.end),
				n = 360 * parseInt(l.rotates, 10) + o,
				d = l.numberToArray(l.totalSlices()).reverse(),
				h = !1;
			if (0 !== parseInt(l.o.frame, 10)) {
				var p = C.fx.interval;
				C.fx.interval = parseInt(l.o.frame, 10)
			}
			l.spinner = C({
				deg: l.now
			}).animate({
				deg: n
			}, {
				duration: parseInt(l.o.duration, 10),
				easing: C.trim(l.o.easing),
				step: function(e, t) {
					0 !== parseInt(l.o.frame, 10) && (C.fx.interval = parseInt(l.o.frame, 10)), l.now = e % 360, "color" !== C.trim(l.o.type) && l.$element.find(".sWheel").css({
						"-webkit-transform": "rotate(" + l.now + "deg)",
						"-moz-transform": "rotate(" + l.now + "deg)",
						"-ms-transform": "rotate(" + l.now + "deg)",
						"-o-transform": "rotate(" + l.now + "deg)",
						transform: "rotate(" + l.now + "deg)"
					}), l.currentStep = Math.floor(e / (360 / l.totalSlices())), l.currentSlice = d[l.currentStep % l.totalSlices()];
					var r = l.totalSlices(),
						o = 1600 / r,
						n = 1600 / 360 * l.now / 1600 * 100,
						a = ((l.currentSlice + 1) * o - (1600 - 1600 / 360 * l.now)) / o * 100;
					if (l.slicePercent = a, l.circlePercent = n, void 0 !== l.cache.onProgress && C.each(l.cache.onProgress, function(e, t) {
							"function" == typeof t && t.call(l.$element, l.slicePercent, l.circlePercent)
						}), l.lastStep !== l.currentStep) {
						if (l.lastStep = l.currentStep, (!0 === l.o.marker.animate || 1 === l.o.marker.animate || "true" === l.o.marker.animate) && -1 === C.inArray(C.trim(l.o.easing), ["easeInElastic", "easeInBack", "easeInBounce", "easeOutElastic", "easeOutBack", "easeOutBounce", "easeInOutElastic", "easeInOutBack", "easeInOutBounce"])) {
							var i = parseFloat(l.o.duration) / (l.totalSlices() * l.o.rotates + (l.totalSlices() - l.winner) - l.currentStep) / l.o.rotates,
								s = l.totalSlices() * l.o.rotates - l.currentStep;
							h && h.stop();
							var c = 0;
							h = C({
								deg: 40 < s ? -40 : -10 < -s ? 0 : -s
							}).animate({
								deg: -50
							}, {
								easing: "linear",
								duration: i / 4,
								step: function(e) {
									c = e, C(".sWheel-marker").css({
										"-webkit-transform": "rotate(" + e + "deg)",
										"-moz-transform": "rotate(" + e + "deg)",
										"-ms-transform": "rotate(" + e + "deg)",
										"-o-transform": "rotate(" + e + "deg)",
										transform: "rotate(" + e + "deg)"
									})
								},
								complete: function(e, t, r) {
									h = C({
										deg: c
									}).animate({
										deg: 0
									}, {
										easing: "linear",
										duration: 100,
										step: function(e) {
											C(".sWheel-marker").css({
												"-webkit-transform": "rotate(" + e + "deg)",
												"-moz-transform": "rotate(" + e + "deg)",
												"-ms-transform": "rotate(" + e + "deg)",
												"-o-transform": "rotate(" + e + "deg)",
												transform: "rotate(" + e + "deg)"
											})
										}
									})
								}
							})
						}
						"color" === C.trim(l.o.type) ? (l.$element.find("svg>g.sw-slicesGroup>path").each(function(e) {
							C(this).attr("class", "").attr("fill", C(this).attr("data-fill"))
						}), l.$element.find(".sWheel-txt>.sWheel-title").each(function(e) {
							C(this).attr("class", "sWheel-title"), "v" === l.o.text.orientation || "vertical" === l.o.text.orientation ? C(this).css("color", C(this).attr("data-color")) : C(this).attr("fill", C(this).attr("data-color"))
						}), l.$element.find("svg>g.sw-slicesGroup>path").eq(l.currentSlice).addClass("sw-ccurrent").attr("fill", l.o.slice.selected.background), "v" === l.o.text.orientation || "vertical" === l.o.text.orientation ? l.$element.find(".sWheel-txt>.sWheel-title").eq(l.currentSlice).addClass("sw-ccurrent").css("color", l.o.slice.selected.color) : l.$element.find(".sWheel-txt>.sWheel-title").eq(l.currentSlice).addClass("sw-ccurrent").attr("fill", l.o.slice.selected.color)) : (l.$element.find("svg>g.sw-slicesGroup>path").removeClass("sw-current"), l.$element.find("svg>g.sw-slicesGroup>path").eq(l.currentSlice).addClass("sw-current"), l.$element.find(".sWheel-txt>.sWheel-title").eq(l.currentSlice).addClass("sw-current")), l.currentSliceData = {}, l.currentSliceData.id = l.currentSlice, l.currentSliceData.results = l.slices[l.currentSliceData.id], l.currentSliceData.results.length = l.currentSliceData.id, void 0 !== l.cache.onStep && C.each(l.cache.onStep, function(e, t) {
							"function" == typeof t && t.call(l.$element, l.currentSliceData.results, l.slicePercent, l.circlePercent)
						})
					}
					0 !== parseInt(l.o.frame, 10) && (C.fx.interval = p)
				},
				fail: function(e, t, r) {
					l.spinning = !1, void 0 !== l.cache.onFail && C.each(l.cache.onFail, function(e, t) {
						"function" == typeof t && t.call(l.$element, l.slice.results, l.spinCount, l.now)
					})
				},
				complete: function(e, t, r) {
					l.spinning = !1, void 0 !== l.cache.onComplete && C.each(l.cache.onComplete, function(e, t) {
						"function" == typeof t && t.call(l.$element, l.slice.results, l.spinCount, l.now)
					})
				}
			}), l.counter++, l.spinCount++
		}
	}, c.prototype.totalSlices = function() {
		return this.slices.length
	}, c.prototype.calcSliceSize = function(e) {
		var t = this.degStart(e) - (parseInt(this.o.line.width, 10) + 2),
			r = this.degEnd(e) + (parseInt(this.o.line.width, 10) + 2),
			o = [];
		return o.start = t, o.end = r, o
	}, c.prototype.findWinner = function(r, e) {
		var o = this,
			n = [];
		C.each(o.slices, function(e, t) {
			"object" != typeof t[o.o.selector] && "array" != typeof t[o.o.selector] && void 0 !== t[o.o.selector] && t[o.o.selector] === r && n.push(e)
		});
		var t = Object.keys(n);
		return n[t[t.length * Math.random() << 0]]
	}, c.prototype.getDegree = function(e) {
		return 360 / this.totalSlices()
	}, c.prototype.degStart = function(e) {
		return 360 - this.getDegree() * e
	}, c.prototype.degEnd = function(e) {
		return 360 - (this.getDegree() * e + this.getDegree())
	}, c.prototype.toNumber = function(e) {
		return NaN === Number(e) ? 0 : Number(e)
	}, c.prototype.numberToArray = function(e) {
		var t, r = [];
		for (t = 0; t < e; t++) r[t] = t;
		return r
	}, c.prototype.brightness = function(e) {
		var t, r, o;
		return e.match(/^rgb/) ? (t = (e = (e = e.match(/rgba?\(([^)]+)\)/)[1]).split(/ *, */).map(Number))[0], r = e[1], o = e[2]) : "#" == e[0] && 7 == e.length ? (t = parseInt(e.slice(1, 3), 16), r = parseInt(e.slice(3, 5), 16), o = parseInt(e.slice(5, 7), 16)) : "#" == e[0] && 4 == e.length && (t = parseInt(e[1] + e[1], 16), r = parseInt(e[2] + e[2], 16), o = parseInt(e[3] + e[3], 16)), (299 * t + 587 * r + 114 * o) / 1e3 < 125 ? "#fff" : "#333"
	}, c.prototype.randomInt = function(e, t) {
		return Math.floor(Math.random() * (t - e + 1) + e)
	}, c.prototype.randomColor = function(e) {
		var t, r, o, n, a, i, s, c, l, d, h;
		switch (void 0 === e ? e = ((o = Math.floor(361 * Math.random() + 0) / 360) + o / .618033988749895) % 360 : e /= 360, t = ((r = Math.floor(81 * Math.random() + 20)) - 10) / 100, l = (r /= 100) * (1 - t), d = r * (1 - (c = 6 * e - (s = Math.floor(6 * e))) * t), h = r * (1 - (1 - c) * t), s % 6) {
			case 0:
				n = r, a = h, i = l;
				break;
			case 1:
				n = d, a = r, i = l;
				break;
			case 2:
				n = l, a = r, i = h;
				break;
			case 3:
				n = l, a = d, i = r;
				break;
			case 4:
				n = h, a = l, i = r;
				break;
			case 5:
				n = r, a = l, i = d
		}
		return "#" + ((1 << 24) + ((n = Math.round(255 * n)) << 16) + ((a = Math.round(255 * a)) << 8) + (i = Math.round(255 * i))).toString(16).slice(1)
	}, c.prototype.FontScale = function(e) {
		var t = 1 + 1 * (this.$element.width() - parseInt(this.o.width, 10)) / parseInt(this.o.width, 10);
		4 < t ? t = 4 : t < .1 && (t = .1), this.$element.find(".sWheel-wrapper").css("font-size", 100 * t + "%")
	}, c.prototype.guid = function(e) {
		var t = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ",
			r = "";
		e || (e = 8);
		for (var o = 0; o < e; o++) r += t.charAt(Math.floor(Math.random() * t.length));
		return r
	}, c.prototype.onStart = function(e) {
		void 0 === this.cache.onStart && (this.cache.onStart = []), this.cache.onStart[this.cache.onStart.length] = e
	}, c.prototype.onStep = function(e) {
		void 0 === this.cache.onStep && (this.cache.onStep = []), this.cache.onStep[this.cache.onStep.length] = e
	}, c.prototype.onProgress = function(e) {
		void 0 === this.cache.onProgress && (this.cache.onProgress = []), this.cache.onProgress[this.cache.onProgress.length] = e
	}, c.prototype.onFail = function(e) {
		void 0 === this.cache.onFail && (this.cache.onFail = []), this.cache.onFail[this.cache.onFail.length] = e
	}, c.prototype.onComplete = function(e) {
		void 0 === this.cache.onComplete && (this.cache.onComplete = []), this.cache.onComplete[this.cache.onComplete.length] = e
	}, c.prototype.onFail = function(e) {
		void 0 === this.cache.onFail && (this.cache.onFail = []), this.cache.onFail[this.cache.onFail.length] = e
	}, C.fn.superWheel = function() {
		var e, t, r = this,
			o = arguments[0],
			n = Array.prototype.slice.call(arguments, 1),
			a = Array.prototype.slice.call(arguments, 2),
			i = r.length,
			s = ["destroy", "start", "finish", "option", "onStart", "onStep", "onProgress", "onComplete", "onFail"];
		for (e = 0; e < i; e++)
			if ("object" == typeof o || void 0 === o ? r[e].superWheel = new c(r[e], o) : -1 !== C.inArray(C.trim(o), s) && (t = "option" === C.trim(o) ? r[e].superWheel[o].apply(r[e].superWheel, n, a) : r[e].superWheel[o].apply(r[e].superWheel, n)), void 0 !== t) return t;
		return r
	}
});