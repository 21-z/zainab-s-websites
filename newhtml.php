<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <!-- The core Firebase JS SDK is always required and must be listed first -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"crossorigin="anonymous"> 


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.34/browser.js"></script>
  <link rel="stylesheet" href="carousel.css">
  <!--  <script type="text/javascript" src="main.js"></script>
 <!--   <link rel="stylesheet" href="styles.css">
      <!--   <script src="jquery-1.11.3.min.js"></script>-->  
     <!--       <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
     <!--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->  
   
  <!--          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
         <!--      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <!-- <script src="jquery-3.5.1.min.js"></script>-->  
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
<style>
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
    </head>
    <body onload="render()">
       
    <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top  text-white" >
                <a class="text-white navbar-brand" href="#">
                <i class="fas fa-mug-hot"></i>  Coffee Shop
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarCollapse" aria-controls="navbarCollapse"
                         aria-expanded="false" aria-label="Toggle navigtion"
                         >
                    <span class="navbar-toggler-icon"></span>
                    
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto menu">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">home</a>
                            
                        </li>
                         <li class="nav-item ">
                            <a class="nav-link" href="#coffee">coffee</a>
                            
                        </li>
                         <li class="nav-item ">
                            <a class="nav-link" href="#nescafe">menu</a>
                    
                            
                        </li>
                         <li class="nav-item ">
                            <a class="nav-link" href="contact.html">contact us</a>
                            
                        </li>
                    </ul>
               
                        
                         <form class="form-inline mt-2 mt-md-0">
                        <a class="text-white nav-link" href="cart.php">
                            <i class="text-warning fas fa-shopping-cart"></i>shopping cart
                            <i style="color: yellow;" id="cart_n"></i>
                        </a>
                        <a class="text-white nav-link" href="login.html">
                        <i class="far fa-user"> </i> administrator
                        </a> 
                      
                    </form>
                </div>
            </nav>
           
        </header>
        
        <main role="main">
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="coffedrinkk.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>My Caption Title (1st Image)</h5>
                <p>The whole caption will only show up if the screen is at least medium size.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="coffee3.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="coffe2.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
            <div class="container marketing" >
                   <br>
                   <h2 id="coffee"> coffee</h2>
                <hr>
                <div class="row" id="coffeeDIV"></div>
                  <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                  <img  class="card-img-top" style="height:16rem;" style="height:16rem;" src="coffee1.jpg" alt="card image cap">
                  <div class="card-body">
                   <i style="color:orange;" class="fa fa-star"></i>
                   <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                      <p class="card-text">dark coffee</p>
                     <p class="card-text">Price:5,000</p>
                  
                  
                     <div class="d-flex justify-content-between align-items-center">
                           <div class="btn-group">
      
                                 <!--   <button type="button" 
                                         onclick="cart2('dark coffee','5000','coffee1.jpg')" class="btn btn-sm btn-outline-secondary" ><a href="cart.ht"  style="color:inherit;">Buy</a></button>-->  
                                                   <button  type="button " 
                                            onclick="cart2('dark coffee','5000','coffee1.jpg')" class="btn btn-sm btn-outline-secondary" >Add to cart</button>
          
          
                                          </div>
                                          <small class="text-muted"> Free shipping</small>
                                  </div>
             
                  </div>
                    </div></div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
              <img  class="card-img-top" style="height:16rem;" style="height:16rem;" src="coffee2.jpg" alt="card image cap">
                  <div class="card-body">
                   <i style="color:orange;" class="fa fa-star"></i>
                   <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                      <p class="card-text">dark coffee</p>
                     <p class="card-text">Price:5,000</p>
                      <div class="d-flex justify-content-between align-items-center">
                           <div class="btn-group">
      
                                   
                                                   <button id="${btn}" type="button " 
                                            onclick="cart2('dark coffee','5000','coffee2.jpg')" class="btn btn-sm btn-outline-secondary" >Add to cart</button>
          
          
                                          </div>
                                          <small class="text-muted"> Free shipping</small>
                                  </div>
                  
                  
                  </div></div></div>
                    <div class="col-md-4">
                         <div class="card mb-4 shadow-sm">
 <img  class="card-img-top" style="height:16rem;" src="coffee3.jpg" alt="card image cap">
                  <div class="card-body">
                   <i style="color:orange;" class="fa fa-star"></i>
                   <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                      <p class="card-text">dark coffee</p>
                     <p class="card-text">Price:5,000</p>
                      <div class="d-flex justify-content-between align-items-center">
                           <div class="btn-group">
      
                                    
                                                   <button id="${btn}" type="button " 
                                            onclick="cart('dark coffee','5000','coffee3.jpg')" class="btn btn-sm btn-outline-secondary" >Add to cart</button>
          
          
                                          </div>
                                          <small class="text-muted"> Free shipping</small>
                                  </div>
                  
                  
                  
                  
                  </div></div></div></div>
                       
                <h2 id="nescafe">nescafe</h2>
                <hr>
                 
                <div class="row" id="nescafeDIV"></div>
                  
                  <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                  <img  class="card-img-top" style="height:16rem;" style="height:16rem;" src="coffee1.jpg" alt="card image cap">
                  <div class="card-body">
                   <i style="color:orange;" class="fa fa-star"></i>
                   <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                      <p class="card-text">dark nescafe</p>
                     <p class="card-text">Price:5,000</p>
                  
                  
                     <div class="d-flex justify-content-between align-items-center">
                           <div class="btn-group">
      
                                   
                                                   <button id="${btn}" type="button " 
                                            onclick="cart2('dark coffee','5000','coffee4.jpg')" class="btn btn-sm btn-outline-secondary" >Add to cart</button>
          
          
                                          </div>
                                          <small class="text-muted"> Free shipping</small>
                                  </div>
             
                  </div>
                    </div></div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
              <img  class="card-img-top" style="height:16rem;" style="height:16rem;" src="coffee2.jpg" alt="card image cap">
                  <div class="card-body">
                   <i style="color:orange;" class="fa fa-star"></i>
                   <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                      <p class="card-text">dark nescafe</p>
                     <p class="card-text">Price:5,000</p>
                      <div class="d-flex justify-content-between align-items-center">
                           <div class="btn-group">
      
                                   
                                                   <button id="${btn}" type="button " 
                                            onclick="cart('dark coffee','5000','coffee5.jpg')" class="btn btn-sm btn-outline-secondary" >Add to cart</button>
          
          
                                          </div>
                                          <small class="text-muted"> Free shipping</small>
                                  </div>
                  
                  
                  </div></div></div>
                    <div class="col-md-4">
                         <div class="card mb-4 shadow-sm">
 <img  class="card-img-top" style="height:16rem;" src="coffee3.jpg" alt="card image cap">
                  <div class="card-body">
                   <i style="color:orange;" class="fa fa-star"></i>
                   <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                      <p class="card-text">dark nescafe</p>
                     <p class="card-text">Price:5,000</p>
                      <div class="d-flex justify-content-between align-items-center">
                           <div class="btn-group">
      
                                  
                                                   <button id="${btn}" type="button " 
                                            onclick="cart('dark coffee','5000','coffee6.jpg')" class="btn btn-sm btn-outline-secondary" >Add to cart</button>
          
          
                                          </div>
                                          <small class="text-muted"> Free shipping</small>
                                  </div>
                  
                  
                  
                  
                  </div></div></div></div>
                <h2 id="hotchocolate">hotchocolate</h2>
                <hr>
                <div class="row" id="hotchocolateDIV"></div>
                  <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                  <img  class="card-img-top" style="height:16rem;" style="height:16rem;" src="coffee1.jpg" alt="card image cap">
                  <div class="card-body">
                   <i style="color:orange;" class="fa fa-star"></i>
                   <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                      <p class="card-text">dark chocolate</p>
                     <p class="card-text">Price:5,000</p>
                  
                  
                     <div class="d-flex justify-content-between align-items-center">
                           <div class="btn-group">
      
                                   
                                                   <button id="${btn}" type="button " 
                                            onclick="cart('dark coffee','5000','coffee7.jpg')" class="btn btn-sm btn-outline-secondary" >Add to cart</button>
          
          
                                          </div>
                                          <small class="text-muted"> Free shipping</small>
                                  </div>
             
                  </div>
                    </div></div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
              <img  class="card-img-top" style="height:16rem;" style="height:16rem;" src="coffee2.jpg" alt="card image cap">
                  <div class="card-body">
                   <i style="color:orange;" class="fa fa-star"></i>
                   <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                      <p class="card-text">dark chocolate</p>
                     <p class="card-text">Price:5,000</p>
                      <div class="d-flex justify-content-between align-items-center">
                           <div class="btn-group">
      
                                   
                                                   <button id="${btn}" type="button " 
                                            onclick="cart('dark coffee','5000','coffee8.jpg')" class="btn btn-sm btn-outline-secondary" >Add to cart</button>
          
          
                                          </div>
                                          <small class="text-muted"> Free shipping</small>
                                  </div>
                  
                  
                  </div></div></div>
                    <div class="col-md-4">
                         <div class="card mb-4 shadow-sm">
 <img  class="card-img-top" style="height:16rem;" src="coffee3.jpg" alt="card image cap">
                  <div class="card-body">
                   <i style="color:orange;" class="fa fa-star"></i>
                   <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                      <p class="card-text">dark chocolate</p>
                     <p class="card-text">Price:5,000</p>
                      <div class="d-flex justify-content-between align-items-center">
                           <div class="btn-group">
      
                                   
                                                   <button id="${btn}" type="button " 
                                            onclick="cart('dark coffee','5000','coffee9.jpg')" class="btn btn-sm btn-outline-secondary" >Add to cart</button>
          
          
                                          </div>
                                          <small class="text-muted"> Free shipping</small>
                                  </div>
                  </div></div></div>
                  
                <hr class="featurette-divider">
            </div>   
            <footer class="container">
                <p class="float-right">
                    <a href="#">top</a>
                    </p>
                    <div class="row">
                        instagram
                    </div>
                
            </footer></div>
        </main>
        <div id="snackbar">'Added to shopping cart</div>
        <script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>

       


    <script src="https://www.gstatic.com/firebasejs/8.2.10/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyDkuczrK58jblV2UqAY1y1CFAlZNzYIZOA",
    authDomain: "website-efb93.firebaseapp.com",
    projectId: "website-efb93",
    storageBucket: "website-efb93.appspot.com",
    messagingSenderId: "467876034045",
    appId: "1:467876034045:web:e277b1f153a304fd919594"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);</script>

