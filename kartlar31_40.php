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
    <div id="kart31" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Temel Kavramlar</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">there's a <strong class="kelime">goodness</strong> in everybody.</a></h4>
            <h1 class="card-title mt-5"><strong class="kelime">Goodness</strong></h1>

          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz31.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz31.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz31.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz31.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz31.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
            
          <form action="biliyorum.php" method="POST" class="form">
            <div id="check31">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
              </svg>
            </div>
            <input type="submit" id="iknow31" value="Biliyorum" name="iknow31" class="btn btn-success">
            <a href="kelime_ogren/kart31_ogren.php" class="btn btn-danger">Öğren</a>
          </form>
        </div>
      </div>
    </div>
    <!--kart2-->
    <div id="kart32" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?art');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?art" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Temel Kavramlar</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#"><strong class="text-primary">Belief</strong> is the death of intelligence.</a></h4>
            <h1 class="card-title mt-5"><strong class="text-primary">Belief</strong></h1>
            
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz32.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz32.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz32.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz32.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz32.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
            
          <form action="biliyorum.php" method="POST" class="form">
            <div id="check32">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
              </svg>
            </div>
            <input type="submit" id="iknow32" value="Biliyorum" name="iknow32" class="btn btn-success">
            <a href="kelime_ogren/kart32_ogren.php" class="btn btn-danger">Öğren</a>
          </form>
        </div>
      </div>
    </div>
<!--kart3-->
<div id="kart33" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?design');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Temel Kavramlar</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">All this worldly <strong class="text-primary">wisdom</strong> was once the unamiable heresy of some wise man.</a></h4>
            <h1 class="card-title mt-5"><strong class="text-primary">Wisdom</strong></h1>
            </div>
            <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz33.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz33.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz33.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz33.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz33.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
          <form action="biliyorum.php" method="POST" class="form">
            <div id="check33">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
              </svg>
            </div>
            <input type="submit" id="iknow33" value="Biliyorum" name="iknow33" class="btn btn-success">
            <a href="kelime_ogren/kart33_ogren.php" class="btn btn-danger">Öğren</a>
          </form>
        </div>
      </div>
    </div>
  <!--kart4-->
  <div id="kart34" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?car');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Temel Kavramlar</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#">I am not interested in material <strong class="text-primary">gain.</strong></a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Gain</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz34.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz34.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz34.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz34.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz34.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check34">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow34" value="Biliyorum" name="iknow34" class="btn btn-success">
          <a href="kelime_ogren/kart34_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
<!--kart5-->
<div id="kart35" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?plane');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Temel Kavramlar</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#">I want to drink a <strong class="text-primary">little</strong> water.</a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Little</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz35.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz35.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz35.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz35.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz35.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check35">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow35" value="Biliyorum" name="iknow35" class="btn btn-success">
          <a href="kelime_ogren/kart35_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
  <!--kart6-->
  <div id="kart36" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?football');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Temel Kavramlar</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#">I don't like repeating <strong class="text-primary">myself.</strong></a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Myself</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz36.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz36.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz36.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz36.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz36.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check36">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow36" value="Biliyorum" name="iknow36" class="btn btn-success">
          <a href="kelime_ogren/kart36_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
  <!--kart7-->
  <div id="kart37" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?basketball');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Hayvanlar</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#">He was attacked by a <strong class="text-primary">shark.</strong></a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Shark</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz37.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz37.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz37.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz37.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz37.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check37">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow37" value="Biliyorum" name="iknow37" class="btn btn-success">
          <a href="kelime_ogren/kart37_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
  <!--kart8-->
  <div id="kart38" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?education');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Doğa</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#">The couple carved their initials in an oak <strong class="text-primary">tree.</strong></a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Tree</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz38.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz38.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz38.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz38.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz38.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check38">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow38" value="Biliyorum" name="iknow38" class="btn btn-success">
          <a href="kelime_ogren/kart38_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
  <!--kart9-->
  <div id="kart39" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?education');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Doğa</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#">You can see the colors of the spectrum in a <strong class="text-primary">rainbow.</strong></a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Rainbow</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz39.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz39.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz39.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz39.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz39.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check39">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow39" value="Biliyorum" name="iknow39" class="btn btn-success">
          <a href="kelime_ogren/kart39_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
  <!--kart10-->
  <div id="kart40" class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?cook');">
        <img class="card-img d-none" src="https://source.unsplash.com/600x900/?design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
      <div class="card-img-overlay d-flex flex-column">
        <div class="card-body">
          <small class="card-meta mb-2">Spor</small>
          <h4 class="card-title mt-0 "><a class="text-white" herf="#">That young man is very keen on <strong class="text-primary">cycling.</strong></a></h4>
          <h1 class="card-title mt-5"><strong class="text-primary">Cycling</strong></h1>
          </div>
          <div class="basari">
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz40.1" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz40.2" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz40.3" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz40.4" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" id="yildiz40.5" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge-fill" display="none" viewBox="0 0 16 16">
                <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
              </svg>
            </div>
        <form action="biliyorum.php" method="POST" class="form">
          <div id="check40">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class=" mx-auto bi bi-check-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
          </div>
          <input type="submit" id="iknow40" value="Biliyorum" name="iknow40" class="btn btn-success">
          <a href="kelime_ogren/kart40_ogren.php" class="btn btn-danger">Öğren</a>
        </form>
      </div>
    </div>
  </div>
