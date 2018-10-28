<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Arrow[]|\Cake\Collection\CollectionInterface $arrows
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Arrow'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="arrows index large-9 medium-8 columns content">
    <h3><?= __('Arrows') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('x1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('y1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('x2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('y2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arrows as $arrow): ?>
            <tr>
                <td><?= $this->Number->format($arrow->id) ?></td>
                <td><?= $this->Number->format($arrow->x1) ?></td>
                <td><?= $this->Number->format($arrow->y1) ?></td>
                <td><?= $this->Number->format($arrow->x2) ?></td>
                <td><?= $this->Number->format($arrow->y2) ?></td>
                <td><?= h($arrow->color) ?></td>
                <td><?= $arrow->has('image') ? $this->Html->link($arrow->image->name, ['controller' => 'Images', 'action' => 'view', $arrow->image->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $arrow->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $arrow->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $arrow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arrow->id)]) ?>
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
