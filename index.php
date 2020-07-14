<?php
$GLOBALS['_ta_campaign_key'] = '444b212ac0952f218b9c5d2a230088cb';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=444b212ac0952f218b9c5d2a230088cb' parameter

require 'bootloader.php';

$campaign_id = 'o8ah01';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    case 'reverse_proxy':
        print reverse_proxy($response['url'], "tarp_c8a574e9ce215fd08c4b047b2ee8492a/");
        exit;        
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
    default:
        print other_methods($response['url']);
        break;    
}
/*
 * Note: if using the "Remain on Fail URL" action for Filtered Visitors, append your Fail URL's HTML/PHP code after the closing PHP tag below:
 */
?>



<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>werwofrea</title><meta name="author" content="werwofrea"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://werwofrea.appspot.com/"/>
<meta property="og:site_name" content="werwofrea"/>
<meta property="og:title" content="Wired for Winning"/>
<meta property="og:description" content="Book an Infrastructure Reivew!"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/3J7mV3w"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="werwofrea"/>
<meta name="twitter:description" content="Wired for Winning"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/3J7mV3w"/>
<meta name="twitter:image:alt" content="werwofrea"/>
<meta name="theme-color" content="#b1daee"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CObject.is%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/79fb68164481d54f/script.js" crossorigin></script>
<script type="text/javascript">"undefined"===typeof _trfq&&(window._trfq=[]);"undefined"==typeof _trfd&&(window._trfd=[]);</script>
<script type="text/javascript">function trackingEnabledForType(t){return!("undefined"!=typeof document&&"click"===t&&!Boolean(window._allowCT))||(window._allowCT=-1!==document.cookie.indexOf("cookie_terms_accepted"),window._allowCT)}function logTcclEvent(){var e=this.getAttribute("data-tccl");if(window._trfq&&e)try{var t=e.split(","),n=t[0],o=t[1];if(!trackingEnabledForType(o))return;for(var d=t.splice(2),r=[],c=0;c<d.length;c+=2)r.push([d[c],d[c+1]]);window._trfq.push(["cmdLogEvent",o,n,r])}catch(t){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.log",[["error",t.toString()],["data",e]]])}}"undefined"!=typeof window&&"undefined"!=typeof document&&window.addEventListener("DOMContentLoaded",function(){for(var t=document.querySelectorAll("[data-tccl]"),e=0;e<t.length;e++)try{var n=t[e].getAttribute("data-tccl").split(",");t[e].addEventListener(n[1],logTcclEvent)}catch(t){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.add",[["error",t.toString()]]])}});</script>
<script type="text/javascript">"use strict";

