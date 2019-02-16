<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ImageType $imageType
 */
?>
<div class="imageTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($imageType) ?>
    <fieldset>
        <legend><?= __('Add Image Type') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
