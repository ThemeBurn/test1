<?php

class Utils 
{
    private $foo;   
    private $bar;
    protected $name;
    
    public function __construct() 
    {
        $this->foo = '';
        $this->bar = '';
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return 'Utils class' . $this->foo;  
    }
}
