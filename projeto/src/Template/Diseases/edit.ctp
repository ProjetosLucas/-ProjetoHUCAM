<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disease $disease
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $disease->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $disease->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Diseases'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="diseases form large-9 medium-8 columns content">
    <?= $this->Form->create($disease) ?>
    <fieldset>
        <legend><?= __('Edit Disease') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('presentation');
            echo $this->Form->control('discution');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
