<html>
    <head>
      <meta charset="UTF-8">
      <!-- <meta name="viewport" content="width-device-width, initial-scale=1.0"> -->
      <title>Chatbot</title>
      <link rel="stylesheet" href="chatindex.css">
      <script src="https:kit.fontawesome.com/a076d05399.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <div class="title">
                simple Chatbot
            </div>
            <div class="form">
               <div class="bot-index inbox">
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="msg-header">
                        <p>Hello,how can i help u                          
                        </p>
                    </div>
               </div>
            </div>
            <div class="type-field">
                <div class="input-data">
                    <input id="data" type="text" placeholder="Type something here.." required>
                    <button id="send-btn">send</button>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
              $("#send-btn").on("click",function(){
                  $value = $("#data").val();
                  $msg = '<div class="user-index inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                  $(".form").append($msg);  
                  $("#data").val('');  
                  
                //   ajax code 
                $.ajax({
                      url: 'message.php',
                      type: 'POST',
                      data: 'text='+$value,
                      success: function(result){
                        $replay=' <div class="bot-index inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay); 
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                     }
                });
               });
            });
        </script>
    </body>
</html>