<!-- var config = {
   // apiKey: "AIzaSyBTce5OicYQpOX3urOI39dSlixlZFnTNYE",
   // authDomain: "productiveproject-94bb5.firebaseapp.com",
   // projectId: "productiveproject-94bb5",
    //storageBucket: "productiveproject-94bb5.appspot.com",
    //messagingSenderId: "723091389871",
    //appId: "1:723091389871:web:c4019dd582c85fc6dd435a",
    //measurementId: "G-P3Y5H0BLVZ"
  };
    firebase.initializeApp(config);
     firebase.analytics();
-->
<script>
    
var products=[];
var cartItems=[];
var cart_n =  document.getElementById('cart_n');
var coffeeDIV =document.getElementById('coffeeDIV');
var nescafeDIV = document.getElementById('nescafeDIV');
var hotchocolateDIV =document.getElementById('hotchocolateDIV');
var coffee=[{
      name:'coffee #1',price:1},
      {name:'coffee #2',price:1},
  {name:'coffee #3',price:1},
  {name:'coffee #4',price:1},
  {name:'coffee #5',price:1}];
  var nescafe=[{
          name:'nescafe #1',price:10},
      {name:'nescafe #2',price:11},
      {name:'nescafe #3',price:12}];
  var hotchocolate=[{
          name:'hotchocolate',price:11},
      {name:'hotchocolate #2',price:12},
      {name:'hotchocolate #3',price:15}]; 
  
  
  function cart(name,price,url){
            var item={ name:name, price:price, url:url}
             cartItems.push(item); 
             let storage=JSON.parse(localStorage.getItem("cart")); 
             if(storage==null){ 
                 products.push(item);
                 localStorage.setItem("cart",JSON.stringify(products));} 
             else{
                 products= JSON.parse(localStorage.getItem("cart"));
                  products.push(item);
                 localStorage.setItem("cart",JSON.stringify(products));}
                products= JSON.parse(localStorage.getItem("cart")); 
                cart_n.innerHTML=products.length;
                 //   swal("Hello World");
                 const toast=swal.mixin({ toast:true, position:'top-end', showConfirmButton:false, timer:1000});
      toast.fire({ type:'success', title:'Added to shopping cart'});
      //  document.getElementById(btncart).style.display="none"; 
                   //     animation();
                //            toast({ type:'success', title:'Added to shopping cart'});
                              

  // var x = document.getElementById("snackbar");
   //x.className = "show";
  //setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
  }
