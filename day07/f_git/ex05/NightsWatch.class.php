<?php
class NightsWatch implements IFighter{
    private $n_guards = array();

    public function recruit($watchman){
        $this->n_guards[] = $watchman; 
    }

    function fight(){
        foreach ($this->n_guards as $guard){
            if (method_exists(get_class($guard), 'fight'))
                $guard->fight();
        }
    }
}
