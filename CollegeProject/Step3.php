<!DOCTYPE html>
<html>

<head>
  <title>Scheme</title>
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

  <script>
    $(document).ready(function() {
        $("#form1 input[type='checkbox']").prop('checked', this.checked);
    });
  </script>

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
  <form action="Step3mainfunc.php" method="POST">
    <div>

      <div>
        <h2 align="center"> Teaching and Examination Scheme (as specified by the University) for the Course </h2>
      </div>
      <div>
        <table align="center">
          <tr>
            <th>Categories </th>
            <th>Mathematics</th>
            <th>Basic Science & General Engineering</th>
            <th>Humanities & Soft skill</th>
            <th>Core Engg./Technology - Design & Analysis</th>
            <th>Multidisciplinary</th>
          </tr>
          <tr>
            <td>Select Suitable category</td>
            <td><input type="checkbox" name='check[]' value="Mathematics"></td>
            <td><input type="checkbox" name='check[]' value="Basic Science & General Engineering"></td>
            <td><input type="checkbox" name='check[]' value="Humanities & Soft skill"></td>
            <td><input type="checkbox" name='check[]' value="Core Engg./Technology - Design & Analysis"></td>
            <td><input type="checkbox" name='check[]' value="Multidisciplinary"></td>
          </tr>
        </table>
      </div>
      <br>
      <div>
        <table align="center">
          <tr>
            <th rowspan="2">Course Code</th>
            <th rowspan="2">Course Name</th>
            <th colspan="3">Teaching Scheme</th>
            <th colspan="3">Credits Assigned</th>
          </tr>
          <tr>
            <th>Theory</th>
            <th>Practical</th>
            <th>Tutotial</th>
            <th>TW/Practical</th>
            <th>Tutorial</th>
            <th>Total</th>
          </tr>
          <tr>
            <td><input type="text" name="coursecode"></td>
            <td><input type="text" name="coursename"></td>
            <td><input type="text" name="teachingtheory"></td>
            <td><input type="text" name="teachingpractical"></td>
            <td><input type="text" name="teachingtutorial"></td>
            <td><input type="text" name="creditpractical"></td>
            <td><input type="text" name="credittutorial"></td>
            <td><input type="text" name="credittotal"></td>
          </tr>
        </table>
      </div>
      <br> 

      <div>
        <table align="center">
          <tr>
            <th rowspan="2">Course Lab Code</th>
            <th rowspan="2">Course Name</th>
            <th colspan="4">Examination Scheme</th>
          </tr>
          <tr>
            <th>End Sem. Exam Marks</th>
            <th>IA</th>
            <th>Practical</th>
            <th>Total</th>
          </tr>
          <tr>
            <td><input type="text" name="labcode"></td>
            <td><input type="text" name="cnamee"></td>
            <td><input type="text" name="endsem"></td>
            <td><input type="text" name="ia"></td>
            <td><input type="text" name="prac"></td>
            <td><input type="text" name="total"></td>
          </tr>
        </table>
      </div>
      <br>
       <div>
        <h2 align="center">Faculty-wise Distribution of all Lecture-Practical-Tutorial hours for the Course</h2>
        <p align="left">Total Subject Hours Distribution</p>
      </div>

      <div>
        <table align="center">
          <tr>
            <th> </th>
            <th> Lecture <br>(Hrs.)</th>
            <th> Practical <br>(Hrs.) </th>
            <th> Tutorial<br>(Hrs.)</th>
          </tr>
          <tr>
            <th>Total Subject Hours <br></th>
            <td><input type="number" name="lechr"></td>
            <td><input type="number" name="prachr"></td>
            <td><input type="number" name="tutorialhr"></td>
          </tr>
        </table>
      </div>
      <br>

      <div>
        <p align="left">Faculty-wise Distribution of Total Teaching hours</p>
      </div>
      <div>
        <table align="center">
          <tr>
            <th rowspan="2"> Divisions </th>
            <th rowspan="2">Lecture<br>(Hrs.)</th>
            <th colspan="4">Practical<br>(Hrs.)</th>
            <th colspan="4">Tutorial<br>(Hrs.)</th>
          </tr>
          <tr>
            <th>Batch 1</th>
            <th>Batch 2</th>
            <th>Batch 3</th>
            <th>Batch 4</th>
            <th>Batch 1</th>
            <th>Batch 2</th>
            <th>Batch 3</th>
            <th>Batch 4</th>
          </tr>
          <tr>
            <td>A</td>
            <td><input type="number" name="Alechr" min="0"></td>
            <td><input type="number" name="Ab1" min="0"></td>
            <td><input type="number" name="Ab2" min="0"></td>
            <td><input type="number" name="Ab3" min="0"></td>
            <td><input type="number" name="Ab4" min="0"></td>
            <td><input type="number" name="Ab5" min="0"></td>
            <td><input type="number" name="Ab6" min="0"></td>
            <td><input type="number" name="Ab7" min="0"></td>
            <td><input type="number" name="Ab8" min="0"></td>
          </tr>
         <tr>
            <td>B</td>
            <td><input type="number" name="Blechr" min="0"></td>
            <td><input type="number" name="Bb1" min="0"></td>
            <td><input type="number" name="Bb2" min="0"></td>
            <td><input type="number" name="Bb3" min="0"></td>
            <td><input type="number" name="Bb4" min="0"></td>
            <td><input type="number" name="Bb5" min="0"></td>
            <td><input type="number" name="Bb6" min="0"></td>
            <td><input type="number" name="Bb7" min="0"></td>
            <td><input type="number" name="Bb8" min="0"></td>
          </tr>
         <tr>
            <td>C</td>
            <td><input type="number" name="Clechr" min="0"></td>
            <td><input type="number" name="Cb1" min="0"></td>
            <td><input type="number" name="Cb2" min="0"></td>
            <td><input type="number" name="Cb3" min="0"></td>
            <td><input type="number" name="Cb4" min="0"></td>
            <td><input type="number" name="Cb5" min="0"></td>
            <td><input type="number" name="Cb6" min="0"></td>
            <td><input type="number" name="Cb7" min="0"></td>
            <td><input type="number" name="Cb8" min="0"></td>
          </tr>
          <tr>
            <td>D</td>
            <td><input type="number" name="Dlechr" min="0"></td>
            <td><input type="number" name="Db1" min="0"></td>
            <td><input type="number" name="Db2" min="0"></td>
            <td><input type="number" name="Db3" min="0"></td>
            <td><input type="number" name="Db4" min="0"></td>
            <td><input type="number" name="Db5" min="0"></td>
            <td><input type="number" name="Db6" min="0"></td>
            <td><input type="number" name="Db7" min="0"></td>
            <td><input type="number" name="Db8" min="0"></td>
          </tr>
           <tr>
            <td>Total</td>
            <td><input type="text" name="lechr"></td>
            <td colspan="4"><textarea name="totalprac" cols="50" rows="2"></textarea></td>
            <td colspan="4"><textarea name="totaltut" cols="50" rows="2"></textarea></td>
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