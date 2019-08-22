<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
List is here:
<?php var_dump($list);?>
<?php foreach ($lists as $contact) :?>
    <p><?php echo $contact['full_name'] ?></p>
<?php endforeach; ?>
</body>
</html>