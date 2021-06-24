
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
    $prac1 = $_POST['prac1'];
    $npt1 = $_POST['npt1'];
    $BSA1 = $_POST['BSA1'];
    $BSA2 = $_POST['BSA2'];
    $BSA3 = $_POST['BSA3'];
    $BSA4 = $_POST['BSA4'];
    $other1 = $_POST['other1'];
    $det1 = $_POST['det1'];

    $prac2 = $_POST['prac2'];
    $npt2 = $_POST['npt2'];
    $BSA2a = $_POST['BSA2a'];
    $BSA2b = $_POST['BSA2b'];
    $BSA2c = $_POST['BSA2c'];
    $BSA2d = $_POST['BSA2d'];
    $other2 = $_POST['other2'];
    $det2 = $_POST['det2'];

    $prac3 = $_POST['prac3'];
    $npt3 = $_POST['npt3'];
    $BSA3a = $_POST['BSA3a'];
    $BSA3b = $_POST['BSA3b'];
    $BSA3c = $_POST['BSA3c'];
    $BSA3d = $_POST['BSA3d'];
    $other3 = $_POST['other3'];
    $det3 = $_POST['det3'];

    $prac4 = $_POST['prac4'];
    $npt4 = $_POST['npt4'];
    $BSA4a = $_POST['BSA4a'];
    $BSA4b = $_POST['BSA4b'];
    $BSA4c = $_POST['BSA4c'];
    $BSA4d = $_POST['BSA4d'];
    $other4 = $_POST['other4'];
    $det4 = $_POST['det4'];

    $prac5 = $_POST['prac5'];
    $npt5 = $_POST['npt5'];
    $BSA5a = $_POST['BSA5a'];
    $BSA5b = $_POST['BSA5b'];
    $BSA5c = $_POST['BSA5c'];
    $BSA5d = $_POST['BSA5d'];
    $other5 = $_POST['other5'];
    $det5 = $_POST['det5'];

    $prac6 = $_POST['prac6'];
    $npt6 = $_POST['npt6'];
    $BSA6a = $_POST['BSA6a'];
    $BSA6b = $_POST['BSA6b'];
    $BSA6c = $_POST['BSA6c'];
    $BSA6d = $_POST['BSA6d'];
    $other6 = $_POST['other6'];
    $det6 = $_POST['det6'];

    $prac7 = $_POST['prac7'];
    $npt7 = $_POST['npt7'];
    $BSA7a = $_POST['BSA7a'];
    $BSA7b = $_POST['BSA7b'];
    $BSA7c = $_POST['BSA7c'];
    $BSA7d = $_POST['BSA7d'];
    $other7 = $_POST['other7'];
    $det7 = $_POST['det7'];

    $prac8 = $_POST['prac8'];
    $npt8 = $_POST['npt8'];
    $BSA8a = $_POST['BSA8a'];
    $BSA8b = $_POST['BSA8b'];
    $BSA8c = $_POST['BSA8c'];
    $BSA8d = $_POST['BSA8d'];
    $other8 = $_POST['other8'];
    $det8 = $_POST['det8'];

    $prac9 = $_POST['prac9'];
    $npt9 = $_POST['npt9'];
    $BSA9a = $_POST['BSA9a'];
    $BSA9b = $_POST['BSA9b'];
    $BSA9c = $_POST['BSA9c'];
    $BSA9d = $_POST['BSA9d'];
    $other9 = $_POST['other9'];
    $det9 = $_POST['det9'];

    $prac10 = $_POST['prac10'];
    $npt10 = $_POST['npt10'];
    $BSA10a = $_POST['BSA10a'];
    $BSA10b = $_POST['BSA10b'];
    $BSA10c = $_POST['BSA10c'];
    $BSA10d = $_POST['BSA10d'];
    $other10 = $_POST['other10'];
    $det10 = $_POST['det10'];


    if (!empty($prac1)) {

      $insert = mysqli_query($conn, "Insert into activity (id,Tutorial1,NPTEL1,BSA1,BSA2,BSA3,BSA4,otheractivity1,Details1,Tutorial2,NPTEL2,BSA2a,BSA2b,BSA2c,BSA2d,otheractivity2,Details2,Tutorial3,NPTEL3,BSA3a,BSA3b,BSA3c,BSA3d,otheractivity3,Details3,Tutorial4,NPTEL4,BSA4a,BSA4b,BSA4c,BSA4d,otheractivity4,Details4,Tutorial5,NPTEL5,BSA5a,BSA5b,BSA5c,BSA5d,otheractivity5,Details5,Tutorial6,NPTEL6,BSA6a,BSA6b,BSA6c,BSA6d,otheractivity6,Details6,Tutorial7,NPTEL7,BSA7a,BSA7b,BSA7c,BSA7d,otheractivity7,Details7,Tutorial8,NPTEL8,BSA8a,BSA8b,BSA8c,BSA8d,otheractivity8,Details8,Tutorial9,NPTEL9,BSA9a,BSA9b,BSA9c,BSA9d,otheractivity9,Details9,Tutorial10,NPTEL10,BSA10a,BSA10b,BSA10c,BSA10d,otheractivity10,Details10)
      values ('$id','$prac1','$npt1','$BSA1','$BSA2','$BSA3','$BSA4','$other1','$det1','$prac2','$npt2','$BSA2a','$BSA2b','$BSA2c','$BSA2d','$other2','$det2','$prac3','$npt3','$BSA3a','$BSA3b','$BSA3c','$BSA3d','$other3','$det3','$prac4','$npt4','$BSA4a','$BSA4b','$BSA4c','$BSA4d','$other4','$det4','$prac5','$npt5','$BSA5a','$BSA5b','$BSA5c','$BSA5d','$other5','$det5','$prac6','$npt6','$BSA6a','$BSA6b','$BSA6c','$BSA6d','$other6','$det6','$prac7','$npt7','$BSA7a','$BSA7b','$BSA7c','$BSA7d','$other7','$det7','$prac8','$npt8','$BSA8a','$BSA8b','$BSA8c','$BSA8d','$other8','$det8','$prac9','$npt9','$BSA9a','$BSA9b','$BSA9c','$BSA9d','$other9','$det9','$prac10','$npt10','$BSA10a','$BSA10b','$BSA10c','$BSA10d','$other10','$det10')");

      // $insert = mysqli_query($conn, "Insert into clustermentordetail (ExtCMIndustryname,ExtCMIndustrydesg,ExtCMIndustrycompany,ExtCMIndustrycontact,ExtCMIndustryemail)
      // values ('$metcm','$metim','$metea','$discussed')");


      // '$prac6','$npt6','$BSA6a','$BSA6b','$BSA6c','$BSA6d','$other6','$det6','$prac7','$npt7','$BSA7a','$BSA7b','$BSA7c','$BSA7d','$other7','$det7','$prac8','$npt8','$BSA8a','$BSA8b','$BSA8c','$BSA8d','$other8','$det8','$prac9','$npt9','$BSA9a','$BSA9b','$BSA9c','$BSA9d','$other9','$det9','$prac10','$npt10','$BSA10a','$BSA10b','$BSA10c','$BSA10d','$other10','$det10'
      

      if ($insert) {
        // echo "Data Inserted";
        $status = "Data Inserted";
        header("Location:http://localhost/CollegeProject/Step8.php?refid=<?=$id?>");

      } else {
        // echo "Data Not Inserted";
        $status = "Data Not Inserted";
        header("Location:http://localhost/CollegeProject/Step2.php?status=$status&$pemail");
      }
    } else {
    //   echo "No data";
      $status = "Fill";
      header("Location:http://localhost/CollegeProject/Step2.php?status=$status&$pemail");
    }
  }
  ?>