<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gender $gender
 */
?>
<div class="genders view large-9 medium-8 columns content">
    <h3><?= h($gender->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($gender->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($gender->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Patients') ?></h4>
        <?php if (!empty($gender->patients)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Gender Id') ?></th>
                <th scope="col"><?= __('Age') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($gender->patients as $patients): ?>
            <tr>
                <td><?= h($patients->id) ?></td>
                <td><?= h($patients->name) ?></td>
                <td><?= h($patients->gender_id) ?></td>
                <td><?= h($patients->age) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Patients', 'action' => 'view', $patients->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Patients', 'action' => 'edit', $patients->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Patients', 'action' => 'delete', $patients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patients->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
