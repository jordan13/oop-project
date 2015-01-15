<?php
class Animal {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;

	function __construct($scientificName, $firstName, $lastName, $gender, $weight) {
		$this->scientificName = $scientificName;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		$this->weight = $weight;

}

function getName() {
return "This is my " . $this->firstName .
	" and last " . $this->lastName .
	" and this is my scientific-name " . $this->scientificName . " .";
	}
}
class Fish extends Animal {
	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $bubbles){
		parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
	$this->bubbles = $bubbles;
	}

	function greet(){
	return $this->bubbles;
	}
}

class Bear extends Animal {
	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $roar){
		parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
	$this->roar = roar;
	}

	function hello(){
	return $this->roar;
	}
}

$Fish = new Fish("Fish", "Mellow", "Yellow", "male", 15, true);
print " Animal 1 is a " . $Fish->getName();
?>
<!-- Example 2 -->
<?php
class Animal {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;

	function __construct($scientificName, $firstName, $lastName, $gender, $weight) {
		$this->scientificName = $scientificName;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		$this->weight = $weight;

}

function getName() {
return "This is my " . $this->firstName .
	" and last " . $this->lastName .
	" and this is my scientific-name " . $this->scientificName . " .";
	}
}
class  snake extends Animal {
	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $slither){
		parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
	$this->slither = $slither;
	}

	function greet(){
	return $this->slither;
	}
}

class rat extends Animal {
	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $squeak){
		parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
	$this->squeak = squeak;
	}

	function hello(){
	return $this->squeak;
	}
}

$snake = new snake("snake", "Mellow", "RED", "female", 16, true);
print " Animal 2 is a " . $snake->getName();
?>
<!-- Example 3  -->
<?php
class Phone {
	public $maker;
	public $carrier;
	public $model;
	public $color;
	public $weight;

	function __construct($maker, $carrier, $model, $color, $weight) {
		$this->maker = $maker;
		$this->carrier = $carrier;
		$this->model = $model;
		$this->color = $color;
		$this->weight = $weight;

}

function getName() {
return "This is a " . $this->maker .
	" and last " . $this->lastName .
	" and this is a " . $this->model . " .";
	}
}
class iphone extends Phone {
	function __construct($maker, $carrier, $model, $color, $weight, $slidetounlock){
		parent::__construct($maker, $carrier, $model, $color, $weight);
	$this->slidetounlock = $slidetounlock;
	}

	function greet(){
	return $this->slidetounlock;
	}
}

class nexus extends phone {
	function __construct($maker, $carrier, $model, $color, $weight, $sorryitsbroken){
		parent::__construct($maker, $carrier, $model, $color, $weight);
	$this->sorryitsbroken = sorryitsbroken;
	}

	function hello(){
	return $this->sorryitsbroken;
	}
}

$iphone = new iphone("iphone", "iphone6", "gold", "gold", 6, true);
print " Phone 1 is a " . $iphone->getName();
?>
