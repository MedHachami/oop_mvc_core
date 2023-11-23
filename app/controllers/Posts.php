<?php

Class Posts extends Controller{
    public function __construct(){
        // echo "hello from posts controller";
    }

    public function index(){
        $data = ["title"=>"laptop" , "description"=> "desc 1"];
        
        $this->view("Posts/index",$data);
        

    }
    public function edit($id){
        // $postModel = $this->model('Post');
        echo "hello from post edit with id " .$id;
    }

   
}