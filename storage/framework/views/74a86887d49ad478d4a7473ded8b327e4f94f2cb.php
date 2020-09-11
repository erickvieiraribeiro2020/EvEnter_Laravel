<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- add style -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/view.css')); ?>">
	<title>Card Profile</title>
</head>

<body>
	<div class="card" data-state="#about">
		<div class="card-header">
			<div class="card-cover" style="background-image: url(<?php echo e(asset('/img/img.jpg')); ?>)"></div> <img class="card-avatar" src="images/profile.jpg" alt="avatar" />
			<h1 class="card-fullname">Soeng Souy</h1>
			<h2 class="card-jobtitle">Web Developer</h2> </div>
		<div class="card-main">
			<div class="card-section is-active" id="about">
				<div class="card-content">
					<div class="card-subtitle">ABOUT</div>
					<p class="card-desc">SOENG SOUY Is a free online learning program that introduces methods and how to coding websites from the limit First, to the highest level.</p>
				</div>
				<div class="card-social">
					<a href="https://www.facebook.com/soengsouy.com.kh/"> <i class="fa fa-facebook"></i> </a>
					<a href="https://twitter.com/SoengSouy1"> <i class="fa fa-twitter"></i> </a>
					<a href="#"> <i class="fa fa-youtube-play"></i> </a>
					<a href="https://kh.linkedin.com/in/soeng-souy-b9b179193"> <i class="fa fa-linkedin-square"></i> </a>
				</div>
			</div>
			<div class="card-section" id="experience">
				<div class="card-content">
					<div class="card-subtitle"> WORK EXPERIENCE</div>
					<div class="card-timeline">
						<div class="card-item" data-year="2016">
							<div class="card-item-title">Graphics Designer at <span>DDD</span> </div>
							<div class="card-item-desc">Video editor and graphic design on photoshop.</div>
						</div>
						<div class="card-item" data-year="2018">
							<div class="card-item-title">Intern Software at <span>DDD</span> </div>
							<div class="card-item-desc">Develop Data old imformation and in database Mysql.</div>
						</div>
						<div class="card-item" data-year="2019">
							<div class="card-item-title">Junior Developer at <span>COTAFER</span> </div>
							<div class="card-item-desc">Web Designer and Web Develop.</div>
						</div>
						<div class="card-item" data-year="2020">
							<div class="card-item-title">Web Developer at <span>PRINCE</span> </div>
							<div class="card-item-desc"> Back-end Laravel Develop and frone-end CSS Desinger.</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card-section" id="contact">
				<div class="card-content">
					<div class="card-subtitle">CONTACT</div>
					<div class="card-contact-wrapper">
						<div class="card-contact"> <i class="fa fa-map-marker"></i> Russian Confederation Blvd. Sangkat Toeuk Thla, Khan Sen Sok, Phnom Penh, Cambodia. </div>
						<div class="card-contact"> <i class="fa fa-mobile"></i>(+855) 966-686371 </div>
						<div class="card-contact"> <i class="fa fa-envelope-o"></i> soeng.souy@gmail.com </div>
						<button class="contact-me">WORK TOGETHER</button>
					</div>
				</div>
			</div>
			<div class="card-buttons">
				<button data-section="#about" class="is-active">ABOUT</button>
				<button data-section="#experience">EXPERIENCE</button>
				<button data-section="#contact">CONTACT</button>
			</div>
		</div>
	</div>
	<!-- add style js -->
	<script type="text/javascript" src="<?php echo e(asset('/js/view.js')); ?>"></script>
</body>

</html><?php /**PATH C:\Users\Erick\projeto2\resources\views/show.blade.php ENDPATH**/ ?>