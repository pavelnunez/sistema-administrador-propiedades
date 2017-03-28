<div class="propiedades form">
<?php echo $this->Form->create('Propiedad');?>
	<fieldset>
		<legend><?php echo __('Editar Registro'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('clave');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('descripcion_corta');
		echo $this->Form->input('habitaciones');
		echo $this->Form->input('sala');
		echo $this->Form->input('cocina');
		echo $this->Form->input('balcon');
		echo $this->Form->input('propiedades_tipo_id', array('empty' => true));
		echo $this->Form->input('activo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Propiedad.id')), null, __('Esta seguro de que quiere eliminar el registro # %s?', $this->Form->value('Propiedad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Propiedades'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Tipos'), array('controller' => 'propiedades_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Tipo'), array('controller' => 'propiedades_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Contratos'), array('controller' => 'contratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Contrato'), array('controller' => 'contratos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Excusas'), array('controller' => 'excusas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Excusa'), array('controller' => 'excusas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Pagos'), array('controller' => 'pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Pago'), array('controller' => 'pagos', 'action' => 'add')); ?> </li>
	</ul>
</div>
