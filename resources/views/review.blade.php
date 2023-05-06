<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!--Fontawsome--> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--End fontawesome-->


	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Home::Dashboard InstaFinance Loan Applications</title>

	<link href="{{asset('dashboardassets/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="#">
          <span class="align-middle">KYC FORMS</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="{{route('personaldetails_blade')}}">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Personal details</span>
            </a>
					</li>

				


					<li class="sidebar-item" >
						<a class="sidebar-link" href="{{route('nextofkindetails')}}">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle" style="color:white">Next of Kin</span>
            </a>
					</li>




					<li class="sidebar-item" >
						<a class="sidebar-link" href="{{route('bankdetails')}}" >
              <i class="align-middle" data-feather="log-in"></i> <span class="align-middle" style="color:white">Bank Details</span>
            </a>
					</li>
					

					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle" style="color:white">Employer Details</span>
            </a>
					</li>

				
					<li class="sidebar-item sidebar-link">
					<i class="align-middle" data-feather="check-square"></i>
					<form action="{{route('attatchments')}}" method="GET">
													@csrf
											<button style="color:white">Attatchments</button>		
																				
	</form>
					</li>

				
					<li class="sidebar-item">
						<a class="sidebar-link" href="#chartjs-dashboard-line">
              <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle" style="color:white">KYC Review</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="mailto:instafinance@gmail.com">
              <i class="align-middle" data-feather="map"></i> <span class="align-middle" style="color:white">help</span>
            </a>
					</li>
				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Download our Android App</strong>
						<div class="mb-3 text-sm">
							Are you looking for a mobile app component? Download it for free here.
						</div>
						<div class="d-grid">
							<a href="upgrade-to-pro.html" class="btn btn-primary">Download</a>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<!--Main Page-->

		<div class="main">
						<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
		

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						
						<li class="nav-item dropdown">
							
						<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
						
							{{Auth::user()->name}} <i id="usericon" class="fas fa-user-shield" style="font-size:26px"></i>

							<img id="userprofile" src="{{asset('attatchments_loans/'.Auth::user()->profilepicture )}}" style="width:80px; height:80px; border-radius:100%"/>
</a>
							<div class="dropdown-menu dropdown-menu-end">
							<!--Profile Route-->
							<form action="{{'profileclient/'.Auth::user()->id}}" method="POST">
									@csrf
									<input type="hidden" value="nothing to send here"/>
									<button class="dropdown-item"><i class="align-middle me-1" data-feather="user"></i> profile</button>  
									 
									</form>
								<!--End profile route-->	



								<a class="dropdown-item" href="{{'analyticsView/'.Auth::user()->id}}"><i class="align-middle me-1" data-feather="pie-chart"></i>Analytics
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
			
<input id="hide" type="hidden" value="{{ Auth::user()->utility }}"/>


<center>

 <!--Successs Application-->
 @if (session('status'))
      <div class="alert alert-success w-75">
         {!! session('status') !!}
      </div>
@endif


 <!--Successs KYC FORM Application-->
 @if (session('kyc'))
      <div class="alert alert-success w-75">
         {!! session('kyc') !!}
      </div>
@endif


<!--If Multiple loan numbers are detected in the database-->
@if (session('wrongloannumber'))
      <div class="alert alert-danger w-75">
         {!! session('wrongloannumber') !!}
      </div>
@endif



<!--If Token Expired-->
@if (session('tokenExpired'))
      <div class="alert alert-danger w-75">
         {!! session('tokenExpired') !!}
      </div>
@endif




<!--Submit KYC Form error if user tries to access loanAmortisation/analysis without submitting KYC-->
@if (session('kycError'))
      <div class="alert alert-danger w-75">
         {!! session('kycError') !!}
      </div>
@endif



<!--When a Client has a pending loan and tries to reapply (detected on bank method controller) -->
@if (session('pendingb'))
      <div class="alert alert-danger w-75">
         {!! session('pendingb') !!}
      </div>
@endif



<!--When a Client has a pending loan and tries to reapply (detected on loan method controller) -->
@if (session('pendingl'))
      <div class="alert alert-danger w-75">
         {!! session('pendingl') !!}
      </div>
@endif



<!--profilepicture set Successsfully-->
@if (session('profilepicture'))
      <div class="alert alert-success w-75">
         {!! session('profilepicture') !!}
      </div>
@endif




</center>

					


<!--Check if the profile picture has been uploaded-->
<input type="hidden" value="{{Auth::user()->profilepicture}}" id="profilepicture"/>





<script>
//On page load Check if the user has applied for the KYC Forms and if no display the warning exclaimation
//Else hide the warning exclaimation
let x = document.getElementById("hide").value;
	if(x.length > 0){
	document.getElementById("alertNewCustomer").style.display="none";	
	}

//If the user has clicked on apply for a loan check if he/she had KYC Forms and if no denie application
//Else allow application process.
function checkKyc(){
	let x = document.getElementById("hide").value;
	if(x.length == 0){
	alert("Please Fill In your KYC Form first.")	
	}
	else{
        window.location.href="{{route('loanapplication',encrypt(Auth::user()->id))}}";
		//window.location='howlong';
	}
	
}


//Check if profile picture is present and hide the logo else show the logo
//if the profile picture is not uploaded yet
let profilepic = document.getElementById("profilepicture").value;
        if(profilepic.length > 5){
            document.getElementById("usericon").style.display="none";	
           
        }
        else{
            document.getElementById("userprofile").style.display="none";	   
        }
	</script>


<!--Import the blade here-->

									
					 
        
@include('review_kyc')

								<!--Import the blade above--> 
							
						

									
					

			
			</main>
			</div>
			</div>
<hr>
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://esvicsolutions.com" target="_blank"><strong>&copyEsvic solutions</strong></a>
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	

	<script src="{{asset('dashboardassets/js/app.js')}}"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});

		
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>

</body>

</html>