
   function next(){
    var thisClass = validate();
    var currentClass = $('.progress-tracker li').attr('class');



    $('.progress-tracker li.active').removeClass(currentClass).addClass(thisClass).next().addClass('active');
    $('fieldset.active').removeClass('active').next().addClass('active');

  }

  function prev(){

    var thisClass = validate();
    previousClass  = $('.progress-tracker li').prev().attr('class');

    $('.progress-tracker li.active').removeClass('active').addClass(thisClass).prev().removeClass(previousClass).addClass('active');
    $('fieldset.active').removeClass('active').prev().addClass('active');

  }


function validate(){
  if($('fieldset.active #input').val().trim() == ''){
    return "skip";
  }else{
    return "done";
  }
}
