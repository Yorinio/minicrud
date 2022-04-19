
function checkFields() {
   if(document.querySelector('#username').value.length != 0 && document.querySelector('#password').value.length != 0) {
   document.querySelector("#loginform").action = "invisible/sessionlogin/adminlogin.php";
   } else {
      alert("Vul alstublieft een gebruikersnaam en wachtwoord in.");
   }
}