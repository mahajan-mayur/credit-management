<?php 
session_start();
$con=mysqli_connect('localhost','root','','company');

$q="select * from user ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>
<html>

<head>
      <title>
            viewUser
      </title>
      <link rel="stylesheet" href="css/styles.css">
      <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>

      <h1>User Information <button class="btn btn-danger" onclick="window.location.href='index.php'" style="float: right;"> HOME </button></h1>
      <table class="table table-dark">
            <thead>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Credit</th>

            </thead>
            <tbody>
                  <tr>
                        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
                        <td><?php echo  $row["name"]; ?></td>
                        <td><?php echo  $row["email"]; ?></td>
                        <td><?php echo  $row["credit"]; ?></td>


                  </tr>
                  <tr>
                        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
                        <td><?php echo  $row["name"]; ?></td>
                        <td><?php echo  $row["email"]; ?></td>
                        <td><?php echo  $row["credit"]; ?></td>


                  </tr>
                  <tr>
                        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
                        <td><?php echo  $row["name"]; ?></td>
                        <td><?php echo  $row["email"]; ?></td>
                        <td><?php echo  $row["credit"]; ?></td>


                  </tr>
                  <tr>
                        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
                        <td><?php echo  $row["name"]; ?></td>
                        <td><?php echo  $row["email"]; ?></td>
                        <td><?php echo  $row["credit"]; ?></td>


                  </tr>
                  <tr>
                        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
                        <td><?php echo  $row["name"]; ?></td>
                        <td><?php echo  $row["email"]; ?></td>
                        <td><?php echo  $row["credit"]; ?></td>


                  </tr>
                  <tr>
                        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
                        <td><?php echo  $row["name"]; ?></td>
                        <td><?php echo  $row["email"]; ?></td>
                        <td><?php echo  $row["credit"]; ?></td>


                  </tr>
                  <tr>
                        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
                        <td><?php echo  $row["name"]; ?></td>
                        <td><?php echo  $row["email"]; ?></td>
                        <td><?php echo  $row["credit"]; ?></td>


                  </tr>
                  <tr>
                        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
                        <td><?php echo  $row["name"]; ?></td>
                        <td><?php echo  $row["email"]; ?></td>
                        <td><?php echo  $row["credit"]; ?></td>


                  </tr>
                  <tr>
                        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
                        <td><?php echo  $row["name"]; ?></td>
                        <td><?php echo  $row["email"]; ?></td>
                        <td><?php echo  $row["credit"]; ?></td>


                  </tr>
                  <tr>
                        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
                        <td><?php echo  $row["name"]; ?></td>
                        <td><?php echo  $row["email"]; ?></td>
                        <td><?php echo  $row["credit"]; ?></td>


                  </tr>

            </tbody>
      </table>




      <br><br>
      
 <!-- js for bootstarp -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script>
</body>

</html>