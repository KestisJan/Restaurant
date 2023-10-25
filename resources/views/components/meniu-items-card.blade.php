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
        <a href="/meniu-items/{{$meniuItem->id}}/edit" class="btn btn-primary">Redaguoti patiekalą</a>

        <form method="POST" action="/meniu-items/{{$meniuItem->id}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Ištrinti patiekalą</button>
        </form>
    </td>
</tr>
