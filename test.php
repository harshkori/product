<?php 

    session_start();


?>
<!DOCTYPE html>

<html lang="en">



<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="theme-color" content="#33b5e5">
    <link rel="manifest" href="/manifest.json">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

<style>
  .h2{
	text-align: center;
  font-family: cursive;
  font-size: 50px;
  color: red;
  text-align: center;
  margin-left:43%;
  background-color: transparent;
}
  *{

    background-color: wheat;
  }
  #main-section{
    margin:auto;
    margin-top: -220px;
  }
</style>
    
      <title>Webzlabz product</title>
    

    <link rel='dns-prefetch' href='//mdbcdn.b-cdn.net' /><script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
<script type="text/javascript">var ajax_url = 'https://mdbootstrap.com/wp-load.php';</script><script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
<script type="text/javascript">var ajax_url = 'https://mdbootstrap.com/wp-load.php';</script><script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
<script type="text/javascript">var ajax_url = 'https://mdbootstrap.com/wp-load.php';</script><meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

<!-- Google Tag Manager for WordPress by gtm4wp.com -->
<script data-cfasync="false" data-pagespeed-no-defer>//<![CDATA[
	var gtm4wp_datalayer_name = "dataLayer";
	var dataLayer = dataLayer || [];
	var gtm4wp_use_sku_instead        = 0;
	var gtm4wp_id_prefix              = '';
	var gtm4wp_remarketing            = false;
	var gtm4wp_eec                    = 1;
	var gtm4wp_classicec              = 1;
	var gtm4wp_currency               = 'EUR';
	var gtm4wp_product_per_impression = 0;
	var gtm4wp_needs_shipping_address = false;
	var gtm4wp_business_vertical      = 'retail';
	var gtm4wp_business_vertical_id   = 'id';
//]]>
</script>
<!-- End Google Tag Manager for WordPress by gtm4wp.com -->
	<!-- This site is optimized with the Yoast SEO plugin v16.9 - https://yoast.com/wordpress/plugins/seo/ -->
	<meta name="description" content="Product Details components dedicated to building eCommerce projects. Built with the newest Bootstrap 4 and Material Design 2.0. Many examples and practical tutorials." />
	<link rel="canonical" href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/design-blocks/product-details/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="eCommerce Product Details - Bootstrap 4 &amp; Material Design 2.0. Examples &amp; Tutorial" />
	<meta property="og:description" content="Product Details components dedicated to building eCommerce projects. Built with the newest Bootstrap 4 and Material Design 2.0. Many examples and practical tutorials." />
	<meta property="og:url" content="https://mdbootstrap.com/docs/b4/jquery/ecommerce/design-blocks/product-details/" />
	<meta property="og:site_name" content="Material Design for Bootstrap" />
	<meta property="article:publisher" content="https://www.facebook.com/mdbootstrap" />
	<meta property="article:modified_time" content="2020-04-17T13:41:00+00:00" />
	<meta property="og:image" content="https://mdbcdn.b-cdn.net/wp-content/uploads/2020/12/mdb5-pro.jpg" />
	<meta property="og:image:width" content="1000" />
	<meta property="og:image:height" content="504" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="eCommerce Product Details - Bootstrap 4 &amp; Material Design 2.0. Examples &amp; Tutorial" />
	<meta name="twitter:description" content="Product Details components dedicated to building eCommerce projects. Built with the newest Bootstrap 4 and Material Design 2.0. Many examples and practical tutorials." />
	<meta name="twitter:site" content="@MDBootstrap" />
	<!-- / Yoast SEO plugin. -->


