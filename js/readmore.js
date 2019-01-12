function() {
  $('.pane-node-body .expanded').slideToggle('slow');
  $(this).toggleClass('node-body-read-less');
  if ($('.node-body-read-more').text() == 'Read More') {
    $(this).text('Read Less');
  } else {
    $(this).text('Read More');
  }
}