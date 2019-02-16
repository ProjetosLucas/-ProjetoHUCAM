<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ellipse[]|\Cake\Collection\CollectionInterface $ellipses
 */
?>
<div class="ellipses index large-9 medium-8 columns content">
    <h3><?= __('Ellipses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('center_x') ?></th>
                <th scope="col"><?= $this->Paginator->sort('center_y') ?></th>
                <th scope="col"><?= $this->Paginator->sort('axis_one') ?></th>
                <th scope="col"><?= $this->Paginator->sort('axis_two') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ellipses as $ellipse): ?>
            <tr>
                <td><?= $this->Number->format($ellipse->id) ?></td>
                <td><?= $this->Number->format($ellipse->center_x) ?></td>
                <td><?= $this->Number->format($ellipse->center_y) ?></td>
                <td><?= $this->Number->format($ellipse->axis_one) ?></td>
                <td><?= $this->Number->format($ellipse->axis_two) ?></td>
                <td><?= $ellipse->has('image') ? $this->Html->link($ellipse->image->name, ['controller' => 'Images', 'action' => 'view', $ellipse->image->id]) : '' ?></td>
                <td><?= h($ellipse->color) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ellipse->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ellipse->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ellipse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ellipse->id)]) ?>
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
