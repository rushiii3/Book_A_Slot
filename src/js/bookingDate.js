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




