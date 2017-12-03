<?php 
	header("Content-Type:text/html;charset = utf-8");
	class db{
		protected $host = "localhost";
		protected $user = "root";
		protected $pass = "";
		protected $database = "personweb";
		public $table = "";
		protected $options;
		function __construct($table){
			$this->table = $table;
			$this->config($table);
		}
		protected function config($table){
			$this->db = new mysqli($this->host,$this->user,$this->pass,$this->database);
			$this->db->query("set names utf8");

			$this->options["field"] = "*";
			$this->options["where"] = $this->options["order"] = $this->options["limit"] = "";
		}
		public function field($field){
			$this->options["field"] = is_string($field)?$field:"*";
			return $this;
		}
		public function where($where){
			$this->options["where"] = is_string($where)?" WHERE ".$where:"";
			return $this;
		}
		public function order($order){
			$this->options["order"] = is_string($order)?" ORDER BY ".$order:"";
			return $this;
		}
		public function limit($limit){
			$this->options["limit"] = is_string($limit)?" LIMIT ".$limit:"";
			return $this;
		}


		public function select($sql = ""){
			$sql = (!empty($sql))?$sql:"SELECT {$this->options['field']} FROM {$this->table} {$this->options['where']} {$this->options['order']} {$this->options['limit']}";
			// echo $sql;
			// exit;
			$result = $this->db->query($sql);
			$array = Array();
			while($row = $result->fetch_assoc()){
				$array[] = $row;
			}
			return $array;
		}
		public function update($sql = ""){
			$sql = (!empty($sql))?$sql:"UPDATE {$this->table} SET {$this->options['field']} {$this->options['where']} {$this->options['order']} {$this->options['limit']}";
			// echo $sql;
			// exit;
			$this->db->query($sql);
			return $this->db->affected_rows;
		}
		public function delete($sql = ""){
			$sql = (!empty($sql))?$sql:"DELETE FROM {$this->table} {$this->options['where']} {$this->options['order']} {$this->options['limit']}";

			$this->db->query($sql);
			return $this->db->affected_rows;
		}
		public function insert($sql = ""){
			if(empty($sql)){
				$arr = explode(",",$this->options['field']);
				$values = "";
				$keys = "";
				foreach($arr as $v){
					$arr1 = explode("=",$v);
					$keys .= $arr1[0].",";
					$values .= $arr1[1].","; 
				}
				$keys = substr($keys,0,-1);
				$values = substr($values,0,-1);
				$sql = "INSERT INTO {$this->table} ({$keys}) VALUES ({$values}) {$this->options['where']} {$this->options['order']} {$this->options['limit']}";
			}else{
				$sql = $sql;
			}
			// echo $sql;
			// exit;
			$this->db->query($sql);
			return $this->db->affected_rows;
		}
	}
 ?>