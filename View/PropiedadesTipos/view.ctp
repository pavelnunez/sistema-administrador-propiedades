<div class="propiedadesTipos view">
<h2><?php  echo __('Tipos de Propiedad');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propiedadesTipo['PropiedadesTipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($propiedadesTipo['PropiedadesTipo']['tipo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Tipo'), array('action' => 'edit', $propiedadesTipo['PropiedadesTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Tipo'), array('action' => 'delete', $propiedadesTipo['PropiedadesTipo']['id']), null, __('Esta seguro que desea eliminar el registro # %s?', $propiedadesTipo['PropiedadesTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuev@ Tipo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
