<?php include('layout/header.php') ?>



<!--menu center  -->
<div class="btnclick w-100 text-center p-f">

				<div class="icons">
					<!-- <a href="about.html" target="_blank"><img src="img/about.png" /></a> -->
					<a href="planning.html" target="_blank"><img src="img/1.png"></a>
					<a href="drafting.html" target="_blank"><img src="img/2.png"></a>
					<a href="loanprop.html" target="_blank"><img src="img/3.png"></a>
					<a href="branding.html" target="_blank"><img src="img/4.png"></a>
				</div>
				<h1 class="text-white">MAAPING YOUR DREAMS</h1>
				<a class="btn-getstart text-white" href="getstart.html"><strong>GET START</strong></a>
</div>
<!--menu center  -->

<!--contact phone -->
<div id="contact_phone" class="p-f">
<div class="contact_phone_fill"></div>
<div class="contact_phone_out"></div>
	<div id="open-contact" class="phone_span"><i class="fas fa-phone-volume fa-2x"></i></div>
</div>
<!--contact phone -->
<!--contact text -->
<div id="header_out_right">
<div style="padding: 30px;">
		<a id="close-contact" style="color:#fff;position: absolute;top: 7px; right: 13px;" href="#">	<i class="fas fa-times fa-lg"></i></a>

		<p>15 – 17 Racecourse Road,<br>
			North Melbourne<br>
			Victoria 3051 Australia<br>
			dongnguyenvie@gmail.com<br>
		<a href="tel:+01647884884">+84 1647 884 884</a></p>
	</div>
</div>
<!--contact text -->

<!-- page full load -->
<div id="fullpage">
 <div id="effect" class="section dingdong-map   bg"></div>
	<div class="section" id="section2"><h1>Lovely images <br />for a lovely page</h1></div>
	<div class="section" id="section3"><h1>One Image = One thousand words</h1></div>
</div>
<!-- page full load -->

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/fullpage.min.js"></script>
<script type="text/javascript" src="js/use.js" ></script>
<script type="text/javascript">

</script>
<script type="text/javascript">
$(document).ready(function() {
	    //arrow menu
    $('.icons a').hover(function() {
        console.log('test');
        $('.ar').toggle(200);
    });    
});
    // //Background effect
    var lFollowX = 0,
    lFollowY = 0,
    y = 0,
    x = 0,
    friction = 1 / 30;

    function moveBackground() {
        x += (lFollowX - x) * friction;
        y += (lFollowY - y) * friction;

        var translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

        $('#effect').css({
            '-webit-transform': translate,
            '-moz-transform': translate,
            'transform': translate
        });

        window.requestAnimationFrame(moveBackground);
    }

    $(window).on('mousemove click', function(e) {
        var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
        var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
        lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
        lFollowY = (10 * lMouseY) / 100;

    });

    moveBackground();



</script>
</body>
</html>