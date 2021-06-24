
  <?php
    session_start();
    $id = $_SESSION['id'];
    $conn = mysqli_connect("localhost", "root", "", "project");
    if (mysqli_connect_error()) {
        echo "Failed to connect" . mysqli_connect_error();
    }
    // $query = "Select * from details";
    // $query1 = mysqli_query($conn, $query);
    // if($query1)
    // {
    //   echo "YES";
    // }
    // else
    // {
    //   echo "NO";
    // }


    if (isset($_POST['submit'])) 
    {
        
        $Cognitive = $_POST['Cognitive'];
        $Affective = $_POST['Affective'];
        $Behavioural = $_POST['Behavioural'];
        $co1s = $_POST['co1s'];
        $co1m = $_POST['co1m'];
        $co2s = $_POST['co2s'];
        $co2m = $_POST['co2m'];
        $co3s = $_POST['co3s'];
        $co3m = $_POST['co3m'];
        $co4s = $_POST['co4s'];
        $co4m = $_POST['co4m'];
        $co5s = $_POST['co5s'];
        $co5m = $_POST['co5m'];
        $co6s = $_POST['co6s'];
        $co6m = $_POST['co6m'];
      
      
         if (!empty($Cognitive) && !empty($Affective) && !empty($Behavioural) ) 
        {
      $insert = mysqli_query($conn, "Insert into courseobjective (id,Cognitive,Affective,Behavioural,CO1Statements,CO1Module,CO2Statements,CO2Module,CO3Statements,CO3Module,CO4Statements,CO4Module,CO5Statements,CO5Module,CO6Statements,CO6Module)
      values ('$id','$Cognitive','$Affective','$Behavioural','$co1s','$co1m','$co2s','$co2m','$co3s','$co3m','$co4s','$co4m','$co5s','$co5m','$co6s','$co6m')");

            if ($insert) 
            {
                // echo "Data Inserted";
                $status = "Data Inserted";
                // $pushid = "SELECT id FROM details WHERE Cognitive='$Cognitive',Affective='$Affective',Behavioural='$Behavioural',CO1Statements='$co1s',CO1Module='$co1m',CO2Statements='$co2s',CO2Module='$co2m',CO3Statements='$co3s',CO3Module='$co3m',CO4Statements='$co4s',CO4Module='$co4m',CO5Statements='$co5s',CO5Module='$co5m',CO6Statements='$co6s',CO6Module='$co6m', ORDER BY CO6Module DESC , LIMIT 1";
                header("Location:http://localhost/CollegeProject/Step2mapping.php?refid=<?=$id?>");

            } else 
            {
                // echo "Data Not Inserted";
                $status = "Data Not Inserted";                
                header("Location:http://localhost/CollegeProject/Step2.php?status=$status&$pemail");
            }
        } else 
        {
            // echo "No data";            
            $status = "Fill";
            header("Location:http://localhost/CollegeProject/Step2.php?status=$status&$pemail");
        }
    }
    ?>