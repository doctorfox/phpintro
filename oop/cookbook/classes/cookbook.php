<?php 
include 'recipe.php';

class Cookbook {
    public $test;
    public $recipes = array();
    
    public function __construct() {
        $this->test = new SimpleXMLElement('<h1></h1>');
        $this->recipes[] = new Recipe(
                'How to make green tea',
                'Liana Colbert',
                array('Boil 1 litre of water in a teapot',
                    'Pour some water into a teacup',
                    'Drop 1 teabag into the hot water',
                    'Stir lightly and serve'),
                array(
                    array('item' => 'water', 'amount' => '1', 'measurement' => 'litre'),
                    array('item' => 'teabag', 'amount' => '1', 'measurement' => null)
                )
        );
        
        $this->recipes[] = new Recipe(
                'How to make ogogoro',
                'Kenshin Li',
                array('Boil 1 litre of water in a teapot',
                    'Pour some water into a teacup',
                    'Drop 1 teabag into the hot water',
                    'Stir lightly and serve'),
                array(
                    array('item' => 'palm wine', 'amount' => '1', 'measurement' => 'litre'),
                    array('item' => 'teabag', 'amount' => '1', 'measurement' => null)
                )
        );
        
        $this->recipes[] = new Recipe(
                'How to make black tea',
                'Rachael Wang',
                array('Boil 1 litre of water in a teapot',
                    'Pour some water into a teacup',
                    'Drop 1 teabag into the hot water',
                    'Stir lightly and serve'),
                array(
                    array('item' => 'Water', 'amount' => '1', 'measurement' => 'litre'),
                    array('item' => 'teabag', 'amount' => '1', 'measurement' => null)
                )
        );
    }
    
    public function old_displayRecipes() {
        //$this->recipe1->displayRecipe();
        $properties = get_object_vars($this);
        foreach($properties as $recipe){
            if(get_class($recipe) == 'Recipe'){
                $recipe->displayRecipe();
            }
        }
        //echo '<pre>';print_r($properties);
    }
    
    public function displayRecipes(){
        foreach($this->recipes as $recipe){
            $recipe->displayRecipe();
        }
    }
    
    public function displayRecipesAlphabetically(){
        //Method to display the recipes in alphabetical order of the titles
        //
        //Get each recipe's title
        //Save the titles and the index of the object in an array
        //Sort the array alphabetically
        
        $titles = array();
        foreach($this->recipes as $key => $recipe){
            $titles[$key] = $recipe->getTitle();
        }
        asort($titles);
        //echo '<pre>';print_r($titles);
        foreach($titles as $key => $value):
            //$this->recipes[$key]->displayRecipe();
            $recipe = $this->recipes[$key];
            $recipe->displayRecipe();
        endforeach;
    }
    
    public function displayRecipesWithWater(){
        //Display all recipes that contain water in their ingredients list
        //Steps
        //Go through each recipe's ingredients list
        //If the list contains water, display the recipe
        
        foreach($this->recipes as $recipe):
            $ingredients = $recipe->getIngredients();
            foreach($ingredients as $entry){
                $entry = array_map('strtolower', $entry);
                if(in_array('water', $entry)){
                    $recipe->displayRecipe();
                    break;
                }
            }
        endforeach;
    }
    
    public function getCombinedIngredients(){
        //Create an array containing all the ingredients in all the recipes uniquely
        //
        $ingredient_list = array();
        foreach($this->recipes as $recipe){
            $ingredients = $recipe->getIngredients();
            foreach($ingredients as $entry){
                $ingredient_list[strtolower($entry['item'])] = array($entry['amount'], $entry['measurement']);
            }
        }
        //pr($ingredient_list);
        return $ingredient_list;
    }
    
    public static function listShopping($ingr_list){
        ksort($ingr_list);
        //pr($ingr_list);
        $ingredients = toTitleCase(array_keys($ingr_list));
        echo '<h2>Shopping List</h2>';
        echo '<ul><li>';
        echo implode('</li><li>', $ingredients);
        echo '</li></ul>';
    }
}