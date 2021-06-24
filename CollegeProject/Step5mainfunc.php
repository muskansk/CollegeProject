
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

        $CO1 = $_POST['CO1'];
        $course1 = $_POST['course1'];
        $topic1 = $_POST['topic1'];

        $CO2 = $_POST['CO2'];
        $S3 = $_POST['S3'];
        $S4 = $_POST['S4'];

        $CO3 = $_POST['CO3'];
        $S5 = $_POST['S5'];
        $S6 = $_POST['S6'];


        $sem1 = $_POST['sem1'];
        $name1 = $_POST['name1'];
        $value = implode(',', $_POST['check']);
        // $value = $_POST['check'];

        $sem2 = $_POST['sem2'];
        $name2 = $_POST['name2'];
        $value1 = implode(',', $_POST['check1']);
        // $value1 = $_POST['check1'];

        $sem3 = $_POST['sem3'];
        $name3 = $_POST['name3'];
        $value2 = implode(',', $_POST['check2']);
        // $value2 = $_POST['check2'];


        $app1 = $_POST['app1'];
        $app2 = $_POST['app2'];
        $app3 = $_POST['app3'];
        $app4 = $_POST['app4'];


        $apr20passing = $_POST['apr20passing'];
        $apr19passing = $_POST['apr19passing'];
        $apr18passing = $_POST['apr18passing'];
        $apr17passing = $_POST['apr17passing'];

        $apr20 = $_POST['apr20'];
        $apr19 = $_POST['apr19'];
        $apr18 = $_POST['apr18'];
        $apr17 = $_POST['apr17'];


        $April19A = $_POST['April19A'];
        $Apr19Ares = $_POST['Apr19Ares'];
        $April19B = $_POST['April19B'];
        $Apr19Bres = $_POST['Apr19Bres'];
        $April19C = $_POST['April19C'];
        $Apr19Cres = $_POST['Apr19Cres'];

        $April18A = $_POST['April18A'];
        $Apr18Ares = $_POST['Apr18Ares'];
        $April18B = $_POST['April18B'];
        $Apr18Bres = $_POST['Apr18Bres'];
        $April18C = $_POST['April18C'];
        $Apr18Cres = $_POST['Apr18Cres'];

        $April17A = $_POST['April17A'];
        $Apr17Ares = $_POST['Apr17Ares'];
        $April17B = $_POST['April17B'];
        $Apr17Bres = $_POST['Apr17Bres'];
        $April17C = $_POST['April17C'];
        $Apr17Cres = $_POST['Apr17Cres'];


        $module1 = $_POST['module1'];
        $improve1 = $_POST['improve1'];
        $module2 = $_POST['module2'];
        $improve2 = $_POST['improve2'];
        $module3 = $_POST['module3'];
        $improve3 = $_POST['improve3'];


        if (!empty($CO1)) {

            // $insert = mysqli_query($conn, "Insert into analysis (id,Semester1,CourseName1,Topic1,Semester2,CourseName2,Topic2,Semester3,CourseName3,Topic3,RelevanceSem1,Name1,Printout1,RelevanceSem2,Name2,Printout2,RelevanceSem3,Name3,Printout3,application1,application2,application3,application4,CoursePassingApr20,CoursePassingApr19,CoursePassingApr18,CoursePassingApr17,MarksObtainedApr20,MarksObtainedApr19,MarksObtainedApr18,MarksObtainedApr17,AInitialsApr19,AResultApr19,BInitialsApr19,BResultApr19,CInitialsApr19,CResultApr19,AInitialsApr18,AResultApr18,BInitialsApr18,BResultApr18,CInitialsApr18,CResultApr18,AInitialsApr17,AResultApr17,BInitialsApr17,BResultApr17,CInitialsApr17,CResultApr17,Module1,improve1,Module2,improve2,Module3,improve3)
            //   values ('$id','$CO1','$course1','$topic1','$CO2','$S3','$S4','$CO3','$S5','$S6','$sem1','$name1','$value','$sem2','$name2','$value1','$sem3','$name3','$value2','$app1','$app2','$app3','$app4','$apr20passing','$apr19passing','$apr18passing','$apr17passing','$apr20','$apr19','$apr18','$apr17','$April19A','$Apr19Ares','$April19B','$Apr19Bres','$April19C','$Apr19Cres','$April18A','$Apr18Ares','$April18B','$Apr18Bres','$April18C','$Apr18Cres','$April17A','$Apr17Ares','$April17B','$Apr17Bres','$April17C','$Apr17Cres','$module1','$improve1','$module2','$improve2','$module3','$improve3')");
            
            
            
            $insert = mysqli_query($conn, "Insert into analysis (id,Semester1,CourseName1,Topic1,Semester2,CourseName2,Topic2,Semester3,CourseName3,Topic3,RelevanceSem1,Name1,Printout1,RelevanceSem2,Name2,Printout2,RelevanceSem3,Name3,Printout3,application1,application2,application3,application4,CoursePassingApr20,CoursePassingApr19,CoursePassingApr18,CoursePassingApr17,MarksObtainedApr20,MarksObtainedApr19,MarksObtainedApr18,MarksObtainedApr17,AInitialsApr19,AResultApr19,BInitialsApr19,BResultApr19,CInitialsApr19,CResultApr19,AInitialsApr18,AResultApr18,BInitialsApr18,BResultApr18,CInitialsApr18,CResultApr18,AInitialsApr17,AResultApr17,BInitialsApr17,BResultApr17,CInitialsApr17,CResultApr17,Module1,improve1,Module2,improve2,Module3,improve3)
              values ('$id','$CO1','$course1','$topic1','$CO2','$S3','$S4','$CO3','$S5','$S6','$sem1','$name1','$value','$sem2','$name2','$value1','$sem3','$name3','$value2','$app1','$app2','$app3','$app4','$apr20passing','$apr19passing','$apr18passing','$apr17passing','$apr20','$apr19','$apr18','$apr17','$April19A','$Apr19Ares','$April19B','$Apr19Bres','$April19C','$Apr19Cres','$April18A','$Apr18Ares','$April18B','$Apr18Bres','$April18C','$Apr18Cres','$April17A','$Apr17Ares','$April17B','$Apr17Bres','$April17C','$Apr17Cres','$module1','$improve1','$module2','$improve2','$module3','$improve3')");



            if ($insert) {
                echo "Data Inserted";
                // $status = "Data Inserted";
                // header("Location:http://localhost/CollegeProject/Step6.php?refid=");
            } else {
                echo "Data Not Inserted";
                // $status = "Data Not Inserted";
                // header("Location:http://localhost/CollegeProject/Step2.php?status=$status&$pemail");
            }
        } else {
            echo "No data";
            // $status = "Fill";
            // header("Location:http://localhost/CollegeProject/Step2.php?status=$status&$pemail");
        }
    }
    ?>