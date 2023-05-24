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
$(document).ready(function(){
   
    
    $('#submit').on('click',function(){
        
        $date = $('#selectDate').val();
        $Venue_name = $('#Venue_name').val();
        if($date!==""){
            if($Venue_name!=="Select Venue")
            {
                $.ajax({
                    type: 'POST',
                    url: 'ajax.php',
                    data: { selectdatee:$date,venue_name:$Venue_name },
                    success: function(data){
                        console.log(data);
                        $('#showDate').html($date);
                        $('#showDay').html($date);
                        $('#dayList').html(" ");
                        $('#dayList').append(data);
                        
                    },
                    error: function() {
                        console.log(response.status);
                    },
                })
            }else{
                alert("Please select a venue first");
            }
            
        }else{
            alert("Please select a Date first");
        }
        
    })
})