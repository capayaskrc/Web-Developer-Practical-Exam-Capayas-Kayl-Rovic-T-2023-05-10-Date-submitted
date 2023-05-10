

function refreshShopPerformance() {
    $.ajax({
        url: 'get_shop_performance_data.php', // replace with the URL of your server-side script that returns the updated data
        dataType: 'Json', // replace with the data type of your server-side script's response
        
        success: function(data) {
            $('#painted-count').text(data.painted);
            $('#blue-count').text(data.blue_count);
            $('#red-count').text(data.red_count);
            $('#green-count').text(data.green_count);
        },
        error: function(xhr, status, error) {
            console.log(error);
        },
        complete: function() {
            // call the function again after 5 seconds
            setTimeout(refreshShopPerformance, 5000);
        }
    });
  }
  
  // call the function for the first time
  refreshShopPerformance();


  function getPaintQueueData() {
  $.ajax({
    url: 'get_paint_queue_data.php',
    success: function(data) {
      // Parse the JSON data
      var queue = JSON.parse(data);
  
      // Loop through the queue and create a table row for each item
      var rows = '';
      for (var i = 0; i < queue.length; i++) {
        rows += '<tr>';
        rows += '<td>' + queue[i].plate_no + '</td>';
        rows += '<td>' + queue[i].current_color + '</td>';
        rows += '<td colspan="2">' + queue[i].target_color + '</td>';
        rows += '</tr>';
      }
  
      // Insert the rows into the table body
      var tableBody = document.getElementById('paint-queue-table-body');
      tableBody.innerHTML = rows;
    }
  });
}
  // Call getPaintQueueData every 5 seconds
setInterval(getPaintQueueData, 5000);

getPaintQueueData();


  // Define the function to fetch data and update the table
  function updatePaintJobsTable() {
    // Make an AJAX request to the PHP script that retrieves the data
    $.ajax({
      url: 'get_paint_jobs_data.php',
      type: 'GET',
      dataType: 'json',
      success: function(response) {
        // Clear the existing table rows
        $('#paint-jobs-table-body').empty();

        // Loop through each row of data and append it to the table
        $.each(response, function(index, row) {
          // Create a new row and append it to the table body
          var tr = $('<tr>');
          $('#paint-jobs-table-body').append(tr);

          // Append the data to the row
          tr.append('<td>' + row.plate_no + '</td>');
          tr.append('<td>' + row.current_color + '</td>');
          tr.append('<td>' + row.target_color + '</td>');
          tr.append('<td>' + row.status + '</td>');

          // Create a button to cancel the job and append it to the row
          var cancelButton = $('<button>', {
            class: 'btn btn-danger',
            text: 'Cancel Job',
            click: function() {
              // Make an AJAX request to the PHP script that cancels the job
              $.ajax({
                url: 'cancel_paint_job.php',
                type: 'POST',
                data: {
                  job_id: row.id
                },
                
                
              });
            }
          });
        });
      },
      error: function() {
        alert('Error retrieving paint jobs data');
      }
    });
  }

  // Call the function initially to populate the table
  updatePaintJobsTable();

  // Call the function every 5 seconds to update the table
  setInterval(updatePaintJobsTable, 5000);

