<?php if(isset($_SESSION['message'])): ?>
  <font color="green"><b><div class="msg <?php echo $_SESSION['type']; ?>">
    <li><?php echo $_SESSION['message']; ?></li>
    <?php
      unset($_SESSION['message']);
      unset($_SESSION['type']);
    ?></b></font>
  </div>
<?php endif; ?>