<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($clients as $client): ?>
        <tr>
            <th scope="row"><?= $client->id  ?></th>
            <td><?= $client->first_name ?></td>
            <td><?= $client->last_name ?></td>
        </tr>
    <?php endforeach?>
  </tbody>
</table>