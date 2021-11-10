<div class="table-responsive">
    <table class="table" id="travel-table">
        <thead>
            <tr>
                <th>Place</th>
        <th>Country</th>
      
        <th>Date</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($travel as $travel)
            <tr>
                <td>{{ $travel->Place }}</td>
            <td>{{ $travel->Country }}</td>
            
            <td>{{ $travel->date }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['travel.destroy', $travel->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('travel.show', [$travel->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('travel.edit', [$travel->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
