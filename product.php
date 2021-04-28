<?php

// Program to display URL of current page. 

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
	$link = "https"; 
else
	$link = "http"; 

// Here append the common URL characters. 
$link .= "://"; 

// Append the host(domain name, ip) to the URL. 
$link .= $_SERVER['HTTP_HOST']; 

// Append the requested resource location to the URL 
$link .= $_SERVER['REQUEST_URI']; 
	
$url_components=parse_url($link);

parse_str($url_components['query'],$params);

if($params['value']==1)
{
  echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct1.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="1.0.png" height="580px" width="590px">
    </div>
    <div class="details">
      <form action="buy.php?value=1" method="post">
        <div class="content">
            <h2>Mens Boots<br></h2>
            <p>
                        
                  <strong>-Rubber sole</strong><br>
              
                  <strong> -A sock liner which can be removed to &nbsp;accommodate a medical orthotic.</strong><br>
              
                  <strong>-Slip resistant rubber outsoles and a &nbsp;durable welt construction.</strong><br>
              
                  <strong>-Top Full Grain Nubuck Leather with Speedy &nbsp;Hooks for Easy Wearing.</strong><br>
              
                  <strong>-Lace-up closure supports your foot and &nbsp;lets you dial in your fit.</strong><br>
             
                  <strong>-Note, its not full waterproof but water &nbsp;resistant.</strong><br>
            </p>
            <br>
            <h3 class="size">Sizes</h3><br>
               
                   <h4 class="bt1">9</h4>
                   <h4 class="bt2">10</h4>
                   <h4 class="bt3">11</h4>
                   <br>
        
            <h3 class="color">Colors</h3><br><br>
                   <ul>
            
                        <li class="colors1"></li>
                        <li class="colors2"></li>
                        <li class="colors3"></li>
            
                   </ul>
            
                
                <br>
                <br>
            <h3 class="price">$30.99</h3>
             <button class="buy">Buy Now</button>
        
        </div>
        </form>
     </div>
    
    </div>


</body>';

  
}
if($params['value']==2)
{
    echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct2.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="gshocknew.png" height="570px" width="550px">
    </div>
    <div class="details">
      <form action="buy.php?value=2" method="post">
        <div class="content">
            <h2>Casio G-Shock Analog-Digital Dial Mens Watch<br></h2>
            <p>
                        
                  <strong>-Dial Color: Black, Case Shape: Round, Dial &nbsp;Glass material: Mineral.</strong><br>
              
                  <strong> -Band Color: Black, Band Material: Resin; &nbsp;Case Material: Resin, Resin Bezel.</strong><br>
              
                  <strong>-Watch Movement Type: Quartz, Watch Display &nbsp;Type: Analog-Digital.</strong><br>
              
                  <strong>-Size of case : 55×51.2×16.9mm ; Total&nbsp; weight : 73g.</strong><br>
              
                  <strong>-Water Resistance Depth: 200 meters; Clasp &nbsp;Type: Buckle.</strong><br>
             
                  <strong>-Warranty type:Manufacturer; 2 Years &nbsp;Domestic Warranty.</strong><br>
            </p>
            <br>
        
            <h3 class="color">Colors</h3><br><br>
                   <ul>
            
                        <li class="colors1"></li>
                        <li class="colors2"></li>
                        <li class="colors3"></li>
            
                   </ul>
            
                
                <br>
                <br>
            <h3 class="price">$25</h3>
             <button class="buy">Buy Now</button>
        
        </div>  
        </form>
     </div>
    
    </div>


</body>

';
}
if($params['value']==3)
{
    echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct3.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="newrazor.png" height="580px" width="550px">
    </div>
    <div class="details">
      <form action="buy.php?value=3" method="post">
        <div class="content">
            <h2>Razer Basilisk Ultimate Hyperspeed Wireless Gaming Mouse<br></h2>
            <p>
                        
                  <strong>-25% Faster Than Competing Wireless Mice: The &nbsp;all-new, Razer HyperSpeed wireless technology &nbsp;brings together extreme low-latency and &nbsp;interference reduction for true wireless &nbsp;freedom.</strong><br>
              
                  <strong> -3x Faster Than Traditional Mechanical Switches: &nbsp;New Razer optical mouse switches uses light &nbsp;beam-based actuation, registering button &nbsp;presses &nbsp;at the speed of light for complete &nbsp;immersion and &nbsp;absolute control.</strong><br>
              
                  <strong>-Included Customizable Chroma Lighting and RGB &nbsp;Mouse Charging Dock. provides 5 hours of &nbsp;wireless playtime within 10 minutes of &nbsp;charging.</strong><br>
              
                  <strong>-11 Programmable Buttons: Allows for &nbsp;reconfiguration and assignment of complex macro &nbsp;functions through Razer Synapse 3.</strong><br>
              
                  <strong>-Up to 100 Hour Battery Life: An all-new, &nbsp;hyper-&nbsp;efficient sensor and wireless technology &nbsp;allows &nbsp;for extended gaming.</strong><br>
             
            </p>
            <br>
        
            
            
                
                <br>
                <br>
            <h3 class="price">$169.99</h3>
             <button class="buy">Buy Now</button>
        
        </div> 
        </form>
     </div>
    
    </div>


</body>
';
}
if($params['value']==4)
{
    echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct4.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="newiphone.png" height="580px" width="550px">
    </div>
    <div class="details">
      <form action="buy.php?value=4" method="post">
        <div class="content">
            <h2>Apple iPhone 11 Pro<br></h2>
            <p>
                        
                  <strong>-5.8-inch Super Retina XDR OLED display.</strong><br>
              
                  <strong> -Water and dust resistant (4 meters for up &nbsp;to 30 minutes, IP68).</strong><br>
              
                  <strong>-Triple-camera system with 12MP Ultra Wide, &nbsp;Wide, and Telephoto cameras; Night mode, &nbsp;Portrait mode, and 4K video up to 60fps.</strong><br>
              
                  <strong>-12MP TrueDepth front camera with Portrait &nbsp;mode, 4K video, and Slo-Mo.</strong><br>
              
                  <strong>-Face ID for secure authentication and Apple &nbsp;Pay.</strong><br>
             
                  <strong>-A13 Bionic chip with third-generation &nbsp;Neural Engine.</strong><br>
                
                  <strong>-Fast charge with 18W adapter included.</strong><br>
                
                  <strong>-Wireless charging.</strong><br>
            </p>
            <br>
        
            <h3 class="size">Configuration</h3><br>
               
                   <h4 class="bt1">64GB</h4>
                   <h4 class="bt2">128GB</h4>
                   <h4 class="bt3">256GB</h4>
                   <br>
        
            <h3 class="color">Colors</h3><br><br>
                   <ul>
            
                        <li class="colors1"></li>
                        <li class="colors2"></li>
                        <li class="colors3"></li>
            
                   </ul>
            
                
                <br>
                <br>
            <h3 class="price">$699-$849</h3>
             <button class="buy">Buy Now</button>
        
        </div>  
        </form>
     </div>
    
    </div>


</body>';
}
if($params['value']==5)
{
    echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct5.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="newsherpa.png" height="480px" width="420px">
    </div>
    <div class="details">
      <form action="buy.php?value=5" method="post">
        <div class="content">
            <h2>Mens Big and Tall Collinston Brushed Fleece Sherpa Lined Sweatshirt<br></h2>
            <p>
                        
                  <strong>-10.5-ounce, 50% cotton/50% polyester blend (Slate Heather: 55% cotton/45% polyester).</strong><br>
              
                  <strong> -Brushed fleece for softness.</strong><br>
              
                  <strong>-Sherpa lined.</strong><br>
              
                  <strong>-Relaxed fit.</strong><br>
              
            </p>
            <br>

                   <br>
        
            <h3 class="color">Colors</h3><br><br>
                   <ul>
            
                        <li class="colors1"></li>
                        <li class="colors2"></li>
                        <li class="colors3"></li>
            
                   </ul>
            
                
                <br>
                <br>
            <h3 class="price">$64.66-$105.99</h3>
             <button class="buy">Buy Now</button>
        
        </div>
        </form>
     </div>
    
    </div>


</body>
';
}
if($params['value']==6)
{
    echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct6.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="newwomensherpa.png" height="460px" width="380px">
    </div>
    <div class="details">
      <form action="buy.php?value=6" method="post">
        <div class="content">
            <h2>Women Cashmere Knitted Turtleneck Long Sleeve Winter Wool Pullover Sweater Dress<br></h2>
            <p>
                        
                  <strong>-Liny Xin cashmere is made from the fine, &nbsp;downy undercoat of Kashmir goats known for &nbsp;their longer, loftier, softer fibers. This &nbsp;produces the highest-quality fibers, which &nbsp;are then washed, carded, and spun into &nbsp;sumptuous two-ply yarns twisted to resist &nbsp;pilling without compromising strength.</strong><br>
              
                  <strong> -Lightweight, super soft, incredibly smooth &nbsp;and comfortable, amazing wearing experience.</strong><br>
              
                  <strong>-Threaded neck and cuffs, slim looking style, &nbsp;a must-have item for women in fall and &nbsp;winter &nbsp;days.</strong><br>
              
                  <strong>-Around the house or around the town, our &nbsp;cashmere sweater is the perfect cozy &nbsp;companion.</strong><br>
               
                  <strong>-Hand Wash Cold, Lay Flat to Dry or Dry &nbsp;Clean, Do Not Twist or Wring.</strong><br>
              
            </p>
            <br>

                   <br>
        
            <h3 class="size">Sizes</h3><br>
               
                   <h4 class="bt1">M</h4>
                   <h4 class="bt2">L</h4>
                   <h4 class="bt3">XL</h4>
                   <br>
            
                
                <br>
                <br>
            <h3 class="price">$44.93-$57.38</h3>
             <button class="buy">Buy Now</button>
        
        </div>  
        </form>
     </div>
    
    </div>


</body>
';
}
if($params['value']==7)
{
    echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct7.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="newoled.png" height="400px" width="480px">
    </div>
    <div class="details">
      <form action="buy.php?value=7" method="post">
        <div class="content">
            <h2>LG C9 Class 4K Smart OLED TV w/ AI ThinQ<br></h2>
            <p>
                        
                  <strong>-G OLED65C9PUA 65" C9 4K HDR Smart OLED TV w/ &nbsp;AI ThinQ (2019 Model).</strong><br>
              
                  <strong> -Once youve watched your favorites on LG &nbsp;OLED TV, every other flat screen just looks &nbsp;flat. Movies, shows, sports, gaming - OLED &nbsp;displays it all in a new light, bringing out &nbsp;richness in all colors and uncovering what &nbsp;was once hidden in crisp, clear detail.</strong><br>
              
                  <strong>-INCLUDED IN THE BOX: OLED65C9PUA 65" C9 4K &nbsp;HDR Smart OLED TV | Magic Remote | Remote &nbsp;Control Battery | Power Cable | Quick Start &nbsp;Guide | E-Manual.</strong><br>
              
                  <strong>-BUNDLE INCLUDES: LG OLED65C9PUA 65 C9 4K &nbsp;HDR Smart OLED TV w/ AI ThinQ (2019 Model) | &nbsp;60W Soundbar with Subwoofer | Wall Mount Kit &nbsp;| 6 Foot HDMI Cable | LCD Screen Cleaning &nbsp;Kit | USA Warranty | Deco Gear 2.4 GHz Mini &nbsp;Wireless Keyboard w/ Touchpad Mouse | Micro- &nbsp;USB charging cable | Lithium-ion battery | &nbsp;USB Connector | Surge Pro outlet | Full USA &nbsp;Warranty.</strong><br>
               
                <br>
              
            </p>
            <br>

            <br>
        
            <h3 class="size">Sizes</h3><br>
               
                   <h4 class="bt1">55</h4>
                   <h4 class="bt2">65</h4>
                   <h4 class="bt3">77</h4>
                   <br>
            
                
                <br>
                <br>
            <h3 class="price">$1,500-$4,500</h3>
             <button class="buy">Buy Now</button>
        
        </div> 
        </form>
     </div>
    
    </div>


</body>
';

}
if($params['value']==8)
{
    echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct8.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="newmacbook.png" height="350px" width="500px">
    </div>
    <div class="details">
      <form action="buy.php?value=8" method="post">
        <div class="content">
            <h2>MacBook Pro (16-inch, 2019)<br></h2>
            <p>
                        
                  <strong>-Ninth-generation 6-Core Intel Core i7 &nbsp;Processor.</strong><br>
              
                  <strong> -Stunning 16-inch Retina Display with True &nbsp;Tone technology.</strong><br>
              
                  <strong>-Touch Bar and Touch ID.</strong><br>
              
                  <strong>-Amd Radeon Pro 5300M Graphics with GDDR6 &nbsp;memory.</strong><br>
                
                 <strong>-Ultrafast SSD.</strong><br>
                
                 <strong>-Intel UHD Graphics 630.</strong><br>
                
                 <strong>-Six-speaker system with force-cancelling &nbsp;woofers.</strong><br>
                
                 <strong>-Four Thunderbolt 3 (USB-C) ports.</strong><br>
                
                 <strong>-Up to 11 hours of battery life.</strong><br>
               
                <br>
              
            </p>
            <br>

            <br>
        
           <h3 class="color">Colors</h3><br><br>
                   <ul>
            
                        <li class="colors1"></li>
                        <li class="colors2"></li>
                        <li class="colors3"></li>
            
                   </ul>
                <br>
            <h3 class="price">$1,500-$4,500</h3>
             <button class="buy">Buy Now</button>
        
        </div>
        </form>
     </div>
    
    </div>


</body>
';
}
if($params['value']==9)
{
    echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct9.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="newfridge.png" height="450px" width="290px">
    </div>
    <div class="details">
      <form action="buy.php?value=9" method="post">
        <div class="content">
            <h2>W Series Side by Side 603 L Refrigerator Sterling Steel<br></h2>
            <p>
                        
                  <strong>-Frost-free side-by-side refrigerator; 603 &nbsp;litres capacity.</strong><br>
              
                  <strong> -Warranty: 1 year on product, 10 years on &nbsp;compressor.</strong><br>
              
                  <strong>-Adaptive intelligence technology with &nbsp;advanced multi sensor system.</strong><br>
              
                  <strong>-Intellisense inverter technology.</strong><br>
                
                 <strong>-6th sense cloud fresh for 99.99% odor &nbsp;removal.</strong><br>
                
                 <strong>-Magic shelf.</strong><br>
                
                 <strong>-Feather touch panel.</strong><br>
               
                <br>
              
            </p>
            <br>

            <br>
        
            <h3 class="price">$1,300</h3>
             <button class="buy">Buy Now</button>
        
        </div>  
        </form>
     </div>
    
    </div>


</body>
';
}
if($params['value']==10)
{
    echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct10.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="newjogger.png" height="450px" width="380px">
    </div>
    <div class="details">
      <form action="buy.php?value=10" method="post">
        <div class="content">
            <h2>THE ARCHER Mens Green Jogger<br></h2>
            <p>
                        
                  <strong>-Fabric 100% cotton combed.</strong><br>
              
                  <strong> -Comfort feel.</strong><br>
              
                  <strong>-Jogger look.</strong><br>
               
                <br>
              
            </p>
            <br>
               <h3 class="color">Colors</h3><br><br>
                   <ul>
            
                        <li class="colors1"></li>
                        <li class="colors2"></li>
                        
            
                   </ul>
            <br>
        
            <h3 class="price">$1,300</h3>
             <button class="buy">Buy Now</button>
        
        </div>  
        </form>
     </div>
    
    </div>


</body>
';
}
if($params['value']==11)
{
    echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct11.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="vivonew.png" height="520px" width="300px">
    </div>
    <div class="details">
      <form action="buy.php?value=11" method="post">
        <div class="content">
            <h2>Vivo V15 Pro (Ruby Red, 6GB RAM, 128GB Storage)<br></h2>
            <p>
                        
                  <strong>-Display:  16.23cm(6.39) FHD+ Ultra Fullview   &nbsp;Super AMOLED display with 19.5:9 aspect  &nbsp;ratio   and 91.64%Screen to body ratio;In- &nbsp;display Fingerprint Scanning ; Dual- &nbsp;EngineFast Charging ; Bluetooth: 5.0V.</strong><br>
              
                  <strong> -Pop-Up Selfie Camera: 32MP Pop-Up Selfie  &nbsp;Camera with AI Face Beauty, AI portrait  &nbsp;composition,Bokeh Mode, AI body Shaping,  &nbsp;Portrait light effect, AR sticker, Video  &nbsp;face beauty, Gender detection.</strong><br>
              
                  <strong>-Triple Rear Camera: 48 Million Quad Pixel  &nbsp;Sensor (12Million Effective Pixel)+8MP+5MP  &nbsp;with AI Super Wide Angle, AI Face Beauty, AI  &nbsp;portrait composition,Bokeh Mode, AI body  &nbsp;Shaping, Portrait light effect, AR sticker,  &nbsp;Video face beauty, Gender detection.</strong><br>
                
                <strong>-Powerful Performance: Qualcomm Snapdragon  &nbsp;675AIE with 6GB RAM and 128GB ROM which is  &nbsp;expandable up to 256GB.</strong><br>
                
                <strong>-In-Display Fingerprint Sensor: Refined over  &nbsp;Five Generations, the In-Display Fingerprint  &nbsp;Scanning offers futuristic security with  &nbsp;style.</strong><br>
                
               
                <br>
              
            </p>
            <br>
               
            <br>
        
            <h3 class="price">$285</h3>
             <button class="buy">Buy Now</button>
        
        </div>  
        </form>
     </div>
    
    </div>


</body>
';
}
if($params['value']==12)
{
    echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct12.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="newashing.png" height="420px" width="370px">
    </div>
    <div class="details">
      <form action="buy.php?value=12" method="post">
        <div class="content">
            <h2>Zanussi Lindo 300 ZWF01483W<br></h2>
            <p>
                        
                  <strong>-Fully-automatic front-loading washing &nbsp;machine.</strong><br>
              
                  <strong> -Capacity 6.5 kg: Suitable for families with &nbsp;3 to 4 members.</strong><br>
              
                  <strong>-Warranty: 3 years on product.</strong><br>
                
                <strong>-1000 RPM: Higher the spin speed, faster the &nbsp;drying time.</strong><br>
                
                <strong>-Special features: Diamond drum, White body &nbsp;plus chrome door, touch panel.</strong><br>
                
               
                <br>
              
            </p>
            <br>
               
            <br>
        
            <h3 class="price">$377</h3>
             <button class="buy">Buy Now</button>
        
        </div>  
        </form>
     </div>
    
    </div>


</body>
';
}
if($params['value']==13)
{
    echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct13.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="newcorse.png" height="520px" width="450px">
    </div>
    <div class="details">
      
        <div class="content">
            <h2>CORSICA(Women White Solid Mid-Top Heeled Boots)<br></h2>
            <p>
                        
                  <strong>- pair of white pointed toe heeled boots, has mid-top styling, closed back detail.</strong><br>
              
                  <strong> -Synthetic upper.</strong><br>
              
                  <strong>-Cushioned footbed.</strong><br>
                
                <strong>-extured and patterned outsole, has a block heel.</strong><br>
                
                <strong>-Heel height: 7.62 cm (3 inches).</strong><br>
                
               
                <br>
              
            </p>
            <br>
               
            <br>
        
            <h3 class="price">$28</h3>
             <button class="buy">Buy Now</button>
        
        </div>  
     </div>
    
    </div>


</body>';
}    
if($params['value']==14)
{
    echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct14.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="newnivia.png" height="520px" width="450px">
    </div>
    <div class="details">
      
        <div class="content">
            <h2>Nivia Storm Rubber Football<br></h2>
            <p>
                        
                  <strong>-Offering optimum response and feel.</strong><br>
              
                  <strong> -Rubber outer shell. Rubber moulded.</strong><br>
              
                  <strong>-Ensures good performance.</strong><br>
                
                <strong>-Rubberized Stitched. Suitable for Hard &nbsp;Ground without Grass, Wet and Grassy Ground, &nbsp;Artificial Turf.</strong><br>
                
                <strong>-The ball is meant for very light play and &nbsp;not for playing on rough ground.</strong><br>
                
               
                <br>
              
            </p>
            <br>
               
            <br>
        
            <h3 class="price">$12</h3>
             <button class="buy">Buy Now</button>
        
        </div>  
     </div>
    
    </div>


</body>
';
}
if($params['value']==15)
{
    echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct15.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="RESIST-Black-Round-Sunglasses-Rockstar-SDL449429166-3-54bce-removebg-preview.png" height="570px" width="490px">
    </div>
    <div class="details">
      
        <div class="content">
            <h2>RESIST - Mens Black Round Sunglasses<br></h2>
            <p>
                        
                  <strong>-Frame Colour:Golden.</strong><br>
              
                  <strong> -Carrying Case:Pouch.</strong><br>
              
                  <strong>-UV Protection Level:UV100.</strong><br>
                
                <strong>-Frame Material:Metal.</strong><br>
                
                <strong>-Usage:Day.</strong><br>
                
               
                <br>
              
            </p>
            <br>
               
            <br>
        
            <h3 class="price">$11</h3>
             <button class="buy">Buy Now</button>
        
        </div>  
     </div>
    
    </div>


</body>
';
}
if($params['value']==16)
{
    echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct16.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="echo.png" height="570px" width="550px">
    </div>
    <div class="details">
      <form action="buy.php?value=16" method="post">
        <div class="content">
            <h2>Amazon Echo (3rd Gen)<br></h2>
            <p>
                        
                  <strong>-Premium speaker powered by Dolby for 360° &nbsp;audio with crisp vocals and dynamic bass &nbsp;response.</strong><br>
              
                  <strong> -Just ask Alexa for music, news, trivias, &nbsp;scores, weather, alarms , kids rhymes and &nbsp;stories.</strong><br>
              
                  <strong>-Alexa is always ready to help in both &nbsp;English and Hindi.</strong><br>
                
                <strong>-Stream millions of songs from Amazon Prime &nbsp;Music, JioSaavn, Gaana, Apple music.</strong><br>
                
                <strong>-Access songs in Hindi, English, Telugu, &nbsp;Tamil, Punjabi, Marathi, Bengali, Bhojpuri, &nbsp;Kannada and more.</strong><br>
                
                 <strong>-Voice control smart lights or your existing &nbsp;AC, geyser, water pump, air purifier using &nbsp;smart plug (smart home accessories sold &nbsp;separately).</strong><br>
               
                  <strong>-With 4 microphones, Alexa can hear you &nbsp;across the room.</strong><br>
                <br>
              
            </p>
            <br>
                <h3 class="color">Colors</h3><br><br>
                   <ul>
            
                        <li class="colors1"></li>
                        <li class="colors2"></li>
                        
            
                   </ul>
            <br>
            <br>
        
            <h3 class="price">$125</h3>
             <button class="buy">Buy Now</button>
        
        </div>  
        <form action="buy.php?value=10" method="post">
     </div>
    
    </div>


</body>';
}
if($params['value']==17)
{
    echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct17.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="newac.png" height="210px" width="430px">
    </div>
    <div class="details">
      
        <div class="content">
            <h2>O GENERAL ASGA18FTTA 1.5 TON 5 STAR SPLIT AC<br></h2>
            <p>
                        
                  <strong>-1.5 Ton : Great for medium sized rooms (110- &nbsp;150 sq ft).</strong><br>
              
                  <strong> -5 Star BEE Rating 2017 : For energy savings &nbsp;upto 25% (compared to Non-Inverter 1 Star).</strong><br>
              
                  <strong>-Auto Restart: No need to manually reset the &nbsp;settings post power-cut.</strong><br>
                
                <strong>-Sleep Mode: Auto-adjusts the temperature to &nbsp;ensure comfort during your sleep.</strong><br>
                
                <strong>-The appliance has an Anti-Bacteria Filter to &nbsp;keep harmful bacteria out.</strong><br>
                
                 <strong>-The Dual protection filter gives you refined &nbsp;air.</strong><br>
               
                  <strong>-The appliance has quite a few useful comfort &nbsp;controls such as indoor/outdoor unit quit &nbsp;operation, quiet operation sleep timer, a &nbsp;wireless remote controller, a program timer &nbsp;and the auto changeover option.</strong><br>
                <br>
              
            </p>
            <br>
               
            <br>
        
            <h3 class="price">$819.99</h3>
             <button class="buy">Buy Now</button>
        
        </div>  
     </div>
    
    </div>


</body>
';
}
if($params['value']==18)
{
    echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct18.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="newwomen.png" height="510px" width="430px">
    </div>
    <div class="details">
      <form action="buy.php?value=18" method="post">
        <div class="content">
            <h2>Women Sea Green Solid Longline Wool Trench Coat With Fabric Belt<br></h2>
            <p>
                        
                  <strong>-Closure:- Button.</strong><br>
              
                  <strong> -Pattern:- Solid.</strong><br>
              
                  <strong>-Sleeve Length:- Long Sleeves.</strong><br>
                
                <strong>-Collar:- Notched Lapel.</strong><br>
                
                <strong>-Wash Care:- Dry Clean.</strong><br>
                
                 <strong>-Length:- Longline.</strong><br>
               
                  <strong>-Fabric:- Wool.</strong><br>
                <br>
              
            </p>
            <br>
                <h3 class="size">Sizes</h3><br>
               
                   <h4 class="bt1">L</h4>
                   <h4 class="bt2">XL</h4>
                   <h4 class="bt3">XXL</h4>
                   <br>
        
            <h3 class="color">Colors</h3><br><br>
                   <ul>
            
                        <li class="colors1"></li>
                        <li class="colors2"></li>
            
                   </ul>
            
                
            <br>
        
            <h3 class="price">$42.99</h3>
             <button class="buy">Buy Now</button>
        
        </div>  
        </form>
     </div>
    
    </div>


</body>
';
}
if($params['value']==19)
{
    echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct19.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="newaqua.png" height="600px" width="560px">
    </div>
    <div class="details">
      
        <div class="content">
            <h2>Eureka Forbes Aquasure from Aquaguard Delight 7-litres Table Top/Wall Mountable RO+UV+MTDS (White) Water Purifier<br></h2>
            <p>
                        
                  <strong>-RO+UV purification: Sediment Filter, Chemi Block, RO Membrane, UV Disinfection Chamber, and Post Carbon filter.</strong><br>
              
                  <strong> -TDS controller for manually adjusting the taste and TDS level of purified water.</strong><br>
              
                  <strong>-Suitable for purification of tap/municipal water, or borewell/groundwater.</strong><br>
                
                <strong>-7 litres semi-transparent storage tank.</strong><br>
                
                <strong>-1-year warranty.</strong><br>
                
                 <strong>-Compact and attractive design.</strong><br>
               
                  <strong>-Semi-transparent storage tank.</strong><br>
                <br>
              
            </p>
            <br>
               
            <br>
        
            <h3 class="price">$42.99</h3>
             <button class="buy">Buy Now</button>
        
        </div>  
     </div>
    
    </div>


</body>';
}
if($params['value']==20)
{
    echo '<!doctype html>

<head>

    <title>hello</title>
    <link rel="stylesheet" href=newproduct20.css>
   
</head>
<body>

  <div class="container">
    <div class="imgbx">
      <img src="newshoe.png" height="600px" width="500px">
    </div>
    <div class="details">
      <form action="buy.php?value=20" method="post">
        <div class="content">
            <h2>Nike Mens Hypervenom Phantom II NJR FG Football Boots<br></h2>
            <p>
                        
                  <strong>-Closure: Lace-Up.</strong><br>
              
                  <strong> -Material Type: Synthetic.</strong><br>
              
                  <strong>-Lifestyle: Sports.</strong><br>
                
                <strong>-Care Instructions: Allow your pair of shoes &nbsp;to air and de-odorize at a regular basis, &nbsp;this also helps them retain their natural &nbsp;shape; use shoe bags to prevent any stains &nbsp;or &nbsp;mildew; dust any dry dirt from the &nbsp;surface &nbsp;using a clean cloth, do not use &nbsp;polish or &nbsp;shiner.</strong><br>
                
                
                <br>
              
            </p>
            <br>
               <h3 class="size">Sizes</h3><br>
               
                   <h4 class="bt1">9</h4>
                   <h4 class="bt2">10</h4>
                   <h4 class="bt3">11</h4>
                   <br>
            <br>
        
            <h3 class="price">$155.99</h3>
             <button class="buy">Buy Now</button>
        
        </div> 
        </form>
     </div>
    
    </div>


</body>';
}
?>
