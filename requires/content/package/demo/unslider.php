
<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>unslider演示</title>

<script src="jquery-1.11.1.min.js"></script>

<script src="unslider.min.js"></script>

<style>

html, body { font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;}

ul, ol { padding: 0;}



.banner { position: relative; overflow: auto; text-align: center;}

.banner li { list-style: none; }

.banner ul li { float: left; }

</style>

</head>



<body>



<h1>unslider 使用演示</h1>

<span>本插件可配合jquery.event.swipe.js来实现触摸响应，具体请参见jquery.event.swipe.js的使用说明。</span>

<hr>



<!-- example_01 begin -->

<h2>示例 1</h2>

<span>最简单的使用，写好 ul 后调用 'unsliser()' 方法即可。</span>



<style>

#b01 ul li { height: 100px;}

</style>



<div class="banner" id="b01">

    <ul>

        <li>This is a slide.</li>

        <li>This is another slide.</li>

        <li>This is a final slide.</li>

    </ul>

</div>



<script>

$(document).ready(function(e) {

    $('#b01').unslider();

});

</script>

<!-- example_01 end -->



<hr>



<!-- example_02 begin -->

<h2>示例 2</h2>

<span>使用固定大小的图片，并限制容器大小</span>



<style>

#b02 { width: 640px;}

</style>



<div class="banner" id="b02">

    <ul>

        <li><img src="01.jpg" alt="" width="640" height="480" ></li>

        <li><img src="02.jpg" alt="" width="640" height="480" ></li>

        <li><img src="03.jpg" alt="" width="640" height="480" ></li>

        <li><img src="04.jpg" alt="" width="640" height="480" ></li>

        <li><img src="05.jpg" alt="" width="640" height="480" ></li>

    </ul>

</div>



<script>

$(document).ready(function(e) {

    $('#b02').unslider();

});

</script>

<!-- example_02 end -->



<hr>



<!-- example_03 begin -->

<h2>示例 3</h2>

<span>在上一步的基础上，加上圆点（指示器）。这里使用 CSS3 来添加，若要兼容 IE8 及以下，请使用图片背景添加。</span>



<style>

#b03 { width: 640px;}

#b03 .dots { position: absolute; left: 0; right: 0; bottom: 20px;}

#b03 .dots li 

{ 

	display: inline-block; 

	width: 10px; 

	height: 10px; 

	margin: 0 4px; 

	text-indent: -999em; 

	border: 2px solid #fff; 

	border-radius: 6px; 

	cursor: pointer; 

	opacity: .4; 

	-webkit-transition: background .5s, opacity .5s; 

	-moz-transition: background .5s, opacity .5s; 

	transition: background .5s, opacity .5s;

}

#b03 .dots li.active 

{

	background: #fff;

	opacity: 1;

}

</style>



<div class="banner" id="b03">

    <ul>

        <li><img src="01.jpg" alt="" width="640" height="480" ></li>

        <li><img src="02.jpg" alt="" width="640" height="480" ></li>

        <li><img src="03.jpg" alt="" width="640" height="480" ></li>

        <li><img src="04.jpg" alt="" width="640" height="480" ></li>

        <li><img src="05.jpg" alt="" width="640" height="480" ></li>

    </ul>

</div>



<script>

$(document).ready(function(e) {

    $('#b03').unslider({

		dots: true

	});

});

</script>

<!-- example_03 end -->



<hr>



<!-- example_04 begin -->

<h2>示例 4</h2>

<span>在上一步基础上，加上左右箭头。</span>



<style>

#b04 { width: 640px;}

#b04 .dots { position: absolute; left: 0; right: 0; bottom: 20px;}

#b04 .dots li 

{ 

	display: inline-block; 

	width: 10px; 

	height: 10px; 

	margin: 0 4px; 

	text-indent: -999em; 

	border: 2px solid #fff; 

	border-radius: 6px; 

	cursor: pointer; 

	opacity: .4; 

	-webkit-transition: background .5s, opacity .5s; 

	-moz-transition: background .5s, opacity .5s; 

	transition: background .5s, opacity .5s;

}

#b04 .dots li.active 

{

	background: #fff;

	opacity: 1;

}

#b04 .arrow { position: absolute; top: 200px;}

#b04 #al { left: 15px;}

#b04 #ar { right: 15px;}

</style>



<div class="banner" id="b04">

    <ul>

        <li><img src="01.jpg" alt="" width="640" height="480" ></li>

        <li><img src="02.jpg" alt="" width="640" height="480" ></li>

        <li><img src="03.jpg" alt="" width="640" height="480" ></li>

        <li><img src="04.jpg" alt="" width="640" height="480" ></li>

        <li><img src="05.jpg" alt="" width="640" height="480" ></li>

    </ul>

    <a href="javascript:void(0);" class="unslider-arrow04 prev"><img class="arrow" id="al" src="arrowl.png" alt="prev" width="20" height="35"></a>

    <a href="javascript:void(0);" class="unslider-arrow04 next"><img class="arrow" id="ar" src="arrowr.png" alt="next" width="20" height="37"></a>

</div>



<script>

$(document).ready(function(e) {

    var unslider04 = $('#b04').unslider({

		dots: true

	}),

	data04 = unslider04.data('unslider');

	

	$('.unslider-arrow04').click(function() {

        var fn = this.className.split(' ')[1];

        data04[fn]();

    });

});

</script>

<!-- example_04 end -->



<!-- example_05 begin -->

<h2>示例 5</h2>

<span>对轮播状态进行操作。</span>



<style>

#b05 { width: 640px;}

#b05 .dots { position: absolute; left: 0; right: 0; bottom: 20px;}

