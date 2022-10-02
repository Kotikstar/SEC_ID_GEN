<?php
function generateRandomString($length = 4) {

    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $charactersLength = strlen($characters);

    $randomString = '';


    for ($i = 0; $i < $length; $i++) {

        $randomString .= $characters[rand(0, $charactersLength - 1)];

    }

    return $randomString;

}
echo generateRandomString()."-".rand(0,21474836). "\n";