</section>


<script>
if(getCookieByName("kart31") == 5 || getCookieByName("kart31_iknow") == 1){
    document.getElementById("iknow31").style.display = "none";
    document.getElementById("check31").style.display = "inline-grid";}
else{
    document.getElementById("check31").style.display = "none"
}
if(getCookieByName("kart32")== 5 || getCookieByName("kart32_iknow") == 1){
	document.getElementById("iknow32").style.display = "none";
	document.getElementById("check32").style.display = "inline-grid";}
else{
  document.getElementById("check32").style.display = "none"
}
if(getCookieByName("kart33")==5 || getCookieByName("kart33_iknow") == 1){
	document.getElementById("iknow33").style.display = "none";
	document.getElementById("check33").style.display = "inline-grid";}
else{
  document.getElementById("check33").style.display = "none"
}
if(getCookieByName("kart34")==5 || getCookieByName("kart34_iknow") == 1){
	document.getElementById("iknow34").style.display = "none";
	document.getElementById("check34").style.display = "inline-grid";}
else{
  document.getElementById("check34").style.display = "none"
}
if(getCookieByName("kart35")==5 || getCookieByName("kart35_iknow") == 1){
	document.getElementById("iknow35").style.display = "none";
	document.getElementById("check35").style.display = "inline-grid";}
else{
  document.getElementById("check35").style.display = "none"
}
if(getCookieByName("kart36")==5 || getCookieByName("kart36_iknow") == 1){
	document.getElementById("iknow36").style.display = "none";
	document.getElementById("check36").style.display = "inline-grid";}
else{
  document.getElementById("check36").style.display = "none"
}
if(getCookieByName("kart37")==5 || getCookieByName("kart37_iknow") == 1){
	document.getElementById("iknow37").style.display = "none";
	document.getElementById("check37").style.display = "inline-grid";}
else{
  document.getElementById("check37").style.display = "none"
}
if(getCookieByName("kart38")==5 || getCookieByName("kart38_iknow") == 1){
	document.getElementById("iknow38").style.display = "none";
	document.getElementById("check38").style.display = "inline-grid";}
else{
  document.getElementById("check38").style.display = "none"
}
if(getCookieByName("kart39")==5 || getCookieByName("kart39_iknow") == 1){
	document.getElementById("iknow39").style.display = "none";
	document.getElementById("check39").style.display = "inline-grid";}
else{
  document.getElementById("check39").style.display = "none"
}
if(getCookieByName("kart40")==5 || getCookieByName("kart40_iknow") == 1){
	document.getElementById("iknow40").style.display = "none";
	document.getElementById("check40").style.display = "inline-grid";}
else{
  document.getElementById("check40").style.display = "none"
}
</script>
<script>
for(i=30;i<41;i++){
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