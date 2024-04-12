<?php
/**................................................................
 * @package eblog v 1.0
 * @author Brian 
 * AREK Technology Ltd.            
 * (arekbrian@gmail.com)
 * ................................................................
 */
session_start();
session_destroy();
header("location: sign-in.php");
?>