<?php
class Electronics extends Product
    {
        public $type;
        public $warranty;
    
        public function __construct($_name, $_brand, $_origin, $_size = NULL, $_color = NULL, $_price, $_images, $_description, $_weight = NULL, $_type, $_warranty = FALSE)
        {
            parent::__construct($_name, $_brand, $_origin, $_size = NULL, $_color = NULL, $_price, $_images, $_description, $_weight = NULL);
            $this->type = $_type;
            $this->warranty = $_warranty;
        }
    
    }
?>