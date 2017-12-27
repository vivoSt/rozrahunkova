@extends('app')
@section('content')

<html lang="ru">
  
    <body>


<!--
        <div class="container">

             Static navbar 
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Розрахункова робота</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="http://iskov.com">Главная</a></li>
                            <li><a href="/about">О Нас</a></li>
                            <li><a href="/contacts">Контакты</a></li>
                           
                        </ul>

                    </div>/.nav-collapse 



                </div>/.container-fluid 
            </nav>


        </div>  /container -->


        <div class="row row-offcanvas row-offcanvas-right">

            <div class="col-xs-12 col-sm-9">
                <p class="pull-right visible-xs">
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
                </p>
               
                
                
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Codystar">
<h1> Hello !</h1>
<div id="snow"></div>



<style>
    html {
	height: 100%;
	overflow: hidden;
}

body {
	margin: 0;
	width: 100%;
	height: 100%;
	overflow: hidden;
	color: #fff;
	background-color: #9cf;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#6af), to(#bdf));
	background-image: -webkit-linear-gradient(#6af, #bdf);
	background-image: -moz-linear-gradient(#6af, #bdf);
	background-image: linear-gradient(#6af, #bdf);
}

::-webkit-scrollbar { 
    display: none; 
}

h1 {
	position: absolute;
	margin: auto;
	top: 50%;
	left: 50%;
	-webkit-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
	text-align: center;
	font: 10em "Codystar", sans-serif;
	pointer-events: none;
	-webkit-user-select: none;
	user-select: none;
}

.snowflake {
	position: absolute;
	display: block;
	position: absolute;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	-webkit-transform: translateZ(0);
	-moz-transform: translateZ(0);
	-ms-transform: translateZ(0);
	-o-transform: translateZ(0);
	transform: translateZ(0);
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
	background-image: -webkit-radial-gradient(
		center,
		circle farthest-corner,
		rgba(255, 255, 255, 1) 40%,
		rgba(255, 255, 255, 0) 100%
	);
	background-image: -moz-radial-gradient(
		center,
		circle farthest-corner,
		rgba(255, 255, 255, 1) 40%,
		rgba(255, 255, 255, 0) 100%
	);
	background-image: -ms-radial-gradient(
		center,
		circle farthest-corner,
		rgba(255, 255, 255, 1) 40%,
		rgba(255, 255, 255, 0) 100%
	);
	background-image: radial-gradient(
		center,
		circle farthest-corner,
		rgba(255, 255, 255, 1) 40%,
		rgba(255, 255, 255, 0) 100%
	);
}

#snow {
	position: absolute;
	width: 100%;
	height: 100%;
}
</style>


<script>

var Snowflake = (function() {

	var flakes;
	var flakesTotal = 250;
	var wind = 0;
	var mouseX;
	var mouseY;

	function Snowflake(size, x, y, vx, vy) {
		this.size = size;
		this.x = x;
		this.y = y;
		this.vx = vx;
		this.vy = vy;
		this.hit = false;
		this.melt = false;
		this.div = document.createElement('div');
		this.div.classList.add('snowflake');
		this.div.style.width = this.size + 'px';
		this.div.style.height = this.size + 'px';
	}

	Snowflake.prototype.move = function() {
		if (this.hit) {
			if (Math.random() > 0.995) this.melt = true;
		} else {
			this.x += this.vx + Math.min(Math.max(wind, -10), 10);
			this.y += this.vy;
		}

		// Wrap the snowflake to within the bounds of the page
		if (this.x > window.innerWidth + this.size) {
			this.x -= window.innerWidth + this.size;
		}

		if (this.x < -this.size) {
			this.x += window.innerWidth + this.size;
		}

		if (this.y > window.innerHeight + this.size) {
			this.x = Math.random() * window.innerWidth;
			this.y -= window.innerHeight + this.size * 2;
			this.melt = false;
		}

		var dx = mouseX - this.x;
		var dy = mouseY - this.y;
		this.hit = !this.melt && this.y < mouseY && dx * dx + dy * dy < 2400;
	};

	Snowflake.prototype.draw = function() {
		this.div.style.transform =
		this.div.style.MozTransform =
		this.div.style.webkitTransform =
			'translate3d(' + this.x + 'px' + ',' + this.y + 'px,0)';
	};

	function update() {
		for (var i = flakes.length; i--; ) {
			var flake = flakes[i];
			flake.move();
			flake.draw();
		}
		requestAnimationFrame(update);
	}

	Snowflake.init = function(container) {
		flakes = [];

		for (var i = flakesTotal; i--; ) {
			var size = (Math.random() + 0.2) * 12 + 1;
			var flake = new Snowflake(
				size,
				Math.random() * window.innerWidth,
				Math.random() * window.innerHeight,
				Math.random() - 0.5,
				size * 0.3
			);
			container.appendChild(flake.div);
			flakes.push(flake);
		}
    
    container.onmousemove = function(event) {
	  	mouseX = event.clientX;
  		mouseY = event.clientY;
  		wind = (mouseX - window.innerWidth / 2) / window.innerWidth * 6;
  	};

	  container.ontouchstart = function(event) {
		  mouseX = event.targetTouches[0].clientX;
		  mouseY = event.targetTouches[0].clientY;
		  event.preventDefault();
  	};

  	window.ondeviceorientation = function(event) {
	  	if (event) {
		  	wind = event.gamma / 10;
  		}
  	};
    
  	update();
	};

	return Snowflake;

}());

window.onload = function() {
  setTimeout(function() {
  	Snowflake.init(document.getElementById('snow'));
  }, 500);
}



</script>
                
               

            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
                <div class="list-group" >
                    <a href="/listtrees" class="list-group-item ">Список дерев</a>
                    <a href="/listfetus" class="list-group-item">Список фруктів</a>
                    <a href="/listquality" class="list-group-item">Вивести хорошие фрукти</a>
                    <a href="/orderby" class="list-group-item">Вивести дерева та плоди</a>
                    <a href="/order" class="list-group-item active">Заказати</a>
                    <a href="{{route('treescontrol.create')}}" class="list-group-item">Добавить деревья</a>

                </div>
            </div><!--/span-->
        </div>



@endsection






















































        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>