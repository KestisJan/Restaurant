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
<body style="display: flex; flex-direction: column; min-height: 100vh; margin: 0;">
    <nav style="background-color: #333D51;" class="d-flex flex-row-reverse">
        <div class="p-3 ">
            @auth
            <a href="/categories/create" class="p-3">Sukurti kategoriją</a>
            <a href="/meniu-items/create" class="p-3">Priskirti patiekalą</a>
            <a href="{{ route('applicants.index') }}" class="p-3">Pretendentų sąrašas</a>
            <a href="/" class="p-2">Menių</a>
            <a href="/career/apply" class="p-3">Karjera</a>
            <li>
                <form class="inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit">
                        <i class="fa-solid fa-door-closed"></i> logout
                    </button>
                </form>
            </li>
            @else
            <a href="/" class="p-2">Menių</a>
            <a href="/career/apply" class="p-3">Karjera</a>
            @endauth
        </div>
    </nav>
    <main style="background-color: #F4F3EA; flex-grow: 1; padding: 3em">
        {{$slot}}
    </main>
    <footer style="background-color: #333D51; color: #fff; text-align: center; padding: 25px">
        <p>Copyright &copy; 2023, All Rights reserved</p>
    </footer>
</body>
</html>