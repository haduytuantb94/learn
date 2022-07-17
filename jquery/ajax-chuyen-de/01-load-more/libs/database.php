<?php 

class Database {
	private $db_host  = 'localhost';
	private $db_user  = 'root';
	private $db_pass  = '';
	private $db_name  = 'movies';
	public $charset   = 'utf8';
	public $result;
	public $link;

	public function __construct() {
	    $this->db_connect();
	}

	public function db_connect() {
	    $this->link = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
	        if(!$this->link) {
	   	        die("connection Failed" . mysqli_connect_errno());
	        }
	      mysqli_set_charset($this->link,$this->charset);
	}
	public function getArrayByLoadMore($table ='', $limit, $offset) {
		$sql = 'SELECT * FROM '. $table . ' LIMIT '. $limit . ' OFFSET ' . $offset;
		// $sql = "SELECT * FROM `$table` LIMIT `$limit` OFFSET '$offset'";
		$data = null;
		if($this->result = mysqli_query($this->link,$sql)) {
			while($row = mysqli_fetch_assoc($this->result)) {
				$data[] = $row;
			}
		mysqli_free_result($this->result);
		return $data;
		} else {
			return false;
		}
	}
	public function removeXss($string) {
		$string = preg_replace('#&(?!\#[0-9]+;)#si', '&amp;', $string);
		$string = str_replace("<", "&lt;", $string);
		$string = str_replace(">", "&gt;", $string);
		$string = str_replace("\"", "&quot;", $string);
		$string = str_replace("\'", "&quot;", $string);

		static $preg_find = array(
			'#javascript#i',
			'#vbscript#i'
		);

		static $preg_replace = array(
			'java script',
			'vb script'
		);

		return preg_replace($preg_find, $preg_replace, $string);
	}

	public function __destruct() {
		mysqli_close($this->link);
	}

}


?>