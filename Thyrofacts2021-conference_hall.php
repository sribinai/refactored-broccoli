<?php
session_start();
include("../connection.php");
if (empty($_SESSION["attnd_id"])) {?><script> alert('Looks like you have been idle here for long so we logged you out. Please go back to the Expo entry so you can log back in. Sorry for any inconvenience');window.location.href="https://eventgurus.net/virtual/Thyrofacts2021"; </script><?php exit; }
$_SESSION['event_id']=217;$_SESSION['event_name']= "THYRO-FACTS 2021";
$_SESSION['hall']=1;
include("youtube_views.php");
$pathh=$_SERVER['DOCUMENT_ROOT']."/conf/".$_SESSION["event_id"]; 
if(file_exists($pathh."/youtubehall1.txt")) 
{
	$youtubeurl=file_get_contents("https://eventgurus.net/conf/".$_SESSION["event_id"]."/youtubehall1.txt"); 
	$youtube="yes";   
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>THYRO-FACTS 2021</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
	integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"
	integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"
	integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"></script>
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
	
	<style>
		@media only screen and (orientation:landscape) {
			#turn{ display:none; }
			#container{ display:block; }
		}
		@media only screen and (orientation:portrait){
			#turn{ display:block; }
			#container{ display:none; }
		}
		@media only screen and (max-width: 600px) {
			#image-background {
				padding-top: 750px; 
			}
		}
		
		#center2 {
			position: absolute;
			top: 9%;
			left: 25%;
		}
		@media only screen and (max-width: 1080px){
			#center2 {
				position: absolute;
				top: 43%;
				left: 49%;
				transform: translate(-50%, -50%);
			}
		}
		@media only screen and (max-width: 1080px){
			#video {
				width: 380px;
				height: 179px;
			}
		}

				/* (dell lap)for 1366 laptop monitor Not working but at present default is working */
				
        @media only screen and (min-width: 1200px) and (max-width: 1400px) and (orientation:landscape) {
			#video {
				width: 657px;
				height: 305px;
			}
			
			#center10 {
				position: absolute;
				top: 37%;
				left: 90%;
			}
			
			#center11 { 
				position: absolute; 
				top: 37%;
				left: 5%;
			}
			
			#center12 {
				position: absolute;
				top: 87%;
				left: 35%;
			}
			
			#center13 {
				position: absolute;
				top: 87%;
				left: 44%;
			}
			
			#center14 {
				position: absolute;
				top: 87%;
				left: 55%;
			}
        }
		
					/* for 1600x900 large monitor */
					
        @media only screen and (min-width: 1600px)   and (orientation:landscape) {
			#video {
				width: 740px;
				height: 360px;
			}
			
			#center10 {
				position: absolute;
				top: 37%;
				left: 90%;
			}
			
			#center11 { 
				position: absolute; 
				top: 37%;
				left: 5%;
			}
			
			#center12 {
				position: absolute;
				top: 87%;
				left: 35%;
			}
			
			#center13 {
				position: absolute;
				top: 87%;
				left: 44%;
			}
			
			#center14 {
				position: absolute;
				top: 87%;
				left: 55%;
			}
		}
				
						/* for FHD monitor */
						
        @media only screen and (min-width: 1650px)   and (orientation:landscape) {
			#video {
				width: 790px;
				height: 370px;	
			}
			
			#center10 {
				position: absolute;
				top: 37%;
				left: 90%;
			}
			
			#center11 { 
				position: absolute; 
				top: 37%;
				left: 5%;
			}
			
			#center12 {
				position: absolute;
				top: 87%;
				left: 35%;
			}
			
			#center13 {
				position: absolute;
				top: 87%;
				left: 44%;
			}
			
			#center14 {
				position: absolute;
				top: 87%;
				left: 55%;
			}
		}
		
		#center2-2 {
			position: absolute;
			top: 20%;
			left: 28%; 
		}
		#center10 {
			position: absolute;
			top: 37%;
			left: 90%;
		}
		@media only screen and (max-width: 1080px){
			#center10 {
				position: absolute;
				top: 27%;
				left: 92%;
				transform: translate(-50%, -50%);
			}
		}
		#center11 { 
			position: absolute; 
			top: 37%;
			left: 5%;
		}
		@media only screen and (max-width: 1080px){
			#center11 {
				position: absolute;
				top: 27%;
				left: 8%;
				transform: translate(-50%, -50%);
			}
		}
		#result {
			position: absolute;
			top: 46%; 
			left: 12%;
		}
		@media only screen and (max-width: 600px) {
			#result {
				padding-top: 1550px; 
			}
		}
		@media only screen and (max-width: 1080px){
			#result {
				width: 50px;
				top: 54%;
				left: 13%;
			}
		}
		#result1 {
			position: absolute;
			top: 46%;
			left: 80%;
		}
		@media only screen and (max-width: 600px) {
			#result1 {
				padding-top: 1550px; 
			}
		}
		@media only screen and (max-width: 1080px){
			#result1 {
				width: 50px;
				top: 54%;
				left: 80%;
			}
		}
		#center12 {
			position: absolute;
			top: 87%;
			left: 35%;
		}
		@media only screen and (max-width: 1080px){
			#center12 {
				position: absolute;
				top: 108%;
				left: 37%;
				transform: translate(-50%, -50%);
			}
		}   
		#center13 {
			position: absolute;
			top: 87%;
			left: 45%;
		}
		@media only screen and (max-width: 1080px){
			#center13 {
				position: absolute;
				top: 108%;
				left: 49%;
				transform: translate(-50%, -50%);
			}
		} 
		#center14 {
			position: absolute;
			top: 87%;
			left: 55%;
		}
		@media only screen and (max-width: 1080px){
			#center14 {
				position: absolute;
				top: 108%;
				left: 61%;
				transform: translate(-50%, -50%);
			}
		} 
		
				/* your css rules for ipad landscape */
				
		@media all and (min-width: 1000px)  and (min-height: 650px) and (-webkit-min-device-pixel-ratio: 2) and (orientation:landscape) {
			#video {
				width: 505px;
				height: 230px;	
			} 
			
			#center2 {
				position: absolute;
				top: 30%;
				left: 50%;
			}
			
			#center12 {
				position: absolute;
				top: 57%;
				left: 38%;
			}
			
			#center13 {
				position: absolute;
				top: 57%;
				left: 49%;
			}
			
			#center14 {
				position: absolute;
				top: 57%;
				left: 59%;
			}
			
			#center10 {
				position: absolute;
				top: 37%;
				left: 95%;
			}
			
			#center11 { 
				position: absolute; 
				top: 37%;
				left: 4%;
			}
		}
	</style>
