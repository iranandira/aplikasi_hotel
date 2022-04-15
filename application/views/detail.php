<br><br>
<div class="container">
<div class="col-md-12"> 
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id.Transaksi</th>
                                                <th>Id.Konsumen</th>            
                                                <th>Jenis kamar</th>            
                                                <th>Tanggal cek in</th>
                                                <th>Tanggal cek out</th>
                                                <th>Harga Sewa Per Hari</th>
                                                <th>Lama Sewa</th>
                                                <th>Sub Total</th>
                                                <th>Status</th>
                                            </tr> 
                                        </thead>
                                        <?php $no = 1; $total=0; foreach($detail as $b) 
                                            $id_transaksi = $b->id_transaksi;
                                        {?>
                                        <tbody>
                                            <td><?=$id_transaksi ?></td>
                                            <td><?=$b->id_konsumen ?></td>
                                            <td><?=$b->kamar?></td>
                                            <td><?=$b->tanggal_cek_in ?></td>
                                            <td><?=$b->tanggal_cek_out ?></td>
                                            <td><?="Rp.".number_format($b->harga) ?></td>
                                            <td><?=$b->lama_sewa?></td>
                                            <td><?="Rp.".number_format($b->lama_sewa*$b->harga) ?></td>
                                            <td>Pending</td>
                                        </tbody>
                                        <?php $total=$total+($b->lama_sewa*$b->harga);
                                        $no++; } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
         </div>