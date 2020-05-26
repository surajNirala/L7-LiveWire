<?php

namespace App\Http\Livewire;

use App\Comment;
use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
    
    public $comments = [
        [
        "creator" => "Suraj Nirala",
        "created_at" => "2 mint ago",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae blanditiis reprehenderit magnam est atque saepe deserunt aspernatur quod architecto vel et nobis laudantium inventore ad, eligendi in modi error dignissimos!",
        ],
    ];

    public function addComment()
    {
        array_unshift($this->comments,[
            "creator" => "Raj",
            "created_at" => Carbon::now()->diffForHumans(),
            "body" => $this->newComment,
        ]);
        $this->newComment = "";
    }
    public $newComment;
    public function render()
    {
       
        return view('livewire.comments');
    }
}
