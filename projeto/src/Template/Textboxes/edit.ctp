<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Textbox $textbox
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $textbox->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $textbox->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Textboxes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="textboxes form large-9 medium-8 columns content">
    <?= $this->Form->create($textbox) ?>
    <fieldset>
        <legend><?= __('Edit Textbox') ?></legend>
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
