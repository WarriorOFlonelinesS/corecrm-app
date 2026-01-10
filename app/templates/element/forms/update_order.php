<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="cyber-card">
            <h2 class="cyber-header mb-4">
                    Order update
                </h2>
               <?php echo $this->Form->create($order, [
                        'url' => [
                            'action' => 'edit',
                            $order->id
                        ],
                    ]); ?>
                    <div class="mb-3">
                    <?php echo $this->Form->control(
                        'title', [
                            'value' => $order['title'] ?? '',
                            'label' => ['text' => 'Title of order', 'class' => 'cyber-label'],
                            'class' => 'form-control cyber-input'
                        ] 
                    ); ?>
                    </div>
                    <div class="mb-3">
                    <?php echo $this->Form->control(
                        'description', [
                            'value' => $order['description'] ?? '',
                            'label' => ['text' => 'Descrtiption of order', 'class' => 'cyber-label'],
                            'class' => 'form-control cyber-input'
                        ] 
                    ); ?>
                    </div>
                    <div class="mb-3">
                    <?php echo $this->Form->control(
                        'status', [
                            'value' => $order['status'] ?? '',
                            'label' => ['text' => 'Status', 'class' => 'cyber-label'],
                            'class' => 'form-control cyber-input'
                        ] 
                    ); ?>
                    </div>
                    <div class="mb-3">
                    <?php echo $this->Form->control(
                        'amount', [
                            'value' => $order['amount'] ?? '',
                            'label' => ['text' => 'Amount', 'class' => 'cyber-label'],
                            'class' => 'form-control cyber-input'
                        ] 
                    ); ?>
                    </div>
                    
                    <div class="d-grid mt-4">
                        <?= $this->Form->button('Update order', ['class' => 'cyber-btn']) ?>
                    </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>