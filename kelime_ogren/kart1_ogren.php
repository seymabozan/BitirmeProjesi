<?php
$username= $_COOKIE['username'];
if($username==""){
    echo "<script>window.location=' http://localhost/giris.php'</script>";
  }
$id= $_COOKIE['id'];

?>
<?php include_once("C:\wamp64\www\header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link rel="icon" type="image/x-icon" href="images/icons/favicon.ico"/>
    <style>
        #youglish{
            width:100px !important;
            
        }
        body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("/images/hello.jpg");
  height: 60%;
  background-position:bottom;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}
.component{
  font-family: "Helvetica Neue","Helvetica",Helvetica,Arial,sans-serif;
  width: 60%;
  margin:0 auto;
  padding: 1rem;
}
@media screen and (max-width:1200px) {
    .component{
        width: 100%;
    }
}

.component blockquote.quote {
    position: relative; 
    text-align: center;
    padding: 1rem 1.2rem;
    width: 80%;  /* create space for the quotes */
    color: #484748;
    margin: 1rem auto 2rem;
    font-size: large;
    background:
    linear-gradient(to right, #039be5 4px, transparent 4px) 0 100%,
    linear-gradient(to left, #039be5 4px, transparent 4px) 100% 0,
    linear-gradient(to bottom, #039be5 4px, transparent 4px) 100% 0,
    linear-gradient(to top, #039be5 4px, transparent 4px) 0 100%;
    background-repeat: no-repeat;
    background-size: 20px 20px;
}
hr{
    border-top: 1px solid red;
}
iframe{
  width: 100%;
}
#ayrac{
  height: 10px;
  border:2px solid black;
  border-radius:10px;
  background: linear-gradient(to left, blue, red);
}
#video{
  display:block;
  margin: auto;
}
#example{
  width: 85%;
  border:1px solid black;
  background: #654ea3;  
  background: linear-gradient(to right, #eaafc8, #654ea3); 
  border-radius:10px;
  display:block;
  margin: auto;
  text-align: center;

}
.wrapper{
  display:grid;
  grid-template-columns: auto auto;
}
#example p{
  position: relative; 
  text-align: center;
  padding: 0.4rem 0.6rem;
  width: 80%;  /* create space for the quotes */
  color: #484748;
  margin: 1rem auto 2rem;
  font-size: large;
  background:
  linear-gradient(to right, #039be5 4px, transparent 4px) 0 100%,
  linear-gradient(to left, #039be5 4px, transparent 4px) 100% 0,
  linear-gradient(to bottom, #039be5 4px, transparent 4px) 100% 0,
  linear-gradient(to top, #039be5 4px, transparent 4px) 0 100%;
  background-repeat: no-repeat;
  background-size: 20px 20px;
}
    </style>
</head>
<body>
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Hello</h1>
    <hr>
    <h1 style="font-size:50px">Merhaba</h1>
    <p></p>
  </div>
</div>


<hr id="ayrac">
<section class="component">
    <blockquote class="callout quote">
    Sometimes just when I say hello the right way, I'm like, 'Whoa, I'm so cool.'
    <cite> - Robert Pattinson</cite>
    </blockquote>
    <hr>
    <blockquote class="callout quote">
    I've got seven kids. The three words you hear most around my house are 'hello', 'goodbye', and 'I'm pregnant'.
    <cite> - Dean Martin</cite>
    </blockquote>
</section>
<hr id="ayrac">
<iframe id="video" style="width: 100%; border: none; display: block; max-width: 768px; height: 560px;" src="https://getyarn.io/yarn-story/990160d7-5ce3-4689-8cd7-d7c5eab003d0/embed?autoplay=false"> </iframe>
<hr id="ayrac">
<div class="wrapper">
  <div id="example">
    <p class="sentence1">Hello darkness, my old friend.</p>
    <p class="sentence2">Merhaba karanlık, eski arkadaşım.</p>
  </div>
  <div id="example">
    <p class="sentence1">Say hello to Mr. Ali.</p>
    <p class="sentence2">Ali Bey'e merhaba de.</p>
  </div>
</div>


<br><br>
<!-- <iframe src="https://dictionary.cambridge.org/tr/s%C3%B6zl%C3%BCk/ingilizce-t%C3%BCrk%C3%A7e/hello" width="100%" height="700px" frameborder="0" ></iframe> -->
    <!--<a id="yg-widget-0" class="youglish-widget" data-query="hello" data-lang="english" data-zones="all,us,uk,aus" data-components="8408" width="650" data-auto-start="0"  rel="nofollow" href="https://youglish.com">Visit YouGlish.com</a>-->
    <!-- <iframe style="width: 100%; border: none; display: block; max-width: 768px; height: 560px;" src="https://getyarn.io/yarn-story/990160d7-5ce3-4689-8cd7-d7c5eab003d0/embed?autoplay=false"> </iframe>
    <script async src="https://youglish.com/public/emb/widget.js" charset="utf-8"></script> -->
</body>
</html>
  
