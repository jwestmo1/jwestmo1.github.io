function getData() {
  let firstName = document.getElementById('firstName').value;
  let lastName = document.getElementById('lastName').value;
  let middleInitial = document.getElementById('middleInitial').value;

  document.getElementById("greeting").textContent = "Welcome to East-Less-Sea, " + firstName + " " + middleInitial + " " + lastName + "!";



  let howHigh = document.getElementById('howHigh').value;
  let firstDivisor = document.getElementById('firstDivisor').value;
  let secondDivisor = document.getElementById('secondDivisor').value;
  let thirdDivisor = document.getElementById('thirdDivisor').value;

  fizzBuzz(howHigh, firstDivisor, secondDivisor, thirdDivisor);
}



function isDivisible(firstDivisor, secondDivisor) {
  if (firstDivisor % secondDivisor === 0) {
    return true;
  } else {
    return false;
  }
}



function fizzBuzz(counter, firstDivisor, secondDivisor, thirdDivisor) {
  for (let i = 1; i <= counter; i++) {
    var fizzOrBuzz;


    if (i % (firstDivisor * secondDivisor * thirdDivisor) === 0){
      fizzOrBuzz = firstWord + secondWord + ' ' + thirdWord;
    } else if (i % (firstDivisor * secondDivisor) === 0) {
      fizzOrBuzz = firstWord + secondWord;
    } else if (i % firstDivisor === 0) {
      fizzOrBuzz = firstWord;
    } else if (i % secondDivisor === 0) {
      fizzOrBuzz = secondWord;
    } else if (i % thirdDivisor === 0) {
      fizzOrBuzz = thirdWord;
    } else {
      fizzOrBuzz = '';
    }




    //creates new element & stores in variable
    var newListNum = document.createElement('li');

    //creates text node & stores in variable
    var newText = document.createTextNode(i + ' ' + fizzOrBuzz);

    //attaches text node to new element
    newListNum.appendChild(newText);

    //find position where element should be added
    var position = document.getElementsByTagName('ul')[0];

    //insert new element in correct position
    position.appendChild(newListNum);

  }

}
