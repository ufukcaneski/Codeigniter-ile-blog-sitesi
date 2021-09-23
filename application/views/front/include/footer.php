
<div class="clearfix"></div>


    
    <footer class="footer text-light text-center py-2">
	    <small class="copyright">Template Copyright &copy; <a class="text-light" href="https://ufukcaneski.com/" target="_blank">Ufukcan Eski</a></small>
	</footer>


  <!-- Açılış Efekti -->
<style>
  #loader {
    position: fixed;
    width: 96px;
    height: 96px;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    background-color: rgba(255, 255, 255, 0.9);
    -webkit-box-shadow: 0px 24px 64px rgba(0, 0, 0, 0.24);
    box-shadow: 0px 24px 64px rgba(0, 0, 0, 0.24);
    border-radius: 16px;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: opacity .2s ease-out, visibility 0s linear .2s;
    -o-transition: opacity .2s ease-out, visibility 0s linear .2s;
    transition: opacity .2s ease-out, visibility 0s linear .2s;
    z-index: 99999;
}

#loader.fullscreen {
    padding: 0;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
    background-color: #fff;
    border-radius: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
}

#loader .loader-svg {
    -webkit-animation: loader-rotate 2s linear infinite;
    animation: loader-rotate 2s linear infinite;
    position: absolute;
    left: calc(50% - 24px);
    top: calc(50% - 24px);
    display: block;
    -webkit-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    transform: rotate(0deg);
}

#loader .loader-svg .path {
    stroke-dasharray: 1, 200;
    stroke-dashoffset: 0;
    -webkit-animation: loader-dash 1.5s ease-in-out infinite;
    animation: loader-dash 1.5s ease-in-out infinite;
    stroke-linecap: round;
}

#loader.show {
    -webkit-transition: opacity .4s ease-out, visibility 0s linear 0s;
    -o-transition: opacity .4s ease-out, visibility 0s linear 0s;
    transition: opacity .4s ease-out, visibility 0s linear 0s;
    visibility: visible;
    opacity: 1;
}

@keyframes loader-rotate {
    100% {
        transform: rotate(360deg);
    }
}

@keyframes loader-dash {
    0% {
        stroke-dasharray: 1, 200;
        stroke-dashoffset: 0;
    }
    50% {
        stroke-dasharray: 89, 200;
        stroke-dashoffset: -35px;
    }
    100% {
        stroke-dasharray: 89, 200;
        stroke-dashoffset: -136px;
    }
}
#loader .loader-svg .path {
    stroke: #41A4F5;
}
</style>
  <div class="fullscreen show" id="loader"><svg class="loader-svg" height="48px" width="48px"><circle class="path-bg" cx="24" cy="24" fill="none" r="22" stroke="#eeeeee" stroke-width="4"></circle><circle class="path" cx="24" cy="24" fill="none" r="22" stroke-miterlimit="10" stroke-width="4"></circle></svg></div>

<script>

"use strict";



var EGEGEN = null,

    st, html, breakpoints = {

        sm: 568,

        md: 768,

        lg: 992,

        xl: 1200,

        xxl: 1800

    },

    mobileWidth = 992;



