<html>
	<head>
		<title>Web Development Club</title>
	</head>
	
	<body>
		
		
		<?php
			 class Fruit{
				public $name="Mango";
				public $price;
				
				public function FruitName(){
					$this->name ="Jackfruit";
					echo $this->name."</br>";
				}	
				
				public function FruitPrice($value){
					$this->price =$value;
					echo $this->price."</br>";
				}
			}
			
				$obj1 = new Fruit();
				$obj2 = new Fruit();
				$obj2->name="Banana";
				echo $obj1->name."<br>";
				echo $obj2->name."<br>";
				$obj1->FruitName();
				$obj1 = new Fruit();
				echo $obj1->name."<br>";
				
				$obj1->FruitPrice(50);
		
		
		?>
		
		
		
		
	
	</body>
	
</html>