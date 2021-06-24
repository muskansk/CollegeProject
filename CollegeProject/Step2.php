<!DOCTYPE html>
<html>

<head>
  <title>Course Objective</title>
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
$id = $_SESSION['id'];
// $status = $_GET['status'];
// echo $status;
?>


<body align="center">
  <form action="Step2mainfunc.php" method="POST">

    <div>
      <div>
        <h2>Course Objectives(write in detail-please follow NBA guideline in this regard)</h2>
        <table>
          <colgroup>
            <col span="2" style="background-color: white">
            <col span="2" style="background-color:  white">
          </colgroup>
          <tr>
            <td>Cognitive</td>
            <td>What do you want students to know?</td>
            <td><textarea id="Cognitive" name="Cognitive" rows="2" cols="40"></textarea></td>
          </tr>
          <tr>
            <td>Affective</td>
            <td>What do you want students to think/care about?</td>
            <td><textarea id="Affective" name="Affective" rows="2" cols="40"></textarea></td>
          </tr>
          <tr>
            <td>Behavioural</td>
            <td>What do you want students to be able to do?</td>
            <td><textarea id="Behavioural" name="Behavioural" rows="2" cols="40"></textarea></td>
          </tr>
        </table>
      </div>

      <div>
        <h2>Course Outcome(CO)Statements & Module-wise Mapping</h2>

        <table>
          <colgroup>
            <col span="2" style="background-color: white">
            <col span="2" style="background-color:   white">
          </colgroup>
          <tr>
            <th>CO No.</th>
            <th>Statements</th>
            <th>Related Modules</th>
          </tr>
          <tr>
            <td>CO1</td>
            <td><textarea id="co1s" name="co1s" rows="2" cols="40"></textarea></td>
            <td><textarea id="co1m" name="co1m" rows="2" cols="20"></textarea></td>
          </tr>

          <tr>
            <td>CO2</td>
            <td><textarea id="co2s" name="co2s" rows="2" cols="40"></textarea></td>
            <td><textarea id="co2m" name="co2m" rows="2" cols="20"></textarea></td>
          </tr>
          <tr>
            <td>CO3</td>
            <td><textarea id="co3s" name="co3s" rows="2" cols="40"></textarea></td>
            <td><textarea id="co3m" name="co3m" rows="2" cols="20"></textarea></td>
          </tr>
          <tr>
            <td>CO4</td>
            <td><textarea id="co4s" name="co4s" rows="2" cols="40"></textarea></td>
            <td><textarea id="co4m" name="co4m" rows="2" cols="20"></textarea></td>
          </tr>

          <tr>
            <td>CO5</td>
            <td><textarea id="co5s" name="co5s" rows="2" cols="40"></textarea></td>
            <td><textarea id="co5m" name="co5m" rows="2" cols="20"></textarea></td>
          </tr>
          <tr>
            <td>CO6</td>
            <td><textarea id="co6s" name="co6s" rows="2" cols="40"></textarea></td>
            <td><textarea id="co6m" name="co6m" rows="2" cols="20"></textarea></td>
          </tr>

        </table>
      </div>
    </div>
    </li>

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