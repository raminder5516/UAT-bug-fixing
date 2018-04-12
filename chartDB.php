<?php
class Chart
{
    public function countBugs($db){
        $sql = "SELECT COUNT(id) as total_bugs FROM bug_tickets";
        $pdostm = $db->prepare($sql);
        //specify fetch method
        $pdostm->setFetchMode(PDO::FETCH_ASSOC);
        $pdostm->execute();

        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }
   
   public function countOpenBugs($db){
        $sql = "SELECT COUNT(id) as open_bugs FROM bug_tickets WHERE bug_status = 'open' ";
        $pdostm = $db->prepare($sql);
        //specify fetch method
        $pdostm->setFetchMode(PDO::FETCH_ASSOC);
        $pdostm->execute();

        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }

     public function countClosedBugs($db){
        $sql = "SELECT COUNT(id) as closed_bugs FROM bug_tickets WHERE bug_status = 'closed' ";
        $pdostm = $db->prepare($sql);
        //specify fetch method
        $pdostm->setFetchMode(PDO::FETCH_ASSOC);
        $pdostm->execute();

        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }



}