@extends('layouts.admin')

@section('content')
      <div class="col-10">

            <table class="table">
                  <thead>
                        <tr>
                              <th scope="col">#</th>
                              <th scope="col">Title</th>
                              <th scope="col">Description</th>
                              <th scope="col">Slug</th>
                        </tr>
                  </thead>
                  <tbody>
                        @foreach ($projects as $project)
                              <tr>
                                    <th scope="row">{{ $project->id }}</th>
                                    <td>{{ $project->title }}</td>
                                    <td>{{ $project->description }}</td>
                                    <td>{{ $project->slug }}</td>
                              </tr>
                        @endforeach
                  </tbody>
            </table>
      </div>
@endsection
