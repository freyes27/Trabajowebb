<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
<link rel ="stylesheet" href="PaginaEstilo.css">
<script src ="Rut.js"></script> 
    <head>
        <meta charset="UTF-8">
        <title>Validacion De Rut </title>
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-text">
            <h1>Validacion Rut</h1>
</span>           
</nav>
</header>     
 <content>
    <div id="container">
     <p>&nbsp;</p>
     <div class="input-group input-group-lg">
         <form action="Trabajo.php" method="GET"
         onsubmit="return checkrut(this.Rut, this.CodVerificador)"> 
         <input type ="text" id="Rut" name="Rut" required>
         <a>--</a>
         <input type="text" id="CodVerificador" name="CodVerificador" required>
         <input type="submit" value="validar">
         </form>  
 </content>
          
        
    </body>
</html>
