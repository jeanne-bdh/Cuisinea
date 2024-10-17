<?php

require_once('templates/header.php');
require_once('lib/recipe.php');

?>

<!-- CONTENU -->
<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="/assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="Logo Cuisinea" width="500" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Cuisinea - Recettes de cuisine</h1>
        <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi, a? Aperiam, blanditiis perferendis voluptates deleniti neque delectus veniam expedita magnam quae maiores maxime, atque ipsa sint enim quasi iure ducimus cumque impedit iste. Vitae iste alias, quaerat eos enim consequatur voluptatum repellat, nesciunt vel commodi, exercitationem itaque amet porro quisquam!</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="recettes.php" class="btn btn-primary btn-lg px-4 me-md-2">Voir nos recettes</a>
        </div>
    </div>
</div>

<div class="row">

    <?php foreach ($recipes as $key => $recipe) {
        include('templates/recipe_partial.php');
    } ?>

</div>

<?php
require_once('templates/footer.php');
?>