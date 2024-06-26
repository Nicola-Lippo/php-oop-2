<?php
class Product
{
    protected int $id;

    //costruttore
    public function __construct(int $_id)
    {
        //cosi facendo assegnamo dei parametri $_ alle nostre istanze
        $this->id = $_id;
    }
    /*************/
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    /*************/
}

// CLASSI FIGLI 
//Cat
class Cat extends Product
{
}
//Dog
class Dog extends Product
{
}

//FUORI DALLE CLASSI
$product = new Product(1);
$Cat = new Product(2);
$Dog = new Product(3);
var_dump($product);
var_dump($Cat);
var_dump($Dog);
