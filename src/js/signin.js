$('.pass_open_eye').hide();
$('.alert-danger').hide();
$('.pass_icon').on('click',function(){
    if('password' == $('#password').attr('type')){
        $('#password').prop('type', 'text');
        $('.pass_open_eye').show();
        $('.pass_close_eye').hide();

   }else{
        $('#password').prop('type', 'password');
        $('.pass_open_eye').hide();
        $('.pass_close_eye').show();
   }
})

$('#submit').on('click',function(e){
    console.log("clicked");
    e.preventDefault();
})
  