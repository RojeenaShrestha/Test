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
            <div class="">
                <div class="screen-header-button close"></div>
                <div class="screen-header-button maximize"></div>
                <div class="screen-header-button minimize"></div>
            </div>
            <div class="screen-header-title">Error!</div>
            <div class="screen-header-right">
                <div class="screen-header-ellipsis"></div>
                <div class="screen-header-ellipsis"></div>
                <div class="screen-header-ellipsis"></div>
            </div>
        </div>

        <div class="screen-body center">
            <div class="screen-body-item center">
                <div class="app-title">
                    <span>OOPS, SOMETHING WENT WRONG!</span>
                </div>
                <hr>
                <ul>
                    <?php foreach ($data as $datum) { ?>
                        <li class="app-form-control"><?php echo $datum;?></li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="screen-body center">

            <div class="screen-body-item">
                <a class="link" href="/">Go back</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>