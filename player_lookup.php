<!-- lookup_player.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Old School RuneScape Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Jacob's Old School RuneScape Lookup</h1>
    </header>

    <main>
        <aside>
            <h2>Widgets</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="item_lookup.php">Lookup Item Info</a></li>
                <li class="active"><a href="player_lookup.php">Lookup Player Info</a></li>
            </ul>
        </aside>

        <section>
            <h2>Main Content</h2>
            <p>This is the main content of the Old School RuneScape-inspired home page. It features a dark background, orange titles, and other design elements reminiscent of the game.</p>

            <form method="post" action="">
                <label for="item">Lookup an Player:</label>
                <input type="text" id="player" name="player" placeholder="Enter player name" required>
                <button type="submit">Lookup</button>
            </form>

            <?php
            // PHP code for handling item lookup
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $itemName = htmlspecialchars($_POST["player"]);

                // Simulating item lookup (replace with actual database query)
                $itemInfo = getItemInfo($itemName);

                if ($itemInfo) {
                    echo "<h3>Player Information:</h3>";
                    echo "<p><strong>Name:</strong> " . $palyerInfo['name'] . "</p>";
                    echo "<p><strong>Description:</strong> " . $playerInfo['description'] . "</p>";
                    // Add more item details as needed
                } else {
                    echo "<p>No information found for the specified item.</p>";
                }
            }

            // Simulated function for item lookup (replace with actual database query)
            function getItemInfo($playerName) {
                $items = [
                    "item1" => ["name" => "Item 1", "description" => "Description for Item 1"],
                    "item2" => ["name" => "Item 2", "description" => "Description for Item 2"],
                    // Add more items as needed
                ];

                return isset($items[$playerName]) ? $items[$playerName] : null;
            }
            ?>
        </section>
    </main>

</body>
</html>
