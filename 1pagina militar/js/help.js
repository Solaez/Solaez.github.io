
function openUsernameInput() {
    document.getElementById('usernameInput').style.display = 'flex';
    document.getElementById('openUserBtn').style.display = 'none';
}

async function fetchMessages() {
    const response = await fetch('/1pagina civil/php/chat.php');
    const messages = await response.json();
    const chatbox = document.getElementById('chatbox');
    chatbox.innerHTML = '';
    messages.forEach(msg => {
        const messageElement = document.createElement('div');
        messageElement.classList.add('message');
        if (msg.user === document.getElementById('user').value) {
            messageElement.classList.add('user');
        } else {
            messageElement.classList.add('service');
        }
        messageElement.innerHTML = `<span class="username">${msg.user}</span> ${msg.message} <div class="timestamp">${msg.timestamp}</div>`;
        chatbox.appendChild(messageElement);
    });
    chatbox.scrollTop = chatbox.scrollHeight; // Desplaza el chat hacia abajo
}

async function sendMessage() {
    const user = document.getElementById('user').value;
    const message = document.getElementById('message').value;
    if (user && message) {
        const formData = new FormData();
        formData.append('user', user);
        formData.append('message', message);

        await fetch('/1pagina civil/php/chat.php', {
            method: 'POST',
            body: formData
        });

        document.getElementById('message').value = '';
        fetchMessages();
    }
}

function saveUsername() {
    const username = document.getElementById('user').value;
    if (username) {
        document.getElementById('usernameInput').style.display = 'none';
        document.getElementById('chat-container').style.display = 'flex';
        fetchMessages();
    }
}

function closeChat() {
    document.getElementById('chat-container').style.display = 'none';
    document.getElementById('openUserBtn').style.display = 'block';
    document.getElementById('user').value = '';
}

document.getElementById('sendBtn').addEventListener('click', sendMessage);

// Función para verificar la inactividad y eliminar mensajes
function checkInactivity() {
    const idleTime = 120000; // 2 minutos en milisegundos
    let lastActivityTime = new Date().getTime();

    function resetTimer() {
        lastActivityTime = new Date().getTime();
    }

    window.onload = resetTimer;
    document.onmousemove = resetTimer;
    document.onkeypress = resetTimer;

    setInterval(() => {
        const currentTime = new Date().getTime();
        const timeDiff = currentTime - lastActivityTime;

        if (timeDiff >= idleTime) {
            fetch('/1pagina civil/php/delete_old_messages.php');
        }
    }, 10000); // Verifica cada 10 segundos
}

checkInactivity();

// Refresh messages every 5 seconds
setInterval(fetchMessages, 5000);