<?php

class TopNavigation extends Model{
    public function getAllNav(){
        $this->db->query('SELECT * FROM header-navigation');
        $rows = $this->resultSet();
        return $rows;
    }

    public function getSingleNavItem($id){
        $this->db->query('SELECT * FROM header-navigation WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->singleResult();
        return $row;
    }

    public function addNavItem($title){
        $this->db->query('INSERT INTO header-navigation (title) VALUES (:title)');
        $this->db->bind(':title', $title);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updateNavItem($data){
        $this->db->query('UPDATE header-navigation SET title = :title WHERE id = :id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function deleteNavItem($id){
        $this->db->query('DELETE * FROM header-navigation WHERE id = :id ');
        $this->db->bind(':id', $id);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}
