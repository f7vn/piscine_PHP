<?php

abstract class House{
    abstract function getHouseName();
    abstract function getHouseMotto();
    abstract function getHouseSeat();

    public function introduce(){
        print("House ");
        print($this->getHouseName());
        print(" of ");
        print($this->getHouseSeat());
        print(" : \"");
        print($this->getHouseMotto());
        print("\"");
        print(PHP_EOL);
    }
}
?>