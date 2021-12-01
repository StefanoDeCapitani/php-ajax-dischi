<?php
function displayCard($disk){

$poster_src = $disk["poster"];
$title = $disk["title"];
$author = $disk["author"];
$year = $disk["year"];
 
?>

<div class="card">
    <div class="card__image-container">
      <div class="ratio">
        <div class="card__image-content">
          <img class="card__poster" src="<?php echo $poster_src?>" alt="" />
        </div>
      </div>
    </div>
    <h3 class="card__title"><?php echo $title?></h3>
    <div class="card__specs">
      <p class="card__author"><?php echo $author?></p>
      <p class="card__year"><?php echo $year?></p>
    </div>
</div>

<?php
}
?>