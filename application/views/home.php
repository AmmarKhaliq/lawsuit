<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
</head>

<body>
    <?php include('includes/navigation.php'); ?>


<!-- Content -->
<div class="main">
  
    <div class="containe mb-5">
        <h2 class="mb-4">User's List</h2>
        <table class="table table-fluid" id="myTable">
        <thead>
        <tr><th>Name</th><th>Email</th><th>Password</th></tr>
        </thead>
        <tbody>
        <tr><td>Daniel Danny</td><td>danny.daniel@gmail.com</td><td>Pass1234</td></tr>
        <tr><td>Samuel</td><td>samuel@gmail.com</td><td>Pass1234</td></tr>
        <tr><td>Jack</td><td>jack@gmail.com</td><td>Pass1234</td></tr>
        <tr><td>Eureka</td><td>eureka@gmail.com</td><td>Pass1234</td></tr>
        <tr><td>Pinky</td><td>pinky@gmail.com</td><td>Pass1234</td></tr>
        <tr><td>Mishti</td><td>mishti@gmail.com</td><td>Pass1234</td></tr>
        <tr><td>Puneet</td><td>puneet@gmail.com</td><td>Pass1234</td></tr>
        <tr><td>Nick</td><td>nick@gmail.com</td><td>Pass1234</td></tr>
        <tr><td>Danika</td><td>danika@gmail.com</td><td>Pass1234</td></tr>
        <tr><td>Vishakha</td><td>vishakha@gmail.com</td><td>Pass1234</td></tr>
        <tr><td>Nitin</td><td>ni3@gmail.com</td><td>Pass1234</td></tr>
        <tr><td>Latika</td><td>latika@gmail.com</td><td>Pass1234</td></tr>
        <tr><td>Kaavya</td><td>kaavya@gmail.com</td><td>Pass1234</td></tr>
        <tr><td>Ishika</td><td>ishika@gmail.com</td><td>Pass1234</td></tr>
        <tr><td>Veronika</td><td>veronika@gmail.com</td><td>Pass1234</td></tr>
        </tbody>
        </table>
    </div>
    
   


</div>













    <?php include('includes/footer.php'); ?>
    <?php include('includes/bottom_links.php'); ?>
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
    } );
        </script>

</body>

</html>