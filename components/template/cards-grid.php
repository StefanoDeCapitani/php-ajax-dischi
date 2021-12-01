<?php 

include __DIR__ . "/card.php";
include __DIR__ . "/../../data/data.php"; 

?>

<div class="cards-grid">
    <?php 
        foreach($disks_array as $disk){
            echo displayCard($disk);
        }
    ?>
 </div>