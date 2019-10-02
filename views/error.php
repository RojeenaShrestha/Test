<?php @include("header.php" );?>
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

<?php @include("footer.php" );?>