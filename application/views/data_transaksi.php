<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1>Data Transaksi</h1>
                        <br><br>
                        <div class="card mb-4">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                <thead>
                                        <tr>
                                            <th>Id Transaksi</th>
                                            <th>Id konsumen</th>
                                            <th>Id jenis</th>
                                            <th>Tanggal Cek in</th>
                                            <th>Tanggal Cek out</th>
                                            <th>Lama sewa</th>
                                            </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id Transaksi</th>
                                            <th>Id konsumen</th>
                                            <th>Id jenis</th>
                                            <th>Tanggal Cek in</th>
                                            <th>Tanggal Cek out</th>
                                            <th>Lama sewa</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($transaksi as $t) {?>
                                        <tr>
                                            <td><?= $t->id_transaksi ?></td>
                                            <td><?= $t->id_konsumen?></td>
                                            <td><?= $t->id_jenis ?></td>
                                            <td><?= $t->tanggal_cek_in?></td>
                                            <td><?= $t->tanggal_cek_out?></td>
                                            <td><?= $t->lama_sewa?></td>
                                        </tr>
                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
