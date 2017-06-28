<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nick Davidson &mdash; Web Developer</title>
    <meta name="description" content="Web Developer, Classical Musician">

    <meta property="og:title" content="Nick Davidson">
    <meta property="og:description" content="Web Developer in Chattanooga, TN">
    <meta property="og:image" content="/assets/dist/img/horn-by-building.jpg">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="//nickdanieldavidson.com">
    <meta name="twitter:title" content="Nick Davidson">
    <meta name="twitter:description" content="Web Developer in Chattanooga, TN">
    <meta name="twitter:image" content="/assets/dist/img/horn-by-building.jpg">

    <?php include("partials/loadcss.php"); ?>
    <script>
        loadCSS("https://fonts.googleapis.com/css?family=Fanwood+Text:400,400i|Source+Sans+Pro:400,600,700");
        loadCSS("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");

        // var flexGridLoaded = new Event("flexGridLoaded");
        // var mainStylesLoaded = new Event("mainStylesLoaded");
        //
        // document.addEventListener("flexGridLoaded", function() {
        //     document.body.classList.add("flex-grid-loaded");
        // });
        // document.addEventListener("mainStylesLoaded", function() {
        //     document.body.classList.add("main-styles-loaded");
        // });
    </script>

    <?php if ($_COOKIE['csscached']) : ?>
        <style>
            <?php include("assets/dist/css/critical.css"); ?>
        </style>
        <link rel="preload" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.css" as="style" onload="this.rel='stylesheet'">
        <link rel="preload" href="/assets/dist/css/app.min.css" as="style" onload="this.rel='stylesheet'">
        <noscript>
            <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.css">
            <link rel="stylesheet" href="/assets/dist/css/app.min.css">
        </noscript>
    <?php else : ?>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.css">
        <link rel="stylesheet" href="/assets/dist/css/app.min.css">
        <script>
            // document.dispatchEvent(flexGridLoaded);
            // document.dispatchEvent(mainStylesLoaded);
            document.cookie = "csscached=Yes; expires=Thu, 18 Dec 2030 12:00:00 UTC"
        </script>
    <?php endif; ?>
</head>
