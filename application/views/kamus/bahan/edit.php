<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Kamus Bahan</h1>
        <div class="panel-body">
            <?php if($item->num_rows()){?>
            <form role="form" method="post">
                <div class="form-group">
                    <label>Bahan</label>
                    <input class="form-control" name="bahan" value="<?=$item->row()->bahan?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Kemaskini</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </form>
            <?php } else {?>
                <div class="alert alert-danger">
                    Maaf! Data tidak wujud. <a href="<?=base_url("/kamus/bahan")?>" class="alert-link">Senarai Bahan</a>.
                </div>
            <?php }?>
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
