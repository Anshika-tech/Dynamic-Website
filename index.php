<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FASHIONISTA</title>
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">FASHIONISTA</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link active" aria-current="index.php" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#collection">Collections</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#offer">Offer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact Us</a>
      </li>
    </ul>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> 
  </div>
  </div>
</nav>




<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/fashion-clothes-banner-template_23-2148578502.webp" alt="Los Angeles" width="1100" height="600">
      <div class="carousel-caption">
       
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/fashion-store-banner-template_1361-1248.webp" alt="Chicago" width="1100" height="600">
      <div class="carousel-caption">
       
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/2eb6dc1b25beedf684e4c67579ceb10b.jpg" alt="New York" width="1100" height="600">
      <div class="carousel-caption">
       
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/2021-07-31.png" alt="New York" width="1100" height="600">
      <div class="carousel-caption">
       
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/1_ebe3d6b5-e0a3-4096-98c2-dd30f02fea1f.webp" alt="New York" width="1100" height="600">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
 <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section id="about" class="my-3">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col 12">
      <img src="images/female-friends-out-shopping-together_53876-25041.webp" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col 12">
      <h2 class="display-5">BEST COLLECTIONS HERE</h2>
      <p class="py-3">FASHIONISTA is a one stop shop for all your fashion and lifestyle needs. Being India's largest e-commerce store for fashion and lifestyle products, aims at providing a hassle free and enjoyable shopping experience to shoppers across the country with the widest range of brands and products on its portal. The brand is making a conscious effort to bring the power of fashion to shoppers with an array of the latest and trendiest products available in the country.

      </p>
      <a href="men.php" class="btn btn-success" style="background-color:purple;"> Check more</a>
      </div>
    </div>
  </div>
</section>


<h2 style="margin-top:40px;display:flex;text-align:center;justify-content:center;" id="collection">Collections</h2>

<div class="carousel" data-flickity='{"autoPlay":true,"wrapAround":true,"imageLoaded":true}' style="margin-top:20px;">
      <div class="carousel-cell" >
        <img class="w3-image" src="images/34b48e2b-6cc2-4d39-bbc3-340b89f732cb1648617027870-Hancock-Men-White-Slim-Fit-Formal-Shirt-5091648617027332-1.webp">
      </div>
      <div class="carousel-cell">
        <img class="w3-image" src="images/e4d7fc38-fd64-4a69-be50-81620f1611b21634896968531LAVERNESetof5WhiteStripedCushionFillers1.webp">
      </div>
      <div class="carousel-cell">
        <img class="w3-image" src="images/30973efd-6337-4e15-a62e-2c62aa7bd1141636446937892-Roadster-Men-Shirts-9971636446937097-1.jpg">
      </div>
      <div class="carousel-cell">
        <img class="w3-image" src="images/ec3bf869-6db7-46a1-b6e2-efa9d8c2121f1665660554335-Michael-Kors-Women-Rose-Gold-Analogue-Watch-8371665660554078-4.webp">
      </div>
      <div class="carousel-cell">
        <img class="w3-image" src="images/buydressesonlineindia-06507_grande.webp">
      </div>
      <div class="carousel-cell">
        <img class="w3-image" src="images/ovpz7_512.jpg">
      </div>
      <div class="carousel-cell">
        <img class="w3-image" src="images/KW_14.jpg">
      </div>
      
</div>



