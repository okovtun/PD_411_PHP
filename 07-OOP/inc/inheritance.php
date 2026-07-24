<?php

class Human
{
	public $last_name = "last_name"
	{
		get 
		{
			return $this->last_name;
		}
		set($value)
		{
			$this->last_name = $value;
		}
	}
	public $first_name = "first_name"
	{
		get 
		{
			return $this->first_name;
		}
		set($value)
		{
			$this->first_name = $value;
		}
	}
	public $age = 0
	{
		get
		{
			return $this->age;
		}
		set($value)
		{
			$this->age = $value;
		}
	}

	//				Constructors:
	function __construct(...$parameters)
	{
		echo '<pre>';
		echo gettype($parameters[0]);
		echo '<hr>';
		var_dump($parameters);
		var_dump($parameters[0]);
		print_r($parameters[0]);
		echo '</pre>';
		$this->last_name = $parameters[0];
		$this->first_name = $parameters[1];
		$this->age = $parameters[2];
		echo "HConstructor:<br>";
	}
	function __destruct()
	{
		echo "HDestructor:<br>";
	}

	//				Methods:
	function __tostring()
	{
		echo '<pre>';
		print_r(__CLASS__ . '<br>');
		//var_dump($this);
		echo '</pre>';
		return "{$this->last_name} {$this->first_name} {$this->age}";
	}
}

class Student extends Human
{
	public $speciality = "spec"
	{
		get
		{
			return $this->speciality;
		}
		set($value)
		{
			$this->speciality = $value;
		}
	}
	public $group = "group"
	{
		get
		{
			return $this->group;
		}
		set($value)
		{
			$this->group = $value;
		}
	}
	public $rating = 0
	{
		get
		{
			return $this->rating;
		}
		set($value)
		{
			$this->rating = $value;
		}
	}
	public $attendance = 0
	{
		get
		{
			return $this->attendance;
		}
		set($value)
		{
			$this->attendance = $value;
		}
	}

	//					Constructors:
	function __construct(...$parameters)
		/*(
			$last_name, $first_name, $age,
			$speciality, $group, $rating, $attendance
		)*/
	{
		parent::__construct(...$parameters);
		//parent::__construct($last_name, $first_name, $age);
		//$this->speciality = $speciality;
		//$this->group = $group;
		//$this->rating = $rating;
		//$this->attendance = $attendance;
		$this->speciality = $parameters[3];
		$this->group = $parameters[4];
		$this->rating = $parameters[5];
		$this->attendance = $parameters[6];

		echo "SConstructor<br>";
	}
	function __destruct()
	{
		echo "SDestructor<br>";
	}

	//				Methods:
	function __tostring()
	{
		echo '<pre>';
		print_r(__CLASS__ . '<br>');
		//var_dump($this);
		echo '</pre>';
		return parent::__tostring() . "\t{$this->speciality} {$this->group} {$this->rating} {$this->attendance}";
	}
}

class Graduate extends Student
{
	public $subject = "subject"
	{
		get
		{
			return $this->subject;
		}
		set($value)
		{
			$this->subject = $value;
		}
	}

	//				Constructors:
	function __construct
	(
		$last_name, $first_name, $age,
		$speciality, $group, $rating, $attendance,
		$subject
	)
	{
		parent::__construct
		(
			$last_name, $first_name, $age,
			$speciality, $group, $rating, $attendance
		);
		$this->subject = $subject;
	}
}

?>