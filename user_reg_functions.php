<?php 

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//variable declaration
$firstName = "";
$lastName = "";
$userId = "";
$errors = array();

//call the signup() function if signup button is clicked
if(isset($_POST['signup_btn'])){
    signup();
}

// SIGN UP USER //
function signup(){
    //call these variable with the global keyword to make them available
    global $db, $errors, $firstName, $lastName, $userId;

    //Get all input values from the form.
    //Call the esc() function defined below to escape form values.

    $firstName = esc($_POST['first_name']);
    $lastName = esc($_POST['last_name']);
    $userId = esc($_POST['user_id']);
    $password = esc($_POST['password']);
    $confirmPassword = esc($_POST['confirm_password']);

    //form validation: ensure that the form is correctly filled
    if (empty($firstName)) {
        array_push($errors, "First Name is required");
    }

    if (empty($lastName)) {
        array_push($errors, "Last Name is required");
    }

    if (empty($userId)) {
        array_push($errors, "User Id is required");
    }

    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if($password != $confirmPassword){
        array_push($errors, "Passwords do not match");
    }

        //Check if User Id Exits
        $userId = esc($_POST['user_id']);
        $sql_user_id = "SELECT * FROM users WHERE `user_id` = '$userId'";
        $res_user_id = mysqli_query($db, $sql_user_id) or die(mysqli_error($db));

        if (mysqli_num_rows($res_user_id) > 0) {
                //$userId_error = "Sorry... User Id already exists";
                array_push($errors, "Sorry... User Id already exists");
        }else{

            //Sign Up user if there is no errors in the form
            if (count($errors) == 0) {

            //////////else////////////
            $passwordHash = md5($password);//encrypt the password before storing for security reasons

            if (isset($_POST['user_type'])) {

                $userType = esc($_POST['user_type']);
                $query = "INSERT INTO users(first_name, last_name, `user_id`, `password`, user_type)
                        VALUES('$firstName', '$lastName', '$userId', '$passwordHash', 'admin')";
                mysqli_query($db, $query);
                $_SESSION['success'] = "You have signed up successfully";
                header('location: admin/index.php');//redirect to Admin page when it is an admin

            }else {

                $query = "INSERT INTO users(first_name, last_name, `user_id`, `password`, user_type)
                        VALUES('$firstName', '$lastName', '$userId', '$passwordHash', 'user')";
                mysqli_query($db, $query);

                //get id of the created user
                $logged_in_user_id = mysqli_insert_id($db);

                $_SESSION['user'] = getUserById($logged_in_user_id);// put logged in user in session
                $_SESSION['success'] = "You have signed up successfully";
                header('location: index.php');//redirect to User page when it is user 

            }
            //////////end else////////////
        }
    }
}//  END OF SIGN UP USER

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//return user array by their id
function getUserById($id){
    global $db;
    $query = "SELECT * FROM users WHERE id=" . $id;
    $result = mysqli_query($db, $query);

    $user = mysqli_fetch_assoc($result);
    return $user;
}

//function for the escape string
function esc($val){
    global $db;
    return mysqli_real_escape_string($db, trim($val));
}

//function to display errors
function display_error(){
    global $errors;

    if(count($errors) > 0){
        
        echo '<div class="error">';
        
              foreach ($errors as $error){
                  echo '<i class="fa fa-warning"></i> ' . $error . '<br>';
              }
        echo '</div>';      
    }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////LOGIN FUNCTION STARTS HERE/////////////////////////////////////////////////////
    

    //call the login() function if login_btn is clicked
    if (isset($_POST['login_btn'])) {
        login();
    }

    // LOG USER IN //
    function login(){
        global $db, $userId, $errors;

        //get form values
        $userId = esc($_POST['user_id']);
        $password = esc($_POST['password']);

        //make sure form is filled properly
        if (empty($userId)) {
            array_push($errors, "User Id is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        //attempt login if no errors appeared after filling the form
        if (count($errors) == 0) {
            $password = md5($password);

            $query = "SELECT * FROM users WHERE `user_id`='$userId' AND `password` = '$password'";
            $results = mysqli_query($db, $query);

            if (mysqli_num_rows($results) == 1){
                // user found
                // check if user is an admin or a normal user
                $logged_in_user = mysqli_fetch_assoc($results);

                if ($logged_in_user['user_type'] == 'admin') {

                    $_SESSION['user'] = $logged_in_user;
                    $_SESSION['success'] = "You have logged in successfully";
                    header('location: admin/index.php');

                }else{

                    $_SESSION['user'] = $logged_in_user;
                    $_SESSION['success'] = "You have logged in successfully";
                    header('location: index.php');

                }
            }else{
                array_push($errors, "Incorrect User Id or Password");
            }
        }
    }

/////////////////////////////////LOGIN FUNCTION ENDS HERE/////////////////////////////////////////////////////









?>