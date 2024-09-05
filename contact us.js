document.forms["contactForm"].addEventListener("submit", validateForm);

function validateForm(event) {
  event.preventDefault(); // Prevent form submission

  // Get form inputs
  var name = document.forms["contactForm"]["name"].value;
  var email = document.forms["contactForm"]["email"].value;
  var subject = document.forms["contactForm"]["subject"].value;
  var message = document.forms["contactForm"]["message"].value;

  // Validate inputs
  if (name === "" || email === "" || subject === "" || message === "") {
    alert("Please fill in all fields");
    return false;
  }

  // If form is valid, submit it
  document.forms["contactForm"].submit();
}
