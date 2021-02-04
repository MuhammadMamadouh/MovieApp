<div class="w3_search"
     x-data="{ isOpen: true }"
     @click.away="isOpen = false"
     @focus="isOpen = true"
     @keydown="isOpen = true"
>

    <input wire:model.debouce.500="search" type="text" name="Search" placeholder="Search" required="">
    <input type="submit" value="Go">

    <div class="card" style="width: 22rem;" x-show="isOpen" @keydown.escape.window="isOpen = flase">
        <ul class="list-group list-group-flush">
            @foreach($searchResults as $result)
                @if($loop->index < 3)
                    <li class="list-group-item">
                        <a href="{{route('movies.show', $result['id'])}}"> {{ $result['title']}}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
