const myHeading = document.querySelector("h1");
myHeading.textContent = "Hello world!";

let myVariable = "Bob";
myVariable = "Steve";



// Define variables for user data
var name = "Banu";
var age = 30;
var location = "SriLanka,SL";
var interests = ["SE", "CS", "AI"];

// Function to display user data on page load
function displayUserData() {
  // Display name
  var nameElem = document.getElementById("name");
  nameElem.textContent = name;
  
  // Display age
  var ageElem = document.getElementById("age");
  ageElem.textContent = age;
  
  // Display location
  var locationElem = document.getElementById("location");
  locationElem.textContent = location;
  
  // Display interests
  var interestsElem = document.getElementById("interests");
  interestsElem.textContent = interests.join(", ");
}

// Function to update user location
function updateLocation(newLocation) {
  location = newLocation;
  var locationElem = document.getElementById("location");
  locationElem.textContent = location;
}

// Add event listener for location update button
var updateBtn = document.getElementById("update-btn");
updateBtn.addEventListener("click", function() {
  var newLocation = prompt("Enter new location:");
  updateLocation(newLocation);
});

// Call displayUserData function on page load
window.addEventListener("load", function() {
  displayUserData();
});