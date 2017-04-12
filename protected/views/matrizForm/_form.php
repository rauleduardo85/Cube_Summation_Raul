<?php
/* @var $this MatrizController */
/* @var $model Matriz */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'matriz-_form-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
            <div class="append-16">
		<?php echo $form->labelEx($model,'input'); ?>
		<?php echo $form->textArea($model, 'input' ,array('cols' => 40 , 'rows' => 10) );  ?>                 
		<?php echo $form->error($model,'input'); ?>
            </div>  
            
	</div>
        
        <div class="row">
		
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<div class="row">
    <div class="form">
        <?php
        $response = explode(',', $model->output); 
        echo '<textarea cols="50" rows="10" readonly="readonly" style="white-space: pre-line;" wrap="hard">';
        foreach ($response as $md)
        {
            echo $md."\n";
        }
        echo '</textarea>'
        ?>
    </div>
</div>