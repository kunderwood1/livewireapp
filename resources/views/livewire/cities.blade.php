<div>
    <div>
        <input wire:model="search" type="text" placeholder="Search cities..." />
        <table class="table table-striped table-hover">
            <tr>
                <th>
                    <a href="#" wire:click="doSort('state', 'asc')"> &uarr; </a>
                    State
                    <a href="#" wire:click="doSort('state', 'desc')"> &darr; </a>
                </th>
                <th>
                    <a href="#" wire:click="doSort('name', 'asc')"> &uarr; </a>
                    City
                    <a href="#" wire:click="doSort('name', 'desc')"> &darr; </a>
                </th>
                <th>
                    <a href="#" wire:click="doSort('population_2010', 'asc')"> &uarr; </a>
                    2010 Population
                    <a href="#" wire:click="doSort('population_2010', 'desc')"> &darr; </a>
                </th>
                <th>
                    <a href="#" wire:click="doSort('population_rank', 'asc')"> &uarr; </a>
                    Population Rank
                    <a href="#" wire:click="doSort('population_rank', 'desc')"> &darr; </a>
                </th>
            </tr>
            @foreach ($cities as $city)
            <tr>
                <td>{{ $city->state }}</td>
                <td>{{ $city->name }}</td>
                <td>{{ $city->population_2010 }}</td>
                <td>{{ $city->population_rank }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
