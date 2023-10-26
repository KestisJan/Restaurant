<x-layout>
    <div class="container">
        <h3>Aplikuojančių darbuotojų sąrašas</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Vardas</th>
                    <th>El. Paštas</th>
                    <th>Telefonas</th>
                    <th>Pozicija</th>
                    <th>Tekstas</th>
                    <th>CV</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($careers as $career)
                    <tr>
                        <td>{{ $career->name }}</td>
                        <td>{{ $career->email }}</td>
                        <td>{{ $career->phone_number }}</td>
                        <td>{{ $career->position }}</td>
                        <td>{{ $career->cover_letter }}</td>
                        <td>
                            @if ($career->cv)
                            <a class="fa-regular fa-file" href="{{ route('file.download', [ 'filename' => $career->cv ]) }}" style="color: black"></a>
                            @endif
                            <form method="POST" action="/career/{{$career->id}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border: none; cursor: pointer;">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>