<link rel='dns-prefetch' href='//s.w.org' />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/mdbootstrap.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='dashicons-css'  href='https://mdbcdn.b-cdn.net/wp-includes/css/dashicons.min.css?ver=5.8' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='https://mdbcdn.b-cdn.net/wp-includes/css/admin-bar.min.css?ver=5.8' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css'  href='https://mdbcdn.b-cdn.net/wp-includes/css/dist/block-library/style.min.css?ver=5.8' type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-vendors-style-css'  href='https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=5.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-css'  href='https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=5.5.1' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='wsl-widget-css'  href='https://mdbcdn.b-cdn.net/wp-content/plugins/wordpress-social-login/assets/css/style.css?ver=5.8' type='text/css' media='all' />
<link rel='stylesheet' id='ecommerce.css-css'  href='https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/css/compiled-ecommerce-4.18.0.min.css?ver=4.18.0' type='text/css' media='all' />
<script type='text/javascript' id='mdb-search.js-js-extra'>
/* <![CDATA[ */
var mdw_search_object = {"ajaxurl":"https:\/\/mdbootstrap.com\/wp-admin\/admin-ajax.php","search_tree":{"112670":{"description":"400+ ecommerce components, 50+ sections, 20+ pages and mdb pro included. mdb ecommerce is the best tool available for ecommerce projects.","title":"md bootstrap ecommerce ui kit - material design 2.0","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112670","wptitle":"MDB eCommerce"},"112706":{"description":"learn how to set up and start working with mdb ecommerce in 1minute.","title":"mdb ecommerce download & quick start","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112706","wptitle":"MDB eCommerce download & quick start"},"112738":{"description":"homepage dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce homepage - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112738","wptitle":"Homepage"},"112742":{"description":"shop page dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce shop page - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112742","wptitle":"Shop Page"},"112744":{"description":"product page dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce product page - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112744","wptitle":"Product Page"},"112746":{"description":"cart page dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce cart page - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112746","wptitle":"Cart Page"},"112748":{"description":"blog homepage dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce blog homepage - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112748","wptitle":"Blog Homepage"},"112750":{"description":"wishlist page dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce wishlist page - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112750","wptitle":"Wishlist Page"},"112752":{"description":"login \/ register page dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce login \/ register page - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112752","wptitle":"Login \/ Register Page"},"112755":{"description":"contact page dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce contact page - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112755","wptitle":"Contact Page"},"112757":{"description":"about us page dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce about us page - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112757","wptitle":"About Us Page"},"112759":{"description":"faq page dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce faq page - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112759","wptitle":"FAQ Page"},"112761":{"description":"terms of use page dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce terms of use page - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112761","wptitle":"Terms Of Use Page"},"112763":{"description":"track my order page dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce track my order page - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112763","wptitle":"Track My Order Page"},"112766":{"description":"404 page dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce 404 page - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112766","wptitle":"404 Page"},"112796":{"description":"navbars dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce navbar - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112796","wptitle":"Navbar"},"112798":{"description":"headers dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce headers - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112798","wptitle":"Headers"},"112800":{"description":"grid system dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce grid system - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112800","wptitle":"Grid System"},"112802":{"description":"footers dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce footer - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112802","wptitle":"Footer"},"112806":{"description":"icons dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce icons - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112806","wptitle":"Icons"},"112808":{"description":"typography dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce typography - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112808","wptitle":"Typography"},"112812":{"description":"buttons dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce buttons - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112812","wptitle":"Buttons"},"112814":{"description":"input fields dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce input fields - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112814","wptitle":"Input Fields"},"112816":{"description":"badges dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce badges - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112816","wptitle":"Badges"},"112818":{"description":"rating dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce rating - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112818","wptitle":"Rating"},"112820":{"description":"cards dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce cards - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112820","wptitle":"Cards"},"112875":{"description":"product lists dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce product lists - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112875","wptitle":"Product Lists"},"112877":{"description":"product details components dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce product details - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112877","wptitle":"Product Details"},"112879":{"description":"filters dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce filters - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112879","wptitle":"Filters"},"112881":{"description":"sorting dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce sorting - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112881","wptitle":"Sorting"},"112885":{"description":"search dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce search - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112885","wptitle":"Search"},"112887":{"description":"forms dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce forms - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112887","wptitle":"Forms Templates"},"112889":{"description":"shopping cart dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce shopping cart - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112889","wptitle":"Shopping Cart"},"112891":{"description":"features dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce features - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112891","wptitle":"Features"},"112893":{"description":"carousels dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce carousels - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112893","wptitle":"Carousels"},"112897":{"description":"testimonials dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce testimonials - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112897","wptitle":"Testimonials"},"112899":{"description":"pop-ups dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce pop-ups - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112899","wptitle":"Modals \/ Pop-ups"},"112933":{"description":"sidebar dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce sidebar - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112933","wptitle":"Sidebar"},"112938":{"description":"gallery dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce gallery - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112938","wptitle":"Gallery"},"112952":{"description":"blog post dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce blog post - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112952","wptitle":"Blog Post"},"112956":{"description":"modals dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce modal - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112956","wptitle":"Modal Elements"},"112960":{"description":"blog homepage components dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce blog homepage components - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112960","wptitle":"Blog Homepage Components"},"112964":{"description":"blog post components dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce blog post components - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=112964","wptitle":"Blog Post Components"},"113130":{"description":"checkbox dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce checkbox - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=113130","wptitle":"Checkbox"},"113132":{"description":"date picker dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce date picker - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=113132","wptitle":"Date Picker"},"113135":{"description":"file input dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce file input - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=113135","wptitle":"File Input"},"113137":{"description":"select dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce select - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=113137","wptitle":"Select"},"113139":{"description":"range dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce range - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=113139","wptitle":"Slider \/ Range"},"113141":{"description":"switch dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce switch - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=113141","wptitle":"Switch"},"113150":{"description":"time picker dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce time picker - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=113150","wptitle":"Time Picker"},"113165":{"description":"form validation dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce form validation - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=113165","wptitle":"Form Validation"},"113179":{"description":"radio buttons dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce radio buttons - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=113179","wptitle":"Radio Buttons"},"113237":{"description":"cookies plugin dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce cookies - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=113237","wptitle":"Cookies Plugin"},"113239":{"description":"chat dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce chat - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=113239","wptitle":"Chat"},"115835":{"description":"layout compositions dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce layout compositions - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=115835","wptitle":"Layout Compositions"},"115847":{"description":"display utilities dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce display - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=115847","wptitle":"Display"},"115852":{"description":"animations dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce animations - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=115852","wptitle":"Animations"},"115868":{"description":"colors dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce colors - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=115868","wptitle":"Colors"},"115871":{"description":"flags dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce flags - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=115871","wptitle":"Flags"},"115881":{"description":"dropdowns dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce dropdowns - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=115881","wptitle":"Dropdowns"},"115884":{"description":"spinners dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce spinners - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=115884","wptitle":"Spinners"},"115886":{"description":"list group dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce list group - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=115886","wptitle":"List Group"},"115889":{"description":"pagination dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce pagination - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=115889","wptitle":"Pagination"},"115891":{"description":"pills dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce pills - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=115891","wptitle":"Pills"},"115893":{"description":"tabs dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce tabs - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=115893","wptitle":"Tabs"},"115898":{"description":"tooltips dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce tooltips - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=115898","wptitle":"Tooltips"},"115901":{"description":"tables dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce tables - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=115901","wptitle":"Tables"},"115921":{"description":"shadows dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce shadows - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=115921","wptitle":"Shadows"},"116028":{"description":"flexbox utilities dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce flexbox - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=116028","wptitle":"Flexbox"},"116030":{"description":"embeds utilities dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce embeds - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=116030","wptitle":"Embeds"},"116032":{"description":"horizontal alignment utilities dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce horizontal alignment - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=116032","wptitle":"Horizontal Alignment"},"116034":{"description":"position utilities dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce position - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=116034","wptitle":"Position"},"116036":{"description":"sizing utilities dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce sizing- bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=116036","wptitle":"Sizing"},"116038":{"description":"spacing utilities dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce spacing - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=116038","wptitle":"Spacing"},"116040":{"description":"vertical alignment utilities dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce vertical alignment - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=116040","wptitle":"Vertical Alignment"},"116242":{"description":"stretched link utilities dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce stretched link - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=116242","wptitle":"Stretched Link"},"116249":{"description":"media queries dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce media queries - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=116249","wptitle":"Media Queries"},"116992":{"description":"checkout page dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce checkout page - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=116992","wptitle":"Checkout Page"},"118119":{"description":"wishlist dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce wishlist - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=118119","wptitle":"Wishlist"},"118122":{"description":"checkout dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce checkout - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=118122","wptitle":"Checkout"},"118385":{"description":"input group dedicated to building ecommerce projects. built with the newest bootstrap 4 and material design 2.0. many examples and practical tutorials.","title":"ecommerce input group - bootstrap 4 & material design 2.0. examples & tutorial","link":"https:\/\/mdbootstrap.com\/\/en\/?page_id=118385","wptitle":"Input Group"}}};
/* ]]> */
</script>
<script type='text/javascript' id='tutorial-share-counts-js-extra'>
/* <![CDATA[ */
var shareCountsData = {"oldShareCounts":""};
/* ]]> */
</script>

