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
$kart31 = $_COOKIE['kart31'];
$kart32 = $_COOKIE['kart32'];
$kart33 = $_COOKIE['kart33'];
$kart34 = $_COOKIE['kart34'];
$kart35 = $_COOKIE['kart35'];
$kart36 = $_COOKIE['kart36'];
$kart37 = $_COOKIE['kart37'];
$kart38 = $_COOKIE['kart38'];
$kart39 = $_COOKIE['kart39'];
$kart40 = $_COOKIE['kart40'];
$kart41 = $_COOKIE['kart41'];
$kart42 = $_COOKIE['kart42'];
$kart43 = $_COOKIE['kart43'];
$kart44 = $_COOKIE['kart44'];
$kart45 = $_COOKIE['kart45'];
$kart46 = $_COOKIE['kart46'];
$kart47 = $_COOKIE['kart47'];
$kart48 = $_COOKIE['kart48'];
$kart49 = $_COOKIE['kart49'];
$kart50 = $_COOKIE['kart50'];
$kart51 = $_COOKIE['kart51'];
$kart52 = $_COOKIE['kart52'];
$kart53 = $_COOKIE['kart53'];
$kart54 = $_COOKIE['kart54'];
$kart55 = $_COOKIE['kart55'];
$kart56 = $_COOKIE['kart56'];
$kart57 = $_COOKIE['kart57'];
$kart58 = $_COOKIE['kart58'];
$kart59 = $_COOKIE['kart59'];
$kart60 = $_COOKIE['kart60'];
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
    <div id="kart51" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Temel Kavramlar</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">I was amazed at the <strong class="kelime">speed</strong> of the car.</a></h4>
            <h1 class="card-title mt-5"><strong class="kelime">Speedy/speed</strong></h1>

          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz51.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz51.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz51.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz51.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz51.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
            
          <form action="biliyorum.php" method="POST" class="form">
            <div id="check51">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
              </svg>
            </div>
            <input type="submit" id="iknow51" value="Biliyorum" name="iknow51" class="btn btn-success">
            <a href="kelime_ogren/kart51_ogren.php" class="btn btn-danger">Öğren</a>
          </form>
        </div>
      </div>
    </div>
    <!--kart2-->
    <div id="kart52" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?art');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?art" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Temel Kavramlar</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">What's the <strong class="text-primary">brand </strong> of your shoe.</a></h4>
            <h1 class="card-title mt-5"><strong class="text-primary">Brand</strong></h1>
            
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz52.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz52.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz52.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz52.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz52.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
            
          <form action="biliyorum.php" method="POST" class="form">
            <div id="check52">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
              </svg>
            </div>
            <input type="submit" id="iknow52" value="Biliyorum" name="iknow52" class="btn btn-success">
            <a href="kelime_ogren/kart52_ogren.php" class="btn btn-danger">Öğren</a>
          </form>
        </div>
      </div>
    </div>
<!--kart3-->
<div id="kart53" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?design');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Temel Kavramlar</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">Did you <strong class="text-primary">book</strong> the hotel?</a></h4>
            <h1 class="card-title mt-5"><strong class="text-primary">Booking</strong></h1>
            </div>
            <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz53.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz53.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz53.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz53.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz53.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
          <form action="biliyorum.php" method="POST" class="form">
            <div id="check53">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
              </svg>
            </div>
            <input type="submit" id="iknow53" value="Biliyorum" name="iknow53" class="btn btn-success">
            <a href="kelime_ogren/kart53_ogren.php" class="btn btn-danger">Öğren</a>
          </form>
        </div>
      </div>
    </div>
  <!--kart4-->
  <div id="kart54" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?car');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Temel Kavramlar</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#">Let's <strong class="text-primary">order </strong>the food.</a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Order</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz54.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz54.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz54.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz54.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz54.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check54">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow54" value="Biliyorum" name="iknow54" class="btn btn-success">
          <a href="kelime_ogren/kart54_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
