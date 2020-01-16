<?php
$GLOBALS['_ta_campaign_key'] = 'b4139e33d506890472044baad2d293a7';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=b4139e33d506890472044baad2d293a7' parameter

require 'bootloader.php';

$campaign_id = '31u2db';

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
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
}

/*
 * Note: if using the "Remain on Safe Page" action for Filtered Visitors, append your safe page's HTML/PHP code after the closing PHP tag below:
 */
?>



<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>beyondempty</title><meta name="author" content="beyondempty"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://beyondempty.appspot.com/"/>
<meta property="og:site_name" content="beyondempty"/>
<meta property="og:title" content="Professional Analysis"/>
<meta property="og:description" content="We have accessible answers for you!"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/100767"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="beyondempty"/>
<meta name="twitter:description" content="Professional Analysis"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/100767"/>
<meta name="twitter:image:alt" content="beyondempty"/>
<meta name="theme-color" content="#3f6180"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/e645c3e6fe995b50/script.js" crossorigin></script>
<script type="text/javascript">"undefined"===typeof _trfq&&(window._trfq=[]);"undefined"==typeof _trfd&&(window._trfd=[]);</script>
<script type="text/javascript">function logTcclEvent(){var t=this.getAttribute("data-tccl");if(window._trfq&&t)try{for(var e=t.split(","),r=e[0],d=e[1],n=e.splice(2),c=[],o=0;o<n.length;o+=2)c.push([n[o],n[o+1]]);window._trfq.push(["cmdLogEvent",d,r,c])}catch(e){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.log",[["error",e.toString()],["data",t]]])}}"undefined"!=typeof window&&"undefined"!=typeof document&&window.addEventListener("DOMContentLoaded",function(){for(var t=document.querySelectorAll("[data-tccl]"),e=0;e<t.length;e++)try{var r=t[e].getAttribute("data-tccl").split(",");t[e].addEventListener(r[1],logTcclEvent)}catch(t){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.add",[["error",t.toString()]]])}});</script>
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
Copyright 2016 The Cabin Project Authors (impallari@gmail.com)

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* vietnamese */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhquylEeQ5JZ-Y.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhruylEeQ5JZ-Y.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhluylEeQ5J.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright (c) 2010-2011 by tyPoland Lukasz Dziedzic (team@latofonts.com) with Reserved Font Name "Lato". Licensed under the SIL Open Font License, Version 1.1.

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 400;
  src: local('Lato Italic'), local('Lato-Italic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHjxsAUi-qNiXg7eU0.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 400;
  src: local('Lato Italic'), local('Lato-Italic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHjxsAXC-qNiXg7Q.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 700;
  src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u_w4BMUTPHjxsI5wq_FQftx9897sxZ.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 700;
  src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u_w4BMUTPHjxsI5wq_Gwftx9897g.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 100;
  src: local('Lato Hairline'), local('Lato-Hairline'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHh30AUi-qNiXg7eU0.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 100;
  src: local('Lato Hairline'), local('Lato-Hairline'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHh30AXC-qNiXg7Q.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  src: local('Lato Light'), local('Lato-Light'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh7USSwaPGQ3q5d0N7w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  src: local('Lato Light'), local('Lato-Light'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh7USSwiPGQ3q5d0.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6uyw4BMUTPHjxAwXiWtFCfQ7A.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6uyw4BMUTPHjx4wXiWtFCc.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh6UVSwaPGQ3q5d0N7w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh6UVSwiPGQ3q5d0.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  src: local('Lato Black'), local('Lato-Black'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh50XSwaPGQ3q5d0N7w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  src: local('Lato Black'), local('Lato-Black'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh50XSwiPGQ3q5d0.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/69768743-e98e-4289-8bc8-cc5f1c0cf8e3/gpub/4ce1a7c86682e5e8/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/69768743-e98e-4289-8bc8-cc5f1c0cf8e3/gpub/5741c72b3ca62c74/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-n{padding-top:32px}}@media (max-width: 767px){.x .c1-o{padding-bottom:32px}}@media (max-width: 767px){.x .c1-19{position:relative}}@media (max-width: 767px){.x .c1-2l{width:100%}}@media (max-width: 767px){.x .c1-4p{max-width:100%}}@media (max-width: 767px){.x .c1-4q{margin-bottom:8px}}@media (max-width: 767px){.x .c1-4r{word-wrap:break-word}}@media (max-width: 767px){.x .c1-4s{overflow-wrap:break-word}}@media (max-width: 767px){.x .c1-66{width:auto !important}}@media (max-width: 767px){.x .c1-6h{margin-bottom:24px}}@media (max-width: 767px){.x .c1-6u > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-6v  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-82{display:flex}}@media (max-width: 767px){.x .c1-83{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/69768743-e98e-4289-8bc8-cc5f1c0cf8e3/gpub/bcbd49f048e23664/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/69768743-e98e-4289-8bc8-cc5f1c0cf8e3/gpub/1bfe659cdc7328b/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-1p{width:1160px}}@media (min-width: 1280px){.x .c1-3a{font-size:22px}}@media (min-width: 1280px){.x .c1-4w{font-size:62px}}@media (min-width: 1280px){.x .c1-57{font-size:44px}}@media (min-width: 1280px){.x .c1-5c{font-size:32px}}@media (min-width: 1280px){.x .c1-7x{font-size:14px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-1q{width:1280px}}@media (min-width: 1536px){.x .c1-3b{font-size:24px}}@media (min-width: 1536px){.x .c1-4x{font-size:70px}}@media (min-width: 1536px){.x .c1-58{font-size:48px}}@media (min-width: 1536px){.x .c1-5d{font-size:36px}}@media (min-width: 1536px){.x .c1-7y{font-size:16px}}</style>
<style type="text/css">.page-inner { background-color: rgb(22, 22, 22); min-height: 100vh; }</style></head>
<body class="x  x-fonts-cabin" context="[object Object]"><div id="layout-69768743-e-98-e-4289-8-bc-8-cc-5-f-1-c-0-cf-8-e-3" class="layout layout-layout layout-layout-layout-17 locale-en-US lang-en"><div data-ux="Page" id="page-8429" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="0ec368a1-859f-4da7-b215-07ada9573ddb" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-i c1-j c1-k c1-l c1-m c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-p c1-b c1-c c1-d c1-q c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" id="header_parallax8432" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-1"></div><div data-ux="HeaderMedia" class="x-el x-el-div c1-1 c1-2 c1-r c1-s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg8433" role="img" data-guac-image="loading" data-ux="Background" data-route="hasMedia:mediaData" data-aid="BACKGROUND_IMAGE_RENDERED" overlay="category" treatment="Fill" data-ht="Fill" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-t c1-u c1-v c1-w c1-x c1-y c1-z c1-10 c1-11 c1-12 c1-13 c1-b c1-c c1-d c1-14 c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-route x-d-aid x-d-ht"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-15 c1-4 c1-b c1-c c1-d c1-16 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-r c1-17 c1-4 c1-18 c1-b c1-c c1-19 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-r c1-1b c1-1c c1-1d c1-18 c1-b c1-c c1-d c1-1e c1-1f c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1h c1-1i c1-1j c1-1k c1-1l c1-1m c1-b c1-c c1-1n c1-d c1-1o c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-y c1-1r c1-1s c1-1t c1-1u c1-1v c1-1w c1-1x c1-1y c1-1z c1-b c1-c c1-20 c1-21 c1-22 c1-23 c1-d c1-24 c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1r c1-s c1-25 c1-26 c1-1k c1-27 c1-28 c1-29 c1-2a c1-y c1-2b c1-2c c1-b c1-c c1-2d c1-2e c1-2f c1-2g c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2h c1-2i c1-2j c1-2k c1-1k c1-c c1-2l c1-2m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="a9cd9ec9-6e5f-4821-92d9-f8d5b3c0d631" title="beyondempty" href="/" class="x-el x-el-a c1-2n c1-2o c1-2p c1-2q c1-2r c1-2s c1-2t c1-2u c1-2v c1-2w c1-2x c1-b c1-2y c1-c c1-2z c1-30 c1-31 c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Fill.Link.Default.8436.click,click"><div id="bs-2"><h3 typography="HeadingBeta" data-ux="LogoHeading" id="logo-container-8437" logoText="beyondempty" class="x-el x-el-h3 c1-2h c1-2i c1-2q c1-2r c1-32 c1-33 c1-34 c1-1u c1-1w c1-1k c1-2k c1-35 c1-36 c1-37 c1-38 c1-39 c1-3a c1-3b x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c1-2h c1-2i c1-2j c1-4 c1-2k c1-35 c1-38 c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-route">beyondempty</span></h3></div></a></div></div></div><div data-ux="Grid" id="n-84308439-navBarId" class="x-el x-el-div c1-1 c1-2 c1-3c c1-1r c1-1s c1-3d c1-1u c1-1v c1-1w c1-1x c1-b c1-c c1-20 c1-21 c1-22 c1-23 c1-d c1-3e c1-3f c1-3g c1-3h c1-3i c1-3j c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1r c1-3k c1-25 c1-3l c1-3m c1-27 c1-28 c1-29 c1-2a c1-y c1-1z c1-1y c1-2b c1-b c1-c c1-2d c1-2e c1-2f c1-2g c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2h c1-2i c1-2j c1-2k c1-1k c1-c c1-2l c1-2m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="a9cd9ec9-6e5f-4821-92d9-f8d5b3c0d631" title="beyondempty" href="/" class="x-el x-el-a c1-2n c1-2o c1-2p c1-2q c1-2r c1-2s c1-2t c1-2u c1-2v c1-2w c1-2x c1-b c1-2y c1-c c1-2z c1-30 c1-31 c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Fill.Link.Default.8440.click,click"><div id="bs-3"><h3 typography="HeadingBeta" data-ux="LogoHeading" id="logo-container-8441" logoText="beyondempty" class="x-el x-el-h3 c1-2h c1-2i c1-2q c1-2r c1-32 c1-33 c1-34 c1-1u c1-1w c1-1k c1-2k c1-35 c1-36 c1-37 c1-38 c1-39 c1-3a c1-3b x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c1-2h c1-2i c1-2j c1-4 c1-2k c1-35 c1-38 c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-route">beyondempty</span></h3></div></a></div></div></div></div></nav></div></div></div><div data-ux="Block" id="header_parallax8442" class="x-el x-el-div c1-1 c1-2 c1-4 c1-s c1-3c c1-3n c1-z c1-1y c1-1u c1-1w c1-27 c1-b c1-c c1-d c1-3o c1-3p c1-3e c1-e c1-f c1-g x-d-ux"><div id="bs-4"></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-33 c1-34 c1-1i c1-1j c1-1k c1-b c1-c c1-1n c1-d c1-1o c1-3e c1-3q c1-3r c1-3s c1-3t c1-3u c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-3v c1-b c1-c c1-3w c1-3x c1-3y c1-3z c1-40 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1h c1-41 c1-42 c1-1k c1-r c1-43 c1-4 c1-b c1-c c1-1n c1-3w c1-3x c1-44 c1-3y c1-3z c1-40 c1-45 c1-46 c1-d c1-1o c1-47 c1-48 c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-2d c1-2f c1-d c1-49 c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-43 c1-4a c1-4b c1-29 c1-b c1-c c1-4c c1-2f c1-4d c1-4e c1-4f c1-4g c1-4h c1-d c1-3t c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-33 c1-34 c1-4i c1-4j c1-1k c1-4k c1-b c1-c c1-1n c1-d c1-1o c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-2h c1-2i c1-2q c1-2r c1-32 c1-33 c1-34 c1-1u c1-1w c1-4l c1-4m c1-4n c1-29 c1-3c c1-2k c1-36 c1-4o c1-37 c1-4p c1-4q c1-4r c1-4s c1-4t c1-2f c1-4u c1-q c1-4v c1-4w c1-4x x-d-ux x-d-aid x-d-route">Professional Analysis</h1><div id="bs-5"><div data-ux="Element" typography="HeadingAlpha" id="tagline-container-8443" class="x-el x-el-div c1-2h c1-2i c1-2q c1-2r c1-32 c1-p c1-2k c1-36 c1-4o c1-37 c1-4u c1-24 c1-4v c1-4w c1-4x x-d-ux"><h1 typography="HeadingAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-2h c1-2i c1-2q c1-2r c1-32 c1-33 c1-34 c1-1u c1-1w c1-4y c1-2j c1-4 c1-4l c1-4m c1-4n c1-29 c1-4o c1-2k c1-36 c1-37 c1-4p c1-4q c1-4r c1-4s c1-4t c1-2f c1-4u c1-4v c1-4w c1-4x x-d-ux x-d-aid x-d-route">Professional Analysis</h1><span data-ux="Element" data-size="xxxlarge" data-scaler-id="scaler-tagline-container-8443" class="x-el x-el-span c1-2h c1-2i c1-4z c1-50 c1-3c c1-51 c1-52 c1-53 c1-4o c1-2k c1-4u c1-4v c1-4w c1-4x x-d-ux x-d-size x-d-scaler-id">Professional Analysis</span><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-8443" class="x-el x-el-span c1-2h c1-2i c1-4z c1-50 c1-3c c1-51 c1-52 c1-53 c1-54 c1-2k c1-55 c1-56 c1-57 c1-58 x-d-ux x-d-size x-d-scaler-id">Professional Analysis</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-8443" class="x-el x-el-span c1-2h c1-2i c1-4z c1-50 c1-3c c1-51 c1-52 c1-53 c1-59 c1-2k c1-5a c1-5b c1-5c c1-5d x-d-ux x-d-size x-d-scaler-id">Professional Analysis</span></div></div></div><div typography="BodyBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-2q c1-2r c1-5e c1-1u c1-1w c1-5f c1-5g c1-5h c1-5i c1-b c1-36 c1-35 c1-5j c1-38 c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>We have accessible answers for you!</span></p></div><div id="bs-6" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#" target="" data-tccl="ux2.header.cta_button.click,click" class="x-el x-el-a c1-5o c1-2 c1-5p c1-5q c1-5r c1-5s c1-5t c1-5u c1-2j c1-2b c1-2p c1-2t c1-2r c1-2q c1-1k c1-4 c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-b c1-62 c1-37 c1-x c1-c c1-63 c1-64 c1-65 c1-66 c1-67 c1-d c1-1e c1-1f c1-68 c1-69 c1-6a c1-6b c1-e c1-6c c1-6d c1-6e c1-f c1-g x-d-ux x-d-aid x-d-tccl">Ask Us</a></div></div></div></div></div></div></div><div data-ux="Block" id="header_parallax8444" class="x-el x-el-div c1-1 c1-2 c1-4 c1-s c1-y c1-3n c1-z c1-1y c1-1u c1-1w c1-27 c1-b c1-c c1-d c1-3o c1-3p c1-24 c1-e c1-f c1-g x-d-ux"><div id="bs-7"></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-33 c1-34 c1-1i c1-1j c1-1k c1-b c1-c c1-1n c1-d c1-1o c1-3e c1-3q c1-3r c1-3s c1-3t c1-3u c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-3v c1-b c1-c c1-3w c1-3x c1-3y c1-3z c1-40 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1h c1-41 c1-42 c1-1k c1-r c1-43 c1-4 c1-b c1-c c1-1n c1-3w c1-3x c1-44 c1-3y c1-3z c1-40 c1-45 c1-46 c1-d c1-1o c1-47 c1-48 c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-2d c1-2f c1-d c1-49 c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-43 c1-4a c1-4b c1-29 c1-b c1-c c1-4c c1-2f c1-4d c1-4e c1-4f c1-4g c1-4h c1-d c1-3t c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-33 c1-34 c1-4i c1-4j c1-1k c1-4k c1-b c1-c c1-1n c1-d c1-1o c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-2h c1-2i c1-2q c1-2r c1-32 c1-33 c1-34 c1-1u c1-1w c1-4l c1-4m c1-4n c1-29 c1-3c c1-2k c1-36 c1-4o c1-37 c1-4p c1-4q c1-4r c1-4s c1-4t c1-2f c1-4u c1-q c1-4v c1-4w c1-4x x-d-ux x-d-aid x-d-route">Professional Analysis</h1><div id="bs-8"><div data-ux="Element" typography="HeadingAlpha" id="tagline-container-8445" class="x-el x-el-div c1-2h c1-2i c1-2q c1-2r c1-32 c1-p c1-2k c1-36 c1-4o c1-37 c1-4u c1-24 c1-4v c1-4w c1-4x x-d-ux"><h1 typography="HeadingAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-2h c1-2i c1-2q c1-2r c1-32 c1-33 c1-34 c1-1u c1-1w c1-4y c1-2j c1-4 c1-4l c1-4m c1-4n c1-29 c1-4o c1-2k c1-36 c1-37 c1-4p c1-4q c1-4r c1-4s c1-4t c1-2f c1-4u c1-4v c1-4w c1-4x x-d-ux x-d-aid x-d-route">Professional Analysis</h1><span data-ux="Element" data-size="xxxlarge" data-scaler-id="scaler-tagline-container-8445" class="x-el x-el-span c1-2h c1-2i c1-4z c1-50 c1-3c c1-51 c1-52 c1-53 c1-4o c1-2k c1-4u c1-4v c1-4w c1-4x x-d-ux x-d-size x-d-scaler-id">Professional Analysis</span><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-8445" class="x-el x-el-span c1-2h c1-2i c1-4z c1-50 c1-3c c1-51 c1-52 c1-53 c1-54 c1-2k c1-55 c1-56 c1-57 c1-58 x-d-ux x-d-size x-d-scaler-id">Professional Analysis</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-8445" class="x-el x-el-span c1-2h c1-2i c1-4z c1-50 c1-3c c1-51 c1-52 c1-53 c1-59 c1-2k c1-5a c1-5b c1-5c c1-5d x-d-ux x-d-size x-d-scaler-id">Professional Analysis</span></div></div></div><div typography="BodyBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-2q c1-2r c1-5e c1-1u c1-1w c1-5f c1-5g c1-5h c1-5i c1-b c1-36 c1-35 c1-5j c1-38 c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>We have accessible answers for you!</span></p></div><div id="bs-9" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#" target="" data-tccl="ux2.header.cta_button.click,click" class="x-el x-el-a c1-5o c1-2 c1-5p c1-5q c1-5r c1-5s c1-5t c1-5u c1-2j c1-2b c1-2p c1-2t c1-2r c1-2q c1-1k c1-4 c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-b c1-62 c1-37 c1-x c1-c c1-63 c1-64 c1-65 c1-66 c1-67 c1-d c1-1e c1-1f c1-68 c1-69 c1-6a c1-6b c1-e c1-6c c1-6d c1-6e c1-f c1-g x-d-ux x-d-aid x-d-tccl">Ask Us</a></div></div></div></div></div></div></div><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/100767/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg8433'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0.25) 0%, rgba(22, 22, 22, 0.25) 100%)"],"shouldMarkVisuallyComplete":true})</script></div></div></div></section> </div></div></div></div><div id="003a1b22-c0cc-4e5a-b106-48a145d13d0d" class="widget widget-about widget-about-about-9"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-i c1-j c1-k c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1h c1-1i c1-1j c1-1k c1-b c1-c c1-1n c1-d c1-1o c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-2h c1-2i c1-2q c1-2r c1-6f c1-33 c1-34 c1-1u c1-6g c1-l c1-43 c1-2k c1-35 c1-36 c1-37 c1-6h c1-38 c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-2h c1-2i c1-2k c1-35 c1-38 c1-39 c1-3a c1-3b x-d-ux">Our Services</span><hr data-ux="SectionHeadingHR" class="x-el x-el-hr c1-2h c1-2i c1-6i c1-6j c1-6k c1-60 c1-1w c1-4 c1-2k c1-35 c1-38 c1-39 c1-3a c1-3b x-d-ux"/></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-y c1-1r c1-1s c1-3d c1-1u c1-1v c1-6l c1-1x c1-b c1-c c1-20 c1-21 c1-6m c1-23 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1r c1-s c1-25 c1-6n c1-1k c1-27 c1-28 c1-6o c1-2a c1-b c1-c c1-2d c1-2e c1-6p c1-2g c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/0" class="x-el x-el-div c1-1 c1-2 c1-y c1-1r c1-1s c1-3d c1-1u c1-1v c1-1w c1-1x c1-11 c1-b c1-c c1-20 c1-21 c1-22 c1-23 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1r c1-s c1-25 c1-6n c1-1k c1-27 c1-28 c1-29 c1-2a c1-y c1-1y c1-1z c1-b c1-c c1-6q c1-6r c1-2d c1-2e c1-2f c1-2g c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="0" class="x-el x-el-div x-el c1-1 c1-2 c1-y c1-z c1-4 c1-6s c1-3n c1-43 c1-6t c1-4b c1-b c1-c c1-6u c1-6v c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-route="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-1 c1-2 c1-2q c1-2r c1-6w c1-33 c1-34 c1-1u c1-1w c1-b c1-36 c1-35 c1-5j c1-38 c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-route x-d-field-route">Personalized Analytics</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-route="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-2q c1-2r c1-5e c1-1u c1-1w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-b c1-7p c1-c c1-5j c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>At our company, we take the raw data from our clients and turn it into a meaningful results. We work closely with our users throughout our process to ensure that the analysis is relevant. We are committed to providing clean, in-depth datasets.</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1r c1-s c1-25 c1-6n c1-1k c1-27 c1-28 c1-6o c1-2a c1-b c1-c c1-2d c1-2e c1-6p c1-2g c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/1" class="x-el x-el-div c1-1 c1-2 c1-y c1-1r c1-1s c1-3d c1-1u c1-1v c1-1w c1-1x c1-11 c1-b c1-c c1-20 c1-21 c1-22 c1-23 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1r c1-s c1-25 c1-6n c1-1k c1-27 c1-28 c1-29 c1-2a c1-y c1-1y c1-1z c1-b c1-c c1-6q c1-6r c1-2d c1-2e c1-2f c1-2g c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="1" class="x-el x-el-div x-el c1-1 c1-2 c1-y c1-z c1-4 c1-6s c1-3n c1-43 c1-6t c1-4b c1-b c1-c c1-6u c1-6v c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-route="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-1 c1-2 c1-2q c1-2r c1-6w c1-33 c1-34 c1-1u c1-1w c1-b c1-36 c1-35 c1-5j c1-38 c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-route x-d-field-route">Rigorous Testing</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-route="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-2q c1-2r c1-5e c1-1u c1-1w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-b c1-7p c1-c c1-5j c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>Once we have finished our initial analysis of our client's data, we perform multiple quality checks. These tests are included in the price of the analysis package. After testing, we deliver the results to our clients. We provide a "typo-free" certification along with our clean data.</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1r c1-s c1-25 c1-6n c1-1k c1-27 c1-28 c1-6o c1-2a c1-b c1-c c1-2d c1-2e c1-6p c1-2g c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/2" class="x-el x-el-div c1-1 c1-2 c1-y c1-1r c1-1s c1-3d c1-1u c1-1v c1-1w c1-1x c1-11 c1-b c1-c c1-20 c1-21 c1-22 c1-23 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1r c1-s c1-25 c1-6n c1-1k c1-27 c1-28 c1-29 c1-2a c1-y c1-1y c1-1z c1-b c1-c c1-6q c1-6r c1-2d c1-2e c1-2f c1-2g c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="2" class="x-el x-el-div x-el c1-1 c1-2 c1-y c1-z c1-4 c1-6s c1-3n c1-43 c1-6t c1-4b c1-b c1-c c1-6u c1-6v c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-route="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-1 c1-2 c1-2q c1-2r c1-6w c1-33 c1-34 c1-1u c1-1w c1-b c1-36 c1-35 c1-5j c1-38 c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-route x-d-field-route">Quality Guaranteed</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-route="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-2q c1-2r c1-5e c1-1u c1-1w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-b c1-7p c1-c c1-5j c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>The world of science and technology can be hard to keep up with. That's why our goal is to provide our clients high-quality visual analytics. No matter the discipline or type of data, we pride ourselves on providing professional results. We guarantee you will be satisfied with our work.</span></p></div></div></div></div></div></div></div></section> </div></div></div><div id="1738ddf0-a168-441d-8ea6-0259fbfcf06e" class="widget widget-footer widget-footer-footer-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-i c1-7q c1-7r c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1h c1-1i c1-1j c1-1k c1-b c1-c c1-1n c1-d c1-1o c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-2b c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-2q c1-2r c1-5e c1-1u c1-7s c1-b c1-7t c1-7u c1-5j c1-7v c1-7w c1-7x c1-7y x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 beyondempty - All Rights Reserved.</span></p></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1h c1-1i c1-1j c1-1k c1-2b c1-7z c1-b c1-c c1-1n c1-d c1-1o c1-e c1-1p c1-f c1-1q c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-80 c1-27 c1-4j c1-29 c1-4i c1-1u c1-34 c1-1w c1-33 c1-81 c1-b c1-c c1-82 c1-83 c1-d c1-e c1-f c1-g x-d-ux"></ul></div><hr data-ux="HR" class="x-el x-el-hr c1-1 c1-2 c1-84 c1-6j c1-6k c1-1u c1-7s c1-85 c1-1g c1-1h c1-j c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"/><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-2q c1-2r c1-5e c1-1u c1-1w c1-b c1-7t c1-7u c1-5j c1-7v c1-7w c1-7x c1-7y x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-2n c1-2o c1-2p c1-2q c1-2r c1-2s c1-2t c1-b c1-2y c1-7u c1-2z c1-30 c1-31 c1-7v c1-7w c1-7x c1-7y x-d-ux" data-tccl="ux2.FOOTER.footer1.Layout.Default.Link.Default.8446.click,click">Website Builder</a></span></p></div></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.49.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/1cfdc19be441bd60/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/70b94c42ef48f212/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE","fonts":["cabin","default",""],"colors":["#3f6180"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"a9cd9ec9-6e5f-4821-92d9-f8d5b3c0d631":{"isFlyoutMenu":false,"active":true,"pageId":"a9cd9ec9-6e5f-4821-92d9-f8d5b3c0d631","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme17"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'Parallax',props:props,context:context,contextKey:'context-bs-1'});
})({"speed":-1.5,"uniqueId":"header_parallax8432","noTransform":true,"widgetId":"0ec368a1-859f-4da7-b215-07ada9573ddb","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0ec368a1-859f-4da7-b215-07ada9573ddb","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Section","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2c17300d98a3b3c6/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"beyondempty"},"fontPackLogoId":null,"widgetId":"0ec368a1-859f-4da7-b215-07ada9573ddb","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0ec368a1-859f-4da7-b215-07ada9573ddb","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Fill"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"beyondempty"},"fontPackLogoId":null,"widgetId":"0ec368a1-859f-4da7-b215-07ada9573ddb","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0ec368a1-859f-4da7-b215-07ada9573ddb","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Fill"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'Parallax',props:props,context:context,contextKey:'context-bs-1'});
})({"isBackground":false,"speed":-1.5,"oversizeSpeed":1.5,"uniqueId":"header_parallax8442","widgetId":"0ec368a1-859f-4da7-b215-07ada9573ddb","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0ec368a1-859f-4da7-b215-07ada9573ddb","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"HeaderMedia","groupType":"Fill"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/9024daa7fc990e3a/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-5',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"style":{"borderBottomWidth":0,"borderBottomStyle":"solid","borderColor":"highContrastOverlay","paddingBottom":0,"@sm":{"borderBottomWidth":0,"paddingBottom":0},"@xs-only":{"maxWidth":"100%","marginBottom":"xsmall","wordWrap":"break-word","overflowWrap":"break-word"}},"typography":"HeadingAlpha","children":"Professional Analysis","tag":"h1","data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"0ec368a1-859f-4da7-b215-07ada9573ddb","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0ec368a1-859f-4da7-b215-07ada9573ddb","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-6',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Ask Us","pageId":"a9cd9ec9-6e5f-4821-92d9-f8d5b3c0d631","linkId":"844d20f8-f664-48e2-bc27-7ae0e5bb6593","widgetId":"","url":"","target":""},"data-aid":"HEADER_CTA_BTN","style":{"marginVertical":"small","display":"inline-block","@md":{"marginBottom":"xsmall"},"@xs-only":{"width":"auto !important"}},"data-tccl":"ux2.header.cta_button.click,click","widgetId":"0ec368a1-859f-4da7-b215-07ada9573ddb","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0ec368a1-859f-4da7-b215-07ada9573ddb","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-7',componentName:'Parallax',props:props,context:context,contextKey:'context-bs-1'});
})({"isBackground":false,"speed":-1.5,"oversizeSpeed":1.5,"uniqueId":"header_parallax8444","widgetId":"0ec368a1-859f-4da7-b215-07ada9573ddb","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0ec368a1-859f-4da7-b215-07ada9573ddb","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"HeaderMedia","groupType":"Fill"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-8',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"style":{"borderBottomWidth":0,"borderBottomStyle":"solid","borderColor":"highContrastOverlay","paddingBottom":0,"@sm":{"borderBottomWidth":0,"paddingBottom":0},"@xs-only":{"maxWidth":"100%","marginBottom":"xsmall","wordWrap":"break-word","overflowWrap":"break-word"}},"typography":"HeadingAlpha","children":"Professional Analysis","tag":"h1","data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"0ec368a1-859f-4da7-b215-07ada9573ddb","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0ec368a1-859f-4da7-b215-07ada9573ddb","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-9',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Ask Us","pageId":"a9cd9ec9-6e5f-4821-92d9-f8d5b3c0d631","linkId":"844d20f8-f664-48e2-bc27-7ae0e5bb6593","widgetId":"","url":"","target":""},"data-aid":"HEADER_CTA_BTN","style":{"marginVertical":"small","display":"inline-block","@md":{"marginBottom":"xsmall"},"@xs-only":{"width":"auto !important"}},"data-tccl":"ux2.header.cta_button.click,click","widgetId":"0ec368a1-859f-4da7-b215-07ada9573ddb","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"0ec368a1-859f-4da7-b215-07ada9573ddb","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript">document.getElementById('page-8429').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"69768743-e98e-4289-8bc8-cc5f1c0cf8e3"}),_trfd.push({"pd":"2020-01-16T15:50:36.948Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script></body></html>
