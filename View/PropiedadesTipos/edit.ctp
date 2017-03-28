<div class="propiedadesTipos form">
<?php echo $this->Form->create('PropiedadesTipo');?>
	<fieldset>
		<legend><?php echo __('Editar Registro'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('PropiedadesTipo.id')), null, __('Esta seguro de que quiere eliminar el registro # %s?', $this->Form->value('PropiedadesTipo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Tipos'), array('action' => 'index'));?></li>
	</ul>
</div>
