<?php
$username= $_COOKIE['username'];
$id= $_COOKIE['id'];
$kart1 = $_COOKIE['kart1'];
$kart2 = $_COOKIE['kart2'];
$kart3 = $_COOKIE['kart3'];
$kart4 = $_COOKIE['kart4'];
$kart5 = $_COOKIE['kart5'];
$kart6 = $_COOKIE['kart6'];
$kart7 = $_COOKIE['kart7'];
$kart8 = $_COOKIE['kart8'];
$kart9 = $_COOKIE['kart9'];
$kart10 = $_COOKIE['kart10'];
$kart11 = $_COOKIE['kart11'];
$kart12 = $_COOKIE['kart12'];
$kart13 = $_COOKIE['kart13'];
$kart14 = $_COOKIE['kart14'];
$kart15 = $_COOKIE['kart15'];
$kart16 = $_COOKIE['kart16'];
$kart17 = $_COOKIE['kart17'];
$kart18 = $_COOKIE['kart18'];
$kart19 = $_COOKIE['kart19'];
$kart20 = $_COOKIE['kart20'];
$kart21 = $_COOKIE['kart21'];
$kart22 = $_COOKIE['kart22'];
$kart23 = $_COOKIE['kart23'];
$kart24 = $_COOKIE['kart24'];
$kart25 = $_COOKIE['kart25'];
$kart26 = $_COOKIE['kart26'];
$kart27 = $_COOKIE['kart27'];
$kart28 = $_COOKIE['kart28'];
$kart29 = $_COOKIE['kart29'];
$kart30 = $_COOKIE['kart30'];
// #141E30; #4e54c8;  #654ea3; #ec008c; #2193b0; #141E30; #FFEFBA; #A770EF; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelime Kartları</title>
<style>
  body {
    background-color: #044572;
  }

  .wrapper {
    margin: 5vh;
  }
  .card-title {
    margin: 0;
  }
  .card {
    border: none;
    transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
    overflow: hidden;
    border-radius: 20px;
    min-height: 450px;
    box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.2);
    margin-bottom:5vh;
  }
  @media (max-width: 768px) {
    .card {
      min-height: 350px;
    }
  }
  @media (max-width: 420px) {
    .card {
      min-height: 300px;
    }
  }
  .card.card-has-bg {
    transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
    background-size: 120%;
    background-repeat: no-repeat;
    background-position: center center;
  }
  .card.card-has-bg:before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: inherit;
    -webkit-filter: grayscale(1);
    -moz-filter: grayscale(100%);
    -ms-filter: grayscale(100%);
    -o-filter: grayscale(100%);
    filter: grayscale(100%);
  }
  .card.card-has-bg:hover {
    transform: scale(0.98);
    box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.3);
    background-size: 130%;
    transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  }
  .card.card-has-bg:hover .card-img-overlay {
    transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
    background: #234f6d;
    background: linear-gradient(0deg, rgba(4, 69, 114, 0.5) 0%, #044572 100%);
  }
  .card .card-footer {
    background: none;
    border-top: none;
  }
  .card .card-footer .media img {
    border: solid 3px rgba(234, 95, 0, 0.3);
  }
  .card .card-meta {
    color: orange;
  }
  .card .card-body {
    transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  }
  .card:hover {
    cursor: pointer;
    transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
  }
  .card:hover .card-body {
    margin-top: 30px;
    transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
  }
  .card .card-img-overlay {
    transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
    background: #234f6d;
    background: linear-gradient(0deg, rgba(35, 79, 109, 0.3785889356) 0%, #455f71 100%);
  }
  form{
    display: inline-grid;
    grid-template-columns: auto auto;
    column-gap: 1rem;

  }
  #check{
    display: none;
  }
  .basari{
    display: grid;
    grid-template-columns: auto auto auto auto auto;
    column-gap: 1rem;
    margin: 1rem;
  }
  .kelime{
    color: aqua;
  }
</style>

</head>
<body>
<div class="alert alert-info alert-dismissible w-75 show mx-auto my-3" role="alert">
    <i class="bi bi-info-circle-fill"></i><strong class="primary">&emsp;DİKKAT!</strong>&emsp;Kelime kartlarının arkasındaki resimler rastgeledir. Sakın Kafanı karıştırmasın :)
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<section class="wrapper">
  <div class="container">
  <div class="row">
    <div id="kart1" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Temel Kavramlar</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#"><strong class="kelime">Hello</strong> my friend, how are you?</a></h4>
            <h1 class="card-title mt-5"><strong class="kelime">Hello</strong></h1>

          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz1.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz1.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz1.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz1.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz1.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
            
          <form action="biliyorum.php" method="POST" class="form">
            <div id="check">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
              </svg>
            </div>
            <input type="submit" id="iknow1" value="Biliyorum" name="iknow1" class="btn btn-success">
            <a href="kelime_ogren/kart1_ogren.php" class="btn btn-danger">Öğren</a>
          </form>
        </div>
      </div>
    </div>
    <!--kart2-->
    <div id="kart2" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?art');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?art" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Temel Kavramlar</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#"><strong class="text-primary">Thanks</strong> to Şeyma and Zehra for project.</a></h4>
            <h1 class="card-title mt-5"><strong class="text-primary">Thanks</strong></h1>
            
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz2.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz2.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz2.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz2.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz2.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
            
          <form action="biliyorum.php" method="POST" class="form">
            <div id="check2">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
              </svg>
            </div>
            <input type="submit" id="iknow2" value="Biliyorum" name="iknow2" class="btn btn-success">
            <a href="kelime_ogren/kart2_ogren.php" class="btn btn-danger">Öğren</a>
          </form>
        </div>
      </div>
    </div>
