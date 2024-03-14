<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-image: url('background.jpg');
            background-size: cover;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        header nav {
            display: flex;
            justify-content: center;
        }
        header nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
        }
        .container {
            flex: 1;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(126, 233, 227, 0.555);
        }
        h2 {
            font-size: 20px;
            margin-top: 20px;
        }
        p {
            margin-bottom: 10px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .team-member {
            margin-bottom: 20px;
        }
        .team-member a {
            color: #007bff;
            text-decoration: none;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
        }
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Install Dungeon Crawler On Demand!</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">Contact Us</a>
            <a href="#">About the Project</a>
            <a href="#">Diagram</a>
        </nav>
    </header>
     <iframe width="100%" height="60" src="https://rss.app/embed/v1/ticker/tW4RpOAIHaYqHBp8" frameborder="0"></iframe>
    <div class="container">
        <h2>About Us</h2>
        <p>Welcome to our website! We are a dedicated team passionate about creating innovative solutions.</p>
        <h3>Meet the Team</h3>
        <div class="team-member">
            <p>Abel Mengstu - <a href="https://github.com/abeldbase">GitHub</a></p>
        </div>
        <div class="team-member">
            <p>Christian Velez - <a href="https://github.com/ChristianVelezW">GitHub</a></p>
        </div>
        <div class="team-member">
            <p>Carl Van Norman - <a href="https://github.com/Dapeople">GitHub</a></p>
        </div>
        <h2>Contact Us</h2>
        <form action="#" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
    <footer>
        &copy; stack-group3, 2024 Seattle Central College IT115
    </footer>
</body>
</html>
