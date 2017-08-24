<?php
/**
 * Created by PhpStorm.
 * User: giridher
 * Date: 8/21/17
 * Time: 4:26 PM
 */
require_once ("Console_GetoptPlus");

$cmd ="ls -a";
$out=shell_exec($cmd);
echo "<pre> ".$cmd."</pre>";


?>