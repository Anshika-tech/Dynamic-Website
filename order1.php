<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
      
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">FASHIONISTA</a>

 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
 
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



<div style="display:flex; margin-top:7%;">

  <div style="width:45%; height:520px;border:2px solid black;margin-left:3%;">
    <img src="https://img.freepik.com/premium-vector/online-delivery-service-by-scooter-shopping-website-mobile-food-order-concept-web-banner-app-template-illustration_212216-256.jpg?w=2000" style="width:100%;height:100%;">
  </div>
  <br>
<section style="width:40%;">
     
      <div style="margin-left:15%;">
        <form action="about1.php" method="post">

   <br>
        Payment Method : 
<select>
    <option value="">NetBanking</option>
    <option value="">UPI</option>
    <option value="">Google pay</option>
    <option value="">credit card</option>
    <option value="">Bhim pay</option>
    <option value="">Pay TM</option>
    <option value="">Cash on delivery</option>

</select>
      <div class="form-group" style="margin-top:20px;">
           <label>Mobile-number</label>
            <input type="text" name="Mobile" autocomplete="off" class="form-control"  placeholder="Enter 10 digit number" pattern="^(?:(?:\+|0{0,2})91(\s*|[\-])?|[0]?)?([6789]\d{2}([ -]?)\d{3}([ -]?)\d{4})$"  required>
      </div>
       
      <div class="form-group">
           <label>Pincode</label>
            <input type="text" name="Pincode" autocomplete="off" class="form-control" pattern="^[1-9][0-9]{5}$" required>
      </div>

      <div class="form-group">
           <label>Address</label>
            <input type="text" name="Address" autocomplete="off" class="form-control" required>
      </div>

      <div class="form-group">
           <label>Message</label>
           <textarea class="form-control" name="Message">
           </textarea>
      </div>

      <button type="submit" class="btn btn-primary" id="myBtn">PLACE ORDER</button>  
    </form>
    </div>
</section>
</div>
 <br>
<div style="width:100%;height:80px;border:2px solid black;background-color:black;text-align:center;">
    <h1 style="color:white;">Thanks for visit.</h1>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
</html>