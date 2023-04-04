// Get the "Contact Us" section
const contactSection = document.querySelector("Contact Us");

// Create an array of contact details
const contactDetails = [
  { type: "email", value: "info@acceptasist.com" },
  { type: "phone", value: "94771234567" },
  { type: "address", value: "Colombo-04, Sri Lanka" }
];

// Create a function to display the contact details
function displayContactDetails(details) {
  const list = document.createElement("ul");
  
  details.forEach((detail) => {
    const listItem = document.createElement("li");
    const link = document.createElement("a");
    
    link.href = detail.type === "email" ? `mailto:${detail.value}` : detail.value;
    link.textContent = detail.value;
    
    listItem.appendChild(link);
    list.appendChild(listItem);
  });
  
  contactSection.appendChild(list);
}

// Call the function to display the contact details
displayContactDetails(contactDetails);


//This code adds a "Contact Us" section to the home page and displays an unordered 
//list of contact details (email, phone, and address) using JavaScript. 
//The displayContactDetails function creates list items for each contact detail, 
//including links for the email and phone details. The function then appends the list items 
//to the contact list and the list to the "Contact Us" section. You can customize 
//the contact details and formatting as needed.