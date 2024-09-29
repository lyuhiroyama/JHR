<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Honest Hostel Reviews</title>
</head>
<body>
    <h3>Honest Hostel Reviews</h3>
    <div id="search-bar">
        <input type="text" id="search-input" placeholder="Search hostels">
        <button id="search-button">Search</button>
    </div>

    <div id="hostel-list"></div>
    <div id="review-section" style="display: none;">
        <h2 id="hostel-name"></h2>
        <div id="reviews"></div>
        <form id="review-form">
            <input type="text" id="user-name" placeholder="Your name" required>
            <input type="number" id="rating" min="1" max="5" placeholder="Rating (1-5)" required>
            <textarea id="review-text" placeholder="Write your review here" required></textarea>
            <button type="submit">Submit Review</button>
        </form>
    </div>

    <script>
        // Fetch & Dipslay hostels
        function fetchHostels() {
            $.getJSON('get_hostels.php', function(hostels) {
                $('#hostel-list').empty();
                hostels.forEach(hostel => {
                    $('#hostel-list').append(`
                        <div class="hostel">
                            <h3>${hostel.name}</h3>
                            <p>${hostel.description}</p>
                            <p>Location: ${hostel.location}</p>
                            <p>Price Range: ${hostel.price_range}</p>
                            <p>Rating: ${hostels.rating}</p>
                        </div>
                    `)
                })
            })
        }

        $(document).ready(fetchHostels);
        
    </script>
</body>
</html>
