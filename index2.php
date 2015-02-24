<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php 
 function chack_where($where){

         $where = preg_replace("/'+/",'`', $where);
         $where = preg_replace("/`+/",'`', $where);
         $pos =  strripos($where, 'union');
         return ( ($pos =='') ?false:true);

  }

  function chack_input($fielde){
          
        $result = array();

        if(is_array($fielde)){
 
            foreach ($fielde as $key_row => $row) {
                  
                  if(is_array($row)){
                       foreach ($row as $k => $value){
                        $value = str_replace("'","`",$value);
                        $result[$key_row][$k] = mysql_real_escape_string($value);
                       }
                    }
                    else{
                        $result[$key_row] = mysql_real_escape_string(str_replace("'","`",$row));
                    } 
            }
          
            return $result;

        }
        else{
          $fielde = mysql_real_escape_string(str_replace("'","`",$fielde));
          return trim($fielde);
        }
    }

if($_POST['submit']) { 
    
 
   $mas['val'] = array($_POST['mess'],2,3);
   $mas['kind'] = array(4,5,6);
    
    $mas2 = chack_where($_POST['mess']); 
   //var_dump($mas2);
   
} 
?> 


<form action="" method=post> 

              <div align="center"> 
              <textarea name="mess" rows="10" cols="40"></textarea> 
              <br /> 
              <input type="submit" value="send" name="submit"></div> 
</form> 
</body>
</html>







<?

    // $_POST['title'] содержит данные из поля "Тема", trim() - убираем все лишние пробелы и переносы строк, htmlspecialchars() - преобразует специальные символы в HTML сущности, будем считать для того, чтобы простейшие попытки взломать наш сайт обломались, ну и  substr($_POST['title'], 0, 1000) - урезаем текст до 1000 символов. Для переменной $_POST['mess'] все аналогично 
      //   $title = substr(htmlspecialchars(trim($_POST['title'])), 0, 1000); 
      //   $mess =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 1000000); 
      //   // $to - кому отправляем 
      //   $to = 'neon4215@gmail.com'; 
      //   // $from - от кого 
      //   $from='test@test.ru'; 
      // if(  mail("neon4215@gmail.com", "My Subject", "Line 1\nLine 2\nLine 3"))
      //  // mail($to, $title, $mess, 'From:'.$from); 
      //   echo 'Спасибо! Ваше пиsсьмо отправлено.'; 

?>