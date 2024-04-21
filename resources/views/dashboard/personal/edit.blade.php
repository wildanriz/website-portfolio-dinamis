@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route('personal.index')}}" class="btn btn-secondary">
        << BACK</a>
    </div>
    <form action="{{route('personal.update',$data->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="description" class="form-label">Personal</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="description"
                id="description"
                aria-describedby="helpId"
                placeholder="Status"
                value="{{ $data->description }}"
            />
        </div>

        <button class="btn btn-primary" name="simpan" type="sumbit">SAVE</button>
    </form>
@endsection