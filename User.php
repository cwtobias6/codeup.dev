<?php
require_once "Model.php";

class User extends Model
{

	protected static $table = 'users';


	public static function find($id)
	{
		self::dbConnect();
		//never have string interpolation in a SELECT statement
		$query = 'SELECT * FROM users WHERE id = :id';
		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':id',$id,PDO::PARAM_INT);
		$stmt->execute();

		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$instance = null;
        if ($result) {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;

	}

	public static function all()
	{
		//connect to database
		self::dbConnect();

		//get all rows
		$stmt = self::$dbc->query('SELECT * FROM users');
	

		//Assign results to a variable
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;





	}
	
	public function save()
	{}

	public function insert() 
	{




	}

}



?>