<?php
// Function to tokenize and count word frequencies
function calculateWordFrequency($text) {
    // Tokenize the text into words
    $words = str_word_count($text, 1);

    // Convert all words to lowercase for case-insensitive counting
    $words = array_map('strtolower', $words);

    // Filter out common stop words (you can expand this list)
    $stopWords = ['the', 'and', 'in', 'of', 'to'];
    $filteredWords = array_diff($words, $stopWords);

    // Count word frequencies
    $wordCounts = array_count_values($filteredWords);

    // Sort by frequency in ascending or descending order
    if ($_POST['sort'] === 'desc') {
        arsort($wordCounts);
    } else {
        asort($wordCounts);
    }

    return $wordCounts;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input
    $text = $_POST['text'];

    // Calculate word frequencies
    $wordFrequencies = calculateWordFrequency($text);

    // Limit the number of words to display
    $limit = (int)$_POST['limit'];
    $wordFrequencies = array_slice($wordFrequencies, 0, $limit);

    // Display the result
    echo '<h2>Word Frequency:</h2>';
    echo '<ul>';
    foreach ($wordFrequencies as $word => $frequency) {
        echo '<li>' . ucfirst($word) . ': ' . $frequency . '</li>';
    }
    echo '</ul>';
}
?>
