<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Arrow $arrow
 */
?>
<div class="arrows form large-9 medium-8 columns content">
    <?= $this->Form->create($arrow) ?>
    <fieldset>
        <legend><?= __('Add Arrow') ?></legend>
        <?php
            echo $this->Form->control('x1');
            echo $this->Form->control('y1');
            echo $this->Form->control('x2');
            echo $this->Form->control('y2');
            echo $this->Form->control('color');
            echo $this->Form->control('image_id', ['options' => $images]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
