<?php
    include_once('config.php');
?>

<link rel="stylesheet" href="./assets/css/response.css">

<div class="d-flex flex-column align-items-center py-5">
    <div class="pt-5 d-flex justify-content-center">
        <img class="w-75 icon" src="./assets/img/hand.png" alt="">
    </div>
    <p class="text-center text-main text-magic pt-3">
        Hãy tự hào vì những gì mình đã cố gắng!
        Nhớ share game public với hashtag #AptechVN #DoandiemdungTrungquahay và tag thêm 3 người bạn để bạn bè mình cũng được nhận quà nha!
        Đừng quên theo dõi kết quả game sẽ được công bố trên
        Fanpage: <a href="https://www.facebook.com/aptechvietnam.com.vn">Hệ thống Đào tạo Lập trình viên Quốc tế Aptech</a>.
    </p>
    <div class="fb-share-button pb-5" data-href="<?php echo DOMAIN ?>" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
</div>
<script src="./assets/js/sound.js"></script>
<script>
    window.onload = function() {
        const tada = new sound('./assets/audio/tada.mp3');
        tada.play();
    }
</script>