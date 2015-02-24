            <?php
               
               $name =  (trim($_POST['name']));
               $tel  =  strip_tags(trim($_POST['tel']));
 $name2 = preg_replace("#( |\n|^)(http://)?[0-9a-z_.-/]+?[^@][0-9a-z_.-/]+\.[a-z]{2,4}#is", "",  $name );
 $tel2 = preg_replace("#( |\n|^)(http://)?[0-9a-z_.-/]+?[^@][0-9a-z_.-/]+\.[a-z]{2,4}#is", "",  $tel );
              
              
              $resalt ="";
              if($name2 != $name || $tel != $tel2 ){
              	$resalt = "";
              }
              else {
                 $resalt = "$name </br> $tel";
              }
                              echo $resalt;

              ?>