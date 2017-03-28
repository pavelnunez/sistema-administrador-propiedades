<div class="inquilinos view">
<h2><?php  echo __('Inquilino');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($inquilino['Inquilino']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clave'); ?></dt>
		<dd>
			<?php echo h($inquilino['Inquilino']['clave']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inquilino['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $inquilino['Persona']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Inquilino'), array('action' => 'edit', $inquilino['Inquilino']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Inquilino'), array('action' => 'delete', $inquilino['Inquilino']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $inquilino['Inquilino']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Inquilinos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Inquilino'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contratos'), array('controller' => 'contratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Contrato'), array('controller' => 'contratos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Excusas'), array('controller' => 'excusas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Excusa'), array('controller' => 'excusas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pagos'), array('controller' => 'pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Pago'), array('controller' => 'pagos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reclamaciones'), array('controller' => 'reclamaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Reclamacion'), array('controller' => 'reclamaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fiadores'), array('controller' => 'fiadores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Fiador'), array('controller' => 'fiadores', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Relacionados Contratos');?></h3>
	<?php if (!empty($inquilino['Contrato'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Inquilino Id'); ?></th>
		<th><?php echo __('Propietario Id'); ?></th>
		<th><?php echo __('Propiedad Id'); ?></th>
		<th><?php echo __('Fecha Contrato'); ?></th>
		<th><?php echo __('Fecha Termino'); ?></th>
		<th><?php echo __('Monto'); ?></th>
		<th><?php echo __('Pagado'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($inquilino['Contrato'] as $contrato): ?>
		<tr>
			<td><?php echo $contrato['id'];?></td>
			<td><?php echo $contrato['numero'];?></td>
			<td><?php echo $contrato['inquilino_id'];?></td>
			<td><?php echo $contrato['propietario_id'];?></td>
			<td><?php echo $contrato['propiedad_id'];?></td>
			<td><?php echo $contrato['fecha_contrato'];?></td>
			<td><?php echo $contrato['fecha_termino'];?></td>
			<td><?php echo $contrato['monto'];?></td>
			<td><?php echo $contrato['pagado'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'contratos', 'action' => 'view', $contrato['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'contratos', 'action' => 'edit', $contrato['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'contratos', 'action' => 'delete', $contrato['id']), null, __('Esta seguro que desea borrar el registro # %s?', $contrato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuev@ Contrato'), array('controller' => 'contratos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Relacionados Excusas');?></h3>
	<?php if (!empty($inquilino['Excusa'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Clave'); ?></th>
		<th><?php echo __('Inquilino Id'); ?></th>
		<th><?php echo __('Propiedad Id'); ?></th>
		<th><?php echo __('Excusa'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Hora'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($inquilino['Excusa'] as $excusa): ?>
		<tr>
			<td><?php echo $excusa['id'];?></td>
			<td><?php echo $excusa['clave'];?></td>
			<td><?php echo $excusa['inquilino_id'];?></td>
			<td><?php echo $excusa['propiedad_id'];?></td>
			<td><?php echo $excusa['excusa'];?></td>
			<td><?php echo $excusa['fecha'];?></td>
			<td><?php echo $excusa['hora'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'excusas', 'action' => 'view', $excusa['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'excusas', 'action' => 'edit', $excusa['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'excusas', 'action' => 'delete', $excusa['id']), null, __('Esta seguro que desea borrar el registro # %s?', $excusa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuev@ Excusa'), array('controller' => 'excusas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Relacionados Pagos');?></h3>
	<?php if (!empty($inquilino['Pago'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Clave'); ?></th>
		<th><?php echo __('Inquilino Id'); ?></th>
		<th><?php echo __('Propiedad Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Monto'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($inquilino['Pago'] as $pago): ?>
		<tr>
			<td><?php echo $pago['id'];?></td>
			<td><?php echo $pago['clave'];?></td>
			<td><?php echo $pago['inquilino_id'];?></td>
			<td><?php echo $pago['propiedad_id'];?></td>
			<td><?php echo $pago['fecha'];?></td>
			<td><?php echo $pago['monto'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'pagos', 'action' => 'view', $pago['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'pagos', 'action' => 'edit', $pago['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'pagos', 'action' => 'delete', $pago['id']), null, __('Esta seguro que desea borrar el registro # %s?', $pago['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuev@ Pago'), array('controller' => 'pagos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Relacionados Reclamaciones');?></h3>
	<?php if (!empty($inquilino['Reclamacion'])):?>
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
		foreach ($inquilino['Reclamacion'] as $reclamacion): ?>
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
<div class="related">
	<h3><?php echo __('Relacionados Fiadores');?></h3>
	<?php if (!empty($inquilino['Fiador'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Clave'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($inquilino['Fiador'] as $fiador): ?>
		<tr>
			<td><?php echo $fiador['id'];?></td>
			<td><?php echo $fiador['persona_id'];?></td>
			<td><?php echo $fiador['clave'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'fiadores', 'action' => 'view', $fiador['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'fiadores', 'action' => 'edit', $fiador['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'fiadores', 'action' => 'delete', $fiador['id']), null, __('Esta seguro que desea borrar el registro # %s?', $fiador['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuev@ Fiador'), array('controller' => 'fiadores', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
