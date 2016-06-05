// $(function(){
//   $("#messages").load("messages.html");
// });


$(function(){
  var debug = 0;

  // Ajax submit message
  $("#submit").on("click", function(e) {
    var message = $(".message"),
        form = $("#send-message-form");
    $.ajax({
      type: "POST",
      async: true,
      data:  form.serialize(),
      success: function(data) {
        if (debug) {
          console.log("Message send");
        }
        message.val("");
      }
    });
    e.preventDefault();
  });

  // Get contents of messages.html
  function loadMessages(){
    var messages = $("#messages"),
        messagesHtml = messages.children();

    $.ajax({
      url: "messages.html",
      async: true,
      cache: false,
      dataType: "text",
      success: function( data, textStatus, jqXHR ) {
        if (debug) {
          console.log($(data).length);
          console.log(messagesHtml.length);
        }
        if (messagesHtml.length != $(data).length) {
          messages.html(data);
          messages.animate({
            scrollTop: messages.find("p:last").offset().top
          }, 3000);
        }
        else {
          return;
        }
      }
    });
  }
  // Load messages.html file every 1000ms
  setInterval(function(){
      loadMessages();
  }, 3000);
});