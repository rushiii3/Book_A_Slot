document.addEventListener('DOMContentLoaded', function() {
    flatpickr("#myDatePicker", {
      dateFormat: 'Y-m-d',
      minDate: new Date().fp_incr(3),
      disable: [
        '2023-05-20',
        '2023-05-25'
      ]
    });
  });