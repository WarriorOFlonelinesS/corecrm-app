<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="cyber-card">
            <h2 class="cyber-header mb-4">
                    Client update
                </h2>
               <?php echo $this->Form->create($client, [
                        'url' => [
                            'action' => 'edit',
                            $client->id
                        ],
                    ]); ?>
                    <div class="mb-3">
                    <?php echo $this->Form->control(
                        'first_name', [
                            'value' => $client['first_name'] ?? '',
                            'label' => ['text' => 'First name', 'class' => 'cyber-label'],
                            'class' => 'form-control cyber-input'
                        ] 
                    ); ?>
                    </div>
                    <div class="mb-3">
                    <?php echo $this->Form->control(
                        'last_name', [
                            'value' => $client['last_name'] ?? '',
                            'label' => ['text' => 'First name', 'class' => 'cyber-label'],
                            'class' => 'form-control cyber-input'
                        ] 
                    ); ?>
                    </div>
                    <div class="mb-3">
                    <?php echo $this->Form->control(
                        'tel', [
                            'value' => $client['phone'] ?? '',
                            'label' => ['text' => 'Phone', 'class' => 'cyber-label'],
                            'class' => 'form-control cyber-input'
                        ] 
                    ); ?>
                    </div>
                    <div class="mb-3">
                    <?php echo $this->Form->control(
                        'email', [
                            'value' => $client['email'] ?? '',
                            'label' => ['text' => 'Email', 'class' => 'cyber-label'],
                            'class' => 'form-control cyber-input'
                        ] 
                    ); ?>
                    </div>
                    <div class="d-grid mt-4">
                        <?= $this->Form->button('Update Client', ['class' => 'cyber-btn']) ?>
                    </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>