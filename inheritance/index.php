<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Web Development</title>
</head>
<body>

	<?php


			// Cannot override final class, donot final keyword for super class when inherited by the sub class

			//the final keyword, which prevents child classes from overriding a method by prefixing the definition with final. If the class itself is being defined final then it cannot be extended. Note: Properties and constants cannot be declared final, only classes and methods may be declared as final.

	

		 class Person{
			public $name;
			public $roll;
			public static $university_name;
			public  $district="Jashore";
			public $dept;

			public $password="jdjje893939";
			public $email="muradmd312@gmail.com";

			public final function __construct($val1,$val2,$val3){
				$this->name=$val1;
				$this->roll=$val2;
				self::$university_name=$val3;

			}

			// donot final keyword for overriding ,Cannot override final method
			public   function display(){
		
				echo "Security Password: ".$this->password."<br>";
				echo "District  Name: ".$this->district."<br>";
				echo "University Name: ".self::$university_name."<br>";
			}

			public static  function display2(){
				echo "Hello, I am Static Function.<br>";
				echo "University Name: ".self::$university_name."<br>";
			}
		}

		class Teacher extends Person{

			

			public function displayTeacher(){
				echo "Student Name: ".$this->name."<br>";
				echo "Student Roll: ".$this->roll."<br>";
				echo "University Name: ".self::$university_name."<br>";
				echo "Email: ".$this->email."<br>";
				echo "I am a Teacher"."<br>";
			}



			public  function display(){
				echo "Student Name: ".$this->name."<br>";
				echo "Student Roll: ".$this->roll."<br>";
		
			}
		}

		$obj1 = new Person("Rahim","102","BSMRSTU");
		$obj1->display();
        $obj2 = new Teacher("Abdul Karim","101","BSMRSTU");
        $obj2->display();

        Person::display2();

        $teacher = new Teacher("Abdul Hakim","107","BSMRSTU");
        $teacher->displayTeacher();

        $teacher->dept="Computer Science and Engineering";
        echo "Departmanet Name: ". $teacher->dept."<br>";

        $teacher->email="pallab420gmail.com";
        echo "Pallb Email's: ". $teacher->email."<br>";

        $teacher->password="jejdje93939";
        echo "Pallb Password's: ". $teacher->password."<br>";








	?>




</body>
</html>

