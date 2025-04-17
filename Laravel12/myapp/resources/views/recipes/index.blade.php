<x-layout>

    <h1 class="text-3xl">Les Recettes</h1>

    @foreach($recipes as $key => $recipe)

        <p>
            <a href="{{route('recipes.show', $key)}}" @class(["underline", "text-blue-500"])>
                {{$recipe['title']}}
            </a>
        </p>
    @endforeach
</x-layout>
