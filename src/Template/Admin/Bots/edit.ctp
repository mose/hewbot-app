<?= $this->Form->create($bot) ?>
<fieldset>
    <legend><?= __('Edit Bot') ?></legend>
    <?php
        echo $this->Form->input('name');
        echo $this->Form->input('user_id', ['options' => $users]);
        echo $this->Form->input('bot_adapter_id', ['options' => $botAdapters]);
        echo $this->Form->input('hubot_slack_token');
        echo $this->Form->input('containerid');
    ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
