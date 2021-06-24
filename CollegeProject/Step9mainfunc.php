
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
    $fname = $_POST['fname'];
    $cmname = $_POST['cmname'];
    $desname = $_POST['desname'];
    $depname = $_POST['depname'];

    $acname = $_POST['acname'];
    $extdes = $_POST['extdes'];
    $insname = $_POST['insname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $indname = $_POST['indname'];
    $inddes = $_POST['inddes'];
    $indcom = $_POST['indcom'];
    $indphone = $_POST['indphone'];
    $indemail = $_POST['indemail'];

    $metcm = $_POST['metcm'];
    $metim = $_POST['metim'];
    $metea = $_POST['metea'];
    $discussed = $_POST['discussed'];

    $bsaa = $_POST['bsaa'];
    $bsab = $_POST['bsab'];
    $bsac = $_POST['bsac'];
    $bsad = $_POST['bsad'];


    if (!empty($fname)) {

      $insert = mysqli_query($conn, "Insert into clustermentordetail (id,nameofcluster,instituteCMname,instituteCMdesg,instituteCMdeprt,ExtCMAcademicname,ExtCMAcademicdesg,ExtCMAcademicinstitute,ExtCMAcademiccontact,ExtCMAcademicemail,ExtCMIndustryname,ExtCMIndustrydesg,ExtCMIndustrycompany,ExtCMIndustrycontact,ExtCMIndustryemail,MeetingCM,MeetingIM,MeetingExtAcademic,coursediscussed)
      values ('$id','$fname','$cmname','$desname','$depname','$acname','$extdes','$insname','$phone','$email','$indname','$inddes','$indcom','$indphone','$indemail','$metcm','$metim','$metea','$discussed')");

      if ($insert) {
        // echo "Data Inserted";
        $status = "Data Inserted";
        header("Location:http://localhost/CollegeProject/Step9a.php?refid=<?=$id?>");
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