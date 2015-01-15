<?php
class Cat{
	public $firstName;
	public $lastName;
	public $breed;

		function_construct($title, $firstName, $lastName, $breed){
		$this->firstName = $firstName;
		$this->breed = $breed;
		}

		function getName(){
		return "{$this->firstName}".
		"{$this->lastName}";
		}
}
$cat1 = new Cat("Mr.","Whiskers", "DomesticCat");
print "Cat 1: {$cat1->getName()}\n;

This produces:
//Cat 1: Mr.Whiskers

// Example 2
<?php 
class Bird{
	public $firstName;
	public $lastName;
	public $breed;

		function_construct($title,$firstName,$breed){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->species = $breed;
		}

		function getName(){
		return "{$this->firstName}".
		"{$this->lastName}";
		}
}

$bird1 = new Bird("Polly","The Parrot", "Parrot");
print "Bird 1: {$Bird1->getName()}\n;

This produces:
//Bird 1: Polly The Parrot

// Example 3
<?php
class Duck{
	public $firstName;
	public $lastName;
	public $breed;

		function_construct($title, $firstName, $lastName, $breed){
		$this->firstName = $firstName;
		$this->breed = $breed;
		}

		function getName(){
		return "{$this->firstName}".
		"{$this->lastName}";
		}
}
$cat1 = new Cat("Mr.","Duck", "Muscovy");
print "Cat 1: {$dog1->getName()}\n;

This produces:
//Duck 1: Mr. Duck