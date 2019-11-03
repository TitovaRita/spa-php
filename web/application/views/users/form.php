<ul class="nav navbar navbar-expand-lg navbar-light bg-white">
  <li class="nav-item">
    <a href="/" class="nav-link btn btn-primary">На главную</a>
  </li>
</ul>

<?php $rus_names = array('first_name' => 'Имя', 'last_name' => 'Фамилия', 'email' => 'Email') ?>

<form method="post" action="/users/<?php echo($data['id'] ? 'update' : 'create'); ?>">
  <?php foreach ($data as $key => $value) { ?>
    <?php if ($key === 'id') { ?>
      <input type="hidden" name="<?php echo $key; ?>" value="<?php echo $value; ?>" id="<?php echo $key; ?>">
    <?php } else { ?>
      <div class="form-group">
        <label for="<?php echo $key; ?>"><?php echo $rus_names[$key]; ?></label>
        <input type="text" name="<?php echo $key; ?>" value="<?php echo $value; ?>" id="<?php echo $key; ?>" class="form-control">
      </div>
    <?php } ?>
  <?php } ?>
  <input type="submit" name="submit" value="<?php echo($data['id'] ? 'Сохранить' : 'Создать'); ?>" class="btn btn-success">
</form>
