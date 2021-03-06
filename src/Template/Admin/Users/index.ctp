<h3><?= __('Users') ?></h3>
<table cellpadding="0" cellspacing="0">
    <thead>
    <tr>
        <th><?= $this->Paginator->sort('first_name') ?></th>
        <th><?= $this->Paginator->sort('last_name') ?></th>
        <th class="actions"><?= __('Actions') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= h($user->first_name) ?></td>
            <td><?= h($user->last_name) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?= $this->element('pagination_admin'); ?>
