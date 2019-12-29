<html>
	<head>
		<title>Web Development Class|||Constructor&Destructor </title>
		
	</head>
	<body>
		
		<?php
			class Person{
				public $name;
				public $age;
				
				public function __construct($val1,$val2){
					echo "Constructor is calling.</br>";
					
					$this->name=$val1;
					$this->age= $val2;
					
					
				}
				
				public function PersonDetails(){
					echo "My name is  ". $this->name. '  And age is '.$this->age ."<br>";
					echo "My name is  {$this->name} And age is {$this->age}" ."<br>";
				}
				
				public function __destruct(){
					echo "Destructor is calling.";
				}
			}
			
			$val1= "Murad";
			$val2= 23;
			$obj1 = new Person($val1,$val2);
			$obj1->PersonDetails();
			unset($obj1);
			
		
		
		?>
		
		
		
		
	</body>
</html>