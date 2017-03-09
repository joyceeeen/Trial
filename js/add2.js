
function next(){

  $('.progress-tracker li.active').removeClass('active').next().addClass('active');
  $('fieldset.active').removeClass('active').next().addClass('active');
}

function prev(){

  $('.progress-tracker li.active').removeClass('active').prev().addClass('active');
  $('fieldset.active').removeClass('active').prev().addClass('active');

}


// function validate(){
//   if($('fieldset.active #input').val().trim() == ''){
//     return "skip";
//   }else{
//     return "done";
//   }
// }
