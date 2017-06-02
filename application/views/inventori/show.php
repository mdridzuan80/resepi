<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Ringkasan Inventori Bahan</h1>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Bahan</th>
                            <th>Baki</th>
                            <th>Operasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; if($items->num_rows()){?>
                        <?php foreach($items->result() as $item){?>
                        <tr>
                            <td><?=$i++?></td>
                            <td><?=$item->bahan?></td>
                            <td><?=calcBaki($item->id)?></td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="<?=base_url("inventori/".$item->id)?>" role="button">Inventori</a>
                            </td>
                        </tr>
                        <?php }?>
                        <?php } else {?>
                        <tr>
                            <td colspan="4">Data tidak wujud</td>
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
