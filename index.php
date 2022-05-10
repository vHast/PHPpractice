<?php
  // Comment

  /* Multi-line
    Comment */

  echo "Hello world";   //Pritns Hello World

  // In PHP you must place a $ in front of all variables

  $mycounter = 1;
  $mystring = "Hello";
  $myarray = array("One", "Two", "Three");

  // We can also assign the variable to a different one

  $current_user = $username;


  // In order to invoke a variable

  echo $mystring;

  // In order to invoke an element of an array

  echo $myarray[1]; //This will display Two, since it's ZERO INDEX BASED

  $myTwoDimArray = array(array( 1, 2, 3 ), array( 4, 5, 6 ), array(7, 8, 9));

  echo $myTwoDimArray[1][2]; // This will return 6

  // Variable naming rules
  /* Variable names, are CASE-SENSITIVE, may NOT CONTAINT SPACES, andcan only contain characters a-z, A-Z, 0-9 and _ */

  //Variable ASSIGNMENT

  $x += 10; // Tells the PHP parser to add the value on the right to the variable $x

  $y -= 10; // Tells the PHP parser to substract the value on the right to the variable $y

  //Variable INCREMENTING AND DECREMENTING

  ++$x; // This will add 1 to the value of $x
  --$y; // This will substract 1 to the value of $y

  if (++$x == 10) echo $x;

  /* This tells PHP to FIRST increment the value of $x by 1 and then to test wether it has the value 10, if it does, to output its value */

  if ($y-- == 0) echo $y;

  /* Now it will test the value of $y before substracting, once tested, it will proceed to subsctract 1 */



?>