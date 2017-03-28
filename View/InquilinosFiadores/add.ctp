<div class="inquilinosFiadores form">
<?php echo $this->Form->create('InquilinosFiador');?>
	<fieldset>
		<legend><?php echo __('Agregar Registro'); ?></legend>
	<?php
		echo $this->Form->input('inquilino_id');
		echo $this->Form->input('fiador_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Registros'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Inquilinos'), array('controller' => 'inquilinos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Inquilino'), array('controller' => 'inquilinos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Fiadores'), array('controller' => 'fiadores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Fiador'), array('controller' => 'fiadores', 'action' => 'add')); ?> </li>
	</ul>
</div>
