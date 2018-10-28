<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $image->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Images'), ['action' => 'index']) ?></li>
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
<div class="images form large-9 medium-8 columns content">
    <?= $this->Form->create($image, ['type'=>'file']) //Foi modificado aqui
    ?>
    <fieldset>
        <legend><?= __('Edit Image') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('file_name',['type'=>'file']);//Foi Modificado Aqui
            echo $this->Form->control('description');
            echo $this->Form->control('image_type_id', ['options' => $imageTypes]);
            echo $this->Form->control('disease_id', ['options' => $diseases]);
            echo $this->Form->control('patient_id', ['options' => $patients]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
