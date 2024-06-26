<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Selamat Datang di Website Baru Saya!</h1>
        <nav>
            <a href="#home">Home</a> |
            <a href="#gallery">Gallery</a> |
            <a href="#blog">Blog</a> |
            <a href="#contact">Contact</a> |
            <a href="logout.php">Logout</a> |
            <a id="light" href="javascript:;" onclick="dark();">Dark Mode</a>
        </nav>
    </header>
    <main>
        <section id="home">
            <h2>Home</h2>
            <p>
                Hello there! My name is Christin Rachell Jocom and I am currently a fourth semester student at Sam Ratulangi University majoring in Informatics Engineering. I am a friendly and outgoing individual who loves to explore the world of technology. Being passionate about learning new things, I am always eager to expand my knowledge and skills in the field of IT.
            </p>
            <div style="margin-bottom: 20px;">
                <img src="asset/me.jpeg" alt="Image" style="border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);" width="200" height="300">
            </div>
            <b>Amsal 23:18</b><br>
            <i>"Karena masa depan sungguh ada, dan harapanmu tidak akan hilang."</i>
        </section>

        <section id="gallery">
            <h2>Gallery</h2>
            <p>Berikut ini adalah kumpulan gambar langit biru ~</p>
            <img src="asset/sky.jpg" alt="Foto 1" class="frame" width="300" height="200">
            <img src="asset/space.jpg" alt="Foto 2" class="frame" width="300" height="200">
            <img src="asset/blue.jpg" alt="Foto 3" class="frame" width="300" height="200">
            <img src="asset/cloud.jpg" alt="Foto 4" class="frame" width="300" height="200">
        </section>

        <section id="blog">
            <h2>Blog</h2>
            <article class="article-card">
                <h3>Bulan</h3>
                <p>Bulan adalah satelit alami Bumi satu-satunya dan merupakan satelit terbesar kelima dalam Tata Surya.</p>
                <a class="read-more" href="https://www.cnnindonesia.com/tag/moon" target="_blank">Read more</a>
            </article>
            <article class="article-card">
                <h3>Planet</h3>
                <p>Planet adalah benda astronomi yang mengorbit sebuah bintang.</p>
                <a class="read-more" href="https://www.cnnindonesia.com/tag/planet" target="_blank">Read more</a>
            </article>
            <article class="article-card">
                <h3>Matahari</h3>
                <p>Matahari adalah bintang di pusat Tata Surya. </p>
                <a class="read-more" href="https://www.cnnindonesia.com/tag/sun" target="_blank">Read more</a>
            </article>
        </section>

        <section id="contact">
            <h2>Contact</h2>
            <p>Email: christin.jocom.01@gmail.com</p>
            <p>Phone: 08123456789</p>
        </section>
    </main>
    <footer>
        <p>© 2024</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
