function validateForm() {
  var tId = ['civil', 'name', 'name2', 'mail','phone', 'website', 'date', ];
  var tId2 = ['iCivil', 'iName', 'iName2', 'iEmail','iPhone', 'iWebsite', 'iDate',];
  for(i = 0; i < tId.length; i++) {
    var sId = document.getElementById(tId[i]);
    console.log(tId[i].value);
    console.log(tId2[i].value);
    if (sId.value=="") {
      sId.style.backgroundColor="red";
      var tStr = ['Indiquez votre civilité', 'Indiquez votre nom', 'Indiquez votre prénom', 'Indiquez votre email','Indiquez votre numéro de téléphone', 'Indiquez votre site-internet', 'Indiquez votre date de naissance'];
      text = tStr[i];
      var sId2 = document.getElementById(tId2[i]);
      sId2.innerHTML = text;
    }
    else if (sId.every!="") {
      alert("Etes-vous sur de vouloir valider ces informations ?");
      return true;
    }
  }
  return false;
}
