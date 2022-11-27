<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author">
    <title> Shopping Cart </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Style CSS -->
   
    <link rel="stylesheet" href="css/style1.css">
	<!-- Demo CSS (No need to include it into your project) -->
	 <link rel="stylesheet" href="css/demo.css"> 
  
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


 <header class="intro">
 <h1>BIG BILLION COLLECTION IS HERE !</h1>
 <h2>Shop now and get amazing offers</h2>

 </header>
  
 
 <main >
     <!-- Start DEMO HTML (Use the following code into your project)-->
<div class="cart-modal-overlay">
    <div class="cart-modal">
      <i id="close-btn" class="fas fa-times"></i>
        <h1 class="cart-is-empty">Cart is empty</h1>
      
        <div class="product-rows">
        </div>
        <div class="total">
          <h1 class="cart-total">TOTAL</h1>
            <span class="total-price">0</span>
              <!-- <button class="purchase-btn">PURCHASE</button> -->
              <a href="order1.php"><button class="purchase-btn">PURCHASE</button></a>
        </div>
      </div>
</div>
      
<!--   end of cart modal -->
  <div class="cart-btn">
    <i id="cart" class="fas fa-shopping-cart"></i>
      <span class ="cart-quantity">$0</span>
  </div>
 
<!--  products  -->
  <div class="items-container">
    <div class="card-1 card">
      <img class="product-image" src="https://media.nihalfashions.com/blog/wp-content/uploads/2019/05/Indian-Outfits-Nihal-fashions-570x779.jpg" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$50</span>
    </div>
    <div class="card-2 card">
      <img class="product-image" src="https://rukminim1.flixcart.com/image/612/612/xif0q/sweatshirt/c/j/p/xxl-togrblhdfulsweat-believer-tripr-original-imaghchwgudnf3jn.jpeg?q=70" alt="">
      <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$20</span>
    </div>
    <div class="card-3 card">
      <img class="product-image" src="https://cdn.shopify.com/s/files/1/0266/6276/4597/products/300903251DKBLUE_2_1024x1024.jpg?v=1658483256" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$15</span>
    </div>
    <div class="card-4 card">
      <img class="product-image" src="https://m.media-amazon.com/images/G/31/img21/Beauty/MensGroomingStore/QC-01._CB658288593_.jpg" alt="">
         <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$5</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="https://menhood.in/wp-content/uploads/2021/01/2-1654587858-38075494.webp" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$3</span>
    </div>

    <div class="card-5 card">
      <img class="product-image" src="https://pixiesmediapull-145ca.kxcdn.com/pub/media/wysiwyg/pixies/Men/Category/Scrub.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$3</span>
    </div>

    <div class="card-5 card">
      <img class="product-image" src="https://m.media-amazon.com/images/I/71jCRAMYlRL._SY606_.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$5</span>
    </div>

    <div class="card-5 card">
      <img class="product-image" src="https://assets.ajio.com/medias/sys_master/root/h9d/hb7/15909137645598/-473Wx593H-460615790-black-MODEL7.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$10</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="https://m.media-amazon.com/images/I/51TxqmHOowL.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$15</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="https://m.media-amazon.com/images/I/71XOodRMhhL._UL1500_.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$10</span>
    </div>


   
  </div>  
 
 

  <h1>Women collections</h1>
  <hr>

  <div class="items-container">
    <div class="card-1 card">
      <img class="product-image" src="https://media.kreeva.com/wysiwyg/CategoryBlock/Gown/oct22/3_GOWN_TILES.jpg" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$35</span>
    </div>
    <div class="card-2 card">
      <img class="product-image" src="https://media6.ppl-media.com/tr:h-750,w-750,c-at_max,dpr-2/static/img/product/259768/ny-bae-metallic-eyeliner-black-affair-04-4-5-ml_2_display_1641804756_be466a59.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$10</span>
    </div>
    <div class="card-3 card">
      <img class="product-image" src="https://assetscdn1.paytm.com/images/catalog/product/A/AP/APPETHNIC-YARD-RASA714211FEDB8CF9/1562926736931_0..jpg" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$80</span>
    </div>
    <div class="card-4 card">
      <img class="product-image" src="https://i.pinimg.com/736x/4c/09/34/4c093481b0f15ff3e4e0205475de4cfc.jpg" alt="">
         <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$20</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="https://5.imimg.com/data5/LD/SS/AG/SELLER-2283740/diamod-necklace-set-500x500.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$60</span>
    </div>

    <div class="card-5 card">
      <img class="product-image" src="https://n1.sdlcdn.com/imgs/i/n/6/DeBelle-Majestique-Mauve-Nail-Polish-SDL590593281-1-95654.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$10</span>
    </div>

    <div class="card-5 card">
      <img class="product-image" src="https://i.pinimg.com/736x/7c/38/b1/7c38b12c96707ea85b342c552b401cc5.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$30</span>
    </div>

    <div class="card-5 card">
      <img class="product-image" src="https://i.pinimg.com/736x/d6/fa/fd/d6fafd348b2d9feddb81eeacff731e00.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$20</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/16628736/2022/1/28/d8aaf140-d031-4aa7-98f4-acdad8f855fd1643367062998-KASSUALLY-Women-Shirts-8941643367062508-1.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$10</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="https://images-eu.ssl-images-amazon.com/images/I/5160+NyEFJL._AC._SR360,460.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$8</span>
    </div>

  </div>  

  <h1>Kids collections</h1>
  <hr>

  <div class="items-container">
    <div class="card-1 card">
      <img class="product-image" src="https://static.langimg.com/thumb/msid-94658951,imgsize-73820,width-540,height-405,resizemode-75/kids-fashion-94658951.jpg" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$10</span>
    </div>
    <div class="card-2 card">
      <img class="product-image" src="https://cdn.shopify.com/s/files/1/0097/3039/2119/products/T-112-Black-_1_1500x.jpg?v=1628505062" alt="">
      <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$15</span>
    </div>
    <div class="card-3 card">
      <img class="product-image" src="https://n3.sdlcdn.com/imgs/h/g/n/Kids-Girls-Baby-Heart-Pattern-SDL480420110-8-550d6.jpg" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$20</span>
    </div>
    <div class="card-4 card">
      <img class="product-image" src="https://i.pinimg.com/564x/e2/18/ca/e218ca7cb2a3da1dd881b3966b8f3677.jpg" alt="">
         <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$15</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="https://cdn.shopify.com/s/files/1/0253/9628/1399/products/high-quality-cotton-new-active-casual-kid-suit-children-clothing-boys-clothing-baby-boy-360_1445x.jpg?v=1637591252" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$30</span>
    </div>

    <div class="card-5 card">
      <img class="product-image" src="https://5.imimg.com/data5/XG/AX/MY-30110454/kids-dress-500x500.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$25</span>
    </div>

    <div class="card-5 card">
      <img class="product-image" src="https://m.media-amazon.com/images/G/31/img2020/fashion/Kids-2020/Hopscotch/QC/Updated/QC2._SS680_QL85_.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$15</span>
    </div>

    <div class="card-5 card">
      <img class="product-image" src="https://rukminim1.flixcart.com/image/612/612/xif0q/kids-ethnic-set/h/m/c/8-9-years-rapchik004-fiera-fashion-original-imafz93heua6zrv8-bb.jpeg?q=70" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$30</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="https://m.media-amazon.com/images/G/31/img21/shoes/kids/March/budget-buys-boys_04._CB627430533_.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$12</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="https://i.pinimg.com/564x/29/3c/4b/293c4b793008b90a07b80b13beb45ae7.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$13</span>
    </div>
