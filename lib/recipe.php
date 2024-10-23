<?php

$recipes = [
    ['title' => 'Mousse au chocolat', 'description' => 'Mousse au chocolat facile et rapide à réaliser pour des desserts réussis garantis.', 'image' => '1-chocolate-au-mousse.jpg'],
    ['title' => 'Gratin dauphinois', 'description' => 'Gratin dauphinois traditionnel pour épater vos convives en hiver.', 'image' => '2-gratin-dauphinois.jpg'],
    ['title' => 'Salade de chèvre', 'description' => 'Salalde rapide et pleine de saveurs pour faire le plein de vitamines.', 'image' => '3-salade.jpg'],
];

function getRecipeById(PDO $pdo, int $id)
{
    $query = $pdo->prepare("SELECT * FROM recipes WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}

function getRecipeImage(string|null $image)
{
    if ($image === null) {
        return _ASSETS_IMG_PATH_ . 'recipe_default.jpg';
    } else {
        return _RECIPES_IMG_PATH_ . $image;
    }
}

function getRecipes(PDO $pdo, int $limit = null)
{
    $sql = 'SELECT * FROM recipes ORDER BY id DESC';

    if ($limit) {
        $sql .= ' LIMIT : limit';
    }

    $query = $pdo->prepare($sql);

    if ($limit) {
        $query->bindParam(':limit', $limit, PDO::PARAM_INT);
    }

    $query->execute();
    return $query->fetchAll();
}
