<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <style>
            @font-face {
                font-family: 'medium-content-sans-serif-font';
                font-weight: 400;
                font-style: normal;
                src: url('https://glyph.medium.com/font/d8659c9/3k-4f_4h-6bt_6bv-6c3_6c5-6c7_6ca-6cb_6ce-6ch_6cj-6cl_6cn-nvnj/marat-sans-400-normal.woff') format('woff');
                unicode-range: U+80-9F,U+A1-2009,U+200B-2013,U+2015-2017,U+201A-201B,U+201E-2021,U+2023-2025,U+2027-10FFFF;
            }
            body {
                margin: 0;
                padding: 0;
            }
            .text {
                font-size: 21px;
                font-family: medium-content-sans-serif-font;
                letter-spacing: -0.003em;
                line-height: 32px;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                /* color: rgba(0, 0, 0, 0.84); */
                width: 100vw;
                height: 100vh;
                max-width: 700px;
                margin: 50px auto;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div class="text" contenteditable focus></div>
        <script>
            const ce = document.querySelector('[contenteditable]');
            ce.addEventListener('paste', function (event) {
                event.preventDefault();
                document.execCommand('inserttext', false, event.clipboardData.getData('text/plain'));
            });
            ce.focus();
        </script>
    </body>
</html>

