
<?php @include("header.php" );?>

<div class="container contact-form">
    <form method="POST" action="/" id="form">
        <h3>Contact Us</h3>
        <?php if($data){
            foreach ($data as $element) { ?>
                <li class=""><?php echo $element;?></li>
            <?php }?>
        <?php }?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="first_name" class="form-control" placeholder="Your First Name *" value="" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="last_name" class="form-control" placeholder="Your Last Name *" value="" required/>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" required/>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" class="form-control" placeholder="Your Phone Number *" value="" required/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="institute" class="form-control" placeholder="School/Institution Name *" value="" required/>
                </div>
                <div class="form-group">
                    <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" required></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btn btn-primary" value="Contact Us" />
                </div>
            </div>
        </div>
    </form>
    <div class="text-center py-3"><a href="/list" class="">View Customer Information</a></div>
</div>

<?php @include("footer.php" );?>
