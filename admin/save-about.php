<?php 
/**................................................................
 * @package eblog v 1.0
 * @author Brian 
 * AREK Technology Ltd.            
 * (arekbrian@gmail.com)
 * ................................................................
 */

include '../connect.php';
$body = $_POST['body'];

//$query = ORM ::for_table('tbl_about')->create();
//$query->body=$body;
//$query->save();


$query = ORM::for_table('tbl_about')->find_one(4);

// The following two forms are equivalent
//$query = $body->get('body');
$query ->body = $body;
$query ->save();
if($query->save()){
      header("location:add-about.php?success=true");
        }else{
            header("location:add-about.php?failed=true");
        }


?>
