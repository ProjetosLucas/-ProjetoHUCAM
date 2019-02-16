<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Textbox $textbox
 */
?>
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
