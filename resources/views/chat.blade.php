<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <script>
        // rename myToken as you like
        window.myToken =  <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
        </script>
        <title>阿傑的聊天室</title>
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div id="app">
            <h1>聊天室</h1>
            <chat-log :messages="messages"></chat-log>
            <chat-composer v-on:messagesent="addMessage"></chat-composer>
        </div>
        <script src=js/app.js charset="utf-8"></script>
    </body>
</html>
