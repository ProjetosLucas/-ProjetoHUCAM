<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Arrow $arrow
 */
?>
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
