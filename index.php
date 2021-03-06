<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="css/Style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    
</head>
<body>
    <?php include 'Menu.php'; ?>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Bijaya Soti</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="#">About Me</a>
            </div>
        </div>
    </section>

    <!-- footer section -->
    <div>
    <?php include "Footer.php"; ?>
    </div>
    <!-- including JS Script -->
    <script src="script/animation.js"></script>
</body>
</html>

