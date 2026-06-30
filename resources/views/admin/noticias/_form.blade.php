@if ($errors->any())
    <div class="mb-10 text-red-500">
        <p class="font-bold">Verifique os erros abaixo:</p>
        <ul>
            @foreach ($errors->all() as $erro)
                <li>- {{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mb-5">
    <label for="categoria_id" class="form-label">Categoria *</label>
    <select name="categoria_id" id="categoria_id" class="form-control">
        <option></option>
        @foreach ($categorias as $id => $nome)
            <option {{ old('categoria_id') == $id ? 'selected' : '' }} value="{{ $id }}">{{ $nome }}
            </option>
        @endforeach


    </select>
</div>

<div class="mb-5">
    <label for="titulo" class="form-label">Título *</label>
    <input type="text" name="titulo" value="{{ old('titulo') }}" id="titulo" class="form-control">
</div>

<div class="mb-5">
    <label for="resumo" class="form-label">Resumo *</label>
    <textarea name="resumo" id="resumo" rows="3" class="form-control">{{ old('resumo') }}</textarea>
</div>

<div class="mb-5">
    <label for="conteudo" class="form-label">Conteúdo *</label>
    <textarea name="conteudo" id="conteudo" rows="10" class="form-control">{{ old('conteudo') }}</textarea>
</div>

<div class="mb-5">
    <label for="imagem" class="form-label">Imagem Capa *</label>
    <input type="file" name="imagem" id="imagem" accept="image/*" class="form-control">
    <p>JPG e PNG no máximo 2MB</p>
</div>

<div class="mb-5">
    <label for="situacao" class="form-label">Situação</label>
    <div id="situacao" class="flex gap-5">
        <label>
            <input type="radio" name="ativo" value="1" {{ old('ativo') == 1 ? 'checked' : '' }}>
            Publicado
        </label>
        <label>
            <input type="radio" name="ativo" value="0" {{ old('ativo') == 0 ? 'checked' : '' }}>
            Rascunho
        </label>
    </div>
</div>

<div class="mb-5">
    <button type="submit" class="bg-slate-950 text-white px-4 py-2 rounded">Salvar</button>
    <a href="{{ route('admin.noticias.index') }}"
        class="bg-slate-200 text-slate-800 px-4 py-2 rounded inline-block">Cancelard</a>
</div>
