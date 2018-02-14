<?php
echo("running on localhost:8080\n");
exec("php -S localhost:8080 -d display_errors=1 -t .");
?>