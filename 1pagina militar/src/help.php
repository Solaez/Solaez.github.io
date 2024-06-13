<article class="help">
  
  <div id="chat-container" style="display: none;">
      <div id="chat-header">
          <h2>Chat de Atención</h2>
          <button id="closeBtn" onclick="closeChat()">X</button>
      </div>
      <div id="chatbox"></div>
      <div id="message-container">
          <input type="text" id="message" placeholder="Escribe un mensaje">
          <button id="sendBtn">Enviar</button>
      </div>
  </div>
  <div id="usernameInput">
      <input type="text" id="user" placeholder="Tu nombre">
      <button onclick="saveUsername()">⨠</button>
  </div>
  <button id="openUserBtn" onclick="openUsernameInput()"><img src="https://img.icons8.com/ios-glyphs/30/user--v1.png" ></button>
  
</article>