<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center" >Status Pesanan</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th>Aksi</th> <!-- Menambah kolom aksi -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pesanan as $key => $item) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $item->nama_pemesan ?></td>
                            <td><?= $item->nama_brg ?></td>
                            <td><?= $item->jumlah ?></td>
                            <td>
                                <?php
                                switch ($item->status) {
                                    case '0':
                                        echo 'Pesanan sedang diproses';
                                        break;
                                    case '1':
                                        echo 'Pesanan sedang dalam proses penyiapan';
                                        break;
                                    case '2':
                                        echo 'Pesanan sedang dalam perjalanan';
                                        break;
                                    case '3':
                                        echo 'Pesanan sedang dikirim ke alamat tujuan';
                                        break;
                                    case '4':
                                        echo 'Pesanan diterima';
                                        break;
                                    default:
                                        echo 'Status tidak valid';
                                        break;
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                switch ($item->status) {
                                    case '0':
                                        echo '<a href="' . base_url('admin/pengiriman/update_status/' . $item->id . '/1') . '" class="btn btn-primary ml-2">Ubah ke Proses Penyiapan</a>';
                                        break;
                                    case '1':
                                        echo '<a href="' . base_url('admin/pengiriman/update_status/' . $item->id . '/2') . '" class="btn btn-warning ml-2">Ubah ke Dalam Perjalanan</a>';
                                        break;
                                    case '2':
                                        echo '<a href="' . base_url('admin/pengiriman/update_status/' . $item->id . '/3') . '" class="btn btn-info ml-2">Ubah ke Dikirim ke Alamat Tujuan</a>';
                                        break;
                                    case '3':
                                        echo '<a href="' . base_url('admin/pengiriman/update_status/' . $item->id . '/4') . '" class="btn btn-success ml-2">Ubah ke Diterima</a>';
                                        break;
                                    case '4':
                                        echo '';
                                        break;
                                    default:
                                        echo ' <i class="btn btn-danger ml-2" > Status tidak valid </i>';
                                        break;
                                }
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
