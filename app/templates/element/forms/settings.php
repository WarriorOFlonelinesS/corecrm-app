<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="cyber-card">
            <h2 class="cyber-header mb-4">
                    System update
                </h2>
               <?php echo $this->Form->create(null, [
                        'url' => [
                            'action' => 'saveAll',
                        ],
                    ]); ?>
                    <div class="mb-3">
                    <?php echo $this->Form->control(
                        'App.admin_email', [
                            'value' => $settings['admin_email'] ?? '',
                            'label' => ['text' => 'Admin e-mail', 'class' => 'cyber-label'],
                            'class' => 'form-control cyber-input'
                        ] 
                    ); ?>
                    </div>
                    
                    <div class="cyber-container">
                        <div class="cyber-row">
                            <label class="cyber-checkbox-wrapper">
                                <span class="cyber-label">Maintenance Protocol</span>
                                <div class="checkbox-box">
                                    <?= $this->Form->checkbox('App.maintenance', [
                                        'checked' => $settings['maintenance'] === '1',
                                        'hiddenField' => true,
                                        'class' => 'cyber-input'
                                    ]) ?>
                                    <span class="cyber-tick"></span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="d-grid mt-4">
                        <?= $this->Form->button('Update Database', ['class' => 'cyber-btn']) ?>
                    </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>