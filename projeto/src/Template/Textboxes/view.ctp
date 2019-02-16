<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Textbox $textbox
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
<div class="textboxes view large-9 medium-8 columns content">
    <h3><?= h($textbox->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= $textbox->has('image') ? $this->Html->link($textbox->image->name, ['controller' => 'Images', 'action' => 'view', $textbox->image->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color') ?></th>
            <td><?= h($textbox->color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($textbox->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('X') ?></th>
            <td><?= $this->Number->format($textbox->x) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Y') ?></th>
            <td><?= $this->Number->format($textbox->y) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($textbox->text)); ?>
    </div>
</div>
