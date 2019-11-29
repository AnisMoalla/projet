<?PHP
include "../entities/client.php";
include "../core/clientC.php";
$client=new Client(75757575,'BEN Ahmed','Salah',50,'hgfhgh','gfhfgh','gfhgfhgf');
$clientC=new ClientC();
$clientC->afficherClient($client);
echo "****************";
echo "<br>";
echo "id:".$client->getidC();
echo "<br>";
echo "nom:".$client->getNom();
echo "<br>";
echo "prenom:".$client->getPrenom();
echo "<br>";
echo "telephone:".$client->gettelephone();
echo "<br>";
cho "mail:".$client->getmail();
echo "<br>";
echo "adresse:".$client->getadressC();
echo "<br>";
echo "password:".$client->getpassword();
echo "<br>";


?>