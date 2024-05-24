
const notificationSound = document.getElementById('notification-sound');
let lastMessageCount = 0;

async function fetchMessages() {
    const response = await fetch('/php/chat.php');
    const messages = await response.json();
    const chatbox = document.getElementById('admin-chatbox');
    chatbox.innerHTML = '';
    messages.forEach(msg => {
        const messageElement = document.createElement('div');
        messageElement.classList.add('message');
        if (msg.user === 'Admin') {
            messageElement.classList.add('user');
        } else {
            messageElement.classList.add('service');
        }
        messageElement.innerHTML = `<div class="username">${msg.user}</div>${msg.message}<div class="timestamp">${msg.timestamp}</div>`;                chatbox.appendChild(messageElement);
    });
    chatbox.scrollTop = chatbox.scrollHeight; // Desplaza el chat hacia abajo

    // Reproducir tono de notificación si hay un nuevo mensaje
    if (messages.length > lastMessageCount) {
        notificationSound.play();
        lastMessageCount = messages.length;
    }
}

async function sendMessage() {
    const user = 'Admin';
    const message = document.getElementById('admin-message').value;
    if (message) {
        const formData = new FormData();
        formData.append('user', user);
        formData.append('message', message);

        await fetch('/php/chat.php', {
            method: 'POST',
            body: formData
        });

        document.getElementById('admin-message').value = '';
        fetchMessages();
    }
}

document.getElementById('admin-sendBtn').addEventListener('click', sendMessage);

// Actualizar mensajes cada 5 segundos
setInterval(fetchMessages, 5000);

// Cargar mensajes iniciales
fetchMessages();