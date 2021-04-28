<?php

$string=$_POST['string'];


if($string=="woodland shoes" or $string=="mens casual shoes" or $string=="mens partywear shoes" or $string=="black shoes" or $string=="green shoes" or $string=="mens black boots" or $string=="mens green boots" or $string=="mens boots" or $string=="mens green shoes"  or $string=="woodland" or strpos($string, "mens boots") !== false  or strpos($string, "men's boots") !== false)
{
    header('location:product.php?value=1');
}

else if($string=="watch" or $string=="g-shock" or $string=="casio g-shock" or $string=="casio gshock" or $string=="casio g shock" or $string=="gshock" or strpos($string, "watch") !== false or strpos($string, "casio") !== false or strpos($string, "gshock") !== false or strpos($string, "gshock watch") !== false or strpos($string, "g shock watch") !== false or strpos($string, "waterproof watch") !== false or strpos($string, "g shock") !== false or strpos($string, "g-shock") !== false)
{
    header('location:product.php?value=2');
}

else if( $string=="gaming mouse" or $string=="razor" or $string=="basilisk" or $string=="razor basilisk" or $string=="razor basilisk mouse" or strpos($string, "razor") !== false or strpos($string, "basilisk") !== false or strpos($string, "gaming") !== false or strpos($string, "mouse") !== false)
{
    header('location:product.php?value=3');
}

else if($string=="iphone" or $string=="apple iphone" or $string=="iphone 11" or  $string=="iphone 11 pro max" or $string=="latest iphone" or $string=="iphone 11 pro" or strpos($string, "iphone") !== false or strpos($string, "apple iphone") !== false or strpos($string, "iphone 11") !== false)
{
    header('location:product.php?value=4');
}

else if($string=="mens sweatshirt" or $string=="men's sweatshirt" or strpos($string, "collinsten") !== false or strpos($string, "sherpa") !== false or strpos($string, "mens shirt") !== false or strpos($string,"blue jacket")!==false)
{
    header('location:product.php?value=5');
}

else if($string=="womens pullover" or $string=="women's pullover" or strpos($string, "cashmere") !== false or strpos($string, "liny") !== false or strpos($string, "xin") !== false or strpos($string, "sweater") !== false)
{
    header('location:product.php?value=6');
}

else if(strpos($string, "lg tv") !== false or strpos($string, "4k tv") !== false or strpos($string, "oled") !== false or strpos($string, "lg oled") !== false)
{
    header('location:product.php?value=7');
}

else if(strpos($string, "macbook") !== false or strpos($string, "laptop") !== false or strpos($string, "apple laptop") !== false)
{
    header('location:product.php?value=8');
}

else if(strpos($string, "refrigerator") !== false or strpos($string, "whirlpool") !== false or strpos($string, "whirlpool fridge") !== false or strpos($string, "w series refrigerator") !== false or strpos($string, "600L refrigerator") !== false or strpos($string, "whirlpool refrigerator") !== false)
{
    header('location:product.php?value=9');
}

else if(strpos($string, "mens jogger") !== false or strpos($string, "jogger") !== false or strpos($string, "green jogger") !== false or strpos($string, "archer") !== false or strpos($string, "jogging pants") !== false)
{
    header('location:product.php?value=10');
}

else if(strpos($string, "vivo") !== false or strpos($string, "vivo mobile") !== false or strpos($string, "v15") !== false or strpos($string, "v15 pro") !== false)
{
    header('location:product.php?value=11');
}

else if(strpos($string, "zanussi") !== false or strpos($string, "300L washing machine") !== false or strpos($string, "washing machine") !== false or strpos($string, "lindo") !== false)
{
    header('location:product.php?value=12');
}

else if(strpos($string, "corsica") !== false or strpos($string, "high heels") !== false or strpos($string, "womens boots") !== false or strpos($string, "women's boots") !== false or strpos($string, "zanussi") !== false)
{
    header('location:product.php?value=13');
}

else if(strpos($string, "football") !== false or strpos($string, "soccerball") !== false or strpos($string, "nivia football") !== false or strpos($string, "storm football") !== false or strpos($string, "storm") !== false)
{
    header('location:product.php?value=14');
}

else if(strpos($string, "mens sunglasses") !== false or strpos($string, "men's sunglasses") !== false or strpos($string, "mens goggles") !== false or strpos($string, "men's goggles") !== false or strpos($string, "resist") !== false or strpos($string, "glasses") !== false or strpos($string, "goggles") !== false or strpos($string, "goggle") !== false)
{
    header('location:product.php?value=15');
}

else if(strpos($string, "amazon echo") !== false or strpos($string, "echo") !== false or strpos($string, "amazon") !== false)
{
    header('location:product.php?value=16');
}

else if(strpos($string, "general AC") !== false or strpos($string, "air conditioner") !== false or strpos($string, "AC") !== false or strpos($string, "1.5 ton AC") !== false or strpos($string, "general ac") !== false)
{
    header('location:product.php?value=17');
}

else if(strpos($string, "athena") !== false or strpos($string, "women overcoat") !== false or strpos($string, "women trench coat") !== false or strpos($string, "women's overcoat") !== false)
{
    header('location:product.php?value=18');
}

else if(strpos($string, "aquaguard") !== false or strpos($string, "aquasure") !== false or strpos($string, "Aquasure") !== false or strpos($string, "7 litres aquaguard") !== false or strpos($string, "filter") !== false or strpos($string, "water purifier") !== false)
{
    header('location:product.php?value=19');
}

else if(strpos($string, "football boots") !== false or strpos($string, "soccer boots") !== false or strpos($string, "football shoes") !== false or strpos($string, "soccer shoes") !== false or strpos($string, "nike shoes") !== false or strpos($string, "nike hypervenom") !== false or strpos($string, "hypervenom") !== false)
{
    header('location:product.php?value=20');
}

else if($string=="footwear" or $string=="shoes" or  $string=="boots" or $string=="Footwear" or $string=="Shoes" or  $string=="Boots" or $string=="Shoe" or $string=="shoe" or $string=="boot" or $string=="Boot")
{
    header('location:boots.php');
}

else if($string=="sportswear" or $string=="Sportswear" or $string=="Sports" or $string=="sports" or $string=="sport items" or $string=="Sports Items" or $string=="Sports items" or $string=="sportitem" or $string=="SprotsItems")
{
    header('location:sports.php');
}

else if($string=="smartphones" or $string=="smartphone" or $string=="mobiles" or $string=="mobile phones" or $string=="mobile phone" or $string=="mobilephone" or $string=="mobile-phone" or strpos($string, "phone") !== false or strpos($string, "phones") !== false or $string=="mobile") 
{
    header('location:mobile.php');
}
else 
{
    header('location:se3.php');
}

?>