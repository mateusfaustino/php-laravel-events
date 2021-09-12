@extends('layouts.main')
@section('title',"criar")
@section('styles')
<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/navbar.css">
<link rel="stylesheet" href="../css/create/navbar.css">
<link rel="stylesheet" href="../css/create/create.css">
<link rel="stylesheet" href="../css/globals.css">
@endsection

@section('content')
<section class='section_create'>

    <h1 class='section_create_title'>
        Crie um novo evento
    </h1>
    <form enctype='multipart/form-data' action="/events" class='create_form' method='POST'>
        @csrf
        <div class="form-group">
            <label for="image">
                Imagem do evento*
            </label>
            <input type="file" name='image'>
        </div>
        <div class="form-group">
            <label for="title">
                Título do evento*
            </label>
            <input name='title' placeholder="digite o nome do evento" id='title'class='create_input' type="text">
        </div>
        <div class="form-group">
            <label for="city">
                Cidade*
            </label>
            <input name='city' placeholder="em que cidade ocorrerá o evento?" id='city' class='create_input' type="text">
        </div>
        <div class="form-group private">
            <label for="private">
                O evento é privado?*
            </label>
            <div class='private_options'>
                <input type="radio" id="javascript" name="private" value="1"><span>sim</span>  
                <input type="radio" id="javascript" name="private" value="0"><span>não</span>
            </div>
        </div>
        <div class="form-group">
            <label for="description">
                Descrição*
            </label>
            <textarea name='description' placeholder="sobre o que este evento será?" id='description' class='create_input' type="text" cols="30" rows="10"></textarea>     
        </div>
        <div class="form-group">
            <label for="items">
                Adicione itens de infraestrutura:
            </label>
            <br>
            <div class="form-group items">
                <input type="checkbox" name="items[]" value="cadeiras" > Cadeiras
            </div>
            <div class="form-group items">
                <input type="checkbox" name="items[]" value="palco" > Palco
            </div>
            <div class="form-group items">
                <input type="checkbox" name="items[]" value="cerveja gratis" > Cerveja Gratis
            </div>
            <div class="form-group items">
                <input type="checkbox" name="items[]" value="open food" > Open Food
            </div>
            <div class="form-group items">
                <input type="checkbox" name="items[]" value="brindes" > Brindes
            </div>
            
        </div>
        <input class='create_btn' type="submit">
    </form>
</section>
@stop