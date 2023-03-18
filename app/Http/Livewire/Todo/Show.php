<?php

namespace App\Http\Livewire\Todo;

use App\Models\TodoItem;
use Livewire\Component;

class Show extends Component
{
    protected $listeners = ['saved'];

    // public $isChecked = false;
    // public $item;

    public function render()
    {
        $list = TodoItem::all()->sortByDesc('created_at');

        // return view('livewire.todo.show', ['item' => $this->item, 'list' => $this->list]);
        // return view('livewire.todo.show', compact('list', 'item'));
        // return view('livewire.todo.show', compact('list'));
        return view('livewire.todo.show', ['list' => $list]);
    }

    public function saved()
    {
        $this->render();
    }

    // public function mount($item)
    // {
    //     $this->item = $item;
    //     $this->isChecked = $item->done;
    // }

    // public function updatedIsChecked($value)
    // {
    //     if ($value) {
    //         $this->markAsDone($this->item->id);
    //     } else {
    //         $this->markAsToDo($this->item->id);
    //     }
    // }

    // public function markAsDone($itemId)
    // {
    //     $item = TodoItem::find($itemId);
    //     $item->done = true;
    //     $item->save();
    // }

    // public function markAsToDo($itemId)
    // {
    //     $item = TodoItem::find($itemId);
    //     $item->done = false;
    //     $item->save();
    // }

    public function markAsDone(TodoItem $item)
    {
        $item->done = true;
        $item->save();
    }

    public function markAsToDo(TodoItem $item)
    {
        $item->done = false;
        $item->save();
    }

    public function deleteItem(TodoItem $item)
    {
        $item->delete();
    }
}
