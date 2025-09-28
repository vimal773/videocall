<html>
<head>
  <script src="https://cdn.scaledrone.com/scaledrone.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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

    .video-wrapper {
      width: 100%;
      max-width: 1200px;
      height: 90vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      position: relative;
      padding: 20px;
    }

    .top-info {
      position: absolute;
      top: 15px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 16px;
      background: rgba(0,0,0,0.4);
      padding: 6px 14px;
      border-radius: 8px;
    }

    .video-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
      width: 100%;
      height: 100%;
    }

    video {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 14px;
      background: #000;
      box-shadow: 0 6px 16px rgba(0,0,0,0.3);
    }

    /* Mobile: stack videos */
    @media (max-width: 768px) {
      .video-grid {
        grid-template-columns: 1fr;
        grid-template-rows: 1fr 1fr;
      }
    }
  </style>
</head>
<body>
  <div class="video-wrapper">
    <div class="top-info">Send your URL to a friend to start a video call</div>

    <div class="video-grid">
      <video id="localVideo" autoplay muted></video>
      <video id="remoteVideo" autoplay></video>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
