<!DOCTYPE html>
<html>

<head>
    <title>Activity</title>
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
    <form action="Step9amainfunc.php" method="POST">
        <div>
            <div>
                <table align="center">
                    <tr>
                        <th rowspan="3">Module No.</th>
                        <th colspan="2">Tick for Practical - ✔</th>
                        <th rowspan="2" colspan="4">Write BSA Activity Numbers (1-16) from BSA table in the four columns given below
                        </th>
                        <th rowspan="3">Any other Activity</th>
                        <th rowspan="3">Details of the Recommendation by External Mentors (Topic, Concepts to be Highlighted)</th>
                    </tr>
                    <tr>
                        <th colspan="2">Expt./ Assignment/ Tutorials in two columns below</th>
                    </tr>
                    <tr>
                        <th>Practical Expt./ Assignment/ Tutorial</th>
                        <th> NPTEL & Other Video </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <!-- <td><textarea name="bsaa" rows="4" cols="10"></textarea></td>
                        <td><textarea name="bsab" rows="4" cols="10"></textarea></td>
                        <td><textarea name="bsac" rows="4" cols="10"></textarea></td>
                        <td><textarea name="bsad" rows="4" cols="10"></textarea></td> -->
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><input type="checkbox" name="prac1" value="yes"></td>
                        <td><input type="checkbox" name="npt1" value="yes"></td>
                        <td> <textarea name="BSA1" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA2" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA3" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA4" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="other1" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="det1" rows="3" cols="30"></textarea> </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input type="checkbox" name="prac2" value="yes"></td>
                        <td><input type="checkbox" name="npt2" value="yes"> </td>
                        <td> <textarea name="BSA2a" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA2b" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA2c" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA2d" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="other2" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="det2" rows="3" cols="30"></textarea> </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><input type="checkbox" name="prac3" value="yes"></td>
                        <td><input type="checkbox" name="npt3" value="yes"> </td>
                        <td> <textarea name="BSA3a" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA3b" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA3c" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA3d" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="other3" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="det3" rows="3" cols="30"></textarea> </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><input type="checkbox" name="prac4" value="yes"></td>
                        <td><input type="checkbox" name="npt4" value="yes"> </td>
                        <td> <textarea name="BSA4a" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA4b" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA4c" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA4d" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="other4" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="det4" rows="3" cols="30"></textarea> </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><input type="checkbox" name="prac5" value="yes"></td>
                        <td><input type="checkbox" name="npt5" value="yes"> </td>
                        <td> <textarea name="BSA5a" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA5b" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA5c" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA5d" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="other5" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="det5" rows="3" cols="30"></textarea> </td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td><input type="checkbox" name="prac6" value="yes"></td>
                        <td><input type="checkbox" name="npt6" value="yes"> </td>
                        <td> <textarea name="BSA6a" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA6b" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA6c" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA6d" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="other6" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="det6" rows="3" cols="30"></textarea> </td>
                    </tr> 
                    <tr>
                        <td>7</td>
                        <td><input type="checkbox" name="prac7" value="yes"></td>
                        <td><input type="checkbox" name="npt7" value="yes"> </td>
                        <td> <textarea name="BSA7a" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA7b" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA7c" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA7d" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="other7" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="det7" rows="3" cols="30"></textarea> </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><input type="checkbox" name="prac8" value="yes"></td>
                        <td><input type="checkbox" name="npt8" value="yes"> </td>
                        <td> <textarea name="BSA8a" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA8b" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA8c" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA8d" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="other8" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="det8" rows="3" cols="30"></textarea> </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td><input type="checkbox" name="prac9" value="yes"></td>
                        <td><input type="checkbox" name="npt9" value="yes"> </td>
                        <td> <textarea name="BSA9a" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA9b" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA9c" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA9d" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="other9" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="det9" rows="3" cols="30"></textarea> </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><input type="checkbox" name="prac10" value="yes"></td>
                        <td><input type="checkbox" name="npt10" value="yes"> </td>
                        <td> <textarea name="BSA10a" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA10b" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA10c" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="BSA10d" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="other10" rows="1" cols="10"></textarea> </td>
                        <td> <textarea name="det10" rows="3" cols="30"></textarea> </td>
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