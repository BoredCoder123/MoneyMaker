$('.enter').click(function(){
  $('.con').delay(200).fadeIn(800);
});
$('.subml').click(function(){
    var b = $('.emaill').val();
    var c = $('.passl').val();
    if(b==="" || c===""){
        $('.subml').attr("type","button");
        alert('Please Enter all details');return;
    }
    else  $('.subml').attr("type","submit");
});
$('.submj').click(function(){
   var a = $('.users').val();
    var b = $('.emails').val();
    var c = $('.passs').val();
    if(a==="" || b==="" || c===""){
        $('.submj').attr("type","button");
        alert('Please Enter all details');return;
    }
    else  $('.submj').attr("type","submit");
});