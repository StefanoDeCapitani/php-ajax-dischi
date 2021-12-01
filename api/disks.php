<?php
include "../data/data.php";

$genre_filter =  isset($_GET["genre"]) ? $_GET["genre"] : "";

$filtered_disks = [];

if($genre_filter){
    foreach($disks_array as $disk){
        if(strtolower($disk["genre"]) === strtolower($genre_filter)){
            $filtered_disks[] = $disk;
        }
    }
} else {
    $filtered_disks = $disks_array;
}


echo json_encode($filtered_disks);
