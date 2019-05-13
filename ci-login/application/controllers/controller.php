<?php

	class controller extends CI_Controller {
		function delete($id) {
			$this->model->delete('user_articel',$id);
			redirect(base_url().'admin/articel');
		}
		function tambah() {
			$title = $this->input->post('title');
			$content = $this->input->post('content');
			$kategori = $this->input->post('kategori');
			$date_created = time();
			$data = ['id'=>'','title'=>$title,'content'=>$content,'kategori'=>$kategori,'date_created'=>$date_created];
			$this->model->add('user_articel',$data);
			redirect(base_url().'admin/articel');
		}
		function index_edit($id) {
			$data['data'] = $this->model->getId('user_articel',$id)[0];

		
       $this->load->view('temp/header');
        $this->load->view('admin/editarticel', $data);
        $this->load->view('temp/footer');
		}
		function edit($id) {
			$title = $this->input->post('title');
			$content = $this->input->post('content');
			$kategori = $this->input->post('kategori');
			$date_created = time();
			$data = ['id'=>$id,'title'=>$title,'content'=>$content,'kategori'=>$kategori,'date_created'=>$date_created];
			$this->model->update('user_articel',$data);
			redirect(base_url().'admin/articel');
		}
	}
?>