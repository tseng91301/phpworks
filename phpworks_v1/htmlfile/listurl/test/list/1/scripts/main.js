var myButton = document.querySelector('button');
var myHeading = document.querySelector('h1');
function setUserName() {
  let myName =prompt('Please enter your name.');
  if(!myName || myName === null) {
    setUserName();
  } else {
    localStorage.setItem('name', myName);
    myHeading.innerHTML = 'Hello, ' + myName;
  }
}
if(!localStorage.getItem('name')) {
  setUserName();
} else {
  let storedName = localStorage.getItem('name');
  myHeading.innerHTML = 'Hello, ' + storedName;
}
myButton.onclick = function() {
  setUserName();
}