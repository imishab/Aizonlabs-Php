<?php if(count($errors) > 0): ?>
    <font color="red"><div class="msg error">
    <?php foreach ($errors as $error): ?>
        <li><?php echo $error; ?></li>
    <?php endforeach; ?>
    </div></font>
<?php endif; ?>