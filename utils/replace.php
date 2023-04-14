<?php
  $string = "Tasdasdas -  (textoaasdadasdasabcdefg           ) enclosed in parentheses.  ";
  $pattern = "/^.*\(([^)]+)\).*$/"; // Regular expression to match only the text inside parentheses

  $result = preg_replace($pattern, "$1", $string);
  $result = trim($result); // Remove any trailing spaces

  echo $result.$result; // Output: text
  
 substr(trim($result), -4);

    session_start();
    echo "<h3> PHP List All Session Variables</h3>";
    foreach ($_SESSION as $key=>$val)
    echo $key." ".$val."<br/>";

?>
