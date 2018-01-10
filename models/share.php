<?php 

class ShareModel extends Model{

	public function Index(){
		$this->query("SELECT * FROM shares ORDER BY create_date DESC");
		$rows = $this->resultSet();
		return $rows;
	}

	public function add(){
		// sanitize post array
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post["submit"]){
			if ($post["title"] == '' || $post["body"] == '' || $post["link"] == '') {
				Messages::setMsg("Please fill in all fields", "error");
				return;
			}

			// insert into mysql
			$this->query("INSERT INTO shares(user_id, title, body, link) VALUES(:user_id, :title, :body, :link)");
			$this->bind(":user_id", 1);
			$this->bind(":title", $post["title"]);
			$this->bind(":body", $post["body"]);
			$this->bind(":link", $post["link"]);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// redirect
				header("Location:".ROOT_URL."shares");
			}
		}
		return;
	}
}