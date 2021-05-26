<html>
  <head>
    <title>Palindrome Checker</title>
    <style>
body{
  background: rgb(65, 67, 83);
  margin-left: 20%;
  margin-top: 20%;
  
}
.input{
  color: white;
width: 300px;
height: 200px;

}

fieldset{
border-radius: 8%;
}





      </style>
</head>

<body>    
<form action="" method="POST">

<div class=input>

<fieldset>
    <legend>Palindrome Checker</legend>
  <input type="text" name="word"/>
  <input type="submit" name="SubmitButton" value="Check!"/>
</fieldset>

</div>

<?php



if(isset($_REQUEST['SubmitButton'])){

  $string=($_POST["word"]);
  $revword=strrev($string);

  
    if ($string == $revword){
        echo  "true" ;
      }
    else {
      echo "false" ;
  }

  
}

  ?>
  




  </form>    




</body>
</html>