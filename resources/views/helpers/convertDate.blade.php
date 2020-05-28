<?php
$dateConvert = DateTime::createFromFormat('Y-m-d', $date);
Log::info($date);
?>
<tr><td><b>Data di nascita</b></td><td>{{$dateConvert->format('d/m/Y')}}</td></tr>