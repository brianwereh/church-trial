<?php
/**................................................................
 * @package eblog v 1.0
 * @author Brian 
 * AREK Technology Ltd.            
 * (arekbrian@gmail.com)
 * ................................................................
 */
	include'../connect.php';
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM events WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:all-events.php?success=true");
        }else{
            header("location:all-events.php?failed=true");
        } 
		
?>