
  <?php
    session_start();
    $id = $_SESSION['id'];
    $conn = mysqli_connect("localhost", "root", "", "project");
    if (mysqli_connect_error()) {
        echo "Failed to connect" . mysqli_connect_error();
    }
    // $query = "Select * from details";
    // $query1 = mysqli_query($conn, $query);
    // if ($query1) {
    //     echo "YES";
    // } else {
    //     echo "NO";
    // }


    if (isset($_POST['submit'])) {

        $value = implode(',', $_POST['check']);
        $coursecode = $_POST['coursecode'];
        $coursename = $_POST['coursename'];
        $teachingtheory = $_POST['teachingtheory'];
        $teachingpractical = $_POST['teachingpractical'];
        $teachingtutorial = $_POST['teachingtutorial'];
        $creditpractical = $_POST['creditpractical'];
        $credittutorial = $_POST['credittutorial'];
        $credittotal = $_POST['credittotal'];

        $labcode = $_POST['labcode'];
        $cnamee = $_POST['cnamee'];
        $endsem = $_POST['endsem'];
        $ia = $_POST['ia'];
        $prac = $_POST['prac'];
        $total = $_POST['total'];

        $lechr = $_POST['lechr'];
        $prachr = $_POST['prachr'];
        $tutorialhr = $_POST['tutorialhr'];

        $Alechr = $_POST['Alechr'];
        $Ab1 = $_POST['Ab1'];
        $Ab2 = $_POST['Ab2'];
        $Ab3 = $_POST['Ab3'];
        $Ab4 = $_POST['Ab4'];
        $Ab5 = $_POST['Ab5'];
        $Ab6 = $_POST['Ab6'];
        $Ab7 = $_POST['Ab7'];
        $Ab8 = $_POST['Ab8'];

        $Blechr = $_POST['Blechr'];
        $Bb1 = $_POST['Bb1'];
        $Bb2 = $_POST['Bb2'];
        $Bb3 = $_POST['Bb3'];
        $Bb4 = $_POST['Bb4'];
        $Bb5 = $_POST['Bb5'];
        $Bb6 = $_POST['Bb6'];
        $Bb7 = $_POST['Bb7'];
        $Bb8 = $_POST['Bb8'];

        $Clechr = $_POST['Clechr'];
        $Cb1 = $_POST['Cb1'];
        $Cb2 = $_POST['Cb2'];
        $Cb3 = $_POST['Cb3'];
        $Cb4 = $_POST['Cb4'];
        $Cb5 = $_POST['Cb5'];
        $Cb6 = $_POST['Cb6'];
        $Cb7 = $_POST['Cb7'];
        $Cb8 = $_POST['Cb8'];

        $Dlechr = $_POST['Dlechr'];
        $Db1 = $_POST['Db1'];
        $Db2 = $_POST['Db2'];
        $Db3 = $_POST['Db3'];
        $Db4 = $_POST['Db4'];
        $Db5 = $_POST['Db5'];
        $Db6 = $_POST['Db6'];
        $Db7 = $_POST['Db7'];
        $Db8 = $_POST['Db8'];

        $totalprac = $_POST['totalprac'];
        $totaltut = $_POST['totaltut'];


        if (!empty($value)) {
            $insert = mysqli_query($conn, "Insert into scheme (id,category,coursecode,coursename,teachingtheory,teachingpractical,teachingtutotial,creditpractical,credittutorial,credittotal,labcode,coursenames,Exammarks,ExamIA,Examprac,Examtotal,lechrs,prachrs,tutorialhrs,lecA,Apracbatch1,Apracbatch2,Apracbatch3,Apracbatch4,Atutbatch1,Atutbatch2,Atutbatch3,Atutbatch4,lecB,Bpracbatch1,Bpracbatch2,Bpracbatch3,Bpracbatch4,Btutbatch1,Btutbatch2,Btutbatch3,Btutbatch4,lecC,Cpracbatch1,Cpracbatch2,Cpracbatch3,Cpracbatch4,Ctutbatch1,Ctutbatch2,Ctutbatch3,Ctutbatch4,lecD,Dpracbatch1,Dpracbatch2,Dpracbatch3,Dpracbatch4,Dtutbatch1,Dtutbatch2,Dtutbatch3,Dtutbatch4,totalprac,totaltutorial)
                  values ('$id','$value','$coursecode','$coursename','$teachingtheory','$teachingpractical','$teachingtutorial','$creditpractical','$credittutorial','$credittotal','$labcode','$cnamee','$endsem','$ia','$prac','$total','$lechr','$prachr','$tutorialhr','$Alechr','$Ab1','$Ab2','$Ab3','$Ab4','$Ab5','$Ab6','$Ab7','$Ab8','$Blechr','$Bb1','$Bb2','$Bb3','$Bb4','$Bb5','$Bb6','$Bb7','$Bb8','$Clechr','$Cb1','$Cb2','$Cb3','$Cb4','$Cb5','$Cb6','$Cb7','$Cb8','$Dlechr','$Db1','$Db2','$Db3','$Db4','$Db5','$Db6','$Db7','$Db8','$totalprac','$totaltut')");

            if ($insert) {
                // echo "Data Inserted";
                $status = "Data Inserted";
                header("Location:http://localhost/CollegeProject/Step4.php?refid=<?=$id?>");
            } else {
                // echo "Data Not Inserted";
                $status = "Data Not Inserted";
                header("Location:http://localhost/CollegeProject/Step4.php?status=$status&$pemail");
            }
        } else {
            // echo "No data";
            $status = "Fill";
            header("Location:http://localhost/CollegeProject/Step4.php?status=$status&$pemail");
        }
    }
    ?>