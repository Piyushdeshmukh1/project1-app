<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("coffeehouse.jpg");
  min-height: 75%;
}

.menu {
  display: none;
}
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s3">
      <a href="#menu" class="w3-button w3-block w3-black">MENU</a>
    </div>
    <div class="w3-col s3">
      <a href="#where" class="w3-button w3-block w3-black">WHERE</a><br>

    </div>
    <h1>PIU'S BAR</h1>
  </div>

</div>


<!-- Header with image -->

<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">Open from 12am to 10pm</span>
  </div>
  <div class="w3-display-middle w3-center">
    <img src="bar.jpg">
    <span class="w3-text-white" style="font-size:50px">piu's<br>BAR</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">khat road,happy street</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">


  </div>
</div>

<!-- Menu Container -->
<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">

    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">THE MENU</span></h5>

    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
        <div class="w3-col s6 tablink">Eat</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
        <div class="w3-col s6 tablink">Drink</div>
      </a>
    </div>

    <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
      <h5>Bread Basket</h5>
      <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins 5.50</p><br>

      <h5>Honey Almond Granola with Fruits</h5>
      <p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p><br>

      <h5>Belgian Waffle</h5>
      <p class="w3-text-grey">Vanilla flavored batter with malted flour 7.50</p><br>

      <h5>Scrambled eggs</h5>
      <p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>

      <h5>Blueberry Pancakes</h5>
      <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p>
    </div>

    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
      <h5>STERLING RESERVE</h5>
      <p class="w3-text-grey">Regular coffee 2.50</p><br>

      <h5>BEAR=TUBARG HARD</h5>
      <p class="w3-text-grey">Chocolate espresso with milk 4.50</p><br>

      <h5>IMPERIAL BLUE</h5>
      <p class="w3-text-grey">Whiskey 5.00</p><br>

      <h5>OLD MONK</h5>
      <p class="w3-text-grey">wine3.00</p><br>

      <h5>BLENDERS PRIDE</h5>
      <p class="w3-text-grey"> rum. 2.50</p>
    </div>
    <img src="wine.jpg" style="width:100%;max-width:1000px;margin-top:32px;">
  </div>
</div>

<!-- Contact/Area Container -->



  </div>

  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->

<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <a href="https://www.instagram.com/accounts/login/" title="piu's-bar" target="_blank" class="w3-hover-text-green">instagram</a>
  <a href="https://www.facebook.com/" title="piu's-bar" target="_blank" class="w3-hover-text-green">facebook</a>
  <a href="https://www.snapchat.com/" title="piu's-bar" target="_blank" class="w3-hover-text-green">snapchat</a>
  <p> <a href="https://in.pinterest.com/" title="piu's-bar" target="_blank" class="w3-hover-text-green">pinterest</a></p>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="piu's-bar" target="_blank" class="w3-hover-text-green">piu's bar</a></p>

</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>
