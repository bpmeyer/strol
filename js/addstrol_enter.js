$(document).ready(function() {

  $("#response").hide();

  $("#strolform").on("submit", function(e) {
    e.preventDefault();

    $.ajax({
      url: "addstrol_enter.php",
      type: "POST",
      data: $(this).serialize(),
      success: function(response) {
        $("#strol").hide();
        $("#response").show();
      },
      error: function(xhr, status, err) {
        alert("Error! Message from server: " + xhr.status + " " + err);
      }
      // --- data: $(this).serialize(), ---
      // takes the form data and puts all of it into a single string
      // that the PHP script can read - NOTE - requires
      // a unique NAME attribute for every form element or it
      // WILL NOT WORK
    });

  });

}); // close document ready
