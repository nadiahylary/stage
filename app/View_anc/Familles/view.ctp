<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Familles/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Famille'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php echo $this->Form->create('Famille',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                           
           <div class="col-md-6">                         
        		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Nom'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($famille['Famille']['name']); ?>'>

                                  </div>
			
		
                                 
</div><div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Stock alerte'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($famille['Famille']['Stock_alerte']); ?>'>

                                  </div>
			
		
                                 
</div>
               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Tva'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($famille['Famille']['tva']); ?>'>

                                  </div>
			
		
                                 
</div>
           </div><div class="col-md-6">     
              		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Code'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($famille['Famille']['code']); ?>'>

                                  </div>
			
		
                                 
</div>  <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Prix'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($famille['Famille']['Prix']); ?>'>

                                  </div>
			
		
                                 
</div>  <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Marque'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($famille['Marque']['name']); ?>'>

                                  </div>
			
		
                                 
</div>     
              		 	</div>
<?php echo $this->Form->end();?>
	
</div></div></div></div>


	

