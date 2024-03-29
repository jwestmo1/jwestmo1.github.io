function getData() {
  var firstName = document.getElementById('firstName').value;
  var lastName = document.getElementById('lastName').value;

  document.getElementById("greeting").textContent = "Welcome to East-Less-Sea, " + firstName + " " + lastName + "!";

  var personalBackground = "Personal Background: " + document.getElementById('personalBackground').value;
  var professionalBackground = "Professional Background: " + document.getElementById('professionalBackground').value;
  var academicBackground = "Academic Background: " + document.getElementById('academicBackground').value;
  var backgroundInThisSubject = "Background in this Subject: " + document.getElementById('backgroundInThisSubject').value;
  var computerPlatform = "Primary Computer Platform: " + document.getElementById('computerPlatform').value;
  var courses = "Courses I'm Taking, and Why: " + document.getElementById('courses').value;
  var funnyInteresting = "Funny/Interesting Item About Yourself: " + document.getElementById('funnyInteresting').value;
  var share = "I'd Also Like to Share: " + document.getElementById('share').value;

  let formData = [personalBackground, professionalBackground, academicBackground, backgroundInThisSubject, computerPlatform, courses, funnyInteresting, share];

  showData(formData);
}


function showData(formData) {

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
