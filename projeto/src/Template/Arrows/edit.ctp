<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Arrow $arrow
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $arrow->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $arrow->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Arrows'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="arrows form large-9 medium-8 columns content">
    <?= $this->Form->create($arrow) ?>
    <fieldset>
        <legend><?= __('Edit Arrow') ?></legend>
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
