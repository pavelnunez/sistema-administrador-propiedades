<div class="pagos view">
<h2><?php  echo __('Pago');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clave'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['clave']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inquilino'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pago['Inquilino']['clave'], array('controller' => 'inquilinos', 'action' => 'view', $pago['Inquilino']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Propiedad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pago['Propiedad']['clave'], array('controller' => 'propiedades', 'action' => 'view', $pago['Propiedad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monto'); ?></dt>
		<dd>
			<?php echo h($pago['Pago']['monto']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Pago'), array('action' => 'edit', $pago['Pago']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Pago'), array('action' => 'delete', $pago['Pago']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $pago['Pago']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Pagos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Pago'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inquilinos'), array('controller' => 'inquilinos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Inquilino'), array('controller' => 'inquilinos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propiedad'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
