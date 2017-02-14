$(document).ready(function(){

  $(".date #ToDate").hide();

  $(function DatePicker(){
    $("#FromDate").datepicker({
      onSelect: function(dateText, inst) {
        $("#ToDate").val($.datepicker.formatDate('m/d/yy', new Date(new Date(dateText).getTime() + 1*24*60*60*1000)));
        $.datepicker.setDefaults({"defaultDate":dateText});
      }
    });

    $("#ToDate").datepicker({
      onSelect: function (dateText, inst) {
      }
    });
  });

  $(function AutoComplete(){
    $( "#resort" ).autocomplete({

      source: 'search.php',
      open: function() {
      $("ul.ui-menu").width( $(this).innerWidth() );
  }
    });
  )};


  $(".dropdown-menu li a").click(function(){
    $(this).parents(".dropdown").find('.btn').html($(this).text() +' ' +'<span class="caret"></span>');
    var vl= $(this).text();

    if(vl == "Wholeday"){
      $(".date #ToDate").show('slide',{direction: "left"},200);
    }else{
      $(".date #ToDate").hide('slide',{direction: "left"},200);
    }
  });
});
