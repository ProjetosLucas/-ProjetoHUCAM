<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Textbox $textbox
 */
?>
<div class="textboxes form large-9 medium-8 columns content">
    <?= $this->Form->create($textbox) ?>
    <fieldset>
        <legend><?= __('Add Textbox') ?></legend>
        <?php
            echo $this->Form->control('x');
            echo $this->Form->control('y');
            echo $this->Form->control('text');
            echo $this->Form->control('image_id', ['options' => $images]);
            echo $this->Form->control('color');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