</div>  
<h1>Home collections</h1>


<div class="items-container">
    <div class="card-1 card">
      <img class="product-image" src="https://m.media-amazon.com/images/I/81ukLFyoIFL._SX425_.jpg" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$10</span>
    </div>
    <div class="card-2 card">
      <img class="product-image" src="https://springtek.in/images/product/147/amaze-dining-chair-pure-sheesham2-2-seating-chair-2-zoom.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$11</span>
    </div>
    <div class="card-3 card">
      <img class="product-image" src="https://ii1.pepperfry.com/media/catalog/product/e/n/1100x1210/enoteca-red-wine-stem---615ml--set-of-2--by-pasabahce-enoteca-red-wine-stem---615ml--set-of-2--by-pa-fivryn.jpg" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$11</span>
    </div>
    <div class="card-4 card">
      <img class="product-image" src="https://m.media-amazon.com/images/I/61X-by9WrDL._SL1080_.jpg" alt="">
         <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$15</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="https://m.media-amazon.com/images/I/71PZE7HZs1L._SL1500_.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$25</span>
    </div>

    <div class="card-5 card">
      <img class="product-image" src="https://www.ikea.com/in/en/images/products/birtna-block-out-curtains-1-pair-beige__0814428_pe772561_s5.jpg?f=undefined" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$21</span>
    </div>

    <div class="card-5 card">
      <img class="product-image" src="https://www.ikea.com/in/en/images/products/vimle-3-seat-sofa-gunnared-medium-grey__0514368_pe639441_s5.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$22</span>
    </div>

    <div class="card-5 card">
      <img class="product-image" src="https://ii1.pepperfry.com/media/catalog/product/b/l/800x880/black-beauty-33-pcs-glassware-dinner-set-by-ceradeco-black-beauty-33-pcs-glassware-dinner-set-by-cer-1ild6c.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$17</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="https://ii1.pepperfry.com/media/catalog/product/e/n/1100x1210/enoteca-red-wine-stem---615ml--set-of-2--by-pasabahce-enoteca-red-wine-stem---615ml--set-of-2--by-pa-fivryn.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$12</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="https://images.woodenstreet.de/image/cache/data%2Fbed-with-storage%2Fdrewno-upholstered-bed-with-storage%2Fupdated%2Findigo-blue%2Ffront-574x396.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$25</span>
    </div>


   
  </div>  
 
  <h1 id="electronics">Electronic items</h1>

  <div class="items-container">
    <div class="card-1 card">
      <img class="product-image" src="https://static.toiimg.com/thumb/resizemode-4,msid-77812222,imgsize-200,width-1200,imgv-1/77812222.jpg" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$300</span>
    </div>
    <div class="card-2 card">
      <img class="product-image" src="https://cdn1.smartprix.com/rx-ifbFIHsjy-w1200-h1200/fbFIHsjy.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$700</span>
    </div>
    <div class="card-3 card">
      <img class="product-image" src="https://images-eu.ssl-images-amazon.com/images/I/61PnHlc0HCL._AC_UL600_SR600,400_.jpg" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">$250</span>
    </div>
    <div class="card-4 card">
      <img class="product-image" src="https://m.media-amazon.com/images/I/71geVdy6-OS._SX466_.jpg" alt="">
         <button class="add-to-cart">Add to cart</button>
        <span class="product-price">$200</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="https://m.media-amazon.com/images/I/71vFoc5xVLL._UL1500_.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$80</span>
    </div>

    <div class="card-5 card">
      <img class="product-image" src="https://www.fnp.com/images/pr/l/v20200423203131/dark-brown-personalised-wallet-keychain_1.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$50</span>
    </div>

    <div class="card-5 card">
      <img class="product-image" src="https://cdn.shopify.com/s/files/1/0266/1371/0884/products/7_df138706-1b15-4e94-b297-189068d12e40-sw.png?v=1659590799" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$60</span>
    </div>

    <div class="card-5 card">
      <img class="product-image" src="https://rukminim1.flixcart.com/image/416/416/kmi2g7k0/headphone/m/l/a/neckband-bluetooth-earphones-hi-plus-original-imagfdxfa28k93mr.jpeg?q=70" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$30</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="https://i.gadgets360cdn.com/products/large/bassheads-172-black-with-hd-sound-7aa5b096-c813-4a5e-a3d7-89dccdcbf287-720x-800x1408-1612023783.png" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$20</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="https://m.economictimes.com/thumb/msid-70450624,width-1200,height-900,resizemode-4,imgsize-273503/dell-expresssign-is-one-of-the-most-impressing-features-on-the-laptop-.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">$600</span>
    </div>


   
  </div>  
 


 

     <!-- END EDMO HTML (Happy Coding!)-->
 </main>
 
      
 
  
  <script>
    const cart = document.querySelector('#cart');
