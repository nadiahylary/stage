<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Mpfournisseurs/add"/> <i class="fa fa-plus-circle"></i> Ajouter </a>
    </div>
    
</div>
<br><input type="hidden" id="page" value="1"/>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Mpfournisseurs'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th><?php echo $this->Paginator->sort('Id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Fournisseur_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Matierepremiere_id'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Code'); ?></th>
	         
		<th><?php echo $this->Paginator->sort('Prix_achat'); ?></th>
			<th class="actions" align="center"></th>
        </tr></thead><tbody>
	<?php foreach ($mpfournisseurs as $mpfournisseur): ?>
	<tr>
		<td><?php echo h($mpfournisseur['Mpfournisseur']['id']); ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link($mpfournisseur['Fournisseur']['id'], array('controller' => 'fournisseurs', 'action' => 'view', $mpfournisseur['Fournisseur']['id'])); ?>
		</td>
		<td >
			<?php echo $this->Html->link($mpfournisseur['Matierepremiere']['id'], array('controller' => 'matierepremieres', 'action' => 'view', $mpfournisseur['Matierepremiere']['id'])); ?>
		</td>
		<td><?php echo h($mpfournisseur['Mpfournisseur']['code']); ?>&nbsp;</td>
		<td><?php echo h($mpfournisseur['Mpfournisseur']['prix_achat']); ?>&nbsp;</td>
		<td align="center">
			<?php echo $this->Html->link("<button class='btn btn-xs btn-success'><i class='fa fa-search'></i></button>", array('action' => 'view', $mpfournisseur['Mpfournisseur']['id']),array('escape' => false)); ?>
			<?php echo $this->Html->link("<button class='btn btn-xs btn-warning'><i class='fa fa-edit'></i></button>", array('action' => 'edit', $mpfournisseur['Mpfournisseur']['id']),array('escape' => false)); ?>
			<?php echo $this->Form->postLink("<button class='btn btn-xs btn-danger'><i class='fa fa-trash-o'></i></button>", array('action' => 'delete', $mpfournisseur['Mpfournisseur']['id']),array('escape' => false,null), __('Veuillez vraiment supprimer cette enregistrement # %s?', $mpfournisseur['Mpfournisseur']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


