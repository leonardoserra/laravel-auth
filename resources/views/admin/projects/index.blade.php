@extends('layouts.admin')
@section('page-title', 'Lista Projects')
@section('content')
      <div class="col-10">

            <table class="table">
                  <thead>
                        <tr>
                              <th scope="col">#</th>
                              <th scope="col">Title</th>
                              <th scope="col">Description</th>
                              <th scope="col">Slug</th>
                              <th scope="col">Azione</th>
                        </tr>
                  </thead>
                  <tbody>
                        @foreach ($projects as $project)
                              <tr>
                                    <th scope="row">{{ $project->id }}</th>
                                    <td>{{ $project->title }}</td>
                                    <td>{{ $project->description }}</td>
                                    <td>{{ $project->slug }}</td>
                                    <td>
                                          <a class="btn btn-primary"
                                                href="{{ route('admin.projects.show', ['project' => $project->slug]) }}">Vedi</a>
                                          <a class="btn btn-warning"
                                                href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}">Vedi</a>
                                          <a class="btn btn-danger"
                                                href="{{ route('admin.projects.destroy', ['project' => $project->slug]) }}">Vedi</a>
                                    </td>
                              </tr>
                        @endforeach
                  </tbody>
            </table>

      </div>
@endsection
