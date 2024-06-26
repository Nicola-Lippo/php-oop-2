<?php
class Product
{
    protected int $id;
    protected string $category;

    //costruttore
    public function __construct(int $_id, string $_category)
    {
        //cosi facendo assegnamo dei parametri $_ alle nostre istanze
        $this->id = $_id;
        $this->category = $_category;
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
    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }
    /*************/
}

// CLASSI FIGLI 
//Food
class Food extends Product
{
    private int $pesoSnack;
    //costruttore
    public function __construct(int $_id, string $_category, int $_pesoSnack)
    {
        //invoca il costruttore del padre dentro la classe figlio
        parent::__construct($_id, $_category);
        $this->pesoSnack = $_pesoSnack;
    }
    /*************/
    public function getPesoSnack(): int
    {
        return $this->pesoSnack;
    }

    public function setPesoSnack(string $pesoSnack): void
    {
        $this->pesoSnack = $pesoSnack;
    }
    /*************/
}


//FUORI DALLE CLASSI
$product1 = new Product(1, 'cat');
$product2 = new Food(2, 'dog', 10);
var_dump($product1);
var_dump($product2);
