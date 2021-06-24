
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
        $web1 = $_POST['web1'];
        $m1 = $_POST['m1'];

        $web2 = $_POST['web2'];
        $m2 = $_POST['m2'];

        $web3 = $_POST['web3'];
        $m3 = $_POST['m3'];

        $web4 = $_POST['web4'];
        $m4 = $_POST['m4'];

        $web5 = $_POST['web5'];
        $m5 = $_POST['m5'];

        $web6 = $_POST['web6'];
        $m6 = $_POST['m6'];

        $web7 = $_POST['web7'];
        $m7 = $_POST['m7'];

        $web8 = $_POST['web8'];
        $m8 = $_POST['m8'];

        $l1 = $_POST['l1'];
        $co1 = $_POST['co1'];
        $d1 = $_POST['d1'];
        $cer1 = $_POST['cer1'];

        $l2 = $_POST['l2'];
        $co2 = $_POST['co2'];
        $d2 = $_POST['d2'];
        $cer2 = $_POST['cer2'];

        $l3 = $_POST['l3'];
        $co3 = $_POST['co3'];
        $d3 = $_POST['d3'];
        $cer3 = $_POST['cer3'];

        $l4 = $_POST['l4'];
        $co4 = $_POST['co4'];
        $d4 = $_POST['d4'];
        $cer4 = $_POST['cer4'];

        $n1 = $_POST['n1'];
        $p1 = $_POST['p1'];
        $cd1 = $_POST['cd1'];
        $c1 = $_POST['c1'];

        $n2 = $_POST['n2'];
        $p2 = $_POST['p2'];
        $cd2 = $_POST['cd2'];
        $c2 = $_POST['c2'];



        if (!empty($web1)) {

            $insert = mysqli_query($conn, "Insert into courses (links1,module1,links2,module2,links3,module3,links4,module4,links5,module5,links6,module6,links7,module7,links8,module8,MOOCLink1,MOOCconductedby1,MOOCduration1,MOOCcertificate1,MOOCLink2,MOOCconductedby2,MOOCduration2,MOOCcertificate2,MOOCLink3,MOOCconductedby3,MOOCduration3,MOOCcertificate3,MOOCLink4,MOOCconductedby4,MOOCduration4,MOOCcertificate4,VACname1,VACconductedby1,VACduration1,VACcertificate1,VACname2,VACconductedby2,VACduration2,VACcertificate2)
      values ('$web1','$m1','$web2','$m2','$web3','$m3','$web4','$m4','$web5','$m5','$web6','$m6','$web7','$m7','$web8','$m8','$l1','$co1','$d1','$cer1','$l2','$co2','$d2','$cer2','$l3','$co3','$d3','$cer3','$l4','$co4','$d4','$cer4','$n1','$p1','$cd1','$c1','$n2','$p2','$cd2','$c2')");

    //   VACname1,VACconductedby1,VACduration1,VACcertificate1,VACname2,VACconductedby2,VACduration2,VACcertificate2
    //  '$n1','$p1','$cd1','$c1','$n2','$p2','$cd2','$c2'

            
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
            // $status = "Fill";
            // header("Location:http://localhost/CollegeProject/Step2.php?status=$status&$pemail");
        }
    }
    ?>