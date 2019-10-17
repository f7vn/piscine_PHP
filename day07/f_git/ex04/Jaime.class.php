<?php 
class Jaime extends Lannister{

    public function with($obj)
    {
        if (get_parent_class($obj) === "Lannister"){
            if (get_class($obj) === "Cersei")
                {
                    print("With pleasure, but only in a tower in Winterfell, then.");
                }
            else
            print("Not even if I'm drunk !");
        }
        else
            print("Let's do this.");
    }

}
?>