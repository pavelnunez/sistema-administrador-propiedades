<div class="propietarios view">
<h2><?php  echo __('Propietario');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propietario['Propietario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clave'); ?></dt>
		<dd>
			<?php echo h($propietario['Propietario']['clave']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propietario['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $propietario['Persona']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Propietario'), array('action' => 'edit', $propietario['Propietario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Propietario'), array('action' => 'delete', $propietario['Propietario']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $propietario['Propietario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Propietarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propietario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contratos'), array('controller' => 'contratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Contrato'), array('controller' => 'contratos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Propiedades'), array('controller' => 'propiedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Propiedad'), array('controller' => 'propiedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Relacionados Contratos');?></h3>
	<?php if (!empty($propietario['Contrato'])):?>
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
		foreach ($propietario['Contrato'] as $contrato): ?>
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
	<h3><?php echo __('Relacionados Propiedades');?></h3>
	<?php if (!empty($propietario['Propiedad'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Clave'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Descripcion Corta'); ?></th>
		<th><?php echo __('Habitaciones'); ?></th>
		<th><?php echo __('Sala'); ?></th>
		<th><?php echo __('Cocina'); ?></th>
		<th><?php echo __('Balcon'); ?></th>
		<th><?php echo __('Propiedades Tipo Id'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($propietario['Propiedad'] as $propiedad): ?>
		<tr>
			<td><?php echo $propiedad['id'];?></td>
			<td><?php echo $propiedad['clave'];?></td>
			<td><?php echo $propiedad['descripcion'];?></td>
			<td><?php echo $propiedad['descripcion_corta'];?></td>
			<td><?php echo $propiedad['habitaciones'];?></td>
			<td><?php echo $propiedad['sala'];?></td>
			<td><?php echo $propiedad['cocina'];?></td>
			<td><?php echo $propiedad['balcon'];?></td>
			<td><?php echo $propiedad['propiedades_tipo_id'];?></td>
			<td><?php echo $propiedad['activo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'propiedades', 'action' => 'view', $propiedad['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'propiedades', 'action' => 'edit', $propiedad['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'propiedades', 'action' => 'delete', $propiedad['id']), null, __('Esta seguro que desea borrar el registro # %s?', $propiedad['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuev@ Propiedad'), array('controller' => 'propiedades', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
