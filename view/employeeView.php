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
                <th>Photo</th>
                <th>Mobile</th>
                <th>Fixe</th>
                <th>Email</th>

            </tr>
            </thead>
            <tfoot>
            <tr>
                <th></th>
                <th>Id</th>
                <th>Nom</th>
                <th>Photo</th>
                <th>Mobile</th>
                <th>Fixe</th>
                <th>Email</th>

            </tr>
            </tfoot>
            <tbody>

            <?php foreach (getAllEmployees($bdd) as $rs) { ?>
                <tr>

                    <?php echo '<td><div class="btn-group">
<a href="http://organigramme.dev/index.php?admin=viewEmployeeServiceAndFunction&id=' . $rs['iem'] . '" class="btn btn-info block-left" role="button">👁 </a>
<a href="http://organigramme.dev/index.php?admin=editEmployee&id=' . $rs['iem'] . '" class="btn btn-warning block-left" role="button">✎ </a>
<a href="http://organigramme.dev/index.php?admin=deleteEmployeeAction&id=' . $rs['iem'] . '" class="btn btn-danger block-left" role="button">×</a></div>


                    </td>'; ?>

                    <?php echo '<td>'.$rs['iem'].'</td>'; ?>
                    <?php echo '<td>'.$rs['nem'].'</td>'; ?>
                    <?php echo '<td>'.$rs['filename'].'</td>'; ?>
                    <?php echo '<td>'.$rs['mobile'].'</td>'; ?>
                    <?php echo '<td>'.$rs['landline'].'</td>'; ?>
                    <?php echo '<td>'.$rs['email'].'</td>'; ?>

                </tr>
            <?php };?>
            </tbody>
        </table>

    </div>

