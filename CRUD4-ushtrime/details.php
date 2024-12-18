<?php include("header.php"); ?>

    <style>
        /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    line-height: 1.6;
}

.container {
    max-width: 600px;
    margin: 30px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1, h2 {
    margin-bottom: 10px;
    color: #222;
}

p {
    margin-bottom: 20px;
    font-size: 0.9rem;
}

form label {
    display: block;
    margin: 10px 0 5px;
    font-weight: bold;
}

form input, form select {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
}

form button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    font-size: 1rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

form button:hover {
    background-color: #0056b3;
}
    </style>

<div class="card-container" style="display: flex; justify-content: center; margin: 20px;">
    <!-- Movie 1 -->
    <div class="card shadow-sm" style="width: 800px; display: flex; flex-direction: row; border: 1px solid #ddd; border-radius: 8px; overflow: hidden;">
        <!-- Left Side: Image -->
        <img src="https://cdn.sortiraparis.com/images/80/98390/979068-prison-break-la-serie-culte-des-annees-2000-bientot-de-retour-que-sait-on-de-ce-nouveau-projet.jpg" 
             alt="Prison Break" 
             style="width: 40%; height: auto; object-fit: cover;">
        
        <!-- Right Side: Details and Form -->
        <div style="width: 60%; padding: 20px; display: flex; flex-direction: column; justify-content: space-between;">
            <!-- Movie Details -->
            <div>
                <h5 class="card-title" style="margin-bottom: 10px;">Prison Break</h5>
                <p class="card-text" style="margin-bottom: 20px;">
                    Architect Michael Scofield gets himself imprisoned to break out his wrongly convicted brother, Lincoln Burrows...
                </p>
               
            </div>

            <!-- Registration Form -->
            <form action="#" method="POST">
                <!-- Number of tickets -->
                <label for="tickets">Number of tickets</label>
                <input type="number" id="tickets" name="tickets" min="1" max="5" required>
                <!-- Date -->
                <label for="date">Date</label>
                <input type="date" id="date" name="date" required>

                <!-- Time -->
                <label for="time">Time</label>
                <select id="time" name="time" required>
                    <option value="12:00">12:00</option>
                    <option value="14:00">14:00</option>
                    <option value="16:00">16:00</option>
                    <option value="18:00">18:00</option>
                </select>

                <!-- Submit Button -->
                <button type="submit">Book</button>
            </form>
        </div>
    </div>
</div>
