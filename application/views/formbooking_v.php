<br>
<div class="container">
<div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Reservasi Kamar 
                        </h2>
                    </div>
                </div>
                <?php
                        foreach($konsumen as $k):
                        $id_konsumen = $k->id_konsumen;
                        endforeach;
                ?>
                <form action="<?=base_url('Transaksi')?>" method="post">
                <div class="row"> 
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">id konsumen</label>
                                        <div class="col-sm-10">
                                          <input type="text" name="id_konsumen" class="form-control"value="<?= $k->id_konsumen?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Jenis kamar</label>
                                        <div class="col-sm-10">
                                        <select class="form-control" id="id_jenis" name="id_jenis">
                                            <option selected="0">....................</option>
                                            <?php foreach($jenis_kamar as $k) : ?>
                                            <option value="<?= $k->id_jenis;?>"> <?= $k->kamar; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tanggal cek in</label>
                                        <div class="col-sm-10">
                                          <input type="date" name="tanggal_cek_in" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tanggal cek out</label>
                                        <div class="col-sm-10">
                                          <input type="date" name="tanggal_cek_out" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Lama Sewa</label>
                                        <div class="col-sm-10">
                                          <input type="text" name="lama_sewa" class="form-control">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <button type="submit" name="submit" class="btn btn-primary btn-sm">Cek out sekarang</button>
                                        </div>
                                        <br>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </form>
                   
                </div>
    </div>