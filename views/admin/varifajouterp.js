function verif(){
var ref=f.ref.value;
	var nom=f.nom.value;
	
var prix=f.prix.value;
	var cat=f.cat.value;
	var img=f.img.value;
	var qte=f.qte.value;
	
	
	if (isNaN(ref)||(ref.length>11)) alert ("La référence doit être numérique avec un maximum de 11 nombres");
	else if (!(isNaN(nom))||(nom.length==0)||(nom.length>80)) alert ("Il faut remplir le champ nom avec des caractères alphabétique avec un maximum de 80 caractères");
	else if (isNaN(prix)||(prix.length==0)) alert ("Le prix doit être numérique");
	else if (img.length==0||(img.length>10)) alert ("Il faut remplir le champ img avec un maximum de 10 caractères");
	else if (qte.length==0||(isNaN(qte))) alert ("Il faut remplir le champ img avec un maximum de 10 caractères");else alert("Merci");

}// JavaScript Document