<?php
// ------------------------------------------------------ Download Button Section ------------------------------------------------

// function extractVideoId($link) {
//   // Define a regular expression pattern to match the video ID
//   $regex = '/\/e\/([^\/]+)\//';

//   // Use the regex pattern to extract the video ID from the link
//   preg_match($regex, $link, $match);

//   // Check if a match is found
//   if ($match && $match[1]) {
//       // The video ID is stored in $match[1]
//       return $match[1];
//   } else {
//       echo 'Video id does not detected';
//       // Return null if no match is found
//       return null;
//   }
// }

// Example usage
// $videoLink = 'https://streamtape.site/e/3BY2R6PWZxsdvrj/Zom100_Ep-01.mp4'; // Assuming $iframeSrc contains the video link

// $videoId = '3BY2R6PWZxsdvrj';

// // Output the result
// echo 'Video id from Url: ' . $videoId . PHP_EOL; // Output: jZarJB6emOsL8D

// $login = "eaf09585290523f4f998";
// $key = "okLAj7WeYouJBX0";
// $ticket = null;


// function fetchDownTicket($url) {
//     global $ticket;

//     $ch = curl_init($url);

//     // Set cURL options
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//     curl_setopt($ch, CURLOPT_TIMEOUT, 30); // Set a timeout value in seconds

//     $response = curl_exec($ch);

//     if ($response === false) {
//         die('Error fetching JSON: ' . curl_error($ch));
//     }

//     curl_close($ch);

//     $jsonData = json_decode($response, true);

//     if ($jsonData === null) {
//         die('Error decoding JSON');
//     }

//     // echo 'JSON data of Download Api: ' . print_r($jsonData, true) . PHP_EOL;

//     $ticket = $jsonData['result']['ticket'];
//     // echo 'Ticket Value: ' . $ticket . PHP_EOL;

//     // Simulate the setTimeout function with sleep
//     sleep(5);

//     $downLink = "https://api.streamtape.com/file/dl?file={$videoId}&ticket={$ticket}";
//     fetchDownLink($downLink);
// }

// function fetchDownLink($url) {
//     $ch = curl_init($url);

//     // Set cURL options
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

//     $response = curl_exec($ch);

//     if ($response === false) {
//         die('Error fetching JSON: ' . curl_error($ch));
//     }

//     curl_close($ch);

//     $jsonData = json_decode($response, true);

//     if ($jsonData === null) {
//         die('Error decoding JSON');
//     }

//     // echo 'JSON data for download link: ' . print_r($jsonData, true) . PHP_EOL;

//     $downLink = $jsonData['result']['url'];
//     // echo 'Download Link: ' . $downLink . PHP_EOL;

//     // You can set the download link in your HTML here
//     echo '<div id="DownloadButton"<a href="' . $downLink . '">Start Download</a></div>';
// }

// $downUrl = "https://api.streamtape.com/file/dlticket?file={$videoId}&login={$login}&key={$key}";

// // Assuming the downloadButton click event is triggered by a form submission
//     fetchDownTicket($downUrl);

?> 