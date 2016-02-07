<?php
   $a=rand (0,100);
   if ($a%2==0){
   	echo '$a=' .$a. "even";
   }elseif ($a%2 !=0){
   	echo '$a=' .$a."Odd";
   }else{
   	echo '$a=' .$a.'$a=0';
   }