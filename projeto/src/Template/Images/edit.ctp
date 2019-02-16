<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>
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
