<pre>
    <?php
    $number = 1729;

    function joyful_number($number){
        $str = (string)$number;

        $a = str_split($str);
        $sum = array_sum($a);
    
        $rev = (string)$sum;
        $rev = strrev($rev);
        
        $product = $rev * $sum;
    
        if($product == $number){
            return true;
        }else{
            return false;
        }
    }

    ?>
</pre>