<ul class="nav navbar navbar-expand-lg navbar-light bg-white">
  <li class="nav-item">
    <a href="/" class="nav-link btn btn-primary">На главную</a>
  </li>
  <li class="nav-item">
    <a href="/users/<?php echo($data['user_id']); ?>/posts/new" class="nav-link btn btn-primary">
      Добавить пост
    </a>
  </li>
</ul>

<?php if (isset($data)) { ?>
  <table class="table table-hover text-left">
    <thead>
      <tr>
        <th>#</th>
        <th>Заголовок</th>
        <th>Описание</th>
        <th>Пользователь</th>
        <th class="text-center">Действия</th>
      </tr>
    </thead>
    <tbody>
      <?php $index = 1; ?>
      <?php foreach ($data['posts'] as $key) { ?>
        <tr>
          <td><?php echo($index++); ?></td>
          <td><?php echo($key->header); ?></td>
          <td><?php echo($key->body); ?></td>
          <td><?php echo($key->getUser()->full_info()); ?></td>
          <td class="text-center">
            <a href="/users/<?php echo($data['user_id']); ?>/posts/edit?id=<?php echo($key->id); ?>" class="btn btn-warning">
              Редактировать
            </a>
            <a href="/users/<?php echo($data['user_id']); ?>/posts/delete?id=<?php echo($key->id); ?>" class="btn btn-danger">
              Удалить
            </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
<?php } ?>
