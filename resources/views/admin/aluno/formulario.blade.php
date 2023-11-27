{{-- Nome --}}

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Nome do Aluno') }}</label>
    <div>
        <input type="text" id="nome" name="nome" value="{{ isset($aluno) ? $aluno->nome : old('nome') }}" class="form-control @error('nome') is-invalid @enderror" placeholder="Nome do Aluno" required>
        @error('nome')
        <span class="invalid-feedback" role="alert">
            <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

{{-- Descricao --}}

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Descricao do Aluno') }}</label>
    <div>
        <textarea id="descricao" name="descricao" class="form-control @error('descricao') is-invalid @enderror" placeholder="Escreva uma descrição curta sobre o aluno" required>{{ isset($aluno) ? $aluno->descricao : old('descricao') }}</textarea>
        @error('descricao')
        <span class="invalid-feedback" role="alert">
            <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

{{-- Esta formado? --}}

<div class="row">
    <label for="formado" class="col-sm-2 col-form-label">{{ __('Está formado?') }}</label>
    <div>
        <div class="caixa-radio">
            <input type="radio" id="formado-yes" name="formado" value="1" data-expected-info="formado" {{ isset($aluno) && $aluno->formado == 1 ? 'checked' : '' }} class="form-control @error('formado') is-invalid @enderror">
            <label for="formado-yes">Sim</label>
            <input type="radio" id="formado-no" name="formado" value="0" data-expected-info="formado" {{ isset($aluno) && $aluno->formado == 0 ? 'checked' : '' }} class="form-control @error('formado') is-invalid @enderror">
            <label for="formado-no">Nao</label>
        </div>
        @error('formado')
        <span class="invalid-feedback" role="alert">
            <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

{{-- Está contratado? --}}

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Está contratado?') }}</label>
    <div>
        <!-- <input type="checkbox" id="estáContratado" name="contratado" value="1" data-expected-info="contratado" class="form-control @error('contratado') is-invalid @enderror" required> -->
        <div class="caixa-radio">
            <input type="radio" id="contratado-yes" name="contratado" value="1" data-expected-info="contratado" {{ isset($aluno) && $aluno->contratado == 1 ? 'checked' : '' }} class="form-control @error('contratado') is-invalid @enderror">
            <label for="contratado-yes">Sim</label>
            <input type="radio" id="contratado-no" name="contratado" value="0" data-expected-info="contratado" {{ isset($aluno) && $aluno->contratado == 0 ? 'checked' : '' }} class="form-control @error('contratado') is-invalid @enderror">
            <label for="contratado-no">Nao</label>
        </div>


        @error('contratado')
        <span class="invalid-feedback" role="alert">
            <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

{{-- Curso --}}
<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Curso') }}</label>
    <div class="">
        <select id="cursos_id" name="cursos_id" class="form-control @error('cursos_id') is-invalid @enderror" required>
            <option value="">--- Selecione um Curso ---</option>
            @isset($cursos)
            @foreach ($cursos as $curso)
            <option @if (isset($aluno) && $aluno->cursos_id == $curso->id) selected @endif value="{{ $curso->id }}">
                {{ $curso->curso }}
            </option>
            @endforeach
            @endisset
        </select>
        @error('cursos_id')
        <span class="invalid-feedback" role="alert">
            <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

{{-- Imagem --}}
<div class="row">
    <div class="col-sm-2 col-form-label">
        <label class="@if (!isset($aluno)) required @endif" for="imagem">Imagens</label>
        <input type="file" name="imagem" class="form-control" accept="image/*" @if (!isset($aluno)) required @endif>
    </div>
</div>