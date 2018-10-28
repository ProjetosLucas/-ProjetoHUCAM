<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image[]|\Cake\Collection\CollectionInterface $images
 */
$dir='exames/';//Modifiquei Aqui
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Image'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Image Types'), ['controller' => 'ImageTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image Type'), ['controller' => 'ImageTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Diseases'), ['controller' => 'Diseases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disease'), ['controller' => 'Diseases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Patients'), ['controller' => 'Patients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Patient'), ['controller' => 'Patients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Arrows'), ['controller' => 'Arrows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Arrow'), ['controller' => 'Arrows', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ellipses'), ['controller' => 'Ellipses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ellipse'), ['controller' => 'Ellipses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Textboxes'), ['controller' => 'Textboxes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Textbox'), ['controller' => 'Textboxes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="images index large-9 medium-8 columns content">
    <h3><?= __('Images') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disease_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('patient_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($images as $image): ?>
            <tr>
                <td><?= $this->Number->format($image->id) ?></td>
                <td><?= h($image->name) ?></td>
                <td><?php  
                $var = '<img src="/CakePHP/projeto/'.$dir.$image->file_name.'" alt=""/>'; //Modifiquei Aqui!!
                echo $var;?></td>
                <td><?= $image->has('image_type') ? $this->Html->link($image->image_type->name, ['controller' => 'ImageTypes', 'action' => 'view', $image->image_type->id]) : '' ?></td>
                <td><?= $image->has('disease') ? $this->Html->link($image->disease->name, ['controller' => 'Diseases', 'action' => 'view', $image->disease->id]) : '' ?></td>
                <td><?= $image->has('patient') ? $this->Html->link($image->patient->name, ['controller' => 'Patients', 'action' => 'view', $image->patient->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $image->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $image->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]) ?>
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
