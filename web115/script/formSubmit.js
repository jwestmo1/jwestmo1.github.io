for (var i=1; i <= 20; i++)
{
    if (i % 15 == 0)
        console.log("FizzBuzz");
    else if (i % 3 == 0)
        console.log("Fizz");
    else if (i % 5 == 0)
        console.log("Buzz");
    else
        console.log(i);
}


function getData() {
  let firstName = document.getElementById('first_name').value;
  let lastName = document.getElementById('last_name').value;
  let middleInitial = document.getElementById('middle_initial').value;
        
   document.getElementById("greeting").textContent = "Welcome to East-Less-Sea, " + firstName + " " + middleInitial + ". " + lastName + "!";
  let howHigh = prompt(`How high do you want to count, ${firstName}?`);
  fizzBuzz(howHigh);
}

function fizzBuzz(counter) {
  for(let i = 0; i <= counter; i++) {
    var evenOrOdd;
    
    if (i % 2 === 0) {
      evenOrOdd = 'the number is even';
    } else {
      evenOrOdd = 'the number is odd';
    }
    
    //creates new element & stores in variable
    var newEl = document.createElement('li');
    
    //creates text node & stores in variable
    var newText = document.createTextNode(i + ' East-Less-Sea WD - ' + evenOrOdd);
    
    //attaches text node to new element
    newEl.appendChild(newText);
    
    //find position where element should be added
    var position = document.getElementsByTagName('ul')[0];
    
    //insert new element in correct position
    position.appendChild(newEl);
    
  }
  
}