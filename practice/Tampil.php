<?php

include 'Gadget.php';

class Tampil extends Gadget
{

}

$asus = new gadget("Snapdragon 865+");
// $asus->ram=16;
echo $asus->get_ram();