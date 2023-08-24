<?php session_start(); 

class Database_query
{
  public $connection;
  public $message;
  // public $msg;

          function __construct()
          {
       require 'databaseconn.php';
          $this->connection = mysqli_connect($dbhost,$name,$pass,$dbname);
        if(!$this->connection)
      {
          die("Could not connect to the database");
      }
          else
      {
            echo "<script> 
            setTimeout(greet,1000);
            function greet()
            {
              // alert('connection established') 
            }  
                  </script>";
      }
           }

            function login() {
          // global $connection;
        if(isset($_POST['login']))
        {
            $uname = $_POST['uname'];
            $password = $_POST['password'];

            if(empty($uname))
            {
              $this->message =  "username field cannot be empty";
              $_SESSION['message'] = $this->message;
            }
            else if(!preg_match("/^[a-zA-Z0-9]*$/", $uname))
            {
              $this->message = "username format is wrong, characters and numbers only";
              $_SESSION['message'] = $this->message;
            }
            else if( empty($password))
            {
              $this->message = "password field cannot be empty";
              $_SESSION['message'] = $this->message;
            }
            else
            {
                // $passHash = password_hash($password,PASSWORD_DEFAULT);

                $sql = "SELECT * FROM signup WHERE username = '$uname' AND password = '$password'";
                $results = mysqli_query($this->connection, $sql);
                
              
          if($results)
          {
              if (mysqli_num_rows($results) > 0)
              {
                  while($fetch = mysqli_fetch_assoc($results))
                  {
                      $_SESSION['customer_id'] = $fetch['customer_id'];
                      $_SESSION["username"] = $fetch['username'];
                  }

                  header("Location:display.php");
              }
                    else
                    {
                      $this->message = "incorrect username or password";
                      $_SESSION['message'] = $this->message;
                  }
          }
          else
          {
              echo "bnot";
          }
      }
    }
      }

        function signup(){

        if(isset($_POST['signup']))
        {
              // $this->message = $_POST['message'];
              $signup_uname = $_POST['signup_uname'];
              $email = $_POST['email'];
              $signup_password = $_POST['password'];
              $verification = $_POST['verification'];

          if(empty($signup_uname))
          {
            $this->message =  "username field cannot be empty";
            $_SESSION['message'] = $this->message;
          }
          else if(!preg_match("/^[A-Za-z0-9]*$/",$signup_uname))
          {
            $this->message = "username format is wrong";
            $_SESSION['message'] = $this->message;
          }
          else if(empty($email))
          {
            $this->message = "email field cannot be empty";
            $_SESSION['message'] = $this->message;

          }
          else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
          {
            $this->message = "email format is wrong";
            $_SESSION['message'] = $this->message;

          }
          else if(empty($signup_password))
          {
            $this->message = "password field cannot be empty";
            $_SESSION['message'] = $this->message;

          }
          else if(strlen($signup_password) <= 8)
          {
            $this->message = "password is weak";
            $_SESSION['message'] = $this->message;

          }
          else if(empty($verification))
          {
            $this->message = "re-enter password field cannot be empty";
            $_SESSION['message'] = $this->message;

          }
          else if($verification !== $signup_password)
          {
            $this->message = "passwords do not match";
            $_SESSION['message'] = $this->message;

          }
        else{
          $this->message = "";
          $_SESSION['message'] = $this->message;

          // $password1 = password_hash($signup_password,PASSWORD_DEFAULT);
          // $password2 = password_hash($verification,PASSWORD_DEFAULT);


    $sql = "INSERT INTO signup (username,email,password,verify_password) VALUES ('$signup_uname','$email','$signup_password','$verification')";
    $query = mysqli_query($this->connection,$sql);

      if(!$query)
          {
            echo "error";
          }
      else
          {
            header("Location:login.php");
          }
        }
      }
        }
    }

class booking{
  public $result;
  public $message;
  public $room_id;
  public $category;
  public $price;
  public $customer_id;
  public $username;
  public $checkIn;
  public $checkOut;
  public $date;


