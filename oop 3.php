class Cat {
	public $firstName = "default name";
	public $lastName = "default last name";
	public $gender = "male";
	public $price = 0;

    function getName(){
    return "{$this->firstName}" .
    "{$this->lastName}";
    }
}
	$cat1 = newCat();
	$cat1->firstName = "Mr.";
	$cat1->lastName ="Whiskers";

	print"The cat's name is{$cat1->getName()}.";/

//////////////////////////////////////////////////

class Fish {
	public $firstName = "default name";
	public $lastName = "default last name";
	public $gender = "male";
	public $price = 0;

    function getName()
    return "{$this->firstName}" .
    "{$this->lastName}";
    }
}
	$fish1 = newFish();
	$fish1->firstName = "Mr.";
	$fish1->lastName ="Bubbles;

	print"The fish's name is{$fish1->getName()}.";

//////////////////////////////////////////////////

class Car {
	public $firstName = "default name";
	public $lastName = "default last name";
	public $gender = "male";
	public $price = 0;

    function getName(){
    return "{$this->firstName}" .
    "{$this->lastName}";
    }
}
	$car1 = newCar();
	$car1->firstName = "Lightning";
	$car1->lastNAme ="Mcqueen";

	print"The car's name is{$car1->getName()}.";

