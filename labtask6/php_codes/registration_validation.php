 <?php 
    $name="";
    $err_fname="";
    $uname="";
    $err_uname="";
    $pass="";
    $err_pass="";
    $cpass="";
    $err_cpass="";
	$has_err=false;
    if(isset($_POST["login"])){
        if(!isset($_POST["name"])){
        //Full NAME VALIDATION
        if(empty($_POST["name"])){
            $err_name="Please Enter Name!";
            $has_err=true;
        }
        else{
            if(ctype_space('   ')){
                $err_name="Name Can not be only spaces!";
                $has_err=true;
            $name=htmlspecialchars($_POST["name"]);
        }
        //USER NAME VALIDATION
        if(empty($_POST["uname"])){
            $err_uname="Please Enter Username!";
            $has_err=true;
        }
        elseif((strlen($_POST["uname"])<6)){
            $err_uname="Username must be 6 characters long!";
            $has_err=true;
        }
        elseif(strpos($_POST["uname"]," ")){
            $err_uname="Username can not contain any space!";
            $has_err=true;
        }
        else{
            $uname=htmlspecialchars($_POST["uname"]);
        }
        //PASSWORD VALIDATION
        if(empty($_POST["pass"])){
            $err_pass="Please Enter Password!";
            $has_err=true;
        }
        elseif(strlen($_POST["pass"])<8){
            $err_pass="Password must be 8 characters long.";
            $has_err=true;
        }
        elseif(!strpos($_POST["pass"],"#") || !strpos($_POST["pass"],"?")){
            $err_pass="Password must contain '#' or '?'.";
            $has_err=true;
        }
        elseif(!strpos($_POST["pass"],"1")){
            $err_pass="Password must contain 1 numeric.";
            $has_err=true;
        }
        elseif(strtolower($_POST["pass"])==$_POST["pass"] || strtolower($_POST["pass"])==$_POST["pass"]){
            $err_pass="Password must contain 1 Upper and Lowercase letter.";
            $has_err=true;
        }
        else{
            $pass=htmlspecialchars($_POST["pass"]);
        }
	
?>