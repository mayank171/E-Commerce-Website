<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="mobile.css">
</head>
<body>

  <p class="one">Search results:</p>
  
    <div class="two two1">
        <a href="product.php?value=4"><img class="img" src="newiphone.png"></a>
        <h2 >Brand Name:<span>Iphone 11 Pro</span></h2>
               <div class="price1">Price:<span>$699-$849</span></div>
            
               <label>Configuration</label>
                <ul class="size1">
                    <li>64GB</li>
                    <li>128GB</li>
                    <li>256GB</li>
            
                </ul>
               <label>Colors</label>
                <ul class="colors1">
                    <li></li>
                    <li></li>
                    <li></li>
            
                </ul>
                <br>
     <form action="mobilecart.php?value=4" method="post">
        <button class="cart1">Add to Cart</button>
     </form>
        <form action="buy.php?value=4" method="post">
            <button class="buy1">Buy Now</button>
        </form>
    </div>
    
    
    <div class="three three1">
        <a href="product.php?value=11"><img class="img" src="newvivo.png"></a>
        <h2 >Brand Name:<span>Vivo V15 Pro</span></h2>
               <div class="price1">Price:<span>$285</span></div>
                <br>
                <br>
                <br>
     <form action="mobilecart.php?value=11" method="post">
        <button class="cart1">Add to Cart</button>
     </form>
        <form action="buy.php?value=11" method="post">
            <button class="buy1">Buy Now</button>
        </form>
    </div>
    
    

</body>
</html>