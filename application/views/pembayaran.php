<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents())  // Perhatikan perubahan di sini
                {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h4>Total Belanja Anda : Rp. " . number_format($grand_total, 0, ',', '.');

                ?>
            </div><br> <br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
            <h5>Isikan data dengan benar</h5>
            <form method="post" action=" <?php echo base_url() ?>dashboard/proses_pesanan ">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">No Telepon</label>
                    <input type="text" name="no_tlp" placeholder="Nomer Tlpon Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Opsi Pengiriman</label>
                    <select class="form-control" name="pengiriman" id="">
                        <option value="Hemat">Hemat</option>
                        <option value="Reguler">Reguler</option>
                        <option value="Kargo">Kargo</option>
                        <option value="Next Day">Next Day</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Metode Pembayaran</label>
                    <select class="form-control" name="pembayaran" id="">
                        <option value="BCA-12334556">BCA - 12334556</option>
                        <option value="BNI-09235237">BNI - 09235237</option>
                        <option value="BTN-79587429">BTN - 79587429</option>
                        <option value="Dana-08634563067">Dana - 08634563067</option>
                        <option value="Mandiri-09237502753">Mandiri - 09237502753</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
            </form>
        <?php
                } else {
                    echo "<h4>Keranjang Belanja Anda Masih Kosong, Segera Belanja !";
                }
        ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>