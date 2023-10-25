<x-layout>
<div class="container">
    <div class="row justify-content-center align-items-center p-5">
        <div class="col-auto">
            <form method="POST" action="/categories">
                @csrf
                <div class="mb-3">
                    <label for="category" class="form-label">Sukurti patiekalo kategoriją</label>
                    <input type="text" class="form-control" name="name" placeholder="Patiekalo kategorijos pavadinimas" style="width: 300px">
                </div>
                <button type="submit" class="btn btn-primary">Sukurti patiekalo kategoriją</button>
            </form>
        </div>
    </div>
</div>
</x-layout>