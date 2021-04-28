

<!DOCTYPE html>
<head>

  <title>Website</title>
    <link rel="stylesheet" href="se6.css">
     <script defer src="https://use.fontawesome.com/releases/v5.9.0/js/all.js"></script>
</head>

<body>
<header>
<div class="nav">
    <div class="main">
    
        <div class="logo">
        
            <h2 class="logo">ShopWeb 5.0</h2>
        
        </div>
        
         <ul>
              <li>
                <form method="post" action="search1.php">
                <div class="box">
                 <input class="search" type="text" name="string" placeholder="search item">
                 <button class="search-btn" href="#">
                    <i class="fas fa-search"></i>
                 </button>
               </div>
               </form>
             </li>  
             <li><a class="active" href="#">HOME</a></li>
             <li><a href="loginsignupform.php">Login/Signup
                 </a></li>
             <li><a  href="viewcart.php">Cart</a></li>
              
        
        </ul>
        
         <div class="main2">
    
       <ul class="new">
        
        <li>
            <div class="dropdown">
                <div class="dropdown-button">
        <a class="active1" href="#">Mobile/Computers</a> 
                </div>
                <ul>
                  <div class="overlay">
                     <li><a href="product.php?value=3">Razor Basilisk Mouse</a></li>
                     <li><a href="product.php?value=4">Iphone 11 Pro</a></li>
                      <li><a href="product.php?value=8">Macbook Pro(16-inch)</a></li>
                      <li><a href="product.php?value=11">Vivo V11 Pro</a></li>
                      <li><a href="product.php?value=16">Amazon Echo (3rd Gen)</a></li>
                  </div>
                </ul>
            </div>
        </li>
           
    
        <li>
            <div class="dropdown">
                <div class="dropdown-button">
        <a class="active2" href="#">Television/Home Appliances</a> 
                </div>
                <ul>
                      <li><a href="product.php?value=7">LG Smart Oled TV</a></li>
                      <li><a href="product.php?value=9">W Series Side to Side 603L Refrigerator</a></li>
                      <li><a href="product.php?value=12">Zanussi Lindo Washing Machine</a></li>
                      <li><a href="product.php?value=17">O General AC</a></li>
                      <li><a href="product.php?value=19">Aquasure Water Purifier</a></li>
                </ul>
            </div>
        </li>
        <li>
            <div class="dropdown">
                <div class="dropdown-button">
        <a class="active3" href="#">Mens Fashion</a> 
                </div>
                <ul>
                 
                      <li><a href="product.php?value=1">Men's Boots</a></li>
                      <li><a href="product.php?value=5">Men's collinston Sweatshirt</a></li>
                      <li><a href="product.php?value=15">RESIST balck Sunglasses</a></li>
                
                </ul>
            </div>
        </li>
        <li>
            <div class="dropdown">
                <div class="dropdown-button">
        <a class="active4" href="#">Women Fashion</a> 
                </div>
                <ul>
                
                      <li><a href="product.php?value=6">Pullover Long Sweater</a></li>
                      <li><a href="product.php?value=13">CORSICA High Heel Boots</a></li>
                      <li><a href="product.php?value=18">Women Sea Green Longline Trench Coat</a></li>
             
                </ul>
            </div>
        </li>
           
        
        </ul>
    
    </div>

    </div>
