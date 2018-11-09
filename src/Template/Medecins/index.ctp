<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medecin[]|\Cake\Collection\CollectionInterface $medecins
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Medecin'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="medecins index large-9 medium-8 columns content">
    <h3><?= __('Medecins') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medecins as $medecin): ?>
            <tr>
                <td><?= $this->Number->format($medecin->id) ?></td>
                <td><?= h($medecin->nom) ?></td>
                <td><?= h($medecin->prenom) ?></td>
                <td><?= h($medecin->photo) ?></td>
                <td><?= $medecin->has('user') ? $this->Html->link($medecin->user->id, ['controller' => 'Users', 'action' => 'view', $medecin->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $medecin->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medecin->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medecin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medecin->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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
