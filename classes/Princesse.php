<?php
class Princesse extends Personnage {

    private int $save;

    public function __construct() {
        parent::__construct();
        $this->save = 0;
        $this->x = 450;
        $this->y = 450;
    }

}