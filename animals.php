<!DOCTYPE html>
<!--
FILE               : animals.php
PROJECT            : PROG2001 - Assignment #3
PROGRAMMER         : Andrea Ferro  
FIRST VERSION      : 2021-10-11
DESCRIPTION        :
       This files contains the server-side logic to greet the user after they choose an animal from the Zoo! 
       The files receives the values the client-side sent through the form with the post method. Using the
       receive values, the user will get salutation that includes its name and chosen animal with a small description 
       of the animal. The server-side for this logic is made with html and php.
-->

<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SET Zoo</title>

    <!--
      Title: Bootstrap Style Sheets
      Author: @mdo and @fat
      Date: August 19, 2015.
      Version: 2015 - 09 - 19
      Availability: https://getbootstrap.com/docs/5.1/getting-started/introduction/
    -->

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    /> <!-- Using Bootstrap 4 for styling -->

    <!-- Internal Style for the salutation message for the user -->
    <style>
      body {
        background-color: #e5e5e5;
      }
      .salutation {
         margin-left: 33%;
         margin-right: 33%;
         margin-top: 3%;
         font-size: large;
         text-align: center;}

      .salutation span {
          font-weight: bold;
          color:#2e3c52;
      }

      .myContainer {
        margin: 7%;
        display: flex;
        align-items: center;
        border: 2px solid #343a40;
        background-color: white;
      }
      .btn {
        background-color: #242f40;
      }

      .animal h4 {
          text-decoration: underline;
          margin-bottom: 1em;
      }

      .animal p {
          font-size: 18px;

      }

      img {
          margin-right: 2em;
      }
    </style>

    </head>

<body>

<!-- Salutation to the user using php to show its name using the receive values from the previously submitted form -->
<div class="salutation">
<h3>Welcome to SETZoo, <span><?php echo $_POST["theName"]; ?>!</span></h3> <br> <br> <!-- PHP script that prints the user name on the screen-->
    The animal that you picked is a: <span><?php echo $_POST["userAnimal"]; ?></span> <br> <br>
    <!--  PHP script that shows the chosen animal by the user on the screen -->
    </div>

<div class="myContainer d-flex justify-center rounded">

    <?php

    $userAnimal = $_POST["theAnimal"]; /// Saves the chosen animal to compare against the selection to see which one needs to be showed in the salutation

    if ($userAnimal == "Rabbit") { // User likes Rabbits
        $fp = fopen("theZoo/rabbit.txt", "r"); // Opens the text file that has all the information about the rabbit for lecture only
        while (!feof($fp)) { // Are we in the end of file?
            $line = fgets($fp); // Gets the contents of the text file (text files are previously formatted to match the style of the web page)
            echo $line; // Prints the current line
        }
        fclose($fp); // Closes the the file
    }

    if ($userAnimal == "Fox") { // Users likes Foxes
        $fp = fopen("theZoo/fox.txt", "r"); // Opens the text file that has all the information about the fox for lecture only
        while (!feof($fp)) { // Are we in the end of file?
            $line = fgets($fp); // Gets the contents of the text file (text files are previously formatted to match the style of the web page)
            echo $line; // Prints the current line
        }
        fclose($fp); // Closes 
    }

    if ($userAnimal == "Panda") { // Users likes Pandas
        $fp = fopen("theZoo/panda.txt", "r"); // Opens the text file that has all the information about the panda for lecture only
        while (!feof($fp)) { // Are we in the end of file?
            $line = fgets($fp); // Gets the contents of the text file (text files are previously formatted to match the style of the web page)
            echo $line; // Prints the current line
        }
        fclose($fp); // Closes
    }

    if ($userAnimal == "Tiger") { // User likes Tigers
        $fp = fopen("theZoo/tiger.txt", "r"); // Opens the text file that has all the information about the Tiger for lecture only
        while (!feof($fp)) { // Are we in the end of the file?
            $line = fgets($fp); // Gets the contents of the text file (text files are previously formatted to match the style of the web page)
            echo $line; // Prints the current line
        }
        fclose($fp); // Closes the file
    }

    if ($userAnimal == "Wolf") { // User likes Wolves
        $fp = fopen("theZoo/wolf.txt", "r"); // Opens the text file that has all the information about the wolf for lecture only
        while (!feof($fp)) { // Are we in the end of file?
            $line = fgets($fp); // Gets the contents of the text file (text files are previously formatted to match the style of the web page)
            echo $line; // Prints the current
        }
        fclose($fp); // Closes
    }

    if ($userAnimal == "Axolotl") { // User likes Axolotls
       
        $fp = fopen("theZoo/axolotl.txt", "r"); // Opens the text file that has all the information about the Axolotl for lecture only
        while (!feof($fp)) { // Are we in the end of the file?
            $line = fgets($fp); // Gets the contents of the text file (text files are previously formatted to match the style of the web page)
            echo $line; // Prints the current line
        }
        fclose($fp); // Closes the file
    }

    ?>
</div>
    <!--Javascript references for the use of Bootstrap JS 
    Bootstrap recommends to include this scripts right before the closing body tag-->
<script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
></script>
</body>
</html>