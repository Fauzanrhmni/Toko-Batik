<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum login !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
            redirect('auth/login');
        }
    }
    public function tambah_keranjang($id)
    {
        // Mengambil informasi barang dari database berdasarkan ID
        $barang = $this->model_barang->find($id);

        // Mengambil data ukuran dan jumlah yang di-post dari form
        $ukuran = $this->input->post('ukuran');
        $jumlah = $this->input->post('jumlah');

        // Membuat array data barang yang akan dimasukkan ke keranjang
        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => $jumlah,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg,
            'options' => array('ukuran' => $ukuran) // Menambahkan informasi ukuran ke dalam options
        );

        // Menambahkan barang ke keranjang belanja
        $this->cart->insert($data);

        // Redirect kembali ke halaman sebelumnya atau halaman lain yang diinginkan
        redirect('welcome');
    }

    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }
    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('welcome/index');
    }
    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }
    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf Pesanan Anda Gagal diproses";
        }
    }
    public function detail($id_brg)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_brg);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_barang', $data);
        $this->load->view('templates/footer');
    }
}
