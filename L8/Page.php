<?php

class Page {
    public static function part($input) 
    {
       require_once($input.".php"); 
    }
}