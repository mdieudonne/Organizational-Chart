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
            <th>Employée</th>
            <th>Zone</th>
            <th>Service</th>
            <th>Fonction</th>

        </tr>
        </thead>
        <tfoot>
        <tr>
            <th></th>
            <th>Id</th>
            <th>Employée</th>
            <th>Zone</th>
            <th>Service</th>
            <th>Fonction</th>

        </tr>
        </tfoot>
        <tbody>

        <?php
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $datas=getAllServicesAndFunction($bdd,$id);
            foreach ($datas as $rs) { ?>
                <tr>

                    <?php echo '<td><div class="btn-group">
<a href="http://organigramme.dev/index.php?admin=editEmployeeFunction&id=' . $rs['essid'] . '" class="btn btn-warning block-left" role="button">✎ </a>
<a href="http://organigramme.dev/index.php?admin=deleteEmployeeFunctionAction&id=' . $rs['essid'] . '" class="btn btn-danger block-left" role="button">×</a></div>
                    </td>'; ?>

                    <?php echo '<td>'.$rs['essid'].'</td>'; ?>
                    <?php echo '<td>'.$rs['ename'].'</td>'; ?>
                    <?php echo '<td>'.$rs['secname'].'</td>'; ?>
                    <?php echo '<td>'.$rs['sername'].'</td>'; ?>
                    <?php echo '<td>'.$rs['fname'].'</td>'; ?>

                </tr>
            <?php }};?>

        </tbody>
    </table>

</div>