EGEGEN = {

    init: function() {

        html = document.documentElement;

        var _t = this;



        _t.isDevice();

        _t.loader();

        _t.alertBrowser.init();

        _t.backTop();

        _t.lazy();

        _t.picker();

        _t.mask();

        _t.accordion();

        _t.initScroll();



        window.addEventListener('scroll', function(e) {

            _t.scroll();

        });



    },

    scroll: function() {

        st = window.scrollY || window.scrollTop || document.getElementsByTagName("html")[0].scrollTop;

    },

    el: function(q) {

        var el;

        if (q === document) {

            return document;

        }

        if (!!(q && q.nodeType === 1)) {

            return q;

        }

        if (el = document.querySelector(q)) {

            return el;

        } else if (el = document.getElementsByTagName(q)) {

            return el[0];

        } else if (el = document.getElementsByClassName(q)) {

            return el[0];

        } else {

            return null;

        }

    },

    els: function(q) {

        var el;

        if (q === document) {

            return document;

        }

        if (!!(q && q.nodeType === 1)) {

            return q;

        }

        if (el = document.querySelectorAll(q)) {

            return el;

        } else {

            return null;

        }

    },

    getByID: function(q) {

        if (!!(q && q.nodeType === 1)) {

            return q;

        }

        return document.getElementById(q);

    },

    find: function(parent, query) {

        parent = EGEGEN.el(parent);

        if (parent) {

            return parent.querySelector(query);

        }

    },

    findAll: function(parent, query) {

        parent = EGEGEN.el(parent);

        if (parent) {

            return parent.querySelectorAll(query);

        }

    },

    trim: function(string) {

        return string.trim();

    },

    findClosest: function(el, cls) {

        var matchesFn;



        // find vendor prefix

        ['matches', 'webkitMatchesSelector', 'mozMatchesSelector', 'msMatchesSelector', 'oMatchesSelector'].some(function(fn) {

            if (typeof document.body[fn] == 'function') {

                matchesFn = fn;

                return true;

            }

            return false;

        })



        var parent;



        // traverse parents

        while (el) {

            parent = el.parentElement;

            if (parent && parent[matchesFn](cls)) {

                return parent;

            }

            el = parent;

        }



        return null;

    },

    hasClass: function(el, className) {

        if (!el) {

            return;

        }

        return el.classList ? el.classList.contains(className) : new RegExp(' ' + className + ' ').test(' ' + el.className + ' ');

    },

    addClass: function(el, className) {

        if (!el || typeof className === 'undefined') {

            return;

        }

        var classNames = className.split(' ');



        if (el.classList) {

            for (var i = 0; i < classNames.length; i++) {

                if (classNames[i] && classNames[i].length > 0) {

                    el.classList.add(EGEGEN.trim(classNames[i]));

                }

            }

        } else if (!EGEGEN.hasClass(el, className)) {

            for (var x = 0; x < classNames.length; x++) {

                el.className += ' ' + EGEGEN.trim(classNames[x]);

            }

        }

    },

    removeClass: function(el, className) {

        if (!el || typeof className === 'undefined') {

            return;

        }

        var classNames = className.split(' ');

        if (el.classList) {

            for (var i = 0; i < classNames.length; i++) {

                el.classList.remove(EGEGEN.trim(classNames[i]));

            }

        } else if (EGEGEN.hasClass(el, className)) {

            for (var x = 0; x < classNames.length; x++) {

                el.className = el.className.replace(new RegExp('\\b' + EGEGEN.trim(classNames[x]) + '\\b', 'g'), '');

            }

        }

    },

    formatMoney: function(str) {

        var price = str.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');

        return price;



    },

    formatNumberFromMoney: function(str) {

        var price = str.replace(",", "");

        return parseFloat(price);

    },



    scroll: function() {

        st = window.scrollY || window.scrollTop || document.getElementsByTagName("html")[0].scrollTop;

    },

    initScroll: function() {

        $('[data-scroll="true"], .scrollable').each(function() {

            var el = $(this),

                h = el.outerHeight();

            if (el.data('mobile-height') && el.data('height')) {

                if (window.innerWidth < breakpoints.lg) {

                    h = el.data('mobile-height');

                } else {

                    h = el.data('height');

                }

            } else {

                if (window.innerWidth < breakpoints.lg) {

                    h = 200;

                }

            }

            var childHeight = el.children().outerHeight();

            if ((window.innerWidth > breakpoints.lg && childHeight > h) || (window.innerWidth < breakpoints.lg && childHeight > h)) {

                EGEGEN.scrollInit(this, {

                    mobileNativeScroll: true,

                    handleWindowResize: true,

                    rememberPosition: (el.data('remember-position') == 'true' ? true : false),

                    height: h

                });

            }



        });

    },

    scrollInit: function(element, options) {

        if (!element) return;



        function init() {

            var ps;

            var height;



            if (options.height instanceof Function) {

                height = parseInt(options.height.call());

            } else {

                height = parseInt(options.height);

            }



            if (height > 0) {

                $(element).height(height);

            }



            if (options.desktopNativeScroll) {

                $(element).css('overflow', 'auto');

                return;

            }

            $(element).css('overflow', 'hidden');



            $(element).addClass('em-scroll');;



            ps = new PerfectScrollbar(element, {

                wheelSpeed: 0.2,

                swipeEasing: true,

                wheelPropagation: (options.windowScroll === false ? false : true),

                minScrollbarLength: 40,

                maxScrollbarLength: 300,

                suppressScrollX: false

            });



        }



        init();



        // Handle window resize

        if (options.handleWindowResize) {

            $(window).on("resize", function() {

                init();

            });

        }

    },

    parallax: function() {

        if (window.innerWidth >= breakpoints.md) {

            var elements = document.querySelectorAll(".parallax");

            if (elements.length < 1) {

                return false;

            }

            for (var i = 0; i < elements.length; i++) {

                var wBottomOffset = st + window.innerHeight,

                    itemTop = $(elements[i]).offset().top,

                    itemBottom = itemTop + $(elements[i]).height();

                if (wBottomOffset >= itemBottom) {

                    var vid = elements[i].querySelector(".parallax-item");

                    $(vid).css('transform', 'translate(0, -' + ((wBottomOffset - itemBottom) * 0.25) + 'px)');

                }

            }

        }

    },

    mask: function p() {

        if ($.fn.inputmask()) {

            var element = document.querySelectorAll(".mask"),

                maskARRAY = {

                    "date": "99.99.9999",

                    "phone": "9 (999) 999 9999",

                    "card": "9999 9999 9999 9999"

                };

            if (element.length > 0) {

                for (var i = 0; i < element.length; i++) {

                    var el = element[i],

                        maskType = el.getAttribute("data-mask");

                    $(el).inputmask(maskARRAY[maskType]);

                }

            }

        }

    },

    lazy: function() {

        var lazyElements = [].slice.call(document.querySelectorAll(".lazy"));

        var loadVideo = function(element) {

            for (var source in element.children) {

                var videoSource = element.children[source];

                if (typeof videoSource.tagName === "string" && videoSource.tagName === "SOURCE") {

                    videoSource.src = videoSource.dataset.src;

                }

            }

            element.load();

        };

        if ("IntersectionObserver" in window) {

            var lazyImageObserver = new IntersectionObserver(function(entries, observer) {

                entries.forEach(function(entry) {

                    if (entry.isIntersecting) {

                        var lazyElement = entry.target;

                        if (lazyElement.tagName == "VIDEO") {

                            loadVideo(lazyElement);

                        } else {

                            lazyElement.src = lazyElement.dataset.src;

                        }

                        setTimeout(function() {

                            lazyElement.classList.add("loading");

                        }, 350);

                        lazyImageObserver.unobserve(lazyElement);

                    }

                });

            });

            lazyElements.forEach(function(lazyElement) {

                lazyImageObserver.observe(lazyElement);

            });

        } else {

            lazyElements.forEach(function(lazyElement) {

                if (lazyElement.tagName == "VIDEO") {

                    loadVideo(lazyElement);

                } else {

                    lazyElement.src = lazyElement.dataset.src;

                }

            });

        }

    },

    fancy: {

        init: function p() {

            if ($.fn.fancybox()) {

                var element = document.querySelectorAll(".fancybox");

                if (element !== null || element.length > 0) {

                    for (var i = 0; i < element.length; i++) {

                        var el = element[i];

                        $(el).fancybox();

                    }

                    $('[data-fancybox]').fancybox({

                        afterShow: function(instance, current) {}

                    });

                }

            }

        },

        open: function(el, type, isProtect) {

            type = (type !== "") ? type : "inline";

            var element = (typeof el === "object") ? el : EGEGEN.getByID(el);

            console.log(element);

            isProtect = (isProtect !== null) ? isProtect : false;

            $.fancybox.open({

                src: element,

                type: type,

                opts: {

                    transitionDuration: 2000,

                    protect: isProtect,

                    keyboard: isProtect,

                    touch: isProtect,

                    smallBtn: true,

                    clickSlide: (isProtect) ? false : true,

                    beforeLoad: function(instance, current) {

                        instance.showLoading();

                        instance.$refs.toolbar.show();

                    },

                    afterClose: function(instance, current) {

                        return false;

                    }

                }

            });

        }

    },

    picker: function(element, opt) {



        element = element || document.querySelectorAll(".picker");

        if (!element || element.length < 1) { return false; }

        var mFormat = 'MM/DD/YYYY',

            dateFormat = 'DD/MM/YYYY',

            monthFormat = "MM/YYYY",

            timezone = "Europe/Istanbul",

            today = moment(new Date(), ["MM-DD-YYYY", "YYYY-MM-DD"]).format(mFormat),

            defaultOpt = {

                language: (LANG ? "tr" : "tr"),

                todayHighlight: true,

                toggleActive: false,

                enableOnReadonly: true,

                startDate: new Date()

            };

        if (element.length > 0) {

            for (var i = 0; i < element.length; i++) {

                var el = element[i],

                    newObj = {};

                if (el.getAttribute("value")) {

                    defaultOpt["today"] = moment(el.getAttribute("value")).format(mFormat);

                }

                if (typeof $(el).attr("data-min") !== "undefined") {

                    defaultOpt["startDate"] = moment($(el).attr("data-min")).format(mFormat);

                }

                if (typeof $(el).attr("data-max") !== "undefined") {

                    defaultOpt["endDate"] = moment($(el).attr("data-max")).format(mFormat);

                }

                if (opt !== null) {

                    newObj = $.extend({}, defaultOpt, opt);

                } else {

                    newObj = EGEGEN.addObj(defaultOpt, newObj);

                }

                $(el).datepicker(newObj);

            }

        }



    },

    map: function(o, e) {

        var latlng = { lat: o.lat, lng: o.lng },

            n = {

                scrollwheel: !1,

                zoom: o.zoom,

                center: latlng,

                mapTypeId: google.maps.MapTypeId.ROADMAP,

                mapTypeControlOptions: {

                    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU

                },

                streetViewControl: !1

            },

            t = new google.maps.Map(document.getElementById(o.mapWrapperId), n);

        if (0 != o.marker) {

            var a = new google.maps.Marker({

                draggable: !1,

                position: latlng,

                map: t,

                icon: o.marker,

                title: o.title,

                url: "https://www.google.com/maps/@" + o.lat + "," + o.lng + ",18z"

            });

            google.maps.event.addListener(a, "click", function() {

                window.open(this.url, "_blank");

            });

        }

    },

    accordion: function() {

        var accordion = ".accordion";

        if (!document.querySelector(accordion)) { return false; }

        var $acc = $(accordion),

            acc = ".acc",

            active = "acc--open";

        $acc.find(acc).find(".acc-link").on('click', function(e) {

            var $thisAccordion = $(this).closest(accordion),

                $thisAcc = $(this).closest(acc),

                target = $(this).attr("data-target");

            if ($thisAcc.hasClass(active)) {

                $(target).slideUp(300, function() {

                    $thisAcc.removeClass(active);

                });

            } else {

                $thisAccordion.find(acc).removeClass(active);

                $thisAccordion.find(acc).find(".acc-body").slideUp(300);

                $thisAcc.addClass(active);

                $(target).slideDown(300);

            }

        });

    },

    formValidation: function(form, callback, opt) {

        var newObj = {},

            defaultOpt = {

                errorPlacement: function(error, element) {

                    error.addClass("help-block");



                    if (element.prop("type") === "checkbox") {

                        error.insertAfter(element.parent("label"));

                    } else {

                        error.insertAfter(element.closest(".input, .select, .textarea"));

                    }

                },

                highlight: function(element, errorClass, validClass) {

                    $(element).parents(".form-group").addClass("has-error").removeClass("has-success");

                },

                unhighlight: function(element, errorClass, validClass) {

                    $(element).parents(".form-group").addClass("has-success").removeClass("has-error");

                }

            };

        if (opt !== null) {

            newObj = $.extend({}, defaultOpt, opt);

        } else {

            newObj = EGEGEN.addObj(defaultOpt, newObj);

        }

        $(form).validate({

            ignore: ':hidden:not(:checkbox)',

            errorPlacement: function(error, element) {

                error.addClass("help-block");

                if (element.prop("type") === "checkbox") {

                    error.insertAfter(element.parent("label"));

                } else {

                    element.closest(".form-group").append(error);

                }

            },

            highlight: function(element, errorClass, validClass) {

                $(element).parents(".form-group").addClass("has-error").removeClass("has-success");

            },

            unhighlight: function(element, errorClass, validClass) {

                $(element).parents(".form-group").addClass("has-success").removeClass("has-error");

            },

            submitHandler: callback,

            showErrors: function(errorMap, errorList) {

                var errors = this.numberOfInvalids(); // <- NUMBER OF INVALIDS

                //console.log(errorList);

                this.defaultShowErrors(); // <- ENABLE default MESSAGES

            }

        });

    },

    isNumber: function(evt) {

        var theEvent = evt || window.event;



        // Handle paste

        if (theEvent.type === 'paste') {

            key = event.clipboardData.getData('text/plain');

        } else {

            // Handle key press

            var key = theEvent.keyCode || theEvent.which;

            key = String.fromCharCode(key);

        }

        var regex = /[0-9]|\./;

        if (!regex.test(key)) {

            theEvent.returnValue = false;

            if (theEvent.preventDefault) theEvent.preventDefault();

        }

    },

    isFloatNumber: function(evt) {

        var theEvent = evt || window.event;



        // Handle paste

        if (theEvent.type === 'paste') {

            key = event.clipboardData.getData('text/plain');

        } else {

            // Handle key press

            var key = theEvent.keyCode || theEvent.which;

            key = String.fromCharCode(key);

        }

        var regex = /[+-]?([0-9]*[.])?[0-9]+/;

        if (!regex.test(key)) {

            theEvent.returnValue = false;

            if (theEvent.preventDefault) theEvent.preventDefault();

        }

    },

    getSpace: function() {

        var ww = parseInt(window.innerWidth),

            header = document.getElementById('footer'),

            container = header.querySelector(".container"),

            space = (ww - parseInt(container.offsetWidth)) / 2;

        return space;

    },

    getOffset: function(el) {

        var rect = el.getBoundingClientRect();

        return {

            left: parseInt(rect.left) + parseInt(window.scrollX),

            top: parseInt(rect.top) + parseInt(window.scrollY)

        };

    },

    setAttr: function(el, attrs) {

        for (var key in attrs) {

            el.setAttribute(key, attrs[key]);

        }

    },

    addObj: function p(defaultObj, newObj) {

        for (var prop in newObj) {

            defaultObj[prop] = newObj[prop];

        }

        return defaultObj;

    },

    isDevice: function p() {

        var check = false,

            userClass = "",

            isMac = navigator.appVersion.indexOf("Mac") >= 0,

            isIpad = navigator.userAgent.match(/iPad/i) != null;

        (function(a) {

            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4)))

                check = true;

        })(navigator.userAgent || navigator.vendor || window.opera);



        if (isMac) {

            userClass += " mac ";

        }

        if (isIpad) {

            userClass += " ipad ";

        }

        if (check) {

            userClass = " mobile ";

        }

        var browserARR = this.browserSpecs(),

            bName = (browserARR.name).toLowerCase(),

            bVersion = browserARR.version;

        if (bName === 'msie' && browserARR.version < 10) {

            bVersion = "old";

        }

        userClass += bName + " " + bName + "_" + bVersion;

        document.documentElement.className += userClass.trim();

    },

    loader: function() {

        var loader = EGEGEN.getByID("loader"),

            lSVG = '<svg class="loader-svg" height="48px" width="48px"><circle class="path-bg" cx="24" cy="24" fill="none" r="22" stroke="#eeeeee" stroke-width="4"></circle><circle class="path" cx="24" cy="24" fill="none" r="22" stroke="#d50032" stroke-miterlimit="10" stroke-width="4"></circle></svg></div>',

            active = "show",

            timeOut = parseInt(performance.now()) + 100,

            browserARR = EGEGEN.browserSpecs();

        if (loader === null) {

            loader = document.createElement("DIV");

            loader.id = "loader";

            loader.className = "fullscreen";

            loader.className += " " + active;

            loader.innerHTML = lSVG;

            document.body.appendChild(loader);

        }

        if (browserARR.version < 10) {

            loader.parentNode.removeChild(loader);

        } else {

            setTimeout(function() {

                //EGEGEN.removeClass(loader,active)

                var reg = new RegExp('(\\s|^)' + active + '(\\s|$)');

                loader.className = loader.className.replace(reg, ' ');

            }, timeOut);

        }

    },

    backTop: function() {

        var el = EGEGEN.el(".back-to-top");

        if (!el) { return false; }

        el.addEventListener("click", function() {

            $('html, body').animate({

                scrollTop: 0

            }, 300);

        });

    },

    alertBrowser: {

        init: function() {

            var sb = {

                    host: (BASE_URL !== "") ? BASE_URL : window.location.host,

                    asset_host: "assets/img/browser/",

                    message: "TarayÄ±cÄ±nÄ±zÄ±n versiyonu Ã§ok eski ve sitemiz tarafÄ±ndan desteklenmemektedir.<br />Sitemizi dÃ¼zgÃ¼n gÃ¶rÃ¼ntÃ¼lemek istiyorsanÄ±z aÅŸaÄŸÄ±dak tarayÄ±cÄ±lardan birini bilgisayarÄ±nÄ±za yÃ¼kleyerek devam edebilirsiniz.",

                    br: [{

                            icon: "firefox.png",

                            text: "Mozilla Firefox",

                            url: "https://www.mozilla.org/tr/firefox/"

                        },

                        {

                            icon: "chrome.png",

                            text: "Google Chrome",

                            url: "https://www.google.com/chrome/"

                        },

                        {

                            icon: "opera.png",

                            text: "Opera",

                            url: "https://www.opera.com/tr"

                        },

                        {

                            icon: "edge.png",

                            text: "Internet Explorer (10+)",

                            url: "https://www.microsoft.com/tr-tr/windows/microsoft-edge"

                        }

                    ]

                },

                browserARR = EGEGEN.browserSpecs(),

                bName = (browserARR.name).toLowerCase();



            if (bName === 'msie' && browserARR.version < 10) {

                this.addPopupCSS();



                var pHTML = '<p>' + sb.message + '</p>',

                    pb = sb.br;



                pHTML += '<div class="e-p-browsers">';

                for (var i = 0; i < pb.length; i++) {

                    var bIMG_URL = sb.host + sb.asset_host + pb[i].icon;

                    pHTML += '<div class="e-browser-item"><a href="' + pb[i].url + '" target="_blank"><b>' + pb[i].text + '</b><div><img src="' + bIMG_URL + '" alt="" /></div></a></div>';

                }



                pHTML += '</div>';

                this.addPopupHTML(pHTML);

                document.body.style.overflow = "hidden";

            }

        },

        addPopupHTML: function(c) {

            var popupHTML = '<div class="e-popup"><div class="e-popup-body"><div class="e-popup-content">' + c + '</div></div><div class="e-popup-bg"></div></div>';

            document.body.innerHTML += popupHTML;

        },

        addPopupCSS: function() {

            var sheet = '.e-popup {position:fixed;display:table;top:0;left:0;bottom:0;right:0;width:100%;height:100%;z-index:9990;}.e-popup-bg{display:block;position:fixed;top:0;left:0;width:100%;height:100%;background-color:#000000; opacity: 0.9;filter: alpha(opacity=90)} .e-popup-body {display: table-cell;width: 100%;height: 100%;vertical-align: middle;position:relative;z-index:99999;}.e-popup-content{text-align: center;background: #ffffff;margin: 0 auto;max-width: 800px;padding:50px 30px;font-size:18px;}.e-popup-content p {margin-bottom:35px;}.e-p-browsers{display: table;width:100%;}.e-browser-item{display: table-cell;text-align:center;}',

                sheetEl = document.createElement('style');

            document.getElementsByTagName('head')[0].appendChild(sheetEl);

            sheetEl.setAttribute('type', 'text/css');

            sheetEl.styleSheet.cssText = sheet;

        }

    },

    browserSpecs: function() {

        var ua = navigator.userAgent,

            tem,

            M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];

        if (/trident/i.test(M[1])) {

            tem = /\brv[ :]+(\d+)/g.exec(ua) || [];

            return { name: 'IE', version: (tem[1] || '') };

        }

        if (M[1] === 'Chrome') {

            tem = ua.match(/\b(OPR|Edge)\/(\d+)/);

            if (tem != null)

                return { name: tem[1].replace('OPR', 'Opera'), version: tem[2] };

        }

        M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];

        if ((tem = ua.match(/version\/(\d+)/i)) != null)

            M.splice(1, 1, tem[1]);

        return { name: M[0], version: M[1] };

    }

};



