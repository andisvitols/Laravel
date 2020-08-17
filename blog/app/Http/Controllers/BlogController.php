<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;

class BlogController extends BaseController
{
use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

private $phrases = [
    // 'header' => 'Blog page',
    'user_name' => 'Andis',
//     'pop_posts' => [
//         ['name' => 'Lorem', 'pic' => 'workshop.jpg', 'txt' => 'Sed mattis nunc'],
//         ['name' => 'Ipsum', 'pic' => 'gondol.jpg', 'txt' => 'Praes tinci sed'],
//         ['name' => 'Dorum', 'pic' => 'skies.jpg', 'txt' => 'Ultricies conguec'],
//         ['name' => 'Mingsum', 'pic' => 'rock.jpg', 'txt' => 'Lorem ipsum dipsum']
//     ]
];

    public function main()
    {
    $this->phrases['posts'] = DB::select('SELECT * FROM posts ORDER BY created_at DESC LIMIT 2');
    $this->phrases['pop_posts'] = DB::select('SELECT * FROM posts ORDER BY rating DESC LIMIT 4');
    $this->phrases['header'] = 'My Blog';
    return view('blog', ['initial'=> $this->phrases]);
    }

    public function cv()
    {
        $this->phrases['personal_profile'] = DB::select('SELECT * FROM personal_profile ORDER BY created_at');
        $this->phrases['work_experience'] = DB::select('SELECT * FROM work_experience ORDER BY id DESC');
        $this->phrases['key_skills'] = DB::select('SELECT * FROM key_skills ORDER BY id ASC');
        $this->phrases['education'] = DB::select('SELECT * FROM education ORDER BY id DESC');
        return view('cv',['initial'=> $this->phrases]);
    }

    public function tm()
    {
        return view('tm',['initial'=> $this->phrases]);
    }

    public function cvBackup()
    {
        return view('cvBackup',['initial'=> $this->phrases]);
    }
}