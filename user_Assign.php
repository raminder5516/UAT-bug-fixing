<?php
class User_Assign{
    public function getAllProjects($db,$id){
        $sql = "SELECT * FROM projects WHERE project_manager = :id";
        $pdostm = $db->prepare($sql);
        $pdostm->bindValue(':id', $id, PDO::PARAM_INT);
        $pdostm->execute();
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }

    //gets all unassign tester
    public  function getUnassignedTester($db,$id){
        $sql = "SELECT *
                FROM users
                WHERE TYPE =  'tester'
                AND id NOT 
                IN (
                    SELECT user_id
                    FROM project_users
                    WHERE project_id = :id)";
        $pdostm = $db->prepare($sql);
        $pdostm->bindValue(':id',$id,PDO::PARAM_INT);
        $pdostm->execute();
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;

    }
    //get assigned tester
    public  function getassignedTester($db,$id){
        $sql = "SELECT *
                FROM users
                WHERE TYPE =  'tester'
                AND id  
                IN (
                    SELECT user_id
                    FROM project_users
                    WHERE project_id = :id)";
        $pdostm = $db->prepare($sql);
        $pdostm->bindValue(':id',$id,PDO::PARAM_INT);
        $pdostm->execute();
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;

    }
    //assigning users to project
    public function assignUsers($db,$projectid,$userid){
        $sql = "INSERT INTO project_users (project_id,user_id) VALUES (:project_id,:user_id)";
        $pdostm = $db->prepare($sql);
        $pdostm->bindValue(':project_id',$projectid,PDO::PARAM_INT);
        $pdostm->bindValue(':user_id',$userid,PDO::PARAM_INT);
        $count = $pdostm->execute();
        return $count;
    }
    public function removeUser($db,$projectid,$userid){
        $sql = "DELETE FROM project_users where project_id = :projectid AND user_id = :userid";
        $pdostm = $db->prepare($sql);
        $pdostm->bindValue(':projectid',$projectid,PDO::PARAM_INT);
        $pdostm->bindValue(':userid',$userid,PDO::PARAM_INT);
        $count = $pdostm->execute();
        return $count;
    }
}