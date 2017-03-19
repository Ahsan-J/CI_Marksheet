<?php
class marksheet extends MY_Controller{
    public function index(){
        $this->load->view("Marksheet_bootstrap");
    }
    public function result(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('Sindhi','','required|less_than_equal_to[75]');
        $this->form_validation->set_rules('English','','required|less_than_equal_to[75]');
        $this->form_validation->set_rules('Pst','','required|less_than_equal_to[75]');
        $this->form_validation->set_rules('Comp','','required|less_than_equal_to[100]');
        $this->form_validation->set_rules('Chemistry','','required|less_than_equal_to[100]');
        $this->form_validation->set_rules('Name','','required|alpha');
        $this->form_validation->set_rules('FName','Fathers Name','required|alpha');
        $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

        if($this->form_validation->run()){
            $this->load->model('Marksheet_Model','model');
            $data = $this->model->calculate($_POST);
            $this->load->view("Result.php",$data);
        }
        else{
            $this->load->view("Marksheet_bootstrap");
           // echo validation_errors();
        }
    }
}
?>