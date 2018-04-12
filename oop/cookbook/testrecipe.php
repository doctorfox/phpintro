<?php
include './classes/recipe.php';

$myRecipe = new Recipe();
$yourRecipe = new Recipe();

//$myRecipe->setTitle("how to prepare oha soup");
//$myRecipe->setInstructions(
//        array(
//                "Place a pot on the heat",
//                "Add 1/2 cup of red palm oil",
//                "Wait about 1 minute for oil to heat up",
//                "Add fresh ground egusi"
//        )
//);

//$myRecipe->setIngredients('Eggs', 2);
//$myRecipe->setIngredients('Ground egusi', 2, 'cup');
//
//$myRecipe->displayRecipe();
echo makePlural(2, 'yard');
//$yourRecipe = new Recipe('How to make sauerkraut', 'Nebechi Chukwudum', array(
//    'Clean one medium size cabbage',
//    'Slice it into 4 quarters',
//    'Remove the core from the cabbage',
//    'Slice the quarters into small pieces'
//));
//$yourRecipe->displayRecipe();
//$yourRecipe->setCategory('Beverages');
//echo $yourRecipe->getCategory();
//$yourRecipe->setCategory('Swallow');
//echo '<br />';
//echo $yourRecipe->getCategory();
//$myRecipe->displayRecipe();

//$myRecipe->category = 'Soups';
//echo $myRecipe->category;

//$myRecipe->setTitle('but what if we try this will it work');
//echo $myRecipe->getTitle();
//$yourRecipe->setTitle($title);
//echo $yourRecipe->getTitle();