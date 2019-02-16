<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Arrow $arrow
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
