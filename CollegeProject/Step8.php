<!DOCTYPE html>
<html>

<head>
    <title>Courses</title>
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
    <form action="Step8mainfunc.php" method="POST">
        <div>
            <div>
                <h2>Web-Links</h2>
                <p>(Online Notes /YouTube Videos /VIT Digital Content /VIT Lecture Capture /NPTEL Videos)</P>
            </div>
            <div>
                <table>
                    <colgroup>
                        <col span="2" style="background-color: white">
                        <col span="2" style="background-color:   white">
                    </colgroup>
                    <tr>
                        <th>No.</th>
                        <th>Websites /Links</th>
                        <th>Modules Nos.</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><textarea name="web1" rows="2" cols="40"></textarea></td>
                        <td><textarea name="m1" rows="2" cols="20"></textarea></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><textarea name="web2" rows="2" cols="40"></textarea></td>
                        <td><textarea name="m2" rows="2" cols="20"></textarea></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><textarea name="web3" rows="2" cols="40"></textarea></td>
                        <td><textarea name="m3" rows="2" cols="20"></textarea></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><textarea name="web4" rows="2" cols="40"></textarea></td>
                        <td><textarea name="m4" rows="2" cols="20"></textarea></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><textarea name="web5" rows="2" cols="40"></textarea></td>
                        <td><textarea name="m5" rows="2" cols="20"></textarea></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><textarea name="web6" rows="2" cols="40"></textarea></td>
                        <td><textarea name="m6" rows="2" cols="20"></textarea></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><textarea name="web7" rows="2" cols="40"></textarea></td>
                        <td><textarea name="m7" rows="2" cols="20"></textarea></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><textarea name="web8" rows="2" cols="40"></textarea></td>
                        <td><textarea name="m8" rows="2" cols="20"></textarea></td>
                    </tr> 
                </table>
            </div>

             <div>
                <h2>Recommended MOOC Courses like Coursera / NPTEL / MIT-OCW / EDX etc</h2>
            </div>
            <div>
                <table>
                    <colgroup>
                        <col span="2" style="background-color: white">
                        <col span="2" style="background-color:   white">
                    </colgroup>
                    <tr>
                        <th>No.</th>
                        <th>MOOC Courses Link</th>
                        <th>Course conducted by- Person /University Institute /Industry</th>
                        <th>Courses Duration<br>(in hrs)</th>
                        <th>Certificate<br>(Yes / No)</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><textarea name="l1" rows="2" cols="40"></textarea></td>
                        <td><textarea name="co1" rows="2" cols="20"></textarea></td>
                        <td><textarea name="d1" rows="2" cols="10"></textarea></td>
                        <td><input type="radio" name="cer1" value="yes" required>YES
                            &nbsp;&nbsp;
                            <input type="radio" name="cer1" value="no" required>NO
                        </td>
                    </tr>
                   <tr>
                        <td>2</td>
                        <td><textarea name="l2" rows="2" cols="40"></textarea></td>
                        <td><textarea name="co2" rows="2" cols="20"></textarea></td>
                        <td><textarea name="d2" rows="2" cols="10"></textarea></td>
                        <td><input type="radio" name="cer2" value="yes" required>YES
                            &nbsp;&nbsp;
                            <input type="radio" name="cer2" value="no" required>NO
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><textarea name="l3" rows="2" cols="40"></textarea></td>
                        <td><textarea name="co3" rows="2" cols="20"></textarea></td>
                        <td><textarea name="d3" rows="2" cols="10"></textarea></td>
                        <td><input type="radio" name="cer3" value="yes" required>YES
                            &nbsp;&nbsp;
                            <input type="radio" name="cer3" value="no" required>NO
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><textarea name="l4" rows="2" cols="40"></textarea></td>
                        <td><textarea name="co4" rows="2" cols="20"></textarea></td>
                        <td><textarea name="d4" rows="2" cols="10"></textarea></td>
                        <td><input type="radio" name="cer4" value="yes" required>YES
                            &nbsp;&nbsp;
                            <input type="radio" name="cer4" value="no" required>NO
                        </td>
                    </tr> 
                </table>
            </div>

            <div>
                <h2>Recommended Value Added Courses (VACs)</h2>
            </div>

            <div>
                <table>
                    <colgroup>
                        <col span="2" style="background-color: white">
                        <col span="2" style="background-color:   white">
                    </colgroup>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Name of the Value Added Course</th>
                        <th>Conducted by- Person /University Institute /Industry</th>
                        <th>Courses Duration</th>
                        <th>Certificate(Yes / No)</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><textarea name="n1" rows="2" cols="40"></textarea></td>
                        <td><textarea name="p1" rows="2" cols="20"></textarea></td>
                        <td><textarea name="cd1" rows="2" cols="10"></textarea></td>
                        <td><input type="radio" name="c1" value="yes" required>YES
                            &nbsp;&nbsp;
                            <input type="radio" name="c1" value="no" required>NO</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><textarea name="n2" rows="2" cols="40"></textarea></td>
                        <td><textarea name="p2" rows="2" cols="20"></textarea></td>
                        <td><textarea name="cd2" rows="2" cols="10"></textarea></td>
                        <td><input type="radio" name="c2" value="yes" required>YES
                            &nbsp;&nbsp;
                            <input type="radio" name="c2" value="no" required>NO</td>
                    </tr>
                </table>
            </div>
            
            <!-- <div>
                <h2>1.25 Study Material Distributed among Students</h2>
            </div> -->
            <!-- <div>
                <table>
                    <colgroup>
                        <col span="2" style="background-color: white">
                        <col span="2" style="background-color:   white">
                    </colgroup>
                    <tr>
                        <th>GQ</th>
                        <th>Notes</th>
                        <th>Digital Content</th>
                        <th>PPT</th>
                        <th>EQ (updated till the Last Exam)</th>
                        <th>Other (Write Details)</th>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><input type="checkbox" name="select"></td>
                        <td><textarea name="topic1" rows="2" cols="40"></textarea></td>
                    </tr>

                </table>
            </div> -->
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