import $ from 'jquery'

$(document).ready(function () {
  // var headerHeight = $('.mainHeader').outerHeight() // Target your header navigation here
  $('a').click(function (e) {
    var targetHref = $(this).attr('href')

    targetHref = targetHref.substring(targetHref.indexOf('#'))

    $('html, body').animate({
      scrollTop: $(targetHref).offset().top - 111 // Add it to the calculation here
    }, 500)

    e.preventDefault()
  })
})

// $(document).ready(function () {
//   $('body').hide().fadeIn(200)
//   $('a').click(function (e) {
//     e.preventDefault()
//     $link = $(this).attr('href')
//     $('body').fadeOut(500, function () {
//       window.location = $link
//     })
//   })
// })
