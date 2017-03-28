<div class="personasTelefonos index">
	<h2><?php echo __('Personas Telefonos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('persona_id');?></th>
			<th><?php echo $this->Paginator->sort('telefonos_tipo_id');?></th>
			<th><?php echo $this->Paginator->sort('telefono');?></th>
			<th class="actions"><?php echo __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($personasTelefonos as $personasTelefono): ?>
	<tr>
		<td><?php echo h($personasTelefono['PersonasTelefono']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($personasTelefono['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $personasTelefono['Persona']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($personasTelefono['TelefonosTipo']['tipo'], array('controller' => 'telefonos_tipos', 'action' => 'view', $personasTelefono['TelefonosTipo']['id'])); ?>
		</td>
		<td><?php echo h($personasTelefono['PersonasTelefono']['telefono']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $personasTelefono['PersonasTelefono']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $personasTelefono['PersonasTelefono']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $personasTelefono['PersonasTelefono']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $personasTelefono['PersonasTelefono']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina %page% de %pages%, mostrando %current% registros de un total de %count%, comenzando en el registro %start%, terminando en %end%')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previo'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('proximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuev@ Telefono'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tipos'), array('controller' => 'telefonos_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Tipo'), array('controller' => 'telefonos_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
