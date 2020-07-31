var body = document.getElementsByTagName("BODY");
var div = document.getElementsByTagName("DIV");
var p = document.getElementsByTagName("P");
var newButton = document.createElement("button")
document.body.appendChild(newButton);
newButton.setAttribute("onclick", "darkMode()")
newButton.classList.add("btn-darkMode")

darkMode = function() {



  if (!body[0].classList.contains("darkMode")) {

    for (i = 0; i < body.length; i++) {
      body[i].classList.add("darkMode");
    }
    for (i = 0; i < p.length; i++) {
      p[i].classList.add("darkMode");
    }
    for (i = 0; i < div.length; i++) {
      div[i].classList.add("darkMode");
    }
  }
  else if (body[0].classList.contains("darkMode")) {

    for (i = 0; i < p.length; i++) {
      p[i].classList.remove("darkMode");
    }
    for (i = 0; i < body.length; i++) {
      body[i].classList.remove("darkMode");
    }
    for (i = 0; i < div.length; i++) {
      div[i].classList.remove("darkMode");
    }
  }
}
