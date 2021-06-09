<?php
//Pages crud
/**
 * add, delete, create, update pages and sub pages
 * 
 */
class Page extends Model{
    public function getAllPage(){
         $this->db->query('SELECT * 
                            pages.id as pageId
                            sub-pages.id as subpageId
                            FROM page
                            INNER JOIN sub-page
                            ON pages.id = sub-pages.parent-id
                            ORDER BY pages.title DESC
                            ');
        $rows = $this->resultSet();
        return $rows;
    }

    public function addPageItem($data){
        $this->db->query('INSERT INTO pages (title, address) VALUES (:title,:address)');
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':address', $data['address']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function updatePageItem($data){
        $this->db->query('UPDATE pages SET title = :title, address = :address WHERE id = :id');
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':address', $data['address']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function deletePageItem($id){
         $this->db->query('DELETE * FROM pages WHERE id = :id ');
        $this->db->bind(':id', $id);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function addSubPage($data){
        $this->db->query('INSERT INTO sub-pages (title, parent-id, address) VALUES (:title, :parent-id, :address)');
         $this->db->bind(':title', $data['title']);
         $this->db->bind(':parent-id', $data['page']);
         $this->db->bind(':address', $data['address']);
          if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function deleteSubPage($id){
        $this->db->query('DELETE * FROM sub-pages WHERE id = :id ');
        $this->db->bind(':id', $id);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
        
    }
}
