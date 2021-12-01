<?php
namespace App\Http\Controllers;
use App\Models\Meal;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;


class MainController extends Controller
{

    public function index() 
    {
        return redirect("/api/lang/en");
    }



    public function switchLocale($locale)
    {
        // set locale
        app()->setLocale($locale);

        $per_page = request('per_page', 10); // default number of meals per page is 10
        $with = explode(",", request('with'));

        $meals = Meal::query();    
            
        if(request('with')) {
            $meals = Meal::with($with);
        }


        // Defining and applying filters: category, ingredients, tags
        if (request()->has('diff_time') && strlen(request('diff_time')) > 0) {
            $meals->where(function($query){
                $query->where('created_at', ">" , Carbon::createFromTimestamp(request('diff_time')))
                ->orWhere('deleted_at', ">" , Carbon::createFromTimestamp(request('diff_time')))
                ->orWhere('updated_at', ">" , Carbon::createFromTimestamp(request('diff_time')));            
            });
        }
            
        if (request()->has('category') && strlen(request('category')) > 0) {
            if (request()->query('category') == "null" || request()->query('category') == "NULL") {
                $meals->whereNull('category_id');
            } elseif (request()->query('category') == "!null" || request()->query('category') == "!NULL") {
                $meals->whereNotNull('category_id');
            } else {
                $meals->whereIn('category_id', explode(',', request('category')))->get();
            }
        }

        if (request()->has('tags') && strlen(request('tags')) > 0) {
            $meals->whereHas('tags', function(Builder $query){
                foreach (explode("," , request('tags')) as $tag) {
                    $query->where('tags.id', $tag);
                }
            })->get();
        }

        if (request()->has('ingredients') && strlen(request('ingredients')) > 0) {
            $meals->whereHas('ingredients', function(Builder $query){
                foreach (explode("," , request('ingredients')) as $ingredient) {
                    $query->where('ingredients.id', $ingredient);
                }
            })->get();
        }

        $meals = $meals->paginate($per_page);
        
        return response()->json($meals);
    }
}