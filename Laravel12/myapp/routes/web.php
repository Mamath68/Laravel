<?php

    use App\Models\Recipe;
    use Illuminate\Support\Arr;
    use Illuminate\Support\Facades\Route;

    Route::view( "/", "homepage" )->name( "homepage" );

    Route::view( "/projects", "projects" )->name( "projects" );

    Route::get( "/recipes", function() {
        $model = new Recipe();
        $recipes = $model->getAll();
        return view( "recipes.index", compact( "recipes" ) );
    } )->name( "recipes.index" );

    Route::get( "/recipe/{id}", function( int $id ) {
        $model = new Recipe();
        $recipe = $model->getOnById( $id );
        return view( "recipes.show", compact( "recipe" ) );
    } )->name( "recipes.show" );
