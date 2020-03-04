<?php
class IOC
{
    protected $bindArray=[];
    public function binds($abstract,$class)
    {
        $this->bindArray[$abstract]["class"]=function ($ioc) use ($class) {
            return $ioc->build($class);
        };
    }
    public function build($class)
    {

    }
}