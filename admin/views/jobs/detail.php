<?php
require_once 'helpers/Helper.php';
?>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <td><?php echo $product['id']?></td>
    </tr>
    <tr>
        <th>Tên công việc</th>
        <td><?php echo $product['title']?></td>
    </tr>
    <tr>
        <th>Ảnh</th>
        <td>
            <?php if (!empty($product['avatar'])): ?>
                <img height="80" src="assets/uploads/<?php echo $product['avatar'] ?>"/>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <th>Số lượng</th>
        <td><?php echo number_format($product['amount']) ?></td>
    </tr>
    <tr>
        <th>Nơi làm việc</th>
        <td><?php echo $product['address']?></td>
    </tr>
    <tr>
        <th>Phòng ban</th>
        <td><?php echo $product['room']?></td>
    </tr>
        <th>Status</th>
        <td><?php echo Helper::getStatusText($product['status']) ?></td>
    </tr>
    <tr>
        <th>Created at</th>
        <td><?php echo date('d-m-Y H:i:s', strtotime($product['created_at'])) ?></td>
    </tr>
    <tr>
        <th>Updated at</th>
        <td><?php echo !empty($product['updated_at']) ? date('d-m-Y H:i:s', strtotime($product['updated_at'])) : '--' ?></td>
    </tr>
</table>
<a href="index.php?controller=job&action=index" class="btn btn-default">Back</a>