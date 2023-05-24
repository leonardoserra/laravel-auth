@extends('layouts.admin')
@section('page-title', "Modifica $project->title")

@section('content')
      <div class="col-10 mt-5">
            <form method="POST" action="{{ route('admin.projects.update', ['project' => $project->slug]) }}">

                  @csrf
                  @method('PUT')
                  <div class="form-floating mb-3">
                        <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                              id="title" placeholder="Inserisci il titolo del progetto..."
                              value="{{ old('title', $project->title) }}">
                        <label for="title">Titolo</label>
                  </div>
                  @error('title')
                        <div class="invalid-feedback">
                              {{ $message }}
                        </div>
                  @enderror

                  <div class="form-floating mb-3">
                        <input name="image_src" type="text" class="form-control @error('image_src') is-invalid @enderror"
                              id="image_src" placeholder="Inserisci un url valido per l'immagine..."
                              value="{{ old('image_src', $project->image_url) }}">
                        <label for="image_src">Url Immagine</label>
                  </div>
                  @error('image_src')
                        <div class="invalid-feedback">
                              {{ $message }}
                        </div>
                  @enderror

                  <div class="form-floating mb-3">
                        <input name="description" type="text"
                              class="form-control @error('description') is-invalid @enderror" id="description"
                              placeholder="Inserisci il titolo del progetto"
                              value="{{ old('image_src', $project->description) }}">
                        <label for="description">Descrizione</label>
                  </div>

                  @error('description')
                        <div class="invalid-feedback">
                              {{ $message }}
                        </div>
                  @enderror


                  <button class="btn btn-warning" type="submit">Applica Modifiche</button>
            </form>

      </div>
@endsection
