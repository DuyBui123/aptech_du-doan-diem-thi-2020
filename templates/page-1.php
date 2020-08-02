<link rel="stylesheet" href="./assets/css/page-1.css">

<div class="row pb-5">
    <div class="col-lg-6 col-md-6 col-sm-12 pt-5">
        <h1 class="text-main text-magic">Round 1: Dự đoán điểm thi</h1>
        <ul class="text-bold mt-4">
            <li class="d-flex align-items-start">
                <img class="mr-2" src="./assets/img/dot.png" alt="" srcset="">
                <span>Bạn nghĩ mình sẽ đạt bao nhiêu điểm trong kỳ thi THPT và Đại học sắp tới?</span>
            </li>
            <li class="d-flex align-items-start">
                <img class="mr-2" src="./assets/img/dot.png" alt="" srcset="">
                <span>Cùng tham gia dự đoán kết quả và nhận quà cùng Aptech nhé!</span>
            </li>
            <li class="d-flex align-items-start">
                <img class="mr-2" src="./assets/img/dot.png" alt="" srcset="">
                <span>Đừng quên quay trở lại tham gia phần 2 của game vào ngày 27/08 khi có kết quả thực tế nha!</span>
            </li>
            <li class="d-flex align-items-start">
                <img class="mr-2" src="./assets/img/dot.png" alt="" srcset="">
                <span>Các bạn nhớ like Fanpage <a class="text-main" href="https://www.facebook.com/aptechvietnam.com.vn">Hệ thống Đào tạo Lập trình viên Quốc tế Aptech</a> và làm đủ các bước điều kiện để nhận quà nhé!</span>
            </li>
        </ul>
        <p class="text-italic">(Lưu ý nè: Số điểm được tính trên tổng điểm 3 môn thuộc khối thi của bạn không nhân hệ số nha! <img src="./assets/img/smile.png" alt=""> )</p>
        <div class="d-flex justify-content-center pt-4">
            <img class="mw-100" src="./assets/img/gift.png" alt="">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 pt-5">
        <form action="./actions/predict.php" method="POST" class="d-flex flex-column justify-content-center align-items-center py-4 mt-3">
            <label class="text-italic text-center">Thông tin người chơi:</label>
            <input class="input-magic mb-2" type="text" placeholder="Họ và tên" name="txtName" required>
            <input class="input-magic mb-2" type="text" placeholder="Số điện thoại" name="txtPhone" required>
            <input class="input-magic mb-2" type="email" placeholder="Email" name="txtEmail" required>
            <input class="input-magic mb-2" type="text" placeholder="Tỉnh/Thành phố" name="txtCity" required>
            <input class="input-magic mb-2" type="text" placeholder="Khối thi" name="txtClass" required>
            <div class="area-magic mb-3">
                <h5 class="text-main text-bold text-center">ĐIỂM DỰ ĐOÁN</h5>
                <input type="number" min="0" inputmode="numeric" pattern="[0-9]*" name="txtPredictedMask" required>
            </div>
            <input type="submit" value="GỬI DỰ ĐOÁN" class="text-white px-4 text-bold">
        </form>
    </div>
</div>