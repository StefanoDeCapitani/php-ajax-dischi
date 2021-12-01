<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./components/template/head.php" ?>
</head>
<body>
    <?php include "./components/template/header.php" ?>

  <main class="main" id="app">
    <form @submit.prevent="getFilteredDisks()">
      <input type="text" v-model="inputFilter">
      <button>CERCA</button>
    </form>
    <div class="container">
        <div class="cards-grid">
            <div v-for="disk in disks" class="card">
                <div class="card__image-container">
                    <div class="ratio">
                        <div class="card__image-content">
                        <img class="card__poster" :src="disk.poster" alt="" />
                        </div>
                    </div>
                </div>
                <h3 class="card__title">{{disk.title}}</h3>
                <div class="card__specs">
                    <p class="card__author">{{disk.author}}</p>
                    <p class="card__year">{{disk.year}}</p>
                </div>
            </div>
        </div>
    </div>
  </main>

</body>
</html>