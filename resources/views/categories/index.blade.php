<x-layout>
<div class="row justify-content-center">
    <div class="col-auto">
        <div class="text-center my-4">
            <h1 class="text-2x1 font-semibold">Kategorijų sąrašas</h1>
        </div>
        <table class="table table-hover table-default">
            @foreach($categories as $category)
                <form method="POST" action="/categories/{{$category->id}}">
                    @csrf
                    @method('DELETE')
                    <thead>
                        <tr>
                            <th scope="col" colspan="1">{{ $category->name }}</th>
                            <th scope="col" colspan="1">Kaina</th>
                            <th scope="col" colspan="3">Aprasymas</th>
                            <th scope="col" colspan="3" class="bg-">
                                <button><i class="fas fa-trash"></i> Ištrinti kategoriją</button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($meniuItems as $meniuItem)
                        @if($category->id === $meniuItem->category_id)
                        <x-meniu-items-card :meniuItem="$meniuItem"/>
                        @endif
                        @endforeach
                    </tbody>
            @endforeach
          </table>
    </div>
</div>
</x-layout>