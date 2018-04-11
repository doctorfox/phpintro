<?php
include './classes/recipe.php';

$myRecipe = new Recipe();
$yourRecipe = new Recipe();

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

$myRecipe->setTitle('but what if we try this will it work');

echo $myRecipe->getTitle();
//$yourRecipe->setTitle($title);
//echo $yourRecipe->getTitle();