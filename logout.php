<?php
require 'db.php';
if( isset($_SESSION['logged_user'])) :                          
unset($_SESSION['logged_user']);
endif; ?>
<?php if( !isset($_SESSION['logged_user'])) :
    header('Location: http://bannerboo/');
endif; ?>