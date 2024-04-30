<?php 
$act_menu = "home";
include("header.php"); ?>
<div class="gradient">
    <!-- <div class="auto-type">Earn | Protect | Spend</div> -->
    <div class="container-fluid at-container">
        <span class="auto-type" id="type1"></span>
        <span class="auto-type" id="type2"></span>
        <span class="auto-type" id="type3"></span>
    </div>
    <!-- <img src="img/homescreen.gif" alt="" class="homeGif"> -->
</div>
<div class="container-fluid">
    <h1>Why Rsave</h1>
    <div class="row">
        <div class="col-md-8 gallery">
        <div id="slider" class="slider">
        </div>
        <div class="arrows">
            <div class="left">
            <svg viewBox="0 0 512 512" width="100" title="chevron-circle-left" style="color: #0484b4;">
                <path d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zM142.1 273l135.5 135.5c9.4 9.4 24.6 9.4 33.9 0l17-17c9.4-9.4 9.4-24.6 0-33.9L226.9 256l101.6-101.6c9.4-9.4 9.4-24.6 0-33.9l-17-17c-9.4-9.4-24.6-9.4-33.9 0L142.1 239c-9.4 9.4-9.4 24.6 0 34z" fill="rgba(36, 154, 200, 0.5)" />
            </svg>
            </div>
            <div class="right">
            <svg viewBox="0 0 512 512" width="100" title="chevron-circle-right">
                <path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z" fill="rgba(36, 154, 200, 0.5)" />
            </svg>
            </div>
        </div>
        </div>
        <div class="col-md-4" style="text-align: justify" id="change_text">
            <h3>Budgeting</h3>
            <ol>
                <li>Identify Purchasing Power</li>
                <li>Identify Character</li>
                <li>Where your money goes?</li>
                <li>Give you control</li>
            </ol>
        </div>
    </div>
</div>
<br/><br/>
<div class="container-fluid">
    <h1>Our Calculators</h1>
    <div class="row">   
        <div class="col-md-2 col-sm-4">
            <div class="cal-resp">
                <a class="chg-color" href="calculator.php?path=neweducation">
                    <img src="img/blueeducation.svg" alt="fb-logo" class="blue-icon">
                    <img src="img/coloreducation.svg" alt="fb-logo" class="clor-icon">
                     Child Education</a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="cal-resp">
                <a class="chg-color" href="calculator.php?path=newmarriage">
                    <img src="img/bluewedding.svg" alt="fb-logo" class="blue-icon">
                    <img src="img/colorwedding.svg" alt="fb-logo" class="clor-icon">
                     Child Wedding</a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="cal-resp">
                <a class="chg-color" href="calculator.php?path=newcar">
                    <img src="img/bluecar-loan.svg" alt="fb-logo" class="blue-icon">
                    <img src="img/colorcar-loan.svg" alt="fb-logo" class="clor-icon">
                     Car Loan</a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="cal-resp">
                <a class="chg-color" href="calculator.php?path=newhouse">
                    <img src="img/bluehouse-loan.svg" alt="fb-logo" class="blue-icon">
                    <img src="img/colorhouse.svg" alt="fb-logo" class="clor-icon">
                     Home Loan</a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="cal-resp">
                <a class="chg-color" href="calculator.php?path=newvacation">
                    <img src="img/bluevaccation.svg" alt="fb-logo" class="blue-icon">
                    <img src="img/colorvaccation.svg" alt="fb-logo" class="clor-icon">
                     Vaccation Loan</a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="cal-resp">
                <a class="chg-color" href="calculator.php?path=newinsurance">
                    <img src="img/bluefamily.svg" alt="fb-logo" class="blue-icon">
                    <img src="img/colorfamily.svg" alt="fb-logo" class="clor-icon">
                     Family Protection</a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="cal-resp">
                <a class="chg-color" href="calculator.php?path=newretirement">
                    <img src="img/blueretirement.svg" alt="fb-logo" class="blue-icon">
                    <img src="img/Colorretirement.svg" alt="fb-logo" class="clor-icon">
                     Retirement Planning</a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="cal-resp">
                <a class="chg-color" href="calculator.php?path=customgoal">
                    <img src="img/bluegoal.svg" alt="fb-logo" class="blue-icon">
                    <img src="img/colorgoal.svg" alt="fb-logo" class="clor-icon">
                     Custom Goal</a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="cal-resp">
                <a class="chg-color" href="calculator.php?path=EMI76b8">
                    <img src="img/blueloan.svg" alt="fb-logo" class="blue-icon">
                    <img src="img/ColorEMI.svg" alt="fb-logo" class="clor-icon">
                     EMI Calcualtor</a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="cal-resp">
                <a class="chg-color" href="calculator.php?path=SIP76b8">
                    <img src="img/blueSIP.svg" alt="fb-logo" class="blue-icon">
                    <img src="img/ColorSIP.svg" alt="fb-logo" class="clor-icon">
                     SIP Calculator</a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="cal-resp">
                <a class="chg-color" href="calculator.php?path=FV76b8">
                    <img src="img/blueFV.svg" alt="fb-logo" class="blue-icon">
                    <img src="img/colorFV.svg" alt="fb-logo" class="clor-icon">
                     Future Value</a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="cal-resp">
                <a class="chg-color" href="calculator.php?path=crorepati">
                    <img src="img/blueCorerpati.svg" alt="fb-logo" class="blue-icon">
                    <img src="img/colorcorerpati.svg" alt="fb-logo" class="clor-icon">
                     Crorepati Calculator</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <h1>We are Experts in</h1>
    <div class="row seven-cols">   
        <div class="col-md-2 col-sm-4">
            <div class="exp-resp">
                <a href="offerings.php?path=Life%20Insurance"><img src="img/lifeinsurance.png" alt="Life  Insurance"><br/>
                <div class="exp-text">Life Insurance</div></a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="exp-resp">
                <a href="offerings.php?path=General%20Insurance"><img src="img/Generalinsurance.png" alt="General Insurance"><br/>
                <div class="exp-text">General Insurance</div></a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="exp-resp">
                <a href="offerings.php?path=Health%20Insurance"><img src="img/Healthinsurance.png" alt="Health Insurance"><br/>
                <div class="exp-text">Health Insurance</div></a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="exp-resp">
                <a href="offerings.php?path=Mutual%20Fund"><img src="img/MutualFund.png" alt="Mutual Fund"><br/>
                <div class="exp-text">Mutual Fund</div></a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="exp-resp">
                <a href="offerings.php?path=Equity"><img src="img/Equity.png" alt="Equity"><br/>
                <div class="exp-text">Equity</div></a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="exp-resp">
                <a href="offerings.php?path=Business%20Finance%20Management"><img src="img/54ECbonds.png" alt="Business Finance Management"><br/>
                <div class="exp-text">Business Finance Management</div></a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="exp-resp">
                <a href="offerings.php?path=Tax%20Planning"><img src="img/TaxPlanning.png" alt="Tax Planning"><br/>
                <div class="exp-text">Tax Planning</div></a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="exp-resp">
                <a href="offerings.php?path=Wealth%20Management"><img src="img/WealthManagement.png" alt="Wealth Management"><br/>
                <div class="exp-text">Wealth Management</div></a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="exp-resp">
                <a href="offerings.php?path=Financial%20Planning"><img src="img/FinancialPlanning.png" alt="Financial Planning"><br/>
                <div class="exp-text">Financial Planning</div></a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="exp-resp">
                <a href="offerings.php?path=Deposit%20Advice"><img src="img/DepositAdvice.png" alt="Deposit Advice"><br/>
                <div class="exp-text">Deposit Advice</div></a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="exp-resp">
                <a href="offerings.php?path=Loan%20Advice"><img src="img/LoanAdvice.png" alt="Loan Advice"><br/>
                <div class="exp-text">Loan Advice</div></a>
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="exp-resp">
                <a href="offerings.php?path=NRI%20Desk"><img src="img/NRIDesk.png" alt="NRI Desk"><br/>
                <div class="exp-text">NRI Desk</div></a>
            </div>
        </div>
    </div>
