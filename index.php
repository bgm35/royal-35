<?php 
//reads the variables sent via post
$sessionid = $_POST["sessionid"];
$servicecode =$_post["service code"];
$text = $_post["text"];

if ($text ==") {
  //this is the first menu screen
  $response ="con choose airtime or data toconvert \n";
  .="1. airtime R1 fee \n";
  $response .="2. data R1 fee \n";


}  else if ($text =="1") {
  $response ="con choose the amount of airtime you have to convert \n";
   .="1. R5-R1 \n";
  $response .="2. R12-R1 \n";
  $response .="3. R29-R1 \n";
  $response .="4. R55-R1 \n";


}  else if($text =="1*1") {
  $response ="con please enter your account number \n"; 
  $response ="type you account number but must start with 3549 \n";
  data_approved (text)

}  else if ($text =="1*13549") {
  $response ="con R5 will be convert and the money will be sent to this
  account number 3459... .R1 will be deducted from the money you will
  be getting \n";
  $response .="1. confirm \n";
  $response .="2. cancel \n"; 

} elseif ($text =="1*1*3459*1") {
  $response ="end your airtime has been convert thank 
  you dear costomer";

} else if ($text =="1*1*3459*2") {
  $response ="end your airtime convertion has been canceled";


} else if ($text =="1*2") {
  $response ="con please enter your account number \n";
  $response ="type your account number but can your no start with 3459 
  data_approved (text)

} else if ($text =="1*2*3459") {
  $response ="con R12 will be converted and the money will be sent to this
  account number 3459... .R1 will be deducted from the money you will be
  getting \n";
  $response .="1. confirm \n";
  $response .="2. cancel \n";
  

}else if ($text =="1*2*3459*2") { 
  
  $response ="end your airtime convert has been cancel";
 
  
} else if ($text =="1*3") {
  
  $response ="con please enter your account number \n";
  $response ="type your account number but your no must start with 3459 data_approved (text) \n";
  
} else if ($text =="1*3*3549") {
  $response ="con R29 will be convert and the money will be sent to this account number 3547... 
  .R1 will be deducted from money you will get \n";
  $response .="1. confirm \n";
  $response .="2. cancel \n";

}else if ($text =="1*3*3549*1")
  $response ="end your airtime has been converted thank you dear customer";

}else if ($text =="1*3*3549*1") {
  $response ="end your airtime has been converted thank you dear customer";


}else if ($text =="1*4") {
  $response ="con please enter you account number \n";
  $response ="type your account number but your no must start with 3549\n";
  data_approved (text)
  

}else if ($text =="1*4*3549") {
  $response ="con R55 will be convert and the money will be sent to this account number 3549... 
  .R1 will be deducted from the money you will be getting \n";
  $response .="1. confirm \n";
  $response .="2. cancel \n";

} else if ($text =="1*4*3549*1") {
  $response ="end your airtime has been convert thank you dear customer";
  
} else if ($text =="1*4*3549*2") {
  $response ="end your airtime convertion has been canceled";


} else if ($text =="2") {
  //business logic for the first loved response
  $response .="con choose the amount of data you would like to convert to money \n";
  $response .="1. 550mb=R55-R1 \n";
  $response .="2. 1000mb=R100-R1 \n";
  $response .="3. 1500mb=R150-R1 \n";
  $response .="4. 2000mb=R200-R1 \n";

} else if ($text =="2*1") {
  $response ="con please enter your account number \n";
  $response ="type you account number but your no must start with 3549 \n";
  data_approved (text)
  
} else if ($text =="2*1*3549*") {
  $response ="con 50mb will be converted and the money will be sent to this acount number 3549...
  R1 will be deducted from the money you will be getting \n";
  $response ="1. confirm \n";
  $response ="2. concel \n";

} else if ($text =="2*1*3549*1") {
  $response ="end your data has been convert thank you dear customer";

} else if ($text =="2*1*3549*2") {
  $response ="end your data convertion has been canceled";

} else if ($text =="2*2") {
  $response ="con please enter your account number \n";
  $response ="type your account number but your no must start with 3549 \n";
  data_approved (texy)

} else if ($text =="2*2*3549") {
  $response ="con 100mb will be converted and money will be sent to this account number 
  3549... .R1 will be deducted from the money you will be getting \n"; 
  $response ="1. confirm \n";
  $response ="2. concel \n";


} else if ($text =="2*2*3549*1") {
  $response ="end your data has been convertion thank you dear customer ";

} else if ($text =="2*2*3549*2") {
  $response ="end your data has been converted has been conceled ";


} else if ($text =="2*3") {
  $response  ="con please enter your account number \n";
  $response ="type your account number but your account number must start with 3549 \n";
  data_approved (text)

} else if ($text =="2*3*3549") {
  $response ="con 150mb will be converted and the money will be sent to this account number 
  3549... .R1 will be deducted from the money you will be getting \n";
  $response ="1. confirm \n";
  $response ="2. cancel \n";


}  else if ($text =="2*3*3549*1") {
  $response ="end your data has been convert thank you dear customer ";
  
}else if ($text =="2*3*3549*2") {
  $response ="end you data convertion has been canceled ";


} else if ($text =="2*4") {
  $response ="con please enter your account number \n";
  $response ="type your account number but your account number must start with 3549 \n";
  data_approved (text)

}  else if ($text =="2*4*3549") {
  $response ="con 200mb will be converted and the money will be sent to this account number 3549...
  .R1 will be deducted from the money you will be getting \n";
  $response ="1. confirm \n";
  $response ="2. cancel \n";

} else if ($text =="2*4*3549*1") {
  $response ="end your data has been converted thank you dear customer ";

}  else if ($text =="2*43549*2") {
  $response="end your data convertion has been cancel ";

  //echo the response to the api. the response depends on the is fulfiilled in each intance
  header("content=type; text/plain");
  echo $response;

?>