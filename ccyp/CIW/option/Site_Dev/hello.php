<?php
$envVars = array("HTTP_USER_AGENT");
foreach($envVars as $var)
{
print "<html><head><title>PHPの例</title></head><body><h1>Hello, 
World!</h1>ユーザエージェント：<strong> 
${$var}</strong>.<br></body></html>";
}
?>
