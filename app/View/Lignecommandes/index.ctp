<div class="lignecommandes index">
	<h2><?php echo __('Lignecommandes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('produit_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quantite'); ?></th>
			<th><?php echo $this->Paginator->sort('prix'); ?></th>
			<th><?php echo $this->Paginator->sort('total'); ?></th>
			<th><?php echo $this->Paginator->sort('commande_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($lignecommandes as $lignecommande): ?>
	<tr>
		<td><?php echo h($lignecommande['Lignecommande']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($lignecommande['Produit']['id'], array('controller' => 'produits', 'action' => 'view', $lignecommande['Produit']['id'])); ?>
		</td>
		<td><?php echo h($lignecommande['Lignecommande']['quantite']); ?>&nbsp;</td>
		<td><?php echo h($lignecommande['Lignecommande']['prix']); ?>&nbsp;</td>
		<td><?php echo h($lignecommande['Lignecommande']['total']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($lignecommande['Commande']['id'], array('controller' => 'commandes', 'action' => 'view', $lignecommande['Commande']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $lignecommande['Lignecommande']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lignecommande['Lignecommande']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lignecommande['Lignecommande']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $lignecommande['Lignecommande']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Lignecommande'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Produits'), array('controller' => 'produits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produit'), array('controller' => 'produits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commandes'), array('controller' => 'commandes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commande'), array('controller' => 'commandes', 'action' => 'add')); ?> </li>
	</ul>
</div>