const cartModalOverlay = document.querySelector('.cart-modal-overlay');

cart.addEventListener('click', () => {
  if (cartModalOverlay.style.transform === 'translateX(-200%)'){
    cartModalOverlay.style.transform = 'translateX(0)';
  } else {
    cartModalOverlay.style.transform = 'translateX(-200%)';
  }
})
// end of open cart modal

// close cart modal
const closeBtn = document.querySelector ('#close-btn');

closeBtn.addEventListener('click', () => {
  cartModalOverlay.style.transform = 'translateX(-200%)';
});

cartModalOverlay.addEventListener('click', (e) => {
  if (e.target.classList.contains('cart-modal-overlay')){
    cartModalOverlay.style.transform = 'translateX(-200%)'
  }
})
// end of close cart modal

// add products to cart
const addToCart = document.getElementsByClassName('add-to-cart');
const productRow = document.getElementsByClassName('product-row');

for (var i = 0; i < addToCart.length; i++) {
  button = addToCart[i];
  button.addEventListener('click', addToCartClicked)
}

function addToCartClicked (event) {
  button = event.target;
  var cartItem = button.parentElement;
  var price = cartItem.getElementsByClassName('product-price')[0].innerText;
  
  var imageSrc = cartItem.getElementsByClassName('product-image')[0].src;
  addItemToCart (price, imageSrc);
  updateCartPrice()
}

