<?php
 session_start();

?>

<!DOCTYPE html>
<head>

  <title>Website</title>
    <link rel="stylesheet" href="viewcart2.css">
</head>

<body>


    
    
<header>
     <h2 class="heading">Your Cart</h2>
 
     <table class="table">
    
        <thread>
         
            <tr>
            
                <th class="col1">Sno</th>
                <th class="col2">Name</th>
                <th class="col3">Price($)</th>
                <th class="col4">Quantity</th>
                <th class="col5">Buy Item</th>
                <th class="col6">Delete</th>
            </tr>
         
         </thread>
        <tbody>
         
             
            <?php
            
                $sno=1;
                foreach($_SESSION as $products)
                {
                    $p=0;
                    $q=0;
                    echo "<tr>";
                    echo "<form action='editcart.php' method='post'>";
                      echo "<td class='sno'>".($sno++)."</td>";
                      foreach($products as $key => $value)
                      {
                          if($key==2)
                          {
                              echo "<td class='qty'>".$value."</td>";
                              $q=$value;
                          }
                          else if($key==1)
                          {
                              if(is_array($value))
                              {
                                  echo "<td class='price'>".$value[0]."-".$value[1]."</td>";
                              }
                              else
                              {
                                 echo "<td class='price'>".$value."</td>"; 
                              }
                               $p=$value;
                          }
                          else if($key==0)
                          {
                              echo "<td class='name'>".$value."</td>";
                          }
                      }
                    echo "<td class='buy'><a href='buy.php'>buy</a></td>";
                    echo "<td><input type='submit' name='event' value='delete' class='deleteitem'></td>";
                    echo "</form>";
                    echo "</tr>";
                }
            
            ?>
         
         </tbody>
    
    </table>

</header> 