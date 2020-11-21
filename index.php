<?php
include('smarty-3.1.35/libs/Smarty.class.php');


// create object
$smarty = new Smarty;

// assign some content. This would typically come from
// a database or other source, but we'll use static
// values for the purpose of this example.
// display it
$smarty->display('view/login.tpl');
?>