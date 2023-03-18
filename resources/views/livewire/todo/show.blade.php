{{-- <div>
    <table class="table-auto w-full">
        <thead>
        <tr>
            <th class="px-4 py-2">Item</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2">Actions</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($list as $item)
            <tr @if ($loop->even)class="bg-grey"@endif>
                <td class="border px-4 py-2">{{ $item->description }}</td>
                <td class="border px-4 py-2">@if ($item->done)Done @else To Do @endif</td>
                <td class="border px-4 py-2">
                    @if ($item->done)
                        <button wire:click="markAsToDo({{ $item->id }})" class="bg-red-100 text-red-600 px-6 rounded-full">
                            Mark as "To Do"
                        </button>
                    @else
                        <button wire:click="markAsDone({{ $item->id }})" class="bg-gray-800 text-white px-6 rounded-full">
                            Mark as "Done"
                        </button>
                    @endif

                    <button wire:click="deleteItem({{ $item->id }})" class="bg-red-100 text-red-600 px-6 rounded-full">
                        Delete Permanently
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
 --}}

<div class="row rounded bg-white">
    <div class=" col-12">
        <ul class=" list-group" id="list">
            @if ($list->count() == 0)
                <h1>No Items Found</h1>
            @endif
            @foreach ($list as $item)
                @if ($item->user_id == Auth::user()->id)
                    <li class="my-3 py-3 shadow list-group-item">
                        <div class="row">
                            <div class="col-1">
                                <input type="checkbox" name="" id="" wire:click="markAsDone({{ $item->id }})">
                            </div>
                            <div class="col-5">
                                <span class="h4">
                                    {{ $item->description }}
                                </span>
                            </div>
                            <div class="col-3">
                                <span class="h4">
                                    @if ($item->done)
                                        Done
                                    @else
                                        To Do
                                    @endif
                                </span>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-success">Edit</button>
                                <button wire:click="deleteItem({{ $item->id }})" class="btn btn-danger">Delete</button>
                            </div>

                        </div>
                    </li>
                @endif
            @endforeach

{{--
            <li class=" my-3 py-3 shadow list-group-item " id="list${listNum}">
                <div class="row">
                    <div class="col-1">
                        <input class="" type="checkbox" id="check${listNum}" onclick="done(${listNum})">
                    </div>
                    <div class="col-6">
                        <span class=" h4" id="text${listNum}"> ${inputText} </span>
                    </div>
                    <div class="col-4">
                        <button class="btn btn-dark" onclick="deleteList(${listNum})">Delete</button>
                        <button class="btn btn-dark" onclick="editList(${listNum})">Edit</button>
                    </div>
                </div>
            </li> --}}
        </ul>
    </div>
</div>
