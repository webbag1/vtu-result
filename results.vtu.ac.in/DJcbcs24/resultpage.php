﻿	<!DOCTYPE html>
	<html>
		<head>
			<title>VTU Result 2024</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="google" value="notranslate">
			<link rel="shortcut icon" href="../images/favicon.ico" />
			<link href="../css/style.css" rel="stylesheet">
			<link rel="stylesheet" href="../css/css/bootstrap.min.css">
			<script src="../js/js/jquery.min.js"></script>
			<script src="../js/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="js/jquery.placeholder.label.js"></script>
			<script type="text/javascript">
				$(document).ready(function (){
					$('input[placeholder]').placeholderLabel();
				})
			</script>
			<script type="text/javascript">
				$(document).ready(function (){
					$('input[placeholder]').placeholderLabel({
						placeholderColor: "#898989", // Color placeholder
						labelColor: "#4AA2CC", // Color label (after the focus)
						labelSize: "14px" // Size of label (after the focus)
						//useBorderColor: true, // If true a border input is altered after focus
						//inInput: true, // If true the label is actually in half vertically
						//timeMove: 200 // Time effect move after focus
					});
				})
			</script>
			<script type="text/javascript">
				function RestrictSpace()
				{
					if (event.keyCode == 32)
					{
						return false;
					}
				}
			</script>
			<script language="javascript">
				//DISABLE RIGHT CLICK
				document.addEventListener('contextmenu', event=> event.preventDefault());
			</script>
			
			<script language="javascript">
				//disable ctrlKey shiftKeys
				document.onkeydown = function(e) {
					if(event.keyCode == 123) {
						return false;
					}
					//DISABLE CTRL+SHIFT+I KEY shiftKeys
					if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0))
					{
						return false;
					}
					//DISABLE CTRL+SHIFT+J KEY shiftKeys
					if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0))
					{
						return false;
					}
					//DISABLE CTRL+U KEY shiftKeys
					if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0))
					{
						return false;
					}
				};
			</script>
			<script type="text/javascript">
				//ALLOW ONLY NUMBERS
				function isNumberANDCharacterKey(evt)
				{
					var charCode = (evt.which) ? evt.which : evt.keyCode;
					if (charCode < 48 || charCode > 122 || charCode==58 || charCode==59 || charCode==60 || charCode==61 || charCode==62 || charCode==63 || charCode==64 || charCode==92 || charCode==93 || charCode==94 || charCode==95 || charCode==96)
					return false;
					return true;
				}
			</script>
			<script>
		      $(document).ready(function() {
		          $('body').bind('cut copy paste', function(e) {
		              e.preventDefault();
		            });
		        });	      
		    </script>
		</head>
		<body style="background:#f0f0f0">
			<div class="container">
				<div class="row">
					<a href="index.php"><img src="../images/newL7.png" class="img-responsive" /></a>
				</div>
			</div>
			<div class="container" style="box-shadow:0px 5px 20px 5px #888888;">
				<div class="row">
					<div class="row" style="margin-right:15px;margin-left:15px;">
						<div class="col-md-12 text-center" style="background:#f9540057;margin-top:10px;margin-bottom:10px;">
							<h3 stye="text-align:center;color:black;padding-top:2px;padding-bottom:2px;"> ವಿ.ತಾ.ವಿ ಸಾಮಯಿಕ ಫಲಿತಾಂಶ. <br/> <span style="font-size:21px;"> VTU PROVISIONAL RESULT. </span></h3>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
																<form  action="resultpage.php" method="POST" accept-charset="UTF-8">
									<input type="hidden" name="Token" value="6d00f2eef2ba9bfb14a758be67de09a6760546a7"/>
									<div class="panel panel-info">
										<div class="panel-heading text-center" style="color:#0e1819;font-size: 12pt;background-color:#68d37b99"> <b> <span class="glyphicon glyphicon-globe"></span> ಡಿಸೆಂಬರ್-೨೦೨೩ / ಜನವರಿ-೨೦೨೪ ಪರೀಕ್ಷೆಯ ಫಲಿತಾಂಶ. <br/>December-2023 / January-2024 EXAMINATION RESULTS.</b></div>
										<div class="panel-body" id="raj">
											<div class="row">
												<div class="col-md-12" style="margin-bottom: 10px;">
													<input type="text" class="form-control" alt="USN" minlength="10" maxlength="10" name="lns" autocomplete="off" placeholder="ENTER USN" onkeypress="return isNumberANDCharacterKey(event)" required onkeydown="if(event.keyCode==13)
													document.getElementById('submit').click()" />
												</div>
											</div>
											<div class="row" style="margin-bottom:5px;">
												<div class="col-md-6" style="margin-top:25px;">
													<input type="text" name="captchacode" class="form-control" minlength="6" maxlength="6" placeholder="Enter Captcha Code" autocomplete="off" required />
												</div>
												<div class="col-md-4" style="margin-bottom:15px;">
													<img src="/captcha/vtu_captcha.php?_CAPTCHA&amp;t=0.40081800+1722404704" alt="CAPTCHA code">												</div>
												<div class="col-md-2" style="margin-top:40px;">
													<p>
														<a href="index.php">
															<span class="glyphicon glyphicon-refresh"></span>
														</a>
													</p>
												</div>
											</div>
											<div class="row" style="margin-top:10px">
												<div class="col-md-6">
													<input type="submit" id="submit" class="form-control btn-success" value="ಸಲ್ಲಿಸಿ / SUBMIT" onclick="validate(usn)" style="background-color:#5cb85c8c;color:black;font-size:14pt;" />
												</div>
												<div class="col-md-6" onclick="window.open('../index.php','result');" style="cursor: pointer;">
													<input type="button" class="form-control btn-danger" value="ರದ್ದುಪಡಿಸಿ / CANCEL" style="background-color:#e2100a73;color:black;font-size:14pt;" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Please Wait" />
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-3"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" style="background:#494e54;margin:0px;box-shadow:0px 5px 20px 5px #888888;">
						<footer class="footer" style="margin:10px 0px 10px 0px ">
							<div class="row">
								<div class="col-md-12" style="text-align:center"> © ೨೦೨೪ ವಿನ್ಯಾಸ ಮತ್ತು ಅಭಿವೃದ್ಧಿಪಡಿಸಿದವರು ಯೋಜನಾ ನಿರ್ವಹಣೆ ವಿಭಾಗ (ಪಿ. ಎಮ್. ಸಿ),  ವಿ.ತಾ.ವಿ, ಬೆಳಗಾವಿ. ಕರ್ನಾಟಕ. ಭಾರತ. <br/>© 2024 Designed & Developed by Project Management Cell (PMC), VTU, Belagavi. Karnataka. India.</div>
							</div>
						</footer>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				$('.btn').on('click', function() {
					var $this = $(this);
					$this.button('loading');
					setTimeout(function() {
						$this.button('reset');
					}, 8000);
				});
			</script>
		</body>
	</html>
	