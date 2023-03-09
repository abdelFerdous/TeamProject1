// This code listens for when the user scrolls on the webpage.
$(document).on("scroll", function() {

  // Get the current scroll position of the page.
  var pageTop = $(document).scrollTop();
  
  // Calculate the bottom of the visible part of the page.
  var pageBottom = pageTop + $(window).height();
  
  // Select all elements with class "tag".
  var tags = $(".tag");

  // Loop through each tag and check if it's visible on the screen.
  for (var i = 0; i < tags.length; i++) {
    var tag = tags[i];

    // If the tag is visible, add class "visible" to it.
    if ($(tag).position().top < pageBottom) {
      $(tag).addClass("visible");
    } 
    // If the tag is not visible, remove class "visible" from it.
    else {
      $(tag).removeClass("visible");
    }
  }
});
