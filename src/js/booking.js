$('#org_institue_name').hide();

$(window).on('load', function(){
    setTimeout(addBackdrop, 2000); //wait for page load PLUS two seconds.
 });
 function addBackdrop(){
   $('#terms_and_condition').modal('show');
   $('#tnc_footer').hide();
 }
$('#tandcondlink').on('click',function(){
  $('#terms_and_condition').modal('show');
  $('#tnc_footer').show();
})
$('#iagree').on('click',function(){
  $('#check_box_terms_and_condition').prop('checked', true);
})

$('#check_box_terms_and_condition').on('click',function(){
  if($('#check_box_terms_and_condition').is(':checked')){
    
    $('#terms_and_condition').modal('show');
    $('#tnc_footer').show();
  }else{
    $('#terms_and_condition').modal('hide');
    $('#tnc_footer').show();
  }
  
})

$('#department_namee').on('change',function(){
    
    $department_namee = $('#department_namee').val();
    
    if($department_namee==="Others")
    {
        console.log("others selected");
        $('#org_institue_name').show();
        $('#Institute_OrgName').val("");
    }
    else{
        $('#org_institue_name').hide();
        $('#Institute_OrgName').val($department_namee);
    }
    
}) 
$('.section2').hide();
$('.section3').hide();
$step = $('.stepper-item');
$step.eq(0).addClass("active");
$('#prevBtnSecond').on('click',function(){
    $('.section2').hide();
    $('.section1').show();
    $step.eq(0).addClass("active");
    $step.eq(1).removeClass("active");
})
$('#prevBtnThird').on('click',function(){
    $('.section3').hide();
    $('.section2').show();
    $step.eq(1).addClass("active");
    $step.eq(2).removeClass("active");
})
$('#nextFirst').on('click',function()
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
                if($event_start_time===$event_end_time)
                {
                  alert("Start and Ending time of event cannot be same");
                }else{
                    $step.eq(0).removeClass("active");
                  $step.eq(0).addClass("completed");
                  $('.section1').hide();
                  $('.section2').show();
                  $step.eq(1).addClass("active");
                  }
                
                
                
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


$('#nextSecond').on('click',function()
{
    $department_namee = $('#department_namee').val();
    $Institute_OrgName = $('#Institute_OrgName').val();
    $Venue_name = $('#Venue_name').val();
    if($department_namee!=="Select Department")
    {
        if($Institute_OrgName!==""){
            if($Venue_name!=="Select Venue"){
                $step.eq(1).removeClass("active");
                $step.eq(1).addClass("completed");
                $('.section1').hide();
                $('.section2').hide();
                $('.section3').show();
                $step.eq(2).addClass("active");
            }else{
                alert("Please select your venue");
            }
        }
        else{
            alert("Please Input your Institute/Organisation Name");
        }
    }else{
        alert("Please select department first");
    }

})

$('#nextThird').on('click',function(e){
    $rp_name = $('#rp_name').val();
    $companyName = $('#companyName').val();
    $designation = $('#designation').val();
    $experience = $('#experience').val();
    if($rp_name !== ""){
        if($companyName!==""){
            if($designation!==""){
                if($experience!==""){
                  if($('#check_box_terms_and_condition').is(':checked'))
                  {
                    $event_name = $('#eventName').val();
                  $event_Descr = $('#eventDescription').val();
                  $num_of_students = $('#no_of_stu_attending').val();
                  $event_date = $('#selectDate').val();
                  $event_start_time = $('#selectStartTime').val();
                  $event_end_time = $('#selectEndTime').val();
                  $Institute_OrgName = $('#Institute_OrgName').val();
                  $Venue_name = $('#Venue_name').val();
                  $rp_name = $('#rp_name').val();
                  $companyName = $('#companyName').val();
                  $designation = $('#designation').val();
                  $experience = $('#experience').val();
                  $user_email = $('#user_email').val();
                  if(
                    $user_email!==""
                        &&
                    $event_name!==""
                        &&
                    $event_Descr!==""
                        && 
                    $num_of_students!==""
                        &&
                    $event_date!==""
                        &&
                    $event_start_time!=="Select the start time"
                        &&
                    $event_end_time!=="Select the end time"
                        &&
                    $Institute_OrgName!==""
                        &&
                    $Venue_name!=="Select Venue"
                        &&
                    $rp_name!==""
                        &&
                    $companyName!==""
                        &&
                    $designation!==""
                        &&
                    $experience!==""
              
                  ){
                    $.ajax({
                      type: 'POST',
                      url: 'ajax.php',
                      data: {user_email:$user_email,eventname : $event_name, event_desc: $event_Descr, no_of_students : $num_of_students, event_date : $event_date, event_start_time:$event_start_time, event_end_time:$event_end_time, Institute_OrgName:$Institute_OrgName, Venue_name:$Venue_name, rp_name:$rp_name, companyName:$companyName, designation:$designation, experience:$experience  },
                      success: function(data){
                          console.log(data);
                          if(data==1)
                          {
                            $('#success').modal('show');
                          }
                          else
                          {
                            $('#failed').modal('show');
                          }
                      },
                      error: function() {
                          console.log(response.status);
                      },
                  })
                  }

                  }else{
                     alert("Please agree our terms and condition");
                  }
                  }else{
                    alert("Please agree the Terms and Condition");
                  }  
            }else{
                alert("Please input the resource person designation");
            }
        }else{
            alert("Please input the resource person company name");
        }
    }else{
        alert("Please input the resource person name");
    }
    e.preventDefault();
})

$('#bookAgain').on('click',function(){
  window.location='booking.php';
})






