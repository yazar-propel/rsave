<?php 
$url_link = "neweducation";
if(isset($_GET['path']))
    $url_link = $_GET['path'];

$iframe_url = "Calculators/". $url_link .".html";

$act_menu = "calculator";
include("header.php"); ?>
<!-- begin content -->
<!-- begin page title -->
<section id="page-title">
    <div class="container clearfix">
    </div>
</section>
<!-- end page title -->
<section id="content" class="container-fluid clearfix" style="min-height: 50px; margin-top: 75px;">
    <!-- begin our company -->
    <section> 
        <div class="col-md-2 cal-links-div">
            <h4>Other Calculators</h4>
            <ul class="cal-links-ul">
                <li class="cec for-active"><a class="child-link" href="Calculators/neweducation.html"><img src="img/blueeducation.svg" alt="fb-logo" class="blue-icon"><img src="img/coloreducation.svg" alt="fb-logo" class="clor-icon"> Child's Education</a></li>
                <li class="cwc for-active"><a class="child-link" href="Calculators/newmarriage.html"><img src="img/bluewedding.svg" alt="fb-logo" class="blue-icon"><img src="img/colorwedding.svg" alt="fb-logo" class="clor-icon"> Child's Wedding</a></li>
                <li class="clc for-active"><a class="child-link" href="Calculators/newcar.html"><img src="img/bluecar-loan.svg" alt="fb-logo" class="blue-icon"><img src="img/colorcar-loan.svg" alt="fb-logo" class="clor-icon"> Car Loan</a></li>
                <li class="hlc for-active"><a class="child-link" href="Calculators/newhouse.html"><img src="img/bluehouse-loan.svg" alt="fb-logo" class="blue-icon"><img src="img/colorhouse.svg" alt="fb-logo" class="clor-icon"> Home Loan</a></li>
                <li class="vlc for-active"><a class="child-link" href="Calculators/newvacation.html"><img src="img/bluevaccation.svg" alt="fb-logo" class="blue-icon"><img src="img/colorvaccation.svg" alt="fb-logo" class="clor-icon"> Vacation Loan</a></li>
                <li class="fpc for-active"><a class="child-link" href="Calculators/newinsurance.html"><img src="img/bluefamily.svg" alt="fb-logo" class="blue-icon"><img src="img/colorfamily.svg" alt="fb-logo" class="clor-icon"> Family Protection</a></li>
                <li class="rpc for-active"><a class="child-link" href="Calculators/newretirement.html"><img src="img/blueretirement.svg" alt="fb-logo" class="blue-icon"><img src="img/Colorretirement.svg" alt="fb-logo" class="clor-icon"> Retirement Planning</a></li>
                <li class="gc for-active"><a class="child-link" href="Calculators/customgoal.html"><img src="img/bluegoal.svg" alt="fb-logo" class="blue-icon"><img src="img/colorgoal.svg" alt="fb-logo" class="clor-icon"> Goals</a></li>
                <li class="ec for-active"><a class="child-link" href="Calculators/EMI76b8.html"><img src="img/blueloan.svg" alt="fb-logo" class="blue-icon"><img src="img/ColorEMI.svg" alt="fb-logo" class="clor-icon"> EMI</a></li>
                <li class="sc for-active"><a class="child-link" href="Calculators/SIP76b8.html"><img src="img/blueSIP.svg" alt="fb-logo" class="blue-icon"><img src="img/ColorSIP.svg" alt="fb-logo" class="clor-icon"> SIP</a></li>
                <li class="fvc for-active"><a class="child-link" href="Calculators/FV76b8.html"><img src="img/blueFV.svg" alt="fb-logo" class="blue-icon"><img src="img/colorFV.svg" alt="fb-logo" class="clor-icon"> Future Value</a></li>
                <li class="cc for-active"><a class="child-link" href="Calculators/crorepati.html"><img src="img/blueCorerpati.svg" alt="fb-logo" class="blue-icon"><img src="img/colorcorerpati.svg" alt="fb-logo" class="clor-icon"> Crorepati</a></li>
            </ul>
        </div>
        <div class="col-md-10" style="text-align: justify">
            <iframe id="myFrame" class="iFrameClass" src="" scrolling="no" frameborder="0"></iframe>
        </div>
    </section>
    <!-- begin our company -->
</section>
<!-- end content -->  
<?php include("footer.php"); ?>
<script>
    var url_link = "<?=$iframe_url?>";
    document.getElementById("myFrame").src = url_link;

    var ele = document.getElementsByClassName('for-active');
    for (var i = 0; i < ele.length; i++) {
        var cHref = ele[i].querySelector('.child-link').getAttribute('href');
        if(cHref == url_link)
        {
            ele[i].classList.add('active');
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        
        var links = document.querySelectorAll(".cal-links-ul li a");
        var iframe = document.getElementById("myFrame");

        links.forEach(function(link) {
            link.addEventListener("click", function(event) {
                event.preventDefault(); // Prevent the default behavior of the anchor tag

                var elements = document.getElementsByClassName('for-active');
                for (var i = 0; i < elements.length; i++) {
                    elements[i].classList.remove('active');
                }

                this.parentElement.classList.add('active');

                var href = this.getAttribute("href");
                iframe.src = href; // Update the src attribute of the iframe
            });
        });
    });

    function resizeIframe() {
        var iframe = document.getElementById('myFrame');
        var innerDoc = iframe.contentDocument || iframe.contentWindow.document;
        var contentHeight = innerDoc.body.scrollHeight;
        iframe.style.height = contentHeight + 'px';
        console.log(contentHeight + 'px');
    }

    // Call resizeIframe function when the iframe content has loaded
    //document.getElementById('myFrame').onload = resizeIframe;
</script>