<?php
    $jobs=['Operaio','Ingegnere','Insegnante','Architetto'];
?>
{{ Form::select('job', $jobs, '',  ['class'=>'input','id' => 'job']) }}