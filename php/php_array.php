<?php

// SORTING on ASSOC array

// you can use array_column() instead of the above code
$priority_arr  = array_column($arr, 'priority');
$designation_order_arr = array_column($arr, 'designation_order');

// Sort the data with volume descending, edition ascending
// Add $data as the last parameter, to sort by the common key
array_multisort($priority_arr, SORT_ASC, $designation_order_arr, SORT_ASC, $arr);
