@extends('layouts.admin')

@section('content')
    <h1>Lista Progetti</h1>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Slug</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>
                      <a href="{{ route('admin.projects.show', $project) }} " class="btn btn-success">Info</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
      </table>
      <div class="m2">
        <a href=" {{ route('admin.projects.create') }} " class="btn btn-secondary">Aggiungi un progetto</a>
      </div>
@endsection