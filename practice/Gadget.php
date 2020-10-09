<?php

    class Gadget
    {
        public $ram=16; //bisa di akses dari basse class, child class ataupun global(beda file)

        private $chipset;   //bisa di akses dari base class

        protected $color="merah";   //bisa di akses dari base class dan child class



        public function __construct($chipset) {
            $this->chipset = $chipset;
        }

       public function get_ram() {
          echo "Asus ROG Phone 3 memiliki RAM sebesar " . $this->ram . " GB dan memiliki chipset " . $this->chipset . " dan memiliki warna " . $this->color;
        }
            
    }

    ?>



   