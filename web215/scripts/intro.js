function getData() {
  let firstName = document.getElementById('firstName').value;
  let lastName = document.getElementById('lastName').value;
  let fullName = "Name: " + firstName + " " + lastName;
  let personalBackground = "Personal Background: " + document.getElementById('personalBackground').value;
  let professionalBackground = "Professional Background: " + document.getElementById('professionalBackground').value;
  let academicBackground = "Academic Background: " + document.getElementById('academicBackground').value;
  let backgroundInThisSubject = "Background in this Subject: " + document.getElementById('backgroundInThisSubject').value;
  let computerPlatform = "Primary Computer Platform: " + document.getElementById('computerPlatform').value;
  let courses = "Courses I'm Taking, and Why: " + document.getElementById('courses').value;
  let funnyInteresting = "Funny/Interesting Item About Yourself: " + document.getElementById('funnyInteresting').value;
  let share = "I'd Also Like to Share: " + document.getElementById('share').value;

  //Radio buttons
  let getSelectedValue = document.querySelector( 'input[name="prefer"]:checked');
      if(getSelectedValue != null) {
        var prefer = ("You prefer the " + getSelectedValue.value);
  }


  //Checkboxes
  let markedCheckbox = document.querySelectorAll('input[name="choices"]:checked');;
  let output = [];
  markedCheckbox.forEach((checkbox) => {
    output.push(checkbox.value)

  });
  var finalChecks = ("You are interested in: " + output);


  //Send Data on
  let formData = [fullName, personalBackground, professionalBackground, academicBackground, backgroundInThisSubject, computerPlatform, courses, funnyInteresting, share, prefer, finalChecks];





showData(formData);
}


function showData(formData) {
  var lis = document.querySelectorAll('li');
  Array.from(lis).forEach((li) => li.remove())

  for (let i = 0; i < formData.length; i++) {
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
