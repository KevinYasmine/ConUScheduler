<?php
/* @var $this SchedulerController
 * @var $model PreferenceForm
 */


$this->breadcrumbs=array(
	'Schedule Planner',
);
?>

<h1>Generate a Schedule</h1>
<br>
<input type="button" value="View Course Sequence">
<br><br>
<div id="user-preferences">
    <h2>Select Preferences</h2>
    <?php
    // pass the model to the _preference.php file so that the data from the model can be accessed
    $this->renderPartial('_preference', array(
        'model' => $model,
    ));
    ?>
</div>

<div id="buttons">
    <input type="button" value="Generate Schedule"> <input type="button" value="View Saved Schedules">
</div>