<x-layout>
    <div class="container">
        <h3>Aplikuojančių darbuotojų sąrašas</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Vardas</th>
                    <th>El. Paštas</th>
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
                        <td>{{ $career->position }}</td>
                        <td>{{ $career->cover_letter }}</td>
                        <td>
                            @if ($career->cv)
                            <a class="btn btn-success" href="{{ route('file.download', [ 'filename' => $career->cv ]) }}">Parsisiųsti</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>