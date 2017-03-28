<div class="reclamaciones view">
<h2><?php  echo __('Reclamacion');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reclamacion['Reclamacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($reclamacion['Reclamacion']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inquilino'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reclamacion['Inquilino']['id'], array('controller' => 'inquilinos', 'action' => 'view', $reclamacion['Inquilino']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reclamacion['Usuario']['nombre_usuario'], array('controller' => 'usuarios', 'action' => 'view', $reclamacion['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detalle'); ?></dt>
		<dd>
			<?php echo h($reclamacion['Reclamacion']['detalle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($reclamacion['Reclamacion']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora'); ?></dt>
		<dd>
			<?php echo h($reclamacion['Reclamacion']['hora']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resuelto'); ?></dt>
		<dd>
			<?php echo h($reclamacion['Reclamacion']['resuelto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
			<?php echo h($reclamacion['Reclamacion']['activo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Reclamacion'), array('action' => 'edit', $reclamacion['Reclamacion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Reclamacion'), array('action' => 'delete', $reclamacion['Reclamacion']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $reclamacion['Reclamacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Reclamaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Reclamacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inquilinos'), array('controller' => 'inquilinos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Inquilino'), array('controller' => 'inquilinos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
