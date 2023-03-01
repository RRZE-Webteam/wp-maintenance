<?php
defined('ABSPATH') || exit;
header('HTTP/1.1 503 Service Unavailable');
header('Retry-After: 600');
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>This website is temporarily unavailable</title>
    <meta name="description" content="This website is temporarily unavailable">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg%20width=%2248%22%20height=%2248%22%20viewBox=%220%200%2048%2048%22%20xmlns=%22http://www.w3.org/2000/svg%22%3E%20%20%20%3Cdefs%3E%3C/defs%3E%20%20%20%3Cpath%20stroke=%22#002F6C%22%20d=%22M%2038.777%2021.633%20L%2044.777%2018.633%20C%2044.377%2017.033%2043.777%2015.433%2043.077%2013.833%20L%2036.577%2015.333%20C%2035.677%2013.933%2034.577%2012.633%2033.177%2011.533%20L%2035.277%205.233%20C%2033.867%204.33%2032.357%203.591%2030.777%203.033%20L%2027.177%208.533%20C%2025.477%208.133%2023.777%208.033%2022.077%208.233%20L%2019.077%202.333%20C%2017.477%202.733%2015.877%203.333%2014.377%204.033%20L%2015.777%2010.333%20C%2014.277%2011.333%2012.977%2012.333%2011.877%2013.833%20L%205.777%2011.733%20C%204.856%2013.17%204.117%2014.715%203.577%2016.333%20L%209.077%2019.933%20C%208.686%2021.604%208.585%2023.329%208.777%2025.033%20L%202.877%2028.033%20C%203.277%2029.633%203.877%2031.233%204.577%2032.733%20L%2010.777%2031.333%20C%2011.777%2032.833%2012.877%2034.133%2014.277%2035.233%20L%2012.177%2041.533%20C%2013.584%2042.444%2015.095%2043.182%2016.677%2043.733%20L%2020.277%2038.133%20C%2021.977%2038.533%2023.777%2038.633%2025.477%2038.433%20L%2028.377%2044.333%20C%2029.977%2043.933%2031.577%2043.333%2033.177%2042.633%20L%2031.777%2036.333%20C%2033.177%2035.333%2034.477%2034.233%2035.577%2032.833%20L%2041.877%2034.933%20C%2042.783%2033.524%2043.522%2032.014%2044.077%2030.433%20L%2038.477%2026.833%20C%2038.877%2025.133%2038.977%2023.333%2038.777%2021.733%20L%2038.777%2021.633%20Z%20M%2030.277%2026.333%20C%2027.891%2031.26%2021.066%2031.756%2017.992%2027.226%20C%2016.566%2025.124%2016.37%2022.42%2017.477%2020.133%20C%2019.863%2015.207%2026.688%2014.711%2029.762%2019.241%20C%2031.188%2021.343%2031.385%2024.047%2030.277%2026.333%20Z%22%20style=%22fill-rule:%20nonzero;%20fill:%20rgb(255,%20255,%20255);%22%3E%3C/path%3E%20%3C/svg%3E">
    <link rel="icon" type="image/png" href="data:image/png;base64,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" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background-color: #f9f9f9;
            color: #535368;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column;
            text-align: center;
        }

        .artwork {
            height: auto;
            max-height: 50vh;
            max-width: 80vw;
            margin-bottom: 4rem;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin: 1rem 0;
            color: #2f2e41;
        }

        h2 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #2f2e41;
        }

        p {
            line-height: 1.6;
            font-size: 1.4rem;
        }

        @media only screen and (max-width: 500px) {
            html {
                font-size: 75%;
            }
        }

        @media (prefers-color-scheme: dark) {
            body {
                background-color: #535368;
                color: #f9f9f9;
            }

            h1,
            h2 {
                color: #f9f9f9;
            }
        }
    </style>
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="70" viewBox="0 0 100 68">
        <g id="large">
            <path fill="none" stroke="#002F6C" d="M55.8 38.5l6.2-1.2c0-1.8-.1-3.5-.4-5.3l-6.3-.2c-.5-2-1.2-4-2.1-6l4.8-4c-.9-1.6-1.9-3-3-4.4l-5.6 3c-1.3-1.6-3-3-4.7-4.1l2-6A30 30 0 0 0 42 8l-3.3 5.4c-2-.7-4.2-1-6.2-1.2L31.3 6c-1.8 0-3.5.1-5.3.4l-.2 6.3c-2 .5-4 1.2-6 2.1l-4-4.8c-1.6.9-3 1.9-4.4 3l3 5.6c-1.6 1.3-3 3-4.1 4.7l-6-2A32.5 32.5 0 0 0 2 26l5.4 3.3c-.7 2-1 4.2-1.2 6.2L0 36.7c0 1.8.1 3.5.4 5.3l6.3.2c.5 2 1.2 4 2.1 6l-4.8 4c.9 1.6 1.9 3 3 4.4l5.6-3c1.4 1.6 3 3 4.7 4.1l-2 6A30.5 30.5 0 0 0 20 66l3.4-5.4c2 .7 4 1 6.1 1.2l1.2 6.2c1.8 0 3.5-.1 5.3-.4l.2-6.3c2-.5 4-1.2 6-2.1l4 4.8c1.6-.9 3-1.9 4.4-3l-3-5.6c1.6-1.3 3-3 4.1-4.7l6 2A32 32 0 0 0 60 48l-5.4-3.3c.7-2 1-4.2 1.2-6.2zm-13.5 4a12.5 12.5 0 1 1-22.6-11 12.5 12.5 0 0 1 22.6 11z" />
            <animateTransform attributeName="transform" begin="0s" dur="3s" from="0 31 37" repeatCount="indefinite" to="360 31 37" type="rotate" />
        </g>
        <g id="small">
            <path fill="none" stroke="#002F6C" d="M93 19.3l6-3c-.4-1.6-1-3.2-1.7-4.8L90.8 13c-.9-1.4-2-2.7-3.4-3.8l2.1-6.3A21.8 21.8 0 0 0 85 .7l-3.6 5.5c-1.7-.4-3.4-.5-5.1-.3l-3-5.9c-1.6.4-3.2 1-4.7 1.7L70 8c-1.5 1-2.8 2-3.9 3.5L60 9.4a20.6 20.6 0 0 0-2.2 4.6l5.5 3.6a15 15 0 0 0-.3 5.1l-5.9 3c.4 1.6 1 3.2 1.7 4.7L65 29c1 1.5 2.1 2.8 3.5 3.9l-2.1 6.3a21 21 0 0 0 4.5 2.2l3.6-5.6c1.7.4 3.5.5 5.2.3l2.9 5.9c1.6-.4 3.2-1 4.8-1.7L86 34c1.4-1 2.7-2.1 3.8-3.5l6.3 2.1a21.5 21.5 0 0 0 2.2-4.5l-5.6-3.6c.4-1.7.5-3.5.3-5.1zM84.5 24a7 7 0 1 1-12.8-6.2 7 7 0 0 1 12.8 6.2z" />
            <animateTransform attributeName="transform" begin="0s" dur="2s" from="0 78 21" repeatCount="indefinite" to="-360 78 21" type="rotate" />
        </g>
    </svg>
    <h1 id="title">This website is temporarily unavailable.</h1>

    <div id="de">
        <h2>Diese Website ist vorübergehend nicht verfügbar</h2>
        <p>Geplante Wartungsarbeiten werden derzeit durchgeführt</p>
        <p>Wir sind in Kürze zurück.</p>
    </div>

    <div id="default">
        <h2>This website is temporarily unavailable</h2>
        <p>Scheduled maintenance is currently in progress.</p>
        <p>We'll be back shortly.</p>
    </div>

    <script>
        const message = location.host;
        document.title = message;
        document.querySelector('meta[name="description"]').setAttribute("content", message);
        document.querySelector('#title').textContent = message;
        const userLang = navigator.language.slice(0, 2);
        if (userLang == 'de') {
            document.getElementById("default").style.display = "none";
        } else {
            document.getElementById("de").style.display = "none";
        }
    </script>
</body>

</html>