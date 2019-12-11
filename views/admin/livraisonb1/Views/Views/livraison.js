function test()
{
   var verif=0;
   var verif1=0;
   var verif2=0;
   var verif3=0;
   var verif4=0;
  if(f1.name.value.length==0)
  {
  	alert("le nom est obligatoire");
  }
  else
  {
  	verif++;
  }
  if(f1.number.value.length==0)
  {
  	alert("le numero est obligatoire");
  }
  else
  {
   verif1++;
  }
  if(f1.town.value.length==0)
  {
  	alert("le town est obligatoire");
  }
  else
  {
   verif2++;
  }
  if(f1.refc.value.length==0)
  {
  	alert("la reference est obligatoire");
  }
  else
  {
   verif3++;
  }

  if(verif1==1 && verif==1 && verif2==1 && verif3==1)
  {
  	alert("merci pour la commande");
  }
  
}