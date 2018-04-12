<?php
class UserRegistration {

    public function addUser($db, $fname, $lname, $user_name, $email, $pass,$phone, $type){
        $sql = "INSERT INTO users (fname, lname, user_name, email, password, phone,  type)
            VALUES (:fname, :lname,:uname, :email, :pass, :phone, :type)";
        $pdostm = $db->prepare($sql);
        $pdostm->bindValue(':fname', $fname, PDO::PARAM_STR);
        $pdostm->bindValue(':lname', $lname, PDO::PARAM_STR);
        $pdostm->bindValue(':uname', $user_name, PDO::PARAM_STR);
        $pdostm->bindValue(':email', $email, PDO::PARAM_STR);
        $pdostm->bindValue(':pass', $pass, PDO::PARAM_STR);
        $pdostm->bindValue(':phone', $phone, PDO::PARAM_STR);
        $pdostm->bindValue(':type', $type, PDO::PARAM_STR);
        $count  = $pdostm->execute();
        return $count;
    }

    public function getAllUsers($db){
        $sql = "SELECT * FROM users";
        $pdostm = $db->prepare($sql);
        //specify fetch method
        $pdostm->setFetchMode(PDO::FETCH_ASSOC);
        $pdostm->execute();
        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }

    public function updateUser($db, $id, $user_name, $fname, $lname, $phone, $email, $password){
        $sql = "UPDATE users 
                SET user_name = :user_name,
                fname = :fname,
                lname = :lname,
                phone = :phone,
                email = :email,
                password = :password
                WHERE id = :id";
        $pdostm = $db->prepare($sql);
        $pdostm->bindValue(':id', $id, PDO::PARAM_INT);
        $pdostm->bindValue(':user_name', $user_name, PDO::PARAM_STR);
        $pdostm->bindValue(':fname', $fname, PDO::PARAM_STR);
        $pdostm->bindValue(':lname', $lname, PDO::PARAM_STR);
        $pdostm->bindValue(':phone', $phone, PDO::PARAM_STR);
        $pdostm->bindValue(':email', $email, PDO::PARAM_STR);
        $pdostm->bindValue(':password', $password, PDO::PARAM_STR);
        $count  = $pdostm->execute();
        return $count;
    }

    public function getUserById($db, $id){
        $query = "SELECT * FROM users WHERE id= :id";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':id', $id, PDO::PARAM_INT);
        $pdostm->execute();
        $s = $pdostm->fetch(PDO::FETCH_OBJ);
        return $s;
    }

    public function deleteUser($db, $id){
        $query = "DELETE FROM users WHERE id = :id";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':id', $id, PDO::PARAM_INT);
        $count = $pdostm->execute();
        return $count;
    }
}
