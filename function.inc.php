<?php
function get_val_save($connection,$val){
return mysqli_real_escape_string($connection,$val);
}
?>