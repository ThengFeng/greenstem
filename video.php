<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="Accounting Software, Spare Parts System, Workshop System" />
    <meta name="description"
        content="An accounting software company in Malaysia. Specifically Designed for spare parts to improve efficiency and productivity." />
    <title>Tutorial</title>
    <link rel="shortcut icon" type="image/x-icon" href="/pic/icon.webp" />

    <?php include("link.php");?>

    <!--Custom Css-->
    <link rel="stylesheet" href="/source/style.css">
    <link rel="stylesheet" href="/source/device.css">

</head>

<body>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Retrieve the videoPath from the URL query parameters
            var urlParams = new URLSearchParams(window.location.search);
            var videoPath = urlParams.get('videoPath');

            if (videoPath) {
                // Set the source of the video element based on the query parameter
                var selectedVideo = document.getElementById('selected-Video');
                selectedVideo.src = '../video/' + videoPath;

                // Load and play the video
                selectedVideo.load();
                selectedVideo.play();
            }
        });
    </script>

    <?php include("navigation.php");?>

    <div class="content container-fluid">
        <video controls id="selected-Video"></video>
    </div>

    <?php include("footer.php");?>
    
    <script src="/source/script.js"></script>


</body>

</html>