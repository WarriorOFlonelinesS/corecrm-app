<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="cyber-card">
            <h2 class="cyber-header mb-4">
                    System update
                </h2>
               <?php echo $this->Form->create($setting, [
                        'url' => [
                            'controller' => 'Settings',
                            'action' => 'update',
                        ],
                    ]); ?>
                    <div class="mb-3">
                    <?php echo $this->Form->control(
                        'App.admin_email', [
                            'value' => $setting['App.admin_email'] ?? '',
                            'label' => ['text' => 'Admin e-mail', 'class' => 'cyber-label'],
                            'class' => 'form-control cyber-input'
                        ] 
                    ); ?>
                    </div>
                    
                    <div class="mb-3">
                    <label class="cyber-label">Maintenance Protocol</label>
                        <?= $this->Form->checkbox('App.maintenance', [
                            'checked' => ($settings['App.maintenance'] ?? '0') === '1',
                            'class' => 'cyber-checkbox'
                        ]) ?>
                    </div>
                    
                    <div class="d-grid mt-4">
                        <?= $this->Form->button('Update Database', ['class' => 'cyber-btn']) ?>
                    </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>