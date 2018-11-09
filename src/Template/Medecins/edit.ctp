<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medecin $medecin
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $medecin->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $medecin->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Medecins'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="medecins form large-9 medium-8 columns content">
    <?= $this->Form->create($medecin) ?>
    <fieldset>
        <legend><?= __('Edit Medecin') ?></legend>
        <?php
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
            echo $this->Form->control('photo');
            echo $this->Form->control('users_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
