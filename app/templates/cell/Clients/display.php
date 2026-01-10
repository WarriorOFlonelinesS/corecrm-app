<div class="cyber-table-container">

  <?php if(count($clients) !== 0): ?>
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
              <td><?= $this->Html->link(__('UPDATE'), ['action'=>'edit', $client->id],
              [
                'class' => 'cyber-btn btn-update'
              ]
              ) ?></td>
              <td><?= $this->Form->postLink(__('DELETE'), ['action'=>'delete', $client->id],
              [
                'confirm' => __('Are you sure?'),
                'class' => 'cyber-btn btn-delete'
              ]
              ) ?></td>
          </tr>
      <?php endforeach?>
    <?php else: ?>
        <h3 class="cyber-subheader text-center">You do not have any clients</h3>
    <?php  endif?>
  </tbody>
</table>
</div>