<!--kart3-->
<div id="kart3" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?design');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Temel Kavramlar</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">I<strong class="text-primary"> really</strong> want that kitten.</a></h4>
            <h1 class="card-title mt-5"><strong class="text-primary">Really</strong></h1>
            </div>
            <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz3.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz3.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz3.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz3.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz3.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
          <form action="biliyorum.php" method="POST" class="form">
            <div id="check3">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
              </svg>
            </div>
            <input type="submit" id="iknow3" value="Biliyorum" name="iknow3" class="btn btn-success">
            <a href="kelime_ogren/kart3_ogren.php" class="btn btn-danger">Öğren</a>
          </form>
        </div>
      </div>
    </div>
  <!--kart4-->
  <div id="kart4" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?car');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Temel Kavramlar</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#">We are<strong class="text-primary"> great</strong> team.</a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Great</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz4.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz4.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz4.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz4.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz4.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check4">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow4" value="Biliyorum" name="iknow4" class="btn btn-success">
          <a href="kelime_ogren/kart4_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
<!--kart5-->
<div id="kart5" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?plane');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Hayvanlar</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#">My <strong class="text-primary">Kitten</strong> is so cute.</a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Kitten</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz5.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz5.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz5.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz5.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz5.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check5">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow5" value="Biliyorum" name="iknow5" class="btn btn-success">
          <a href="kelime_ogren/kart5_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
  <!--kart6-->
  <div id="kart6" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?football');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Hayvanlar</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#"><strong class="text-primary">Dolphins</strong> are so smart animals.</a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Dolphin</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz6.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz6.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz6.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz6.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz6.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check6">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow6" value="Biliyorum" name="iknow6" class="btn btn-success">
          <a href="kelime_ogren/kart6_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
  <!--kart7-->
  <div id="kart7" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?basketball');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Yemek</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#">My mother teachs me how to<strong class="text-primary"> Bake.</strong></a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Bake</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz7.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz7.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz7.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz7.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz7.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check7">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow7" value="Biliyorum" name="iknow7" class="btn btn-success">
          <a href="kelime_ogren/kart7_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
  <!--kart8-->
  <div id="kart8" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?education');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Yemek</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#">Pass me the <strong class="text-primary">Salt.</strong></a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Salt</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz8.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz8.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz8.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz8.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz8.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check8">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow8" value="Biliyorum" name="iknow8" class="btn btn-success">
          <a href="kelime_ogren/kart8_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
  <!--kart9-->
  <div id="kart9" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?book');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Giyim</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#">This <strong class="text-primary">dress</strong> looks good on you.</a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Dress</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz9.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz9.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz9.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz9.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz9.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check9">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow9" value="Biliyorum" name="iknow9" class="btn btn-success">
          <a href="kelime_ogren/kart9_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
  <!--kart10-->
  <div id="kart10" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?cook');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Renk</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#">I have a <strong class="text-primary">brown </strong>notebook.</a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Brown</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz10.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz10.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz10.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz10.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz10.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check10">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow10" value="Biliyorum" name="iknow10" class="btn btn-success">
          <a href="kelime_ogren/kart10_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
