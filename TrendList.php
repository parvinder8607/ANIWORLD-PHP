<?php

                    function fetchTrend($url)
                    {
                        $jsonData = file_get_contents($url);

                        if ($jsonData === false) {
                            // Handle error fetching data
                            die("Error fetching JSON data");
                        }

                        $dataArray = json_decode($jsonData, true);

                        if ($dataArray === null) {
                            // Handle error decoding JSON
                            die("Error decoding JSON data");
                        }

                        // Access the 'data' array
                        foreach ($dataArray['data'] as $item) {
                            // Accessing the 'title' property within 'attributes'
                            $itemTitle = isset($item['title_english']) ? $item['title_english'] : $item['title'];
                            $itemID = $item['mal_id'];
                            $itemImg = $item['images']['jpg']['image_url'];

                            // Output HTML for each item
                            echo '<div class="trend-card">';
                            echo '<div class="trend-item" onClick="redirectToPlayer(\'' . $itemID . '\')">';
                            echo '<span>' . $itemTitle . '</span>';
                            echo '</div>';
                            echo '<div class="trend-image">';
                            echo '<img onClick="redirectToPlayer(\'' . $itemID . '\')" src="' . $itemImg . '" alt="Shangri-La Frontier">';
                            echo '</div>';
                            echo '</div>';
                        }
                    }

                    // Example usage
                    $url = 'https://api.jikan.moe/v4/top/anime?filter=favorite&type=tv&sfw=false&rating=r17';
                    fetchTrend($url);

                    ?>