document.addEventListener("DOMContentLoaded", function() {

    EGEGEN.init();

});
</script>




    <script>


    $(document).ready(function() {
      $(document).on("click",".load",function() {

        var id = $(this).attr("id");
        

        $(".load").hide();
        $(".loader").show();

        
       $.ajax({

         url: "<?php echo base_url('anasayfa/blogyukle') ?>",
         data: {id:id},
         type: "POST",
         success:function(e) {
           $("#loadmore_"+id).remove();
           $(".veri").append(e);
           
         }
        

       });



      });

    });

    </script>




   <!-- <script>
    // The Slideshow class.
class Slideshow {
    constructor(el) {
        
        this.DOM = {el: el};
      
        this.config = {
          slideshow: {
            delay: 3000,
            pagination: {
              duration: 3,
            }
          }
        };
        
        // Set the slideshow
        this.init();
      
    }
    init() {
      
      var self = this;
      
      // Charmed title
      this.DOM.slideTitle = this.DOM.el.querySelectorAll('.slide-title');
      this.DOM.slideTitle.forEach((slideTitle) => {
        charming(slideTitle);
      });
      
      // Set the slider
      this.slideshow = new Swiper (this.DOM.el, {
          
          loop: true,
          autoplay: {
            delay: this.config.slideshow.delay,
            disableOnInteraction: false,
          },
          speed: 500,
          preloadImages: true,
          updateOnImagesReady: true,
          
          // lazy: true,
          // preloadImages: false,

          pagination: {
            el: '.slideshow-pagination',
            clickable: true,
            bulletClass: 'slideshow-pagination-item',
            bulletActiveClass: 'active',
            clickableClass: 'slideshow-pagination-clickable',
            modifierClass: 'slideshow-pagination-',
            renderBullet: function (index, className) {
              
              var slideIndex = index,
                  number = (index <= 8) ? '0' + (slideIndex + 1) : (slideIndex + 1);
              
              var paginationItem = '<span class="slideshow-pagination-item">';
              paginationItem += '<span class="pagination-number">' + number + '</span>';
              paginationItem = (index <= 8) ? paginationItem + '<span class="pagination-separator"><span class="pagination-separator-loader"></span></span>' : paginationItem;
              paginationItem += '</span>';
            
              return paginationItem;
              
            },
          },

          // Navigation arrows
          navigation: {
            nextEl: '.slideshow-navigation-button.next',
            prevEl: '.slideshow-navigation-button.prev',
          },

          // And if we need scrollbar
          scrollbar: {
            el: '.swiper-scrollbar',
          },
        
          on: {
            init: function() {
              self.animate('next');
            },
          }
        
        });
      
        // Init/Bind events.
        this.initEvents();
        
    }
    initEvents() {
        
        this.slideshow.on('paginationUpdate', (swiper, paginationEl) => this.animatePagination(swiper, paginationEl));
        //this.slideshow.on('paginationRender', (swiper, paginationEl) => this.animatePagination());

        this.slideshow.on('slideNextTransitionStart', () => this.animate('next'));
        
        this.slideshow.on('slidePrevTransitionStart', () => this.animate('prev'));
            
    }
    animate(direction = 'next') {
      
        // Get the active slide
        this.DOM.activeSlide = this.DOM.el.querySelector('.swiper-slide-active'),
        this.DOM.activeSlideImg = this.DOM.activeSlide.querySelector('.slide-image'),
        this.DOM.activeSlideTitle = this.DOM.activeSlide.querySelector('.slide-title'),
        this.DOM.activeSlideTitleLetters = this.DOM.activeSlideTitle.querySelectorAll('span');
      
        // Reverse if prev  
        this.DOM.activeSlideTitleLetters = direction === "next" ? this.DOM.activeSlideTitleLetters : [].slice.call(this.DOM.activeSlideTitleLetters).reverse();
      
        // Get old slide
        this.DOM.oldSlide = direction === "next" ? this.DOM.el.querySelector('.swiper-slide-prev') : this.DOM.el.querySelector('.swiper-slide-next');
        if (this.DOM.oldSlide) {
          // Get parts
          this.DOM.oldSlideTitle = this.DOM.oldSlide.querySelector('.slide-title'),
          this.DOM.oldSlideTitleLetters = this.DOM.oldSlideTitle.querySelectorAll('span'); 
          // Animate
          this.DOM.oldSlideTitleLetters.forEach((letter,pos) => {
            TweenMax.to(letter, .3, {
              ease: Quart.easeIn,
              delay: (this.DOM.oldSlideTitleLetters.length-pos-1)*.04,
              y: '50%',
              opacity: 0
            });
          });
        }
      
        // Animate title
        this.DOM.activeSlideTitleLetters.forEach((letter,pos) => {
					TweenMax.to(letter, .6, {
						ease: Back.easeOut,
						delay: pos*.05,
						startAt: {y: '50%', opacity: 0},
						y: '0%',
						opacity: 1
					});
				});
      
        // Animate background
        TweenMax.to(this.DOM.activeSlideImg, 1.5, {
            ease: Expo.easeOut,
            startAt: {x: direction === 'next' ? 200 : -200},
            x: 0,
        });
      
        //this.animatePagination()
    
    }
    animatePagination(swiper, paginationEl) {
            
      // Animate pagination
      this.DOM.paginationItemsLoader = paginationEl.querySelectorAll('.pagination-separator-loader');
      this.DOM.activePaginationItem = paginationEl.querySelector('.slideshow-pagination-item.active');
      this.DOM.activePaginationItemLoader = this.DOM.activePaginationItem.querySelector('.pagination-separator-loader');
      
      console.log(swiper.pagination);
      // console.log(swiper.activeIndex);
      
      // Reset and animate
        TweenMax.set(this.DOM.paginationItemsLoader, {scaleX: 0});
        TweenMax.to(this.DOM.activePaginationItemLoader, this.config.slideshow.pagination.duration, {
          startAt: {scaleX: 0},
          scaleX: 1,
        });
      
      
    }
    
}