</div>
<br/>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <div class="panel bt-blue">
                <div class="panel-heading"><center>Vision</center></div>
                <div class="panel-body">
                <img src="img/vision.png" alt="vision">
                    <br/><br/>
                    To offer a rich debit-free, wealthy environment for a prosperous financially independent Lifestyle with our financial solution.
                </div>
            </div>
            <br>
        </div>
        <div class="col-md-3">
            <div class="panel bt-red">
                <div class="panel-heading"><center>Mission</center></div>
                <div class="panel-body">
                    <img src="img/target.png" alt="mission">
                    <br/><br/>
                    To impart financial responsibility for our clients by offering variety of financial products & services based on their needs.
                </div>
            </div>
            <br>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<br/>
<?php include("footer.php"); ?>
<script src="js/home.js"></script>
<script src="js/typed.js"></script>
<script>
var typed1;
var typed2;
var typed3;
    
function autoType1() {
    if(typed1 != null)
    {
        setTimeout(function() {
            typed1.reset();
            typed2 = null;
            typed1.start();
        }, 500);
    } else {
        typed1 = new Typed('#type1', {
            strings: ['Earn...'],
            typeSpeed: 130,
            backSpeed: 130,
            loop: false,
            showCursor: false,
            onComplete: function() {
                autoType2();
            }
        });
    }
}
function autoType2() {
    if(typed2 != null)
    {
        setTimeout(function() {
            typed2.reset();
            typed2.start();
        }, 500);
    } else {
        typed2 = new Typed('#type2', {
            strings: ['Protect...'],
            typeSpeed: 130,
            backSpeed: 130,
            loop: false,
            showCursor: false,
            onComplete: function() {
                autoType3();
            }
        });
    }
}
function autoType3() {
    if(typed3 != null)
    {
        setTimeout(function() {
            typed3.reset();
            typed3.start();
        }, 500);
    } else {
        typed3 = new Typed('#type3', {
            strings: ['Spend!'],
            typeSpeed: 130,
            backSpeed: 130,
            loop: false,
            showCursor: false,
            onComplete: function() {
                setTimeout(function() {
                    $('.auto-type').text('');
                    typed1.reset();
                    typed1.start();
                }, 2000);
                //autoType1();
            }
        });
    }
}
autoType1();
//   var typed = new Typed('.auto-type', {
//     strings: ['Earn', 'Protect', 'Spend'],
//     typeSpeed: 130,
//     backSpeed: 130,
//     loop: true,
//   });

// Initialize the first Typed instance
/*var typed1 = new Typed('#type1', {
    strings: ['Earn...'],
    typeSpeed: 130,
    backSpeed: 130,
    loop: false,
    showCursor: false,
    onComplete: function() {
        // Start the second Typed instance after the first one completes
        var typed2 = new Typed('#type2', {
            strings: ['Protect...'],
            typeSpeed: 130,
            backSpeed: 130,
            loop: false,
            showCursor: false,
            onComplete: function() {
                // Start the third Typed instance after the second one completes
                var typed3 = new Typed('#type3', {
                    strings: ['Spend!'],
                    typeSpeed: 130,
                    backSpeed: 130,
                    loop: false,
                    showCursor: false
                });
            }
        });
    }
});*/

</script>