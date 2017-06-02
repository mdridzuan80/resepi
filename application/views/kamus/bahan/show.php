<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Kamus Bahan</h1>
        <div class="panel-body">
            <a class="btn btn-primary" href="<?=base_url("kamus/bahan/add")?>" role="button">Tambah</a>
            <div>&nbsp;</div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Minimun Alert</th>
                            <th>Operasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; if($items->num_rows()){?>
                        <?php foreach($items->result() as $item){?>
                        <tr>
                            <td><?=$i++?></td>
                            <td><?=$item->bahan?></td>
                            <td><?=$item->min_alert?></td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="<?=base_url("kamus/bahan/".$item->id)?>" role="button">Edit</a>
                                <a class="btn btn-primary btn-xs" href="<?=base_url("kamus/bahan/".$item->id."/delete")?>" role="button" onclick="return confirm('Anda Pasti?')">Hapus</a>
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
