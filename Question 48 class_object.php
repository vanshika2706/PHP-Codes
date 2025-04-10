<?php

    class Rectangle
    {
        
        public $length = 10;
        public $width = 5;
        
        
        public function getPerimeter(){
            return (2 * ($this->length + $this->width));
        }
        
        // Method to get the area
        public function getArea(){
            return ($this->length * $this->width);
        }
    
        public function showResult(){
            echo "Length of Rectangle: " . $this->length . "</br>";
            echo "Width of Rectangle: " . $this->width . "<br>";
            echo "Perimeter of Rectangle: " . $this->getPerimeter() . "<br>";
            echo "Area of Rectangle: " . $this->getArea() . "</br>";
        }
    }
    
    $rec = new Rectangle;
    
    $rec->showResult();
echo "<br>";
echo " This code is Written By Vanshika Malhotra 0221BCA137";

?>
