<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<?php 

$em = $_GET['email'];
$na = $_GET['name'];

?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Email</th>
      <th scope="col">name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th><?php echo $em ?></th>
      <td><?php echo $na ?></td>
    </tr>
    
  </tbody>
</table>