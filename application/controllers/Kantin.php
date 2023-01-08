<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once 'Base_Controller.php';

class Kantin extends Base_Controller
{

  //field tabel
  var $data = [
    'nama_kantin' => '',
    'telpon' => ''
  ];

  //nama model
  var $context = 'kantin';

  function __construct()
  {
    parent::__construct();
    if (!$this->ion_auth->logged_in()) {
      redirect('auth/login');
    }
  }

  function form()
  {
    $id = $this->uri->segment(3);
    if ($id) {
      $this->data = $this->kantin->find_by_id($id);
    }
    $this->load->view('kantin/form', $this->data);
  }

  function save()
  {
    $id = $this->input->post('id');
    $this->form_validation->set_rules('nama_kantin', 'nama_kantin', 'required|min_length[5]');
    $this->form_validation->set_rules('telpon', 'telpon', 'required');
    $this->data = [
      'nama_kantin' => $this->input->post('nama_kantin') ?? '',
      'telpon' => $this->input->post('telpon'),
    ];
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('kantin/form', $this->data);
    } else {
      if ($id == '') {
        $this->makanan->insert($this->data);
      } else {
        $this->makanan->update($id, $this->data);
      }
      redirect(base_url('kantin'));
    }
  }
}