<script type='text/javascript'>
/* <![CDATA[ */
var xlwcty = {"ajax_url":"https:\/\/mdbootstrap.com\/wp-admin\/admin-ajax.php","version":"2.14.2","wc_version":"5.6.0"};/* ]]> */
</script>
<script type='text/javascript' src='https://mdbootstrap.com/wp-admin/load-scripts.php?c=gzip&amp;load%5Bchunk_0%5D=jquery-core,jquery-migrate&amp;ver=5.8'></script>
<script type='text/javascript' src='https://mdbcdn.b-cdn.net/wp-content/plugins/duracelltomi-google-tag-manager/js/gtm4wp-woocommerce-classic.js?ver=1.13.1' id='gtm4wp-woocommerce-classic-js'></script>
<script type='text/javascript' src='https://mdbcdn.b-cdn.net/wp-content/plugins/duracelltomi-google-tag-manager/js/gtm4wp-woocommerce-enhanced.js?ver=1.13.1' id='gtm4wp-woocommerce-enhanced-js'></script>
<script type='text/javascript' src='https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/js/mdb-search.js?ver=4.20.0-update.1' id='mdb-search.js-js'></script>
<script type='text/javascript' src='https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/js/tutorial-share-counts.js?ver=4.20.0-update.4' id='tutorial-share-counts-js'></script>
<link rel="https://api.w.org/" href="https://mdbootstrap.com/wp-json/" /><link rel="alternate" type="application/json" href="https://mdbootstrap.com/wp-json/wp/v2/pages/112877" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://mdbootstrap.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://mdbcdn.b-cdn.net/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.8" />
<meta name="generator" content="WooCommerce 5.6.0" />
<link rel='shortlink' href='https://mdbootstrap.com/?p=112877' />
<link rel="alternate" type="application/json+oembed" href="https://mdbootstrap.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmdbootstrap.com%2Fdocs%2Fb4%2Fjquery%2Fecommerce%2Fdesign-blocks%2Fproduct-details%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://mdbootstrap.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmdbootstrap.com%2Fdocs%2Fb4%2Fjquery%2Fecommerce%2Fdesign-blocks%2Fproduct-details%2F&#038;format=xml" />

<!-- Google Tag Manager for WordPress by gtm4wp.com -->
<script data-cfasync="false" data-pagespeed-no-defer>//<![CDATA[
	var dataLayer_content = {"customerTotalOrders":0,"customerTotalOrderValue":"0.00","customerFirstName":"","customerLastName":"","customerBillingFirstName":"","customerBillingLastName":"","customerBillingCompany":"","customerBillingAddress1":"","customerBillingAddress2":"","customerBillingCity":"","customerBillingPostcode":"","customerBillingCountry":"","customerBillingEmail":"","customerBillingPhone":"","customerShippingFirstName":"","customerShippingLastName":"","customerShippingCompany":"","customerShippingAddress1":"","customerShippingAddress2":"","customerShippingCity":"","customerShippingPostcode":"","customerShippingCountry":""};
	dataLayer.push( dataLayer_content );//]]>
</script>
<script data-cfasync="false">//<![CDATA[
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.'+'js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W7MBMN');//]]>
</script>
<!-- End Google Tag Manager -->
<!-- End Google Tag Manager for WordPress by gtm4wp.com -->	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
<script>
        var woocs_is_mobile = 0;
        var woocs_special_ajax_mode = 0;
        var woocs_drop_down_view = "ddslick";
        var woocs_current_currency = {"name":"EUR","rate":1,"symbol":"&euro;","position":"left_space","is_etalon":0,"hide_cents":1,"hide_on_front":0,"rate_plus":"","decimals":0,"separators":"0","description":"European Euro","flag":"https:\/\/mdbootstrap.com\/wp-content\/plugins\/woocommerce-currency-switcher\/img\/no_flag.png"};
        var woocs_default_currency = {"name":"USD","rate":1,"symbol":"&#36;","position":"left","is_etalon":1,"hide_cents":1,"hide_on_front":0,"rate_plus":"","decimals":0,"separators":"0","description":"USA dollar","flag":"https:\/\/mdbootstrap.com\/wp-content\/plugins\/woocommerce-currency-switcher\/img\/no_flag.png"};
        var woocs_redraw_cart = 1;
        var woocs_array_of_get = '{}';
        
        woocs_array_no_cents = '["JPY","TWD"]';

        var woocs_ajaxurl = "https://mdbootstrap.com/wp-admin/admin-ajax.php";
        var woocs_lang_loading = "loading";
        var woocs_shop_is_cached =1;
        </script>    <script> var currency = '€'; </script>
    <meta name="p:domain_verify" content="ba4bb1f26dcf05eadc4ea92722eca381"/>


<!-- Ahref verification -->
<meta name="ahrefs-site-verification" content="cd945a30a32beb9f20f22626c5f801f2063a726c6fd9af1db55ce27eafaa1e45">

</head>

<body class="fixed-sn skin-light mdb-skin-custom" data-spy="scroll" data-target="#scrollspy" data-offset="15">

<header>
  
<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav  mdb-sidenav fixed">
  <ul class="custom-scrollbar list-unstyled" style="max-height:100vh; padding-bottom:90px; position:relative;">
          <!-- Logo -->
      <li class="logo-wrapper waves-effect">
        <a class="d-flex justify-content-center align-items-center" href="/"><img id="MDB-logo" src="https://mdbcdn.b-cdn.net/wp-content/uploads/2018/06/logo-mdb-jquery-small.png" alt="MDB Logo"></a>
      </li>
      <!--Search Form-->
      <li>
        <form class="search-form" onkeypress="return event.keyCode != 13;" role="search" method="GET" autocomplete="off">
          <div class="form-group md-form mt-0 mb-1 d-block waves-light waves-effect">
            <input type="text" class="form-control w-100" name="mdw_serach" placeholder="Search" id="mdb_main_search">
            <label for="mdb_main_search" class="sr-only">Search</label>
          </div>
          <div class="dropdown-wrapper"></div>
        </form>
      </li>
      <!--/.Search Form-->
        <!-- Side navigation links -->
    <li>
      <ul id="side-menu" class="collapsible collapsible-accordion"><li id="menu-item-115456" class="menu-item menu-item-type-post_type menu-item-object-product  menu-item-115456"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-115456"  href="https://mdbootstrap.com/products/jquery-ecommerce-ui-kit/"><i class="far fa-gem"></i>Buy MDB eCommerce</a></li>
<li id="menu-item-112711" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-112711"><a class="collapsible-header d-flex align-items-center arrow-r "><i class="fas fa-download"></i>Getting Started<i class="fa fa-angle-down rotate-icon"></i></a>
 <div class="collapsible-body" > <ul class="sub-menu">
	<li id="menu-item-112871" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor  menu-item-112871"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112871"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/">About</a></li>
	<li id="menu-item-112869" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112869"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112869"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/getting-started/download-quick-start/">Download &#038; quick start</a></li>
	<li id="menu-item-119028" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-119028"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-119028"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/getting-started/install-via-npm/">Install via NPM</a></li>
	<li id="menu-item-118068" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-118068"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-118068"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/getting-started/changelog/">Changelog</a></li>
	<li id="menu-item-117016" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-117016"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-117016"  href="https://mdbootstrap.com/previews/ecommerce-demo/index.html">Demo page</a></li>