const slideshow = new Slideshow(document.querySelector('.slideshow'));

</script> -->

<!-- Lottie -->

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>



       <!-- prismjs -->
       <script type="text/javascript" src="<?php echo base_url('assets/front/plugins/prismjs/'); ?>prism.js"></script> 


<!-- Disqus Yorum Çekme -->
<script id="dsq-count-scr" src="//ufukcaneski.disqus.com/count.js" async></script>



    <!-- Javascript -->          

    <script type="text/javascript" src="<?php echo base_url('assets/front/'); ?>js/popper.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url('assets/front/'); ?>js/bootstrap.min.js"></script>  
    <script type="text/javascript" src="<?php echo base_url('assets/front/'); ?>js/back-to-top.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/front/'); ?>js/social-share-bar.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/front/'); ?>js/jquery-social-share-bar.js"></script>
    
    <!-- Page Specific JS -->
    <script type="text/javascript" src="<?php echo base_url('assets/front/'); ?>js/flickity.pkgd.min.js"></script> 

    <!-- Custom JS -->
    <script type="text/javascript" src="<?php echo base_url('assets/front/'); ?>js/main.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/front/'); ?>js/flickity-custom.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/front/'); ?>js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/front/'); ?>js/isotope-custom.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/front/'); ?>js/isotope.pkgd.min.js"></script>
    

</body>
</html> 

