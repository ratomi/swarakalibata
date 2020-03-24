<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sitemap extends CI_Controller {
 public function index(){
    $data['record'] = $this->model_app->view_ordering_limit('berita','id_berita','DESC',5,10);
    $this->load->view('sitemap',$data);
 }
}