
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
    $("#nextBtn").html("Submit").attr("id", "newId");
  } else {
    $("#nextBtn").html("Next");
    //$("#nextBtn").removeClass("submit")
  }
  CurrentStep(n);
}
function nextPrev(n)
{
    
    $x = $(".tab");
    $x.eq(currentTab).hide();
    Completed(n,currentTab);
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
function Completed(n,currentTab)
{
    var i, x = document.getElementsByClassName("stepper-item");
    //console.log(currentTab);
    if(n==1){
        if(currentTab<2)
    {
        //console.log("inside 1");
        for(i=0;i<=currentTab;i++)
        {
            $step = $('.stepper-item');
            $step.eq(i).addClass("completed");
        } 
    }
        
    }
    else{
        //console.log("inside -1");
        //console.log(currentTab);
            $step = $('.stepper-item');
            $step.eq(currentTab-1).removeClass("completed");
        }
}


