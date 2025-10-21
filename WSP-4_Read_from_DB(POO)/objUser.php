<?php
class User {
    private $username;
    private $last_name;
    private $province;

    public function __construct($username, $last_name, $province) {
        $this->username = $username;
        $this->last_name = $last_name;
        $this->province = $province;
    }
    public function __destruct()
    {}

    //insert in db
    public function saveToDB($connection) {
        $query = "INSERT INTO users(username, last_name, province) 
                  VALUES ('$this->username', '$this->last_name', '$this->province')";
        
        return $connection->query($query);
    }
}
?>