<?php

namespace App\Http\Controllers\Api;

use App\Models\Potion;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Controller;

class PotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $potionsCollection = Potion::with('ingredients')->get();

      $listPotionsParsed = $potionsCollection->map(function($potion){
        $potionParsed = $potion->only(['id', 'name']);

        $potionParsed['ingredients'] = $potion->ingredients->map(function($ingredient){
          $ingredientParsed = $ingredient->only(['id', 'name', 'price_by_unit']);
          $ingredientParsed['proportion'] = $ingredient->pivot->proportion;
          return $ingredientParsed;
        });

        $price =$potionParsed['ingredients']->reduce(function($carry,$ingredient) {
          $proportion = $ingredient['proportion'];
          return  $carry + $ingredient['price_by_unit'] * $proportion;
        });

        $potionParsed['price'] = $price;
        return $potionParsed;
      });

      return response()->json([
        'potions' => $listPotionsParsed
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Potion  $potion
     * @return \Illuminate\Http\Response
     */
    public function show(Potion $potion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Potion  $potion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Potion $potion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Potion  $potion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Potion $potion)
    {
        //
    }
}
