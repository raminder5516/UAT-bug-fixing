<?php
class UserRegistration {

    public function addUser($db, $fname, $lname, $phone, $userEmail, $userPassword){
        $sql = "INSERT INTO userregistration (fname, lname, phone, useremail, userpassword)
            VALUES (:fname, :lname, :phone, :useremail, :userpassword)";
        $pdostm = $db->prepare($sql);
        $pdostm->bindValue(':fname', $fname, PDO::PARAM_STR);
        $pdostm->bindValue(':lname', $lname, PDO::PARAM_STR);
        $pdostm->bindValue(':phone', $phone, PDO::PARAM_STR);
        $pdostm->bindValue(':useremail', $userEmail, PDO::PARAM_STR);
        $pdostm->bindValue(':userpassword', $userPassword, PDO::PARAM_STR);
        $count  = $pdostm->execute();
        return $count;
    }

    public function getAllUsers($db){
        $sql = "SELECT * FROM userregistration";
        $pdostm = $db->prepare($sql);
        //specify fetch method
        $pdostm->setFetchMode(PDO::FETCH_ASSOC);
        $pdostm->execute();
        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }

    public function updateUser($db, $id, $fname, $lname, $phone, $userEmail, $userPassword){
        $sql = "UPDATE userregistration 
                SET fname = :fname,
                lname = :lname,
                phone = :phone,
                userEmail = :userEmail,
                userPassword = :userPassword
                WHERE id = :id";
        $pdostm = $db->prepare($sql);
        $pdostm->bindValue(':id', $id, PDO::PARAM_INT);
        $pdostm->bindValue(':fname', $fname, PDO::PARAM_STR);
        $pdostm->bindValue(':lname', $lname, PDO::PARAM_STR);
        $pdostm->bindValue(':phone', $phone, PDO::PARAM_STR);
        $pdostm->bindValue(':userEmail', $userEmail, PDO::PARAM_STR);
        $pdostm->bindValue(':userPassword', $userPassword, PDO::PARAM_STR);
        $count  = $pdostm->execute();
        return $count;
    }

    public function getUserById($db, $id){
        $query = "SELECT * FROM userregistration WHERE id= :id";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':id', $id, PDO::PARAM_INT);
        $pdostm->execute();
        $s = $pdostm->fetch(PDO::FETCH_OBJ);
        return $s;
    }

    public function deleteUser($db, $id){
        $query = "DELETE FROM userregistration WHERE id = :id";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':id', $id, PDO::PARAM_INT);
        $count = $pdostm->execute();
        return $count;
    }

}
