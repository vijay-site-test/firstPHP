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

		function get_name() {
			return $this->name;
		}

		function get_color() {
			return $this->color;
		}

	}

		$strawberry = new Fruit ("Strawberry", "Pink");
		echo $strawberry->get_name();
		echo "<br>";
		echo $strawberry->get_color();
?>
 
</body>  
</html>