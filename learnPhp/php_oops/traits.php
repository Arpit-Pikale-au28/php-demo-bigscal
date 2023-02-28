<?php 

trait name {
   
    public function greet(){
        echo "Good Afternoon !!";
    }
    
}

class abc {
    
    use name;

    public function greetings(){
        $this->greet();
        echo "Arpit";
    } 
}


$result = new abc();
$result->greetings();

?>