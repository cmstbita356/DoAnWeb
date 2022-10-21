<?php
    class Product
    {
        private $id;
        public $name;
        public $price;
        public $desc;
        public $img;
        public $id_maker;
        public $time;
        public $state = 1;
        public function getId()
        {
            return $this->id;
        }
        public function __construct($id, $name, $price, $desc, $img, $id_maker, $time)
        {
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->desc = $desc;
            $this->img = $img;
            $this->id_maker = $id_maker;
            $this->time = $time;
        }
    }
?>