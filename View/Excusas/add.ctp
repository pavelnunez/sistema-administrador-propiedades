<div class="excusas form">
<?php echo $this->Form->create('Excusa');?>
	<fieldset>
		<legend><?php echo __('Agregar Registro'); ?></legend>
	<?php
		echo $this->Form->input('clave');
		echo $this->Form->input('inquilino_id');
		echo $this->Form->input('propiedad_id');
		echo $this->Form->input('excusa');
		echo $this->Form->input('fecha');
		echo $this->Form->input('hora');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Excusas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Inquilinos'), array('controller' => 'inquilinos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Inquilino'), array('controller' => 'inquilinos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propiedad'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
