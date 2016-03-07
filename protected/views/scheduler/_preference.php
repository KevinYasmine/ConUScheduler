<?php
/**
 * Created by PhpStorm.
 * User: Dimitri
 * Date: 3/5/2016
 * Time: 1:10 AM
 *
 * @var $model PreferenceForm
 */



// this is where we make the preferences menu and all using our model
?>

<div class="form">
    <?php echo CHtml::beginForm(); ?>

    <?php echo CHtml::errorSummary($model); ?>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'courseload'); ?>
        <?php echo CHtml::activeRadioButtonList($model, 'courseload', array('4'=>'4 Courses', '5'=>'5 Courses'),
        array('labelOptions'=>array('style'=>'display:inline'))); ?>
    </div>
    <br/>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'days'); ?>
        <?php echo CHtml::activeCheckBoxList($model, 'days', array('mon'=>'Monday', 'tues'=>'Tuesday', 'weds'=>'Wednesday',
            'thurs'=>'Thursday', 'fri'=>'Friday'), array('labelOptions'=>array('style'=>'display:inline'))); ?>
    </div>
    <br/>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'times'); ?>
        <?php echo CHtml::activeCheckBoxList($model, 'times',
            array('no-morning'=>'No mornings (no classes starting at 8:45AM)',
            'no-evening'=>'No evenings (no classes starting at 5:45PM or later)'),
                array('labelOptions'=>array('style'=>'display:inline'))); ?>
    </div>
    <br/>

    <div class="row-submit">
        <?php echo CHtml::submitButton('Save Preferences'); ?>
        <?php echo CHtml::resetButton('Reset'); ?>
    </div>
    <br/>


    <?php echo CHtml::endForm(); ?>
</div><!-- form -->