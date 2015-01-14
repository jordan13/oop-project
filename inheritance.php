<!-- Example 1  -->
<?php
	Class Animal {
		public $firstName = "Gary";
		public $lastName;
		public $gender;
		public $chew;

	    function __construct($firstName, $lastName, $gender, $chew) {
	    	$this->firstName = $firstName;
	    	$this->lastName = $lastName;
	    	$this->gender = $gender;
	    	$this->chew = $chew;
	    }

	    function getName(){
	    	return "This is my " . $this->firstName .
	    		" and last " .$this->lastName;

	    }
		
	}
	class Capybara extends Animal {
		function hello(){
			return $this->chew;
		}
	}
	class Chicken extends Animal {
		function hello(){
			return $this->cluck;
	  }
	}

 	$capybara = new Capybara("Capybara", "Brown", "male", 13);
 	print "Animal 1 is a ". $capybara->getName();
 ?>
 <!-- Example 2 -->
<?php
	Class Animal  {
		public $firstName = "Chris";
		public $lastName;
		public $gender;
		public $cool;
		public $weight;
		public $quack;
		public $cluck;

	    function __construct($firstName, $lastName, $gender, $cool, $weight, $quack, $cluck) {
	    	$this->firstName = $firstName;
	    	$this->lastName = $lastName;
	    	$this->gender = $gender;
	    	$this->cool = $cool;
	    	$this->weight = $weight;
	    	$this->quack = $quack;
	    	$this->cluck = $cluck;
	    }

	    function getName(){
	    	return "This is my " . $this->firstName .
	    		" and last " .$this->lastName;

	    }
		
	}
	class Goose extends Animal {
		function hello(){
			return $this->quack;
		}
	}
	class Penguin extends Animal {
		function hello(){
			return $this->cluck;
	  }
	}

 	$goose = new Goose("Goose", "Berry", "male", 13);
 	print "Animal 2 is a ". $goose->getName();
?>
<!-- Example 3 -->
<?php
	Class Animal {
		public $firstName = "Jordan";
		public $lastName;
		public $gender;
		public $cool;
		public $height;
		public $snarl;
		public $nibble;


	    function __construct($firstName, $lastName, $gender, $cool, $height, $snarl, $nibble) {
	    	$this->firstName = $firstName;
	    	$this->lastName = $lastName;
	    	$this->gender = $gender;
	    	$this->cool = $cool;
	    	$this->height = $height;
	    	$this->snarl = $snarl;
	    	$this->nibble = $nibble; 
	    }

	    function getName(){
	    	return "This is my " . $this->firstName .
	    		" and last " .$this->lastName;

	    }
		
	}
	class Honeybadger extends Animal {
		function hello(){
			return $this->snarl;
		}
	}
	class Guinea Pig extends Animal {
		function hello(){
			return $this->cluck;
	  }
	}

 	$Honeybadger = new Honeybadger("Honeybadger", "larry", "male", 13);
 	print "Animal 3 is a ". $honeybadger->getName();
?>