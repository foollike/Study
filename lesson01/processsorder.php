<!DOCTYPE html>
<html>
    <head>
        <title>Bob's auto parts - order Results</title>

        <?php

        $tireqty = $_REQUEST['tireqty'];
        $oilqty = $_REQUEST['oilqty'];
        $sparkqty = $_REQUEST['Sparkqty'];
        //$find = $_REQUEST['find'];
        $address = $_REQUEST['address'];
        $document_root = $_SERVER['DOCUMENT_ROOT'];
        
        /*
        $dirct = "$document_root/test/orders.txt";
        $content = "yes yes yes
        wowowowowow
        wowowowowow";

        @$fp = fopen($dirct,'w');
        
        fwrite($fp,$content);

        readfile($dirct);

        flock($fp, LOCK_UN);
        fclose($fp);
        unlink($dirct);*/

        for($i=1;$i<15;$i++)
        {       
            $range[$i] = $i;        
        }

        $value = current($range);
        while ($value){
           echo $value."<br />";
           $value = next($range);
        }

        /*echo $range[5]["fuck1"]."<br/>";
        
        foreach($range as $curent => $value)
        {
            foreach($value as $little)
            {
                echo "$curent ->  $little  <br/>";
            }            
        } 
        
        echo "<br />".count($range);*/

        ?>

    </head>
    <body>
        <h1>Bob's Auto Parts</h1>
        <h2>Order Results</h2>
        
        <?php
        
        try
        {
            echo '<p>Order processed.</p>';   
            echo date('G:i:s j F Y').'</p>';
            
            echo '<p>Your order is as follows: </p>';
            echo htmlspecialchars($tireqty).' tires<br />';
            echo htmlspecialchars($oilqty).' oilqty<br />';
            echo $sparkqty.' sparkqty<br />';
           
            define('TIREPRICE',100);
            define('OILPRICE', 10);
            define('SPARKPRICE',4);

            //$totalqty = 0;
            $totalqty = $tireqty + $oilqty + $sparkqty;
            echo "<p>Item ordered: ".$totalqty."<br />";
            $totalamount = 0.00;            

            $totalamount = $tireqty * TIREPRICE
                         + $oilqty * OILPRICE
                         + $sparkqty * SPARKPRICE;

            $a = 5;

            echo "subtotal: $".number_format($totalamount,2)."</p>";
                               
            $b = is_float($a);
            
            if($b)
            echo "the value is: true";
            else
            echo "the value is: false";

            echo '<br /> isset:'.isset($nother);

            echo "<br /> empty:".empty($aaaaa);
          
            echo "<br />".gettype(intval($a)); 
            

            /*switch ($find) {
                case 'a':
                    echo "<p>Regular customer.</p>";
                    break;
                case 'b':
                    echo "<p>Customer referred</p>";
                    break;
                case 'c':
                    echo "<p>c</p>";
                    break;
                case 'd':
                    echo "<p>d</p>";
                    break;

                default:
                    
                    break;
            }*/  
            
        }
        catch(Exception $e)
        {   
            echo $e->getMessage(),"\n";
        }        
        ?>
    </body>
</html>

