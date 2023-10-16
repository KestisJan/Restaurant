<div class="row justify-content-center">
    <div class="col-auto">
        <form method="POST" action="/meniu-items" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="category" class="form-label">Patiekalo kategorija</label>
                <select class="form-select" name="category_id">
                    <option value="" selected disabled>Pasirinkite kategorija</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Pavadinimas</label>
                <input type="text" class="form-control" name="name" placeholder="Patiekalo pavadinimas">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Kaina</label>
                <input type="text" class="form-control" name="price" placeholder="Įrašykite patiekalo kainą">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Aprašymas</label>
                <textarea rows="4" class="form-control" name="description" placeholder="Patiekalo aprašymas"></textarea>
            </div>
            {{-- <div class="mb-3">
                <label for="image" class="form-label">Patiekalo nuotraukos</label>
                <input type="file" class="form-control" name="image">
            </div> --}}
            <button type="submit" class="btn btn-primary">Sukurti patiekalą</button>
        </form>
    </div>
</div>