</head>

<body style="background-color: black;">
	<!-- rotate -->
	<div id="turn">
		<div id="warning-message" style="background-color: #034D8D; height: 1000px;"> 
			<p style="padding-right: 20px;">
				<img src="https://storage.unitedwebnetwork.com/files/559/9b44b49fe17f49acbcb9a23c01ddcf58.gif">
			</p>
			<h1 style="color: white; font-size: 24px; text-align: center;">Please rotate your device to landscape</h1>
		</div>
	</div>
	
	<!-- Backgrond Image--> 
	<p class="d-none d-sm-block" id="image-background"><img src="images/THYROFACT VIRTUAL STAGE.png" class="img-fluid"></p>
		
	<div class="container-fluid d-none d-sm-block">
		<!-- Video -->
		<?php
		if(isset($youtube) && $youtube=="yes")
		{
		?>
		<div class="centered" id="center2">
			<iframe src="https://www.youtube.com/embed/<?php echo file_get_contents("214/youtubehall1.txt"); ?>"  
			class="responsive-iframe" id="video" width="850" height="400" frameborder="0" allow="accelerometer; autoplay; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<?php
		}
		else
		{
		?>
		<div class="centered" id="center2-2">
		<span style="color: white;">Session not started. Do <a href="https://eventgurus.net/expo/indea2021.php">visit our Expo</a>
		and come back.<br/>If you choose to stay here, 
		<br/>Please refresh this page after sometime to watch the session.<br/>You may use the "Question?" Button on the right
		for your questions to<br/>speakers during sessions.<br/>There will be Polls during the Case study.<br/>Please use the 
		Poll Button on the left to vote for your choices during the poll.</span>
		</div>   
		<?php		
		}
		?>
		
		<!-- ask a question button -->
		<div class="centered" id="center10">
			<a class="btn" data-toggle="modal" data-target="#askaquestion" style="background-color: #fff; color:#110837;
			font-size: 18px; font-weight: 600;">Question?</a>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="askaquestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" 
		aria-hidden="true" style="">
			<div class="modal-dialog" role="document">
				<div class="modal-content" style="width: 68%;">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Question ?</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<iframe src="https://eventgurus.net/stalls/chat_login" height="350"></iframe>  
					</div> 
				</div>
			</div>
		</div>
		
		<!-- Poll button
		<div class="centered" id="center11">
			<button onclick="polls()" class="btn" style="background-color: #fff; 
			color:#110837; font-size: 18px; font-weight: 700;">POLL</button> 
		</div>-->
		<!-- conf. exhibition button 
		<div class="centered" id="center12">
			<a href="https://eventgurus.net/expo/indea2021.php" class="btn" style="background-color: #fff; color: #110837; 
			font-weight: 800; font-size: 20px; border-radius: 7px; border-color: black;">Expo</a>
		</div>-->
		<!-- download prgm button 
		<div class="centered" id="center13">
			<a href="https://eventgurus.net/virtual/images/Invite%20&%20Agenda.pdf" target="_blank" class="btn" 
			style="background-color: #fff; color: #110837; font-weight: 800; font-size: 20px; border-radius: 7px; 
			border-color: black;">Program</a>
		</div>-->
		<!-- help button 
		<div class="centered" id="center14">
			<a data-toggle="modal" data-target="#exampleModal" class="btn" style="background-color: #fff; color: #110837; font-weight: 800; font-size: 20px;
			border-radius: 7px; border-color: black;">Help</a>
		</div>-->
			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" 
			aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Help Details</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p style="color: #007bff; font-weight: 500;">Please use these numbers for any help with the 
							conference</p>
							<p style="color: #007bff; font-weight: 500;">1. Technical: 94467 08127</p>
							<p style="color: #007bff; font-weight: 500;">2. Registration: 94467 08127</p>
							<p style="color: #007bff; font-weight: 500;">Please send a screen shot or photograph of the issue 
							to help you serve better.</p>
							<p style="color: #007bff; font-weight: 500;">E-mail: eventGurus.team@gmail.com</p>
						</div>
					</div>
				</div> 
				</div>
			</div>
	</div>
	
</body>

</html>
<script>
function polls()
{
	window.open('http://eventgurus.net/poll/attendee-poll','targetWindow',
                                   'toolbar=no',
                                    'location=no',
                                    'status=no',
                                    'menubar=no',
                                    'scrollbars=yes',
                                    'resizable=yes',
                                    'width=SomeSize',
                                    'height=SomeSize'); 
}
if(typeof(EventSource) !== "undefined") { 
	var source = new EventSource("adhall2.php");    
    source.onmessage = function(event) {
		var str=event.data;
		//alert(res[0]);alert("1=="+res[1]);
		document.getElementById("result").innerHTML = str; 
		document.getElementById("result1").innerHTML = str; 
    };
} else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";  
}
</script>

