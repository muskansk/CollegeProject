
  <?php
    session_start();
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
        $id = $_POST['id'];
        $_SESSION['id']=$id;
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $number = $_POST['Pno'];
        $pemail = $_POST['Pemail'];
        $officetel = $_POST['Officetel'];
        $officeemail = $_POST['Officeemail'];
        $NOC = $_POST['NOC'];
        $CM = $_POST['CM'];
        $CDept = $_POST['CDept'];
        $CDesignation = $_POST['CDesignation'];
        $CPno = $_POST['CPno'];
        $ACM = $_POST['ACM'];
        $institute = $_POST['institute'];
        $ACMdept = $_POST['ACMdept'];
        $ACMdesignation = $_POST['ACMdesignation'];
        $ACMOfficeno = $_POST['ACMOfficeno'];
        $ACMPhoneno = $_POST['ACMPhoneno'];
        $companymentor = $_POST['companymentor'];
        $companyname = $_POST['companyname'];
        $companydept = $_POST['companydept'];
        $companydesignation = $_POST['companydesignation'];
        $companyadd = $_POST['companyadd'];
        $companyofficeno = $_POST['companyofficeno'];
        $companypno = $_POST['companypno'];
        


        if (!empty($fname) && !empty($mname) && !empty($lname) ) {

      $insert = mysqli_query($conn, "Insert into details (ID,FirstName,MiddleName,LastName,PhoneNumber,PersonalEmailID,OfficeTelno,OfficeEmailID,NameoftheCluster,ClusterMentor,ClusterDepartment,ClusterDesignation,ClusterPhoneNumber,AcademicClusterMentor,Institute,ClusterMentorDepartment,ClusterMentorDesignation,ClusterMentorOfficeTelNo,ClusterMentorPhoneNumber,IndustrialClusterMentor,CompanyName,CompanyDepartment,CompanyDesignation,CompanyOfficeAddress,CompanyOfficeTelNo,CompanyPhoneNumber)
      values ('$id','$fname','$mname','$lname','$number','$pemail','$officetel','$officeemail','$NOC','$CM','$CDept','$CDesignation','$CPno','$ACM','$institute','$ACMdesignation','$ACMdept','$ACMOfficeno','$ACMPhoneno','$companymentor','$companyname','$companydept','$companydesignation','$companyadd','$companyofficeno','$companypno')");

    // $insert = mysqli_query($conn, "Insert into details (FirstName,MiddleName,LastName)
    //   values ('$fname','$mname','$lname')");
            if ($insert) {
                // echo "Data Inserted";
                $status = "Data Inserted";
                // $pushid = "SELECT id FROM details WHERE FirstName='$fname', MiddleName='$mname',LastName='$lname',PhoneNumber='$number',PersonalEmailID='$pemail',OfficeTelno='$officetel',OfficeEmailID='$officeemail',NameoftheCluster='$NOC',ClusterMentor='$CM',ClusterDepartment='$CDept',ClusterDesignation='$CDesignation',ClusterPhoneNumber='$CPno',AcademicClusterMentor'$ACM',Institute='$institute',ClusterMentorDepartment=,'$ACMdesignation',ClusterMentorDesignation='$ACMdept',ClusterMentorOfficeTelNo='$ACMOfficeno',ClusterMentorPhoneNumber='$ACMPhoneno',IndustrialClusterMentor'$companymentor',CompanyName='$companyname',CompanyDepartment='$companydept',CompanyDesignation='$companydesignation',CompanyOfficeAddress='$companyadd',CompanyOfficeTelNo='$companyofficeno',CompanyPhoneNumber'$companypno', ORDER BY CompanyPhoneNumber DESC , LIMIT 1";
                
                header("Location:http://localhost/CollegeProject/Step2.php?refid=<?=$id?>");
              

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