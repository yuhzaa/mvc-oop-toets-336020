<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vulkanen</title>
</head>
<body>
<style>
body {
    font-family: Verdana, sans-serif;
    background-color: #F5F5F5;
    margin: 0;
    padding: 0;
   margin-top: 10rem;
}

.container {
    width: 90%;
    max-width: 800px;
    margin: 0 auto;
    padding: 2rem;
    background-color: #FFF;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

.title {
    text-align: center;
    color: greenyellow;
    font-size: 2rem;
    margin-top: 2rem;
    text-shadow: 1px 1px #DDD;
}

.table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 0.1rem;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.table th,
.table td {
    padding: 1rem;
    text-align: left;
    border: none;
    font-size: 1rem;
}

.table thead {
    background-color: #EEE;
    font-weight: bold;
}
</style>
    <div class="container">
        <h3 class="title"><?= $data['title']; ?></h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Naam</th>
                    <th>Hoogte (m)</th>
                    <th>Land</th>
                    <th>Laatste Uitbarsting</th>
                    <th>Aantal Slachtoffers</th>
                </tr>
            </thead>
            <tbody>
                <?= $data['rows']; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
