<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>RSave</title>
    <link href="image/favicon.ico" type="image/favicon.jpg" rel="shortcut icon">
    <link rel="stylesheet" href="css/bitter.css">
    <!-- <link rel="stylesheet" href="css/all.min.css"/> -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
</head>

<body>
    <nav id="navMenu">
        <div class="navbar">
            <i class="fa fa-bars" aria-hidden="true"></i>
            <div class="logo"><a href="index.php"><img src="img/logo.png" style="height: 70px" alt="Rsave"></a></div>
            <div class="nav-links-container">
                <div class="nav-links">
                    <div class="sidebar-logo">
                        <span class="logo-name">RSave</span>
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </div>
                    <ul class="links">
                        <li class="<?php if ($act_menu == 'home') {
                                        echo "act_menu";
                                    } ?>"><a href="index.php">Home</a></li>
                        <li class="mainmenu">
                            <a href="#">Offerings</a>
                            <i class="fa fa-chevron-down htmlcss-arrow arrow" aria-hidden="true"></i>
                            <ul class="htmlCss-sub-menu sub-menu">
                                <li class="more">
                                    <span><a href="#">Insurance</a>
                                        <i class="fa fa-chevron-right arrow more-arrow" aria-hidden="true"></i>
                                    </span>
                                    <ul class="more-sub-menu sub-menu">
                                        <li><a href="offerings.php?path=Life%20Insurance">Life Insurance</a></li>
                                        <li><a href="offerings.php?path=General%20Insurance">General Insurance</a></li>
                                        <li><a href="offerings.php?path=Health%20Insurance">Health Insurance</a></li>
                                    </ul>
                                </li>
                                <li class="more">
                                    <span class="subMenu"><a href="#">Investments</a>
                                        <i class="fa fa-chevron-right arrow more-arrow" aria-hidden="true"></i>
                                    </span>
                                    <ul class="more-sub-menu sub-menu">
                                        <li><a href="offerings.php?path=Mutual%20Fund">Mutual Fund</a></li>
                                        <li><a href="offerings.php?path=Equity">Equity</a></li>
                                    </ul>
                                </li>
                                <li class="more">
                                    <span><a href="#">Bonds</a>
                                        <i class="fa fa-chevron-right arrow more-arrow" aria-hidden="true"></i>
                                    </span>
                                    <ul class="more-sub-menu sub-menu">
                                        <li><a href="offerings.php?path=54EC%20Bonds">54EC Bonds</a></li>
                                    </ul>
                                </li>
                                <li class="more">
                                    <span><a href="#">Advices</a>
                                        <i class="fa fa-chevron-right arrow more-arrow" aria-hidden="true"></i>
                                    </span>
                                    <ul class="more-sub-menu sub-menu">
                                        <li><a href="offerings.php?path=Deposit%20Advice">Deposit Advice</a></li>
                                        <li><a href="offerings.php?path=Loan%20Advice">Loans Advice</a></li>
                                    </ul>
                                </li>
                                <li><a href="offerings.php?path=Tax%20Planning">Tax Planning</a></li>
                                <li><a href="offerings.php?path=Wealth%20Management">Wealth Management</a></li>
                                <li><a href="offerings.php?path=Financial%20Planning">Financial Planning</a></li>
                                <li><a href="offerings.php?path=NRI%20Desk">NRI Desk</a></li>
                            </ul>
                        </li>
                        <li class="mainmenu <?php if ($act_menu == 'calculator') {
                                        echo "act_menu";
                                    } ?>">
                            <a href="calculator.php">Calculator</a>
                            <i class="fa fa-chevron-down htmlcss-arrow arrow" aria-hidden="true"></i>
                            <ul class="htmlCss-sub-menu sub-menu">
                                <li><a href="calculator.php?path=neweducation">Child's Education</a></li>
                                <li><a href="calculator.php?path=newmarriage">Child's Wedding</a></li>
                                <li><a href="calculator.php?path=newcar">Car Loan</a></li>
                                <li><a href="calculator.php?path=newhouse">Home Loan</a></li>
                                <li><a href="calculator.php?path=newvacation">Vacation Loan</a></li>
                                <li><a href="calculator.php?path=newinsurance">Family Protection</a></li>
                                <li><a href="calculator.php?path=newretirement">Retirement Planning</a></li>
                                <li><a href="calculator.php?path=customgoal">Goals</a></li>
                                <li><a href="calculator.php?path=EMI76b8">EMI</a></li>
                                <li><a href="calculator.php?path=SIP76b8">SIP</a></li>
                                <li><a href="calculator.php?path=FV76b8">Future Value</a></li>
                                <li><a href="calculator.php?path=crorepati">Crorepati</a></li>
                            </ul>
                        </li>
                        <li class="<?php if ($act_menu == 'knowledge') {
                                        echo "act_menu";
                                    } ?>"><a href="knowledge.php">Knowledge Base</a></li>
                        <li class="<?php if ($act_menu == 'about') {
                                        echo "act_menu";
                                    } ?>"><a href="about.php">About Us</a></li>
                    </ul>
                </div>
                <div class="link-boxes">
                    <div class="box input-box">
                        <a class="cl_link" href="https://rsave.fundexpert.net/" target="_blank">Client Login</a>
                        <!-- <input type="button" value="Client Login" onclick="window.open('https://rsave.fundexpert.net/', '_blank')"> -->
                    </div>
                </div>
            </div>
            <!-- <div class="search-box">
            <i class='bx bx-search'></i>
            <div class="input-box">
            <input type="text" placeholder="Search...">
            </div>
        </div> -->
        </div>
    </nav>
    <div class="whats-float">
        <a href="https://api.whatsapp.com/send?phone=9444425260&text=Hi"
            target="_blank">
            <i class="fa fa-whatsapp"></i><span>WhatsApp<br><small>+91 94444 25260</small></span>
        </a>
    </div>