var FormValidation = (function() {
  // Initialize Uniform (styled file inputs, selects)
  function _initUniform() {
    if (!$().uniform) {
      console.warn('Warning - uniform.min.js is not loaded.');
      return;
    }
    $('.form-input-styled').uniform({
      fileButtonClass: 'action btn bg-blue'
    });
  }

  // Initialize Switchery (toggle switches)
  function _initSwitchery() {
    if (typeof Switchery === 'undefined') {
      console.warn('Warning - switchery.min.js is not loaded.');
      return;
    }
    var elems = Array.prototype.slice.call(document.querySelectorAll('.form-input-switchery'));
    elems.forEach(function(el) {
      new Switchery(el);
    });
  }

  // Initialize Bootstrap Switch
  function _initBootstrapSwitch() {
    if (!$().bootstrapSwitch) {
      console.warn('Warning - bootstrap_switch.min.js is not loaded.');
      return;
    }
    $('.form-input-switch').bootstrapSwitch({
      onSwitchChange: function(state) {
        // Trigger validation on switch change
        $(this).valid();
      }
    });
  }

  // Initialize TouchSpin (numeric spinner inputs)
  function _initTouchspin() {
    if (!$().TouchSpin) {
      console.warn('Warning - touchspin.min.js is not loaded.');
      return;
    }
    $('.touchspin-postfix').TouchSpin({
      min: 0,
      max: 100,
      step: 0.1,
      decimals: 2,
      postfix: '%'
    }).on('touchspin.on.startspin', function() {
      $(this).trigger('blur'); // trigger validation
    });
  }

  // Initialize Select2 dropdowns
  function _initSelect2() {
    if (!$().select2) {
      console.warn('Warning - select2.min.js is not loaded.');
      return;
    }
    var $select = $('.form-control-select2').select2({
      minimumResultsForSearch: Infinity
    });
    $select.on('change', function() {
      $(this).trigger('blur'); // trigger validation on change
    });
  }

  // Initialize jQuery Validation on all forms with .form-validate-jquery
  function _initValidation() {
    if (!$().validate) {
      console.warn('Warning - validate.min.js is not loaded.');
      return;
    }

    $('.form-validate-jquery').each(function() {
      var validator = $(this).validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden and Select2 search input
        errorClass: 'validation-invalid-label',
        validClass: 'validation-valid-label',
        highlight: function(element) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function(element) {
          $(element).removeClass('is-invalid');
        },
        success: function(label) {
          label.addClass('validation-valid-label').text(''); // Hide Success text
        },
        errorPlacement: function(error, element) {
          // Handle error placement based on input type or wrapper class

          if (element.parents().hasClass('form-check')) {
            // For checkboxes and radios
            error.appendTo(element.parents('.form-check').parent());
          }
          else if (element.parents().hasClass('form-group-feedback') || element.hasClass('select2-hidden-accessible')) {
            // For inputs with icons and Select2
            error.appendTo(element.parent());
          }
          else if (element.parent().is('.uniform-uploader, .uniform-select') || element.parents().hasClass('input-group')) {
            // For styled file inputs and input groups
            error.appendTo(element.parent().parent());
          }
          else {
            // Default placement
            error.insertAfter(element);
          }
        },
        // You can add more rules here or set rules per form dynamically
        rules: {
          // Example rules, extend as needed
          email: { email: true },
          password: { minlength: 5 },
          repeat_password: { equalTo: '#password' },
          url: { url: true },
          date: { date: true },
          digits: { digits: true }
          // Add custom rules here...
        },
        messages: {
          agree: 'Please accept our policy'
          // Add custom messages here...
        }
      });

      // Optional: Reset form validation on reset button click inside the form
      $(this).find('button[type="reset"]').on('click', function() {
        validator.resetForm();
        $(this).closest('form').find('.is-invalid').removeClass('is-invalid');
      });
    });
  }

  // Public API
  return {
    init: function() {
      _initUniform();
      _initSwitchery();
      _initBootstrapSwitch();
      _initTouchspin();
      _initSelect2();
      _initValidation();
    }
  };
})();

// Initialize the module after DOM is ready
document.addEventListener('DOMContentLoaded', function() {
  FormValidation.init();
});
