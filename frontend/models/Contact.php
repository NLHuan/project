<?php
require_once 'models/Model.php';
class Contact extends Model {
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    // public $status;
    public $message;
    public $created_at;
    public $updated_at;
    public $str_search = '';
    public function insert()
    {
        $obj_insert = $this->connection
            ->prepare("INSERT INTO contacts(first_name, last_name, email, phone, message) 
                                VALUES (:first_name, :last_name, :email, :phone, :message)");
        $arr_insert = [
            ':first_name' => $this->first_name,
            ':last_name' => $this->last_name,
            ':email' => $this->email,
            ':phone' => $this->phone,
            ':message' => $this->message,
            // ':status' => $this->status
        ];
        return $obj_insert->execute($arr_insert);
    }

}