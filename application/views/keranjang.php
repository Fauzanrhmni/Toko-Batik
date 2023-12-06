<!-- Tabel untuk menampilkan keranjang belanja -->
<div class="container-fluid">
    <h4>Keranjang Belanja</h4>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>Nama Produk</th>
            <th>Ukuran</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total</th>
        </tr>
        <?php
        $no = 1;
        $grandTotal = 0; // Variabel untuk menyimpan grand total
        foreach ($this->cart->contents() as $items) :
            $hargaBarang = $items['price']; // Harga barang per item
            $jumlahBarang = $items['qty']; // Jumlah barang

            // Menghitung harga tambahan ukuran jika ada
            switch ($items['options']['ukuran']) {
                case 'S':
                    // Tidak ada tambahan harga untuk ukuran S
                    break;
                case 'M':
                    $hargaBarang += 2000; // Tambahkan Rp. 2.000 untuk ukuran M
                    break;
                case 'L':
                    $hargaBarang += 4000; // Tambahkan Rp. 4.000 untuk ukuran L
                    break;
                case 'XL':
                    $hargaBarang += 6000; // Tambahkan Rp. 6.000 untuk ukuran XL
                    break;
                default:
                    // Handle jika ukuran tidak ada yang cocok
                    break;
            }


            // Hitung harga subtotal untuk item ini
            $totalItem = $hargaBarang * $jumlahBarang;

            echo '<tr>';
            echo '<td>' . $no++ . '</td>';
            echo '<td>' . $items['name'] . '</td>';
            echo '<td>' . $items['options']['ukuran'] . '</td>';
            echo '<td>' . $items['qty'] . '</td>';
            echo '<td align="right">Rp. ' . number_format($hargaBarang, 0, ',', '.') . '</td>';
            echo '<td align="right">Rp. ' . number_format($totalItem, 0, ',', '.') . '</td>';
            echo '</tr>';

            $grandTotal += $totalItem; // Tambahkan harga subtotal ke grand total
        endforeach;
        ?>
        <tr>
            <td colspan="5"></td>
            <td align="right" id="grandTotal">Rp. <?php echo number_format($grandTotal, 0, ',', '.') ?></td>
        </tr>
    </table>
    <!-- Tombol untuk menghapus keranjang belanja, kembali, dan menuju pembayaran -->
    <div align="right">
        <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
            <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
        </a>
        <a href="<?php echo base_url('welcome') ?>">
            <div class="btn btn-sm btn-primary">Kembali</div>
        </a>
        <a href="<?php echo base_url('dashboard/pembayaran') ?>">
            <div class="btn btn-sm btn-success">Pembayaran</div>
        </a>
    </div>
</div>

<!-- JavaScript untuk menghitung total harga -->
<script>
    function hitungTotalHarga(id, hargaAwal) {
        var hargaPerBarang = hargaAwal; // Menggunakan harga awal barang sebagai referensi
        var ukuran = document.getElementById('ukuran' + id).value;
        var jumlah = document.getElementById('jumlah' + id).value;

        // Hitung harga tambahan berdasarkan ukuran yang dipilih
        if (ukuran === 'M') {
            hargaPerBarang += 2000; // Tambahkan Rp. 2.000 untuk ukuran M
        } else if (ukuran === 'L') {
            hargaPerBarang += 4000; // Tambahkan Rp. 4.000 untuk ukuran L
        } else if (ukuran === 'XL') {
            hargaPerBarang += 6000; // Tambahkan Rp. 6.000 untuk ukuran XL
        }

        var totalHarga = hargaPerBarang * jumlah;
        document.getElementById('totalHarga' + id).innerText = 'Rp. ' + totalHarga.toLocaleString();

        // Setelah menghitung total, panggil fungsi untuk mengupdate total keseluruhan
        updateTotalKeseluruhan();
    }
</script>