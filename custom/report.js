function openPrintWindow(tableName) {
    // Open a new window for printing
    var printWindow = window.open('', 'Inventory PIC', 'height=400,width=600');

    // Fetch the report data from the server, including the table name as a query parameter
    fetch('php_action/fetch_report.php?tableName=' + encodeURIComponent(tableName))
        .then(response => response.text())
        .then(data => {
            // Write the report data to the new window
            printWindow.document.write('<html><head><title>Order Report Slip</title>');
            printWindow.document.write('</head><body>');
            printWindow.document.write(data);
            printWindow.document.write('</body></html>');

            // Close the document stream
            printWindow.document.close();
            printWindow.focus();

            // Print the window
            setTimeout(function () { printWindow.print(); printWindow.close(); }, 2000);
        })
        .catch(error => console.error('Error fetching report:', error));
}
