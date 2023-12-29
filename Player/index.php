<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="theme-color" content="#241630" />
    <meta name="viewport"
        content="width= device-width, initial-scale= 1 maximum-scale=1, user-scalable=no, minimum-scale=1"">
       <meta name=" title" content="AniWorld - Watch latest anime online ">
    <meta name="description"
        content="Latest Animes of 2023 like Jujustu Kisein , Eminence in Shadow , Zom 100 Watch online English Subbed and Dubbed on AniWorld.fun Now!! ">
    <meta name="robots" content="index follow">
    <meta name="keywords"
        content="Aniworld, Aniworld.fun, Online Animes, New Released Anime, Zom 100, Jujustu Kisein, Latest Anime 2023, One piece , Naruto, Top Anime 2023">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://aniworld.fun/">
    <meta property="og:title" content="Watch Anime Online, Free Anime Streaming Online on Aniworld.fun Anime Website">
    <meta property="og:image" content="https://aniwatch.to/logo/logo.png">
    <meta property="og:image:width" content="650">
    <meta property="og:image:height" content="350">
    <meta property="og:description"
        content="Aniworld is a Free anime streaming website which you can watch English Subbed and Dubbed Anime online with No Account and Daily update. WATCH NOW!">


    <meta name="google-site-verification" content="u3cMChAjr9XXKjBpPrLqloJ_VQoRbHcK8VDAci9GM_Y">
    <title>AniWorld - Watch Anime Online, Free Anime Streaming Online on AniWorld.fun Anime Website</title>
    <link rel="stylesheet" href="/ANIWORLD/Style.css">
    <link rel="stylesheet" href="/ANIWORLD/LStyle.css" media="only screen and (min-width: 970px)">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Montserrat:wght@100;200&family=Roboto:wght@100&display=swap"
        rel="stylesheet">
    <link rel="manifest" href="/superpwa.json">
    <link rel="prefetch" href="/superpwa.json">
    <meta name="apple-mobile-web-app-status-bar" content="#202125">
    <link rel="icon" href="/ANIWORLD/Logo/logo.png">
    <link rel="icon" sizes="192x192" href="/ANIWORLD/logo/logo.png">
    <link rel="icon" sizes="512x512" href="/ANIWORLD/Logo/logo.png">
    <link rel="shortcut icon" href="/ANIWORLD/Logo/logo.png" type="image/png">
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NBLWKDRV');</script>
    <!-- End Google Tag Manager -->
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=65435eb3b768240012ce5e56&product=inline-share-buttons&source=platform"
        async="async"></script>
    <script src="https://kit.fontawesome.com/2488af4231.js" crossorigin="anonymous"></script>

</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NBLWKDRV" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <header style="position: static;">
        <div class="head">
            <div id="menu-icon">&#9776;</div>
            <nav id="menu">
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="/latest">Latest Aired</a></li>
                    <li><a href="#">Top anime</a></li>
                </ul>
            </nav>
            <div class="logo"><a href="../index.html">
                    <h2>AniWorld</h2>
                </a>
            </div>
            <div class="Search-box">
                <div class="search-bar" style="display: none;">

                    <input type="text" placeholder="Search..." id="sBarr">
                </div>
                <div id="search-icon" class="search-icon">
                    <img src="/ANIWORLD/image/search_logo.svg" alt="search-icon">
                </div>
                <div id="results-container" style="display: none;"></div>

            </div>
        </div>
    </header>
    <main>
        <section class="anime-player">
            <div class="video-player">
                <div id="AnimeTitle" class="anime-title"></div>
                <div class="player">
                    <!-- <div id="loading-indicator">
                        <div class="loader"></div>
                    </div> -->
                    <iframe id="myIframe" src="" allow="autoplay; geolocation; display-capture; picture-in-picture"
                        allowfullscreen="true" allowautoplay='true' frameborder="0" marginwidth="0" marginheight="0"
                        scrolling="no"></iframe>
                </div>
                <div class="playTool">
                <?php
// ------------------------------------------------------ Download Button Section ------------------------------------------------

function extractVideoId($link) {
  // Define a regular expression pattern to match the video ID
  $regex = '/\/e\/([^\/]+)\//';

  // Use the regex pattern to extract the video ID from the link
  preg_match($regex, $link, $match);

  // Check if a match is found
  if ($match && $match[1]) {
      // The video ID is stored in $match[1]
      return $match[1];
  } else {
      echo 'Video id does not detected';
      // Return null if no match is found
      return null;
  }
}

// Example usage
// $videoLink = 'https://streamtape.site/e/3BY2R6PWZxsdvrj/Zom100_Ep-01.mp4'; // Assuming $iframeSrc contains the video link

$videoId = '3BY2R6PWZxsdvrj';

// Output the result
echo 'Video id from Url: ' . $videoId . PHP_EOL; // Output: jZarJB6emOsL8D

