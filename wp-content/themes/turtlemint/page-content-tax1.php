<?php
/**
  Template Name: Content Tax1
 */
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="https://www.turtlemint.com/wp-content/themes/turtlemint/assets/images/favicon.png" type="image/x-icon"> 
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- MediaQuery & Other CSS -->
		<style>
            /*Common CSS*/
            body{
                font-family: 'Roboto', sans-serif;
            }

            .device-height{min-height: 100vh;}

            .fw500{font-weight: 500 !important;}
            /*Common CSS*/

            body {
                font-family: 'Roboto', sans-serif;
            }

            .device-height {
                min-height: 100vh;
            }

            .fw500 {
                font-weight: 500 !important;
            }

            .pt5 {
                padding-top: 5px;
            }

            .pt15 {
                padding-top: 15px !important;
            }

            .pb15 {
                padding-bottom: 15px !important;
            }

            .m25 {
                margin-top: 25px;
                margin-bottom: 25px;
            }

            .m40 {
                margin-top: 40px;
                margin-bottom: 40px;
            }

            .header-section {
                background-color: #24b478;
            }

            .main-section {
                background-color: #f0f8f6;
            }

            .header-img {
                padding: 30px 0;
                text-align: center;
            }

            .header3 {
                padding: 0px;
                background-color: #f0f8f6;
            }

            .title {
                color: #323542 !important;
                font-size: 2em;
                font-weight: 500;
                padding-top: 15px;
                line-height: 1.5;
            }

            .sub-title {
                font-size: 1.5em;
                text-align: center;
                font-weight: 600;
            }

            .green-text {
                color: #24b478 !important;
            }

            .text-center {
                text-align: center !important;
            }

            .value-box {
                background-color: #e7e7e7;
                border: none;
                padding: 10px 30px;
                color: #939598 !important;
                font-size: 28px !important;
                font-weight: 400 !important;
                width: 100%;
            }

            .value-box input {
                border: none !important;
                background-color: #e7e7e7 !important;
                color: #939598 !important;
                font-size: 28px !important;
                font-weight: 400 !important;
            }

            input:focus {
                outline: none;
            }

            .inner-row {
                background-color: #efefef;
                padding-top: 5px;
                padding-bottom: 5px;
            }

            .inner-row h3 {
                color: #24b478;
            }

            .age-limit {
                font-size: 1.5em;
                font-weight: 300;
            }

            input[type=checkbox],
            input[type=radio] {
                background-color: #efefef !important;
                border: 2px solid #a7a9ac !important;
            }

            .btn-green {
                background-color: #24b478;
                color: #f0f8f6;
                padding: 10px 30px;
                border: none;
                border-radius: 5px;
                font-size: 1.2em;
                margin: 30px auto;
            }

            .footer-note {
                text-align: center;
                font-weight: 300;
                font-size: 1em;
            }

            input[type="number"],
            input[type="text"] {
                width: 200px;
                margin-top: 15px;
            }


            /******************MEDIA QUERY : DESKTOP & LAPTOP *********************/

            @media screen and (min-width: 1025px)
            /*and (max-width: 1280px) */
            {}

            .text-center {
                text-align: center !important;
            }

            input#selfAge,
            input#parentAge {
                margin-right: 50px;
                outline: 3px solid #a7a9ac;
            }


            /************ Media Query : MOBILE (320px to 479px) ************/

            @media (min-width: 320px) and (max-width: 480px) {
                .title {
                    font-size: 1.1em;
                    font-weight: 600;
                    padding-top: 10px;
                    line-height: 1.5;
                }
                .value-box {
                    background-color: #e7e7e7;
                    border: none;
                    padding: 5px 10px;
                    width: 100%;
                    color: #939598 !important;
                    font-size: 20px !important;
                    font-weight: 400 !important;
                }
                .value-box input {
                    width: 95px !important;
                    color: #939598 !important;
                    font-size: 20px !important;
                    font-weight: 400 !important;
                }
                .age-limit {
                    font-size: 1.2em;
                    font-weight: 300;
                }
                input#selfAge,
                input#parentAge {
                    margin-right: 0;
                }
                input[type="number"],
                input[type="text"] {
                    width:  59% !important;/*55px !important;*/
                    margin-top: 5px;
                }
                #tax-calculator1 input[type="number"],
                #tax-calculator1 input[type="text"] {
                    width: 85px !important;
                    margin-top: 5px;
                }
            }


            /*iPhone 5/SE Media Query 320px X 568px*/

            @media only screen and (width: 320px) {
                /*input[type="number"],input[type="text"] {
                    width: 55px !important;
                    margin-top: 5px;
                }*/
                #tax-calculator1 input[type="number"],
                #tax-calculator1 input[type="text"] {
                    width: 67px !important;
                    margin-top: 5px;
                }
            }


            /********************* Media Query : iPad (768px X 1024px) Portrait & Landscape **************************/

            @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
                #tax-calculator1 input[type="number"],
                input[type="text"] {
                    width: 190px !important;
                    margin-top: 15px;
                }
                input[type="number"],
                input[type="text"] {
                    width: 120px !important;
                    margin-top: 15px;
                }
            }


            /********* iPad {768px X 1024px} : Landscape ***********/

            @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1) {}

            .pt5{
                padding-top: 5px;
            }

            .pt15{
                padding-top: 15px !important;	
            }

            .pb15{	
                padding-bottom: 15px !important;
            }

            .m25{
                margin-top: 25px;
                margin-bottom: 25px;
            }

            .m40{
                margin-top: 40px;
                margin-bottom: 40px;
            }


            .header-section{background-color: #24b478;}

            .main-section{ background-color: #f0f8f6; }

            .header-img{
                padding: 30px 0;
                text-align: center;
            }

            .header3{
                padding: 0px;
                background-color: #f0f8f6;
            }

            .title{
                color: #323542 !important;
                font-size: 2em;
                font-weight: 500;
                padding-top: 15px;
                line-height: 1.5;
            }

            .sub-title{
                font-size: 1.5em;
                text-align: center;
                font-weight: 600;
            }


            .green-text{
                color: #24b478 !important;
            }

            .text-center{text-align: center !important;}

            .value-box{
                background-color: #e7e7e7;
                border: none;
                padding: 10px 30px;
                color: #939598 !important;
                font-size: 28px !important;
                font-weight: 400 !important;
                width: 100%;
            }

            .value-box input {
                border: none !important;
                background-color: #e7e7e7 !important;
                color: #939598 !important;
                font-size: 28px !important;
                font-weight: 400 !important;
            }

            input:focus {
                outline: none;
            }

            .inner-row{
                background-color: #efefef;
                padding-top: 5px;
                padding-bottom: 5px;
            }


            .inner-row h3{
                color: #24b478;
            }

            .age-limit{
                font-size: 1.5em;
                font-weight: 300;
            }

            input[type=checkbox], input[type=radio]{
                background-color: #efefef !important;
                border: 2px solid #a7a9ac !important;
            }

            .btn-green{
                background-color: #24b478;
                color: #f0f8f6 !important;
                padding: 10px 30px;
                border: none;
                border-radius: 5px;
                font-size: 1.2em;
                margin: 30px auto;
            }
            .btn-green:hover, .btn-green:focus {
                color: #f0f8f6;
                font-size: 1.2em;
                text-decoration: none;
            }

            .footer-note{
                text-align: center;
                font-weight: 300;
                font-size: 1em;
            }

            input[type="number"],input[type="text"] {
                width: 200px;
                margin-top: 15px;
            }

            /******************MEDIA QUERY : DESKTOP & LAPTOP *********************/
            @media screen and (min-width: 1025px) /*and (max-width: 1280px) */{}
            .text-center{text-align: center !important;}


            input#selfAge,input#parentAge {
                margin-right: 50px;
                outline: 3px solid #a7a9ac;
            }
                
            /************ Media Query : MOBILE (320px to 479px) ************/

            @media (min-width: 320px) and (max-width: 480px) {
                .title{
                    font-size: 1.1em;
                    font-weight: 600;
                    padding-top: 10px;
                    line-height: 1.5;
                }

                .value-box{
                    background-color: #e7e7e7;
                    border: none;
                    padding: 5px 10px;		
                    width: 100%;
                    color: #939598 !important;
                    font-size: 20px !important;
                    font-weight: 400 !important;
                }

                .value-box input{width: 95px !important;
                    color: #939598 !important;
                    font-size: 20px !important;
                    font-weight: 400 !important;}


                .age-limit{
                    font-size: 1.2em;
                    font-weight: 300;
                }

                input#selfAge,input#parentAge {
                    margin-right: 0;
                }

                input[type="number"],input[type="text"] {
                    width: 59% !important;/*55px !important;*/
                    margin-top: 5px;
                }

                #tax-calculator1 input[type="number"],#tax-calculator1 input[type="text"] {
                    width: 85px !important;
                    margin-top: 5px;
                }


            }

            /*iPhone 5/SE Media Query 320px X 568px*/
            @media only screen and (width: 320px) { 

                /*input[type="number"],input[type="text"] {
                    width: 55px !important;
                    margin-top: 5px;
                }*/

                #tax-calculator1 input[type="number"],#tax-calculator1 input[type="text"] {
                    width: 67px !important;
                    margin-top: 5px;
                }


            }


            /********************* Media Query : iPad (768px X 1024px) Portrait & Landscape **************************/

            @media only screen and (min-device-width : 768px) and (max-device-width : 1024px)  {
                
            #tax-calculator1 input[type="number"],input[type="text"] {
                width: 190px !important;
                margin-top: 15px;
            }

            input[type="number"],input[type="text"] {
                width: 120px  !important;
                margin-top: 15px;
            }

            }


            /********* iPad {768px X 1024px} : Landscape ***********/
            @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 1)  {

                
            }
        </style>
		<!-- Font -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
		<!-- ICON -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script>
			function taxSaverCalc(){
			  event.preventDefault(); 
                var Income = +document.getElementById('income').value;
			    var SelfHealthPremium = +document.getElementById('selfHealthPremium').value;
			    var DependantHealthPremium = +document.getElementById('parentHealthPremium').value;
			    var SelfLifePremium = +document.getElementById('selfLifePremium').value;
			    var SelfELSSPremium = +document.getElementById('selfELSSPremium').value;
			    //----------//
			    var SavingPercentage = 0;
			    if(Income<=250000){
			        SavingPercentage = 0;
			    }
			    else if(Income>250000 && Income<=500000){
			        SavingPercentage = 0.05;
			    }
			    else if(Income>500000 && Income<=1000000){
			        SavingPercentage = 0.2;
			    }
			    else if(Income>1000000){
			        SavingPercentage = 0.3;
			    }
			
			    var SelfAnnualHealthPremiumLimit = 25000;
			    //------Check ------//
			    if (document.getElementById('selfAge').checked) {
			        //Self Age above 60
			        SelfAnnualHealthPremiumLimit = 50000;
			
			    } else {
			        //Self Age not above 60
			    }
			
			    var DependentAnnualHealthPremiumLimit = 25000;
			    //------Check ------//
			    if (document.getElementById('parentAge').checked) {
			        //Parent Age above 60
			        DependentAnnualHealthPremiumLimit = 50000;
			    } else {
			        //Parent Age not above 60
			    }
			
			    var SelfAnnualHealthPremiumSurplus = 0;
			    if(SelfHealthPremium<SelfAnnualHealthPremiumLimit) {
			        SelfAnnualHealthPremiumSurplus = SelfAnnualHealthPremiumLimit - SelfHealthPremium; 
			    }
			
			    var DependentAnnualHealthPremiumSurplus = 0;
			    if(DependantHealthPremium <DependentAnnualHealthPremiumLimit) {
			        DependentAnnualHealthPremiumSurplus = DependentAnnualHealthPremiumLimit - DependantHealthPremium; 
			    }
			
			    var TotalHealthSurplus = 0;
			    var TotalHealthSaving = 0;
			
			    if(SavingPercentage>0){
			      TotalHealthSurplus = SelfAnnualHealthPremiumSurplus + DependentAnnualHealthPremiumSurplus;
			      TotalHealthSaving = TotalHealthSurplus*SavingPercentage;
			    }		
			
			    //Life Premium + ELSS : Together Limit is 150000
			    var TotalLifeELSSSurplus = 0;
			    var TotalLifeELSSSaving = 0;
			    if(SavingPercentage>0){
			      if((SelfLifePremium+SelfELSSPremium)<150000){
			          TotalLifeELSSSurplus = 150000 - (SelfLifePremium+SelfELSSPremium);
			          TotalLifeELSSSaving = TotalLifeELSSSurplus*SavingPercentage;
			      }
			    }


          //Current Saving Calculation
			    var GrandTotalSaving = 0;
			    if(SavingPercentage>0){
			      //GrandTotalSaving = TotalHealthSaving + TotalLifeELSSSaving;//20210303
			    }
			    if(SelfHealthPremium<SelfAnnualHealthPremiumLimit) {
			      GrandTotalSaving +=SelfHealthPremium*SavingPercentage;
			    }
			    else{
			      GrandTotalSaving +=SelfAnnualHealthPremiumLimit*SavingPercentage;
			    }
			    if(DependantHealthPremium <DependentAnnualHealthPremiumLimit)
			    {
			      GrandTotalSaving +=DependantHealthPremium*SavingPercentage;
			    }
			    else{
			      GrandTotalSaving += DependentAnnualHealthPremiumLimit*SavingPercentage;
			    }
			    if((SelfLifePremium+SelfELSSPremium)<150000){
			      GrandTotalSaving += (SelfLifePremium+SelfELSSPremium)*SavingPercentage;
			    }
			    else{
			      GrandTotalSaving += 150000*SavingPercentage;
			    }
			    TotalLifeELSSSaving = parseFloat(TotalLifeELSSSaving).toFixed(2);
			    TotalHealthSaving = parseFloat(TotalHealthSaving).toFixed(2);
			    GrandTotalSaving = parseFloat(GrandTotalSaving).toFixed(2);
			    TotalHealthSurplus = parseFloat(TotalHealthSurplus).toFixed(2);
			    TotalLifeELSSSurplus = parseFloat(TotalLifeELSSSurplus).toFixed(2);
			
			    window.location.href = "tax-savings-calculated?tHSurplus="+TotalHealthSurplus+"&tHSaving="+TotalHealthSaving+"&tLESurplus="+TotalLifeELSSSurplus+"&tLESaving="+TotalLifeELSSSaving+"&gTSaving="+GrandTotalSaving;
			    return false;
			
			}
		</script>   
		<title>Tax Calculator</title>
		<script type="text/javascript">
            (function(c,a){if(!a.__SV){var b=window;try{var d,m,j,k=b.location,f=k.hash;d=function(a,b){return(m=a.match(RegExp(b+"=([^&]*)")))?m[1]:null};f&&d(f,"state")&&(j=JSON.parse(decodeURIComponent(d(f,"state"))),"mpeditor"===j.action&&(b.sessionStorage.setItem("_mpcehash",f),history.replaceState(j.desiredHash||"",c.title,k.pathname+k.search)))}catch(n){}var l,h;window.mixpanel=a;a._i=[];a.init=function(b,d,g){function c(b,i){var a=i.split(".");2==a.length&&(b=b[a[0]],i=a[1]);b[i]=function(){b.push([i].concat(Array.prototype.slice.call(arguments,
            0)))}}var e=a;"undefined"!==typeof g?e=a[g]=[]:g="mixpanel";e.people=e.people||[];e.toString=function(b){var a="mixpanel";"mixpanel"!==g&&(a+="."+g);b||(a+=" (stub)");return a};e.people.toString=function(){return e.toString(1)+".people (stub)"};l="disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split(" ");
            for(h=0;h<l.length;h++)c(e,l[h]);var f="set set_once union unset remove delete".split(" ");e.get_group=function(){function a(c){b[c]=function(){call2_args=arguments;call2=[c].concat(Array.prototype.slice.call(call2_args,0));e.push([d,call2])}}for(var b={},d=["get_group"].concat(Array.prototype.slice.call(arguments,0)),c=0;c<f.length;c++)a(f[c]);return b};a._i.push([b,d,g])};a.__SV=1.2;b=c.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?
            MIXPANEL_CUSTOM_LIB_URL:"file:"===c.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";d=c.getElementsByTagName("script")[0];d.parentNode.insertBefore(b,d)}})(document,window.mixpanel||[]);
            mixpanel.init("94b72fe8fa0b0fbf2984f556ad073226");
        </script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-61873031-7"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-61873031-7', { 'anonymize_ip': false } );
        </script>
	</head>
	<body>
		<div class="mainscreen">
			<!-- Header -->
			<section class="header-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-xs-12 header-img">
							<img src="/wp-content/uploads/2021/03/header.png" alt="" style="width: 80%;">
						</div>
					</div>
				</div>
			</section>
			<section class="main-section" id="tax-calculator1">
				<div class="container" style="padding : 50px 20px 10px 20px;">
					<form action="tax-calculator_2.html" onsubmit="taxSaverCalc(); return false;">
						<div class="row m25">
							<div class="col-7">
								<h3 class="title"><label>Annual Income</label></h3>
							</div>
							<div class="col-5">
								<span class="currencyinput value-box">₹<input type="number" id="income" name="income" required value="0" onfocus="this.value=''"></span>             
							</div>
						</div>
						<!-- Title 1 -->
						<div class="row m25">
							<div class="col-12">
								<h3 class="title">Tax Savings Under Section 80D</h3>
							</div>
						</div>
						<div class="row inner-row pt15">
							<div class="col-12">
								<h3 class="title green-text">Annual Health Insurance Premium</h3>
								<hr style="border-top: 2px solid #24b478;">
							</div>
						</div>
						<div class="row inner-row">
							<div class="col-7">
								<h3 class="title fw500">For Self</h3>
							</div>
							<div class="col-5">
								<span class="currencyinput value-box">₹<input type="number" id="selfHealthPremium" name="selfHealthPremium" required value="0" onfocus="this.value=''"></span>             
							</div>
						</div>
						<div class="row inner-row">
							<div class="col-7">
								<label for="selfAge">Tick if your age is above 60</label>              
							</div>
							<div class="col-1" style="text-align: right;">
								<input type="checkbox" id="selfAge" name="selfAge" value="60">              
							</div>
							<div class="col-12">
								<hr style="border-top: 2px dashed #24b478;">
							</div>
						</div>
						<div class="row inner-row">
							<div class="col-7">
								<h3 class="title fw500">For Parents / Dependents</h3>
							</div>
							<div class="col-5">
								<span class="currencyinput value-box">₹<input type="number" id="parentHealthPremium" name="parentHealthPremium" required value="0" onfocus="this.value=''"></span>             
							</div>
						</div>
						<div class="row inner-row pb15">
							<div class="col-7">
								<label for="parentAge"> Tick if your age is above 60</label>              
							</div>
							<div class="col-1" style="text-align: right;">
								<input type="checkbox" id="parentAge" name="parentAge" value="60">  
							</div>
						</div>
						<!-- END Title 1 -->
						<!-- Title 2 -->
						<div class="row m25">
							<div class="col-12">
								<h3 class="title">Tax Savings Under Section 80C</h3>
							</div>
						</div>
						<div class="row inner-row">
							<div class="col-7">
								<h3 class="title green-text fw500" >Annual Life Insurance Premium</h3>
							</div>
							<div class="col-5">
								<span class="currencyinput value-box">₹<input type="number" name="selfLifePremium" id="selfLifePremium"  required value="0" onfocus="this.value=''"></span>              
							</div>
							<div class="col-12">
								<hr style="border-top: 2px solid #24b478;">
							</div>
						</div>
						<div class="row inner-row">
							<div class="col-7">
								<h3 class="title green-text fw500" >Annual ELSS Investment</h3>
							</div>
							<div class="col-5">
								<span class="currencyinput value-box">₹<input type="number" id="selfELSSPremium" name="selfELSSPremium" required value="0" onfocus="this.value=''"></span>
							</div>
						</div>
						<div class="row">
							<input type="submit" value="CALCULATE TAX SAVINGS" class="btn-green calculate-tax-savings-cta" style="cursor: pointer;">
						</div>
					</form>
				</div>
			</section>
		</div>
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var ga_options = {"link_clicks_delay":"120","gtm":"0","anonymizeip":"0","advanced":"1","snippet_type":"gst","tracking_id":"UA-61873031-7","gtm_id":"","domain":"","scroll_elements":[],"click_elements":[{"name":"share-tax-savings-cta","type":"class","category":"PPC","action":"PPCLeadCTA","label":"PPCLeadCTA-TaxCalc-Share-Button","value":"1","bounce":"false"},{"name":"calculate-tax-savings-cta","type":"class","category":"PPC","action":"PPCLeadCTA","label":"PPCLeadCTA-TaxCalc-Calculate-Button","value":"1","bounce":"false"},{"name":"lp-masterclass-app-cta","type":"class","category":"PPC","action":"PPCLeadCTA","label":"PPCLeadCTA-MasterClass-APP","value":"1","bounce":"false"},{"name":".lp-masterclass-submit>button","type":"advanced","category":"PPC","action":"PPCLeadForm","label":"PPCLeadForm-MasterClass-SUBMIT","value":"1","bounce":"false"},{"name":"lp-masterclass-submit","type":"class","category":"PPC","action":"PPCLeadForm","label":"PPCLeadForm-MasterClass-SUBMIT","value":"1","bounce":"false"},{"name":"lp-earn-app-cta","type":"class","category":"PPC","action":"PPCLeadCTA","label":"PPCLeadCTA-EarnHealthBusiness-APP","value":"1","bounce":"false"},{"name":".lp-earn-submit>button","type":"advanced","category":"PPC","action":"PPCLeadForm","label":"PPCLeadForm-EarnHealthBusiness-SUBMIT","value":"1","bounce":"false"},{"name":"lp-earn-submit","type":"class","category":"PPC","action":"PPCLeadForm","label":"PPCLeadForm-EarnHealthBusiness-SUBMIT","value":"1","bounce":"false"},{"name":".banner-content>.tab-cta>a.quote-cta.btn.btn-green","type":"advanced","category":"SEO","action":"SEOBannerCTA","label":"SEOBannerCTA-FindPlans","value":"1","bounce":"false"},{"name":"headercarmobile","type":"id","category":"SEO","action":"SEOLeadForm","label":"SEOLeadForm-Car-Mobile","value":"1","bounce":"false"},{"name":"headercardesktop","type":"id","category":"SEO","action":"SEOLeadForm","label":"SEOLeadForm-Car-Desktop","value":"1","bounce":"false"},{"name":"headerbikemobile","type":"id","category":"SEO","action":"SEOLeadForm","label":"SEOLeadForm-Bike-Mobile","value":"1","bounce":"false"},{"name":"headerbikedesktop","type":"id","category":"SEO","action":"SEOLeadForm","label":"SEOLeadForm-Bike-Desktop","value":"1","bounce":"false"},{"name":"headerhealthmobile","type":"id","category":"SEO","action":"SEOLeadForm","label":"SEOLeadForm-Health-Mobile","value":"1","bounce":"false"},{"name":"headerhealthdesktop","type":"id","category":"SEO","action":"SEOLeadForm","label":"SEOLeadForm-Health-Desktop","value":"1","bounce":"false"},{"name":".v2-form-submit a.tcb-button-link","type":"advanced","category":"SEO","action":"CTA-PopupBanner","label":"CTA-PopupBanner-FormSubmit","value":"1","bounce":"false"},{"name":"v3-cta-downloadmobileapp","type":"class","category":"SEO","action":"CTA-PopupBanner","label":"CTA-PopupBanner-CTADownloadMobileApp","value":"1","bounce":"false"},{"name":"v3-cta-joinasaposp","type":"class","category":"SEO","action":"CTA-PopupBanner","label":"CTA-PopupBanner-CTAJoinAsAPoSP","value":"1","bounce":"false"},{"name":"v2-form-submitNOTWORKING","type":"class","category":"SEO","action":"CTA-PopupBanner","label":"CTA-PopupBanner-FormSubmit","value":"1","bounce":"false"},{"name":"inline-new-banner-secure-a","type":"class","category":"SEO","action":"CTA-Banner-In-Content","label":"CTA-Banner-In-Content-Car","value":"1","bounce":"false"},{"name":".page-id-12 #page > div.banner-bg > div > div > div > div.tab-cta.tab-flex > a:nth-child(4)","type":"advanced","category":"SEO","action":"CTA-Home-Banner","label":"CTA-Home-Banner-Life","value":"1","bounce":"false"},{"name":".page-id-12 #page > div.banner-bg > div > div > div > div.tab-cta.tab-flex > a:nth-child(3)","type":"advanced","category":"SEO","action":"CTA-Home-Banner","label":"CTA-Home-Banner-Health","value":"1","bounce":"false"},{"name":".page-id-12 #page > div.banner-bg > div > div > div > div.tab-cta.tab-flex > a:nth-child(2)","type":"advanced","category":"SEO","action":"CTA-Home-Banner","label":"CTA-Home-Banner-Bike","value":"1","bounce":"false"},{"name":".page-id-12 #page > div.banner-bg > div > div > div > div.tab-cta.tab-flex > a:nth-child(1)","type":"advanced","category":"SEO","action":"CTA-Home-Banner","label":"CTA-Home-Banner-Car","value":"1","bounce":"false"},{"name":"a.quote-cta.page-cta","type":"advanced","category":"SEO","action":"CTA-InContent-Action","label":"CTA-InContent-Label","value":"1","bounce":"false"},{"name":"poptrackhealth","type":"id","category":"SEO","action":"CTA-popup-health","label":"Health","value":"1","bounce":"false"},{"name":"poptracklife","type":"id","category":"SEO","action":"CTA-popup-life","label":"Life","value":"1","bounce":"false"},{"name":"poptrackcar","type":"id","category":"SEO","action":"CTA-popup-car","label":"Car","value":"1","bounce":"false"},{"name":"poptrackbike","type":"id","category":"SEO","action":"CTA-popup-bike","label":"Bike","value":"1","bounce":"false"},{"name":"trackbtngabike","type":"id","category":"SEO","action":"SEOLeadForm-Bike","label":"Bike","value":"1","bounce":"false"},{"name":"trackbtngacar","type":"id","category":"SEO","action":"SEOLeadForm-Car","label":"Car","value":"1","bounce":"false"},{"name":"trackbtngalife","type":"id","category":"SEO","action":"SEOLeadForm-Life","label":"Life","value":"1","bounce":"false"},{"name":"trackbtngahealth","type":"id","category":"SEO","action":"SEOLeadForm-Health","label":"Health","value":"1","bounce":"false"}]};
            /* ]]> */
        </script>
	</body>
</html>