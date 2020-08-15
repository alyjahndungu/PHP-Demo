<?php
      $list = array("a","b","c","b","f","g","a","d");
      // search for duplicate elements
      for($i = 0; $i < count($list); $i++){
          for($j = $i + 1; $j < count($list); $j++){
            if($list[$i]==$list[$j]){
                print($list[$j]. "<br>");
            }
          }
      }
  
?>