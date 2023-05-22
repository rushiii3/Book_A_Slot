document.addEventListener('DOMContentLoaded', function() {
    flatpickr("#selectDate", {
      dateFormat: 'Y-m-d',
      minDate: new Date().fp_incr(3),
      disable: [
        '2023-05-20',
        '2023-05-25'
      ]
    });
  });

 



$('#selectDate').on('change',function(){
  $date = $('#selectDate').val();
  console.log($date);
  $.ajax({
    type: 'POST',
    url: 'ajax.php',
    data: {datee:$date},
    success: function(data){
      $('#timeBlock').html(" ");
      $('#timeBlock').append(data);
        
    },
    error: function() {
        console.log(response.status);
    },
})
})




