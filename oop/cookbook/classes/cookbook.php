<?php 
include 'recipe.php';

class Cookbook {
    public $recipe1;
    public $recipe2;
    public $recipe3;
    public $test;
    
    public function __construct() {
        $this->test = new SimpleXMLElement('<h1></h1>');
        $this->recipe1 = new Recipe(
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
        
        $this->recipe2 = new Recipe(
                'How to make ogogoro',
                'Kenshin Li',
                array('Boil 1 litre of water in a teapot',
                    'Pour some water into a teacup',
                    'Drop 1 teabag into the hot water',
                    'Stir lightly and serve'),
                array(
                    array('item' => 'water', 'amount' => '1', 'measurement' => 'litre'),
                    array('item' => 'teabag', 'amount' => '1', 'measurement' => null)
                )
        );
        
        $this->recipe3 = new Recipe(
                'How to make black tea',
                'Rachael Wang',
                array('Boil 1 litre of water in a teapot',
                    'Pour some water into a teacup',
                    'Drop 1 teabag into the hot water',
                    'Stir lightly and serve'),
                array(
                    array('item' => 'water', 'amount' => '1', 'measurement' => 'litre'),
                    array('item' => 'teabag', 'amount' => '1', 'measurement' => null)
                )
        );
    }
    
    public function displayRecipes() {
        //$this->recipe1->displayRecipe();
        $properties = get_object_vars($this);
        foreach($properties as $recipe){
            if(get_class($recipe) == 'Recipe'){
                $recipe->displayRecipe();
            }
        }
        //echo '<pre>';print_r($properties);
    }
}