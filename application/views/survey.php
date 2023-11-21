<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/font.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

	<title>Survay Script</title>
	<style>
		.next-prev-btn {
			display: flex;
			justify-content: end;
			list-style: none;
			margin: 0;
		}

		.survey-footer {
			background: #ea750e;
			position: fixed;
			width: 100%;
			bottom: 0;
			padding: 5px 10px;
		}

		.survey-footer svg {
			width: 45px;
			height: 45px;
			padding: 5px;
		}

		.survey-footer svg .ant-progress-circle-trail {
			stroke: white;
			stroke-dasharray: 295.31px, 295.31px;
			stroke-dashoffset: 0px;
			transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s ease 0s, stroke-width 0.06s ease 0.3s, opacity 0.3s ease 0s;
		}

		.survey-footer svg .ant-progress-circle-path {
			stroke: #152247;
			stroke-dashoffset: 0px;
			transition-property: stroke-dashoffset, stroke-dasharray, stroke, stroke-width, opacity;
			transition-duration: 0s, 0s;
			transition-timing-function: ease, ease, ease, ease, ease;
			transition-delay: 0s, 0s, 0s, 0.3s, 0s;
		}

		.survey-footer svg .ant-progress-circle-path {
			stroke: #152247;
			stroke-dashoffset: 0px;
			transition-property: stroke-dashoffset, stroke-dasharray, stroke, stroke-width, opacity;
			transition-duration: 0s, 0s;
			transition-timing-function: ease, ease, ease, ease, ease;
			transition-delay: 0s, 0s, 0s, 0.3s, 0s;
		}

		.survey-progress {
			position: relative;
		}

		.card {
			cursor: pointer;
		}

		.card:hover {
			background: #f0f0f0;
		}

		.card.active {
			background: #f0f0f0;
		}

		.survey-footer .survey-progress span {
			position: absolute;
			width: 45px;
			height: 45px;
			left: 0;
			top: 0;
			padding: 5px;
			font-weight: 600;
			color: white;
			font-size: 12px;
			line-height: 34px;
			text-align: center;
		}

		.survey-footer .next-prev-btn .btn-prev,
		.survey-footer .next-prev-btn .btn-next {
			font-weight: 800;
			color: white;
			cursor: pointer;
			font-size: 30px;
		}

		.survay-box {
			padding: 50px 10px;
			width: 100%;
			height: 100%;
			position: relative;
		}

		.survay-box h5 {
			font-weight: 600;
			color: rgba(0, 0, 0, 0.45);
			font-size: 14px;
		}

		.survay-box h1 {
			font-weight: 700;
			color: #142146;
			font-size: 30px;
		}

		.input-value.form-control {
			font-size: 28px;
			border: none;
			border-bottom: 1px solid #142246;
			border-radius: 0;
		}

		.input-value.form-control:focus {
			color: #212529;
			border-bottom: 2px solid #ea750e;
			outline: 0;
			box-shadow: none;
		}

		.input-value.form-control::placeholder {
			color: #d0d0d0;
			opacity: 1;
		}

		.radio-container {
			padding: 10px;
			background: #ea750e4f;
			border-radius: 4px;
			margin: 5px 0;
		}

		.survay {
			max-width: 600px;
			width: 100%;
		}

		.survay h5.card-title {
			font-size: 70px !important;
			color: #ea750e !important;
		}

		.survay p {
			margin-top: 15px;
			font-size: 20px !important;
			color: #152247 !important;
			font-weight: 700;
		}

		.checkbox.form-control {
			background: #f9d4b4;
			padding: 0;
			border: none;
			color: #212529;
		}

		.checkbox.form-control:focus {
			color: #212529;
			border: none;
			outline: 0;
			box-shadow: none;
		}

		.checkbox.form-control::placeholder {
			color: #212529;
			opacity: 1;
		}

		.nxt-btn {
			padding: 10px 46px;
			border: none;
			border-radius: 20px;
			margin-top: 25px;
			background: #ea750e;
			color: white;
		}
	</style>
