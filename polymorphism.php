<html>  
<head>  
 <title>Body Tag</title>  
</head>  
<body>  
 <h1>The fruit program</h1>

<?php 
	class Fruit {
		public $name;
		public $color;

		public function __construct($name, $color)
		{
			$this->name = $name;
			$this->color = $color;
		}

		public function intro()
		{
			echo "A {$this->name} is a fruit and the color of tye fruit is {$this->color}.";

		}

	}

	class Cherry extends Fruit {

		public $weight; 
		public function __construct($name, $color, $weight) {

			$this->name = $name;
			$this->color = $color;
			$this->weight = $weight;
		}

		public function intro() {
			echo "This fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
		}
	}

	$cherry = new Cherry ("Cherry", "bright pink" , 20);
	$cherry->intro();

	
?>
 
</body>  
</html>