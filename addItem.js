
    $(document).ready(function() {
        // Intercept form submission
        $("#addItemModalLabel").submit(function(e) {
            // Prevent the form from navigating to addItem.php
            e.preventDefault();

            // Your existing form submission logic using AJAX
            $.ajax({
                type: "POST",
                url: "php_action/addItem.php",
                data: $(this).serialize(), // Serialize form data
                success: function(response) {
                    // Handle success (if needed)
                    console.log(response);

                    // Reload the page
                    location.reload(true);
                },
                error: function(error) {
                    // Handle error (if needed)
                    console.error(error);
                }
            });
        });
    });

