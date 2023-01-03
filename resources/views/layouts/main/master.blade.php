<!DOCTYPE html>
<!--[if IE 9 ]> 
<html lang="vi" prefix="og: https://ogp.me/ns#" class="ie9 loading-site no-js">
   <![endif]-->
   <!--[if IE 8 ]> 
   <html lang="vi" prefix="og: https://ogp.me/ns#" class="ie8 loading-site no-js">
      <![endif]-->
      <!--[if (gte IE 9)|!(IE)]><!-->
      <html lang="vi" prefix="og: https://ogp.me/ns#" class="loading-site no-js">
         <!--<![endif]-->
         <head>
            <meta charset="UTF-8" />
            <script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script>class RocketLazyLoadScripts{constructor(){this.triggerEvents=["keydown","mousedown","mousemove","touchmove","touchstart","touchend","wheel"],this.userEventHandler=this._triggerListener.bind(this),this.touchStartHandler=this._onTouchStart.bind(this),this.touchMoveHandler=this._onTouchMove.bind(this),this.touchEndHandler=this._onTouchEnd.bind(this),this.clickHandler=this._onClick.bind(this),this.interceptedClicks=[],window.addEventListener("pageshow",(e=>{this.persisted=e.persisted})),window.addEventListener("DOMContentLoaded",(()=>{this._preconnect3rdParties()})),this.delayedScripts={normal:[],async:[],defer:[]},this.allJQueries=[]}_addUserInteractionListener(e){document.hidden?e._triggerListener():(this.triggerEvents.forEach((t=>window.addEventListener(t,e.userEventHandler,{passive:!0}))),window.addEventListener("touchstart",e.touchStartHandler,{passive:!0}),window.addEventListener("mousedown",e.touchStartHandler),document.addEventListener("visibilitychange",e.userEventHandler))}_removeUserInteractionListener(){this.triggerEvents.forEach((e=>window.removeEventListener(e,this.userEventHandler,{passive:!0}))),document.removeEventListener("visibilitychange",this.userEventHandler)}_onTouchStart(e){"HTML"!==e.target.tagName&&(window.addEventListener("touchend",this.touchEndHandler),window.addEventListener("mouseup",this.touchEndHandler),window.addEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.addEventListener("mousemove",this.touchMoveHandler),e.target.addEventListener("click",this.clickHandler),this._renameDOMAttribute(e.target,"onclick","rocket-onclick"))}_onTouchMove(e){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler),e.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(e.target,"rocket-onclick","onclick")}_onTouchEnd(e){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler)}_onClick(e){e.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(e.target,"rocket-onclick","onclick"),this.interceptedClicks.push(e),e.preventDefault(),e.stopPropagation(),e.stopImmediatePropagation()}_replayClicks(){window.removeEventListener("touchstart",this.touchStartHandler,{passive:!0}),window.removeEventListener("mousedown",this.touchStartHandler),this.interceptedClicks.forEach((e=>{e.target.dispatchEvent(new MouseEvent("click",{view:e.view,bubbles:!0,cancelable:!0}))}))}_renameDOMAttribute(e,t,n){e.hasAttribute&&e.hasAttribute(t)&&(event.target.setAttribute(n,event.target.getAttribute(t)),event.target.removeAttribute(t))}_triggerListener(){this._removeUserInteractionListener(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this._loadEverythingNow.bind(this)):this._loadEverythingNow()}_preconnect3rdParties(){let e=[];document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((t=>{if(t.hasAttribute("src")){const n=new URL(t.src).origin;n!==location.origin&&e.push({src:n,crossOrigin:t.crossOrigin||"module"===t.getAttribute("data-rocket-type")})}})),e=[...new Map(e.map((e=>[JSON.stringify(e),e]))).values()],this._batchInjectResourceHints(e,"preconnect")}async _loadEverythingNow(){this.lastBreath=Date.now(),this._delayEventListeners(),this._delayJQueryReady(this),this._handleDocumentWrite(),this._registerAllDelayedScripts(),this._preloadAllScripts(),await this._loadScriptsFromList(this.delayedScripts.normal),await this._loadScriptsFromList(this.delayedScripts.defer),await this._loadScriptsFromList(this.delayedScripts.async);try{await this._triggerDOMContentLoaded(),await this._triggerWindowLoad()}catch(e){}window.dispatchEvent(new Event("rocket-allScriptsLoaded")),this._replayClicks()}_registerAllDelayedScripts(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((e=>{e.hasAttribute("src")?e.hasAttribute("async")&&!1!==e.async?this.delayedScripts.async.push(e):e.hasAttribute("defer")&&!1!==e.defer||"module"===e.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(e):this.delayedScripts.normal.push(e):this.delayedScripts.normal.push(e)}))}async _transformScript(e){return await this._littleBreath(),new Promise((t=>{const n=document.createElement("script");[...e.attributes].forEach((e=>{let t=e.nodeName;"type"!==t&&("data-rocket-type"===t&&(t="type"),n.setAttribute(t,e.nodeValue))})),e.hasAttribute("src")?(n.addEventListener("load",t),n.addEventListener("error",t)):(n.text=e.text,t());try{e.parentNode.replaceChild(n,e)}catch(e){t()}}))}async _loadScriptsFromList(e){const t=e.shift();return t?(await this._transformScript(t),this._loadScriptsFromList(e)):Promise.resolve()}_preloadAllScripts(){this._batchInjectResourceHints([...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async],"preload")}_batchInjectResourceHints(e,t){var n=document.createDocumentFragment();e.forEach((e=>{if(e.src){const i=document.createElement("link");i.href=e.src,i.rel=t,"preconnect"!==t&&(i.as="script"),e.getAttribute&&"module"===e.getAttribute("data-rocket-type")&&(i.crossOrigin=!0),e.crossOrigin&&(i.crossOrigin=e.crossOrigin),n.appendChild(i)}})),document.head.appendChild(n)}_delayEventListeners(){let e={};function t(t,n){!function(t){function n(n){return e[t].eventsToRewrite.indexOf(n)>=0?"rocket-"+n:n}e[t]||(e[t]={originalFunctions:{add:t.addEventListener,remove:t.removeEventListener},eventsToRewrite:[]},t.addEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.add.apply(t,arguments)},t.removeEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.remove.apply(t,arguments)})}(t),e[t].eventsToRewrite.push(n)}function n(e,t){let n=e[t];Object.defineProperty(e,t,{get:()=>n||function(){},set(i){e["rocket"+t]=n=i}})}t(document,"DOMContentLoaded"),t(window,"DOMContentLoaded"),t(window,"load"),t(window,"pageshow"),t(document,"readystatechange"),n(document,"onreadystatechange"),n(window,"onload"),n(window,"onpageshow")}_delayJQueryReady(e){let t=window.jQuery;Object.defineProperty(window,"jQuery",{get:()=>t,set(n){if(n&&n.fn&&!e.allJQueries.includes(n)){n.fn.ready=n.fn.init.prototype.ready=function(t){e.domReadyFired?t.bind(document)(n):document.addEventListener("rocket-DOMContentLoaded",(()=>t.bind(document)(n)))};const t=n.fn.on;n.fn.on=n.fn.init.prototype.on=function(){if(this[0]===window){function e(e){return e.split(" ").map((e=>"load"===e||0===e.indexOf("load.")?"rocket-jquery-load":e)).join(" ")}"string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=e(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{delete Object.assign(arguments[0],{[e(t)]:arguments[0][t]})[t]}))}return t.apply(this,arguments),this},e.allJQueries.push(n)}t=n}})}async _triggerDOMContentLoaded(){this.domReadyFired=!0,await this._littleBreath(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),window.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),document.dispatchEvent(new Event("rocket-readystatechange")),await this._littleBreath(),document.rocketonreadystatechange&&document.rocketonreadystatechange()}async _triggerWindowLoad(){await this._littleBreath(),window.dispatchEvent(new Event("rocket-load")),await this._littleBreath(),window.rocketonload&&window.rocketonload(),await this._littleBreath(),this.allJQueries.forEach((e=>e(window).trigger("rocket-jquery-load"))),await this._littleBreath();const e=new Event("rocket-pageshow");e.persisted=this.persisted,window.dispatchEvent(e),await this._littleBreath(),window.rocketonpageshow&&window.rocketonpageshow({persisted:this.persisted})}_handleDocumentWrite(){const e=new Map;document.write=document.writeln=function(t){const n=document.currentScript,i=document.createRange(),r=n.parentElement;let o=e.get(n);void 0===o&&(o=n.nextSibling,e.set(n,o));const s=document.createDocumentFragment();i.setStart(s,0),s.appendChild(i.createContextualFragment(t)),r.insertBefore(s,o)}}async _littleBreath(){Date.now()-this.lastBreath>45&&(await this._requestAnimFrame(),this.lastBreath=Date.now())}async _requestAnimFrame(){return document.hidden?new Promise((e=>setTimeout(e))):new Promise((e=>requestAnimationFrame(e)))}static run(){const e=new RocketLazyLoadScripts;e._addUserInteractionListener(e)}}RocketLazyLoadScripts.run();</script>
         
            <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Quicksand%3Aregular%2C700%7CRoboto%3Aregular%2Cregular%2C700%2Cregular&#038;display=swap" />
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand%3Aregular%2C700%7CRoboto%3Aregular%2Cregular%2C700%2Cregular&#038;display=swap" media="print" onload="this.media='all'" />
            <noscript>
               <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand%3Aregular%2C700%7CRoboto%3Aregular%2Cregular%2C700%2Cregular&#038;display=swap" />
            </noscript>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
            <title>@yield('title')</title>
            <meta name="description" content="">
            <meta name="keywords" content="@yield('title')" />
            <meta name="robots" content="noodp,index,follow" />
            <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
            <meta name="csrf-token" content="{{ csrf_token() }}" />
            <meta name="description" content="@yield('description')" />
            <link rel="canonical" href="{{ url()->current() }}" />
            <meta property="og:locale" content="vi_VN" />
            <meta property="og:type" content="article" />
            <meta property="og:title" content="@yield('title')" />
            <meta property="og:description" content="@yield('description')" />
            <meta property="og:url" content="{{ url()->current() }}" />
            <meta property="og:site_name" content="{{ url()->current() }}" />
            <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
            <meta property="og:image" content="@yield('image')" />
            <meta property="og:image:secure_url" content="@yield('image')" />
            <meta property="og:image:width" content="598" />
            <meta property="og:image:height" content="333" />
            <meta property="og:image:alt" content="" />
            <meta property="og:image:type" content="image/jpeg" />
            <meta name="twitter:card" content="summary_large_image" />
            <meta name="twitter:title" content="@yield('title')" />
            <meta name="twitter:description" content="@yield('description')" />
            <meta name="twitter:image" content="@yield('image')" />
            <!-- Fav Icon -->
            <link rel="icon" href="{{ url('' . $setting->favicon) }}" type="image/x-icon">
            <!-- /Rank Math WordPress SEO plugin -->
            <link rel="prefetch" href="{{asset('frontend/js/chunk.countup.fe2c1016.js')}}" />
            <link rel="prefetch" href="{{asset('frontend/js/chunk.sticky-sidebar.a58a6557.js')}}" />
            <link rel="prefetch" href="{{asset('frontend/js/chunk.tooltips.29144c1c.js')}}" />
            <link rel="prefetch" href="{{asset('frontend/js/chunk.vendors-popups.947eca5c.js')}}" />
            <link rel="prefetch" href="{{asset('frontend/js/chunk.vendors-slider.f0d2cbc9.js')}}" />
            <style id='wp-block-library-inline-css' type='text/css'>
               :root{--wp-admin-theme-color:#007cba;--wp-admin-theme-color--rgb:0,124,186;--wp-admin-theme-color-darker-10:#006ba1;--wp-admin-theme-color-darker-10--rgb:0,107,161;--wp-admin-theme-color-darker-20:#005a87;--wp-admin-theme-color-darker-20--rgb:0,90,135;--wp-admin-border-width-focus:2px}@media (-webkit-min-device-pixel-ratio:2),(min-resolution:192dpi){:root{--wp-admin-border-width-focus:1.5px}}.wp-element-button{cursor:pointer}:root{--wp--preset--font-size--normal:16px;--wp--preset--font-size--huge:42px}:root .has-very-light-gray-background-color{background-color:#eee}:root .has-very-dark-gray-background-color{background-color:#313131}:root .has-very-light-gray-color{color:#eee}:root .has-very-dark-gray-color{color:#313131}:root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background{background:linear-gradient(135deg,#00d084,#0693e3)}:root .has-purple-crush-gradient-background{background:linear-gradient(135deg,#34e2e4,#4721fb 50%,#ab1dfe)}:root .has-hazy-dawn-gradient-background{background:linear-gradient(135deg,#faaca8,#dad0ec)}:root .has-subdued-olive-gradient-background{background:linear-gradient(135deg,#fafae1,#67a671)}:root .has-atomic-cream-gradient-background{background:linear-gradient(135deg,#fdd79a,#004a59)}:root .has-nightshade-gradient-background{background:linear-gradient(135deg,#330968,#31cdcf)}:root .has-midnight-gradient-background{background:linear-gradient(135deg,#020381,#2874fc)}.has-regular-font-size{font-size:1em}.has-larger-font-size{font-size:2.625em}.has-normal-font-size{font-size:var(--wp--preset--font-size--normal)}.has-huge-font-size{font-size:var(--wp--preset--font-size--huge)}.has-text-align-center{text-align:center}.has-text-align-left{text-align:left}.has-text-align-right{text-align:right}#end-resizable-editor-section{display:none}.aligncenter{clear:both}.items-justified-left{justify-content:flex-start}.items-justified-center{justify-content:center}.items-justified-right{justify-content:flex-end}.items-justified-space-between{justify-content:space-between}.screen-reader-text{border:0;clip:rect(1px,1px,1px,1px);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;word-wrap:normal!important}.screen-reader-text:focus{background-color:#ddd;clip:auto!important;clip-path:none;color:#444;display:block;font-size:1em;height:auto;left:5px;line-height:normal;padding:15px 23px 14px;text-decoration:none;top:5px;width:auto;z-index:100000}html :where(.has-border-color){border-style:solid}html :where([style*=border-top-color]){border-top-style:solid}html :where([style*=border-right-color]){border-right-style:solid}html :where([style*=border-bottom-color]){border-bottom-style:solid}html :where([style*=border-left-color]){border-left-style:solid}html :where([style*=border-width]){border-style:solid}html :where([style*=border-top-width]){border-top-style:solid}html :where([style*=border-right-width]){border-right-style:solid}html :where([style*=border-bottom-width]){border-bottom-style:solid}html :where([style*=border-left-width]){border-left-style:solid}html :where(img[class*=wp-image-]){height:auto;max-width:100%}figure{margin:0 0 1em}
            </style>
            <link rel='stylesheet' id='classic-theme-styles-css' href='{{asset('frontend/css/classic-themes.min.css')}}' type='text/css' media='all' />
      
            <link rel='stylesheet' id='flatsome-main-css' href='{{asset('frontend/css/flatsome.css')}}' type='text/css' media='all' />
            <style id='flatsome-main-inline-css' type='text/css'>
               @font-face {
               font-family: "fl-icons";
               font-display: block;
               src:
               url(https://smarthomehp.vn/wp-content/themes/flatsome/assets/css/icons/fl-icons.eot#iefix?v=3.15.6) format("embedded-opentype"),
               url({{asset('frontend/fonts/fl-icons.woff2')}}) format("woff2"),
               url(https://smarthomehp.vn/wp-content/themes/flatsome/assets/css/icons/fl-icons.ttf?v=3.15.6) format("truetype"),
               url({{asset('frontend/fonts/fl-icons.woff')}}) format("woff"),
               url(https://smarthomehp.vn/wp-content/themes/flatsome/assets/css/icons/fl-icons.svg?v=3.15.6#fl-icons) format("svg");
               }
            </style>
            <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
            <link rel='stylesheet' id='select2-css' href='{{asset('frontend/css/select2.css')}}' type='text/css' media='all' />
            <link rel='stylesheet' id='flatsome-shop-css' href='{{asset('frontend/css/flatsome-shop.css')}}' type='text/css' media='all' />
            <link rel='stylesheet' id='flatsome-style-css' href='{{asset('frontend/css/style.css')}}' type='text/css' media='all' />
            <script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='{{asset('frontend/js/jquery.min.js')}}' id='jquery-core-js'></script>
            <script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='{{asset('frontend/js/jquery-migrate.min.js')}}' id='jquery-migrate-js'></script>
           
            {{-- <link rel="stylesheet" href="{{asset('frontend/css/slick-theme.scss')}}">
            <link rel="stylesheet" href="{{asset('frontend/css/slick-theme.css')}}">
            <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}"> --}}
            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
            {{-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> --}}
            @yield('css')
      
            <!--[if IE]><script>var head = document.getElementsByTagName('head')[0],style = document.createElement('style');style.type = 'text/css';style.styleSheet.cssText = ':before,:after{content:none !important';head.appendChild(style);setTimeout(function(){head.removeChild(style);}, 0);</script><script src="https://smarthomehp.vn/wp-content/themes/flatsome/assets/libs/ie-flexibility.js"></script><![endif]-->
            <noscript>
               <style>.woocommerce-product-gallery{ opacity: 1 !important; }</style>
            </noscript>
            <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
            <link rel="stylesheet" href="{{asset('frontend/css/modal-custom.css')}}">
            
          
            <style id="custom-css" type="text/css">:root {--primary-color: #78b82a;}.container-width, .full-width .ubermenu-nav, .container, .row{max-width: 1170px}.row.row-collapse{max-width: 1140px}.row.row-small{max-width: 1162.5px}.row.row-large{max-width: 1200px}.header-main{height: 90px}#logo img{max-height: 100px}#logo{width:300px;}#logo img{padding:10px 0;}.header-bottom{min-height: 52px}.header-top{min-height: 30px}.transparent .header-main{height: 90px}.transparent #logo img{max-height: 90px}.has-transparent + .page-title:first-of-type,.has-transparent + #main > .page-title,.has-transparent + #main > div > .page-title,.has-transparent + #main .page-header-wrapper:first-of-type .page-title{padding-top: 140px;}.header.show-on-scroll,.stuck .header-main{height:70px!important}.stuck #logo img{max-height: 70px!important}.search-form{ width: 10%;}.header-bottom {background-color: #1c3c5a}.stuck .header-main .nav > li > a{line-height: 50px }.header-bottom-nav > li > a{line-height: 25px }@media (max-width: 549px) {.header-main{height: 70px}#logo img{max-height: 70px}}/* Color */.accordion-title.active, .has-icon-bg .icon .icon-inner,.logo a, .primary.is-underline, .primary.is-link, .badge-outline .badge-inner, .nav-outline > li.active> a,.nav-outline >li.active > a, .cart-icon strong,[data-color='primary'], .is-outline.primary{color: #78b82a;}/* Color !important */[data-text-color="primary"]{color: #78b82a!important;}/* Background Color */[data-text-bg="primary"]{background-color: #78b82a;}/* Background */.scroll-to-bullets a,.featured-title, .label-new.menu-item > a:after, .nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,button[type="submit"], .button.wc-forward:not(.checkout):not(.checkout-button), .button.submit-button, .button.primary:not(.is-outline),.featured-table .title,.is-outline:hover, .has-icon:hover .icon-label,.nav-dropdown-bold .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold > li > a:hover, .nav-dropdown-bold.dark .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold.dark > li > a:hover, .header-vertical-menu__opener ,.is-outline:hover, .tagcloud a:hover,.grid-tools a, input[type='submit']:not(.is-form), .box-badge:hover .box-text, input.button.alt,.nav-box > li > a:hover,.nav-box > li.active > a,.nav-pills > li.active > a ,.current-dropdown .cart-icon strong, .cart-icon:hover strong, .nav-line-bottom > li > a:before, .nav-line-grow > li > a:before, .nav-line > li > a:before,.banner, .header-top, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover, .button.primary:not(.is-outline), input[type='submit'].primary, input[type='submit'].primary, input[type='reset'].button, input[type='button'].primary, .badge-inner{background-color: #78b82a;}/* Border */.nav-vertical.nav-tabs > li.active > a,.scroll-to-bullets a.active,.nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,.accordion-title.active,.featured-table,.is-outline:hover, .tagcloud a:hover,blockquote, .has-border, .cart-icon strong:after,.cart-icon strong,.blockUI:before, .processing:before,.loading-spin, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover{border-color: #78b82a}.nav-tabs > li.active > a{border-top-color: #78b82a}.widget_shopping_cart_content .blockUI.blockOverlay:before { border-left-color: #78b82a }.woocommerce-checkout-review-order .blockUI.blockOverlay:before { border-left-color: #78b82a }/* Fill */.slider .flickity-prev-next-button:hover svg,.slider .flickity-prev-next-button:hover .arrow{fill: #78b82a;}/* Background Color */[data-icon-label]:after, .secondary.is-underline:hover,.secondary.is-outline:hover,.icon-label,.button.secondary:not(.is-outline),.button.alt:not(.is-outline), .badge-inner.on-sale, .button.checkout, .single_add_to_cart_button, .current .breadcrumb-step{ background-color:#c0613c; }[data-text-bg="secondary"]{background-color: #c0613c;}/* Color */.secondary.is-underline,.secondary.is-link, .secondary.is-outline,.stars a.active, .star-rating:before, .woocommerce-page .star-rating:before,.star-rating span:before, .color-secondary{color: #c0613c}/* Color !important */[data-text-color="secondary"]{color: #c0613c!important;}/* Border */.secondary.is-outline:hover{border-color:#c0613c}body{font-size: 100%;}@media screen and (max-width: 549px){body{font-size: 100%;}}body{font-family:"Roboto", sans-serif}body{font-weight: 0}body{color: #000000}.nav > li > a {font-family:"Roboto", sans-serif;}.mobile-sidebar-levels-2 .nav > li > ul > li > a {font-family:"Roboto", sans-serif;}.nav > li > a {font-weight: 700;}.mobile-sidebar-levels-2 .nav > li > ul > li > a {font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a{font-family: "Quicksand", sans-serif;}h1,h2,h3,h4,h5,h6,.heading-font,.banner h1,.banner h2{font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font{color: #000000;}.breadcrumbs{text-transform: none;}.alt-font{font-family: "Roboto", sans-serif;}.alt-font{font-weight: 0!important;}.header:not(.transparent) .header-bottom-nav.nav > li > a{color: #ffffff;}.header:not(.transparent) .header-bottom-nav.nav > li > a:hover,.header:not(.transparent) .header-bottom-nav.nav > li.active > a,.header:not(.transparent) .header-bottom-nav.nav > li.current > a,.header:not(.transparent) .header-bottom-nav.nav > li > a.active,.header:not(.transparent) .header-bottom-nav.nav > li > a.current{color: #bd0a05 ;}.header-bottom-nav.nav-line-bottom > li > a:before,.header-bottom-nav.nav-line-grow > li > a:before,.header-bottom-nav.nav-line > li > a:before,.header-bottom-nav.nav-box > li > a:hover,.header-bottom-nav.nav-box > li.active > a,.header-bottom-nav.nav-pills > li > a:hover,.header-bottom-nav.nav-pills > li.active > a{color:#FFF!important;background-color: #12a650 ;}a{color: #000000;}a:hover{color: #78b82a;}.tagcloud a:hover{border-color: #78b82a;background-color: #78b82a;}.current .breadcrumb-step, [data-icon-label]:after, .button#place_order,.button.checkout,.checkout-button,.single_add_to_cart_button.button{background-color: #78b82a!important }@media screen and (min-width: 550px){.products .box-vertical .box-image{min-width: 300px!important;width: 300px!important;}}/* Custom CSS */.section1,.section3,.section4,.footer-section{padding-bottom: 0px !important;}.footer-section .ux-logo-link{padding: 0px !important;}.footer-section ul{margin-bottom : 0px;}.footer-section h3{font-size: 16px;color: #fff;text-transform: uppercase;position: relative;padding-bottom: 5px;border-bottom: 2px solid #bd0a05 ;}.footer-section ul li {list-style : none;border-bottom: 1px solid #262c44;padding: 6px 0;margin-bottom : 0px;margin-left : 0px;background: url(/frontend/img/right-chevron.png) no-repeat left;background-size: 10px;padding-left: 15px;}.footer-section a:hover{color : #bd0a05 ;}.footer-section p{margin-bottom : 5px;}.footer-section .cot4 .social-icons{margin-top: 6px;}.footer-section .cot4 .social-icons a{border-color: #222636 !important;background: #222636;color: #eee;margin-right: 8px;}.absolute-footer{background-color: #101522;color: #fff !important;padding: 10px 0;}.contact-header .col.large-4{padding-bottom: 0px;}.contact-header .icon-box-text{align-self: center;padding-left: 10px !important;} .contact-header .icon-box-text a{color: #9966ff;font-weight: bold;}.contact-header .icon-box-text p{font-size: 14px;}.header-bottom-nav.nav-left>li{margin: 0px;line-height: 52px;}.header-bottom-nav.nav-left > li.menu-item:hover,.header-bottom-nav.nav-left > li.menu-item.active,.header-bottom-nav.nav-left > li.menu-item.current{background: #ffffffd1;}.header-bottom-nav > li > a {padding: 10px 15px;font-family: 'Quicksand';font-size: 14px;}.header-bottom-nav .header-search-form{margin-left: 20px !important;}.header-search-form-wrapper input[type='search']{box-shadow: none;border: none;border-radius: 5px 0 0 5px;}.header-search-form-wrapper button[type="submit"]{box-shadow: none;border: none;border-radius: 0 5px 5px 0;}.nav-dropdown-default {padding: 0;border: none;}.nav-dropdown.nav-dropdown-default>li>a {padding: 10px 5px 10px 10px;margin: 0px;}.nav-dropdown.nav-dropdown-default>li:hover{background: #01447a;}.nav-dropdown.nav-dropdown-default>li:hover a{color: #fff;}.nav-dropdown-has-arrow li.has-dropdown:after, .nav-dropdown-has-arrow li.has-dropdown:before{display: none;}.section0 .row1 .icon-box{padding: 5px;border: 1px dashed #01447a;border-radius: 10px;}.section0 .row1 .icon-box h3 {margin-bottom: 0px;font-size: 18px;color: #01447a;}.section0 .row1 .icon-box .icon-box-img{align-self: center;}.section0 .row1 .icon-box p{font-size: 15px;}.section0 .row1 .icon-box:hover{cursor: pointer;box-shadow: 2px 2px 6px #01447ad1;}.section2 .row1 .cot1 h2{padding-bottom: 30px;margin-bottom: 5px;color: #01447a;}.section2 .row1 .cot1 h2:after{content: ' ';position: absolute;top: 30px;left: 50%;height: 40px;width: 180px;border-radius: 4px;transform: translateX(-50%);background: url(frontend/img/heading-line-2.png);background-repeat: no-repeat;background-position: center;}.section1 .row2 .cot1 p,.section2 .row2 .cot1 p{font-size: 15px;margin-bottom: 0px;}.is-divider{display: none;}.section1 .icon-box{box-shadow: 0 0px 22px rgb(120 184 42 / 0.12);}.section1 .icon-box .icon-box-img{margin-bottom: 0px;}.section1 .icon-box .icon-box-img img{padding: 0;}.section1 .icon-box .icon-box-text{padding: 10px;}.section1 .icon-box .icon-box-text h3{font-size: 18px;}.section1 .icon-box .icon-box-text p{font-size: 15px;}.section1 .icon-box .icon-box-img:before {position: absolute;content: '';width: 100%;height: 100%;top: 0;left: 0;z-index: 1;transition: all 0.6s ease-in-out;}.section1 .icon-box .icon-box-img:after {position: absolute;content: '';width: 100%;height: 100%;top: 0;left: 0;transition: all 0.6s ease-in-out;}.section1 .icon-box .icon-box-img:hover:before {right: 50%;left: 50%;width: 0;background: rgba(255, 255, 255, 0.5);}.section1 .icon-box .icon-box-img:hover:after {height: 0;top: 50%;bottom: 50%;background: rgba(255, 255, 255, 0.5);}.product-small.box{transition-duration: 0.3s;transition-property: box-shadow, transform;box-shadow: 0 0px 22px rgb(1 68 122 / 0.22);}.product-small.box:hover{box-shadow: 0 0px 20px rgb(1 68 122 / 0.5);transform: scale(1.00);}.product-small.box p.product-title{font-weight: bold;font-size: 16px;}.section2 .flickity-prev-next-button{opacity: 1;}.section2 .flickity-prev-next-button.previous,.section2 .flickity-prev-next-button.next{transform: translateX(0%);}.header-pro {display: block;height: 30px;margin-bottom: 0px;}.section1 .header-pro{height: 10px;}.box-header {display: inline-block;position: absolute;line-height: 60px;margin-top: -55px;left: 50%;transform: translate(-50%);}.box-header:before, .box-header:after {content: "";position: absolute;z-index: 0;}.box-header:before {width: 0;height: 0;border-style: solid;border-width: 0 30px 25px 30px;border-color: transparent transparent #e8e8e8 transparent;top: 0;left: -45px;}.box-header:after {width: 0;height: 0;border-style: solid;border-width: 0 30px 25px 30px;border-color: transparent transparent #e8e8e8 transparent;top: 0;right: -45px;}.box-header h2.box-title {padding: 0 30px;margin: 0;font-weight: 700;color: #fff;font-size: 25px;background: #01447a;line-height: 60px;text-transform: uppercase;border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;position: relative;z-index: 1;max-width: 500px;width: max-content;}.box-header h2.box-title:before, .box-header h2.box-title:after {content: "";position: absolute;}.box-header h2.box-title:before {width: 0;height: 0;border-style: solid;border-width: 0 17px 46px 0;border-color: transparent #01447a transparent transparent;left: -15px;top: 0;}.box-header h2.box-title:after {width: 0;height: 0;border-style: solid;border-width: 46px 17px 0 0;border-color: #01447a transparent transparent transparent;right: -15px;top: 0;}.section .tabbed-content ul li a{margin: 5px;padding: 7px 25px;border-radius: 20px;cursor: pointer;box-shadow: 0 0px 22px rgb(120 184 42 / 0.12);font-size: 15px;background: #fff;color: #000;font-weight: normal;}.section .tabbed-content ul li.active a{background: #01447a;color: #fff;}.section4 .row1 h3.section-title-normal{border-radius: 5px;border: 1px solid #e5e5e5;background: #f5f5f5;padding-right: 8px;}.section4 .row1 .section-title-normal span {margin-right: 15px;padding-bottom: 0;border-bottom: none;margin-bottom: -2px;font-size: 18px;font-weight: 700;margin: 0;color: #fff;height: 36px;line-height: 36px;float: left;padding-left: 20px;padding-right: 30px;background: linear-gradient(225deg, transparent 13px, #bd0a05  0) top right, linear-gradient(315deg, transparent 13px, #bd0a05  0) bottom right;background-repeat: no-repeat;background-size: 100% 50%;}.section4 .row1 .section-title a {font-size: 14px;font-weight: normal;}.section4 .row1 .section-title i.icon-angle-right {vertical-align: text-bottom;opacity: 1;}.section4 .row1 .section-title-container {margin-bottom: 10px;}.section4 .row1 .cot1 .box-blog-post,.section4 .row1 .cot2 .box-vertical {background: #fff;box-shadow: 0px 1px 15.57px 2.43px rgba(20,64,51,0.05);padding: 10px;}.section4 .row1 .cot1 .box-blog-post .box-text{padding-bottom: 0px;}.section4 .row1 .cot1 .box-blog-post h5{margin-bottom: 5px;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;//height: 45px;}.section4 .row1 .cot1 .box-blog-post .from_the_blog_excerpt{display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;height: 69px;}.section4 .row1 .cot2 .box-vertical .box-image{vertical-align: baseline;}.section4 .row1 .cot2 .box-vertical .box-text{padding-top: 0px;padding-left: 10px;padding-right: 0px;padding-bottom: 0px;}.section4 .row1 .cot2 .box-vertical .box-text h5{overflow: hidden;display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;}.section4 .row1 .cot2 .box-vertical .box-text .from_the_blog_excerpt{display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;}.section4 .row1 .cot2 .col.post-item{padding-bottom: 10px;}.product-small.box span.amount {white-space: nowrap;font-weight: bold;font-size: 15px;font-weight: 700;line-height: 22px;margin-right: 10px;}span.amount{color: #ff1201;}.product-summary .woocommerce-Price-currencySymbol {font-size: 100%;vertical-align: top;margin-top: 0;}.single-product .product-short-description {font-size: 15px;}.product-info .single_add_to_cart_button.button {font-size: 18px;width: 70%;height: 40px;line-height: 40px;border-radius: 6px;margin-bottom: 0px;font-family: 'Quicksand';}.quantity input[type="number"] {box-shadow: none;height: 45px;}.product-summary .quantity {margin-bottom: 0;height: 45px;}.product-info form{margin-bottom: 10px;}.product-info .social-icons a{margin-right: 5px;}h6.entry-category{font-size: 13px;text-transform: capitalize;}h6.entry-category a{color: #0f84c5;}.single-product #product-sidebar{padding-left: 0;margin-top: 30px;}.single-product .row-divided.row-reverse>.col+.col:not(.large-12) {border-right: none;}.product-summary .woocommerce-Price-currencySymbol {font-size: 100%;}.page-right-sidebar .col-divided {border-right: none;}.page-right-sidebar .col-divided+.col {padding-left: 0;}.widget-title, .widgettitle {margin-bottom: 0;background: #01447a;padding: 15px 25px;color: white;display: block;font-family: 'Quicksand';text-align: center;font-size: 18px !important;}.widget ul {margin: 0;border-top-left-radius: 0 !important;border-top-right-radius: 0!important;padding: 0px;box-shadow: 0px 0px 30px -10px rgba(0, 0, 0, 0.3);}.widget ul.menu>li>a,.widget>ul>li>a {padding: 5px 10px;font-weight: bold;}ul.menu>li+li, .widget>ul>li+li{border-top: 1px solid #01447a;}ul.product_list_widget li{padding: 10px 0 5px 80px;}ul.product_list_widget li img{margin-bottom: 0px;border-radius: 50%;margin-left: 10px;}ul.product_list_widget li .star-rating{display: none;}.category-posts-internal .cat-post-item:before {display: none !important;}.category-posts-internal .cat-post-item {border-bottom: none !important;margin: 0 !important;padding: 5px 10px !important;}.category-posts-internal li > div {margin: 0 !important;}.category-posts-internal .cat-post-crop {border-radius: 50%;}.category-posts-internal .cat-post-current .cat-post-title {text-transform: inherit !important;color: #fe0002 !important;line-height: 1.3;padding-top: 15px;}.flatsome_recent_posts .recent-blog-posts{padding: 10px !important;}.flatsome_recent_posts .mr-half {margin-right: 10px;}.flatsome_recent_posts .badge-inner {border-radius: 50%;}.blog-single .large-9.col,.archive.category .large-9.col{max-width: 70%;flex-basis: 70%;padding: 0 10px 10px;}.blog-single .post-sidebar.large-3,.archive.category .post-sidebar.large-3{max-width: 30%;flex-basis: 30%;padding: 0 10px 10px;border-left : none !important;padding-top: 15px;}.blog-single .post-sidebar.large-3{padding-top: 0px;}.article-inner,.comments-area .comment-respond{padding: 20px;box-shadow: 2px 2px 10px #0000001c;border-radius: 10px;background-color: #fff !important;}.archive.category .post-sidebar.large-3{padding-top: 0px;}.blog-archive .box.box-vertical{box-shadow: 0px 0px 30px -15px rgba(0, 0, 0, 0.3);}.blog-archive .box.box-vertical h5{margin-bottom: 8px;}.blog-archive .box.box-vertical .box-image {width: 30% !important;}.blog-archive .box .box-text {vertical-align: top;padding-left: 15px;padding-right: 15px;padding-bottom: 0px;}.blog-archive .box.box-text-bottom{background: #fff;box-shadow: 0px 1px 15.57px 2.43px rgba(20,64,51,0.05);padding: 10px;}.blog-archive .box.box-text-bottom h5{margin-bottom: 5px;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;font-size: 19px;}.blog-archive .col.post-item {padding: 0 8px 15px;}.single-product .product-main{padding: 20px;box-shadow: 0px 0px 30px -10px rgba(0, 0, 0, 0.3);margin-bottom: 20px;margin-top: 30px;border-radius: 10px;}.single-product .product-footer{padding: 20px;box-shadow: 0px 0px 30px -10px rgba(0, 0, 0, 0.3);border-radius: 10px;}.product-small .box-image:hover::before,.post-item .box-image:hover::before{-webkit-animation:shine .75s;animation:shine .75s}@-webkit-keyframes shine{100%{left:125%}}@keyframes shine{100%{left:125%}}.product-small .box-image::before,.post-item .box-image::before{position:absolute;top:0;left:-75%;z-index:2;display:block;content:'';width:50%;height:100%;background:-webkit-linear-gradient(left,rgba(255,255,255,0) 0,rgba(255,255,255,.3) 100%);background:linear-gradient(to right,rgba(255,255,255,0) 0,rgba(255,255,255,.3) 100%);-webkit-transform:skewX(-25deg);transform:skewX(-25deg)}div#reviews.woocommerce-Reviews,.devvn_prod_cmt{max-width: 100%;}.woocommerce #reviews #comments h2 {font-size: 20px;color: #01447a;}#comments a.btn-reviews-now,.woocommerce #review_form #respond p.form-submit input#submit, .woocommerce #reviews #comments ol.commentlist #respond p.form-submit input#submit {background-color: #01447a;}span.devvn_num_reviews,span.btn-attach{color: #01447a;}button#devvn_cmt_submit, button#devvn_cmt_replysubmit {background: #01447a;color: #fff;text-transform: capitalize;}.widget .current-cat>a {color: #01447a;}.widget_price_filter form {margin-top: 20px;}.widget_price_filter .ui-slider .ui-slider-handle,.widget_price_filter .ui-slider .ui-slider-range {background-color: #01447a;}#wide-nav .flex-left{width: 80%;}.header-bottom-nav > li.cart-item:hover,.header-bottom-nav > li.account-item:hover{box-shadow: inset 0.2rem 0.2rem 0.5rem #01447a, inset -0.2rem -0.2rem 0.5rem #01447a;border-radius: 10px;}.header-bottom-nav > li.cart-item > a:hover{color: #fff !important;}#commentform input[type='submit']{margin: 0px;}.archive.category h1{font-size: 25px;margin-bottom: 0;color: #01447a;z-index: 999;}.archive-page-header{position: relative;margin-bottom: 10px;padding: 25px 0;background: url(/wp-content/uploads/2017/09/thang.jpg);}.archive-page-header:before{content: "";display: block;background: rgb(0 0 0 / 0.6);z-index: 10;width: 100%;height: 80px;position: absolute;top: 0;}.archive-page-header .col.large-12{padding-bottom: 0px;}.blog-wrapper.blog-archive{padding-top: 20px;}.cart-sidebar .widget-title {border-bottom: none;background: #c0613c;}.cart-wrapper .button[disabled], button[disabled] {opacity: 1;}.product-footer .woocommerce-tabs {border-top: none;}.product-footer .woocommerce-tabs .nav > li > a {font-family: 'Quicksand';font-size: 20px;text-transform: capitalize;padding: 0;color: #01447a;}.product-footer .woocommerce-tabs .nav-line>li.active>a:before{display: none;}.product-section{border-top: none;}.product-section h3{color: #12bd4b;text-transform: capitalize;font-size: 20px;padding: 10px 0;}.header-block-block-1 .row>.col{padding-bottom: 0;}.wpcf7-spinner {display: none;}.box.box-blog-post {border: 1px solid #01447a;}.box.box-blog-post:hover{transform: scale(1.02);box-shadow: 1px 1px 5px #01447a;}.product-main .product-short-description {font-size: 15px;margin-bottom: 15px;border: 1px dashed #1f497d;border-radius: 3px;background: #2279e41a;padding: 10px;margin-top: 15px;}.product-main .product-short-description p{margin-bottom: 5px;}.lightbox-content{box-shadow: 0px 0px 30px 0px #020202;background-color: #063d44;}.form-popup .title-form,.form-popup .des{color: #fff;margin-bottom: 20px;font-size: 23px;text-transform: uppercase;}.form-popup .check-box{padding: 15px;background: #fff;margin-bottom: 15px;}.form-popup input[type=submit]{background: linear-gradient( 240deg, #a9a908, #01ae7f);width: 100%;}.form-popup .wpcf7-list-item {display: block;}.form-popup .wpcf7-list-item label{margin-bottom: 0;}.form-popup .note{color: #ffbc01;font-style: italic;font-size: 16px;}.mfp-close-btn-in .mfp-close {color: #fff;opacity: 1 !important;}.lightbox-content form{margin-bottom: 0;}.section6 .icon-box{border: 1px solid #c1282b;padding: 10px;border-radius: 5px;}.section6 .icon-box-text h3{margin-bottom: 0;}.section6 .icon-box-text h3 a{color: #06458f;}.section6 .icon-box-text h3 a:hover{color: #c1282b;}.section6 .row1 .col.large-12{padding-bottom: 0;}.section6 .row1 .col.large-12 h2 {text-transform: uppercase;font-family: 'Vollkorn', serif;}.section6 .row1{box-shadow: 0px 0px 30px -10px rgb(0 0 0 / 20%);padding: 20px;}/* Custom CSS Mobile */@media (max-width: 549px){.footer-section .row1 .large-3{max-width: 100%;flex-basis: 100%;}.off-canvas-right .mfp-content, .off-canvas-left .mfp-content {width: 100%;background-color: #fff;}.off-canvas .nav-vertical>li>a {padding-top: 10px;padding-bottom: 10px;color: #000;text-transform: capitalize;font-size: 16px;}.blog-single .large-9.col,.archive.category .large-9.col {max-width: 100%;flex-basis: 100%;padding: 0 10px 10px;}.blog-single .post-sidebar.large-3,.archive.category .post-sidebar.large-3 {max-width: 100%;flex-basis: 100%;padding-top: 0;}.box-header h2.box-title {padding: 0 20px;font-size: 17px;}.section1 .row2 .cot1 p, .section2 .row2 .cot1 p,.section2 .row1 .cot1 p{font-size: 14px;margin-bottom: 0px;}.section1 .box-blog-post .box-text{padding-bottom: 0px;}.section1 .box-blog-post .box-text h5{font-size: 17px;}.section2 .row1 .cot1 h2 {margin-bottom: 10px;font-size: 22px;}.section4 .row1 .box-blog-post{display: flex;}.section4 .row1 .box-blog-post .box-image{width: 30% !important;padding-right: 10px;}.section4 .row1 .box-blog-post .box-text {width: 70%;padding-top: 0px;}.section4 .row1 .cot1 .box-blog-post .from_the_blog_excerpt{-webkit-line-clamp: 2;height: 40px;}.section4 .row1 .box-blog-post h5{margin-bottom: 5px;}.section4 .row1 .cot2 .box-vertical .box-text{padding-left: 0px;}.section4 .row1 .cot1 .col.post-item{padding-bottom: 10px;}.single-product .row.row-large .col.large-9{padding: 0 5px 10px;}.single-product .product-main {margin-top: 10px;padding: 10px;}.single-product .product-footer{padding: 10px;}.single-product .product-main .large-6.col{padding-bottom: 10px;}.mua-hang-tiki {background-position-x: 10px;padding: 0 40px;}.product-info {padding-bottom: 0px;}.category-page-row .shop-container .product-small.col{padding: 0 5px 15px;}.article-inner, .comments-area .comment-respond,#comments .comment-respond{padding: 10px;}}.label-new.menu-item > a:after{content:"New";}.label-hot.menu-item > a:after{content:"Hot";}.label-sale.menu-item > a:after{content:"Sale";}.label-popular.menu-item > a:after{content:"Popular";}</style>
            <style type="text/css" id="wp-custom-css">
               .hotline3 {
               position: fixed;
               left: 10px;
               bottom: 10px;
               z-index: 9000;
               display: block;
               background: #e71919;
               color: #fff;
               padding-top: 5px;
               padding-bottom: 5px;
               padding-left: 12px;
               padding-right: 12px;
               border-radius: 99px;
               }
               .hotline3 .hotline3-number {
               font-size: 20px;
               color: #fec901;
               font-weight: 700;
               }
               .hotline3:hover .hotline3-number {
               color: #fff;
               }
               .hotline3:hover{background:#ff7300}
               .top-tim-kiem h1, .top-tim-kiem h2, .top-tim-kiem h3, .top-tim-kiem h4 {
               display: inline;
               }
               .product_list_widget, .amount span{
               color: red;
               font-size: 16px;
               font-weight: 600;
               }
               .article-inner .relative{display:none}
            </style>
         </head>
         <body data-rsssl=1 class="home page-template page-template-page-blank page-template-page-blank-php page page-id-2 theme-flatsome woocommerce-no-js lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
               <defs>
                  <filter id="wp-duotone-dark-grayscale">
                     <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                     <feComponentTransfer color-interpolation-filters="sRGB" >
                        <feFuncR type="table" tableValues="0 0.49803921568627" />
                        <feFuncG type="table" tableValues="0 0.49803921568627" />
                        <feFuncB type="table" tableValues="0 0.49803921568627" />
                        <feFuncA type="table" tableValues="1 1" />
                     </feComponentTransfer>
                     <feComposite in2="SourceGraphic" operator="in" />
                  </filter>
               </defs>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
               <defs>
                  <filter id="wp-duotone-grayscale">
                     <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                     <feComponentTransfer color-interpolation-filters="sRGB" >
                        <feFuncR type="table" tableValues="0 1" />
                        <feFuncG type="table" tableValues="0 1" />
                        <feFuncB type="table" tableValues="0 1" />
                        <feFuncA type="table" tableValues="1 1" />
                     </feComponentTransfer>
                     <feComposite in2="SourceGraphic" operator="in" />
                  </filter>
               </defs>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
               <defs>
                  <filter id="wp-duotone-purple-yellow">
                     <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                     <feComponentTransfer color-interpolation-filters="sRGB" >
                        <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                        <feFuncG type="table" tableValues="0 1" />
                        <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                        <feFuncA type="table" tableValues="1 1" />
                     </feComponentTransfer>
                     <feComposite in2="SourceGraphic" operator="in" />
                  </filter>
               </defs>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
               <defs>
                  <filter id="wp-duotone-blue-red">
                     <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                     <feComponentTransfer color-interpolation-filters="sRGB" >
                        <feFuncR type="table" tableValues="0 1" />
                        <feFuncG type="table" tableValues="0 0.27843137254902" />
                        <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                        <feFuncA type="table" tableValues="1 1" />
                     </feComponentTransfer>
                     <feComposite in2="SourceGraphic" operator="in" />
                  </filter>
               </defs>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
               <defs>
                  <filter id="wp-duotone-midnight">
                     <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                     <feComponentTransfer color-interpolation-filters="sRGB" >
                        <feFuncR type="table" tableValues="0 0" />
                        <feFuncG type="table" tableValues="0 0.64705882352941" />
                        <feFuncB type="table" tableValues="0 1" />
                        <feFuncA type="table" tableValues="1 1" />
                     </feComponentTransfer>
                     <feComposite in2="SourceGraphic" operator="in" />
                  </filter>
               </defs>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
               <defs>
                  <filter id="wp-duotone-magenta-yellow">
                     <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                     <feComponentTransfer color-interpolation-filters="sRGB" >
                        <feFuncR type="table" tableValues="0.78039215686275 1" />
                        <feFuncG type="table" tableValues="0 0.94901960784314" />
                        <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                        <feFuncA type="table" tableValues="1 1" />
                     </feComponentTransfer>
                     <feComposite in2="SourceGraphic" operator="in" />
                  </filter>
               </defs>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
               <defs>
                  <filter id="wp-duotone-purple-green">
                     <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                     <feComponentTransfer color-interpolation-filters="sRGB" >
                        <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                        <feFuncG type="table" tableValues="0 1" />
                        <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                        <feFuncA type="table" tableValues="1 1" />
                     </feComponentTransfer>
                     <feComposite in2="SourceGraphic" operator="in" />
                  </filter>
               </defs>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
               <defs>
                  <filter id="wp-duotone-blue-orange">
                     <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                     <feComponentTransfer color-interpolation-filters="sRGB" >
                        <feFuncR type="table" tableValues="0.098039215686275 1" />
                        <feFuncG type="table" tableValues="0 0.66274509803922" />
                        <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                        <feFuncA type="table" tableValues="1 1" />
                     </feComponentTransfer>
                     <feComposite in2="SourceGraphic" operator="in" />
                  </filter>
               </defs>
            </svg>
      
            <div id="wrapper">
     
               @if (session()->has('successBill'));
               <div class="lopgia">
            <div class="modal-thongbao">
               <p class="dong-modal">
                  <i class="fa-solid fa-xmark close-custom"></i>
                  </p>
                  <p class="icon-ctt"><img src="{{asset('frontend/img/tichxanh.gif')}}" alt="" srcset=""></p>
                <p class="nd-modal">Đặt đơn thành công !<br> </p>
                  
            </div>
        </div>
               @else
         <div class="lopgia" style="display: none">
            <div class="modal-thongbao">
               <p class="dong-modal">
                  <i class="fa-solid fa-xmark close-custom"></i>
                  </p>
                  <p class="icon-ctt"><img src="{{asset('frontend/img/tichxanh.gif')}}" alt="" srcset=""></p>
                <p class="nd-modal">Thêm sản phẩm vào giỏ hàng thành công !<br> </p>
                  
            </div>
        </div>
        @endif
              @include('layouts.header.index')
               @yield('content')
               @include('.layouts.footer.index')
            </div>
            <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
               
               <div class="sidebar-menu no-scrollbar ">
                  <ul class="nav nav-sidebar nav-vertical nav-uppercase" data-tab="1">
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-5889"><a href="{{route('home')}}" aria-current="page">Trang chủ</a></li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6291"><a href="{{route('aboutUs')}}">Giới thiệu</a></li>
                     <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6450">
                        <a href="#">Sản phẩm</a>
                        <ul class="sub-menu nav-sidebar-ul children">
                        @foreach ($categoryProduct as $cate)
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-6843"><a href="{{route('allListProCate',['cate'=>$cate->slug])}}">{{languageName($cate->name)}}</a></li>
                        @endforeach
                        </ul>
                     </li>
                     <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6450">
                        <a href="#">Dịch vụ</a>
                        <ul class="sub-menu nav-sidebar-ul children">
                        @foreach ($servicehome as $cate)
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-6843"><a href="{{route('serviceDetail',['slug'=>$cate->slug])}}">{{$cate->name}}</a></li>
                        @endforeach
                        </ul>
                     </li>
                     <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6035"><a href="{{route('listProject')}}">Dự Án</a></li>
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41"><a href="{{route('lienHe')}}">Liên hệ</a></li>
                  </ul>
               </div>
            </div>
            <!-- CTA -->
            <div class="contact-ft">
            <div class="cta"><a class="zalo" target="_blank" href="https://zalo.me/{{$setting->phone1}}" title="zalo" ><img src="{{asset('frontend/img/zalo-icon-150.png')}}"></a><span>Chat qua Zalo</span></div>
            <div class="cta"><a class="mess" target="_blank" href="{{$setting->facebook}}" title="mess" ><img src="{{asset('frontend/img/facebook-icon-150.png')}}"></a><span>Facebook chat</span></div>
           
            <a href="tel:{{$setting->phone1}}">
               <div class="hotline3">
                  <span class="before-hotline3">Hotline:</span>
                  <span class="hotline3-number">{{$setting->phone1}}</span>
               </div>
            </a>
           
            <script type="rocketlazyloadscript" data-rocket-type="text/javascript">
               (function () {
               	var c = document.body.className;
               	c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
               	document.body.className = c;
               })();
            </script>
            
            <script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='{{asset('frontend/js/index.js')}}' id='swv-js'></script>
           
           
            <script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='{{asset('frontend/js/jquery.blockUI.min.js')}}' id='jquery-blockui-js'></script>
            <script type='text/javascript' id='wc-add-to-cart-js-extra'>
               /* <![CDATA[ */
               var wc_add_to_cart_params = {"ajax_url":"","wc_ajax_url":"","cart_redirect_after_add":"no"};
               /* ]]> */
            </script>
            <script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='{{asset('frontend/js/add-to-cart.min.js')}}' id='wc-add-to-cart-js'></script>
            <script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='{{asset('frontend/js/js.cookie.min.js')}}' id='js-cookie-js'></script>
            <script type='text/javascript' id='woocommerce-js-extra'>
               /* <![CDATA[ */
               var woocommerce_params = {"ajax_url":"","wc_ajax_url":""};
               /* ]]> */
            </script>
            <script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='{{asset('frontend/js/woocommerce.min.js')}}' id='woocommerce-js'></script>
            <script type='text/javascript' id='wc-cart-fragments-js-extra'>
               /* <![CDATA[ */
               var wc_cart_fragments_params = {"ajax_url":"","wc_ajax_url":"","request_timeout":"5000"};
               /* ]]> */
            </script>
            <script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='{{asset('frontend/js/cart-fragments.min.js')}}' id='wc-cart-fragments-js'>

            </script>
        
            <script type="rocketlazyloadscript" data-rocket-type='text/javascript' id='rocket-browser-checker-js-after'>
               "use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
            </script>
            <script type='text/javascript' id='rocket-preload-links-js-extra'>
               /* <![CDATA[ */
               var RocketPreloadLinksConfig = {"excludeUris":"\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/thanh-toan\/|\/gio-hang\/|\/tai-khoan\/|\/wc-api\/v(.*)|\/(index\\.php\/)?wp\\-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/","usesTrailingSlash":"1","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm","siteUrl":"https:\/\/smarthomehp.vn","onHoverDelay":"100","rateThrottle":"3"};
               /* ]]> */
            </script>
            <script type="rocketlazyloadscript" data-rocket-type='text/javascript' id='rocket-preload-links-js-after'>
               (function() {
               "use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
               }());
            </script>
            <script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='{{asset('frontend/js/regenerator-runtime.min.js')}}' id='regenerator-runtime-js'></script>
            <script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='{{asset('frontend/js/wp-polyfill.min.js')}}' id='wp-polyfill-js'></script>
            <script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='{{asset('frontend/js/hoverIntent.min.js')}}' id='hoverIntent-js'></script>
            <script type='text/javascript' id='flatsome-js-js-extra'>
               /* <![CDATA[ */
               var flatsomeVars = {"theme":{"version":"3.15.6"},"ajaxurl":"","rtl":"","sticky_height":"70","assets_url":"https:\/\/smarthomehp.vn\/wp-content\/themes\/flatsome\/assets\/js\/","lightbox":{"close_markup":"<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>","close_btn_inside":false},"user":{"can_edit_pages":false},"i18n":{"mainMenu":"Main Menu","toggleButton":"Toggle"},"options":{"cookie_notice_version":"1","swatches_layout":false,"swatches_box_select_event":false,"swatches_box_behavior_selected":false,"swatches_box_update_urls":"1","swatches_box_reset":false,"swatches_box_reset_extent":false,"swatches_box_reset_time":300,"search_result_latency":"0"},"is_mini_cart_reveal":"1"};
               /* ]]> */
            </script>
            
            <script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('frontend/js/jquery-migrate-1.2.1.min.js')}}"></script>
            <script src="{{asset('frontend/js/modal-custom.min.js')}}"></script>
            <script src="{{asset('frontend/js/wowanimate.min.js')}}"></script>
            <script>
               new WOW().init();
             </script>
             
           
            @yield('js')
            <script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='{{asset('frontend/js/flatsome.js')}}' id='flatsome-js-js'></script>
            <script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='{{asset('frontend/js/woocommerce.js')}}' id='flatsome-theme-woocommerce-js-js'></script>       
            <script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='{{asset('frontend/js/packery.pkgd.min.js')}}' id='flatsome-masonry-js-js'></script>
          
            <script>
              

            </script>
            <script>
                        $('.add_cart').click(function(e){
                           $("#cart-popup").css('style','display:block');
                           e.preventDefault();  
                           var id = $(this).data('id');
                           var url = $(this).data('url');
                           var quantity = $(this).parent().find('input[name="quantity_pro"]').val();
                       
                           $.ajax({
                              type: "POST",
                              url: url,
                              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                              data: {'id': id, 'quantity': quantity,},
                              success: function(data){
                                 $('#cart-popup').html(data.html1);
                                 $('.cart-all').html(data.html2);
                                 $('.cart-all-mobile').html(data.html5);
                             
                                 }
                            })
                           })
            </script>
            <script>
               function removeItemCart(e) {
            var id = e
            var url = $('.remove').data('url');
            console.log('123');
            $.ajax({
                type: 'get',
                url:url,
                data: {id:id},
                success: function(data){
                                 $('#cart-popup').html(data.html1);
                                 $('.cart-ajax-new').html(data.html3);
                                 $('.cart-all').html(data.html2);
                                 $('.cart-all-mobile').html(data.html5);
                                 $('#cart-popup').show();
                                 }
            })
        }
            </script>
            <script>
               function btnMinus(e) {
            var id = e;
            var result = document.getElementById('qty'+id); var qtypro = result.value; if( !isNaN( qtypro ) && qtypro > 1 ) result.value--;
            var quantity = result.value;
            var url = $('.data-update-cart').data('url');
            $.ajax({
                type:'get',
                url:url,
                data: {id:id, quantity:quantity},
                success: function(data) {
                  $('#cart-popup').html(data.html1);
                  $('.cart-all').html(data.html2);
                  $('.cart-all-mobile').html(data.html5);
                  $('.cart-ajax-new').html(data.html3);
                 
                }
            })
        }
        function btnPlus(e) {
       
            var id = e;
            var result = document.getElementById('qty'+id); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;
            var quantity = result.value;
            var url = $('.data-update-cart').data('url');
            console.log(url);
            $.ajax({
                type:'get',
                url:url,
                data: {id:id, quantity:quantity},
                success: function(data) {
                  $('#cart-popup').html(data.html1);
                  $('.cart-all-mobile').html(data.html5);
                  $('.cart-all').html(data.html2);
                  $('.cart-ajax-new').html(data.html3);
                }
            })
        }</script>
        <script>
         <script>
      if (window.innerWidth < 768) {
      window.onscroll = function() {myFunction()};

      var header = document.getElementById("header-fixed");
      var headerTop = document.getElementById("top-header");
      var sticky = header.offsetTop;

      function myFunction() {
      if (window.pageYOffset > sticky) {
         header.classList.add("sticky");
         headerTop.classList.add("hidden");
      } else {
         header.classList.remove("sticky");
         headerTop.classList.remove("hidden");
      }
      }
      }
   </script>
         </script>
         </body>
      </html>
     