#b05 .dots li 

{ 

	display: inline-block; 

	width: 10px; 

	height: 10px; 

	margin: 0 4px; 

	text-indent: -999em; 

	border: 2px solid #fff; 

	border-radius: 6px; 

	cursor: pointer; 

	opacity: .4; 

	-webkit-transition: background .5s, opacity .5s; 

	-moz-transition: background .5s, opacity .5s; 

	transition: background .5s, opacity .5s;

}

#b05 .dots li.active 

{

	background: #fff;

	opacity: 1;

}

#b05 .arrow { position: absolute; top: 200px;}

#b05 #al { left: 15px;}

#b05 #ar { right: 15px;}

</style>



<div class="banner" id="b05">

    <ul>

        <li><img src="01.jpg" alt="" width="640" height="480" ></li>

        <li><img src="02.jpg" alt="" width="640" height="480" ></li>

        <li><img src="03.jpg" alt="" width="640" height="480" ></li>

        <li><img src="04.jpg" alt="" width="640" height="480" ></li>

        <li><img src="05.jpg" alt="" width="640" height="480" ></li>

    </ul>

    <a href="javascript:void(0);" class="unslider-arrow05 prev"><img class="arrow" id="al" src="arrowl.png" alt="prev" width="20" height="35"></a>

    <a href="javascript:void(0);" class="unslider-arrow05 next"><img class="arrow" id="ar" src="arrowr.png" alt="next" width="20" height="37"></a>

</div>



<button id="stop">停止</button>

<button id="start">开始</button>

<button id="move">转到第二张（可有回调函数）</button>



<script>

$(document).ready(function(e) {

    var unslider05 = $('#b05').unslider({

		dots: true

	}),

	data05 = unslider05.data('unslider');

	

	$('.unslider-arrow05').click(function() {

        var fn = this.className.split(' ')[1];

        data05('unslider')[fn]();

    });

	

	$("#stop").click(function() {

		data05.stop();

	});

	

	$("#start").click(function() {

		data05.start();

	});

	

	$("#move").click(function() {

		data05.move(1, function() {});

	});

});

</script>

<!-- example_04 end -->



<hr>



<!-- example_06 begin -->

<h2>示例 6</h2>

<span>调整为响应式</span>



<style>

#b06 { width: 640px;}

#b06 .dots { position: absolute; left: 0; right: 0; bottom: 20px;}

#b06 .dots li 

{ 

	display: inline-block; 

	width: 10px; 

	height: 10px; 

	margin: 0 4px; 

	text-indent: -999em; 

	border: 2px solid #fff; 

	border-radius: 6px; 

	cursor: pointer; 

	opacity: .4; 

	-webkit-transition: background .5s, opacity .5s; 

	-moz-transition: background .5s, opacity .5s; 

	transition: background .5s, opacity .5s;

}

#b06 .dots li.active 

{

	background: #fff;

	opacity: 1;

}

#b06 .arrow { position: absolute; top: 200px;}

#b06 #al { left: 15px;}

#b06 #ar { right: 15px;}

</style>



<div class="banner" id="b06">

    <ul>

        <li><img class="sliderimg" src="01.jpg" alt="" width="100%" ></li>

        <li><img class="sliderimg" src="02.jpg" alt="" width="100%" ></li>

        <li><img class="sliderimg" src="03.jpg" alt="" width="100%" ></li>

        <li><img class="sliderimg" src="04.jpg" alt="" width="100%" ></li>

        <li><img class="sliderimg" src="05.jpg" alt="" width="100%" ></li>

    </ul>

    <a href="javascript:void(0);" class="unslider-arrow06 prev"><img class="arrow" id="al" src="arrowl.png" alt="prev" width="20" height="35"></a>

    <a href="javascript:void(0);" class="unslider-arrow06 next"><img class="arrow" id="ar" src="arrowr.png" alt="next" width="20" height="37"></a>

</div>



<script>

function imgReload()

{

	var imgHeight = 0;

	var wtmp = $("body").width();

	$("#b06 ul li").each(function(){

        $(this).css({width:wtmp + "px"});

    });

	$(".sliderimg").each(function(){

		$(this).css({width:wtmp + "px"});

		imgHeight = $(this).height();

	});

}



$(window).resize(function(){imgReload();});



$(document).ready(function(e) {

	imgReload();

    var unslider06 = $('#b06').unslider({

		dots: true,

		fluid: true

	}),

	data06 = unslider06.data('unslider');

	

	$('.unslider-arrow06').click(function() {

        var fn = this.className.split(' ')[1];

        data06[fn]();

    });

});

</script>

<!-- example_06 end -->



<hr>



<h2>初始化参数说明</h2>

<span>这里说明的unslider版本较旧，新版本添加了一些，请自行对照。</span>

<table border="1">

	<thead>

    	<th>参数</th><th>说明</th>

    </thead>

    <tbody>

    	<tr>

    		<td>speed</td>

    		<td>图片切换的速度，数字，单位为毫秒</td>

    	</tr>

    	<tr>

    		<td>delay</td>

    		<td>图片停留的时间，数字，单位为毫秒</td>

    	</tr>

    	<tr>

    		<td>complete</td>

    		<td>每次图片切换完后的回调函数，function() {}</td>

    	</tr>

    	<tr>

    		<td>keys</td>

    		<td>是否支持键盘控制，取值true / false</td>

    	</tr>

    	<tr>

    		<td>dots</td>

    		<td>是否显示指示器，取值true / false</td>

    	</tr>

    	<tr>

    		<td>fluid</td>

    		<td>是否支持响应式布局，取值true / false</td>

    	</tr>

    </tbody>

</table>

</body>

</html>
