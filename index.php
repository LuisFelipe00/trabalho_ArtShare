<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title> ARTHSHARE </title>
   <style type="text/css">
      body{
         background-color: LightGray;
         display: flex;
         justify-content: center;
      }
      form{
         border: solid 3px Black;
         border-radius: 25px;
         font-size: 20px;
         font-family: Verdana, sans-serif;
         text-align: center;
         height: 195px;
         width: 495px;
      }
      button{
         background-color: LightBlue;
         border: 1px DarkBlue solid ;
         font-family: Verdana, sans-serif;
         border-radius: 25px;
      }
      input{
         background-color: LightYellow;
         font-family: Verdana,sans-serif;
      }
   </style>
</head>
<body>
   <form action= "upload.php" enctype="multipart/form-data" method="post">
   	<p> Seu Nome: <input type="text" name="nome"></p>
      <p> Sua cidade e estado: <input type="text" name="cidade"></p>
   	 <input type="file" name="arquivo">
   	 <p>
   	 	<button type="submit"> Enviar Arquivos! </button>
   	 </p>
   </form>
</body>
</html>