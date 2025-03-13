<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/output.css">
    <link
  rel="stylesheet"
  href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"
/>
</head>

<body id="body">

<?php include("./__sql_connection.php"); ?>

<?php include("./student_data.php"); ?>

<?php include("./template/student_newfeedback.php"); ?>