function addItemToCart (price, imageSrc) {
  var productRow = document.createElement('div');
  productRow.classList.add('product-row');
  var productRows = document.getElementsByClassName('product-rows')[0];
  var cartImage = document.getElementsByClassName('cart-image');
  
  for (var i = 0; i < cartImage.length; i++){
    if (cartImage[i].src == imageSrc){
      alert ('This item has already been added to the cart')
      return;
    }
  }
  
  var cartRowItems = `
  <div class="product-row">
        <img class="cart-image" src="${imageSrc}" alt="">
        <span class ="cart-price">${price}</span>
        <input class="product-quantity" type="number" value="1">
        <button class="remove-btn">Remove</button>
        </div>
        
      `
  productRow.innerHTML = cartRowItems;
  productRows.append(productRow);
  productRow.getElementsByClassName('remove-btn')[0].addEventListener('click', removeItem)
  productRow.getElementsByClassName('product-quantity')[0].addEventListener('change', changeQuantity)
  updateCartPrice()
}

const removeBtn = document.getElementsByClassName('remove-btn');
for (var i = 0; i < removeBtn.length; i++) {
  button = removeBtn[i]
  button.addEventListener('click', removeItem)
}

function removeItem (event) {
  btnClicked = event.target
  btnClicked.parentElement.parentElement.remove()
  updateCartPrice()
}

// update quantity input
var quantityInput = document.getElementsByClassName('product-quantity')[0];

for (var i = 0; i < quantityInput; i++){
  input = quantityInput[i]
  input.addEventListener('change', changeQuantity)
}

function changeQuantity(event) {
  var input = event.target
  if (isNaN(input.value) || input.value <= 0){
    input.value = 1
  }
  updateCartPrice()
}

function updateCartPrice() {
  var total = 0
  for (var i = 0; i < productRow.length; i += 2) {
    cartRow = productRow[i]
  var priceElement = cartRow.getElementsByClassName('cart-price')[0]
  var quantityElement = cartRow.getElementsByClassName('product-quantity')[0]
  var price = parseFloat(priceElement.innerText.replace('$', ''))
  var quantity = quantityElement.value
  total = total + (price * quantity )
    
  }
  document.getElementsByClassName('total-price')[0].innerText =  '$' + total

document.getElementsByClassName('cart-quantity')[0].textContent = i /= 2
}
// end of update total price

// purchase items
const purchaseBtn = document.querySelector('.purchase-btn');

const closeCartModal = document.querySelector('.cart-modal');

purchaseBtn.addEventListener('click', purchaseBtnClicked)

function purchaseBtnClicked () {
  // alert ('Thank you for your purchase');
  cartModalOverlay.style.transform= 'translateX(-100%)'
 var cartItems = document.getElementsByClassName('product-rows')[0]
 while (cartItems.hasChildNodes()) {
   cartItems.removeChild(cartItems.firstChild)
   
 }
  updateCartPrice()
}
// end of purchase items

//alert user if cart is empty
  </script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
   
 
</html>