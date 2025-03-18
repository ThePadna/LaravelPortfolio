// Chat functionality (client-side only for now)
function sendMessage() {
    let chatBox = document.getElementById("chat-box");
    let chatInput = document.getElementById("chat-input");
    if (chatInput.value.trim() !== "") {
        let message = document.createElement("p");
        message.textContent = "You: " + chatInput.value;
        message.style.padding = "5px";
        chatBox.appendChild(message);
        chatInput.value = "";
        chatBox.scrollTop = chatBox.scrollHeight;
    }
}

// Form submission (just logs input for now)
document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();
    alert("Message sent! (Currently not stored, backend needed)");
});
