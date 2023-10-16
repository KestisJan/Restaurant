<x-layout>
<div class="row justify-content-center">
    <div class="col-auto">
        <div class="text-center my-4">
            <h1 class="text-2x1 font-semibold">Kategorijų sąrašas</h1>
        </div>
        <table class="w-full table-auto rounded-sm">
            <tbody>
                @foreach($categories as $category)
                <tr class="border-gray-300">
                    <td>
                        <h2>{{ $category->name }}</h2>
                        @foreach($menuItems as $menuItem)
                        @if($category->id === $menuItem->category_id)
                        <span>{{$menuItem->name}} ({{$menuItem->price}} eu)</span>
                        @endif
                        @endforeach
                    </td>
                    <td class="px-4 py-2 border-t border-b border-gray-300 text-lg">
                        <form method="POST" action="/categories/{{$category->id}}">
                            @csrf
                            @method('DELETE')
                            <button><i class="fas fa-trash"></i> Ištrinti kategoriją</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</x-layout>