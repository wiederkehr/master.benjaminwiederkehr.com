$(document).ready(function(){
  $('#slider').slider();
  $('.journal .entry h2 a').click(function(){
    parent = $(this).parents('.entry');
    if(parent.hasClass('expanded')){
      $('.entry').addClass('collapsed');
      $('.entry').removeClass('expanded');
      $('.entry_text').empty();
    }else{
      $('.entry.expanded .entry_text').empty();
      $('.entry.expanded').addClass('collapsed');
      $('.entry.expanded').removeClass('expanded');
      if (parent.find('.entry_text').length == 0){
        parent.append('<div class="entry_text"></div>');
      }
      placeholder = parent.find('.entry_text');
      entry = $(this).attr('href') + ' .post #entry_text';
      placeholder.load(entry, function(){
        parent.addClass('expanded');
        parent.removeClass('collapsed');
        $('#slider').slider();
      });
    }
    return false;
  })
});

$.fn.slider = function(opts) {
  this.each(function() {
    var $this = $(this);
    $(this).orbit({
      animation: 'fade',
      bullets: true,
      timer: false
    });
  });
  return this;
};
