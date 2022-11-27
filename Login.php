<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form Validation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <style>
       
        body{
    font-family: sans-serif;
    background : linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("images/WhatsApp Image 2022-11-27 at 12.00.45.jpeg");
    background-size: cover;
   

}

    </style>
</head>
<body>
</div> 


<section id="contact" class="my-5" style="bacground-color:black;">
    
    <div class="w-50 m-auto" style="text-align: center;display:flex;justify-content:center;height:500px;width:500px;margin-left:35%;margin-top:10%;border-radius:20%;">
        <form action="kids.php" method="post" style="background-color:	rgb(211,211,211);width:500px;border-radius:25px;margin-top:15%;">
        <h2>LOGIN</h2>
        <h4 style="color:blue;">Authentication Required</h4>
      <div class="form-group" style="display:flex;margin-top:5%;margin-left:5px;">
           <label>Username</label>
            <input type="text" style="width:400px;margin-left:10px;"name="username" autocomplete="off" class="form-control" size="20" placeholder="enter user name" minlength="3" maxlength="12">
      </div>

      <div class="form-group"style="display:flex;margin-top:5%;margin-left:5px;">
           <label >Email Id</label>
            <input type="text"style="width:400px;margin-left:20px;" name="Email" autocomplete="off" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="sophie@example.com"  size="30" minlength="3" maxlength="30" required/>
      </div>

      <div class="form-group"style="display:flex;margin-top:5%;margin-left:5px;">
           <label>Password</label>
            <input type="text" style="width:400px;margin-left:10px;"name="Password" autocomplete="off" class="form-control" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" min-length="10" required>
      </div>
     
      <a href="kids.php"><button type="submit" class="btn btn-primary" style="margin-left:5%;margin-top:20px;">Login</button> </a>
    </form>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>