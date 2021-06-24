<!DOCTYPE html>
<html>

<head>
    <title>E-books</title>
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
    <form action="Step7mainfunc.php" method="POST">
        <div>
            <div>
                <h2>List of E-books(E-for E books)to be Reffered by Students</h2>
            </div>
            <div>

                <table>
                    <colgroup>
                        <col span="2" style="background-color: white">
                        <col span="2" style="background-color:   white">
                    </colgroup>
                    <tr>
                        <th>Sr. No.</th>
                        <th>E-Book Titles</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Edition</th>
                        <th>Unit Nos.</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><textarea name="tab1" rows="2" cols="40"></textarea></td>
                        <td><textarea name="aut1" rows="2" cols="40"></textarea></td>
                        <td><textarea name="pub1" rows="2" cols="20"></textarea></td>
                        <td><textarea name="edi1" rows="2" cols="20"></textarea></td>
                        <td><input type="number" min="0" name="unit1"></td>
                    </tr>
                     <tr>
                        <td>2</td>
                        <td><textarea name="tab2" rows="2" cols="40"></textarea></td>
                        <td><textarea name="aut2" rows="2" cols="40"></textarea></td>
                        <td><textarea name="pub2" rows="2" cols="20"></textarea></td>
                        <td><textarea name="edi2" rows="2" cols="20"></textarea></td>
                        <td><input type="number" min="0" name="unit2"></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><textarea name="tab3" rows="2" cols="40"></textarea></td>
                        <td><textarea name="aut3" rows="2" cols="40"></textarea></td>
                        <td><textarea name="pub3" rows="2" cols="20"></textarea></td>
                        <td><textarea name="edi3" rows="2" cols="20"></textarea></td>
                        <td><input type="number" min="0" name="unit3"></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><textarea name="tab4" rows="2" cols="40"></textarea></td>
                        <td><textarea name="aut4" rows="2" cols="40"></textarea></td>
                        <td><textarea name="pub4" rows="2" cols="20"></textarea></td>
                        <td><textarea name="edi4" rows="2" cols="20"></textarea></td>
                        <td><input type="number" min="0" name="unit4"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><textarea name="tab5" rows="2" cols="40"></textarea></td>
                        <td><textarea name="aut5" rows="2" cols="40"></textarea></td>
                        <td><textarea name="pub5" rows="2" cols="20"></textarea></td>
                        <td><textarea name="edi5" rows="2" cols="20"></textarea></td>
                        <td><input type="number" min="0" name="unit5"></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><textarea name="tab6" rows="2" cols="40"></textarea></td>
                        <td><textarea name="aut6" rows="2" cols="40"></textarea></td>
                        <td><textarea name="pub6" rows="2" cols="20"></textarea></td>
                        <td><textarea name="edi6" rows="2" cols="20"></textarea></td>
                        <td><input type="number" min="0" name="unit6"></td>
                    </tr>
                </table>
            </div>

            <div>
                <h2>Web Links and Names of Magazines, Journals, E-Journals</h2>
                <p><b>VIT is member of IIT Bombay Library</b>: You can go to IIT Bombay and access journals subscribed
                    by IIT
                    library. Take authorization letter from VIT principal.Also refer online journals subscribed at VIT
                    library </p>
            </div>

            <div>
                <table>
                    <colgroup>
                        <col span="2" style="background-color: white">
                        <col span="2" style="background-color:   white">
                    </colgroup>
                    <tr>
                        <th>Sr.No.</th>
                        <th>Web-Links and Names of Journals and E-journals Recommended to Students for this</th>
                        <th>Web-Links and Names of Magazines and E-journals Recommended to Students for this</th>
                        <th>Module No.</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><textarea name="jour1" rows="2" cols="40"></textarea></td>
                        <td><textarea name="mag1" rows="2" cols="40"></textarea></td>
                        <td><textarea name="module1" rows="2" cols="20"></textarea></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><textarea name="jour2" rows="2" cols="40"></textarea></td>
                        <td><textarea name="mag2" rows="2" cols="40"></textarea></td>
                        <td><textarea name="module2" rows="2" cols="20"></textarea></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><textarea name="jour3" rows="2" cols="40"></textarea></td>
                        <td><textarea name="mag3" rows="2" cols="40"></textarea></td>
                        <td><textarea name="module3" rows="2" cols="20"></textarea></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><textarea name="jour4" rows="2" cols="40"></textarea></td>
                        <td><textarea name="mag4" rows="2" cols="40"></textarea></td>
                        <td><textarea name="module4" rows="2" cols="20"></textarea></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><textarea name="jour5" rows="2" cols="40"></textarea></td>
                        <td><textarea name="mag5" rows="2" cols="40"></textarea></td>
                        <td><textarea name="module5" rows="2" cols="20"></textarea></td>
                    </tr> 
                </table>
            </div>
            
            <!-- <div>
                <h2>Module best Available in- tick the best Resource [from 1.17 to 1.20] & give details</h2>
            </div>

            <div>
                <table>
                    <colgroup>
                        <col span="2" style="background-color: white">
                        <col span="2" style="background-color:   white">
                    </colgroup>
                    <tr>
                        <th rowspan="3">Unit/Module No.</th>
                        <th colspan="6">Category(Please Tick MARK)- ✔</th>
                    </tr>
                    <tr>
                        <th colspan="4">Book</th>
                        <th colspan="2">Journals</th>
                        <th colspan="2">Available in VSIT Library</th>
                        <th colspan="3">Details of the Resource(i.e Name, Chapter & Page No.)</th>
                    </tr>
                    <tr>
                        <th>Text</th>
                        <th>Reference</th>
                        <th>E-Book</th>
                        <th>Magazine</th>
                        <th>Regular</th>
                        <th>E-Journal</th>
                        <th>Yes</th>
                        <th>No</th>
                        <th colspan="4"></th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><textarea name="S5" rows="2" cols="30"></textarea></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><textarea name="S5" rows="2" cols="30"></textarea></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><textarea name="S5" rows="2" cols="30"></textarea></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><textarea name="S5" rows="2" cols="30"></textarea></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><textarea name="S5" rows="2" cols="30"></textarea></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><textarea name="S5" rows="2" cols="30"></textarea></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><textarea name="S5" rows="2" cols="30"></textarea></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><textarea name="S5" rows="2" cols="30"></textarea></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><textarea name="S5" rows="2" cols="30"></textarea></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><textarea name="S5" rows="2" cols="30"></textarea></td>
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