</ul></div>
</li>
<li id="menu-item-112712" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  menu-item-112712"><a class="collapsible-header d-flex align-items-center arrow-r "><i class="fas  fa-th-large"></i>Layout<i class="fa fa-angle-down rotate-icon"></i></a>
 <div class="collapsible-body" > <ul class="sub-menu">
	<li id="menu-item-115840" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-115840"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-115840"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/layout/compositions/">Compositions</a></li>
	<li id="menu-item-112866" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112866"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112866"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/layout/headers/">Headers</a></li>
	<li id="menu-item-112865" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112865"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112865"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/layout/navbar/">Navbar</a></li>
	<li id="menu-item-112867" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112867"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112867"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/layout/grid/">Grid</a></li>
	<li id="menu-item-112868" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112868"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112868"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/layout/footer/">Footer</a></li>
	<li id="menu-item-116251" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-116251"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-116251"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/layout/media-queries/">Media queries</a></li>
</ul></div>
</li>
<li id="menu-item-116049" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-116049"><a class="collapsible-header d-flex align-items-center arrow-r "><i class="fas  fa-object-ungroup"></i>Utilities<i class="fa fa-angle-down rotate-icon"></i></a>
 <div class="collapsible-body" > <ul class="sub-menu">
	<li id="menu-item-116050" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-116050"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-116050"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/utilities/display/">Display</a></li>
	<li id="menu-item-116047" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-116047"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-116047"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/utilities/embeds/">Embeds</a></li>
	<li id="menu-item-116048" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-116048"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-116048"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/utilities/flexbox/">Flexbox</a></li>
	<li id="menu-item-116046" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-116046"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-116046"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/utilities/horizontal-align/">Horizontal alignment</a></li>
	<li id="menu-item-116042" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-116042"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-116042"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/utilities/vertical-align/">Vertical alignment</a></li>
	<li id="menu-item-116045" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-116045"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-116045"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/utilities/position/">Position</a></li>
	<li id="menu-item-116044" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-116044"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-116044"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/utilities/sizing/">Sizing</a></li>
	<li id="menu-item-116043" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-116043"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-116043"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/utilities/spacing/">Spacing</a></li>
	<li id="menu-item-116244" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-116244"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-116244"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/utilities/stretched-link/">Stretched link</a></li>
</ul></div>
</li>
<li id="menu-item-115917" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-115917"><a class="collapsible-header d-flex align-items-center arrow-r "><i class="fas fa-indent"></i>Content &#038; CSS<i class="fa fa-angle-down rotate-icon"></i></a>
 <div class="collapsible-body" > <ul class="sub-menu">
	<li id="menu-item-115916" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-115916"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-115916"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/content/animations/">Animations</a></li>
	<li id="menu-item-115915" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-115915"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-115915"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/content/colors/">Colors</a></li>
	<li id="menu-item-115914" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-115914"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-115914"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/content/flags/">Flags</a></li>
	<li id="menu-item-112835" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112835"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112835"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/content/icons/">Icons</a></li>
	<li id="menu-item-115923" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-115923"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-115923"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/content/shadows/">Shadows</a></li>
	<li id="menu-item-115903" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-115903"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-115903"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/content/tables/">Tables</a></li>
	<li id="menu-item-112834" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112834"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112834"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/content/typography/">Typography</a></li>
</ul></div>
</li>
<li id="menu-item-112827" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-112827"><a class="collapsible-header d-flex align-items-center arrow-r "><i class="fas fa-cubes"></i>Components<i class="fa fa-angle-down rotate-icon"></i></a>
 <div class="collapsible-body" > <ul class="sub-menu">
	<li id="menu-item-112830" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112830"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112830"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/components/badges/">Badges</a></li>
	<li id="menu-item-112832" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112832"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112832"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/components/buttons/">Buttons</a></li>
	<li id="menu-item-112828" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112828"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112828"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/components/cards/">Cards</a></li>
	<li id="menu-item-115911" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-115911"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-115911"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/components/dropdowns/">Dropdowns</a></li>
	<li id="menu-item-115909" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-115909"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-115909"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/components/list-group/">List group</a></li>
	<li id="menu-item-115910" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-115910"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-115910"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/components/spinners/">Spinners</a></li>
	<li id="menu-item-112958" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112958"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112958"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/components/modal-elements/">Modal elements</a></li>
	<li id="menu-item-115908" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-115908"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-115908"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/components/pagination/">Pagination</a></li>
	<li id="menu-item-115907" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-115907"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-115907"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/components/pills/">Pills</a></li>
	<li id="menu-item-112829" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112829"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112829"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/components/rating/">Rating</a></li>
	<li id="menu-item-115906" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-115906"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-115906"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/components/tabs/">Tabs</a></li>
	<li id="menu-item-115904" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-115904"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-115904"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/components/tooltips/">Tooltips</a></li>
</ul></div>
</li>
<li id="menu-item-113039" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-113039"><a class="collapsible-header d-flex align-items-center arrow-r "><i class="fas fa-edit"></i>Forms<i class="fa fa-angle-down rotate-icon"></i></a>
 <div class="collapsible-body" > <ul class="sub-menu">
	<li id="menu-item-112910" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112910"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112910"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/forms/templates/">Templates</a></li>
	<li id="menu-item-112831" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112831"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112831"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/forms/input-fields/">Input fields</a></li>
	<li id="menu-item-113197" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-113197"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-113197"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/forms/checkbox/">Checkbox</a></li>
	<li id="menu-item-113189" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-113189"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-113189"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/forms/radio-buttons/">Radio buttons</a></li>
	<li id="menu-item-113194" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-113194"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-113194"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/forms/select/">Select</a></li>
	<li id="menu-item-113192" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-113192"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-113192"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/forms/switch/">Switch</a></li>
	<li id="menu-item-113193" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-113193"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-113193"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/forms/slider-range/">Slider / range</a></li>
	<li id="menu-item-113195" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-113195"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-113195"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/forms/file-input/">File input</a></li>
	<li id="menu-item-118497" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-118497"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-118497"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/forms/input-group/">Input group</a></li>
	<li id="menu-item-113196" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-113196"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-113196"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/forms/date-picker/">Date picker</a></li>
	<li id="menu-item-113191" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-113191"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-113191"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/forms/time-picker/">Time picker</a></li>
	<li id="menu-item-112911" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112911"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112911"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/forms/search/">Search</a></li>
	<li id="menu-item-113190" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-113190"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-113190"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/forms/validation/">Validation</a></li>
