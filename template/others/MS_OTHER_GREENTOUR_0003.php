<?php 
	function send_feedback () {
		global $conn_vn;
		if (isset($_POST['first_name'])) {
			// var_dump($_POST);
			$first_name = mysqli_real_escape_string($conn_vn, $_POST['first_name']);
			$last_name = mysqli_real_escape_string($conn_vn, $_POST['last_name']);
			$email = mysqli_real_escape_string($conn_vn, $_POST['email']);
			$code = mysqli_real_escape_string($conn_vn, $_POST['code']);

			$experience = $_POST['experience'];
			$knowledge_consultant = $_POST['knowledge_consultant'];
			$timely_response = $_POST['timely_response'];
			$enthusiasm = $_POST['enthusiasm'];
			$organizing_skill = $_POST['organizing_skill'];
			$communication = $_POST['communication'];
			$knowledge_guide = $_POST['knowledge_guide'];
			$accommodation = $_POST['accommodation'];
			$itinerary = $_POST['itinerary'];
			$included_meals = $_POST['included_meals'];
			$transportation = $_POST['transportation'];

			$comment_further = mysqli_real_escape_string($conn_vn, $_POST['comment_further']);
			$comment_guide = mysqli_real_escape_string($conn_vn, $_POST['comment_guide']);
			$comment_accommodation = mysqli_real_escape_string($conn_vn, $_POST['comment_accommodation']);
			$comment_itinerary = mysqli_real_escape_string($conn_vn, $_POST['comment_itinerary']);
			$comment_meals = mysqli_real_escape_string($conn_vn, $_POST['comment_meals']);
			$comment_transportation = mysqli_real_escape_string($conn_vn, $_POST['comment_transportation']);
			$comment = mysqli_real_escape_string($conn_vn, $_POST['comment']);

			$sql = "INSERT INTO feedback (first_name, last_name, email, code, experience, knowledge_consultant, timely_response, enthusiasm, organizing_skill, communication, knowledge_guide, accommodation, itinerary, included_meals, transportation, comment_further, comment_guide, comment_accommodation, comment_itinerary, comment_meals, comment_transportation, comment) VALUES ('$first_name', '$last_name', '$email', '$code', $experience, $knowledge_consultant, $timely_response, $enthusiasm, $organizing_skill, $communication, $knowledge_guide, $accommodation, $itinerary, $included_meals, $transportation, '$comment_further', '$comment_guide', '$comment_accommodation', '$comment_itinerary', '$comment_meals', '$comment_transportation', '$comment')";
			$result = mysqli_query($conn_vn, $sql);
			if ($result) {
				echo '<script>alert(\'You have successfully submitted feedback.\')</script>';
			} else {
				echo '<script>alert(\'An error occurred.\')</script>';
			}
		}
	}
	send_feedback();
?>

