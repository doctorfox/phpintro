<?php
class Recipe {
    private $title;
    private $ingredients;
    private $source;
    private $instructions;
    private $category;
    private $measurementtypes = array('tsp', 'tbsp', 'cup', 'oz', 'gram',
        'fluid ounce', 'pint', 'quart', 'litre');
    
    public function __construct($title_param = '', $source_param = '', $instructions_param = array(), $ingredients_param = array()){
        $this->title = $title_param;
        if (empty($title_param)){
            $this->title = 'How to prepare Egusi soup';
        }
        $this->source = $source_param;
        if (empty($source_param)){
            $this->source = 'Princess Nwachuku';
        }
        
        $this->instructions = $instructions_param;
        if(empty($instructions_param)){
            $this->instructions = array(
                "Place a pot on the heat",
                "Add 1/2 cup of red palm oil",
                "Wait about 1 minute for oil to heat up",
                "Add fresh ground egusi"
            );
        }
        
        $this->ingredients = $ingredients_param;
        if(empty($ingredients_param)){
            $this->ingredients = array(
                array('item' => 'water', 'amount' => 2.5, 'measurement' => 'cup'),
                array('item' => 'palm oil', 'amount' => 0.25, 'measurement' => 'litre')
            );
        }
    }


    public function displayRecipe(){
        echo '<h2>' . $this->title . ' by ' . $this->source . '</h2>';
        $this->displayIngredients();
        $this->displayInstructions();
    }
    
    public function displayIngredients() {
        echo '<h4>Ingredients</h4>';
        echo '<ul>';
        foreach($this->ingredients as $ingredient){
            echo "<li>{$ingredient['amount']} {$ingredient['measurement']} {$ingredient['item']}</li>";
        }
        echo '</ul>';
    }
    
    public function displayInstructions() {
        echo '<h4>Steps</h4>';
        echo '<ol><li>' . implode('</li><li>', $this->instructions) . '</li></ol>';
    }
    
    public function setTitle($title) {
        $this->title = toTitleCase(substr($title, 0, 50));
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function setIngredients($item, $amount = null, $measurement = null) {
        if($amount != null && !is_numeric($amount)){
            echo 'Please enter a number for the amount!';
            return;
        }
        $measurement = strtolower($measurement);
        if($measurement != null && !in_array($measurement, $this->measurementtypes)){
            echo 'Please select a valid measurement of any of ' . implode(', ', $this->measurementtypes);
            return;
        }
        
        $this->ingredients[] = array('item' => ucwords($item), 'amount' => $amount, 'measurement' => $measurement);
    }
    
    public function getIngredients() {
        return $this->ingredients;
    }
    
    public function setSource($source) {
        $this->source = toTitleCase(substr($source, 0, 30));
    }
    
    public function getSource() {
        return $this->source;
    }
    
    public function setInstructions($instructions) {
        if (is_array($instructions)){
            $this->instructions = toTitleCase($instructions);
        }
    }
    
    public function getInstructions() {
        return $this->ingredients;
    }
    
    public function setCategory($category) {
        $this->category = toTitleCase(substr($category, 0, 20));
    }
    
    public function getCategory() {
        return $this->category;
    }
}

function toTitleCase($strtitle){
    $smallwordsarray = array('of','a','the','and','an','am','or','nor','but','is','if','then','else','when', 'at','it','from','by','on','off','for','in','out','over','to','into','with');
    if(!is_array($strtitle)){
        $strtitle = strtolower($strtitle);
        $words = explode(' ', $strtitle);
        foreach ($words as $key => $word) {
            if($key == 0 || !in_array($word, $smallwordsarray)){
                $words[$key] = ucfirst($word);
            }
        }
        return implode(' ', $words);
    } else {
        $arr_result = array();
        foreach ($strtitle as $eachstrtitle) {
            $eachstrtitle = strtolower($eachstrtitle);
            $words = explode(' ', $eachstrtitle);
            foreach ($words as $key => $word) {
                if($key == 0 || !in_array($word, $smallwordsarray)){
                    $words[$key] = ucfirst($word);
                }
            }
            $arr_result[] = implode(' ', $words);
        }
        return $arr_result;
    }
}

function explode_custom($delimiter, $string){
    //Take $string and split it by $delimiter
    $finalarray = array();
    $delimiter_length = strlen($delimiter);
    $position = 0;
    $prev_position = 0;
    while($position = strpos($string, $delimiter, $prev_position + $delimiter_length)){
        //echo "$prev_position : $position<br>";
        $finalarray[] = substr($string, $prev_position, $position - $prev_position);
        //echo(substr($string, $prev_position, $position - $prev_position)."<br>");
        $prev_position = $position + $delimiter_length;
    }
    $finalarray[] = substr($string, $prev_position);
    //print_r($finalarray);
    return $finalarray;
}

function makePlural($quantity, $unit){
    if(substr($unit, -1) == 's'){
        $unit = substr($unit, 0, -1);
    }
    if(is_numeric($quantity) && $quantity == 1){
        return "$quantity $unit";
    }
    return "$quantity {$unit}s";
}

function pr($param){
    echo '<pre>';
    print_r($param);
    echo '</pre>';
}