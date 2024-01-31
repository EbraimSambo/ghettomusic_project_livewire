<form wire:submit="save">
    <div class="container">
        <div class="input-group">
            <div class="input">
                <label for="title">Título</label>
                <input wire:model="form.title" type="text" id="title">
                @error('form.title')
                    <span class="danger"> {{{$message}}} </span>
                @enderror
            </div>
            <div class="input">
                <label for="description">Descrição</label>
                <textarea wire:model="form.description" id="description" > </textarea>
                @error('form.description')
                    <span class="danger"> {{{$message}}} </span>
                @enderror
            </div>
            <div class="input">
                <label for="artist">Artista</label>
                <input wire:model="form.artist" type="text" id="artist" >
                @error('form.artist')
                    <span class="danger"> {{{$message}}} </span>
                @enderror
            </div>
            @if ($form->cover_path)
            <div class="covershow">
                <h3>Capa Carregada:</h3>
                <div class="cover">
                    <img src="{{ $form->cover_path->temporaryUrl() }}">                       
                </div>
            </div>
            @endif
            <div class="input file">
                <label for="cover_path">
                    <span class="material-symbols-outlined">
                        add_photo_alternate
                    </span>
                    <span>Clique ou solte uma imagem aqui</span>
                </label>
                <input type="file" wire:model="form.cover_path" id="cover_path" >
                
            </div>
            @error('form.cover_path')
                <span class="danger"> {{{$message}}} </span>
            @enderror
            <div class="input file">
                <label for="audio_path">
                    <span class="material-symbols-outlined">
                        play_circle
                    </span>
                    <span>Clique ou solte um audio aqui</span>
                </label>
                <input wire:model="form.audio_path" type="file" id="audio_path" >
            </div>
            @error('form.audio_path')
                <span class="danger"> {{{$message}}} </span>
            @enderror
            <div class="input">
                <label for="category">Título</label>
                <select wire:model="form.category" id="category">
                    <option value="null">Escolher Categória</option>
                    @foreach (\App\Enums\CategoresType::cases() as $category)
                        <option value="{{$category->value}}"> {{$category->value}} </option>
                    @endforeach
                </select>
                @error('form.category')
                <span class="danger"> {{{$message}}} </span>
            @enderror
            </div>

            <div class="input button">
                <button type="submit" class="btn">Salvar</button>
            </div>
        </div>

        <div class="pub">
            <div class="cover">
                <img src="https://images.pexels.com/photos/802195/pexels-photo-802195.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
            </div>        
        </div>

    </div>
</form>