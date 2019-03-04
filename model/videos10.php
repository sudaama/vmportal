<?php

class videos
	{
		public $videos = array();	// make an array of videos
		
		// mysql connection params
		public $host = 'localhost';	// replaced fatcow with local host
		public $user = 'sudaama';
		public $dbname = 'multvideos2';
		public $pass = '';
	    		
		/*
		public $host = 'mathsdoccouk.fatcowmysql.com';	// replaced local with fatcow host
		public $user = 'sudaama';
		public $dbname = 'multvideos2';
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
			
			$sql = 'SELECT * FROM `algebraic_square_squareroot`';
			
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute();
			
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
				{
					$this->videos[] = $row;
				}
		}
		
		public function getVideos()
			{
				return $this->videos;
			}
		
		public function getTitles()
			{
				$titles = array();
				foreach ($this->videos as $row) 
					{
						$titles[] = $row['title'];
					}
				return $titles;
			}
		
	}	// end videos class 
?>