<!DOCTYPE html>
<html>

<head>
  <title>Reference</title>
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



<body align="center">
  <form action="Step6mainfunc.php" method="POST">
    <div>
      <div>
        <h2 align="left">Recommendations of Faculty who had conducted this Course Earlier</h2>
      </div>
      <div>
        <table id="Recommendations" align="center">
          <tr>
            <th>Year</th>
            <th>Recommendations (from earlier course dairies/personal interaction with faculty)</th>
          </tr>
          <tr>
            <td>CY-1</td>
            <td><textarea name="cy1" rows="2" cols="70" required></textarea> </td>
          </tr>
          <tr>
            <td>CY-2</td>
            <td><textarea name="cy2" rows="2" cols="70"></textarea> </td>
          </tr>
          <tr>
            <td>CY-3</td>
            <td><textarea name="cy3" rows="2" cols="70"></textarea> </td>
          </tr>
          <tr>
            <td>CY-4</td>
            <td><textarea name="cy4" rows="2" cols="70"></textarea> </td>
          </tr>
        </table>
      </div>

      <div>
        <h2 align="left">Recommendations from CLuster Mentor</h2>
        <p align="left"> (Based on analysis of earlier Mumbai University question papers)</p>
      </div>
      <div>
        <table align="center">
          <tr>
            <th> Topic </th>
            <th> Recommendations to faculty for improvement of results </th>
          </tr>
          <tr>
            <td> <textarea name="topic1" rows="2" cols="20"></textarea> </td>
            <td> <textarea name="result1" rows="2" cols="70"></textarea> </td>
          </tr>
          <tr>
            <td><textarea name="topic2" rows="2" cols="20"></textarea></td>
            <td><textarea name="result2" rows="2" cols="70"></textarea></td>
          </tr>
          <tr>
            <td><textarea name="topic3" rows="2" cols="20"></textarea> </td>
            <td><textarea name="result3" rows="2" cols="70"></textarea></td>
          </tr>
        </table>
      </div>

      <div>
        <h2 align="left">List of Text books (T-symbol for Text books) to be Referred by Students</h2>
      </div>
      <div>
        <table id="textbooks" align="center">
          <tr>
            <th> Sr. No.</th>
            <th> Text Book Titles </th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Edition</th>
            <th>Module Nos.</th>
          </tr>
          <tr>
            <td> 1 </td>
            <td> <textarea name="text1" rows="2" cols="25"></textarea></td>
            <td> <textarea name="author1" rows="2" cols="20"></textarea></td>
            <td> <textarea name="publisher1" rows="2" cols="20"></textarea></td>
            <td> <textarea name="edition1" rows="2" cols="10"></textarea></td>
            <!-- <td> <textarea name="mod1" rows="2" cols="10"></textarea></td> -->
            <td><input type="number" min="0" name="mod1"></td>
          </tr>
          <tr>
            <td> 2 </td>
            <td> <textarea name="text2" rows="2" cols="25"></textarea></td>
            <td> <textarea name="author2" rows="2" cols="20"></textarea></td>
            <td> <textarea name="publisher2" rows="2" cols="20"></textarea></td>
            <td> <textarea name="edition2" rows="2" cols="10"></textarea></td>
            <!-- <td> <textarea name="mod2" rows="2" cols="10"></textarea></td> -->
            <td><input type="number" min="0" name="mod2"></td>
          </tr>
          <tr>
            <td> 3 </td>
            <td> <textarea name="text3" rows="2" cols="25"></textarea></td>
            <td> <textarea name="author3" rows="2" cols="20"></textarea></td>
            <td> <textarea name="publisher3" rows="2" cols="20"></textarea></td>
            <td> <textarea name="edition3" rows="2" cols="10"></textarea></td>
            <!-- <td> <textarea name="mod3" rows="2" cols="10"></textarea></td> -->
            <td><input type="number" min="0" name="mod3"></td>
          </tr>
          <tr>
            <td> 4 </td>
            <td> <textarea name="text4" rows="2" cols="25"></textarea></td>
            <td> <textarea name="author4" rows="2" cols="20"></textarea></td>
            <td> <textarea name="publisher4" rows="2" cols="20"></textarea></td>
            <td> <textarea name="edition4" rows="2" cols="10"></textarea></td>
            <!-- <td> <textarea name="mod4" rows="2" cols="10"></textarea></td> -->
            <td><input type="number" min="0" name="mod4"></td>
          </tr>
          <tr>
            <td> 5 </td>
            <td> <textarea name="text5" rows="2" cols="25"></textarea></td>
            <td> <textarea name="author5" rows="2" cols="20"></textarea></td>
            <td> <textarea name="publisher5" rows="2" cols="20"></textarea></td>
            <td> <textarea name="edition5" rows="2" cols="10"></textarea></td>
            <!-- <td> <textarea name="mod5" rows="2" cols="10"></textarea></td> -->
            <td><input type="number" min="0" name="mod5"></td>
          </tr>
          <tr>
            <td> 6 </td>
            <td> <textarea name="text6" rows="2" cols="25"></textarea></td>
            <td> <textarea name="author6" rows="2" cols="20"></textarea></td>
            <td> <textarea name="publisher6" rows="2" cols="20"></textarea></td>
            <td> <textarea name="edition6" rows="2" cols="10"></textarea></td>
            <!-- <td> <textarea name="mod6" rows="2" cols="10"></textarea></td> -->
            <td><input type="number" min="0" name="mod6"></td>
          </tr>
             <tr>
            <td> 7 </td>
            <td> <textarea name="text7" rows="2" cols="25"></textarea></td>
            <td> <textarea name="author7" rows="2" cols="20"></textarea></td>
            <td> <textarea name="publisher7" rows="2" cols="20"></textarea></td>
            <td> <textarea name="edition7" rows="2" cols="10"></textarea></td>
            <!-- <td> <textarea name="mod7" rows="2" cols="10"></textarea></td> -->
            <td><input type="number" min="0" name="mod7"></td>
          </tr>
          <tr>
            <td> 8 </td>
            <td> <textarea name="text8" rows="2" cols="25"></textarea></td>
            <td> <textarea name="author8" rows="2" cols="20"></textarea></td>
            <td> <textarea name="publisher8" rows="2" cols="20"></textarea></td>
            <td> <textarea name="edition8" rows="2" cols="10"></textarea></td>
            <!-- <td> <textarea name="mod8" rows="2" cols="10"></textarea></td> -->
            <td><input type="number" min="0" name="mod8"></td>
          </tr>
        </table>
      </div>

      <div>
        <h2 align="left">List of Reference books (R-symbol for Reference Books)to be Referred by Students</h2>
      </div>

      <div>
      <table align="center">
          <tr>
            <th>Sr. No.</th>
            <th>Reference Book Titles</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Edition</th>
            <th>Module Nos.</th>
          </tr>
          <tr>
            <td> 1 </td>
            <td> <textarea name="Rtext1" rows="2" cols="25"></textarea></td>
            <td> <textarea name="Rauthor1" rows="2" cols="20"></textarea></td>
            <td> <textarea name="Rpublisher1" rows="2" cols="20"></textarea></td>
            <td> <textarea name="Redition1" rows="2" cols="10"></textarea></td>
            <!-- <td> <textarea name="Rmod1" rows="2" cols="10"></textarea></td> -->
            <td><input type="number" min="0" name="Rmod1"></td>
          </tr>
          <!-- <tr>
            <td> 2 </td>
            <td> <textarea name="Rtext2" rows="2" cols="25"></textarea></td>
            <td> <textarea name="Rauthor2" rows="2" cols="20"></textarea></td>
            <td> <textarea name="Rpublisher2" rows="2" cols="20"></textarea></td>
            <td> <textarea name="Redition2" rows="2" cols="10"></textarea></td>
            <td> <textarea name="Rmod2" rows="2" cols="10"></textarea></td>
            <td><input type="number" min="0" name="Rmod2"></td>
          </tr>
          <tr>
            <td> 3 </td>
            <td> <textarea name="Rtext3" rows="2" cols="25"></textarea></td>
            <td> <textarea name="Rauthor3" rows="2" cols="20"></textarea></td>
            <td> <textarea name="Rpublisher3" rows="2" cols="20"></textarea></td>
            <td> <textarea name="Redition3" rows="2" cols="10"></textarea></td>
            <td> <textarea name="Rmod3" rows="2" cols="10"></textarea></td>
            <td><input type="number" min="0" name="Rmod3"></td>
          </tr>  -->
          <!--<tr>
            <td> 4 </td>
            <td> <textarea name="text4" rows="2" cols="25"></textarea></td>
            <td> <textarea name="author4" rows="2" cols="20"></textarea></td>
            <td> <textarea name="publisher4" rows="2" cols="20"></textarea></td>
            <td> <textarea name="edition4" rows="2" cols="10"></textarea></td>
            <td> <textarea name="module4" rows="2" cols="10"></textarea></td>
          </tr>
          <tr>
            <td> 5 </td>
            <td> <textarea name="text5" rows="2" cols="25"></textarea></td>
            <td> <textarea name="author5" rows="2" cols="20"></textarea></td>
            <td> <textarea name="publisher5" rows="2" cols="20"></textarea></td>
            <td> <textarea name="edition5" rows="2" cols="10"></textarea></td>
            <td> <textarea name="module5" rows="2" cols="10"></textarea></td>
          </tr>
          <tr>
            <td> 6 </td>
            <td> <textarea name="text6" rows="2" cols="25"></textarea></td>
            <td> <textarea name="author6" rows="2" cols="20"></textarea></td>
            <td> <textarea name="publisher6" rows="2" cols="20"></textarea></td>
            <td> <textarea name="edition6" rows="2" cols="10"></textarea></td>
            <td> <textarea name="module6" rows="2" cols="10"></textarea></td>
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