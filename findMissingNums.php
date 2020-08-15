<?php
function not_present($num_list){
    //construct new array

    $new_arr = range($num_list[0], max($num_list));
    //use array_diff to find the missng elements
    return array_diff($new_arr, $num_list);
}

print_r(not_present(array(0,1,2,5,14,17,18,19,20)));
?>