@props(['meniuItem'])

<tr>
    <td>
        {{$meniuItem->name}}
        <img style="width: 200px" src="{{asset ('storage/' . $meniuItem->image)}}"/>
    </td>
    <td>{{$meniuItem->price}} eu</td>
    <td style="width: 300px">{{$meniuItem->description}}</td>
    <td>
        <a href="/meniu-items/{{$meniuItem->id}}/edit" class="btn btn-primary">Redaguoti patiekalą</a>

        <form method="POST" action="/meniu-items/{{$meniuItem->id}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Ištrinti patiekalą</button>
        </form>
    </td>
</tr>
