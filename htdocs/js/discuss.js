// start: Coversation
document.querySelectorAll('.conversation-item-dropdown-toggle').forEach(function(item) {
    item.addEventListener('click', function(e) {
        e.preventDefault()
        if(this.parentElement.classList.contains('active')) {
            this.parentElement.classList.remove('active')
        } else {
            document.querySelectorAll('.conversation-item-dropdown').forEach(function(i) {
                i.classList.remove('active')
            })
            this.parentElement.classList.add('active')
        }
    });
});

document.addEventListener('click', function(e) {
    if(!e.target.matches('.conversation-item-dropdown, .conversation-item-dropdown *')) {
        document.querySelectorAll('.conversation-item-dropdown').forEach(function(i) {
            i.classList.remove('active')
        });
    }
});

document.querySelectorAll('.conversation-form-input').forEach(function(item) {
    item.addEventListener('input', function() {
        this.rows = this.value.split('\n').length
    });
});

document.querySelectorAll('[data-conversation]').forEach(function(item) {
    item.addEventListener('click', function(e) {
        e.preventDefault()
        document.querySelectorAll('.conversation').forEach(function(i) {
            i.classList.remove('active')
        });
        document.querySelector(this.dataset.conversation).classList.add('active')
    });
});

document.querySelectorAll('.conversation-back').forEach(function(item) {
    item.addEventListener('click', function(e) {
        e.preventDefault()
        this.closest('.conversation').classList.remove('active')
        document.querySelector('.conversation-default').classList.add('active')
    });
});
// end: Coversation






var scrollDown = function(){
    let chatBox = document.getElementById('chatBox');
    chatBox.scrollTop = chatBox.scrollHeight;
}

scrollDown();

$(document).ready(function() {
    $(".send-msg").click(function(){
        var msg = $("#message").val();
        $.post('/api/discuss/setchat', {
            message: msg
        }, function(data) {
            console.log(data);
            $('#message').val("");
            $("#chatBox").append(data);
            scrollDown();
        }).fail(function(jqXHR, textStatus, errorThrown) {
            console.log('AJAX Error: ' + textStatus, errorThrown, jqXHR);
        });
    });
});




let lastMessageId = 0; // Initialize with 0 for the first request

function loadNewMessages() {
    $.ajax({
        type: 'GET',
        url: '/api/discuss/getchat',
        success: function (data) {
            if (data && data.Status === 'Messages Retrieved Successfully') {
                const messages = data.messages;
                if (messages.length > 0) {
                    lastMessageId = messages[0].id; // Update lastMessageId with the latest message ID
                    // Append new messages to the chat interface
                    $.each(messages, function (index, message) {
                        $('#getmsg').append(message.message);
                        scrollDown();
                    });
                }
            } else if (data && data.message === 'No new messages') {
                console.log('No new messages');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('AJAX Error: ' + textStatus, errorThrown, jqXHR);
        }
    });
}

// Load new messages initially
loadNewMessages();
setInterval(loadNewMessages, 1000); // Refresh every 5 seconds