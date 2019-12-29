

<?php 

	class User{
		public function __construct(){
			
			$host="localhost";
			$user="root";
			$pass="640087@m";
			$db_name="info";
			$this->link=mysqli_connect($host,$user,$pass,$db_name);
			//print_r($this->link);
		}
		public function save_user($data){ 
			//print_r($data);
           $username=$data['username'];
           $email= $data['email'];
           $district= $data['district'];
           $password= $data['password'];
           $query="INSERT into user_info(username,email,district,password) values(' $username',' $email',' $district','$password')";
           // print_r($password);
           if(mysqli_query($this->link,$query)==TRUE)
           	echo "New Record sucessfully";
           else
           	echo "Unsuccessful";
		}
		public function all_user(){
			$query = "SELECT * from user_info";	
			return mysqli_query($this->link, $query);
		}


		public function delete_user($id){
			//print_r($id);
			$query= "DELETE FROM user_info where id = '$id'";
			//print_r($query);
			 if(mysqli_query($this->link,$query)==TRUE){
			 	echo "Sucessfully Deleted";
			 	header('Location: show.php');
			 }else{
			 	echo "Unsuccessful, Please try again";
			 	header('Location: show.php');
			 }
			 	

		}

		public function edit_user($id){
			 $query= "SELECT * FROM user_info where id= '$id'";
			return mysqli_query($this->link,$query);
			//print_r(mysqli_query($this->link,$query));
		}

		public function edit_user_update($data){
			//print_r($data);

			//if($data['id']=)

			$id =$data['id'];
			
		   $username=$data['username'];
           $email= $data['email'];
           $district= $data['district'];
           $password= $data['password'];
           $query="UPDATE  user_info 
           			SET username='$username',email='$email',district='$district',password='$password' 
           			WHERE id='$id'  ";
                      //print_r($query);
           if(mysqli_query($this->link,$query)==TRUE){
           	echo "sucessfully updated";
           	// header('Location: show.php');
           }
           else{
           		echo "Unsuccessful";
           		// header('Location: show.php');
           }
           	
		}


	}
 ?>