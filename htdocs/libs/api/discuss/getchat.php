<?php

${basename(__FILE__, '.php')} = function () {
    $messages = Discuss::getMessages();
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