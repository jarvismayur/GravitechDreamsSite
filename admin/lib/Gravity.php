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


		public function createnewsdata($data,  $filename){
			$this->db->query("INSERT INTO `news_feed`( `title`, `content`, `file_1`, `tags`, `catergory`, `desp_1`, `desp_2`, `desp_3`, `desp_4`, `desp_5`, `video_link`) VALUES(:title, :content, :file_1, :tags, :catergory, :desp_1, :desp_2, :desp_3, :desp_4, :desp_5, :video_link);");
			$this->db->bind(":title", $data['title']);
			$this->db->bind(":content", $data['content']);
			$this->db->bind(":file_1", $filename);
			$this->db->bind(":tags", $data['tags']);
			$this->db->bind(":catergory", $data['catergory']);
			$this->db->bind(":desp_1", $data['desp_1']);
			$this->db->bind(":desp_2", $data['desp_2']);
			$this->db->bind(":desp_3", $data['desp_3']);
			$this->db->bind(":desp_4", $data['desp_4']);
			$this->db->bind(":desp_5", $data['desp_5']);
			$this->db->bind(":video_link", $data['video_link']);

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

		public function get_catergory(){
			$this->db->query("SELECT * FROM `catergory`");
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
