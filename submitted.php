<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registered</title>
        <link rel="shortcut icon" href="csi.png">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
      html {
          scroll-behavior: smooth;
          background: url("https://www.acpce.org/en/wp-content/uploads/2017/06/csi-logo.png");
          background-position: center;
          background-repeat: no-repeat;
      }
      body {
        align-items: center;
        text-align: center;
        justify-content: center;
        height: 100vh;
        font-size: 2rem;
      }
      html:before {
        opacity: 50%;
      }
      img {
        height: 30vh;
        width: 100vw;
      }
      a {
          width: 30%;
          background: #0048ff;
          background-image: -webkit-linear-gradient(top, #0048ff, #392bb8);
          background-image: -moz-linear-gradient(top, #0048ff, #392bb8);
          background-image: -ms-linear-gradient(top, #0048ff, #392bb8);
          background-image: -o-linear-gradient(top, #0048ff, #392bb8);
          background-image: linear-gradient(to bottom, #0048ff, #392bb8);
          text-shadow: 1px 1px 3px #666666;
          font-family: Arial;
          color: #ffffff;
          font-size: 15px;
          padding: 5px 10px 5px 10px;
          text-decoration: none;
          border: 0;
          border-radius: 8vh;
          height: 5vh;
          font-size: 30px;
          position: absolute;
          left: 35%;
          bottom: 5%;
        }

        a:hover {
          background: #ff00ff;
          background-image: -webkit-linear-gradient(top, #ff00ff, #392bb8);
          background-image: -moz-linear-gradient(top, #ff00ff, #392bb8);
          background-image: -ms-linear-gradient(top, #ff00ff, #392bb8);
          background-image: -o-linear-gradient(top, #ff00ff, #392bb8);
          background-image: linear-gradient(to bottom, #ff00ff, #392bb8);
          text-decoration: none;
        }
    </style>
  </head>
  <body>
    <?php
      $name = $_POST['name'];
      $jntuno = $_POST['jntuno'];
      $email = $_POST['email'];
      $dept = $_POST['dept'];
      $year = $_POST['year'];
      $sec = $_POST['sec'];
      $phno = $_POST['phno'];
      $cmember = $_POST['cmember'];
      if($cmember == 'y') {
        $tranid = 0;
      } else {
        $tranid = $_POST['tranid'];
      }

      $conn = new mysqli("localhost", "root", "", "alphageek");
      $sql1 = "INSERT INTO reg values('".$name."', '".$jntuno."', '".$email."', '".$dept."', '".$year."', '".$sec."', '".$phno."', '".$tranid."');";
      $res1 = $conn->query($sql1);
      if($res1 == true) {
        echo "<br><br><h1 data-aos='slide-right'>Registered successfully</h1>";
      } else {
        echo "<h1 data-aos='slide-right'>Sorry, We have encountered a problem. Please meet your class CSI Coordinator</h1>";
      }
    ?>
    <a href="https://linktr.ee/CSI_GMRIT">Follow us</a>
  </body>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</html>
