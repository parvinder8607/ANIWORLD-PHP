<?php

function fetchDataWithRetry($url, $retryCount) {
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept: application/json']);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    if ($httpCode === 200) {
        return json_decode($response, true);
    } elseif ($httpCode === 429) {
        // Retry with exponential backoff
        $retryCount++;
        $delay = pow(2, $retryCount) * 1000; // Exponential backoff formula
        echo "Too Many Requests. Retrying in " . $delay / 1000 . " seconds...\n";
        sleep($delay / 1000);
        return fetchDataWithRetry($url, $retryCount);
    } else {
        throw new Exception("Network response was not ok, status: $httpCode");
    }
}

function fetchAvail($url) {
    $maxRetries = 3; // Maximum number of retry attempts
    $retryCount = 0;

    try {
        $jsonData = fetchDataWithRetry($url, $retryCount);
        // Do something with the JSON data here
        $dataArray = $jsonData['data'];

        // echo 'JSON data:';
        // print_r($jsonData);

        // Looping through the 'data' array
        $itemTitle = $dataArray['title_english'] ?? $dataArray['title'];
        $itemID = $dataArray['mal_id'];
        $itemImg = $dataArray['images']['jpg']['image_url'];
        $itemDesc = $dataArray['synopsis'];

        echo '<div class="item-card">';
        echo '<div class="item" onClick="redirectToPlayer(\'' . $itemID . '\')">';
        echo '<img src="' . $itemImg . '" alt="' . $itemTitle . '">';
        echo '<p>' . $itemTitle . '</p>';
        echo '</div>';
        echo '<div class="floatItem" onClick="redirectToPlayer(\'' . $itemID . '\')">';
        echo '<span>' . $itemTitle . '</span>';
        echo '<p>' . $itemDesc . '</p>';
        echo '<div class="playButton" onClick="redirectToPlayer(\'' . $itemID . '\')">Play</div>';
        echo '</div>';
        echo '</div>';
    } catch (Exception $e) {
        echo 'Error fetching JSON: ' . $e->getMessage();
    }
}

$availAnime = [
    "48316",
    "42249",
    "54918",
    "53887",
    "41487",
    "54112",
    "52347",
    "29803",
    "21",
    "40748",
    "52830"
];

foreach ($availAnime as $item) {
    $url = "https://api.jikan.moe/v4/anime/$item/full";
    fetchAvail($url);
}

?>
