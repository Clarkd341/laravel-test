<h1>Liste des propriétés</h1>
<ul>
    @foreach ($properties as $property)
        <li>
            <a href="{{ route('properties.show', $property->id) }}">{{ $property->name }}</a>
        </li>
    @endforeach
</ul>
