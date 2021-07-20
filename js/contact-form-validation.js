// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
  }
  
  // Defining a function to validate form 
  document.getElementById("contactForm").addEventListener("submit",function(e) {
    // Retrieving the values of form elements 
    let fullname = this.fullname.value;
    let email = this.email.value;
    let country = this.country.value;
    let subject = this.subject.value;
  
  
    // Defining error variables with a default value
    let nameValidation = emailValidation = countryValidation = subjectValidation = true;
  
  
    // Validate name
    printError("nameValidation", "");
    if (fullname == "") {
      printError("nameValidation", "Please enter your name");
      nameValidation = false;
    } else {
      let regex = /^[a-zA-Z\s]+$/;
      if (regex.test(fullname) === false) {
        printError("nameValidation", "Please enter a valid name");
        nameValidation = false;
      }
    }
  
    // Validate email address
    printError("emailValidation", "");
    if (email == "") {
      printError("emailValidation", "Please enter your email address");
      emailValidation = false;
    } else {
      // Regular expression for basic email validation
      let regex = /^\S+@\S+\.\S+$/;
      if (regex.test(email) === false) {
        printError("emailValidation", "Please enter a valid email address");
        emailValidation = false;
      }
    }
  
    // Validate country
    printError("countryValidation", "");
    if (country == "Select") {
      printError("countryValidation", "Please select your country");
      countryValidation = false;
    }
  
  
  
    // Validate subject
    printError("subjectValidation", "");
    if (subject == "Select") {
      printError("subjectValidation", "Please select the subject");
      subjectValidation = false;
    }
  
  
  
    // Prevent the form from being submitted if there are any errors
    if (!nameValidation || !emailValidation || !countryValidation || !subjectValidation) {
      e.preventDefault(); // stop submission
      return false;
    }
    // Creating a string from input data for preview
    let dataPreview = "You've entered the following details: \n" +
      "Full Name: " + fullname + "\n" +
      "Email Address: " + email + "\n" +
      "Country: " + country + "\n" +
      "Subject: " + subject + "\nSubmit?";
    if (!confirm(dataPreview)) {
      e.preventDefault(); // stop submission
    }
  });
 