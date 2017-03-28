<div class="usuarios view">
<h2><?php  echo __('Usuario');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nombre_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contrasena'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['contrasena']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rol'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['rol']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['activo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reclamaciones'), array('controller' => 'reclamaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Reclamacion'), array('controller' => 'reclamaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Relacionados Reclamaciones');?></h3>
	<?php if (!empty($usuario['Reclamacion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Inquilino Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Detalle'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Hora'); ?></th>
		<th><?php echo __('Resuelto'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($usuario['Reclamacion'] as $reclamacion): ?>
		<tr>
			<td><?php echo $reclamacion['id'];?></td>
			<td><?php echo $reclamacion['numero'];?></td>
			<td><?php echo $reclamacion['inquilino_id'];?></td>
			<td><?php echo $reclamacion['usuario_id'];?></td>
			<td><?php echo $reclamacion['detalle'];?></td>
			<td><?php echo $reclamacion['fecha'];?></td>
			<td><?php echo $reclamacion['hora'];?></td>
			<td><?php echo $reclamacion['resuelto'];?></td>
			<td><?php echo $reclamacion['activo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'reclamaciones', 'action' => 'view', $reclamacion['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'reclamaciones', 'action' => 'edit', $reclamacion['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'reclamaciones', 'action' => 'delete', $reclamacion['id']), null, __('Esta seguro que desea borrar el registro # %s?', $reclamacion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuev@ Reclamacion'), array('controller' => 'reclamaciones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