<section id="offer" class="my-5">
  <div class="py-5">
     <h2 class="text-center">TOP PICKS</h2>
  </div>

  <div container-fluid>
   <div class="row">
     <div class="col-lg-3 col-md-3 col-12">
     <div class="card" >
         <img class="card-img-top" src="images/7-9325-7-world-wear-footwear-red-original-imaggbwyva8fdprh.webp" alt="Card image">
         <div class="card-body">
        <h4 class="card-title" style="font-weight:bold;">Great Grand Sale</h4>
        <h5 class="card-text">Bestselling Styles</h5>
         <a href="#" class="btn btn-primary" style="background-color:purple;">Under 799 50%-60% Off</a>
        </div>
     </div>
     </div>

     <div class="col-lg-3 col-md-3 col-12">
     <div class="card" >
         <img class="card-img-top" src="images/makeup-final2.jpg" alt="Card image">
         <div class="card-body">
        <h4 class="card-title" style="font-weight:bold;">Great Grand Sale</h4>
        <h5 class="card-text">Nykaa Fashion</h5>
         <a href="#" class="btn btn-primary" style="background-color:purple;">Under 599 50%-60% Off</a>
        </div>
     </div>
     </div>

     <div class="col-lg-3 col-md-3 col-12">
     <div class="card">
         <img class="card-img-top" src="images/942572-roadster-l-original-imaee3fpskau6mng.webp" alt="Card image"style="height:350px;" >
         <div class="card-body">
        <h4 class="card-title" style="font-weight:bold;">Great Grand Sale</h4>
        <h5 class="card-text">Roadster</h5>
         <a href="#" class="btn btn-primary" style="background-color:purple;">Under 999 50%-60% Off</a>
        </div>
     </div>
     </div>

     <div class="col-lg-3 col-md-3 col-12">
     <div class="card">
         <img class="card-img-top" src="images/8c82df6tp1575_1.avif" alt="Card image" >
         <div class="card-body">
        <h4 class="card-title" style="font-weight:bold;">Great Grand Sale</h4>
        <h5 class="card-text">H&M</h5>
         <a href="#" class="btn btn-primary" style="background-color:purple;">Under 1550 60%-70% Off</a>
        </div>
     </div>
     </div>
   </div>
  </div>
</section>




<div id="circle-container">
      <h1 style="display:flex;text-align:center;justify-content:center;">Top Offers on Catagories</h1>
      <div class="circle">
        <a href="men.php"><img src="images/images.jpg" alt="" /></a>
        </div>
      <div class="circle">
        <a href="women.php"><img src="images/0dd0fddtp1602_1.avif" alt="" /></a>
      </div>
      <div class="circle">
        <a href="kids.php"><img src="images/land-boys_2.jpg" alt="" /></a>
      </div>
      <div class="circle">
        <a href="Home.php"><img src="images/bedroom-furniture-500x500.webp" alt="" /></a>
      </div>
      <div class="circle">
        <a href="Accessories.php"><img src="images/me-tws-mini-beat-earpod-for-mobiles-wireless-bluetooth-earphones-original-imafv2669vnvdj6v.webp" alt="" /></a>
      </div>
</div>



<section id="contact" class="my-5">
    <div class="py-5>
       <h1 class="text-center" style="display:flex;text-align:center;justify-content:center;font-size:30px">Contact Us</h1>
    </div> 
    <div class="w-50 m-auto">
        <form action="info.php" method="post">
      <div class="form-group">
           <label>Username</label>
            <input type="text" name="user" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
           <label>Email Id</label>
            <input type="text" name="email" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
           <label>Mobile</label>
            <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
       <div class="form-group">
           <label>Comments</label>
           <textarea class="form-control" name="comments">
           </textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button> 
    </form>
    </div>
</section>



<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col">
        <h4>Company</h4>
        <ul>
        <li><a href="#about" style="color:white;">about us</a></li>
          <li><a href="#offer">our services</a></li>
          <li><a href="#">privacy policy</a></li>
          <li><a href="#">affiliate program</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Get help</h4>
        <ul>
        <li><a href="#">FAQ</a></li>
          <li><a href="about.php">shipping</a></li>
          <li><a href="about.php">returns </a></li>
          <li><a href="about.php">order status</a></li>
          <li><a href="about.php">payment option</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Online shop</h4>
        <ul>
          <li><a href="Accessories.php">watch</a></li>
          <li><a href="Home.php">kitchen</a></li>
          <li><a href="men.php">shoes</a></li>
          <li><a href="women.php">dress</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>follow us</h4>
        <ul>
          <li><a href="#">facebook</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">twitter</a></li>
          
        </ul>
       
      </div>
    </div>
  </div>
</footer>


    
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>

</html>
