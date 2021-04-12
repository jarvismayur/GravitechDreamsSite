<?php
	class Gravity{
		private $db;

		public function __construct(){
			$this->db = new Database;
		}
		public function accept_new_message($data){
			$this->db->query("INSERT INTO `messages`(`name`, `email`, `subject`, `message`) VALUES(:name, :email, :subject, :message);");
			$this->db->bind(":name", $data['name']);
			$this->db->bind(":email", $data['email']);
			$this->db->bind(":subject", $data['subject']);
			$this->db->bind(":message", $data['message']);
			if($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function sub_email($data){
			$this->db->query("INSERT INTO `sub_emails`(`email`) VALUES (:email);");
			$this->db->bind(":email", $data['email']);
			if($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function req_quote($data){
			$this->db->query("INSERT INTO `req_quote`( `name`, `email`, `mobno`) VALUES(:name, :email, :mobno);");
			$this->db->bind(":name", $data['name']);
			$this->db->bind(":email", $data['email']);
			$this->db->bind(":mobno", $data['mobno']);
			if($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}


		public function cloud_login($data){
			$this->db->query("SELECT * FROM `cloud_login` WHERE `email`=:email AND `password`=:password");
			$this->db->bind(":email", $data['email']);
			$this->db->bind(":password", $data['password']);
			if($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function newswritter_login($data){
			$this->db->query('SELECT * FROM newswritter_login where email = ":email" && password = ":password" && department = ":department";');
			$this->db->bind(":email", $data['email']);
			$this->db->bind(":password", $data['password']);
			$this->db->bind(":department", $data['department']);
			return $this->db->single();


		}


		public function createnewsdata($data, $data_content,$data_description, $filename){
			$this->db->query("INSERT INTO `news_feed`(`title`, `content`, `description`, `catergory`, `tags`, `file`) VALUES (:title, :content, :description, :catergory, :tags, :file)");
			$this->db->bind(":title", $data['title']);
			$this->db->bind(":content", $data_content);
			$this->db->bind(":description", $data_description);
			$this->db->bind(":catergory", $data["catergory"]);
			$this->db->bind(":tags", $data['tags']);
			$this->db->bind(":file", $filename);
			if($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function get_news_feed(){
			$this->db->query("SELECT * FROM `news_feed` ORDER BY id DESC LIMIT 10");
			return $this->db->resultSet();

		}
		public function get_news_feed_by_id($data){
			$this->db->query("SELECT * FROM `news_feed` WHERE id = :id");
			$this->db->bind(":id", $data);
			return $this->db->resultSet();

		}

		public function add_post_catergory($data){
			$this->db->query("INSERT INTO `catergory`(`name`) VALUES (:name)");
			$this->db->bind(":name", $data['catergory']);
			if($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}
	}
