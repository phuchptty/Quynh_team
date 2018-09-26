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
$start=1;$limit=5;
$url = "https://audiovyvy.com/wp-api/api.php/list_audio?pages=".$start."&end=".$limit; // API LINK METHOD 'GET'
$ch = curl_init();
curl_setopt_array($ch,array(
    CURLOPT_RETURNTRANSFER=>1,
    CURLOPT_URL =>$url,
));
$output = curl_exec($ch);
$listTruyen = json_decode($output);
 ?>
        <div class="middle-content">
            <div id="loadContent" class="fr">
                <span>Bot Audio</span>
                 <?php foreach($listTruyen as $t ) {?>
                <div class="chat-content"><a href="audiovyvy.php?meta_id=<?=$t->meta_id;?>"><?=$t->post_title?></a></div>
                 <?php } ?>
                
            </div>
            <div class="fr" style="text-align: center;">
                <small id="btnLoad" style="font-size: large;cursor: pointer;">Xem thêm <i class="fas fa-thumbs-up"></i>...</small>
            </div>
            <div class="me">
                <div class="chat-content">How do you feel?</div>
            </div>
        </div>

        <div class="bottom-content">
            <textarea autofocus placeholder="Webchat template Responsive make by Lmint - Coders.Tokyo || API audio by AudioVyVy.com &#10;Do mình mới tập viết API nên chỉ có vài dữ liệu đơn giản và Các bạn có thể tham khảo các bài Curl của php&#10;Sắp tới mình sẽ cập nhập thêm vài chức năng nữa!! chẳng hạn post bài trực tiếp vào website mình ^^!" spellcheck="false"></textarea>
            <button id="send_update">Send</button>
        </div>
    </div>
    <?php require_once('layout/footer.php') ?>

<script type="text/javascript">
    $(document).ready(function() {
        var start = 1;
        $('#btnLoad').click(function(event) {
            start++;
            $.ajax({
                url: 'https://audiovyvy.com/wp-api/api.php/list_audio',
                cache: false,
                type: 'GET',
                dataType: 'json',
                data: {pages: start,end:5},
                beforeSend:function(){
                    $('.loading').fadeIn(300);
                },
            })
            .done(function(data) {
                if(data==null){
                    $('.loading').fadeOut( 300 );
                    alert('Nghe hết không mà cứ ấn quài cha nội! web chưa up nhiều truyện mà cha! tui nè Ahihi: www.facebook.com/Tony.Quynh');
                }

                var index=0;
                $.each(data,function(index,value){
                    $('#loadContent').append('<div class="chat-content"><a href="audiovyvy.php?meta_id='+value.meta_id+'">'+value.post_title+'</a>');
                    $('.loading').fadeOut( 300 );
                });
                
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
        });
    });
</script>

</body>

</html>