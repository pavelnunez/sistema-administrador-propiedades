<div class="propiedadesDirecciones form">
<?php echo $this->Form->create('PropiedadesDireccion');?>
	<fieldset>
		<legend><?php echo __('Agregar Registro'); ?></legend>
	<?php
		echo $this->Form->input('propiedad_id');
		echo $this->Form->input('direcciones_tipo_id');
		echo $this->Form->input('direccion');
		echo $this->Form->input('calle');
		echo $this->Form->input('numero');
		echo $this->Form->input('sector_id');
		echo $this->Form->input('ciudad_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Direcciones'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propiedad'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tipos'), array('controller' => 'direcciones_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Tipo'), array('controller' => 'direcciones_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Sectores'), array('controller' => 'sectores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Sector'), array('controller' => 'sectores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Ciudades'), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Ciudad'), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
	</ul>
</div>
