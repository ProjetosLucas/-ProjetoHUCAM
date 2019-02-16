<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ellipse $ellipse
 */
?>
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
