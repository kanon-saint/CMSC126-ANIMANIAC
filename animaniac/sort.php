<?php
function applySorting($sortBy)
{
    // Retrieve wishlist items from the database
    $user_id = 1; // Replace '1' with the desired user ID

    // Initialize filter conditions
    $genreFilter = "";
    $categoryFilter = "";

    // Check if genre filter is selected
    if (isset($_GET['genre'])) {
        $selectedGenres = (array)$_GET['genre']; // Cast the value to an array
        $genreFilter = "AND g.genre_name IN ('" . implode("','", $selectedGenres) . "')";
    }

    // Check if category filter is selected
    if (isset($_GET['categories'])) {
        $selectedCategories = (array)$_GET['categories']; // Cast the value to an array
        $categoryFilter = "AND c.category_name IN ('" . implode("','", $selectedCategories) . "')";
    }

    include 'DBConnector.php';

    $sql = "SELECT p.product_id, p.product_name, p.price, p.product_img, AVG(r.rating) AS average_rating, c.category_name
            FROM product p
            INNER JOIN wishlist w ON p.product_id = w.product_id
            INNER JOIN category c ON p.category_id = c.category_id
            INNER JOIN product_genre pg ON p.product_id = pg.product_id
            INNER JOIN genre g ON pg.genre_id = g.genre_id
            LEFT JOIN review r ON p.product_id = r.product_id
            WHERE w.user_id = $user_id
            $genreFilter
            $categoryFilter
            GROUP BY p.product_id";

    // Sorting based on selected option
    switch ($sortBy) {
        case "newest":
            $sql .= " ORDER BY w.wish_date DESC";
            break;
        case "oldest":
            $sql .= " ORDER BY w.wish_date ASC";
            break;
        case "price-low":
            $sql .= " ORDER BY p.price ASC";
            break;
        case "price-high":
            $sql .= " ORDER BY p.price DESC";
            break;
        default:
            $sql .= " ORDER BY w.wish_date DESC";
    }


    $result = $conn->query($sql);

    // Return the sorted result
    return $result;
}