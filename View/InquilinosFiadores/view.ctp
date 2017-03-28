<div class="inquilinosFiadores view">
<h2><?php  echo __('Inquilinos Fiador');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($inquilinosFiador['InquilinosFiador']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inquilino'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inquilinosFiador['Inquilino']['clave'], array('controller' => 'inquilinos', 'action' => 'view', $inquilinosFiador['Inquilino']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fiador'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inquilinosFiador['Fiador']['clave'], array('controller' => 'fiadores', 'action' => 'view', $inquilinosFiador['Fiador']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Registro'), array('action' => 'edit', $inquilinosFiador['InquilinosFiador']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Registro'), array('action' => 'delete', $inquilinosFiador['InquilinosFiador']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $inquilinosFiador['InquilinosFiador']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Registros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Registro'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inquilinos'), array('controller' => 'inquilinos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Inquilino'), array('controller' => 'inquilinos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fiadores'), array('controller' => 'fiadores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Fiador'), array('controller' => 'fiadores', 'action' => 'add')); ?> </li>
	</ul>
</div>
