<html>
  <HEAD> 
    <style>
      body {
            background-image: url('details.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
          }
  table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
              }
              
              li {
                float: right;
              }
              
              li a {
                display: block;
                padding: 8px;
                background-color: #dddddd;
              }
</style>
  </HEAD>
    <body>  
   
      <h1 style="color:red"><center><marquee><u>Employee Details</u></marquee></center></h1>
            <?php
        $user = "root";
        $pass = "";
        $db = "employee";
        $conn = mysqli_connect("localhost", $user, $pass, $db) or die("no database found");
        if($conn)
        
        $sql="SELECT * FROM employee";
        $rt=mysqli_query($conn,$sql);
        ?>
        <table>
            <tr>
            <th> EmployeeID</th>
            <th> Employee Name </th>
            <th> Date of Birth</th>
            <th> Email</th>
            <th> Phone Number</th>   
            <th> Street</th> 
            <th> City</th>   
            <th> State</th>
            <th> Country</th> 
            <th> Pincode</th>      
            </tr>
            
            <?php
            if(mysqli_num_rows($rt)>0)
            {
                  while($row=mysqli_fetch_array($rt))
                  {  
                    ?>
                    <tr>
                    <td><?php echo $row['id']; ?></td> 
                  <td><?php echo $row['name']; ?></td> 
                  <td><?php echo $row['dob']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['number']; ?></td>
                  <td><?php echo $row['street']; ?></td> 
                  <td><?php echo $row['city']; ?></td>   
                  <td><?php echo $row['state']; ?></td> 
                  <td><?php echo $row['country']; ?></td> 
                  <td><?php echo $row['pin']; ?></td> 
                  </tr>
                <?php

                }
                }
                 ?>
            
        </table>
    </body>
</html>