</section>


<script>
if(getCookieByName("kart1") == 5 || getCookieByName("kart1_iknow") == 1){
  document.getElementById("iknow1").style.display = "none";
  document.getElementById("check").style.display = "inline-grid";}
else{
  document.getElementById("check").style.display = "none"
}
if(getCookieByName("kart2")== 5 || getCookieByName("kart2_iknow") == 1){
	document.getElementById("iknow2").style.display = "none";
	document.getElementById("check2").style.display = "inline-grid";}
else{
  document.getElementById("check2").style.display = "none"
}
if(getCookieByName("kart3")==5 || getCookieByName("kart3_iknow") == 1){
	document.getElementById("iknow3").style.display = "none";
	document.getElementById("check3").style.display = "inline-grid";}
else{
  document.getElementById("check3").style.display = "none"
}
if(getCookieByName("kart4")==5 || getCookieByName("kart4_iknow") == 1){
	document.getElementById("iknow4").style.display = "none";
	document.getElementById("check4").style.display = "inline-grid";}
else{
  document.getElementById("check4").style.display = "none"
}
if(getCookieByName("kart5")==5 || getCookieByName("kart5_iknow") == 1){
	document.getElementById("iknow5").style.display = "none";
	document.getElementById("check5").style.display = "inline-grid";}
else{
  document.getElementById("check5").style.display = "none"
}
if(getCookieByName("kart6")==5 || getCookieByName("kart6_iknow") == 1){
	document.getElementById("iknow6").style.display = "none";
	document.getElementById("check6").style.display = "inline-grid";}
else{
  document.getElementById("check6").style.display = "none"
}
if(getCookieByName("kart7")==5 || getCookieByName("kart7_iknow") == 1){
	document.getElementById("iknow7").style.display = "none";
	document.getElementById("check7").style.display = "inline-grid";}
else{
  document.getElementById("check7").style.display = "none"
}
if(getCookieByName("kart8")==5 || getCookieByName("kart8_iknow") == 1){
	document.getElementById("iknow8").style.display = "none";
	document.getElementById("check8").style.display = "inline-grid";}
else{
  document.getElementById("check8").style.display = "none"
}
if(getCookieByName("kart9")==5 || getCookieByName("kart9_iknow") == 1){
	document.getElementById("iknow9").style.display = "none";
	document.getElementById("check9").style.display = "inline-grid";}
else{
  document.getElementById("check9").style.display = "none"
}
if(getCookieByName("kart10")==5 || getCookieByName("kart10_iknow") == 1){
	document.getElementById("iknow10").style.display = "none";
	document.getElementById("check10").style.display = "inline-grid";}
else{
  document.getElementById("check10").style.display = "none"
}
</script>
<script>
for(i=1;i<11;i++){
  if(getCookieByName("kart"+i)==5){
    document.getElementById("yildiz"+i+".1").style.display = "block";
    document.getElementById("yildiz"+i+".2").style.display = "block";
    document.getElementById("yildiz"+i+".3").style.display = "block";
    document.getElementById("yildiz"+i+".4").style.display = "block";
    document.getElementById("yildiz"+i+".5").style.display = "block";
  }
  else if(getCookieByName("kart"+i)==4){
    document.getElementById("yildiz"+i+".1").style.display = "block";
    document.getElementById("yildiz"+i+".2").style.display = "block";
    document.getElementById("yildiz"+i+".3").style.display = "block";
    document.getElementById("yildiz"+i+".4").style.display = "block";
  }
  else if(getCookieByName("kart"+i)==3){
    document.getElementById("yildiz"+i+".1").style.display = "block";
    document.getElementById("yildiz"+i+".2").style.display = "block";
    document.getElementById("yildiz"+i+".3").style.display = "block";
  }
  else if(getCookieByName("kart"+i)==2){
    document.getElementById("yildiz"+i+".1").style.display = "block";
    document.getElementById("yildiz"+i+".2").style.display = "block";
  }
  else if(getCookieByName("kart"+i)==1){
    document.getElementById("yildiz"+i+".1").style.display = "block";
  }
}
</script>
</body>
</html>