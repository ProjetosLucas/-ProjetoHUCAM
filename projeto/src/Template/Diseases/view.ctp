<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disease $disease
 */
$dir='exames/';//Modifiquei Aqui
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Disease'), ['action' => 'edit', $disease->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Disease'), ['action' => 'delete', $disease->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disease->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Diseases'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disease'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="diseases view large-9 medium-8 columns content">
    <h3><?= h($disease->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($disease->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $disease->has('user') ? $this->Html->link($disease->user->name, ['controller' => 'Users', 'action' => 'view', $disease->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($disease->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Presentation') ?></h4>
        <?= $this->Text->autoParagraph(h($disease->presentation)); ?>
    </div>
    <div class="row">
        <h4><?= __('Discution') ?></h4>
        <?= $this->Text->autoParagraph(h($disease->discution)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Images') ?></h4>
        <?php if (!empty($disease->images)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!--<th scope="col"><?= __('Id') ?></th>-->
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('File Name') ?></th>
                <!--<th scope="col"><?= __('Description') ?></th>-->
                <!--<th scope="col"><?= __('Image Type Id') ?></th>-->
                <!--<th scope="col"><?= __('Disease Id') ?></th>-->
                <!--<th scope="col"><?= __('Patient Id') ?></th>-->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($disease->images as $images): ?>
            <tr>
                <!--<td><?= h($images->id) ?></td>-->
                <td><?= h($images->name) ?></td>
                <td><?php  
                $var = '<img src="/-ProjetoHUCAM/projeto/'.$dir.$images->file_name.'" alt=""/>'; //Modifiquei Aqui!!
                echo $var;?></td>
                <!--<td><!--<?= h($images->description) ?> --></td><!--Comentei aqui Também!!!-->
                <!--<td><?= h($images->image_type_id) ?></td>-->
                <!--<td><?= h($images->disease_id) ?></td>-->
                <!--<td><?= h($images->patient_id) ?></td>-->
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
