// Wait for the DOM to be ready
document.addEventListener('DOMContentLoaded', function() {
    // Get the contact form element
    var contactForm = document.getElementById('contact-form');
  
    // Add an event listener to the form submit event
    contactForm.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent the default form submission
  
      // Get the form data
      var formData = new FormData(contactForm);
  
      // Create an AJAX request
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'submit_contact_form.php', true);
      xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
  
      // Handle the AJAX response
      xhr.onload = function() {
        if (xhr.status === 200) {
          // Success! Handle the response here
          console.log(xhr.responseText);
          // You can display a success message or perform any other desired action
        } else {
          // Error! Handle the error here
          console.error('Error: ' + xhr.status);
          // You can display an error message or perform any other desired action
        }
      };
  
      // Send the AJAX request with the form data
      xhr.send(formData);
    });
  });