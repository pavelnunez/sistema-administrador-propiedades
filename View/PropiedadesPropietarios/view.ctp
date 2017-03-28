<div class="propiedadesPropietarios view">
<h2><?php  echo __('Propiedades y Propietarios');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propiedadesPropietario['PropiedadesPropietario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Propiedad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propiedadesPropietario['Propiedad']['clave'], array('controller' => 'propiedades', 'action' => 'view', $propiedadesPropietario['Propiedad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Propietario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propiedadesPropietario['Propietario']['id'], array('controller' => 'propietarios', 'action' => 'view', $propiedadesPropietario['Propietario']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Registro'), array('action' => 'edit', $propiedadesPropietario['PropiedadesPropietario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Registro'), array('action' => 'delete', $propiedadesPropietario['PropiedadesPropietario']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $propiedadesPropietario['PropiedadesPropietario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Registros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Registro'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propiedad'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propietarios'), array('controller' => 'propietarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propietario'), array('controller' => 'propietarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
