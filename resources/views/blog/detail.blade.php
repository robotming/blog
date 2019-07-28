<html>
	
	<head>
		
		<title></title>
		<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/blog2.css') }}">
		<script src="{{ asset('/js/jquery.min.js') }}"></script>
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	</head>

	<body>
		<div class='container'>
		
			<nav class="navbar navbar-default" role="navigation">
			    <div class="container-fluid">
			    <div class="navbar-header">
			        <a class="navbar-brand" href="{{ url('/blog/list') }}">BLOG</a>
			    </div>
			    {{--<div>--}}
			        {{--<ul class="nav navbar-nav">--}}
			            {{--<li class="active"><a href="#">iOS</a></li>--}}
			            {{--<li><a href="#">SVN</a></li>--}}
			            {{--<li class="dropdown">--}}
			                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
			                    {{--Java --}}
			                    {{--<b class="caret"></b>--}}
			                {{--</a>--}}
			                {{--<ul class="dropdown-menu">--}}
			                    {{--<li><a href="#">jmeter</a></li>--}}
			                    {{--<li><a href="#">EJB</a></li>--}}
			                    {{--<li><a href="#">Jasper Report</a></li>--}}
			                    {{--<li class="divider"></li>--}}
			                    {{--<li><a href="#">分离的链接</a></li>--}}
			                    {{--<li class="divider"></li>--}}
			                    {{--<li><a href="#">另一个分离的链接</a></li>--}}
			                {{--</ul>--}}
			            {{--</li>--}}
			        {{--</ul>--}}
			    {{--</div>--}}
			    </div>
			</nav>

			<!-- middle -->
			<div class="row">
			    <!-- start left -->
				<div class="col-md-6">
					<section>
						<article>
							<section class="post">
								<h3>{{ $article['title'] }}</h3>
								{{ htmlspecialchars_decode($article['content']) }}
							</section>
						</article>
					</section>
		        </div>
		        <!-- end left -->
		        <div class="col-md-6 left-widget">
		            <!-- middle 分类列表 -->
			        <div class="col-md-4">
			            <h3 class="widgettitle">项目分类</h3>
						<ul class="middle-catetory-list">
							@foreach($article_cate as $k => $v)
								<li>
									<a>{{ $v['cat_name'] }}</a>
								</li>
							@endforeach
						</ul>
						{{--<h3 class="widgettitle">页面 </h3>--}}
						{{--<ul class="middle-catetory-list">--}}
							{{--<li>--}}
								{{--<a>关于</a>--}}
							{{--</li>--}}
							{{--<li>--}}
								{{--<a>设计导航</a>--}}
							{{--</li>--}}
							{{--<li>--}}
								{{--<a>友情链接</a>--}}
							{{--</li>--}}
						{{--</ul>--}}
			        </div>
			        <!-- middle end -->
					<!-- start right -->
					<div class="col-md-6 right-widget">
						<div class="widget">
							<h3 class="widgettitle">推荐文章</h3>
							<ul>
								@foreach($recommend_list as $k => $v)
								<li><a href="#" title="{{ $v['title'] }}">{{ $v['title'] }}</a></li>
								@endforeach
							</ul>
							{{--<h3 class="widgettitle">web前端&设计群</h3>--}}
							{{--<ul class="widget group-list clearfix">--}}
									{{--<li title="UI设计交流">133654942(UI)</li>--}}
									{{--<li title="此群进入条件：发作品链接即可">96660967(audit)</li>--}}
									{{--<li title="UI设计交流">397277405(UI)</li>--}}
									{{--<li title="Web前端开发交流">131997979(W3C)</li>--}}
									{{--<li title="网页设计、DIV+CSS交流群">50063010(W3C)</li>--}}
									{{--<li title="网页设计、DIV+CSS交流群">80206090(W3C)</li>--}}
							{{--</ul>--}}
							{{--<h3 class="widgettitle">标签</h3>--}}
							{{--<div class="widget tagcloud clearfix">--}}
								{{--<a title="UI设计交流">bootstrap</a>--}}
								{{--<a title="此群进入条件：发作品链接即可">css</a>--}}
								{{--<a title="UI设计交流">HTML5</a>--}}
								{{--<a title="Web前端开发交流">javascript</a>--}}
								{{--<a title="网页设计、DIV+CSS交流群">UI设计</a>--}}
								{{--<a title="网页设计、DIV+CSS交流群">创意</a>--}}
							{{--</div>--}}
						</div>
			        </div>
					<!-- end right -->
				</div>
			</div>
            <!-- end -->
		</div>
	</body>
</html>