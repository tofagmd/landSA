<!DOCTYPE html>
	<html lang="ar" style='direction: rtl'>
		<head>
			<title>Home Page</title>
			<link rel="stylesheet" href="style.css">
			<script src="components/ComponentHandler.js" ></script>
		</head>
		<body>
			<!--Page header-->
			<div id="Head" w3-include-html="components/nav.html"></div>

			<!-- Page content -->
			<div class="content">
				<!-- image Slider start-->
				<div class="slider-dispay">
					<div class="slider">
						<div class="slides">
							<!--radio button start-->
							<input type="radio" name="radio-btn" id="radiol">
							<input type="radio" name="radio-btn" id="radio2">
							<input type="radio" name="radio-btn" id="radio3">
							<input type="radio" name="radio-btn" id="radio4">
							<!--radio button end-->
							<!--slide image start-->
							<div class="slide first">
								<img src="./images/1.jpg" alt="image Slider">
							</div>
							<div class="slide">
								<img src="./images/2.jpg" alt="image Slider">
							</div>
							<div class="slide">
								<img src="./images/3.jpg" alt="image Slider">
							</div>
							<div class="slide">
								<img src="./images/4.jpg" alt="image Slider">
							</div>
							<!--slide image end-->
							<!--auto navigation start-->
							<div class="navigation-auto">
								<div class="auto-btn1"></div>
								<div class="auto-btn2"></div>
								<div class="auto-btn3"></div>
								<div class="auto-btn4"></div>
							</div>
							<!--auto navigation end-->
						</div>
						<!--manual navigation start-->
						<div class="navigation-manual">
							<label for="radiol" class="manual-btn"></label>
							<label for="radio2" class="manual-btn"></label>
							<label for="radio3" class="manual-btn"></label>
							<label for="radio4" class="manual-btn"></label>
						</div>
						<!--manual navigation end-->
					</div>
				</div>
				<!-- image Slider end-->

				<!--Card group start-->
				<h1>آخر الأخبار</h1>
				<div class="card-group">
					<div class="card">
							<h4>Title</h4>
							<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
							<a href="">Read more</a>
					</div>
					<div class="card">
							<h4>Title</h4>
							<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
							<a href="">Read more</a>
					</div>
					<div class="card">
							<h4>Title</h4>
							<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
							<a href="">Read more</a>
					</div>
					<div class="card">
							<h4>Title</h4>
							<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
							<a href="">Read more</a>
					</div>
				</div>
				<!--Card group end-->

				<!--areas view start-->
				<h1>مناطق الاراضي</h1>
				<div class="galley">
					<div class="area">
						<div class="area-image area-1"><h4>الشماليه</h4></div>
					</div>
					<div class="area">
						<div class="area-image area-1"><h4>الجنوبيه</h4></div>
					</div>
					<div class="area">
						<div class="area-image area-1"><h4>الشرقيه</h4></div>
					</div>
					<div class="area">
						<div class="area-image area-1"><h4>الغربيه</h4></div>
					</div>
				</div>
				<!--areas view end-->
			</div>

			<!-- footer -->
			<div w3-include-html="components/footer.html"></div>


			<script>
				includeHTML();
			</script>
<!DOCTYPE html>
	<html lang="ar" style='direction: rtl'>
		<head>
			<title>Home Page</title>
			<link rel="stylesheet" href="./style.css">
			<script src="./components/ComponentHandler.js" ></script>
		</head>
		<body>
		<!--header call-->
		<div id="Head" w3-include-html="components/nav.html"></div>

		<!-- Page content -->
		<main>
			<aside></aside><!--just to make it look better with flex display-->
			<div class="content">
				<!--image slider strat-->
				<div class="slider-display">
					<div class="img-slider">
						<div class="slide active">
							<img src="./images/1.jpg">
							<div class="info">
								<h2>slide 01</h2>
								<p>id nibh ultricies vehicula ut id elit. id nibh ultricies vehicula ut id elit. id nibh ultricies vehicula ut id elit. id nibh ultricies vehicula ut id elit.</p>
							</div>
						</div>
						<div class="slide">
							<img src="./images/2.jpg">
							<div class="info">
								<h2>slide 02</h2>
								<p>id nibh ultricies vehicula ut id elit. id nibh ultricies vehicula ut id elit. id nibh ultricies vehicula ut id elit. id nibh ultricies vehicula ut id elit.</p>
							</div>
						</div>
						<div class="slide">
							<img src="./images/3.jpg">
							<div class="info">
								<h2>slide 03</h2>
								<p>id nibh ultricies vehicula ut id elit. id nibh ultricies vehicula ut id elit. id nibh ultricies vehicula ut id elit. id nibh ultricies vehicula ut id elit.</p>
							</div>
						</div>
						<div class="slide">
							<img src="./images/4.jpg">
							<div class="info">
								<h2>slide 04</h2>
								<p>id nibh ultricies vehicula ut id elit. id nibh ultricies vehicula ut id elit. id nibh ultricies vehicula ut id elit. id nibh ultricies vehicula ut id elit.</p>
							</div>
						</div>
						<div class="slide-nav">
							<div class="btn active"></div>
							<div class="btn"></div>
							<div class="btn"></div>
							<div class="btn"></div>
						</div>
					</div>
				</div>
				<!--image slider end-->

				<!--Card group start-->
				<h1>آخر الأخبار</h1>
				<div class="card-group">
					<div class="card">
							<h4>Title</h4>
							<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
							<a href="">Read more</a>
					</div>
					<div class="card">
							<h4>Title</h4>
							<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
							<a href="">Read more</a>
					</div>
					<div class="card">
							<h4>Title</h4>
							<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
							<a href="">Read more</a>
					</div>
				</div>
				<!--Card group end-->

				<!--areas view start-->
				<h1>مناطق الاراضي</h1>
				<div class="galley">
					<div class="area">
						<div class="area-image area-1"><h4>الشماليه</h4></div>
					</div>
					<div class="area">
						<div class="area-image area-1"><h4>الجنوبيه</h4></div>
					</div>
					<div class="area">
						<div class="area-image area-1"><h4>الشرقيه</h4></div>
					</div>
					<div class="area">
						<div class="area-image area-1"><h4>الغربيه</h4></div>
					</div>
				</div>
				<!--areas view end-->
			</div>
			<aside></aside><!--just to make it look better with flex display-->
		</main>
		

		<!--footer call-->
		<div id="footer"></div>

		<script type="text/javascript">
			var slides = document.querySelectorAll('.slide');
			var btns = document.querySelectorAll('.btn');
			let currentSlide = 1;

			// Javascript for image slider manual navigation
			var manualNav = function(manual){
				slides.forEach((slide) => {
					slide.classList.remove('active');

					btns.forEach((btn) => {
						btn.classList.remove('active')
					});
				});

				slides[manual].classList.add('active');
				btns[manual].classList.add('active');
			}

			btns.forEach((btn, i) => {
				btn.addEventListener ("click", () => {
					manualNav (i);
					currentSlide = i;
				});
			});

			// Javascript for image slider autoplay navigation
			var repeat = function(activeClass){
				let active = document.getElementsByClassName('active');
				let i = 1;

				var repeater = () => {
					setTimeout(function(){
						[...active].forEach((activeSlide) => {
							activeSlide.classList.remove('active')
						});

						slides[i].classList.add('active');
						btns[i].classList.add('active');
						i++;

						if(slides.length == i){
							i = 0;
						}
						if(i >= slides.length){
							return;
						}
						repeater();
					}, 10000)
				}
				repeater();
			}
			repeat();
		</script>
		<script>
		includeHTML();
		</script>
	</body>
	</html>
