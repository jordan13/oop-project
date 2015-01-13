<?php
        class Car {

            public $isFast = true;
            public $brand;
            public $model;
            public $year;
            
            public function __construct($brand, $model, $year) {
              $this->brand = $brand;
              $this->model = $model;
              $this->year = $year;
            }
            
            public function greet() {
              return "Hello, my car is a " . $this->brand . " " . $this->model . ". Nice to meet you! :-)";
            }
          }
          
        $car = new Car('Toyota', '1', 1);
        

        echo $car->greet(); 
        ?>
        
        <!-- Example 2  -->

        class Fish {

            public $isCool = true;
            public $breed;
            public $color;
            public $age;
            
            public function __construct($breed, $color, $age) {
              $this->breed = $breed;
              $this->color = $color;
              $this->age = $age;
            }
            
            public function greet() {
              return "Hello, my fish is " . $this->breed . " " . $this->color . ". Nice to meet you! :-)";
            }
          }

          $Fish = new Fish('Tetra', '3', 3);
        

          echo $Fish->greet(); 
        ?>