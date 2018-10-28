<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ImageType $imageType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $imageType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $imageType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Image Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imageTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($imageType) ?>
    <fieldset>
        <legend><?= __('Edit Image Type') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
