<?php
/* disp_servepdf.php
 getHrefPage generates markup for the link to a program which displays a pdf, as
 specified by the  input argument '$data'.
 In this implementation, the program which serves the pdf is
 $serve = ../webtc/servepdf.php.
 $data is assumed to be a string with a comma-delimited list of page numbers,
 only the first of which is used to generate a link.
 The markup returned for a given $lnum in the list $data is
   <a href='$serve?page=$lnum' target='_Blank'>$lnum</a>
 It is up to $serve to associate $lnum with a file.

*/
function getHrefPage($data) {
 $ans="";
 $lnums = preg_split('/,/',$data);
 $serve = "../webtc/servepdf.php";
 foreach($lnums as $lnum) {
  if ($ans == "") {
   //$hrefcur = getHrefPage_helper1($lnum);
   //$args="page=$hrefcur";
   $args = "page=$lnum";
   $ans = "<a href='$serve?$args' target='_Blank'>$lnum</a>";
  }else {
   $ans .= ",$lnum";
  }
 }
 return $ans;
}
?>