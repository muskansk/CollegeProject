<!DOCTYPE html>
<html>

<head>
<title>Analysis</title>
<style>
    table {
        border-collapse: collapse;
        width: 80%;
    }

    th,
    td {
        border: 2px solid black;
        padding: 10px;
    }
</style>

<style type="text/css">
    body {
        margin: 40px;
    }
</style>

<script type="text/javascript">
    function getValue(data) {
        var myDiv = document.getElementById("row-1");
        myDiv.innerHTML = data;
    }
</script>
<style>
    label {
        display: block;
        font: 1rem 'Fira Sans', sans-serif;
    }

    input,
    label {
        margin: .4rem 0;
    }
</style>

<style>
    table {
        border-collapse: collapse;
        border-spacing: 0 15px;
    }

    th {
        background-color: #4287f5;
        color: white;
    }

    th,
    td {
        width: 150px;
        text-align: center;
        border: 2px solid black;
        padding: 5px;
    }

    h2 {
        color: #4287f5;
    }
</style>
</head>

<?php 
 session_start();
 $id= $_SESSION['id'];
// $status = $_GET['status'];
// echo $status;
?>


<body align="center">
    <form action="Step5mainfunc.php" method="POST">
        <div>
             <div>
                <h2>Prerequisites Course</h2>
            </div>
            <div>
                <table>
                    <colgroup>
                        <col span="2" style="background-color: white">
                        <col span="2" style="background-color:   white">
                    </colgroup>
                    <tr>
                        <th>No.</th>
                        <th>Semester</th>
                        <th>Name of the Course</th>
                        <th>Topic</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><input type="number" min="0" name="CO1"></td>
                        <td><textarea name="course1" rows="2" cols="40"></textarea></td>
                        <td><textarea name="topic1" rows="2" cols="20"></textarea></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input type="number" min="0" name="CO2"></td>
                        <td><textarea name="S3" rows="2" cols="40"></textarea></td>
                        <td><textarea name="S4" rows="2" cols="20"></textarea></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><input type="number" min="0" name="CO3"></td>
                        <td><textarea name="S5" rows="2" cols="40"></textarea></td>
                        <td><textarea name="S6" rows="2" cols="20"></textarea></td>
                    </tr>
                </table> 
            </div>


            <div>
                <h2>Relevance to Future Courses</h2>
            </div>
            <div>
                <table>
                    <colgroup>
                        <col span="2" style="background-color: white">
                        <col span="2" style="background-color:   white">
                    </colgroup>
                    <tr>
                        <th>No.</th>
                        <th>Semester</th>
                        <th>Name of the Course</th>
                        <th>Attach Knowledge map Printout and tick </th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><input type="number" min="0" name="sem1"></td>
                        <td><textarea name="name1" rows="2" cols="40"></textarea></td>
                        <td><input type="checkbox" name="check[]" value="yes"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input type="number" min="0" name="sem2"></td>
                        <td><textarea name="name2" rows="2" cols="40"></textarea></td>
                        <td><input type="checkbox" name="check1[]" value="yes"></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><input type="number" min="0" name="sem3"></td>
                        <td><textarea name="name3" rows="2" cols="40"></textarea></td>
                        <td><input type="checkbox" name="check2[]" value="yes"></td>
                    </tr>
                </table>
            </div> 


            <div>
                <h2>Real Life Application Mapping - Mention Application from Common Day to Day Life</h2>
            </div>
            <div>
                <table>
                    <colgroup>
                        <col span="2" style="background-color: white">
                        <col span="2" style="background-color:   white">
                    </colgroup>
                    <tr>
                        <th>No.</th>
                        <th>Real Life Application Mapping with the Course</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><textarea name="app1" rows="2" cols="90"></textarea></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><textarea name="app2" rows="2" cols="90"></textarea></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><textarea name="app3" rows="2" cols="90"></textarea></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><textarea name="app4" rows="2" cols="90"></textarea></td>
                    </tr>
                </table>
            </div>
            
            
            <div>
                <h2>Past Results-Division-wise and Topic wise Result based Analysis-Target</h2>
            </div>
            <div>
                <table>
                    <colgroup>
                        <col span="2" style="background-color: white">
                        <col span="2" style="background-color:   white">
                    </colgroup>
                    <tr>
                        <th></th>
                        <th>Target-Apr 2020</th>
                        <th>Apr 2019</th>
                        <th>Apr 2018</th>
                        <th>Apr 2017</th>
                    </tr>
                    <tr>
                        <td>Course Passing % - Average of 3 Divisions</td>  
                        <td><textarea name="apr20passing" rows="2" cols="30"></textarea></td>
                        <td><textarea name="apr19passing" rows="2" cols="30"></textarea></td>
                        <td><textarea name="apr18passing" rows="2" cols="30"></textarea></td>
                        <td><textarea name="apr17passing" rows="2" cols="30"></textarea></td>
                    </tr>
                   <tr>
                        <td>Marks Obtained by Course Topper (mark/100)</td>
                        <td><textarea name="apr20" rows="2" cols="30"></textarea></td>
                        <td><textarea name="apr19" rows="2" cols="30"></textarea></td>
                        <td><textarea name="apr18" rows="2" cols="30"></textarea></td>
                        <td><textarea name="apr17" rows="2" cols="30"></textarea></td>
                    </tr>
                </table>
            </div>
             
            <br></br>
            
             <div>
                <table>
                    <colgroup>
                        <col span="2" style="background-color: white">
                        <col span="2" style="background-color:   white">
                    </colgroup>
                    <tr>
                        <th rowspan="2">Year</th>
                        <th colspan="2">Division A</th>
                        <th colspan="2">Division B</th>
                        <th colspan="2">Division C</th>
                    </tr>
                    <tr>
                        <th>Initials of Teachers</th>
                        <th>% Result</th>
                        <th>Initials of Teachers</th>
                        <th>% Result</th>
                        <th>Initials of Teachers</th>
                        <th>% Result</th>
                    </tr>
                    <tr>
                        <td>Apr 2019</td>
                        <td><textarea name="April19A" rows="2" cols="20"></textarea></td>
                        <td><textarea name="Apr19Ares" rows="2" cols="20"></textarea></td>
                        <td><textarea name="April19B" rows="2" cols="20"></textarea></td>
                        <td><textarea name="Apr19Bres" rows="2" cols="20"></textarea></td>
                        <td><textarea name="April19C" rows="2" cols="20"></textarea></td>
                        <td><textarea name="Apr19Cres" rows="2" cols="20"></textarea></td>
                    </tr>
                   <tr>
                        <td>Apr 2018</td>
                        <td><textarea name="April18A" rows="2" cols="20"></textarea></td>
                        <td><textarea name="Apr18Ares" rows="2" cols="20"></textarea></td>
                        <td><textarea name="April18B" rows="2" cols="20"></textarea></td>
                        <td><textarea name="Apr18Bres" rows="2" cols="20"></textarea></td>
                        <td><textarea name="April18C" rows="2" cols="20"></textarea></td>
                        <td><textarea name="Apr18Cres" rows="2" cols="20"></textarea></td>
                    </tr>
                    <tr>
                        <td>Apr 2017</td>
                        <td><textarea name="April17A" rows="2" cols="20"></textarea></td>
                        <td><textarea name="Apr17Ares" rows="2" cols="20"></textarea></td>
                        <td><textarea name="April17B" rows="2" cols="20"></textarea></td>
                        <td><textarea name="Apr17Bres" rows="2" cols="20"></textarea></td>
                        <td><textarea name="April17C" rows="2" cols="20"></textarea></td>
                        <td><textarea name="Apr17Cres" rows="2" cols="20"></textarea></td>
                    </tr>
                </table>
            </div>

            <br></br>
            
            <div>
                <table>
                    <colgroup>
                        <col span="2" style="background-color: white">
                        <col span="2" style="background-color:   white">
                    </colgroup>
                    <tr>
                        <th>Topics which affect results negatively</th>
                        <th>Module Number</th>
                        <th>Recommendations to overcome these issues to improve the results in future</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><input type="number" min="0" name="module1"></td>
                        <td><textarea name="improve1" rows="2" cols="60"></textarea></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input type="number" min="0" name="module2"></td>
                        <td><textarea name="improve2" rows="2" cols="60"></textarea></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><input type="number" min="0" name="module3"></td>
                        <td><textarea name="improve3" rows="2" cols="60"></textarea></td>
                    </tr>
                </table>
            </div> 
            <div>
                <br><br>
                <button onclick="history.go(-1)">
                    Previous Page
                </button>
                <button type="reset" name="reset" align="center">Clear Form</button>
                <button type="submit" name="submit" align="center">Go to next Page</button>
            </div>
        </div>
    </form>
</body>

</html>