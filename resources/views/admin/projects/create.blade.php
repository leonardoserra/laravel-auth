@extends('layouts.admin')

@section('content')
      <div class="col-10 mt-5">
            <form action="route('admin.projects.store')" method="POST">
                  @csrf
                  <div class="form-floating mb-3">
                        <input name="title" type="text" class="form-control" id="title"
                              placeholder="Inserisci il titolo del progetto...">
                        <label for="title">Titolo</label>
                  </div>
                  <div class="form-floating mb-3">
                        <input name="image_src" type="text" class="form-control" id="image_src"
                              placeholder="Inserisci un url valido per l'immagine...">
                        <label for="image_src">Url Immagine</label>
                  </div>
                  <div class="form-floating mb-3">
                        <input name="description" type="text" class="form-control" id="description"
                              placeholder="Inserisci il titolo del progetto">
                        <label for="description">Descrizione</label>
                  </div>
                  <button class="btn btn-success" type="submit">CREA</button>
            </form>

      </div>
@endsection
