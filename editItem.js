
    function openUpdateForm(itemId, itemName, status) {
        document.getElementById("updateItemId").value = itemId;
        document.getElementById("updateItemName").value = itemName;
        document.getElementById("updateItemStatus").value = status;
        document.getElementById("updateForm").style.display = "block";
    }

    
    $(document).ready(function() {
        // Intercept update form submission
        $("#updateItemForm").submit(function(e) {
            // Prevent the form from navigating to the action URL
            e.preventDefault();
    
            // Your existing form submission logic using AJAX
            $.ajax({
                type: "POST",
                url: "php_action/editItem.php", // Change the URL to your update script
                data: $(this).serialize(), // Serialize form data
                success: function(response) {
                    // Handle success (if needed)
                    console.log(response);
    
                    // Reload the page or update specific parts as needed
                    location.reload(true);
                },
                error: function(error) {
                    // Handle error (if needed)
                    console.error(error);
                }
            });
        });
    });
    
