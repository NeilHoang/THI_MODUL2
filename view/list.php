<a href="index.php?page=add" class="btn btn-outline-success m-3">Thêm</a>
<table class="table" style="text-align: center">
    <thead class="thead-dark">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Type</th>
        <th scope="col">Amount</th>
        <th scope="col">Price</th>
        <th scope="col">Date_created</th>
        <th scope="col">Infomation</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key => $product): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $product->name ?></td>
            <td><?php echo $product->type ?></td>
            <td><?php echo $product->amount ?></td>
            <td><?php echo $product->price ?></td>
            <td><?php echo $product->date_created ?></td>
            <td><?php echo $product->infomation ?></td>
            <td><a href="index.php?page=delete&id=<?php echo $product->id; ?>"
                   class="btn btn-outline-danger">Delete</a></td>
            <td><a href="index.php?page=edit&id=<?php echo $product->id; ?>"
                   class="btn btn-outline-secondary">Edit</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>