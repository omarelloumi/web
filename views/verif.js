function verif(){
	var ref=f.ref.value;
	var titre=f.titre.value;
	if ( ref.length== 0)
	alert ("La reference du film est obligatoire");
	else if ( titre.length == 0)
	alert ("Le titre du film est obligatoire");
	else alert ("Merci pour l'ajout");
	}