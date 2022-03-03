<?php
class Tempelate{
    protected $tempelate;
    protected $vars=array();
     public function __construct($tempelate){
         $this -> tempelate ;
     }
     public function __get($key){
         return $this ->vars[$key]=
     }
}