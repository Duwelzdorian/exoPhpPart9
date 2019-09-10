// Regex

var regexLogin = /[a-zA-ZéèÉÈôîêûÛÊÔÎùÙïöëüËÏÖÜ0-9œ&~#{([|_\^@)°+=}$£*µ%!§.;,?<>]{2,15}[- ']?[a-zA-ZéèÉÈôîêûÛÊÔÎùÙïöëüËÏÖÜ0-9œ&~#{([|_\^@)°+=}$£*µ%!§.;,?<>]{0,15}$/;
var regexPassword = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_.])([-.+!*$@%_\w]{8,15})$/;
  // Entre 8 et 15 caractères, au moins une minuscule et une majuscule, un chiffre et un caractère spécial

/* Pour vérifier que la confirmation du mot de passe correspond au premier mot de passe. Les alert sont ici facultatives. */

  $("#confirmPassword").focusout(function() {
    var password = $("#password").val();
    var confirmPassword = $("#confirmPassword").val();
    if (password == "") {
      $("#password").css("border", "solid 2px red");
      $("#confirmPassword").css("border", "solid 2px red");
      alert("Veuillez entrer votre mot de passe dans le premier champs !");
    } else if (confirmPassword == "") {
      $("#password").css("border", "solid 2px green");
      $("#confirmPassword").css("border", "solid 2px red");
      alert("Veuillez entrer votre mot de passe dans le second champs !");
    } else if (password != confirmPassword) {
      $("#confirmPassword").css("border", "solid 2px red");
      alert("Confirmation du mot de passe invalide");
    } else {
      $("#password").css("border", "solid 2px green");
      $("#confirmPassword").css("border", "solid 2px green");
    }
  });
  
  $("#submitForm").click(function() {

    var password = $("#password").val();
    var confirmPassword = $("#confirmPassword").val();

    if (!regexLogin.test($("#login").val())) {
      alert("Le login que vous avez choisi ne convient pas.");
      $("#login").css("border", "solid red 2px");
  } else if (!regexPassword.test($("#password").val())) {
      alert("Vous avez fait une erreur dans le mot de passe.")
      $("#password").css("border", "solid red 2px");
    } // Confirmation de la bonne réception du formulaire
    else {
      $("#connection").hide();
  }
 });
 
  $("#submitForm2").click(function() {
      if (!regexLogin.test($("#login").val())) {
      alert("Le login que vous avez choisi ne convient pas.");
      $("#login").css("border", "solid red 2px");
  } else {
      $("#connection").hide();
  }
});