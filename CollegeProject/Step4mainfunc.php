
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
        $dayA = $_POST['dayA'];
        $timeA = $_POST['timeA'];
        $venueA = $_POST['venueA'];
        $selectA = $_POST['selectA'];

        $dayB = $_POST['dayB'];
        $timeB = $_POST['timeB'];
        $venueB = $_POST['venueB'];
        $selectB = $_POST['selectB'];

        $dayC = $_POST['dayC'];
        $timeC = $_POST['timeC'];
        $venueC = $_POST['venueC'];
        $selectC = $_POST['selectC'];

        $module1 = $_POST['module1'];
        $teaching1 = $_POST['teaching1'];
        $weightage1 = $_POST['weightage1'];

        $module2 = $_POST['module2'];
        $teaching2 = $_POST['teaching2'];
        $weightage2 = $_POST['weightage2'];

        $module3 = $_POST['module3'];
        $teaching3 = $_POST['teaching3'];
        $weightage3 = $_POST['weightage3'];

        $module4 = $_POST['module4'];
        $teaching4 = $_POST['teaching4'];
        $weightage4 = $_POST['weightage4'];

        $module5 = $_POST['module5'];
        $teaching5 = $_POST['teaching5'];
        $weightage5 = $_POST['weightage5'];

        $module6 = $_POST['module6'];
        $teaching6 = $_POST['teaching6'];
        $weightage6 = $_POST['weightage6'];

        $module7 = $_POST['module7'];
        $teaching7 = $_POST['teaching7'];
        $weightage7 = $_POST['weightage7'];

        $module8 = $_POST['module8'];
        $teaching8 = $_POST['teaching8'];
        $weightage8 = $_POST['weightage8'];

        $module9 = $_POST['module9'];
        $teaching9 = $_POST['teaching9'];
        $weightage9 = $_POST['weightage9'];
        
        $module10 = $_POST['module10'];
        $teaching10 = $_POST['teaching10'];
        $weightage10 = $_POST['weightage10'];

        $module11 = $_POST['module11'];
        $teaching11 = $_POST['teaching11'];
        $weightage11 = $_POST['weightage11'];

        $module12 = $_POST['module12'];
        $teaching12 = $_POST['teaching12'];
        $weightage12 = $_POST['weightage12'];


        if (!empty($dayA)) {

              $insert = mysqli_query($conn, "Insert into syllabus (id,dayA,timeA,venueA,informedornotA,dayB,timeB,venueB,informedornotB,dayC,timeC,venueC,informedornotC,module1,TeachingHrs1,weightageUniversityQP1,module2,TeachingHrs2,weightageUniversityQP2,module3,TeachingHrs3,weightageUniversityQP3,module4,TeachingHrs4,weightageUniversityQP4,module5,TeachingHrs5,weightageUniversityQP5,module6,TeachingHrs6,weightageUniversityQP6,module7,TeachingHrs7,weightageUniversityQP7,module8,TeachingHrs8,weightageUniversityQP8,module9,TeachingHrs9,weightageUniversityQP9,module10,TeachingHrs10,weightageUniversityQP10,module11,TeachingHrs11,weightageUniversityQP11,module12,TeachingHrs12,weightageUniversityQP12)
              values ('$id','$dayA','$timeA','$venueA','$selectA','$dayB','$timeB','$venueB','$selectB','$dayC','$timeC','$venueC','$selectC','$module1','$teaching1','$weightage1','$module2','$teaching2','$weightage2','$module3','$teaching3','$weightage3','$module4','$teaching4','$weightage4','$module5','$teaching5','$weightage5','$module6','$teaching6','$weightage6','$module7','$teaching7','$weightage7','$module8','$teaching8','$weightage8','$module9','$teaching9','$weightage9','$module10','$teaching10','$weightage10','$module11','$teaching11','$weightage11','$module12','$teaching12','$weightage12')");
            
            
              if ($insert) {
                // echo "Data Inserted";
                $status = "Data Inserted";
                header("Location:http://localhost/CollegeProject/Step5.php?refid=<?=$id?>");
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