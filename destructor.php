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

		function __construct($name, $color)
		{
			$this->name = $name;
			$this->color = $color;
		}

		function __destruct()
		{
			echo "The fruit is {$this->name} and the color is {$this->color}.";
		}
	}

		$strawberry = new Fruit ("Strawberry", "Pink");
?>
 
</body>  
</html>