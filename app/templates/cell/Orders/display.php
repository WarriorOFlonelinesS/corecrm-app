<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">№</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Client</th>
      <th scope="col">Status</th>
      <th scope="col">Amout</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($orders as $order): ?>
        <tr>
            <th scope="row"><?= $order->id  ?></th>
            <td><?= $order->title ?></td>
            <td><?= $order->description ?></td>
            <td><?= $order->client->first_name . ' ' . $order->client->last_name?></td>
            <td><?= $order->status ?></td>
            <td><?= $order->amount ?></td>
            <td><?= $order->created_at ?></td>
        </tr>
    <?php endforeach?>
  </tbody>
</table>