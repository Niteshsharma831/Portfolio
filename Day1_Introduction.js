document.write("Welcome to JS Series with LearnVern");
function msg() {
  alert("Hello Programmer");
}

function checkProg() {
  let confirmEmp = confirm("Are you good programer?");
  {
    if (confirmEmp) {
      document.getElementById("showFrom").style.display = "block";
    } else {
      alert("you are fired");
    }
  }
}