</ul></div>
</li>
<li id="menu-item-112736" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-menu-ancestor current-menu-parent current-page-parent current_page_parent current_page_ancestor menu-item-has-children  menu-item-112736"><a class="collapsible-header d-flex align-items-center arrow-r active"><i class="fas fa-th"></i>Design Blocks<i class="fa fa-angle-down rotate-icon"></i></a>
 <div class="collapsible-body"  style="display: block;"> <ul class="sub-menu">
	<li id="menu-item-112915" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112915"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112915"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/design-blocks/product-lists/">Product lists</a></li>
	<li id="menu-item-112914" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-112877 current_page_item  menu-item-112914"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112914"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/design-blocks/product-details/">Product details</a></li>
	<li id="menu-item-118148" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-118148"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-118148"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/design-blocks/wishlist/">Wishlist</a></li>
	<li id="menu-item-112935" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112935"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112935"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/design-blocks/sidebar/">Sidebar</a></li>
	<li id="menu-item-112941" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112941"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112941"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/design-blocks/gallery/">Gallery</a></li>
	<li id="menu-item-112913" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112913"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112913"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/design-blocks/filters/">Filters</a></li>
	<li id="menu-item-112912" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112912"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112912"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/design-blocks/sorting/">Sorting</a></li>
	<li id="menu-item-112909" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112909"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112909"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/design-blocks/shopping-cart/">Shopping cart</a></li>
	<li id="menu-item-118147" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-118147"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-118147"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/design-blocks/ecommerce-checkout/">Checkout</a></li>
	<li id="menu-item-112904" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112904"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112904"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/design-blocks/modals-popups/">Modals / pop-ups</a></li>
	<li id="menu-item-112908" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112908"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112908"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/design-blocks/features/">Features</a></li>
	<li id="menu-item-112907" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112907"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112907"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/design-blocks/carousels/">Carousels</a></li>
	<li id="menu-item-112905" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112905"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112905"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/design-blocks/testimonials/">Testimonials</a></li>
	<li id="menu-item-112963" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112963"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112963"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/design-blocks/blog-homepage/">Blog homepage</a></li>
	<li id="menu-item-112966" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112966"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112966"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/design-blocks/blog-post/">Blog post</a></li>
</ul></div>
</li>
<li id="menu-item-112836" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-112836"><a class="collapsible-header d-flex align-items-center arrow-r "><i class="fas fa-image"></i>Pages<i class="fa fa-angle-down rotate-icon"></i></a>
 <div class="collapsible-body" > <ul class="sub-menu">
	<li id="menu-item-112844" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112844"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112844"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/pages/homepage/">Homepage</a></li>
	<li id="menu-item-112848" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112848"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112848"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/pages/shop/">Shop</a></li>
	<li id="menu-item-112847" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112847"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112847"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/pages/product/">Product</a></li>
	<li id="menu-item-112841" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112841"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112841"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/pages/shopping-cart/">Cart</a></li>
	<li id="menu-item-116996" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-116996"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-116996"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/pages/p-checkout/">Checkout</a></li>
	<li id="menu-item-112845" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112845"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112845"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/pages/login-register/">Login / Register</a></li>
	<li id="menu-item-112850" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112850"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112850"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/pages/wishlist/">Wishlist</a></li>
	<li id="menu-item-112849" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112849"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112849"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/pages/track-my-order/">Track my Order</a></li>
	<li id="menu-item-112838" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112838"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112838"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/pages/terms-of-use/">Terms of Use</a></li>
	<li id="menu-item-112839" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112839"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112839"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/pages/about-us/">About Us</a></li>
	<li id="menu-item-112842" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112842"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112842"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/pages/contact/">Contact</a></li>
	<li id="menu-item-112840" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112840"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112840"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/pages/blog-homepage/">Blog homepage</a></li>
	<li id="menu-item-112954" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112954"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112954"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/pages/blog-post/">Blog post</a></li>
	<li id="menu-item-112843" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112843"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112843"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/pages/faq/">FAQ</a></li>
	<li id="menu-item-112837" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-112837"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-112837"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/pages/page-404/">404</a></li>
</ul></div>
</li>
<li id="menu-item-113243" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-113243"><a class="collapsible-header d-flex align-items-center arrow-r "><i class="fas fa-plus-square"></i>Plugins &#038; addons<i class="fa fa-angle-down rotate-icon"></i></a>
 <div class="collapsible-body" > <ul class="sub-menu">
	<li id="menu-item-113242" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-113242"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-113242"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/plugins/cookies/">Cookies</a></li>
	<li id="menu-item-113241" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-113241"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-113241"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/plugins/chat/">Chat</a></li>
</ul></div>
</li>
<li id="menu-item-116955" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-116955"><a class="collapsible-header d-flex align-items-center arrow-r "><i class="fas fa-puzzle-piece"></i>Integrations<i class="fa fa-angle-down rotate-icon"></i></a>
 <div class="collapsible-body" > <ul class="sub-menu">
	<li id="menu-item-116954" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-116954"><a class="collapsible-header d-flex align-items-center" id="link-menu-item-116954"  href="https://mdbootstrap.com/docs/b4/jquery/ecommerce/integrations/wordpress/">WordPress</a></li>
</ul></div>
</li>
</ul>    </li>
    <!-- /. Side navigation links -->
  </ul>
  <div class="sidenav-bg mask-strong"></div>
</div>
<!--/. Sidebar navigation -->
<!--/.SideNav-->

<div id="dpl-auth-modal"></div>

<!-- Navbar -->
<!-- Navbar -->
</header>

      <style>
        .main-tabs-docs .nav-mtd {
          white-space: nowrap;
          overflow-x: auto;
          position: relative;
        }

        @media (min-width: 62rem) {
          .main-tabs-docs .nav-mtd {
            overflow-x: hidden;
          }
        }

        .main-tabs-docs .nav-mtd li a {
          display: block;
          padding: 20px 24px;
          font-size: 13px;
          text-transform: uppercase;
          color: rgba(255, 255, 255, 0.8);
          text-align: center;
          -webkit-border-radius: 0;
          border-radius: 0;
          font-weight: 500;
          border-bottom: 3px solid #33b5e5;
        }

        .main-tabs-docs .nav-mtd li a.active {
          border-bottom: 3px solid;
          color: #fff;
        }

        @media (min-width: 62em) {
          .main-tabs-docs .nav-mtd li:first-child {
            margin-left: 56px;
          }
        }

        .documentation .primary-heading {
          font-size: 2.7rem;
          font-weight: 500;
        }

        .documentation .secondary-heading {
          font-size: 1.5rem;
          font-weight: 500;
          color: #444343;
          overflow: hidden;
          padding-bottom: .3rem;
          margin-bottom: .7rem;
        }

        .documentation .section-heading {
          font-size: 2rem;
          font-weight: 600;
          margin-bottom: 1.4rem;
        }

        .documentation .docs-pills {
          margin-top: 1.4rem;
        }

        .documentation .section-preview {
          border: 1px solid #e0e0e0;
          padding: 15px;
        }

        @media only screen and (max-width: 991px) {

          .sticky,
          .sticky2,
          .sticky3,
          .sticky-placeholder {
            display: none;
          }
        }

        .documentation .docs-pills .btn-copy-code {
          margin-top: 6px;
        }

        @media (max-width: 768px) {
          .documentation .docs-pills .export-to-snippet {
            display: none;
          }

          .documentation .docs-pills .btn-copy-code {
            right: 0 !important;
          }
        }

        @media (max-width: 576px) {
          .documentation .docs-pills .btn-copy-code {
            display: none;
          }
        }
      </style>
