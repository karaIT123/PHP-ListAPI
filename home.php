<?php
    require_once 'partials/header.php';
?>

<div class="mt-5">
    <h1>Listes de nos API</h1>

    <div class="card bg-primary mb-3 text-white">
        <div class="card-header">
            Person
        </div>
        <div class="card-body">
            <h5 class="card-title">People presentation</h5>
            <p class="card-text">We will be able to see some important people</p>
            <a href="person.php" class="btn btn-primary text-danger">Go to Api</a>
        </div>
    </div>

    <div class="card bg-primary mb-3 text-white">
        <div class="card-header">
            Meteo
        </div>
        <div class="card-body">
            <h5 class="card-title">Get Meteo for world</h5>
            <p class="card-text">We will be able to get all meteo</p>
            <a href="#" class="btn btn-primary text-danger">Go to Api</a>
        </div>
    </div>

</div>

<?php
    require 'partials/footer.php';
?>

