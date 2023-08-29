<?php
require_once 'config.php';
session_unset();
session_destroy();
echo "<script>window.location.href='http://localhost/covid_vac_sys/medic-care/'</script>";
?>