        function reserve_room()
        {
            $conn = new Database_query();

            $this->customer_id = $_SESSION['customer_id'];
            $this->username = $_SESSION['username'];
            $this->room_id = $_GET['rid'];
            $this->category = $_GET['cat'];
            $this->price = $_GET['p'];

            if(isset($_POST['submit']))
            {
              $this->checkIn = $_POST['check_in'];
              $this->checkOut = $_POST['check_out'];
              $this->date = date("Y:m:d");
              $bookName = $_POST['bookName'];

              if(isset($_POST['uname']))
              {
            $sql = "INSERT INTO room_reservation (id,customer_id,room_id,category,start_date,end_date,price,curr_date,booking_name) 
            VALUES (1,'$this->customer_id','$this->room_id','$this->category','$this->checkIn','$this->checkOut','$this->price','$this->date','$this->username')";
            $query = mysqli_query($conn->connection,$sql);

                	if($query)
                  {
                    $sql2 = "UPDATE room SET status = 'reserved' WHERE room_id ='$this->room_id'";
                    $query2 = mysqli_query($conn->connection,$sql2);

                      if($query2) { header("Location:myreservation.php"); }
                      else { die(mysqli_error($conn->connection)); }
                  }
                  else
                  {
                    die(mysqli_error($conn->connection));
                  }
            }
            else
            {
              $sql = "INSERT INTO room_reservation (id,customer_id,room_id,category,start_date,end_date,price,curr_date,booking_name) 
              VALUES (1,'$this->customer_id','$this->room_id','$this->category','$this->checkIn','$this->checkOut','$this->price','$this->date','$bookName')";
              $query = mysqli_query($conn->connection,$sql);
  
                    if($query)
                    {
                      $sql3 = "UPDATE room  SET status = 'reserved' WHERE room_id ='$this->room_id'";
                      $query3 = mysqli_query($conn->connection,$sql3);

                        if($query3) { header("Location:myreservation.php"); }
                        else { die(mysqli_error($conn->connection)); }

                    }
                    else
                    {
                      die(mysqli_error($conn->connection));
                    }

            }
          }
        }

      function display_reservation()
      {

      }

      function delete_reservation()
      {
        $conn = new Database_query();

        $reservation_id = $_GET['rid'];
        $sql = "DELETE FROM room_reservation WHERE reservation_id = '$reservation_id'";
        $query = mysqli_query($conn->connection,$sql);

        if($query)
        {
          header("Location:myreservation.php");
        }
        else
        { 
          die(mysqli_error($conn->connection));
        }
      }

      function password_reset()
      {
        $conn = new Database_query();

            if(isset($_POST["submit"]))
            {
              $uname = $_POST["uname"];

              $sql = "SELECT * FROM signup WHERE username = '$uname' OR email = '$uname'";
              $query = mysqli_query($conn->connection,$sql);
              if($query)
              {
                if(mysqli_num_rows($query) > 0)
                {
                  while ($row = mysqli_fetch_assoc($query))
                  {
                     $this->result = $row["customer_id"];
                  }
                  header("Location:reset.php?id=$this->result");
                }
                else
                {
                  $this->message = "Email or Useranme is wrong, please verify detail";
                  $_SESSION["message"] = $this->message;
                }
              }
              else
              {
                die(mysqli_error($this->conn));
              }
            }
       }

       function change_password()
       {
           $conn = new Database_query();
            $cid = $_GET["id"];

            if(isset($_POST['submit']))
              {
                $password1 = $_POST['password1'];
                $password2 = $_POST['password2'];

                if(empty($password1))
                {
                  $this->message = "Password field cannot be empty!";
                  $_SESSION["message"] = $this->message;
                }
                else if(!preg_match("/^[a-zA-Z0-9.@!*]*$/",$password1))
                {
                  $this->message = "Only characters such as . @ 1 * ! can be accepted!";
                  $_SESSION["message"] = $this->message;
                }
                else if(strlen($password1) < 8)
                {
                  $this->message = "Password must be at least 8 characters long";
                  $_SESSION["message"] = $this->message;
                }
                else if(empty($password2))
                {
                  $this->message = "Re-Type Password field cannot be empty!";
                  $_SESSION["message"] = $this->message;
                }
                else if($password1 != $password2)
                {
                  $this->message = "Passwords do not match";
                  $_SESSION["message"] = $this->message; 
                }
                else
                {
                $sql = "UPDATE signup SET password = '$password1', verify_password = '$password2' WHERE customer_id = '$cid'";
                $query = mysqli_query($conn->connection, $sql);

                if($query)
                {
                    header("Location:login.php?msg=password changed successfully.");
                }
                else
                {
                    echo "Querry failed!";
                }
              }
            }
         }
}
?>