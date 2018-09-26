Get api từ trang Audiovyvy.com
Tất cả dữ liệu được xử lý trả về kiểu JSON
-GET danh sách truyện:
Method 'GET':https://audiovyvy.com/wp-api/api.php/list_audio?pages=$abc&end=$xyz
Hàm này được viết trong SQL với  "LIMIT $start,$limit"
$abc= là trang hiện tại của bạn!
$end = limit
-GET tên truyện và link truyện
Method 'GET':https://audiovyvy.com/wp-api/api.php/content_audio?id_meta=$meta_id
Hàm này được viết trong SQL với "meta_id=$id_meta"
$meta_id là id trong bảng dữ liệu
