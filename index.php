<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSI FORM</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/22e41c381f.js" crossorigin="anonymous"></script>
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Cascading Style Sheet -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="header">
        <img src="https://www.google.com/search?q=csi+logo+png&sxsrf=AOaemvJb9wJpRTm5UA60frmGd2gzo-ikWg:1638335716477&tbm=isch&source=iu&ictx=1&fir=UjhgbmjL0ZmKBM%252CMqkkwUzSfQomsM%252C_%253BXOYY_KlWqJBE3M%252Cjuz20TzG9nmzgM%252C_%253BvkGo27nm7ypBVM%252CgPJooP2yeRht-M%252C_%253BGl44S16UFoprCM%252CdY5oZSQ9dRtNzM%252C_%253B-7MpUh1XWi2UmM%252C8seOy5Pm89odMM%252C_%253BhtPd-mm6CSo6uM%252Cws17ODdnRqfJNM%252C_%253B3MfGQmHTUXIrJM%252CDcTcmFByki4SAM%252C_%253BzlNaTGI9a1mceM%252C019-MJrWVqNgGM%252C_%253Bg4DfvWVK-U3BOM%252CWEfJMElcDLHVmM%252C_%253BwZ4ewGC7KDyW2M%252Cm3VBoFlUEg6QjM%252C_%253B8Qp15vc_qJraSM%252CuMDcqeWdILWgQM%252C_%253BkUie_5P0xKVZ5M%252CjDfXiShlJHBWqM%252C_%253BYrFduYVW_cxGkM%252C9Hk-LXeirgYS8M%252C_%253Blm3VwxsgpL_9MM%252CgU8EmjxVXV_l3M%252C_&vet=1&usg=AI4_-kT2DLtHAnzCGnygqYAUYKWNYIf0gA&sa=X&ved=2ahUKEwj3y5yT7MH0AhVVIaYKHcxNB-oQ9QF6BAgMEAE#imgrc=g4DfvWVK-U3BOM" alt="">    
    </div>

    <h1> <span style="font-size: 80px;">&alpha;</span> Geek </h1> 
        <form action="" class="slide-right">
            <div>
                <p>Name:</p> 
                <input type="text">
            </div>
            <br>
            <div>
                <p>JNTU No: </p> 
                <input type="text">
            </div>
            
            <br>
            <div>
                <p>Email ID: </p> 
                <input type="email">
            </div>
            
            <br>
            <div>
                <p>Department: </p> 

                <select name="dept" id="dept">
                    <option value="CSE">Computer Science Engineering</option>
                    <option value="IT">Information Technology</option>
                </select>
            </div>

            <br>
            <div>
                <p>Year of Study: </p> 
                <select name="year" id="year">
                    <option value="1">1st year</option>
                    <option value="2">2nd year</option>
                    <option value="3">3rd year</option>
                    <option value="4">4th year</option>
                </select>
            </div>

            <input type="submit" class="submit">
        </form>
</body>
</html>