<?php

class santa
{
    public $Name = "Santa Claus";
    public $Ruf = "Ho Ho Ho";


    function ausruf($Name, $Ruf){
        $Name . " sagt: " . $Ruf;
        echo $this->ausruf($Name, $Ruf);
    }
}