<ul class="nav navbar navbar-expand-lg navbar-light bg-white">
  <li class="nav-item">
    <a href="/users/new" class="nav-link btn btn-primary">Добавить пользователя</a>
  </li>
</ul>

<?php if (isset($data)) { ?>
  <table class="table table-hover text-left">
    <thead>
      <tr>
        <th>№</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Email</th>
        <th class="text-center">Действия</th>
      </tr>
    </thead>
    <tbody>
      <?php $index = 1; ?>
      <?php foreach ($data as $key) { ?>
        <tr>
          <td><?php echo($index++); ?></td>
          <td><?php echo($key->first_name); ?></td>
          <td><?php echo($key->last_name); ?></td>
          <td><?php echo($key->email); ?></td>
          <td class="text-center">
            <a href="/users/<?php echo($key->id); ?>/posts" class="btn btn-success">Посты</a>
            <a href="/users/edit?id=<?php echo($key->id); ?>" class="btn btn-warning">Редактировать</a>
            <a href="/users/delete?id=<?php echo($key->id); ?>" class="btn btn-danger">Удалить</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
<?php } ?>
