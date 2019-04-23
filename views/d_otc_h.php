<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Drug, OTCs & Herbals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  type="text/css" media="screen" href="<?php echo base_url('assets/css/d_otc_h.css');?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div class="container">
        <div id="col-md-8">

            <!-- drug db -->
                    <div id="drugdb">
            <!-- drug db header -->
                            <div id="maincolboxdrugdbheader">
                            <h1>Drugs, OTCs &amp; Herbals</h1>
                            </div>
            <!-- /header -->
                </div>
            
            <!-- main content -->
            <div id="drugdbmain2">
                <ul class="classdruglist">
                <li><a href="<?php echo base_url();?>medscape/ragwitek">Allergy &amp; Cold - Ragwitek</a></li>
                <li><a href="<?php echo base_url();?>medscape/rbc">Blood Components - RBCs</a></li>
                </ul>
            </div>
            <!-- /main content -->
            
            <div class="spacer">&nbsp;</div>
            <p>Drug information is based on FDA approvals.</p>
        </div>
        <div id="col-md-4">
            <style type="text/css">
            #drug_rtlinks {padding: 4px}
            </style>
            <div id="drug_rtlinks" style="margin:0 0 10px 0;">
            <a href="javascript:showrefcontent('aboutmedscape');">About Medscape Drugs &amp; Diseases</a><!-- |  <a onclick="OpenPopup('Figure',400,650)" target="Figure" href="http://reference.medscape.com/public/bios">Editorial & Advisory Board</a> -->
            </div>
            
            <!--About Medscape-->

            <!--/About Medscape-->
            
            <!--/POS2 About Medscape  Links-->
            
            <!-- login -->
            <div style="font-size:.9em;font-weight:bold;padding:4px;margin:15px 0px 15px 0px;border:1px solid #afbcae;background:#f3f6f2;-moz-border-radius: 4px;-webkit-border-radius: 4px;border-radius: 4px;text-align:center; border-color:#afbcae #e2e8e1 #afbcae #e2e8e1;"><a href="http://progps1.emedicine.com/gps/login.gps" target="_blank">Contributor Login</a></div>
        </div>
    </div>
</body>
</html>
