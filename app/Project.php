<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // more safe to use $fillable
    protected $fillable = [
        'title', 'description'
    ];

    // $guarded = [] is less safe.
    // protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($description)
    {
        // --THIS WORKS--
        $task = new Task;
        $task->project_id = $this->id;
        $task->description = $description;
        $task->save();


        // --THIS DOESN'T WORK--
        // return Task::create([
        //     'project_id' => $this->id,
        //     'description' => $description
        // ]);

        // --THIS DOESN'T WORK--
        // $this->tasks()->create(compact('description'));
    }
}
