<!DOCTYPE html>
<html>

<head>
    <title>Mapping</title>
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
    <form action="Step2mappingfunc.php" method="POST">
        <div>
            <h2>Mapping of COs with POs</h2>
            <p>(Mark S:Strong, M:Moderate,W:Weak,Dash '-':not mapped)</p>
            <table align="center">
                <colgroup>
                    <col span="2" style="background-color: white">
                    <col span="2" style="background-color:   white">
                </colgroup>
                <tr>
                    <th></th>
                    <th>PO1</th>
                    <th>PO2</th>
                    <th>PO3</th>
                    <th>PO4</th>
                    <th>PO5</th>
                    <th>PO6</th>
                    <th>PO7</th>
                    <th>PO8</th>
                    <th>PO9</th>
                    <th>PO10</th>
                    <th>PO11</th>
                    <th>PO12</th>
                </tr>
                <tr>
                    <td>CO1</td>
                    <td>
                        <select name="CO1PO1">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>

                    <td>
                        <select name="CO1PO2">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO1PO3">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO1PO4">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO1PO5">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO1PO6">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO1PO7">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO1PO8">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO1PO9">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO1PO10">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO1PO11">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO1PO12">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                </tr>
                <tr>
                    <td>CO2</td>
                    <td>
                        <select name="CO2PO1">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO2PO2">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO2PO3">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO2PO4">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO2PO5">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO2PO6">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO2PO7">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO2PO8">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO2PO9">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO2PO10">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO2PO11">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO2PO12">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>

                </tr>
                <tr>
                    <td>CO3</td>
                    <td>
                        <select name="CO3PO1">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO3PO2">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO3PO3">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO3PO4">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO3PO5">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO3PO6">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO3PO7">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO3PO8">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO3PO9">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO3PO10">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO3PO11">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO3PO12">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                </tr>


                <tr>
                    <td>CO4</td>
                    <td>
                        <select name="CO4PO1">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO4PO2">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO4PO3">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO4PO4">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO4PO5">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO4PO6">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO4PO7">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO4PO8">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO4PO9">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO4PO10">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO4PO11">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO4PO12">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                </tr>


                <tr>
                    <td>CO5</td>
                    <td>
                        <select name="CO5PO1">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO5PO2">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO5PO3">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO5PO4">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO5PO5">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO5PO6">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO5PO7">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO5PO8">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO5PO9">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO5PO10">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO5PO11">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO5PO12">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                </tr>

                <tr>
                    <td>CO6</td>
                    <td>
                        <select name="CO6PO1">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO6PO2">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO6PO3">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO6PO4">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO6PO5">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO6PO6">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO6PO7">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO6PO8">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO6PO9">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO6PO10">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO6PO11">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                    <td>
                        <select name="CO6PO12">
                            <option>Select</option>
                            <option value="Strong">S</option>
                            <option value="Moderate">M</option>
                            <option value="Weak">W</option>
                            <option value="not mapped">--</option>
                    </td>
                </tr>
            </table>
        </div>

        <div>
            <h2 align="center"><b> Mapping COs with PSOs </b></h2>
        </div>

        <div>
            <table id="myTable" border="1" align="center">
                <tr>
                    <th> </th>
                    <th>PSO 1</th>
                    <th>PSO 2</th>
                    <th>PSO 3</th>
                    <th>PSO 4</th>
                </tr>
                <tr>
                    <td>CO 1</td>
                    <td>
                        <select name="CO1PSO1">
                            <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                    <td>
                        <select name="CO1PSO2">
                            <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                    <td>
                        <select name="CO1PSO3">
                            <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                    <td>
                        <select name="CO1PSO4">
                            <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                </tr>

                <tr>
                    <td>CO 2</td>
                    <td>
                        <select name="CO2PSO1">
                            <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                    <td>
                        <select name="CO2PSO2">
                            <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                    <td>
                        <select name="CO2PSO3">
                            <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                    <td>
                        <select name="CO2PSO4">
                            <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                </tr>

                <tr>
                    <td>CO 3</td>
                    <td>
                        <select name="CO3PSO1">
                            <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                    <td>
                        <select name="CO3PSO2">
                            <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                    <td>
                        <select name="CO3PSO3">
                            <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                    <td>
                        <select name="CO3PSO4">
                            <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                </tr>

                <tr>
                    <td>CO 4</td>
                    <td>
                        <select name="CO4PSO1">
                                <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                    <td>
                        <select name="CO4PSO2">
                                <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                    <td>
                        <select name="CO4PSO3">
                                <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                    <td>
                        <select name="CO4PSO4">
                                <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                </tr>

                <tr>
                    <td>CO 5</td>
                    <td>
                        <select name="CO5PSO1">
                                <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                    <td>
                        <select name="CO5PSO2">
                                <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                    <td>
                        <select name="CO5PSO3">
                                <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                    <td>
                        <select name="CO5PSO4">
                                <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                </tr>

                <tr>
                    <td>CO 6</td>
                    <td>
                        <select name="CO6PSO1">
                                <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                    <td>
                        <select name="CO6PSO2">
                                <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                    <td>
                        <select name="CO6PSO3">
                                <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
                    <td>
                        <select name="CO6PSO4">
                                <option>--Please Select--</option>
                            <option value="STRONG">STRONG</option>
                            <option value="MODERATE">MODERATE</option>
                            <option value="WEAK">WEAK</option>
                            <option value="NOT MAPPED">NOT MAPPED</option>
                    </td>
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