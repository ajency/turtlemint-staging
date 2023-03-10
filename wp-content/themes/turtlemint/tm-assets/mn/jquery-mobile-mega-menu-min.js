"use strict";
! function(a) {
    jQuery.fn.extend({
        mobileMegaMenu: function(b) {
            var c = {
                    changeToggleText: !1,
                    enableWidgetRegion: !1,
                    prependCloseButton: !1,
                    stayOnActive: !0,
                    toogleTextOnClose: "Close Menu",
                    menuToggle: "toggle-menu"
                },
                d = a.extend(c, b);
            return this.each(function() {
                function b() {
                    m.toArray().forEach(function(b) {
                        e = e > a(b).height() ? e : a(b).height()
                    }), f.css("", e + 500)
                }
                var c = '<li><a class="close-button ' + d.menuToggle + '" href="#">Close Menu</a></li>',
                    e = -1,
                    f = a(this),
                    g = a("a." + d.menuToggle).html();
                f.find("ul a").addClass("menu-item"), f.find("ul ul").before('<a class="next-button" href="#"><div class="arrow">Next</div></a>').siblings("a:first-of-type").addClass("has-next-button"), f.find("ul ul").prepend('<li><a class="back-button" href="#">Back</a></li>'), d.prependCloseButton && f.find("ul").closest("ul").prepend(c);
                var h = a("a." + d.menuToggle),
                    i = f.find("a.next-button"),
                    j = f.find("a.back-button");
                if (d.enableWidgetRegion) {
                    var k = f.find(".widget-region").detach();
                    f.find("ul:first").append(k)
                }
                var l, m = f.find("ul");
                if (a(window).resize(function() {
                        clearTimeout(l), l = setTimeout(function() {
                            b()
                        }, 500)
                    }), b(), d.stayOnActive) {
                    var n = window.location.href,
                        o = n.replace("#", "");
                    f.find("ul li a").filter(function() {
                        if (a(this).hasClass("menu-item")) {
                            var b = String(this.href).split("/");
                            b.pop(), b.pop();
                            var c = a(this).parents("li").parents("li").children("a.menu-item"),
                                d = String(a(c).attr("href")).split("/");
                            if (d.pop(), !c.length) return this.href === o;
                            if (JSON.stringify(b) === JSON.stringify(d)) return this.href === o
                        }
                    }).addClass("active").css("font-weight", "bold"), f.find("a.active").siblings("ul").length > 0 && f.find("a.active").removeClass("active").css("font-weight", "bold").siblings("ul").find("li:first-of-type").first().find("a").addClass("active"), f.find("a.active").closest("ul").addClass("is-in-view").parents("ul").addClass("has-been-viewed"), f.find("a.active").closest("ul").parents().siblings("li").find("ul").hide()
                }
                h.click(function(b) {
                    b.preventDefault(), f.find("ul:first-child").hasClass("has-been-viewed") || f.find("ul:first-child").toggleClass("is-in-view"), d.changeToggleText && (f.hasClass("open") ? f.hasClass("open") && a("a." + d.menuToggle).html(g) : a("a." + d.menuToggle).html(d.toogleTextOnClose)), f.toggleClass("open")
                }), i.click(function(b) {
                    b.preventDefault(), setTimeout(function() {
                        a("html, body").animate({
                            scrollTop: 0
                        }, 250)
                    }, 250), a(this).siblings("ul:first-of-type").addClass("is-in-view"), a(this).parents().siblings("li").find("ul").hide(), a(this).siblings("ul").show(), a(this).parents("ul:first-of-type").addClass("has-been-viewed").removeClass("is-in-view")
                }), j.click(function(b) {
                    b.preventDefault(), a(this).parents("ul.is-in-view").closest("ul.has-been-viewed").toggleClass("has-been-viewed is-in-view").promise().done(function() {
                        f.find("ul.is-in-view ul.is-in-view").toggleClass("is-in-view")
                    })
                }), (a("html").hasClass("no-csstransforms") || a("html").hasClass("no-cssanimations")) && (h.click(function(a) {
                    a.preventDefault(), f.css("transform", "none"), f.hasClass("open") ? f.animate({
                        left: 0
                    }) : f.animate({
                        left: "-100%"
                    })
                }), i.click(function(a) {
                    a.preventDefault(), f.find(".has-been-viewed").css("transform", "none"), f.find("ul").animate({
                        right: "+=100%"
                    }, 250)
                }), j.click(function(a) {
                    a.preventDefault(), f.find(".has-been-viewed").css("transform", "none"), f.find("ul").animate({
                        right: "-=100%"
                    }, 250)
                }))
            })
        }
    })
}(jQuery);