<?php
$dir = opendir ("/");
while (false !== ($file = readdir ($dir))) {
   if ($file == '.' || $file == '..') continue;
    $files[] = $file;
}
closedir ($dir);
sort($files);
for ($i=0; $i<count($files);$i++)
  echo $files[$i].PHP_EOL;
?>

