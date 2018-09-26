<script type="text/javascript" src="asset/js/jquery-3.3.1.min.js"></script>
<script src="asset/js/mediaelement-and-player.min.js"></script>
<script src="asset/js/playlist.js"></script>
 		<script type="text/javascript">
 		$(document).ready(function() {
 			$('.replaceAudio').hover(function() {
 				$(this).addClass('fa-spin');
 			}, function() {
 				$(this).removeClass('fa-spin');
 			});
 			$('#send_update').one("click",function(event) {
 				$('<div class="chat-content">chức năng này chưa hoàn thiện! cảm ơn bạn đã quan tâm ^^! nếu có cùng đam mê liên hệ mình nhé! FB mình ở 1 trong 3 icon phía trên đó</div>').appendTo($('.me'));
 			});
	 		$('.replaceAudio').click(function(event) {
				$.ajax({
				    type:"POST",
				    url:"https://audiovyvy.com/wp-content/themes/audio_quynh_ver_two/layout/icon_truyen_nn.php",
				    dataType:"html",
				    beforeSend: function() { $('.loading').fadeIn(300); },
				      success: function(html) {
				        $("#thay_the").html(html);
				      $('.loading').fadeOut(300);
				      }
				});
	 		});
 		});
 		</script>