</head>

<body>
	<div class="wrapper w-100">
		<div class="container">
			<div class="container-box">
				<form class="form">
					<div class="survay-box">
						<div class="survay-box-title mb-5">
							<h5>Question 12</h5>
							<h1>Do you think there is a need for one nation one card ?</h1>
						</div>
						<div class="surveyError" style="color: red"></div>
						<div class="survay mt-5">

						</div>
						<button type="button" class="nxt-btn">Next</button>
					</div>
				</form>
			</div>
		</div>
		<div class="survey-footer">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="survey-progress d-none">
						<svg class="ant-progress-circle" viewBox="0 0 100 100">
							<path class="ant-progress-circle-trail" d="M 50,50 m 0,-47 a 47,47 0 1 1 0,94 a 47,47 0 1 1 0,-94" stroke="white" stroke-linecap="round" stroke-width="6" fill-opacity="0"></path>
							<path class="ant-progress-circle-path" d="M 50,50 m 0,-47 a 47,47 0 1 1 0,94 a 47,47 0 1 1 0,-94" stroke-linecap="round" stroke-width="7" opacity="1" fill-opacity="0" style="stroke-dasharray: 300px, 300px"></path>
						</svg>
						<span class="ant-progress-text" title="78%">0%</span>
					</div>
				</div>
				<div class="col-md-6">
					<ul class="next-prev-btn align-items-center">
						<li class="btn-prev"><i class="icofont-simple-left"></i></li>
						<li class="btn-next"><i class="icofont-simple-right"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
	<script>
		const QuestionSurvey = {
			0: {
				question: "Name of the commuter",
				type: "single-selection",
				option: [
					"",
					"",
					"",
					""
				]
			},
		}
		const SurveyQuestion = {
			0: {
				questionNo: 1,
				question: "Name of the commuter ?",
				questionType: "string",
				answer: "",
				option: `<div class="survay-text mt-5">
						<div class="form-group">
							<input class="input-value form-control" type="text" name="string" id="string" placeholder="Please enter your response">
						</div>
					</div>`
			},
			1: {
				questionNo: 2,
				question: "What is your age group ?",
				questionType: "singleoption",
				answer: "",
				option: `<div class="survay-radio mt-5">
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input1" value="16-24">
								<label class="form-check-label" for="survay-radio-input">
									16-24
								</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input2" value="25-34">
								<label class="form-check-label" for="survay-radio-input2">
									25-34
								</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input3" value="35-60">
								<label class="form-check-label" for="survay-radio-input3">
									35-60
								</label>
							</div>
						</div>
					</div>`
			},
			2: {
				questionNo: 3,
				question: "Are you working or non working ?",
				questionType: "boolen",
				answer: "",
				option: `<div class="row align-items-center">
							<input type="hidden" name="boolen" id="boolen" value="">
							<div class="col-md-6">
								<div class="card" data-value="yes">
									<div class="card-body text-center py-5">
										<h5 class="card-title"><i class="icofont-thumbs-up"></i></h5>
										<p class="card-text">Yes</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card"  data-value="no">
									<div class="card-body text-center py-5">
										<h5 class="card-title"><i class="icofont-thumbs-down"></i></h5>
										<p class="card-text">No</p>
									</div>
								</div>
							</div>
						</div>`,
			},
			3: {
				questionNo: 4,
				question: "Are you a student ?",
				questionType: "boolen",
				answer: "",
				option: `<div class="row align-items-center">
							<input type="hidden" name="boolen" id="boolen" value="">
							<div class="col-md-6">
								<div class="card" data-value="yes">
									<div class="card-body text-center py-5">
										<h5 class="card-title"><i class="icofont-thumbs-up"></i></h5>
										<p class="card-text">Yes</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card"  data-value="no">
									<div class="card-body text-center py-5">
										<h5 class="card-title"><i class="icofont-thumbs-down"></i></h5>
										<p class="card-text">No</p>
									</div>
								</div>
							</div>
						</div>`,
			},
			4: {
				questionNo: 5,
				question: "How do you commute daily ?",
				questionType: "singleoption",
				answer: "",
				option: `<div class="survay-radio mt-5">
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input1" value="Bus">
								<label class="form-check-label" for="survay-radio-input">Bus</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input2" value="Taxi">
								<label class="form-check-label" for="survay-radio-input2">Taxi</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input3" value="Auto">
								<label class="form-check-label" for="survay-radio-input3">Auto</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input3" value="Rail">
								<label class="form-check-label" for="survay-radio-input3">Rail</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input3" value="Other mode">
								<label class="form-check-label" for="survay-radio-input3">Other mode</label>
							</div>
						</div>
					</div>`
			},
			5: {
				questionNo: 6,
				question: "Do you use Janmitra Card ?",
				questionType: "boolen",
				answer: "",
				option: `<div class="row align-items-center">
							<input type="hidden" name="boolen" id="boolen" value="">
							<div class="col-md-6">
								<div class="card" data-value="yes">
									<div class="card-body text-center py-5">
										<h5 class="card-title"><i class="icofont-thumbs-up"></i></h5>
										<p class="card-text">Yes</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card"  data-value="no">
									<div class="card-body text-center py-5">
										<h5 class="card-title"><i class="icofont-thumbs-down"></i></h5>
										<p class="card-text">No</p>
									</div>
								</div>
							</div>
						</div>`,
			},
			6: {
				questionNo: 7,
				question: "why do you use Janmitra card ?",
				questionType: "Multioption",
				answer: "",
				option: `<div class="survay-radio mt-5">
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input1" value="Do not have to buy paper ticket every time">
								<label class="form-check-label" for="survay-radio-input">Do not have to buy paper ticket every time</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input2" value="Discount">
								<label class="form-check-label" for="survay-radio-input2">Discount</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input3" value="Do not have to carry cash">
								<label class="form-check-label" for="survay-radio-input3">Do not have to carry cash</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input3" value="please specify">
								<input type="text" class="checkbox form-control" placeholder="Any other reason, please specify">
							</div>
						</div>
					</div>`
			},
			7: {
				questionNo: 8,
				question: "What kind of services motivated you yo use the janmitra smart card ?",
				questionType: "Multioption",
				answer: "",
				option: `<div class="survay-radio mt-5">
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input1" value="Interoperability multi-modal journey with single card">
								<label class="form-check-label" for="survay-radio-input">Interoperability (multi-modal journey with single card)</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input2" value="Discount on transfer">
								<label class="form-check-label" for="survay-radio-input2">Discount on transfer</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input3" value="Point Program">
								<label class="form-check-label" for="survay-radio-input3">Point Program</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input4" value="Coupon">
								<label class="form-check-label" for="survay-radio-input4">Coupon</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input5" value="Utility payment">
								<label class="form-check-label" for="survay-radio-input5">Utility payment</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input6" value="Cash Back">
								<label class="form-check-label" for="survay-radio-input6">Cash Back</label>
							</div>
						</div>
					</div>`
			},
			8: {
				questionNo: 9,
				question: "How do you top up your Janmitra Card ?",
				questionType: "singleoption",
				answer: "",
				option: `<div class="survay-radio mt-5">
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input1" value="Cash at counter">
								<label class="form-check-label" for="survay-radio-input1">Cash at counter</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input2" value="Paytm">
								<label class="form-check-label" for="survay-radio-input2">Paytm</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input3" value="Mobile banking">
								<label class="form-check-label" for="survay-radio-input3">Mobile banking</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input4" value="please specify">
								<input type="text" class="checkbox form-control" placeholder="Any Other, please specify">
							</div>
						</div>
					</div>`
			},
			9: {
				questionNo: 10,
				question: "What is your monthly spend (INR) on the Janmitra Card  ?",
				questionType: "singleoption",
				answer: "",
				option: `<div class="survay-radio mt-5">
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input1" value="Below 2000">
								<label class="form-check-label" for="survay-radio-input1">Below 2000</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input2" value="2000-3000">
								<label class="form-check-label" for="survay-radio-input2">2000-3000</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input3" value="3000-4000">
								<label class="form-check-label" for="survay-radio-input3">3000-4000</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input3" value="4000-5000">
								<label class="form-check-label" for="survay-radio-input3">4000-5000</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input3" value="Above 5000">
								<label class="form-check-label" for="survay-radio-input3">Above 5000</label>
							</div>
						</div>
					</div>`
			},
			10: {
				questionNo: 11,
				question: "How much have you paid for buying Janmitra Card ?",
				questionType: "singleoption",
				answer: "",
				option: `<div class="survay-radio mt-5">
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input1" value="50">
								<label class="form-check-label" for="survay-radio-input1">Rs 50</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input2" value="75">
								<label class="form-check-label" for="survay-radio-input2">75</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="singleoption" id="survay-radio-input3" value="Free">
								<label class="form-check-label" for="survay-radio-input3">Free</label>
							</div>
						</div>
					</div>
				</div>`
			},
			11: {
				questionNo: 12,
				question: "Do you think there is a need for one nation one card ?",
				questionType: "boolen",
				answer: "",
				option: `<div class="row align-items-center">
							<input type="hidden" name="boolen" id="boolen" value="">
							<div class="col-md-6">
								<div class="card" data-value="yes">
									<div class="card-body text-center py-5">
										<h5 class="card-title"><i class="icofont-thumbs-up"></i></h5>
										<p class="card-text">Yes</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card"  data-value="no">
									<div class="card-body text-center py-5">
										<h5 class="card-title"><i class="icofont-thumbs-down"></i></h5>
										<p class="card-text">No</p>
									</div>
								</div>
							</div>
						</div>`,
			},
			12: {
				questionNo: 7,
				question: "why dont you use Janmitra card ?",
				questionType: "Multioption",
				answer: "",
				option: `<div class="survay-radio mt-5">
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input1" value="Interoperability multi-modal journey with single card">
								<label class="form-check-label" for="survay-radio-input1">Cannot top-up big amount at a time</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input2" value="Discount on transfer">
								<label class="form-check-label" for="survay-radio-input2">No problem with paper ticket</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input3" value="Point Program">
								<label class="form-check-label" for="survay-radio-input3">Do not often use public transportation</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input4" value="Coupon">
								<label class="form-check-label" for="survay-radio-input4">Do not feel like topping-up every time</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input5" value="Utility payment">
								<label class="form-check-label" for="survay-radio-input5">Complicated card validation procedure</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input6" value="Cash Back">
								<label class="form-check-label" for="survay-radio-input6">Already having similar cards (Do not feel like holding additional card)</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input7" value="please specify">
								<input type="text" class="checkbox form-control" placeholder="Any other reason, please specify">
							</div>
						</div>
					</div>`
			},
			13: {
				questionNo: 8,
				question: "What challenges you face in Janmitra card ?",
				questionType: "Multioption",
				answer: "",
				option: `<div class="survay-radio mt-5">
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input1" value="Interoperability multi-modal journey with single card">
								<label class="form-check-label" for="survay-radio-input1">Costly</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input2" value="Discount on transfer">
								<label class="form-check-label" for="survay-radio-input2">Not acceptable everywhere</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input3" value="Point Program">
								<label class="form-check-label" for="survay-radio-input3">Difficult to use</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input4" value="Coupon">
								<label class="form-check-label" for="survay-radio-input4">Security concern (loss of card)</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input5" value="Utility payment">
								<label class="form-check-label" for="survay-radio-input5">Don't know why we have to use a Smart Card</label>
							</div>
						</div>
						<div class="radio-container">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="Multioption[]" id="survay-radio-input7" value="please specify">
								<input type="text" class="checkbox form-control" placeholder="Any other reason, please specify">
							</div>
						</div>
					</div>`
			}
		}

		const SurveyProgress = {
			QNo: 0,
			progressPercent: 0,
			noOfQuestion: Object.getOwnPropertyNames(SurveyQuestion).length,
		}

		function datavalidationchecker(x) {

		}

		window.addEventListener('load', addquestion());

		function addquestion(validation = false) {
			if (SurveyProgress.QNo != SurveyProgress.noOfQuestion) {
				let data = new FormData(document.querySelector('.form'));
				let value = Object.fromEntries(data.entries());
				let Survey = document.querySelector('.survay')
				let QuestionNo = document.querySelector('.survay-box-title.mb-5 h5')
				let Question = document.querySelector('.survay-box-title.mb-5 h1')
				if (validation == false) {
					Survey.innerHTML = "";
					document.querySelector('.surveyError').innerHTML = ""
					questionnumber = SurveyProgress.QNo
					QuestionNo.innerHTML = "Question " + SurveyQuestion[questionnumber].questionNo;
					Question.innerHTML = SurveyQuestion[questionnumber].question
					Survey.appendChild(document.createRange().createContextualFragment(SurveyQuestion[questionnumber].option));
					SurveyProgress.QNo = questionnumber + 1

				} else {
					if ((Object.getOwnPropertyNames(value).length == 0) || (value['string'] == "" && value.hasOwnProperty("string")) || (value['Multioption[]'] == "" && value.hasOwnProperty("Multioption[]")) || (value['boolen'] == "" && value.hasOwnProperty("boolen")) || (value['singleoption'] == "" && value.hasOwnProperty("singleoption"))) {
						document.querySelector('.surveyError').innerHTML = "You must select an answer to continue."
					} else {
						Survey.innerHTML = "";
						document.querySelector('.surveyError').innerHTML = ""
						questionnumber = SurveyProgress.QNo
						QuestionNo.innerHTML = "Question " + SurveyQuestion[questionnumber].questionNo;
						Question.innerHTML = SurveyQuestion[questionnumber].question
						Survey.appendChild(document.createRange().createContextualFragment(SurveyQuestion[questionnumber].option));
						SurveyQuestion[SurveyProgress.QNo - 1].answer = Object.values(value)[0];
						SurveyProgress.QNo = questionnumber + 1
						console.log(Object.values(value)[0]);
					}

				}
			}
		}


		let card = document.querySelector('.survay-box');
		card.addEventListener('click', function(e) {
			cardtoggle(e.target)
		})

		function cardtoggle(x) {
			if (x.classList.contains('card')) {
				x.classList.add('active')
				document.querySelector('#boolen').value = x.attributes['data-value'].value == "yes" ? "yes" : "no"
				addquestion(true);
			}
			if (x.parentElement.classList.contains('card')) {
				x.parentElement.classList.add('card');
				document.querySelector('#boolen').value = x.parentElement.attributes['data-value'].value == "yes" ? "yes" : "no"
				addquestion(true);
			}
			if (x.parentElement.parentElement.classList.contains('card')) {
				x.parentElement.parentElement.classList.add('active')
				document.querySelector('#boolen').value = x.parentElement.parentElement.attributes['data-value'].value == "yes" ? "yes" : "no"
				addquestion(true);
			}
			if (x.parentElement.parentElement.parentElement.classList.contains('card')) {
				x.parentElement.parentElement.parentElement.classList.add('active')
				document.querySelector('#boolen').value = x.parentElement.parentElement.parentElement.attributes['data-value'].value == "yes" ? "yes" : "no"
				addquestion(true);
			}
		}

		document.querySelector('.nxt-btn').addEventListener('click', function() {
			addquestion(true);
		})
	</script>
</body>

</html>