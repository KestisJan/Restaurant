<x-layout>
<div class="row justify-content-center">
    <div class="col-auto">
        <table class="w-full table-auto rounded-sm">
            <tbody>
                @foreach($categories as $category)
                <tr class="border-gray-300">
                    <td>
                        <h2> {{ $category->name }} </h2>
                    </td>
                    <td class="px-4 py-2 border-t border-b border-gray-300 text-lg">
                       <form method="POST" action="/categories/{{$category->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Ištrinti</button>
                       </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
</x-layout>