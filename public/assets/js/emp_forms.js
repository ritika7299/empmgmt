  //checkbox same as permanent address
  function copyAddress() {
    const isChecked = document.getElementById('same_address').checked;
    if (isChecked) {
      // Text input fields
      document.getElementById('present_address').value = document.getElementById('permanent_address').value;
      document.getElementById('present_pin').value = document.getElementById('permanent_pin').value;

      // Select dropdowns - State
      const permState = document.getElementById('permanent_state').value;
      document.getElementById('present_state').value = permState;
      $('#present_state').trigger('change'); // for select2 to reflect

      // Select dropdowns - District
      const permDistrict = document.getElementById('permanent_district').value;
      document.getElementById('present_district').value = permDistrict;
      $('#present_district').trigger('change');

    } else {
      // Clear all fields
      document.getElementById('present_address').value = '';
      document.getElementById('present_pin').value = '';

      document.getElementById('present_state').value = '';
      $('#present_state').val('').trigger('change');

      document.getElementById('present_district').value = '';
      $('#present_district').val('').trigger('change');
    }
  }
  
//add table row dynamically 
 function addRow() {
  const tableBody = document.getElementById('tableBody');
  const newRow = tableBody.rows[0].cloneNode(true);
  const inputs = newRow.querySelectorAll('input');
  inputs.forEach(input => input.value = '');
  tableBody.appendChild(newRow);
  updateDeleteButtons();
}
function deleteRow(button) {
  const row = button.closest('tr');
  const tableBody = document.getElementById('tableBody');
  if (tableBody.rows.length > 1) {
    row.remove();
  }
  updateDeleteButtons();
}
function updateDeleteButtons() {
  const deleteButtons = document.querySelectorAll('#familyTable .delete-btn');
  deleteButtons.forEach(btn => btn.disabled = false);
  if (deleteButtons.length === 1) {
    deleteButtons[0].disabled = true;
  }
}
document.addEventListener('DOMContentLoaded', updateDeleteButtons);

//checkbox selection 
  document.addEventListener('DOMContentLoaded', function () {
    const nomineeCheckboxes = document.querySelectorAll('.nominee-checkbox');

    nomineeCheckboxes.forEach(checkbox => {
      checkbox.addEventListener('change', function () {
        if (this.checked) {
          nomineeCheckboxes.forEach(otherCheckbox => {
            if (otherCheckbox !== this) {
              otherCheckbox.checked = false;
            }
          });
        }
      });
    });
  });

// dynamically row add and delete for emergency contact
 function addRowContact() {
    const tableBody = document.getElementById("tableBody1");

    // Create a new row
    const newRow = document.createElement("tr");
    newRow.innerHTML = `
      <td>
        <input type="text" name="name[]" class="form-control" required placeholder="Enter Name" />
      </td>
      <td>
        <input type="text" name="relation[]" class="form-control" required placeholder="Enter Relation" />
      </td>
      <td>
        <input type="text" name="contact[]" class="form-control" maxlength="10" required placeholder="Enter Contact Number" />
      </td>
      <td>
        <div class="d-flex">
          <button type="button" class="btn btn-danger mr-2 btn-delete" onclick="deleteRow(this)">
            <i class="icon-trash-alt fa-2x"></i>
          </button>
        </div>
      </td>
    `;

    tableBody.appendChild(newRow);

    // Enable all delete buttons
    updateDeleteButtons();
  }

  function deleteRow(button) {
    const row = button.closest("tr");
    row.remove();

    // Re-evaluate delete button states
    updateDeleteButtons();
  }

  function updateDeleteButtons() {
    const deleteButtons = document.querySelectorAll(".btn-delete");
    const totalRows = document.querySelectorAll("#tableBody1 tr").length;

    // Enable all delete buttons if more than one row exists
    if (totalRows > 1) {
      deleteButtons.forEach(btn => btn.disabled = false);
    } else {
      deleteButtons.forEach(btn => btn.disabled = true);
    }
  }


