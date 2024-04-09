<?php   

class Animal {

    // Properties
    public $name;
    private $area; //Very sensitive data (totally)
    public $age;

    // contructor
    public function __construct($name, $area, $age) {
        $this->name = $name; // Not refering to "public $name"
        $this->area = $area;
        $this->age = $age;
    
    }

    // Methods
    public function setName($name) {
        $this->name = $name; // Not refering to "public $name"
    }

    public function getArea() { // Now you can grab private data (if it's in this class)
        return $this->area; 
    }
}


?>
