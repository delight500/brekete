
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Brekete Family Complaint System | House of Amaya</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="icon" type="image/png" href="includes/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="includes/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="includes/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="includes/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="includes/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="includes/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="includes/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="includes/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="includes/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="includes/css/util.css">
	<link rel="stylesheet" type="text/css" href="includes/css/main.css">
<!--===============================================================================================-->
<style>
	.center{
		display: block;
		margin-left: auto;
		margin-right: auto;
		width: 50%;
	}
</style>
</head>
<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
				<img src="img/Brekete-Family-Logo-290x300.jpg" alt="" class="center img-fluid" style="width:100px; height:100px;">
					<span class="login100-form-title p-b-43">
						Welcome to Brekete Family Complaint System
					</span>


 <!-- If there is an error it will be shown. -->

            <!-- If user account is created. -->
            @if (count($errors) > 0)
            <ul><li>{{ $error }}</li></ul>
            @endif

					<div class="container-login100-form-btn">
						<a href="#about"data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" class="login100-form-btn">
						 Submit Your Complaint
						</a>
					</div>
					<br>

					<div class="container-login100-form-btn">
						<a href="#about"data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo" class="login100-form-btn">
							Share Testimonials
						</a>
					</div>
					<br>

					<div class="container-login100-form-btn">
						<a href="#about"data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo" class="login100-form-btn">
							About the Complaint System
						</a>
					</div>
					<br>
					<br>


					<!-- <div class="login100-form-social flex-c-m">
						<a href="https://www.linkedin.com/in/godfreyenanghajonas" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-linkedin" aria-hidden="true"></i>
						</a>

						<a href="https://twitter.com/HealthcareDesk" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
						<a href="" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-home" aria-hidden="true"></i>
						</a>
					</div> -->


	                <div class="login100-form-social flex-c-m">
						<!-- <a href="https://www.linkedin.com/in/godfreyenanghajonas" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-linkedin" aria-hidden="true"></i>
						</a> -->
						<a href="https://web.facebook.com/BreketeFamily" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>

						<!-- <a href="https://twitter.com/HealthcareDesk" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a> -->
						<a href="https://www.youtube.com/channel/UCCKn6YDydzEW8e6RZwyrklg" class="login100-form-social-item flex-c-m bg-danger m-r-5">
							<i class="fa fa-youtube" aria-hidden="true"></i>
						</a>
						<a href="" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-home" aria-hidden="true"></i>
						</a>


					</div>


                    	<br><br>
					<div class="container">


					<br>
					<div class="row">
					<div class="col-12 col-lg-12 col-sm-12">
						<div class="card bg-info text-white">
							<div class="card-body">
					<form class="form-inline" action="/action_page.php">
                      <div class="form-group">
                        <label for="email">Track Your Complaint:</label>
                        <input type="email" class="form-control" id="email" placeholder="enter your brekete tracking code"><br>
                        <input type="password" class="form-control" id="email" placeholder="Your Password">
                      </div>
                      <a href="#track" data-toggle="modal" data-target="#tracker" data-whatever="@mdo" class="btn btn-warning">Submit</a>
                    </form>
							</div>
						</div>
						</div>
						</div>
					</div>



				</form>




				<div class="login100-more" style="background-image: url('img/2.png');">

				</div>
			</div>


			<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">About Brekete Family</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <p>This Platform is designed to support the Brekete Family Program tagged Embelembe Olololo at the Human Rights Radio.
         We believe this solution would help the family in collecting, gathering and processing Complaints from Complainants. This is an initiative of the House of Amaya</p>
		 <br>
		 <hr>
		 <h6>How it Works</h6>
           <p>Simply click the complainant form button and fill the form to submit your complaint to Brekete Family for Processing.</p>

        </div>

      </div>
    </div>

  </div>

 	<div class="modal fade" id="tracker" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tracker">Complaint Tracker</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <p>Complaint Status: Pending</p>
		 <br>
		 <p>Complainant: Jakes Sully
		 <p>Complaint Tel: 080652******* </p>
		 <br>
		 <hr>
		 <h6>Case ID: 0BX123</h6>
           <p></p>

        </div>

      </div>
    </div>
