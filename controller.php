<?php
	class controller {
		private $db;

		public function __construct(MySQLHandler $db) {
			$this -> db = $db;
		}
		
		public function login($email, $password) {
            $logindb = $this -> db;
			$sql = "SELECT * FROM `tblAdmins` WHERE Email = '$email' AND Password = '$password' LIMIT 1";
			$result = $logindb -> Select($sql);

			if (count($result) > 0) $x = "true";
            else $x = "false";
			
			return $x;
        }
	}
?>