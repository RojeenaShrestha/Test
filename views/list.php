<?php @include("header.php" );?>

<div class="container">
    <h3 class="center">Customer Information</h3>
    <a class="goback" href="/"> &laquo; Go back</a>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">School/ Institution</th>
            <th scope="col">Phone</th>
            <th scope="col">Message</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if(sizeof($data['contactlist'])) {
            foreach ($data['contactlist'] as $key=>$list) { ?>
                <tr>
                    <td> <?php echo ++$key;?>
                    <?php foreach ($list as $item) { ?>
                        <td><?php echo $item; ?></td>
                    <?php } ?>
                </tr>
            <?php }
        } else { ?>
            No customer Information
            <?php }?>


    </table>

</div>

<?php @include("footer.php" );?>