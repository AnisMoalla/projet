function condition ()
{
    var fn=document.forms["f"]["nom"].value;
    var ln=document.getElementById('prenom').value;
        var verif=0;
        var cin = document.getElementById("cin").value; 
        
         if(cin.length!=8)
        {alert("le numero de cin doit contenir 8 chiffres !");
        verif+=1;}
      
        if(/[A-Z]/.condition( fn[0]))
  
  {
    document.getElementById('Error').innerHTML ="La premiere lettre du nom doit etre maj.";
    return false;
  }
  if (ln=='')
  {
      alert(" la prenom doit contenir au moins 2 lettres ")
  }
    

}