<?php

class Banner extends Model{
    public function getBanners(){
        $this->db->query('SELECT * FROM banners');
        $banners = $this->resultSet();
        return $banners;
    }

    public function getSingleBanner($id){
        $this->db->query('SELECT * FROM banners WHERE id = :id');
        $this->db->bind(':id', $id);
        $banner = $this->db->singleResult();
        return $banner;
    }

    public function addBanner($title){
        $this->db->query('INSERT INTO banners (title) VALUES (:title)');
        $this->db->bind(':title', $title);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updateBanner($data){
        $this->db->query('UPDATE  banners SET title = :title WHERE id = :id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function deleteBanner($id){
        $this->db->query('DELETE * FROM banners WHERE id = :id ');
        $this->db->bind(':id', $id);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}