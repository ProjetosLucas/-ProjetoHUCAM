<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ellipse $ellipse
 */
?>
<div class="ellipses form large-9 medium-8 columns content">
    <?= $this->Form->create($ellipse) ?>
    <fieldset>
        <legend><?= __('Edit Ellipse') ?></legend>
        <?php
            echo $this->Form->control('center_x');
            echo $this->Form->control('center_y');
            echo $this->Form->control('axis_one');
            echo $this->Form->control('axis_two');
            echo $this->Form->control('image_id', ['options' => $images]);
            echo $this->Form->control('color');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
