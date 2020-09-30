<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RebStore | Ecommerce Website Design</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
    margin:0;
    padding:0;
    box-sizing: border-box;

}
body{
    font-family: 'Poppins', sans-serif;
}
.navbar{
    display:flex;
    align-items: center;
    padding:20px;

}

nav{
    flex:1;
    text-align: right;
}
nav ul{
    display: inline-block;
    list-style-type: none;
}
nav ul li{
    display:inline-block;
    margin-right:20px;

}

a{
    text-decoration: none;
    color:#555;

}

p{
    color:#555;
}

.container{
    max-width:1300px;
    margin: auto;
    padding-left:25px;
    padding-right: 25px;
}

.row{
    display:flex;
    align-items:center;
    flex-wrap:wrap;
    justify-content: space-around;
}
.col-2{
    flex-basis:50%;
    min-width:300px;
}

.col-2 img{
    max-width: 100%;
    padding:50px 0;
}
.col-2 h1{
    font-size:50px;
    line-height: 60px;
    margin:25px 0;

}

.btn{
    display:inline-block;
    background-color: #ff523b;
    color:white;
    padding:8px 30px;
    margin:30px 0;
    border-radius:30px;
    transition: background 0.5s;
}

.btn:hover{
    background: #563434;
}

.header{
    background: radial-gradient(#fff,#ffd6d6);
}
.header .row{
    margin-top: 70px;
}

.categories{
    margin:70px 0;
   
}

.col-3{
    flex-basis:30%;
    min-width:250px;
    margin-bottom:30px;
}

.col-3 img{
    width:100%;
}

.small-container{
    max-width:1080px;
    margin:auto;
    padding-left:25px;
    padding-right:25px;
}

.col-4{
    flex-basis: 25%;
    padding:10px;
    min-width: 200px;
    margin-bottom: 50px;
    transition:transform 0.5s;
}

.col-4 img{
    width:100%;
}

.title{
    text-align: center;
    margin:0 auto 80px;
    position: relative;
    line-height: 60px;
    color:#555;
}

.title::after{
    content:'';
    background: #ff523b;
    width:80px;
    height:5px;
    border-radius: 5px;
    position: absolute;
    bottom:0;
    left:50%;
    transform:translateX(-50%);

}

h4{
    color:#555;
    font-weight:normal;

}

.col-4 p{
    font-size:14px;
}

.rating .fa{
    color:#ff523b;
}

.col-4:hover{
    transform:translateY(5px);
}

/* offer */
.offer{
    background: radial-gradient(#fff,#ffd6d6);
    margin-top:80px;
    padding:30px 0;
}

.col-2 .offer-img{
    padding:50px;
}

small{
    color:#555;

}
/* testimonial */
.testimonial{
    padding-top:100px;


}
.testimonial .col-3{
    text-align:center;
    padding:40px 20px;
    box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
    cursor:pointer;
    transition:transform 0.5s;
}

.testimonial .col-3 img{
    width:50px;
    margin-top:20px;
    border-radius:50%;

}

.testimonial .col-3:hover{
    transform:translateY(-10px);
}

.fa.fa-quote-left{
    font-size:34px;
    color:#ff523b;
}

col-3 p{
    font-size: 12px;
    margin:12px 0;
    color:#777;
}

.testimonial .col-3 h3{
    font-size: 600;
    color:#555;
    font-size:16px;
}

/* --brands */
.brands{
    margin:100px auto;
}

.col-5{
    width:160px;
}

.col-5 img{
    width:100%;
    cursor:pointer;
    filter:grayscale(100%);
}

.col-5 img:hover{
    filter:grayscale(0);
}


/* ----footer */
.footer{
    background: #000;
    color:#8a8a8a;
    font-size:14px;
    padding:60px 0 20px;
}

.footer p{
    color:#8a8a8a;
}

.footer h3{
    color:#fff;
    margin-bottom: 20px;
}

.footer-col-1, .footer-col-2, .footer-col-3,.footer-col-4{
   min-width:250px;
   margin-bottom: 20px;

}

.footer-col-1{
  flex-basis:30%;
}

.footer-col-2{
    flex:1;
    text-align: center;
}

.footer-col-2 img{
    width:180px;
    margin-bottom: 20%;
}

.footer-col-3, .footer-col-4{
    flex-basis:12%;
    text-align-last: center;
}

ul{
    list-style-type: none;
}

.app-logo{
    margin:20px;

}

.app-logo img{
    width:140px;
}

.footer hr{
    border:none;
    background: #b5b5b5;
    height:1px;
    margin:20px 0;
}
.copyright{
    text-align: center;
}

.menu-icon{
    width:28px;
    margin-left:20px;
    display:none;

}

/* --media query for menu */
@media only screen and (max-width:800px){
    nav ul{
        position:absolute;
        top:70px;
        left:0;
        background: #333;
        width:100%;
        overflow: hidden;
        transition:max-height 0.5s;
    }
    nav ul li{
        display:block;
        margin-right: 50px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    nav ul li a{
        color:white;
    }
    .menu-icon{
        display:block;
        cursor: pointer;
    }
}

/* --media query for less than 600 screen size */

@media only screen and (max-width:600px){
    .row{
        text-align: center;
    } 
    .col-2,.col-3,.col-4{
        flex-basis:100%;
    }
}
    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="../images/logo.png" width="125px" alt="">
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="">Home</a></li>
                        <li><a href="">Products</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Account</a></li>
                    </ul>
                </nav>
                <img src="../images/cart.png" alt="" width="30px" height="30px">
                <img src="../images/menu.png" alt="" width="30px" height="30px" class="menu-icon" onclick="menutoggle()">
            </div>
    
            <div class="row">
                <div class="col-2">
                    <h1>Give Your Workout <br> A New style</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and 
                    typesetting <br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <a href="" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="../images/image1.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- featured categories -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="../images/category-1.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="../images/category-2.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="../images/category-3.jpg" alt="">
                </div>
            </div>
        </div>
        
    </div>

    <!-- featured Products -->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="../images/product-1.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="../images/product-2.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                    
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="../images/product-3.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="../images/product-4.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="../images/product-5.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="../images/product-6.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                    
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="../images/product-7.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="../images/product-8.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="../images/product-9.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="../images/product-10.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                    
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="../images/product-11.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="../images/product-12.jpg" alt="">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
    </div>

    <!-- offer -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="../images/exclusive.png" alt="" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively available on Rebstore</p>
                    <h1>Smart Band</h1>
                    <small>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                    </small>
                    <a href="" class="btn">Buy Now &#8594</a>
                </div>
            </div>
        </div>
    </div>

    <!-- --testimonial -->

    <div class="testimonial">
        <div class="small-container">
            <div class="row">
               
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>   
                    <img src="../images/user-1.png" alt="">      
                    <h3>Sean Parker</h3>     
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>   
                    <img src="../images/user-2.png" alt="">      
                    <h3>Mike Parker</h3>     
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>   
                    <img src="../images/user-3.png" alt="">      
                    <h3>Mabel Parker</h3>     
                </div>

            </div>
        </div>
    </div>
    
    
    <!-- ----brands -->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="../images/logo-godrej.png" alt="">
                </div>
                <div class="col-5">
                    <img src="../images/logo-oppo.png" alt="">
                </div>
                <div class="col-5">
                    <img src="../images/logo-coca-cola.png" alt="">
                </div>
                <div class="col-5">
                    <img src="../images/logo-paypal.png" alt="">
                </div>
                <div class="col-5">
                    <img src="../images/logo-philips.png" alt="">
                </div>
            </div>
        </div>
    </div>


    <!-- ----footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download the app for Android and ios</p>
                    <div class="app-logo">
                        <img src="../images/play-store.png" alt="">
                        <img src="../images/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="../images/logo-white.png" alt="">
                    <p>Ipsum is that it has a more-or-less normal distribution of letters</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blogs</li>
                        <li>Return Policy</li>
                        <li>Join Affiliates</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Twitter</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 - Ecommerce website</p>
        </div>
    </div>
  <!-- ---js for toggle menu -->
  <script>
  var MenuItems = document.getElementById("MenuItems");
  MenuItems.style.maxHeight = "0px";

  function menutoggle(){
      if(MenuItems.style.maxHeight == "0px")
      {
        MenuItems.style.maxHeight = "200px";
      }else{
        MenuItems.style.maxHeight = "0px";
      }
  }
  </script>
</body>
</html>