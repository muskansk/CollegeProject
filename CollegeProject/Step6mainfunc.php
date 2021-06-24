
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

    // $pushid = "SELECT id FROM details WHERE FirstName='$fname', MiddleName='$mname',LastName='$lname',PhoneNumber='$number',PersonalEmailID='$pemail',OfficeTelno='$officetel',OfficeEmailID='$officeemail',NameoftheCluster='$NOC',ClusterMentor='$CM',ClusterDepartment='$CDept',ClusterDesignation='$CDesignation',ClusterPhoneNumber='$CPno',AcademicClusterMentor'$ACM',Institute='$institute',ClusterMentorDepartment=,'$ACMdesignation',ClusterMentorDesignation='$ACMdept',ClusterMentorOfficeTelNo='$ACMOfficeno',ClusterMentorPhoneNumber='$ACMPhoneno',IndustrialClusterMentor'$companymentor',CompanyName='$companyname',CompanyDepartment='$companydept',CompanyDesignation='$companydesignation',CompanyOfficeAddress='$companyadd',CompanyOfficeTelNo='$companyofficeno',CompanyPhoneNumber'$companypno', ORDER BY CompanyPhoneNumber DESC , LIMIT 1";
    // $join = "SELECT project FROM details INNER JOIN courseobjective
    // ON ID = d_id  ";

    if (isset($_POST['submit'])) {
        $cy1 = $_POST['cy1'];
        $cy2 = $_POST['cy2'];
        $cy3 = $_POST['cy3'];
        $cy4 = $_POST['cy4'];

        $topic1 = $_POST['topic1'];
        $result1 = $_POST['result1'];
        $topic2 = $_POST['topic2'];
        $result2 = $_POST['result2'];
        $topic3 = $_POST['topic3'];
        $result3 = $_POST['result3'];


        $text1 = $_POST['text1'];
        $author1 = $_POST['author1'];
        $publisher1 = $_POST['publisher1'];
        $edition1 = $_POST['edition1'];
        $mod1 = $_POST['mod1'];

        $text2 = $_POST['text2'];
        $author2 = $_POST['author2'];
        $publisher2 = $_POST['publisher2'];
        $edition2 = $_POST['edition2'];
        $mod2 = $_POST['mod2'];

        $text3 = $_POST['text3'];
        $author3 = $_POST['author3'];
        $publisher3 = $_POST['publisher3'];
        $edition3 = $_POST['edition3'];
        $mod3 = $_POST['mod3'];

        $text4 = $_POST['text4'];
        $author4 = $_POST['author4'];
        $publisher4 = $_POST['publisher4'];
        $edition4 = $_POST['edition4'];
        $mod4 = $_POST['mod4'];

        $text5 = $_POST['text5'];
        $author5 = $_POST['author5'];
        $publisher5 = $_POST['publisher5'];
        $edition5 = $_POST['edition5'];
        $mod5 = $_POST['mod5'];

        $text6 = $_POST['text6'];
        $author6 = $_POST['author6'];
        $publisher6 = $_POST['publisher6'];
        $edition6 = $_POST['edition6'];
        $mod6 = $_POST['mod6'];

        $text7 = $_POST['text7'];
        $author7 = $_POST['author7'];
        $publisher7 = $_POST['publisher7'];
        $edition7 = $_POST['edition7'];
        $mod7 = $_POST['mod7'];

        $text8 = $_POST['text8'];
        $author8 = $_POST['author8'];
        $publisher8 = $_POST['publisher8'];
        $edition8 = $_POST['edition8'];
        $mod8 = $_POST['mod8'];


        $Rtext1 = $_POST['Rtext1'];
        $Rauthor1 = $_POST['Rauthor1'];
        $Rpublisher1 = $_POST['Rpublisher1'];
        $Redition1 = $_POST['Redition1'];
        $Rmod1 = $_POST['Rmod1'];
        
        // $Rtext2 = $_POST['Rtext2'];
        // $Rauthor2 = $_POST['Rauthor2'];
        // $Rpublisher2 = $_POST['Rpublisher2'];
        // $Redition2 = $_POST['Redition2'];
        // $Rmod2 = $_POST['Rmod2'];

        // $Rtext3 = $_POST['Rtext3'];
        // $Rauthor3 = $_POST['Rauthor3'];
        // $Rpublisher3 = $_POST['Rpublisher3'];
        // $Redition3 = $_POST['Redition3'];
        // $Rmod3 = $_POST['Rmod3'];



        if (!empty($cy1)) {

            //   $insert = mysqli_query($conn, "Insert into analysis (Semester1,CourseName1,Topic1,Semester2,CourseName2,Topic2,Semester3,CourseName3,Topic3,RelevanceSem1,Name1,Printout1,RelevanceSem2,Name2,Printout2,RelevanceSem3,Name3,Printout3,application1,application2,application3,application4,CoursePassingApr20,CoursePassingApr19,CoursePassingApr18,CoursePassingApr17,MarksObtainedApr20,MarksObtainedApr19,MarksObtainedApr18,MarksObtainedApr17,AInitialsApr19,AResultApr19,BInitialsApr19,BResultApr19,CInitialsApr19,CResultApr19,AInitialsApr18,AResultApr18,BInitialsApr18,BResultApr18,CInitialsApr18,CResultApr18,AInitialsApr17,AResultApr17,BInitialsApr17,BResultApr17,CInitialsApr17,CResultApr17,Module1,improve1,Module2,improve2,Module3,improve3)
            //   values ('$CO1','$course1','$topic1','$CO2','$S3','$S4','$CO3','$S5','$S6','$sem1','$name1','$check','$sem2','$name2','$check','$sem3','$name3','$check','$app1','$app2','$app3','$app4','$apr20passing','$apr19passing','$apr18passing','$apr17passing','$apr20','$apr19','$apr18','$apr17','$April19A','$Apr19Ares','$April19B','$Apr19Bres','$April19C','$Apr19Cres','$April18A','$Apr18Ares','$April18B','$Apr18Bres','$April18C','$Apr18Cres','$April17A','$Apr17Ares','$April17B','$Apr17Bres','$April17C','$Apr17Cres','$module1','$improve1','$module2','$improve2','$module3','$improve3')");

            $insert = mysqli_query($conn, "Insert into reference (RecommendationsCY1,RecommendationsCY2,RecommendationsCY3,RecommendationsCY4,topic1,improvement1,topic2,improvement2,topic3,improvement3,Title1,Author1,Publisher1,Edition1,ModuleNo1,Title2,Author2,Publisher2,Edition2,ModuleNo2,Title3,Author3,Publisher3,Edition3,ModuleNo3,Title4,Author4,Publisher4,Edition4,ModuleNo4,Title5,Author5,Publisher5,Edition5,ModuleNo5,Title6,Author6,Publisher6,Edition6,ModuleNo6,Title7,Author7,Publisher7,Edition7,ModuleNo7,Title8,Author8,Publisher8,Edition8,ModuleNo8,RTitle1,RAuthor1,RPublisher1,REdition1,RModuleNo1)
                values ('$cy1','$cy2','$cy3','$cy4','$topic1','$result1','$topic2','$result2','$topic3','$result3','$text1','$author1','$publisher1','$edition1','$mod1','$text2','$author2','$publisher2','$edition2','$mod2','$text3','$author3','$publisher3','$edition3','$mod3','$text4','$author4','$publisher4','$edition4','$mod4','$text5','$author5','$publisher5','$edition5','$mod5','$text6','$author6','$publisher6','$edition6','$mod6','$text7','$author7','$publisher7','$edition7','$mod7','$text8','$author8','$publisher8','$edition8','$mod8','$Rtext1','$Rauthor1','$Rpublisher1','$Redition1','$Rmod1')");

                // ,'$Rtext2','$Rauthor2','$Rpublisher2','$Redition2','$Rmod2','$Rtext3','$Rauthor3','$Rpublisher3','$Redition3','$Rmod3'
                // ,RefTitle2,RAuthor2,RPublisher2,REdition2,RModuleNo2,RTitle3,RAuthor3,RPublisher3,REdition3,RModuleNo3
                // ,RTitle2,RAuthor2,RPublisher2,REdition2,RModuleNo2,RTitle3,RAuthor3,RPublisher3,REdition3,RModuleNo3
                // ,'$Rtext2','$Rauthor2','$Rpublisher2','$Redition2','$Rmod2','$Rtext3','$Rauthor3','$Rpublisher3','$Redition3','$Rmod3'



            if ($insert) {
                echo "Data Inserted";
                // $status = "Data Inserted";
                // $pushid = "SELECT id FROM details WHERE FirstName='$fname', MiddleName='$mname',LastName='$lname',PhoneNumber='$number',PersonalEmailID='$pemail',OfficeTelno='$officetel',OfficeEmailID='$officeemail',NameoftheCluster='$NOC',ClusterMentor='$CM',ClusterDepartment='$CDept',ClusterDesignation='$CDesignation',ClusterPhoneNumber='$CPno',AcademicClusterMentor'$ACM',Institute='$institute',ClusterMentorDepartment=,'$ACMdesignation',ClusterMentorDesignation='$ACMdept',ClusterMentorOfficeTelNo='$ACMOfficeno',ClusterMentorPhoneNumber='$ACMPhoneno',IndustrialClusterMentor'$companymentor',CompanyName='$companyname',CompanyDepartment='$companydept',CompanyDesignation='$companydesignation',CompanyOfficeAddress='$companyadd',CompanyOfficeTelNo='$companyofficeno',CompanyPhoneNumber'$companypno', ORDER BY CompanyPhoneNumber DESC , LIMIT 1";

                // header("Location:http://localhost/CollegeProject/Step6.php?refid=$pushid&$pemail");
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