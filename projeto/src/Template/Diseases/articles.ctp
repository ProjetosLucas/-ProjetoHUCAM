<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disease[]|\Cake\Collection\CollectionInterface $diseases
 */
?>
<div class="diseases index large-9 medium-8 columns content">
    <h3><?= __('Articles') ?></h3>
            <?= $this->Form->create("",['type'=>'get']) ?>
                <?= $this->Form->control('keyword',['default'=>$this->request->query('keyword')]); ?>
                <button>Search</button>
            <?= $this->Form->end() ?>
            <?php foreach ($diseases as $disease): ?>
            <div>
                <h4><?= h($disease->name) ?> by <?= $disease->has('user') ? $this->Html->link($disease->user->name, ['controller' => 'Users', 'action' => 'view', $disease->user->id]) : '' ?> </h4>
                <p><?= h($disease->presentation) ?><?= $this->Html->link(__(' See More.'), ['action' => 'view', $disease->id]) ?></p><br>
            </div>
            <?php endforeach; ?>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
