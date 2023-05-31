{{-- @if ($errors->any())
<div class="error-message" style="color:red";>
    
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif --}}
@foreach ($errors -> all() as $massage)
    <div class="error-message" style="color:red";>   
        <ul>       
                <li>{{ $massage }}</li>
        </ul>
    </div>
@endforeach