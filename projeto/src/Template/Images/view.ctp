<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
$dir='exames/';//Modifiquei Aqui
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
<div class="images view large-9 medium-8 columns content">
    <h3><?= h($image->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($image->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File Name') ?></th>
            <td><?php  //Modifiquei Aqui
                $var = '<img src="/Projeto/projeto/'.$dir.$image->file_name.'" alt=""/>'; 
                echo $var;?></td>            
        </tr>
        <tr>
            <th scope="row"><?= __('Image Type') ?></th>
            <td><?= $image->has('image_type') ? $this->Html->link($image->image_type->name, ['controller' => 'ImageTypes', 'action' => 'view', $image->image_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Disease') ?></th>
            <td><?= $image->has('disease') ? $this->Html->link($image->disease->name, ['controller' => 'Diseases', 'action' => 'view', $image->disease->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Patient') ?></th>
            <td><?= $image->has('patient') ? $this->Html->link($image->patient->name, ['controller' => 'Patients', 'action' => 'view', $image->patient->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($image->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($image->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Arrows') ?></h4>
        <?php if (!empty($image->arrows)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('X1') ?></th>
                <th scope="col"><?= __('Y1') ?></th>
                <th scope="col"><?= __('X2') ?></th>
                <th scope="col"><?= __('Y2') ?></th>
                <th scope="col"><?= __('Color') ?></th>
                <th scope="col"><?= __('Image Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($image->arrows as $arrows): ?>
            <tr>
                <td><?= h($arrows->id) ?></td>
                <td><?= h($arrows->x1) ?></td>
                <td><?= h($arrows->y1) ?></td>
                <td><?= h($arrows->x2) ?></td>
                <td><?= h($arrows->y2) ?></td>
                <td><?= h($arrows->color) ?></td>
                <td><?= h($arrows->image_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Arrows', 'action' => 'view', $arrows->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Arrows', 'action' => 'edit', $arrows->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Arrows', 'action' => 'delete', $arrows->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arrows->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ellipses') ?></h4>
        <?php if (!empty($image->ellipses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Center X') ?></th>
                <th scope="col"><?= __('Center Y') ?></th>
                <th scope="col"><?= __('Axis One') ?></th>
                <th scope="col"><?= __('Axis Two') ?></th>
                <th scope="col"><?= __('Image Id') ?></th>
                <th scope="col"><?= __('Color') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($image->ellipses as $ellipses): ?>
            <tr>
                <td><?= h($ellipses->id) ?></td>
                <td><?= h($ellipses->center_x) ?></td>
                <td><?= h($ellipses->center_y) ?></td>
                <td><?= h($ellipses->axis_one) ?></td>
                <td><?= h($ellipses->axis_two) ?></td>
                <td><?= h($ellipses->image_id) ?></td>
                <td><?= h($ellipses->color) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ellipses', 'action' => 'view', $ellipses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ellipses', 'action' => 'edit', $ellipses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ellipses', 'action' => 'delete', $ellipses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ellipses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Textboxes') ?></h4>
        <?php if (!empty($image->textboxes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('X') ?></th>
                <th scope="col"><?= __('Y') ?></th>
                <th scope="col"><?= __('Text') ?></th>
                <th scope="col"><?= __('Image Id') ?></th>
                <th scope="col"><?= __('Color') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($image->textboxes as $textboxes): ?>
            <tr>
                <td><?= h($textboxes->id) ?></td>
                <td><?= h($textboxes->x) ?></td>
                <td><?= h($textboxes->y) ?></td>
                <td><?= h($textboxes->text) ?></td>
                <td><?= h($textboxes->image_id) ?></td>
                <td><?= h($textboxes->color) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Textboxes', 'action' => 'view', $textboxes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Textboxes', 'action' => 'edit', $textboxes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Textboxes', 'action' => 'delete', $textboxes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $textboxes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <h3><?= $this->Html->link(__('Edit This Image'), ['controller' => 'Images', 'action' => 'edit', $image->id]) ?></h3>
</div>
