<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ellipse $ellipse
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ellipse->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ellipse->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ellipses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ellipses form large-9 medium-8 columns content">
    <?= $this->Form->create($ellipse) ?>
    <fieldset>
        <legend><?= __('Edit Ellipse') ?></legend>
        <?php
            echo $this->Form->control('center_x');
            echo $this->Form->control('center_y');
            echo $this->Form->control('axis_one');
            echo $this->Form->control('axis_two');
            echo $this->Form->control('image_id', ['options' => $images]);
            echo $this->Form->control('color');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
