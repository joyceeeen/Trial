$(document).ready(function(){
  var currentClass = $('.progress-tracker li').attr('class');
  var previousClass;
  var thisClass;

  function validate(){
    if($('#input').val().trim() == ''){
      thisClass = "skip";
    }else{
      thisClass = "done";
    }
  }

  $('.next').on('click',function () {
    validate();

    $('.progress-tracker li.active').removeClass(currentClass).addClass(thisClass).next().addClass('active');
    $('fieldset.active').removeClass(currentClass).next().addClass('active');

  });

  $('.previous').on('click',function(){

    validate();
    
    previousClass  = $('.progress-tracker li.active').prev().attr('class');

    $('.progress-tracker li.active').removeClass('active').addClass(thisClass).prev().removeClass(previousClass).addClass('active');
    $('fieldset.active').removeClass('active').prev().addClass('active');

  });
});
