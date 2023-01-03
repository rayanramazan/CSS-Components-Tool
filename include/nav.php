<?php 
include'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta name="keywords"
   content="سۆرس,course kurdish , kurdish course , sourcekurd , source free , كورس كوردى , kurd source , ليكه ريانا كوردى , كيتاب كوردى , رابورت كوردى , رابورتين كوردى , راپۆرت , راپۆرت کوردى , پەرتووک , لێگەریانا کوردى , webkurdish , websitekurdish , kurdishbook , kurdbook , kurd book">
  <meta name="description" content="مەزنترین کۆگەها زانیاریێن جۆاروجۆر هەردوو زاراڤا ( بادینى و سۆڕانى )">
  <meta name="author" content="Rayan Ramazan">
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://kurdishsearch.com/">
  <meta property="og:title" content="لێگەریانا کوردى">
  <meta name="description" content="مەزنترین کۆگەها زانیاریێن جۆاروجۆر هەردوو زاراڤا ( بادینى و سۆڕانى )">
  <meta property="og:image" content="img/bg.png">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://kurdishsearch.com/">
  <meta property="twitter:title" content="کورد سۆرس">
  <meta property="twitter:description"
      content="مەزنترین کۆگەها پەرتووک و راپۆرتێن ئامادەکرى زمانێن ( کوردى - عەرەبى - ئینگلیزى )">
  <meta property="twitter:image" content="img/bg.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="img/logo.png" />
  <title>کورد سۆرس</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
  integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"  nonce="LNNekdAr">
  (function _(a,b,c,d,e){
    var f=window.console;
    f&&Math.floor(new Date().getTime()/1e3)-b>7*24*60*60&&f.warn("The Facebook JSSDK is more than 7 days old.");
    if(window[c])return;
    if(!window.JSON)
    return;
    var g=window[c]={__buffer:{replay:function(){var a=this,b=function(d){var b=window[c];
    a.calls[d][0].split(".").forEach(function(a){return b=b[a]});
    b.apply(null,a.calls[d][1])};
    for(var d=0;d<this.calls.length;d++)b(d);
    this.calls=[]},calls:[],opts:null},getUserID:function(){return""},getAuthResponse:function(){return null},getAccessToken:function(){return null},init:function(a){g.__buffer.opts=a}};
    for(var b=0;b<d.length;b++){f=d[b];if(f in g)continue;
    var h=f.split("."),i=h.pop(),j=g;
    for(var k=0;k<h.length;k++)j=j[h[k]]||(j[h[k]]={});j[i]=function(a){if(a==="init")
    return;
    return function(){g.__buffer.calls.push([a,Array.prototype.slice.call(arguments)])}}(f)}k=document.createElement("script");
    k.src=a;
    k.async=!0;
    e&&(k.crossOrigin="anonymous");
    h=document.getElementsByTagName("script")[0];h.parentNode&&h.parentNode.insertBefore(k,h)})("https:\/\/connect.facebook.net\/ar_AR\/sdk.js?hash=f004bf09e45676427b4ef60685dc91a6", 1633624986, "FB",
     ["AppEvents.EventNames","AppEvents.ParameterNames",
     "AppEvents.activateApp","AppEvents.clearAppVersion",
     "AppEvents.clearUserID","AppEvents.getAppVersion",
     "AppEvents.getUserID","AppEvents.logEvent",
     "AppEvents.logPageView","AppEvents.logPurchase",
     "AppEvents.setAppVersion","AppEvents.setUserID",
     "AppEvents.updateUserProperties","Canvas.Plugin.showPluginElement",
     "Canvas.Plugin.hidePluginElement","Canvas.Prefetcher.addStaticResource",
     "Canvas.Prefetcher.setCollectionMode","Canvas.getPageInfo",
     "Canvas.scrollTo","Canvas.setAutoGrow",
     "Canvas.setDoneLoading","Canvas.setSize",
     "Canvas.setUrlHandler","Canvas.startTimer",
     "Canvas.stopTimer","Event.subscribe",
     "Event.unsubscribe","XFBML.parse",
     "addFriend","api",
     "getAccessToken","getAuthResponse",
     "getLoginStatus","getUserID",
     "init","login",
     "logout","publish",
     "share","ui"],
    true);
</script>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>

  <script>
    mybutton = document.getElementById("myBtn");

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0; 
      document.documentElement.scrollTop = 0;
    }
  </script>
  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
        <div class="logo"><a href="index.php"><img src="img/1.png"  id="logo" alt="" srcset=""></a></div>
        <ul class="links">
          <li><a href="index.php"><?php echo sec($lang['start']); ?></a></li>
          <li><a href="categoires.php">وێب دیزاین</a></li>
          <li><a href="javascript.php">جاڤاسکریپت</a></li>
          <li><a href="about.php"><?php echo sec($lang['about']); ?></a></li>
          <li><a href="contact.php">پەیوەندى</a></li>
          <li><span class="view-modal" id="open-popup-btn1"> زمان</span></li>
        </ul>
      </div>
      <div class="popup-overlay1"></div>
    <div class="popup1">
        <div class="head-popup1">
            <p><?php echo sec($lang['selectlanguage']); ?></p>
            <div class="popup-close-btn1">&times;</div>
        </div>
        <hr style="margin-top: 12px;">
        <div class="language">
            <a href="<?php echo sec($_SERVER['PHP_SELF']);?>?lang=ba" class="btn-badini">بادینى</a>
            <a href="<?php echo sec($_SERVER['PHP_SELF']);?>?lang=so" class="btn-sorani">سۆڕانى</a>
        </div>  
    </div>
    <script>
        var openPopupBtn = document.querySelector("#open-popup-btn1");
        var closePopupBtn = document.querySelector(".popup-close-btn1");

        openPopupBtn.addEventListener("click" , function(){
            document.body.classList.add("popup1-active");
        });
        closePopupBtn.addEventListener("click" , function(){
            document.body.classList.remove("popup1-active");
        });

    </script>
    <style>
      
    </style>

      <div class="theme">
      <img src="img/moon.png" id="icon" class="theme-icon">
      <!-- <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label> -->
      </div>
      <form action="<?php echo sec($_SERVER['PHP_SELF']);?>" method="GET" class="search-box">
        <input type="text" name="search" placeholder=" ... لێگەریانا خۆ ل ڤێرێ بنڤێسە" required autocomplete="off">
        <button type="submit" name="btn-search" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
  </div>

  <script>

let darkMode = localStorage.getItem("dark-theme");
const darkModeToggle = document.querySelector("#icon");
const logo = document.querySelector("#logo");

const enableDarkMide = () => {
    document.body.classList.add("dark-theme");

    localStorage.setItem("dark-theme", "enabled");
    darkModeToggle.src = "img/sun.png";
    logo.src = "img/logo-light.png";
};

const disableDarkMode = () => {
    document.body.classList.remove("dark-theme");
    localStorage.setItem("dark-theme" , null);
    darkModeToggle.src = "img/moon.png";
}

if (darkMode === "enabled") {
    enableDarkMide();
}

darkModeToggle.addEventListener("click", () => {
    darkMode = localStorage.getItem("dark-theme");
    if (darkMode !== "enabled"){
        enableDarkMide();
        
    }
    else {
        disableDarkMode();
        logo.src = "img/1.png";
    }
});
  </script>