<?php
    class Product
    {
        private $id;
        public $name;
        public $price;
        public $desc;
        public $img;
        public $brand;
        public $time;
        public $state = 1;
        public function getId()
        {
            return $this->id;
        }
        public function __construct($id, $name, $price, $desc, $img, $brand, $time)
        {
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->desc = $desc;
            $this->img = $img;
            $this->brand = $brand;
            $this->time = $time;
        }
    }
?>