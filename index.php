<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Video Call</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      height: 100vh;
      font-family: -apple-system, BlinkMacSystemFont, sans-serif;
      background: linear-gradient(135deg, #0098ff, #005d99);
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
    }
    .card {
      background: rgba(255,255,255,0.1);
      border: none;
      border-radius: 16px;
      padding: 30px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.4);
      text-align: center;
      width: 100%;
      max-width: 400px;
    }
    input {
      border-radius: 8px;
      text-align: center;
    }
  </style>
</head>
<body>

  <div class="card">
    <h2 class="mb-4">Video Call</h2>
    
    <!-- Create button -->
    <button class="btn btn-primary w-100 mb-3" onclick="createCall()">Create Call</button>

    <!-- Join form -->
    <div class="input-group">
      <input type="text" id="roomInput" class="form-control" placeholder="Enter room code">
      <button class="btn btn-success" onclick="joinCall()">Join</button>
    </div>
  </div>

  <script>
    // Use your own random string generator here
    function generateRoomCode() {
      // 🔹 Replace this with your code
      return Math.random().toString(36).substr(2, 6) + "-" + Math.random().toString(36).substr(2, 2);
    }

    function createCall() {
      const code = generateRoomCode();
      window.location.href = "https://gx-videocall.gamer.gd/main.php";
    }

    function joinCall() {
      const code = document.getElementById("roomInput").value.trim();
      if (code) {
        window.location.href = "https://gx-videocall.gamer.gd/main.php" + code;
      } else {
        alert("Please enter a room code.");
      }
    }
  </script>

</body>
</html>
