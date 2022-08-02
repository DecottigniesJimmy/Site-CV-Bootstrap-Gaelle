let element = document.getElementById("btnSend");
let small = fc1.nextElementSibling
let small2 = fc2.nextElementSibling
let small3 = fc3.nextElementSibling
let small4 = btn.nextElementSibling
//NOM VERIFICATION
element.addEventListener("click", function nom() {
let fc1 = document.getElementById("fc1").value;    
let letters = /^[A-Za-z]+$/;
 if(fc1.match(letters)) 
  {
   return true;
  }
else
  { 
   small.innerHTML = 'Nom non valide';  
   return false; 
  }
  });

  // FIN NOM VERIFICATION 

  // DEBUT EMAIL VERIFICATION
  element.addEventListener("click", function validateEmail() {

    {
    let fc2 = document.getElementById("fc2").value;
    let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; //verifie le format lettre digits caractère spéciaux
    if(fc2.match(mailformat))                             //
    {
    document.form1.fc2.focus();
    return true;
    }
    else
    {
    small2.innerHTML = 'E-mail non valide'; 
    document.form1.fc2.focus();
    return false;
    }
    }
    });
    // FIN EMAIL VERIFICATION

    // DEBUT OBJET VERIFICATION
    element.addEventListener("click", function objet() {
        let fc3 = document.getElementById("fc3").value;    
        let letterNumber = /^[0-9a-zA-Z]+$/;
         if(fc3.match(letterNumber)) 
          {
           return true;
          }
        else
          { 
            small3.innerHTML = 'Objet non valide'; 
           return false; 
          }
          });
    // FIN OBJET VERIFICATION
