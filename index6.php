<!DOCTYPE html>
<html lang="en">
<head>
  <?

  error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
  ?>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <?
       echo "<pre>";
        $db = mysql_connect('mysql.hostinger.ru', 'u373939437_user', '123qwe');
        mysql_select_db('u373939437_db', $db);
        mysql_query('SET character_set_database = `UTF-8`');
        mysql_query("SET NAMES 'utf8'");

         $rez = mysql_query("select * from  oc_news n , oc_news_description d where n.news_id=d.news_id ") or print (mysql_error());
   echo "<pre>";
 
          $data = array();
              $i = 0;
              while ($row = @mysql_fetch_assoc($rez)) {

                  $data[$i] = $row;

                  $i++;
              }


          var_dump($data);

        mysql_close();
         
        $db = mysql_connect('mysql.hostinger.ru', 'u373939437_user2', '123qwe');
        mysql_select_db('u373939437_db2', $db);
        mysql_query('SET character_set_database = `UTF-8`');
        mysql_query("SET NAMES 'utf8'");

       //   $rez = mysql_query("select `imgs` from `items`where `imgs` like '%/ %' ") or print (mysql_error());
     
           
                  $data = array();
                      $i = 0;
                      while ($row = @mysql_fetch_assoc($rez)) {

                          // $data2 = @mysql_fetch_assoc(mysql_query("select keyword from  oc_url_alias a where a.query = 'category_id=".$row['category_id']."'"));
                         
                          // $row['keyword'] = $data2['keyword'];
                          $data[$i] = $row;

                          $i++;
                      }
                      
                      foreach ($data as  $value) {
                        //  $type =  substr($value['imgs'], -4);
                 //         $name = $value['imgs'];
                   //       print_r($value['imgs']);
                          echo "</br>";
                       //   $value['imgs'] = substr($value['imgs'], 0 , -4).'-500x500'.$type;
                       $value['imgs'] = preg_replace("/\/\s+/",'/', $value['imgs']);  

                  //     print_r($value['imgs']);
                       echo "</br>";  
      
                      }



  mysql_close();


  ?>
  
</body>
</html>