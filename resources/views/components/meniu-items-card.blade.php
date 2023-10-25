@props(['meniuItem'])

<tr>
    <td>
        {{$meniuItem->name}}
    </td>
    <td>
        <img style="width: 100px" src="{{asset ('storage/' . $meniuItem->image)}}"/>
    </td>
    <td>{{$meniuItem->price}} €</td>
    <td style="width: 15em">{{$meniuItem->description}}</td>
    <td>
        <a href="/meniu-items/{{$meniuItem->id}}/edit" style="color: black"><i class="fa-solid fa-pencil"></i></a>

        <form method="POST" action="/meniu-items/{{$meniuItem->id}}">
            @csrf
            @method('DELETE')
            <a href="#" class="delete-link" style="color: black"><i class="fa-sharp fa-solid fa-trash"></i></a>
        </form>
    </td>
</tr>
