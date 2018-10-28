<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ImageType $imageType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Image Type'), ['action' => 'edit', $imageType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Image Type'), ['action' => 'delete', $imageType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imageType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Image Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="imageTypes view large-9 medium-8 columns content">
    <h3><?= h($imageType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($imageType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($imageType->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Images') ?></h4>
        <?php if (!empty($imageType->images)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('File Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Image Type Id') ?></th>
                <th scope="col"><?= __('Disease Id') ?></th>
                <th scope="col"><?= __('Patient Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($imageType->images as $images): ?>
            <tr>
                <td><?= h($images->id) ?></td>
                <td><?= h($images->name) ?></td>
                <td><?= h($images->file_name) ?></td>
                <td><?= h($images->description) ?></td>
                <td><?= h($images->image_type_id) ?></td>
                <td><?= h($images->disease_id) ?></td>
                <td><?= h($images->patient_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Images', 'action' => 'view', $images->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Images', 'action' => 'edit', $images->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Images', 'action' => 'delete', $images->id], ['confirm' => __('Are you sure you want to delete # {0}?', $images->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
