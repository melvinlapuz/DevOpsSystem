<?php
SESSION_START();
require_once 'dbcon.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$elemName = $_POST['elemName'];
$elemYear = $_POST['elemYear'];
$juniorName = $_POST['juniorName'];
$juniorYear = $_POST['juniorYear'];
$seniorName = $_POST['seniorName'];
$seniorYear = $_POST['seniorYear'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$sex = $_POST['sex'];
$dob = $_POST['dob'];
$phonenumber = $_POST['phoneNumber'];
$guardianName = $_POST['guardianName'];
$guardianPhoneNumber = $_POST['guardianPhoneNumber'];
$guardianAddress = $_POST['guardianAddress'];
$course = $_POST['course'];
$year = $_POST['year'];


$sql = "INSERT INTO enroll (username, password, email, elemName, elemYear, juniorName, juniorYear, seniorName, seniorYear, lastname, firstname, middlename, sex, dob, phonenumber, guardianName, guardianPhoneNumber, guardianAddress, course, year)
VALUES ('$username', '$password', '$email', '$elemName', '$elemYear', '$juniorName', '$juniorYear', '$seniorName', '$seniorYear', '$lastname', '$firstname', '$middlename', '$sex', '$dob', '$phonenumber', '$guardianName', '$guardianPhoneNumber', '$guardianAddress', '$course', '$year')";

if ($conn->query($sql) === TRUE) {
  $_SESSION['status'] = "Enrollment Successful";
  header("Location: ../enroll.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>