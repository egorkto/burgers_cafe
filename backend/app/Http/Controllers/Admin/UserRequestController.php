<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest\IndexRequest;
use App\Models\UserRequest;
use Symfony\Component\HttpFoundation\Request;

class UserRequestController extends Controller
{
    public function index(IndexRequest $request)
    {
        $validated = $request->validated();
        $query = UserRequest::query();
        if ($search = $validated['search'] ?? null) {
            $query->where('name', 'like', "%{$search}%")->orWhere('message', 'like', "%{$search}%");
        }
        $sortingColumn = 'created_at';
        $direction = isset($validated['desc_sort']) ? 'desc' : 'asc';
        if ($sortOption = $validated['sort_by'] ?? null) {
            switch ($sortOption) {
                case 'name':
                    $sortingColumn = 'name';
                    break;
                case 'message':
                    $sortingColumn = 'message';
                    break;
                case 'date':
                default:
                    $sortingColumn = 'created_at';
                    break;
            }
        }
        $query->orderBy($sortingColumn, $direction);
        $requests = $query->paginate(15);
        return view('user-request.index', compact('requests'));
    }

    public function store() {}

    public function show(UserRequest $request)
    {
        return view('user-request.show', compact('request'));
    }
}
