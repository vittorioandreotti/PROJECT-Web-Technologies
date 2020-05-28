<?php
    $jobs=['Operaio','Ingegnere','Insegnante','Architetto'];
?>
{{ Form::select('job', array_values($jobs), '',  ['class'=>'input','id' => 'job']) }}