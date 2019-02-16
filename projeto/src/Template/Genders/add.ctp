<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gender $gender
 */
?>
<div class="genders form large-9 medium-8 columns content">
    <?= $this->Form->create($gender) ?>
    <fieldset>
        <legend><?= __('Add Gender') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
