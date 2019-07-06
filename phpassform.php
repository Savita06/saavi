<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./js/bootstrap.min.css">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/ajax1.js"></script>
</head>
<body>

<div class="container">
  <h2>Stacked form</h2>
  <form class="form-horizontal" action="validation.php" method="post" id="formid">    
      <div class="form-group">
        <label for="text">first Name:</label>
        <input type="text" class="form-control" id="first name" placeholder="text" name="fname">
      </div>
      <div class="form-group">
        <label for="text">Last Name:</label>
        <input type="text" class="form-control" id="last name" placeholder="text" name="lname">
      </div>
      <div class="form-group">
        <label for="text">D.O.B:</label>
        <input type="text" class="form-control" id="date of birth" placeholder="text" name="dob">
      </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2">Gender:</label>
        <div class="col-sm-2">
        <label><input type="radio" name="gender" class="form-control" value="male">Male</label>
      </div>
      <div class="col-sm-2">
        <label><input type="radio" name="gender" class="form-control" value="female">Female</label>
      </div>
      <div class="col-sm-1"><span class="error"></span></div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-2">Description:</label>
        <div class="col-sm-10">          
          <textarea cols="5" rows="5" class="form-control" name="descri"></textarea>
        </div>
      </div>
      <div class="form-group">
         <label class="control-label col-sm-2">Subjects:</label>
         <div class="col-sm-10"> 
           <label class="checkbox-inline">
        <input type="checkbox"  name="check_list[]" value="DBMS">DBMS
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="check_list[]" value="C">C
      </label>
      <label class="checkbox-inline">
        <input type="checkbox"   name="check_list[]" value="C++">C++
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="check_list[]" value="UML">UML
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="check_list[]" value="JAVA">JAVA
      </label>
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <label class="checkbox-inline">
        <input type="checkbox" name="check_list[]" value="DAA">DAA
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="check_list[]" value="PHP">PHP
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="check_list[]" value="BLOCKCHAIN">BLOCKCHAIN
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" name="check_list[]" value="ANDROID">ANDROID
      </label>
      
         </div>
      </div>
      <div class="form-group">      
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
    </div>
    
    <div class="col-sm-6">
                <div id="mydiv">
                    <h3>output:</h3>
                 </div> 
    </div>               
 
</body>
</html>
