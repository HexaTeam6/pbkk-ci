<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
    <link rel="stylesheet" href="<?= base_url('/assets/css/about.css') ?>" type="text/css">
</head>
<body>
    <div class="card-container">
        <span class="pro">PRO</span>
        <img class="round" src="<?= base_url('/assets/img/me.jpg') ?>" height="175px" width="175px" alt="user" />
        <h3>Abdur Rachman Wahed</h3>
        <h6>Surabaya</h6>
        <p>User interface designer and <br/> fullstack developer</p>
        <div class="buttons">
            <a href="<?= site_url('welcome/contact') ?>">
                <button class="primary" style="cursor: pointer">
                    Contact Me!
                </button>
            </a>
        </div>
        <div class="skills">
            <h6>Skills</h6>
            <ul>
                <li>UI / UX</li>
                <li>Web Development</li>
                <li>Big Data</li>
                <li>Cloud Computing</li>
                <li>JavaScript</li>
                <li>React</li>
                <li>IOT</li>
            </ul>
        </div>
    </div>
</body>
</html>