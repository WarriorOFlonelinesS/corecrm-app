<table class="table table-dark cyber-table">
  <thead>
    <tr>
      <th scope="col">№</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($clients as $client): ?>
        <tr>
            <th scope="row"><?= $client->id  ?></th>
            <td><?= $client->first_name ?></td>
            <td><?= $client->last_name ?></td>
            <td><?= $client->contact->phone ?></td>
            <td><?= $client->contact->email ?></td>
        </tr>
    <?php endforeach?>
  </tbody>
</table>