</div>
    <form action="cart.php?value=1" method="post" >
      <div class="product1">
           <div class="imgbox1">
            
            <a href="product.php?value=1"> <img src="1new.jpg" /></a> 
               
            </div>
            <div class="details1">
            
               <h2 >Brand Name<br><span>Men's Boots</span></h2>
               <div class="price1">$30.99</div>
                <label>Sizes</label>
                <ul class="size1">
                    <li>9</li>
                    <li>10</li>
                    <li>11</li>
            
                </ul>
            
               <label>Colors</label>
                <ul class="colors1">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            
                </ul>
                <br>
            <button class="cart1">Add to Cart</button>
                
            </div>
            
        
        </div>
    </form>
    
    
    <form action="cart.php?value=2" method="post" >
    <div class="product2">
           <div class="imgbox2">
            
             <a href="product.php?value=2"> <img src="9.jpg" ></a>
                
            </div>
            <div class="details2">
            
               <h2>Brand Name<br><span>G-Shock Watch</span></h2>
               <div class="price2">$25</div>    
            
               <label>Colors</label>
                <ul class="colors2">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            
                </ul>
                <br>
            <button class="cart2">Add to Cart</button>
          </div>
    </div>
    </form>
        
    <form action="cart.php?value=3" method="post" >
    <div class="product3">
           <div class="imgbox3">
            
               <a href="product.php?value=3"> <img src="3p5VUt3ihaVHMcAFJVDe43-970-80new.jpg" ></a>
            </div>
            <div class="details3">
            
               <h2>Brand Name<br><span> Razer Basilisk Ultimate</span></h2>
               <div class="price3">$169.99</div>    
                <br>
            <button class="cart3">Add to Cart</button>
            </div>
            
        
    </div>
    </form>
    
    <form action="cart.php?value=4" method="post" >
     <div class="product4">
           <div class="imgbox4">
            
               <a href="product.php?value=4"> <img src="photo-1571380401583-72ca84994796new.jpg" ></a>
            
            </div>
            <div class="details4">
            
               <h2>Brand Name<br><span>Iphone 11 Pro</span></h2>
               <div class="price4">$699-$849</div>
                <label>Configuration</label>
                <ul class="size4">
                    <li>64GB</li>
                    <li>128GB</li>
                    <li>256GB</li>
            
                </ul>
            
               <label>Colors</label>
                <ul class="colors4">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            
                </ul>
                <br>
            <button class="cart4">Add to Cart</button>
            </div>
            
        
        </div>
    </form>
        
 <form action="cart.php?value=5" method="post" >
    <div class="product5">
           <div class="imgbox5">
            
               <a href="product.php?value=5"><img src="next.jpg" ></a>
            
            </div>
            <div class="details5">
            
               <h2>Brand Name<br><span> MEN’S COLLINSTON BRUSHED FLEECE SHERPA-LINED SWEATSHIRT</span></h2>
               <div class="price5">$64.66-$105.99</div>
                <label>Sizes</label>
                <ul class="size5">
                    <li>M</li>
                    <li>L</li>
                    <li>XL</li>
            
                </ul>
            
               <label>Colors</label>
                <ul class="colors5">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            
                </ul>
                <br>
            <button class="cart5">Add to Cart</button>
            </div>
            
        
        </div>
    </form>
    
<form action="cart.php?value=6" method="post" >
    <div class="product6">
           <div class="imgbox6">
            
               <a href="product.php?value=6"><img src="qwert.jpg" ></a>
            
            </div>
            <div class="details6">
            
               <h2>Brand Name<br><span>Women's Cashmere Knitted Turtleneck Long Sleeve Winter Wool Pullover Long Sweater Dress</span></h2>
               <div class="price6">$44.93-$57.38</div>
                <label>Sizes</label>
                <ul class="size6">
                    <li>M</li>
                    <li>L</li>
                    <li>XL</li>
            
                </ul>
            
              
                <br>
            <button class="cart6">Add to Cart</button>
            </div>
            
        
        </div>
    </form>
    
