<?php
class LanguageList {
    public $title;
    public $data;
    public function __construct($title, $data) {
        $this->title = $title;
        $this->data = $data;
    }
    public function __display(){
        echo "<p>$this->title</p>";
        foreach($this->data as $item){
            echo "<li class='italic'>".$item["language"]." - ".$item["level"]."</li>";
        }
    }
}