<br>
<br>
      <main>

        <div class="container-fluid mt-5" id="docsEcommerceOverview">

          <!--Grid row-->
          <div class="row">

            <!--Grid column: Content-->
            <div class="col-lg-10 col-md-12">
              <!--Edit & rate-->
              <div class="d-flex justify-content-end">
              </div>
              <!--/Edit & rate-->
              <!--Section: Docs content-->
              <section class="documentation">
                <!--Section: Intro-->

  <!--Title-->

  <!-- Subtitle -->

<hr class="my-5">

<!--Section: Main section-->
<section id="main-section">

  <!--Title-->
  <h2 class="section-heading mb-4">
  </h2>

  <!-- Description -->
  <p>

  </p>

  <!--Section: Live preview-->
  <section class="">

    <!--Section: Block Content-->
    <section class="mb-5">

      <div class="row" style="margin-top:-83px;">
        <div class="col-md-6 mb-4 mb-md-0">

          <div id="mdb-lightbox-ui"></div>

          <div class="mdb-lightbox">

            <div class="row product-gallery mx-1" >

              <div class="col-12 mb-0">
                <figure class="view overlay rounded z-depth-1 main-img">
                  <a href="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"
                    data-size="710x823">
                    <?php
                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "myDB";
                      
                      // Create connection
                      $conn = new mysqli($servername, $username, $password, $dbname);
                      // Check connection
                      if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }
                      if(isset($_GET['roll'])){
                      $p_id=$_GET['roll'];

                      $sql="SELECT  * FROM product where p_id=$p_id";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
      
                        // output data of each row
                            while($row = $result->fetch_assoc()) {
                            echo "<img src=".$row['img']."
                            class='img-fluid z-depth-1'>";
                            
              echo '</a>
                  </figure>
                  <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                  <a href="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                    data-size="710x823">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                      class="img-fluid z-depth-1">
                  </a>
                </figure>
                <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                  <a href="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                    data-size="710x823">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                      class="img-fluid z-depth-1">
                  </a>
                </figure>
                <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                  <a href="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                    data-size="710x823">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                      class="img-fluid z-depth-1">
                  </a>
                </figure>
              </div>
              <div class="col-12">
                <div class="row">
                  <div class="col-3">
                    <div class="view overlay rounded z-depth-1 gallery-item">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                        class="img-fluid">
                      <div class="mask rgba-white-slight"></div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="view overlay rounded z-depth-1 gallery-item">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                        class="img-fluid">
                      <div class="mask rgba-white-slight"></div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="view overlay rounded z-depth-1 gallery-item">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                        class="img-fluid">
                      <div class="mask rgba-white-slight"></div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="view overlay rounded z-depth-1 gallery-item">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"
                        class="img-fluid">
                      <div class="mask rgba-white-slight"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
        <div class="col-md-6">';

        echo "<h5>".$row['p_nm']."</h5>";

        echo '<p class="mb-2 text-muted text-uppercase small">Shirts</p>
          <ul class="rating">
            <li>
              <i class="fas fa-star fa-sm text-primary"></i>
            </li>
            <li>
              <i class="fas fa-star fa-sm text-primary"></i>
            </li>
            <li>
              <i class="fas fa-star fa-sm text-primary"></i>
            </li>
            <li>
              <i class="fas fa-star fa-sm text-primary"></i>
            </li>
            <li>
              <i class="far fa-star fa-sm text-primary"></i>
            </li>
          </ul>
          <p><span class="mr-1"><strong>'.$row['p_price'].'rs.</strong></span></p>
          <p class="pt-1">'.$row['p_desc'].'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
            error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. </p>
       ';
      }
    } 

  
  
    else {
        echo "0 results";
    }
}
else{
    echo "";
    }
     ?>
     
            
       <div class="table-responsive">
            <table class="table table-sm table-borderless mb-0">
              <tbody>
                <tr>
                  <th class="pl-0 w-25" scope="row"><strong>Model</strong></th>
                  <td>Shirt 5407X</td>
                </tr>
                <tr>
                  <th class="pl-0 w-25" scope="row"><strong>Color</strong></th>
                  <td>Black</td>
                </tr>
                <tr>
                  <th class="pl-0 w-25" scope="row"><strong>Delivery</strong></th>
                  <td>USA, Europe</td>
                </tr>
              </tbody>
            </table>
          </div>
          <hr>
          <div class="table-responsive mb-2">
            <table class="table table-sm table-borderless">
              <tbody>
                <tr>
                  <td class="pl-0 pb-0 w-25">Quantity</td>
                  <td class="pb-0">Select size</td>
                </tr>
                <tr>
                  <?php
                  if(isset($_GET['session']) and isset($_GET['roll']) and isset($_GET['price']))
                 {
                  $k=$_GET['session'];
                  $j=$_GET['roll'];
                  $q=$_GET['price'];

                  echo '<form method="POST" id="forms" action="cartt.php" >
                  <input  value='.$k.' name="subject" type="hidden">
                  <input  value='.$j.' name="web" type="hidden">
                  <input  value='.$q.' name="price" type="hidden">';
                 }
                 else{
                   echo "hoi";
                 }
                  ?><td class="pl-0">
                    <div  style="background:white;" class="def-number-input number-input safari_only mb-0">
                      <button  type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                        class="minus"></button>
                      
                      <input class="quantity" min="0" name="quantity" id="quan" value="1" type="number" style="background:white;">

                      </form><button  onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                        class="plus"></button>
                    </div>
                  </td>
                  <td>
                    <div class="mt-1">
                      <div class="form-check form-check-inline pl-0">
                        <input type="radio" class="form-check-input" id="small" name="materialExampleRadios" checked>
                        <label class="form-check-label small text-uppercase card-link-secondary"
                          for="small">Small</label>
                      </div>
                      <div class="form-check form-check-inline pl-0">
                        <input type="radio" class="form-check-input" id="medium" name="materialExampleRadios">
                        <label class="form-check-label small text-uppercase card-link-secondary"
                          for="medium">Medium</label>
                      </div>
                      <div class="form-check form-check-inline pl-0">
                        <input type="radio" class="form-check-input" id="large" name="materialExampleRadios">
                        <label class="form-check-label small text-uppercase card-link-secondary"
                          for="large">Large</label>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
 
          <button type="button" class="btn btn-primary btn-md mr-1 mb-2">Buy now</button>



