<?php
class name {
    public $fname;
    public function __construct($fname)
    {
        $this->fname = $fname;
    }
}

class getfullname extends name {
    public $lname;
    public function __construct($fname, $lname)
    {
        parent::__construct($fname);    // use parent constructor inside child constructor.
        $this->lname = $lname;
        echo $fname. $lname;
    }
}

// $obj1 = new name("Arpit");
// $obj2 = new getfullname("Pikale");

// echo $obj1->fname;
// echo $obj2->lname;

$obj2 = new getfullname("Arpit ","Pikale");

