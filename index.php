<?php
$GLOBALS['_ta_campaign_key'] = '80ced6518dd2db6c4f16601a0fc5484c';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=b4139e33d506890472044baad2d293a7' parameter

require 'bootloader.php';

$campaign_id = 'c9p21b';

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


<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>oneriderft</title><meta name="author" content="oneriderft"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://oneriderft.appspot.com/"/>
<meta property="og:site_name" content="oneriderft"/>
<meta property="og:title" content="Welcome to oneriderft"/>
<meta property="og:description" content="Join in your community!"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/20109"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="oneriderft"/>
<meta name="twitter:description" content="Welcome to oneriderft"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/20109"/>
<meta name="twitter:image:alt" content="oneriderft"/>
<meta name="theme-color" content="#f8fcf9"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
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
Copyright (c) 2011-2012, Jonathan Pinhorn (jonpinhorn.typedesign@gmail.com), with Reserved Font Names "Karla"

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Karla';
  font-style: normal;
  font-weight: 400;
  src: local('Karla'), local('Karla-Regular'), url(https://img1.wsimg.com/gfonts/s/karla/v13/qkBbXvYC6trAT7RbLtyU5rZPoAU.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Karla';
  font-style: normal;
  font-weight: 400;
  src: local('Karla'), local('Karla-Regular'), url(https://img1.wsimg.com/gfonts/s/karla/v13/qkBbXvYC6trAT7RVLtyU5rZP.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Karla';
  font-style: normal;
  font-weight: 700;
  src: local('Karla Bold'), local('Karla-Bold'), url(https://img1.wsimg.com/gfonts/s/karla/v13/qkBWXvYC6trAT7zuC8m3xLtlmgzDCNg.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Karla';
  font-style: normal;
  font-weight: 700;
  src: local('Karla Bold'), local('Karla-Bold'), url(https://img1.wsimg.com/gfonts/s/karla/v13/qkBWXvYC6trAT7zuC8m5xLtlmgzD.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright 2011 The Old Standard Project Authors (amkryukov@gmail.com)

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* cyrillic-ext */
@font-face {
  font-family: 'Old Standard TT';
  font-style: italic;
  font-weight: 400;
  src: local('Old Standard TT Italic'), local('OldStandardTT-Italic'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQsbh3o1vLImiwAVvYawgcf2eVer2q3bHNwZcQHrKU.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Old Standard TT';
  font-style: italic;
  font-weight: 400;
  src: local('Old Standard TT Italic'), local('OldStandardTT-Italic'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQsbh3o1vLImiwAVvYawgcf2eVer2q-bHNwZcQHrKU.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Old Standard TT';
  font-style: italic;
  font-weight: 400;
  src: local('Old Standard TT Italic'), local('OldStandardTT-Italic'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQsbh3o1vLImiwAVvYawgcf2eVer2q1bHNwZcQHrKU.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Old Standard TT';
  font-style: italic;
  font-weight: 400;
  src: local('Old Standard TT Italic'), local('OldStandardTT-Italic'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQsbh3o1vLImiwAVvYawgcf2eVer2q0bHNwZcQHrKU.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Old Standard TT';
  font-style: italic;
  font-weight: 400;
  src: local('Old Standard TT Italic'), local('OldStandardTT-Italic'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQsbh3o1vLImiwAVvYawgcf2eVer2q6bHNwZcQH.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 400;
  src: local('Old Standard TT Regular'), local('OldStandardTT-Regular'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQubh3o1vLImiwAVvYawgcf2eVep1q4ZnRSZ_QG.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 400;
  src: local('Old Standard TT Regular'), local('OldStandardTT-Regular'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQubh3o1vLImiwAVvYawgcf2eVerlq4ZnRSZ_QG.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 400;
  src: local('Old Standard TT Regular'), local('OldStandardTT-Regular'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQubh3o1vLImiwAVvYawgcf2eVepVq4ZnRSZ_QG.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 400;
  src: local('Old Standard TT Regular'), local('OldStandardTT-Regular'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQubh3o1vLImiwAVvYawgcf2eVepFq4ZnRSZ_QG.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 400;
  src: local('Old Standard TT Regular'), local('OldStandardTT-Regular'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQubh3o1vLImiwAVvYawgcf2eVeqlq4ZnRSZw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 700;
  src: local('Old Standard TT Bold'), local('OldStandardTT-Bold'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQrbh3o1vLImiwAVvYawgcf2eVWEX-tRlZfTc4PlJz5.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 700;
  src: local('Old Standard TT Bold'), local('OldStandardTT-Bold'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQrbh3o1vLImiwAVvYawgcf2eVWEX-tT1ZfTc4PlJz5.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 700;
  src: local('Old Standard TT Bold'), local('OldStandardTT-Bold'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQrbh3o1vLImiwAVvYawgcf2eVWEX-tRFZfTc4PlJz5.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 700;
  src: local('Old Standard TT Bold'), local('OldStandardTT-Bold'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQrbh3o1vLImiwAVvYawgcf2eVWEX-tRVZfTc4PlJz5.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 700;
  src: local('Old Standard TT Bold'), local('OldStandardTT-Bold'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQrbh3o1vLImiwAVvYawgcf2eVWEX-tS1ZfTc4PlA.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/6057e16a-7afd-4b05-bbf5-d27fd22c86d5/gpub/4ce1a7c86682e5e8/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/6057e16a-7afd-4b05-bbf5-d27fd22c86d5/gpub/fe118fd35985069/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<link data-glamor="cxs-xs-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/6057e16a-7afd-4b05-bbf5-d27fd22c86d5/gpub/421dd79aabca71bd/styles.css"/>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/6057e16a-7afd-4b05-bbf5-d27fd22c86d5/gpub/6526a6879e759ce0/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/6057e16a-7afd-4b05-bbf5-d27fd22c86d5/gpub/dfc5adc1db0689c8/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-37{font-size:44px}}@media (min-width: 1280px){.x .c1-5x{width:1160px}}@media (min-width: 1280px){.x .c1-6o{font-size:62px}}@media (min-width: 1280px){.x .c1-6z{font-size:32px}}@media (min-width: 1280px){.x .c1-7b{font-size:22px}}@media (min-width: 1280px){.x .c1-a1{font-size:18px}}@media (min-width: 1280px){.x .c1-ae{font-size:14px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-38{font-size:48px}}@media (min-width: 1536px){.x .c1-5y{width:1280px}}@media (min-width: 1536px){.x .c1-6p{font-size:70px}}@media (min-width: 1536px){.x .c1-70{font-size:36px}}@media (min-width: 1536px){.x .c1-7c{font-size:24px}}@media (min-width: 1536px){.x .c1-a2{font-size:20px}}@media (min-width: 1536px){.x .c1-af{font-size:16px}}</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style></head>
<body class="x  x-fonts-karla" context="[object Object]"><div id="layout-6057-e-16-a-7-afd-4-b-05-bbf-5-d-27-fd-22-c-86-d-5" class="layout layout-layout layout-layout-layout-28 locale-en-US lang-en"><div data-ux="Page" id="page-9879" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="eea13c04-2c15-41df-b3ff-3d3d25c4dab9" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-k c1-l c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-o c1-b c1-c c1-d c1-p c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" id="header_parallax9882" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-1"></div></div><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-q c1-r c1-s c1-t c1-u c1-b c1-c c1-d c1-v c1-w c1-e c1-f c1-g x-d-ux"><div data-ux="SectionContainer" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-z c1-10 c1-11 c1-12 c1-13 c1-b c1-c c1-d c1-14 c1-15 c1-16 c1-17 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-1l c1-1m c1-1n c1-1o c1-b c1-c c1-1p c1-1q c1-1r c1-1s c1-d c1-1t c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-1w c1-11 c1-s c1-1x c1-t c1-1y c1-1z c1-1f c1-20 c1-21 c1-b c1-c c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2b c1-2c c1-11 c1-c c1-2d c1-2e c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="28d8f729-fa84-40aa-ab32-39c146c4b422" title="oneriderft" href="/" class="x-el x-el-a c1-2f c1-2g c1-2h c1-2i c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-b c1-2q c1-c c1-2r c1-2s c1-2t c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.9883.click,click"><div id="bs-2"><h3 typography="HeadingEpsilon" fontSizeMap="[object Object]" data-ux="LogoHeading" id="logo-container-9884" logoText="oneriderft" class="x-el x-el-h3 c1-2u c1-2 c1-2i c1-2j c1-2v c1-2w c1-2x c1-1j c1-1l c1-11 c1-20 c1-21 c1-2c c1-2y c1-2z c1-30 c1-31 c1-32 c1-33 c1-17 c1-34 c1-19 c1-35 c1-36 c1-37 c1-38 x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c1-2b c1-4 c1-2c c1-2z c1-32 c1-36 c1-37 c1-38 x-d-ux x-d-aid x-d-route">oneriderft</span></h3></div></a></div></div></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-39 c1-1m c1-b c1-c c1-3a c1-3b c1-1p c1-1q c1-3c c1-1s c1-d c1-16 c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-3d c1-11 c1-s c1-1x c1-3e c1-1y c1-1z c1-b c1-c c1-22 c1-23 c1-24 c1-25 c1-26 c1-3f c1-3g c1-3h c1-3i c1-27 c1-28 c1-3j c1-2a c1-d c1-3k c1-3l c1-1b c1-3m c1-3n c1-3o c1-3p c1-3q c1-e c1-f c1-g x-d-ux"><nav data-ux="Nav" data-aid="HEADER_NAV_RENDERED" class="x-el x-el-nav c1-1 c1-2 c1-11 c1-3r c1-3s c1-3t c1-3u c1-3v c1-3w c1-3x c1-3y c1-3z c1-40 c1-41 c1-42 c1-43 c1-44 c1-45 c1-46 c1-47 c1-48 c1-49 c1-4a c1-4b c1-4c c1-4d c1-4e c1-4f c1-4g c1-4h c1-4i c1-4j c1-4k c1-4l c1-4m c1-4n c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" id="n-98809887-navId-1" class="x-el x-el-div c1-1 c1-2 c1-q c1-1f c1-s c1-4u c1-t c1-4v c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4w c1-2w c1-4x c1-4y c1-q c1-4z c1-2b c1-b c1-c c1-50 c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-3"><script>var n=document.querySelector('[data-aid="HEADER_NAV_RENDERED"]');n.offsetHeight>0&&n.offsetWidth>0&&(Number(window.vctElements)||(window.vctElements=0),window.vctElements++);</script></div></div></div></nav></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-3d c1-11 c1-s c1-1x c1-3e c1-1y c1-1z c1-1n c1-b c1-c c1-22 c1-23 c1-24 c1-25 c1-26 c1-3f c1-3g c1-51 c1-27 c1-28 c1-3j c1-2a c1-d c1-52 c1-35 c1-34 c1-1b c1-3m c1-3n c1-3o c1-3p c1-3q c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2b c1-2c c1-11 c1-3s c1-3t c1-3u c1-3v c1-3w c1-3x c1-3y c1-3z c1-40 c1-41 c1-42 c1-43 c1-44 c1-45 c1-46 c1-47 c1-48 c1-49 c1-4a c1-4b c1-4c c1-4d c1-4e c1-4f c1-4g c1-4h c1-4i c1-4j c1-4k c1-4l c1-4m c1-4n c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t c1-c c1-2d c1-2e c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="28d8f729-fa84-40aa-ab32-39c146c4b422" title="oneriderft" href="/" class="x-el x-el-a c1-2f c1-2g c1-2h c1-2i c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-b c1-2q c1-c c1-2r c1-2s c1-2t c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.9890.click,click"><div id="bs-4"><h3 typography="HeadingEpsilon" fontSizeMap="[object Object]" data-ux="LogoHeading" id="logo-container-9891" logoText="oneriderft" class="x-el x-el-h3 c1-2u c1-2 c1-2i c1-2j c1-2v c1-2w c1-2x c1-1j c1-1l c1-11 c1-20 c1-21 c1-2c c1-2y c1-2z c1-30 c1-31 c1-32 c1-33 c1-17 c1-34 c1-19 c1-35 c1-36 c1-37 c1-38 x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c1-2b c1-4 c1-2c c1-2z c1-32 c1-36 c1-37 c1-38 x-d-ux x-d-aid x-d-route">oneriderft</span></h3></div></a></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-3d c1-11 c1-s c1-1x c1-3e c1-1y c1-1z c1-b c1-c c1-22 c1-23 c1-24 c1-25 c1-26 c1-3f c1-3g c1-3h c1-3i c1-27 c1-28 c1-3j c1-2a c1-d c1-3k c1-53 c1-1b c1-3m c1-3n c1-3o c1-3p c1-3q c1-e c1-f c1-g x-d-ux"><nav data-ux="Nav" data-aid="HEADER_NAV_RENDERED" class="x-el x-el-nav c1-1 c1-2 c1-11 c1-3r c1-3s c1-3t c1-3u c1-3v c1-3w c1-3x c1-3y c1-3z c1-40 c1-41 c1-42 c1-43 c1-44 c1-45 c1-46 c1-47 c1-48 c1-49 c1-4a c1-4b c1-4c c1-4d c1-4e c1-4f c1-4g c1-4h c1-4i c1-4j c1-4k c1-4l c1-4m c1-4n c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" id="n-98809888-navId-2" class="x-el x-el-div c1-1 c1-2 c1-q c1-1f c1-s c1-4u c1-t c1-4v c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4w c1-2w c1-4x c1-4y c1-q c1-4z c1-2b c1-b c1-c c1-50 c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-5"><script>var n=document.querySelector('[data-aid="HEADER_NAV_RENDERED"]');n.offsetHeight>0&&n.offsetWidth>0&&(Number(window.vctElements)||(window.vctElements=0),window.vctElements++);</script><a rel="" typography="NavAlpha" data-ux="NavLinkDropdown" data-toggle-ignore="true" id="9893" data-aid="NAV_MORE" ignoreCloseAttr="data-ignore-close" data-edit-interactive="true" href="#" class="x-el x-el-a c1-2u c1-2 c1-2h c1-2i c1-2j c1-1f c1-2l c1-1o c1-q c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-2c c1-2y c1-c c1-30 c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-d c1-e c1-f c1-g x-d-ux x-d-toggle-ignore x-d-aid x-d-edit-interactive" data-tccl="ux2.HEADER.header9.Nav.Default.Link.Dropdown.9894.click,click"><div style="pointer-events:none;display:flex;align-items:center" data-aid="NAV_DROPDOWN"><span style="margin-right:4px">More</span><svg viewBox="0 0 24 24" fill="currentColor" width="16px" height="16px" data-ux="Icon" class="x-el x-el-svg c1-5o c1-2b c1-5p c1-5q c1-5r c1-q c1-2c c1-c c1-5l c1-5m c1-d c1-e c1-f c1-g x-d-ux"><path fill-rule="evenodd" d="M19.544 7.236a.773.773 0 0 1-.031 1.06l-7.883 7.743-7.42-7.742a.773.773 0 0 1 0-1.061.699.699 0 0 1 1.017 0l6.433 6.713 6.868-6.745a.698.698 0 0 1 1.016.032"></path></svg></div></a></div></div></div></nav></div></div></div></nav><div data-ux="SectionContainer" class="x-el x-el-div c1-1 c1-2 c1-2w c1-y c1-5s c1-5t c1-11 c1-b c1-c c1-5u c1-d c1-16 c1-5v c1-5w c1-17 c1-18 c1-19 c1-1a c1-e c1-5x c1-f c1-5y c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-5z c1-1j c1-2x c1-1l c1-2w c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-60 c1-11 c1-s c1-5t c1-t c1-5s c1-1z c1-1f c1-1n c1-1o c1-61 c1-62 c1-b c1-c c1-22 c1-23 c1-24 c1-25 c1-26 c1-d c1-63 c1-64 c1-65 c1-66 c1-v c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1f c1-62 c1-67 c1-4 c1-q c1-68 c1-69 c1-6a c1-b c1-c c1-d c1-66 c1-16 c1-6b c1-6c c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-68 c1-b c1-c c1-d c1-6d c1-6e c1-6f c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-2w c1-2x c1-4v c1-4u c1-11 c1-6g c1-b c1-c c1-5u c1-d c1-6h c1-e c1-5x c1-f c1-5y c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-6i c1-2 c1-2i c1-2j c1-2v c1-x c1-y c1-1j c1-6j c1-q c1-o c1-2c c1-2y c1-6k c1-30 c1-6l c1-6m c1-p c1-6n c1-6o c1-6p x-d-ux x-d-aid x-d-route">Welcome to oneriderft</h1><div id="bs-6"><div data-ux="Element" id="tagline-container-9895" class="x-el x-el-div c1-1 c1-2 c1-2i c1-2j c1-2v c1-6q c1-b c1-c c1-d c1-1t c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-6i c1-2 c1-2i c1-2j c1-2v c1-x c1-y c1-1j c1-6j c1-6r c1-q c1-2b c1-4 c1-c c1-2c c1-2y c1-30 c1-6l c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Welcome to oneriderft</h1><span data-ux="Element" data-size="xxxlarge" data-scaler-id="scaler-tagline-container-9895" class="x-el x-el-span c1-6s c1-6t c1-o c1-4z c1-6u c1-6v c1-6k c1-2c c1-6m c1-6n c1-6o c1-6p x-d-ux x-d-size x-d-scaler-id">Welcome to oneriderft</span><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-9895" class="x-el x-el-span c1-6s c1-6t c1-o c1-4z c1-6u c1-6v c1-2z c1-2c c1-32 c1-36 c1-37 c1-38 x-d-ux x-d-size x-d-scaler-id">Welcome to oneriderft</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-9895" class="x-el x-el-span c1-6s c1-6t c1-o c1-4z c1-6u c1-6v c1-6w c1-2c c1-6x c1-6y c1-6z c1-70 x-d-ux x-d-size x-d-scaler-id">Welcome to oneriderft</span></div></div></div><div typography="HeadingDelta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-2u c1-2 c1-2i c1-2j c1-71 c1-1j c1-72 c1-2b c1-11 c1-73 c1-74 c1-75 c1-76 c1-b c1-2y c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-7h c1-7i c1-b c1-77 c1-79 c1-7a c1-7b c1-7c x-d-ux">Join in your community!</span></p></div><div id="bs-7" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#" target="" data-tccl="ux2.header.cta_button.click,click" class="x-el x-el-a c1-2u c1-2 c1-7j c1-7k c1-7l c1-7m c1-u c1-7n c1-2b c1-20 c1-2h c1-2l c1-2j c1-2i c1-11 c1-4 c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-2c c1-2y c1-30 c1-7y c1-c c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-d c1-86 c1-87 c1-88 c1-89 c1-e c1-f c1-g x-d-ux x-d-aid x-d-tccl">Contact Us</a></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-8a c1-11 c1-s c1-4u c1-t c1-4v c1-1z c1-1f c1-1n c1-1o c1-8b c1-b c1-c c1-22 c1-23 c1-24 c1-25 c1-26 c1-d c1-8c c1-8d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="hasMedia:mediaData" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1o c1-q c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-route"><img src="//img1.wsimg.com/isteam/stock/20109/:/" alt="image1" data-ux="HeaderMediaImage" data-aid="BACKGROUND_IMAGE_RENDERED" data-ht="Inset" class="x-el x-el-img c1-1 c1-2 c1-11 c1-8e c1-x c1-y c1-8f c1-1l c1-5r c1-8g c1-8h c1-8i c1-b c1-c c1-d c1-3p c1-3q c1-8j c1-8k c1-6d c1-e c1-f c1-g x-d-ux x-d-aid x-d-ht"/></div></div></div></div></section> </div></div></div></div><div id="443de3f7-3331-48c7-8c6e-95563339672e" class="widget widget-about widget-about-about-9"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="SectionContainer" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-5s c1-5t c1-11 c1-b c1-c c1-5u c1-d c1-6h c1-8l c1-8m c1-e c1-5x c1-f c1-5y c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-2u c1-2 c1-2i c1-2j c1-8n c1-2w c1-2x c1-1j c1-8o c1-k c1-20 c1-2c c1-77 c1-2y c1-30 c1-79 c1-8p c1-7a c1-7b c1-7c x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">About Us</span></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-5z c1-1j c1-1k c1-39 c1-1m c1-b c1-c c1-1p c1-1q c1-3c c1-1s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-8a c1-11 c1-s c1-1x c1-8q c1-1y c1-b c1-c c1-27 c1-28 c1-3j c1-2a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/0" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-5z c1-1j c1-1k c1-1l c1-1m c1-1n c1-b c1-c c1-1p c1-1q c1-1r c1-1s c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-8a c1-11 c1-s c1-1x c1-t c1-1y c1-1f c1-1n c1-1o c1-b c1-c c1-8r c1-8s c1-27 c1-28 c1-29 c1-2a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="0" class="x-el x-el-div x-el c1-1 c1-2 c1-1f c1-62 c1-4 c1-8t c1-1o c1-20 c1-8u c1-8v c1-b c1-c c1-8w c1-8x c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-route="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-2u c1-2 c1-2i c1-2j c1-8y c1-2w c1-2x c1-1j c1-1l c1-b c1-2y c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c x-d-ux x-d-aid x-d-route x-d-field-route">How Can We Help?</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-route="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-71 c1-1j c1-1l c1-8z c1-90 c1-91 c1-92 c1-93 c1-94 c1-95 c1-96 c1-97 c1-98 c1-99 c1-9a c1-9b c1-9c c1-9d c1-9e c1-9f c1-9g c1-9h c1-9i c1-9j c1-9k c1-9l c1-9m c1-9n c1-9o c1-9p c1-9q c1-9r c1-b c1-2y c1-c c1-78 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-7h c1-7i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">Our center is here for you. We work hard to be a resource for our community. Have ideas about how we could do that better? Join us!</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-8a c1-11 c1-s c1-1x c1-8q c1-1y c1-b c1-c c1-27 c1-28 c1-3j c1-2a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/1" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-5z c1-1j c1-1k c1-1l c1-1m c1-1n c1-b c1-c c1-1p c1-1q c1-1r c1-1s c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-8a c1-11 c1-s c1-1x c1-t c1-1y c1-1f c1-1n c1-1o c1-b c1-c c1-8r c1-8s c1-27 c1-28 c1-29 c1-2a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="1" class="x-el x-el-div x-el c1-1 c1-2 c1-1f c1-62 c1-4 c1-8t c1-1o c1-20 c1-8u c1-8v c1-b c1-c c1-8w c1-8x c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-route="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-2u c1-2 c1-2i c1-2j c1-8y c1-2w c1-2x c1-1j c1-1l c1-b c1-2y c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c x-d-ux x-d-aid x-d-route x-d-field-route">Get Involved!</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-route="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-71 c1-1j c1-1l c1-8z c1-90 c1-91 c1-92 c1-93 c1-94 c1-95 c1-96 c1-97 c1-98 c1-99 c1-9a c1-9b c1-9c c1-9d c1-9e c1-9f c1-9g c1-9h c1-9i c1-9j c1-9k c1-9l c1-9m c1-9n c1-9o c1-9p c1-9q c1-9r c1-b c1-2y c1-c c1-78 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-7h c1-7i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">We are always looking for volunteers to help us make our vision a reality. We'll help you find a way to volunteer that best suits you.&nbsp;</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-8a c1-11 c1-s c1-1x c1-8q c1-1y c1-b c1-c c1-27 c1-28 c1-3j c1-2a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/2" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-5z c1-1j c1-1k c1-1l c1-1m c1-1n c1-b c1-c c1-1p c1-1q c1-1r c1-1s c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-8a c1-11 c1-s c1-1x c1-t c1-1y c1-1f c1-1n c1-1o c1-b c1-c c1-8r c1-8s c1-27 c1-28 c1-29 c1-2a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="2" class="x-el x-el-div x-el c1-1 c1-2 c1-1f c1-62 c1-4 c1-8t c1-1o c1-20 c1-8u c1-8v c1-b c1-c c1-8w c1-8x c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-route="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-2u c1-2 c1-2i c1-2j c1-8y c1-2w c1-2x c1-1j c1-1l c1-b c1-2y c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c x-d-ux x-d-aid x-d-route x-d-field-route">Thank You</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-route="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-71 c1-1j c1-1l c1-8z c1-90 c1-91 c1-92 c1-93 c1-94 c1-95 c1-96 c1-97 c1-98 c1-99 c1-9a c1-9b c1-9c c1-9d c1-9e c1-9f c1-9g c1-9h c1-9i c1-9j c1-9k c1-9l c1-9m c1-9n c1-9o c1-9p c1-9q c1-9r c1-b c1-2y c1-c c1-78 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-7h c1-7i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">We couldn't accomplish our goals without the help of supporters like you.&nbsp;Thank you for your time and donations that makes this possible!</span></p></div></div></div></div></div></div></div></section> </div></div></div><div id="37110edd-88d3-4d34-8e08-797582199775" class="widget widget-payment widget-payment-payment-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="SectionContainer" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-5s c1-5t c1-11 c1-b c1-c c1-5u c1-d c1-6h c1-8l c1-8m c1-e c1-5x c1-f c1-5y c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-5z c1-1j c1-1k c1-1l c1-1m c1-1n c1-b c1-c c1-1p c1-1q c1-1r c1-1s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-8a c1-11 c1-s c1-1x c1-t c1-1y c1-b c1-c c1-27 c1-28 c1-29 c1-2a c1-d c1-9s c1-9t c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-field-id="productImage" data-field-route="/productImage" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><img src="//img1.wsimg.com/isteam/stock/20109/:/rs=w:600,cg:true,m" srcSet="//img1.wsimg.com/isteam/stock/20109/:/rs=w:600,cg:true,m,
//img1.wsimg.com/isteam/stock/20109/:/rs=w:900,cg:true,m 1.5x,
//img1.wsimg.com/isteam/stock/20109/:/rs=w:1200,cg:true,m 2x,
//img1.wsimg.com/isteam/stock/20109/:/rs=w:1800,cg:true,m 3x" alt="image2" data-ux="Image" data-aid="PAYMENT_IMAGE_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-11 c1-8e c1-x c1-y c1-1j c1-1l c1-5r c1-6q c1-9u c1-b c1-c c1-d c1-19 c1-e c1-f c1-g x-d-ux x-d-aid"/></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1u c1-1v c1-8a c1-11 c1-s c1-1x c1-t c1-1y c1-20 c1-9v c1-b c1-c c1-27 c1-28 c1-29 c1-2a c1-d c1-9s c1-9t c1-17 c1-9w c1-e c1-f c1-g x-d-ux"><h3 typography="HeadingGamma" data-ux="HeadingMiddle" data-aid="PAYMENT_ITEM_NAME_RENDERED" data-route="itemName" class="x-el x-el-h3 c1-2u c1-2 c1-2i c1-2j c1-8y c1-2w c1-2x c1-1j c1-1l c1-b c1-2y c1-6w c1-78 c1-6x c1-6y c1-6z c1-70 x-d-ux x-d-aid x-d-route">Donate Now</h3><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-9x c1-72 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div typography="BodyBeta" data-ux="PriceMajor" data-aid="PAYMENT_PRICE_RENDERED" class="x-el x-el-div c1-1 c1-2 c1-2i c1-2j c1-71 c1-1j c1-1l c1-2b c1-b c1-2y c1-9y c1-78 c1-9z c1-a0 c1-a1 c1-a2 x-d-ux x-d-aid">$20.00</div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2b c1-a3 c1-3e c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><form data-ux="Form" action="https://www.paypal.com/cgi-bin/webscr" method="post" class="x-el x-el-form c1-1 c1-2 c1-1l c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><input type="hidden" name="edit_selector" data-aid="EDIT_PANEL_EDIT_PAYMENT_ICON"/><input type="hidden" name="business" value="jirihok493@qmail2.net"/><input type="hidden" name="cmd" value="_xclick"/><input type="hidden" name="item_name" value="Donate Now"/><input type="hidden" name="item_number"/><input type="hidden" name="amount" value="20.00" data-aid="PAYMENT_HIDDEN_AMOUNT"/><input type="hidden" name="shipping" value="0.00"/><input type="hidden" name="currency_code" value="USD" data-aid="PAYMENT_HIDDEN_CURRENCY"/><input type="hidden" name="rm" value="0"/><input type="hidden" name="return" value="http://oneriderft.godaddysites.com/"/><input type="hidden" name="cancel_return" value="http://oneriderft.godaddysites.com/"/><input type="hidden" name="cbt" value="Return to oneriderft"/><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2b c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button typography="ButtonAlpha" data-ux="Button" data-field-id="buyNowButtonLabel" data-field-route="/settings" name="submit" data-aid="PAYMENT_PAYPALBUTTON_RENDERED" class="x-el x-el-button c1-2u c1-2 c1-7j c1-7k c1-7l c1-7m c1-u c1-7n c1-1f c1-20 c1-2h c1-2l c1-2j c1-2i c1-11 c1-4 c1-7o c1-7p c1-7q c1-7r c1-7s c1-1o c1-a4 c1-7t c1-7u c1-7v c1-7w c1-2c c1-2y c1-30 c1-7y c1-c c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-d c1-86 c1-87 c1-88 c1-89 c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route x-d-aid" data-tccl="ux2.PAYMENT.payment1.Form.Default.Button.Default.9896.click,click"><img src="https://www.paypalobjects.com/webstatic/icon/pp258.png" alt="image3" data-ux="Image" data-aid="PAYMENT_PAYPALBUTTON_IMAGE_RENDERED" class="x-el x-el-img c1-11 c1-a5 c1-x c1-a6 c1-1j c1-1l c1-5r c1-a7 c1-2c c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/>Donate Now</button></div></form><img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppmcvdam.png" alt="Pay with PayPal or a debit/credit card" data-ux="Image" data-aid="PAYMENT_CREDIT_CARD_BADGES_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-11 c1-a8 c1-x c1-y c1-7x c1-1l c1-5r c1-a7 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/></div><div typography="BodyAlpha" data-ux="Text" data-aid="PAYMENT_DESCRIPTION_RENDERED" data-route="buyNowDescription" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-71 c1-1j c1-1l c1-b c1-2y c1-c c1-78 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>We are dedicated to improving the lives of those in our community. Your contribution today helps us make a difference.</span></p></div></div></div></div></section> </div></div></div><div id="814b4be4-c186-497b-9a5f-807bb9546016" class="widget widget-footer widget-footer-footer-3"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-12 c1-13 c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="SectionContainer" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-5s c1-5t c1-11 c1-b c1-c c1-5u c1-d c1-6h c1-8l c1-8m c1-a9 c1-e c1-5x c1-f c1-5y c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-5z c1-1j c1-2x c1-1l c1-2w c1-1o c1-20 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-aa c1-1v c1-8a c1-11 c1-s c1-4u c1-t c1-4v c1-b c1-c c1-d c1-3o c1-33 c1-e c1-f c1-g x-d-ux"><div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-71 c1-1j c1-1l c1-b c1-2y c1-ab c1-78 c1-ac c1-9w c1-ad c1-ae c1-af x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 oneriderft - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1g c1-aa c1-1v c1-8a c1-11 c1-s c1-4u c1-t c1-4v c1-b c1-c c1-d c1-3o c1-33 c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-71 c1-9v c1-1l c1-b c1-2y c1-ab c1-78 c1-ac c1-ag c1-17 c1-ad c1-ae c1-af x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-2f c1-2g c1-2h c1-2i c1-2j c1-2k c1-2l c1-9v c1-b c1-2q c1-ab c1-2r c1-2s c1-2t c1-ac c1-ag c1-17 c1-ad c1-ae c1-af x-d-ux" data-tccl="ux2.FOOTER.footer3.Layout.Default.Link.Default.9897.click,click">Website Builder</a></span></p></div></div></div></div><div data-ux="SectionContainer" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-5s c1-5t c1-11 c1-20 c1-9v c1-b c1-c c1-5u c1-d c1-6h c1-8l c1-8m c1-a9 c1-e c1-5x c1-f c1-5y c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-ah c1-ai c1-s c1-4u c1-t c1-4v c1-1j c1-2x c1-1l c1-2w c1-aj c1-b c1-c c1-ak c1-al c1-d c1-e c1-f c1-g x-d-ux"></ul></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.53.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/7316878dc79b492a/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/70b94c42ef48f212/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE","fonts":["karla","default",""],"colors":["#f8fcf9"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"28d8f729-fa84-40aa-ab32-39c146c4b422":{"isFlyoutMenu":false,"active":true,"pageId":"28d8f729-fa84-40aa-ab32-39c146c4b422","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme28"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'Parallax',props:props,context:context,contextKey:'context-bs-1'});
})({"speed":-2,"uniqueId":"header_parallax9882","widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Section","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2c17300d98a3b3c6/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"oneriderft"},"fontPackLogoId":null,"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/1aff2d600074f107/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'NavOverflow',props:props,context:context,contextKey:'context-bs-1'});
})({"style":{"marginHorizontal":"-6px","marginVertical":"-6px","paddingHorizontal":"6px","paddingVertical":"6px"},"activeStyle":{"marginHorizontal":"-6px","marginVertical":"-6px","paddingHorizontal":"6px","paddingVertical":"6px"},"label":"More","parentId":"n-98809887-navId-1","toggleId":"9889-moreId","hideDropdown":true,"inlineUtilitiesMenu":false,"navigation":[],"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Nav","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"oneriderft"},"fontPackLogoId":null,"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-5',componentName:'NavOverflow',props:props,context:context,contextKey:'context-bs-1'});
})({"style":{"marginHorizontal":"-6px","marginVertical":"-6px","paddingHorizontal":"6px","paddingVertical":"6px"},"activeStyle":{"marginHorizontal":"-6px","marginVertical":"-6px","paddingHorizontal":"6px","paddingVertical":"6px"},"label":"More","parentId":"n-98809888-navId-2","splitNavId":"n-98809887-navId-1","toggleId":"9892-moreId","inlineUtilitiesMenu":false,"navigation":[],"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Nav","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/9024daa7fc990e3a/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-6',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"h1","children":"Welcome to oneriderft","style":{},"data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-7',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Contact Us","pageId":"28d8f729-fa84-40aa-ab32-39c146c4b422","linkId":"58f38c49-bf3f-4082-8a12-c6150c11c1df","widgetId":"","url":"","target":""},"data-aid":"HEADER_CTA_BTN","style":{"marginTop":"xsmall"},"data-tccl":"ux2.header.cta_button.click,click","widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"eea13c04-2c15-41df-b3ff-3d3d25c4dab9","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript">document.getElementById('page-9879').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"6057e16a-7afd-4b05-bbf5-d27fd22c86d5"}),_trfd.push({"pd":"2020-01-19T13:43:31.391Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script></body></html>
