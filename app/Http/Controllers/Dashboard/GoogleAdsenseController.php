<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateGoogleAdsenseRequest;
use App\Models\GoogleAdsense;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;

class GoogleAdsenseController extends Controller
{
    /**
     * @return Renderable
     */
    public function index(): Renderable
    {
        $googleAdsense = GoogleAdsense::all();
        return view('panel.admin.google_adsense.index', compact('googleAdsense'));
    }

    /**
     * @param int $id
     * @return Renderable|RedirectResponse
     */
    public function edit(int $id): Renderable|RedirectResponse
    {
        $googleAdsense = GoogleAdsense::find($id);
        if ($googleAdsense) {
            return view('panel.admin.google_adsense.edit', compact('googleAdsense'));
        } else {
            return redirect()->back();
        }
    }

    /**
     * @param int $id
     * @param UpdateGoogleAdsenseRequest $request
     * @return RedirectResponse
     */
    public function update(int $id, UpdateGoogleAdsenseRequest $request): RedirectResponse
    {
        $googleAdsense = GoogleAdsense::find($id);
        if ($googleAdsense) {
            $googleAdsense->code = $request->code;
            $googleAdsense->status = $request->status ? true : false;
            $googleAdsense->save();

            return redirect()->route('dashboard.admin.adsense.index')->with('success', 'updated');
        }
        return redirect()->back();
    }
}
