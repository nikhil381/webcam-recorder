<!DOCTYPE html>
<html>
  <head>
    <title>webcam Recorder</title>
    <link rel="stylesheet" href="main.css" />
  </head>
  <body>
    <div id="container">
      <video id="gum" playsinline autoplay muted></video>
      <video id="recorded" playsinline loop></video>

      <div>
        <button id="start">Start camera</button>
        <button id="record" disabled>Record</button>
        <button id="play" disabled>Play</button>
        <button id="download" disabled>Download</button>
      </div>

      <div>
        <h4></h4>
        <p>
          Echo cancellation: <input type="checkbox" id="echoCancellation" />
        </p>
      </div>

      <div>
        <span id="errorMsg"></span>
      </div>
    </div>
  </body>
  <script src="script.js"></script>
</html>

