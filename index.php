<?php
    $url = explode( '/', $_SERVER['REQUEST_URI'] );
    echo var_dump( $url );
    echo "<br /> classe: " . $url[2];
    echo "<br /> método: " . $url[3];
    echo "<br /> parâmetro: " . $url[4];
?>