if ('serviceWorker' in navigator) {
  window.addEventListener('load', function () {
    navigator.serviceWorker.register('/sw.js').then(function () {
      console.log('sw: registration complete');
    }).catch(function (err) {
      console.log(err);
    });
  });
}</script>
<style type="text/css">/*
Copyright (c) 2012 by Brian J. Bonislawsky DBA Astigmatic (AOETI) (astigma@astigmatic.com), with Reserved Font Name "Sacramento"

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Sacramento';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('Sacramento'), local('Sacramento-Regular'), url(https://img1.wsimg.com/gfonts/s/sacramento/v7/buEzpo6gcdjy0EiZMBUG4CMf_f5Iai0Ycw.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Sacramento';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('Sacramento'), local('Sacramento-Regular'), url(https://img1.wsimg.com/gfonts/s/sacramento/v7/buEzpo6gcdjy0EiZMBUG4C0f_f5Iai0.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright (c) 2010 - 2013, Matt McInerney (matt@pixelspread.com), Pablo Impallari (impallari@gmail.com), Rodrigo Fuenzalida (hello@rfuenzalida.com) with Reserved Font Name "Raleway"

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Raleway';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: local('Raleway Italic'), local('Raleway-Italic'), url(https://img1.wsimg.com/gfonts/s/raleway/v16/1Ptsg8zYS_SKggPNyCg4Q4FqL_KWxWMT.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Raleway';
  font-style: italic;
  font-weight: 400;
  font-display: swap;
  src: local('Raleway Italic'), local('Raleway-Italic'), url(https://img1.wsimg.com/gfonts/s/raleway/v16/1Ptsg8zYS_SKggPNyCg4TYFqL_KWxQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local('Raleway Light'), local('Raleway-Light'), url(https://img1.wsimg.com/gfonts/s/raleway/v16/1Ptrg8zYS_SKggPNwIYqWqhPANqczVsq4A.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local('Raleway Light'), local('Raleway-Light'), url(https://img1.wsimg.com/gfonts/s/raleway/v16/1Ptrg8zYS_SKggPNwIYqWqZPANqczVs.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('Raleway'), local('Raleway-Regular'), url(https://img1.wsimg.com/gfonts/s/raleway/v16/1Ptug8zYS_SKggPNyCMIT4ttDfCmxA.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('Raleway'), local('Raleway-Regular'), url(https://img1.wsimg.com/gfonts/s/raleway/v16/1Ptug8zYS_SKggPNyC0IT4ttDfA.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local('Raleway SemiBold'), local('Raleway-SemiBold'), url(https://img1.wsimg.com/gfonts/s/raleway/v16/1Ptrg8zYS_SKggPNwPIsWqhPANqczVsq4A.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: local('Raleway SemiBold'), local('Raleway-SemiBold'), url(https://img1.wsimg.com/gfonts/s/raleway/v16/1Ptrg8zYS_SKggPNwPIsWqZPANqczVs.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('Raleway Bold'), local('Raleway-Bold'), url(https://img1.wsimg.com/gfonts/s/raleway/v16/1Ptrg8zYS_SKggPNwJYtWqhPANqczVsq4A.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Raleway';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local('Raleway Bold'), local('Raleway-Bold'), url(https://img1.wsimg.com/gfonts/s/raleway/v16/1Ptrg8zYS_SKggPNwJYtWqZPANqczVs.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/4d04b429-7f60-4f9c-a970-1c84ce86c0ff/gpub/8396e10278a51439/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/4d04b429-7f60-4f9c-a970-1c84ce86c0ff/gpub/9b51a15f51c04888/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-q{padding-top:32px}}@media (max-width: 767px){.x .c1-r{padding-bottom:32px}}@media (max-width: 767px){.x .c1-24{width:100%}}@media (max-width: 767px){.x .c1-25{display:flex}}@media (max-width: 767px){.x .c1-26{justify-content:center}}@media (max-width: 767px){.x .c1-44{margin-top:32px}}@media (max-width: 767px){.x .c1-45{margin-right:32px}}@media (max-width: 767px){.x .c1-46{margin-bottom:32px}}@media (max-width: 767px){.x .c1-47{margin-left:32px}}@media (max-width: 767px){.x .c1-5c{margin-bottom:24px}}@media (max-width: 767px){.x .c1-6a > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-6b  > :last-child{margin-bottom:0 !important}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/4d04b429-7f60-4f9c-a970-1c84ce86c0ff/gpub/6971a8471d6214e6/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/4d04b429-7f60-4f9c-a970-1c84ce86c0ff/gpub/47a73296109a7655/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-16{width:1160px}}@media (min-width: 1280px){.x .c1-2a{font-size:18px}}@media (min-width: 1280px){.x .c1-2x{font-size:50px}}@media (min-width: 1280px){.x .c1-39{font-size:36px}}@media (min-width: 1280px){.x .c1-3e{font-size:25px}}@media (min-width: 1280px){.x .c1-3r{font-size:22px}}@media (min-width: 1280px){.x .c1-4c{font-size:14px}}@media (min-width: 1280px){.x .c1-4h{font-size:12px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-17{width:1280px}}@media (min-width: 1536px){.x .c1-2b{font-size:20px}}@media (min-width: 1536px){.x .c1-2y{font-size:54px}}@media (min-width: 1536px){.x .c1-3a{font-size:41px}}@media (min-width: 1536px){.x .c1-3f{font-size:27px}}@media (min-width: 1536px){.x .c1-3s{font-size:24px}}@media (min-width: 1536px){.x .c1-4d{font-size:16px}}@media (min-width: 1536px){.x .c1-4i{font-size:14px}}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style></head>
<body class="x  x-fonts-sacramento" context="[object Object]"><div id="layout-4-d-04-b-429-7-f-60-4-f-9-c-a-970-1-c-84-ce-86-c-0-ff" class="layout layout-layout layout-layout-layout-20 locale-en-US lang-en"><div data-ux="Page" id="page-24905" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div id="3b3887ba-493a-4d68-a771-85d5a5010529" class="widget widget-header widget-header-header-9"><div data-ux="Header" role="main" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div> <section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-j c1-b c1-c c1-k c1-l c1-m c1-n c1-o c1-p c1-q c1-r c1-d c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-s c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-b c1-c c1-d c1-e c1-f c1-g"></div><div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-u c1-v c1-w c1-x c1-b c1-c c1-d c1-y c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-z c1-10 c1-11 c1-12 c1-13 c1-b c1-c c1-14 c1-d c1-15 c1-e c1-16 c1-f c1-17 c1-g"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-1f c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1k c1-1l c1-1m c1-13 c1-1n c1-1o c1-1p c1-1q c1-1r c1-1s c1-b c1-c c1-1t c1-1u c1-1v c1-1w c1-d c1-1x c1-1y c1-1z c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-20 c1-13 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-21 c1-22 c1-13 c1-20 c1-1c c1-10 c1-1e c1-z c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b"><a rel="" role="link" aria-haspopup="menu" data-ux="Link" data-page="212a36f1-4f88-46c1-9087-e0fe56aef3a1" title="werwofrea" href="/" data-typography="LinkAlpha" class="x-el x-el-a c1-2c c1-2d c1-2e c1-1s c1-1r c1-2f c1-2g c1-2h c1-2i c1-2j c1-2k c1-13 c1-b c1-2l c1-c c1-2m c1-2n c1-2o c1-d c1-e c1-f c1-g" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.24907.click,click"><div data-ux="Block" id="logo-container-24908" class="x-el x-el-div c1-1 c1-2 c1-21 c1-4 c1-s c1-b c1-c c1-d c1-e c1-f c1-g"><h3 role="heading" aria-level="3" data-ux="LogoHeading" id="logo-text-24909" data-aid="HEADER_LOGO_TEXT_RENDERED" data-typography="HeadingAlpha" class="x-el x-el-h3 c1-1 c1-2 c1-1s c1-1r c1-2p c1-2q c1-2r c1-1c c1-1e c1-13 c1-21 c1-22 c1-2s c1-2t c1-2u c1-2v c1-2w c1-2x c1-2y">werwofrea</h3><span role="heading" aria-level="NaN" data-ux="scaler" data-size="xxlarge" data-scaler-id="scaler-logo-container-24908" aria-hidden="true" data-typography="HeadingAlpha" class="x-el x-el-span c1-1 c1-2 c1-2z c1-30 c1-2p c1-2q c1-2r c1-1c c1-1e c1-13 c1-31 c1-32 c1-33 c1-34 c1-35 c1-2t c1-22 c1-2s c1-2u c1-2v c1-2w c1-2x c1-2y">werwofrea</span><span role="heading" aria-level="NaN" data-ux="scaler" data-size="xlarge" data-scaler-id="scaler-logo-container-24908" aria-hidden="true" data-typography="HeadingAlpha" class="x-el x-el-span c1-1 c1-2 c1-2z c1-30 c1-2p c1-2q c1-2r c1-1c c1-1e c1-13 c1-31 c1-32 c1-33 c1-34 c1-35 c1-36 c1-22 c1-2s c1-2u c1-37 c1-38 c1-39 c1-3a">werwofrea</span><span role="heading" aria-level="NaN" data-ux="scaler" data-size="large" data-scaler-id="scaler-logo-container-24908" aria-hidden="true" data-typography="HeadingAlpha" class="x-el x-el-span c1-1 c1-2 c1-2z c1-30 c1-2p c1-2q c1-2r c1-1c c1-1e c1-13 c1-31 c1-32 c1-33 c1-34 c1-35 c1-3b c1-22 c1-2s c1-2u c1-3c c1-3d c1-3e c1-3f">werwofrea</span><div id="bs-1"></div></div></a></div></div><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-2q c1-2r c1-3g c1-3h c1-13 c1-3i c1-1n c1-1p c1-1c c1-1e c1-3j c1-b c1-c c1-14 c1-d c1-15 c1-e c1-16 c1-f c1-17 c1-g"><div data-ux="Element" id="tagline-container-24910" class="x-el x-el-div c1-1 c1-2 c1-1s c1-1r c1-2p c1-3k c1-s c1-13 c1-b c1-c c1-d c1-e c1-f c1-g"><h1 role="heading" aria-level="1" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" id="dynamic-tagline-24911" data-typography="BodyBeta" class="x-el x-el-h1 c1-1 c1-2 c1-1s c1-1r c1-3l c1-2q c1-2r c1-3m c1-1e c1-3n c1-4 c1-21 c1-13 c1-20 c1-b c1-2s c1-3o c1-2u c1-3p c1-3q c1-3r c1-3s">Wired for Winning</h1><span role="heading" aria-level="NaN" data-ux="scaler" data-size="large" data-scaler-id="scaler-tagline-container-24910" aria-hidden="true" data-typography="BodyBeta" class="x-el x-el-span c1-1 c1-2 c1-2z c1-30 c1-3l c1-2q c1-2r c1-3m c1-1e c1-3n c1-34 c1-31 c1-13 c1-20 c1-32 c1-33 c1-35 c1-3o c1-b c1-2s c1-2u c1-3p c1-3q c1-3r c1-3s">Wired for Winning</span><span role="heading" aria-level="NaN" data-ux="scaler" data-size="medium" data-scaler-id="scaler-tagline-container-24910" aria-hidden="true" data-typography="BodyBeta" class="x-el x-el-span c1-1 c1-2 c1-2z c1-30 c1-3l c1-2q c1-2r c1-3m c1-1e c1-3n c1-34 c1-31 c1-13 c1-20 c1-32 c1-33 c1-35 c1-c c1-b c1-2s c1-2u c1-d c1-e c1-f c1-g">Wired for Winning</span><div id="bs-2"></div></div></div></div></div></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-z c1-10 c1-11 c1-12 c1-13 c1-u c1-w c1-31 c1-b c1-c c1-14 c1-d c1-15 c1-3t c1-e c1-16 c1-f c1-17 c1-g"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-1f c1-3u c1-3v c1-20 c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1k c1-1l c1-3w c1-13 c1-1n c1-1o c1-1p c1-1q c1-3x c1-b c1-c c1-1t c1-1u c1-1v c1-1w c1-d c1-3y c1-3z c1-40 c1-41 c1-e c1-f c1-g"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-42 c1-43 c1-b c1-c c1-44 c1-45 c1-46 c1-47 c1-d c1-e c1-f c1-g"><div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-48 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-21 c1-22 c1-13 c1-20 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b"><a rel="" role="link" aria-haspopup="menu" data-ux="Link" data-page="212a36f1-4f88-46c1-9087-e0fe56aef3a1" title="werwofrea" href="/" data-typography="LinkAlpha" class="x-el x-el-a c1-2c c1-2d c1-2e c1-1s c1-1r c1-2f c1-2g c1-2h c1-2i c1-2j c1-2k c1-13 c1-b c1-2l c1-c c1-2m c1-2n c1-2o c1-d c1-e c1-f c1-g" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.24912.click,click"><div data-ux="Block" id="logo-container-24913" class="x-el x-el-div c1-1 c1-2 c1-21 c1-4 c1-s c1-b c1-c c1-d c1-e c1-f c1-g"><h3 role="heading" aria-level="3" data-ux="LogoHeading" id="logo-text-24914" data-aid="HEADER_LOGO_TEXT_RENDERED" data-typography="HeadingAlpha" class="x-el x-el-h3 c1-1 c1-2 c1-1s c1-1r c1-2p c1-2q c1-2r c1-1c c1-1e c1-13 c1-21 c1-22 c1-2s c1-2t c1-2u c1-2v c1-2w c1-2x c1-2y">werwofrea</h3><span role="heading" aria-level="NaN" data-ux="scaler" data-size="xxlarge" data-scaler-id="scaler-logo-container-24913" aria-hidden="true" data-typography="HeadingAlpha" class="x-el x-el-span c1-1 c1-2 c1-2z c1-30 c1-2p c1-2q c1-2r c1-1c c1-1e c1-13 c1-31 c1-32 c1-33 c1-34 c1-35 c1-2t c1-22 c1-2s c1-2u c1-2v c1-2w c1-2x c1-2y">werwofrea</span><span role="heading" aria-level="NaN" data-ux="scaler" data-size="xlarge" data-scaler-id="scaler-logo-container-24913" aria-hidden="true" data-typography="HeadingAlpha" class="x-el x-el-span c1-1 c1-2 c1-2z c1-30 c1-2p c1-2q c1-2r c1-1c c1-1e c1-13 c1-31 c1-32 c1-33 c1-34 c1-35 c1-36 c1-22 c1-2s c1-2u c1-37 c1-38 c1-39 c1-3a">werwofrea</span><span role="heading" aria-level="NaN" data-ux="scaler" data-size="large" data-scaler-id="scaler-logo-container-24913" aria-hidden="true" data-typography="HeadingAlpha" class="x-el x-el-span c1-1 c1-2 c1-2z c1-30 c1-2p c1-2q c1-2r c1-1c c1-1e c1-13 c1-31 c1-32 c1-33 c1-34 c1-35 c1-3b c1-22 c1-2s c1-2u c1-3c c1-3d c1-3e c1-3f">werwofrea</span><div id="bs-3"></div></div></a></div><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-2q c1-2r c1-3g c1-3h c1-13 c1-3i c1-1n c1-1p c1-1c c1-1e c1-3j c1-b c1-c c1-14 c1-d c1-15 c1-e c1-16 c1-f c1-17 c1-g"><div data-ux="Element" alignmentOption="center" id="tagline-container-24915" class="x-el x-el-div c1-1 c1-2 c1-1s c1-1r c1-2p c1-3k c1-s c1-13 c1-b c1-c c1-d c1-e c1-f c1-g"><h1 role="heading" aria-level="1" data-ux="Tagline" alignmentOption="center" data-aid="HEADER_TAGLINE_RENDERED" id="dynamic-tagline-24916" data-typography="BodyBeta" class="x-el x-el-h1 c1-1 c1-2 c1-1s c1-1r c1-3l c1-2q c1-2r c1-3m c1-1e c1-3n c1-4 c1-21 c1-13 c1-b c1-2s c1-3o c1-2u c1-3p c1-3q c1-3r c1-3s">Wired for Winning</h1><span role="heading" aria-level="NaN" data-ux="scaler" data-size="small" data-scaler-id="scaler-tagline-container-24915" aria-hidden="true" data-typography="BodyBeta" class="x-el x-el-span c1-1 c1-2 c1-2z c1-30 c1-3l c1-2q c1-2r c1-3m c1-1e c1-3n c1-34 c1-31 c1-13 c1-32 c1-33 c1-35 c1-49 c1-b c1-2s c1-2u c1-4a c1-4b c1-4c c1-4d">Wired for Winning</span><span role="heading" aria-level="NaN" data-ux="scaler" data-size="xsmall" data-scaler-id="scaler-tagline-container-24915" aria-hidden="true" data-typography="BodyBeta" class="x-el x-el-span c1-1 c1-2 c1-2z c1-30 c1-3l c1-2q c1-2r c1-3m c1-1e c1-3n c1-34 c1-31 c1-13 c1-32 c1-33 c1-35 c1-4e c1-b c1-2s c1-2u c1-4f c1-4g c1-4h c1-4i">Wired for Winning</span><div id="bs-4"></div></div></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-z c1-10 c1-11 c1-12 c1-13 c1-18 c1-3u c1-b c1-c c1-d c1-e c1-f c1-g"><hr aria-hidden="true" role="separator" data-ux="HR" class="x-el x-el-hr c1-1 c1-2 c1-4j c1-4k c1-4l c1-1c c1-1e c1-4m c1-2r c1-2q c1-3j c1-b c1-c c1-d c1-e c1-f c1-g"/></div><div data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-typography="BodyAlpha" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1r c1-3l c1-1c c1-4n c1-4o c1-4p c1-4q c1-4r c1-b c1-2s c1-c c1-2u c1-d c1-4s c1-e c1-f c1-g x-rt"><p style="margin:0"><span class="x-el x-el-span c1-50 c1-51 c1-b c1-c c1-d c1-e c1-f c1-g">Book an Infrastructure Reivew!</span></p></div><div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1k c1-1l c1-3w c1-13 c1-1n c1-1o c1-1p c1-1q c1-b c1-c c1-1t c1-1u c1-1v c1-1w c1-d c1-3y c1-3z c1-e c1-f c1-g"><figure data-ux="WrapperImage" class="x-el x-el-figure c1-1 c1-2 c1-s c1-21 c1-1c c1-2r c1-1e c1-2q c1-b c1-c c1-d c1-e c1-f c1-g"><img src="//img1.wsimg.com/isteam/stock/3J7mV3w/:/" alt="image4" data-ux="Image" data-aid="BACKGROUND_IMAGE_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-13 c1-34 c1-z c1-10 c1-1c c1-1e c1-52 c1-4j c1-4l c1-t c1-53 c1-54 c1-55 c1-56 c1-b c1-c c1-d c1-e c1-f c1-g"/><script>(function(){Number(window.vctElements)||(window.vctElements=0),window.vctElements++;var i=new Image();i.onload=window.markVisuallyComplete;i.srcset="//img1.wsimg.com/isteam/stock/3J7mV3w/:/";i.src="//img1.wsimg.com/isteam/stock/3J7mV3w/:/";})()</script></figure></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-z c1-10 c1-11 c1-12 c1-13 c1-3k c1-b c1-c c1-14 c1-d c1-15 c1-y c1-e c1-16 c1-f c1-17 c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-20 c1-4 c1-57 c1-58 c1-59 c1-1c c1-b c1-c c1-d c1-e c1-f c1-g"><figure data-ux="WrapperImage" class="x-el x-el-figure c1-1 c1-2 c1-s c1-21 c1-1c c1-2r c1-1e c1-2q c1-b c1-c c1-d c1-e c1-f c1-g"><img src="//img1.wsimg.com/isteam/stock/3J7mV3w/:/rs=w:700,cg:true,m" srcSet="//img1.wsimg.com/isteam/stock/3J7mV3w/:/rs=w:700,cg:true,m,
//img1.wsimg.com/isteam/stock/3J7mV3w/:/rs=w:1050,cg:true,m 1.5x,
//img1.wsimg.com/isteam/stock/3J7mV3w/:/rs=w:1400,cg:true,m 2x,
//img1.wsimg.com/isteam/stock/3J7mV3w/:/rs=w:2100,cg:true,m 3x" alt="image5" data-ux="Image" data-aid="BACKGROUND_IMAGE_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-13 c1-34 c1-z c1-10 c1-1c c1-1e c1-52 c1-4j c1-4l c1-t c1-53 c1-54 c1-55 c1-56 c1-58 c1-57 c1-b c1-c c1-d c1-e c1-f c1-g"/><script>(function(){Number(window.vctElements)||(window.vctElements=0),window.vctElements++;var i=new Image();i.onload=window.markVisuallyComplete;i.srcset="//img1.wsimg.com/isteam/stock/3J7mV3w/:/rs=w:700,cg:true,m, //img1.wsimg.com/isteam/stock/3J7mV3w/:/rs=w:1050,cg:true,m 1.5x, //img1.wsimg.com/isteam/stock/3J7mV3w/:/rs=w:1400,cg:true,m 2x, //img1.wsimg.com/isteam/stock/3J7mV3w/:/rs=w:2100,cg:true,m 3x";i.src="//img1.wsimg.com/isteam/stock/3J7mV3w/:/rs=w:700,cg:true,m";})()</script></figure></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-20 c1-1c c1-59 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-1f c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1k c1-1l c1-1m c1-13 c1-1n c1-1o c1-1p c1-1q c1-b c1-c c1-1t c1-1u c1-1v c1-1w c1-d c1-1x c1-1y c1-1z c1-e c1-f c1-g"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-typography="BodyAlpha" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1r c1-3l c1-1c c1-4n c1-4o c1-4p c1-4q c1-4r c1-b c1-2s c1-c c1-2u c1-d c1-4s c1-e c1-f c1-g x-rt"><p style="margin:0"><span class="x-el x-el-span c1-50 c1-51 c1-b c1-c c1-d c1-e c1-f c1-g">Book an Infrastructure Reivew!</span></p></div></div></div></div></div></div></div></div></section> </div></div></div><div id="14d998db-da72-490c-adb0-62c531b650b7" class="widget widget-about widget-about-about-9"><div data-ux="Widget" role="region" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div> <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-b c1-c c1-q c1-r c1-d c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-z c1-10 c1-11 c1-12 c1-13 c1-b c1-c c1-14 c1-d c1-15 c1-e c1-16 c1-f c1-17 c1-g"><h1 role="heading" aria-level="1" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-promoted-from="2" data-order="0" data-typography="HeadingBeta" class="x-el x-el-h1 c1-1 c1-2 c1-1s c1-1r c1-5a c1-2q c1-2r c1-1c c1-3x c1-5b c1-20 c1-22 c1-36 c1-2s c1-2u c1-5c c1-37 c1-5d c1-38 c1-39 c1-3a"><span data-ux="Element" class="x-el x-el-span c1-21 c1-s c1-4u c1-5e c1-22 c1-36 c1-5f c1-5g c1-k c1-5h c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5o c1-5p c1-n c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-37 c1-38 c1-39 c1-3a">About Us</span></h1><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-5x c1-1f c1-b c1-c c1-1g c1-1h c1-5y c1-1j c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1k c1-1l c1-3w c1-13 c1-1n c1-1o c1-5z c1-1q c1-b c1-c c1-1t c1-1u c1-60 c1-1w c1-d c1-e c1-f c1-g"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-1f c1-61 c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1k c1-1l c1-3w c1-13 c1-1n c1-1o c1-1p c1-1q c1-18 c1-3u c1-3v c1-b c1-c c1-62 c1-63 c1-1t c1-1u c1-1v c1-1w c1-d c1-e c1-f c1-g"><div data-ux="ContentBasic" index="0" id="79e6c843-665d-447b-a36e-15594b1ba8c8" class="x-el x-el-div x-el c1-1 c1-2 c1-18 c1-64 c1-4 c1-65 c1-66 c1-67 c1-68 c1-69 c1-b c1-c c1-6a c1-6b c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><h4 role="heading" aria-level="4" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-typography="HeadingDelta" class="x-el x-el-h4 c1-6c c1-6d c1-1s c1-1r c1-3l c1-2q c1-2r c1-1c c1-1e c1-c c1-b c1-2s c1-2u c1-d c1-e c1-f c1-g">Personalized Installation</h4><div data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-typography="BodyAlpha" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1r c1-6e c1-1c c1-1e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-1k c1-b c1-77 c1-c c1-2u c1-d c1-e c1-f c1-g x-rt"><p style="margin:0"><span>I'm your About section. Click to edit and tell your visitors about how your installation process is tailored to your clients.</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1k c1-1l c1-3w c1-13 c1-1n c1-1o c1-5z c1-1q c1-b c1-c c1-1t c1-1u c1-60 c1-1w c1-d c1-e c1-f c1-g"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-1f c1-61 c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1k c1-1l c1-3w c1-13 c1-1n c1-1o c1-1p c1-1q c1-18 c1-3u c1-3v c1-b c1-c c1-62 c1-63 c1-1t c1-1u c1-1v c1-1w c1-d c1-e c1-f c1-g"><div data-ux="ContentBasic" index="1" id="33bf5a2c-ca4d-43c1-8425-1d5c6359ef82" class="x-el x-el-div x-el c1-1 c1-2 c1-18 c1-64 c1-4 c1-65 c1-66 c1-67 c1-68 c1-69 c1-b c1-c c1-6a c1-6b c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><h4 role="heading" aria-level="4" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-typography="HeadingDelta" class="x-el x-el-h4 c1-6c c1-6d c1-1s c1-1r c1-3l c1-2q c1-2r c1-1c c1-1e c1-c c1-b c1-2s c1-2u c1-d c1-e c1-f c1-g">Experienced Staff</h4><div data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-typography="BodyAlpha" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1r c1-6e c1-1c c1-1e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-1k c1-b c1-77 c1-c c1-2u c1-d c1-e c1-f c1-g x-rt"><p style="margin:0"><span>I'm your About section. Click to edit and tell your visitors about the experience your staff has in telecommunication.</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1k c1-1l c1-3w c1-13 c1-1n c1-1o c1-5z c1-1q c1-b c1-c c1-1t c1-1u c1-60 c1-1w c1-d c1-e c1-f c1-g"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-1f c1-61 c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1k c1-1l c1-3w c1-13 c1-1n c1-1o c1-1p c1-1q c1-18 c1-3u c1-3v c1-b c1-c c1-62 c1-63 c1-1t c1-1u c1-1v c1-1w c1-d c1-e c1-f c1-g"><div data-ux="ContentBasic" index="2" id="16348a9d-8b96-4f5d-8f39-2b2941a8306f" class="x-el x-el-div x-el c1-1 c1-2 c1-18 c1-64 c1-4 c1-65 c1-66 c1-67 c1-68 c1-69 c1-b c1-c c1-6a c1-6b c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><h4 role="heading" aria-level="4" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-typography="HeadingDelta" class="x-el x-el-h4 c1-6c c1-6d c1-1s c1-1r c1-3l c1-2q c1-2r c1-1c c1-1e c1-c c1-b c1-2s c1-2u c1-d c1-e c1-f c1-g">Competitive Pricing</h4><div data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-typography="BodyAlpha" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1r c1-6e c1-1c c1-1e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-1k c1-b c1-77 c1-c c1-2u c1-d c1-e c1-f c1-g x-rt"><p style="margin:0"><span>I'm your About section. Click to edit and tell your visitors about how your pricing compares to your competitors.</span></p></div></div></div></div></div></div></div></section> </div></div></div><div id="2083689e-f86f-40cb-ae9d-8ac3f5cf9003" class="widget widget-about widget-about-about-7"><div data-ux="Widget" role="region" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div> <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-b c1-c c1-q c1-r c1-d c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-z c1-10 c1-11 c1-12 c1-13 c1-b c1-c c1-14 c1-d c1-15 c1-e c1-16 c1-f c1-17 c1-g"><h2 role="heading" aria-level="2" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-typography="HeadingBeta" class="x-el x-el-h2 c1-1 c1-2 c1-1s c1-1r c1-5a c1-2q c1-2r c1-1c c1-3x c1-5b c1-20 c1-22 c1-36 c1-2s c1-2u c1-5c c1-37 c1-5d c1-38 c1-39 c1-3a"><span data-ux="Element" class="x-el x-el-span c1-21 c1-s c1-4u c1-5e c1-22 c1-36 c1-5f c1-5g c1-k c1-5h c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5o c1-5p c1-n c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-37 c1-38 c1-39 c1-3a">Services</span></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-5x c1-1f c1-3u c1-b c1-c c1-1g c1-1h c1-5y c1-1j c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1k c1-1l c1-3w c1-13 c1-1n c1-1o c1-48 c1-1q c1-b c1-c c1-1t c1-1u c1-60 c1-1w c1-d c1-e c1-f c1-g"><div data-ux="ContentCard" index="0" id="03d4ca4b-683b-482b-91d6-2b3e447adc43" class="x-el x-el-div x-el c1-1 c1-2 c1-s c1-18 c1-64 c1-66 c1-67 c1-61 c1-4 c1-65 c1-68 c1-69 c1-b c1-c c1-6a c1-6b c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><h4 role="heading" aria-level="4" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-typography="HeadingDelta" class="x-el x-el-h4 c1-6c c1-6d c1-1s c1-1r c1-3l c1-2q c1-2r c1-1c c1-1e c1-c c1-b c1-2s c1-2u c1-d c1-e c1-f c1-g">Fiber Optics</h4><div data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-typography="BodyAlpha" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1r c1-6e c1-1c c1-1e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-1k c1-b c1-77 c1-c c1-2u c1-d c1-e c1-f c1-g x-rt"><p style="margin:0"><span>I'm your Services section. Click to edit and tell your visitors about your fiber optics option. How much does this service cost? Do you need to schedule a consultation?</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1k c1-1l c1-3w c1-13 c1-1n c1-1o c1-48 c1-1q c1-b c1-c c1-62 c1-63 c1-1t c1-1u c1-60 c1-1w c1-d c1-e c1-f c1-g"><div data-ux="ContentCard" index="1" id="9d7fb38c-48e3-4d68-bafa-a6cf5f722a66" class="x-el x-el-div x-el c1-1 c1-2 c1-s c1-18 c1-64 c1-66 c1-67 c1-61 c1-4 c1-65 c1-68 c1-69 c1-b c1-c c1-6a c1-6b c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><h4 role="heading" aria-level="4" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-typography="HeadingDelta" class="x-el x-el-h4 c1-6c c1-6d c1-1s c1-1r c1-3l c1-2q c1-2r c1-1c c1-1e c1-c c1-b c1-2s c1-2u c1-d c1-e c1-f c1-g">Long-Distance Calls</h4><div data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-typography="BodyAlpha" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1r c1-6e c1-1c c1-1e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-1k c1-b c1-77 c1-c c1-2u c1-d c1-e c1-f c1-g x-rt"><p style="margin:0"><span>I'm your Services section. Click to edit and tell your visitors about your long-distance call option. How much does this service cost? Do you need to schedule a consultation?</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1k c1-1l c1-3w c1-13 c1-1n c1-1o c1-48 c1-1q c1-b c1-c c1-62 c1-63 c1-1t c1-1u c1-60 c1-1w c1-d c1-e c1-f c1-g"><div data-ux="ContentCard" index="2" id="060ced69-6373-4515-8bef-83469575d419" class="x-el x-el-div x-el c1-1 c1-2 c1-s c1-18 c1-64 c1-66 c1-67 c1-61 c1-4 c1-65 c1-68 c1-69 c1-b c1-c c1-6a c1-6b c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><h4 role="heading" aria-level="4" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-typography="HeadingDelta" class="x-el x-el-h4 c1-6c c1-6d c1-1s c1-1r c1-3l c1-2q c1-2r c1-1c c1-1e c1-c c1-b c1-2s c1-2u c1-d c1-e c1-f c1-g">Tech Support</h4><div data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-typography="BodyAlpha" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1r c1-6e c1-1c c1-1e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-1k c1-b c1-77 c1-c c1-2u c1-d c1-e c1-f c1-g x-rt"><p style="margin:0"><span>I'm your Services section. Click to edit and tell your visitors about your tech support. How much does this service cost? Do you need to schedule a consultation?</span></p></div></div></div></div></div></section> </div></div></div><div id="68fc98e5-1358-4ef6-9aaa-fbb0b586d7a7" class="widget widget-contact widget-contact-contact-5"><div data-ux="Widget" role="region" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div> <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-78 c1-b c1-c c1-q c1-r c1-d c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-z c1-10 c1-11 c1-12 c1-13 c1-b c1-c c1-14 c1-d c1-15 c1-e c1-16 c1-f c1-17 c1-g"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-1f c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1k c1-1l c1-3w c1-13 c1-1n c1-1o c1-1p c1-1q c1-b c1-c c1-1t c1-1u c1-1v c1-1w c1-d c1-e c1-f c1-g"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-1f c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1k c1-1l c1-1m c1-13 c1-1n c1-1o c1-1p c1-1q c1-b c1-c c1-1t c1-1u c1-1v c1-1w c1-d c1-e c1-f c1-g"><h2 role="heading" aria-level="2" data-ux="SectionHeading" data-aid="CONTACT_SECTION_TITLE_REND" data-typography="HeadingBeta" class="x-el x-el-h2 c1-1 c1-2 c1-1s c1-1r c1-5a c1-2q c1-2r c1-1c c1-3x c1-5b c1-20 c1-22 c1-36 c1-2s c1-2u c1-5c c1-37 c1-5d c1-38 c1-39 c1-3a"><span data-ux="Element" class="x-el x-el-span c1-21 c1-s c1-4u c1-5e c1-22 c1-36 c1-5f c1-5g c1-k c1-5h c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5o c1-5p c1-n c1-5q c1-5r c1-5s c1-5t c1-5u c1-5v c1-5w c1-37 c1-38 c1-39 c1-3a">Contact Us</span></h2></div></div></div></div><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Grid" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-1f c1-20 c1-b c1-c c1-1g c1-1h c1-1i c1-1j c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1k c1-1l c1-1m c1-13 c1-1n c1-1o c1-1p c1-1q c1-b c1-c c1-79 c1-7a c1-7b c1-1t c1-1u c1-1v c1-1w c1-d c1-1x c1-1y c1-1z c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-3x c1-b c1-c c1-d c1-e c1-f c1-g"><h4 role="heading" aria-level="4" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-typography="HeadingDelta" class="x-el x-el-h4 c1-6c c1-6d c1-1s c1-1r c1-3l c1-2q c1-2r c1-1c c1-59 c1-c c1-b c1-2s c1-2u c1-d c1-e c1-f c1-g">werwofrea</h4></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-7c c1-b c1-c c1-d c1-e c1-f c1-g"><h4 role="heading" aria-level="4" data-ux="ContentHeading" data-aid="CONTACT_HOURS_TITLE_REND" data-typography="HeadingDelta" class="x-el x-el-h4 c1-6c c1-6d c1-1s c1-1r c1-3l c1-2q c1-2r c1-1c c1-59 c1-c c1-b c1-2s c1-2u c1-d c1-e c1-f c1-g">Hours</h4><div data-ux="Block" data-aid="CONTACT_HOURS_REND" class="x-el x-el-div c1-1 c1-2 c1-59 c1-b c1-c c1-d c1-e c1-f c1-g"><div id="bs-5"><table style="border-spacing:0;text-align:left;display:inline-table"><tr data-aid="CONTACT_HOURS_COLLAPSED_REND" style="cursor:pointer"><td style="padding-right:medium"><p data-ux="ContentText" data-aid="CONTACT_HOURS_COLLAPSED_LABEL" data-typography="BodyAlpha" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1r c1-6e c1-1c c1-1e c1-b c1-77 c1-c c1-2u c1-d c1-e c1-f c1-g">Open today</p></td><td><p data-ux="ContentText" data-typography="BodyAlpha" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1r c1-6e c1-1c c1-1e c1-7d c1-7e c1-b c1-77 c1-c c1-2u c1-d c1-e c1-f c1-g"><span rel="" role="button" aria-haspopup="menu" data-ux="Link" data-aid="CONTACT_HOURS_COLLAPSED_HR_LABEL" data-typography="LinkAlpha" class="x-el x-el-span c1-2c c1-2d c1-2e c1-1s c1-1r c1-2f c1-2g c1-b c1-2l c1-c c1-2m c1-2n c1-2o c1-d c1-e c1-f c1-g" data-tccl="ux2.CONTACT.contact5.Content.Default.Link.Default.24917.click,click">09:00 am – 05:00 pm</span></p></td><td><p data-ux="ContentText" data-aid="CONTACT_HOURS_COLLAPSED_ARROW" data-typography="BodyAlpha" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1r c1-6e c1-1c c1-1e c1-b c1-77 c1-c c1-2u c1-d c1-e c1-f c1-g"><span rel="" role="button" aria-haspopup="menu" data-ux="Link" data-typography="LinkAlpha" class="x-el x-el-span c1-2c c1-2d c1-2e c1-1s c1-1r c1-18 c1-2g c1-7f c1-b c1-2l c1-c c1-2m c1-2n c1-2o c1-d c1-e c1-f c1-g" data-tccl="ux2.CONTACT.contact5.Group.Default.Link.Default.24918.click,click"><svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16" data-ux="Icon" class="x-el x-el-svg c1-1 c1-2 c1-4u c1-21 c1-7g c1-7h c1-52 c1-s c1-7i c1-b c1-c c1-d c1-e c1-f c1-g"><path fill-rule="evenodd" d="M19.544 7.236a.773.773 0 0 1-.031 1.06l-7.883 7.743-7.42-7.742a.773.773 0 0 1 0-1.061.699.699 0 0 1 1.017 0l6.433 6.713 6.868-6.745a.698.698 0 0 1 1.016.032"></path></svg></span></p></td></tr></table></div></div><div data-ux="ContentText" data-aid="CONTACT_HOURS_CUST_MSG_REND" data-typography="BodyAlpha" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1r c1-6e c1-1c c1-1e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-b c1-77 c1-c c1-2u c1-d c1-e c1-f c1-g x-rt"><p style="margin:0"><span>Monday - Friday: 9am - 5pm</span></p><p style="margin:0"><span>Saturday - Sunday: Closed</span></p></div></div></div></div></div></div></div></section> </div></div></div><div id="8d3dc8ff-0b08-4113-a292-206f91b1aca3" class="widget widget-footer widget-footer-footer-2"><div data-ux="Widget" role="contentinfo" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div> <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-1n c1-7j c1-b c1-c c1-q c1-r c1-d c1-e c1-f c1-g"><div data-ux="Divider" class="x-el x-el-div c1-1 c1-2 c1-3 c1-7k c1-7l c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-z c1-10 c1-11 c1-12 c1-13 c1-b c1-c c1-14 c1-d c1-15 c1-e c1-16 c1-f c1-17 c1-g"><hr aria-hidden="true" role="separator" data-ux="HR" class="x-el x-el-hr c1-1 c1-2 c1-7m c1-78 c1-4l c1-1c c1-1e c1-4 c1-b c1-c c1-d c1-e c1-f c1-g"/></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-z c1-10 c1-11 c1-12 c1-13 c1-b c1-c c1-14 c1-d c1-15 c1-e c1-16 c1-f c1-17 c1-g"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-2r c1-1e c1-2q c1-3v c1-20 c1-b c1-c c1-d c1-e c1-f c1-g"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-19 c1-7n c1-1l c1-3w c1-13 c1-1n c1-3h c1-1p c1-3g c1-b c1-c c1-d c1-7o c1-7p c1-e c1-f c1-g"><div data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-typography="DetailsAlpha" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1r c1-6e c1-1c c1-1e c1-b c1-7q c1-49 c1-2u c1-4a c1-7r c1-4b c1-4c c1-4d x-rt"><p style="margin:0"><span>Copyright © 2020 werwofrea - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-19 c1-7n c1-1l c1-3w c1-13 c1-1n c1-3h c1-1p c1-3g c1-b c1-c c1-d c1-7o c1-7p c1-e c1-f c1-g"><p data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-typography="DetailsAlpha" class="x-el x-el-p c1-1 c1-2 c1-1s c1-1r c1-6e c1-7s c1-1e c1-b c1-7q c1-49 c1-2u c1-4a c1-7t c1-7u c1-4b c1-4c c1-4d"><span>Powered by GoDaddy <a rel="nofollow noopener" role="link" aria-haspopup="true" data-ux="Link" target="_blank" data-aid="FOOTER_POWERED_BY_RENDERED_LINK" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" data-typography="LinkAlpha" class="x-el x-el-a c1-2c c1-2d c1-2e c1-1s c1-1r c1-2f c1-2g c1-49 c1-7s c1-b c1-2l c1-2m c1-2n c1-2o c1-4a c1-7t c1-7u c1-4b c1-4c c1-4d" data-tccl="ux2.FOOTER.footer2.Layout.Default.Link.Default.24919.click,click">Website Builder</a></span></p></div></div></div></div><div id="bs-6"></div></section> </div></div></div><div id="2ec6fdf9-a837-48fb-a0c3-dc2c35eef769" class="widget widget-messaging widget-messaging-messaging-1"></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.63.13.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/35f725321014392/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/9b757a1e28962547/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1']={"renderMode":"PUBLISH","fonts":["sacramento","default",""],"colors":["#b1daee"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"212a36f1-4f88-46c1-9087-e0fe56aef3a1":{"isFlyoutMenu":false,"active":true,"pageId":"212a36f1-4f88-46c1-9087-e0fe56aef3a1","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"tags":[],"rel":"","type":"page","showInFooter":false}},"theme":"Theme20","paintJob":"CUSTOM"};</script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-1',
          componentName:'DynamicFontScaler',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"text":"werwofrea","containerId":"logo-container-24908","targetId":"logo-text-24909","fontSizes":["xxlarge","xlarge","large"],"style":{"display":"inline-block","maxWidth":"100%"},"widgetId":"3b3887ba-493a-4d68-a771-85d5a5010529","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"3b3887ba-493a-4d68-a771-85d5a5010529","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default","themeOverrides":{}});</script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-2',
          componentName:'DynamicFontScaler',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"font":"primary","text":"Wired for Winning","containerId":"tagline-container-24910","targetId":"dynamic-tagline-24911","fontSizes":["large","medium"],"maxLines":4,"style":{"display":"inline-block","maxWidth":"100%","whiteSpace":"pre-line","marginTop":"xsmall","textAlign":"center"},"widgetId":"3b3887ba-493a-4d68-a771-85d5a5010529","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"3b3887ba-493a-4d68-a771-85d5a5010529","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"primary","group":"Hero","groupType":"Default","themeOverrides":{}});</script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-3',
          componentName:'DynamicFontScaler',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"text":"werwofrea","containerId":"logo-container-24913","targetId":"logo-text-24914","fontSizes":["xxlarge","xlarge","large"],"style":{"display":"inline-block","maxWidth":"100%"},"widgetId":"3b3887ba-493a-4d68-a771-85d5a5010529","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"3b3887ba-493a-4d68-a771-85d5a5010529","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default","themeOverrides":{}});</script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-4',
          componentName:'DynamicFontScaler',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"font":"primary","text":"Wired for Winning","containerId":"tagline-container-24915","targetId":"dynamic-tagline-24916","fontSizes":["small","xsmall"],"maxLines":4,"style":{"display":"inline-block","maxWidth":"100%","whiteSpace":"pre-line","marginTop":"xsmall"},"widgetId":"3b3887ba-493a-4d68-a771-85d5a5010529","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"3b3887ba-493a-4d68-a771-85d5a5010529","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"primary","group":"Hero","groupType":"Default","themeOverrides":{}});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/67b286479caa4f4d/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-5']={"renderMode":"PUBLISH","fonts":["sacramento","default",""],"colors":["#b1daee"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"212a36f1-4f88-46c1-9087-e0fe56aef3a1":{"isFlyoutMenu":false,"active":true,"pageId":"212a36f1-4f88-46c1-9087-e0fe56aef3a1","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"tags":[],"rel":"","type":"page","showInFooter":false}},"theme":"Theme20"};</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/4d04b429-7f60-4f9c-a970-1c84ce86c0ff/gpub/236ef4a8f6205555/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/fe432c2d11d8087f/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/4d04b429-7f60-4f9c-a970-1c84ce86c0ff/gpub/652236565079a3cb/script.js" crossorigin></script>
<script type="text/javascript">document.getElementById('page-24905').addEventListener('click', function() {}, false);</script></body></html>
