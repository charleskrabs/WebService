<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="background-color: #2C3E50;">
                <input type="text"  class="form-control" placeholder="Rechercher" wire:model="searchTerm" style="border: solid #1ABC9C 2px;"/>
                <table class="table table-bordered" style="background-color: #34495E; margin: 10px 0 10px 0; color:white;">
                    <tr style="background-color: #2C3E50;">
                        <th>First</th>
                        <th>Last</th>
                        <th>Street</th>
                        <th>City</th>
                        <th>Zip</th>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <td>
                                {{ $user->first }}
                            </td>
                            <td>
                                {{ $user->last }}
                            </td>
                            <td>
                                {{$user->street}}
                            </td>
                            <td>
                                {{$user->city}}
                            </td>
                            <td>
                                {{$user->zip}}
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $users->links('livewire.livewire-pagination') }}
            </div>
        </div>
    </div>
</div>
