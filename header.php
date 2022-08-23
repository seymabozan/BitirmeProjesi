<?php
$username= $_COOKIE['username'];
$id= $_COOKIE['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/icons/favicon.ico?v=2" type="image/x-icon" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  
  <style>
    .nav-link:hover{
      color:red !important;
    }
    .nav-item{
        padding-left: auto !important;
        padding-right: auto !important;
    }
  </style>
</head>
<body>
    <header id="header">
        <nav class="navbar navbar-expand-xl navbar-dark sticky-top py-3" style="background-color:#141E30;">
            <div class="container-fluid">
                <a class="navbar-brand ps-5" href="/index.php">
                  İngilizce Öğrenelim
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navbar-links">
                  <li class="nav-item px-4">
                    <a class="nav-link active" aria-current="page" href="/index.php">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                      </svg>
                      Ana Sayfa
                    </a>
                  </li>
                  <li class="nav-item dropdown px-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Kelime Kartları
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown" style="background-color: #141E30;">
                      <li><a class="dropdown-item" style="color: #fff;" href="kartlar1.php">1. Ünite -1</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" style="color: #fff;" href="kartlar2.php">1. Ünite -2</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" style="color: #fff;" href="kartlar3.php">2. Ünite</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" style="color: #fff;" href="kartlar4.php">3. Ünite</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" style="color: #fff;" href="kartlar6.php">5. Ünite</a></li>
                    </ul>
                  </li>
                  <li class="nav-item px-4">
                    <a class="nav-link" href="/magaza.php">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                        <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                      </svg>
                      Mağaza
                    </a>
                  </li>
                  
                  <li class="nav-item px-3">
                    <a class="nav-link" href=#>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gem" viewBox="0 0 16 16">
                        <path d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495 8 13.366l2.532-7.876-5.062.005zm-1.371-.999-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l5.113 6.817-2.192-6.82L1.5 5.5zm7.889 6.817 5.123-6.83-2.928.002-2.195 6.828z"/>
                      </svg>&nbsp;Puan:
                       <span id="puan"></span>
                    </a>
                  </li>
                  <li class="nav-item dropdown px-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <span id="ProfilAdi" width="20">username</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown" style="background-color: #141E30;">
                      <li><a class="dropdown-item" style="color: #fff;" href="#">Profil</a></li>
                      <li><a class="dropdown-item" style="color: #fff;" href="esyalarim.php">Eşyalarım</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" style="color: #f55;" href="/cikis.php">Çıkış Yap</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
<script>
function getCookieByName(name){
  var cerezler = document.cookie.split(";");
    for (var i = 0; i < cerezler.length; i++) { //dizi icerisinde donuyoruz 
        var cookiePair = cerezler[i].split("="); //'cerez_ismi=cerez_degeri' seklindeki verileri '=' ifadesine gore parcaliyoruz ve cerez_degeri degiskenine aktariyoruz
        if(name == cookiePair[0].trim()) { //isminin 'cerez ismi' olup olmadigini kontrol ediyoruz. Esitse 
            return cookiePair[1];//alert(cookiePair[1]); //cerezin degerini ekrana yazdiriyoruz 
        }
  }
}

document.getElementById("ProfilAdi").innerHTML = getCookieByName("username");
document.getElementById("puan").innerHTML = getCookieByName("puan");
</script>
</body>
</html>