<main class="main is-visible">
    <div class="container h-100 m-0 pe-0">

        <div class="d-flex flex-column h-100 position-fixed m-0">

            <!-- Chat: Header -->
            <div class="chat-header border-bottom py-3">
                <div class="d-flex align-items-center justify-content-between">

                    <!-- Content -->
                    <div class="col-8 col-xl-12">
                        <div class="d-flex align-items-center">
                            <!-- Title -->
                            <!-- Close: btn -->
                            <a class="ps-2 pb-1 icon-lg text" href="/" data-toggle-chat="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                            </a>
                            <!-- Close: btn -->

                            <div class="col-xl-6">
                                <div class="d-flex align-items-center">
                                    <div class="col-auto px-3">
                                        <div class="avatar d-xl-inline-block">
                                            <img class="avatar-img" src="../assets/images/default/profile-1.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="col overflow-hidden">
                                        <h5 class="text-truncate">Bootstrap Community</h5>
                                        <p class="text-truncate mb-0">35 members, 3 online</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Title -->

                            <!-- Toolbar -->
                            <div class="col-xl-6 d-xl-block position-fixed" style="right: 1rem;">
                                <div class="row align-items-center justify-content-end gx-5">

                                    <div class="col-auto owner-list">
                                        <div class="avatar-group d-flex">
                                            <a href="#" class="avatar avatar-sm" data-bs-toggle="modal" data-bs-target="#modal-user-profile">
                                                <img class="avatar-img" src="../assets/images/default/profile-1.jpg" alt="#">
                                            </a>

                                            <a href="#" class="avatar avatar-sm" data-bs-toggle="modal" data-bs-target="#modal-user-profile">
                                                <img class="avatar-img" src="../assets/images/default/profile-2.jpg" alt="#">
                                            </a>

                                            <a href="#" class="avatar avatar-sm" data-bs-toggle="modal" data-bs-target="#modal-user-profile">
                                                <img class="avatar-img" src="../assets/images/default/profile-3.jpg" alt="#">
                                            </a>

                                            <a href="#" class="avatar avatar-sm" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-add-members" aria-controls="offcanvas-add-members">
                                                <span class="avatar-text" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add Admin">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Toolbar -->

                        </div>
                    </div>
                    <!-- Content -->

                </div>
            </div>
            <!-- Chat: Header -->

            <!-- Chat: Content -->
            <div class="chat-body hide-scrollbar flex-1 h-100 px-3">
                <div class="chat-body-inner">
                    <div class="my-8 pb-lg-12">

                        <ul id="getmsg"></ul>
                        <!-- Message -->
                        <div class="message">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                                <img class="avatar-img" src="../assets/images/default/profile-2.jpg" alt="">
                            </a>

                            <div class="message-inner">
                                <div class="message-body">
                                    <div class="message-content">
                                        <div class="message-text">
                                            <h6 class="text-reset text-truncate"><b>William Wright</b></h6>
                                            <p class="mb-0">Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                        </div>

                                        <!-- Dropdown -->
                                        <div class="message-action">
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            <span class="me-auto">Edit</span>
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            <span class="me-auto">Reply</span>
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                            <span class="me-auto">Delete</span>
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    
                            </div>

                            <div class="message-footer">
                                <span class="extra-small text-muted">08:45 PM</span>
                            </div>
                        </div>
                    </div>


                    <!-- Message -->
                    

                    <!-- Divider -->
                    <div class="message-divider">
                        <small class="text-muted">Monday, Sep 16</small>
                    </div>

                    
                    

                    <!-- Message -->
                    <div class="message message-out">

                        <div class="message-inner">
                            <div class="message-body">
                                <div class="message-content">
                                    <div class="message-text">
                                        <p class="mb-0">Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                    </div>

                                    <!-- Dropdown -->
                                    <div class="message-action">
                                        <div class="dropdown">
                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <span class="me-auto">Edit</span>
                                                        <div class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <span class="me-auto">Reply</span>
                                                        <div class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                        <span class="me-auto">Delete</span>
                                                        <div class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="message-footer">
                                <span class="extra-small text-muted">08:45 PM</span>
                            </div>
                        </div>
                    </div>


                    
                    

                </div>
            </div>
        </div>
        <!-- Chat: Content -->

        <!-- Chat: Footer -->
        <div class="chat-footer position-absolute pb-2 bottom-0 start-0">
            <!-- Chat: Files -->
            <div class="dz-preview bg-dark" id="dz-preview-row" data-horizontal-scroll=""></div>
            <!-- Chat: Files -->

            <!-- < ?php if (isset($_POST['message'])) {
                $message =  $_POST['message'];
                Discuss::sendMessage($message);
            }
            ?> -->
            <!-- Chat: Form -->
            <form class="chat-form rounded-pill bg-dark" action="">
                <div class="row align-items-center gx-0">
                    <div class="col-auto">
                        <a href="#" class="btn btn-icon btn-link text-body rounded-circle" id="dz-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg>
                        </a>
                    </div>

                    <div class="col">
                        <div class="input-group">
                            <textarea class="form-control px-0" id="message" name="message" placeholder="Type your message..." rows="1" data-emoji-input="" style="resize: none;" data-autosize="true"></textarea>

                            <a href="#" class="input-group-text text-body p-0" data-emoji-btn="">
                                <span class="icons icon-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="col-auto">
                        <button type="button" class="btn btn-icon btn-primary rounded-circle ms-3 send-msg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                        </button>
                    </div>
                </div>
            </form>
            <!-- Chat: Form -->
        </div>
        <!-- Chat: Footer -->
    </div>

</div>
</main>

<<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script>
$(document).ready(function() {
    $(".send-msg").click(function(){
        var msg = $("#message").val();
        $.post('/api/discuss/setchat', {
            message: msg
        }, function(data) {
            console.log(data);
            $('#message').val("");
        }).fail(function(jqXHR, textStatus, errorThrown) {
            console.log('AJAX Error: ' + textStatus, errorThrown);
        });
    });
});


let lastMessageId = 0; // Initialize with 0 for the first request

function loadNewMessages() {
    $.ajax({
        type: 'GET',
        url: '/api/discuss/getchat',
        data: { last_message_id: lastMessageId },
        dataType: 'json',
        success: function (data) {
            if (data && data.Status === 'Messages Retrieved Successfully') {
                const messages = data.messages;
                if (messages.length > 0) {
                    lastMessageId = messages[0].id; // Update lastMessageId with the latest message ID
                    // Append new messages to the chat interface
                    $.each(messages, function (index, message) {
                        $('#getmsg').append('<div>' + message.message + '</div>');
                    });
                }
            } else if (data && data.message === 'No new messages') {
                console.log('No new messages');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('AJAX Error: ' + textStatus, errorThrown);
        }
    });
}

// Load new messages initially
loadNewMessages();
setInterval(loadNewMessages, 1000); // Refresh every 5 seconds

</script>