function cart2(name,price,url){
    var item={ name:name, price:price, url:url}
             cartItems.push(item);  
              let storage=JSON.parse(localStorage.getItem("cart")); 
          if(storage==null){ 
                 products.push(item);
                 localStorage.setItem("cart",JSON.stringify(products));} 
             else{
                 products= JSON.parse(localStorage.getItem("cart"));
                  products.push(item);
                 localStorage.setItem("cart",JSON.stringify(products));}
                products= JSON.parse(localStorage.getItem("cart")); 
               cart_n.innerHTML=products.length; 
                   swal.fire("Hello World");
                const toast=swal.mixin({ toast:true, position:'top-end', showConfirmButton:false, timer:1000});
                 toast.fire({ type:'success', title:'Added to shopping cart'});
     //document.getElementById(btncart).style.display="none"; 
                    //   animation();
                            //toast({ type:'success', title:'Added to shopping cart'});
    }
function animation(){ 
      const toast=swal.mixin({ toast:true, position:'top-end', showConfirmButton:false, timer:1000});
      toast({ type:'success', title:'Added to shopping cart'});}
function render(){
    if(localStorage.getItem("cart")==null){
       //   products.push(cart);
         localStorage.setItem("cart",JSON.stringify(products));
    }else{
        products=JSON.parse(localStorage.getItem("cart"));
        cart_n.innerHTML=products.length;
          // animation();
         
               //   products.push(cart);
             //    localStorage.setItem("cart",JSON.stringify(products));
              
                
    }
}
  </script>
            

 
              
                    
                                         
                          
                                 
      
        




 

  <!--     <script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
<script src=" https://cdn.jsdelivr.net/npm/sweetalert2@10.13.0/dist/sweetalert2.all.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/ddb00eae50.js" crossorigin="anonymous"></script>
<!-- <script src="https://kit.fontawesome.com/fd0a7858d9.js" crossorigin="anonymous"></script>
<!-- <script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-app.js"></script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<!-- T<script src="/__/firebase/8.2.2/firebase-app.js"></script> -->

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
 <!-- T<script src="/__/firebase/8.2.2/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<!--<script src="/__/firebase/init.js"></script>-->

    </body>
</html>