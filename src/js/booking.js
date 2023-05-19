
//$('#org_institue_name').hide();
$('.tab').hide();
var currentTab = 0;
showTab(currentTab)
function showTab(n)
{
  //byee
    $x = $('.tab');
    $x.eq(n).show();
    if (n === 0) {
    $("#prevBtn").hide();
  } else {
    $("#prevBtn").show();
  }
  //console.log(n);
  if (n === 2) {
    $("#nextBtn").html("Submit");
    $('#nextBtn').attr('onclick', 'submitValue()');
    $('#nextBtn').attr('type', 'submit');
  } else {
    $("#nextBtn").html("Next");
    $('#nextBtn').attr('onclick', 'nextPrev(1)');
    $('#nextBtn').attr('type', 'button');
    //$("#nextBtn").removeClass("submit")
  }
  CurrentStep(n);
}
function nextPrev(n)
{
    
    $x = $(".tab");
    //Completed(n,currentTab);
    //if (n == 1 && !validate1page()) return false;
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
 function validate1page()
 {
    var valid = true;
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
            valid = true;
          }else{
            $('.alert').show();
            $("#alert_inbox").text("Please eneter a date");
            hideAlert();
            valid = false;
          }
          
        }else{
          $('.alert').show();
          $("#alert_inbox").text("Please eneter Number of students attending the event");
          hideAlert();
          valid = false;
        }
        
      }
      else{
        showError("Please eneter Event Description");
        valid = false;
      }
      
    }
    else{
      showError("Please Input your event name!");
      valid = false;
    }
    return valid
 }
 
 $('.toast').hide();
 
$('.first_page').on('click',function()
{
  console.log("clicked");
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
                $('#nextBtn').attr('onclick', null);
                nextPrev(1);
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
