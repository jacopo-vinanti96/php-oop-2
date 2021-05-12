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
        protected $weight;
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
        
    class Electronics extends Product
    {
        public $type;
        public $warranty;
    
        public function __construct($_name, $_brand, $_origin, $_size = NULL, $_color = NULL, $_price, $_images, $_weight = NULL, $_type, $_warranty = FALSE)
        {
            parent::__construct($_name, $_brand, $_origin, $_size = NULL, $_color = NULL, $_price, $_images, $_weight = NULL);
            $this->type = $_type;
            $this->warranty = $_warranty;
        }
    
    }
    
    $elec1 = new Electronics("Telecomodità", "Delpino", "Italia", "" , "Nero", 5, "",  "", "Telecomando", );
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
</head>
<body>
    
</body>
</html>