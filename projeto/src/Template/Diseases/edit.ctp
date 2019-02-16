<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disease $disease
 */
?>
<div class="diseases form large-9 medium-8 columns content">
    <?= $this->Form->create($disease) ?>
    <fieldset>
        <legend><?= __('Edit Disease') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('presentation');
            echo $this->Form->control('discution');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('aproved');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
