<?php
if(isset($message)){
    echo "<p class='alert-info'>$message</p>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới khách hàng</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Tên Hàng</label>
                    <input type="text" class="form-control" name="name"  placeholder="Nhập tên" required>
                </div>
                <div class="form-group">
                    <label>Loại Hàng</label>
                    <input type="text" class="form-control" name="type"  placeholder="Nhập tên hàng" required>
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <input type="text" class="form-control" name="price"  placeholder="Nhập giá" required>
                </div>
                <div class="form-group">
                    <label>Số Lượng</label>
                    <input type="text" class="form-control" name="amount"  placeholder="Nhập số lượng" required>
                </div>
                <div class="form-group">
                    <label>Ngày Tạo</label>
                    <input type="date" class="form-control" name="date_created" placeholder="Nhập ngày tạo" required>
                </div>
                <div class="form-group">
                    <label>Thông tin Thêm Về Sản PHẩm</label>
                    <input type="text" class="form-control" name="infomation" placeholder="Nhập thông tin" required>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
