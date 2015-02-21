(function($){
  $(function(){

    $('.button-collapse').sideNav();


  }); // end of document ready
})(jQuery); // end of jQuery name space

  $(document).ready(function(){
    $('.materialboxed').materialbox();
    $('.parallax').parallax();

     $('.modal-trigger').leanModal({
      opacity: .5, // Opacity of modal background
      in_duration: 300, // Transition in duration
      out_duration: 200, // Transition out duration
    });

    $("input[type='checkbox']").click(function(){
      if($(this).hasClass('checked'))
      {
        $(this).removeClass('checked')
      } else {
        $(this).addClass('checked')
      }     

    });
  });