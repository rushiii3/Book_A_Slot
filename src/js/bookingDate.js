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
var start_timee = $start_time[2].innerHTML;
var end_timee = $start_time[6].innerHTML;
function BlockTime(start_timee,end_timee)
{
    
    var i,x = $('.start-time');
    //console.log(x.length);
    for(i=0;i<x.length;i++)
    {
        if(start_timee==$start_time[i].innerHTML)
        { //$start_time.eq(i).prop('disabled', true);
            do{
                $start_time.eq(i).prop('disabled', true);
                $end_time.eq(i).prop('disabled', true);
                //console.log(i);
                i=i+1;
            }while(end_timee>=$start_time[i].innerHTML);
        }
    }
}
BlockTime(start_timee,end_timee)

