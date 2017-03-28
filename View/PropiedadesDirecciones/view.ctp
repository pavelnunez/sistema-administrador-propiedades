<div class="propiedadesDirecciones view">
<h2><?php  echo __('Propiedades Direccion');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propiedadesDireccion['PropiedadesDireccion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Propiedad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propiedadesDireccion['Propiedad']['clave'], array('controller' => 'propiedades', 'action' => 'view', $propiedadesDireccion['Propiedad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direcciones Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propiedadesDireccion['DireccionesTipo']['id'], array('controller' => 'direcciones_tipos', 'action' => 'view', $propiedadesDireccion['DireccionesTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($propiedadesDireccion['PropiedadesDireccion']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calle'); ?></dt>
		<dd>
			<?php echo h($propiedadesDireccion['PropiedadesDireccion']['calle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($propiedadesDireccion['PropiedadesDireccion']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sector'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propiedadesDireccion['Sector']['sector'], array('controller' => 'sectores', 'action' => 'view', $propiedadesDireccion['Sector']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciudad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propiedadesDireccion['Ciudad']['ciudad'], array('controller' => 'ciudades', 'action' => 'view', $propiedadesDireccion['Ciudad']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Direccion'), array('action' => 'edit', $propiedadesDireccion['PropiedadesDireccion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Direccion'), array('action' => 'delete', $propiedadesDireccion['PropiedadesDireccion']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $propiedadesDireccion['PropiedadesDireccion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Direcciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Direccion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propiedad'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'direcciones_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Tipo'), array('controller' => 'direcciones_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sectores'), array('controller' => 'sectores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Sector'), array('controller' => 'sectores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudades'), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Ciudad'), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
	</ul>
</div>
