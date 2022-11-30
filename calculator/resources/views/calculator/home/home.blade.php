<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <title>Calculator HTML Code Example</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <!-- Demo CSS (No need to include it into your project) -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/demo.css">

</head>
<body>
<main>
    <div class="container calculator">
        <div class="screen-item screen"> <span>Display</span></div>
        <dl class="touche__box">
            <dt class="clear-item"> <span>AC</span></dt>
            <dt class="touche__box-item"> <span class="soustraction">_</span></dt>
            <dt class="touche__box-item"><span class="sign">+</span></dt>
            <dt class="touche__box-item clearme"> <span>7</span></dt>
            <dt class="touche__box-item"> <span>8</span></dt>
            <dt class="touche__box-item"> <span>9</span></dt>
            <dt class="touche__box-item"><span class="sign">/</span></dt>
            <dt class="touche__box-item"> <span>4</span></dt>
            <dt class="touche__box-item"> <span>5</span></dt>
            <dt class="touche__box-item"> <span>6</span></dt>
            <dt class="touche__box-item"><span class="sign">x</span></dt>
            <dt class="touche__box-item"> <span>1</span></dt>
            <dt class="touche__box-item"> <span>2</span></dt>
            <dt class="touche__box-item"> <span>3</span></dt>
            <dt class="equal-item"><span class="sign-equal">=</span></dt>
            <dt class="touche__box-item zero-item"> <span>0</span></dt>
            <dt class="touche__box-item un-item"><span class="sign">.</span></dt>
        </dl>
    </div>
</main>

<footer class="credit">Created by Rafi Ahmed</footer>

<script  src="{{asset('assets')}}/js/script.js"></script>

</body>
</html>
