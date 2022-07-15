

function my(){
  var txt;
  if (confirm("Press a button!")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
require("@babel/core").transform("code", {
  plugins: ["@babel/plugin-syntax-jsx"]
});
require("@babel/parser").parse("code", {
  // parse in strict mode and allow module declarations
  sourceType: "module",

  plugins: [
    // enable jsx and flow syntax
    "jsx",
    "flow"
  ]
});

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
<!-- var firebaseConfig = {
 <!--  apiKey: "AIzaSyBTce5OicYQpOX3urOI39dSlixlZFnTNYE",
    authDomain: "productiveproject-94bb5.firebaseapp.com",
    projectId: "productiveproject-94bb5",
    storageBucket: "productiveproject-94bb5.appspot.com",
    messagingSenderId: "723091389871",
    appId: "1:723091389871:web:c4019dd582c85fc6dd435a",
    measurementId: "G-P3Y5H0BLVZ"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  //firebase.analytics();
-->

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
  
  function HTMLcoffeeProduct(con){
    let URL = 'coffee${con}.jpg';
      let btn = 'btnCoffee${con}';
      return '  
      <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
                  <img  class="card-img-top" style="height:16rem;" src="${URL}" alt="card image cap">
                  <div class="card-body">
                   <i style="color:orange;" class="fa fa-star"></i>
                   <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                    <i style="color:orange;" class="fa fa-star"></i>
                     <p class="card-text">${COFFEE[con-1].name}</p>
                     <p class="card-text">Price:${COFFEE[con-1].price}.00</p>
                      <div class="d-flex justify-content-between align-items-center">
                           <div class="btn-group">
      
                                   <button type="button" 
                                         onclick="cart2('${COFFEE[con-1].name}','${COFFEE[con-1].price}','${URL}','${con}','${btn}')" class="btn btn-sm btn-outline-secondary" >Buy</button>
                                                   <button id="${btn}" type="button " 
                                            onclick="cart('${COFFEE[con-1].name}','${COFFEE[con-1].price}','${URL}','${con}','${btn}')" class="btn btn-sm btn-outline-secondary" >Add to cart</button>
          
          
                                          </div>
                                          <small class="text-muted"> Free shipping</small>
                                  </div>
                          </div>
                          </div>
                          </div>       '
      }
        

function render(){
  for(let index = 1 ; index <=6 ;index++){
      coffeeDIV.innerHTML+= '${HTMLcoffeeProduct(index)}';
         
  } }



 </script>