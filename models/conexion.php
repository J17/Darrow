<?php  
   define ("SERVIDOR","localhost");  
   define ("USUARIO","root");  
   define ("PASS","");  
   define ("BASE","students");  
class Conexion{  
   private $conn;  
   public function __construct()  
   {  
       $this->conn=mysql_connect(SERVIDOR,USUARIO,PASS)  
                   or die("Imposible conectar con ". SERVIDOR);  
       mysql_select_db(BASE,$this->conn) or die(BASE." no existe...");  
   }  
   public function __destruct()  
   {  
       mysql_close($this->conn);  
   }  
   public function consulta($sql)  
   {  
       return mysql_query($sql,$this->conn);  
   }  
}  
?> 
