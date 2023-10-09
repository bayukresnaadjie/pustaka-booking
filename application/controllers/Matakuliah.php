<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load any models or libraries you might need
    }

    public function index() {
        // This method could be used to show a default view or redirect somewhere
        // For example, you might want to show a list of matakuliah
        $this->load->view('view-matakuliah-list');
    }

    public function tambah() {
        // This method is used to handle the form submission
        // Process the form data submitted from view-form-matakuliah.php
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $sks = $this->input->post('sks');

        // Perform necessary validation and database operations
        // For example, you might want to save the data to a database

        // After processing, you might want to redirect to another page
        redirect('matakuliah/index');
    }

}
?>