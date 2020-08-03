<?php
    include_once('./db.php');

    if ($_GET['u']) {
        $db = new DB();
        $user = $db->getUserById($_GET['u']);
    }
?>

<link rel="stylesheet" href="./assets/css/page-3.css">

<div class="row pb-5">
    <div class="col-lg-6 col-md-6 col-sm-12 pt-5">
        <h1 class="text-main text-magic">Round 2: Điểm thi thực tế</h1>
        <ul class="text-bold mt-4">
            <li class="d-flex align-items-start">
                <img class="mr-2" src="./assets/img/dot.png" alt="" srcset="">
                <span>Điểm thi thực tế có giống với dự đoán của bạn? Còn chần chừ gì mà không chia sẻ để nhận quà từ Aptech nhỉ! Chúc bạn có một mùa thi thành công!</span>
            </li>
            <li class="d-flex align-items-start">
                <img class="mr-2" src="./assets/img/dot.png" alt="" srcset="">
                <span>Aptech luôn chờ tin tốt lành từ bạn</span>
            </li>
            <li class="d-flex align-items-start">
                <img class="mr-2" src="./assets/img/dot.png" alt="" srcset="">
                <span>Các bạn nhớ like Fanpage <a class="text-main" href="https://www.facebook.com/aptechvietnam.com.vn">Hệ thống Đào tạo Lập trình viên Quốc tế Aptech</a>, share game public với hashtag #AptechVN #DoandiemdungTrungquahay và tag thêm 3 người bạn để bạn bè mình cũng được nhận quà nha!</span>
            </li>
        </ul>
        <p class="text-italic">(Lưu ý nè: Số điểm được tính trên tổng điểm 3 môn thuộc khối thi của bạn không nhân hệ số nha! <img src="./assets/img/smile.png" alt=""> )</p>
        <div class="d-flex justify-content-center pt-4">
            <img class="mw-100" src="./assets/img/gift.png" alt="">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 pt-5">
        <div class="form-container mt-3 d-flex flex-column align-items-center">
            <div class="w-75 my-4 d-flex info">
                <div>
                    <p>Họ và tên:</p>
                    <p>Số điện thoại:</p>
                    <p>Email:</p>
                    <p>Tỉnh / Thành phố:</p>
                    <p>Khối thi:</p>
                    <p>Điểm dự đoán:</p>
                </div>
                <div class="pl-3 text-right text-bold">
                    <p><?php echo $user['name'] ?></p>
                    <p><?php echo $user['phone'] ?></p>
                    <p><?php echo $user['email'] ?></p>
                    <p><?php echo $user['city'] ?></p>
                    <p><?php echo $user['class'] ?></p>
                    <p><?php echo $user['predicted_mark'] ?></p>
                </div>
            </div>
            <form action="./actions/confirm.php" method="POST" class="d-flex flex-column justify-content-center align-items-center py-4 w-100">
                <h5 class="text-bold text-center mb-3">Hoàn thành game nào!</h5>
                <div class="area-magic mb-3">
                    <h5 class="text-main text-bold text-center">ĐIỂM THỰC TẾ</h5>
                    <input type="number" min="0" inputmode="numeric" pattern="[0-9]*" step="0.01" name="textRealMark" required>
                    <input type="text" name="txtId" value="<?php echo $user['id'] ?>" class="d-none">
                </div>
                <input type="submit" value="GỬI KẾT QUẢ" class="text-white px-4 text-bold">
            </form>
        </div>
    </div>
</div>