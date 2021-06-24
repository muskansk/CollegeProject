<!DOCTYPE html>
<html>

<head>
  <title>Cluster Mentor's Details</title>
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
  <form action="Step9mainfunc.php" method="POST">
    <div>
      <div>
        <h2 align="left">VIT Cluster Mentor, External Industrail and Academic Cluster Mentor's Details</h2>
      </div>
      <div>
        <table align="center">
          <tr>
            <th>Name of the Cluster</th>
            <td><input type="text" name="fname"></td>
          </tr>
          <tr>
            <th rowspan="3">Institute Cluster Mentor</th>
            <td align="left"> Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" name="cmname">
            </td>
          </tr>
          <tr>
            <td> Designation : &nbsp;<input type="text" name="desname"></td>
          </tr>
          <tr>
            <td> Department : &nbsp;<input type="text" name="depname"> </td>
          </tr>
          <tr>
            <th rowspan="5">External Cluster Mentor from Academic </th>
            <td align="left">
              Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" name="acname">
            </td>
          </tr>
          <tr>
            <td> Designation : &nbsp;
              <input type="text" name="extdes">
            </td>
          </tr>
          <tr>
            <td>Name of the Institute : &nbsp;
              <input type="text" name="insname">
            </td>
          </tr>
          <tr>
            <td>Contact No. : &nbsp;
              <input type="tel" id="phone" name="phone">
            </td>
          </tr>
          <tr>
            <td>E-mail Id : &nbsp;
              <input type="email" id="email" name="email">
            </td>
          </tr>

          <tr>
            <th rowspan="5">External Cluster Mentor from Industry</th>
            <td align="left"> 
            Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="indname">
            </td>
          </tr>
          <tr>
            <td> Designation : &nbsp;
            <input type="text" name="inddes">
            </td>
          </tr>
          <tr>
            <td>Name of the Company : &nbsp;
            <input type="text" name="indcom"> 
            </td>
          </tr>
          <tr>
            <td>Contact No.:&nbsp;
            <input type="tel" id="phone" name="indphone" >​
            </td>
          </tr>
          <tr>
            <td>E-mail Id : &nbsp; 
            <input type="email" id="email" name="indemail"> 
            </td>
          </tr>
        </table>
      </div>

      <div>
        <h2 align="left">Recommendation of Cluster Mentor, External Industrail and Academic Mentor</h2>
      </div>
      <div>
        <table align="center">
          <tr>
            <th>Meeting with</th>
            <th>Cluster Mentor</th>
            <th>Industry Mentor</th>
            <th>External Academic<br>with</th>
          </tr>
          <tr>
            <td>Meeting held on</td>
            <td><input type="text" name="metcm"></td>
            <td><input type="text" name="metim"></td>
            <td><input type="text" name="metea"></td>
          </tr>
          <tr>
            <td>Latest Technologies Related to this Course Discussed by External Cluster Mentor</td>
            <td colspan="3"> 
            <textarea name="discussed" rows="7" cols="75">
            </textarea></td>
          </tr>
        </table>
      </div> 
      <br><br>
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