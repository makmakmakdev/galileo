<?php

$newfile = fopen("hello_there.php", "w"); //create a new file
$content = 
"<?php\n" . 
"\n" .
"// This is a comment\n" .
"\n" .
"echo \"This is a test page!\";\n" .
"echo \"Exam number two!\";\n" .
"\n" .
"// This is end of a comment";

fwrite($newfile, $content); //add the content
fclose($newfile); //close the file

?>