<?php

namespace App\Http\Controllers;

use App\Models\Links;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    // Store a new link
    public function store(Request $request)
    {
        $urldata = [
            'url' => $request->url, // Ensure the input name is 'url'
        ];

        Links::create($urldata);
        return redirect()->route('home');
    }

    // Fetch all links
    public function getall()
    {
        $links = Links::all();
        return response()->json([
            'status' => 200,
            'links' => $links  // Adjust the key to lowercase 'links' for consistency
        ]);
    }

    // Edit link
    public function edit($id)
    {
        $link = Links::find($id);

        if ($link) {
            return response()->json([
                'status' => 200,
                'link' => $link // Consistent key
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Link not found'
            ]);
        }
    }

    // Update a link
    public function update(Request $request)
    {
        $link = Links::find($request->id);

        if ($link) {
            $link->url = $request->url; // Correct the field name to 'url'
            $link->save();

            return response()->json([
                'status' => 200,
                'message' => 'Link updated successfully'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Link not found'
            ]);
        }
    }

    // Delete a link
    public function delete(Request $request)
    {
        $link = Links::find($request->id);

        if ($link && $link->delete()) {
            return response()->json([
                'status' => 200,
                'message' => 'Link deleted successfully.'
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'Failed to delete Link.'
            ]);
        }
    }
}
