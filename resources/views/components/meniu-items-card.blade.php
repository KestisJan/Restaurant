@props(['menuItem'])

<tr>
    <td>
        {{$meniuItem->name}}
        <img style="width: 200px" src="{{asset ('storage/' . $meniuItem->image)}}"/>
    </td>
    <td>{{$meniuItem->price}} eu</td>
    <td style="width: 300px">{{$meniuItem->description}}</td>
    <td>
    <a href="/meniu-items/{{$meniuItem->id}}/edit">Redaguoti patiekalą</a>
    </td>
</tr>
