<?php 
function link_clickable($text_main){
                             
                            $text1="";
                           $text_line = explode(" ",$text_main);
                           $count=0;


                          for($i=0;$i<count($text_line);$i++)
                          {
                             if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$text_line[$i])) { 

                    $url_explode = explode(":",$text_line[$i]);
   
             if($url_explode[0]=='http' || $url_explode[0]=='https')
         {
          
          
           $replace="<a style='color:blue;' href=".$text_line[$i]." target='_blank' >".$text_line[$i]."</a>";
         }
      else
       {
         
         $replace="<a style='color:blue;' href='http://".$text_line[$i]."' target='_blank' >".$text_line[$i]."</a>";
       }

    
       $text_line[$i]=$replace;

                              
                             }
                          }

    return   implode(" ",$text_line);
  }

function short_text($text,$length)
{
$string = strip_tags($text,$length);
if (strlen($string) > $length) {

    // truncate string
    $stringCut = substr($string, 0, $length);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '..';
}
return  $string;
}


 ?>