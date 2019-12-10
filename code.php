<?
$rech=$_POST['t_rechercher'];
$nom=$_POST['t_nom'];
$ref=$_POST['t_ref'];
$marque=$_POST['t_marque'];
$type=$_POST['t_type'];
$cn=mysql_connect("localhost","root");
mysql_select_db("ma_base",$cn);
 if (isset($_POST['rechercher']))
{
$req="select * from  t_produit where nom='$rech'";
 
mysql_query($req);
$res=mysql_query($req,$cn);
$enrg=mysql_fetch_row($res);
 
 if ($enrg[0] == $rech)
{
 
   echo "<form id='form1' name='form1' method='post' action='code.php'>
    <table width='420' border='0'>
   <tr>
     <td width='169' bgcolor='#CCFF00'><label>
    <input name='rechercher' type='submit' id='rechercher' value='Rechercher' />
     </label></td>
     <td width='369' bgcolor='#CCFF00'><label>
    <input name='t_rechercher' type='text' id='t_rechercher' value='$enrg[0]' />
     </label>Recherche par nom</td>
   </tr>
   <tr>
     <td>Nom</td>
     <td><label>
    <input name='t_nom' type='text' id='t_nom'  value='$enrg[0]'/>
     </label></td>
   </tr>
   <tr>
     <td>Ref</td>
     <td><label>
    <input name='t_ref' type='text' id='t_ref' value='$enrg[1]' />
     </label></td>
   </tr>
   <tr>
     <td>Marque</td>
     <td><label>
    <input name='t_marque' type='text' id='t_marque' value='$enrg[2]' />
     </label></td>
   </tr>
   <tr>
     <td>Type</td>
     <td><input name='t_type' type='text' id='t_type' value='$enrg[3]' /></td>
   </tr>
   <tr>
     <td colspan='2'><label>
    <input name='nouveau' type='reset' id='nouveau' value='Nouveau' />
    <input name='ajouter' type='submit' id='ajouter' value='Ajouter' />
    <input name='modifier' type='submit' id='modifier' value='Modidier' />
    <input name='supprimer' type='submit' id='supprimer' value='Supprimer' />
     </label></td>
   </tr>
    </table>
    <p> </p>
  </form>";
}
  else
   {
  echo '<body onLoad="alert('Produit introuvable...')">';
  echo '<meta http-equiv="refresh" content="0;URL=index.php">';
  }
} 
 
 else
  {
  
                 
      
         if (isset($_POST['ajouter']))
                              
           if($nom=='')
          {
         echo '<body onLoad="alert('Le nom obligatoire')">';
                               echo '<meta http-equiv="refresh" content="0;URL=index.php">';
           
          }
          elseif ($ref=='')
          {
          echo '<body onLoad="alert('Ref obligatoire...')">';
                               echo '<meta http-equiv="refresh" content="0;URL=index.php">';
          }
          elseif($marque=='')
          {
          echo '<body onLoad="alert('Marque obligatoire...')">';
                                   echo '<meta http-equiv="refresh" content="0;URL=index.php">';
          }
         
         else
         {
          $rqt="insert t_client values('$nom','$ref','$marque','$type')";
           
          mysql_query($rqt);
           
            echo '<body onLoad="alert('Ajout effectu�e...')">';
          echo '<meta http-equiv="refresh" content="0;URL=index.php">';
          mysql_close();
               }
       if (isset($_POST['modifier']))
        
                                    if($nom=='' || $ref=='' ||$marque==''   )
          {
          
          echo '<body onLoad="alert('fair une recherch avant la modification ou verifiez les champs                                               obligatoire...')">';
                                   echo '<meta http-equiv="refresh" content="0;URL=index.php">';
          }
          else
          {
           $rqt="update t_client set nom='$nom',ref='$ref',marque='$marque',type='$type' where nom ='$rech'";
        mysql_query($rqt);
          echo '<body onLoad="alert('Modification effectu�e...')">';
          echo '<meta http-equiv="refresh" content="0;URL=index.php">';
        mysql_close();
         }
       elseif(isset($_POST['supprimer']))       
         {
         
         $rqt="delete  FROM t_produir  where nom ='$rech'";
         
        mysql_query($rqt);
         echo '<body onLoad="alert('Suppression effectu�e...')">';
        echo '<meta http-equiv="refresh" content="0;URL=index.php">';
        mysql_close();
         }
      
  
  }

?>
<? $cn=mysql_connect("localhost","root");
mysql_select_db("ma_base",$cn);  
$req="select * from  t_produit";
mysql_query($req);
$res=mysql_query($req,$cn);  
?>
<table width="630" align="left" bgcolor="#CCCCCC">
<tr >
 
<td width="152">Nom</td>
<td width="66">Ref</td>
<td width="248">Marque</td>
<td width="42">Type</td>
</tr>
<?
$var=0;
while($row=mysql_fetch_array($res))
{
 
if ($var==0)
{
?>
<tr bgcolor="#EEEEEE">
<td><? echo $row[0];  ?></td>
<td><? echo $row[1];  ?></td>
<td><? echo $row[2]  ?></td>
<td><? echo $row[3]  ?></td>
</tr>
<?
$var=1; 
 }
else
{
?>
<tr bgcolor="#FFCCCC">
<td><? echo $row[0];  ?></td>
<td><? echo $row[1];  ?></td>
<td><? echo $row[2]  ?></td>
<td><? echo $row[3]  ?></td>
</tr>
<?
$var=0; 
 }
 }
?>
</table>