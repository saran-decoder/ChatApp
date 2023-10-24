<?php

${basename(__FILE__, '.php')} = function () {
    $lastMessageId = isset($_GET['last_message_id']) ? $_GET['last_message_id'] : 0;
    $messages = Discuss::getMessages($lastMessageId);
    if ($messages) {
        $this->response($this->json([
            'Status' => 'Messages Retrieved Successfully',
            'messages' => $messages,
        ]), 200);
    } else {
        $this->response($this->json([
            'message' => 'No new messages',
        ]), 204);
    }
};
