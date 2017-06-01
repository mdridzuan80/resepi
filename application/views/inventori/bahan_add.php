<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Maklumat Inventori : <?=$item->row()->bahan?></h1>
        <div class="panel-body">
            <form role="form" method="post">
                <div class="form-group">
                    <label>Tarikh</label>
                    <input id="tarikh" class="form-control" name="tarikh" required>
                </div>
                <div class="form-group">
                    <label>Amaun</label>
                    <input class="form-control" name="amaun" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </form>
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
