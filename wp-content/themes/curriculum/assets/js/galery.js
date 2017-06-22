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
.on('click','#modalGaley',function(event) {
  var $a = $(this),
  $gallery = $a.parents('.gallery'),
  $modal = $gallery.children('.modal'),
  $modalImg = $modal.find('#main'),
  img = $a.find('img').attr('src');

  event.preventDefault();
  event.stopPropagation();

  $modalImg.attr('src', img);

});


$('.gallery')
.on('click', '.image', function(event) {

  var $a = $(this),
  $gallery = $a.parents('.gallery'),
  $modal = $gallery.children('.modal'),
  $modalImg = $modal.find('#main'),
  $firstImg = $modal.find('#first'),
  $secondImg = $modal.find('#second'),
  $thirdImg = $modal.find('#third'),
  $fourImg = $modal.find('#four'),
  $title = $modal.find('#title'),
  $content = $modal.find('#content'),
  $video = $modal.find('#modalVideo'),
  video= $a.attr('video'),
  href = $a.attr('href'),
  type = $a.attr('type'),
  secondImg = $a.attr('second-img'),
  thirdImg = $a.attr('third-img'),
  fourImg = $a.attr('four-img'),
  title = $a.find('#title').html(),
  content = $a.find('#content').html();
  $imageContent=$('#imageContent');
  console.log($imageContent);



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

  // set src for the secon img
  if(type=="imagens"){
    $firstImg.attr('src',href);
    $secondImg.attr('src', secondImg);
    $thirdImg.attr('src', thirdImg);
    $fourImg.attr('src', fourImg);
    $firstImg.show();
    $secondImg.show();
    $thirdImg.show();
    $fourImg.show();
    $imageContent.show()
    $video.hide();
  }
  else if (type=="videos") {
    $firstImg.hide();
    $secondImg.hide();
    $thirdImg.hide();
    $imageContent.hide();
    $fourImg.hide();
    $video.show();
    $video.attr('src', video);
  }

  //set html for the title
  $title.html(title);

  // set html for the content
  $content.html(content);

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
