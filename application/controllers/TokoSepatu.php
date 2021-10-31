<?php
class TokoSepatu extends CI_Controller
{
    public function index()
    {
        $this->load->view('Form');
    }

    public function pesan()
    {
        $this->form_validation->set_rules('nama', 'Nama Pesanan', 'required', ['required' => '<p class="alerts">Nama Pemesan harus diisi!']);

        $this->form_validation->set_rules('telepon', 'No. Telepon', 'required|numeric', ['required' => '<p class="alerts">No. Telepon harus diisi!', 'numeric' => '<p class="alerts">No. Telepon harus   berupa angka']);

        $this->form_validation->set_rules('merk', 'Merk Sepatu', 'required', ['required' => '<p class="alerts">Merk Sepatu harus diisi!']);

        $this->form_validation->set_rules('ukuran', 'Ukuran Sepatu', 'required', ['required' => '<p class="alerts">Ukuran Sepatu harus diisi!']);

        if ($this->form_validation->run() != true) {
            $this->load->view('Form');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'telepon' => $this->input->post('telepon'),
                'merk' => $this->input->post('merk'),
                'ukuran' => $this->input->post('ukuran')
            ];
            $this->load->view('DataPesanan', $data);
        }
    }
}