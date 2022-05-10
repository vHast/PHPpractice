<?php

  //String concatenation uses the period (.) to append one STRING of characters to another

  $msgs = 5;
  echo "You have " . $msgs . " messages."; // You have 5 messages.

  // You can also append oen string to another string using (.=), like this

  $bulletin = "The news are:";
  $newsflash = " a bird has flown today.";
  $bulletin .= $newsflash; // The news are:  a bird has flown today.

  /* String types */

  // PHP supports two types of strings that are denoted by the type of quoteation mark that you use, if you wish to assign a LITERAL string, preserving the exact contents, you should use SINGLE QUOTEATION MARKS, like this

  $info = 'Preface variables with a $ like this: $variable';

  // Every character within the quote is assigned to $info, if you had used double quotes, PHP would have attempted to evaluate $variable as a variable

  // When you want to include the value of a variable inside a string, you do so by using double-quoted strings.

  echo "This week $msgs people have viewed your profile" // This week 5 people have viewed your website

  /* Escaping characters */

  // $text = 'My spelling's atroshus;
  // To correct this you can add a backlash directly before the offending quotation mark to tell PHP to treat the character literally and not to interpret it

  $text = 'My spelling \'s still atroshus';

  $anothertext = "She wrote upon it, \"Return to sender\".";

  // You can also escape characters to insert various special characters into strings, such as tabs, newlines and carraige returns, these are represented as \t, \n, and \r

  $heading = "Date\tName\tPayment";

  // These special backslash characters work only in DOUBLE-QUOTED strings.
  
?>