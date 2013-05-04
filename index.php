<pre>
<?php var_dump($_SERVER['SCRIPT_NAME']); ?>
<?php var_dump($_SERVER['REQUEST_URI']); ?>
</pre>

<?php

$request_uri = $_SERVER['REQUEST_URI'];
$array = explode('/', $request_uri);

?>

<pre>
<?php  var_dump($array); ?>
</pre>