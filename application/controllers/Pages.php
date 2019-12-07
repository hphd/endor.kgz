<?php 
session_start();
if (isset($_SESSION['category'])!=true) $_SESSION['category'] = 'news';
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller { 

	public function index($id=0)
	{	 
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->main_menu();
		$this->load->view('head');
		$this->load->view('header',$data);
		$this->load->view('main_content',$data);
		$data['m_news'] = $this->Get_model->m_news(3);
		$data['main_menu_second'] = $this->Get_model->main_menu_second();
		$data['directions'] = $this->Get_model->directions(6);
		$this->load->view('directions',$data);
		$this->load->view('news',$data);
		$this->load->view('info');
		$this->load->view('partners'); 
		$this->load->view('footer');
	}

	public function directions($id=0){
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->main_menu();
		$this->load->view('head');
		$this->load->view('header',$data);
		$data['m_news'] = $this->Get_model->m_news(3);
		$data['in_direction'] = $this->Get_model->in_direction($id);
		$data['video'] = $this->Get_model->video(4);
		$this->load->view('directions_page',$data);
		$this->load->view('footer');
	}

	public function news($id=0){
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->main_menu();
		$this->load->view('head');
		$this->load->view('header',$data);
		$data['m_news'] = $this->Get_model->m_news(3);
		$data['in_news'] = $this->Get_model->in_news($id);
		$this->load->view('news_page',$data);
		$this->load->view('footer');
	}

	public function news_page($id=0){
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->main_menu();
		$this->load->view('head');
		$this->load->view('header',$data);
		$data['news'] = $this->Get_model->news();
		$this->load->view('all_news',$data);
		$this->load->view('footer');
	}
 
	public function collective(){
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->main_menu();
		$this->load->view('head');
		$this->load->view('header',$data);
		$data['collective'] = $this->Get_model->collective();
		$this->load->view('collective',$data);	
		$this->load->view('footer');
	}	
	public function employee($id=0){
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->main_menu();
		$this->load->view('head');
		$this->load->view('header',$data);
		$data['employee'] = $this->Get_model->employee($id);
		$this->load->view('about_employee');	
		$this->load->view('footer');
	}	
	public function gallery(){
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->main_menu();
		$this->load->view('head');
		$this->load->view('header',$data);
		$data['gallery'] = $this->Get_model->gallery();
		$this->load->view('gallery',$data);
		$this->load->view('footer');
	} 

	public function map(){
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->main_menu();
		$this->load->view('head');
		$this->load->view('header',$data);
		$this->load->view('map');
		$this->load->view('footer');
	}

	public function video_gallery(){
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->main_menu();
		$data['video'] = $this->Get_model->main_video();
		$this->load->view('head');
		$this->load->view('header',$data);
		$this->load->view('video_gallery',$data);
		$this->load->view('footer');
	}

	public function adminka($id=0){
		$this->load->view('admin_views/holl_views');
	}
	public function save_record(){
    $this->load->model('Get_model');
	$check_photo = false;
	
	if (isset($_POST['edit_page']) && $_POST['er_url']=='') {
      $data['edit_record'] = $this->Get_model->er_edit($_POST['id_record'], $_SESSION['category']);
      foreach ($data['edit_record']  as $value) {
        $photo_name = $value['image'];
      }
      $check_photo = true;
    }

		if (isset($_POST['download']) || $check_photo == true) {
			$check = false;
      // photo
      if($check_photo == false) {
        $config['upload_path']= 'assets/img';
        $config['allowed_types']= 'jpg|png|jpeg';
        $config['max_size']= 1024;
        $config['encrypt_name']= TRUE;
		$this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile')){}
        else{
          $check = true;
        }
        $image_data = $this->upload->data();
        $add_img['fail'] = $image_data['file_name'];
        $photo_name = $add_img['fail'];
        // photo
      }
			if ($_POST['format'] == 1 && ($check == true || $check_photo == true) && $_POST['title']!='' && $_POST['text']!='') {
				$data=array(
					'name' => $_POST['title'],
					'description' => $_POST['text'],
					'date' => date("Y-m-d"),
					'image' => $photo_name,
				);
				if(isset($_POST['edit_page'])){
					$this->db->where('id', $_POST['id_record'])->update('news',$data);
				}else{
					$this->db->insert('news', $data);
				}
				$check = false;
			} elseif ($_POST['format'] == 2 && ($check == true || $check_photo == true)) {
				$data=array(
					'name' => $photo_name,
				);
				if(isset($_POST['edit_page'])){
					$this->db->where('id', $_POST['id_record'])->update('gallery',$data);
				}else{
					$this->db->insert('gallery', $data);
				}
				$check = false;
			}	elseif ($_POST['format'] == 3 && ($check == true || $check_photo == true) && $_POST['title']!='' && $_POST['post']!='' && $_POST['department']!='' && $_POST['text']!='' && $_POST['text']!='position') {
				$data=array(
					'name' => $_POST['title'],
					'post' => $_POST['post'],
					'department' => $_POST['department'],
					'description' => $_POST['text'],
					'position' => $_POST['position'],
					'image' => $photo_name,
				);
				if(isset($_POST['edit_page'])){
					$this->db->where('id', $_POST['id_record'])->update('collective',$data);
				}else{
					$this->db->insert('collective', $data);
				}
				$check = false;
			} elseif ($_POST['format'] == 4 && $_POST['er_url']!='') {	
				$data=array(
					'name' =>  $_POST['er_url'],
				);
				if(isset($_POST['edit_page'])){
					$this->db->where('id', $_POST['id_record'])->update('video',$data);
				}else{
					$this->db->insert('video', $data);
				}
				$check = false;
			}	
			if ($check == true) {
					unlink('assets/img/'.$photo_name);
			}
			header('Location: ' . base_url('pages/adminka'));
		}
	}
	public function del_or_red($id=0){
		if($id!=0){
			$this->db->delete('news', array('id' => $id));
		}
		$this->load->model('Get_model');
    	$data['news'] = $this->Get_model->news();
  		$_SESSION['category'] = 'news';
		$this->load->view('admin_views/del_or_red', $data);
	}

	public function er_format_ajax($id=0,$val = 0){
		$this->load->model('Get_model');

		if($val==1){
			if ($id!=0) {
				$this->db->delete('news', array('id' => $id));
			}
			$data['category'] = $this->Get_model->news();
			$_SESSION['category'] = 'news';
		}	elseif ($val==2) {
			if ($id!=0) {
				$query = $this->db->get_where('gallery', array('id' => $id));
				foreach ($query->result_array() as $q1) { unlink('assets/img/'.$q1['name']); }
				$this->db->delete('gallery', array('id' => $id));
			}
			$data['category'] = $this->Get_model->gallery();
			$_SESSION['category'] = 'gallery';
		} elseif ($val==3) { 
			if ($id!=0) {
				$this->db->delete('collective', array('id' => $id));
			}
			$data['category'] = $this->Get_model->collective();
			$_SESSION['category'] = 'collective';
		} elseif ($val==4) { 
			if ($id!=0) {
				$this->db->delete('video', array('id' => $id));
			}
			$data['category'] = $this->Get_model->er_video();
			$_SESSION['category'] = 'video';
		}

		$this->load->view('admin_views/er_format_ajax', $data);
	}
	public function edit_record($id=0){
		$this->load->model('Get_model');
		$data['edit_record'] = $this->Get_model->er_edit($id, $_SESSION['category']);
		$this->load->view('admin_views/edit_record',$data);
	}
}