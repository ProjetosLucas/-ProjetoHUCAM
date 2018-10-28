<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Arrow $arrow
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Arrow'), ['action' => 'edit', $arrow->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Arrow'), ['action' => 'delete', $arrow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arrow->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Arrows'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Arrow'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="arrows view large-9 medium-8 columns content">
    <h3><?= h($arrow->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Color') ?></th>
            <td><?= h($arrow->color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= $arrow->has('image') ? $this->Html->link($arrow->image->name, ['controller' => 'Images', 'action' => 'view', $arrow->image->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($arrow->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('X1') ?></th>
            <td><?= $this->Number->format($arrow->x1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Y1') ?></th>
            <td><?= $this->Number->format($arrow->y1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('X2') ?></th>
            <td><?= $this->Number->format($arrow->x2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Y2') ?></th>
            <td><?= $this->Number->format($arrow->y2) ?></td>
        </tr>
    </table>
</div>
