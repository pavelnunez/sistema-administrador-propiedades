<div class="excusas view">
<h2><?php  echo __('Excusa');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($excusa['Excusa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clave'); ?></dt>
		<dd>
			<?php echo h($excusa['Excusa']['clave']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inquilino'); ?></dt>
		<dd>
			<?php echo $this->Html->link($excusa['Inquilino']['clave'], array('controller' => 'inquilinos', 'action' => 'view', $excusa['Inquilino']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Propiedad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($excusa['Propiedad']['clave'], array('controller' => 'propiedades', 'action' => 'view', $excusa['Propiedad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Excusa'); ?></dt>
		<dd>
			<?php echo h($excusa['Excusa']['excusa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($excusa['Excusa']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora'); ?></dt>
		<dd>
			<?php echo h($excusa['Excusa']['hora']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Excusa'), array('action' => 'edit', $excusa['Excusa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Excusa'), array('action' => 'delete', $excusa['Excusa']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $excusa['Excusa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Excusas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Excusa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inquilinos'), array('controller' => 'inquilinos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Inquilino'), array('controller' => 'inquilinos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propiedad'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
