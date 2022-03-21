let firstName = document.getElementById('firstName').value;
let lastName = document.getElementById('lastName').value;

document.getElementById("greeting").textContent = "Welcome to the Jolly Wallaby Jen Joint, " + firstName + " " + lastName + "!";

let personalBackground = "Personal Background: " + document.getElementById('personalBackground').value;
let professionalBackground = "Professional Background: " + document.getElementById('professionalBackground').value;
let academicBackground = "Academic Background: " + document.getElementById('academicBackground').value;
let backgroundInThisSubject = "Background in this Subject: " + document.getElementById('backgroundInThisSubject').value;
let computerPlatform = "Primary Computer Platform: " + document.getElementById('computerPlatform').value;
let courses = "Courses I'm Taking, and Why: " + document.getElementById('courses').value;
let funnyInteresting = "Funny/Interesting Item About Yourself: " + document.getElementById('funnyInteresting').value;
let share = "I'd Also Like to Share: " + document.getElementById('share').value;
let formData = [personalBackground, professionalBackground, academicBackground, backgroundInThisSubject, computerPlatform, courses, funnyInteresting, share];

let getSelectedValue = document.querySelector( 'input[name="prefer"]:checked');
    if(getSelectedValue != null) {
      var prefer = ("You prefer the " + getSelectedValue.value);
    }

//var design  = document.querySelectorAll('input[name="choices"]:checked');
//  var choices = [];
//  design.forEach((checkbox) => {
//      choices.push(checkbox.value);
//   });

let allData = [formData, prefer]

showData(allData);
}


function showData(allData) {

  for (let i = 0; i < allData.length; i++) {
    //creates new element & stores in variable
    var newListNum = document.createElement('li');

    //creates text node & stores in variable
    var newText = document.createTextNode(formData[i]);

    //attaches text node to new element
    newListNum.appendChild(newText);

    //find position where element should be added
    var position = document.getElementsByTagName('ul')[0];

    //insert new element in correct position
    position.appendChild(newListNum);

  }

}