<style>
.nopadding-1 {
	padding-left: 0;
	padding-right: 0;
}
.control-label {
	padding-top: 7px;
}
hr {
	border: 0.5px solid #000;
	margin-bottom: 20px;
}
@media screen and (min-width: 768px) {
	.nopadding-1 {
		padding-left: 0;
		padding-right: 0;
		margin-bottom: 10px;
		height: 37px;
	}
}
</style>
<form action="" method="post">
<div class="container">
	<p class="gb-text-feedback">We eagerly look forward to hearing from you about the experience you have done with us!</p>
	<div class="feedback">
		<div>
			<div class="row">
				<!-- <div class="col-md-12"> -->
					<div class="col-md-6 nopadding-1">
						<div class="form-group">
						    <label class="control-label col-sm-2 col-md-4" for="first_name">First name *:</label>
						    <div class="col-sm-10 col-md-8">
						      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name" required="">
						    </div>
						</div>
					</div>
					<div class="col-md-6 nopadding-1">
						<div class="form-group">
						    <label class="control-label col-sm-2 col-md-4" for="last_name">Last name *:</label>
						    <div class="col-sm-10 col-md-8">
						      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name" required="">
						    </div>
						</div>
					</div>
					<div class="col-md-12 nopadding-1">
						<div class="form-group">
						    <label class="control-label col-sm-2" for="email">Email *:</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="">
						    </div>
						</div>
					</div>
					<div class="col-md-12 nopadding-1">
						<div class="form-group">
						    <label class="control-label col-sm-2" for="code">Your trip code:</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="code" name="code" placeholder="Ex: VNAT010319 - It is in the confirmation letter we sent you">
						    </div>
						</div>
					</div>
				<!-- </div> -->
			</div>
			<hr>
			<div class="row">
				<div class="col-md-5">
					<strong>Your overall experience:</strong> <i class="fa fa-star star" aria-hidden="true" id="exp-1" onclick="expf(1)"></i>
					<i class="fa fa-star star" aria-hidden="true" id="exp-2" onclick="expf(2)"></i>
					<i class="fa fa-star star" aria-hidden="true" id="exp-3" onclick="expf(3)"></i>
					<i class="fa fa-star star" aria-hidden="true" id="exp-4" onclick="expf(4)"></i>
					<i class="fa fa-star star" aria-hidden="true" id="exp-5" onclick="expf(5)"></i>
					<input type="hidden" name="experience" value="0" id="exp">
				</div>
				<div class="col-md-7">
					<div class="col-md-5">
						<p><i class="fa fa-star star-1" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Poor</p>
						<p>
							<i class="fa fa-star star-1" aria-hidden="true"></i>
							<i class="fa fa-star star-1" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Fair
						</p>
						<p>
							<i class="fa fa-star star-1" aria-hidden="true"></i>
							<i class="fa fa-star star-1" aria-hidden="true"></i>
							<i class="fa fa-star star-1" aria-hidden="true"></i>
							: Average
						</p>
					</div>
					<div class="col-md-7">
						<p class="star-none">&nbsp;</p>
						<p>
							<i class="fa fa-star star-1" aria-hidden="true"></i>
							<i class="fa fa-star star-1" aria-hidden="true"></i>
							<i class="fa fa-star star-1" aria-hidden="true"></i>
							<i class="fa fa-star star-1" aria-hidden="true"></i>
							: Good
						</p>
						<p>
							<i class="fa fa-star star-1" aria-hidden="true"></i>
							<i class="fa fa-star star-1" aria-hidden="true"></i>
							<i class="fa fa-star star-1" aria-hidden="true"></i>
							<i class="fa fa-star star-1" aria-hidden="true"></i>
							<i class="fa fa-star star-1" aria-hidden="true"></i>
							: Excellent
						</p>

					</div>
				</div>
			</div>
			<div class="row item-feedback">
				<div class="col-md-4">
					<p><strong>1. Pre-trip consultant:</strong></p>
					<p>
						<span class="text-name">Knowledge</span>
						<i class="fa fa-star star" aria-hidden="true" id="know-sult-1" onclick="know_sult(1)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="know-sult-2" onclick="know_sult(2)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="know-sult-3" onclick="know_sult(3)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="know-sult-4" onclick="know_sult(4)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="know-sult-5" onclick="know_sult(5)"></i>
						<input type="hidden" name="knowledge_consultant" value="0" id="know-sult">
					</p>
					<p>
						<span class="text-name">Timely response</span>
						<i class="fa fa-star star" aria-hidden="true" id="time-1" onclick="timef(1)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="time-2" onclick="timef(2)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="time-3" onclick="timef(3)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="time-4" onclick="timef(4)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="time-5" onclick="timef(5)"></i>
						<input type="hidden" name="timely_response" value="0" id="time">
					</p>
				</div>
				<div class="col-md-8">
					<textarea class="form-control gb-text-row" placeholder="Enter your further comment" name="comment_further" rows="5"></textarea>
				</div>
			</div>
			<div class="row item-feedback">
				<div class="col-md-4">
					<p><strong>2. Your tour guide:</strong></p>
					<p>
						<span class="text-name">Enthusiasm</span>
						<i class="fa fa-star star" aria-hidden="true" id="enthu-1" onclick="enthuf(1)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="enthu-2" onclick="enthuf(2)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="enthu-3" onclick="enthuf(3)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="enthu-4" onclick="enthuf(4)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="enthu-5" onclick="enthuf(5)"></i>
						<input type="hidden" name="enthusiasm" value="0" id="enthu">
					</p>
					<p>
						<span class="text-name">Organizing skill</span>
						<i class="fa fa-star star" aria-hidden="true" id="skill-1" onclick="skillf(1)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="skill-2" onclick="skillf(2)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="skill-3" onclick="skillf(3)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="skill-4" onclick="skillf(4)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="skill-5" onclick="skillf(5)"></i>
						<input type="hidden" name="organizing_skill" value="0" id="skill">
					</p>
					<p>
						<span class="text-name">Communication</span>
						<i class="fa fa-star star" aria-hidden="true" id="comm-1" onclick="commf(1)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="comm-2" onclick="commf(2)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="comm-3" onclick="commf(3)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="comm-4" onclick="commf(4)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="comm-5" onclick="commf(5)"></i>
						<input type="hidden" name="communication" value="0" id="comm">
					</p>
					<p>
						<span class="text-name">Knowledge</span>
						<i class="fa fa-star star" aria-hidden="true" id="kguide-1" onclick="kguidef(1)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="kguide-2" onclick="kguidef(2)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="kguide-3" onclick="kguidef(3)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="kguide-4" onclick="kguidef(4)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="kguide-5" onclick="kguidef(5)"></i>
						<input type="hidden" name="knowledge_guide" value="0" id="kguide">
					</p>
				</div>
				<div class="col-md-8">
					<textarea class="form-control gb-text-row" placeholder="Enter your tour guide comment" name="comment_guide" rows="5"></textarea>
				</div>
			</div>
			<div class="row item-feedback">
				<div class="col-md-4">
					<p>
						<span class="text-name-1"><strong>3. Accommodation:</strong></span>
						<i class="fa fa-star star" aria-hidden="true" id="accom-1" onclick="accomf(1)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="accom-2" onclick="accomf(2)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="accom-3" onclick="accomf(3)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="accom-4" onclick="accomf(4)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="accom-5" onclick="accomf(5)"></i>
						<input type="hidden" name="accommodation" value="0" id="accom">
					</p>
					
				</div>
				<div class="col-md-8">
					<textarea class="form-control gb-text-row" placeholder="Enter your accommodation comment" name="comment_accommodation" rows="5"></textarea>
				</div>
			</div>
			<div class="row item-feedback">
				<div class="col-md-4">
					<p>
						<span class="text-name-1"><strong>4. Trip itinerary:</strong></span>
						<i class="fa fa-star star" aria-hidden="true" id="iti-1" onclick="itif(1)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="iti-2" onclick="itif(2)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="iti-3" onclick="itif(3)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="iti-4" onclick="itif(4)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="iti-5" onclick="itif(5)"></i>
						<input type="hidden" name="itinerary" value="0" id="iti">
					</p>
					
				</div>
				<div class="col-md-8">
					<textarea class="form-control gb-text-row" placeholder="Please give us your trip itinerary idea to improve it" name="comment_itinerary" rows="5"></textarea>
				</div>
			</div>
			<div class="row item-feedback">
				<div class="col-md-4">
					<p>
						<span class="text-name-1"><strong>5. Included meals:</strong></span>
						<i class="fa fa-star star" aria-hidden="true" id="meal-1" onclick="mealf(1)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="meal-2" onclick="mealf(2)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="meal-3" onclick="mealf(3)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="meal-4" onclick="mealf(4)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="meal-5" onclick="mealf(5)"></i>
						<input type="hidden" name="included_meals" value="0" id="meal">
					</p>
					
				</div>
				<div class="col-md-8">
					<textarea class="form-control gb-text-row" placeholder="Enter your comment on included meals" name="comment_meals" rows="5"></textarea>
				</div>
			</div>
			<div class="row item-feedback">
				<div class="col-md-4">
					<p>
						<span class="text-name-1"><strong>6. Transportation:</strong></span>
						<i class="fa fa-star star" aria-hidden="true" id="trans-1" onclick="transf(1)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="trans-2" onclick="transf(2)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="trans-3" onclick="transf(3)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="trans-4" onclick="transf(4)"></i>
						<i class="fa fa-star star" aria-hidden="true" id="trans-5" onclick="transf(5)"></i>
						<input type="hidden" name="transportation" value="0" id="trans">
					</p>
					
				</div>
				<div class="col-md-8">
					<textarea class="form-control gb-text-row" placeholder="Enter your transportation comment" name="comment_transportation" rows="5"></textarea>
				</div>
			</div>
			<div class="row item-feedback">
				<div class="col-md-4">
					<p>
						<strong>Your other comments:</strong>
					</p>
					
				</div>
				<div class="col-md-8">
					<textarea class="form-control gb-text-row" placeholder="Any other comment on your trip, please let us know!" name="comment" rows="5"></textarea>
				</div>
			</div>
			<div class="row center">
				<button>Send</button>
				<p>Thanks for your time to complete the feedback!</p>
			</div>
		</div>
	</div>
