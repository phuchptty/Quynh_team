Get api từ trang Audiovyvy.com<br>
Tất cả dữ liệu được xử lý trả về kiểu JSON<br>
-GET danh sách truyện:<br>
Method 'GET':https://audiovyvy.com/wp-api/api.php/list_audio?pages=$abc&end=$xyz<br>
Hàm này được viết trong SQL với  "LIMIT $start,$limit"<br>
$abc= là trang hiện tại của bạn!<br>
$end = limit<br>
-GET tên truyện và link truyện<br>
Method 'GET':https://audiovyvy.com/wp-api/api.php/content_audio?id_meta=$meta_id<br>
Hàm này được viết trong SQL với "meta_id=$id_meta"<br>
$meta_id là id trong bảng dữ liệu<br>
