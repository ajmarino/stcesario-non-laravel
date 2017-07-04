<?php


function pp($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}


function el($data, $label="Error Log") {
    error_log($label.' :'.print_r($data,1));
}