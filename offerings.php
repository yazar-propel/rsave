<?php 
$url_link = "";
if(isset($_GET['path']))
    $url_link = $_GET['path'];

$url_link = strtoupper(str_replace("%20", " ", $url_link));

$act_menu = "offerings";
include("header.php"); ?>
<style>
    footer{
        position: absolute;
    }
</style>
<div class="container-fluid clearfix" style="min-height: 50px; margin-top: 75px;">
    <h1><?=$url_link;?></h1>
    <p>
        CONTENT NEEDED
    </p>
</div>
<?php include("footer.php"); ?>