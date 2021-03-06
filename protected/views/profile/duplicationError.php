<?php
/* @var $this ProfileController */
/* @var $model model */
/* @var $form LinkTooForm */
?>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#saveQmodal').modal('show');

        });

    </script>

<div class="modal hide fade" id="saveQmodal" tabindex="-1">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Linking Error:</h4>
    </div>
    <div class="modal-body">
<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'link-to',
    'enableClientValidation' => false,
    'clientOptions'=>array(
        'validateOnSubmit'=>false,
        'validateOnChange'=>false,
    ),
    'htmlOptions'=>array('class'=>'well'),
));
?>

<h3>This account is already link to another account</h3>

    </div>
        <div class="modal-footer">
            <?php $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType'=>'link',
                'type'=>'primary',
                'label'=>'View my Profile',
                'url'=>'../profile/view'
            )); ?>

            <?php $this->endWidget(); ?>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal -->