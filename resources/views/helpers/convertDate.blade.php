<?php
$dateConvert = DateTime::createFromFormat('Y-m-d', $date);
Log::info($date);
?>
<td>{{$dateConvert->format('d/m/Y')}}</td>