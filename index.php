<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Black Jack Game</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="has-text-centered">
    <h1><b>The BlackJack Game</b></h1>
</header>
<section class="section">
    <div class="container">
        <form class="has-text-centered" method="post" action="">
                <button class="button is-primary is-light is-large" name="deal" value="deal" id="deal">Deal</button>
                <button class="button is-warning is-light is-large" name="hit" value="hit" id="hit">Hit</button>
                <button class="button is-danger is-light is-large" name="stand" value="stand" id="stand">Stand</button>
            </form>
            </div>
        </div>
    </div>
    <div class="container" id="deck">
    </div>

</section>
</body>
</html>