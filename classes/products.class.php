<?php
class Product {
        public $name;
        public $brand;
        public $origin;
        public $size;
        public $color;
        public $price;
        public $images;
        public $description;
        public $weight;
        protected $expensive;
    
        public function __construct($_name, $_brand, $_origin, $_size = NULL, $_color = NULL, $_price, $_images, $_description, $_weight = NULL)
        {
            $this->name = $_name;
            $this->brand = $_brand;
            $this->origin = $_origin;
            $this->size = $_size;
            $this->color = $_color;
            $this->price = $_price;
            $this->images = $_images;
            $this->description = $_description;
            $this->weight = $_weight;
            if ( $this->price > 1000 ) {
            $this->expensive = true;
            }
        }
    }
?>