<!DOCTYPE html>  
<html>  
<head> 
<title>Registration</title> 
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Times New Roman, Helvetica, sans-serif;  
  background-color: white;  
}  
.container {  
    padding: 50px;  
  background-color: white;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 20%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: white;  
  outline: none;  
}  
 div {  
            padding: 20px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 30px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 60%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  
<body>  
<form>  
  <div class="container">  
  <center>  <h1> Registeration Form </h1> </center>  
  <hr>  
<b>  <label> Full Name: </label> </b> 
<b> <input type="text" name="firstname" placeholder= "First Name" size="15" required /> </b>      
<b> <input type="text" name="middlename" placeholder="Middle Name" size="15" required /> </b>     
<b> <input type="text" name="lastname" placeholder="Last Name" size="15"required /> </b>    
<div>  
<b> <label>   
Course :  
</label> </b>   
  
<select>  
<option value="Course">Course</option>  
<option value="BSc.IT">BSc.IT</option>  
<option value="BAF">BAF</option>  
<option value="BMS">BMS</option>  
<option value="BBI">BBI</option>  
<option value="BFM">BFM</option>  
<option value="BMM">BMM</option>  
</select>  
</div>  

<div>  
<b> <label>   
Gender :  
</label></b><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
  </div>  

<b><label>   
Phone :  
</label>  </b>
<input type="text" name="Phone" placeholder="Phone no." size="10"/ required>   <br> 
   
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" required>  <br> 
  
    <label for="psw"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="psw" required>  <br> 
  
    <label for="psw-repeat"><b>Re-Enter Password</b></label>  
    <input type="password" placeholder="Re-Enter Password" name="psw-repeat" required>  <br> 
    <button type="submit" class="registerbtn">Register</button>    
</form>  
</body>  
</html>  