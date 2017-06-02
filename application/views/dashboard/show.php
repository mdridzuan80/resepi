<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
    <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Bahan</th>
                <th>Stok</th>
                <th>Notis</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; if($items->num_rows()){?>
            <?php foreach($items->result() as $item){?>
            <tr>
                <td><?=$i++?></td>
                <td><?=$item->bahan?></td>
                <td><?=calcBaki($item->id)?></td>
                <td><?php
                    if(calcBaki($item->id)<20)
                    {
                        echo "<a class=\"btn btn-danger btn-xs\" href=\"".base_url("inventori/".$item->id) . "\" role=\"button\">Inventori</a>";
                        echo "<i class=\"fa fa-exclamation-triangle\"></i>";
                    }
                    else
                    {
                        echo "<i class=\"fa fa-check\"></i>";
                    }
                ?></td>
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
<!-- /.row -->
