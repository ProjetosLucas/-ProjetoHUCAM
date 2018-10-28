<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ellipse $ellipse
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ellipse'), ['action' => 'edit', $ellipse->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ellipse'), ['action' => 'delete', $ellipse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ellipse->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ellipses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ellipse'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ellipses view large-9 medium-8 columns content">
    <h3><?= h($ellipse->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= $ellipse->has('image') ? $this->Html->link($ellipse->image->name, ['controller' => 'Images', 'action' => 'view', $ellipse->image->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color') ?></th>
            <td><?= h($ellipse->color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ellipse->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Center X') ?></th>
            <td><?= $this->Number->format($ellipse->center_x) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Center Y') ?></th>
            <td><?= $this->Number->format($ellipse->center_y) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Axis One') ?></th>
            <td><?= $this->Number->format($ellipse->axis_one) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Axis Two') ?></th>
            <td><?= $this->Number->format($ellipse->axis_two) ?></td>
        </tr>
    </table>
</div>
