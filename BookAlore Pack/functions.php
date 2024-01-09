<?php

//will check if the user is logged in
function check_login($con)
{
    if(isset($_SESSION['username']))
    {
        $id = $_SESSION['username'];
        $query = "SELECT * FROM user_register WHERE username = $id limit 1";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) == 1)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location: home.php");
    die;
}

function username_taken(){
    echo '<div>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center;"><br></p>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center; font-weight: bold; font-size: 2.5em;">USERNAME ALREADY TAKEN!</p>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center;">Please try to register again with another username!</p>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center;"><br></p>
        </div>';
}

function wrong_login(){
    echo '<div>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center;"><br></p>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center; font-weight: bold; font-size: 2.5em;">YOUR USERNAME AND PASSWORD DOES NOT MATCH!</p>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center;">Sorry! We cannot recognized your login details. Please try to login again with your correct login details.</p>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center;"><br></p>
        </div>';
}

function wrong_login_admin(){
    echo '<div>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center;"><br></p>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center; font-weight: bold; font-size: 2.5em;">YOUR EMPLOYEE ID AND PASSWORD DOES NOT MATCH!</p>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center;">Sorry! We cannot recognized your login details. Please try to login again with your correct login details.</p>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center;"><br></p>
        </div>';
}

function wrong_login_manager(){
    echo '<div>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center;"><br></p>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center; font-weight: bold; font-size: 2.5em;">YOUR MANAGER ID AND PASSWORD DOES NOT MATCH!</p>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center;">Sorry! We cannot recognized your login details. Please try to login again with your correct login details.</p>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center;"><br></p>
        </div>';
}

function fill_details(){
    echo '<div>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center;"><br></p>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center; font-weight: bold; font-size: 2.5em;">PLEASE FILL UP ALL THE FIELDS!</p>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center;">Woops! Seems like you forgot to enter some details. Kindly fill up all the fields with your needed details.</p>
            <p class="mb-0" style="color: white; background-color: #ee2e31; text-align: center;"><br></p>
        </div>';
}

?>