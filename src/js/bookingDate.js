$('#selectDate').on('change',function(){
  $date = $('#selectDate').val();
  $Venue_name = $('#Venue_name').val();
  if($Venue_name!="Select Venue")
  {
    $.ajax({
      type: 'POST',
      url: 'ajax.php',
      data: {datee:$date,Venue_name:$Venue_name},
      success: function(data){
        console.log(data);
        $('#timeBlock').html(" ");
        $('#timeBlock').append(data);
          
      },
      error: function() {
          console.log(response.status);
      },
  })
  }else{
    $date = $('#selectDate').val("");
    alert("Kindly select the date first");

  }
 

})




