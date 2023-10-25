<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Itališkas Restoranas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        a {
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>
<body>
    <nav style="background-color: #333D51; display: flex; justify-content: space-evenly; padding: 10px;">
        <a href="/">Pagrindinis puslapis</a>
        <a href="/categories/create">Sukurti kategoriją</a>
        <a href="/meniu-items/create">Priskirti patiekalą</a>
        <a href="/career/apply">Karjera</a>
        <a href="{{ route('applicants.index') }}">Pretendentų sąrašas</a>
    </nav>
    <main style="background-color: #F4F3EA;">
        {{$slot}}
    </main>
    <footer style="background-color: #333D51; color: #fff; text-align: center; padding: 25px">
        <p>Copyright &copy; 2023, All Rights reserved</p>
    </footer>
</body>
</html>