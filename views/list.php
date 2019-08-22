<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<div class="container">
    <div class="screen">
        <div class="screen-header">
            <div class="screen-header-left">
                <div class="screen-header-button close"></div>
                <div class="screen-header-button maximize"></div>
                <div class="screen-header-button minimize"></div>
            </div>
            <div class="screen-header-title">Feedbacks</div>
            <div class="screen-header-right">
                <a class="link right" href="/">Go back</a>
            </div>
        </div>

        <div class=" center">
            <div class="table-wrapper">
                <?php if (sizeof($data['feedbacks'])) { ?>
                    <table class="table table-striped">
                        <tr>
                            <th>No.</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Institute</th>
                            <th>Phone</th>
                            <th>Message</th>
                        </tr>
                        <?php foreach ($data['feedbacks'] as $feedback) { ?>
                            <tr>
                                <?php foreach ($feedback as $item) { ?>
                                    <td><?php echo $item; ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </table>
                <?php } else { ?>
                    <div class="screen-body-item">
                    <div class="screen-header-title">No feedbacks yet!</div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>