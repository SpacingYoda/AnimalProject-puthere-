<?php   

class Animal {

    // Properties
    public $gname;
    private $sname; //Very sensitive data (totally)
    public $region;

    // contructor
    public function __construct($gname, $sname, $region) {
        $this->gname = $gname; // Not refering to "public $name"
        $this->sname = $sname;
        $this->region = $region;
    
    }

    // Methods
    public function setGname($gname) {
        $this->gname = $gname; // Not refering to "public $gname"
    }

    public function getSname() { // Now you can grab private data (if it's in this class)
        return $this->sname; 
    }
}


?>
