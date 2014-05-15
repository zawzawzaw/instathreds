/*
 * Fancy Product Designer - jQuery plugin 2.0.51
 * Copyright 2013, Rafael Dery
 *
 * Only for the sale at the envato marketplaces
 */
! function (a) {
    var b = function (b, c) {
        var d = a.extend({}, a.fn.fancyProductDesigner.defaults, c);
        d.labels = a.extend({}, a.fn.fancyProductDesigner.defaults.labels, d.labels), d.labels.modificationTooltips = a.extend({}, a.fn.fancyProductDesigner.defaults.labels.modificationTooltips, d.labels.modificationTooltips), d.labels.colorpicker = a.extend({}, a.fn.fancyProductDesigner.defaults.labels.colorpicker, d.labels.colorpicker), d.customImagesParameters = void 0 == d.uploadedDesignsParameters ? d.customImagesParameters : d.uploadedDesignsParameters, d.customImagesParameters = a.extend({}, a.fn.fancyProductDesigner.defaults.customImagesParameters, d.customImagesParameters), d.dimensions = a.extend({}, a.fn.fancyProductDesigner.defaults.dimensions, d.dimensions);
        var e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w = this,
            x = null,
            y = 0,
            z = -1,
            A = null,
            B = 0,
            C = null,
            D = null,
            E = 0,
            F = new Image,
            G = new Image;
        F.src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QkNGMzVGRDE0NENBMTFFMzlDNTlBQzY1MzlBMkNBNzMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QkNGMzVGRDI0NENBMTFFMzlDNTlBQzY1MzlBMkNBNzMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpCQ0YzNUZDRjQ0Q0ExMUUzOUM1OUFDNjUzOUEyQ0E3MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpCQ0YzNUZEMDQ0Q0ExMUUzOUM1OUFDNjUzOUEyQ0E3MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pj80kqoAAAHdSURBVHjalFO7agJREB2Xa6Hio1CIEbSIKIidptJOENJYCraBlGnyCX5BiF8gCUEhWClYhQULIaRUFlQEX4VKCp/gczJ3yW5iYsLmwHL3vs7MnDmX1Wo1IJyYTKYrvV5/hgT4AzqdTtjtdm+LxeJxv9+/AhE4x+PxC03wP5jP52NJkqLMaDRe2u328++RVqsV9Ho9oGhgsVjA6XQe7FPGdqvVegPdbjfzlXk6nWI6nUa/349UEgqCgDabDePxOJbLZflMoVDAVquFk8lEhE6nc6tcpn8MhUJcg1+/ZDKJZrMZ6/U6L+NZJaCUMRKJqAcZYxiLxTCVSqHP5/tB1Gw2cTabfRJks1l10+12Y6VSUcvabreYSCQOCBqNhkzAqC2yKLlcTmkTZDIZiEajqmClUgmq1SqQHvJcGTkYn1ALod1uywsulwtIsAPFA4EAiKKoXuRBPB4PkODAjhgFlKwUeL3eo6binhN4dM5MdcuLg8EAqF2gFYLiXGqPPHLCfD6vmYB34Y4rvVwuMRgMYjgcxuFwqMnOo9FIZDTOOJHBYIBisQhkbXA4HJqC87gCvaoH6ueQL3BltV7ebDZAVr7nGUj9fv+CHsY1ue/0wyh/vmjSaU5Bc+v1+uldgAEAQbiBjYjV1d0AAAAASUVORK5CYII=", G.src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RkY3RjhCMTI0NENEMTFFMzlDNTlBQzY1MzlBMkNBNzMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RkY3RjhCMTM0NENEMTFFMzlDNTlBQzY1MzlBMkNBNzMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpCQ0YzNUZENzQ0Q0ExMUUzOUM1OUFDNjUzOUEyQ0E3MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpCQ0YzNUZEODQ0Q0ExMUUzOUM1OUFDNjUzOUEyQ0E3MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pj7soO0AAAG9SURBVHjalFM9awJBEJ07TwstlPMKL4WFVlEsU5lGEMHKQizSSSBlmoA/wH+QP2AlhBSptLESBCtJIyqCH6BgETwFNeeBH+dmdskdhiR3yYMtdnf2zbw3s1y32wVEwOPx3DmdzjBBgAU4juN1XV9ut9un0+n0CkggK4rSIv8APiSqqir9fv9acLvdt5IkXU0mE2g0GsDzPOz3e/D5fJDJZEAQhJ+qAKxYwpgHvBcC9LDZbEI+n2cBsixDuVwGh8NhpYaSizxWpNONy+UyL7AiiEajLJMVqBre2GiaBsFgENLpNHQ6HYjH49But8EOJoEoilAqlaBarUIymYTpdArL5dKWgAY+Gs4aWCwWpNWyb8x8Pq8L584a8Pv9bJ0DE7AO/SrBCrVaDRKJBIxGI7Yfj8es1SypIcFqaHK5HJ1OEolESKVSIalUiux2O4Ie1W0JKFarFclms4yErnCYTTwj4P8iw+v1QqFQMAcL/4JpgYBE73YEw+EQisUixGIxOjwQCoUMYzXo9XqXm83mzUrC4XAgx+PxyxmaSAaDwQ2toD+bzdJY5j3O9sWnzm+f56zNHGZW1+v1M5K8fAgwAKZZlVqllD6aAAAAAElFTkSuQmCC", f = a(b).addClass("fpd-container fpd-clearfix"), r = f.children(".fpd-product").remove(), s = f.children(".fpd-design");
        var H = document.createElement("canvas"),
            I = Boolean(H.getContext && H.getContext("2d"));
        if (!I) return a.post(d.templatesDirectory + "canvaserror.php", function (b) {
            f.append(a.parseHTML(b)), f.trigger("templateLoad", [this.url])
        }), f.trigger("canvasFail"), !1;
        window.localStorage.length, a.post(d.templatesDirectory + "sidebar.php", function (b) {
            f.append(a.parseHTML(b)), g = f.children(".fpd-sidebar"), h = g.children(".fpd-navigation"), i = g.children(".fpd-content"), l = i.find(".fpd-toolbar"), m = l.children(".fpd-element-buttons"), n = l.children(".fpd-color-picker"), p = l.children(".fpd-patterns-wrapper"), f.hasClass("fpd-horizontal") ? (g.css("width", d.dimensions.sidebarHeight), h.find("li").css("line-height", d.dimensions.sidebarNavWidth + "px"), h.css("height", d.dimensions.sidebarNavWidth)) : (g.css("height", d.dimensions.sidebarHeight), h.css("width", d.dimensions.sidebarNavWidth), i.css("width", d.dimensions.sidebarContentWidth)), f.trigger("templateLoad", [this.url]), a.post(d.templatesDirectory + "productstage.php", function (b) {
                f.append(a.parseHTML(b)), j = f.children(".fpd-product-container").css({
                    width: d.dimensions.productStageWidth
                }), j.children(".fpd-product-stage").height(d.dimensions.productStageHeight), k = j.children(".fpd-menu-bar"), v = j.append('<div class="fpd-product-loader"><div class="fpd-loading-gif"></div></div>').children(".fpd-product-loader"), f.trigger("templateLoad", [this.url]), J()
            })
        });
        var J = function () {
                var b = j.children(".fpd-product-stage").children("canvas").get(0);
                
                //var myRect = new fabric.Rect({ width: 100, height: 50, fill: 'red' });
                //var canvas = new fabric.Canvas(b);

                
                

                e = new fabric.Canvas(b, {
                    selection: !1,
                    hoverCursor: "pointer",
                    rotationCursor: "default"
                }), e.setDimensions({
                    width: d.dimensions.productStageWidth,
                    height: d.dimensions.productStageHeight
                }), q = j.append('<div class="fpd-modification-tooltip"></div>').children(".fpd-modification-tooltip").tooltipster({
                    offsetY: -3,  
                    theme: ".fpd-tooltip-theme",
                    delay: 0,
                    speed: 0,
                    touchDevices: !1
                }), e.on({
                    "mouse:down": function (a) {
                        void 0 == a.target && P()
                    },
                    "object:moving": function (a) {
                        D.params.x = Math.round(a.target.left), D.params.y = Math.round(a.target.top), Q(a.target), D.lockMovementX || (M(d.labels.modificationTooltips.x + Math.round(a.target.left) + d.labels.modificationTooltips.y + Math.round(a.target.top), "moved"), Z(D))
                    },
                    "object:scaling": function (a) {
                        D.params.scale = Number(a.target.scaleX).toFixed(2), D.params.x = Math.round(a.target.left), D.params.y = Math.round(a.target.top), a.target.setCoords(), Q(a.target), D.lockScalingX || (M(d.labels.modificationTooltips.width + Math.round(D.getWidth()) + d.labels.modificationTooltips.height + Math.round(D.getHeight()), "scaled"), Z(D))
                    },
                    "object:rotating": function (a) {
                        D.params.degree = Math.round(a.target.angle), Q(a.target), D.lockRotation || (M(d.labels.modificationTooltips.angle + Math.round(a.target.angle) % 360, "rotated"), Z(D))
                    },
                    "object:selected": function (a) {
                        P(!1), D = a.target;
                        var b = D.params;
                        if (Z(D), D.set({
                            borderColor: "white",
                            cornerColor: "transparent",
                            cornerSize: 16,
                            rotatingPointOffset: 0,
                            padding: 7
                        }), i.find(".fpd-elements-dropdown").children('option[value="' + D.id + '"]').prop("selected", !0).parent().trigger("chosen:updated"), Array.isArray(b.colors) && 0 != _(D) ? (n.children("input").val(b.currentColor ? b.currentColor : b.colors[0]), b.colors.length > 1 ? n.children("input").spectrum({
                            preferredFormat: "hex",
                            showPaletteOnly: !0,
                            showPalette: !0,
                            palette: b.colors,
                            chooseText: d.labels.colorpicker.change,
                            cancelText: d.labels.colorpicker.cancel,
                            change: function (a) {
                                N(D, a.toHexString())
                            }
                        }) : n.children("input").spectrum("destroy").spectrum({
                            preferredFormat: "hex",
                            showInput: !0,
                            chooseText: d.labels.colorpicker.change,
                            cancelText: d.labels.colorpicker.cancel,
                            change: function (a) {
                                N(D, a.toHexString())
                            }
                        }), n.show()) : n.hide(), "text" == D.type && (o.children('option[value="' + b.font + '"]').prop("selected", "selected").trigger("chosen:updated"), o.parent().show(), l.children(".fpd-customize-text").show().children("textarea").val(D.getText()), b.patternable && p.show()), b.draggable ? m.children(".fpd-center-horizontal, .fpd-center-vertical").show() : m.children(".fpd-center-horizontal, .fpd-center-vertical").hide(), b.zChangeable ? m.children(".fpd-move-down, .fpd-move-up").show() : m.children(".fpd-move-down, .fpd-move-up").hide(), b.removable ? m.children(".fpd-trash").show() : m.children(".fpd-trash").hide(), b.boundingBox && !d.editorMode)
                            if ("object" == typeof b.boundingBox) x = new fabric.Rect({
                                left: b.boundingBox.x,
                                top: b.boundingBox.y,
                                width: b.boundingBox.width,
                                height: b.boundingBox.height,
                                stroke: "blue",
                                strokeWidth: 3,
                                strokeDashArray: [10, 5],
                                fill: !1,
                                selectable: !1,
                                isBoundingRect: !0,
                                originX: "center",
                                originY: "center"
                            }), e.add(x), x.moveTo(e.getObjects().indexOf(D));
                            else
                                for (var c = e.getObjects(), g = 0; g < c.length; ++g) {
                                    var j = c[g];
                                    if (j.viewIndex == B && b.boundingBox == j.title && null == x) {
                                        x = j, j.stroke = "blue", j.strokeWidth = 10;
                                        break
                                    }
                                }
                            e.renderAll(), l.show(), h.find('li[data-target=".fpd-edit-elements"]').click(), Q(D), f.trigger("elementSelect", [D])

                    }
                });
                for (var c = [], g = 0; g < r.length; ++g) {
                    c = a(r.get(g)).children(".fpd-product"), c.splice(0, 0, r.get(g));
                    var t = [];
                    c.each(function (b, c) {
                        var d = a(c),
                            e = {
                                title: c.title,
                                thumbnail: d.data("thumbnail"),
                                elements: []
                            };
                        d.children("img,span").each(function (b, c) {
                            var d = a(c),
                                f = {
                                    type: d.is("img") ? "image" : "text",
                                    source: d.is("img") ? d.attr("src") : d.text(),
                                    title: d.attr("title"),
                                    parameters: void 0 == d.data("parameters") ? {} : d.data("parameters")
                                };
                            e.elements.push(f)
                        }), t.push(e)
                    }), w.addProduct(t)
                }
                if (s.size() > 0) {
                    if (s.children(".fpd-category").length > 0) {
                        var y = s.children(".fpd-category");
                        $designCategories = i.find(".fpd-designs").prepend('<select class="fpd-design-categories" style="width: 100%;" tabindex="1"></select>').children(".fpd-design-categories").change(function () {
                            var b = y.filter('[title="' + this.value + '"]').children("img");
                            i.find(".fpd-designs ul").empty();
                            for (var c = 0; c < b.length; ++c) w.addDesign(a(b[c]).attr("src"), b[c].title, a(b[c]).data("parameters"))
                        }), d._useChosen && $designCategories.chosen({
                            width: "100%"
                        });
                        for (var g = 0; g < y.length; g++) $designCategories.append('<option value="' + y[g].title + '">' + y[g].title + "</option>").trigger("chosen:updated");
                        $designCategories.change()
                    } else
                        for (var z = s.children("img"), g = 0; g < z.length; ++g) w.addDesign(a(z[g]).attr("src"), z[g].title, a(z[g]).data("parameters"));
                    s.remove()
                }
                if (h.find('li[data-target=".fpd-edit-elements"]').show(), d.customTexts) {
                    var A = i.children(".fpd-custom-text"),
                        F = A.children("textarea").val();
                    h.find('li[data-target=".fpd-custom-text"]').show(), A.children(".fpd-button-submit").click(function (a) {
                        a.preventDefault();
                        var b = A.children("textarea").val();
                        w.addElement("text", b, b, d.customTextParameters, B), A.children("textarea").removeClass("fpd-active").val(F)
                    }), A.children("textarea").focusin(function () {
                        var b = a(this);
                        this.value == F && (b.addClass("fpd-active"), this.value = "")
                    }).focusout(function () {
                        var b = a(this);
                        "" == this.value && (this.value = F, b.removeClass("fpd-active"))
                    })
                }
                if (d.uploadDesigns) {
                    var G = i.children(".fpd-upload-designs");
                    h.find('li[data-target=".fpd-upload-designs"]').show(), G.children(".fpd-button-submit").click(function (a) {
                        a.preventDefault(), G.find(".fpd-input-design").click()
                    }), G.find(".fpd-upload-form").change(function (a) {
                        if (window.FileReader) {
                            var b = new FileReader,
                                c = a.target.files[0].name;
                            b.readAsDataURL(a.target.files[0]), b.onload = function (a) {
                                var b = new Image;
                                b.src = a.target.result, b.onload = function () {
                                    var b = this.height,
                                        e = this.width;
                                    return e > d.customImagesParameters.maxW || e < d.customImagesParameters.minW || b > d.customImagesParameters.maxH || b < d.customImagesParameters.minH ? (alert(d.labels.uploadedDesignSizeAlert), !1) : (d.customImagesParameters.scale = X(e, b, d.customImagesParameters.resizeToW, d.customImagesParameters.resizeToH), w.addElement("image", a.target.result, c, d.customImagesParameters), void 0)
                                }, b.onerror = function () {
                                    alert("Image could not be loaded!")
                                }
                            }
                        } else alert("FileReader API is not supported in your browser, please use Firefox, Safari, Chrome or IE10!")
                    })
                }
                if (d.facebookAppId && d.facebookAppId.length > 0) {
                    var H = i.children(".fpd-fb-user-photos"),
                        I = H.find("select"),
                        J = H.find(".fpd-fb-user-photos-list"),
                        K = H.find(".fpd-loading-gif");
                    h.find('li[data-target=".fpd-fb-user-photos"]').show(), d._useChosen && I.chosen({
                        width: "100%"
                    });
                    var L = H.find(".fpd-fb-friends-select").change(function () {
                            K.show();
                            var b = a(this).children("option:selected").val();
                            J.empty().css("visibility", "hidden"), O.children("option:not(:first)").remove(), FB.api("/" + b + "/albums", function (a) {
                                for (var b = a.data, c = 0; c < b.length; ++c) {
                                    var d = b[c];
                                    O.append('<option value="' + d.id + '">' + d.name + "</option>")
                                }
                                O.trigger("chosen:updated").next(".chosen-container").show(), K.hide()
                            })
                        }),
                        O = H.find(".fpd-fb-user-albums").change(function () {
                            K.show();
                            var b = a(this).children("option:selected").val();
                            J.css("visibility", "hidden").empty(), FB.api("/" + b, function (c) {
                                var e = c.count;
                                FB.api("/" + b + "?fields=photos.limit(" + e + ")", function (b) {
                                    if (!b.error) {
                                        for (var c = b.photos.data, e = 0; e < c.length; ++e) {
                                            var f = c[e],
                                                g = f.images[f.images.length - 1] ? f.images[f.images.length - 1].source : f.source;
                                            J.append('<li><span class="fpd-loading-gif"></span><img src="' + g + '" title="' + f.id + '" data-picture="' + f.source + '" style="display: none;" /></li>').children("li:last").click(function (b) {
                                                b.preventDefault(), v.show();
                                                var c = a(this).children("img");
                                                a.post(d.phpDirectory + "get_image_data_url.php", {
                                                    url: c.data("picture")
                                                }, function (a) {
                                                    if (a && void 0 == a.error) {
                                                        var b = new Image;
                                                        b.src = a.data_url, b.onload = function () {
                                                            d.customImagesParameters.scale = X(this.width, this.height, d.customImagesParameters.resizeToW, d.customImagesParameters.resizeToH), w.addElement("image", this.src, c.attr("title"), d.customImagesParameters, B)
                                                        }
                                                    } else alert(a.error);
                                                    v.hide()
                                                }, "json").fail(function (a) {
                                                    v.hide(), alert(a.statusText)
                                                })
                                            }).children("img").load(function () {
                                                a(this).fadeIn(500).prev("span").fadeOut(300, function () {
                                                    a(this).remove()
                                                })
                                            }).error(function () {
                                                a(this).parent().remove()
                                            })
                                        }
                                        W(J), J.css("visibility", "visible")
                                    }
                                    K.hide()
                                })
                            })
                        });
                    a.ajaxSetup({
                        cache: !0
                    }), a.getScript("//connect.facebook.net/en_UK/all.js", function () {
                        FB.init({
                            appId: d.facebookAppId,
                            status: !0,
                            cookie: !0,
                            xfbml: !0
                        }), FB.Event.subscribe("auth.statusChange", function (a) {
                            "connected" === a.status ? (K.show(), FB.api("/me", function (a) {
                                L.append('<option value="' + a.id + '">' + a.name + "</option>"), FB.api("/me/friends", function (a) {
                                    for (var b = a.data.sort(Y), c = 0; c < b.length; ++c) {
                                        var d = b[c];
                                        L.append('<option value="' + d.id + '">' + d.name + "</option>")
                                    }
                                    L.trigger("chosen:updated").next(".chosen-container").show()
                                }), K.hide()
                            })) : (J.empty().css("visibility", "hidden"), I.children("option:not(:first)").remove(), I.trigger("chosen:updated").next(".chosen-container").hide())
                        })
                    })
                }
                if (d.allowProductSaving && f.attr("id")) {
                    h.find('li[data-target=".fpd-saved-products"]').show(), k.find(".fpd-save-product").click(function (a) {
                        a.preventDefault(), P();
                        var b = w.getProduct(!1),
                            c = w.getViewsDataURL()[0],
                            d = R();
                        null == d && (d = new Array), d.push({
                            thumbnail: c,
                            product: b
                        }), window.localStorage.setItem(f.attr("id"), JSON.stringify(d)), V(c, b)
                    });
                    var S = R();
                    if (null != S)
                        for (var g = 0; g < S.length; ++g) {
                            var U = S[g];
                            V(U.thumbnail, U.product)
                        }
                } else k.find(".fpd-save-product").parent().hide(); if (d.saveAsPdf && window.jsPDF ? k.find(".fpd-save-pdf").click(function (a) {
                    a.preventDefault(), P();
                    for (var b = new jsPDF, c = w.getViewsDataURL("jpeg", "white"), d = 0; d < c.length; ++d) b.addImage(c[d], "JPEG", 0, 0), d < c.length - 1 && b.addPage();
                    b.save("Product.pdf")
                }) : k.find(".fpd-save-pdf").parent().hide(), h.find("ul li").click(function (b) {
                    b.preventDefault();
                    var c = a(this);
                    if (!c.hasClass("fpd-content-color")) {
                        c.parent().children("li").removeClass("fpd-content-color"), c.addClass("fpd-content-color"), i.children("div").hide().children("ul").getNiceScroll().remove();
                        var d = i.children(c.data("target")).show();
                        d.children("ul").size() > 0 && W(d.children("ul"))
                    }
                }).filter(":visible:first").click(), i.find(".fpd-elements-dropdown").change(function () {
                    if ("none" == this.value) P();
                    else
                        for (var a = e.getObjects(), b = 0; b < a.length; ++b)
                            if (a[b].id == this.value) {
                                e.setActiveObject(a[b]);
                                break
                            }
                }), d.fonts.length > 0 && d.fontDropdown) {
                    o = l.find(".fpd-fonts-dropdown").change(function () {
                        D.getWidth(), D.setFontFamily(this.value), D.params.font = this.value, $(this.value), Q(D), e.renderAll(), o.trigger("chosen:updated")
                    }), d._useChosen && o.chosen({
                        width: "100%"
                    }), d.fonts.sort(), 0 == d.defaultFont && (d.defaultFont = d.fonts[0]);
                    for (var g = 0; g < d.fonts.length; ++g) o.append('<option value="' + d.fonts[g] + '" style="font-family: ' + d.fonts[g] + ';">' + d.fonts[g] + "</option>").trigger("chosen:updated");
                    o.children('option[value="' + d.defaultFont + '"]').prop("selected", "selected"), o.parent().show()
                }
                if (l.children(".fpd-customize-text").children("textarea").keyup(function () {
                    D.setText(this.value), D.params.text = this.value, e.renderAll(), Q(D) ? M() : q.tooltipster("hide")
                }), l.find(".fpd-text-styles").children("button").click(function (b) {
                    b.preventDefault();
                    var c = a(this);
                    c.hasClass("fpd-align-left") ? (D.setTextAlign("left"), D.params.textAlign = "left") : c.hasClass("fpd-align-center") ? (D.setTextAlign("center"), D.params.textAlign = "center") : c.hasClass("fpd-align-right") ? (D.setTextAlign("right"), D.params.textAlign = "right") : c.hasClass("fpd-bold") ? "bold" == D.getFontStyle() ? (D.setFontStyle("normal"), D.params.fontStyle = "normal") : (D.setFontStyle("bold"), D.params.fontStyle = "bold") : c.hasClass("fpd-italic") && ("italic" == D.getFontStyle() ? (D.setFontStyle("normal"), D.params.fontStyle = "normal") : (D.setFontStyle("italic"), D.params.fontStyle = "italic")), e.renderAll()
                }), d.patterns && d.patterns.length > 0) {
                    for (var g = 0; g < d.patterns.length; ++g) {
                        var bb = d.patterns[g];
                        p.children("ul").append('<li><img src="' + bb + '" class="" /></li>').children("li:last").click(function () {
                            ab(a(this).children("img").attr("src"), D)
                        })
                    }
                    p.children("ul").niceScroll({
                        cursorcolor: "#2E3641"
                    })
                }
                m.children(".fpd-center-horizontal, .fpd-center-vertical").click(function (b) {
                    b.preventDefault();
                    var c = a(this);
                    T(D, c.hasClass("fpd-center-horizontal"), c.hasClass("fpd-center-vertical"), x ? x.getBoundingRect() : !1)
                }), m.children(".fpd-move-down, .fpd-move-up").click(function (b) {
                    b.preventDefault();
                    for (var c, d = e.getObjects(), f = null, g = null, h = 0; h < d.length; ++h) d[h].viewIndex == B && (null == f && (f = h), null == g ? g = h : g++), d[h] == D && (c = h);
                    c > g && (c = g), f > c && (c = f), a(this).hasClass("fpd-move-down") ? c != f && D.moveTo(c - 1) : c != g && D.moveTo(c + 1)
                }), m.children(".fpd-reset").click(function (a) {
                    if (a.preventDefault(), D) {
                        var b = D.params;
                        "text" == D.type && (D.fontSize = b.textSize, D.setText(b.source), D.setFontFamily(b.originFont), D.setTextAlign("left"), D.setFontStyle("normal"), l.children(".fpd-customize-text").children("textarea").val(b.source), o.children('option[value="' + d.defaultFont + '"]').prop("selected", "selected")), D.left = b.originX, D.top = b.originY, D.scaleX = b.originScale, D.scaleY = b.originScale, D.angle = 0, b.colors && b.currentColor != b.colors[0] && N(D, b.colors[0]), Q(D), e.renderAll(), b.x = b.originX, b.y = b.originY, b.degree = 0, D.params = b
                    }
                }), m.children(".fpd-trash").click(function (a) {
                    a.preventDefault(), 0 != D.params.price && (E -= D.params.price, f.trigger("priceChange", [D.params.price, E])), i.find(".fpd-elements-dropdown").children('option[value="' + D.id + '"]').remove().trigger("chosen:updated"), D.remove(), f.trigger("elementRemove", [D]), P()
                }), k.find(".fpd-download-image").click(function (a) {
                    a.preventDefault(), w.createImage(!0, !0)
                }), k.find(".fpd-print").click(function (a) {
                    a.preventDefault(), w.print()
                }), k.find(".fpd-reset-product").click(function (a) {
                    a.preventDefault(), w.loadProduct(C)
                }), d._useChosen && i.find(".fpd-elements-dropdown").chosen({
                    width: "100%"
                }), f.find(".chosen-container").addClass("fpd-border-color"), d.editorMode && a.post(d.templatesDirectory + "editorbox.php", function (b) {
                    f.after(a.parseHTML(b)), u = f.next(".fpd-editor-box")
                }), f.trigger("ready"), i.find(".fpd-products ul li:first").size() > 0 ? i.find(".fpd-products ul li:first").click() : v.hide()
            },
            K = function (a) {
                var b = a.params;
                return ("object" == typeof b.colors || b.removable || b.draggable || b.resizable || b.rotatable || b.zChangeable) && (a.isEditable = a.evented = !0, a.set("selectable", !0), a.viewIndex == B && i.find(".fpd-elements-dropdown").append('<option value="' + a.id + '">' + a.title + "</option>").trigger("chosen:updated")), d.editorMode ? !1 : (b.draggable && (a.lockMovementX = a.lockMovementY = !1), b.rotatable && (a.lockRotation = !1), b.resizable && (a.lockScalingX = a.lockScalingY = !1), (b.resizable || b.rotatable) && (a.hasControls = !0), void 0)
            },
            L = function (a, b) {
                function c() {
                    if (e++, e < b.length) {
                        var d = b[e];
                        w.addElement(d.type, d.source, d.title, d.parameters, y - 1)
                    } else f.off("elementAdded", c), f.trigger("viewCreate", [b, a])
                }
                var d = b[0];
                if (d) {
                    var e = 0;
                    f.on("elementAdded", c), w.addElement(d.type, d.source, d.title, d.parameters, y - 1)
                } else f.trigger("viewCreate", [b, a])
            },
            M = function (a, b) {
                var c = D.left,
                    f = D.top;
                D.setCoords(), "moved" == b ? (c = D.oCoords.tl.x, f = D.oCoords.tl.y) : "scaled" == b ? (c = D.oCoords.br.x, f = D.oCoords.br.y) : (c = D.oCoords.mt.x, f = D.oCoords.mt.y), D.isOut && (a = '"' + D.title + '"' + d.labels.outOfContainmentAlert), q.css({
                    left: c,
                    top: f + k.height()
                }).tooltipster("reposition").tooltipster("show").tooltipster("update", a), e.on({
                    "mouse:up": function () {
                        q.tooltipster("hide"), e.off("mouseup")
                    }
                })
            },
            N = function (a, b) {
                if (4 == b.length && (b += b.substr(1, b.length)), "text" == a.type) a.setFill(b), e.renderAll(), a.params.pattern = null;
                else {
                    var c = _(a);
                    "png" == c ? (a.filters.push(new fabric.Image.filters.Tint({
                        color: b,
                        opacity: 1
                    })), a.applyFilters(e.renderAll.bind(e))) : "svg" == c && a.setFill(b)
                }
                a.params.currentColor = b, n.children("input").spectrum("set", b), O(a, b), Z(a)
            },
            O = function (a, b) {
                if (a.colorControlFor)
                    for (var c = a.colorControlFor, d = 0; d < c.length; ++d) N(c[d], b)
            },
            P = function (a) {
                a = "undefined" == typeof a ? !0 : a, x && (x.isBoundingRect && x.remove(), x.stroke = null, x = null), a && e.discardActiveObject(), e.renderAll(), i.find(".fpd-elements-dropdown").children("option:first").prop("selected", !0).trigger("chosen:updated"), l.hide().children(".fpd-color-picker, .fpd-fonts-dropdown-wrapper, .fpd-customize-text").hide(), p.hide(), l.children(".fpd-customize-text").children("textarea").val(""), D = null, u && u.find("i").text("")
            },
            Q = function (a) {
                if (x) {
                    a.setCoords();
                    var b = (a.getBoundingRect(), x.getBoundingRect(), !1),
                        c = a.isOut,
                        b = !a.isContainedWithinObject(x);
                    return b ? (a.borderColor = "red", a.opacity = .5, a.isOut = !0) : (a.borderColor = "white", a.opacity = 1, a.isOut = !1), c != a.isOut && void 0 != c && (b ? f.trigger("elementOut") : f.trigger("elementIn")), b
                }
                return !1
            },
            R = function () {
                return JSON.parse(window.localStorage.getItem(f.attr("id")))
            },
            S = function (a) {
                a.params.boundingBox ? U(a) : T(a, !0, !0, !1), a.params.autoCenter = !1
            },
            T = function (a, b, c, d) {
                b && (d ? a.left = d.left + .5 * d.width : a.centerH()), c && (d ? a.top = d.top + .5 * d.height : a.centerV()), Q(a), e.renderAll(), a.setCoords(), a.params.x = a.left, a.params.y = a.top
            },
            U = function (a) {
                var b = a.params;
                if (b.boundingBox) {
                    var c;
                    if ("object" == typeof b.boundingBox) c = {
                        left: b.boundingBox.x - .5 * b.boundingBox.width,
                        top: b.boundingBox.y - .5 * b.boundingBox.height,
                        width: b.boundingBox.width,
                        height: b.boundingBox.height
                    };
                    else
                        for (var d = e.getObjects(), f = 0; f < d.length; ++f) {
                            var g = d[f];
                            if (g.viewIndex == B && b.boundingBox == g.title) {
                                c = g.getBoundingRect();
                                break
                            }
                        }
                    c && (T(a, !0, !0, c), a.params.originX = a.left, a.params.originY = a.top)
                }
            },
            V = function (b, c) {
                var e = i.children(".fpd-saved-products").children("ul");
                e.append('<li><button><span>&times;</span></button><img src="' + b + '" /></li>').children("li:last").children("img").click(function (b) {
                    b.preventDefault(), w.loadProduct(a(this).data("product")), z = -1
                }).data("product", c).parent().children("button").click(function (b) {
                    b.preventDefault();
                    var c = confirm(d.labels.confirmProductDelete);
                    if (!c) return !1;
                    var g = e.children("li").index(a(this).parent("li").remove()),
                        h = R();
                    h.splice(g, 1), window.localStorage.setItem(f.attr("id"), JSON.stringify(h))
                })
            },
            W = function (a) {
                a.height(a.parent().height() - a.position().top - 1).niceScroll({
                    cursorcolor: "#2E3641"
                })
            },
            X = function (a, b, c, d) {
                var e = 1;
                return a > b ? (a > c && (e = c / a), e * b > d && (e = d / b)) : (b > d && (e = d / b), e * a > c && (e = c / a)), e
            },
            Y = function (a, b) {
                var c = a.name.toLowerCase(),
                    d = b.name.toLowerCase();
                return d > c ? -1 : c > d ? 1 : 0
            },
            Z = function (a) {
                if (void 0 == u) return !1;
                var b = a.params;
                u.find(".fpd-current-element").text(a.title), u.find(".fpd-position").text("x: " + b.x + " y: " + b.y), u.find(".fpd-dimensions").text("width: " + Math.round(a.getWidth()) + " height: " + Math.round(a.getHeight())), u.find(".fpd-scale").text(Number(b.scale) % 360), u.find(".fpd-degree").text(b.degree), u.find(".fpd-color").text(b.currentColor)
            },
            $ = function (a) {
                WebFont.load({
                    custom: {
                        families: [a]
                    },
                    fontactive: function () {
                        e.renderAll()
                    }
                })
            },
            _ = function (b) {
                if ("text" == b.type) return "text";
                var c = b.source.split(".");
                return 1 == c.length ? -1 == c[0].search("data:image/png;") ? (b.params.currentColor = b.params.colors = !1, !1) : "dataurl" : -1 == a.inArray("png", c) && -1 == a.inArray("svg", c) ? (b.params.currentColor = b.params.colors = !1, !1) : -1 == a.inArray("svg", c) ? "png" : "svg"
            },
            ab = function (a, b) {
                "image" == b.type || "text" == b.type && fabric.util.loadImage(a, function (c) {
                    b.fill = new fabric.Pattern({
                        source: c,
                        repeat: "repeat"
                    }), e.renderAll(), b.params.pattern = a
                })
            },
            bb = function (a, b) {
                for (var c = e.getObjects(), d = 0, f = 0; f < c.length; ++f) {
                    var g = c[f];
                    if (g.visible) {
                        if (d == b) {
                            a.moveTo(f);
                            break
                        }
                        d++
                    }
                }
            };
        this.getFabricJSON = function () {
            P();
            var a = e.toJSON(["viewIndex"]);
            return a.width = e.width, a.height = e.height, a
        }, this.getPrice = function () {
            return E
        }, this.getProduct = function (a) {
            onlyEditableElemets = "undefined" != typeof a ? a : !1, P();
            for (var b = e.getObjects(), c = 0; c < b.length; ++c) {
                var f = b[c];
                if (f.isOut) return alert('"' + f.title + '"' + d.labels.outOfContainmentAlert), !1
            }
            for (var g = [], c = 0; c < C.length; ++c) {
                var h = C[c];
                g.push({
                    title: h.title,
                    thumbnail: h.thumbnail,
                    elements: []
                })
            }
            for (var c = 0; c < b.length; ++c) {
                var f = b[c],
                    i = {
                        title: f.title,
                        source: f.source,
                        parameters: f.params,
                        type: f.type
                    };
                a ? f.isEditable && g[f.viewIndex].elements.push(i) : g[f.viewIndex].elements.push(i)
            }
            return g
        }, this.getViewsDataURL = function (a, b) {
            a = "undefined" != typeof a ? a : "png", b = "undefined" != typeof b ? b : "transparent";
            var c = [];
            return e.setBackgroundColor(b, function () {
                for (var b = e.getObjects(), d = 0; y > d; ++d) {
                    for (var f = 0; f < b.length; ++f) {
                        var g = b[f];
                        g.visible = g.viewIndex == d
                    }
                    c.push(e.toDataURL({
                        format: a
                    }))
                }
                for (var d = 0; d < b.length; ++d) {
                    var g = b[d];
                    g.visible = g.viewIndex == B
                }
                e.setBackgroundColor("transparent").renderAll()
            }), c
        }, this.getProductDataURL = function (a, b) {
            a = "undefined" != typeof a ? a : "png", b = "undefined" != typeof b ? b : "transparent", P(), t.children("li:first").click();
            var c;
            return e.setBackgroundColor(b, function () {
                e.setDimensions({
                    height: d.dimensions.productStageHeight * y
                });
                for (var b = e.getObjects(), f = 0; f < b.length; ++f) {
                    var g = b[f];
                    g.visible = !0, g.top = g.top + g.viewIndex * d.dimensions.productStageHeight
                }
                c = e.toDataURL({
                    format: a
                }), e.setDimensions({
                    height: d.dimensions.productStageHeight
                });
                for (var f = 0; f < b.length; ++f) {
                    var g = b[f];
                    g.visible = 0 == g.viewIndex, g.top = g.top - g.viewIndex * d.dimensions.productStageHeight
                }
                e.setBackgroundColor("transparent").renderAll()
            }), c
        }, this.getProductsLength = function () {
            return i.find(".fpd-products ul li").size()
        }, this.getView = function () {
            return C[B]
        }, this.getViewDataURL = function (a) {
            return a = "undefined" != typeof a ? a : "png", e.toDataURL({
                format: a
            })
        }, this.getViewIndex = function () {
            return B
        }, this.getStage = function () {
            return e
        }, this.addProduct = function (b) {
            i.find(".fpd-products ul").append('<li><span class="fpd-loading-gif"></span><img src="' + b[0].thumbnail + '" title="' + b[0].title + '" style="display:none;" /></li>').children("li:last").click(function (b) {
                b.preventDefault();
                var c = a(this),
                    d = i.find(".fpd-products ul li").index(c);
                w.selectProduct(d)
            }).data("views", b).children("img").load(function () {
                a(this).fadeIn(500).prev("span").fadeOut(300, function () {
                    a(this).remove()
                })
            }), i.find(".fpd-designs ul").getNiceScroll().resize(), i.find(".fpd-products ul").children("li").length > 1 && h.find('li[data-target=".fpd-products"]').show()
        }, this.loadProduct = function (a) {
            function b() {
                y < C.length ? w.addView(C[y]) : (f.off("viewCreate", b), f.trigger("productCreate", [A]), v.stop().fadeOut(300))
            }
            w.clear(), v.stop().fadeIn(300), C = a, A = C[0].title, j.append('<ul class="fpd-views-selection"></ul>'), f.on("viewCreate", b), w.addView(C[0])
        }, this.selectProduct = function (a) {
            if (a == z) return !1;
            z = a, 0 > a ? z = 0 : a > w.getProductsLength() - 1 && (z = w.getProductsLength() - 1);
            var b = i.find(".fpd-products ul li").eq(z).data("views");
            w.loadProduct(b)
        }, this.selectView = function (a) {
            if (a == B) return !1;
            B = a, 0 > a ? B = 0 : a > t.children("li").size() - 1 && (B = t.children("li").size() - 1), P(), i.find(".fpd-elements-dropdown").children('option:not([value="none"])').remove();
            for (var b = e.getObjects(), c = 0; c < b.length; ++c) {
                var d = b[c];
                d.visible = d.viewIndex == B, d.viewIndex == B && d.isEditable && i.find(".fpd-elements-dropdown").append('<option value="' + d.id + '">' + d.title + "</option>")
            }
            i.find(".fpd-elements-dropdown").trigger("chosen:updated"), e.renderAll()
        }, this.removeProduct = function (a) {
            0 > a ? a = 0 : a > w.getProductsLength() - 1 && (a = w.getProductsLength() - 1), g.children("li").eq(a).remove(), a == z && (w.clear(), z = -1)
        }, this.addView = function (b) {
            y++, L(b.title, b.elements), t = j.children(".fpd-views-selection"), t.append('<li class="fpd-content-color"><img src="' + b.thumbnail + '" title="' + b.title + '" class="fpd-tooltip" /></li>').children("li:last").click(function (b) {
                b.preventDefault(), w.selectView(t.children("li").index(a(this)))
            }), a(".fpd-tooltip").tooltipster({
                offsetY: -3,
                theme: ".fpd-tooltip-theme",
                touchDevices: !1
            }), y > 1 ? t.show() : t.hide()
        }, this.addElement = function (b, c, g, h, i) {
            if (i = "undefined" != typeof i ? i : B, P(), "object" != typeof h) return alert("The element " + g + " has not a valid JSON object as parameters!"), !1;
            h = a.extend({}, d.elementParameters, h), h.originX = h.x, h.originY = h.y, h.originScale = h.scale, h.source = c;
            var j = !1,
                k = null;
            if (h.colors && "string" == typeof h.colors)
                if (0 == h.colors.indexOf("#")) {
                    var l = h.colors.replace(/\s+/g, "").split(",");
                    h.colors = l
                } else if (y > 1)
                for (var m = e.getObjects(), n = 0; n < m.length; ++n) {
                    var o = m[n];
                    0 == o.viewIndex && h.colors == o.title && null == k && (k = o, j = !0)
                }
            var p = {
                source: c,
                title: g,
                top: h.y,
                left: h.x,
                originX: "center",
                originY: "center",
                scaleX: h.scale,
                scaleY: h.scale,
                angle: h.degree,
                id: String((new Date).getTime()),
                visible: i == B,
                viewIndex: i,
                lockUniScaling: !0,
                lineHeight: 1.2
            };
            if (d.editorMode ? h.removable = h.resizable = h.rotatable = h.zChangeable = !0 : a.extend(p, {
                selectable: !1,
                lockRotation: !0,
                lockScalingX: !0,
                lockScalingY: !0,
                lockMovementX: !0,
                lockMovementY: !0,
                hasControls: !1,
                evented: !1
            }), "image" == b || "path" == b) {
                var q = function (b, c) {
                        b.width * c.scale, b.height * c.scale, a.extend(p, {
                            scaleX: c.scale,
                            scaleY: c.scale,
                            params: c,
                            crossOrigin: "anonymous"
                        }), b.set(p), j && (k.colorControlFor ? k.colorControlFor.push(b) : (k.colorControlFor = [], k.colorControlFor.push(b))), K(b), e.add(b), c.autoCenter && S(b), c.currentColor && N(b, c.currentColor), c.z !== !1 && bb(b, c.z), f.trigger("elementAdded", [b])
                    },
                    r = c.split("."); - 1 != a.inArray("svg", r) ? fabric.loadSVGFromURL(c, function (a) {
                    a = a[0], q(a, h)
                }) : new fabric.Image.fromURL(c, function (a) {
                    q(a, h)
                })
            } else {
                if ("text" != b) return alert("Sorry. This type of element is not allowed!"), !1;
                h.text = h.text ? h.text : h.source, h.font = h.font ? h.font : d.defaultFont, h.textSize = h.textSize ? h.textSize : d.textSize, h.fontStyle = h.fontStyle ? h.fontStyle : "normal", h.textAlign = h.textAlign ? h.textAlign : "left", h.originFont = h.font, a.extend(p, {
                    fontSize: h.textSize,
                    fontFamily: h.font,
                    fontStyle: h.fontStyle,
                    textAlign: h.textAlign,
                    fill: h.colors[0] ? h.colors[0] : "#000000",
                    params: h
                });
                var s = new fabric.Text(h.text.replace(/\\n/g, "\n"), p);
                e.add(s), K(s), h.autoCenter && S(s), h.currentColor && N(s, h.currentColor), h.pattern && ab(h.pattern, s), h.z !== !1 && bb(s, h.z), $(h.font), f.trigger("elementAdded", [s])
            }
            h.price && (E += h.price, f.trigger("priceChange", [h.price, E]))
        }, this.addDesign = function (b, c, d) {
            i.find(".fpd-designs ul").append('<li><span class="fpd-loading-gif"></span><img src="' + b + '" title="' + c + '" style="display: none;" /></li>').children("li:last").click(function (b) {
                b.preventDefault();
                var c = a(this),
                    d = c.data("parameters");
                w.addElement("image", c.children("img").attr("src"), c.children("img").attr("title"), d, B)
            }).data("parameters", d).children("img").load(function () {
                a(this).fadeIn(500).prev("span").fadeOut(300, function () {
                    a(this).remove()
                })
            }), i.find(".fpd-designs ul").getNiceScroll().resize(), i.find(".fpd-designs ul li").length > 0 && h.find('li[data-target=".fpd-designs"]').show()
        }, this.print = function () {
            var b = new Image;
            return b.src = w.getProductDataURL(), b.onload = function () {
                var b = window.open("", "", "width=" + this.width + ",height=" + this.height + ",location=no,menubar=no,scrollbars=yes,status=no,toolbar=no");
                b.document.title = "Print Image", a(b.document.body).append('<img src="' + this.src + '" />'), setTimeout(function () {
                    b.print()
                }, 1e3)
            }, !1
        }, this.createImage = function (b, c) {
            "undefined" == typeof b && (b = !0), "undefined" == typeof c && (c = !1);
            var d = w.getProductDataURL(),
                e = new Image;
            return e.src = d, e.onload = function () {
                if (b) {
                    var e = window.open("", "", "width=" + this.width + ",height=" + this.height + ",location=no,menubar=no,scrollbars=yes,status=no,toolbar=no");
                    e.document.title = "Product Image", a(e.document.body).append('<img src="' + this.src + '" />'), c && (window.location.href = e.document.getElementsByTagName("img")[0].src.replace("image/png", "image/octet-stream"))
                }
                f.trigger("imageCreate", [d])
            }, e
        }, this.clear = function () {
            P(), t && t.remove(), i.find(".fpd-elements-dropdown").children('option:not([value="none"])').remove(), i.find(".fpd-elements-dropdown").trigger("chosen:updated"), e.clear(), y = B = E = 0, C = D = null, f.trigger("stageClear")
        }, fabric.Object.prototype.drawControls = function (a) {
            if (!this.hasControls) return this;
            var b, c, d = this.cornerSize,
                e = d / 2,
                f = ~~ (this.strokeWidth / 2),
                g = -(this.width / 2),
                h = -(this.height / 2),
                i = d / this.scaleX,
                j = d / this.scaleY,
                k = this.padding / this.scaleX,
                l = this.padding / this.scaleY,
                m = e / this.scaleY,
                n = e / this.scaleX,
                o = (e - d) / this.scaleX,
                p = (e - d) / this.scaleY,
                q = this.height,
                r = this.width,
                s = this.transparentCorners ? "strokeRect" : "fillRect",
                t = this.transparentCorners,
                u = "undefined" != typeof G_vmlCanvasManager;
            return a.save(), a.lineWidth = 1 / Math.max(this.scaleX, this.scaleY), a.globalAlpha = this.isMoving ? this.borderOpacityWhenMoving : 1, a.strokeStyle = a.fillStyle = this.cornerColor, b = g - n - f - k, c = h - m - f - l, u || t || a.clearRect(b, c, i, j), b = g + r - n + f + k, c = h - m - f - l, u || t || a.clearRect(b, c, i, j), b = g - n - f - k, c = h + q + p + f + l, u || t || a.clearRect(b, c, i, j), b = g + r + o + f + k, c = h + q + p + f + l, u || t || a.clearRect(b, c, i, j), this.lockScalingX || (a.drawImage(G, b, c, i, j), a[s](b, c, i, j)), this.get("lockUniScaling") || (b = g + r / 2 - n, c = h - m - f - l, u || t || a.clearRect(b, c, i, j), a[s](b, c, i, j), b = g + r / 2 - n, c = h + q + p + f + l, u || t || a.clearRect(b, c, i, j), a[s](b, c, i, j), b = g + r + o + f + k, c = h + q / 2 - m, u || t || a.clearRect(b, c, i, j), a[s](b, c, i, j), b = g - n - f - k, c = h + q / 2 - m, u || t || a.clearRect(b, c, i, j), a[s](b, c, i, j)), this.hasRotatingPoint && !this.lockRotation && (b = g + r / 2 - n, c = this.flipY ? h + q + this.rotatingPointOffset / this.scaleY - j / 2 + f + l : h - this.rotatingPointOffset / this.scaleY - j / 2 - f - l, u || t || a.clearRect(b, c, i, j), a.drawImage(F, b, c, i, j), a[s](b, c, i, j)), a.restore(), this
        }
    };
    jQuery.fn.fancyProductDesigner = function (c) {
        return this.each(function () {
            var d = a(this);
            if (!d.data("fancy-product-designer")) {
                var e = new b(this, c);
                d.data("fancy-product-designer", e)
            }
        })
    }, a.fn.fancyProductDesigner.defaults = {
        _useChosen: !0,
        textSize: 18,
        fontDropdown: !0,
        fonts: ["Arial", "Helvetica", "Times New Roman", "Verdana", "Geneva"],
        customTextParameters: {},
        customTexts: !0,
        editorMode: !1,
        elementParameters: {
            x: 0,
            y: 0,
            colors: !1,
            removable: !1,
            draggable: !1,
            rotatable: !1,
            resizable: !1,
            zChangeable: !1,
            scale: 1,
            degree: 0,
            price: 0,
            boundingBox: !1,
            autoCenter: !1,
            font: !1,
            textSize: 18,
            patternable: !1,
            z: !1
        },
        labels: {
            outOfContainmentAlert: " is out of his containment!",
            confirmProductDelete: "Delete saved product?",
            modificationTooltips: {
                x: "x: ",
                y: " y: ",
                width: "width: ",
                height: " height: ",
                angle: "angle: "
            },
            colorpicker: {
                cancel: "Cancel",
                change: "Change Color"
            },
            uploadedDesignSizeAlert: "Sorry! But the uploaded image size does not conform our indication of size."
        },
        allowProductSaving: !0,
        centerInBoundingbox: !0,
        templatesDirectory: "templates/",
        saveAsPdf: !0,
        uploadDesigns: !0,
        customImagesParameters: {
            minW: 100,
            minH: 100,
            maxW: 1500,
            maxH: 1500,
            resizeToW: 300,
            resizeToH: 300
        },
        defaultFont: !1,
        dimensions: {
            sidebarNavWidth: 50,
            sidebarContentWidth: 200,
            sidebarHeight: 650,
            productStageWidth: 600,
            productStageHeight: 600
        },
        facebookAppId: "",
        phpDirectory: "php/",
        patterns: []
    }
}(jQuery);