<form action="cart.php?value=7" method="post" >
     <div class="product7">
           <div class="imgbox7">
            
               <a href="product.php?value=7"><img src="qwaszx.jpg"></a>
            
            </div>
            <div class="details7">
            
               <h2>Brand Name<br><span>LG C9 Class 4K Smart OLED TV w/ AI ThinQ</span></h2>
               <div class="price7">$1,500-$4,500</div>
                <label>Sizes</label>
                <ul class="size7">
                    <li>55"</li>
                    <li>65"</li>
                    <li>77"</li>
            
                </ul>
            
              
                <br>
            <button class="cart7">Add to Cart</button>
            </div>
            
        
        </div>
    </form>
    
    <form action="cart.php?value=8" method="post" >
     <div class="product8">
           <div class="imgbox8">
            
               <a href="product.php?value=8"><img src="mzmx.jpg" ></a>
            
            </div>
            <div class="details8">
            
               <h2>Brand Name<br><span>MacBook Pro (16-inch, 2019)</span></h2>
               <div class="price8">$2,399</div>
                
                <label>Colors</label>
                <ul class="colors8">
                    <li></li>
                    <li></li>
                    <li></li>
            
                </ul>
              
                <br>
            <button class="cart8">Add to Cart</button>
            </div>
            
        
        </div>
    </form>
    
    <form action="cart.php?value=9" method="post" >
    <div class="product9">
           <div class="imgbox9">
            
               <a href="product.php?value=9"><img src="no-image-new-size123.png" ></a>
            
            </div>
            <div class="details9">
            
               <h2>Brand Name<br><span>W Series Side by Side 603 L Refrigerator Sterling Steel</span></h2>
               <div class="price9">$1,300</div>
                
                <label>Colors</label>
                <ul class="colors9">
                    <li></li>
                    <li></li>
                    <li></li>
            
                </ul>
              
                <br>
            <button class="cart9">Add to Cart</button>
            </div>
            
        
        </div>
    </form>
    
    <form action="cart.php?value=10" method="post" >
    <div class="product10">
           <div class="imgbox10">
            
               <a href="product.php?value=10"><img src="519dJQygFtL._UL1000_123.jpg" ></a>
            
            </div>
            <div class="details10">
            
               <h2>Brand Name<br><span>THE ARCHER Men's Green Jogger</span></h2>
               <div class="price10">$18</div>
                
                <label>Colors</label>
                <ul class="colors10">
                    <li></li>
                    <li></li>
                    <li></li>
            
                </ul>
              
                <br>
            <button class="cart10">Add to Cart</button>
            </div>
            
        
        </div>
    </form>
    
    
    <form action="cart.php?value=11" method="post" >
    <div class="product11">
           <div class="imgbox11">
            
               <a href="product.php?value=11"><img src="61WFEAE5aKL._SY879_next.jpg" ></a>
            
            </div>
            <div class="details11">
            
               <h2>Brand Name<br><span>Vivo V15 Pro (Ruby Red, 6GB RAM, 128GB Storage)</span></h2>
               <div class="price11">$285</div>
                
              
                <br>
            <button class="cart11">Add to Cart</button>
            </div>
            
        
        </div>
    </form>
        
    <form action="cart.php?value=12" method="post" >
     <div class="product12">
           <div class="imgbox12">
            
               <a href="product.php?value=12"><img src="best_washing_machines-zanussi_lindo_300_zwf01483wr_next.jpg_.jpg" ></a>
            
            </div>
            <div class="details12">
            
               <h2>Brand Name<br><span> Zanussi Lindo 300 ZWF01483W</span></h2>
               <div class="price12">$377</div>
                
              
                <br>
            <button class="cart12">Add to Cart</button>
            </div>
            
        
        </div>
    </form>        
        
        
    <form action="cart.php?value=13" method="post" >
    <div class="product13">
           <div class="imgbox13">
            
               <a href="product.php?value=13"><img src="360962b1-9942-4e1a-b419-c9c824ca5ecc1576220004112-CORSICA-Women-White-Solid-Heeled-Boots-7961576220003482-1_next.jpg" ></a>
            
            </div>
            <div class="details13">
            
               <h2>Brand Name<br><span> CORSICA(Women White Solid Mid-Top Heeled Boots)</span></h2>
               <div class="price13">$28</div>
                
              
                <br>
            <button class="cart13">Add to Cart</button>
            </div>
            
        
        </div>
    </form>
    
    
     <form action="cart.php?value=14" method="post" >
     <div class="product14">
           <div class="imgbox14">
            
               <a href="product.php?value=14"><img src="Nivia-STORM-Assorted-Football-Size-SDL027787969-1-aef35.jpg" ></a>
            
            </div>
            <div class="details14">
            
               <h2>Brand Name<br><span> Nivia STORM Assorted Football Size- 5</span></h2>
               <div class="price14">$12</div>
                
              
                <br>
            <button class="cart14">Add to Cart</button>
            </div>
            
        
        </div>
    </form>
    
      <form action="cart.php?value=15" method="post" >
     <div class="product15">
           <div class="imgbox15">
            
               <a href="product.php?value=15"><img src="RESIST-Black-Round-Sunglasses-VER-SDL393984739-1-aea66.jpg" ></a>
            
            </div>
            <div class="details15">
            
               <h2>Brand Name<br><span>RESIST - Mens Black Round Sunglasses</span></h2>
               <div class="price15">$11</div>
                
              
                <br>
             <button class="cart15">Add to Cart</button>
            </div>
            
        
        </div>
    </form>
    
      <form action="cart.php?value=16" method="post" >
     <div class="product16">
           <div class="imgbox16">
            
               <a href="product.php?value=16"> <img src="untitled.png" ></a>
            
            </div>
            <div class="details16">
            
               <h2>Brand Name<br><span>Amazon Echo (3rd Gen) </span></h2>
               <div class="price16">$125</div>
                
                <label>Colors</label>
                <ul class="colors16">
                    <li></li>
                    <li></li>
                    <li></li>
            
                </ul>
              
                <br>
              <button class="cart16">Add to Cart</button>
            </div>
            
        
        </div>
    </form>
    
    
    <form action="cart.php?value=17" method="post" >
    <div class="product17">
           <div class="imgbox17">
            
               <a href="product.php?value=17"><img src="download.jpg" ></a>
            
            </div>
            <div class="details17">
            
               <h2>Brand Name<br><span>O GENERAL ASGA18FTTA 1.5 TON 5 STAR SPLIT AC</span></h2>
               <div class="price17">$819.99</div>
                
              
                <br>
             <button class="cart17">Add to Cart</button>
            </div>
            
        
        </div>
    </form>
    
    <form action="cart.php?value=18" method="post" >
     <div class="product18">
           <div class="imgbox18">
            
               <a href="product.php?value=18"><img src="3d5f0cea-1db3-4043-be88-94f5dbfb7e681575844282728-1.jpg" ></a>
            
            </div>
            <div class="details18">
            
               <h2>Brand Name<br><span>Women Sea Green Solid Longline Wool Trench Coat With Fabric Belt</span></h2>
               <div class="price18">$42.99</div>
                <label>Sizes</label>
                <ul class="size18">
                    <li>L</li>
                    <li>XL</li>
                    <li>XXL</li>
            
                </ul>           
                <label>Colors</label>
                <ul class="colors18">
                    <li></li>
                    <li></li>
                    <li></li>
            
                </ul>
              
                <br>
           <button class="cart18">Add to Cart</button>
            </div>
            
        
        </div>
    </form>
    
     <form action="cart.php?value=19" method="post" >
     <div class="product19">
           <div class="imgbox19">
            
               <a href="product.php?value=19"> <img src="51Kh6rvdzyL._SL1112_.jpg" ></a>
            
            </div>
            <div class="details19">
            
               <h2>Brand Name<br><span>Eureka Forbes Aquasure from Aquaguard Delight 7-litres Table Top/Wall Mountable RO+UV+MTDS (White) Water Purifier</span></h2>
               <div class="price19">$228</div>
              
                <br>
            <button class="cart19">Add to Cart</button>
            </div>
            
        
        </div>
    </form>
    
    
      <form action="cart.php?value=20" method="post" >
     <div class="product20">
           <div class="imgbox20">
            
               <a href="product.php?value=20"><img src="61qRn-LlIDL._UL1500_.jpg" ></a>
            
            </div>
            <div class="details20">
            
               <h2>Brand Name<br><span>Nike Men's Hypervenom Phantom II NJR FG Football Boots</span></h2>
               <div class="price20">$155.99</div>
                <label>Sizes</label>
                <ul class="size20">
                    <li>9</li>
                    <li>10</li>
                    <li>11</li>
            
                </ul>           
              
                <br>
              <button class="cart20">Add to Cart</button>
            </div>
            
        
        </div>
    </form>
    <?php  
            $your_value=0;
            if(isset($_GET['value']))
            {
                  $your_value=$_GET['value'];
            }
            
                $_SESSION['value']=$your_value;
        ?>
   
</header>


</body>