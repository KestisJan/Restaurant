<x-layout>
    <div class="container p-5">
        <h3>Karjera</h3>

        <form method="POST" action="/career" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label for="name">Vardas</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-4">
                <label for="email">El. Paštas</label>
                <input type="text" name="email" class="form-control" required>
            </div>

            <div class="mb-5">
                <label for="position">Pozicija, kuri domina</label>
                <input type="text" name="position" class="form-control" required>
            </div>

            <div class="mb-6">
                <label for="cover_letter">Tekstas</label>
                <textarea name="cover_letter" class="form-control" rows="3"></textarea>
            </div>

            <div class="form-check mb-8">
                <input type="checkbox" name="privacy_policy" class="form-check-input" value="1" required>
                <label class="form-check-label" for="privacy_policy" >Aš sutinktu su Italy Restaurant privatumo politika</label>
            </div>

            <div class="mb-7">
                <label for="cv">Įkelti CV</label>
                <input type="file" name="cv" class="form-control-file" required>
            </div>

            <button type="submit" class="btn btn-primary">Siųsti</button>
    </div>
</x-layout>