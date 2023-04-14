<script>

function toggleElement() {
  var element = document.getElementById("myNotes");
  if (element.style.display === "none") {
    element.style.display = "block";
    loadMessages();
    document.getElementById("btn_icon").classList.remove("fa-comment");
    document.getElementById("btn_icon").classList.add("fa-circle-xmark");

  } else {
    element.style.display = "none";
    document.getElementById("btn_icon").classList.remove("fa-circle-xmark");
    document.getElementById("btn_icon").classList.add("fa-comment");
  }
}

function loadMessages() {
    var xhttp = new XMLHttpRequest();
    var customer = document.getElementsByName('note_cust_id')[0].value;
    var username = document.getElementsByName('note_user_name')[0].value;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var messages = JSON.parse(this.responseText);
            var chatMessages = document.querySelector('.notes-content   ');
            chatMessages.innerHTML = '';

            for (var i = 0; i < messages.length; i++) {
                var message = messages[i];
                if (message.username == username ) {
                var messageHTML = '<div>' + 
                                    '<div>' +
                                        '<strong style="display: flex; justify-content: flex-end">' + message.username + '</strong>' + '<micro class="pull-right text-muted" style="display: flex; justify-content: flex-end">' + message.cdate + '</micro>' +
                                    '</div>' +
                                    '<div>' +
                                        '<small  style="display: flex; justify-content: flex-end; margin-left:20%; text-align:right;" class="pull-right text-muted">' + message.notecontent + '</small>' +
                                    '</div>' +
                                    '<hr>';}
                if (message.username !== username ) {
                var messageHTML = '<div>' + 
                                    '<div>' +
                                        '<strong  style="display: flex; justify-content: flex-start">' + message.username + '</strong>' + '<micro class="pull-right text-muted"  style="display: flex; justify-content: flex-start">' + message.cdate + '</micro>' +
                                    '</div>' +
                                    '<div>' +
                                        '<small class="pull-right text-muted" style="display: flex; justify-content: flex-start; margin-right:20%;">' + message.notecontent + '</small>' +
                                    '</div>' +
                                    '<hr>';}
                
                chatMessages.innerHTML += messageHTML;
            }
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }
    };

    xhttp.open("GET", "includes/notes.get.php?customer=" + customer, true);
    xhttp.send();
}

function sendMessage() {
    var username = document.getElementsByName('note_user_name')[0].value;
    var notecontent = document.getElementsByName('note_message')[0].value;
    var custid = document.getElementsByName('note_cust_id')[0].value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            loadMessages();
            document.getElementsByName('note_message')[0].value = ""; // reset message field
        }
    };

    xhttp.open("POST", "includes/notes.send.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("username=" + username + "&notecontent=" + notecontent + "&custid=" + custid);
}

// Add event listener for Enter key on message input field
document.getElementsByName('note_message')[0].addEventListener('keyup', function(e) {
    if (e.keyCode === 13) { // Check for Enter key
        e.preventDefault();
        sendMessage();
    }
});
</script>