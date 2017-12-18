<?php

class Admin extends MY_Controller{

  public function dashboard(){

    $this->load->model('articlesmodel', 'articles');
    $articles = $this->articles->articles_list();
    $this->load->view('admin/dashboard', ['articles'=>$articles]);
  }

  public function add_article(){

    $this->load->view('admin/add_article');

  }

  public function store_article(){

    $this->form_validation->set_rules('title', 'Article title', 'required');
    $this->form_validation->set_rules('body', 'Article body', 'required');

    if($this->form_validation->run() == TRUE){
            $post = $this->input->post();
            // var_dump($post); die();
            unset($post['submit']);
            $this->load->model('articlesmodel', 'articles');
            $new_article = $this->articles->add_article($post);
            if($new_article){
                echo "insert successfull";
                  $this->session->set_flashdata('message', 'A new Article added.');
              }
            else{
                echo "insert failed";
                $this->session->set_flashdata('message', 'Failed to add Article');
              }
              return redirect('admin/dashboard');
          }
      else{
            $this->load->view('admin/add_article');
          }
}

  public function edit_article($article_id){
    $this->load->model('articlesmodel', 'articles');
    $article = $this->articles->find_article($article_id);
    // print_r($article);
    // var_dump($article); die();
    $this->load->view('admin/edit_article', ['article'=>$article]);
  }

  public function update_article(){
    // print_r($this->input->post());
    // $this->load->model('articlesmodel', 'articles');
    $this->form_validation->set_rules('title', 'Article title', 'required');
    $this->form_validation->set_rules('body', 'Article body', 'required');

    if($this->form_validation->run() == TRUE){
            $post = $this->input->post();
            $article_id = $post['article_id'];

            unset($post['submit'], $post['article_id']);

            $this->load->model('articlesmodel', 'articles');
            // var_dump($post); die();
            $new_article = $this->articles->update_article($article_id, $post);
            if($new_article){
                echo "insert successfull";
                  $this->session->set_flashdata('message', 'A new Article added.');
              }
            else{
                echo "insert failed";
                $this->session->set_flashdata('message', 'Failed to add Article');
              }
              return redirect('admin/dashboard');
          }
      else{
            $this->load->view('admin/add_article');
          }
  }

  public function delete_article(){

  }

  public function __construct(){
    parent::__construct();
    if(!$this->session->userdata('user_id')){
        return redirect('login');
    }

  }

}



 ?>
