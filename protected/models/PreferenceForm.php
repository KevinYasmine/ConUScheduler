<?php

/**
 * Created by PhpStorm.
 * User: Dimitri
 * Date: 3/5/2016
 * Time: 1:13 AM
 */
// this class contains the form data. We're extending from CFormModel since the data lives within a form instead of a database table
class PreferenceForm extends CFormModel
{
    public $courseload;
    public $days;
    public $times;

    public function attributeLabels()
    {
        return array(
            'courseload'=>'Course Load',
            'days'=>'Days of the Week',
            'times'=>'Time of Day'
        );
    }

}

