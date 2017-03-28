<div class="sectores form">
<?php echo $this->Form->create('Sector');?>
	<fieldset>
		<legend><?php echo __('Agregar Registro'); ?></legend>
	<?php
		echo $this->Form->input('sector');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Sectores'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Personas Direcciones'), array('controller' => 'personas_direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Per. Direccion'), array('controller' => 'personas_direcciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Prop. Direcciones'), array('controller' => 'propiedades_direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Prop. Direccion'), array('controller' => 'propiedades_direcciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