<!--kart5-->
<div id="kart55" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?plane');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Temel Kavramlar</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#">You are a great <strong class="text-primary">citizen</strong>.</a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Citizen</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz55.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz55.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz55.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz55.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz55.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check55">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow55" value="Biliyorum" name="iknow55" class="btn btn-success">
          <a href="kelime_ogren/kart55_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
  <!--kart6-->
  <div id="kart56" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?football');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Siyaset</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#"><strong class="text-primary">Parliament </strong> approved the new law last week.</a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Parliament</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz56.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz56.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz56.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz56.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz56.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check56">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow56" value="Biliyorum" name="iknow56" class="btn btn-success">
          <a href="kelime_ogren/kart56_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
  <!--kart7-->
  <div id="kart57" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?basketball');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Yemek</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#">She always cook<strong class="text-primary"> delicious</strong> foods.</a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Delicious</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz57.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz57.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz57.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz57.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz57.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check57">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow57" value="Biliyorum" name="iknow57" class="btn btn-success">
          <a href="kelime_ogren/kart57_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
  <!--kart8-->
  <div id="kart58" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?education');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Yemek</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#">Pass me the <strong class="text-primary">Salt.</strong></a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Salt</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz58.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz58.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz58.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz58.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz58.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check58">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow58" value="Biliyorum" name="iknow58" class="btn btn-success">
          <a href="kelime_ogren/kart58_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
  <!--kart9-->
  <div id="kart59" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?education');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Yemek</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#">Pass me the <strong class="text-primary">Salt.</strong></a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Salt</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz59.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz59.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz59.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz59.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz59.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check59">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow59" value="Biliyorum" name="iknow59" class="btn btn-success">
          <a href="kelime_ogren/kart59_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
  <!--kart10-->
  <div id="kart60" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?cook');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Renk</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#">I have a <strong class="text-primary">brown </strong>notebook.</a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Brown</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz60.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz60.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz60.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz60.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz60.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check60">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow60" value="Biliyorum" name="iknow60" class="btn btn-success">
          <a href="kelime_ogren/kart60_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
</section>


<script>
if(getCookieByName("kart51") == 5 || getCookieByName("kart51_iknow") == 1){
    document.getElementById("iknow51").style.display = "none";
    document.getElementById("check51").style.display = "inline-grid";}
else{
    document.getElementById("check51").style.display = "none"
}
if(getCookieByName("kart52")== 5 || getCookieByName("kart52_iknow") == 1){
	document.getElementById("iknow52").style.display = "none";
	document.getElementById("check52").style.display = "inline-grid";}
else{
  document.getElementById("check52").style.display = "none"
}
if(getCookieByName("kart53")==5 || getCookieByName("kart53_iknow") == 1){
	document.getElementById("iknow53").style.display = "none";
	document.getElementById("check53").style.display = "inline-grid";}
else{
  document.getElementById("check53").style.display = "none"
}
if(getCookieByName("kart54")==5 || getCookieByName("kart54_iknow") == 1){
	document.getElementById("iknow54").style.display = "none";
	document.getElementById("check54").style.display = "inline-grid";}
else{
  document.getElementById("check54").style.display = "none"
}
if(getCookieByName("kart55")==5 || getCookieByName("kart55_iknow") == 1){
	document.getElementById("iknow55").style.display = "none";
	document.getElementById("check55").style.display = "inline-grid";}
else{
  document.getElementById("check55").style.display = "none"
}
if(getCookieByName("kart56")==5 || getCookieByName("kart56_iknow") == 1){
	document.getElementById("iknow56").style.display = "none";
	document.getElementById("check56").style.display = "inline-grid";}
else{
  document.getElementById("check56").style.display = "none"
}
if(getCookieByName("kart57")==5 || getCookieByName("kart57_iknow") == 1){
	document.getElementById("iknow57").style.display = "none";
	document.getElementById("check57").style.display = "inline-grid";}
else{
  document.getElementById("check57").style.display = "none"
}
if(getCookieByName("kart58")==5 || getCookieByName("kart58_iknow") == 1){
	document.getElementById("iknow58").style.display = "none";
	document.getElementById("check58").style.display = "inline-grid";}
else{
  document.getElementById("check58").style.display = "none"
}
if(getCookieByName("kart59")==5 || getCookieByName("kart59_iknow") == 1){
	document.getElementById("iknow59").style.display = "none";
	document.getElementById("check59").style.display = "inline-grid";}
else{
  document.getElementById("check59").style.display = "none"
}
if(getCookieByName("kart60")==5 || getCookieByName("kart60_iknow") == 1){
	document.getElementById("iknow60").style.display = "none";
	document.getElementById("check60").style.display = "inline-grid";}
else{
  document.getElementById("check60").style.display = "none"
}
</script>
<script>
for(i=50;i<61;i++){
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