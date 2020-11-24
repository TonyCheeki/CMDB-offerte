<!-- Head -->
@extends('includes\layout')
<!-- Navbar -->
@extends('includes\navigation')
<!-- Page Content -->
@section('content')
<div class="w3-content w3-padding" style="max-width:1564px">

<!-- Project Section -->
<div class="w3-container w3-padding-32" id="projects">
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Products</h3>
</div>

<div class="w3-row-padding">
  <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
      <img src="/img/product_frame.png" alt="House" style="width:100%">
    </div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
      <img src="/img/product_frame.png" alt="House" style="width:100%">
    </div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
      <img src="/img/product_frame.png" alt="House" style="width:100%">
    </div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
      <img src="/img/product_frame.png" alt="House" style="width:100%">
    </div>
  </div>
</div>

<div class="w3-row-padding">
  <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
      <img src="/img/product_frame.png" alt="House" style="width:99%">
    </div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
      <img src="/img/product_frame.png" alt="House" style="width:99%">
    </div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
      <img src="/img/product_frame.png" alt="House" style="width:99%">
    </div>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-display-container">
      <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
      <img src="/img/product_frame.png" alt="House" style="width:99%">
    </div>
  </div>
</div>

<!-- About Section -->
<div class="w3-container w3-padding-32" id="about">
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
    laboris nisi ut aliquip ex ea commodo consequat.
  </p>
</div>

<div class="w3-row-padding w3-grayscale">
  <div class="w3-col l3 m6 w3-margin-bottom">
    <img src="/img/pp1.jpg" alt="Wilco" style="width:100%">
    <h3>Wilco Hansen</h3>
    <p class="w3-opacity">Developer</p>
    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
    <img src="/img/pp2.jpg" alt="Theus" style="width:100%">
    <h3>Theus de Zeeuw</h3>
    <p class="w3-opacity">Developer</p>
    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
  </div>
  <div class="w3-col l3 m6 w3-margin-bottom">
    <img src="/img/pp3.jpg" alt="Tony" style="width:100%">
    <h3>Tony Elia Mokhtar</h3>
    <p class="w3-opacity">Developer</p>
    <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-padding-32" id="contact">
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
  <p>Lets get in touch and talk about your next project.</p>
  <form action="/action_page.php" target="_blank">
    <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
    <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
    <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
    <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
    <button class="w3-button w3-blue w3-section" type="submit">
      <i class="fa fa-paper-plane"></i> SEND MESSAGE
    </button>
  </form>
</div>

<!-- Image of location/map -->
<div class="w3-container">
<img src="/img/map.jpg" class="w3-image" style="width:100%">
</div>

<!-- End page content -->
</div>
@stop
<!-- Footer -->
@extends('includes\footer')