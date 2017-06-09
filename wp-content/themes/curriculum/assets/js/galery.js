var imgGalery=[
  {
    mainIMG:'images/arena.jpg',
    videoLink:'https://www.youtube.com/watch?v=2NhLPHmefww'
  }
]

$(function () {
  var	$window = $(window),
    $document = $(document),
    $body = $('body'),
    $html = $('html'),
    $bodyHtml = $('body,html'),
    $wrapper = $('#wrapper');


$('.gallery')
.on('click', 'a', function(event) {

  var $a = $(this),
  $gallery = $a.parents('.gallery'),
  $modal = $gallery.children('.modal'),
  $modalImg = $modal.find('img'),
  href = $a.attr('href');

  // Not an image? Bail.
  if (!imgGalery[0])
  return;

  // Prevent default.
  event.preventDefault();
  event.stopPropagation();

  // Locked? Bail.
  if ($modal[0]._locked)
  return;

  // Lock.
  $modal[0]._locked = true;

  // Set src.
  $modalImg.attr('src', href);

  // Set visible.
  $modal.addClass('visible');

  // Focus.
  $modal.focus();

  // Delay.
  setTimeout(function() {

    // Unlock.
    $modal[0]._locked = false;

  }, 600);

})
.on('click', '.modal', function(event) {

  var $modal = $(this),
  $modalImg = $modal.find('img');

  // Locked? Bail.
  if ($modal[0]._locked)
  return;

  // Already hidden? Bail.
  if (!$modal.hasClass('visible'))
  return;

  // Stop propagation.
  event.stopPropagation();

  // Lock.
  $modal[0]._locked = true;

  // Clear visible, loaded.
  $modal
  .removeClass('loaded')

  // Delay.
  setTimeout(function() {

    $modal
    .removeClass('visible')

    // Pause scroll zone.
    $wrapper.triggerHandler('---pauseScrollZone');

    setTimeout(function() {

      // Clear src.
      $modalImg.attr('src', '');

      // Unlock.
      $modal[0]._locked = false;

      // Focus.
      $body.focus();

    }, 475);

  }, 125);

})
.on('keypress', '.modal', function(event) {

  var $modal = $(this);

  // Escape? Hide modal.
  if (event.keyCode == 27)
  $modal.trigger('click');

})
.on('mouseup mousedown mousemove', '.modal', function(event) {

  // Stop propagation.
  event.stopPropagation();

})
.find('img')
.on('load', function(event) {

  var $modalImg = $(this),
  $modal = $modalImg.parents('.modal');

  setTimeout(function() {

    // No longer visible? Bail.
    if (!$modal.hasClass('visible'))
    return;

    // Set loaded.
    $modal.addClass('loaded');

  }, 275);

});

})
