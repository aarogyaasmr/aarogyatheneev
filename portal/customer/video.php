  <style>
    /* Center the player */
    .video-container {
      position: relative;
      width: 100%;
      max-width: 960px;
      margin: auto;
      background: black;
    }

    /* Make video fill the container */
    video {
      width: 100%;
      height: auto;
      display: block;
    }

    /* Controls container, fixed position at the bottom */
    .controls {
      position: absolute;
      bottom: 0;
      width: 98%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
      background: rgba(0, 0, 0, 0.6);
    }

    .play-btn, .pause-btn, .fullscreen-btn, .volume-slider {
      background: none;
      border: none;
      color: white;
      font-size: 20px;
      cursor: pointer;
      margin: 0px 15px 0px 0px;
    }

    .progress-container {
      flex-grow: 1;
      display: flex;
      align-items: center;
      margin: 0 10px;
    }

    .progress {
      width: 90%;
      height: 5px;
      background: #444;
      cursor: pointer;
    }

    .progress-bar {
      height: 100%;
      background: #f00;
      width: 0;
    }

    .volume {
      margin-left: 10px;
    }

    .volume-slider {
      width: 100px;
    }

    .time {
      font-size: 14px;
      color: white;
      margin: 0px 25px 0px 0px;
    }

    /* Fullscreen button when video is in full-screen */
    .fullscreen-btn.fullscreen {
      transform: rotate(90deg);
    }

  </style>

  <div class="video-container" id="videoContainer">
    <video id="video" src="recording_class.mov" type="video/mp4" preload="metadata"></video>
    <div class="controls">
      <button class="play-btn" id="playBtn">▶️</button>
      <button class="pause-btn" id="pauseBtn" style="display: none;">❚❚</button>
      <div class="progress-container">
        <div class="progress" id="progress">
          <div class="progress-bar" id="progressBar"></div>
        </div>
      </div>
      <input type="range" class="volume-slider" id="volume" value="100" max="100">
      <button class="fullscreen-btn" id="fullscreenBtn">⛶</button>
      <!-- Current Time and Total Time Display -->
      <span class="time" id="currentTime">00:00</span>
      <span class="time" id="totalTime">00:00</span>
    </div>
  </div>

  <script>
  // Disable right-click on the entire page
  document.addEventListener('contextmenu', (event) => {
    event.preventDefault(); // Prevent the context menu from appearing
  });
  </script>

  <script>
    const video = document.getElementById('video');
    const playBtn = document.getElementById('playBtn');
    const pauseBtn = document.getElementById('pauseBtn');
    const progress = document.getElementById('progress');
    const progressBar = document.getElementById('progressBar');
    const volume = document.getElementById('volume');
    const fullscreenBtn = document.getElementById('fullscreenBtn');
    const videoContainer = document.getElementById('videoContainer');
    const currentTimeDisplay = document.getElementById('currentTime');
    const totalTimeDisplay = document.getElementById('totalTime');

    // Play the video when play button is clicked
    playBtn.addEventListener('click', () => {
      video.play();
      playBtn.style.display = 'none';
      pauseBtn.style.display = 'inline-block';
    });

    // Pause the video when pause button is clicked
    pauseBtn.addEventListener('click', () => {
      video.pause();
      pauseBtn.style.display = 'none';
      playBtn.style.display = 'inline-block';
    });

    // Update progress bar as video plays
    video.addEventListener('timeupdate', () => {
      const progressPercent = (video.currentTime / video.duration) * 100;
      progressBar.style.width = `${progressPercent}%`;

      // Update current time and total time
      currentTimeDisplay.textContent = formatTime(video.currentTime);
      totalTimeDisplay.textContent = formatTime(video.duration);
    });

    // Update video currentTime when user clicks on progress bar
    progress.addEventListener('click', (e) => {
      const progressWidth = progress.offsetWidth;
      const clickPosition = e.offsetX;
      const newTime = (clickPosition / progressWidth) * video.duration;
      video.currentTime = newTime;
    });

    // Adjust volume based on volume slider input
    volume.addEventListener('input', (e) => {
      video.volume = e.target.value / 100;
    });

    // Toggle fullscreen mode
    fullscreenBtn.addEventListener('click', () => {
      if (document.fullscreenElement || document.webkitFullscreenElement || document.msFullscreenElement) {
        // Exit fullscreen
        document.exitFullscreen && document.exitFullscreen();
        document.webkitExitFullscreen && document.webkitExitFullscreen();
        document.msExitFullscreen && document.msExitFullscreen();
      } else {
        // Enter fullscreen
        videoContainer.requestFullscreen && videoContainer.requestFullscreen();
        videoContainer.webkitRequestFullscreen && videoContainer.webkitRequestFullscreen();
        videoContainer.msRequestFullscreen && videoContainer.msRequestFullscreen();
      }
    });

    // Detect fullscreen change and update UI accordingly
    document.addEventListener('fullscreenchange', updateFullscreenState);
    document.addEventListener('webkitfullscreenchange', updateFullscreenState);
    document.addEventListener('msfullscreenchange', updateFullscreenState);

    function updateFullscreenState() {
      if (document.fullscreenElement || document.webkitFullscreenElement || document.msFullscreenElement) {
        fullscreenBtn.classList.add('fullscreen');
      } else {
        fullscreenBtn.classList.remove('fullscreen');
      }
    }

    // Prevent the default volume slider behavior from going beyond 0-100 range
    video.volume = volume.value / 100;

    // Function to format time (in seconds) to hh:mm:ss
    function formatTime(seconds) {
      const minutes = Math.floor(seconds / 60);
      const secs = Math.floor(seconds % 60);
      return `${padZero(minutes)}:${padZero(secs)}`;
    }

    // Function to add leading zero to single digits
    function padZero(number) {
      return number < 10 ? '0' + number : number;
    }
  </script>