<?php

${basename(__FILE__, '.php')} = function () {
    if ($this->paramsExists(['message'])) {
        $message = $this->_request['message'];
        $status = Discuss::sendMessage($message);
        if($status) {
            $this->response($this->json([
                'Status' => 'Message Send Successfully',
            ]), 200);
        } else {
            $this->response($this->json([
                'Status' => 'No Content',
            ]), 204);
        }

    } else {
        $this->response($this->json([
            'message'=>"bad request"
        ]), 400);
    }
};
