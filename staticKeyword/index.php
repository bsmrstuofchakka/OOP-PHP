<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Web Development</title>
</head>
<body>

	<?php

		class Person{
			public $name;
			public $roll;
			public static $university_name;

			public function __construct($val1,$val2,$val3){
				$this->name=$val1;
				$this->roll=$val2;
				self::$university_name=$val3;

			}


			public  function display(){
				echo "Student Name: ".$this->name."<br>";
				echo "Student Roll: ".$this->roll."<br>";
				echo "University Name: ".self::$university_name."<br>";
			}

			public static function display2(){
				echo "Hello, I am Static Function.<br>";
			
				echo "University Name: ".self::$university_name."<br>";
			}
		}

		$obj1 = new Person("Rahim","102","BSMRSTU");
		$obj1->display();
        $obj2 = new Person("Karim","101","BSMRSTU");
        $obj2->display();

        Person::display2();




	?>




</body>
</html>

