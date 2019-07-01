(function ( $ ) {
    $.fn.ripplePosition = function(e) {
      var x = e.pageX - this.parent().offset().left - this.width()/2;
      var y = e.pageY - this.parent().offset().top - this.height()/2;
      this.css({
        top: y + 'px',
        left: x + 'px'
      });
      return this;
    };
}( jQuery ));


$('.button').on('click', function(e){
  var $button = $(this);
  var $ripple = $button.children('.ripple-effect');
  if($ripple.length > 0) {
    $ripple.ripplePosition(e);
  }

  $button.addClass('active');
  setTimeout(function(){
    $button.removeClass('active');
  }, 2000);
});

$('label input[type="checkbox"]').on('change', function(){
    $('.button').toggleClass('fade');
});
