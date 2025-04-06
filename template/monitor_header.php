<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./src/output.css">
  <link
    rel="stylesheet"
    href="https://unpkg.com/@material-tailwind/html@latest/styles.css" />
  <style>
    @media print {
      .no-print {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
      }

      .print\:border-black {
        border-color: black !important;
      }

      .print\:text-black {
        color: black !important;
      }

      .print\:border-none {
        border: none !important;
      }
    }

    #sig-canvas {
      border: 2px dotted #CCCCCC;
      border-radius: 15px;
      cursor: crosshair;
    }

    /* Blur effect outside the feedback container */
    .blur-background {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      backdrop-filter: blur(10px);
      z-index: -1;
    }
  </style>



  <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.1.5/dist/signature_pad.umd.min.js"></script>


</head>

<body id="body">

  <?php include("./__sql_connection.php"); ?>

  <?php include("./monitor_data.php"); ?>

  <?php include("./template/monitor_newfeedback.php") ?>