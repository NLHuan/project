<h2>Cập nhật thông tin tuyển dụng</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Nhập tên công việc</label>
        <input type="text" name="title"
               value="<?php echo isset($_POST['title']) ? $_POST['title'] : $product['title'] ?>"
               class="form-control" id="title"/>
    </div>
    <div class="form-group">
        <label for="avatar">Ảnh đại diện</label>
        <input type="file" name="avatar" value="" class="form-control" id="avatar"/>
        <img src="#" id="img-preview" style="display: none" width="100" height="100"/>
        <?php if (!empty($product['avatar'])): ?>
            <img height="80" src="assets/uploads/<?php echo $product['avatar'] ?>"/>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="amount">Số lượng</label>
        <input type="number" name="amount"
               value="<?php echo isset($_POST['amount']) ? $_POST['amount'] : $product['amount'] ?>"
               class="form-control" id="amount"/>
    </div>
    <div class="form-group">
        <label for="address">Địa chỉ</label>
        <textarea name="address" id="address"
                  class="form-control"><?php echo isset($_POST['address']) ? $_POST['address'] : $product['address'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="room">Phòng ban</label>
        <textarea name="room" id="room"
                  class="form-control"><?php echo isset($_POST['room']) ? $_POST['room'] : $product['room'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="status">Trạng thái</label>
        <select name="status" class="form-control" id="status">
            <?php
            $selected_disabled = '';
            $selected_active = '';
            if ($product['status'] == 0) {
                $selected_disabled = 'selected';
            } else {
                $selected_active = 'selected';
            }
            if (isset($_POST['status'])) {
                switch ($_POST['status']) {
                    case 0:
                        $selected_disabled = 'selected';
                        break;
                    case 1:
                        $selected_active = 'selected';
                        break;
                }
            }
            ?>

            <option value="1" <?php echo $selected_active ?>>Active</option>
            <option value="0" <?php echo $selected_disabled; ?>>Disabled</option>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Save" class="btn btn-primary"/>
        <a href="index.php?controller=product&action=index" class="btn btn-default">Back</a>
    </div>
</form>