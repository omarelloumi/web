function verif(){
var id=f.id.value;
	var nom=f.nom.value;
	

	
	if (isNaN(id)||id.length>11) alert ("L'id doit être numérique et maximum de 11 nombres"); 
	else if (!(isNaN(nom))||(nom.length==0)||(nom.length>20)) alert ("Il faut remplir le champ nom avec un maximim de 20 des caractères alphabétique");
	else alert ("Merci");}
	

// JavaScript Document