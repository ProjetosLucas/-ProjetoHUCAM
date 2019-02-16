<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Patient $patient
 */
?>
<div class="patients form large-9 medium-8 columns content">
    <?= $this->Form->create($patient) ?>
    <fieldset>
        <legend><?= __('Add Patient') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('gender_id', ['options' => $genders]);
            echo $this->Form->control('age');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