<a > 
<button type="button" onclick="send();" class="btn btn-light btn-md mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Add to
            cart</button></a>
        </div>
      </div>

    </section>
    <script>
      function send(){
      document.getElementById('forms').submit();
      y=document.getElementById('quan').value;
      alert('you selected '+y+' quantity');

       } </script>
    <!--Section: Block Content-->

  </section>
  <!--Section: Live preview-->

  <!--Section: Code-->
  <section>
    <!-- mdbsnippet -->
  <!--Section: Code-->

</section>
<!--/Section: Main section-->

<hr class="my-5">

<!--Section: Tabs with details-->
<section id="tabs-with-details">

  <!--Title-->
  <h2 class="section-heading mb-4">
    Tabs with details
  </h2>

  <!-- Description -->
  <p>

  </p>

  <!--Section: Live preview-->
  <section class="">

    <!-- Classic tabs -->
    <div class="classic-tabs border rounded px-4 pt-1">

      <ul class="nav tabs-primary nav-justified" id="advancedTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active show" id="description-tab" data-toggle="tab" href="#description" role="tab"
            aria-controls="description" aria-selected="true">Description</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info"
            aria-selected="false">Information</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
            aria-selected="false">Reviews (1)</a>
        </li>
      </ul>
      <div class="tab-content" id="advancedTabContent">
        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
          <h5>Product Description</h5>
          <p class="small text-muted text-uppercase mb-2">Shirts</p>
          <ul class="rating">
            <li>
              <i class="fas fa-star fa-sm text-primary"></i>
            </li>
            <li>
              <i class="fas fa-star fa-sm text-primary"></i>
            </li>
            <li>
              <i class="fas fa-star fa-sm text-primary"></i>
            </li>
            <li>
              <i class="fas fa-star fa-sm text-primary"></i>
            </li>
            <li>
              <i class="far fa-star fa-sm text-primary"></i>
            </li>
          </ul>
          <h6>12.99 $</h6>
          <p class="pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
            error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
            officia quis dolore quos sapiente tempore alias.</p>
        </div>
        <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
          <h5>Additional Information</h5>
          <table class="table table-striped table-bordered mt-3">
            <thead>
              <tr>
                <th scope="row" class="w-150 dark-grey-text h6">Weight</th>
                <td><em>0.3 kg</em></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="w-150 dark-grey-text h6">Dimensions</th>
                <td><em>50 × 60 cm</em></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
          <h5><span>1</span> review for <span>Fantasy T-shirt</span></h5>
          <div class="media mt-3 mb-4">
            <img class="d-flex mr-3 z-depth-1" src="https://mdbcdn.b-cdn.net/img/Photos/Others/placeholder1.jpg"
              width="62" alt="Generic placeholder image">
            <div class="media-body">
              <div class="d-sm-flex justify-content-between">
                <p class="mt-1 mb-2">
                  <strong>Marthasteward </strong>
                  <span>– </span><span>January 28, 2020</span>
                </p>
                <ul class="rating mb-sm-0">
                  <li>
                    <i class="fas fa-star fa-sm text-primary"></i>
                  </li>
                  <li>
                    <i class="fas fa-star fa-sm text-primary"></i>
                  </li>
                  <li>
                    <i class="fas fa-star fa-sm text-primary"></i>
                  </li>
                  <li>
                    <i class="fas fa-star fa-sm text-primary"></i>
                  </li>
                  <li>
                    <i class="far fa-star fa-sm text-primary"></i>
                  </li>
                </ul>
              </div>
              <p class="mb-0">Nice one, love it!</p>
            </div>
          </div>
          <hr>
          <h5 class="mt-4">Add a review</h5>
          <p>Your email address will not be published.</p>
          <div class="my-3">
            <ul class="rating mb-0">
              <li>
                <a href="#!">
                  <i class="fas fa-star fa-sm text-primary"></i>
                </a>
              </li>
              <li>
                <a href="#!">
                  <i class="fas fa-star fa-sm text-primary"></i>
                </a>
              </li>
              <li>
                <a href="#!">
                  <i class="fas fa-star fa-sm text-primary"></i>
                </a>
              </li>
              <li>
                <a href="#!">
                  <i class="fas fa-star fa-sm text-primary"></i>
                </a>
              </li>
              <li>
                <a href="#!">
                  <i class="far fa-star fa-sm text-primary"></i>
                </a>
              </li>
            </ul>
          </div>
          <div>
            <!-- Your review -->
            <div class="md-form md-outline">
              <textarea id="form76" class="md-textarea form-control pr-6" rows="4"></textarea>
              <label for="form76">Your review</label>
            </div>
            <!-- Name -->
            <div class="md-form md-outline">
              <input type="text" id="form75" class="form-control pr-6">
              <label for="form75">Name</label>
            </div>
            <!-- Email -->
            <div class="md-form md-outline">
              <input type="email" id="form77" class="form-control pr-6">
              <label for="form77">Email</label>
            </div>
            <div class="text-right pb-2">
              <button type="button" class="btn btn-primary">Add a review</button>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- Classic tabs -->

  </section>
  <!--Section: Live preview-->

  <!--Section: Code-->
  
  <!--Section: Code-->
  
  <!--Section: Code-->


  <!--/.Copyright -->
</footer>
<!--/.Footer-->

<script>
  // Ad counter
    // Set the date we're counting down to
    var countDownDate = new Date(Date.UTC(2020, 04, 15, 22, 00, 00));
    var counterElement = document.getElementById("time-counter");

    // Update the count down every 1 second
    function startCounter(){
    if(counterElement==null){
        return
    }else {
    var x = setInterval(
      
      function () {     
        
          // Get todays date and time
          var now = new Date().getTime();

          // Find the distance between now an the count down date
          var distance = countDownDate - now;

          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);

          // Display the result in the element with id="demo"
          counterElement.innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s";

          // If the count down is finished, write some text
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("time-counter").innerHTML =
              '<p class="h3 grey-text">Sale ended :(</p>';
              }  
     
    }, 1000);
    }}
    startCounter();
</script>

<style>

  main input[type=email]:focus,
  main input[type=password]:focus,
  main input[type=text]:focus,
  main input[type=url]:focus,
  main textarea:focus {
    border: 0;
  }

  .embed-responsive-16by9-fix-contact-form::before {
    height: 450px;
  }

  @media (min-width:580px) {

    .modal-contact-form-fix,
    .modal-contact-form-fix * {

      box-sizing: content-box !important;
    }

  }

  @media (min-width: 1400px) {
    #modalPricing .modal-dialog {

      max-width: 80vw;
    }
  }

