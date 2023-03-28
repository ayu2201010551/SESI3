<?php
    $mhs = array(
        array("jeni", "2201010221", "Denpasar"),
        array("angga", "2101010456", "Badung"),
        array("aymen", "2202020111", "Gianyar"),
        array("Ari", "2102030223", "Tabanan"),

    );
    header("Content-Type: application/json");
     echo json_encode($mhs);