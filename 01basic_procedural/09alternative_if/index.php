<?php $permission = 1 ?>

<?php if ($permission === 1) : ?>
  <h1>Hallo admin</h1>

<?php elseif ($permission === 2) : ?>
  <h1>Hallo mod</h1>

<?php else : ?>
  <h1>Hallo guest</h1>

<?php endif; ?>