<?php

namespace App\Http\Controllers\Api;

use App\Models\Client;
use App\Models\Potion;
use App\Models\Sale;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Controller;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientCollection = Client::with(['sales', 'sales.potions' , 'sales.potions.ingredients']) ->get();

        $listClientsParsed = $clientCollection->map(function ($client) {
            $clientParsed = $client->only(['id', 'name', 'sales']);

            $clientParsed['sales'] = $client->sales->map(function ($sale) {
                $saleParsed = $sale->only(['id', 'date']);

                $saleParsed['potions'] = $sale->potions->map(function ($potion) {
                    $potionParsed = $potion->only(['id', 'name']);

                    $potionParsed['amount'] = $potion->pivot->amount;

                    $potionParsed['ingredients'] = $potion->ingredients->map(function ($ingredient) {
                        $ingredientParsed = $ingredient->only(['id', 'name', 'price_by_unit']);
                        $ingredientParsed['proportion'] = $ingredient->pivot->proportion;
                        return $ingredientParsed;
                    });

                    return $potionParsed;
                });
                return $saleParsed;
            });
            return $clientParsed;
        });

        return response()->json([
      'clients' => $listClientsParsed
    ]);
    }


    public function buy(Request $request)
    {
        $clientId = null;
        $potionId = null;
        $client   = null;
        $potion   = null;
        $amount   = 1;
        $now      = date("Y-m-d H:i:s", strtotime('now'));
        $date     = $now;


        if ($request->has('client_id')) {
            $clientId = $request->client_id;
        } else {
            return response()->json([
              'msj'    => "client_id is required",
              'errors' => true], 400);
        }


        if ($request->has('potion_id')) {
            $potionId = $request->potion_id;
        } else {
            return response()->json([
              'msj'    => "potion_id is required",
              'errors' => true], 400);
        }


        if ($request->has('amount')) {
            $amount = $request->amount;
        }

        if ($request->has('date')) {
            $date = $request->date;
        }


        try {
            $client = Client::findOrFail($clientId);
            $potion = Potion::findOrFail($potionId);
            $sale   = new Sale();

            $sale->date = $date;
            $client->sales()->save($sale);
            $sale->save();
            $sale->potions()->attach($potionId, ['amount' => $amount, 'created_at' => $now, 'updated_at' => $now ]);

            return response()->json([
              'client' => $client,
              'potion' => $potion,
              'sale'   => $sale,
              ]);

        } catch (QueryException $e) {
            return response()->json([
                'errors' => true,
                'msg'    => $e->getMessage(),
            ], 400);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'errors' => true,
                'msg'    => $e->getMessage(),
            ], 404);
        }
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
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
