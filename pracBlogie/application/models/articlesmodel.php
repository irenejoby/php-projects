<?php

class Articlesmodel extends CI_Model{

  public function articles_list(){
    $user_id = $this->session->userdata('user_id');

    $query = $this->db->query("SELECT title,id FROM articles WHERE user_id = '{$user_id}' ");
    // $query = $this->db
    //                   ->SELECT(['title', 'id'])
    //                   ->FROM('articles')
    //                   ->WHERE('user_id', $user_id)
    //                   ->get();
    return $query->result();
  }

  public function add_article($array){
    $this->db->insert('articles', $array);
  }

  public function find_article($article_id){
    $query = $this->db->query("SELECT * FROM articles WHERE id= '{$article_id}'");
    // $query = $this->db ->SELECT(['id', 'title', 'body'])
    //                    ->where('id', '$article_id')
    //                    ->get('articles');
    return $query->row();
  }
  public function update_article($article_id, Array $article){
    return $this->db
                     ->WHERE('id', $article_id)
                     ->UPDATE('articles', $article);
  }

}


 ?>
