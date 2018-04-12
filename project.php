<?php
class Project
{
    public function getAllProjects($db)
    {
        $sql = "SELECT * FROM projects";
        $pdostm = $db->prepare($sql);
        //specify fetch method
        $pdostm->setFetchMode(PDO::FETCH_ASSOC);
        $pdostm->execute();
        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }

    public function addProject($db, $name, $description, $date_started, $date_due)
    {
        $sql = "INSERT INTO projects (name, description, date_started, date_due)
            VALUES (:name, :description, :date_started, :date_due)";
        $pdostm = $db->prepare($sql);
        $pdostm->bindValue(':name', $name, PDO::PARAM_STR);
        $pdostm->bindValue(':description', $description, PDO::PARAM_STR);
        $pdostm->bindValue(':date_started', $date_started, PDO::PARAM_STR);
        $pdostm->bindValue(':date_due', $date_due, PDO::PARAM_STR);
        $count = $pdostm->execute();
        return $count;
    }

   public function updateProject($db,$id, $name, $description, $date_started, $date_due, $project_manager){
        $sql = "UPDATE  projects
                SET name = :name,
                description = :description,
                date_started = :date_started,
                date_due = :date_due,
                project_manager = :project_manager
                WHERE id = :id";
        $pdostm = $db->prepare($sql);
        $pdostm->bindValue(':id', $id, PDO::PARAM_INT);
        $pdostm->bindValue(':name', $name, PDO::PARAM_STR);
        $pdostm->bindValue(':description', $description, PDO::PARAM_STR);
        $pdostm->bindValue(':date_started', $date_started, PDO::PARAM_STR);
        $pdostm->bindValue(':date_due', $date_due, PDO::PARAM_STR);
        $pdostm->bindValue(':project_manager', $project_manager, PDO::PARAM_STR);
        $count  = $pdostm->execute();
        return $count;
    }

    public function getProjectById($db, $id){
        $query = "SELECT * FROM projects WHERE id= :id";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':id', $id, PDO::PARAM_INT);
        $pdostm->execute();
        $p = $pdostm->fetch(PDO::FETCH_OBJ);
        return $p;
    }

    public function deleteProject($db, $id){
        $query = "DELETE FROM projects WHERE id = :id";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':id', $id, PDO::PARAM_INT);
        $count = $pdostm->execute();
        return $count;
    }
}