<html>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>

<?php
require('api/db.php');
  $id_delete = $_POST['id'];
  echo $id_delete;
  $stmt = $con->prepare("DELETE FROM expenses WHERE id_expenses = $id_delete" );
  $stmt ->execute();


