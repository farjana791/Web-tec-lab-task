<?php 
    $name="";
    $err_name="";
    $uname="";
    $err_uname="";
    $pass="";
    $err_pass="";
    $cpass="";
    $err_cpass="";
    $email="";
    $err_email="";
    $phoneCode="";
    $err_phoneCode="";
    $phoneNum="";
    $err_phoneNum="";
    
    $has_error=false;
	
     if(isset($_POST["register"])){
        if(!isset($_POST["name"])){
  //Name   
         if(empty($_POST["name"])){
            $err_name="Name required";
            $has_error=true;
        }
		elseif(strpos($_POST["name"],"abcd")){
			$err_name="Consequtive abcd cant not be a name";
            $has_error=true;
        }
            else{
                $name=htmlspecialchars($_POST["name"]);
            }
        }
		//Username 
        if(empty($_POST["uname"])){
            $err_uname="Username Required";
            $has_error=true;
        }
        elseif((strlen($_POST["uname"])<6)){
            $err_uname="Username must be 6 characters long";
            $has_error=true;
        }
        elseif(strpos($_POST["uname"]," ")){
            $err_uname="Username can not contain any space";
            $has_error=true;
        }
        else{
            $uname=htmlspecialchars($_POST["uname"]);
        }
		//password
		if(empty($_POST["pass"])){
            $err_pass="Password Required";
            $has_error=true;
        }
        elseif(strlen($_POST["pass"])<8){
            $err_pass="Password must be 8 characters long";
            $has_error=true;
        }
		else{
            $pass=htmlspecialchars($_POST["pass"]);
        }
     
	 //Confirm password
        if(empty($_POST["cpass"])){
            $err_cpass="Enter Confirm Password";
            $has_error=true;
        }
        elseif(!strcmp($_POST["cpass"],strtoupper($_POST["pass"]))){
            $err_cpass="Confirm Password and password must be same";
            $has_error=true;
        }
		//Email
		if(empty($_POST["email"])){
            $err_email="Please Enter Email!";
            $has_error=true;
        }
		//PHONE
		if(empty($_POST["phoneCode"])){
            $err_phoneCode="Enter Phone Code";
            $has_error=true;
        }
        elseif(strlen($_POST["phoneCode"]) != 3){
            $err_phoneCode="Phone code must be 3 characters.";
            $has_error=true;
        }
        elseif(!is_numeric($_POST["phoneCode"])){
            $err_phoneCode="Phone code must be numeric.";
            $has_error=true;
        }
        else{
            $phoneCode=htmlspecialchars($_POST["phoneCode"]);
        }
        if(empty($_POST["phoneNum"])){
            $err_phoneNum="Please Enter Phone Number!";
            $has_error=true;
        }
        elseif(strlen($_POST["phoneNum"]) != 10){
            $err_phoneNum="Phone number must be 10 characters.";
            $has_error=true;
        }
        elseif(!is_numeric($_POST["phoneNum"])){
            $err_phoneNum="Phone number must be numeric.";
            $has_error=true;
        }
        else{
            $phoneNum=htmlspecialchars($_POST["phoneNum"]);
        }
		
		
    }
?>
<html>
    <head>
        <title>Club Registration</title>
    </head>
    <body>
            <table>
                <tr>
                    <td>
                        <form action="" method="POST">
                            <fieldset>
                                <legend><h1>Club Member Registration</h1></legend>
                                <table>
                                     <tr>
                                        <td align="right">Name:</td>
                                        <td><input type="text" name="name"></td>
                                        <td><input type="text" name="name"> <?php echo $err_name ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Username:</td>
                                        <td><input type="text" name="uname"></td>
                                        <td><input type="text" name="uname"> <?php echo $err_uname ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Password:</td>
                                        <td><input type="password" name="pass"></td>
                                        <td><input type="password" name="pass"> <?php echo $err_pass ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Email:</td>
                                        <td><input type="text" name="email"></td>
                                        <td><input type="text" name="email"> <?php echo $err_email ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Phone:</td>
                                        <td>
                                            <input type="text" placeholder="Code" size="3" name="phoneCode"> -
                                            <input type="text" placeholder="Number" size="9" name="phoneNum">
                                            <input type="text" placeholder="Code" size="3" name="phoneCode"> <?php echo $err_phoneCode ?>-
                                            <input type="text" placeholder="Number" size="9" name="phoneNum"> <?php echo $err_phoneNum ?>
                                        </td>
                                    </tr>
                                        <td align="right">Address:</td>
                                        <td><input type="text" placeholder="Street Address" name="address"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input type="text" placeholder="City" size="6" name="city"> -
                                            <input type="text" placeholder="State" size="6" name="state">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><input type="text" placeholder="Postal/Zip Code" name="postalCode"></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Birth Date:</td>
                                        <td>
                                            <select name="dobDay">
                                                <?php
                                                    echo "<option disabled selected>Day</option>";
                                                    for($i=1; $i<32; $i++)
													{
                                                        echo "<option>".$i."</option>";
                                                    }
                                                ?>
                                            </select>
                                            <select name="dobMonth">
                                                <?php
                                                    $months=array("January","February","March","April","May","June","July","August","September","October","November","December");
                                                    echo "<option disabled selected>Month</option>";
                                                    for($i=0; $i<12; $i++)
													{
                                                        echo "<option>".$months[$i]."</option>";
                                                    }
                                                ?>
												
												
                                            </select>
                                            <select name="dobYear">
                                                 <?php
                                                    echo "<option disabled selected>Year</option>";
                                                    for($i=1997; $i<2007; $i++)
													{
                                                        echo "<option>".$i."</option>";
                                                    }
                                                ?>
												
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Gender:</td>
                                        <td>
                                            <input type="radio" name="gender"> Male
                                            <input type="radio" name="gender"> Female
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Where did you hear about us?</td>
                                        <td>
                                            <input type="checkbox" name="reference[]" value="Movies"> Movies<br>
							                <input type="checkbox" name="reference[]" value=" Music"> Music <br>
							                <input type="checkbox" name="reference[]" value="Programming"> Programming<br>
							                <input type="checkbox" name="reference[]" value="Travelling"> Travelling
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Bio:</td>
                                        <td><textarea name="bio"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input type="submit" name="register" value="Register">
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                        </form>
                    </td>
                </tr>
            </table>
    </body>
</html>