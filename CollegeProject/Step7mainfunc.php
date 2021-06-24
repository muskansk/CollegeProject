
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

    if (isset($_POST['submit'])) 
    {
        $tab1 = $_POST['tab1'];
        $aut1 = $_POST['aut1'];
        $pub1 = $_POST['pub1'];
        $edi1 = $_POST['edi1'];
        $unit1 = $_POST['unit1'];
        
        $tab2 = $_POST['tab2'];
        $aut2 = $_POST['aut2'];
        $pub2 = $_POST['pub2'];
        $edi2 = $_POST['edi2'];
        $unit2 = $_POST['unit2'];

        $tab3 = $_POST['tab3'];
        $aut3 = $_POST['aut3'];
        $pub3 = $_POST['pub3'];
        $edi3 = $_POST['edi3'];
        $unit3 = $_POST['unit3'];
        
        $tab4 = $_POST['tab4'];
        $aut4 = $_POST['aut4'];
        $pub4 = $_POST['pub4'];
        $edi4 = $_POST['edi4'];
        $unit4 = $_POST['unit4'];
        
        $tab5 = $_POST['tab5'];
        $aut5 = $_POST['aut5'];
        $pub5 = $_POST['pub5'];
        $edi5 = $_POST['edi5'];
        $unit5 = $_POST['unit5'];

        $tab6 = $_POST['tab6'];
        $aut6 = $_POST['aut6'];
        $pub6 = $_POST['pub6'];
        $edi6 = $_POST['edi6'];
        $unit6 = $_POST['unit6'];

        $jour1 = $_POST['jour1'];
        $mag1 = $_POST['mag1'];
        $module1 = $_POST['module1'];

        $jour2 = $_POST['jour2'];
        $mag2 = $_POST['mag2'];
        $module2 = $_POST['module2'];

        $jour3 = $_POST['jour3'];
        $mag3 = $_POST['mag3'];
        $module3 = $_POST['module3'];

        $jour4 = $_POST['jour4'];
        $mag4 = $_POST['mag4'];
        $module4 = $_POST['module4'];

        $jour5 = $_POST['jour5'];
        $mag5 = $_POST['mag5'];
        $module5 = $_POST['module5'];

        if (!empty($tab1)) {

    $insert = mysqli_query($conn, "Insert into ebooks (EBookTitle,EBookAuthor,EBookPublisher,EBookEdition,EBookUnitNo,EBookTitle2,EBookAuthor2,EBookPublisher2,EBookEdition2,EBookUnitNo2,EBookTitle3,EBookAuthor3,EBookPublisher3,EBookEdition3,EBookUnitNo3,EBookTitle4,EBookAuthor4,EBookPublisher4,EBookEdition4,EBookUnitNo4,EBookTitle5,EBookAuthor5,EBookPublisher5,EBookEdition5,EBookUnitNo5,EBookTitle6,EBookAuthor6,EBookPublisher6,EBookEdition6,EBookUnitNo6,LinkandnameofJournals1,LinkandnameofMagazines1,ModuleNo1,LinkandnameofJournals2,LinkandnameofMagazines2,ModuleNo2,LinkandnameofJournals3,LinkandnameofMagazines3,ModuleNo3,LinkandnameofJournals4,LinkandnameofMagazines4,ModuleNo4,LinkandnameofJournals5,LinkandnameofMagazines5,ModuleNo5)
      values ('$tab1','$aut1','$pub1','$edi1','$unit1','$tab2','$aut2','$pub2','$edi2','$unit2','$tab3','$aut3','$pub3','$edi3','$unit3','$tab4','$aut4','$pub4','$edi4','$unit4','$tab5','$aut5','$pub5','$edi5','$unit5','$tab6','$aut6','$pub6','$edi6','$unit6','$jour1','$mag1','$module1','$jour2','$mag2','$module2','$jour3','$mag3','$module3','$jour4','$mag4','$module4','$jour5','$mag5','$module5')");

    //   ,LinkandnameofJournals2,LinkandnameofMagazines2,ModuleNo2
    //   ,'$jour2','$mag2','$module2'


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
            // echo "No data";
            $status = "Fill";
            header("Location:http://localhost/CollegeProject/Step2.php?status=$status&$pemail");
        }
    }
    ?>