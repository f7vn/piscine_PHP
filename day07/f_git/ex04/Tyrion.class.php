<?php 
class Tyrion extends Lannister{

    public function with($obj)
    {
        if (get_parent_class($obj) == "Lannister")
            print("Not even if I'm drunk !");
        else
            print("Let's do this." );
    }

}
?>