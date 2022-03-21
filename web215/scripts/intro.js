function getData() {
  var firstName = document.getElementById('firstName').value;
  var lastName = document.getElementById('lastName').value;

  document.getElementById("greeting").textContent = "Welcome to the Jolly Wallaby Jen Joint, " + firstName + " " + lastName + "!";

  var personalBackground = "Personal Background: " + document.getElementById('personalBackground').value;
  var professionalBackground = "Professional Background: " + document.getElementById('professionalBackground').value;
  var academicBackground = "Academic Background: " + document.getElementById('academicBackground').value;
  var backgroundInThisSubject = "Background in this Subject: " + document.getElementById('backgroundInThisSubject').value;
  var computerPlatform = "Primary Computer Platform: " + document.getElementById('computerPlatform').value;
  var courses = "Courses I'm Taking, and Why: " + document.getElementById('courses').value;
  var funnyInteresting = "Funny/Interesting Item About Yourself: " + document.getElementById('funnyInteresting').value;
  var share = "I'd Also Like to Share: " + document.getElementById('share').value;
  var prefer = document.querySelector('input[name="prefer"]:checked').value;
    let preference;
    for (var prefer of prefer) {
      if (prefer.checked){
        preference = prefer.value;
        break;
      }
    }

  prefer = "You prefer the" + ${preference};
  //var design  = document.querySelectorAll('input[name="choices"]:checked');
  //  var choices = [];
  //  design.forEach((checkbox) => {
  //      choices.push(checkbox.value);
  //   });

  let formData = [personalBackground, professionalBackground, academicBackground, backgroundInThisSubject, computerPlatform, courses, funnyInteresting, share, prefer];

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
