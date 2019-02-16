<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ellipse $ellipse
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
        <?php if (!$username): ?>
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('Articles'), ['controller' => 'Diseases','action' => 'articles']) ?></li>
            <li><?= $this->Html->link(__('New Article'), ['controller' => 'Diseases','action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Login'), ['controller' => 'Users', 'action' => 'login']) ?></li>
            <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        </ul>
        <?php endif; ?>
        <?php if ($username_role===2): ?>
        <ul class="side-nav">
            <li class="heading"><?= __('User Actions') ?></li>
            <li><?= $this->Html->link(__('Articles'), ['controller' => 'Diseases','action' => 'articles']) ?></li>
            <li><?= $this->Html->link(__('New Article'), ['controller' => 'Diseases','action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
        </ul>
        <?php endif; ?>
        <?php if ($username_role===1): ?>
        <ul class="side-nav">
            <li class="heading"><?= __('Admin Actions') ?></li>
            <li><?= $this->Html->link(__('Articles'), ['controller' => 'Diseases','action' => 'articles']) ?></li>
            <li><?= $this->Html->link(__('New Article'), ['controller' => 'Diseases','action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Manage Articles'), ['controller' => 'Diseases','action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
        </ul>
        <?php endif; ?>
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
