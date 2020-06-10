<?php


class User{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    //    Register backend
    public function register($data){
        $this->db->query('INSERT INTO user (email, pass, role) VALUES (:email, :pass, :role)');

//        Bind values
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':pass', $data['pass']);
        $this->db->bind(':pass', $data['role']);

//        Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

//    backend login
    public function login($email, $pass){
        $this->db->query('SELECT * FROM backend WHERE email = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->single();

        $hashedPass = $row->pass;
        if (password_verify($pass, $hashedPass)){
            return $row;
        }else{
            return false;
        }
    }

//    Check if email already exists
    public function checkEmail($email){
        $this->db->query('SELECT * FROM user WHERE email = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->single();

        if ($this->db->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
}