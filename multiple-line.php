<?php

// You can put multiple lines between quotes

  $author = "Steve Ballmar";

  echo "Developers, developers, developers, developers, developers, developers!

  - $author.";

  // Multi-line string assignment

  $billgates = "Bill Gates";

  $text = "Measuring programming progress by lines of code is like
  Measuring aircraft building progress by weight.
  
  - $billgates";

  /* The >>> operator (here-document or heredoc*/

  // This is a way of specifying a string literal, preserving the line breaks and other whitespace (including indentation) in the text.

  $heredoc_operator = "Brian W. Kernighan";

  echo <<<_END
  Debugging is twice as hard as writing the code in the first place.
  Therefore, if you write the code as cleverly as possible, you are,
  by definition, not smart enough to debug it.

  - $heredoc_operator.
_END;

  // This keyword tells PHP to output everything between the two _END tags as if it were a double-quoted string, you are not allowed to enter comments inside of it, once you have closed the block, you are free to use the same tag name again.

  $newauthor = "Scott Adams";

  $out = <<<_END
  Normal people believe that if it ain't broke, don't fix it.
  ENgineers believe that if it ain't broke, it doesn't have enough
  features yet.

  - $author.
_END;
  echo $out;

  // Laying out text over multiple lines is just for making your PHP code easier to read, once it is displayed in a web page, HTML formatting rules will take over and whitespace is suppressed
?>