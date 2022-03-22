var nameIsValid = false;
var animalIsValid = false;

function checkName() {
  document.getElementById("userFeedback").innerHTML = "";
  document.getElementById("userFeedback").style.display = "block";
  var userName = document.getElementById("userName").value;
  var nameLength = userName.trim().length;
  var lettersNSpaces = /^[A-Za-z\s]+$/;
  var finalName = userName.trim();

  if (nameLength == 0) {
    document.getElementById("userFeedback").innerHTML =
      "Make sure you don't forget your name!";
    document.getElementById("userName").value = "";
    return;
  }

  if (!userName.match(lettersNSpaces)) {
    document.getElementById("userFeedback").innerHTML =
      "Names should not have numbers on them!";
    return;
  }

  nameIsValid = true;
  document.myForm.theName.value = finalName;
  document.getElementById("nameSection").style.display = "none";
  document.getElementById("userFeedback").style.display = "none";
  document.getElementById("animalSection").style.display = "block";
}

function checkAnimal() {
  document.getElementById("userFeedback").innerHTML = "";
  var submitForm = false;
  var selectedAnimal = document.getElementById("selectAnimal");
  var myAnimal = selectedAnimal.options[selectedAnimal.selectedIndex].value;
  var finalAnimal = myAnimal.trim();

  if (document.myForm.userAnimal.value == "") {
    document.getElementById("userFeedback").innerHTML =
      "Don't forget to pick an animal!";
    document.getElementById("userFeedback").style.display = "block";
    return (animalIsValid = false);
  }

  animalIsValid = true;
  document.myForm.theAnimal.value = finalAnimal;

  if (animalIsValid == true && nameIsValid == true) {
    submitForm = true;
  }

  return submitForm;
}
