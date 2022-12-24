_N2.r('documentReady', function () {
    _N2.r(["documentReady", "smartslider-frontend", "smartslider-backgroundanimation", "SmartSliderWidgetArrowImage", "SmartSliderWidgetBulletTransition", "ss-simple"], function () {
        new _N2.SmartSliderSimple('n2-ss-1', {
            "admin": false,
            "background.video.mobile": 1,
            "loadingTime": 2000,
            "alias": {"id": 0, "smoothScroll": 0, "slideSwitch": 0, "scroll": 1},
            "align": "center",
            "isDelayed": 0,
            "responsive": {
                "mediaQueries": {
                    "all": false,
                    "desktopportrait": ["(min-width: 1200px)"],
                    "tabletportrait": ["(orientation: landscape) and (max-width: 1199px) and (min-width: 901px)", "(orientation: portrait) and (max-width: 1199px) and (min-width: 701px)"],
                    "mobileportrait": ["(orientation: landscape) and (max-width: 900px)", "(orientation: portrait) and (max-width: 700px)"]
                },
                "base": {
                    "slideOuterWidth": 1140,
                    "slideOuterHeight": 420,
                    "sliderWidth": 1140,
                    "sliderHeight": 420,
                    "slideWidth": 1140,
                    "slideHeight": 420
                },
                "hideOn": {
                    "desktopLandscape": false,
                    "desktopPortrait": false,
                    "tabletLandscape": false,
                    "tabletPortrait": false,
                    "mobileLandscape": false,
                    "mobilePortrait": false
                },
                "onResizeEnabled": true,
                "type": "auto",
                "sliderHeightBasedOn": "real",
                "focusUser": 1,
                "focusEdge": "auto",
                "breakpoints": [{
                    "device": "tabletPortrait",
                    "type": "max-screen-width",
                    "portraitWidth": 1199,
                    "landscapeWidth": 1199
                }, {
                    "device": "mobilePortrait",
                    "type": "max-screen-width",
                    "portraitWidth": 700,
                    "landscapeWidth": 900
                }],
                "enabledDevices": {
                    "desktopLandscape": 0,
                    "desktopPortrait": 1,
                    "tabletLandscape": 0,
                    "tabletPortrait": 1,
                    "mobileLandscape": 0,
                    "mobilePortrait": 1
                },
                "sizes": {
                    "desktopPortrait": {"width": 1140, "height": 420, "max": 3000, "min": 1140},
                    "tabletPortrait": {"width": 701, "height": 258, "customHeight": false, "max": 1199, "min": 701},
                    "mobilePortrait": {"width": 320, "height": 117, "customHeight": false, "max": 900, "min": 320}
                },
                "overflowHiddenPage": 0,
                "focus": {"offsetTop": "#wpadminbar", "offsetBottom": ""}
            },
            "controls": {"mousewheel": 0, "touch": "horizontal", "keyboard": 1, "blockCarouselInteraction": 1},
            "playWhenVisible": 1,
            "playWhenVisibleAt": 0.5,
            "lazyLoad": 0,
            "lazyLoadNeighbor": 0,
            "blockrightclick": 0,
            "maintainSession": 0,
            "autoplay": {
                "enabled": 1,
                "start": 1,
                "duration": 5000,
                "autoplayLoop": 1,
                "allowReStart": 0,
                "pause": {"click": 1, "mouse": "0", "mediaStarted": 1},
                "resume": {"click": 0, "mouse": "0", "mediaEnded": 1, "slidechanged": 0},
                "interval": 1,
                "intervalModifier": "loop",
                "intervalSlide": "current"
            },
            "perspective": 1500,
            "layerMode": {"playOnce": 0, "playFirstLayer": 1, "mode": "skippable", "inAnimation": "mainInEnd"},
            "bgAnimations": {
                "global": 0,
                "color": "RGBA(51,51,51,1)",
                "speed": "normal",
                "slides": {
                    "1": {
                        "animation": [{
                            "type": "Flat",
                            "tiles": {"delay": 0, "sequence": "ForwardDiagonal"},
                            "main": {
                                "type": "both",
                                "duration": 1,
                                "zIndex": 2,
                                "current": {"ease": "easeOutCubic", "opacity": 0}
                            }
                        }], "speed": "normal"
                    }
                }
            },
            "mainanimation": {
                "type": "horizontal",
                "duration": 600,
                "delay": 0,
                "ease": "easeOutQuad",
                "shiftedBackgroundAnimation": 0
            },
            "carousel": 1,
            "initCallbacks": function () {
                new _N2.SmartSliderWidgetArrowImage(this);
                new _N2.SmartSliderWidgetBulletTransition(this, {
                    "area": 12,
                    "dotClasses": "n2-style-98b890a69860771f94d32019bd5202d1-dot ",
                    "mode": "",
                    "action": "click",
                    "thumbnail": 1,
                    "thumbnailWidth": 120,
                    "thumbnailHeight": 81,
                    "thumbnailStyle": "n2-style-4eb0cfe3f8b39eae2833f25a46a1ccc3-simple ",
                    "thumbnailPosition": "top"
                })
            }
        })
    })
});