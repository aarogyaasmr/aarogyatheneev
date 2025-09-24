<?php
    include_once("session.php");
    $connnect=mysqli_connect("localhost","u397572463_bhumika","#KJfvUSZNV0j","u397572463_aarogya");
    $sqlcategory = "SELECT * FROM crmvideocategory where id='".$_GET['cateid']."'";
    $resultcateg = mysqli_query($connnect, $sqlcategory);
    $getcategor = mysqli_fetch_array($resultcateg);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aarogya The Neev</title>
    <link rel="icon" href="https://aarogyatheneev.com/uploads/admin/3309fav_aarogya.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding: 60px 120px;
        }
        
        .container {
            display: flex;
            width: 100%;
            gap: 20px;
        }
        
        .video-section {
            flex: 2;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .video-container {
            position: relative;
            width: 100%;
            padding-top: 56.25%; /* 16:9 Aspect Ratio */
        }
        
        .video-player {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .video-title {
            font-size: 20px;
            font-weight: 600;
            margin-top: 15px;
            color: #222;
            text-align: left;
        }
        
        .video-description {
            font-size: 14px;
            color: #666;
            margin-top: 10px;
            text-align: left;
        }
        
        .related-videos {
            flex: 1;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-height: 500px;
            overflow-y: auto;
        }
        
        .related-videos h3 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #444;
        }
        
        .video-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .video-card {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .video-card img {
            width: 120px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
        }
        
        .video-card div {
            flex: 1;
        }
        
        .video-card p {
            font-size: 14px;
            font-weight: 500;
            color: #333;
        }
        
        .video-card:hover {
            transform: translateY(-3px);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            body {
                font-family: 'Poppins', sans-serif;
                background-color: #f4f4f4;
                color: #333;
                justify-content: center;
                align-items: flex-start;
                min-height: 100vh;
                padding: 20px 20px;
            }
            .video-section {
                width: 100%;
                float: left;
                flex: unset;
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .container {
                display: grid;
                width: 100%;
                gap: 20px;
            }
            .related-videos {
                flex: unset;
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                max-height: 500px;
                overflow-y: auto;
                width: 100%;
                float: left;
            }
            
            .onmob {
                display: none !important;
            }
            
            .sidebar {
                width: 250px;
                background-color: #3a4e3b;
                color: white;
                position: fixed;
                height: 100vh;
                top: 0;
                left: 0;
                padding: 20px;
                overflow-y: auto;
            }
            
            .sidebar-header {
                text-align: center;
                margin-bottom: 20px;
            }
            
            .sidebar-header h2 {
                color: #fff;
                font-size: 24px;
                font-weight: 600;
                text-align: left;
                padding: 0px 0px 10px 0px;
                border-bottom: 2px solid;
            }
            
            .sidebar ul {
                list-style: none;
                padding: 0;
            }
            
            .sidebar ul li {
                margin: 20px 0;
            }
            
            .sidebar ul li a {
                color: white;
                font-size: 18px;
                display: block;
                padding: 10px 0px;
                border-radius: 4px;
                transition: background-color 0.3s;
            }
            
            .sidebar ul li a:hover {
                background-color: #4c694d;
            }
            
            ul li a:hover {
                color: #ffffff !important;
                padding: 10px 10px;
            }
            
            .sidebar {
                width: 100%;
                height: auto;
                padding: 15px;
            }
        
            .sidebar ul {
                display: flex;
                justify-content: space-around;
            }
        
            .sidebar ul li {
                margin: 0;
            }
            
            .hdng { width: 100%; float: left; margin: 70px 0px 30px 0px !important; }
        }
        
        .ondes {
            display: none ;
        }
        
        .hdng { width: 100%; float: left; margin: 0px 0px 30px 0px; }
        
        .highlight {
            border: 2px solid #ccc; /* Example style */
            background-color: #f0f0f0; /* Example background color */
        }
        
        .video-card.active {
            border: 2px solid #ccc; /* Example style */
            background-color: #e0e0e0; /* Example background color */
        }
        
    </style>
</head>
<body>
    <div class="sidebar">
        <ul class="ondes">
            <li><a href="https://portal.aarogyatheneev.com/customer/dashboard.php">Profile</a></li>
            <li><a href="https://portal.aarogyatheneev.com/customer/dashboard.php#videos">Recorded Videos</a></li>
            <li><a href="https://portal.aarogyatheneev.com/customer/dashboard.php#classes">Live Classes</a></li>
            <li><a href="https://portal.aarogyatheneev.com/customer/logout.php">Logout</a></li>
        </ul>
    </div>
    
    <h2 class="hdng"><?php echo $getcategor['category']; ?></h2>
    
    <div class="container">
        <div class="video-section">
            <div class="video-container">
                <div class="video-player">
                    <?php
                        $sqlcategoryvdo = "SELECT * FROM crm_videogallery where cate='".$getcategor['id']."' order by id asc limit 1";
                        $resultcategvdo = mysqli_query($connnect, $sqlcategoryvdo);
                        $getcategorvido = mysqli_fetch_array($resultcategvdo);
                    ?>
                    <iframe id="bunny-player" src="https://iframe.mediadelivery.net/embed/332043/<?=$getcategorvido['videourl'];?>?autoplay=false&loop=false&muted=false&preload=true&responsive=true" loading="lazy" style="border:0;position:absolute;top:0;height:100%;width:100%;" allow="accelerometer;gyroscope;autoplay;encrypted-media;picture-in-picture;" allowfullscreen="true"></iframe>
                </div>
            </div>
            <h2 class="video-title" id="video-title"><?=$getcategorvido['name'];?></h2>
            <p class="video-description" id="video-description"><?=$getcategorvido['video_desc'];?></p>
        </div>
        
        <div class="related-videos">
            <h3>Related Videos</h3>
            <div class="video-list">
                <?php
                $i = 1;
                $sqlrelcategoryvdo = "SELECT * FROM crm_videogallery where cate='" . $getcategor['id'] . "' order by id asc";
                $resultrelcategvdo = mysqli_query($connnect, $sqlrelcategoryvdo);
                while ($getrelcategorvido = mysqli_fetch_array($resultrelcategvdo)) {
                    // Check if it's the first row
                    $highlightClass = ($i == 1) ? 'highlight' : ''; // Add a class if it's the first row
                    $i++;
                ?>
                    <div class="video-card <?php echo $highlightClass; ?>" onclick="changeVideo('<?php echo $getrelcategorvido['videourl'];?>', '<?php echo $getrelcategorvido['name'];?>', '<?php echo $getrelcategorvido['video_desc'];?>')">
                        <img src="../assets/icons/video-icon.webp" alt="Video 1" style="width:20%">
                        <div>
                            <p><?php echo $getrelcategorvido['name'];?></p>
                            <span><?php echo date('M j, Y', strtotime($getrelcategorvido['date_added'])); ?></span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <script>
    function changeVideo(videoId, title, description) {
        const iframe = document.getElementById('bunny-player');
        const titleElement = document.getElementById('video-title');
        const descriptionElement = document.getElementById('video-description');

        // Get all video cards
        const videoCards = document.querySelectorAll('.video-card');
        
        // Remove 'active' class from all video cards
        videoCards.forEach(card => {
            card.classList.remove('active');
        });

        // If the clicked video is the one already highlighted, remove the highlight
        const clickedCard = event.currentTarget;
        const isAlreadyHighlighted = clickedCard.classList.contains('highlight');
        
        // Remove highlight from all cards
        videoCards.forEach(card => {
            card.classList.remove('highlight');
        });

        if (!isAlreadyHighlighted) {
            // If the clicked card wasn't highlighted, add the 'active' and 'highlight' classes
            clickedCard.classList.add('active');
            clickedCard.classList.add('highlight');
        }

        const baseUrl = "https://iframe.mediadelivery.net/embed/332043/";
        iframe.src = `${baseUrl}${videoId}?autoplay=false&loop=false&muted=false&preload=true&responsive=true`;

        titleElement.textContent = title;
        descriptionElement.textContent = description;
    }
</script>

</body>
</html>