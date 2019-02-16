<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Textbox[]|\Cake\Collection\CollectionInterface $textboxes
 */
?>
<div class="textboxes index large-9 medium-8 columns content">
    <h3><?= __('Textboxes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('x') ?></th>
                <th scope="col"><?= $this->Paginator->sort('y') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($textboxes as $textbox): ?>
            <tr>
                <td><?= $this->Number->format($textbox->id) ?></td>
                <td><?= $this->Number->format($textbox->x) ?></td>
                <td><?= $this->Number->format($textbox->y) ?></td>
                <td><?= $textbox->has('image') ? $this->Html->link($textbox->image->name, ['controller' => 'Images', 'action' => 'view', $textbox->image->id]) : '' ?></td>
                <td><?= h($textbox->color) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $textbox->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $textbox->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $textbox->id], ['confirm' => __('Are you sure you want to delete # {0}?', $textbox->id)]) ?>
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
