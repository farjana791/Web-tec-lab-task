<?php
   require "registration_validation.php";
?>

<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
	    <p style="font-size: 30px; color: black; font-weight: bold;">Welcome to Registration</p>
         
           <form>
             <table>
                <tr>
                    <td align="right">Full Name:<span style="color: red;"></td>
                    <td><input type="text" size="40"> <?php echo "$err_name"; ?></td>
                </tr>
                <tr>
                    <td align="right">user Name:<span style="color: red;"></td>
                    <td><input type="text" size="40"> <?php echo "$err_uname"; ?> </td>
                </tr>
				<tr>
                    <td align="right">password:<span style="color: red;"></td>
                    <td><input type="text" size="40"> <?php echo "$err_pass"; ?> </td>
                </tr>
				
				<tr>
                    <td align="right">Confirm Password:<span style="color: red;"></td>
                    <td><input type="text" size="40"> <?php echo "$err_cpass"; ?></td>
                </tr>
				 <tr>
                    <th align="right">Gender:<span style="color: red;"></span></th>
                    <td>
                        <input type="radio" name="Gender"> Male
                        <input type="radio" name="Gender">Female
						<span> <?php echo "&nbsp &nbsp &nbsp $err_gender"; ?> </span>
                       
                    </td>
                </tr>
				 <tr>
                    <th align="right">Email Address<span style="color: red;"></th>
                    <td><input type="text" size="40"></td>
					<span> <?php echo "$errMail"; ?> </span>
                </tr>
				<tr>
                    <th align="right">Contact No:<span style="color: red;"></th>
                    <td><input type="text" size="40"></td>
					<span> <?php echo "$err_contact"; ?> </span>
                </tr>
				<tr>
                        <th align="right">City:</th>
                        <td>
                            <select>
                                <option disabled selected>Select a City</option>
                                <option>Dhaka</option>
                                <option>Barisal</option>
                                
                            </select>
                        </td>
				    <tr>
						<td colspan="1.9" align="right">
							<input type="submit" name="OK" value="OK">
						</td>
					</tr>
                    </table>
                
                
            </form>
    </body>
</html>	