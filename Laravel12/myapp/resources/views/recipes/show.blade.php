<x-layout>

    <h1 @class(["font-semibold","text-2xl", "mb-5"])>{{$recipe['title']}}</h1>

    <h3 @class(["font-semibold","text-xl", "mt-4", "mb-2"])>Les Ingrédients:</h3>
    @foreach($recipe["ingredients"] as $ingredient)
        <ul>
            <li @class(["text-zinc-500"])>{{$ingredient}}</li>
        </ul>
    @endforeach
</x-layout>
