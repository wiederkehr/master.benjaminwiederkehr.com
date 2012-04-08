$(document).ready(function(){
  $('#header h1').hover(
    function(){
      $('#header h1 a img').stop().animate({ opacity: 0 }, 500);
    },
    function(){
      $('#header h1 a img').stop().animate({ opacity: 1 }, 500);
    }
  );
  $("#content").footnotes();
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
      parent.addClass('expanded');
      parent.removeClass('collapsed');
      if (parent.find('.entry_text').length == 0){
        parent.append('<div class="entry_text"></div>');
      }
      placeholder = parent.find('.entry_text');
      entry = $(this).attr('href') + ' .post #entry_text';
      placeholder.load(entry, function(){
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