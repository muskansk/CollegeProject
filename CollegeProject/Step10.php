<!DOCTYPE html>
<html>

<head>
  <title>Course Lesson Plan</title>
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
      width: 700px;
    }

    th {
      background-color: #4287f5;
      color: white;
    }

    th,
    td {
      width: 100px;
      text-align: center;
      border: 2px solid black;
      padding: 2px;
    }

    h2 {
      color: #4287f5;
    }
  </style>
</head>

<body align="center">
  <form action="Step10mainfunc.php" method="POST">
    <div>
      <div>
        <h2 align="left">Consolidated Course Lesson Plan</h2>
        <table id="mentor" align="center">
          <tr>
            <th> </th>
            <th> From (date/month/year)</th>
            <th> To (date/month/year)</th>
            <th> Total Numbers of Weeks</th>
          </tr>
          <tr>
            <th>Semester Duration</th>
            <td> <input type="date" name="from"></td>
            <td> <input type="date" name="to"></td>
            <td> <input type="number" name="total" min="0"></td>
          </tr>
        </table>
      </div>

      <br><br>
      <div>
        <table align="center">
          <tr>
            <th rowspan="2">Week</th>
            <th rowspan="2"> Lecture No. </th>
            <th rowspan="2"> Module No.</th>
            <th rowspan="2"> Lecture Topic / IA1 & IA2 / BSA planned to be covered</th>
            <th rowspan="2"> Completion of Actual date</th>
            <th rowspan="2">COs</th>
            <th colspan="2">Recommendation Prior Viewing / Reading</th>
          </tr>
          <tr>
            <td>Lecture No. (on LMS)</td>
            <td>Chapter Nos./ Page Nos./ Book/ Web Site</td>
          </tr>
          <tr>
            <td rowspan="2">1</td>
            <td><input type="number" name="lno1a" min="0"></td>
            <td><input type="number" name="mno1a" min="0"></td>
            <td><textarea name="total1a" rows="2" cols="20"></textarea></td>
            <td><input type="date" name="date1a"> </td>
            <td><textarea name="l1a" rows="2" cols="10"></textarea> </td>
            <td><input type="number" name="lms1a" min="0" size="4"></td>
            <td><textarea name="book1a" rows="2" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td><input type="number" name="lno1b" min="0"></td>
            <td><input type="number" name="mno1b" min="0"></td>
            <td><textarea name="total1b" rows="2" cols="20"></textarea></td>
            <td><input type="date" name="date1b"> </td>
            <td><textarea name="l1b" rows="2" cols="10"></textarea> </td>
            <td><input type="number" name="lms1b" min="0" size="4"></td>
            <td><textarea name="book1b" rows="2" cols="10"></textarea> </td>
          </tr>
        <!--   <tr>
            <td rowspan="2">2</td>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td rowspan="2">3</td>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td rowspan="2">4</td>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td rowspan="2">5</td>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td rowspan="2">6</td>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td rowspan="2">7</td>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td rowspan="2">8</td>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td rowspan="2">9</td>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td rowspan="2">10</td>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td rowspan="2">11</td>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td rowspan="2">12</td>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td rowspan="2">13</td>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td rowspan="2">14</td>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td rowspan="2">15</td>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td rowspan="2">16</td>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>
          <tr>
            <td><input type="number" name="lno" min="0"></td>
            <td><input type="number" name="mno" min="0"></td>
            <td><input type="number" name="total" min="0"></td>
            <td><input type="date" name="date"> </td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
            <td><input type="number" name="lms" min="0" size="4"></td>
            <td><textarea name="l1" rows="1" cols="10"></textarea> </td>
          </tr>-->
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