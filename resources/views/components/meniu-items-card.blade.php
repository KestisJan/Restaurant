@props(['menuItem'])

<tr>
    <td>{{$menuItem->name}}</td>
    <td>{{$menuItem->price}} eu</td>
    <td>{{$menuItem->description}}</td>
    <img src="{{asset ('storage/' . $menuItem->image)}}"/>
</tr>
