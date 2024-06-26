<?php 
$url_link = "";
if(isset($_GET['path']))
    $url_link = $_GET['path'];

//$url_link = strtoupper(str_replace("%20", " ", $url_link));

$act_menu = "offerings";
include("header.php"); ?>
<div class="container-fluid clearfix" style="min-height: 50px; margin-top: 60px;">
    <h2><?=strtoupper(str_replace("%20", " ", $url_link));?></h2>
    <?php 
    if(($url_link == "Life Insurance") || ($url_link == "General Insurance") || ($url_link == "Health Insurance")){
        echo '<div class="container-fluid">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 chart-container">
                    <center><h3>Risk Management Matrix</h3></center>
                    <div class="axis x-axis"></div>
                    <div class="axis y-axis"></div>
                    <div class="chart-label x-label">Severity</div>
                    <div class="chart-label y-label">Frequency</div>
                    <div class="row">
                        <div class="col-md-6 padd-right-0">
                            <div class="yellow-matrix"><h1>Risk Transfer</h1></div>
                        </div>
                        <div class="col-md-6 padd-right-0">
                            <div class="red-matrix"><h1>Risk Avoid</h1></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 padd-right-0">
                            <div class="green-matrix"><h1>Risk Retain</h1></div>
                        </div>
                        <div class="col-md-6 padd-right-0">
                            <div class="blue-matrix"><h1>Risk Reduce</h1></div>
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
            <br/>
        </div>';
    } else if($url_link == "Mutual Fund") {
        echo '<div class="container-fluid">
            <div class="chart-row">
                <div class="chart-pill chart-col">
                    <h3>Capital Needs</h3>
                    <div class="chart-rect brown">Education Corpus</div>
                    <div class="chart-rect green">Retirement Corpus</div>
                    <div class="chart-rect yellow">Marriage Corpus</div>
                    <div class="chart-rect violet">Real Estate Corpus</div>
                </div>
                <div class="chart-line-h"></div>
                <div class="chart-pill-fit chart-col">
                    <div style="margin: auto; font-size: 25px">Asset Allocation</div>
                </div>
                <div class="chart-line-h"></div>
                <div class="chart-pill chart-col">
                    <h3>Portfolio Management</h3>
                    <div class="chart-rect dark-green">Bonds & Deposits</div>
                    <div class="chart-rect dark-yellow">Sovereign Gold Bond</div>
                    <div class="chart-rect dark-blue">Mutual Fund</div>
                    <div class="chart-rect dark-red">Shares</div>
                </div>
            </div><br/>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="chart-row">
                        <div class="chart-pill chart-col">
                            <h3>Pro&#39;s</h3>
                            High Liquidity<br/>
                            Professional in Management<br/>
                            Risk Return<br/>
                            Divertication
                        </div>
                        <div class="chart-line-h"></div>
                        <div class="chart-pill chart-col">
                            <h3>Con&#39;s</h3>
                            Principal Risk<br/>
                            Volatile<br/>
                            Subject to Tax Payables
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div><br/><br/>
            <div class="row">
                <div class="col-md-12">
                    <a href="https://api.whatsapp.com/send?phone=9444425260&amp;text=Query%20Regarding%20Mutual%20Fund" target="_blank">Know More</a>
                </div>
            </div><br/><br/>
        </div>';
    } else if($url_link == "Equity") {
        echo '<div class="container-fluid">
            <div class="chart-row">
                <div class="chart-pill chart-col">
                    <h3>Capital Needs</h3>
                    <div class="chart-rect brown">Education Corpus</div>
                    <div class="chart-rect green">Retirement Corpus</div>
                    <div class="chart-rect yellow">Marriage Corpus</div>
                    <div class="chart-rect violet">Real Estate Corpus</div>
                </div>
                <div class="chart-line-h"></div>
                <div class="chart-pill-fit chart-col">
                    <div style="margin: auto; font-size: 25px">Asset Allocation</div>
                </div>
                <div class="chart-line-h"></div>
                <div class="chart-pill chart-col">
                    <h3>Portfolio Management</h3>
                    <div class="chart-rect dark-green">Bonds & Deposits</div>
                    <div class="chart-rect dark-yellow">Sovereign Gold Bond</div>
                    <div class="chart-rect dark-blue">Mutual Fund</div>
                    <div class="chart-rect dark-red">Shares</div>
                </div>
            </div><br/>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="chart-row">
                        <div class="chart-pill chart-col">
                            <h3>Pro&#39;s</h3>
                            Self Management<br/>
                            High Return<br/>
                            High Liquidity
                        </div>
                        <div class="chart-line-h"></div>
                        <div class="chart-pill chart-col">
                            <h3>Con&#39;s</h3>
                            High Risk<br/>
                            High Volatile<br/>
                            Rare Capital Loss
                        </div>
                    </div>  
                </div>
                <div class="col-md-3"></div>
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
                    <h3>&lsquo;Live your today&rsquo;</h3>
                    <h3>&lsquo;Plan your tomorrow&rsquo;</h3>
                    <br/>
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
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="chart-row">
                        <div class="chart-pill chart-col">
                            <h3>Steps to follow</h3>
                            Choose the right loan amount for your financial needs<br/>
                            Best Borrowing Rate<br/>
                            Right term and repaying capacity
                        </div>
                        <div class="chart-line-h"></div>
                        <div class="chart-pill chart-col">
                            <h3>Benefits</h3>
                            More Purchasing Power
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
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
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="chart-row">
                        <div class="chart-pill chart-col">
                            <h3>Steps to follow</h3>
                            Interest Rate Risk<br/>
                            Default Risk<br/>
                            Liquidity Risk<br/>
                            Re investment Risk<br/>
                            Tax payable Risk
                        </div>
                        <div class="chart-line-h"></div>
                        <div class="chart-pill chart-col">
                            <h3>Benefits</h3>
                            Safety<br/>
                            Liquidity<br/>
                            Returns
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
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
                    <h4>Why NRI should invest in India</h4>
                    <p>
                        <ul>
                            <li>Dollar Vs. Rupee Benefits</li>
                            <li>Better ROI</li>
                            <li>Less Tax Payable</li>
                            <li>Best Investment option for NRI in india</li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="https://api.whatsapp.com/send?phone=9444425260&amp;text=Query%20Regarding%20NRI%20Desk" target="_blank">Know More</a>
                </div>
            </div>
        </div>';
    } else if($url_link == "Business Finance Management") {
        echo '<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <img src="img/bfm.jpg" alt="" style="width: auto; height: 500px;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="https://api.whatsapp.com/send?phone=9444425260&amp;text=Query%20Regarding%20Business%20Finance%20Management" target="_blank">Know More</a>
                </div>
            </div>
        </div>';
    } else if($url_link == "Wealth Management") {
        echo '<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <img src="img/wm.jpg" alt="" style="width: auto; height: 500px;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="https://api.whatsapp.com/send?phone=9444425260&amp;text=Query%20Regarding%20Wealth%20Management" target="_blank">Know More</a>
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