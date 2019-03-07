<?php

class puzzles
	{
		public $puzzles = array();	// make an array of videos
		
		// mysql connection params
		
		public $host = 'localhost';	// replaced fatcow with local host
		public $user = 'sudaama';
		public $dbname = 'puzzles2';
		public $pass = '';
	    		
		/*
		public $host = 'mathsdoccouk.fatcowmysql.com';	// replaced local with fatcow host
		public $user = 'sudaama';
		public $dbname = 'multvideos1';
		public $pass = 'nuffsaid123';
		*/
		
		public $dsn = '';
		public $pdo = '';
		public $testMode = TRUE;
	
		public function __construct()
		{
			session_start();
			$this->dsn = sprintf('mysql:dbname=%s;host=%s', $this->dbname, $this->host);
			if ($this->testMode) 
				{
					$this->pdo = new PDO($this->dsn, $this->user, $this->pass, 
										 array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
				} 
			else 
				{
					$this->pdo = new PDO($this->dsn, $this->user, $this->pass);
				}		
			
			$sql = 'SELECT * FROM `tangrams`';
			
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute();
			
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
				{
					$this->puzzles[] = $row;
				}
		}
		
		public function getPuzzles()
			{
				return $this->puzzles;
			}
		
		public function getTitles()
			{
				$titles = array();
				foreach ($this->puzzles as $row) 
					{
						$titles[] = $row['title'];
					}
				return $titles;
			}
		
	}	// end puzzles class 
?>