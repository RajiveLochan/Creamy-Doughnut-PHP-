<?php
class Database {
	//defining the connection as a static variable, in order to have more than one instance of it
	protected static $connection;

	//function to connect to the database
	public function connect() {
		//try to connect to the database if the connection has not been established yet
		//the self keyword is used to refer to the current class of this method
		//and the double-colon (::) is used to refer to the static variable
		if(!isset(self::$connection)) {
			//server-name, username, password, database name
			self::$connection = new mysqli('localhost', 'root', '', 'creamydb');
		}

		//Handle the error if the connection was unsuccessful
		if(self::$connection === false) {
			//handle the error (for example show an error page)
            echo "<script>console.log('SQL Error')</script>";
			return mysqli_connect_error();
		}
		return self::$connection;
	}

	//function to run a sql query
	public function query($query) {
		//connecting to the database
		$connection = $this -> connect();

		//querying the database
		$result = $connection -> query($query);

		return $result;
	}


	public function error() {
		//connecting to the database
		$connection = $this -> connect();

		return $connection -> error;
	}
}
?>