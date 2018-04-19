<?php
include './classes/cookbook.php';

$cookbook = new Cookbook();
//$cookbook->displayRecipes();
//$cookbook->displayRecipesAlphabetically();
//$cookbook->displayRecipesWithWater();
Cookbook::listShopping($cookbook->getCombinedIngredients());