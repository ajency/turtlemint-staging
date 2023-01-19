<?php
/**
  Template Name: Content Tax3
 */
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="https://www.turtlemint.com/wp-content/themes/turtlemint/assets/images/favicon.png" type="image/x-icon"> 
		<meta property="og:title" content="Tax Calculator" />
		<meta property="og:description" content="You can save more tax. Check now!">
		<meta property="og:type" content="article" />
		<meta property="og:locale" content="en_GB" />
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
                    padding: 5px 0px;
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
                    width: 69% !important;/*55px !important;*/
                    margin-top: 5px;
                }
                #tax-calculator1 input[type="number"],
                #tax-calculator1 input[type="text"] {
                    width: 85px !important;
                    margin-top: 5px;
                }
                .row.inner-row.pb15>.col-6>.row>.col-8{padding-left:10px !important; padding-right: 10px !important;}
            }


            /*iPhone 5/SE Media Query 320px X 568px*/

            @media only screen and (width: 320px) {
                /*input[type="number"],input[type="text"] {
                    width: 55px !important;
                    margin-top: 5px;
                }*/
                #tax-calculator1 input[type="number"],
                #tax-calculator1 input[type="text"] {
                    width: 69% !important;/*67px !important;*/
                    margin-top: 5px;
                }

                .row.inner-row.pb15>.col-6>.row>.col-8{padding-left:10px !important; padding-right: 10px !important;}
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
                .row.inner-row.pb15>.col-6>.row>.col-8{padding-left:10px !important; padding-right: 10px !important;}
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
                    padding: 5px 0px;		
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
                    width: 69% !important;/*55px !important;*/
                    margin-top: 5px;
                }

                #tax-calculator1 input[type="number"],#tax-calculator1 input[type="text"] {
                    width: 85px !important;
                    margin-top: 5px;
                }

                .row.inner-row.pb15>.col-6>.row>.col-8{padding-left:10px !important; padding-right: 10px !important;}


            }

            /*iPhone 5/SE Media Query 320px X 568px*/
            @media only screen and (width: 320px) { 

                /*input[type="number"],input[type="text"] {
                    width: 55px !important;
                    margin-top: 5px;
                }*/

                #tax-calculator1 input[type="number"],#tax-calculator1 input[type="text"] {
                    width: 69% !important;/*67px !important;*/
                    margin-top: 5px;
                }

                .row.inner-row.pb15>.col-6>.row>.col-8{padding-left:10px !important; padding-right: 10px !important;}


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
                .row.inner-row.pb15>.col-6>.row>.col-8{padding-left:10px !important; padding-right: 10px !important;}

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
		<title>Turtlemint provide save tax</title>
		<script>
      //Helper Function
			function getParameterByName(name, url = window.location.href) {
			    name = name.replace(/[\[\]]/g, '\\$&');
			    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
			        results = regex.exec(url);
			    if (!results) return null;
			    if (!results[2]) return '';
			    return decodeURIComponent(results[2].replace(/\+/g, ' '));
			}
		</script>
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
			<section class="header-section" >
				<div class="container">
					<div class="row">
						<div class="col-12 header3">
							<img src="/wp-content/uploads/2021/03/header-img-3.png" alt="" style="width: 100%;">
						</div>
					</div>
				</div>
			</section>
			<section class="main-section">
				<div class="container device-height" style="padding : 50px 20px 10px 20px;">
					<div class="row pb15">
						<div class="col-7">
							<h3 class="title green-text">Your Current<br>
								Tax Saving is ₹<span id="gTSavingSpan">0</span>
							</h3>
							<p id="moreSaving">But, there is more to save!</p>
						</div>
						<div class="col-5 pt15">
							<img src="/wp-content/uploads/2021/03/header-img.png" width="100%">            
						</div>
					</div>
					<form action="" onsubmit="return taxSaverCalc();">
						<!-- Title 1 -->
						<div class="row inner-row pt15">
							<div class="col-12">
								<h3 class="title green-text text-center">Health Insurance</h3>
							</div>
						</div>
						<div class="row inner-row pb15">
							<div class="col-6">
								<div class="row">
									<div class="col-4">
										<h3 class="title fw500">Buy</h3>
									</div>
									<div class="col-8">
										<span class="currencyinput value-box">₹<input type="number" id="tHSurplus" name="tHSurplus" required value="0"></span>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="row">
									<div class="col-4">
										<h3 class="title fw500">Save</h3>
									</div>
									<div class="col-8">
										<span class="currencyinput value-box">₹<input type="number" id="tHSaving" name="tHSaving" required value="0"></span>
									</div>
								</div>
							</div>
						</div>
						<!-- Title 2 -->
						<div class="row inner-row pt15" style="margin-top: 10px;">
							<div class="col-12">
								<h3 class="title green-text text-center">Mutual Funds/ Life Insurance</h3>
							</div>
						</div>
						<div class="row inner-row pb15">
							<div class="col-6">
								<div class="row">
									<div class="col-4">
										<h3 class="title fw500">Buy</h3>
									</div>
									<div class="col-8">
										<span class="currencyinput value-box">₹<input type="number" id="tLESurplus" name="tLESurplus" required value="0"></span>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="row">
									<div class="col-4">
										<h3 class="title fw500">Save</h3>
									</div>
									<div class="col-8">
										<span class="currencyinput value-box">₹<input type="number" id="tLESaving" name="tLESaving" required value="0"></span>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="m40">
							<h3 class="title text-center green-text">Contact Your Turtlemint Advisor Today!</h3>
						</div> -->
						<!-- <div class="m40">
							<p class="footer-note">*Tax Saver MintPack average rate of return annualized over 3 years.</p>            
							</div> -->
					</form>
				</div>
			</section>
		</div>
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script>
			document.getElementById("tHSurplus").value = getParameterByName('tHSurplus'); 
			document.getElementById("tHSaving").value = getParameterByName('tHSaving');
			document.getElementById("tLESurplus").value = getParameterByName('tLESurplus'); 
			document.getElementById("tLESaving").value = getParameterByName('tLESaving');
			document.getElementById("gTSavingSpan").textContent = getParameterByName('gTSaving');
			var tHS = +document.getElementById('tHSaving').value;
			var tLE = +document.getElementById('tLESaving').value;
			if((tHS+tLE)>0){}
			else{
			  // var moreSaving = document.getElementById("moreSaving");
			  // moreSaving.style.display = "none";
			  document.getElementById("moreSaving").textContent = "Congratulations! You have Maximized Your Savings."
			
			}
		</script>
	</body>
</html>