</style>



<!-- Modal Contact Form -->
<div class="modal fade" id="contactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="text-center font-weight-bold mb-5">
          <p>For any technical questions please use <a href="https://mdbootstrap.com/support/">Support</a></p>
          <p>You can find licensing details on our <a href="https://mdbootstrap.com/general/license/">license
              page</a></p>
        </div>


        <form id="contact-form" name="contact-form"
          action="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/contact-form-setup.php"
          method="POST" onsubmit="return validateForm()">
          <div class="md-form mb-5">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" id="name" name="name" class="form-control validate">
            <label data-error="wrong" data-success="right" for="name">Your name</label>
          </div>

          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="email" name="email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="email">Your email</label>
          </div>

          <div class="md-form mb-5">
            <i class="fas fa-tag prefix grey-text"></i>
            <input type="text" id="subject" name="subject" class="form-control validate">
            <label data-error="wrong" data-success="right" for="subject">Subject</label>
          </div>

          <div class="md-form">
            <i class="fas fa-pencil prefix grey-text"></i>
            <textarea type="text" id="message" name="message" class="md-textarea form-control" rows="4"></textarea>
            <label data-error="wrong" data-success="right" for="message">Your message</label>
          </div>
        </form>
      </div>
      <p class="text-center" id="status"></p>
      <div class="modal-footer d-flex justify-content-center">

      <button class="btn btn-info"  onclick="validateForm()">Send <i
            class="fas fa-paper-plane-o ml-1"></i></button>

      </div>
    </div>
  </div>
</div>
<!--/Modal Contact Form -->

<!-- Modal: modalSnippetSettings -->
<div class="modal fade" id="modalSnippetSettings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <!-- Modal content -->
    <div class="modal-content">

      <div id="snippets-settings-preloader" class="checkout-preloader-container d-none">
        <div class="preloader-wrapper big active">
          <div class="spinner-layer spinner-blue-only">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal header -->
      <div class="modal-header">
        <h5 class="modal-title" id="settings-modal">Snippet settings</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden=true>&times;</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!--Name-->
            <select class="browser-default custom-select" id="snippet-package-technology">
              <option value="" disabled>MDB Technology</option>
            </select>

            <!--Name-->
            <select class="browser-default custom-select mt-2" id="snippet-package-version">
              <option value="" disabled>MDB Version</option>
            </select>

            <!--Grid row-->
            <div class="row mt-2">

              <!--Grid column-->
              <div class="col-md-7 mb-4">

                <!--Name-->
                <select class="browser-default custom-select md-selected" id="snippet-package-type">
                  <option value="" disabled>Type</option>
                </select>

              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-5 mb-4">

                <a role="button" class="btn btn-info btn-md" target="_blank" id="go-pro">Go Pro</a>

              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

            <div class="switch mb-2">
              <label>
              Public                <input id="snippet-status" type="checkbox">
                <span class="lever"></span> Private              </label>
            </div>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!-- Snippet title -->
            <input type="text" class="form-control mb-3" id="snippet-title" placeholder="Snippet title">

            <!-- Snippet description -->
            <div class="form-group">
              <textarea class="form-control" id="snippet-description" rows="5" placeholder="Snippet description"></textarea>
            </div>

            <!-- Snippet tags -->
            <div class="chips chips-initial chips-autocomplete mb-0" id="snippet-tag-input"></div>
            <span id="tags-invalid-feedback" class="small red-text d-none">You can add max. 10 tags with min. length of 2 each</span>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
            <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-elegant" data-dismiss="modal">Close</button>
        <a role="button" class="btn btn-info" id="save-snippet-settings" data-action="" data-user-nicename="new">Create</a>
      </div>
    </div>
    <!-- Modal content -->
  </div>
</div>
<!-- Modal: modalSnippetSettings -->

<!-- Modal: modalOpenSnippet -->
<div class="modal fade" id="modalOpenSnippet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div id="open-modal-preloader" class="checkout-preloader-container d-none">
        <div class="preloader-wrapper big active">
          <div class="spinner-layer spinner-blue-only">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Open snippet</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center">Your snippet is ready. Click to open</p>
      </div>
      <div class="modal-footer m-auto">
        <a type="button" class="btn btn-primary open-snippet" target="_blank">Open</a>
      </div>
    </div>
  </div>
</div>
<!-- Modal: modalOpenSnippet -->

<!-- Modal: modalPricing -->
<div class="modal fade" id="modalPricing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-fluid" role="document">
        <div class="modal-content">
            <div class="modal-header border border-bottom border-white" style="height:0px;">
            <button type="button" class="close py-1 px-2" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body pt-0">
                <div class="progress md-progress primary-color-dark pricing-modal-preloader" style="display: none;">
                    <div class="indeterminate"></div>
                </div>
                <!-- Section: PRICING Content -->
                <section id="modalPricingContent"></section>
                <!-- Section: PRICING Content -->
            </div>
        </div>
    </div>
</div>

<div id="dom-target-fb" style="display: none;">
</div>
<div id="dom-target-tw" style="display: none;">
</div>
<div id="dom-target-gp" style="display: none;">
</div>

<!-- Compiled JS -->
        <script type="text/javascript">
			var xlwcty_info = [];        </script>
		<link rel='stylesheet' id='woocommerce-currency-switcher-css'  href='https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-currency-switcher/css/front.css?ver=2.3.7' type='text/css' media='all' />
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' id='ajax-auth-script-js-extra'>
/* <![CDATA[ */
var ajax_auth_object = {"ajaxurl":"https:\/\/mdbootstrap.com\/wp-admin\/admin-ajax.php","redirecturl":"https:\/\/mdbootstrap.com","loadingmessage":"Sending user info, please wait...","auth_page_categories":["ecommerce","tools"]};
/* ]]> */
</script>
<script type='text/javascript' id='example-ajax-script-js-extra'>
/* <![CDATA[ */
var example_ajax_obj = {"ajaxurl":"https:\/\/mdbootstrap.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' id='dynamic-parts-loader-js-extra'>
/* <![CDATA[ */
var dynamic_parts_loader = {"wp_ajaxurl":"https:\/\/mdbootstrap.com\/wp-admin\/admin-ajax.php","page_id":"112877","current_site_lang":"en","dpl_page_categories":["ecommerce","tools"],"load_new_mdb_bundle":""};
/* ]]> */
</script>
</body>

</html>

    
<!--
Performance optimized by W3 Total Cache. Learn more: https://www.boldgrid.com/w3-total-cache/

Page Caching using disk: enhanced 

Served from: mdbootstrap.com @ 2021-08-28 09:37:46 by W3 Total Cache
-->