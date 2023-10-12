<form method="POST" action="#" enctype="multipart/form-data">
    @csrf
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
        <input type="text" class="form-control" name="description" placeholder="Patiekalo aprašymas">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Patiekalo nuotraukos</label>
        <input type="file" class="form-control" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>