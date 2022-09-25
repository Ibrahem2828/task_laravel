<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>L2school</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <div class="logo"></div>
          <a class="navbar-brand" href="javascript:void(0)"><img class="head1" src="./img/discord.svg"/>L2school</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Contect</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Servers</a>
              </li>
            </ul>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Courses</a>
              </li>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
            </form>
          </div>
        </div>
      </nav>


      <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/314838.jpg" alt="Los Angeles" class="d-block" style="width:100%">
            <div class="carousel-caption">
              <h3>Programing</h3>
              <p>We had such a great time in program!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/5209446.jpg" alt="Chicago" class="d-block" style="width:100%">
            <div class="carousel-caption">
              <h3>hucking</h3>
              <p>There is an amazing course!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/pexels-fauxels-3183198.jpg" alt="" class="d-block" style="width:100%">
            <div class="carousel-caption">
              <h3>Study Online</h3>
              <p>also you can study and work online!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/pexels-luke-miller-5623288.jpg" alt="" class="d-block" style="width:100% ;" >
            <div class="carousel-caption">
              <h3>Study ofline</h3>
              <p>Visit us!</p>
            </div>
          </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>

     <div class="imformation">
        <div class="para1">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Fugit explicabo voluptates mollitia labore inventore ab totam,
                  iusto amet repellendus, veritatis minima,
                 assumenda molestias! Nobis, odio quisquam! Aliquam pariatur ea nulla? Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium voluptates quia illo placeat deleniti accusantium saepe minima dicta magnam amet.<a>Read more</a></p>
        </div>
        <div >
            <img class="imge" src="./img/undraw_online_stats_0g94.svg" alt="online stats">
        </div>
     </div>


     <div class="join">
    <div class="about-you">
        <p><h3>HELLOW </h3><span>join to us</span></p>
        <button type="button" >sing in</button>
        <button type="button" >log in</button>
    </div></div>



    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scrept.js"></script>
</body>
</html>
