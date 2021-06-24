
  <?php
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
        $from = $_POST['from'];
        $to = $_POST['to'];
        $total = $_POST['total'];
        
        $lno1a = $_POST['lno1a'];
        $mno1a = $_POST['mno1a'];
        $total1a = $_POST['total1a'];
        $date1a = $_POST['date1a'];
        $l1a = $_POST['l1a'];
        $lms1a = $_POST['lms1a'];
        $book1a = $_POST['book1a'];

        $lno1b = $_POST['lno1b'];
        $mno1b = $_POST['mno1b'];
        $total1b = $_POST['total1b'];
        $date1b = $_POST['date1b'];
        $l1b = $_POST['l1b'];
        $lms1b = $_POST['lms1b'];
        $book1b = $_POST['book1b'];



        // '$lno1a','$mno1a','$total1a','$date1a','$l1a','$lms1a','$tchp1a','$lno1b','$mno1b','$total1b','$date1b','$l1b','$lms1b','$tchp1b'

        // lec1a,mod1a,topic1a,completion1a,cos1a,lms1a,chp1a,lec1b,mod1b,topic1b,completion1b,cos1b,lms1b,chp1b
        if (!empty($from)) {

        
            $insert = mysqli_query($conn, "Insert into Lessonplan (semfrom,semto,semtotal,lec1a,mod1a,topic1a,completion1a,cos1a,lms1a,chp1a,lec1b,mod1b,topic1b,completion1b,cos1b,lms1b,chp1b)
            values ('$from','$to','$total','$lno1a','$mno1a','$total1a','$date1a','$l1a','$lms1a','$book1a','$lno1b','$mno1b','$total1b','$date1b','$l1b','$lms1b','$book1b')");


            // '$prac6','$npt6','$BSA6a','$BSA6b','$BSA6c','$BSA6d','$other6','$det6','$prac7','$npt7','$BSA7a','$BSA7b','$BSA7c','$BSA7d','$other7','$det7','$prac8','$npt8','$BSA8a','$BSA8b','$BSA8c','$BSA8d','$other8','$det8','$prac9','$npt9','$BSA9a','$BSA9b','$BSA9c','$BSA9d','$other9','$det9','$prac10','$npt10','$BSA10a','$BSA10b','$BSA10c','$BSA10d','$other10','$det10'


            if ($insert) {
                echo "Data Inserted";
                // $status = "Data Inserted";
                // header("Location:http://localhost/CollegeProject/Step8.php?refid=");

            } else {
                echo "Data Not Inserted";
                // $status = "Data Not Inserted";
                // header("Location:http://localhost/CollegeProject/Step2.php?status=$status&$pemail");
            }
        } else {
            echo "No data";
            //   $status = "Fill";
            //   header("Location:http://localhost/CollegeProject/Step2.php?status=$status&$pemail");
        }
    }
    ?>