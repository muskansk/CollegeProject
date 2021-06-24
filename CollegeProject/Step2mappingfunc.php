
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

    if (isset($_POST['submit'])) {
        $CO1PO1 = $_POST['CO1PO1'];
        $CO1PO2 = $_POST['CO1PO2'];
        $CO1PO3 = $_POST['CO1PO3'];
        $CO1PO4 = $_POST['CO1PO4'];
        $CO1PO5 = $_POST['CO1PO5'];
        $CO1PO6 = $_POST['CO1PO6'];
        $CO1PO7 = $_POST['CO1PO7'];
        $CO1PO8 = $_POST['CO1PO8'];
        $CO1PO9 = $_POST['CO1PO9'];
        $CO1PO10 = $_POST['CO1PO10'];
        $CO1PO11 = $_POST['CO1PO11'];
        $CO1PO12 = $_POST['CO1PO12'];

        $CO2PO1 = $_POST['CO2PO1'];
        $CO2PO2 = $_POST['CO2PO2'];
        $CO2PO3 = $_POST['CO2PO3'];
        $CO2PO4 = $_POST['CO2PO4'];
        $CO2PO5 = $_POST['CO2PO5'];
        $CO2PO6 = $_POST['CO2PO6'];
        $CO2PO7 = $_POST['CO2PO7'];
        $CO2PO8 = $_POST['CO2PO8'];
        $CO2PO9 = $_POST['CO2PO9'];
        $CO2PO10 = $_POST['CO2PO10'];
        $CO2PO11 = $_POST['CO2PO11'];
        $CO2PO12 = $_POST['CO2PO12'];

        $CO3PO1 = $_POST['CO3PO1'];
        $CO3PO2 = $_POST['CO3PO2'];
        $CO3PO3 = $_POST['CO3PO3'];
        $CO3PO4 = $_POST['CO3PO4'];
        $CO3PO5 = $_POST['CO3PO5'];
        $CO3PO6 = $_POST['CO3PO6'];
        $CO3PO7 = $_POST['CO3PO7'];
        $CO3PO8 = $_POST['CO3PO8'];
        $CO3PO9 = $_POST['CO3PO9'];
        $CO3PO10 = $_POST['CO3PO10'];
        $CO3PO11 = $_POST['CO3PO11'];
        $CO3PO12 = $_POST['CO3PO12'];

        $CO4PO1 = $_POST['CO4PO1'];
        $CO4PO2 = $_POST['CO4PO2'];
        $CO4PO3 = $_POST['CO4PO3'];
        $CO4PO4 = $_POST['CO4PO4'];
        $CO4PO5 = $_POST['CO4PO5'];
        $CO4PO6 = $_POST['CO4PO6'];
        $CO4PO7 = $_POST['CO4PO7'];
        $CO4PO8 = $_POST['CO4PO8'];
        $CO4PO9 = $_POST['CO4PO9'];
        $CO4PO10 = $_POST['CO4PO10'];
        $CO4PO11 = $_POST['CO4PO11'];
        $CO4PO12 = $_POST['CO4PO12'];

        $CO5PO1 = $_POST['CO5PO1'];
        $CO5PO2 = $_POST['CO5PO2'];
        $CO5PO3 = $_POST['CO5PO3'];
        $CO5PO4 = $_POST['CO5PO4'];
        $CO5PO5 = $_POST['CO5PO5'];
        $CO5PO6 = $_POST['CO5PO6'];
        $CO5PO7 = $_POST['CO5PO7'];
        $CO5PO8 = $_POST['CO5PO8'];
        $CO5PO9 = $_POST['CO5PO9'];
        $CO5PO10 = $_POST['CO5PO10'];
        $CO5PO11 = $_POST['CO5PO11'];
        $CO5PO12 = $_POST['CO5PO12'];

        $CO6PO1 = $_POST['CO6PO1'];
        $CO6PO2 = $_POST['CO6PO2'];
        $CO6PO3 = $_POST['CO6PO3'];
        $CO6PO4 = $_POST['CO6PO4'];
        $CO6PO5 = $_POST['CO6PO5'];
        $CO6PO6 = $_POST['CO6PO6'];
        $CO6PO7 = $_POST['CO6PO7'];
        $CO6PO8 = $_POST['CO6PO8'];
        $CO6PO9 = $_POST['CO6PO9'];
        $CO6PO10 = $_POST['CO6PO10'];
        $CO6PO11 = $_POST['CO6PO11'];
        $CO6PO12 = $_POST['CO6PO12'];

        $CO1PSO1 = $_POST['CO1PSO1'];
        $CO1PSO2 = $_POST['CO1PSO2'];
        $CO1PSO3 = $_POST['CO1PSO3'];
        $CO1PSO4 = $_POST['CO1PSO4'];

        $CO2PSO1 = $_POST['CO2PSO1'];
        $CO2PSO2 = $_POST['CO2PSO2'];
        $CO2PSO3 = $_POST['CO2PSO3'];
        $CO2PSO4 = $_POST['CO2PSO4'];

        $CO3PSO1 = $_POST['CO3PSO1'];
        $CO3PSO2 = $_POST['CO3PSO2'];
        $CO3PSO3 = $_POST['CO3PSO3'];
        $CO3PSO4 = $_POST['CO3PSO4'];

        $CO4PSO1 = $_POST['CO4PSO1'];
        $CO4PSO2 = $_POST['CO4PSO2'];
        $CO4PSO3 = $_POST['CO4PSO3'];
        $CO4PSO4 = $_POST['CO4PSO4'];

        $CO5PSO1 = $_POST['CO5PSO1'];
        $CO5PSO2 = $_POST['CO5PSO2'];
        $CO5PSO3 = $_POST['CO5PSO3'];
        $CO5PSO4 = $_POST['CO5PSO4'];

        $CO6PSO1 = $_POST['CO6PSO1'];
        $CO6PSO2 = $_POST['CO6PSO2'];
        $CO6PSO3 = $_POST['CO6PSO3'];
        $CO6PSO4 = $_POST['CO6PSO4'];

        if (!empty($CO1PO1)) {

            $insert = mysqli_query($conn, "Insert into mapping (id,CO1PO1,CO1PO2,CO1PO3,CO1PO4,CO1PO5,CO1PO6,CO1PO7,CO1PO8,CO1PO9,CO1PO10,CO1PO11,CO1PO12,CO2PO1,CO2PO2,CO2PO3,CO2PO4,CO2PO5,CO2PO6,CO2PO7,CO2PO8,CO2PO9,CO2PO10,CO2PO11,CO2PO12,CO3PO1,CO3PO2,CO3PO3,CO3PO4,CO3PO5,CO3PO6,CO3PO7,CO3PO8,CO3PO9,CO3PO10,CO3PO11,CO3PO12,CO4PO1,CO4PO2,CO4PO3,CO4PO4,CO4PO5,CO4PO6,CO4PO7,CO4PO8,CO4PO9,CO4PO10,CO4PO11,CO4PO12,CO5PO1,CO5PO2,CO5PO3,CO5PO4,CO5PO5,CO5PO6,CO5PO7,CO5PO8,CO5PO9,CO5PO10,CO5PO11,CO5PO12,CO6PO1,CO6PO2,CO6PO3,CO6PO4,CO6PO5,CO6PO6,CO6PO7,CO6PO8,CO6PO9,CO6PO10,CO6PO11,CO6PO12,CO1PSO1,CO1PSO2,CO1PSO3,CO1PSO4,CO2PSO1,CO2PSO2,CO2PSO3,CO2PSO4,CO3PSO1,CO3PSO2,CO3PSO3,CO3PSO4,CO4PSO1,CO4PSO2,CO4PSO3,CO4PSO4,CO5PSO1,CO5PSO2,CO5PSO3,CO5PSO4,CO6PSO1,CO6PSO2,CO6PSO3,CO6PSO4)
      values ('$id','$CO1PO1','$CO1PO2','$CO1PO3','$CO1PO4','$CO1PO5','$CO1PO6','$CO1PO7','$CO1PO8','$CO1PO9','$CO1PO10','$CO1PO11','$CO1PO12','$CO2PO1','$CO2PO2','$CO2PO3','$CO2PO4','$CO2PO5','$CO2PO6','$CO2PO7','$CO2PO8','$CO2PO9','$CO2PO10','$CO2PO11','$CO2PO12','$CO3PO1','$CO3PO2','$CO3PO3','$CO3PO4','$CO3PO5','$CO3PO6','$CO3PO7','$CO3PO8','$CO3PO9','$CO3PO10','$CO3PO11','$CO3PO12','$CO4PO1','$CO4PO2','$CO4PO3','$CO4PO4','$CO4PO5','$CO4PO6','$CO4PO7','$CO4PO8','$CO4PO9','$CO4PO10','$CO4PO11','$CO4PO12','$CO5PO1','$CO5PO2','$CO5PO3','$CO1PO4','$CO5PO5','$CO5PO6','$CO5PO7','$CO5PO8','$CO5PO9','$CO5PO10','$CO5PO11','$CO5PO12','$CO6PO1','$CO6PO2','$CO6PO3','$CO6PO4','$CO6PO5','$CO6PO6','$CO6PO7','$CO6PO8','$CO6PO9','$CO6PO10','$CO6PO11','$CO6PO12','$CO1PSO1','$CO1PSO2','$CO1PSO3','$CO1PSO4','$CO2PSO1','$CO2PSO2','$CO2PSO3','$CO2PSO4','$CO3PSO1','$CO3PSO2','$CO3PSO3','$CO3PSO4','$CO4PSO1','$CO4PSO2','$CO4PSO3','$CO4PSO4','$CO5PSO1','$CO5PSO2','$CO5PSO3','$CO5PSO4','$CO6PSO1','$CO6PSO2','$CO6PSO3','$CO6PSO4')");
            if ($insert) {
                // echo "Data Inserted";
                $status = "Data Inserted";
                // $pushid = "SELECT id FROM details WHERE FirstName='$fname', MiddleName='$mname',LastName='$lname',PhoneNumber='$number',PersonalEmailID='$pemail',OfficeTelno='$officetel',OfficeEmailID='$officeemail',NameoftheCluster='$NOC',ClusterMentor='$CM',ClusterDepartment='$CDept',ClusterDesignation='$CDesignation',ClusterPhoneNumber='$CPno',AcademicClusterMentor'$ACM',Institute='$institute',ClusterMentorDepartment=,'$ACMdesignation',ClusterMentorDesignation='$ACMdept',ClusterMentorOfficeTelNo='$ACMOfficeno',ClusterMentorPhoneNumber='$ACMPhoneno',IndustrialClusterMentor'$companymentor',CompanyName='$companyname',CompanyDepartment='$companydept',CompanyDesignation='$companydesignation',CompanyOfficeAddress='$companyadd',CompanyOfficeTelNo='$companyofficeno',CompanyPhoneNumber'$companypno', ORDER BY CompanyPhoneNumber DESC , LIMIT 1";
                header("Location:http://localhost/CollegeProject/Step3.php?refid=<?=$id?>");
            } else {
                // echo "Data Not Inserted";
                $status = "Data Not Inserted";
                header("Location:http://localhost/CollegeProject/Step2.php?status=$status&$pemail");
            }
        } else {
            // echo "No data";
            $status = "Fill";
            header("Location:http://localhost/CollegeProject/Step2.php?status=$status&$pemail");
        }
    }
    ?>