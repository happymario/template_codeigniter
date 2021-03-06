<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->helper("download");
        $this->load->library("session");
        $this->load->model("SSP");
        $this->lang->load('admin', LANGUAGE);
        $this->load->database();

        if (!$this->_is_logined()) {
            redirect("Login/index");
        }
    }

    public function load_view($view_name = '', $response_data = array(), $menu_data = array())
    {
        $this->load->view('layout/header', $menu_data);
        $this->load->view($view_name, $response_data);
        $this->load->view('layout/footer');
    }

    public function load_ajaxview($view_name = '', $data = array())
    {
        $this->load->view($view_name, $data);
    }

    public function _is_logined()
    {
        return $this->session->has_userdata(SESSION_ADMIN_UID);
    }

    public function _get_my_uid()
    {
        return $this->session->userdata(SESSION_ADMIN_UID);
    }

    public function _has_permission($level, $privilege)
    {
        $min_level = $this->db->get_where('tb_privilege', array('privilege_name' => $privilege))->row('min_level');
        return ($min_level >= $level);
    }

    public function upload_file($file)
    {
        $upload_file_name_only = getUniqueString();
        $upload_file_name_ext = pathinfo($file["name"], PATHINFO_EXTENSION);
        $file_name = $upload_file_name_only . '.' . $upload_file_name_ext;

        $file_path = make_directory('temp') . DIRECTORY_SEPARATOR . $file_name;

        if (!move_uploaded_file($file['tmp_name'], $file_path)) {
            return null;
        }

        return [
            'file_name' => $file_name,
            'file_url' => get_temp_image_url($file_name)
        ];
    }
}