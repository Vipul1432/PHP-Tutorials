<!-- Single Line Comment: -->
<?php
   # This is a comment, and
   # This is the second line of the comment

   // This is a comment too. Each style comments only
   print "An example with single line comments";
?>
<!-- 𝑀𝑢𝑙𝑡𝑖-𝑙𝑖𝑛𝑒𝑠 𝑐𝑜𝑚𝑚𝑒𝑛𝑡𝑠 − -->
<?php
   # First Example
   print <<<END
   This uses the "here document" syntax to output
   multiple lines with $variable interpolation. Note
   that the here document terminator must appear on a
   line with just a semicolon no extra whitespace!
   END;
   
   # Second Example
   print "This spans
   multiple lines. The newlines will be
   output as well";
?>

<?php
   /* This is a comment with multiline
      Author : Mohammad Mohtashim
      Purpose: Multiline Comments Demo
      Subject: PHP
   */
   
   print "An example with multi line comments";
   
?>

<?php
// PHP code illustrate the whitespace insensitivity
$var1		 =	 15;
$var2 =
30;
$sum = $var1
+
$var2;

// "\n" for new line
echo $sum, "\n";

$sum1 = $var1 + $var2;
echo $sum1;
?>

      <?php
         $capital = 67;
         print("Variable capital is $capital<br>");
         print("Variable CaPiTaL is $CaPiTaL<br>");
      ?>