//  emp personal infomation 
$('#personal_info').submit(function(e) {
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
        $.ajax({
        url: url,
        method: 'POST',
        data: form.serialize(),
        dataType: 'json',
        success: function(response) {
         if (response.success) {
                //Show success alert
                alert(response.message);

                // Switch to next tab
                $('a[href="#solid-rounded-tab2"]').tab('show');
            } else {
                // Show validation errors
                alert(Object.values(response.errors).join("\n"));
            }
        },
        error: function() {
            alert('Server error');
        }
    });
});
// emp identification details
$('#identification_details').submit(function(e) {
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
        $.ajax({
        url: url,
        method: 'POST',
        data: form.serialize(),
        dataType: 'json',
        success: function(response) {
         if (response.success) {
                alert(response.message);        //Show success alert

                $('a[href="#solid-rounded-tab3"]').tab('show');     // for next tab
            } else {
                 alert(Object.values(response.errors).join("\n"));   // Show validation errors
            }
        },
        error: function() {
            alert('Server error');
        }
    });
});
// emp qualification details
$('#qualification_info').submit(function(e) {
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
        $.ajax({
        url: url,
        method: 'POST',
        data: form.serialize(),
        dataType: 'json',
        success: function(response) {
         if (response.success) {
                alert(response.message);        //Show success alert

                $('a[href="#solid-rounded-tab4"]').tab('show');     // for next tab
            } else {
                 alert(Object.values(response.errors).join("\n"));   // Show validation errors
            }
        },
        error: function() {
            alert('Server error');
        }
    });
});

// emp address details
$('#address_info').submit(function(e) {
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
        $.ajax({
        url: url,
        method: 'POST',
        data: form.serialize(),
        dataType: 'json',
        success: function(response) {
         if (response.success) {
                alert(response.message);        //Show success alert

                $('a[href="#solid-rounded-tab5"]').tab('show');     // for next tab
            } else {
                 alert(Object.values(response.errors).join("\n"));   // Show validation errors
            }
        },
        error: function() {
            alert('Server error');
        }
    });
});
// emp family details
$('#family_info').submit(function(e) {
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
        $.ajax({
        url: url,
        method: 'POST',
        data: form.serialize(),
        dataType: 'json',
        success: function(response) {
         if (response.success) {
                alert(response.message);        //Show success alert
                $('a[href="#solid-rounded-tab6"]').tab('show');     // for next tab
            } else {
                 alert(Object.values(response.errors).join("\n"));   // Show validation errors
            }
        },
        error: function() {
            alert('Server error');
        }
    });
});

// emp accounts details
$('#accounts_info').submit(function(e) {
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
        $.ajax({
        url: url,
        method: 'POST',
        data: form.serialize(),
        dataType: 'json',
        success: function(response) {
         if (response.success) {
                alert(response.message);        //Show success alert
                $('a[href="#solid-rounded-tab7"]').tab('show');     // for next tab
            } else {
                 alert(Object.values(response.errors).join("\n"));   // Show validation errors
            }
        },
        error: function() {
            alert('Server error');
        }
    });
});
// emp emergency details
$('#emergency_info').submit(function(e) {
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
        $.ajax({
        url: url,
        method: 'POST',
        data: form.serialize(),
        dataType: 'json',
        success: function(response) {
         if (response.success) {
                alert(response.message);        //Show success alert
                $('a[href="#solid-rounded-tab8"]').tab('show');     // for next tab
            } else {
                 alert(Object.values(response.errors).join("\n"));   // Show validation errors
            }
        },
        error: function() {
            alert('Server error');
        }
    });
});

// emp joining details
$('#joining_info').submit(function(e) {
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
        $.ajax({
        url: url,
        method: 'POST',
        data: form.serialize(),
        dataType: 'json',
        success: function(response) {
         if (response.success) {
                alert(response.message);        //Show success alert
                $('a[href="#solid-rounded-tab9"]').tab('show');     // for next tab
            } else {
                 alert(Object.values(response.errors).join("\n"));   // Show validation errors
            }
        },
        error: function() {
            alert('Server error');
        }
    });
});


// emp compliance details
$('#compliance_info').submit(function(e) {
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
        $.ajax({
        url: url,
        method: 'POST',
        data: form.serialize(),
        dataType: 'json',
        success: function(response) {
         if (response.success) {
                alert(response.message);        //Show success alert
                $('a[href="#solid-rounded-tab10"]').tab('show');     // for next tab
            } else {
                 alert(Object.values(response.errors).join("\n"));   // Show validation errors
            }
        },
        error: function() {
            alert('Server error');
        }
    });
});

/*$('#upload_info').on('submit', function (e) {
    e.preventDefault();
    const form = $(this)[0];
    const formData = new FormData(form);
    const url = $(this).attr('action');
    $.ajax({
      url: url,
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      dataType: 'json',
      success: function (response) {
        if (response.success) {
          alert(response.message);
            $('a[href="#solid-rounded-tab1"]').tab('show');
        } else {
          console.log(response.errors);
          alert(Object.values(response.errors).join("\n"));
        }
      },
      error: function () {
        alert("Something went wrong.");
      }
    });
  });*/




















