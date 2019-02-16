<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disease[]|\Cake\Collection\CollectionInterface $diseases
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
<div class="diseases index large-9 medium-8 columns content">
    <h3><?= __('Diseases') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aproved') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($diseases as $disease): ?>
            <tr>
                <td><?= $this->Number->format($disease->id) ?></td>
                <td><?= h($disease->name) ?></td>
                <td><?= $disease->has('user') ? $this->Html->link($disease->user->name, ['controller' => 'Users', 'action' => 'view', $disease->user->id]) : '' ?></td>
                <td><?= h($disease->aproved) ?></td>
                <td><?= h($disease->modified) ?></td>
                <td><?= h($disease->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $disease->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $disease->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $disease->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disease->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
