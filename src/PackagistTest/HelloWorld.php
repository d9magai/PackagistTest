<?php
namespace PackagistTest;

class HelloWorld
{
    public function __construct($path = './hello.log')
    {
    }

    public function hello($name = 'World')
    {
        echo 'hellow world';
    }
}

