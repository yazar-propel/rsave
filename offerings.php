<?php 
$url_link = "";
if(isset($_GET['path']))
    $url_link = $_GET['path'];

//$url_link = strtoupper(str_replace("%20", " ", $url_link));

$act_menu = "offerings";
include("header.php"); ?>
<style>
    footer{
        position: absolute;
    }
</style>
<div class="container-fluid clearfix" style="min-height: 50px; margin-top: 75px;">
    <h1><?=strtoupper(str_replace("%20", " ", $url_link));?></h1>
    <?php 
    if(($url_link == "Life Insurance") || ($url_link == "General Insurance") || ($url_link == "Health Insurance")){
        echo '<div class="container-fluid">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <center><h3>Risk Management Matrix</h3></center>
                    <div class="row">
                        <div class="col-md-6 blue-matrix">
                            <h1>Risk Reduce</h1>
                        </div>
                        <div class="col-md-6 red-matrix">
                            <h1>Risk Avoid</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 green-matrix">
                            <h1>Risk Retain</h1>
                        </div>
                        <div class="col-md-6 yellow-matrix">
                            <h1>Risk Transfer</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="https://api.whatsapp.com/send?phone=9444425260&amp;text=Query%20Regarding%20Mutual%20Fund" target="_blank">Know More</a>
                </div>
            </div>
        </div>';
    } else if($url_link == "Mutual Fund") {
        echo '<div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h3>Pro&#39;s</h3>
                    <ol>
                    <li>High Liquidity</li>
                    <li>Professional in Management</li>
                    <li>Risk Return</li>
                    <li>Divertication</li>
                    </ol>
                </div>
                <div class="col-md-6">
                    <h3>Con&#39;s</h3>
                    <ol>
                    <li>Principal Risk</li>
                    <li>Volatile</li>
                    <li>Subject to Tax Payables</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="https://api.whatsapp.com/send?phone=9444425260&amp;text=Query%20Regarding%20Mutual%20Fund" target="_blank">Know More</a>
                </div>
            </div>
        </div>';
    } else if($url_link == "Equity") {
        echo '<div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h3>Pro&#39;s</h3>
                    <ol>
                    <li>Self Management</li>
                    <li>High Return</li>
                    <li>High Liquidity</li>
                    </ol>
                </div>
                <div class="col-md-6">
                    <h3>Con&#39;s</h3>
                    <ol>
                    <li>High Risk</li>
                    <li>High Volatile</li>
                    <li>Rare Capital Loss</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="https://api.whatsapp.com/send?phone=9444425260&amp;text=Query%20Regarding%20Equity" target="_blank">Know More</a>
                </div>
            </div>
        </div>';
    } else if($url_link == "Tax Planning") {
        echo '<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3>Primary Objective</h3>
                    <ol>
                    <li>Save Money</li>
                    <li>Mitigate one&#39;s tax burdon</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="https://api.whatsapp.com/send?phone=9444425260&amp;text=Query%20Regarding%20Tax%20Planning" target="_blank">Know More</a>
                </div>
            </div>
        </div>';
    } else if($url_link == "Financial Planning") {
        echo '<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h4>Quote</h4>
                    <ol>
                    <li>Live your today</li>
                    <li>Plan your tomorrow</li>
                    </ol>
                    <h4>What is the improtance of financial planning?</h4>
                    <p>
                        Whether you need help navigate your financial to reality today or Preparing to reach long term goals, a certified financial planner professional is there to help. Because even when life is uncertain, you are in control of your financial future.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="https://api.whatsapp.com/send?phone=9444425260&amp;text=Query%20Regarding%20Financial%20Planning" target="_blank">Know More</a>
                </div>
            </div>
        </div>';
    } else if($url_link == "Loan Advice") {
        echo '<div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h3>Steps to follow</h3>
                    <ol>
                    <li>Choose the right loan amount for your financial needs</li>
                    <li>Best Borrowing Rate</li>
                    <li>Right term and repaying capacity</li>
                    </ol>
                </div>
                <div class="col-md-6">
                    <h3>Benefits</h3>
                    <ol>
                    <li>More Purchasing Power</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="https://api.whatsapp.com/send?phone=9444425260&amp;text=Query%20Regarding%20Loan%20Advice" target="_blank">Know More</a>
                </div>
            </div>
        </div>';
    } else if($url_link == "Deposit Advice") {
        echo '<div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h3>Steps to follow</h3>
                    <ol>
                    <li>Interest Rate Risk</li>
                    <li>Default Risk</li>
                    <li>Liquidity Risk</li>
                    <li>Re investment Risk</li>
                    <li>Tax payable Risk</li>
                    </ol>
                </div>
                <div class="col-md-6">
                    <h3>Benefits</h3>
                    <ol>
                    <li>Safety</li>
                    <li>Liquidity</li>
                    <li>Returns</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="https://api.whatsapp.com/send?phone=9444425260&amp;text=Query%20Regarding%20Deposit%20Advice" target="_blank">Know More</a>
                </div>
            </div>
        </div>';
    } else if($url_link == "NRI Desk") {
        echo '<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ol>
                    <li>Why NRI should invest in India
                        <ul>
                            <li>Dollar Vs. Rupee Benefits</li>
                            <li>Better ROI</li>
                            <li>Less Tax Payable</li>
                            <li>Best Investment option for NRI in india</li>
                        </ul>
                    </li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="https://api.whatsapp.com/send?phone=9444425260&amp;text=Query%20Regarding%20NRI%20Desk" target="_blank">Know More</a>
                </div>
            </div>
        </div>';
    } else {
        echo '<p>
            CONTENT NEEDED
        </p>';
    }
    ?>
    
</div>
<?php include("footer.php"); ?>