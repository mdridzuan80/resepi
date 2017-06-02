<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Pesanan</h1>
        <div class="panel-body">
            <a class="btn btn-primary" href="<?=base_url("pesanan/add")?>" role="button">Tambah</a>
            <div>&nbsp;</div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tarikh</th>
                            <th>Resepi</th>
                            <th>Operasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; if($items->num_rows()){?>
                        <?php foreach($items->result() as $item){?>
                        <tr>
                            <td><?=$i++?></td>
                            <td><?=date("d-m-Y", strtotime($item->tarikh))?></td>
                            <td><?=namaResepi($item->resepi_id)?></td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="<?=base_url("pesanan/".$item->id."/delete")?>" role="button" onclick="return confirm('Anda Pasti?')">Hapus</a>
                            </td>
                        </tr>
                        <?php }?>
                        <?php } else {?>
                        <tr>
                            <td colspan="3">Data tidak wujud</td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
