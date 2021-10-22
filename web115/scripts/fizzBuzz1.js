function getData() {
  let firstName = document.getElementById('firstName').value;
  let lastName = document.getElementById('lastName').value;
  let middleInitial = document.getElementById('middleInitial').value;

  document.getElementById("greeting").textContent = "Welcome to East-Less-Sea, " + firstName + " " + middleInitial + ". " + lastName + "!";
  let howHigh = 140
  fizzBuzz(howHigh);
}

function fizzBuzz(counter) {
  for (let i = 1; i <= counter; i++) {
    var fizzOrBuzz;

    if (i % 15 === 0) {
      fizzOrBuzz = 'WoodBuzz';
    } else if (i % 3 === 0) {
      fizzOrBuzz = 'Wood';
    } else if (i % 5 === 0) {
      fizzOrBuzz = 'Buzz';
    } else {
      fizzOrBuzz = 'East-Less-Sea';
    }

    //creates new element & stores in variable
    var newEl = document.createElement('li');

    //creates text node & stores in variable
    var newText = document.createTextNode(i + ' ' + fizzOrBuzz);

    //attaches text node to new element
    newEl.appendChild(newText);

    //find position where element should be added
    var position = document.getElementsByTagName('ul')[0];

    //insert new element in correct position
    position.appendChild(newEl);

  }

}
