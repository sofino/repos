<!DOCTYPE html>
<html lang="en">
<head>
  <?

  error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
  ?>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
  <title>Document</title>
</head>

<body>
  <?
        $db = mysql_connect('localhost', 'root', '');
        mysql_select_db('free_opencart', $db);
        mysql_query('SET character_set_database = `UTF-8`');
        mysql_query("SET NAMES 'utf8'");


$rez = mysql_query("select c.category_id , c.parent_id , d.name from oc_category c , oc_category_description d where c.category_id=d.category_id ") or print (mysql_error());

 
   $data = array();
            $i = 0;
            while ($row = @mysql_fetch_assoc($rez)) {
                $data[$i] = $row;
                $i++;
            }



       echo "<pre>";
       var_dump($data);
       echo "</pre>";
  ?>
  
</body>
</html>