<!DOCTYPE html>
<html>
	<head>
		<link rel = "shortcut icon" type = "image/png" href ="{{asset('/img/icon_img.png') }}" > 
		<link rel="stylesheet" type="text/css" href="{{asset('/css/master_style.css') }}">
		<title>@yield('title')</title>
	</head>

	<body>
		<!-- Menu -->
		<div class = "menu">
			<ul>
				<a href="{{URL::to('management') }}">
				<div class="home-wrapper">
					<img id="home-img" src="{{asset('/img/home.png')}}">
					<b><span id="font-home">{{trans('message.home')}}</span></b>
				</div>
				<div class="lang-wrapper">
					<a href="{{ URL::to('change/th') }}">
						<img class="lang-img" src="{{asset('/img/th.png') }}">
					</a>
					<a href="{{ URL::to('change/en') }}">
						<img class="lang-img" src="{{asset('/img/en.png') }}">
					</a>
				</div>
				<img class="profile-img" src="{{asset('/img/icon_img.png') }}">
				<div id="role">ADMINISTRATOR</div>

				<hr id="line">
				<a href="{{URL::to('admin_management') }}">
					<li>
						<img class="a-img" src="{{asset('/img/config.png') }}">
						<span class = "font">
							{{trans('message.admin') }}				
						</span>
					</li>
				</a>
				<a href="{{URL::to('student_info') }}">
					<li>
						<img class="a-img" src="{{asset('/img/student.png') }}">
						<span class = "font">
							{{trans('message.student') }}
						</span>
					</li>
				</a>
				<a href="{{URL::to('suject_suggestion') }}">
					<li>
						<img class="b-img" src="{{asset('/img/subject.png') }}">
						<span class = "font">
							{{trans('message.subject') }}
						</span>
					</li>
				</a>
				<a href="{{URL::to('') }}">
					<li class = "logout-wrapper">
					<img class="b-img" src="{{asset('/img/logout.png') }}">
						<span class = "font">
							{{trans('message.logout') }}
						</span>
					</li>
				</a>
			</ul>

		</div>

		<div class="content">
			@yield('content')
		</div>
		
	</body>

	<footer></footer>
</html>