$login = "eaf09585290523f4f998";
$key = "okLAj7WeYouJBX0";
$ticket = null;

function fetchDownTicket($url) {
    global $ticket;
    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'GET',
        ],
    ];

    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);

    if ($response === false) {
        die('Error fetching JSON');
    }


    $jsonData = json_decode($response, true);

    if ($jsonData === null) {
        die('Error decoding JSON');
    }

    echo 'JSON data of Download Api: ' . print_r($jsonData, true) . PHP_EOL;

    $ticket = $jsonData['result']['ticket'];
    echo 'Ticket Value: ' . $ticket . PHP_EOL;
    $videoId = '3BY2R6PWZxsdvrj';

    // Simulate the setTimeout function with sleep
    sleep(5);

    $downLink = "https://api.streamtape.com/file/dl?file={$videoId}&ticket={$ticket}";
    fetchDownLink($downLink);
}

function fetchDownLink($url) {
    $response = file_get_contents($url);

    if ($response === false) {
        die('Error fetching JSON');
    }

    $jsonData = json_decode($response, true);

    if ($jsonData === null) {
        die('Error decoding JSON');
    }

    echo 'JSON data for download link: ' . print_r($jsonData, true) . PHP_EOL;

    $downLink = $jsonData['result']['url'];
    echo 'Download Link: ' . $downLink . PHP_EOL;

    // You can set the download link in your HTML here
    echo '<div id="DownloadButton"<a href="' . $downLink . '">Start Download</a></div>';
}

$downUrl = "https://api.streamtape.com/file/dlticket?file={$videoId}&login={$login}&key={$key}";

// Assuming the downloadButton click event is triggered by a form submission
    fetchDownTicket($downUrl);

?>

                </div>
                <div id="EpisodeNo">
                    <p>You are watching : </p>
                    <h4>Episode - 1</h4>
                </div>
                <div class="AudioType">
                    <div class="AudioIcon"
                        style="color:rgb(65, 54, 54); font-weight: bold;border-radius: 5px ; padding: 0px 8px; background-color: rgb(212, 230, 133);">
                        Audio
                        <div class="image" style="display: inline;position: relative; top: 3px;"><img
                                src="/ANIWORLD/image/audio-svgrepo-com.svg" alt=""></div>
                    </div>
                    <span style="color: white; font-size: 25px; font-weight: bold; padding: 0px 5px;">:</span>
                    <div id="sub" onclick="changeAudio('sub');"
                        style="margin-left: 15px; border-radius: 5px ; padding: 5px 15px;background-color: rgb(212, 230, 133);">
                        <span>Sub</span>
                    </div>
                    
                </div>
            </div>
            <div class="episodeTable">

                <div class="episodeList-title">
                    <h3>List of Episode:</h3>
                </div>
                <div class="episode-list">
                    <div id="EpisodeList">
                        <!-- Get data from the API -->
                    </div>
                </div>
            </div>
            <div class="seasonContainer">
                <div id="AnimeDetailBox" class="anime-detail-box">
                    <div id="animeDetailImg" class="anime-detail-image">

                    </div>
                    <div id="AnimeDetail" class="anime-detail">

                    </div>
                    <div id="animeDesc"></div>
                </div>
                <!-- <div class="seasonbox">
                    <div class="seasonbtn" style="background-color: rgb(75, 97, 116);"><span>Season 1</span></div>
                    <div class="seasonbtn" style="margin-left: 30px;"><a href="/That time i got reincarnated as a Slime//season2/index.html"><span>Season 2</span></a></div>
                </div> -->

            </div>
        </section>
        <div class="AvailableBox">
            <div>
                <span style="color: rgb(214, 214, 118); font-weight: bold; font-size: 30px;">Available for you</span>
            </div>
            <div class="Anime-container">
                <div id="available-list">
                    <div class="item-card">
                        <div class="item " data-url="/That time i got reincarnated as a Slime">
                            <img src="/ANIWORLD/image/anime-image.jpg" alt="That time I got reincarnated as a slime">
                            <p>That Time I Got Reincarnated as a Slime</p>
                        </div>
                        <div class="floatItem">
                            <p>That Time I Got Reincarnated as a Slime</p>
                            <div class="playButton"><a href="That time i got reincarnated as a Slime">Play</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <footer>
        <div class="footer">
            <div class="sharethis-inline-share-buttons"></div>
            <div class="row">
                Aniplay does not store any files on our server. we only linked to the media which is hosted on 3rd
                party services.
                <br><br>
                ANIPLAY Copyright © 2021 Aniplay - All rights reserved || Designed By: Parvinder Singh
            </div>
        </div>
    </footer>

</body>
<script src="/ANIWORLD/Script.js"></script>
<script src="/ANIWORLD/AvailList.js"></script>
<script src="/ANIWORLD/SearchResult.js"></script>
<script src="/ANIWORLD/Player/PlayerContent.js"></script>

</html>