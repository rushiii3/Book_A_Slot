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

 
$start_time = $('.start-time');
$end_time = $('.end-time');
function BlockTime(start_timee,end_timee)
{
    var i,x = $('.start-time');
    //console.log(x.length);
    console.log($start_time[13].attributes[1].value);
    for(i=0;i<x.length;i++)
    {
  
        if(start_timee==$start_time[i].attributes[1].value)
        { 
            do{
                $start_time.eq(i).prop('disabled', true);
                $end_time.eq(i).prop('disabled', true);
                console.log(i);
                i=i+1;
            }while(end_timee>=$start_time[i].attributes[1].value);
        }
    }
}

//BlockTime("10:00","13:30")

$('#selectDate').on('change',function(){
  $date = $('#selectDate').val();
  console.log($date);
  $.ajax({
    type: 'POST',
    url: 'ajax.php',
    data: {datee:$date},
    success: function(data){
        console.log(data);
        
    },
    error: function() {
        console.log(response.status);
    },
})
})
