<?php
include 'model/listModel.php';
include 'function/buildChild.php';
?>
<?php messageFlash(); ?>

<br>
<br>
<br>

<div id="chart-container"></div>

<script type="text/javascript">
    $(function() {

        $.mockjax({
            url: '/orgchart/initdata',
            responseTime: 1000,
            contentType: 'application/json',
            responseText: {
                <?php $topParent=getTopParent($bdd);?>
                'title': '<?= $topParent['nem'] ?>',
                'name': '<?= $topParent['nse'] ?>',
                'children': [
                    <?php
                    buildChild($bdd,1);
                    ?>
                ]
            }
        });

        $('#chart-container').orgchart({
            'data' : '/orgchart/initdata',
            'nodeContent': 'title'

        });
    });
</script>


<script type="text/javascript">

    $("div").delegate("div.employee", "click", function(){
        //alert($(this).attr("id"));
        var employeeId = $(this).attr("id");
        $.ajax({
            type: 'post',
            url: '../model/REQ_Employee.php',
            data: 'idEmployee=' +employeeId,
            success : function(code_html, statut){ // code_html contient le HTML renvoyé
                $(code_html).appendTo("#commentaires")
                var name =  $(code_html).find('.td_name').text();
                var mobile =  $(code_html).find('.td_mobile').text();
                var email =  $(code_html).find('.td_email').text();
                var mailto= "<a href=\"mailto:" +email+"?Subject=CCI-dans-la-place\" target=\"_top\">"+name+"</a>";
                console.log(mailto);
                var landline =  $(code_html).find('.td_landline').text();
                var filename =  $(code_html).find('.td_filename').text();

                //$('#employeeName').html(name);
                $('#employeeFilename').html(filename);
                $('#employeeName').html(mailto);
                $('#employeeMobile').html(mobile);
                $('#employeeLandline').html(landline);
                $("#myModal").modal('show');
            }
        });
    });

</script>


<!-- The Modal -->
<div class="modal fade modalblue" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="color:rgba(237, 131, 111)">Fiche de contact</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div><br>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="https://picsum.photos/150" class="img-responsive">
                    </div>
                    <div class="col-md-6">

                        <strong><h3 id="employeeName"></h3></strong>
                        <p id="employeeFilename"></p>
                        <p id="employeeMobile"></p>
                        <p id="employeeLandline"></p>
                    </div>
                </div>

            </div>
        </div>
    </div>

