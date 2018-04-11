<?php
class Recipe {
    private $title = '';
    private $ingredients = array();
    private $source = '';
    private $instructions = array();
    private $category = '';
    
    public function __construct($title_param = '', $source_param = '', $instructions_param = array()){
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
    }


    public function displayRecipe(){
        echo '<h2>' . $this->title . ' by ' . $this->source . '</h2>';
        echo '<ol><li>' . implode('</li><li>', $this->instructions) . '</li></ol>';
    }
    
    public function setTitle($title) {
        $this->title = toTitleCase(substr($title, 0, 50));
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function setIngredients($ingredients) {
        if (is_array($ingredients)){
            $this->ingredients = $ingredients;
        }
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
            $this->instructions = $instructions;
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
    $strtitle = strtolower($strtitle);
    $words = explode_custom(' ', $strtitle);
    foreach ($words as $key => $word) {
        if($key == 0 || !in_array($word, $smallwordsarray)){
            $words[$key] = ucfirst($word);
        }
    }
    return implode(' ', $words);
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