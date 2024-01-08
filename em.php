<html>
<head>
<title>employee registration</title>
</head>
<body>
<form>
  name:<input type="text" name="name"required><br>
  e-mail:<input type="email" name="email" required><br>
  address:<input type="text" name="address"><br>
  occupation:<input type="text"name="occupation"><br><br>
  <input type="submit" value="register">
  </form>

  
  <?php 
  $nameErr=$emailErr="";
  $name=$email=$address=$occupation="";
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  { 
   if (empty($_POST["name"])) {  
   $nameErr = "required"; 
   }
   else { 
    $name = input_data($_POST["name"]);  
    }
    
  
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } 
else {   
  $email = input_data($_POST["email"]);  
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
  $emailErr = "Invalid email format"; 
  }
}
  $address = input_data($_POST["address"]);
  $occupation = input_data($_POST["occupation"]);
     
 if ($nameErr===""&&$emailErr==="") {  
    echo "<h2 style='color: #FF0001;'><b>You have successfully registered.</b></h2>";   
    echo "Input:";  
    echo "Name:" . $name ."<br>"; 
    echo "Email: " . $email . "<br>";   
    echo "Address: " . $address . "<br>";  
    echo "Occupation: " . $occupation . "<br>";
   } 
   else 
   {  
    echo "Errors.";  
    }  
    }
     
function input_data($data) {
  $data=trim($data); 
  $data=stripslashes($data); 
  $data=htmlspecialchars($data);
  return $data;
 }
?>  
  
</body>  
</html>  
