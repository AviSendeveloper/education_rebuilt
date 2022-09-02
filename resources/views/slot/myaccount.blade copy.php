<!DOCTYPE html>

<html data-ng-app="SUGApp" lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>My Account</title>

  <script type="text/javascript">
    if (top !== self)
      top.location = self.location;
  </script>
  <script type="text/javascript" src="../cdn-3.convertexperiments.com/js/10022692-10021493.js"></script>


  <script type="text/javascript" src="slot/dist/js/lib/jquery-1.7.2.minf4a1.js?v=1636996767345"></script>
  <script type="text/javascript" src="slot/dist/js/lib/jquery-1.11.1.minf4a1.js?v=1636996767345"></script>

  <script type="text/javascript" src="slot/dist/js/lib/ui-bootstrap-0.11.0.minf4a1.js?v=1636996767345"></script>
  <script type="text/javascript"></script>
  <script type="text/javascript" src="slot/dist/js/lib/sug-globals.minf4a1.js?v=1636996767345"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" href="slot/css/magnific-popup-minf4a1.css?v=1636996767345">
  <link rel="stylesheet" href="slot/css/angular/magnific-ngModal.minf4a1.css?v=1636996767345">
  <link href="slot/js/lib/ngImgCrop/ng-img-cropf4a1.css?v=1636996767345" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="assets1/css/quick.css">
    <link rel="stylesheet" href="assets1/css/quick2.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <style>
    .ffd li.active {
      border: 1px solid #ccc;
      border-bottom: none;
    }

    .content {
      display: none;
      opacity: 0;
      border: 1px solid #ccc;

      height: 100px;

      -webkit-animation: display-none-transition 1s ease;
      animation: display-none-transition 1s ease;
    }

    @keyframes display-none-transition {
      0% {
        display: none;
        opacity: 0;
      }

      1% {
        display: block;
      }

      100% {
        opacity: 1;
      }
    }

    @-webkit-keyframes display-none-transition {
      0% {
        display: none;
        opacity: 0;
      }

      1% {
        display: block;
      }

      100% {
        opacity: 1;
      }
    }

    .content-section .active {
      display: block;
      opacity: 1;
    }

    ul {
      margin-bottom: 10px;
      padding: 0;
    }

    .ffd li {
      list-style: none;
      display: inline-block;
      /* width: 50px; */
      margin-right: -4px;
      text-align: center;
      border-bottom: 1px solid #ccc;
    }

    .tteer {
      /* position: relative; */
      /* display: block; */
      color: #09b2ff;
      padding: 10px 15px;
    }
  </style>



  <style>
    .large-ipad-carousel .carousel-inner .item img {
      width: 100%;
    }

    .promo-image {
      height: auto;
      width: 100%;
    }

    .calHeaderMenu {
      border-top: 1px solid #dddddd;
    }

    .calcelleft {
      border-right: 1px solid #dddddd;
      border-bottom: 1px solid #dddddd;
      border-left: 1px solid #dddddd;
      background-color: #F5F5F5;
    }

    .calcel {
      font-family: Verdana, Arial, Helvetica, sans-serif;
      font-size: 10pt;
      color: #000000;
      border-right: 1px solid #dddddd;
      border-bottom: 1px solid #dddddd;
    }

    .calcelright {
      border-right: 1px solid #dddddd;
      border-bottom: 1px solid #dddddd;
      background-color: #F5F5F5;
    }
  </style>
  <style>
    .tabbf {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
    }

    .tabcontent {
      display: none;
      padding: 6px 12px;
      border: 1px solid #ccc;
      border-top: none;
    }
  </style>
  <link rel="stylesheet" href="slot/dist/css/SUGstyleV3-responsive.minf4a1.css?v=1636996767345">
  <script type="text/javascript">

    if (!jQuery) throw new Error("Bootstrap requires jQuery"); +function (a) { "use strict"; function b() { var a = document.createElement("bootstrap"), b = { WebkitTransition: "webkitTransitionEnd", MozTransition: "transitionend", OTransition: "oTransitionEnd otransitionend", transition: "transitionend" }; for (var c in b) if (void 0 !== a.style[c]) return { end: b[c] } } a.fn.emulateTransitionEnd = function (b) { var c = !1, d = this; a(this).one("webkitTransitionEnd", function () { c = !0 }); var e = function () { c || a(d).trigger("webkitTransitionEnd") }; return setTimeout(e, b), this }, a(function () { a.support.transition = b() }) }(window.jQuery), +function (a) { "use strict"; var b = '[data-dismiss="alert"]', c = function (c) { a(c).on("click", b, this.close) }; c.prototype.close = function (b) { function c() { f.trigger("closed.bs.alert").remove() } var d = a(this), e = d.attr("data-target"); e || (e = d.attr("href"), e = e && e.replace(/.*(?=#[^\s]*$)/, "")); var f = a(e); b && b.preventDefault(), f.length || (f = d.hasClass("alert") ? d : d.parent()), f.trigger(b = a.Event("close.bs.alert")), b.isDefaultPrevented() || (f.removeClass("in"), a.support.transition && f.hasClass("fade") ? f.one(a.support.transition.end, c).emulateTransitionEnd(150) : c()) }; var d = a.fn.alert; a.fn.alert = function (b) { return this.each(function () { var d = a(this), e = d.data("bs.alert"); e || d.data("bs.alert", e = new c(this)), "string" == typeof b && e[b].call(d) }) }, a.fn.alert.Constructor = c, a.fn.alert.noConflict = function () { return a.fn.alert = d, this }, a(document).on("click.bs.alert.data-api", b, c.prototype.close) }(window.jQuery), +function (a) { "use strict"; var b = function (c, d) { this.$element = a(c), this.options = a.extend({}, b.DEFAULTS, d) }; b.DEFAULTS = { loadingText: "loading..." }, b.prototype.setState = function (a) { var b = "disabled", c = this.$element, d = c.is("input") ? "val" : "html", e = c.data(); a += "Text", e.resetText || c.data("resetText", c[d]()), c[d](e[a] || this.options[a]), setTimeout(function () { "loadingText" == a ? c.addClass(b).attr(b, b) : c.removeClass(b).removeAttr(b) }, 0) }, b.prototype.toggle = function () { var a = this.$element.closest('[data-toggle="buttons"]'); if (a.length) { var b = this.$element.find("input").prop("checked", !this.$element.hasClass("active")); "radio" === b.prop("type") && a.find(".active").removeClass("active") } this.$element.toggleClass("active") }; var c = a.fn.button; a.fn.button = function (c) { return this.each(function () { var d = a(this), e = d.data("button"), f = "object" == typeof c && c; e || d.data("bs.button", e = new b(this, f)), "toggle" == c ? e.toggle() : c && e.setState(c) }) }, a.fn.button.Constructor = b, a.fn.button.noConflict = function () { return a.fn.button = c, this }, a(document).on("click.bs.button.data-api", "[data-toggle^=button]", function (b) { var c = a(b.target); c.hasClass("btn") || (c = c.closest(".btn")), c.button("toggle"), b.preventDefault() }) }(window.jQuery), +function (a) { "use strict"; var b = function (b, c) { this.$element = a(b), this.$indicators = this.$element.find(".carousel-indicators"), this.options = c, this.paused = this.sliding = this.interval = this.$active = this.$items = null, "hover" == this.options.pause && this.$element.on("mouseenter", a.proxy(this.pause, this)).on("mouseleave", a.proxy(this.cycle, this)) }; b.DEFAULTS = { interval: 5e3, pause: "hover" }, b.prototype.cycle = function (b) { return b || (this.paused = !1), this.interval && clearInterval(this.interval), this.options.interval && !this.paused && (this.interval = setInterval(a.proxy(this.next, this), this.options.interval)), this }, b.prototype.getActiveIndex = function () { return this.$active = this.$element.find(".item.active"), this.$items = this.$active.parent().children(), this.$items.index(this.$active) }, b.prototype.to = function (b) { var c = this, d = this.getActiveIndex(); return b > this.$items.length - 1 || 0 > b ? void 0 : this.sliding ? this.$element.one("slid", function () { c.to(b) }) : d == b ? this.pause().cycle() : this.slide(b > d ? "next" : "prev", a(this.$items[b])) }, b.prototype.pause = function (b) { return b || (this.paused = !0), this.$element.find(".next, .prev").length && a.support.transition.end && (this.$element.trigger(a.support.transition.end), this.cycle(!0)), this.interval = clearInterval(this.interval), this }, b.prototype.next = function () { return this.sliding ? void 0 : this.slide("next") }, b.prototype.prev = function () { return this.sliding ? void 0 : this.slide("prev") }, b.prototype.slide = function (b, c) { var d = this.$element.find(".item.active"), e = c || d[b](), f = this.interval, g = "next" == b ? "left" : "right", h = "next" == b ? "first" : "last", i = this; this.sliding = !0, f && this.pause(), e = e.length ? e : this.$element.find(".item")[h](); var j = a.Event("slide.bs.carousel", { relatedTarget: e[0], direction: g }); if (!e.hasClass("active")) { if (this.$indicators.length && (this.$indicators.find(".active").removeClass("active"), this.$element.one("slid", function () { var b = a(i.$indicators.children()[i.getActiveIndex()]); b && b.addClass("active") })), a.support.transition && this.$element.hasClass("slide")) { if (this.$element.trigger(j), j.isDefaultPrevented()) return; e.addClass(b), e[0].offsetWidth, d.addClass(g), e.addClass(g), d.one(a.support.transition.end, function () { e.removeClass([b, g].join(" ")).addClass("active"), d.removeClass(["active", g].join(" ")), i.sliding = !1, setTimeout(function () { i.$element.trigger("slid") }, 0) }).emulateTransitionEnd(600) } else { if (this.$element.trigger(j), j.isDefaultPrevented()) return; d.removeClass("active"), e.addClass("active"), this.sliding = !1, this.$element.trigger("slid") } return f && this.cycle(), this } }; var c = a.fn.carousel; a.fn.carousel = function (c) { return this.each(function () { var d = a(this), e = d.data("bs.carousel"), f = a.extend({}, b.DEFAULTS, d.data(), "object" == typeof c && c), g = "string" == typeof c ? c : f.slide; e || d.data("bs.carousel", e = new b(this, f)), "number" == typeof c ? e.to(c) : g ? e[g]() : f.interval && e.pause().cycle() }) }, a.fn.carousel.Constructor = b, a.fn.carousel.noConflict = function () { return a.fn.carousel = c, this }, a(document).on("click.bs.carousel.data-api", "[data-slide], [data-slide-to]", function (b) { var c, d = a(this), e = a(d.attr("data-target") || (c = d.attr("href")) && c.replace(/.*(?=#[^\s]+$)/, "")), f = a.extend({}, e.data(), d.data()), g = d.attr("data-slide-to"); g && (f.interval = !1), e.carousel(f), (g = d.attr("data-slide-to")) && e.data("bs.carousel").to(g), b.preventDefault() }), a(window).on("load", function () { a('[data-ride="carousel"]').each(function () { var b = a(this); b.carousel(b.data()) }) }) }(window.jQuery), +function (a) { "use strict"; var b = function (c, d) { this.$element = a(c), this.options = a.extend({}, b.DEFAULTS, d), this.transitioning = null, this.options.parent && (this.$parent = a(this.options.parent)), this.options.toggle && this.toggle() }; b.DEFAULTS = { toggle: !0 }, b.prototype.dimension = function () { var a = this.$element.hasClass("width"); return a ? "width" : "height" }, b.prototype.show = function () { if (!this.transitioning && !this.$element.hasClass("in")) { var b = a.Event("show.bs.collapse"); if (this.$element.trigger(b), !b.isDefaultPrevented()) { var c = this.$parent && this.$parent.find("> .accordion-group > .in"); if (c && c.length) { var d = c.data("bs.collapse"); if (d && d.transitioning) return; c.collapse("hide"), d || c.data("bs.collapse", null) } var e = this.dimension(); this.$element.removeClass("collapse").addClass("collapsing")[e](0), this.transitioning = 1; var f = function () { this.$element.removeClass("collapsing").addClass("in")[e]("auto"), this.transitioning = 0, this.$element.trigger("shown.bs.collapse") }; if (!a.support.transition) return f.call(this); var g = a.camelCase(["scroll", e].join("-")); this.$element.one(a.support.transition.end, a.proxy(f, this)).emulateTransitionEnd(350)[e](this.$element[0][g]) } } }, b.prototype.hide = function () { if (!this.transitioning && this.$element.hasClass("in")) { var b = a.Event("hide.bs.collapse"); if (this.$element.trigger(b), !b.isDefaultPrevented()) { var c = this.dimension(); this.$element[c](this.$element[c]())[0].offsetHeight, this.$element.addClass("collapsing").removeClass("collapse").removeClass("in"), this.transitioning = 1; var d = function () { this.transitioning = 0, this.$element.trigger("hidden.bs.collapse").removeClass("collapsing").addClass("collapse") }; return a.support.transition ? (this.$element[c](0).one(a.support.transition.end, a.proxy(d, this)).emulateTransitionEnd(350), void 0) : d.call(this) } } }, b.prototype.toggle = function () { this[this.$element.hasClass("in") ? "hide" : "show"]() }; var c = a.fn.collapse; a.fn.collapse = function (c) { return this.each(function () { var d = a(this), e = d.data("bs.collapse"), f = a.extend({}, b.DEFAULTS, d.data(), "object" == typeof c && c); e || d.data("bs.collapse", e = new b(this, f)), "string" == typeof c && e[c]() }) }, a.fn.collapse.Constructor = b, a.fn.collapse.noConflict = function () { return a.fn.collapse = c, this }, a(document).on("click.bs.collapse.data-api", "[data-toggle=collapse]", function (b) { var c, d = a(this), e = d.attr("data-target") || b.preventDefault() || (c = d.attr("href")) && c.replace(/.*(?=#[^\s]+$)/, ""), f = a(e), g = f.data("bs.collapse"), h = g ? "toggle" : d.data(), i = d.attr("data-parent"), j = i && a(i); g && g.transitioning || (j && j.find("[data-toggle=collapse][data-parent=" + i + "]").not(d).addClass("collapsed"), d[f.hasClass("in") ? "addClass" : "removeClass"]("collapsed")), f.collapse(h) }) }(window.jQuery), +function (a) { "use strict"; function b() { a(d).remove(), a(e).each(function (b) { var d = c(a(this)); d.hasClass("open") && (d.trigger(b = a.Event("hide.bs.dropdown")), b.isDefaultPrevented() || d.removeClass("open").trigger("hidden.bs.dropdown")) }) } function c(b) { var c = b.attr("data-target"); c || (c = b.attr("href"), c = c && /#/.test(c) && c.replace(/.*(?=#[^\s]*$)/, "")); var d = c && a(c); return d && d.length ? d : b.parent() } var d = ".dropdown-backdrop", e = "[data-toggle=dropdown]", f = function (b) { a(b).on("click.bs.dropdown", this.toggle) }; f.prototype.toggle = function (d) { var e = a(this); if (!e.is(".disabled, :disabled")) { var f = c(e), g = f.hasClass("open"); if (b(), !g) { if ("ontouchstart" in document.documentElement && a('<div class="dropdown-backdrop"/>').insertAfter(a(this)).on("click", b), f.trigger(d = a.Event("show.bs.dropdown")), d.isDefaultPrevented()) return; f.toggleClass("open").trigger("shown.bs.dropdown") } return e.focus(), !1 } }, f.prototype.keydown = function (b) { if (/(38|40|27)/.test(b.keyCode)) { var d = a(this); if (b.preventDefault(), b.stopPropagation(), !d.is(".disabled, :disabled")) { var f = c(d), g = f.hasClass("open"); if (!g || g && 27 == b.keyCode) return 27 == b.which && f.find(e).focus(), d.click(); var h = a("[role=menu] li:not(.divider):visible a", f); if (h.length) { var i = h.index(h.filter(":focus")); 38 == b.keyCode && i > 0 && i--, 40 == b.keyCode && i < h.length - 1 && i++, ~i || (i = 0), h.eq(i).focus() } } } }; var g = a.fn.dropdown; a.fn.dropdown = function (b) { return this.each(function () { var c = a(this), d = c.data("dropdown"); d || c.data("dropdown", d = new f(this)), "string" == typeof b && d[b].call(c) }) }, a.fn.dropdown.Constructor = f, a.fn.dropdown.noConflict = function () { return a.fn.dropdown = g, this }, a(document).on("click.bs.dropdown.data-api", b).on("click.bs.dropdown.data-api", ".dropdown form", function (a) { a.stopPropagation() }).on("click.bs.dropdown.data-api", e, f.prototype.toggle).on("keydown.bs.dropdown.data-api", e + ", [role=menu]", f.prototype.keydown) }(window.jQuery), +function (a) { "use strict"; var b = function (b, c) { this.options = c, this.$element = a(b).on("click.dismiss.modal", '[data-dismiss="modal"]', a.proxy(this.hide, this)), this.$backdrop = this.isShown = null, this.options.remote && this.$element.find(".modal-body").load(this.options.remote) }; b.DEFAULTS = { backdrop: !0, keyboard: !0, show: !0 }, b.prototype.toggle = function () { return this[this.isShown ? "hide" : "show"]() }, b.prototype.show = function () { var b = this, c = a.Event("show.bs.modal"); this.$element.trigger(c), this.isShown || c.isDefaultPrevented() || (this.isShown = !0, this.escape(), this.backdrop(function () { var c = a.support.transition && b.$element.hasClass("fade"); b.$element.parent().length || b.$element.appendTo(document.body), b.$element.show(), c && b.$element[0].offsetWidth, b.$element.addClass("in").attr("aria-hidden", !1), b.enforceFocus(), c ? b.$element.one(a.support.transition.end, function () { b.$element.focus().trigger("shown.bs.modal") }).emulateTransitionEnd(300) : b.$element.focus().trigger("shown.bs.modal") })) }, b.prototype.hide = function (b) { b && b.preventDefault(), b = a.Event("hide.bs.modal"), this.$element.trigger(b), this.isShown && !b.isDefaultPrevented() && (this.isShown = !1, this.escape(), a(document).off("focusin.bs.modal"), this.$element.removeClass("in").attr("aria-hidden", !0), a.support.transition && this.$element.hasClass("fade") ? this.$element.one(a.support.transition.end, a.proxy(this.hideModal, this)).emulateTransitionEnd(300) : this.hideModal()) }, b.prototype.enforceFocus = function () { a(document).off("focusin.bs.modal").on("focusin.bs.modal", a.proxy(function (a) { this.$element[0] === a.target || this.$element.has(a.target).length || this.$element.focus() }, this)) }, b.prototype.escape = function () { this.isShown && this.options.keyboard ? this.$element.on("keyup.dismiss.bs.modal", a.proxy(function (a) { 27 == a.which && this.hide() }, this)) : this.isShown || this.$element.off("keyup.dismiss.bs.modal") }, b.prototype.hideModal = function () { var a = this; this.$element.hide(), this.backdrop(function () { a.removeBackdrop(), a.$element.trigger("hidden.bs.modal") }) }, b.prototype.removeBackdrop = function () { this.$backdrop && this.$backdrop.remove(), this.$backdrop = null }, b.prototype.backdrop = function (b) { var c = this.$element.hasClass("fade") ? "fade" : ""; if (this.isShown && this.options.backdrop) { var d = a.support.transition && c; if (this.$backdrop = a('<div class="modal-backdrop ' + c + '" />').appendTo(document.body), this.$element.on("click", a.proxy(function (a) { a.target === a.currentTarget && ("static" == this.options.backdrop ? this.$element[0].focus.call(this.$element[0]) : this.hide.call(this)) }, this)), d && this.$backdrop[0].offsetWidth, this.$backdrop.addClass("in"), !b) return; d ? this.$backdrop.one(a.support.transition.end, b).emulateTransitionEnd(150) : b() } else !this.isShown && this.$backdrop ? (this.$backdrop.removeClass("in"), a.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one(a.support.transition.end, b).emulateTransitionEnd(150) : b()) : b && b() }; var c = a.fn.modal; a.fn.modal = function (c) { return this.each(function () { var d = a(this), e = d.data("bs.modal"), f = a.extend({}, b.DEFAULTS, d.data(), "object" == typeof c && c); e || d.data("bs.modal", e = new b(this, f)), "string" == typeof c ? e[c]() : f.show && e.show() }) }, a.fn.modal.Constructor = b, a.fn.modal.noConflict = function () { return a.fn.modal = c, this }, a(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function (b) { var c = a(this), d = c.attr("href"), e = a(c.attr("data-target") || d && d.replace(/.*(?=#[^\s]+$)/, "")), f = e.data("modal") ? "toggle" : a.extend({ remote: !/#/.test(d) && d }, e.data(), c.data()); b.preventDefault(), e.modal(f).one("hide", function () { c.is(":visible") && c.focus() }) }); var d = a(document.body).on("shown.bs.modal", ".modal", function () { d.addClass("modal-open") }).on("hidden.bs.modal", ".modal", function () { d.removeClass("modal-open") }) }(window.jQuery), +function (a) { "use strict"; var b = function (a, b) { this.type = this.options = this.enabled = this.timeout = this.hoverState = this.$element = null, this.init("tooltip", a, b) }; b.DEFAULTS = { animation: !0, placement: "top", selector: !1, template: '<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>', trigger: "hover focus", title: "", delay: 0, html: !1, container: !1 }, b.prototype.init = function (b, c, d) { this.enabled = !0, this.type = b, this.$element = a(c), this.options = this.getOptions(d); for (var e = this.options.trigger.split(" "), f = e.length; f--;) { var g = e[f]; if ("click" == g) this.$element.on("click." + this.type, this.options.selector, a.proxy(this.toggle, this)); else if ("manual" != g) { var h = "hover" == g ? "mouseenter" : "focus", i = "hover" == g ? "mouseleave" : "blur"; this.$element.on(h + "." + this.type, this.options.selector, a.proxy(this.enter, this)), this.$element.on(i + "." + this.type, this.options.selector, a.proxy(this.leave, this)) } } this.options.selector ? this._options = a.extend({}, this.options, { trigger: "manual", selector: "" }) : this.fixTitle() }, b.prototype.getDefaults = function () { return b.DEFAULTS }, b.prototype.getOptions = function (b) { return b = a.extend({}, this.getDefaults(), this.$element.data(), b), b.delay && "number" == typeof b.delay && (b.delay = { show: b.delay, hide: b.delay }), b }, b.prototype.enter = function (b) { var c = this.getDefaults(), d = {}; this._options && a.each(this._options, function (a, b) { c[a] != b && (d[a] = b) }); var e = b instanceof this.constructor ? b : a(b.currentTarget)[this.type](d).data("bs." + this.type); return clearTimeout(e.timeout), e.options.delay && e.options.delay.show ? (e.hoverState = "in", e.timeout = setTimeout(function () { "in" == e.hoverState && e.show() }, e.options.delay.show), void 0) : e.show() }, b.prototype.leave = function (b) { var c = b instanceof this.constructor ? b : a(b.currentTarget)[this.type](this._options).data("bs." + this.type); return clearTimeout(c.timeout), c.options.delay && c.options.delay.hide ? (c.hoverState = "out", c.timeout = setTimeout(function () { "out" == c.hoverState && c.hide() }, c.options.delay.hide), void 0) : c.hide() }, b.prototype.show = function () { var b = a.Event("show.bs." + this.type); if (this.hasContent() && this.enabled) { if (this.$element.trigger(b), b.isDefaultPrevented()) return; var c = this.tip(); this.setContent(), this.options.animation && c.addClass("fade"); var d = "function" == typeof this.options.placement ? this.options.placement.call(this, c[0], this.$element[0]) : this.options.placement, e = /\s?auto?\s?/i, f = e.test(d); f && (d = d.replace(e, "") || "top"), c.detach().css({ top: 0, left: 0, display: "block" }).addClass(d), this.options.container ? c.appendTo(this.options.container) : c.insertAfter(this.$element); var g = this.getPosition(), h = c[0].offsetWidth, i = c[0].offsetHeight; if (f) { var j = this.$element.parent(), k = d, l = document.documentElement.scrollTop || document.body.scrollTop, m = "body" == this.options.container ? window.innerWidth : j.outerWidth(), n = "body" == this.options.container ? window.innerHeight : j.outerHeight(), o = "body" == this.options.container ? 0 : j.offset().left; d = "bottom" == d && g.top + g.height + i - l > n ? "top" : "top" == d && g.top - l - i < 0 ? "bottom" : "right" == d && g.right + h > m ? "left" : "left" == d && g.left - h < o ? "right" : d, c.removeClass(k).addClass(d) } var p = "bottom" == d ? { top: g.top + g.height, left: g.left + g.width / 2 - h / 2 } : "top" == d ? { top: g.top - i, left: g.left + g.width / 2 - h / 2 } : "left" == d ? { top: g.top + g.height / 2 - i / 2, left: g.left - h } : { top: g.top + g.height / 2 - i / 2, left: g.left + g.width }; this.applyPlacement(p, d), this.$element.trigger("shown.bs." + this.type) } }, b.prototype.applyPlacement = function (a, b) { var c, d = this.tip(), e = d[0].offsetWidth, f = d[0].offsetHeight; a.top = a.top + parseInt(d.css("margin-top"), 10), a.left = a.left + parseInt(d.css("margin-left"), 10), d.offset(a).addClass("in"); var g = d[0].offsetWidth, h = d[0].offsetHeight; if ("top" == b && h != f && (c = !0, a.top = a.top + f - h), "bottom" == b || "top" == b) { var i = 0; a.left < 0 && (i = -2 * a.left, a.left = 0, d.offset(a), g = d[0].offsetWidth, h = d[0].offsetHeight), this.replaceArrow(i - e + g, g, "left") } else this.replaceArrow(h - f, h, "top"); c && d.offset(a) }, b.prototype.replaceArrow = function (a, b, c) { this.arrow().css(c, a ? 50 * (1 - a / b) + "%" : "") }, b.prototype.setContent = function () { var a = this.tip(), b = this.getTitle(); a.find(".tooltip-inner")[this.options.html ? "html" : "text"](b), a.removeClass("fade in top bottom left right") }, b.prototype.hide = function () { var b = this.tip(), c = a.Event("hide.bs." + this.type); return this.$element.trigger(c), c.isDefaultPrevented() ? void 0 : (b.removeClass("in"), a.support.transition && this.$tip.hasClass("fade") ? b.one(a.support.transition.end, b.detach).emulateTransitionEnd(150) : b.detach(), this.$element.trigger("hidden.bs." + this.type), this) }, b.prototype.fixTitle = function () { var a = this.$element; (a.attr("title") || "string" != typeof a.attr("data-original-title")) && a.attr("data-original-title", a.attr("title") || "").attr("title", "") }, b.prototype.hasContent = function () { return this.getTitle() }, b.prototype.getPosition = function () { var b = this.$element[0]; return a.extend({}, "function" == typeof b.getBoundingClientRect ? b.getBoundingClientRect() : { width: b.offsetWidth, height: b.offsetHeight }, this.$element.offset()) }, b.prototype.getTitle = function () { var a, b = this.$element, c = this.options; return a = b.attr("data-original-title") || ("function" == typeof c.title ? c.title.call(b[0]) : c.title) }, b.prototype.tip = function () { return this.$tip = this.$tip || a(this.options.template) }, b.prototype.arrow = function () { return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow") }, b.prototype.validate = function () { this.$element[0].parentNode || (this.hide(), this.$element = null, this.options = null) }, b.prototype.enable = function () { this.enabled = !0 }, b.prototype.disable = function () { this.enabled = !1 }, b.prototype.toggleEnabled = function () { this.enabled = !this.enabled }, b.prototype.toggle = function (b) { var c = b ? a(b.currentTarget)[this.type](this._options).data("bs." + this.type) : this; c.tip().hasClass("in") ? c.leave(c) : c.enter(c) }, b.prototype.destroy = function () { this.hide().$element.off("." + this.type).removeData("bs." + this.type) }; var c = a.fn.tooltip; a.fn.tooltip = function (c) { return this.each(function () { var d = a(this), e = d.data("bs.tooltip"), f = "object" == typeof c && c; e || d.data("bs.tooltip", e = new b(this, f)), "string" == typeof c && e[c]() }) }, a.fn.tooltip.Constructor = b, a.fn.tooltip.noConflict = function () { return a.fn.tooltip = c, this } }(window.jQuery), +function (a) { "use strict"; var b = function (a, b) { this.init("popover", a, b) }; if (!a.fn.tooltip) throw new Error("popover%20requires%20tooltip.html"); b.DEFAULTS = a.extend({}, a.fn.tooltip.Constructor.DEFAULTS, { placement: "right", trigger: "click", content: "", template: '<div class="popover"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>' }), b.prototype = a.extend({}, a.fn.tooltip.Constructor.prototype), b.prototype.constructor = b, b.prototype.getDefaults = function () { return b.DEFAULTS }, b.prototype.setContent = function () { var a = this.tip(), b = this.getTitle(), c = this.getContent(); a.find(".popover-title")[this.options.html ? "html" : "text"](b), a.find(".popover-content")[this.options.html ? "html" : "text"](c), a.removeClass("fade top bottom left right in"), a.find(".popover-title:empty").hide() }, b.prototype.hasContent = function () { return this.getTitle() || this.getContent() }, b.prototype.getContent = function () { var a = this.$element, b = this.options; return a.attr("data-content") || ("function" == typeof b.content ? b.content.call(a[0]) : b.content) }, b.prototype.tip = function () { return this.$tip || (this.$tip = a(this.options.template)), this.$tip }, b.prototype.destroy = function () { this.hide().$element.off("." + this.type).removeData(this.type) }; var c = a.fn.popover; a.fn.popover = function (c) { return this.each(function () { var d = a(this), e = d.data("bs.popover"), f = "object" == typeof c && c; e || d.data("bs.popover", e = new b(this, f)), "string" == typeof c && e[c]() }) }, a.fn.popover.Constructor = b, a.fn.popover.noConflict = function () { return a.fn.popover = c, this } }(window.jQuery), +function (a) { "use strict"; function b(c, d) { var e, f = a.proxy(this.process, this); this.$element = a(c).is("body") ? a(window) : a(c), this.$body = a("body"), this.$scrollElement = this.$element.on("scroll.bs.scroll-spy.data-api", f), this.options = a.extend({}, b.DEFAULTS, d), this.selector = (this.options.target || (e = a(c).attr("href")) && e.replace(/.*(?=#[^\s]+$)/, "") || "") + " .nav li > a", this.offsets = a([]), this.targets = a([]), this.activeTarget = null, this.refresh(), this.process() } b.DEFAULTS = { offset: 10 }, b.prototype.refresh = function () { var b = this.$element[0] == window ? "offset" : "position"; this.offsets = a([]), this.targets = a([]); var c = this; this.$body.find(this.selector).map(function () { var d = a(this), e = d.data("target") || d.attr("href"), f = /^#\w/.test(e) && a(e); return f && f.length && [[f[b]().top + (!a.isWindow(c.$scrollElement.get(0)) && c.$scrollElement.scrollTop()), e]] || null }).sort(function (a, b) { return a[0] - b[0] }).each(function () { c.offsets.push(this[0]), c.targets.push(this[1]) }) }, b.prototype.process = function () { var a, b = this.$scrollElement.scrollTop() + this.options.offset, c = this.$scrollElement[0].scrollHeight || this.$body[0].scrollHeight, d = c - this.$scrollElement.height(), e = this.offsets, f = this.targets, g = this.activeTarget; if (b >= d) return g != (a = f.last()[0]) && this.activate(a); for (a = e.length; a--;)g != f[a] && b >= e[a] && (!e[a + 1] || b <= e[a + 1]) && this.activate(f[a]) }, b.prototype.activate = function (b) { this.activeTarget = b, a(this.selector).parents(".active").removeClass("active"); var c = this.selector + '[data-target="' + b + '"],' + this.selector + '[href="' + b + '"]', d = a(c).parents("li").addClass("active"); d.parent(".dropdown-menu").length && (d = d.closest("li.dropdown").addClass("active")), d.trigger("activate") }; var c = a.fn.scrollspy; a.fn.scrollspy = function (c) { return this.each(function () { var d = a(this), e = d.data("bs.scrollspy"), f = "object" == typeof c && c; e || d.data("bs.scrollspy", e = new b(this, f)), "string" == typeof c && e[c]() }) }, a.fn.scrollspy.Constructor = b, a.fn.scrollspy.noConflict = function () { return a.fn.scrollspy = c, this }, a(window).on("load", function () { a('[data-spy="scroll"]').each(function () { var b = a(this); b.scrollspy(b.data()) }) }) }(window.jQuery), +function (a) { "use strict"; var b = function (b) { this.element = a(b) }; b.prototype.show = function () { var b = this.element, c = b.closest("ul:not(.dropdown-menu)"), d = b.attr("data-target"); if (d || (d = b.attr("href"), d = d && d.replace(/.*(?=#[^\s]*$)/, "")), !b.parent("li").hasClass("active")) { var e = c.find(".active:last a")[0], f = a.Event("show.bs.tab", { relatedTarget: e }); if (b.trigger(f), !f.isDefaultPrevented()) { var g = a(d); this.activate(b.parent("li"), c), this.activate(g, g.parent(), function () { b.trigger({ type: "shown.bs.tab", relatedTarget: e }) }) } } }, b.prototype.activate = function (b, c, d) { function e() { f.removeClass("active").find("> .dropdown-menu > .active").removeClass("active"), b.addClass("active"), g ? (b[0].offsetWidth, b.addClass("in")) : b.removeClass("fade"), b.parent(".dropdown-menu") && b.closest("li.dropdown").addClass("active"), d && d() } var f = c.find("> .active"), g = d && a.support.transition && f.hasClass("fade"); g ? f.one(a.support.transition.end, e).emulateTransitionEnd(150) : e(), f.removeClass("in") }; var c = a.fn.tab; a.fn.tab = function (c) { return this.each(function () { var d = a(this), e = d.data("bs.tab"); e || d.data("bs.tab", e = new b(this)), "string" == typeof c && e[c]() }) }, a.fn.tab.Constructor = b, a.fn.tab.noConflict = function () { return a.fn.tab = c, this }, a(document).on("click.bs.tab.data-api", '[data-toggle="tab"], [data-toggle="pill"]', function (b) { b.preventDefault(), a(this).tab("show") }) }(window.jQuery), +function (a) { "use strict"; var b = function (c, d) { this.options = a.extend({}, b.DEFAULTS, d), this.$window = a(window).on("scroll.bs.affix.data-api", a.proxy(this.checkPosition, this)).on("click.bs.affix.data-api", a.proxy(this.checkPositionWithEventLoop, this)), this.$element = a(c), this.affixed = this.unpin = null, this.checkPosition() }; b.RESET = "affix affix-top affix-bottom", b.DEFAULTS = { offset: 0 }, b.prototype.checkPositionWithEventLoop = function () { setTimeout(a.proxy(this.checkPosition, this), 1) }, b.prototype.checkPosition = function () { if (this.$element.is(":visible")) { var c = a(document).height(), d = this.$window.scrollTop(), e = this.$element.offset(), f = this.options.offset, g = f.top, h = f.bottom; "object" != typeof f && (h = g = f), "function" == typeof g && (g = f.top()), "function" == typeof h && (h = f.bottom()); var i = null != this.unpin && d + this.unpin <= e.top ? !1 : null != h && e.top + this.$element.height() >= c - h ? "bottom" : null != g && g >= d ? "top" : !1; this.affixed !== i && (this.unpin && this.$element.css("top", ""), this.affixed = i, this.unpin = "bottom" == i ? e.top - d : null, this.$element.removeClass(b.RESET).addClass("affix" + (i ? "-" + i : "")), "bottom" == i && this.$element.offset({ top: document.body.offsetHeight - h - this.$element.height() })) } }; var c = a.fn.affix; a.fn.affix = function (c) { return this.each(function () { var d = a(this), e = d.data("bs.affix"), f = "object" == typeof c && c; e || d.data("bs.affix", e = new b(this, f)), "string" == typeof c && e[c]() }) }, a.fn.affix.Constructor = b, a.fn.affix.noConflict = function () { return a.fn.affix = c, this }, a(window).on("load", function () { a('[data-spy="affix"]').each(function () { var b = a(this), c = b.data(); c.offset = c.offset || {}, c.offsetBottom && (c.offset.bottom = c.offsetBottom), c.offsetTop && (c.offset.top = c.offsetTop), b.affix(c) }) }) }(window.jQuery); utility = function () { function n(e) { for (var t = e + "=", o = document.cookie.split(";"), r = 0; r < o.length; r++)for (var i = o[r]; " " == i.charAt(0);)if (-1 != (i = i.substring(1)).indexOf(t)) return i.substring(t.length, i.length); return "" } function a(e) { document.cookie = e + "=; Path=/; expires=Thu, 01 Jan 1970 00:00:01 GMT;" } function s(e) { if (Array.isArray(e)) { for (var t = e.length, o = []; t--;)o[t] = s(e[t]); return o } if ("object" != typeof e || null === e) return e; for (var r = Object.keys(e), i = r.length, n = {}; i--;) { var a = r[i], c = a.toLowerCase(); n[c] = e[a], !Array.isArray(n[c]) && "object" != typeof n[c] || (n[c] = s(n[c])) } return n } return { getCookie: n, deleteCookie: a, setCookie: function (e, t, o) { "" != n(e) && a(e); var r = new Date, i = r.getTime() + 18e5; r.setTime(i); r = "; expires=" + r.toGMTString(); void 0 !== o && o instanceof Date && (r = "; expires=" + o.toGMTString()); t = void 0 !== t && "object" == typeof t ? JSON.stringify(t) : t; return document.cookie = [e, "=", t, r, "; SameSite=None; Secure", "; path=/"].join(""), n(e) == t }, isCookieEnabled: function () { try { return navigator.cookieEnabled } catch (e) { return !1 } }, getLocation: function (e, t, o) { t = void 0 !== t ? t : function (e) { var t; switch (e.code) { case e.PERMISSION_DENIED: t = "User denied the request for location request."; break; case e.POSITION_UNAVAILABLE: t = "Location information is not available."; break; case e.TIMEOUT: t = "Request timed out."; break; case e.UNKNOWN_ERROR: t = "An unknown error occurred." }o(t) }; if (!navigator.geolocation) return "Geolocation is not supported in this browser."; navigator.geolocation.getCurrentPosition(void 0 !== e ? e : function (e) { o(e) }, t) }, validateEmail: function (e) { return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(e) }, getUrlParamValue: function (e) { try { e = e.toString().toLowerCase(); var t, o = (o = window.location.search).toString().replace("?", "").split("&"), r = {}, i = []; for (t in o) r[(i = o[t].split("="))[0].toString().trim().toLowerCase()] = i[1]; return e in r ? r[e] : "" } catch (e) { return "" } }, getAllUrlParams: function () { var t = {}; try { if (0 < window.location.search.length) for (var e = window.location.search.split("?")[1].split("&"), o = 0; o < e.length; o++) { var r = e[o].split("="); t[r[0]] = decodeURI(r[1]) } return t } catch (e) { return t } }, lowerCaseKeys: s, randomStringGenerator: function (e) { for (var t = "", o = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789", r = 0; r < e; r++)t += o.charAt(Math.floor(Math.random() * o.length)); return t }, isMobile: function () { return !(!/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) && !/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) } } }(), Array.prototype.find || Object.defineProperty(Array.prototype, "find", { value: function (e) { if (null == this) throw new TypeError('"this" is null or not defined'); var t = Object(this), o = t.length >>> 0; if ("function" != typeof e) throw new TypeError("predicate must be a function"); for (var r = arguments[1], i = 0; i < o;) { var n = t[i]; if (e.call(r, n, i, t)) return n; i++ } }, configurable: !0, writable: !0 }), [Element.prototype, CharacterData.prototype, DocumentType.prototype].forEach(function (e) { e.hasOwnProperty("after") || Object.defineProperty(e, "after", { configurable: !0, enumerable: !0, writable: !0, value: function () { var e = Array.prototype.slice.call(arguments), o = document.createDocumentFragment(); e.forEach(function (e) { var t = e instanceof Node; o.appendChild(t ? e : document.createTextNode(String(e))) }), this.parentNode.insertBefore(o, this.nextSibling) } }) });
    !function () { var n, t, e; function a(n) { var t, e, r, o = "", h = -1; if (n && n.length) for (r = n.length; (h += 1) < r;)t = n.charCodeAt(h), e = h + 1 < r ? n.charCodeAt(h + 1) : 0, 55296 <= t && t <= 56319 && 56320 <= e && e <= 57343 && (t = 65536 + ((1023 & t) << 10) + (1023 & e), h += 1), t <= 127 ? o += String.fromCharCode(t) : t <= 2047 ? o += String.fromCharCode(192 | t >>> 6 & 31, 128 | 63 & t) : t <= 65535 ? o += String.fromCharCode(224 | t >>> 12 & 15, 128 | t >>> 6 & 63, 128 | 63 & t) : t <= 2097151 && (o += String.fromCharCode(240 | t >>> 18 & 7, 128 | t >>> 12 & 63, 128 | t >>> 6 & 63, 128 | 63 & t)); return o } function x(n, t) { var e = (65535 & n) + (65535 & t); return (n >> 16) + (t >> 16) + (e >> 16) << 16 | 65535 & e } function _(n, t) { return n << t | n >>> 32 - t } function c(n, t) { for (var e, r = t ? "0123456789ABCDEF" : "0123456789abcdef", o = "", h = 0, f = n.length; h < f; h += 1)e = n.charCodeAt(h), o += r.charAt(e >>> 4 & 15) + r.charAt(15 & e); return o } function i(n) { for (var t = 32 * n.length, e = "", r = 0; r < t; r += 8)e += String.fromCharCode(n[r >> 5] >>> 24 - r % 32 & 255); return e } function A(n) { for (var t = 32 * n.length, e = "", r = 0; r < t; r += 8)e += String.fromCharCode(n[r >> 5] >>> r % 32 & 255); return e } function s(n) { for (var t = 8 * n.length, e = Array(n.length >> 2), r = e.length, o = 0; o < r; o += 1)e[o] = 0; for (o = 0; o < t; o += 8)e[o >> 5] |= (255 & n.charCodeAt(o / 8)) << o % 32; return e } function D(n) { for (var t = 8 * n.length, e = Array(n.length >> 2), r = e.length, o = 0; o < r; o += 1)e[o] = 0; for (o = 0; o < t; o += 8)e[o >> 5] |= (255 & n.charCodeAt(o / 8)) << 24 - o % 32; return e } function F(n, t) { for (var e, r, o, h, f, u = t.length, i = Array(), a = Array(Math.ceil(n.length / 2)), c = a.length, D = 0; D < c; D += 1)a[D] = n.charCodeAt(2 * D) << 8 | n.charCodeAt(2 * D + 1); for (; 0 < a.length;) { for (o = Array(), D = r = 0; D < a.length; D += 1)r = (r << 16) + a[D], r -= (e = Math.floor(r / u)) * u, (0 < o.length || 0 < e) && (o[o.length] = e); i[i.length] = r, a = o } for (h = "", D = i.length - 1; 0 <= D; D--)h += t.charAt(i[D]); for (f = Math.ceil(8 * n.length / (Math.log(t.length) / Math.log(2))), D = h.length; D < f; D += 1)h = t[0] + h; return h } function E(n, t) { var e, r, o, h = "", f = n.length; for (t = t || "=", e = 0; e < f; e += 3)for (o = n.charCodeAt(e) << 16 | (e + 1 < f ? n.charCodeAt(e + 1) << 8 : 0) | (e + 2 < f ? n.charCodeAt(e + 2) : 0), r = 0; r < 4; r += 1)8 * e + 6 * r > 8 * n.length ? h += t : h += "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(o >>> 6 * (3 - r) & 63); return h } n = { VERSION: "1.0.6", Base64: function () { var c = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789%2b/index.html", D = "=", B = !0; this.encode = function (n) { var t, e, r, o = "", h = n.length; for (D = D || "=", n = B ? a(n) : n, t = 0; t < h; t += 3)for (r = n.charCodeAt(t) << 16 | (t + 1 < h ? n.charCodeAt(t + 1) << 8 : 0) | (t + 2 < h ? n.charCodeAt(t + 2) : 0), e = 0; e < 4; e += 1)o += 8 * h < 8 * t + 6 * e ? D : c.charAt(r >>> 6 * (3 - e) & 63); return o }, this.decode = function (n) { var t, e, r, o, h, f, u, i = "", a = []; if (!n) return n; for (t = u = 0, n = n.replace(new RegExp("\\" + D, "gi"), ""); e = (f = c.indexOf(n.charAt(t += 1)) << 18 | c.indexOf(n.charAt(t += 1)) << 12 | (o = c.indexOf(n.charAt(t += 1))) << 6 | (h = c.indexOf(n.charAt(t += 1)))) >> 16 & 255, r = f >> 8 & 255, f = 255 & f, a[u += 1] = 64 === o ? String.fromCharCode(e) : 64 === h ? String.fromCharCode(e, r) : String.fromCharCode(e, r, f), t < n.length;); return i = a.join(""), i = B ? function (n) { var t, e, r, o, h, f = [], u = t = r = 0; if (n && n.length) for (h = n.length, n += ""; u < h;)t += 1, (e = n.charCodeAt(u)) < 128 ? (f[t] = String.fromCharCode(e), u += 1) : 191 < e && e < 224 ? (r = n.charCodeAt(u + 1), f[t] = String.fromCharCode((31 & e) << 6 | 63 & r), u += 2) : (r = n.charCodeAt(u + 1), o = n.charCodeAt(u + 2), f[t] = String.fromCharCode((15 & e) << 12 | (63 & r) << 6 | 63 & o), u += 3); return f.join("") }(i) : i }, this.setPad = function (n) { return D = n || D, this }, this.setTab = function (n) { return c = n || c, this }, this.setUTF8 = function (n) { return "boolean" == typeof n && (B = n), this } }, CRC32: function (n) { var t, e, r, o, h = 0; for (n = a(n), e = ["00000000 77073096 EE0E612C 990951BA 076DC419 706AF48F E963A535 9E6495A3 0EDB8832 ", "79DCB8A4 E0D5E91E 97D2D988 09B64C2B 7EB17CBD E7B82D07 90BF1D91 1DB71064 6AB020F2 F3B97148 ", "84BE41DE 1ADAD47D 6DDDE4EB F4D4B551 83D385C7 136C9856 646BA8C0 FD62F97A 8A65C9EC 14015C4F ", "63066CD9 FA0F3D63 8D080DF5 3B6E20C8 4C69105E D56041E4 A2677172 3C03E4D1 4B04D447 D20D85FD ", "A50AB56B 35B5A8FA 42B2986C DBBBC9D6 ACBCF940 32D86CE3 45DF5C75 DCD60DCF ABD13D59 26D930AC ", "51DE003A C8D75180 BFD06116 21B4F4B5 56B3C423 CFBA9599 B8BDA50F 2802B89E 5F058808 C60CD9B2 ", "B10BE924 2F6F7C87 58684C11 C1611DAB B6662D3D 76DC4190 01DB7106 98D220BC EFD5102A 71B18589 ", "06B6B51F 9FBFE4A5 E8B8D433 7807C9A2 0F00F934 9609A88E E10E9818 7F6A0DBB 086D3D2D 91646C97 ", "E6635C01 6B6B51F4 1C6C6162 856530D8 F262004E 6C0695ED 1B01A57B 8208F4C1 F50FC457 65B0D9C6 ", "12B7E950 8BBEB8EA FCB9887C 62DD1DDF 15DA2D49 8CD37CF3 FBD44C65 4DB26158 3AB551CE A3BC0074 ", "D4BB30E2 4ADFA541 3DD895D7 A4D1C46D D3D6F4FB 4369E96A 346ED9FC AD678846 DA60B8D0 44042D73 ", "33031DE5 AA0A4C5F DD0D7CC9 5005713C 270241AA BE0B1010 C90C2086 5768B525 206F85B3 B966D409 ", "CE61E49F 5EDEF90E 29D9C998 B0D09822 C7D7A8B4 59B33D17 2EB40D81 B7BD5C3B C0BA6CAD EDB88320 ", "9ABFB3B6 03B6E20C 74B1D29A EAD54739 9DD277AF 04DB2615 73DC1683 E3630B12 94643B84 0D6D6A3E ", "7A6A5AA8 E40ECF0B 9309FF9D 0A00AE27 7D079EB1 F00F9344 8708A3D2 1E01F268 6906C2FE F762575D ", "806567CB 196C3671 6E6B06E7 FED41B76 89D32BE0 10DA7A5A 67DD4ACC F9B9DF6F 8EBEEFF9 17B7BE43 ", "60B08ED5 D6D6A3E8 A1D1937E 38D8C2C4 4FDFF252 D1BB67F1 A6BC5767 3FB506DD 48B2364B D80D2BDA ", "AF0A1B4C 36034AF6 41047A60 DF60EFC3 A867DF55 316E8EEF 4669BE79 CB61B38C BC66831A 256FD2A0 ", "5268E236 CC0C7795 BB0B4703 220216B9 5505262F C5BA3BBE B2BD0B28 2BB45A92 5CB36A04 C2D7FFA7 ", "B5D0CF31 2CD99E8B 5BDEAE1D 9B64C2B0 EC63F226 756AA39C 026D930A 9C0906A9 EB0E363F 72076785 ", "05005713 95BF4A82 E2B87A14 7BB12BAE 0CB61B38 92D28E9B E5D5BE0D 7CDCEFB7 0BDBDF21 86D3D2D4 ", "F1D4E242 68DDB3F8 1FDA836E 81BE16CD F6B9265B 6FB077E1 18B74777 88085AE6 FF0F6A70 66063BCA ", "11010B5C 8F659EFF F862AE69 616BFFD3 166CCF45 A00AE278 D70DD2EE 4E048354 3903B3C2 A7672661 ", "D06016F7 4969474D 3E6E77DB AED16A4A D9D65ADC 40DF0B66 37D83BF0 A9BCAE53 DEBB9EC5 47B2CF7F ", "30B5FFE9 BDBDF21C CABAC28A 53B39330 24B4A3A6 BAD03605 CDD70693 54DE5729 23D967BF B3667A2E ", "C4614AB8 5D681B02 2A6F2B94 B40BBE37 C30C8EA1 5A05DF1B 2D02EF8D"].join(""), h ^= -1, r = 0, o = n.length; r < o; r += 1)t = 255 & (h ^ n.charCodeAt(r)), h = h >>> 8 ^ "0x" + e.substr(9 * t, 8); return (-1 ^ h) >>> 0 }, MD5: function (n) { var e = !(!n || "boolean" != typeof n.uppercase) && n.uppercase, r = n && "string" == typeof n.pad ? n.pad : "=", f = !n || "boolean" != typeof n.utf8 || n.utf8; function o(n) { return A(u(s(n = f ? a(n) : n), 8 * n.length)) } function h(n, t) { var e, r, o, h; for (n = f ? a(n) : n, t = f ? a(t) : t, 16 < (e = s(n)).length && (e = u(e, 8 * n.length)), r = Array(16), o = Array(16), h = 0; h < 16; h += 1)r[h] = 909522486 ^ e[h], o[h] = 1549556828 ^ e[h]; return t = u(r.concat(s(t)), 512 + 8 * t.length), A(u(o.concat(t), 640)) } function u(n, t) { var e, r, o, h, f, u = 1732584193, i = -271733879, a = -1732584194, c = 271733878; for (n[t >> 5] |= 128 << t % 32, n[14 + (t + 64 >>> 9 << 4)] = t, e = 0; e < n.length; e += 16)u = D(r = u, o = i, h = a, f = c, n[e + 0], 7, -680876936), c = D(c, u, i, a, n[e + 1], 12, -389564586), a = D(a, c, u, i, n[e + 2], 17, 606105819), i = D(i, a, c, u, n[e + 3], 22, -1044525330), u = D(u, i, a, c, n[e + 4], 7, -176418897), c = D(c, u, i, a, n[e + 5], 12, 1200080426), a = D(a, c, u, i, n[e + 6], 17, -1473231341), i = D(i, a, c, u, n[e + 7], 22, -45705983), u = D(u, i, a, c, n[e + 8], 7, 1770035416), c = D(c, u, i, a, n[e + 9], 12, -1958414417), a = D(a, c, u, i, n[e + 10], 17, -42063), i = D(i, a, c, u, n[e + 11], 22, -1990404162), u = D(u, i, a, c, n[e + 12], 7, 1804603682), c = D(c, u, i, a, n[e + 13], 12, -40341101), a = D(a, c, u, i, n[e + 14], 17, -1502002290), u = B(u, i = D(i, a, c, u, n[e + 15], 22, 1236535329), a, c, n[e + 1], 5, -165796510), c = B(c, u, i, a, n[e + 6], 9, -1069501632), a = B(a, c, u, i, n[e + 11], 14, 643717713), i = B(i, a, c, u, n[e + 0], 20, -373897302), u = B(u, i, a, c, n[e + 5], 5, -701558691), c = B(c, u, i, a, n[e + 10], 9, 38016083), a = B(a, c, u, i, n[e + 15], 14, -660478335), i = B(i, a, c, u, n[e + 4], 20, -405537848), u = B(u, i, a, c, n[e + 9], 5, 568446438), c = B(c, u, i, a, n[e + 14], 9, -1019803690), a = B(a, c, u, i, n[e + 3], 14, -187363961), i = B(i, a, c, u, n[e + 8], 20, 1163531501), u = B(u, i, a, c, n[e + 13], 5, -1444681467), c = B(c, u, i, a, n[e + 2], 9, -51403784), a = B(a, c, u, i, n[e + 7], 14, 1735328473), u = C(u, i = B(i, a, c, u, n[e + 12], 20, -1926607734), a, c, n[e + 5], 4, -378558), c = C(c, u, i, a, n[e + 8], 11, -2022574463), a = C(a, c, u, i, n[e + 11], 16, 1839030562), i = C(i, a, c, u, n[e + 14], 23, -35309556), u = C(u, i, a, c, n[e + 1], 4, -1530992060), c = C(c, u, i, a, n[e + 4], 11, 1272893353), a = C(a, c, u, i, n[e + 7], 16, -155497632), i = C(i, a, c, u, n[e + 10], 23, -1094730640), u = C(u, i, a, c, n[e + 13], 4, 681279174), c = C(c, u, i, a, n[e + 0], 11, -358537222), a = C(a, c, u, i, n[e + 3], 16, -722521979), i = C(i, a, c, u, n[e + 6], 23, 76029189), u = C(u, i, a, c, n[e + 9], 4, -640364487), c = C(c, u, i, a, n[e + 12], 11, -421815835), a = C(a, c, u, i, n[e + 15], 16, 530742520), u = l(u, i = C(i, a, c, u, n[e + 2], 23, -995338651), a, c, n[e + 0], 6, -198630844), c = l(c, u, i, a, n[e + 7], 10, 1126891415), a = l(a, c, u, i, n[e + 14], 15, -1416354905), i = l(i, a, c, u, n[e + 5], 21, -57434055), u = l(u, i, a, c, n[e + 12], 6, 1700485571), c = l(c, u, i, a, n[e + 3], 10, -1894986606), a = l(a, c, u, i, n[e + 10], 15, -1051523), i = l(i, a, c, u, n[e + 1], 21, -2054922799), u = l(u, i, a, c, n[e + 8], 6, 1873313359), c = l(c, u, i, a, n[e + 15], 10, -30611744), a = l(a, c, u, i, n[e + 6], 15, -1560198380), i = l(i, a, c, u, n[e + 13], 21, 1309151649), u = l(u, i, a, c, n[e + 4], 6, -145523070), c = l(c, u, i, a, n[e + 11], 10, -1120210379), a = l(a, c, u, i, n[e + 2], 15, 718787259), i = l(i, a, c, u, n[e + 9], 21, -343485551), u = x(u, r), i = x(i, o), a = x(a, h), c = x(c, f); return Array(u, i, a, c) } function i(n, t, e, r, o, h) { return x(_(x(x(t, n), x(r, h)), o), e) } function D(n, t, e, r, o, h, f) { return i(t & e | ~t & r, n, t, o, h, f) } function B(n, t, e, r, o, h, f) { return i(t & r | e & ~r, n, t, o, h, f) } function C(n, t, e, r, o, h, f) { return i(t ^ e ^ r, n, t, o, h, f) } function l(n, t, e, r, o, h, f) { return i(e ^ (t | ~r), n, t, o, h, f) } this.hex = function (n) { return c(o(n), e) }, this.b64 = function (n) { return E(o(n), r) }, this.any = function (n, t) { return F(o(n), t) }, this.raw = o, this.hex_hmac = function (n, t) { return c(h(n, t), e) }, this.b64_hmac = function (n, t) { return E(h(n, t), r) }, this.any_hmac = function (n, t, e) { return F(h(n, t), e) }, this.vm_test = function () { return "900150983cd24fb0d6963f7d28e17f72" === hex("abc").toLowerCase() }, this.setUpperCase = function (n) { return "boolean" == typeof n && (e = n), this }, this.setPad = function (n) { return r = n || r, this }, this.setUTF8 = function (n) { return "boolean" == typeof n && (f = n), this } }, SHA1: function (n) { var t = !(!n || "boolean" != typeof n.uppercase) && n.uppercase, e = n && "string" == typeof n.pad ? n.pad : "=", f = !n || "boolean" != typeof n.utf8 || n.utf8; function r(n) { return i(u(D(n = f ? a(n) : n), 8 * n.length)) } function o(n, t) { var e, r, o, h; for (n = f ? a(n) : n, t = f ? a(t) : t, 16 < (e = D(n)).length && (e = u(e, 8 * n.length)), r = Array(16), o = Array(16), h = 0; h < 16; h += 1)r[h] = 909522486 ^ e[h], o[h] = 1549556828 ^ e[h]; return t = u(r.concat(D(t)), 512 + 8 * t.length), i(u(o.concat(t), 672)) } function u(n, t) { var e, r, o, h, f, u, i, a, c = Array(80), D = 1732584193, B = -271733879, C = -1732584194, l = 271733878, A = -1009589776; for (n[t >> 5] |= 128 << 24 - t % 32, n[15 + (t + 64 >> 9 << 4)] = t, e = 0; e < n.length; e += 16) { for (o = D, h = B, f = C, u = l, i = A, r = 0; r < 80; r += 1)c[r] = r < 16 ? n[e + r] : _(c[r - 3] ^ c[r - 8] ^ c[r - 14] ^ c[r - 16], 1), a = x(x(_(D, 5), function (n, t, e, r) { if (n < 20) return t & e | ~t & r; if (n < 40) return t ^ e ^ r; if (n < 60) return t & e | t & r | e & r; return t ^ e ^ r }(r, B, C, l)), x(x(A, c[r]), (a = r) < 20 ? 1518500249 : a < 40 ? 1859775393 : a < 60 ? -1894007588 : -899497514)), A = l, l = C, C = _(B, 30), B = D, D = a; D = x(D, o), B = x(B, h), C = x(C, f), l = x(l, u), A = x(A, i) } return Array(D, B, C, l, A) } this.hex = function (n) { return c(r(n), t) }, this.b64 = function (n) { return E(r(n), e) }, this.any = function (n, t) { return F(r(n), t) }, this.raw = r, this.hex_hmac = function (n, t) { return c(o(n, t)) }, this.b64_hmac = function (n, t) { return E(o(n, t), e) }, this.any_hmac = function (n, t, e) { return F(o(n, t), e) }, this.vm_test = function () { return "900150983cd24fb0d6963f7d28e17f72" === hex("abc").toLowerCase() }, this.setUpperCase = function (n) { return "boolean" == typeof n && (t = n), this }, this.setPad = function (n) { return e = n || e, this }, this.setUTF8 = function (n) { return "boolean" == typeof n && (f = n), this } }, SHA256: function (n) { n && "boolean" == typeof n.uppercase && n.uppercase; var s, e = n && "string" == typeof n.pad ? n.pad : "=", f = !n || "boolean" != typeof n.utf8 || n.utf8; function r(n, t) { return i(u(D(n = t ? a(n) : n), 8 * n.length)) } function o(n, t) { n = f ? a(n) : n, t = f ? a(t) : t; var e = 0, r = D(n), o = Array(16), h = Array(16); for (16 < r.length && (r = u(r, 8 * n.length)); e < 16; e += 1)o[e] = 909522486 ^ r[e], h[e] = 1549556828 ^ r[e]; return t = u(o.concat(D(t)), 512 + 8 * t.length), i(u(h.concat(t), 768)) } function w(n, t) { return n >>> t | n << 32 - t } function u(n, t) { var e, r, o, h, f, u, i, a, c, D, B, C, l = [1779033703, -1150833019, 1013904242, -1521486534, 1359893119, -1694144372, 528734635, 1541459225], A = new Array(64); for (n[t >> 5] |= 128 << 24 - t % 32, n[15 + (t + 64 >> 9 << 4)] = t, c = 0; c < n.length; c += 16) { for (e = l[0], r = l[1], o = l[2], h = l[3], f = l[4], u = l[5], i = l[6], a = l[7], D = 0; D < 64; D += 1)A[D] = D < 16 ? n[D + c] : x(x(x(w(C = A[D - 2], 17) ^ w(C, 19) ^ C >>> 10, A[D - 7]), w(B = A[D - 15], 7) ^ w(B, 18) ^ B >>> 3), A[D - 16]), C = x(x(x(x(a, w(f, 6) ^ w(f, 11) ^ w(f, 25)), f & u ^ ~f & i), s[D]), A[D]), B = x(w(e, 2) ^ w(e, 13) ^ w(e, 22), e & r ^ e & o ^ r & o), a = i, i = u, u = f, f = x(h, C), h = o, o = r, r = e, e = x(C, B); l[0] = x(e, l[0]), l[1] = x(r, l[1]), l[2] = x(o, l[2]), l[3] = x(h, l[3]), l[4] = x(f, l[4]), l[5] = x(u, l[5]), l[6] = x(i, l[6]), l[7] = x(a, l[7]) } return l } this.hex = function (n) { return c(r(n, f)) }, this.b64 = function (n) { return E(r(n, f), e) }, this.any = function (n, t) { return F(r(n, f), t) }, this.raw = function (n) { return r(n, f) }, this.hex_hmac = function (n, t) { return c(o(n, t)) }, this.b64_hmac = function (n, t) { return E(o(n, t), e) }, this.any_hmac = function (n, t, e) { return F(o(n, t), e) }, this.vm_test = function () { return "900150983cd24fb0d6963f7d28e17f72" === hex("abc").toLowerCase() }, this.setUpperCase = function (n) { return "boolean" == typeof n && 0, this }, this.setPad = function (n) { return e = n || e, this }, this.setUTF8 = function (n) { return "boolean" == typeof n && (f = n), this }, s = [1116352408, 1899447441, -1245643825, -373957723, 961987163, 1508970993, -1841331548, -1424204075, -670586216, 310598401, 607225278, 1426881987, 1925078388, -2132889090, -1680079193, -1046744716, -459576895, -272742522, 264347078, 604807628, 770255983, 1249150122, 1555081692, 1996064986, -1740746414, -1473132947, -1341970488, -1084653625, -958395405, -710438585, 113926993, 338241895, 666307205, 773529912, 1294757372, 1396182291, 1695183700, 1986661051, -2117940946, -1838011259, -1564481375, -1474664885, -1035236496, -949202525, -778901479, -694614492, -200395387, 275423344, 430227734, 506948616, 659060556, 883997877, 958139571, 1322822218, 1537002063, 1747873779, 1955562222, 2024104815, -2067236844, -1933114872, -1866530822, -1538233109, -1090935817, -965641998] }, SHA512: function (n) { n && "boolean" == typeof n.uppercase && n.uppercase; var O, e = n && "string" == typeof n.pad ? n.pad : "=", f = !n || "boolean" != typeof n.utf8 || n.utf8; function r(n) { return i(u(D(n = f ? a(n) : n), 8 * n.length)) } function o(n, t) { n = f ? a(n) : n, t = f ? a(t) : t; var e = 0, r = D(n), o = Array(32), h = Array(32); for (32 < r.length && (r = u(r, 8 * n.length)); e < 32; e += 1)o[e] = 909522486 ^ r[e], h[e] = 1549556828 ^ r[e]; return t = u(o.concat(D(t)), 1024 + 8 * t.length), i(u(h.concat(t), 1536)) } function u(n, t) { var e, r, o, h, f, u, i, a, c, D, B, C, l, A, s, w = new Array(80), F = new Array(16), E = [new R(1779033703, -205731576), new R(-1150833019, -2067093701), new R(1013904242, -23791573), new R(-1521486534, 1595750129), new R(1359893119, -1377402159), new R(-1694144372, 725511199), new R(528734635, -79577749), new R(1541459225, 327033209)], g = new R(0, 0), d = new R(0, 0), p = new R(0, 0), y = new R(0, 0), b = new R(0, 0), m = new R(0, 0), v = new R(0, 0), x = new R(0, 0), _ = new R(0, 0), S = new R(0, 0), U = new R(0, 0), j = new R(0, 0), M = new R(0, 0), T = new R(0, 0), P = new R(0, 0), H = new R(0, 0), L = new R(0, 0); for (void 0 === O && (O = [new R(1116352408, -685199838), new R(1899447441, 602891725), new R(-1245643825, -330482897), new R(-373957723, -2121671748), new R(961987163, -213338824), new R(1508970993, -1241133031), new R(-1841331548, -1357295717), new R(-1424204075, -630357736), new R(-670586216, -1560083902), new R(310598401, 1164996542), new R(607225278, 1323610764), new R(1426881987, -704662302), new R(1925078388, -226784913), new R(-2132889090, 991336113), new R(-1680079193, 633803317), new R(-1046744716, -815192428), new R(-459576895, -1628353838), new R(-272742522, 944711139), new R(264347078, -1953704523), new R(604807628, 2007800933), new R(770255983, 1495990901), new R(1249150122, 1856431235), new R(1555081692, -1119749164), new R(1996064986, -2096016459), new R(-1740746414, -295247957), new R(-1473132947, 766784016), new R(-1341970488, -1728372417), new R(-1084653625, -1091629340), new R(-958395405, 1034457026), new R(-710438585, -1828018395), new R(113926993, -536640913), new R(338241895, 168717936), new R(666307205, 1188179964), new R(773529912, 1546045734), new R(1294757372, 1522805485), new R(1396182291, -1651133473), new R(1695183700, -1951439906), new R(1986661051, 1014477480), new R(-2117940946, 1206759142), new R(-1838011259, 344077627), new R(-1564481375, 1290863460), new R(-1474664885, -1136513023), new R(-1035236496, -789014639), new R(-949202525, 106217008), new R(-778901479, -688958952), new R(-694614492, 1432725776), new R(-200395387, 1467031594), new R(275423344, 851169720), new R(430227734, -1194143544), new R(506948616, 1363258195), new R(659060556, -544281703), new R(883997877, -509917016), new R(958139571, -976659869), new R(1322822218, -482243893), new R(1537002063, 2003034995), new R(1747873779, -692930397), new R(1955562222, 1575990012), new R(2024104815, 1125592928), new R(-2067236844, -1578062990), new R(-1933114872, 442776044), new R(-1866530822, 593698344), new R(-1538233109, -561857047), new R(-1090935817, -1295615723), new R(-965641998, -479046869), new R(-903397682, -366583396), new R(-779700025, 566280711), new R(-354779690, -840897762), new R(-176337025, -294727304), new R(116418474, 1914138554), new R(174292421, -1563912026), new R(289380356, -1090974290), new R(460393269, 320620315), new R(685471733, 587496836), new R(852142971, 1086792851), new R(1017036298, 365543100), new R(1126000580, -1676669620), new R(1288033470, -885112138), new R(1501505948, -60457430), new R(1607167915, 987167468), new R(1816402316, 1246189591)]), r = 0; r < 80; r += 1)w[r] = new R(0, 0); for (n[t >> 5] |= 128 << 24 - (31 & t), n[31 + (t + 128 >> 10 << 5)] = t, o = n.length, r = 0; r < o; r += 32) { for (K(p, E[0]), K(y, E[1]), K(b, E[2]), K(m, E[3]), K(v, E[4]), K(x, E[5]), K(_, E[6]), K(S, E[7]), e = 0; e < 16; e += 1)w[e].h = n[r + 2 * e], w[e].l = n[r + 2 * e + 1]; for (e = 16; e < 80; e += 1)I(P, w[e - 2], 19), N(H, w[e - 2], 29), V(L, w[e - 2], 6), j.l = P.l ^ H.l ^ L.l, j.h = P.h ^ H.h ^ L.h, I(P, w[e - 15], 1), I(H, w[e - 15], 8), V(L, w[e - 15], 7), U.l = P.l ^ H.l ^ L.l, U.h = P.h ^ H.h ^ L.h, D = w[e], B = w[e - 7], C = w[e - 16], s = A = l = void 0, l = (65535 & j.l) + (65535 & B.l) + (65535 & U.l) + (65535 & C.l), A = (j.l >>> 16) + (B.l >>> 16) + (U.l >>> 16) + (C.l >>> 16) + (l >>> 16), s = (65535 & j.h) + (65535 & B.h) + (65535 & U.h) + (65535 & C.h) + (A >>> 16), C = (j.h >>> 16) + (B.h >>> 16) + (U.h >>> 16) + (C.h >>> 16) + (s >>> 16), D.l = 65535 & l | A << 16, D.h = 65535 & s | C << 16; for (e = 0; e < 80; e += 1)M.l = v.l & x.l ^ ~v.l & _.l, M.h = v.h & x.h ^ ~v.h & _.h, I(P, v, 14), I(H, v, 18), N(L, v, 9), j.l = P.l ^ H.l ^ L.l, j.h = P.h ^ H.h ^ L.h, I(P, p, 28), N(H, p, 2), N(L, p, 7), U.l = P.l ^ H.l ^ L.l, U.h = P.h ^ H.h ^ L.h, T.l = p.l & y.l ^ p.l & b.l ^ y.l & b.l, T.h = p.h & y.h ^ p.h & b.h ^ y.h & b.h, h = g, f = O[e], u = w[e], c = a = i = void 0, i = (65535 & S.l) + (65535 & j.l) + (65535 & M.l) + (65535 & f.l) + (65535 & u.l), a = (S.l >>> 16) + (j.l >>> 16) + (M.l >>> 16) + (f.l >>> 16) + (u.l >>> 16) + (i >>> 16), c = (65535 & S.h) + (65535 & j.h) + (65535 & M.h) + (65535 & f.h) + (65535 & u.h) + (a >>> 16), u = (S.h >>> 16) + (j.h >>> 16) + (M.h >>> 16) + (f.h >>> 16) + (u.h >>> 16) + (c >>> 16), h.l = 65535 & i | a << 16, h.h = 65535 & c | u << 16, k(d, U, T), K(S, _), K(_, x), K(x, v), k(v, m, g), K(m, b), K(b, y), K(y, p), k(p, g, d); k(E[0], E[0], p), k(E[1], E[1], y), k(E[2], E[2], b), k(E[3], E[3], m), k(E[4], E[4], v), k(E[5], E[5], x), k(E[6], E[6], _), k(E[7], E[7], S) } for (r = 0; r < 8; r += 1)F[2 * r] = E[r].h, F[2 * r + 1] = E[r].l; return F } function R(n, t) { this.h = n, this.l = t } function K(n, t) { n.h = t.h, n.l = t.l } function I(n, t, e) { n.l = t.l >>> e | t.h << 32 - e, n.h = t.h >>> e | t.l << 32 - e } function N(n, t, e) { n.l = t.h >>> e | t.l << 32 - e, n.h = t.l >>> e | t.h << 32 - e } function V(n, t, e) { n.l = t.l >>> e | t.h << 32 - e, n.h = t.h >>> e } function k(n, t, e) { var r = (65535 & t.l) + (65535 & e.l), o = (t.l >>> 16) + (e.l >>> 16) + (r >>> 16), h = (65535 & t.h) + (65535 & e.h) + (o >>> 16), e = (t.h >>> 16) + (e.h >>> 16) + (h >>> 16); n.l = 65535 & r | o << 16, n.h = 65535 & h | e << 16 } this.hex = function (n) { return c(r(n)) }, this.b64 = function (n) { return E(r(n), e) }, this.any = function (n, t) { return F(r(n), t) }, this.raw = r, this.hex_hmac = function (n, t) { return c(o(n, t)) }, this.b64_hmac = function (n, t) { return E(o(n, t), e) }, this.any_hmac = function (n, t, e) { return F(o(n, t), e) }, this.vm_test = function () { return "900150983cd24fb0d6963f7d28e17f72" === hex("abc").toLowerCase() }, this.setUpperCase = function (n) { return "boolean" == typeof n && 0, this }, this.setPad = function (n) { return e = n || e, this }, this.setUTF8 = function (n) { return "boolean" == typeof n && (f = n), this } }, RMD160: function (n) { n && "boolean" == typeof n.uppercase && n.uppercase; var e = n && "string" == typeof n.pad ? n.pa : "=", f = !n || "boolean" != typeof n.utf8 || n.utf8, p = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 7, 4, 13, 1, 10, 6, 15, 3, 12, 0, 9, 5, 2, 14, 11, 8, 3, 10, 14, 4, 9, 15, 8, 1, 2, 7, 0, 6, 13, 11, 5, 12, 1, 9, 11, 10, 0, 8, 12, 4, 13, 3, 7, 15, 14, 5, 6, 2, 4, 0, 5, 9, 7, 12, 2, 10, 14, 1, 3, 8, 11, 6, 15, 13], y = [5, 14, 7, 0, 9, 2, 11, 4, 13, 6, 15, 8, 1, 10, 3, 12, 6, 11, 3, 7, 0, 13, 5, 10, 14, 15, 8, 12, 4, 9, 1, 2, 15, 5, 1, 3, 7, 14, 6, 9, 11, 8, 12, 2, 10, 0, 4, 13, 8, 6, 4, 1, 3, 11, 15, 0, 5, 12, 2, 13, 9, 7, 10, 14, 12, 15, 10, 4, 1, 5, 8, 7, 6, 2, 13, 14, 0, 3, 9, 11], b = [11, 14, 15, 12, 5, 8, 7, 9, 11, 13, 14, 15, 6, 7, 9, 8, 7, 6, 8, 13, 11, 9, 7, 15, 7, 12, 15, 9, 11, 7, 13, 12, 11, 13, 6, 7, 14, 9, 13, 15, 14, 8, 13, 6, 5, 12, 7, 5, 11, 12, 14, 15, 14, 15, 9, 8, 9, 14, 5, 6, 8, 6, 5, 12, 9, 15, 5, 11, 6, 8, 13, 12, 5, 12, 13, 14, 11, 8, 5, 6], m = [8, 9, 9, 11, 13, 15, 15, 5, 7, 7, 8, 11, 14, 14, 12, 6, 9, 13, 15, 7, 12, 8, 9, 11, 7, 7, 12, 7, 6, 15, 13, 11, 9, 7, 15, 11, 8, 6, 6, 14, 12, 13, 5, 14, 13, 13, 7, 5, 15, 5, 8, 11, 14, 14, 6, 14, 6, 9, 12, 9, 12, 5, 15, 8, 8, 5, 12, 9, 12, 5, 14, 6, 8, 13, 6, 5, 15, 13, 11, 11]; function r(n) { return u(i(s(n = f ? a(n) : n), 8 * n.length)) } function o(n, t) { n = f ? a(n) : n, t = f ? a(t) : t; var e, r = s(n), o = Array(16), h = Array(16); for (16 < r.length && (r = i(r, 8 * n.length)), e = 0; e < 16; e += 1)o[e] = 909522486 ^ r[e], h[e] = 1549556828 ^ r[e]; return t = i(o.concat(s(t)), 512 + 8 * t.length), u(i(h.concat(t), 672)) } function u(n) { for (var t = "", e = 32 * n.length, r = 0; r < e; r += 8)t += String.fromCharCode(n[r >> 5] >>> r % 32 & 255); return t } function i(n, t) { var e, r, o, h, f, u, i, a, c, D, B, C, l, A, s, w = 1732584193, F = 4023233417, E = 2562383102, g = 271733878, d = 3285377520; for (n[t >> 5] |= 128 << t % 32, n[14 + (t + 64 >>> 9 << 4)] = t, h = n.length, o = 0; o < h; o += 16) { for (f = D = w, u = B = F, i = C = E, a = l = g, c = A = d, r = 0; r <= 79; r += 1)e = x(f, v(r, u, i, a)), e = x(e, n[o + p[r]]), e = x(e, 0 <= (s = r) && s <= 15 ? 0 : 16 <= s && s <= 31 ? 1518500249 : 32 <= s && s <= 47 ? 1859775393 : 48 <= s && s <= 63 ? 2400959708 : 64 <= s && s <= 79 ? 2840853838 : "rmd160_K1: j out of range"), e = x(_(e, b[r]), c), f = c, c = a, a = _(i, 10), i = u, u = e, e = x(D, v(79 - r, B, C, l)), e = x(e, n[o + y[r]]), e = x(e, 0 <= (s = r) && s <= 15 ? 1352829926 : 16 <= s && s <= 31 ? 1548603684 : 32 <= s && s <= 47 ? 1836072691 : 48 <= s && s <= 63 ? 2053994217 : 64 <= s && s <= 79 ? 0 : "rmd160_K2: j out of range"), e = x(_(e, m[r]), A), D = A, A = l, l = _(C, 10), C = B, B = e; e = x(F, x(i, l)), F = x(E, x(a, A)), E = x(g, x(c, D)), g = x(d, x(f, B)), d = x(w, x(u, C)), w = e } return [w, F, E, g, d] } function v(n, t, e, r) { return 0 <= n && n <= 15 ? t ^ e ^ r : 16 <= n && n <= 31 ? t & e | ~t & r : 32 <= n && n <= 47 ? (t | ~e) ^ r : 48 <= n && n <= 63 ? t & r | e & ~r : 64 <= n && n <= 79 ? t ^ (e | ~r) : "rmd160_f: j out of range" } this.hex = function (n) { return c(r(n)) }, this.b64 = function (n) { return E(r(n), e) }, this.any = function (n, t) { return F(r(n), t) }, this.raw = r, this.hex_hmac = function (n, t) { return c(o(n, t)) }, this.b64_hmac = function (n, t) { return E(o(n, t), e) }, this.any_hmac = function (n, t, e) { return F(o(n, t), e) }, this.vm_test = function () { return "900150983cd24fb0d6963f7d28e17f72" === hex("abc").toLowerCase() }, this.setUpperCase = function (n) { return "boolean" == typeof n && 0, this }, this.setPad = function (n) { return void 0 !== n && (e = n), this }, this.setUTF8 = function (n) { return "boolean" == typeof n && (f = n), this } } }, t = this, e = !1, "object" != typeof exports || (e = exports) && "object" == typeof global && global && global === global.global && (t = global), "function" == typeof define && "object" == typeof define.amd && define.amd ? define(function () { return n }) : e ? "object" == typeof module && module && module.exports === e ? module.exports = n : e.Hashes = n : t.Hashes = n }();
    var getCookie = function (e) { for (var a = e + "=", t = document.cookie.split(";"), s = 0; s < t.length; s++)for (var n = t[s]; " " == n.charAt(0);)if (-1 != (n = n.substring(1)).indexOf(a)) return n.substring(a.length, n.length); return "" }, processEmail = function (e) { var a, t = {}, s = [], n = /\s+/g, o = { dotReplace: /\.(?=.*?@gmail\.com)/, aliasReplace: /\+[^)]*@/ }; return (e = e.length && (-1 < e.indexOf("@example.com") || -1 < e.indexOf("@test.com") || "test@gmail.com" == e || "testing@gmail.com" == e || "tester@gmail.com" == e) ? "" : e).length && (e = (e = e.replace(n, "")).toLowerCase(), new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/).test(e) && (-1 < e.indexOf("@gmail.com") && (e = (e = e.replace(o.dotReplace, "")).replace(o.aliasReplace, "@")), a = new Hashes.MD5, n = new Hashes.SHA1, o = new Hashes.SHA256, t.md5 = a.hex(e), t.sha1 = n.hex(e), t.sha256 = o.hex(e), s = [t.md5, t.sha1, t.sha256])), s }; window.startAts = function (e) { var a, t, s; window.globalcfg.lr && (JSON.parse(window.globalcfg.isEU_User) || (a = processEmail(e), t = getCookie("usprivacy"), (e = document.createElement("script")).src = "../ats.rlcdn.com/ats.js", s = { placementID: 13401, rootDomain: "signupgenius.com", ccpaConsentString: t, emailHashes: a }, window.globalcfg.isTest && (s.logging = "debug"), e.onload = function () { window.ats.start(s) }, document.body.appendChild(e))) };


  </script>
</head>

<body>

 @include('slot/layout.header')
  <script>
    $('.nav-dropdown-menu').on('show.bs.dropdown', function () {
      $('.mainbody').addClass('open-horizontal');
    });
    $('.nav-dropdown-menu').on('hide.bs.dropdown', function () {
      $('.mainbody').removeClass('open-horizontal');
    });
  </script>


  <script>
    $(document).ready(function () {
      // IE jiggle the handle
      var triggerTopNav = $("#trigger-top-nav");
      var triggerBottomNav = $("#trigger-bottom-nav");
      triggerTopNav.on('click', function () {
        setTimeout(function () {
          $(".dropdown-menu li a", "header").css("opacity", ".99");
        }, 60);
        setTimeout(function () {
          $(".dropdown-menu li a", "header").css("opacity", "1");
        }, 100);
      });
      triggerBottomNav.on('click', function () {
        setTimeout(function () {
          $("ul li a", "#collapseFooter").css("opacity", ".99");
        }, 60);
        setTimeout(function () {
          $("ul li a", "#collapseFooter").css("opacity", "1");
        }, 100);
      });

      // iOS jiggle the handle
      var iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
      if (iOS) {
        setTimeout(function () {
          $('.overlay').css('display', "none");
        }, 500);
        setTimeout(function () {
          $('.overlay').css('display', "");
        }, 1000);
      }
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function () {
      if (!window.sugConvExp) {
        $('.hero-header--large-background').css('visibility', 'visible');
      }
    });
  </script>
  <div class="mainbody">




    <div class="spacer-sm"></div>
    <div class="container">

      <div id="protoolsbar" class="member-blocks--sidebar no-print">
        

      </div>
      <div class="tabs-left">

        <div class="tab-content">

        


          <div class="tab-pane active" id="b">
            <div class="member-blocks--maincontent-narrow">


              <div>
                <style class="ng-binding">
                  .col-signup-width {
                    width: calc(100% - 190px);
                  }
                </style>

                <div class="row">

                  <div class="col-xs-12">
                    <div class="row">
                      <div class="col-xs-12">

                        <div class="row">
                          <ol class="breadcrumb ng-isolate-scope" sug-breadcrumb="breadcrumbs">
                            <li data-ng-repeat="crumb in sugBreadcrumb" data-ng-class="{active: crumb.active}"
                              class="ng-scope">
                              <a data-ng-if="crumb.href !== ''" href="/index.cfm?go=t.mygroups#/"
                                class="ng-binding ng-scope">Groups</a>

                            </li>
                            <li data-ng-repeat="crumb in sugBreadcrumb" data-ng-class="{active: crumb.active}"
                              class="ng-scope active">

                              <span data-ng-if="crumb.href === ''" class="ng-binding ng-scope">Manage</span>
                            </li>
                          </ol>
                        </div>
                        <h1 class="hrow ng-binding">Groups <a href="" data-ng-click="showHelp()"
                            data-ng-show="str.helpTitle.length || str.helpBody.length" popover="Help"
                            popover-placement="top" popover-trigger="mouseenter" popover-popup-delay="300"
                            class="ng-scope ng-hide"><span class="glyphicon glyphicon-question-sign helpme"></span></a>
                        </h1>
                        <p data-ng-show="str.pageDescr" class="ng-binding">Use this area to
                          manage your email groups. To send emails to these groups, go to
                          "Messages."</p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-12">
                        
                        <div data-ng-view="" class="ng-scope">
                          <div class="row ng-scope">
                            <div class="col-xs-12">
                              <div class="row gridHeading">
                                <div class="col-xs-5">
                                  <h2 class="hrow pull-left fade-in ng-binding">My
                                    Groups</h2>
                                  <div class="dropdown dropdown-inline pull-left groupsSettings">
                                    <a href="" class="dropdown-toggle ng-scope" data-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false" popover="Settings"
                                      popover-placement="top" popover-trigger="mouseenter" popover-popup-delay="300">
                                      <span class="glyphicon glyphicon-cog subtext"></span>
                                    </a>
                                    <ul class="dropdown-menu settingsOption" data-ng-click="dropDownClickEvent($event)">
                                      <li>
                                        <div class="h2 ng-binding">Sort By:
                                        </div>
                                      </li>
                                      <li>
                                        <input type="radio" name="sortBy" id="sortByCommunityId"
                                          data-ng-model="frmObj.orderColumn" value="community"
                                          class="css-radio-mini ng-pristine ng-untouched ng-valid ng-not-empty">
                                        <label for="sortByCommunityId" class="radio-css-label-mini ng-binding">Group
                                          Name</label>
                                      </li>
                                      <li>
                                        <input type="radio" name="sortBy" id="sortByMemberCount"
                                          data-ng-model="frmObj.orderColumn" value="membercount"
                                          class="css-radio-mini ng-pristine ng-untouched ng-valid ng-not-empty">
                                        <label for="sortByMemberCount"
                                          class="radio-css-label-mini ng-binding">Members</label>
                                      </li>
                                      <li>
                                        <input type="radio" name="sortBy" id="sortByListCount"
                                          data-ng-model="frmObj.orderColumn" value="listcount"
                                          class="css-radio-mini ng-pristine ng-untouched ng-valid ng-not-empty">
                                        <label for="sortByListCount" class="radio-css-label-mini ng-binding">Sign
                                          Ups</label>
                                      </li>
                                      <li>
                                        <div class="spacer-sm"></div>
                                      </li>
                                      <li>
                                        <div class="form-horizontal">
                                          <div class="form-group">
                                            <label class="col-xs-6 text-left control-label ng-binding"
                                              for="sortDirectionId">Sort
                                              Order: </label>
                                            <div class="col-xs-6">
                                              <select name="sortDirection" id="sortDirectionId"
                                                data-ng-model="frmObj.direction"
                                                class="form-control ng-pristine ng-untouched ng-valid ng-not-empty"
                                                data-ng-options="o.value as o.label for o in sortOptions">
                                                <option label="ASC" value="boolean:false" selected="selected">
                                                  ASC</option>
                                                <option label="DESC" value="boolean:true">
                                                  DESC</option>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="form-horizontal">
                                          <div class="form-group">
                                            <label class="col-xs-6 text-left control-label ng-binding"
                                              for="numPerPageId">Items Per
                                              Page: </label>
                                            <div class="col-xs-6">
                                              <input name="numPerPage" id="numPerPageId"
                                                data-ng-model="frmObj.numPerPage"
                                                class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength ng-not-empty"
                                                maxlength="3">
                                            </div>
                                          </div>
                                        </div>
                                      </li>
                                      <li>
                                        <span class="btn btn-success btn-block text-white ng-binding"
                                          title="Save Settings"> <span
                                            class="glyphicon glyphicon-floppy-disk text-white"
                                            title="Save Settings"></span>
                                          Save</span>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="col-xs-4">
                                  <div class="gridHeadingElement">
                              
                                  </div>
                                </div>
                                <div class="col-xs-3">
                                  <div class="gridHeadingElement">
                                   
                                   
                                  </div>
                                </div>
                              </div>
                           
                             
                              <div class="row">
                                <div class="col-xs-12">
                                  <table class="table table-hover table-striped sTable">
                                    <thead>
                                      <tr>
                                        <th class="tcell no-wrap width-50">
                                         
                                            <strong class="ng-binding">Group
                                              Name <span ></span></strong>
                                         
                                        </th>
                                        <th class="tcell no-wrap centered">
                                         
                                            <strong class="ng-binding">Date
                                            </strong>
                                          
                                        </th>
                                        <th class="tcell no-wrap centered">
                                          
                                            <strong class="ng-binding">Members
                                            </strong>
                                          
                                        </th>
                                     
                                      </tr>
                                    </thead>
                                    <tbody data-ng-if="myGroupsFiltered.length > 0" class="ng-scope">
                                    
                                      <tr class="ng-scope">
                                     
                                        <td class="tcell tfirst enforce-wrap ng-binding">
                                        
                                          
                                          <td class="tcell tfirst enforce-wrap ng-binding">
                                          
                                        <td class="tcell icon">
                                          <div class="icon-badged ng-scope" popover="There are 3 members in this group"
                                            popover-placement="top" popover-trigger="mouseenter"
                                            popover-popup-delay="300">
                                            <span class="glyphicon glyphicon-user table-icon mono no-hover"
                                              alt="There are 3 members in this group"></span><span
                                              class="badge ng-binding"></span>
                                          </div>
                                          {{-- <div class="icon-badged ng-scope"></div> --}}
                                        </td>
                                        <td class="tcell icon">
                                          <div class="icon-badged ng-scope"
                                            popover="There is 1 sign up using this group" popover-placement="top"
                                            popover-trigger="mouseenter" popover-popup-delay="300">
                                            
                                            <a href="{{url(('share/'.$code.'/'.))}}"><i class="fas fa-share"></i></a>
                                          </div>
                                        </td>
                                   
                                       
                                      </tr>
                                      
                                    </tbody>

                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>


              <noscript>
                <div class="row">
                  <div class="col-xs-12">
                    <h1>Disabled JavaScript</h1>
                    <br />
                    <p>JavaScript is currently disabled on your browser. Our application requires
                      JavaScript to properly function.</p>
                    <p>Here are instructions on how you can enable JavaScript on your browser.</p>

                    <h3>Chrome:</h3>
                    <ul>
                      <li>On the upper right-hand corner of the browser, click on the
                        "<b>Customize and control Google Chrome</b>" (three vertical line,
                        a.k.a. 'humberger menu') and select "<b>Settings</b>".</li>
                      <li>In the "<b>Settings</b>" page, locate and click on the "<b>Show advanced
                          settings...</b>" link (typically at the very bottom of the page).
                      </li>
                      <li>The advance settings are shown. Under the the "<b>Privacy</b>" section,
                        locate and click on the "<b>Content settings...</b>" button.</li>
                      <li>The Content Settings dialog window opens. Under the "<b>JavaScript</b>"
                        section, select "<b>Allow all sites to run JavaScript
                          (recommended)</b>".
                      <li>Click on the "Done" button to save the settings and close the dialog
                        window.
                      <li>You may close the "Settings" tab and reload the SignUpGenius
                        application.</li>
                    </ul>
                    <h3>FireFox:</h3>
                    <ul>
                      <li>Open a new tab and in the address bar, enter the following:
                        <b>about:config</b> and press Enter.
                      </li>
                      <li>If a warning message is displayed "This might void your warranty!",
                        click "<b>I'll be careful, I promise!</b>" button. </li>
                      <li>This will take you to the browser configuration menu. In the Search
                        input, type <b>javascript.enabled</b>. </li>
                      <li>Select the line record at exactly match "<b>javascript.enabled</b>" -
                        under the "Value" column, it should be "<b>false</b>". Double-click the
                        selected row to toggle and enable JavaScript. Verify that the Value
                        should now be set to "<b>true</b>".</li>
                      <li>You may close the configuration tab and reload the SignUpGenius
                        application.</li>
                    </ul>
                    <h3>Internet Explorer (IE):</h3>
                    <ul>
                      <li>Open a new tab and on the upper right-hand corner of the browser, click
                        "<b>Tools</b>" icon (cog or a rotary icon) and select "<b>Internet
                          Options</b>".
                      <li>The Internet Options dialog window will be displayed.
                        Under the "<b>Internet Options</b>" window select the "<b>Security</b>"
                        tab.</li>
                      <li>Within the "<b>Security</b>" locate and click the "<b>Custom
                          level...</b>" button.</li>
                      <li>Another dialog window will be displayed. Within the "<b>Security
                          Settings - Internet Zone</b>" window, look for the
                        "<b>Scripting</b>" section (should be towards the bottom).</li>
                      <li>Under the "<b>Scripting</b>" section, locate "<b>Active Scripting</b>"
                        item then select "<b>Enable</b>".</li>
                      <li>If a "<b>Warning!</b>" window pops up, select "Yes". Click "OK" to save
                        and close the dialog windows.</li>
                      <li>You may then reload the SignUpGenius application.</li>
                    </ul>
                    <h3>Safari:</h3>
                    <ul>
                      <li>In the Safari menu, click on the "<b>Safari</b>" and select
                        "<b>Preferences</b>".</li>
                      <li>The "<b>Preferences</b>" window is displayed. Locate and select
                        "<b>Security</b>" tab.</li>
                      <li>Under the "<b>Security</b>" tab, locate the "<b>Web content</b>" section
                        and check the "<b>Enable JavaScript</b>" option.</li>
                      <li>Close the "<b>Preferences</b>" window, and reload the SignUpGenius
                        application.</li>
                    </ul>
                    <h3>If you are not using any of the above browsers:</h3>
                    <ul>
                      <li><a href="/help" target="_blank">Contact</a> our support team, we'll be
                        glad to help you!</li>
                    </ul>
                  </div>
                </div>
              </noscript>

            </div>
          </div>

          <div class="tab-pane" id="d">
            <div class="member-blocks--maincontent-narrow">



              <script type="text/javascript" src="slot/plugins/jquery-1.7.2.min.js"></script>
              <script src="slot/plugins/jquery-ui-1.8.16.custom.min.js" type="text/javascript"
                language="Javascript"></script>
              <link href="slot/css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css">



              <script>

                $(function () {
                  $('.noFlashHide').css({ 'display': 'block' });
                  $("#quickBox").dialog({ autoOpen: false, width: 500, modal: true, resizable: false });
                  quickClose();
                });
                function quickPop(urlString, strFormData, boxtitle) {
                  $('#quickBox').load(urlString, strFormData);
                  $('#quickBox').dialog('option', 'title', boxtitle);
                  $("#quickBox").dialog('option', 'close', function () {
                    window.location.reload();
                  });
                  $('#quickBox').dialog('open').height('auto');
                }
                function quickClose() {
                  $('#quickBox').dialog('close');
                }

                $("#quickBox").dialog({
                  open: function (event, ui) {
                    $('#divCloseDialog').load('', function () {
                      $('#quickBox').dialog('close');
                    });

                    $('#linkInDialog').load('', function () {
                    })

                  }
                });


              </script>



              <h1>Reports</h1>

              <div class="row">
                <div class="col-sm-12">
                  <ul class="nav nav-tabs" role="tablist" style="font-size:11pt !important;">
                    <li class="tablinks active"  onclick="openCity(event, 'tabb1')"><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Sign Ups</a></li>
                    <li class="tablinks"  onclick="openCity(event, 'tabb2')"><a href="#"><span class="glyphicon glyphicon-stats"></span>
                        Stats</a></li>
                    <li class="tablinks"  onclick="openCity(event, 'tabb3')"><a href="#"><span class="glyphicon glyphicon-user"></span>
                        Volunteers</a></li>

                  </ul>
                </div>
              </div>
              <script language="JavaScript">


                var datePickerDivID = "datepicker";
                var iFrameDivID = "datepickeriframe";

                var dayArrayShort = new Array('Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa');
                var dayArrayMed = new Array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
                var dayArrayLong = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
                var monthArrayShort = new Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
                var monthArrayMed = new Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
                var monthArrayLong = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');


                var defaultDateSeparator = "/";
                var defaultDateFormat = "mdy"
                var dateSeparator = defaultDateSeparator;
                var dateFormat = defaultDateFormat;


                function displayDatePicker(dateFieldName, displayBelowThisObject, dtFormat, dtSep) {
                  var targetDateField = document.getElementsByName(dateFieldName).item(0);


                  if (!displayBelowThisObject)
                    displayBelowThisObject = targetDateField;


                  if (dtSep)
                    dateSeparator = dtSep;
                  else
                    dateSeparator = defaultDateSeparator;


                  if (dtFormat)
                    dateFormat = dtFormat;
                  else
                    dateFormat = defaultDateFormat;

                  var x = displayBelowThisObject.offsetLeft;
                  var y = displayBelowThisObject.offsetTop + displayBelowThisObject.offsetHeight;


                  var parent = displayBelowThisObject;
                  while (parent.offsetParent) {
                    parent = parent.offsetParent;
                    x += parent.offsetLeft;
                    y += parent.offsetTop;
                  }

                  var winWidth = window.innerWidth || 1170;
                  if (x + 211 > winWidth)
                    x += -211;

                  drawDatePicker(targetDateField, x, y);
                }


                function drawDatePicker(targetDateField, x, y) {
                  var dt = getFieldDate(targetDateField.value);
                  var dtNow = new Date();


                  if ((dtNow.getFullYear() - dt.getFullYear()) > 5)
                    dt = dtNow;

                  if (!document.getElementById(datePickerDivID)) {

                    var newNode = document.createElement("div");
                    newNode.setAttribute("id", datePickerDivID);
                    newNode.setAttribute("class", "dpDiv");
                    newNode.setAttribute("style", "visibility: hidden;");
                    document.body.appendChild(newNode);
                  }


                  var pickerDiv = document.getElementById(datePickerDivID);
                  pickerDiv.style.position = "absolute";
                  pickerDiv.style.left = x + "px";
                  pickerDiv.style.top = y + "px";
                  pickerDiv.style.visibility = (pickerDiv.style.visibility == "visible" ? "hidden" : "visible");
                  pickerDiv.style.display = (pickerDiv.style.display == "block" ? "none" : "block");
                  pickerDiv.style.zIndex = 10000;


                  refreshDatePicker(targetDateField.name, dt.getFullYear(), dt.getMonth(), dt.getDate());
                }

                function refreshDatePicker(dateFieldName, year, month, day) {

                  var thisDay = new Date();

                  if ((month >= 0) && (year > 0)) {
                    thisDay = new Date(year, month, 1);
                  } else {
                    day = thisDay.getDate();
                    thisDay.setDate(1);
                  }

                  var crlf = "\r\n";
                  var TABLE = "<table cols=7 class='yellowbox rounded'>" + crlf;
                  var xTABLE = "</table>" + crlf;
                  var TR = "<tr class='dpTR'>";
                  var TR_title = "<tr class='dpTitleTR'>";
                  var TR_days = "<tr class='dpDayTR'>";
                  var TR_todaybutton = "<tr class='dpTodayButtonTR'>";
                  var xTR = "</tr>" + crlf;
                  var TD = "<td class='dpTD' onMouseOut='this.className=\"dpTD\";' onMouseOver=' this.className=\"dpTDHover\";' ";    // leave this tag open, because we'll be adding an onClick event
                  var TD_title = "<td colspan=5 class='dpTitleTD' align='center'>";
                  var TD_buttonRight = "<td class='dpButtonTDRight' align='right'>";
                  var TD_buttonLeft = "<td class='dpButtonTDLeft' align='left'>";
                  var TD_todaybutton = "<td colspan=7 class='yellowbox'>";
                  var TD_days = "<td class='dpDayTD'>";
                  var TD_selected = "<td class='dpDayHighlightTD' onMouseOut='this.className=\"dpDayHighlightTD\";' onMouseOver='this.className=\"dpTDHover\";' ";    // leave this tag open, because we'll be adding an onClick event
                  var xTD = "</td>" + crlf;
                  var DIV_title = "<div class='dpTitleText'>";
                  var DIV_selected = "<div class='dpDayHighlight'>";
                  var xDIV = "</div>";


                  var html = TABLE;


                  html += TR_title;
                  html += TD_buttonLeft + getButtonCode(dateFieldName, thisDay, -1, "<span class='glyphicon glyphicon-arrow-left'></span>") + xTD;
                  html += TD_title + DIV_title + monthArrayLong[thisDay.getMonth()] + " " + thisDay.getFullYear() + xDIV + xTD;
                  html += TD_buttonRight + getButtonCode(dateFieldName, thisDay, 1, "<span class='glyphicon glyphicon-arrow-right'></span>") + xTD;
                  html += xTR;


                  html += TR_days;
                  for (i = 0; i < dayArrayShort.length; i++)
                    html += TD_days + dayArrayShort[i] + xTD;
                  html += xTR;


                  html += TR;


                  for (i = 0; i < thisDay.getDay(); i++)
                    html += TD + "&nbsp;" + xTD;


                  do {
                    dayNum = thisDay.getDate();
                    TD_onclick = " onclick=\"updateDateField('" + dateFieldName + "', '" + getDateString(thisDay) + "');\">";

                    if (dayNum == day)
                      html += TD_selected + TD_onclick + DIV_selected + dayNum + xDIV + xTD;
                    else
                      html += TD + TD_onclick + dayNum + xTD;


                    if (thisDay.getDay() == 6)
                      html += xTR + TR;


                    thisDay.setDate(thisDay.getDate() + 1);
                  } while (thisDay.getDate() > 1)


                  if (thisDay.getDay() > 0) {
                    for (i = 6; i > thisDay.getDay(); i--)
                      html += TD + "&nbsp;" + xTD;
                  }
                  html += xTR;


                  var today = new Date();
                  var todayString = "Today is " + dayArrayMed[today.getDay()] + ", " + monthArrayMed[today.getMonth()] + " " + today.getDate();
                  html += TR_todaybutton + TD_todaybutton;
                  html += "<button class='btn btn-default btn-xs' onClick='refreshDatePicker(\"" + dateFieldName + "\");'>Current</button> ";
                  html += "<span class='pull-right'><button class='btn btn-warning btn-xs' onClick='updateDateField(\"" + dateFieldName + "\");'>Close</button></span>";
                  html += xTD + xTR;


                  html += xTABLE;

                  document.getElementById(datePickerDivID).innerHTML = html;

                  adjustiFrame();
                }

                function getButtonCode(dateFieldName, dateVal, adjust, label) {
                  var newMonth = (dateVal.getMonth() + adjust) % 12;
                  var newYear = dateVal.getFullYear() + parseInt((dateVal.getMonth() + adjust) / 12);
                  if (newMonth < 0) {
                    newMonth += 12;
                    newYear += -1;
                  }

                  return "<button class='btn btn-default btn-sm' onClick='refreshDatePicker(\"" + dateFieldName + "\", " + newYear + ", " + newMonth + ");'>" + label + "</button>";
                }

                function getDateString(dateVal) {
                  var dayString = "00" + dateVal.getDate();
                  var monthString = "00" + (dateVal.getMonth() + 1);
                  dayString = dayString.substring(dayString.length - 2);
                  monthString = monthString.substring(monthString.length - 2);

                  switch (dateFormat) {
                    case "dmy":
                      return dayString + dateSeparator + monthString + dateSeparator + dateVal.getFullYear();
                    case "ymd":
                      return dateVal.getFullYear() + dateSeparator + monthString + dateSeparator + dayString;
                    case "mdy":
                    default:
                      return monthString + dateSeparator + dayString + dateSeparator + dateVal.getFullYear();
                  }
                }

                function getFieldDate(dateString) {
                  var dateVal;
                  var dArray;
                  var d, m, y;

                  try {
                    dArray = splitDateString(dateString);
                    if (dArray) {
                      switch (dateFormat) {
                        case "dmy":
                          d = parseInt(dArray[0], 10);
                          m = parseInt(dArray[1], 10) - 1;
                          y = parseInt(dArray[2], 10);
                          break;
                        case "ymd":
                          d = parseInt(dArray[2], 10);
                          m = parseInt(dArray[1], 10) - 1;
                          y = parseInt(dArray[0], 10);
                          break;
                        case "mdy":
                        default:
                          d = parseInt(dArray[1], 10);
                          m = parseInt(dArray[0], 10) - 1;
                          y = parseInt(dArray[2], 10);
                          break;
                      }
                      dateVal = new Date(y, m, d);
                    } else if (dateString) {
                      dateVal = new Date(dateString);
                    } else {
                      dateVal = new Date();
                    }
                  } catch (e) {
                    dateVal = new Date();
                  }

                  return dateVal;
                }

                function splitDateString(dateString) {
                  var dArray;
                  if (dateString.indexOf("/") >= 0)
                    dArray = dateString.split("/");
                  else if (dateString.indexOf(".") >= 0)
                    dArray = dateString.split(".");
                  else if (dateString.indexOf("-") >= 0)
                    dArray = dateString.split("-");
                  else if (dateString.indexOf("\\") >= 0)
                    dArray = dateString.split("\\");
                  else
                    dArray = false;

                  return dArray;
                }


                function updateDateField(dateFieldName, dateString) {
                  var targetDateField = document.getElementsByName(dateFieldName).item(0);
                  if (dateString)
                    targetDateField.value = dateString;

                  var pickerDiv = document.getElementById(datePickerDivID);
                  pickerDiv.style.visibility = "hidden";
                  pickerDiv.style.display = "none";

                  adjustiFrame();
                  targetDateField.focus();


                  if ((dateString) && (typeof (datePickerClosed) == "function"))
                    datePickerClosed(targetDateField);
                }


                function adjustiFrame(pickerDiv, iFrameDiv) {

                  var is_opera = (navigator.userAgent.toLowerCase().indexOf("opera") != -1);
                  if (is_opera)
                    return;


                  try {
                    if (!document.getElementById(iFrameDivID)) {

                      var newNode = document.createElement("iFrame");
                      newNode.setAttribute("id", iFrameDivID);
                      newNode.setAttribute("src", "javascript:false;");
                      newNode.setAttribute("scrolling", "no");
                      newNode.setAttribute("frameborder", "0");
                      document.body.appendChild(newNode);
                    }

                    if (!pickerDiv)
                      pickerDiv = document.getElementById(datePickerDivID);
                    if (!iFrameDiv)
                      iFrameDiv = document.getElementById(iFrameDivID);

                    try {
                      iFrameDiv.style.position = "absolute";
                      iFrameDiv.style.width = pickerDiv.offsetWidth;
                      iFrameDiv.style.height = pickerDiv.offsetHeight;
                      iFrameDiv.style.top = pickerDiv.style.top;
                      iFrameDiv.style.left = pickerDiv.style.left;
                      iFrameDiv.style.zIndex = pickerDiv.style.zIndex - 1;
                      iFrameDiv.style.visibility = pickerDiv.style.visibility;
                      iFrameDiv.style.display = pickerDiv.style.display;
                    } catch (e) {
                    }

                  } catch (ee) {
                  }

                }


              </script>
              <style>
                .yellowbox {
                  background: #fefae0;
                  padding: 10px;
                  border-radius: 5px;
                  -moz-box-shadow: inset 0 0 50px #fcecc0;
                  -webkit-box-shadow: inset 0 0 50px #fcecc0;
                  box-shadow: 4px 4px 2px #999999;
                }

                .rounded {
                  -moz-border-radius: 5px;
                  -webkit-border-radius: 5px;
                  -khtml-border-radius: 5px;
                  border-radius: 5px;
                }


                .dpTable {
                  font-family: Tahoma, Arial, Helvetica, sans-serif;
                  font-size: 12px;
                  text-align: center;
                  color: #505050;
                  background-color: #ece9d8;
                  border: 1px solid #AAAAAA;
                }


                .dpTitleTR {
                  border: 1px solid #ece9d8;
                }


                .dpTodayButtonTR {
                  border: 1px solid #ece9d8;
                }



                .dpTD {
                  border: 1px solid #ece9d8;
                  padding: 4px;
                  text-align: center;
                }



                .dpDayHighlightTD {
                  color: white;
                  background-color: #a8bd0f;
                  border: 1px solid #AAAAAA;
                  text-align: center;
                }



                .dpTDHover {
                  background-color: #aca998;
                  border: 1px solid #888888;
                  cursor: pointer;
                  color: white;
                  font-weight: bold;
                  text-align: center;
                  padding: 4px;
                }



                .dpButtonTDRight {
                  padding-right: 3px;
                  padding-top: 3px;
                  padding-bottom: 3px;
                }

                .dpButtonTDLeft {
                  padding-left: 3px;
                  padding-top: 3px;
                  padding-bottom: 3px;
                }


                .dpDayTD {
                  background-color: #CCCCCC;
                  border: 1px solid #AAAAAA;
                  color: white;
                  text-align: center;
                }



                .dpTitleText {
                  font-size: 16px;
                  color: gray;
                  font-weight: bold;
                }
                .dpDayHighlight {
                  color: 4060ff;
                  font-weight: bold;
                }
                .dpButton {
                  font-family: Verdana, Tahoma, Arial, Helvetica, sans-serif;
                  font-size: 10px;
                  color: gray;
                  background: #d8e8ff;
                  font-weight: bold;
                  padding: 0px;
                }
                .dpTodayButton {
                  font-family: Verdana, Tahoma, Arial, Helvetica, sans-serif;
                  font-size: 10px;
                  color: gray;
                  background: #d8e8ff;
                  font-weight: bold;
                }
              </style>
 Fill out the form below to build a custom report using data from all your sign ups.
<div id="tabb1" class="tabcontent" style="display: block;">
 

  <span class="spacer-sm"></span>
  <form name="myform" id="myform" action="/index.cfm?go=t.ProcessCustomReport" method="POST"
    onsubmit="return _CF_checkmyform(this)" class="ng-pristine ng-valid"><input name="memberid"
      id="memberid" type="hidden" value="128801955"><input name="successpage" id="successpage" type="hidden"
      value="t.CustomReport"><input name="failpage" id="failpage" type="hidden" value="t.Reports">

    <h3>Include the Following Sign Ups:</h3>

    <ul>
      <table cellspacing="0" cellpadding="2">
        <tbody>
          <tr>
            <td class="smalltext" valign="top">


              <input type="checkbox" class="css-checkbox-chkbx-mini" name="listid" id="listid_33404602"
                value="33404602" onclick="checkboxlimit(document.myform.listid, 25);">
              <label for="listid_33404602" class="chkbx-css-label-mini" title="hello">hello</label><br>

              <input type="checkbox" class="css-checkbox-chkbx-mini" name="listid" id="listid_33404627"
                value="33404627" onclick="checkboxlimit(document.myform.listid, 25);">
              <label for="listid_33404627" class="chkbx-css-label-mini" title="vb">vb</label><br>

            </td>
            <td class="smalltext" valign="top">
            </td>
          </tr>

          <tr>
            <td colspan="2">

              <button type="button" name="Reload"
                onclick="window.location='/index.cfm?go=t.reports&amp;memberid=128801955&amp;showall=1&amp;search=1';"
                class="btn btn-default btn-sm">Show Older Sign Ups Also</button>

            </td>
          </tr>

        </tbody>
      </table>
    </ul>

    <h3>Date Range (yyyy-mm-dd):</h3>
    <ul>
      <input type="radio" name="allDates" id="allDates_1" value="1" class="css-radio-mini" checked="">
      <label for="allDates_1" class="radio-css-label-mini">Include all dates from the
        selected sign ups</label><br>
      <input type="radio" name="allDates" id="allDates_0" value="0" class="css-radio-mini">
      <label for="allDates_0" class="radio-css-label-mini">Only include dates on the
        selected sign ups that are between</label>


      <div class="row">
        <div class="col-xs-3">
          <div class="input-group input-group">
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"
                onclick="displayDatePicker('startdate', this, 'ymd', '-');" style="font-size: 12pt;"></span>
            </span>
            <input type="text" class="form-control" name="startdate" size="12" value="2021-11-10">
          </div>
        </div>
        <div class="col-xs-3">
          <div class="input-group input-group">
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"
                onclick="displayDatePicker('enddate', this, 'ymd', '-');" style="font-size: 12pt;"></span>
            </span>
            <input type="text" class="form-control" name="enddate" size="12" value="2022-02-10">
          </div>
        </div>
      </div>

    </ul>

    <h3>Report Style:</h3>
    <ul>
      <span class="smalltext"><span style="color:red;">Note:</span> If you collected phone
        &amp; address information or a custom question, choose the "List of Sign Ups"
        report.<br></span>
      <div class="indentblock">
        <input type="radio" name="style" id="style_count" value="count" class="css-radio-mini" checked="">
        <label for="style_count" class="radio-css-label-mini">Total Sign Up Quantity by
          User</label><br>

        <input type="radio" name="style" id="style_users" value="users" class="css-radio-mini">
        <label for="style_users" class="radio-css-label-mini">List of Users for Export
          to Excel</label><br>

        <input type="radio" name="style" id="style_slots" value="slots" class="css-radio-mini">
        <label for="style_slots" class="radio-css-label-mini">List of Sign Ups for
          Export to Excel</label>


        <div id="showFields" class="indentblock noFlashHide" style="display: block;">
          <div id="reportFieldSelection"></div>
        </div>

      </div>
    </ul>
    <br>
    <button type="button" name="create" class="btn btn-success" onclick="js_submitCustomReport()">Create
      Report</button>
  </form>

</div>

<div id="tabb2" class="tabcontent">
  <form name="myform" id="myform" action="/index.cfm?go=t.ProcessSignupStatsReport" method="POST" onsubmit="return _CF_checkmyform(this)" class="ng-pristine ng-valid"><input name="memberid" id="memberid" type="hidden" value="128801955"><input name="successpage" id="successpage" type="hidden" value="t.SignupStatsReport"><input name="failpage" id="failpage" type="hidden" value="t.SignupStats">

    <strong>Include the Following Signup Forms:</strong>
    
    <ul>
    <table cellspacing="0" cellpadding="2">
      <tbody><tr><td class="smalltext" valign="top">
      
      
          <input type="checkbox" class="css-checkbox-chkbx-mini" name="listid" id="listid_33404602" value="33404602" onclick="checkboxlimit(document.myform.listid, 25);">
          <label for="listid_33404602" class="chkbx-css-label-mini" title="hello">hello</label><br>
          
          <input type="checkbox" class="css-checkbox-chkbx-mini" name="listid" id="listid_33404627" value="33404627" onclick="checkboxlimit(document.myform.listid, 25);">
          <label for="listid_33404627" class="chkbx-css-label-mini" title="vb">vb</label><br>
          
            </td><td class="smalltext" valign="top"> 
      </td>
      </tr>
      
      <tr>
        <td colspan="2">
          <script language="JavaScript">
         
          function checkAll(field) {
            var limit = 25;
            for (i = 0; i < field.length; i++) {
                if (field.length < limit) {
                  field[i].checked = true ;
                } else {
                  alert("You can only select a maximum of "+limit+" sign ups for your report.")
                  this.checked=false
                  break;
                }
  
            }
        }
  
          function uncheckAll(field)
          {
          for (i = 0; i < field.length; i++)
            field[i].checked = false ;
          }
  
          function checkboxlimit(checkgroup, limit){
          var checkgroup=checkgroup
          var limit=limit
          for (var i=0; i<checkgroup.length; i++){
            checkgroup[i].onclick=function(){
            var checkedcount=0
            for (var i=0; i<checkgroup.length; i++)
              checkedcount+=(checkgroup[i].checked)? 1 : 0
            if (checkedcount>limit){
              alert("You can only select a maximum of "+limit+" sign ups for your report.")
              this.checked=false
              }
            }
          }
        }
          //  End -->
          </script>
          <button type="button" name="CheckAll" onclick="checkAll(document.myform.listid)" class="btn btn-default btn-sm">Check All</button>
          <button type="button" name="UnCheckAll" onclick="uncheckAll(document.myform.listid)" class="btn btn-default btn-sm">Uncheck All</button>
          
            <button type="button" name="Reload" onclick="window.location='/index.cfm?go=t.SignupStats&amp;memberid=128801955&amp;showall=1';" class="btn btn-default btn-sm">Show Older Sign Ups Also</button>
          
        </td>
      </tr>
    
    </tbody></table>
    </ul>
    <br>
    <strong>Date Range for Visitor Statistics (yyyy-mm-dd):</strong>
    <ul>
      
      <div class="row">
        <div class="col-xs-3">
          <div class="input-group input-group">
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar" onclick="displayDatePicker('startdate', this, 'ymd', '-');" style="font-size: 12pt;"></span>
             </span>
            <input type="text" class="form-control" name="startdate" size="12" value="2021-12-03">
          </div>
        </div>
        <div class="col-xs-3">
          <div class="input-group input-group">
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar" onclick="displayDatePicker('enddate', this, 'ymd', '-');" style="font-size: 12pt;"></span>
             </span>
            <input type="text" class="form-control" name="enddate" size="12" value="2021-12-10">
          </div>
        </div>
      </div>
      
    
    </ul>
  
    <br>
    <button type="submit" name="submit" class="btn btn-success">Create Stats Report</button>
  
    </form>
</div>
<div id="tabb3" class="tabcontent">
  <div class="panel panel-default">
		<div class="panel-heading">
		<img src="slot/images/PRO-stamp_100.png" height="40" align="center">&nbsp;&nbsp;&nbsp;<strong>This report is available for Pro Gold &amp; Platinum subscribers. <a href="/Pro">Learn more</a>.</strong><br clear="all">
		</div>
	</div>
  <div class="pull-right">
		
    <a href="" title="Family Group Settings">
            <input type="button" value="Set Up Family Group Settings" id="familyGroup" class="btn btn-default btn-sm  disabled" disabled="">
        </a>

</div>
<h2 style="padding-top:0;margin-top:0;">Volunteer Hours Report</h2>


"Calculate the volunteer hours that your members signed up for."
<br>
<br>
<form name="myform" id="myform" action="/index.cfm?go=t.ProcessVolunteerReportSlotWindow" method="POST" onsubmit="return _CF_checkmyform(this)" class="ng-pristine ng-valid"><input name="memberid" id="memberid" type="hidden" value="128801955"><input name="successpage" id="successpage" type="hidden" value="t.VolunteerReport"><input name="failpage" id="failpage" type="hidden" value="t.Volunteer">

  <strong>Include the Following Sign Ups:</strong>
  
  <ul>
  <table cellspacing="0" cellpadding="2">
  <tbody><tr>
    <td class="smalltext" valign="top">
      
      
          
          <input type="checkbox" class="css-checkbox-chkbx-mini" name="listid" id="listid_33404602" value="33404602" onclick="checkboxlimit(document.myform.listid, 25);" disabled="">
          <label for="listid_33404602" class="chkbx-css-label-mini" title="hello">hello</label><br>
          
          
          <input type="checkbox" class="css-checkbox-chkbx-mini" name="listid" id="listid_33404627" value="33404627" onclick="checkboxlimit(document.myform.listid, 25);" disabled="">
          <label for="listid_33404627" class="chkbx-css-label-mini" title="vb">vb</label><br>
          
            </td><td class="smalltext" valign="top"> 
    </td>
  </tr>
  
  <tr>
    <td colspan="2">
    
              
                  <input type="button" name="Reload" value="Show Older Sign Ups Also" onclick="window.location='/index.cfm?go=t.Volunteer&amp;memberid=128801955&amp;showall=1&amp;search=1';" class="btn btn-default btn-sm  disabled" style="font-weight: normal !important;" disabled="">
    
    </td>
  </tr>
  
  </tbody></table>
  </ul>

  <strong>Date Range:</strong>
  <ul>
    
    <input type="radio" name="allDates" value="1" checked="" disabled=""> Include all dates from the selected sign ups<br>
    <input type="radio" name="allDates" value="0" disabled=""> Only include dates on the selected sign ups that are between<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="startdate" size="12" value="2021-10-11" class="smalltext disabled" disabled="">
    <a href="#" onclick="displayDatePicker('startdate', this, 'ymd', '-');"><img src="slot/plugins/datepickerpopcal/cal.gif" width="16" height="16" border="0"></a> and
    <input type="text" name="enddate" size="12" value="2022-02-11" class="smalltext disabled" disabled="">
    <a href="#" onclick="displayDatePicker('enddate', this, 'ymd', '-');"><img src="slot/plugins/datepickerpopcal/cal.gif" width="16" height="16" border="0"></a>
    
  </ul>


  <strong>Volunteer Parameters:</strong><br>
  <div class="indentblock">
  <input type="radio" name="showWho" checked="" value="all" disabled="">Show all users that signed up.<br>
  <input type="radio" name="showWho" value="group" disabled="">Show all users from the group:
   disabled
       <select name="communityID" class="smalltext disabled" style="padding-top:3px; padding-bottom:3px;" disabled=""><option value="">er</option></select>
     
    <br>
    
  <br>

  <input type="checkbox" name="groupByFamily" value="on" disabled=""> Group by Family [Note: You must set up family groupings] <br>
  <input type="checkbox" name="hourLimit" value="true" disabled=""> Only show users that signed up for <select name="moreLess" disabled="" class="disabled"><option value="more">at least</option><option value="Less">less than</option></select> <input type="text" name="totalHours" value="" style="width:25px;" disabled=""> total hours.
  </div>



  
    <div id="showTimes" class="noFlashHide" style="display: block;">

      <div id="reportTimeSelection"></div>

    </div>


  
    <div id="showFields" class="noFlashHide" style="display: block;">

      <div id="reportFieldSelection"></div>

    </div>



  <br>



<input type="button" value="Create Report" class="button btn btn-success disabled" onclick="javascript:void(0);" disabled="">
<br><br>
<div class="panel panel-default">
<div class="panel-heading">
<img src="slot/images/PRO-stamp_100.png" height="40" align="center">&nbsp;&nbsp;&nbsp;<strong>This report is available for Pro Gold &amp; Platinum subscribers. <a href="/Pro">Learn more</a>.</strong><br clear="all">
</div>
</div>
<br><br>

</form>
		
</div>

              <script language="JavaScript">
                $(window).on('beforeunload', function () {
                  $(window).scrollTop(0); // scroll to the top
                });




                function checkAll(field) {
                  for (i = 0; i < field.length; i++)
                    field[i].checked = true;
                }

                function uncheckAll(field) {
                  for (i = 0; i < field.length; i++)
                    field[i].checked = false;
                }

                function toggleCustomFields(maincheck, allchecks) {
                  var a = document.getElementById(maincheck);
                  var b = allchecks.split(',');
                  if (a.checked) {
                    for (var i = 0; i < b.length; i++) {
                      document.getElementById(b[i]).checked = true;
                    }
                  } else {
                    for (var i = 0; i < b.length; i++) {
                      document.getElementById(b[i]).checked = false;
                    }
                  }
                }


                function checkboxlimit(checkgroup, limit) {
                  var checkgroup = checkgroup
                  var limit = limit
                  for (var i = 0; i < checkgroup.length; i++) {
                    checkgroup[i].onclick = function () {
                      var checkedcount = 0
                      for (var i = 0; i < checkgroup.length; i++)
                        checkedcount += (checkgroup[i].checked) ? 1 : 0
                      if (checkedcount > limit) {
                        alert("You can only select a maximum of " + limit + " sign ups for your report.")
                        this.checked = false
                        loadReportFieldSelection()
                      }
                    }
                  }
                }


                function js_submitCustomReport() {

                  var popup = false;
                  var validForm = true;
                  var listChecked = false;

                  for (var i = 0; i < document.myform.style.length; i++) {
                    if (document.myform.style[i].checked && document.myform.style[i].value.toLowerCase() == "slots") {
                      popup = true;
                      break
                    }
                  }



                  if (popup) {



                    var urlString = '/index.cfm?go=t.ProcessCustomReportSlotWindow'
                    var strFormData = $("#myform").serializeArray();

                    quickPop(urlString, strFormData, 'Building Report');

                  } else {
                    document.myform.submit();
                  }

                }



                $(function () {
                  $("input[name=style]").click(function () {
                    if ($(this).val() == 'slots') {
                      $('#showFields').show();
                      loadReportFieldSelection();
                    } else {
                      $('#showFields').hide();
                    }
                  });

                  $('input[name=listid]:checkbox').click(function () {
                    loadReportFieldSelection();
                  });

                });


                function loadReportFieldSelection() {
                  var listIDs = [];
                  $('input[name=listid]:checkbox').each(function () {
                    if ($(this).prop('checked')) {
                      listIDs.push($(this).val());
                    }
                  });
                  if (listIDs.length == 0) {
                    listIDs.push(0);
                  }
                  ColdFusion.navigate('/view/tools/dspReportFieldSelection.cfm?listID=' + listIDs, 'reportFieldSelection');
                  if ($('#style_slots').is(':checked')) {
                    $('#showFields').show();
                  } else {
                    $('#showFields').hide();
                  }
                }


              </script>




            </div>
          </div>
          <div class="tab-pane" id="e">
            <div id="memPgCenter" class="member-blocks--maincontent-wide">



              <script src="slot/js/controllers/tools/proToolsViewController.js" type="text/javascript"></script>
              <script src="slot/js/services/tools/proToolsService.js" type="text/javascript"></script>

              <h1 class="tools-spacing">Tools</h1>
              <style>
                .l-pro-tools--tool:nth-child(2n) {
                  clear: left;
                }
              </style>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="spacer-sm"></div>
                  <p><strong><img src="slot/images/PRO-stamp_100.png" height="40" align="center"> These
                      advanced features are available with premium plans. <a href="/pricing">Learn
                        more</a>.</strong></p>
                </div>
              </div>



              <div class="row ng-scope" ng-controller="proToolsViewController">







                <div ng-init="mpid='128801955'"></div>


                <div class="l-pro-tools--tool">


                  <div class="l-pro-tools--icon disabled">
                    <svg class="pro-tools--svg" data-name="Manage Administrators" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 96 96">
                      <title>Manage Administrators</title>
                      <path
                        d="M81.12,55.51a1.05,1.05,0,0,1-.46.12c-.39,0-.66-.3-.66-.81V41H76.26A1.27,1.27,0,0,1,75,39.74V30.26A1.27,1.27,0,0,1,76.26,29H88.74A1.27,1.27,0,0,1,90,30.26v9.48A1.27,1.27,0,0,1,88.74,41H85v10l-3.88,4.46ZM85,34V32H80v2Zm.23,46.86C79.48,65.92,69.47,56.7,54.67,52.69A22.45,22.45,0,0,0,48.5,52a26.87,26.87,0,0,0-7.76.95l-.21.07c-15,3.67-24.9,13.1-31.21,29.67-1.71,4.46-1.48,6.25-1,7,.72,1,3.08,1.58,7,1.6,21.58.06,43.57,0,63,0,4.69,0,7.38-.6,8.21-1.82S87,85.32,85.23,80.86ZM47.47,5A21.64,21.64,0,1,0,69.11,26.64,21.64,21.64,0,0,0,47.47,5Z">
                      </path>
                    </svg>
                  </div>



                  <div class="l-pro-tools--label">

                    <span class="cursor-not-allowed">
                      <h3 class="hrow no-wrap"><b>Manage Administrators&nbsp;</b><img src="slot/images/PRO-stamp_100.svg"
                          height="35"></h3>
                    </span>



                    <div class="sub-text cursor-not-allowed">Set up multiple administrators who can
                      help manage your sign ups.</div>

                  </div>
                </div>

                <div class="l-pro-tools--tool">

                  <div class="l-pro-tools--icon disabled">
                    <svg class="pro-tools--svg" data-name="Portal Pages" version="1.0"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 3 96 96">
                      <title>Portal Pages</title>
                      <path d="M79.1,77.2c-0.3-0.4-0.6-0.5-1.1-0.5H30.3c-0.4,0-0.8,0.2-1.1,0.5s-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2
                  s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4C79.6,77.9,79.4,77.5,79.1,77.2z M22.7,77.2
                  c-0.3-0.4-0.7-0.5-1.2-0.5h-3.4c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2
                  c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4C23.2,77.9,23,77.5,22.7,77.2z M79.1,63.9
                  c-0.3-0.4-0.6-0.5-1.1-0.5H30.3c-0.4,0-0.8,0.2-1.1,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78
                  c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4C79.6,64.6,79.4,64.2,79.1,63.9z M22.7,63.9c-0.3-0.4-0.7-0.5-1.2-0.5h-3.4
                  c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5
                  s0.5-0.7,0.5-1.2v-3.4C23.2,64.6,23,64.2,22.7,63.9z M79.1,50.5C78.8,50.2,78.5,50,78,50H30.3c-0.4,0-0.8,0.2-1.1,0.5
                  s-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4
                  C79.6,51.2,79.4,50.8,79.1,50.5z M22.7,50.5C22.4,50.2,22,50,21.5,50h-3.4c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4
                  c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4C23.2,51.2,23,50.8,22.7,50.5z
                   M79.1,36.2c-0.5-0.5-0.9-0.7-1.5-0.7H18.4c-0.5,0-1,0.2-1.4,0.7s-0.6,1-0.6,1.7v4.8c0,0.7,0.2,1.2,0.6,1.7s0.9,0.7,1.4,0.7h59.3
                  c0.5,0,1-0.2,1.4-0.7c0.4-0.5,0.6-1,0.6-1.7v-4.8C79.7,37.2,79.5,36.7,79.1,36.2z M79.1,36.2c-0.5-0.5-0.9-0.7-1.5-0.7H18.4
                  c-0.5,0-1,0.2-1.4,0.7s-0.6,1-0.6,1.7v4.8c0,0.7,0.2,1.2,0.6,1.7s0.9,0.7,1.4,0.7h59.3c0.5,0,1-0.2,1.4-0.7c0.4-0.5,0.6-1,0.6-1.7
                  v-4.8C79.7,37.2,79.5,36.7,79.1,36.2z M78,76.7H30.3c-0.4,0-0.8,0.2-1.1,0.5s-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2
                  s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2C78.8,76.8,78.5,76.7,78,76.7z
                   M78,63.4H30.3c-0.4,0-0.8,0.2-1.1,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78
                  c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2C78.8,63.5,78.5,63.4,78,63.4z M78,50H30.3
                  c-0.4,0-0.8,0.2-1.1,0.5s-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5
                  c0.3-0.3,0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2C78.8,50.2,78.5,50,78,50z M21.5,76.7h-3.4c-0.5,0-0.9,0.2-1.2,0.5
                  c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4
                  c0-0.5-0.2-0.9-0.5-1.2C22.4,76.8,22,76.7,21.5,76.7z M21.5,63.4h-3.4c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4
                  c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2
                  C22.4,63.5,22,63.4,21.5,63.4z M21.5,50h-3.4c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2
                  c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2S22,50,21.5,50z M89.7,16.3
                  c-1.5-1.5-3.4-2.3-5.5-2.3H11.9c-2.2,0-4,0.8-5.5,2.3C4.8,17.8,4,19.7,4,21.8v64.4c0,2.1,0.8,4,2.3,5.5S9.7,94,11.8,94h72.3
                  c2.2,0,4-0.8,5.5-2.3s2.3-3.4,2.3-5.5V21.8C92,19.7,91.2,17.8,89.7,16.3z M85.2,86.9h-0.1c0,0.4-0.2,0.8-0.5,1.1
                  c-0.3,0.3-0.7,0.5-1.1,0.5H11.1c-0.4,0-0.8-0.2-1.1-0.5s-0.5-0.7-0.5-1.1V33.1c0-0.4,0.2-0.8,0.5-1.1s0.7-0.5,1.1-0.5h72.5
                  c0.4,0,0.8,0.2,1.1,0.5s0.5,0.7,0.5,1.1V86.9z M77.6,35.5H18.4c-0.5,0-1,0.2-1.4,0.7s-0.6,1-0.6,1.7v4.8c0,0.7,0.2,1.2,0.6,1.7
                  s0.9,0.7,1.4,0.7h59.3c0.5,0,1-0.2,1.4-0.7c0.4-0.5,0.6-1,0.6-1.7v-4.8c0-0.7-0.2-1.2-0.6-1.7C78.6,35.7,78.2,35.5,77.6,35.5z
                   M78,76.7H30.3c-0.4,0-0.8,0.2-1.1,0.5s-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5
                  c0.3-0.3,0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2C78.8,76.8,78.5,76.7,78,76.7z M78,63.4H30.3c-0.4,0-0.8,0.2-1.1,0.5
                  c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4
                  c0-0.5-0.2-0.9-0.5-1.2C78.8,63.5,78.5,63.4,78,63.4z M78,50H30.3c-0.4,0-0.8,0.2-1.1,0.5s-0.5,0.7-0.5,1.2v3.4
                  c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2
                  C78.8,50.2,78.5,50,78,50z M21.5,76.7h-3.4c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2
                  c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2C22.4,76.8,22,76.7,21.5,76.7z
                   M21.5,63.4h-3.4c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4
                  c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2C22.4,63.5,22,63.4,21.5,63.4z M21.5,50h-3.4
                  c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5
                  s0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2S22,50,21.5,50z M79.1,36.2c-0.5-0.5-0.9-0.7-1.5-0.7H18.4c-0.5,0-1,0.2-1.4,0.7
                  s-0.6,1-0.6,1.7v4.8c0,0.7,0.2,1.2,0.6,1.7s0.9,0.7,1.4,0.7h59.3c0.5,0,1-0.2,1.4-0.7c0.4-0.5,0.6-1,0.6-1.7v-4.8
                  C79.7,37.2,79.5,36.7,79.1,36.2z M79.1,50.5C78.8,50.2,78.5,50,78,50H30.3c-0.4,0-0.8,0.2-1.1,0.5s-0.5,0.7-0.5,1.2v3.4
                  c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4C79.6,51.2,79.4,50.8,79.1,50.5z
                   M79.1,63.9c-0.3-0.4-0.6-0.5-1.1-0.5H30.3c-0.4,0-0.8,0.2-1.1,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2
                  s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4C79.6,64.6,79.4,64.2,79.1,63.9z M79.1,77.2
                  c-0.3-0.4-0.6-0.5-1.1-0.5H30.3c-0.4,0-0.8,0.2-1.1,0.5s-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78
                  c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4C79.6,77.9,79.4,77.5,79.1,77.2z M22.7,50.5C22.4,50.2,22,50,21.5,50h-3.4
                  c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5
                  s0.5-0.7,0.5-1.2v-3.4C23.2,51.2,23,50.8,22.7,50.5z M22.7,63.9c-0.3-0.4-0.7-0.5-1.2-0.5h-3.4c-0.5,0-0.9,0.2-1.2,0.5
                  c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4
                  C23.2,64.6,23,64.2,22.7,63.9z M22.7,77.2c-0.3-0.4-0.7-0.5-1.2-0.5h-3.4c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4
                  c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4C23.2,77.9,23,77.5,22.7,77.2z
                   M79.1,36.2c-0.5-0.5-0.9-0.7-1.5-0.7H18.4c-0.5,0-1,0.2-1.4,0.7s-0.6,1-0.6,1.7v4.8c0,0.7,0.2,1.2,0.6,1.7s0.9,0.7,1.4,0.7h59.3
                  c0.5,0,1-0.2,1.4-0.7c0.4-0.5,0.6-1,0.6-1.7v-4.8C79.7,37.2,79.5,36.7,79.1,36.2z M78,76.7H30.3c-0.4,0-0.8,0.2-1.1,0.5
                  s-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4
                  c0-0.5-0.2-0.9-0.5-1.2C78.8,76.8,78.5,76.7,78,76.7z M78,63.4H30.3c-0.4,0-0.8,0.2-1.1,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4
                  c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2
                  C78.8,63.5,78.5,63.4,78,63.4z M78,50H30.3c-0.4,0-0.8,0.2-1.1,0.5s-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78
                  c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2C78.8,50.2,78.5,50,78,50z M21.5,76.7h-3.4
                  c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5
                  s0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2C22.4,76.8,22,76.7,21.5,76.7z M21.5,63.4h-3.4c-0.5,0-0.9,0.2-1.2,0.5
                  c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4
                  c0-0.5-0.2-0.9-0.5-1.2C22.4,63.5,22,63.4,21.5,63.4z M21.5,50h-3.4c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4
                  c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2
                  S22,50,21.5,50z"></path>
                    </svg>
                  </div>
                  <div class="l-pro-tools--label">
                    <span class="cursor-not-allowed">
                      <h3 class="hrow no-wrap">
                        <b>Portal Pages&nbsp;</b>
                        <img src="slot/images/PRO-stamp_100.svg" height="35">
                        <span class="smalltextlite ng-scope"
                          style="line-height: 1rem;vertical-align:text-bottom;">Enterprise</span>
                      </h3>
                    </span>

                    <div class="sub-text cursor-not-allowed">Create a custom landing page to display
                      sign ups and provide additional information.</div>
                  </div>
                </div>

                <div class="l-pro-tools--tool">


                  <div class="l-pro-tools--icon disabled">
                    <svg class="pro-tools--svg" data-name="Calendar Subscriptions" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 -2 96 96">
                      <title>Calendar Subscriptions</title>
                      <path
                        d="M4,15.85A3.86,3.86,0,0,1,7.85,12H16V7.85A3.86,3.86,0,0,1,19.85,4h4.3A3.86,3.86,0,0,1,28,7.85V12H69V7.85A3.86,3.86,0,0,1,72.85,4h4.3A3.86,3.86,0,0,1,81,7.85V12h7.15A3.86,3.86,0,0,1,92,15.85V25H4Zm0,72.3V28H92V88.15A3.86,3.86,0,0,1,88.15,92H7.85A3.86,3.86,0,0,1,4,88.15ZM24,53V41H12V53Zm0,16V57H12V69Zm0,15V72H12V84ZM39,53V41H27V53Zm0,16V57H27V69Zm0,15V72H27V84ZM54,53V41H42V53Zm0,16V57H42V69Zm0,15V72H42V84ZM69,53V41H57V53Zm0,16V57H57V69Zm0,15V72H57V84ZM85,53V41H73V53Zm0,16V57H73V69Zm0,15V72H73V84Z">
                      </path>
                    </svg>
                  </div>


                  <div class="l-pro-tools--label">

                    <span class="cursor-not-allowed">
                      <h3 class="hrow no-wrap"><b>Calendar Subscriptions&nbsp;</b><img src="slot/images/PRO-stamp_100.svg"
                          height="35"></h3>
                    </span>

                    <div class="sub-text cursor-not-allowed">Sync entire sign ups with dates/times
                      to your digital calendar.</div>

                  </div>
                </div>

                <div class="l-pro-tools--tool">

                  <div class="l-pro-tools--icon disabled">
                    <svg class="pro-tools--svg" data-name="Custom Themes" xmlns="http://www.w3.org/2000/svg"
                      viewBox="-5 -5 96 96">
                      <title>Custom Themes</title>
                      <path
                        d="M15.76,23.73H6.35a2.35,2.35,0,0,1,0-4.7h9.41V9.62a2.36,2.36,0,1,1,4.71,0V19h9.41a2.35,2.35,0,1,1,0,4.7H20.47v9.42a2.36,2.36,0,0,1-4.71,0ZM53.41,80.67H48.24V75.5a1.89,1.89,0,0,0-3.77,0v5.17H39.29a1.89,1.89,0,0,0,0,3.77h5.18v5.18a1.89,1.89,0,0,0,3.77,0V84.44h5.17a1.89,1.89,0,0,0,0-3.77ZM91.06,51H87.29V47.26a.94.94,0,1,0-1.88,0V51H81.65a.94.94,0,1,0,0,1.88h3.76v3.76a.94.94,0,1,0,1.88,0V52.91h3.77a.94.94,0,0,0,0-1.88ZM84.87,35Q72.36,47.34,60.11,59.9c-1.7,1.73-3.27,2.33-5.35.84A9.83,9.83,0,0,0,53,59.91c-9.52-4-12.78-3-16.86,6.48-2.62,6.07-6.69,10.41-12.6,12.79a18.92,18.92,0,0,1-8.61.9c-3.16-.32-4.59-3.32-4.55-9.93.44-5,4.43-9.72,10.26-13.12,2.32-1.36,4.88-2.3,7.21-3.65,5.21-3.05,6-5,4.5-10.82A14.16,14.16,0,0,0,31,38.18c-2.56-3.83-1-6.29,1.94-9.13C40.72,21.6,48.29,13.88,55.8,6.13,57.91,4,59.3,4,61.41,6.13Q73,18,84.8,29.64C86.8,31.6,86.92,33,84.87,35ZM19.45,67.51c-3.08.64-3.31,2.94-3.12,3.86.28,1.32,1.4,2.06,3.11,2.06s3-1.11,3.09-2.16C22.6,70,22.53,68.15,19.45,67.51ZM61.46,53c-.43.12-.43-.4-.71-.48L38.64,29.59c-1.19,1.08-2.47,2.26-3.93,3.57L58,56C59.2,54.84,60,54.33,61.46,53ZM79.2,32.2c-6.53-6.39-12.69-12.39-18.78-18.47-1.5-1.48-2.6-1.1-3.88.22-2.32,2.42-4.85,4.64-7,7.19-.94,1.1-2.56,3.6-1.71,4.26.88.49,3.33.28,4.91,0,2.35-.46,6-3.15,6.94-2,.94.87-.41,4.85-1,7.18-.83,3.18-.26,3.94,3.13,3.42,4.3-.66,5.2.3,4.63,4.72-.12.93-.48,1.82.23,2.85.76.38,2.61-.24,3.43-.94C73.05,38.13,75.77,35.41,79.2,32.2Z">
                      </path>
                    </svg>
                  </div>
                  <div class="l-pro-tools--label">
                    <span class="cursor-not-allowed">
                      <h3 class="hrow no-wrap"><b>Custom Themes&nbsp;</b><img src="slot/images/PRO-stamp_100.svg"
                          height="35"></h3>
                    </span>

                    <div class="sub-text cursor-not-allowed">Create custom designs for your sign ups
                      to get the personalized look you want.</div>
                  </div>
                </div>

                <div class="l-pro-tools--tool">


                  <div class="l-pro-tools--icon">
                    <a href="" ng-click="proToolsHelper('Edit People on a Sign Up','Edit',128801955,'ManagePeople')">
                      <svg class="pro-tools--svg" data-name="Edit People on Sign Ups" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 96 96">
                        <title>Edit People on Sign Ups</title>
                        <path
                          d="M69.79,55.28a.15.15,0,0,1-.17-.17.49.49,0,0,1,0-.15L72,48.81l4.08,4.08L70,55.25Zm3.46-7.71L86.08,34.74l4.08,4.08L77.33,51.65ZM87.32,33.51l2-2a.73.73,0,0,1,.51-.21.75.75,0,0,1,.52.21l3.05,3.06a.71.71,0,0,1,.21.51.73.73,0,0,1-.21.51l-2,2ZM85.23,80.86C79.48,65.92,69.47,56.7,54.67,52.69A22.45,22.45,0,0,0,48.5,52a26.87,26.87,0,0,0-7.76.95l-.21.07c-15,3.67-24.9,13.1-31.21,29.67-1.71,4.46-1.48,6.25-1,7,.72,1,3.08,1.58,7,1.6,21.58.06,43.57,0,63,0,4.69,0,7.38-.6,8.21-1.82S87,85.32,85.23,80.86ZM47.47,5A21.64,21.64,0,1,0,69.11,26.64,21.64,21.64,0,0,0,47.47,5Z">
                        </path>
                      </svg>
                    </a>
                  </div>


                  <div class="l-pro-tools--label">


                    <a href="" ng-click="proToolsHelper('Edit People on a Sign Up','Edit',128801955,'ManagePeople')">
                      <h3 class="hrow no-wrap"><b>Edit People on Sign Ups&nbsp;</b><img style="opacity:0"
                          src="slot/images/PRO-stamp_100.svg" height="35"></h3>
                    </a>

                    <div class="sub-text">Manage participants and update their info on your sign
                      ups.</div>

                  </div>
                </div>

                <div class="l-pro-tools--tool">


                  <div class="l-pro-tools--icon disabled">
                    <svg class="pro-tools--svg" data-name="Sign Up Tabbing" xmlns="http://www.w3.org/2000/svg"
                      viewBox="-2 -2 96 96">
                      <title>Sign Up Tabbing</title>
                      <path
                        d="M92.64,35.1c0,14.21,0,46.9,0,46.9H3S3,36.13,3,18.72a4,4,0,0,1,4-4c7.21-.08,14.43.13,21.64-.08,3.4-.09,4.84.94,4.73,4.55-.12,4.11-.06,7.8-.06,7.8s3.43.1,7.92.11c14.52,0,29,0,43.56,0C92.29,27.11,92.64,27.84,92.64,35.1ZM60.26,17.63A4,4,0,0,0,59.42,16a3.06,3.06,0,0,0-1.93-1.17C50.64,14.55,44,14.63,37,14.63V25H60.38C60.38,22.3,60.68,19.86,60.26,17.63Zm26.9,0a3.36,3.36,0,0,0-.33-.91,3.37,3.37,0,0,0-2.38-1.92c-6.86-.25-14-.17-20.45-.17V25H87.29C87.29,22.3,87.58,19.86,87.16,17.63Z">
                      </path>
                    </svg>
                  </div>


                  <div class="l-pro-tools--label">

                    <span class="cursor-not-allowed">
                      <h3 class="hrow no-wrap"><b>Sign Up Tabbing&nbsp;</b><img src="slot/images/PRO-stamp_100.svg"
                          height="35"></h3>
                    </span>

                    <div class="sub-text cursor-not-allowed">Display multiple tabbed sign ups on one
                      page for easy navigation.</div>

                  </div>
                </div>

                <div class="l-pro-tools--tool">


                  <div class="l-pro-tools--icon">
                    <a href="" ng-click="proToolsHelper('Print a Sign Up','Print',128801955,'ViewReports')">
                      <svg class="pro-tools--svg" data-name="Print a Sign Up" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 96 96">
                        <title>Print a Sign Up</title>
                        <path
                          d="M4.83,81a1.94,1.94,0,0,1-1.83-2V26.84A1.84,1.84,0,0,1,4.84,25H16a2,2,0,0,1,2,2v11.2A1.85,1.85,0,0,0,19.84,40H76.16A1.84,1.84,0,0,0,78,38.16V26.84A1.84,1.84,0,0,1,79.84,25H91.16A1.84,1.84,0,0,1,93,26.84V79a2,2,0,0,1-2,2H77.59a2.54,2.54,0,0,1-2.28-1.83l-1.4-7.39A2.48,2.48,0,0,0,71.63,70H24.37a2.52,2.52,0,0,0-2.28,1.81l-1.4,7.36A2.54,2.54,0,0,1,18.41,81Zm8.9-48.18a3.68,3.68,0,1,0-3.68,3.69A3.68,3.68,0,0,0,13.73,32.82ZM21,34.19l-.15-21.37a2.09,2.09,0,0,1,2-1.82H73a2.08,2.08,0,0,1,2,1.82l-.15,21.37A1.61,1.61,0,0,1,73.21,36H22.64A1.61,1.61,0,0,1,21,34.19Zm1.91,52.42a1.65,1.65,0,0,1,.06-.43l2.85-11.39A2.47,2.47,0,0,1,28.11,73H67.67A2.49,2.49,0,0,1,70,74.78l2.85,11.4a2.18,2.18,0,0,1,0,.43A1.38,1.38,0,0,1,71.39,88h-47A1.39,1.39,0,0,1,22.91,86.61Z">
                        </path>
                      </svg>
                    </a>
                  </div>



                  <div class="l-pro-tools--label">


                    <a href="" ng-click="proToolsHelper('Print a Sign Up','Print',128801955,'ViewReports')">
                      <h3 class="hrow no-wrap"><b>Print a Sign Up&nbsp;</b><img style="opacity:0"
                          src="slot/images/PRO-stamp_100.svg" height="35"></h3>
                    </a>

                    <div class="sub-text">Choose a sign up and generate a print out of participants
                      and slots.</div>

                  </div>
                </div>

                <div class="l-pro-tools--tool">


                  <div class="l-pro-tools--icon disabled">
                    <svg class="pro-tools--svg" data-name="SignUpGenius API" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 -2 96 96">
                      <title>SignUpGenius API</title>
                      <path
                        d="M12,86.27V80.73A2.74,2.74,0,0,1,14.73,78H31.27A2.74,2.74,0,0,1,34,80.73v5.54A2.74,2.74,0,0,1,31.27,89H14.73A2.74,2.74,0,0,1,12,86.27ZM15.21,67H21V55.37A1.38,1.38,0,0,1,22.37,54H45V47h6v7H73.63A1.38,1.38,0,0,1,75,55.37V67h5.79l-8.08,8.4L64.64,67H70V60H51v7h4.79l-8.08,8.4L39.64,67H45V60H26v7h5.36l-8.07,8.4ZM37,86.27V80.73A2.74,2.74,0,0,1,39.73,78H56.27A2.74,2.74,0,0,1,59,80.73v5.54A2.74,2.74,0,0,1,56.27,89H39.73A2.74,2.74,0,0,1,37,86.27Zm25,0V80.73A2.74,2.74,0,0,1,64.73,78H81.27A2.74,2.74,0,0,1,84,80.73v5.54A2.74,2.74,0,0,1,81.27,89H64.73A2.74,2.74,0,0,1,62,86.27ZM10.38,46.75A1.32,1.32,0,0,1,9,45.5V44.25A1.32,1.32,0,0,1,10.38,43H18V9.73A2.74,2.74,0,0,1,20.73,7H75.27A2.74,2.74,0,0,1,78,9.73V43h6.63A1.37,1.37,0,0,1,86,44.37V45.5a1.32,1.32,0,0,1-1.37,1.25L83.25,48H11.75ZM74,43V11H22V43Z">
                      </path>
                    </svg>
                  </div>



                  <div class="l-pro-tools--label">

                    <span class="cursor-not-allowed">
                      <h3 class="hrow no-wrap"><b>SignUpGenius API&nbsp;</b><img src="slot/images/PRO-stamp_100.svg"
                          height="35"></h3>
                    </span>

                    <div class="sub-text cursor-not-allowed">Integrate SignUpGenius data into your
                      own applications.</div>

                  </div>
                </div>

                <div class="l-pro-tools--tool">

                  <div class="l-pro-tools--icon">
                    <a href="/index.cfm?go=t.buttonbuilder">
                      <svg class="pro-tools--svg" data-name="Web Button Builder" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 -6 96 96">
                        <title>Web Button Builder</title>
                        <path
                          d="M93,24.13V65.87A3.13,3.13,0,0,1,89.87,69H81.05L57.94,39.37,51,30.47V69H6.13A3.13,3.13,0,0,1,3,65.87V24.13A3.13,3.13,0,0,1,6.13,21H89.87A3.13,3.13,0,0,1,93,24.13ZM80,73,55,41.26V83.33l6.39-6.16,1.43,4.06,1.88,5.33L75,82.92l-2.12-6L71.54,73Z">
                        </path>
                      </svg>
                    </a>
                  </div>

                  <div class="l-pro-tools--label">

                    <a href="/index.cfm?go=t.buttonbuilder">
                      <h3 class="hrow no-wrap"><b>Web Button Builder&nbsp;</b><img style="opacity:0"
                          src="slot/images/PRO-stamp_100.svg" height="35"></h3>
                    </a>

                    <div class="sub-text">Create a sign up button to embed on your website for easy
                      access to your sign ups.</div>
                  </div>
                </div>

                <div class="l-pro-tools--tool">


                  <div class="l-pro-tools--icon disabled">
                    <svg class="pro-tools--svg" data-name="GeniusDrive" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 96 96">
                      <title>GeniusDrive</title>
                      <path
                        d="M6,78.34V75a7,7,0,0,1,6.94-6.94H83.06A7,7,0,0,1,90,75v3.31a7,7,0,0,1-6.94,6.93H12.94A7,7,0,0,1,6,78.34ZM19.74,16.08a4.51,4.51,0,0,1,4.19-3.35H72.07a4.53,4.53,0,0,1,4.2,3.35L88.16,65.53a10.28,10.28,0,0,0-4.84-1.26H12.68a10.28,10.28,0,0,0-4.84,1.26Zm56.9,62.51V74.77H72.82v3.82Zm7.63,0V74.77H80.45v3.82Z">
                      </path>
                    </svg>
                  </div>


                  <div class="l-pro-tools--label">

                    <span class="cursor-not-allowed">
                      <h3 class="hrow no-wrap"><b>GeniusDrive&nbsp;</b><img src="slot/images/PRO-stamp_100.svg" height="35">
                      </h3>
                    </span>

                    <div class="sub-text cursor-not-allowed">Access cloud file storage for
                      attachments and images displayed on your sign ups.</div>

                  </div>
                </div>


              </div>



              <style>
                .cursor-not-allowed {
                  cursor: not-allowed;
                }
              </style>

            </div>
          </div>
          <div class="tab-pane" id="f">FFFFFFThirdamuno, ipsum dolor sit amet, consectetur adipiscing elit.
            Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
            condimentum vitae.</div>
        </div>
      </div>



      </noscript>

    </div>



  </div>
  </div>
  </div>
  <style>
    .tabbf {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
    }

    .tabcontent {
      display: none;
      padding: 6px 12px;
      border: 1px solid #ccc;
      border-top: none;
    }
  </style>
 <!-- footer -->
 <style>
  footer {
    margin-top: 40px;
background: #2B2B2B;
}
.footer_inner h2 {
font-style: normal;
font-weight: normal;
font-size: 22px;
line-height: 16px;
color: #FFFFFF;
margin: 0 0 30px 0;
padding: 0;
}
.footer_inner ul li a {
font-style: normal;
font-weight: normal;
font-size: 15px;
text-decoration: none;
color: #9E9E9E;
transition: .5s;
}
.contact_footer_box p {
font-style: normal;
font-weight: normal;
font-size: 15px;
line-height: 18px;
color: #9E9E9E;
margin: 0 0 10px 0;
padding: 2px 0 2px 32px;
}
.copy_right {
padding: 20px 0;
border-top: 1px solid #3a3b3d;
}
.copy_right_inner p {
font-style: normal;
font-weight: 300;
font-size: 15px;
line-height: 18px;
color: #595959;
margin: 0;
padding: 0;
}
</style>
@include('slot/layout.footer')
  <script src="slot/https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="slot/https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script>
    (function () {
      var d = document,
        tabs = d.querySelector('.tabs'),
        tab = d.querySelectorAll('li'),
        contents = d.querySelectorAll('.content');
      tabs.addEventListener('click', function (e) {
        if (e.target && e.target.nodeName === 'LI') {
          // change tabs
          for (var i = 0; i < tab.length; i++) {
            tab[i].classList.remove('active');
          }
          e.target.classList.toggle('active');


          // change content
          for (i = 0; i < contents.length; i++) {
            contents[i].classList.remove('active');
          }

          var tabId = '#' + e.target.dataset.tabId;
          d.querySelector(tabId).classList.toggle('active');
        }
      });
    })();
  </script>

  <script>
    var tabsFn = (function () {

      function init() {
        setHeight();
      }

      function setHeight() {
        var $tabPane = $('.tab-pane'),
          tabsHeight = $('.nav-tabs').height('');

        $tabPane.css({
          height: tabsHeight
        });
      }

      $(init);
    })();
  </script>
  <script>
    function openCity(evt, cityName) {
      // Declare all variables
      var i, tabcontent, tablinks;

      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>

</body>


</html>