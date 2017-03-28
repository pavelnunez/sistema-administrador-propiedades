<div class="fiadores view">
<h2><?php  echo __('Fiador');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fiador['Fiador']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fiador['Persona']['clave'], array('controller' => 'personas', 'action' => 'view', $fiador['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clave'); ?></dt>
		<dd>
			<?php echo h($fiador['Fiador']['clave']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Fiador'), array('action' => 'edit', $fiador['Fiador']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Fiador'), array('action' => 'delete', $fiador['Fiador']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $fiador['Fiador']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Fiadores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Fiador'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
