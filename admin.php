<?php 
class admin extends CI_Controller{
    public function Index(){
        if($this->input->post('submit')){
            $this->load->model('admin/admin_model');
            $this->admin_model->insert();
        }
        $this->load->view('admin/add_admin');
    }
    public function view(){
        $this->load->model('admin/admin_model');
	    $arr['data']=$this->admin_model->view();
        $this->load->view('admin/view_admin', $arr);
    }
	public function delete($id){
		$this->load->model('admin/admin_model');
		$this->admin_model->delete($id);
	}
	public function select($id){
		if($this->input->post()){
				$this->load->model('admin/admin_model');
				$this->admin_model->update($id);	
			}
		$this->load->model('admin/admin_model');
		$arr['data']=$this->admin_model->select($id);
		$this->load->view('admin/add_admin', $arr);
	}
	public function update_status(){
		if(isset($_REQUEST['sval'])){
			$this->load->model('admin/admin_model');
			//$up_status = $this->admin->update_status();
			$up_status = $this->admin_model->update_status();
			if($up_status > 0){
				$this->session->set_flashdata('message', 'Status update successfully');
				$this->session->set_flashdata('message_class', 'alert-success');
			}else{
				$this->session->set_flashdata('message', 'Status not update successfully');
				$this->session->set_flashdata('message_class', 'alert-danger');
			}
			return redirect('admin/admin/view');
		}
	}
}