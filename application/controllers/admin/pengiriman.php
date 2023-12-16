<?php
class Pengiriman extends CI_Controller {
    public function index() {
        $data['pesanan'] = $this->model_invoice->get_all_pesanan(); // Memanggil semua pesanan dari model

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/status_pesanan', $data); // Mengirim data pesanan ke view
        $this->load->view('templates/footer');
    }

    public function update_status($id_pesanan, $status) {
        // Lakukan validasi admin di sini
        // Pastikan hanya admin yang berhak untuk melakukan update status

        // Lakukan update status pesanan menggunakan model_invoice
        $this->model_invoice->update_status_pesanan($id_pesanan, $status);

        // Redirect kembali ke halaman status pesanan
        redirect('admin/pengiriman/index');
    }
}
