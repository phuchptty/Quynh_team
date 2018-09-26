<?php require_once('layout/header.php') ?>

<body>
<!--     loading -->
<div class="loading">
      <div>
        <div class="c1"></div>
        <div class="c2"></div>
        <div class="c3"></div>
        <div class="c4"></div>
      </div>
      <span>loading</span>
</div>
<!--     container -->
    <div class="container">

<!-- siderbar -->
<?php require_once('layout/sidebar.php') ?>

<?php require_once('layout/top-content.php') ?>
<!-- get api -->
<?php
if(isset($_GET['meta_id'])){
	$meta_id = $_GET['meta_id'];
}else{
	die('404 - BẠN CHƯA CÓ THÔNG SỐ META ID TRUYỆN');
}

$url = "https://audiovyvy.com/wp-api/api.php/content_audio?id_meta=".$meta_id; //API AUDIO METHOD 'GET'
$ch = curl_init();
curl_setopt_array($ch,array(
	CURLOPT_RETURNTRANSFER=>1,
	CURLOPT_URL =>$url,
));
$output = curl_exec($ch);
$truyen = json_decode($output);

 ?>
        <div class="middle-content">
			 <div class="fr">
			    <div class="chat-content"><?=$truyen[0]?></div>
			 </div>
			<div class="fm">

			    <div class="media-wrapper">
			        <audio id="player2" preload="none" controls width="750"
			               data-cast-title="Trình duyệt chơi nhạc Design by Audiovyvy"
			               data-cast-description="Cảm ơn bạn đã sử dụng ^^! "
			               data-cast-poster="http://corporateprincess.com/wp-content/uploads/2012/08/podcast.jpg">
			            <?php $index=0; ?>
			            <?php foreach($truyen[1] as $k => $v){ 
			             	$index++; 
			            	if($index==1){ ?>
			           		    <source src="<?=$v?>" type="audio/mp3"  title="<?=$k?>" data-playlist-thumbnail="http://corporateprincess.com/wp-content/uploads/2012/08/podcast.jpg">
			            	  <?php }else{ ?>
			                <source src="<?=$v?>" type="audio/mp3"  title="<?=$index.'. '.$k?>" >
			            	<?php }//end if 
			            }//end foreach?>

			   				
			          
			         
			        </audio>
			    </div>
			</div>
			 <div class="me">
			    <div class="chat-content"><a href="index.php">BACK</a></div>
			 </div>
        </div>

        <div class="bottom-content">
            <textarea autofocus placeholder="Webchat template Responsive make by Lmint - Coders.Tokyo || API audio by AudioVyVy.com&#10;Các bạn cũng thể tự thiết kế database để chứa dữ liệu từ API đổ về nhằm tăng tốc độ&#10;Mình mới tập viết API nên còn sơ xài mong các bạn thông cảm ^^!! " spellcheck="false"></textarea>
            <button id="send_update">Send</button>
        </div>
    </div>
    <?php require_once('layout/footer.php') ?>

<script type="text/javascript">
  var mediaElements = document.querySelectorAll('audio');

  for (var i = 0, total = mediaElements.length; i < total; i++) {
    new MediaElementPlayer(mediaElements[i], {
      features: ['prevtrack', 'playpause', 'nexttrack', 'current', 'progress', 'duration', 'volume', 'playlist', 'shuffle', 'loop', 'fullscreen'],
    });
  }

</script>

</body>

</html>