<div class="propiedades view">
<h2><?php  echo __('Propiedad');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propiedad['Propiedad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clave'); ?></dt>
		<dd>
			<?php echo h($propiedad['Propiedad']['clave']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($propiedad['Propiedad']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Corta'); ?></dt>
		<dd>
			<?php echo h($propiedad['Propiedad']['descripcion_corta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Habitaciones'); ?></dt>
		<dd>
			<?php echo h($propiedad['Propiedad']['habitaciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sala'); ?></dt>
		<dd>
			<?php echo h($propiedad['Propiedad']['sala']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cocina'); ?></dt>
		<dd>
			<?php echo h($propiedad['Propiedad']['cocina']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Balcon'); ?></dt>
		<dd>
			<?php echo h($propiedad['Propiedad']['balcon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propiedad['PropiedadesTipo']['tipo'], array('controller' => 'propiedades_tipos', 'action' => 'view', $propiedad['PropiedadesTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
			<?php echo h($propiedad['Propiedad']['activo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Propiedad'), array('action' => 'edit', $propiedad['Propiedad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Propiedad'), array('action' => 'delete', $propiedad['Propiedad']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $propiedad['Propiedad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Propiedades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propiedad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tipos'), array('controller' => 'propiedades_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Tipo'), array('controller' => 'propiedades_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Contratos'), array('controller' => 'contratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Contrato'), array('controller' => 'contratos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Excusas'), array('controller' => 'excusas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Excusa'), array('controller' => 'excusas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Pagos'), array('controller' => 'pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Pago'), array('controller' => 'pagos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Relacionados Contratos');?></h3>
	<?php if (!empty($propiedad['Contrato'])):?>
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
		foreach ($propiedad['Contrato'] as $contrato): ?>
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
	<?php if (!empty($propiedad['Excusa'])):?>
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
		foreach ($propiedad['Excusa'] as $excusa): ?>
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
	<?php if (!empty($propiedad['Pago'])):?>
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
		foreach ($propiedad['Pago'] as $pago): ?>
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
