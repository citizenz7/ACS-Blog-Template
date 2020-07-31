var body = document.getElementsByTagName("BODY");
var newButton = document.createElement("button")
document.body.appendChild(newButton);
newButton.setAttribute("onclick", "darkMode()")
newButton.classList.add("btn-darkMode")

darkMode = function() {

  if (!body[0].classList.contains("darkMode")) {
      body[0].classList.add("darkMode");
  }
  else if (body[0].classList.contains("darkMode")) {
      body[0].classList.remove("darkMode");
  }
}
