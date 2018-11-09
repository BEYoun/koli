<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Assistant $assistant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Assistant'), ['action' => 'edit', $assistant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Assistant'), ['action' => 'delete', $assistant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assistant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Assistants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assistant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assistants view large-9 medium-8 columns content">
    <h3><?= h($assistant->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($assistant->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($assistant->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $assistant->has('user') ? $this->Html->link($assistant->user->id, ['controller' => 'Users', 'action' => 'view', $assistant->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($assistant->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($assistant->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel') ?></th>
            <td><?= $this->Number->format($assistant->tel) ?></td>
        </tr>
    </table>
</div>
