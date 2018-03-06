<?php messageFlash(); ?>

<script>
    $(document).ready(function() {
        $('#contactTab').DataTable();
    } );

</script>

    <div class="col-sm-12 d-block m-x-auto">
        <br>

        <table id="contactTab" class="display" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th></th>
                <th>Id</th>
                <th>Nom</th>
                <th>Parent</th>

            </tr>
            </thead>
            <tfoot>
            <tr>
                <th></th>
                <th>Id</th>
                <th>Nom</th>
                <th>Parent</th>


            </tr>
            </tfoot>
            <tbody>

            <?php foreach (getAllServices($bdd) as $rs) { ?>
                <tr>

                    <?php echo '<td><div class="btn-group">
<a href="http://organigramme.dev/index.php?admin=editService&id=' . $rs['id'] . '" class="btn btn-warning block-left" role="button">✎ </a>
<a href="http://organigramme.dev/index.php?admin=deleteServiceAction&id=' . $rs['id'] . '" class="btn btn-danger block-left" role="button">×</a></div>
                    </td>'; ?>

                    <?php echo '<td>'.$rs['id'].'</td>'; ?>
                    <?php echo '<td>'.$rs['name'].'</td>'; ?>
                    <?php echo '<td>'.$rs['parent_id'].'</td>'; ?>

                </tr>
            <?php };?>
            </tbody>
        </table>

    </div>

