<div class="cyber-table-container">

    <?php if(count($orders) !== 0): ?>
      <table class="table table-dark cyber-table">
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
                <td><?= $this->Html->link(__('UPDATE'), ['action'=>'edit', $order->id],
                [
                  'class' => 'cyber-btn btn-update'
                ]
                ) ?></td>
                <td><?= $this->Form->postLink(__('DELETE'), ['action'=>'delete', $order->id],
                [
                  'confirm' => __('Are you sure?'),
                  'class' => 'cyber-btn btn-delete'
                ]
                ) ?></td>
            </tr>
        <?php endforeach?>
        </tbody>
      </table>
    <?php else: ?>
        <h3 class="cyber-subheader text-center">You do not have any orders</h3>
    <?php  endif?>
</div>