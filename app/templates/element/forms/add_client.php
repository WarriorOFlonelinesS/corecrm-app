<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="cyber-card">
            <h2 class="cyber-header mb-4">
                    Add client
                </h2>
               <?php echo $this->Form->create(null, [
                        'url' => [
                            'action' => 'add',
                        ],
                    ]); ?>
                    <div class="mb-3">
                    <?php echo $this->Form->control(
                        'first_name', [
                            'label' => ['text' => 'First name', 'class' => 'cyber-label'],
                            'class' => 'form-control cyber-input'
                        ] 
                    ); ?>
                    </div>
                    <div class="mb-3">
                    <?php echo $this->Form->control(
                        'last_name', [
                            'label' => ['text' => 'Last name', 'class' => 'cyber-label'],
                            'class' => 'form-control cyber-input'
                        ] 
                    ); ?>
                    </div>
                    <div class="mb-3">
                    <?php echo $this->Form->control(
                        'tel', [
                            'label' => ['text' => 'Phone', 'class' => 'cyber-label'],
                            'class' => 'form-control cyber-input'
                        ] 
                    ); ?>
                    </div>
                    <div class="mb-3">
                    <?php echo $this->Form->control(
                        'email', [
                            'label' => ['text' => 'Email', 'class' => 'cyber-label'],
                            'class' => 'form-control cyber-input'
                        ] 
                    ); ?>
                    </div>
                    <div class="d-grid mt-4">
                        <?= $this->Form->button('Add client', ['class' => 'cyber-btn']) ?>
                    </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>