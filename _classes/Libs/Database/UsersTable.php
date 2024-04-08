<?php 
namespace Libs\Database;

use PDOException;

class UsersTable
{
    private $db;

    public function __construct(MySQL $mysql)
    {
        $this->db = $mysql->connect();
    }

    public function insert()
    {
        try{
            $statement = $this->db->prepare(
                "INSERT INTO users(name,email,phone,address,
                password, created_at) VALUES (:name, :email,
                :phone, :address, :password, NOW())"
            );

            $statement->execute($data);

        }catch(PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}