</div>

			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel1">File a Complaint</h5>
					  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>
					<div class="modal-body">

                        <form action="/home"  method="POST" enctype="multipart/form-data">
                            @csrf
							<div>
							<label>Full Name</label>
							<input type="text" name="name" class="form-control" required>
                            </div>
                            
							 <br>
							 <div>
								<label>Email</label>
								<input type="email" name="email" class="form-control" required>
								</div>
								<div>
										<label>Gender</label>
										<select type="text" name="gender" class="form-control" required>
											<option value="">Select</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
										</div>

								<br>
								<div>
									<label>Phone No</label>
									<input type="text" name="phone_number" class="form-control" required>
									</div>
									<br>
									<div>
										<label>Your Address</label>
										<input type="text" name="useraddress" class="form-control" required>
										</div>
										<br>
										<div>
											<label>State of Residence</label>
													<select name="state" class="form-control">
                                                    <option value=""  style="display:none">Select State</option>
                                                    @foreach ($states as $state)
                                                        <option value="{{ $state->name }}">{{ $state->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('state')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
										</select>
										</div>

                                        <br>
                                        
											<div>
										<label>Country of Residence </label>
                                        <select name="country" class="form-control" required>
                                                    <option value=""  style="display:none">Select Country</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->name }}">{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('country')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        
										<br>
					                    <div>
										<label>Complaint type</label>
										 <select name="complaint_type" class="form-control" required>
                                                    <option value=""  style="display:none">Select Complaint Type</option>
                                                    @foreach ($complaint_types as $complaint_type)
                                                        <option value="{{ $complaint_type->name }}">{{ $complaint_type->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('complaint_type')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
										</div>
										<br>

										<div>
											<label>Complaint</label>
											<textarea name="complaint" class="form-control" required></textarea>
											</div>
											<br>
									

                                <div>
                                    <label>Upload Documents (can attach more than one)</label>
                                    <hr>
                                    <input multiple="multiple" name="photos[]" type="file" required> 
                                    </div>
                                                                   
                                    <br>

							<input type="submit" name="submit" value="Submit" class="btn btn-md btn-primary" required>

						</form>

					</div>

				  </div>
				</div>
			  </div>
		</div>



		<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">Testimonial Form</h5>
					  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>
					<div class="modal-body">

				  <form action="{{ route('testimonial.store') }}"  method="POST" enctype="multipart/form-data">
                            @csrf
							<div>
							<label>Name</label>
							<input type="text" name="name" class="form-control" required>
							</div>
							<br>


								<div>
									<label>Phone No</label>
									<input type="tel" name="phone_number" class="form-control" required>
									</div>
										<br>
										<div>
										<label>Rating</label>
										 <select name="response" class="form-control">
                                                    <option value=""  style="display:none">Select Rating</option>
                                                        <option value="{{'Excellent'}}">Excellent</option>
                                                        <option value="{{'Good'}}">Good</option>
                                                        <option value="{{'Poor'}}">Poor</option>
                                                   
                                                </select>
										</div>
										  <hr>

												<div>
													<label>State</label>
													<select name="state" class="form-control">
                                                    <option value=""  style="display:none">Select State</option>
                                                    @foreach ($states as $state)
                                                        <option value="{{ $state->name }}">{{ $state->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('state')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
										</select>
													</div>
												<br>

							<input type="submit" name="push" value="submit" class="btn btn-md btn-success">

						</form>
					</div>

				  </div>
				</div>
			  </div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="includes/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="includes/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="includes/vendor/bootstrap/js/popper.js"></script>
	<script src="includes/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="includes/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="includes/vendor/daterangepicker/moment.min.js"></script>
	<script src="includes/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="includes/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="includes/js/main.js"></script>

      @if (Session::has('flash_message'))
             <script>
                 $(window).bind("load", function() {
                 swal("Congratulations!", "{{ Session::get('flash_message') }}", "success");
                });
            </script>
     @endif

	<script>
	window.onload = function() {
		$('#alert').fadeOut(10000);
		$('#Excellent').hide();
		$('#Good').hide();
		$('#Poor').hide();

	 $(function(){
        $('#Excellent1').click(function(){
			$('#Excellent').show();
			$('#Good').hide();
			$('#Poor').hide();
			$('#description2').val('');
			$('#description3').val('');
		});
		$('#Good1').click(function(){
			$('#Good').show();
			$('#Excellent').hide();
			$('#Poor').hide();
			$('#description3').val('');
			$('#description1').val('');


		});
		$('#Poor1').click(function(){
			$('#Good').hide();
			$('#Excellent').hide();
			$('#Poor').show();
			$('#description2').val('');
			$('#description1').val('');
		});


	  });


	}
</script>

</body>
</html>
