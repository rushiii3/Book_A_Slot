$('.tab').hide();
var currentTab = 0;
showTab(currentTab)
function showTab(n)
{
    $x = $('.tab');
    $x.eq(n).show();
    if (n === 0) {
    $('#nextBtn').addClass('first_page');
    $("#prevBtn").hide();
  } else {
    $('#nextBtn').removeClass('first_page');
    $('#nextBtn').removeClass('second_page');
    $("#prevBtn").show();
  }

  if(n === 1){
    $('#nextBtn').addClass('second_page');
    $('#nextBtn').removeClass('first_page');
  }

  if (n === 2) {
    $("#nextBtn").html("Submit");
    //$('#nextBtn').attr('onclick', 'submitValue()');
    //$('#nextBtn').attr('type', 'submit');
  } else {
    $("#nextBtn").html("Next");
    //$('#nextBtn').attr('onclick', 'nextPrev(1)');
    //$('#nextBtn').attr('type', 'button');
    //$("#nextBtn").removeClass("submit")
  }
  CurrentStep(n);
}
function nextPrev(n)
{
    
    $x = $(".tab");
    $x.eq(currentTab).hide();
    
    currentTab = currentTab + n;
    if(currentTab<=2)
    {
        //console.log("yes"); 
    }
    else{
        currentTab=2;
        //console.log("no");
    }
    showTab(currentTab);
    
}
function CurrentStep(n)
{
    var i, x = document.getElementsByClassName("stepper-item");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace("active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
/*
function Completed(n,currentTab)
{
    var i, x = document.getElementsByClassName("stepper-item");
    console.log(currentTab);
    if(n==1){
        if(currentTab<2)
    {
        console.log("inside 1");
        for(i=0;i<=currentTab;i++)
        {
            $step = $('.stepper-item');
            $step.eq(i).addClass("completed");
        } 
    }
        
    }
    else{
        console.log("inside -1");
        console.log(currentTab);
            $step = $('.stepper-item');
            $step.eq(currentTab-1).removeClass("completed");
        }
}
*/
 
 
$('.first_page').on('click',function()
{
    $event_name = $('#eventName').val();
    $event_Descr = $('#eventDescription').val();
    $num_of_students = $('#no_of_stu_attending').val();
    $event_date = $('#selectDate').val();
    $event_start_time = $('#selectStartTime').val();
    $event_end_time = $('#selectEndTime').val();
    if($event_name!="")
    {
      if($event_Descr!=="")
      {
        if($num_of_students!=="")
        {
          if($event_date!=="")
          {
            if($event_start_time!=="Select the start time")
            {
              if($event_end_time!=="Select the end time")
              {
                nextPrev(1);
                $step = $('.stepper-item');
                $step.eq(0).addClass("completed");
              }else{
                alert("Please input the event end time");
              }
            }
            else{
              alert("Please input the event start time");
            }
            
          }else{
            alert("Please input a date");
          }
          
        }else{
          alert("Please input number of students attending for event");
        }
        
      }
      else{
        alert("Please input your Event Description");
      }
      
    }
    else{
      alert("Please input your Event Name");
    }
})
$('.second_page').on('click',function()
{

  console.log("no forward");

})
