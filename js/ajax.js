jQuery(function() {

  // Get the form.
  var form = jQuery('#contact-form');

  // Get the messages div.
  var formMessages = $('#form-messages');

  // Set up an event listener for the contact form.
  jQuery(form).submit(function(e) {
    // Stop the browser from submitting the form.
    e.preventDefault();

    // Serialize the form data.
    var formData = jQuery(form).serialize();

    // Submit the form using AJAX.
    $.ajax({
      type: 'POST',
      url: jQuery(form).attr('action'),
      data: formData
    })
    .done(function(response) {
      // Make sure that the formMessages div has the 'success' class.
     
      jQuery(formMessages).removeClass('alert alert-danger');
      jQuery(formMessages).addClass('alert alert-success');

      // Set the message text.
      jQuery(formMessages).text(response);

      // Clear the form.
      jQuery('#name').val('');
      jQuery('#email').val('');
      jQuery('#message').val('');
      jQuery('#phone').val('');
      jQuery('#address').val('');
    })
    .fail(function(data) {
    	
      // Make sure that the formMessages div has the 'error' class.
      jQuery(formMessages).removeClass('alert alert-success');
      jQuery(formMessages).addClass('alert alert-danger');

      // Set the message text.
      if (data.responseText !== '') {
        jQuery(formMessages).text(data.responseText);
      } else {
        jQuery(formMessages).text('Oops! An error occured and your message could not be sent.');
      }
    });

  });

});