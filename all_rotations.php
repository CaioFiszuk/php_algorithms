<pre>
    <?php
    $arr = ["TzYxlgfnhf", "yqVAuoLjMLy", "BhRXjYA", "YABhRXj", "hRXjYAB", "jYABhRX", "XjYABhR", "ABhRXjY"];

    $s = "XjYABhR";

    function all_rotations($s, $arr){
    $a = [];
    $verify = [];
    array_push($a, $s);

    for($i=1; $i<strlen($s); $i++){
        $a[] = substr($s, $i) . substr($s, 0, $i);
    }


   for($i=0; $i<count($a); $i++){
       if(!in_array($a[$i], $arr)){
           $verify = 'x';
       }
   }

   if(empty($verify)){
       return true;
   }else{
       return false;
   }
    }
    ?>
</pre>