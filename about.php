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
<body style="background-color:grey;">
    
<section class="my-5">
     
      
    <div class="w-50 m-auto">
        <form action="order.php" method="post">
      <div class="form-group">
           <label>Order Id </label>
            <input type="text" name="order_id" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
           <label>Mobile-number</label>
            <input type="text" name="Mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
           <label>Quantity</label>
            <input type="text" name="Quantity" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
           <label>Size</label>
            <input type="text" name="size" autocomplete="off" class="form-control">
      </div>
     
      <div class="form-group">
           <label>Payment method</label>
            <input type="text" name="Payment" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
           <label>Address</label>
            <input type="text" name="Address" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
           <label>Message</label>
           <textarea class="form-control" name="Message">
           </textarea>
      </div>

      <button type="submit" class="btn btn-primary">PLACE ORDER</button>

     
    </form>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  

</body>
</html>