</div>
</form>

<script type="text/javascript">
	function expf (num) {
		document.getElementById("exp").value = num;
		if (num == 1) {
			document.getElementById("exp-1").style.color = '#004a80';
			document.getElementById("exp-2").style.color = '#fff';
			document.getElementById("exp-3").style.color = '#fff';
			document.getElementById("exp-4").style.color = '#fff';
			document.getElementById("exp-5").style.color = '#fff';
		}
		if (num == 2) {
			document.getElementById("exp-1").style.color = '#004a80';
			document.getElementById("exp-2").style.color = '#004a80';
			document.getElementById("exp-3").style.color = '#fff';
			document.getElementById("exp-4").style.color = '#fff';
			document.getElementById("exp-5").style.color = '#fff';
		}
		if (num == 3) {
			document.getElementById("exp-1").style.color = '#004a80';
			document.getElementById("exp-2").style.color = '#004a80';
			document.getElementById("exp-3").style.color = '#004a80';
			document.getElementById("exp-4").style.color = '#fff';
			document.getElementById("exp-5").style.color = '#fff';
		}
		if (num == 4) {
			document.getElementById("exp-1").style.color = '#004a80';
			document.getElementById("exp-2").style.color = '#004a80';
			document.getElementById("exp-3").style.color = '#004a80';
			document.getElementById("exp-4").style.color = '#004a80';
			document.getElementById("exp-5").style.color = '#fff';
		}
		if (num == 5) {
			document.getElementById("exp-1").style.color = '#004a80';
			document.getElementById("exp-2").style.color = '#004a80';
			document.getElementById("exp-3").style.color = '#004a80';
			document.getElementById("exp-4").style.color = '#004a80';
			document.getElementById("exp-5").style.color = '#004a80';
		}
	}

	function know_sult (num) {
		document.getElementById("know-sult").value = num;
		if (num == 1) {
			document.getElementById("know-sult-1").style.color = '#004a80';
			document.getElementById("know-sult-2").style.color = '#fff';
			document.getElementById("know-sult-3").style.color = '#fff';
			document.getElementById("know-sult-4").style.color = '#fff';
			document.getElementById("know-sult-5").style.color = '#fff';
		}
		if (num == 2) {
			document.getElementById("know-sult-1").style.color = '#004a80';
			document.getElementById("know-sult-2").style.color = '#004a80';
			document.getElementById("know-sult-3").style.color = '#fff';
			document.getElementById("know-sult-4").style.color = '#fff';
			document.getElementById("know-sult-5").style.color = '#fff';
		}
		if (num == 3) {
			document.getElementById("know-sult-1").style.color = '#004a80';
			document.getElementById("know-sult-2").style.color = '#004a80';
			document.getElementById("know-sult-3").style.color = '#004a80';
			document.getElementById("know-sult-4").style.color = '#fff';
			document.getElementById("know-sult-5").style.color = '#fff';
		}
		if (num == 4) {
			document.getElementById("know-sult-1").style.color = '#004a80';
			document.getElementById("know-sult-2").style.color = '#004a80';
			document.getElementById("know-sult-3").style.color = '#004a80';
			document.getElementById("know-sult-4").style.color = '#004a80';
			document.getElementById("know-sult-5").style.color = '#fff';
		}
		if (num == 5) {
			document.getElementById("know-sult-1").style.color = '#004a80';
			document.getElementById("know-sult-2").style.color = '#004a80';
			document.getElementById("know-sult-3").style.color = '#004a80';
			document.getElementById("know-sult-4").style.color = '#004a80';
			document.getElementById("know-sult-5").style.color = '#004a80';
		}
	}

	function timef (num) {
		document.getElementById("time").value = num;

		if (num == 1) {
			document.getElementById("time-1").style.color = '#004a80';
			document.getElementById("time-2").style.color = '#fff';
			document.getElementById("time-3").style.color = '#fff';
			document.getElementById("time-4").style.color = '#fff';
			document.getElementById("time-5").style.color = '#fff';
		}
		if (num == 2) {
			document.getElementById("time-1").style.color = '#004a80';
			document.getElementById("time-2").style.color = '#004a80';
			document.getElementById("time-3").style.color = '#fff';
			document.getElementById("time-4").style.color = '#fff';
			document.getElementById("time-5").style.color = '#fff';
		}
		if (num == 3) {
			document.getElementById("time-1").style.color = '#004a80';
			document.getElementById("time-2").style.color = '#004a80';
			document.getElementById("time-3").style.color = '#004a80';
			document.getElementById("time-4").style.color = '#fff';
			document.getElementById("time-5").style.color = '#fff';
		}
		if (num == 4) {
			document.getElementById("time-1").style.color = '#004a80';
			document.getElementById("time-2").style.color = '#004a80';
			document.getElementById("time-3").style.color = '#004a80';
			document.getElementById("time-4").style.color = '#004a80';
			document.getElementById("time-5").style.color = '#fff';
		}
		if (num == 5) {
			document.getElementById("time-1").style.color = '#004a80';
			document.getElementById("time-2").style.color = '#004a80';
			document.getElementById("time-3").style.color = '#004a80';
			document.getElementById("time-4").style.color = '#004a80';
			document.getElementById("time-5").style.color = '#004a80';
		}
	}

	function enthuf (num) {
		document.getElementById("enthu").value = num;

		if (num == 1) {
			document.getElementById("enthu-1").style.color = '#004a80';
			document.getElementById("enthu-2").style.color = '#fff';
			document.getElementById("enthu-3").style.color = '#fff';
			document.getElementById("enthu-4").style.color = '#fff';
			document.getElementById("enthu-5").style.color = '#fff';
		}
		if (num == 2) {
			document.getElementById("enthu-1").style.color = '#004a80';
			document.getElementById("enthu-2").style.color = '#004a80';
			document.getElementById("enthu-3").style.color = '#fff';
			document.getElementById("enthu-4").style.color = '#fff';
			document.getElementById("enthu-5").style.color = '#fff';
		}
		if (num == 3) {
			document.getElementById("enthu-1").style.color = '#004a80';
			document.getElementById("enthu-2").style.color = '#004a80';
			document.getElementById("enthu-3").style.color = '#004a80';
			document.getElementById("enthu-4").style.color = '#fff';
			document.getElementById("enthu-5").style.color = '#fff';
		}
		if (num == 4) {
			document.getElementById("enthu-1").style.color = '#004a80';
			document.getElementById("enthu-2").style.color = '#004a80';
			document.getElementById("enthu-3").style.color = '#004a80';
			document.getElementById("enthu-4").style.color = '#004a80';
			document.getElementById("enthu-5").style.color = '#fff';
		}
		if (num == 5) {
			document.getElementById("enthu-1").style.color = '#004a80';
			document.getElementById("enthu-2").style.color = '#004a80';
			document.getElementById("enthu-3").style.color = '#004a80';
			document.getElementById("enthu-4").style.color = '#004a80';
			document.getElementById("enthu-5").style.color = '#004a80';
		}
	}

	function skillf (num) {
		document.getElementById("skill").value = num;

		if (num == 1) {
			document.getElementById("skill-1").style.color = '#004a80';
			document.getElementById("skill-2").style.color = '#fff';
			document.getElementById("skill-3").style.color = '#fff';
			document.getElementById("skill-4").style.color = '#fff';
			document.getElementById("skill-5").style.color = '#fff';
		}

		if (num == 2) {
			document.getElementById("skill-1").style.color = '#004a80';
			document.getElementById("skill-2").style.color = '#004a80';
			document.getElementById("skill-3").style.color = '#fff';
			document.getElementById("skill-4").style.color = '#fff';
			document.getElementById("skill-5").style.color = '#fff';
		}
		if (num == 3) {
			document.getElementById("skill-1").style.color = '#004a80';
			document.getElementById("skill-2").style.color = '#004a80';
			document.getElementById("skill-3").style.color = '#004a80';
			document.getElementById("skill-4").style.color = '#fff';
			document.getElementById("skill-5").style.color = '#fff';
		}
		if (num == 4) {
			document.getElementById("skill-1").style.color = '#004a80';
			document.getElementById("skill-2").style.color = '#004a80';
			document.getElementById("skill-3").style.color = '#004a80';
			document.getElementById("skill-4").style.color = '#004a80';
			document.getElementById("skill-5").style.color = '#fff';
		}
		if (num == 5) {
			document.getElementById("skill-1").style.color = '#004a80';
			document.getElementById("skill-2").style.color = '#004a80';
			document.getElementById("skill-3").style.color = '#004a80';
			document.getElementById("skill-4").style.color = '#004a80';
			document.getElementById("skill-5").style.color = '#004a80';
		}
	}

	function commf (num) {
		document.getElementById("comm").value = num;

		if (num == 1) {
			document.getElementById("comm-1").style.color = '#004a80';
			document.getElementById("comm-2").style.color = '#fff';
			document.getElementById("comm-3").style.color = '#fff';
			document.getElementById("comm-4").style.color = '#fff';
			document.getElementById("comm-5").style.color = '#fff';
		}
		if (num == 2) {
			document.getElementById("comm-1").style.color = '#004a80';
			document.getElementById("comm-2").style.color = '#004a80';
			document.getElementById("comm-3").style.color = '#fff';
			document.getElementById("comm-4").style.color = '#fff';
			document.getElementById("comm-5").style.color = '#fff';
		}
		if (num == 3) {
			document.getElementById("comm-1").style.color = '#004a80';
			document.getElementById("comm-2").style.color = '#004a80';
			document.getElementById("comm-3").style.color = '#004a80';
			document.getElementById("comm-4").style.color = '#fff';
			document.getElementById("comm-5").style.color = '#fff';
		}
		if (num == 4) {
			document.getElementById("comm-1").style.color = '#004a80';
			document.getElementById("comm-2").style.color = '#004a80';
			document.getElementById("comm-3").style.color = '#004a80';
			document.getElementById("comm-4").style.color = '#004a80';
			document.getElementById("comm-5").style.color = '#fff';
		}
		if (num == 5) {
			document.getElementById("comm-1").style.color = '#004a80';
			document.getElementById("comm-2").style.color = '#004a80';
			document.getElementById("comm-3").style.color = '#004a80';
			document.getElementById("comm-4").style.color = '#004a80';
			document.getElementById("comm-5").style.color = '#004a80';
		}
	}

	function kguidef (num) {
		document.getElementById("kguide").value = num;

		if (num == 1) {
			document.getElementById("kguide-1").style.color = '#004a80';
			document.getElementById("kguide-2").style.color = '#fff';
			document.getElementById("kguide-3").style.color = '#fff';
			document.getElementById("kguide-4").style.color = '#fff';
			document.getElementById("kguide-5").style.color = '#fff';
		}
		if (num == 2) {
			document.getElementById("kguide-1").style.color = '#004a80';
			document.getElementById("kguide-2").style.color = '#004a80';
			document.getElementById("kguide-3").style.color = '#fff';
			document.getElementById("kguide-4").style.color = '#fff';
			document.getElementById("kguide-5").style.color = '#fff';
		}
		if (num == 3) {
			document.getElementById("kguide-1").style.color = '#004a80';
			document.getElementById("kguide-2").style.color = '#004a80';
			document.getElementById("kguide-3").style.color = '#004a80';
			document.getElementById("kguide-4").style.color = '#fff';
			document.getElementById("kguide-5").style.color = '#fff';
		}
		if (num == 4) {
			document.getElementById("kguide-1").style.color = '#004a80';
			document.getElementById("kguide-2").style.color = '#004a80';
			document.getElementById("kguide-3").style.color = '#004a80';
			document.getElementById("kguide-4").style.color = '#004a80';
			document.getElementById("kguide-5").style.color = '#fff';
		}
		if (num == 5) {
			document.getElementById("kguide-1").style.color = '#004a80';
			document.getElementById("kguide-2").style.color = '#004a80';
			document.getElementById("kguide-3").style.color = '#004a80';
			document.getElementById("kguide-4").style.color = '#004a80';
			document.getElementById("kguide-5").style.color = '#004a80';
		}
	}

	function accomf (num) {
		document.getElementById("accom").value = num;

		if (num == 1) {
			document.getElementById("accom-1").style.color = '#004a80';
			document.getElementById("accom-2").style.color = '#fff';
			document.getElementById("accom-3").style.color = '#fff';
			document.getElementById("accom-4").style.color = '#fff';
			document.getElementById("accom-5").style.color = '#fff';
		}
		if (num == 2) {
			document.getElementById("accom-1").style.color = '#004a80';
			document.getElementById("accom-2").style.color = '#004a80';
			document.getElementById("accom-3").style.color = '#fff';
			document.getElementById("accom-4").style.color = '#fff';
			document.getElementById("accom-5").style.color = '#fff';
		}
		if (num == 3) {
			document.getElementById("accom-1").style.color = '#004a80';
			document.getElementById("accom-2").style.color = '#004a80';
			document.getElementById("accom-3").style.color = '#004a80';
			document.getElementById("accom-4").style.color = '#fff';
			document.getElementById("accom-5").style.color = '#fff';
		}
		if (num == 4) {
			document.getElementById("accom-1").style.color = '#004a80';
			document.getElementById("accom-2").style.color = '#004a80';
			document.getElementById("accom-3").style.color = '#004a80';
			document.getElementById("accom-4").style.color = '#004a80';
			document.getElementById("accom-5").style.color = '#fff';
		}
		if (num == 5) {
			document.getElementById("accom-1").style.color = '#004a80';
			document.getElementById("accom-2").style.color = '#004a80';
			document.getElementById("accom-3").style.color = '#004a80';
			document.getElementById("accom-4").style.color = '#004a80';
			document.getElementById("accom-5").style.color = '#004a80';
		}
	}

	function itif (num) {
		document.getElementById("iti").value = num;

		if (num == 1) {
			document.getElementById("iti-1").style.color = '#004a80';
			document.getElementById("iti-2").style.color = '#fff';
			document.getElementById("iti-3").style.color = '#fff';
			document.getElementById("iti-4").style.color = '#fff';
			document.getElementById("iti-5").style.color = '#fff';
		}
		if (num == 2) {
			document.getElementById("iti-1").style.color = '#004a80';
			document.getElementById("iti-2").style.color = '#004a80';
			document.getElementById("iti-3").style.color = '#fff';
			document.getElementById("iti-4").style.color = '#fff';
			document.getElementById("iti-5").style.color = '#fff';
		}
		if (num == 3) {
			document.getElementById("iti-1").style.color = '#004a80';
			document.getElementById("iti-2").style.color = '#004a80';
			document.getElementById("iti-3").style.color = '#004a80';
			document.getElementById("iti-4").style.color = '#fff';
			document.getElementById("iti-5").style.color = '#fff';
		}
		if (num == 4) {
			document.getElementById("iti-1").style.color = '#004a80';
			document.getElementById("iti-2").style.color = '#004a80';
			document.getElementById("iti-3").style.color = '#004a80';
			document.getElementById("iti-4").style.color = '#004a80';
			document.getElementById("iti-5").style.color = '#fff';
		}
		if (num == 5) {
			document.getElementById("iti-1").style.color = '#004a80';
			document.getElementById("iti-2").style.color = '#004a80';
			document.getElementById("iti-3").style.color = '#004a80';
			document.getElementById("iti-4").style.color = '#004a80';
			document.getElementById("iti-5").style.color = '#004a80';
		}
	}

	function mealf (num) {
		document.getElementById("meal").value = num;

		if (num == 1) {
			document.getElementById("meal-1").style.color = '#004a80';
			document.getElementById("meal-2").style.color = '#fff';
			document.getElementById("meal-3").style.color = '#fff';
			document.getElementById("meal-4").style.color = '#fff';
			document.getElementById("meal-5").style.color = '#fff';
		}
		if (num == 2) {
			document.getElementById("meal-1").style.color = '#004a80';
			document.getElementById("meal-2").style.color = '#004a80';
			document.getElementById("meal-3").style.color = '#fff';
			document.getElementById("meal-4").style.color = '#fff';
			document.getElementById("meal-5").style.color = '#fff';
		}
		if (num == 3) {
			document.getElementById("meal-1").style.color = '#004a80';
			document.getElementById("meal-2").style.color = '#004a80';
			document.getElementById("meal-3").style.color = '#004a80';
			document.getElementById("meal-4").style.color = '#fff';
			document.getElementById("meal-5").style.color = '#fff';
		}
		if (num == 4) {
			document.getElementById("meal-1").style.color = '#004a80';
			document.getElementById("meal-2").style.color = '#004a80';
			document.getElementById("meal-3").style.color = '#004a80';
			document.getElementById("meal-4").style.color = '#004a80';
			document.getElementById("meal-5").style.color = '#fff';
		}
		if (num == 5) {
			document.getElementById("meal-1").style.color = '#004a80';
			document.getElementById("meal-2").style.color = '#004a80';
			document.getElementById("meal-3").style.color = '#004a80';
			document.getElementById("meal-4").style.color = '#004a80';
			document.getElementById("meal-5").style.color = '#004a80';
		}
	}

	function transf (num) {
		document.getElementById("trans").value = num;

		if (num == 1) {
			document.getElementById("trans-1").style.color = '#004a80';
			document.getElementById("trans-2").style.color = '#fff';
			document.getElementById("trans-3").style.color = '#fff';
			document.getElementById("trans-4").style.color = '#fff';
			document.getElementById("trans-5").style.color = '#fff';
		}
		if (num == 2) {
			document.getElementById("trans-1").style.color = '#004a80';
			document.getElementById("trans-2").style.color = '#004a80';
			document.getElementById("trans-3").style.color = '#fff';
			document.getElementById("trans-4").style.color = '#fff';
			document.getElementById("trans-5").style.color = '#fff';
		}
		if (num == 3) {
			document.getElementById("trans-1").style.color = '#004a80';
			document.getElementById("trans-2").style.color = '#004a80';
			document.getElementById("trans-3").style.color = '#004a80';
			document.getElementById("trans-4").style.color = '#fff';
			document.getElementById("trans-5").style.color = '#fff';
		}
		if (num == 4) {
			document.getElementById("trans-1").style.color = '#004a80';
			document.getElementById("trans-2").style.color = '#004a80';
			document.getElementById("trans-3").style.color = '#004a80';
			document.getElementById("trans-4").style.color = '#004a80';
			document.getElementById("trans-5").style.color = '#fff';
		}
		if (num == 5) {
			document.getElementById("trans-1").style.color = '#004a80';
			document.getElementById("trans-2").style.color = '#004a80';
			document.getElementById("trans-3").style.color = '#004a80';
			document.getElementById("trans-4").style.color = '#004a80';
			document.getElementById("trans-5").style.color = '#004a80';
		}
	}
</script>