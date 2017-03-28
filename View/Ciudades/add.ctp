<div class="ciudades form">
<?php echo $this->Form->create('Ciudad');?>
	<fieldset>
		<legend><?php echo __('Agregar Registro'); ?></legend>
	<?php
		echo $this->Form->input('ciudad');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Ciudades'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Direcciones'), array('controller' => 'personas_direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Direccion'), array('controller' => 'personas_direcciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Direcciones'), array('controller' => 'propiedades_direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Direccion'), array('controller' => 'propiedades_direcciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
