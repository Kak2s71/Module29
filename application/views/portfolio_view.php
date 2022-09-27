<h1>Портфолио</h1>
<p>
<table class="table table-striped">
  Все материалы вымышлены.
  <tr>
    <th>Год</th>
    <th>Проект</th>
    <th>Описание</th>
  </tr>
  <?php

  foreach ($data as $row) {
      echo '<tr><td>' . $row['Year'] . '</td><td>' . $row['Site'] . '</td><td>' . $row['Description'] . '</td></tr>';
  }

  ?>
</table>
</p>