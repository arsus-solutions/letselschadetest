<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function show(Request $request)
    {
        $categories = [
            [
                'id' => 'verkeersongeval',
                'title' => 'Verkeersongeval',
                'description' => 'Heeft u letsel opgelopen bij een verkeersongeval?',
                'image' => 'categories/verkeersongeval.jpg'
            ],
            [
                'id' => 'bedrijfsongeval',
                'title' => 'Bedrijfsongeval',
                'description' => 'Bent u gewond geraakt tijdens uw werk?',
                'image' => 'categories/bedrijfsongeval.jpg'
            ],
            [
                'id' => 'ongeval-door-dieren',
                'title' => 'Ongeval door dieren',
                'description' => 'Heeft u letsel opgelopen door een dier?',
                'image' => 'categories/dieren.jpg'
            ],
            [
                'id' => 'ongeval-door-wegdek',
                'title' => 'Ongeval door wegdek',
                'description' => 'Bent u gevallen door een slecht wegdek?',
                'image' => 'categories/wegdek.jpg'
            ]
        ];

        $selectedCategory = $request->query('category');
        
        return view('form', [
            'categories' => $categories,
            'selectedCategory' => $selectedCategory
        ]);
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'description' => 'required|string|max:1000',
            'category' => 'required|string|in:verkeersongeval,bedrijfsongeval,ongeval-door-dieren,ongeval-door-wegdek'
        ]);

        // Here you would typically:
        // 1. Save to database
        // 2. Send notification email
        // 3. etc.

        return redirect()
            ->route('form', ['category' => $request->category])
            ->with('success', 'Uw melding is succesvol verzonden. Wij nemen zo spoedig mogelijk contact met u op.');
    }
} 