<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Bahan-bahan : <?=$item->row()->nama?></h1>
        <div class="panel-body">
            <form role="form" method="post">
                <div class="form-group">
                    <label>Bahan</label>
                    <select class="form-control" name="bahanid" required>
                        <?php foreach($bahan2->result() as $bahan){?>
                        <option value="<?=$bahan->id?>"><?=$bahan->bahan?></option>
                        <?php }?>
                    </select>
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
