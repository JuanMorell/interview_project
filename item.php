<?php
 class Item {
    public $position;
    public $institution;
    public $date;
    public $tasks;
    public function __construct($position, $institution, $date, $tasks) {
        $this->position = $position;
        $this->institution = $institution;
        $this->date = $date;
        $this->tasks = $tasks;
    }
    public function __display() {
        echo "<p>$this->position</p>";
        echo "<p class='italic'>$this->institution | $this->date</p>";
        echo "<ul>";
        foreach($this->tasks as $task){
            echo "<li>".$task."</li>";
        }
        echo "</ul>";
    }
}
?>