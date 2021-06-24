<!DOCTYPE html>
<html>

<head>
  <title>Syllabus</title>
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
  <form action="Step4mainfunc.php" method="POST">
    <div>
      <div>
        <h2 align="left">Office Hours</h2>
        <p align="left">(Faculty available in office in this duration for solving students query)</p>
      </div>
      <div>
        <table align="center">
          <tr>
            <th>Division</th>
            <th>Day</th>
            <th>Time<br>(at least 1 Hr./Division)</th>
            <th>Venue<br>(Office Room No.)</th>
            <th>Informed students</th>
          </tr>
          <tr>
            <td>A</td>
            <td><input type="text" name="dayA"></td>
            <td><input type="time" name="timeA" min="00:00" max="24:00"></td>
            <td><input type="text" name="venueA"></td>
            <td><input type="radio" name="selectA" value="yes">YES
              &nbsp;&nbsp;
              <input type="radio" name="selectA" value="no">NO
            </td>
          </tr>
          <tr>
            <td>B</td>
            <td><input type="text" name="dayB"></td>
            <td><input type="time" name="timeB" min="00:00" max="24:00"></td>
            <td><input type="text" name="venueB"></td>
            <td><input type="radio" name="selectB" value="yes">YES
              &nbsp;&nbsp;
              <input type="radio" name="selectB" value="no">NO
            </td>
          </tr>
          <tr>
            <td>C</td>
            <td><input type="text" name="dayC"></td>
            <td><input type="time" name="timeC" min="00:00" max="24:00"></td>
            <td><input type="text" name="venueC"></td>
            <td><input type="radio" name="selectC" value="yes">YES
              &nbsp;&nbsp;
              <input type="radio" name="selectC" value="no">NO
            </td>
          </tr>
        </table>
      </div>

      <br>

      <div>
        <h2 align="left">Syllabus </h2>
        <p align="left"> (Module-wise teaching hours and weightage in University question paper)</p>
      </div>

      <div>
        <table align="center">
          <tr>
            <th> Unit/Module No.</th>
            <th> Module Title and brief details</th>
            <th> Teaching Hrs. for each Module </th>
            <th>%weightage in University Question Paper</th>
          </tr>
          <tr>
            <td>1</td>
            <td><textarea name="module1" cols="30" rows="3"></textarea></td>
            <td><input type="number" min="0" name="teaching1"></td>
            <td><input type="number" min="0" name="weightage1"></td>
          </tr>
          <tr>
            <td>2</td>
            <td><textarea name="module2" cols="30" rows="3"></textarea></td>
            <td><input type="number" min="0" name="teaching2"></td>
            <td><input type="number" min="0" name="weightage2"></td>
          </tr>

          <tr>
            <td>3</td>
            <td><textarea name="module3" cols="30" rows="3"></textarea></td>
            <td><input type="number" min="0" name="teaching3"></td>
            <td><input type="number" min="0" name="weightage3"></td>
          </tr>

          <tr>
            <td>4</td>
            <td><textarea name="module4" cols="30" rows="3"></textarea></td>
            <td><input type="number" min="0" name="teaching4"></td>
            <td><input type="number" min="0" name="weightage4"></td>
          </tr>
          <tr>
            <td>5</td>
            <td><textarea name="module5" cols="30" rows="3"></textarea></td>
            <td><input type="number" min="0" name="teaching5"></td>
            <td><input type="number" min="0" name="weightage5"></td>
          </tr>

          <tr>
            <td>6</td>
            <td><textarea name="module6" cols="30" rows="3"></textarea></td>
            <td><input type="number" min="0" name="teaching6"></td>
            <td><input type="number" min="0" name="weightage6"></td>
          </tr>

         <tr>
            <td>7</td>
            <td><textarea name="module7" cols="30" rows="3"></textarea></td>
            <td><input type="number" min="0" name="teaching7"></td>
            <td><input type="number" min="0" name="weightage7"></td>
          </tr>
          <tr>
            <td>8</td>
            <td><textarea name="module8" cols="30" rows="3"></textarea></td>
            <td><input type="number" min="0" name="teaching8"></td>
            <td><input type="number" min="0" name="weightage8"></td>
          </tr>

          <tr>
            <td>9</td>
            <td><textarea name="module9" cols="30" rows="3"></textarea></td>
            <td><input type="number" min="0" name="teaching9"></td>
            <td><input type="number" min="0" name="weightage9"></td>
          </tr>

           <tr>
            <td>10</td>
            <td><textarea name="module10" cols="30" rows="3"></textarea></td>
            <td><input type="number" min="0" name="teaching10"></td>
            <td><input type="number" min="0" name="weightage10"></td>
          </tr>
          <tr>
            <td>11</td>
            <td><textarea name="module11" cols="30" rows="3"></textarea></td>
            <td><input type="number" min="0" name="teaching11"></td>
            <td><input type="number" min="0" name="weightage11"></td>
          </tr>

          <tr>
            <td>12</td>
            <td><textarea name="module12" cols="30" rows="3"></textarea></td>
            <td><input type="number" min="0" name="teaching12"></td>
            <td><input type="number" min="0" name="weightage12"></td>
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